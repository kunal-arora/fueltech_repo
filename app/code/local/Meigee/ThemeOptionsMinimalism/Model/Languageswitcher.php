<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Languageswitcher
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'language_select', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Select Box')),
            array('value'=>'language_flags', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Flags'))          
        );
    }

}