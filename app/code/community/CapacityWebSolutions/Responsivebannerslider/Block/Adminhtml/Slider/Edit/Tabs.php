<?php
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Block_Adminhtml_Slider_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
	public function __construct()
	{
		parent::__construct();
		$this->setId('slider_tabs');
		$this->setDestElementId('edit_form');
		$this->setTitle(Mage::helper('responsivebannerslider')->__('Manage Slide'));
	}

	protected function _beforeToHtml()
	{
		$this->addTab('slide_section', array(
			'label'     => Mage::helper('responsivebannerslider')->__('General Information'),
			'title'     => Mage::helper('responsivebannerslider')->__('General Information'),
			'content'   => $this->getLayout()->createBlock('responsivebannerslider/adminhtml_slider_edit_tab_form')->toHtml(),
		));
	  
	  return parent::_beforeToHtml();
	}
}