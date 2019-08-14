<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Video 
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'image', 'label'=>Mage::helper('adminhtml')->__('Image')),
            array('value' => 'youtube', 'label'=>Mage::helper('adminhtml')->__('Youtube Video')),
            array('value' => 'vimeo', 'label'=>Mage::helper('adminhtml')->__('Vimeo Video')),
           
        );
    }
}