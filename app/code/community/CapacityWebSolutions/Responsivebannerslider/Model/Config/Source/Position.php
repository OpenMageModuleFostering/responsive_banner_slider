<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Position 
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'content_top', 'label'=>Mage::helper('adminhtml')->__('Content Top')),
            array('value' => 'content_bottom', 'label'=>Mage::helper('adminhtml')->__('Content Bottom')),
        );
    }
}