<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsMinimalism_Model_Cssgenerate extends Mage_Core_Model_Abstract
{
    private $baseColors;
    private $appearance;
	private $catlabelsColors;
    private $mediaPath;
    private $dirPath;
    private $filePath;
	private $headerColors;
	private $menuColors;
	private $headerSliderColors;
	private $contentColors;
	private $buttonsColors;
	private $productsColors;
	private $socialLinksColors;
	private $footerColors;

    private function setParams () {
        $this->baseColors = Mage::getStoreConfig('meigee_minimalism_design/base');
        $this->appearance = Mage::getStoreConfig('meigee_minimalism_design/appearance');
		$this->catlabelsColors = Mage::getStoreConfig('meigee_minimalism_design/catlabels');
		$this->headerColors = Mage::getStoreConfig('meigee_minimalism_design/header');
		$this->menuColors = Mage::getStoreConfig('meigee_minimalism_design/menu');
		$this->headerSliderColors = Mage::getStoreConfig('meigee_minimalism_design/headerslider');
		$this->contentColors = Mage::getStoreConfig('meigee_minimalism_design/content');
		$this->buttonsColors = Mage::getStoreConfig('meigee_minimalism_design/buttons');
		$this->productsColors = Mage::getStoreConfig('meigee_minimalism_design/products');
		$this->socialLinksColors = Mage::getStoreConfig('meigee_minimalism_design/social_links');
		$this->footerColors = Mage::getStoreConfig('meigee_minimalism_design/footer');
		
    }

    private function setLocation () {
        $this->mediaPath = Mage::getBaseDir('media') . 'images/';
        $this->dirPath = Mage::getBaseDir('skin') . '/frontend/minimalism/default/css/';
        $this->filePath = $this->dirPath . 'skin.css';
    }

    public function saveCss()
    {

        $this->setParams();

$css = "/**
*
* This file is generated automaticaly. Please do no edit it directly cause all changes will be lost.
*
*/
";
if ($this->appearance['font'] == 1)
{
    $css .= '/*====== Font Replacement =======*/ ';
    if ($this->appearance['default_sizes'] == 0)
        {
$css .= '
.opc-wrapper-opc .opc-title,
.opc-wrapper-opc .login,
.opc-wrapper-opc h2,
.block-subscribe-popup .indent h3,
.product-name .sku,
a.aw-blog-read-more,
.crosssell h2,
header.rating-title h2,
.widget .widget-title h1,
.widget .widget-title h2,
.page-title h1,
.page-title h2,
.page-title h3,
.page-title h4,
.page-title h5,
.page-title h6,
header#header .top-cart .cart-empty,
.product-collateral h2,
.content_bottom section h3,
.product-view .product-shop .price-box .price-label,
#footer h3,
header#header .top-cart .block-title a span,
header#header .top-cart .block-content .mini-products-list .product-details .price,
header#header .top-cart .block-content .subtotal .label,
.price,
.opc-wrapper-opc .text-login a.opc-link-login,
#topCartContent button,
#topCartContent .actions a,
#topCartContent button span,
#nav li a span,
.content_bottom button.button span,
.products-grid .btn-quick-view span span,
.products-list .btn-quick-view span span,
aside.sidebar section header h2,
.block-subscribe strong span,
.block-tags strong span,
button.button span,
aside.sidebar section .block-content .actions a,
.sorter label,
.pages li a.previous,
.pages li a.next,
.products-list .product-name a,
.block-wishlist .link-cart,
.product-name h1,
.block-related h2,
#product-options-wrapper dt label,
.meigee-tabs li a,
.opc-wrapper-opc .payment-block dt:hover label, 
.opc-wrapper-opc .payment-block dt label,
.product-collateral#collateral-accordion h2,
.catalog-product-view .box-reviews h2,
.catalog-product-view .box-reviews ul li h6 a,
#login-holder .page-title h1,
#login-holder form > p,
#login-holder .link-box a,
#login-holder form .fieldset .legend,
#login-form h2,
#cart-accordion h3.accordion-title,
.data-table .product-name a,
.opc .step-title, 
.opc .step-title h2, 
.opc h3,
aside.sidebar section.block-progress dt,
.dashboard .welcome-msg .hello,
.dashboard .box-title h2,
.dashboard .box-title h3,
.dashboard .box-head h2,
.dashboard .box-head h3,
.header-slider-container .iosSlider .slider .item p,
.header-slider-container .iosSlider .slider .item h2,
.header-slider-container .iosSlider .slider .item h3,
.widget-latest li h3 a {
    font-family: '. $this->appearance['gfont'] .', sans-serif; 
    font-size:'. $this->appearance['fontsize'] .'px !important;
    line-height:' . $this->appearance['lineheight'] .'px !important;
    font-weight:' .$this->appearance['fontweight'] .' !important;
}';
        } else {
        $css .= '
.opc-wrapper-opc .opc-title,
.opc-wrapper-opc .login,
.opc-wrapper-opc h2,
.block-subscribe-popup .indent h3,
.product-name .sku,
a.aw-blog-read-more,
.crosssell h2,
header.rating-title h2,
.widget .widget-title h1,
.widget .widget-title h2,
.page-title h1,
.page-title h2,
.page-title h3,
.page-title h4,
.page-title h5,
.page-title h6,
header#header .top-cart .cart-empty,
.product-collateral h2,
.content_bottom section h3,
.product-view .product-shop .price-box .price-label,
#footer h3,
header#header .top-cart .block-title a span,
header#header .top-cart .block-content .mini-products-list .product-details .price,
header#header .top-cart .block-content .subtotal .label,
.price,
#topCartContent button,
#topCartContent .actions a,
#topCartContent button span,
#nav li a span,
.content_bottom button.button span,
.products-grid .btn-quick-view span span,
.products-list .btn-quick-view span span,
aside.sidebar section header h2,
.block-subscribe strong span,
.block-tags strong span,
button.button span,
aside.sidebar section .block-content .actions a,
.sorter label,
.pages li a.previous,
.pages li a.next,
.products-list .product-name a,
.block-wishlist .link-cart,
.product-name h1,
.block-related h2,
.opc-wrapper-opc .text-login a.opc-link-login,
#product-options-wrapper dt label,
.opc-wrapper-opc .payment-block dt:hover label, 
.opc-wrapper-opc .payment-block dt label,
.meigee-tabs li a,
.product-collateral#collateral-accordion h2,
.catalog-product-view .box-reviews h2,
.catalog-product-view .box-reviews ul li h6 a,
#login-holder .page-title h1,
#login-holder form > p,
#login-holder .link-box a,
#login-holder form .fieldset .legend,
#login-form h2,
#cart-accordion h3.accordion-title,
.data-table .product-name a,
.opc .step-title, 
.opc .step-title h2, 
.opc h3,
aside.sidebar section.block-progress dt,
.dashboard .welcome-msg .hello,
.dashboard .box-title h2,
.dashboard .box-title h3,
.dashboard .box-head h2,
.dashboard .box-head h3,
.header-slider-container .iosSlider .slider .item p,
.header-slider-container .iosSlider .slider .item h2,
.header-slider-container .iosSlider .slider .item h3,
.widget-latest li h3 a {font-family: ' . $this->appearance['gfont'] .', sans-serif;}';
    }
}

if ($this->appearance['custompatern']) {
$css .= '

/*====== Custom Patern =======*/
body { background: url("' . MAGE::helper('ThemeOptionsMinimalism')->getThemeOptionsMinimalism('mediaurl') . $this->appearance['custompatern'] . '") center top repeat !important;}';
}
$css .= '

/*====== Site Bg =======*/
body,
body.boxed-layout {background-color:#' . $this->baseColors['sitebg'] . ';}

/*====== Skin Color #1 =======*/
.opc-review-actions h5,
.opc-wrapper-opc .opc-data-table tbody td h3,
.opc-wrapper-opc .opc-title,
.widget-latest li a:hover,
.block-blog li a:hover,
.menu-tags h5,
.menu-categories h5,
.menu-recent h5,
.crosssell h2,
.product-collateral h2,
.widget .widget-title h1,
.widget .widget-title h2,
.page-title h1,
.page-title h2,
.page-title h3,
.page-title h4,
.page-title h5,
.page-title h6,
.opc-wrapper-opc h2,
.content_bottom section h3,
#footer h3,
header#header .top-cart .block-content .subtotal .label,
header#header .top-cart .product-name a,
#nav li a span,
.nav-wide#nav-wide li a span,
aside.sidebar section.block-layered-nav dl dd a:hover,
.weee,
.product-name a,
#footer ul li a:hover,
aside.sidebar section header h2,
.block-subscribe strong span,
.block-tags strong span,
aside.sidebar section dl dt,
.block-layered-nav,
.block-layered-nav a,
aside.sidebar .product-name a,
aside.sidebar .block-subtitle,
aside.sidebar label,
aside.sidebar section.block-wishlist li.item .product-details .product-name a,
#poll-answers,
.sorter label,
.pages li a.previous,
.pages li a.next,
.minimal-price-link .label,
.products-list .add-to-links i:hover,
.products-grid .add-to-links i:hover,
a:hover,
#categories-accordion li.level-top a.level-top,
#categories-accordion li.level-top.parent ul.level0 li a:hover,
.block-wishlist .link-cart,
.block-wishlist .prev i:hover,
.block-wishlist .next i:hover,
.product-name h1,
.block-related h2,
.my-wishlist div.quantity-decrease i:hover,
.my-wishlist div.quantity-increase i:hover,
.add-to-cart div.quantity-decrease i:hover,
.add-to-cart div.quantity-increase i:hover,
.cart-table div.quantity-decrease i:hover,
.cart-table div.quantity-increase i:hover,
.product-view .product-shop .add-to-links-box i:hover,
#product-options-wrapper dt label,
.product-options .options-list li:hover,
.product-options .options-list li:hover .price,
.meigee-tabs li.active a, .meigee-tabs li a:hover,
.product-collateral#collateral-accordion h2.active,
.catalog-product-view .box-reviews .form-add h3 span,
.catalog-product-view .box-reviews ul li h6 a,
#login-holder form > p,
#login-holder form .fieldset .legend,
#login-form h2,
.cart .totals .checkout-types li a:hover,
#cart-accordion h3.accordion-title:hover,
#cart-accordion h3.accordion-title.active,
.data-table .product-name a,
#login-holder form .actions .f-right:hover,
.opc .active .step-title,
.opc h3,
aside.sidebar section.block-progress dt a,
.dashboard .welcome-msg .hello,
.dashboard .box-title h2,
.dashboard .box-title h3,
.dashboard .box-head h2,
.dashboard .box-head h3,
.data-table .c_actions a i:hover,
.block-account a,
.my-wishlist .data-table .table-buttons a:hover,
header#header .menu-button,
.product-view .product-prev:hover,
.product-view .product-next:hover,
header#header .top-cart .block-title a span,
header.rating-title h2,
aside.sidebar section.block-layered-nav #amount, 
aside.sidebar section.block-layered-nav #amount-2,
.nav-container.mobile .nav-wide#nav-wide li.level-top.active a span{color:#' . $this->baseColors['maincolor'] . ';}

aside.sidebar section.block-layered-nav .ui-slider .ui-slider-handle{border-top-color:#' . $this->baseColors['maincolor'] . ';}

.slider-container .prev i,
.more-views .prev i,
.block-related .prev i {border-right-color:#' . $this->baseColors['maincolor'] . ';}

.slider-container .next i,
.more-views .next i,
.block-related .next i {border-left-color:#' . $this->baseColors['maincolor'] . ';}

.rtl .slider-container .prev i,
.rtl .more-views .prev i,
.rtl .block-related .prev i {border-left-color:#' . $this->baseColors['maincolor'] . ';}

.rtl .slider-container .next i,
.rtl .more-views .next i,
.rtl .block-related .next i {border-right-color:#' . $this->baseColors['maincolor'] . ';}

.opc-wrapper-opc .login,
a.aw-blog-read-more,
aside.sidebar .block-tags .actions a,
ul.social-links li a:hover,
header#header .top-cart .cart-price-qt,
header#header .form-search.active button,
header#header.header-2 .form-search button:hover,
header#header.header-3 .form-search button:hover,
#topCartContent button > span,
#topCartContent .actions a:hover,
#footer .sbSelector:hover,
.add-to-cart-success,
.content_bottom button.button > span,
.products-grid .btn-quick-view > span,
.products-list .btn-quick-view > span,
#slider-range.ui-slider .ui-slider-range.ui-widget-header,
button.button > span,
aside.sidebar .actions a:hover,
.toolbar .view-mode a:hover,
.toolbar .view-mode strong,
.content_bottom .grid_12 > button:hover > span,
.pages li.current,
.pages li a:hover,
.pages li a.previous:hover,
.pages li a.next:hover,
.sorter a.desc:hover,
.label-new,
.catalog-product-view .box-reviews .data-table thead,
.cart .totals header,
#footer .sbHolder .sbToggleOpen + .sbSelector,
.cart-table .buttons-row .buttons .btn-clear:hover > span, 
.cart-table .buttons-row .buttons .btn-update:hover > span,
.my-wishlist .buttons-set .btn-share:hover > span, 
.my-wishlist .buttons-set .btn-add:hover > span,
#login-holder .link-box:hover,
header#header dl.company-links dt a:hover,
header#header dl.company-links dt a.active,
header#header .links li a:hover {background-color:#' . $this->baseColors['maincolor'] . ';}

header#header.header-2 .form-search button:hover,
header#header.header-3 .form-search button:hover,
header#header .form-search.active button,
#footer .sbSelector:hover,
.content_bottom button.button > span,
.pages li a:hover {border-color:#' . $this->baseColors['maincolor'] . ';}


/*====== Skin Color #2 =======*/
header#header .top-cart .block-title i,
.price, a,
.catalog-product-view .box-reviews ul li small span {color:#' . $this->baseColors['secondcolor'] . ';}

.opc-wrapper-opc .payment-block dt:hover label,
.opc-wrapper-opc .payment-block dt.active label,
.nav-wide#nav-wide li.level-top:hover,
.nav-wide#nav-wide li.level-top.active,
#nav li.level-top:hover,
#nav li.level-top.active,
.products-list .btn-quick-view > span:hover,
.products-grid .btn-quick-view > span:hover,
.catalog-product-view .box-reviews .full-review,
#login-holder .link-box  {background-color:#' . $this->baseColors['secondcolor'] . '}

/*====== Category Labels =======*/
.nav-wide#nav-wide li.level-top .category-label.label_one { 
    background-color: #' . $this->catlabelsColors['label_one'] . ';
    border-color: #' . $this->catlabelsColors['label_one'] . ';
    color: #' . $this->catlabelsColors['label_one_color'] . ';
}
.nav-wide#nav-wide li.level-top.over .category-label.label_one { 
    background-color: #' . $this->catlabelsColors['label_one_h'] . ';
    border-color: #' . $this->catlabelsColors['label_one_h'] . ';
    color: #' . $this->catlabelsColors['label_one_color_h'] . ';
}
.nav-wide#nav-wide li.level-top .category-label.label_two { 
    background-color: #' . $this->catlabelsColors['label_two'] . ';
    border-color: #' . $this->catlabelsColors['label_two'] . ';
    color: #' . $this->catlabelsColors['label_two_color'] . ';
}
.nav-wide#nav-wide li.level-top.over .category-label.label_two { 
    background-color: #' . $this->catlabelsColors['label_two_h'] . ';
    border-color: #' . $this->catlabelsColors['label_two_h'] . ';
    color: #' . $this->catlabelsColors['label_two_color_h'] . ';
}
.nav-wide#nav-wide li.level-top .category-label.label_three { 
    background-color: #' . $this->catlabelsColors['label_three'] . ';
    border-color: #' . $this->catlabelsColors['label_three'] . ';
    color: #' . $this->catlabelsColors['label_three_color'] . ';
}
.nav-wide#nav-wide li.level-top.over .category-label.label_three { 
    background-color: #' . $this->catlabelsColors['label_three_h'] . ';
    border-color: #' . $this->catlabelsColors['label_three_h'] . ';
    color: #' . $this->catlabelsColors['label_three_color_h'] . ';
}


';

if ($this->baseColors['base_override'] == 1) {
    $css .= '

/*====== Header ======*/
header#header,
header#header > .container_12 {background-color: #' . $this->headerColors['header_bg'] . ';}
header#header,
header#header .welcome-msg {color: #' . $this->headerColors['header_text'] . ';}
header#header a {color: #' . $this->headerColors['header_link'] . ';}
header#header a:hover {color: #' . $this->headerColors['header_link_h'] . ';}
header#header .topline,
header#header.header-3 {
	border-color: #' . $this->headerColors['header_border'] . ';
	border-width: ' . $this->headerColors['header_border_width'] . 'px;
}

/**** Header Links Block ****/
header#header dl.company-links dt a,
header#header .links li a {
	background-color: #' . $this->headerColors['links_bg'] . ';
	color: #' . $this->headerColors['links_text'] . ';
}
header#header dl.company-links dt a:hover,
header#header .links li a:hover {
	background-color: #' . $this->headerColors['links_bg_h'] . '; 
	color: #' . $this->headerColors['links_text_h'] . ';
}
header#header dl.company-links .list-container {
	background-color: #' . $this->headerColors['links_dropdown_bg'] . ';
	border-color: #' . $this->headerColors['links_dropdown_border'] . ';
	border-width: ' . $this->headerColors['links_dropdown_border_width'] . 'px;
}
header#header dl.company-links dd ul li a {
	background-color: #' . $this->headerColors['links_dropdown_link_bg'] . ';
	color: #' . $this->headerColors['links_dropdown_link_color'] . ';
	border-color: #' . $this->headerColors['links_dropdown_divider'] . ';
	border-width: ' . $this->headerColors['links_dropdown_divider_width'] . 'px;
}
header#header dl.company-links dd ul li a:hover {
	background-color: #' . $this->headerColors['links_dropdown_link_bg_h'] . ';
	color: #' . $this->headerColors['links_dropdown_link_color_h'] . ';
	border-color: #' . $this->headerColors['links_dropdown_divider_h'] . ';
}

/**** Header Cart ****/
header#header .top-cart .block-title .title-cart i {color: #' . $this->headerColors['cart_icon_color'] . ';}
header#header .top-cart .block-title .title-cart:hover i {color: #' . $this->headerColors['cart_icon_color_h'] . ';}
header#header .top-cart .block-title .title-cart span {color: #' . $this->headerColors['cart_count'] . ';}
header#header .top-cart .block-title .title-cart:hover span {color: #' . $this->headerColors['cart_count_h'] . ';}
header#header .top-cart .block-content {
	background-color: #' . $this->headerColors['cart_dropdown_bg'] . ';
	border-color: #' . $this->headerColors['cart_dropdown_border'] . ';
	border-width: ' . $this->headerColors['cart_dropdown_border_width'] . 'px;
}
header#header .top-cart .block-content .actions {
	border-color: #' . $this->headerColors['cart_dropdown_divider'] . ';
	border-width: ' . $this->headerColors['cart_dropdown_divider_width'] . 'px;
} 
header#header .top-cart .product-name a {color: #' . $this->headerColors['cart_dropdown_product_title'] . ';}
header#header .top-cart .product-name a:hover {color: #' . $this->headerColors['cart_dropdown_product_title_h'] . ';}
header#header .top-cart .block-content .mini-products-list .product-details .price {color: #' . $this->headerColors['cart_dropdown_product_price'] . ';}
header#header .top-cart .cart-price-qt {background-color: #' . $this->headerColors['cart_dropdown_count_bg'] . ';}
header#header .top-cart .cart-price-qt strong {color: #' . $this->headerColors['cart_dropdown_count_text'] . ';}
header#header .top-cart .btn-edit,
header#header .top-cart .btn-remove {color: #' . $this->headerColors['cart_dropdown_icons'] . ';}
header#header .top-cart .btn-edit:hover,
header#header .top-cart .btn-remove:hover {color: #' . $this->headerColors['cart_dropdown_icons_h'] . ';}
header#header .top-cart .block-content .item-options dt {color: #' . $this->headerColors['cart_dropdown_product_label'] . ';}
header#header .top-cart .block-content .item-options dd {color: #' . $this->headerColors['cart_dropdown_product_options'] . ';}
header#header .top-cart .block-content .subtotal .label {color: #' . $this->headerColors['cart_dropdown_total_label'] . ';}
header#header .top-cart .block-content .subtotal .price {color: #' . $this->headerColors['cart_dropdown_total_price'] . ';}

/**** Header Search ****/
header#header .form-search input {
	background-color: #' . $this->headerColors['search_bg'] . ';
	border-color: #' . $this->headerColors['search_border'] . ';
	color: #' . $this->headerColors['search_text'] . ';
}
header#header .form-search.focus input {
	background-color: #' . $this->headerColors['search_bg_a'] . ';
	border-color: #' . $this->headerColors['search_border_a'] . ';
	color: #' . $this->headerColors['search_text_a'] . ';
}
header#header .form-search button {
	border-color: #' . $this->headerColors['search_button_border'] . ';
	background-color: #' . $this->headerColors['search_button_bg'] . ';
}
header#header .form-search button span i {color: #' . $this->headerColors['search_button_color'] . ';}
header#header .form-search button:hover,
header#header.header-2 .form-search button:hover,
header#header.header-3 .form-search button:hover {
	border-color: #' . $this->headerColors['search_button_border_h'] . ';
	background-color: #' . $this->headerColors['search_button_bg_h'] . ';
}
header#header .form-search button:hover span i,
header#header.header-2 .form-search button:hover span i,
header#header.header-3 .form-search button:hover span i {color: #' . $this->headerColors['search_button_color_h'] . ';}
header#header .form-search.active button,
header#header .form-search.focus button {
	background-color: #' . $this->headerColors['search_button_bg_a'] . ';
	border-color: #' . $this->headerColors['search_button_border_a'] . ';
}
header#header .form-search.active button span i,
header#header .form-search.focus button span i,
header#header.header-2 .form-search.focus button span i,
header#header.header-3 .form-search.focus button span i {color: #' . $this->headerColors['search_button_color_a'] . ';}

/**** Login and Register Popup ****/
#login-holder,
#login-holder form .fieldset {background-color: #' . $this->headerColors['login_bg'] . ';}
#login-holder .page-title {background-color: #' . $this->headerColors['login_title_bg'] . ';}
#login-holder .page-title h1 {color: #' . $this->headerColors['login_title_color'] . ';}
#login-holder form .fieldset .legend,
#login-holder form > p {color: #' . $this->headerColors['login_subtitle'] . ';}
#login-holder .account-create .form-list label {color: #' . $this->headerColors['login_label'] . ';}
#login-holder form .actions .f-right {color: #' . $this->headerColors['login_link_color'] . ';}
#login-holder form .actions .f-right:hover {color: #' . $this->headerColors['login_link_color_h'] . ';}
#login-holder .close-button i {color: #' . $this->headerColors['login_icon_color'] . ';}
#login-holder .close-button i:hover {color: #' . $this->headerColors['login_icon_color_h'] . ';}
#login-holder .link-box {background-color: #' . $this->headerColors['login_switcher_bg'] . ';}
#login-holder .link-box,
#login-holder .link-box a,
#login-holder .link-box a:hover {color: #' . $this->headerColors['login_switcher_text'] . ';}
#login-holder .link-box:hover {background-color: #' . $this->headerColors['login_switcher_bg_h'] . ';}
#login-holder .link-box:hover,
#login-holder .link-box:hover a,
#login-holder .link-box:hover a:hover {color: #' . $this->headerColors['login_switcher_text_h'] . ';}
#login-holder form p.required,
#login-holder .form-list label.required em {color: #' . $this->headerColors['login_system_text'] . ';}
#login-holder form .input-box input {
	background-color: #' . $this->headerColors['login_input_bg'] . '; 
	border-color: #' . $this->headerColors['login_input_border'] . '; 
	border-width: ' . $this->headerColors['login_input_border_width'] . 'px;
	color: #' . $this->headerColors['login_input_text'] . ';
}
#login-holder form .actions {
	border-color: #' . $this->headerColors['login_divider'] . ';
	border-width: ' . $this->headerColors['login_divider_width'] . 'px;
}

/*====== Menu ======*/

.topline,
body.boxed-layout .topline .container_12 {background-color: #' . $this->menuColors['menu_bg'] . ';}

/**** Top Level ****/
.nav-wide#nav-wide li.level-top,
#nav li.level-top {background-color: #' . $this->menuColors['link_bg'] . ';}
#nav li a span,
.nav-wide#nav-wide li a span {color: #' . $this->menuColors['link_color'] . ';}
.nav-wide#nav-wide li.level-top:hover,
.nav-wide#nav-wide li.level-top.active,
#nav li.level-top:hover,
#nav li.level-top.active {background-color: #' . $this->menuColors['link_bg_h'] . ';}
.nav-wide#nav-wide li.level-top:hover > a > span,
.nav-wide#nav-wide li.level-top.active > a > span,
.nav-container #nav li.level-top:hover > a > span,
.nav-container #nav li.level-top.ove > a > span,
#nav li.level-top.active > a > span {
	color: #' . $this->menuColors['link_color_h'] . ';
	border-color: #' . $this->menuColors['link_underscore'] . ';
}

/**** Submenu ****/
.nav-wide#nav-wide .menu-wrapper,
#nav ul {
	background-color: #' . $this->menuColors['submenu_bg'] . ';
	border-color: #' . $this->menuColors['submenu_border'] . ';
	border-width: ' . $this->menuColors['submenu_border_width'] . 'px;
}
.nav-wide#nav-wide .menu-wrapper {color: #' . $this->menuColors['submenu_text'] . ';}
.nav-wide#nav-wide .menu-wrapper a {color: #' . $this->menuColors['submenu_links'] . ';}
.nav-wide#nav-wide .menu-wrapper a:hover {color: #' . $this->menuColors['submenu_links_h'] . ';}
.nav-wide#nav-wide hr {
	border-color: #' . $this->menuColors['submenu_borders'] . ';
	border-width: ' . $this->menuColors['submenu_borders_width'] . 'px;
}
.nav-wide#nav-wide .inline-links li a {
	background-color: #' . $this->menuColors['submenu_top_content_links_bg'] . ';
	color: #' . $this->menuColors['submenu_top_content_links'] . ';
}
.nav-wide#nav-wide .inline-links li a:hover {
	background-color: #' . $this->menuColors['submenu_top_content_links_bg_h'] . ';
	color: #' . $this->menuColors['submenu_top_content_links_h'] . ';
}
.nav-wide#nav-wide ul.level0 li.level1 span.subtitle {color: #' . $this->menuColors['submenu_top_link_color'] . ';}
.nav-wide#nav-wide ul li.level1 a:hover span.subtitle {color: #' . $this->menuColors['submenu_top_link_color_h'] . ';}
.nav-wide#nav-wide li a span,
.nav-container.mobile .nav-wide#nav-wide li.level-top.active a span,
#nav ul li a span {color: #' . $this->menuColors['submenu_link_color'] . ';}
#nav ul li a span em,
#nav-wide ul li a span em {color: #' . $this->menuColors['submenu_link_number_color'] . ';}
.nav-wide#nav-wide ul li a:hover span {color: #' . $this->menuColors['submenu_link_color_h'] . ';}
.nav-wide#nav-wide ul li a:hover span em {color: #' . $this->menuColors['submenu_link_number_color_h'] . ';}
.nav-wide#nav-wide .awesome-content-top,
.nav-wide#nav-wide .awesome-content-left {
	background-color: #' . $this->menuColors['subcategory_top_content_bg'] . ';
	color: #' . $this->menuColors['subcategory_top_content_text'] . ';
}
.nav-wide#nav-wide .awesome-content-top i,
.nav-wide#nav-wide .awesome-content-left i {color: #' . $this->menuColors['subcategory_top_content_icon'] . ';}

/*====== Header Slider ======*/ 

.header-slider-container .iosSlider .slider .item .slide-container.slide-skin h2,
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin h3,
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin p {color: #' . $this->headerSliderColors['slide1_text'] . ';}
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-2 h2,
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-2 h3,
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-2 p {color: #' . $this->headerSliderColors['slide2_text'] . ';}
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-3 h2,
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-3 h3,
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-3 p {color: #' . $this->headerSliderColors['slide3_text'] . ';}
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-4 h2,
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-4 h3,
.header-slider-container .iosSlider .slider .item .slide-container.slide-skin-4 p {color: #' . $this->headerSliderColors['slide4_text'] . ';}
.header-slider-container .iosSlider .prev,
.header-slider-container .iosSlider .next {
	background-color: ' . ($this->headerSliderColors['buttons_bg_select'] == 1 ? '#' . $this->headerSliderColors['buttons_bg'] :  'transparent' ).';
	border-color: #' . $this->headerSliderColors['buttons_border'] . ';
	box-shadow: 0 0 1px #' . $this->headerSliderColors['buttons_border'] . ';
}
.header-slider-container .iosSlider .prev i {border-right-color: #' . $this->headerSliderColors['buttons_icon'] . ';}
.header-slider-container .iosSlider .next i {border-left-color: #' . $this->headerSliderColors['buttons_icon'] . ';}
.header-slider-container .iosSlider .prev:hover,
.header-slider-container .iosSlider .next:hover {
	background-color: #' . $this->headerSliderColors['buttons_bg_h'] . ';
	border-color: #' . $this->headerSliderColors['buttons_border_h'] . ';
	box-shadow: 0 0 1px #' . $this->headerSliderColors['buttons_border_h'] . ';
}
.header-slider-container .iosSlider .prev:hover i {border-right-color: #' . $this->headerSliderColors['buttons_icon_h'] . ';}
.header-slider-container .iosSlider .next:hover i {border-left-color: #' . $this->headerSliderColors['buttons_icon_h'] . ';}

/*====== Content =======*/

.opc-wrapper-opc .opc-title,
.widget .widget-title h1,
.widget .widget-title h2, 
.page-title h1, 
.page-title h2, 
.page-title h3, 
.page-title h4, 
.page-title h5, 
.page-title h6,
.opc-wrapper-opc h2 {color: #' . $this->contentColors['title_color'] . ';}
	
/**** Toolbar ****/
.sorter label {
	background-color: #' . $this->contentColors['label_bg'] . ';
	color: #' . $this->contentColors['label_text'] . ';
}
.toolbar .sbSelector {
	background-color: #' . $this->contentColors['select_bg'] . ';
	border-color: #' . $this->contentColors['select_border'] . ';
	color: #' . $this->contentColors['select_text'] . ';
}
.toolbar .sbSelector > span {border-top-color: #' . $this->contentColors['select_text'] . ';}
.toolbar .sbSelector:hover,
.toolbar .sbHolder .sbToggleOpen + .sbSelector {
	background-color: #' . $this->contentColors['select_bg_h'] . ';
	border-color: #' . $this->contentColors['select_border_h'] . ';
	color: #' . $this->contentColors['select_text_h'] . ';
}
.toolbar .sbSelector:hover > span,
.toolbar .sbHolder .sbToggleOpen + .sbSelector > span {border-top-color: #' . $this->contentColors['select_text_h'] . ';}
.toolbar .sbOptions li {background-color: #' . $this->contentColors['dropdown_link_bg'] . ';}
.toolbar .sbOptions li a {color: #' . $this->contentColors['dropdown_link'] . ';}
.toolbar .sbOptions li:hover {background-color: #' . $this->contentColors['dropdown_link_bg_h'] . ';}
.toolbar .sbOptions li:hover a {color: #' . $this->contentColors['dropdown_link_h'] . ';}
	
/**** Pager ****/
.pages li a,
.pages li a.next,
.pages li a.previous {
	background-color: #' . $this->contentColors['buttons_bg'] . ';
	border-color: #' . $this->contentColors['buttons_border'] . ';
	color: #' . $this->contentColors['buttons_text_color'] . ';
}
.pages li a:hover,
.pages li a.next:hover,
.pages li a.previous:hover {
	background-color: #' . $this->contentColors['buttons_bg_h'] . ';
	border-color: #' . $this->contentColors['buttons_border_h'] . ';
	color: #' . $this->contentColors['buttons_text_color_h'] . ';
}
.pages li.current {
	background-color: #' . $this->contentColors['buttons_bg_a'] . ';
	border-color: #' . $this->contentColors['buttons_border_a'] . ';
	color: #' . $this->contentColors['buttons_text_color_a'] . ';
}

/*====== Buttons ======*/

/**** Type 1 ****/
.opc-wrapper-opc .login,
a.aw-blog-read-more,
aside.sidebar .block-tags .actions a,
#topCartContent button > span,
.content_bottom button.button > span,
button.button > span,
#topCartContent .actions a:hover,
.content_bottom .grid_12 > button > span,
.content_bottom .grid_12 > button:hover > span,
.cart-table .buttons-row .buttons .btn-clear:hover > span, 
.cart-table .buttons-row .buttons .btn-update:hover > span,
.my-wishlist .buttons-set .btn-share:hover > span, 
.my-wishlist .buttons-set .btn-add:hover > span,
aside.sidebar .actions a:hover {
	background-color: #' . $this->buttonsColors['buttons1_bg'] . ';
	color: #' . $this->buttonsColors['buttons1_text'] . ';
	border-color: #' . $this->buttonsColors['buttons1_border'] . ';
}
.opc-wrapper-opc .btn-checkout:hover span,
.opc-wrapper-opc .btn-checkout:hover span span,
.opc-wrapper-opc .login:hover,
a.aw-blog-read-more:hover,
aside.sidebar .block-tags .actions a:hover,
#topCartContent button:hover > span,
button.button:hover > span,
#topCartContent .actions a,
.cart-table .buttons-row .buttons .btn-clear > span, 
.cart-table .buttons-row .buttons .btn-update > span,
.my-wishlist .buttons-set .btn-share > span, 
.my-wishlist .buttons-set .btn-add > span,
aside.sidebar .actions a{
	background-color: #' . $this->buttonsColors['buttons1_bg_h'] . ';
	color: #' . $this->buttonsColors['buttons1_text_h'] . ';
	border-color: #' . $this->buttonsColors['buttons1_border_h'] . ';
}
#topCartContent button > span,
button.button > span,
#topCartContent .actions a,
.content_bottom .grid_12 > button > span,
.cart-table .buttons-row .buttons .btn-clear > span, 
.cart-table .buttons-row .buttons .btn-update > span,
.my-wishlist .buttons-set .btn-share > span, 
.my-wishlist .buttons-set .btn-add > span,
aside.sidebar .actions a,
#login-holder .link-box{border-width: ' . $this->buttonsColors['buttons1_border_width'] . 'px;}

/**** Type 2 ****/
.opc-wrapper-opc .text-login a.opc-link-login,
.opc-wrapper-opc button.btn-checkout > span,
.opc-wrapper-opc button.btn-checkout.button-disabled > span,
.cart .btn-proceed-checkout > span,
#checkout-review-submit #review-buttons-container button.btn-checkout {
	background-color: #' . $this->buttonsColors['buttons2_bg'] . ';
	color: #' . $this->buttonsColors['buttons2_text'] . ';
	border-color: #' . $this->buttonsColors['buttons2_border'] . ';
	border-width: ' . $this->buttonsColors['buttons2_border_width'] . 'px;
}
.opc-wrapper-opc .text-login a.opc-link-login:hover,
.cart .btn-proceed-checkout:hover > span,
.opc-wrapper-opc button.btn-checkout:hover > span,
#checkout-review-submit #review-buttons-container button.btn-checkout:hover {
	background-color: #' . $this->buttonsColors['buttons2_bg_h'] . ';
	color: #' . $this->buttonsColors['buttons2_text_h'] . ';
	border-color: #' . $this->buttonsColors['buttons2_border_h'] . ';
}

/**** Quick View Button ****/
.products-grid .btn-quick-view > span,
.products-list .btn-quick-view > span {
	background-color: #' . $this->buttonsColors['quick_view_bg'] . ';
	color: #' . $this->buttonsColors['quick_view_text'] . ';
	border-color: #' . $this->buttonsColors['quick_view_border'] . ';
	border-width: ' . $this->buttonsColors['quick_view_border_width'] . 'px;
}
.products-grid .btn-quick-view:hover > span,
.products-list .btn-quick-view:hover > span {
	background-color: #' . $this->buttonsColors['quick_view_bg_h'] . ';
	color: #' . $this->buttonsColors['quick_view_text_h'] . ';
	border-color: #' . $this->buttonsColors['quick_view_border_h'] . ';
}

/*====== Products =======*/

.products-list li.item .product-img-box,
.products-grid li.item .product-img-box {
	background-color: #' . $this->productsColors['product_bg'] . ';
	border-color: #' . $this->productsColors['product_border'] . '; 
	border-width: ' . $this->productsColors['product_border_width'] . 'px;
} 
.products-grid .product-name a,
.products-list .product-name a {color: #' . $this->productsColors['product_title_color'] . ';}
.products-grid .product-name a:hover,
.products-list .product-name a:hover {color: #' . $this->productsColors['product_title_color_h'] . ';}
.products-grid .desc,
.products-list .desc {color: #' . $this->productsColors['product_text_color'] . ';}
.products-grid .desc a,
.products-list .desc a {color: #' . $this->productsColors['product_link_color'] . ';}
.products-grid .desc a:hover,
.products-list .desc a:hover {color: #' . $this->productsColors['product_link_color_h'] . ';}
.products-grid .price-box .price,
.products-list .price-box .price {color: #' . $this->productsColors['product_price_color'] . ';}
.products-grid .price-box .old-price .price,
.products-list .price-box .old-price .price {color: #' . $this->productsColors['product_old_price_color'] . ';}
.products-grid .price-box .special-price .price,
.products-list .price-box .special-price .price {color: #' . $this->productsColors['product_special_price_color'] . ';}

/**** Product Labels ****/
.label-new {
	background-color: #' . $this->productsColors['new_bg'] . ';
	color: #' . $this->productsColors['new_text'] . ';
}
.label-type-5 span.label-new:after {border-bottom-color: #' . $this->productsColors['new_bg'] . ';}
.label-type-5 span.label-new:before {border-top-color: #' . $this->productsColors['new_bg'] . ';}
.products-grid .availability-only,
.products-list .availability-only,
.label-sale {
	background-color: #' . $this->productsColors['sale_bg'] . ';
	color: #' . $this->productsColors['sale_text'] . ';
}
.label-type-5 div.label-sale:before,
.products-grid.label-type-5 .availability-only:before,
.products-list.label-type-5 .availability-only:before {border-top-color: #' . $this->productsColors['sale_bg'] . ';}
.label-type-5 div.label-sale:after,
.products-grid.label-type-5 .availability-only:after,
.products-list.label-type-5 .availability-only:after {border-bottom-color: #' . $this->productsColors['sale_bg'] . ';}

/*====== Social Links =======*/

ul.social-links li a {background-color: #' . $this->socialLinksColors['social_links_bg'] . ';}
ul.social-links li a i {color: #' . $this->socialLinksColors['social_links_icon'] . ';}
ul.social-links li a:hover {background-color: #' . $this->socialLinksColors['social_links_bg_h'] . ';}
ul.social-links li a:hover i {color: #' . $this->socialLinksColors['social_links_icon_h'] . ';}

/*====== Footer =======*/

#footer,
#footer > .container_12,
#footer_bottom,
#footer_bottom .container_12 {background-color: #' . $this->footerColors['footer_bg'] . ';}
#footer,
#footer_bottom address {color: #' . $this->footerColors['footer_text'] . ';}
#footer a {color: #' . $this->footerColors['footer_links'] . ';}
#footer a:hover {color: #' . $this->footerColors['footer_links_h'] . ';}
#footer_bottom,
body.boxed-layout #footer_bottom .container_12 {
	border-color: #' . $this->footerColors['footer_border'] . ';
	border-width: ' . $this->footerColors['footer_border_width'] . 'px;
}
#footer h3,
#footer .block-subscribe strong span,
#footer .block-tags strong span {color: #' . $this->footerColors['block_title'] . ';}
#footer ul li a {color: #' . $this->footerColors['list_links_color'] . ';}
#footer ul li a:hover {color: #' . $this->footerColors['list_links_color_h'] . ';}
#footer .sbSelector {
	color: #' . $this->footerColors['select_text'] . ';
	border-color: #' . $this->footerColors['select_border'] . ';
	background-color: #' . $this->footerColors['select_bg'] . ';
}
#footer .sbSelector > span {border-top-color: #' . $this->footerColors['select_text'] . ';}
#footer .sbSelector:hover,
#footer .sbHolder .sbToggleOpen + .sbSelector {
	color: #' . $this->footerColors['select_text_h'] . ';
	border-color: #' . $this->footerColors['select_border_h'] . ';
	background-color: #' . $this->footerColors['select_bg_h'] . ';
}
#footer .sbSelector:hover > span,
#footer .sbHolder .sbToggleOpen + .sbSelector > span {border-top-color: #' . $this->footerColors['select_text_h'] . ';}
#footer .sbOptions {
	background-color: #' . $this->footerColors['dropdown_bg'] . ';
	border-color: #' . $this->footerColors['dropdown_border'] . ';
}
#footer .sbOptions li {background-color: #' . $this->footerColors['dropdown_link_bg'] . ';}
#footer .sbOptions li a {color: #' . $this->footerColors['dropdown_link'] . ';}
#footer .sbOptions li:hover {background-color: #' . $this->footerColors['dropdown_link_bg_h'] . ';}
#footer .sbOptions li:hover a {color: #' . $this->footerColors['dropdown_link_h'] . ';}

/* Newsletter */
#footer .block-subscribe label {color: #' . $this->footerColors['newsletter_label'] . ';}
#footer .block-subscribe .input-box input {
	background-color: #' . $this->footerColors['newsletter_bg'] . ';
	border-color: #' . $this->footerColors['newsletter_border'] . ';
	color: #' . $this->footerColors['newsletter_text'] . ';
}

/* Footer Tags */
#footer .tags-list li a {color: #' . $this->footerColors['tags_text'] . ';}
#footer .tags-list li a:hover {color: #' . $this->footerColors['tags_text_h'] . ';}

/* Footer Contact Form */
#footer .contacts-footer-content label { color: #' . $this->footerColors['contact_label'] . ';}
#footer .contacts-footer-content  input,
#footer .contacts-footer-content .wide textarea {
	border-color: #' . $this->footerColors['contact_border'] . ';
	background-color: #' . $this->footerColors['contact_bg'] . ';
	color: #' . $this->footerColors['contact_text'] . ';
}
#footer .contacts-footer-content .form-list label.required em,
#footer .contacts-footer-content .validation-advice {color: #' . $this->footerColors['contact_system'] . ';}

';
}

    	$this->saveData($css);
        Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('ThemeOptionsMinimalism')->__("CSS file with custom styles has been created"));
        return true;
    }

    private function saveData($data)
    {
        $this->setLocation ();

        try {
	        /*$fh = fopen($file, 'w');
	       	fwrite($fh, $data);
	        fclose($fh);*/

            $fh = new Varien_Io_File(); 
            $fh->setAllowCreateFolders(true); 
            $fh->open(array('path' => $this->dirPath));
            $fh->streamOpen($this->filePath, 'w+'); 
            $fh->streamLock(true); 
            $fh->streamWrite($data); 
            $fh->streamUnlock(); 
            $fh->streamClose(); 
    	}
    	catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('ThemeOptionsMinimalism')->__('Failed creation custom css rules. '.$e->getMessage()));
        }
    }

}