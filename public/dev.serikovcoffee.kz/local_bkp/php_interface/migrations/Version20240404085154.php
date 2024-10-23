<?php

namespace Sprint\Migration;


class Version20240404085154 extends Version
{
    protected $description = "Категории инфоблока - последнее обновление системы";

    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'UPDATES',
            'COMPANY_BOOK'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
)        );
    }

    public function down()
    {
        //your code ...
    }
}
