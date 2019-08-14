<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Navigationarrow
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'inside', 'label'=>Mage::helper('adminhtml')->__('Inside slider on both sides')),
            array('value' => 'outside', 'label'=>Mage::helper('adminhtml')->__('Outside the slider on both sides')),
            array('value' => 'inside_left', 'label'=>Mage::helper('adminhtml')->__('Inside slider grouped left')),
            array('value' => 'inside_right', 'label'=>Mage::helper('adminhtml')->__('Inside slider grouped right')),
            
        );
    }
}