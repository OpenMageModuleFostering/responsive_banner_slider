<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Block_Adminhtml_Slidergroup_Edit_Tab_Code extends Mage_Adminhtml_Block_Widget_Grid
{
	public function __construct() {
		parent::__construct();
		$this->setTemplate('responsivebannerslider/code.phtml');
	}
	
	public function getCurrentGroup() {
		return Mage::registry('slidergroup_data');
	}

}