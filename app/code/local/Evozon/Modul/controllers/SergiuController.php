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
        echo "INDEX!!!!!!!!!!!";
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
        Mage::throwException('cacaException');
    }

    /**
     * redirects to index. no shit?
     */
    public function thirdAction()
    {
        $this->_redirect('*/*/index');
    }
}
