<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Paginationstyle
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'circular', 'label'=>Mage::helper('adminhtml')->__('Circular')),
            array('value' => 'squared', 'label'=>Mage::helper('adminhtml')->__('Square')),
            array('value' => 'circular_bar', 'label'=>Mage::helper('adminhtml')->__('Circular with bar')),
            array('value' => 'square_bar', 'label'=>Mage::helper('adminhtml')->__('Square with bar')),
            
        );
    }
}