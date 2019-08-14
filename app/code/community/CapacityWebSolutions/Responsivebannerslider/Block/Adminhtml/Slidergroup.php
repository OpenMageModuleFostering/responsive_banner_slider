<?php
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Block_Adminhtml_Slidergroup extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct() {	
	
		$this->_controller = 'adminhtml_slidergroup';
		$this->_blockGroup = 'responsivebannerslider';
		$this->_headerText = Mage::helper('responsivebannerslider')->__('Responsive Banner Slider Groups');
		$this->_addButtonLabel = Mage::helper('responsivebannerslider')->__('Add Group');
		parent::__construct();
	}
    
  	protected function _prepareLayout() {
		
		if (!Mage::app()->isSingleStoreMode()) {
			$this->setChild('store_switcher', $this->getLayout()->createBlock('adminhtml/store_switcher')
					->setUseConfirm(false)
					->setSwitchUrl($this->getUrl('*/*/*', array('store'=>null)))
			);
		}

		return parent::_prepareLayout();
	}

  	public function getStoreSwitcherHtml() {
		return $this->getChildHtml('store_switcher');
	}
	
	public function getGroupData() {
		$groups = Mage::getModel('responsivebannerslider/responsivebannerslider')->getCollection()->setOrder('slidergroup_id', 'ASC');
			foreach($groups as $group) {
				$options[$group->getData('slidergroup_id')] = $group->getTitle();
			}
			
		return $options;
   }
}