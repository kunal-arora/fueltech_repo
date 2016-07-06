<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Pagelayout
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'left', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Left')),
            array('value'=>'right', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Right')),
            array('value'=>'none', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('No Sidebar'))          
        );
    }

}