<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Brandpos
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'sidebar', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Sidebar')),
            array('value'=>'center', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Product Details Col'))
        );
    }

}