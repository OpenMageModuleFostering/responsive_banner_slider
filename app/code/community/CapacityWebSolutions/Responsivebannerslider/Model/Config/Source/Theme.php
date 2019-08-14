<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Theme 
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'default', 'label'=>Mage::helper('adminhtml')->__('Default')),
            array('value' => 'blank', 'label'=>Mage::helper('adminhtml')->__('Blank')),
            array('value' => 'drop_shadow', 'label'=>Mage::helper('adminhtml')->__('Drop Shadow')),
            array('value' => 'embose', 'label'=>Mage::helper('adminhtml')->__('Embose')),
        );
    }
}