<?php
/**
 * Include some javascript and css for displaying product images.
 */
class Product_GalleryExtension extends Extension {
	
	/**
	 * Include javascript and css for displaying product images.
	 */
	public function onAfterInit() {
		
		Requirements::javascript('swipestripe-gallery/javascript/libs/jquery-1.7.1.min.js');
		Requirements::javascript('swipestripe-gallery/javascript/libs/jquery.easing.1.2.js');
		Requirements::javascript('swipestripe-gallery/javascript/libs/jquery.fancybox.js');
		Requirements::javascript('swipestripe-gallery/javascript/libs/jquery.anythingslider.min.js');
		Requirements::javascript('swipestripe-gallery/javascript/ProductPage.js');

		Requirements::css('swipestripe-gallery/css/libs/jquery.fancybox.css');
		Requirements::css('swipestripe-gallery/css/gallery.css');
	}
}

/**
 * Join table object for gallery images
 */
class Product_Images extends DataObject {
	
	static $db = array (
		'PageID' => 'Int',
		'ImageID' => 'Int',
		'Caption' => 'Text',
		'SortOrder' => 'Int'
	);
}
