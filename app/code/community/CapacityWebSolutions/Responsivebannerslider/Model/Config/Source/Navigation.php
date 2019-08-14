<?php
/***************************************************************************
 Extension Name  : Magento Responsive Banner Slider with Lazy Load Extension
 Extension URL   : http://www.magebees.com/magento-responsive-banner-slider-with-lazy-load-extension.html
 Copyright    : Copyright (c) 2015 MageBees, http://www.magebees.com
 Support Email   : support@magebees.com 
 ***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Navigation 
{
    public function toOptionArray() {
        return array(
            array('value' => 'hover', 'label'=>Mage::helper('adminhtml')->__('On hover')),
            array('value' => 'always', 'label'=>Mage::helper('adminhtml')->__('Always')),
            array('value' => 'never', 'label'=>Mage::helper('adminhtml')->__('Never')),
        );
    }
}