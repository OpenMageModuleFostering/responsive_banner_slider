<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Type 
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'basic', 'label'=>Mage::helper('adminhtml')->__('Basic slider')),
            array('value' => 'carousel', 'label'=>Mage::helper('adminhtml')->__('Carousel')),
            array('value' => 'bas-caro', 'label'=>Mage::helper('adminhtml')->__('Basic slider with carousel navigation')),
           
        );
    }
}