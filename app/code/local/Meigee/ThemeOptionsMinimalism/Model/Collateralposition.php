<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Collateralposition
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'details', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Product Details Col')),
            array('value'=>'underdetails', 'label'=>Mage::helper('ThemeOptionsMinimalism')->__('Under Product Details Col'))          
        );
    }

}