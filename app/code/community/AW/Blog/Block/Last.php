<?php

class AW_Blog_Block_Last extends AW_Blog_Block_Menu_Sidebar implements Mage_Widget_Block_Interface
{
    protected function _toHtml()
    {
        $this->setTemplate('aw_blog/widget_post.phtml');
        if ($this->_helper()->getEnabled()) {
            return $this->setData('blog_widget_recent_count', $this->getBlocksCount())->renderView();
        }
    }

    public function getRecent()
    {
        $collection = Mage::getModel('blog/blog')->getCollection()
            ->addPresentFilter()
            ->addEnableFilter(AW_Blog_Model_Status::STATUS_ENABLED)
            ->addStoreFilter()
            ->setOrder('created_time', 'desc')
        ;

        if ($this->getBlocksCount()) {
            $collection->setPageSize($this->getBlocksCount());
        } else {
            $collection->setPageSize(Mage::helper('blog')->getRecentPage());
        }

        if ($collection && $this->getData('categories')) {
            $collection->addCatsFilter($this->getData('categories'));
        }
        foreach ($collection as $item) {
            $item->setAddress($this->getBlogUrl($item->getIdentifier()));
        }
        return $collection;
		
    }
	
	public function getPostQuantity(){
        return $this->getData('blocks_count');
    }
}
