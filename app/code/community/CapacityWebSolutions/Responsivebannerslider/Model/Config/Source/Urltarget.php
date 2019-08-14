<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Urltarget 
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'same_window', 'label'=>Mage::helper('adminhtml')->__('Same Window / Tab')),
            array('value' => 'new_window', 'label'=>Mage::helper('adminhtml')->__('New Window / Tab')),
                     
        );
    }
}