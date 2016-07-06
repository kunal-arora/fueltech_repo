<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Cartpage
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'cart_standard', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Standard')),
            array('value'=>'cart_accordion', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Accordion'))          
        );
    }

}