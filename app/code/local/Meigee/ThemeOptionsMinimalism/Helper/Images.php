<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2013 - 2014 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Helper_Images extends Mage_Core_Helper_Abstract
{
	public function getImg($_product, $imgType = "image", $w, $h, $file = NULL)
	{
		$config = Mage::getStoreConfig('meigee_minimalism_general/productimages');
		
		$url = Mage::helper('catalog/image')
				->init($_product, $imgType, $file);

			if($config['customAspectRatio'] == 0 && $config['reallyCustomAspectRatio'] !== ''){
				$customAspectRatio = $config['reallyCustomAspectRatio'];
			}else $customAspectRatio = $config['customAspectRatio'];

		if ($customAspectRatio == 999) {
			$url->keepAspectRatio(TRUE);
			$url->keepFrame(FALSE);
			$height = NULL;
		} 
		elseif ($customAspectRatio == 333) {
			$url->keepAspectRatio(TRUE);
			$url->keepFrame(TRUE);
			$height = NULL;
		}
		else {
			$url->keepAspectRatio(FALSE);
			$url->keepFrame(FALSE);
			$height = $w*$customAspectRatio;
		}
		return $url->constrainOnly(TRUE)
			->resize($w, $height);
	}

	public function getFancySources ($_product, $imgType = "image", $w, $h, $file = NULL) 
	{
		$html = $this->getImg ($_product, $imgType, $w, $h, $file);
 		return $html;
	}
	
	public function getImgSources ($_product, $imgType = "image", $w, $h, $file = NULL)
	{
		$html = "src=\"" . $this->getImg ($_product, $imgType, $w, $h, $file);
 		if (Mage::getStoreConfig('meigee_minimalism_general/retina/status')) {
 			$html .= "\" data-srcX2=\"";
 			$html .= $this->getImg ($_product, $imgType, $w*2, $h*2, $file);
 		}
		$html .= "\"";
		return $html;
	}

	public function getHoverImage ($_product, $imgType = "small_image", $w, $h, $file = NULL) {
		$rollover = MAGE::helper('ThemeOptionsMinimalism')->getThemeOptionsMinimalism('meigee_minimalism_general');
		if ($rollover['rollover']['rollover_status'] == true):
			$html = "";
		 	$imgcount = Mage::getModel('catalog/product')->load($_product->getId())->getMediaGalleryImages()->count();
		 	if ($imgcount>0):
		 		$_gallery = Mage::getModel('catalog/product') -> load($_product -> getId()) -> getMediaGalleryImages();
			 	foreach ($_gallery as $_image ):
					if ($_image->getLabel() == 'hover'):
			        	$html = '<span class="hover-image"><img ' . $this->getImgSources($_product, $imgType, $w, $h, $_image -> getFile()) . ' alt="'.$_product->getName().'" /></span>';
			 		break;
			    	endif;
		        endforeach;
			endif;
			return $html;
		endif;
	}
}