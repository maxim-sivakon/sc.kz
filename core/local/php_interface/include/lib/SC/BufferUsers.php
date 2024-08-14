<?php

namespace Vector;

use \Bitrix\Main\Loader,
    \Bitrix\Main\UI\PageNavigation,
    \Bitrix\Sale\ResultSerializable;

use \Vector\History,
    \Vector\User,
    \Vector\Deal,
    \Vector\Contact,
    \Vector\Company;

/*
 * use singleton pattern
 * */
class SaveTimeLineIB
{

    public const IBLOCK_TYPE = 'TIMELINE';
    public const IBLOCK_CODE = 'TIMELINE_IB';
    protected $IBLOCK_ID = 0;
    private static $instance;

    /**
     * Проверяем на наличие тип инфоблока и инфоблок.
     */
    function __construct()
    {
        if (\CModule::IncludeModule("iblock")) {
            if (!$this->CheckTimeLineIBType() && !$this->CheckTimeLineIB()) {
                throw new \Exception('Не смог проверить тип инфоблока, инфоблок и прилегающие к нему свойства!');
            }
        }
    }

    /**
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * @return void
     */
    private function __wakeup()
    {
    }

    /**
     * @return \Vector\SaveTimeLineIB
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * Получаем id инфоблока по коду self::IBLOCK_CODE
     *
     * @return int
     */
    function getIdIB(): int
    {
        $result = 0;
        global $DB;

        $listIblock = $DB->Query("select * from  b_iblock");
        while ($row = $listIblock->Fetch()) {
            if ($row["CODE"] == self::IBLOCK_CODE) {
                $result = $row["ID"];
            }
        }
        return $result;
    }

    /**
     * Генерируем рандомные строки, для названия элементов
     *
     * @param   int  $length
     *
     * @return string
     * @throws \Exception
     */
    function random_string(int $length = 0): string
    {
        $str = random_bytes($length);
        $str = base64_encode($str);
        $str = str_replace(["+", "/", "="], "", $str);
        $str = substr($str, 0, $length);

        return $str;
    }

    /**
     * Создаем столбцы для bitrix:main.ui.grid
     *
     * @return array[]
     */
    public function createColumnGrid(): array
    {
        $columns = [
            ['id' => 'PROPERTY_CREATED', 'name' => 'Дата контакта', 'sort' => 'CREATED', 'default' => true],
            ['id' => 'PROPERTY_COMPANY_NAME', 'name' => 'Компания', 'sort' => 'COMPANY_NAME', 'default' => true],
            ['id' => 'PROPERTY_COMPANY_ID', 'name' => 'ID Компании', 'sort' => 'COMPANY_ID', 'default' => true],
            ['id' => 'PROPERTY_CONTACTS', 'name' => 'Контакт', 'sort' => 'CONTACTS', 'default' => true],
            ['id' => 'PROPERTY_DEAL', 'name' => 'Сделка', 'sort' => 'DEAL', 'default' => true],
            ['id' => 'PROPERTY_UF_CRM_1635934318396', 'name' => 'Код GAI', 'sort' => false, 'default' => true],
            ['id' => 'PROPERTY_UF_CRM_1632047349', 'name' => 'Город', 'sort' => false, 'default' => true],
            ['id' => 'PROPERTY_ASSIGNED_BY_ID', 'name' => 'Ответственный', 'sort' => false, 'default' => true],
            ['id' => 'PROPERTY_TYPE', 'name' => 'Тип контакта', 'sort' => 'TYPE', 'default' => true],
            ['id' => 'PROPERTY_COMMENT', 'name' => 'Описание', 'sort' => 'COMMENT', 'default' => true],
            ['id' => 'PROPERTY_AUTHOR_ID', 'name' => 'Менеджер', 'sort' => 'AUTHOR_ID', 'default' => true],
        ];

        return $columns;
    }

    /**
     * Указываем пагинацию для bitrix:main.ui.grid
     *
     * @return \Bitrix\Main\UI\PageNavigation
     */
    public function getNavGrid()
    {
        $gridOptions = new \Bitrix\Main\Grid\Options(self::IBLOCK_CODE . '_grid');
        $sort = $gridOptions->GetSorting(['sort' => ['CREATED' => 'DESC'], 'vars' => ['by' => 'by', 'order' => 'order']]);
        $nav_params = $gridOptions->GetNavParams();
        $nav = new PageNavigation(self::IBLOCK_CODE . '_nav');
        $nav->setPageSize($nav_params['nPageSize'] ?? 20)->initFromUri();
        $nav->setRecordCount($this->GetCountElements());
        return $nav;
    }

    /**
     * Инициализация полей фильтра для bitrix:main.ui.filter
     *
     * @return array
     */
    public function filterSettings(): array
    {
        $variants["AUTHOR_ID"] = array_filter(User::getList());
        $variants["COMPANIES_ID"] = Company::getList();
        $variants["DEAL_ID"] = Deal::getList();
        $variants["CONTACT_ID"] = Contact::getList();

        return [
            [
                'id' => 'PROPERTY_CREATED',
                'name' => 'Дата контакта',
                'type' => 'date'
            ],
            [
                'id' => 'PROPERTY_COMPANY_NAME',
                'name' => 'Компания',
                'type' => 'list',
                'items' => $variants['COMPANIES_ID']['NAMED'] ?? [],
                'params' => ['multiple' => 'Y']
            ],
            [
                'id' => 'PROPERTY_COMPANY_ID',
                'name' => 'ID Компании',
                'type' => 'list',
                'items' => $variants['COMPANIES_ID']['ID'] ?? [],
                'params' => ['multiple' => 'Y']
            ],
            [
                'id' => 'PROPERTY_CONTACTS',
                'name' => 'Контакт',
                'type' => 'list',
                'items' => $variants['CONTACT_ID'] ?? [],
                'params' => ['multiple' => 'Y']
            ],
            [
                'id' => 'PROPERTY_DEAL',
                'name' => 'Сделка',
                'type' => 'list',
                'items' => $variants['DEAL_ID'] ?? [],
                'params' => ['multiple' => 'Y']
            ],
            [
                'id' => 'PROPERTY_UF_CRM_1635934318396',
                'name' => 'Код GAI',
                'type' => 'list',
                'items' => $variants['COMPANIES_ID']['UF_CRM_1635934318396'] ?? [],
                'params' => ['multiple' => 'Y']
            ],
            [
                'id' => 'PROPERTY_UF_CRM_1632047349',
                'name' => 'Город',
                'type' => 'list',
                'items' => array_filter($variants['COMPANIES_ID']['UF_CRM_1632047349']) ?? [],
                'params' => ['multiple' => 'Y']
            ],
            [
                'id' => 'PROPERTY_ASSIGNED_BY_ID',
                'name' => 'Ответственный',
                'type' => 'list',
                'items' => $variants['AUTHOR_ID'] ?? [],
                'params' => ['multiple' => 'Y']
            ],
            [
                'id' => 'PROPERTY_TYPE',
                'name' => 'Тип контакта',
                'type' => 'list',
                'items' => [
                    'звонок',
                    'встреча',
                    'комментарий'
                ],
                'params' => ['multiple' => 'Y']
            ],
            [
                'id' => 'PROPERTY_COMMENT',
                'name' => 'Описание'
            ],
            [
                'id' => 'PROPERTY_AUTHOR_ID',
                'name' => 'Менеджер',
                'type' => 'list',
                'items' => $variants['AUTHOR_ID'] ?? [],
                'params' => ['multiple' => 'Y']
            ],

        ];
    }

    public function getRow(array $FilterSettings = []): ?array
    {
        $arResult = [];

        unset($FilterSettings["PRESET_ID"]);
        unset($FilterSettings["FILTER_ID"]);
        unset($FilterSettings["FILTER_APPLIED"]);
        unset($FilterSettings["FIND"]);

        $arSelect = [
            "ID",
            "PROPERTY_CREATED",
            "PROPERTY_COMPANY_NAME",
            "PROPERTY_COMPANY_NAME_VALUE",
            "PROPERTY_COMPANY_ID",
            "PROPERTY_CONTACTS",
            "PROPERTY_CONTACTS_VALUE",
            "PROPERTY_DEAL",
            "PROPERTY_DEAL_VALUE",
            "PROPERTY_UF_CRM_1635934318396",
            "PROPERTY_UF_CRM_1635934318396_VALUE",
            "PROPERTY_UF_CRM_1632047349",
            "PROPERTY_UF_CRM_1632047349_VALUE",
            "PROPERTY_ASSIGNED_BY_ID",
            "PROPERTY_ASSIGNED_BY_ID_VALUE",
            "PROPERTY_TYPE",
            "PROPERTY_COMMENT",
            "PROPERTY_AUTHOR_ID",
            "PROPERTY_AUTHOR_ID_VALUE"
        ];
        $navs = $this->getNavGrid();
        $arNavStartParams = [
            'iNumPage' => ($navs->getOffset() + $navs->getLimit()) / $navs->getLimit(),
            'nPageSize' => $this->getNavGrid()->getPageSize(),
        ];

        $arFilter = array("IBLOCK_ID" => IntVal($this->getIdIB()), "ACTIVE" => "Y", $FilterSettings);
        $res = \CIBlockElement::GetList(array(), $arFilter, false, $arNavStartParams, $arSelect);
        while ($ob = $res->Fetch()) {
            $arResult[]["data"] = [
                "PROPERTY_CREATED" => $ob["PROPERTY_CREATED_VALUE"],
                "PROPERTY_COMPANY_NAME" => $ob["PROPERTY_COMPANY_NAME_VALUE_VALUE"][0],
                "PROPERTY_COMPANY_ID" => $ob["PROPERTY_COMPANY_ID_VALUE"][0],
                "PROPERTY_CONTACTS" => $ob["PROPERTY_CONTACTS_VALUE_VALUE"][0],
                "PROPERTY_DEAL" => $ob["PROPERTY_DEAL_VALUE_VALUE"][0],
                "PROPERTY_UF_CRM_1635934318396" => $ob["PROPERTY_UF_CRM_1635934318396_VALUE_VALUE"][0],
                "PROPERTY_UF_CRM_1632047349" => $ob["PROPERTY_UF_CRM_1632047349_VALUE_VALUE"][0],
                "PROPERTY_ASSIGNED_BY_ID" => $ob["PROPERTY_ASSIGNED_BY_ID_VALUE_VALUE"][0],
                "PROPERTY_TYPE" => $ob["PROPERTY_TYPE_VALUE"],
                "PROPERTY_COMMENT" => $ob["PROPERTY_COMMENT_VALUE"]["TEXT"],
                "PROPERTY_AUTHOR_ID" => $ob["PROPERTY_AUTHOR_ID_VALUE_VALUE"][0]
            ];
        }

        return $arResult;
    }

    public function getRowWithOutPage(array $FilterSettings = []): ?array
    {
        $arResult = [];

        unset($FilterSettings["PRESET_ID"]);
        unset($FilterSettings["FILTER_ID"]);
        unset($FilterSettings["FILTER_APPLIED"]);
        unset($FilterSettings["FIND"]);

        $arSelect = [
            "ID",
            "PROPERTY_CREATED",
            "PROPERTY_COMPANY_NAME",
            "PROPERTY_COMPANY_NAME_VALUE",
            "PROPERTY_COMPANY_ID",
            "PROPERTY_CONTACTS",
            "PROPERTY_CONTACTS_VALUE",
            "PROPERTY_DEAL",
            "PROPERTY_DEAL_VALUE",
            "PROPERTY_UF_CRM_1635934318396",
            "PROPERTY_UF_CRM_1635934318396_VALUE",
            "PROPERTY_UF_CRM_1632047349",
            "PROPERTY_UF_CRM_1632047349_VALUE",
            "PROPERTY_ASSIGNED_BY_ID",
            "PROPERTY_ASSIGNED_BY_ID_VALUE",
            "PROPERTY_TYPE",
            "PROPERTY_COMMENT",
            "PROPERTY_AUTHOR_ID",
            "PROPERTY_AUTHOR_ID_VALUE"
        ];

        $arFilter = array("IBLOCK_ID" => IntVal($this->getIdIB()), "ACTIVE" => "Y", $FilterSettings);
        $res = \CIBlockElement::GetList(array(), $arFilter, false, [], $arSelect);
        while ($ob = $res->Fetch()) {
            $arResult[]["data"] = [
                "PROPERTY_CREATED" => $ob["PROPERTY_CREATED_VALUE"],
                "PROPERTY_COMPANY_NAME" => $ob["PROPERTY_COMPANY_NAME_VALUE_VALUE"][0],
                "PROPERTY_COMPANY_ID" => $ob["PROPERTY_COMPANY_ID_VALUE"][0],
                "PROPERTY_CONTACTS" => $ob["PROPERTY_CONTACTS_VALUE_VALUE"][0],
                "PROPERTY_DEAL" => $ob["PROPERTY_DEAL_VALUE_VALUE"][0],
                "PROPERTY_UF_CRM_1635934318396" => $ob["PROPERTY_UF_CRM_1635934318396_VALUE_VALUE"][0],
                "PROPERTY_UF_CRM_1632047349" => $ob["PROPERTY_UF_CRM_1632047349_VALUE_VALUE"][0],
                "PROPERTY_ASSIGNED_BY_ID" => $ob["PROPERTY_ASSIGNED_BY_ID_VALUE_VALUE"][0],
                "PROPERTY_TYPE" => $ob["PROPERTY_TYPE_VALUE"],
                "PROPERTY_COMMENT" => $ob["PROPERTY_COMMENT_VALUE"]["TEXT"],
                "PROPERTY_AUTHOR_ID" => $ob["PROPERTY_AUTHOR_ID_VALUE_VALUE"][0]
            ];
        }

        return $arResult;
    }

    public function deleteRow(): bool
    {
        $elementsToDelete = [];
        $res = \CIBlockElement::GetList(
            [],
            ["IBLOCK_ID" => IntVal($this->getIdIB())],
            false,
            false,
            ["ID"]
        );
        while ($element = $res->Fetch()) {
            $elementsToDelete[] = $element["ID"];
        }

        $limit = 1000;
        $currentOffset = 0;
        $totalCount = count($elementsToDelete);
        while ($currentOffset < $totalCount) {
            $batchToDelete = array_slice(
                $elementsToDelete,
                $currentOffset,
                $limit
            );
            foreach ($batchToDelete as $elementId) {
                \CIBlockElement::Delete($elementId);
            }
            $currentOffset += $limit;
        }

        return true;
    }

    function __destruct()
    {
    }
}
