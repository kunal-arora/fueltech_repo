<?php class Meigee_MeigeewidgetsMinimalism_Model_Imagesformat
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'.png', 'label'=>Mage::helper('meigeewidgetsminimalism')->__('.png')),
            array('value'=>'.jpg', 'label'=>Mage::helper('meigeewidgetsminimalism')->__('.jpg')),
            array('value'=>'.gif', 'label'=>Mage::helper('meigeewidgetsminimalism')->__('.gif'))
        );
    }

}