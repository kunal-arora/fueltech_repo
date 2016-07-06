<?php

class Meigee_ThemeOptionsMinimalism_Block_Adminhtml_Restore_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'themeoptionsminimalism';
        $this->_controller = 'adminhtml_restore';
         
        $this->_updateButton('save', 'label', Mage::helper('ThemeOptionsMinimalism')->__('Restore'));
    }
 
    public function getHeaderText()
    {
        return Mage::helper('ThemeOptionsMinimalism')->__('Theme Settings Restore');
    }


    


}