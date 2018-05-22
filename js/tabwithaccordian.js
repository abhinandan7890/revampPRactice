 // PROGRAM TABBED
    $(".proGrams .tab_content").hide();
    $(".proGrams .tab_content:first").show();

  /* if in tab mode */
    $(".proGrams ul.tabs li").click(function() {
		
      $(".proGrams .tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $(".proGrams ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".proGrams .tab_drawer_heading").removeClass("d_active");
	  $(".proGrams .tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    /*$(".tabs").css("margin-top", function(){ 
       return ($(".tab_container").outerHeight() - $(".tabs").outerHeight() ) / 2;
    });*/
    });
    $(".proGrams .tab_container").css("min-height", function(){ 
      return $(".tabs").outerHeight() + 50;
    });
	/* if in drawer mode */
	$(".proGrams .tab_drawer_heading").click(function() {
      
      $(".proGrams .tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".proGrams .tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $(".proGrams ul.tabs li").removeClass("active");
	  $(".proGrams ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to bottom side
	   of last tab 
	$('ul.tabs li').last().addClass("tab_last");*/
	
// HOME PAGE TABBED
 $(".tab_content_home").hide();
    $(".tab_content_home:first").show();

  /* if in tab mode */
    $(".tabSection ul.tabs li").click(function() {
		
      $(".tabSection .tab_content_home").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $(".tabSection ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading_home").removeClass("d_active_home");
	  $(".tab_drawer_heading_home[rel^='"+activeTab+"']").addClass("d_active_home");
	  
    /*$(".tabs").css("margin-top", function(){ 
       return ($(".tab_container").outerHeight() - $(".tabs").outerHeight() ) / 2;
    });*/
    });
    $(".tab_container_home").css("min-height", function(){ 
      return $(".tabs").outerHeight() + 50;
    });
	/* if in drawer mode */
	$(".tab_drawer_heading_home").click(function() {
      
      $(".tab_content_home").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading_home").removeClass("d_active_home");
      $(this).addClass("d_active");
	  
	  $(".tabSection ul.tabs li").removeClass("active");
	  $(".tabSection ul.tabs li[rel^='"+d_activeTab+"']").addClass("active_home");
    });
	