<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Newsletterbg
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'0', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Left')),
            array('value'=>'1', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Right')),
			array('value'=>'2', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Center')),
			array('value'=>'3', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Fill with stretching'))
        );
    }

}