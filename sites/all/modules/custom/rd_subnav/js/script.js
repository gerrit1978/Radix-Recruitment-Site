(function ($, Drupal, window, document, undefined) {

Drupal.behaviors.subNav = {
  attach: function(context, settings) {
    $('.block-rd-subnav a').click(function(e) {
      var href = $(this).attr('href');
      var selector = '.field-name-field-page-block ' + href;
      var offset = $(selector).offset();
      var top = offset.top;
      $('html, body').animate({scrollTop:top}, 1000);      
      e.preventDefault();
    });
  }
}

Drupal.behaviors.subNavAppear = {
  attach: function(context, settings) {
    if ($(window).width() > 769) {
	    // if anchor is set, make the block visible
	    var searchString = window.location.search.substring(1),
	    data = "",
	    i, val, params = searchString.split("&");
	    for (i=0;i<params.length;i++) {
	      val = params[i].split("=");
	      if (val[0] == "anchor") {
	        var data = val[1];
	      }
	    }
	    if (data.length > 0) {
	      $('.block-rd-subnav').fadeIn();
	    }    
	
			var scroll_ok = true;
			setInterval(function () {
			    scroll_ok = true;
			}, 33);//33ms is 30fps, you can try changing this to something larger for better performance
			$(window).bind('scroll', function () {
		    if (scroll_ok === true) {
	        scroll_ok = false;
	        //now run your code to animate with respect to scroll
		      var top = Math.abs($('html').offset().top);
		      if (top > 300) {
		        $('.block-rd-subnav').fadeIn();
		      } else {
		        $('.block-rd-subnav').fadeOut();
		      }
		    }
			});
    }
  }
}

})(jQuery, Drupal, this, this.document);
