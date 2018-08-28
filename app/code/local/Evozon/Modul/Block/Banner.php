<?php

/**
 * Block to be inserted in header
 *
 * @author   Abrudean Sergiu <sergiu.abrudean@evozon.com>
 * @category Evozon
 * @package  Evozon_Modul
 *
 */
class Evozon_Modul_Block_Banner extends Mage_Core_Block_Template
{
    /**
     *Queries the database, retrieving values which have the same id as the $currentCategory param
     *
     * @param $currentCategory
     *
     * @return string
     * @author   Abrudean Sergiu <sergiu.abrudean@evozon.com>
     */
    public function getBanners($currentCategory)
    {
        $collection = Mage::getModel('evozon_modul/modelu');
        $collection = $collection->getCollection();
        $collection->addFieldToSelect('*');
        $collection->addFieldToFilter('category_id', ['eq' => $currentCategory]);
        Mage::log((string)$collection->getSelect() . PHP_EOL, null, 'system.log');

        return $collection->getItems();
    }
}
