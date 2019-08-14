<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Animationtype
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'slide', 'label'=>Mage::helper('adminhtml')->__('Slide')),
            array('value' => 'fade', 'label'=>Mage::helper('adminhtml')->__('Fade')),
                    
        );
    }
}