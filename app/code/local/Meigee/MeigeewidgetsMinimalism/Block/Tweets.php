<?php

class Meigee_MeigeewidgetsMinimalism_Block_Tweets
extends Mage_Core_Block_Html_Link
implements Mage_Widget_Block_Interface
{
    protected function _construct() {
        parent::_construct();
    }
	protected function _toHtml() {
        return parent::_toHtml();  
    }

    public function getLatestTweets () {
        return $this->getData();
    }

    

}