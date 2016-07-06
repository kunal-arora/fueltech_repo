<?php class Meigee_MeigeewidgetsMinimalism_Model_Boolean
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'1', 'label'=>Mage::helper('meigeewidgetsminimalism')->__('True')),
            array('value'=>'0', 'label'=>Mage::helper('meigeewidgetsminimalism')->__('False'))
        );
    }

}