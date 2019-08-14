<?php
 
/***************************************************************************
	@extension	: Responsive Banner Slider Extension.
	@copyright	: Copyright (c) 2015 Capacity Web Solutions.
	( http://www.capacitywebsolutions.com )
	@author		: Capacity Web Solutions Pvt. Ltd.
	@support	: magento@capacitywebsolutions.com	
***************************************************************************/

class CapacityWebSolutions_Responsivebannerslider_Helper_Data extends Mage_Core_Helper_Abstract
{

	const NAME_DIR_JS = 'responsivebannerslider/';

	protected $_files = array(
			'jquery.min.js',
			'jquery.flexslider.js',
			'jquery.easing.js',
			'froogaloop.js',
			'jquery.fitvid.js',
		
			
		);
	
	public function getJQueryPath($file){
		return self::NAME_DIR_JS . $file;
	}
	
	public function getFiles(){
		return $this->_files;
	}

	public function resizeImg($fileName)
	{
		$dir = "thumbnails";
		$width = Mage::getStoreConfig('responsivebannerslider/general/thumbnail_width');
				
		if(trim($width) == "" || trim($width) < 0){
			$width = "200";
		}
		
		$basePath = Mage::getBaseDir('media') . DS . "responsivebannerslider" . DS . $fileName;
		$newPath = Mage::getBaseDir('media') . DS . "responsivebannerslider" . DS . $dir . DS . $fileName;
		
		if ($width != '') {
			
			if (file_exists($newPath)) {
				unlink($newPath);
			}
		
			if (file_exists($basePath) && is_file($basePath) && !file_exists($newPath)) {
				$imageObj = new Varien_Image($basePath);
				$imageObj->constrainOnly(TRUE);
				$imageObj->keepAspectRatio(TRUE);
				$imageObj->keepFrame(FALSE);
				$imageObj->quality(100);
				$imageObj->resize($width);
				$imageObj->save($newPath);
			}
		} 
		return true;
	}
}