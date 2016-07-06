<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_labelsposition
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'top-left', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Top, Left')),
            array('value'=>'bottom-left', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Bottom, Left')),
			array('value'=>'top-right', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Top, Right')),
            array('value'=>'bottom-right', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Bottom, Right'))
        );
    }

}