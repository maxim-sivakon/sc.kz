<?php

namespace Sprint\Migration;


class Version20240404085058 extends Version
{
    protected $description = "Категории инфоблока - левое основное меню";

    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'MENU',
            'COMPANY_BOOK'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Главная страница',
    'CODE' => '/',
    'SORT' => '1',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_IBLOCK' => NULL,
  ),
  1 => 
  array (
    'NAME' => 'Аналитика',
    'CODE' => '/analytics/',
    'SORT' => '2',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_IBLOCK' => NULL,
  ),
  2 => 
  array (
    'NAME' => 'Регламент сервисов',
    'CODE' => '/regulations/',
    'SORT' => '3',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_IBLOCK' => '3279',
  ),
  3 => 
  array (
    'NAME' => 'Работа kanban',
    'CODE' => '/kanban/',
    'SORT' => '4',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_IBLOCK' => '3278',
  ),
  4 => 
  array (
    'NAME' => 'Последние обновления',
    'CODE' => '/updates/',
    'SORT' => '5',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_IBLOCK' => NULL,
  ),
  5 => 
  array (
    'NAME' => 'Боты',
    'CODE' => '/bots/',
    'SORT' => '6',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_IBLOCK' => NULL,
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
