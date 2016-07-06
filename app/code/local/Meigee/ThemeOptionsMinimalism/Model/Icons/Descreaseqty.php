<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Icons_Descreaseqty
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'fa-minus', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('fa-minus')),
            array('value'=>'fa-angle-left', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('fa-angle-left')),
            array('value'=>'fa-arrow-left', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('fa-arrow-left')),
            array('value'=>'fa-long-arrow-left', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('fa-long-arrow-left')),
            array('value'=>'fa-step-backward', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('fa-step-backward')),
            array('value'=>'fa-angle-double-left', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('fa-angle-double-left'))
        );
    }

}