<?php
/***************************************************************************
 Extension Name  : Magento Responsive Banner Slider with Lazy Load Extension
 Extension URL   : http://www.magebees.com/magento-responsive-banner-slider-with-lazy-load-extension.html
 Copyright    : Copyright (c) 2015 MageBees, http://www.magebees.com
 Support Email   : support@magebees.com 
 ***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Product extends Mage_Core_Model_Abstract {
    public function _construct() {
        parent::_construct();
        $this->_init('responsivebannerslider/product');
    }
}