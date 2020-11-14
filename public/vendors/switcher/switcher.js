(function($) {		
	"use strict";
	

	var shareThisButton = "<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cebe0cc5676af001119e971&product=sticky-share-buttons' async='async'></script>";
	
	var addThisButton = '<!-- Go to www.addthis.com/dashboard to customize your tools --><script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c7aa492bf4a3d15"></script>';
	


	
	jQuery('.theme-skin').on('click',function(){
        jQuery('.skin').attr('href', jQuery(this).attr('href'));
		jQuery('.menu-logo img').attr('src', jQuery(this).attr('data-menu-logo'));
		jQuery('.header-transparent .menu-logo img').attr('src', jQuery(this).attr('data-header-transparent-logo'));
		jQuery('.pt-logo img').attr('src', jQuery(this).attr('data-pt-logo'));
        return false;
    });
   
	
})(jQuery);
