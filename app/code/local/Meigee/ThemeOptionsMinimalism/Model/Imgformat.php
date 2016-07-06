<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Imgformat
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'.png', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('.png')),
            array('value'=>'.jpg', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('.jpg')),
            array('value'=>'.gif', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('.gif'))          
        );
    }

}