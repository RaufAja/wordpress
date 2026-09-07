document.addEventListener("DOMContentLoaded", function() {
    var swimming_pool_service_togglerIconImg = document.querySelector(".toggler_icon a");
    var swimming_pool_service_TogglerBody = document.querySelector(".pool_toggler_body");
    var swimming_pool_service_closeButton = document.querySelector(".pool_toggler_body .toggler_close a");

    swimming_pool_service_togglerIconImg.addEventListener("click", function() {
        if (swimming_pool_service_TogglerBody.style.display === "none" || !swimming_pool_service_TogglerBody.style.display) {
            swimming_pool_service_TogglerBody.style.display = "block";
            swimming_pool_service_TogglerBody.style.transition = "display 1s";
        } else {
            swimming_pool_service_TogglerBody.style.display = "none";
        }
    });

    swimming_pool_service_closeButton.addEventListener("click", function() {
        swimming_pool_service_TogglerBody.style.display = "none";
    });
});

jQuery(document).ready(function () {
	
	function swimming_pool_service_search_loop_focus(element) {
		var swimming_pool_service_focus = element.find('select, input, textarea, button, a[href] , a');
		var swimming_pool_service_firstFocus = swimming_pool_service_focus[0];  
		var swimming_pool_service_lastFocus = swimming_pool_service_focus[swimming_pool_service_focus.length - 1];
		var KEYCODE_TAB = 9;

		element.on('keydown', function swimming_pool_service_search_loop_focus(e) {
			var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

			if (!isTabPressed) {
			  return; 
			}

			if ( e.shiftKey ) /* shift + tab */ {
			  if (document.activeElement === swimming_pool_service_firstFocus) {
		    swimming_pool_service_lastFocus.focus();
		      e.preventDefault();
		    }
		  } else /* tab */ {
		  	if (document.activeElement === swimming_pool_service_lastFocus) {
		    	swimming_pool_service_firstFocus.focus();
		      e.preventDefault();
		    }
		  }
		});
	}

    swimming_pool_service_search_loop_focus(jQuery('.toggler_content_col'));

});