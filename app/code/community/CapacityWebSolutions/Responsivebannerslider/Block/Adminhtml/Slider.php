<?php
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Block_Adminhtml_Slider extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct() {
		$this->_controller = 'adminhtml_slider';
		$this->_blockGroup = 'responsivebannerslider';
		$this->_headerText = Mage::helper('responsivebannerslider')->__('Responsive Banner Slider - Slides');
		$this->_addButtonLabel = Mage::helper('responsivebannerslider')->__('Add Slide');
		parent::__construct();
	}
}