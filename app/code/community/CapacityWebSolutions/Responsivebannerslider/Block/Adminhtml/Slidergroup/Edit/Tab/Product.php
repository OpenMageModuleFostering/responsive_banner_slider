<?php
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

?>
<?php

class CapacityWebSolutions_Responsivebannerslider_Block_Adminhtml_Slidergroup_Edit_Tab_Product extends  Mage_Adminhtml_Block_Widget_Grid
{
  
	public function __construct() {
		parent::__construct();
		$this->setTemplate('responsivebannerslider/category/edit/tab/product.phtml');
	}

	protected function getProductIds() {
		
		$data = Mage::registry('slidergroup_data');
		$prd_model = Mage::getModel('responsivebannerslider/product')->getCollection()
			->addFieldToFilter('slidergroup_id',array('eq' => $data->getData('slidergroup_id')));
		$_productList = array();
		
		foreach($prd_model as $prd_data){
			$_productList[] = $prd_data->getData('product_sku');
		}
		return is_array($_productList) ? $_productList : array();
	}

	public function getIdsString() {
		return implode(', ', $this->getProductIds());
	} 

}
