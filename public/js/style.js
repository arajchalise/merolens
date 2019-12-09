/*search bar*/
jQuery(document).ready(function(e){
    jQuery('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = jQuery(this).attr("href").replace("#","");
		var concept = jQuery(this).text();
		jQuery('.search-panel span#search_concept').text(concept);
		jQuery('.input-group #search_param').val(param);
	});
});

/*navbar*/

jQuery(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
jQuery(window).resize(function(){
	if (jQuery(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      jQuery(".navbar .dropdown-toggle").hover(function () {
         jQuery(this).parent().toggleClass("show");
         jQuery(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      jQuery( ".navbar .dropdown-menu" ).mouseleave(function() {
        jQuery(this).removeClass("show");  
      });
  
		// do something here
	}	
});  
  
  

// document ready  
});
