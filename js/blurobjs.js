$(document).ready(function(){
		var count = 1;
	
		$( ".slideImage" ).each(function( index ) {
				
				var orightml = $(this).css("background-image");
				$(this).find(".slideBlurImage").css("background-image",orightml);
				$(this).find(".headerbgBlurImage").css("background-image",orightml);	
				
  		});
  		
  		 //setTimeout(function() {
	   $(".headershade").addClass("fadeOut");
	   //},1500);
	   
	   setTimeout(function() {
	   $(".headershade").hide();
	   },3000);
	
	 
	var p1 = $( ".slideBlur" );
	if(p1) {
		var offset1 = p1.offset();
		if(offset1.top) {
			var offsetPosition1 = "0px -" + offset1.top + "px";
		}
	}
	 
	
	
	var p2 = $( ".headerbgBlur" );
	if(p2) {
		var offset2 = p2.offset();
	}
	
	if(p3) {
	var p3 = $( ".headeroverlay" );
		if(offset3) {
			var offset3 = p3.offset();
		}
	}
	
	if(offset3 && offset2) {
	
	if(offset3.left && offset2.top) {
		//var offsetPosition2 = "-"+offset3.left+"px -" + offset2.top + "px";
		$(".slideBlurImage").css("background-position",offsetPosition1);
		$(".headerbgBlurImage").css("background-position",offsetPosition2);
	}
	
	}

	//$(".slideBlurImage").css("background-position",offsetPosition1);
	//$(".headerbgBlurImage").css("background-position",offsetPosition2);
	//$(".headerbgBlurImage").css("background-position",offsetPosition2);
	
	/*$('.slideBlur').blurjs({
		 
		radius:30
	});*/
	
	
	
	
});