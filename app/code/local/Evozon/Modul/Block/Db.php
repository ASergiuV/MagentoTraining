<?php

/**
 * Created by PhpStorm.
 * User: sergiuabrudean
 * Date: 27.08.2018
 * Time: 13:21
 */
class Evozon_Modul_Block_Db extends Mage_Core_Block_Template
{
    /**
     * @return string
     */
    public function getMessage()
    {
        $collection = Mage::getModel('evozon_modul/modelu');//->getCollection();
        $collection = $collection->getCollection();
//        $collection->addFieldToSelect('*');
//        $collection->addFieldToFilter('modelumeu_id', ['gt' => 3]);
        Mage::log((string)$collection->getSelect() . PHP_EOL, null, 'system.log');

        return $collection->getItems();
    }
}
