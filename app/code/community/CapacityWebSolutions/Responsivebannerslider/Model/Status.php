<?php
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Status extends Varien_Object
{
    const STATUS_DISABLED	= 0;
	const STATUS_ENABLED	= 1;

    static public function getOptionArray()
    {
		return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Enabled')),
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Disabled')),
        );
    }
}