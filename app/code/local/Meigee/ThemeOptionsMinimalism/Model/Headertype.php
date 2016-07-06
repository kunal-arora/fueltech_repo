<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Headertype
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'1', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Header Type 1')),
            array('value'=>'2', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Header Type 2')),
			array('value'=>'3', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Header Type 3'))
        );
    }

}