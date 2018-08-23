<?php
/**
 * Created by PhpStorm.
 * User: sergiuabrudean
 * Date: 22.08.2018
 * Time: 13:38
 */


/**
 * Class Evozon_Modul_SergiuController
 */
class Evozon_Modul_SergiuController extends Mage_Core_Controller_Front_Action
{
    /**
     * this is index, he doesn't do much
     */
    public function indexAction()
    {
        echo "index";
//        $this->loadLayout();
//        $this->renderLayout();
    }


    /**
     *echoes who did this
     */
    public function displayAction()
    {
        $this->loadLayout();
        $this->renderLayout();

    }

    /**
     * pass the param with /decide?id=NUMBER or /decide/id/NUMBER
     * redirects
     */
    public function decideAction()
    {
        $id = $this->getRequest()->getParam('id');
        if ($id % 2 === 0) {
            $this->_redirect('*/*/throw');
        } else {
            $this->_redirect('*/*/third');
        }
    }

    /**
     * @throws Mage_Core_Exception
     */
    public function throwAction()
    {
        try {
            Mage::throwException('macaException');
        } catch (Exception $e) {
            Mage::logException($e);
        }
    }

    /**
     * redirects to index. no shit?
     */
    public function thirdAction()
    {
        echo "ERRRRRORRRRRR!!!";
        Mage::log(__METHOD__);
        Mage::log("enters here", null, 'sergiu.log');
    }

    public function cleanAction()
    {
        Mage::app()->cleanCache();
        echo "Mage::app()->cleanCache() called";
    }
}
