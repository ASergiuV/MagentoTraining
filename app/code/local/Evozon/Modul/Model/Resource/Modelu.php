<?php
/**
 * Created by PhpStorm.
 * User: sergiuabrudean
 * Date: 27.08.2018
 * Time: 12:43
 */

class Evozon_Modul_Model_Resource_Modelu extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('evozon_modul/modelu', 'modelumeu_id');
    }
}
