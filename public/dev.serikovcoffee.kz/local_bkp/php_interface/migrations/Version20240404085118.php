<?php

namespace Sprint\Migration;


class Version20240404085118 extends Version
{
    protected $description = "Категории инфоблока - работа в канбан";

    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'KANBAN_INFO',
            'COMPANY_BOOK'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Сделки в работе',
    'CODE' => '',
    'SORT' => '1',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  1 => 
  array (
    'NAME' => 'Работа с заявкой',
    'CODE' => '',
    'SORT' => '2',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  2 => 
  array (
    'NAME' => 'Оформление сделки',
    'CODE' => '',
    'SORT' => '3',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  3 => 
  array (
    'NAME' => 'Логистика',
    'CODE' => '',
    'SORT' => '4',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  4 => 
  array (
    'NAME' => 'Бухгалтерия',
    'CODE' => '',
    'SORT' => '5',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  5 => 
  array (
    'NAME' => 'ИМПОРТ',
    'CODE' => '',
    'SORT' => '6',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  6 => 
  array (
    'NAME' => 'тендер Казахстан',
    'CODE' => '',
    'SORT' => '7',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  7 => 
  array (
    'NAME' => 'тендер Узбекистан',
    'CODE' => '',
    'SORT' => '8',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  8 => 
  array (
    'NAME' => 'Возврат товара',
    'CODE' => '',
    'SORT' => '9',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
