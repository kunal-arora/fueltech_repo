<?php

class AW_Blog_Model_Postquantity extends Mage_Core_Model_Config_Data
{
    public function toOptionArray()
    {
       return array(
            array('value' => 2, 'label' => Mage::helper('adminhtml')->__('2')),
            array('value' => 3, 'label' => Mage::helper('adminhtml')->__('3')),
            array('value' => 4, 'label' => Mage::helper('adminhtml')->__('4')),
        );
    }
}