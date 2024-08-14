<?php

namespace Sprint\Migration;


class Version20240404085213 extends Version
{
    protected $description = "Категории инфоблока - список регламентов";

    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'REGULATION',
            'COMPANY_BOOK'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Сервис усиления имиджа компании',
    'CODE' => 'servis-usileniya-imidzha-kompanii',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'Описание Сервис усиления имиджа компании',
    'DESCRIPTION_TYPE' => 'text',
    'UF_COLOR' => NULL,
  ),
  1 => 
  array (
    'NAME' => 'Как правильно вести регламент',
    'CODE' => 'kak-pravilno-vesti-reglament',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'Записи в разделе описывают как вести записи в регламенте',
    'DESCRIPTION_TYPE' => 'text',
    'UF_COLOR' => '3283',
  ),
  2 => 
  array (
    'NAME' => 'Бухгалтерский и налоговый сервис',
    'CODE' => 'bukhgalterskiy-i-nalogovyy-servis',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'Описание Бухгалтерский и налоговый сервис',
    'DESCRIPTION_TYPE' => 'text',
    'UF_COLOR' => '3285',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Сервис подготовки спецификаций',
        'CODE' => 'servis-podgotovki-spetsifikatsiy',
        'SORT' => '1',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
      1 => 
      array (
        'NAME' => 'Сервис обработки документации',
        'CODE' => 'servis-obrabotki-dokumentatsii',
        'SORT' => '2',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
      2 => 
      array (
        'NAME' => 'KZ',
        'CODE' => 'kz',
        'SORT' => '3',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
      3 => 
      array (
        'NAME' => 'РФ',
        'CODE' => 'rf',
        'SORT' => '4',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
    ),
  ),
  3 => 
  array (
    'NAME' => 'Сервис оперативной обработки заявки',
    'CODE' => 'servis-operativnoy-obrabotki-zayavki',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'Описание Сервис оперативной обработки заявки',
    'DESCRIPTION_TYPE' => 'text',
    'UF_COLOR' => '3282',
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => 'Экспортер ВЭД Импорт',
        'CODE' => 'eksporter-ved-import',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
    ),
  ),
  4 => 
  array (
    'NAME' => 'Сервис разработки и автоматизации процессов',
    'CODE' => 'servis-razrabotki-i-avtomatizatsii-protsessov',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'Описание Сервис разработки и автоматизации процессов',
    'DESCRIPTION_TYPE' => 'text',
    'UF_COLOR' => '3283',
  ),
  5 => 
  array (
    'NAME' => 'Юридический сервис',
    'CODE' => 'yuridicheskiy-servis',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'Описание Юридический сервис',
    'DESCRIPTION_TYPE' => 'text',
    'UF_COLOR' => '3285',
  ),
  6 => 
  array (
    'NAME' => 'Сервис увеличения потока заявок',
    'CODE' => 'servis-uvelicheniya-potoka-zayavok',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => 'Описание Сервис увеличения потока заявок',
    'DESCRIPTION_TYPE' => 'text',
    'UF_COLOR' => NULL,
    'CHILDS' => 
    array (
      0 => 
      array (
        'NAME' => '2 Партнер в Новосибисрке',
        'CODE' => '2-partner-v-novosibisrke',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
      1 => 
      array (
        'NAME' => 'Логистический сервис',
        'CODE' => 'logisticheskiy-servis',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
      2 => 
      array (
        'NAME' => 'Сервис ВЭД',
        'CODE' => 'servis-ved',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
      3 => 
      array (
        'NAME' => '1 Партнер в Астане',
        'CODE' => '1-partner-v-astane',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
      4 => 
      array (
        'NAME' => '3 Партнер в Новосибисрке',
        'CODE' => '3-partner-v-novosibisrke',
        'SORT' => '500',
        'ACTIVE' => 'Y',
        'XML_ID' => NULL,
        'DESCRIPTION' => '',
        'DESCRIPTION_TYPE' => 'text',
        'UF_COLOR' => NULL,
      ),
    ),
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
