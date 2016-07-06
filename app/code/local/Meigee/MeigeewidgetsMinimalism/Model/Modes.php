<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_MeigeewidgetsMinimalism_Model_Modes
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'horizontal', 'label'=>Mage::helper('meigeewidgetsminimalism')->__('Horizontal')),
            array('value'=>'vertical', 'label'=>Mage::helper('meigeewidgetsminimalism')->__('Vertical')),
            array('value'=>'fade', 'label'=>Mage::helper('meigeewidgetsminimalism')->__('Fade'))
        );
    }

}