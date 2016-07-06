<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_RestoreController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
     $this->loadLayout(array('default'));

         $this->_addLeft($this->getLayout()
                ->createBlock('core/text')
                ->setText('
                    <h5>Predefined pages:</h5>
                    <ul>
                        <li>home</li>
                    </ul><br />
                    <h5>Predefined static blocks:</h5>
                    <ul>
                        <li>minimalism_footer</li>
						<li>minimalism_footer_about_us</li>
						<li>minimalism_footer_info</li>
						<li>minimalism_product_custom</li>
						<li>minimalism_slide_1</li>
						<li>minimalism_slide_2</li>
						<li>minimalism_slide_3</li>
						<li>minimalism_slide_4</li>
						<li>minimalism_social_links</li>
                    </ul><br />
                    <strong style="color:red;">To get more info regarding these blocks please read documentation that comes with this theme.</strong>'));
		$this->_addContent($this->getLayout()->createBlock('themeoptionsminimalism/adminhtml_restore_edit'));
		$this->renderLayout();


    }

    public function saveAction() {
        if ($data = $this->getRequest()->getPost()) {
        	
        $stores = $this->getRequest()->getParam('stores', array(0));
        $setup_package = $this->getRequest()->getParam('setup_package', 0);
        $this->_clear = $this->getRequest()->getParam('clear_scope', false);
        $setup_pages = $this->getRequest()->getParam('setup_pages', 0);
        $setup_blocks = $this->getRequest()->getParam('setup_blocks', 0);

        if ($this->_clear) {
            if ( !in_array(0, $this->_stores) )
                $stores[] = 0;
        }

        try {
            foreach ($stores as $store) {
                $scope = ($store ? 'stores' : 'default');
                Mage::getConfig()->saveConfig('design/header/logo_src', 'images/logo.gif', $scope, $store);
                Mage::getConfig()->saveConfig('design/footer/copyright', '&copy; 2012 Magento Demo Store. All Rights Reserved.', $scope, $store);

                if ($setup_package) {
                    Mage::getConfig()->saveConfig('design/package/name', 'default', $scope, $store);
                }
            }
            $defaults = new Varien_Simplexml_Config();
            $defaults->loadFile(Mage::getBaseDir().'/app/code/local/Meigee/ThemeOptionsMinimalism/etc/config.xml');

            $this->_restoreSettings($defaults->getNode('default/meigee_minimalism_general')->children(), 'meigee_minimalism_general');
            $this->_restoreSettings($defaults->getNode('default/meigee_minimalism_general')->children(), 'meigee_minimalism_productpage');
            $this->_restoreSettings($defaults->getNode('default/meigee_minimalism_general')->children(), 'meigee_minimalism_sidebar');
            $this->_restoreSettings($defaults->getNode('default/meigee_minimalism_general')->children(), 'meigee_minimalism_headerslider');

            if ($setup_pages) {
                Mage::getModel('ThemeOptionsMinimalism/restore')->setupPages();
            }

            if ($setup_blocks) {
                Mage::getModel('ThemeOptionsMinimalism/restore')->setupBlocks();
            }

            Mage::getSingleton('adminhtml/session')->addSuccess(
                Mage::helper('ThemeOptionsMinimalism')->__('Default settings has been restored. Please clear all the cache (System > Cache management)'));
        
        }
        catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('ThemeOptionsMinimalism')->__('An error occurred while restoring theme. '.$e->getMessage()));
        }

        $this->getResponse()->setRedirect($this->getUrl("*/*/"));
        }
    }

    private function _restoreSettings($items, $path)
    {
        $websites = Mage::app()->getWebsites();
        $stores = Mage::app()->getStores();
        foreach ($items as $item) {
            if ($item->hasChildren()) {
                $this->_restoreSettings($item->children(), $path.'/'.$item->getName());
            } else {
                if ($this->_clear) {
                    Mage::getConfig()->deleteConfig($path.'/'.$item->getName());
                    foreach ($websites as $website) {
                        Mage::getConfig()->deleteConfig($path.'/'.$item->getName(), 'websites', $website->getId());
                    }
                    foreach ($stores as $store) {
                        Mage::getConfig()->deleteConfig($path.'/'.$item->getName(), 'stores', $store->getId());
                    }
                }
                foreach ($this->_stores as $store) {
                    $scope = ($store ? 'stores' : 'default');
                    Mage::getConfig()->saveConfig($path.'/'.$item->getName(), (string)$item, $scope, $store);
                }
            }
        }
    }
}