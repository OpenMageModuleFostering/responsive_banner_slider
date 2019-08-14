<?php
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Model_Observer
{
    public function prepareLayoutBefore(Varien_Event_Observer $observer)
    {
		$enabled = Mage::getStoreConfig('responsivebannerslider/general/enabled');
		
		$disable_output = Mage::getStoreConfig('advanced/modules_disable_output/CapacityWebSolutions_Responsivebannerslider');
		
		if (!$enabled) {
            return $this;
        }
		if ($disable_output) {
		    return $this;
        }

        $block = $observer->getEvent()->getBlock();

        if ("head" == $block->getNameInLayout()) {
            foreach (Mage::helper('responsivebannerslider')->getFiles() as $file) {
				$jquery_enabled = Mage::getStoreConfig('responsivebannerslider/general/jquery');
				$lazy_load_jquery = Mage::getStoreConfig('responsivebannerslider/general/lazy_load_jquery');
			
				if($file=="jquery.min.js")
				{
					if($jquery_enabled){
						$block->addJs(Mage::helper('responsivebannerslider')->getJQueryPath($file));
					}
				}else{
					$block->addJs(Mage::helper('responsivebannerslider')->getJQueryPath($file));
				}
				
				if($lazy_load_jquery){
					$block->addJs('responsivebannerslider/jquery.lazy.js');	
				}
				
				$block->addCss('css/responsivebannerslider/default.css');
	        }
        }

        return $this;
    }
	
	public function adminSystemConfigChangedSection($observer)
	{
		// Resized Images //
	
		$dir = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_MEDIA) . DS . "responsivebannerslider" . DS . "thumbnails";
			
  		if (is_dir($dir)) {
				 
			foreach(glob($dir . '/*') as $file) {
				unlink($file); 
			}
		}

		$path_to_image_dir = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_MEDIA) . DS . "responsivebannerslider";
	
		if ( $handle = opendir( $path_to_image_dir ) )
		{
			while (false !== ($file = readdir($handle)))
			{
				if ( is_file($path_to_image_dir.'/'.$file) )
				{
			   
					$basepath = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_MEDIA) . DS . "responsivebannerslider" . DS . $file;
			
					$newpath = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_MEDIA) . DS . "responsivebannerslider" . DS . "thumbnails". DS . $file;
				
					$width =  Mage::getStoreConfig('responsivebannerslider/general/thumbnail_width');
						
					if(trim($width) == "" || trim($width) < 0){
						$width = "200";
					}
														
					if ($width != '') {
										
						//if image has already resized then just return URL
						if (file_exists($basepath) && is_file($basepath) && !file_exists($newpath)) {
						
							$imageObj = new Varien_Image($basepath);
							$imageObj->constrainOnly(TRUE);
							$imageObj->keepAspectRatio(FALSE);
							$imageObj->keepFrame(FALSE);
							$imageObj->resize($width);
							$imageObj->save($newpath);
						}
						
					 }
				}
			}
			
			closedir($handle);
		}
		
	}
	
	
}
