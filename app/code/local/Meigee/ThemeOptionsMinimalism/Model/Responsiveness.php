<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Responsiveness
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Enabled')),
            array('value'=>1280, 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Disabled. Site width will be set as 1280px ')),
            array('value'=>1008, 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Disabled. Site width will be set as 1008px '))
        );
    }

}