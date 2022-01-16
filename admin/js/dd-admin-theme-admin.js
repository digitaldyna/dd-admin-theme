(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
		
})( jQuery );

jQuery(document).ready(function () {
// 	let isOpen = false;
// 	jQuery(".button.show-settings").on("click", function (e) {
//     debugger;
//     e.preventDefault();
// 	let offset = jQuery(".wrap").offset().top;
	
		
// 	if( isOpen == true ){
// 		isOpen = false;
// 		jQuery("#adminmenu").css("margin-top", offset + "px");
// 	}else{
// 		isOpen = true
// 		jQuery("#adminmenu").css("margin-top", offset + "px");
// 	}
	
    
//   });

	
	var observer = new MutationObserver(function (mutations) {
		setTimeout(() => {
			let offset = jQuery(".wrap").offset().top;
			console.log(offset);
			document.querySelector("#adminmenu").style.marginTop = offset + "px";
		}, 550);
	});
	var target = document.querySelector("#screen-meta");
	observer.observe(target, {
	attributes: true,
	});
});