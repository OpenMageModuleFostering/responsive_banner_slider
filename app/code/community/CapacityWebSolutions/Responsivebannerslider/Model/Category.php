<?php
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Category extends Mage_Core_Model_Abstract
{
   protected function _construct(){
        $this->_init('responsivebannerslider/category_category');
    }
    public function savecategoryRelation($category){
        $data = $category->getCategoriesData();
        if (!is_null($data)) {
            $this->_getResource()->savecategoryRelation($category, $data);
        }
        return $this;
    }
    public function getCategoryCollection($category){
        $collection = Mage::getResourceModel('responsivebannerslider/category_category_collection')
            ->addcategoryFilter($category);
        return $collection;
    }
}