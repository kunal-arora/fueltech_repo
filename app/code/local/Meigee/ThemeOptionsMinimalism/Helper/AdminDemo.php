<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Helper_Data extends Mage_Core_Helper_Abstract
{
 public function getThemeOptionsMinimalism ($themeOption) {
 	switch ($themeOption) {
		case 'mediaurl':
		    return Mage::getBaseUrl('media') . 'images/';
		break;
 		case 'appearance':
 			return Mage::getStoreConfig('meigee_minimalism_design/appearance');
 		break;
 		case 'patern':
 			return Mage::getStoreConfig('meigee_minimalism_design/appearance/patern');
 		break;
 		case 'custompatern':
 			return Mage::getStoreConfig('meigee_minimalism_design/appearance/custompatern');
 		break;
 		case 'responsiveness':
 			return Mage::getStoreConfig('meigee_minimalism_general/layout/responsiveness');
 		break;
 		case 'sidebar':
 			return Mage::getStoreConfig('meigee_minimalism_general/layout/sidebar');
 		break; 
 		case 'grid':
 			return Mage::getStoreConfig('meigee_minimalism_general/layout/grid');
 		break; 
 		case 'sitelayout':
 			return Mage::getStoreConfig('meigee_minimalism_general/layout/sitelayout');
 		break; 
 		case 'cartpage':
 			return Mage::getStoreConfig('meigee_minimalism_general/layout/cartpage');
 		break; 
 		case 'lang_switcher':
 			return Mage::getStoreConfig('meigee_minimalism_general/lang_switcher');
 		break;
 		case 'curr_switcher':
 			return Mage::getStoreConfig('meigee_minimalism_general/curr_switcher');
 		break;
 		case 'customlogo':
 			return Mage::getStoreConfig('meigee_minimalism_general/customlogo');
 		break;
 		case 'menu':
 			return Mage::getStoreConfig('meigee_minimalism_general/menu');
 		break;
 		case 'fancybox':
 			return Mage::getStoreConfig('meigee_minimalism_general/fancybox');
 		break;
 		case 'rollover':
 			return Mage::getStoreConfig('meigee_minimalism_general/rollover/rollover_status');
 		break; 		
 		case 'labels':
 			return Mage::getStoreConfig('meigee_minimalism_general/productlabels');
 		break;	
 		case 'loginajax_status':
 			return Mage::getStoreConfig('meigee_minimalism_general/loginajax/status');
 		break;
 		case 'footermap_map':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/map');
 		break;
 		case 'footermap_aboutus':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/aboutus');
 		break;
 		case 'footermap_info':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/info');
 		break;
 		case 'footermap_latitude':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/latitude');
 		break;
 		case 'footermap_longitude':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/longitude');
 		break;
 		case 'footermap_mapzoom':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/mapzoom');
 		break;
 		case 'footermap_maptype':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/maptype');
 		break;
 		case 'footermap_marker':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/marker');
 		break;
 		case 'footermap_markertitle':
 			return Mage::getStoreConfig('meigee_minimalism_general/footer/markertitle');
 		break;
		case 'totop':
 			return Mage::getStoreConfig('meigee_minimalism_general/otheroptions/totop');
 		break;
	    case 'productpage_pagelayout':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/pagelayout');
 		break;
 		case 'productpage_product_sku':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/product_sku');
 		break;
 		case 'productpage_prevnext':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/prevnext');
 		break;
 		case 'productpage_moreviews':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/moreviews');
 		break;
 		case 'productpage_scrollingimages':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/scrollingimages');
 		break;
 		case 'productpage_scrollingimagesheight':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/scrollingimagesheight');
 		break;
 		case 'productpage_collateral':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/collateral');
 		break;
 		case 'productpage_collateral_upsell':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/collateral_upsell');
 		break;
 		case 'productpage_collateral_related':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/collateral_related');
 		break;
 		case 'productpage_relatedposition':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage/relatedposition');
 		break;
 		case 'productpage_additional':
 			return Mage::getStoreConfig('meigee_minimalism_productpage/productpage_additional');
 		break;
 		case 'block_categories':
 			return Mage::getStoreConfig('meigee_minimalism_sidebar/block_categories');
 		break;
 		case 'block_shop_by':
 			return Mage::getStoreConfig('meigee_minimalism_sidebar/block_shop_by');
 		break;
 		case 'block_wishlist':
 			return Mage::getStoreConfig('meigee_minimalism_sidebar/block_wishlist');
 		break;
 		case 'headerslider':
 			return Mage::getStoreConfig('meigee_minimalism_headerslider/coin');
 		break;
		case 'ajax_general':
 			return Mage::getStoreConfig('ajax/general/enabled');
 		break;
		case 'ajax_toolbar':
 			return Mage::getStoreConfig('ajax/ajaxtoolbar/enabled');
 		break;
		case 'ajax_wishlistcompare':
 			return Mage::getStoreConfig('ajax/wishlistcompare/enabled');
 		break;
 		case 'bgslider':
 			return Mage::getStoreConfig('meigee_minimalism_bgslider');
 		break;
		case 'headertype':
 			return Mage::getStoreConfig('meigee_minimalism_general/header/headertype');
 		break;
 	}
 }

 public function getProductLabels ($product) {
 	$html = '';
 	if (Mage::getStoreConfig('meigee_minimalism_general/productlabels/labelnew')):
		$from = $product->getNewsFromDate();
		$to = new Zend_Date($product->getNewsToDate());
		$now = new Zend_Date(Mage::getModel('core/date')->timestamp(time()));
		if (isset($from) && $to->isLater($now)) $html .= '<span class="label-new">'.$this->__('New').'</span>';
	endif;
	if (Mage::getStoreConfig('meigee_minimalism_general/productlabels/labelonsale') and $this->isOnSale($product)):
	 	$html .= '<span class="label-sale">'.$this->__('Sale').'</span>';
	endif;
	return $html;
 }

 public function isNew($product)
	{
		return $this->_nowIsBetween($product->getData('news_from_date'), $product->getData('news_to_date'));
	}
public function isOnSale($product)
{
	$specialPrice = number_format($product->getFinalPrice(), 2);
	$regularPrice = number_format($product->getPrice(), 2);
	
	if ($specialPrice != $regularPrice)
		return true;
	else
		return false;
}

 public function prevnext ($product) {
 	if ($product->getMinimalismPrprevnext() < 2 ):
	 	if ($product->getMinimalismPrprevnext() == 1 or $this->getThemeOptionsMinimalism('productpage_prevnext') == 'prevnext'):
		 	$_helper = Mage::helper('catalog/output');
			$_product = $product->getProduct();
			$prev_url = $next_url = $url = $product->getProductUrl();
			 
			if (Mage::helper('catalog/data')->getCategory()) {
				$category = Mage::helper('catalog/data')->getCategory();
			} else {
				$_ccats = Mage::helper('catalog/data')->getProduct()->getCategoryIds();
				if(isset($_ccats[0])){
					$category = Mage::getModel('catalog/category')->load($_ccats[0]);
				}else{
					return false;
				}
			}
			 
			$children = $category->getProductCollection();
			$_count = is_array($children) ? count($children) : $children->count();
			if ($_count) {
			foreach ($children as $product) {
			$plist[] = $product->getId();
			}
			 
			/**
			* Determine the previous/next link and link to current category
			*/
			$current_pid  = Mage::helper('catalog/data')->getProduct()->getId();
			$curpos   = array_search($current_pid, $plist);
			// get link for prev product
			$previd   = isset($plist[$curpos+1])? $plist[$curpos+1] : $current_pid;
			$product  = Mage::getModel('catalog/product')->load($previd);
			$prevpos  = $curpos;
			while (!$product->isVisibleInCatalog()) {
			$prevpos += 1;
			$nextid   = isset($plist[$prevpos])? $plist[$prevpos] : $current_pid;
			$product  = Mage::getModel('catalog/product')->load($nextid);
			}
			$prev_url = $product->getProductUrl();
			// get link for next product
			$nextid   = isset($plist[$curpos-1])? $plist[$curpos-1] : $current_pid;
			$product  = Mage::getModel('catalog/product')->load($nextid);
			$nextpos  = $curpos;
			while (!$product->isVisibleInCatalog()) {
			$nextpos -= 1;
			$nextid   = isset($plist[$nextpos])? $plist[$nextpos] : $current_pid;
			$product  = Mage::getModel('catalog/product')->load($nextid);
			}
			$next_url = $product->getProductUrl();
			}
			
			$html ='';
		    if ($url <> $prev_url):
		        $html = '<a class="product-next" title="' . $this->__('Next Product') . '" href="' . $prev_url . '"><i class="fa fa-caret-right"></i></a>';
		    endif;
		    if ($url <> $next_url): 
				$html .= '<a class="product-prev" title="' . $this->__('Previous Product') . '" href="' . $next_url . '"><i class="fa fa-caret-left"></i></a>';
		    endif;

		    return $html;
		else: 
			return false;
		endif;
	else: 
		return false;
	endif;
 }

	public function isActive($attribute, $value){

	    $col = Mage::getModel('cms/block')->getCollection();
	    $col->addFieldToFilter($attribute, $value);
	    $item = $col->getFirstItem();
	    $id = $item->getData('is_active');

	    if($id == 1){
	        return true;
	    }else{
	        return false;
	    }

	}

	public function switchHeader() {
		if ($this->getThemeOptionsMinimalism('headertype') > 1){
			return 'page/html/header_'.$this->getThemeOptionsMinimalism('headertype').'.phtml';
		}
		return 'page/html/header.phtml';
	}
	
	public function switchGrid() {
		if ((int)$this->getThemeOptionsMinimalism('responsiveness') !== 1):
			return 'css/grid_' . $this->getThemeOptionsMinimalism('responsiveness') . '.css';
		endif;
		return 'css/grid_responsive.css';
	}
	
	public function fancySwitcher(){
		if ((int)$this->getThemeOptionsMinimalism('fancybox') == 1 or (int)$this->getThemeOptionsMinimalism('ajax_general') == 1 or (int)$this->getThemeOptionsMinimalism('ajax_toolbar') == 1 or (int)$this->getThemeOptionsMinimalism('ajax_wishlistcompare') == 1):
			return 'css/fancybox.css';
		endif;
	}

	public function getPaternClass (){
		return $this->getThemeOptionsMinimalism('patern');
	}
	
	public function getSidebarPos (){
		return $this->getThemeOptionsMinimalism('sidebar');
	}

	public function fancySwitcherJs(){
		if ((int)$this->getThemeOptionsMinimalism('fancybox') == 1 or (int)$this->getThemeOptionsMinimalism('ajax_general') == 1 or (int)$this->getThemeOptionsMinimalism('ajax_toolbar') == 1 or (int)$this->getThemeOptionsMinimalism('ajax_wishlistcompare') == 1):
			return 'js/jquery.fancybox.pack.js';
		endif;
	}

	public function HexToRGB($hex) {
	    //$hex = srt_replace("#", "", $hex);
	    $color = '';
	    
	    if(strlen($hex) == 3) {
		    $color .= hexdec(substr($hex, 0, 1) . $r) . ',';
		    $color .= hexdec(substr($hex, 1, 1) . $g) . ',';
		    $color .= hexdec(substr($hex, 2, 1) . $b);
	    }
	    else if(strlen($hex) == 6) {
		    $color .= hexdec(substr($hex, 0, 2)) . ',';
		    $color .= hexdec(substr($hex, 2, 2)) . ',';
		    $color .= hexdec(substr($hex, 4, 2));
	    }
	    
	    return $color;
    }
}
?>