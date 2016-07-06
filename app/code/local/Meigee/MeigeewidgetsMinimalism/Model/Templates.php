<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_MeigeewidgetsMinimalism_Model_Templates
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'meigee/meigeewidgetsminimalism/grid.phtml', 'label'=>'Grid'),
            array('value'=>'meigee/meigeewidgetsminimalism/list.phtml', 'label'=>'List'),
            array('value'=>'meigee/meigeewidgetsminimalism/slider.phtml', 'label'=>'Slider'),
			array('value'=>'meigee/meigeewidgetsminimalism/slider_2.phtml', 'label'=>'Slider 2')
        );
    }

}