<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Navigation 
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'hover', 'label'=>Mage::helper('adminhtml')->__('On hover')),
            array('value' => 'always', 'label'=>Mage::helper('adminhtml')->__('Always')),
            array('value' => 'never', 'label'=>Mage::helper('adminhtml')->__('Never')),
           
        );
    }
}