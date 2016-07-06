<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Prevnext
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'prevnext_disabled', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Disable')),
            array('value'=>'prevnext', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Enable'))          
        );
    }

}