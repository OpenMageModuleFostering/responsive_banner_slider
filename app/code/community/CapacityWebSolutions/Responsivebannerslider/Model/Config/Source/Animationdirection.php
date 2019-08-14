<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Animationdirection
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'horizontal', 'label'=>Mage::helper('adminhtml')->__('Horizontal')),
            array('value' => 'vertical', 'label'=>Mage::helper('adminhtml')->__('Vertical')),
                    
        );
    }
}