<?php
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Block_Adminhtml_Slider_Renderer_Groups extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row)
	{
		$value =  $row->getData($this->getColumn()->getIndex());
		$groupdata = explode(",",$value);
		$Slider_Groups = '';
		for($i=0; $i<count($groupdata); $i++) {
		
			$groups = Mage::getModel('responsivebannerslider/responsivebannerslider')->load($groupdata[$i]);
			$title = $groups->getData('title');
			if($i ==0){
				$Slider_Groups = $title; 		 
			}else{
				$Slider_Groups .= ", ".$title; 		 
			}
		}
		return $Slider_Groups;
	}
}