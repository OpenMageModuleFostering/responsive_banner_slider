<?php
/***************************************************************************
 Extension Name  : Magento Responsive Banner Slider with Lazy Load Extension
 Extension URL   : http://www.magebees.com/magento-responsive-banner-slider-with-lazy-load-extension.html
 Copyright    : Copyright (c) 2015 MageBees, http://www.magebees.com
 Support Email   : support@magebees.com 
 ***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Config_Source_Pages 
{
    public function toOptionArray() {
        $collection = Mage::getSingleton('cms/page')->getCollection()
				->addFieldToFilter('is_active', 1);
		$result = array();
		foreach ($collection as $item) {
			$data = array(
				'value' => $item->getData('page_id'),
				'label' => $item->getData('title'));
			$result[] = $data;
		}
		return $result;
    }
}