<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Paginationposition
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'below', 'label'=>Mage::helper('adminhtml')->__('Below the slider')),
            array('value' => 'above', 'label'=>Mage::helper('adminhtml')->__('Above the slider')),
            array('value' => 'inside_top', 'label'=>Mage::helper('adminhtml')->__('Inside top slider')),
            array('value' => 'inside_bottom', 'label'=>Mage::helper('adminhtml')->__('Inside bottom slider')),
            array('value' => 'inside_bottom_left', 'label'=>Mage::helper('adminhtml')->__('Inside bottom left')),
            array('value' => 'inside_bottom_right', 'label'=>Mage::helper('adminhtml')->__('Inside bottom right')),
            
        );
    }
}