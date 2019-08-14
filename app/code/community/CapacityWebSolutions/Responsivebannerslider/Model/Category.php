<?php
/***************************************************************************
 Extension Name  : Magento Responsive Banner Slider with Lazy Load Extension
 Extension URL   : http://www.magebees.com/magento-responsive-banner-slider-with-lazy-load-extension.html
 Copyright    : Copyright (c) 2015 MageBees, http://www.magebees.com
 Support Email   : support@magebees.com 
 ***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Category extends Mage_Core_Model_Abstract {
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