<?php

/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/


class CapacityWebSolutions_Responsivebannerslider_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
		$this->loadLayout();     
		$this->renderLayout();
    }
	
	
}