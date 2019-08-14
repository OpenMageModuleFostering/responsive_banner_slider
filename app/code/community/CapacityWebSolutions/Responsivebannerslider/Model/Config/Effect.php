<?php
/***************************************************************************
	@extension	: Color Swatches Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Effect
{
   public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Data1')),
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Data2 ')),
            array('value' => 2, 'label'=>Mage::helper('adminhtml')->__('Data3 ')),
        );
    }

}

