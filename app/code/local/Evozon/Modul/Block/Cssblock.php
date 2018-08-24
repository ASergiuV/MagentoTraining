<?php
/**
 * Created by PhpStorm.
 * User: sergiuabrudean
 * Date: 24.08.2018
 * Time: 15:02
 */

class Evozon_Modul_Block_Cssblock extends Mage_Core_Block_Template
{
    private $name;

    /**
     * @return string
     */
    public function getMessage()
    {
        return "CASTRAVETE!";
    }

    public function setName($string)
    {
        $this->name = $string;
    }
}
