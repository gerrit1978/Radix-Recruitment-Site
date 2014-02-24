Drupal.locale = { 'pluralFormula': function ($n) { return Number(($n!=1)); }, 'strings': {"":{"An AJAX HTTP error occurred.":"Er is een AJAX HTTP fout opgetreden.","HTTP Result Code: !status":"HTTP-resultaatcode: !status","An AJAX HTTP request terminated abnormally.":"Een AJAX HTTP-aanvraag is onverwacht afgebroken","Debugging information follows.":"Debug informatie volgt.","Path: !uri":"Pad: !uri","StatusText: !statusText":"Statustekst: !statusText","ResponseText: !responseText":"Antwoordtekst: !responseText","ReadyState: !readyState":"ReadyState: !readyState","Add":"Toevoegen","Upload":"Uploaden","Configure":"Instellen","All":"Alle","Done":"Gereed","Show":"Weergeven","Select all rows in this table":"Selecteer alle regels van deze tabel","Deselect all rows in this table":"De-selecteer alle regels van deze tabel","Not published":"Niet gepubliceerd","Please wait...":"Even geduld...","Hide":"Verbergen","Only files with the following extensions are allowed: %files-allowed.":"Uitsluitend bestanden met de volgende extensies zijn toegelaten: %files-allowed.","By @name on @date":"Door @name op @date","By @name":"Door @name","Not in menu":"Niet in een menu","Alias: @alias":"Alias: @alias","No alias":"Geen alias","New revision":"Nieuwe revisie","Drag to re-order":"Slepen om de volgorde te wijzigen","Changes made in this table will not be saved until the form is submitted.":"Wijzigingen in deze tabel worden pas opgeslagen wanneer het formulier wordt ingediend.","The changes to these blocks will not be saved until the \u003Cem\u003ESave blocks\u003C\/em\u003E button is clicked.":"Wijzigingen aan de blokken worden pas opgeslagen wanneer u de knop \u003Cem\u003EBlokken opslaan\u003C\/em\u003E aanklikt.","This permission is inherited from the authenticated user role.":"Dit toegangsrecht is ge\u00ebrfd van de rol \u0027geverifieerde gebruiker\u0027.","No revision":"Geen revisie","Not restricted":"Geen beperking","(active tab)":"(actieve tabblad)","Not customizable":"Niet aanpasbaar","Restricted to certain pages":"Beperkt tot bepaalde pagina\u0027s","The block cannot be placed in this region.":"Het blok kan niet worden geplaatst in dit gebied.","Customize dashboard":"Dashboard aanpassen","Hide summary":"Samenvatting verbergen","Edit summary":"Samenvatting bewerken","The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.":"Het bestand %filename kan niet ge\u00fcpload worden. Alleen bestanden met de volgende extensies zijn toegestaan: %extensions","Re-order rows by numerical weight instead of dragging.":"Herschik de rijen op basis van gewicht, in plaats van slepen.","Show row weights":"Gewicht van rijen tonen","Hide row weights":"Gewicht van rij verbergen","Autocomplete popup":"Popup voor automatisch aanvullen","Searching for matches...":"Zoeken naar overeenkomsten...","Available tokens":"Beschikbare tokens","Insert this token into your form":"Plaats deze token in uw formulier","First click a text field to insert your tokens into.":"Klik eerst een tekstveld aan om uw tokens in te plaatsen.","Automatic alias":"Automatische alias","Translatable":"Vertaalbaar","Not translatable":"Niet vertaalbaar","Restricted to certain languages":"Beperkt tot bepaalde talen","Remove group":"Groep verwijderen","Apply (all displays)":"Toepassen (alle weergaven)","Revert to default":"Terugzetten naar standaard","Apply (this display)":"Toepassen (deze weergave)","File browsing is disabled in directory %dir.":"Bestanden zoeken is uitgeschakeld in folder %dir.","You can not perform this operation.":"U kunt deze actie niet uitvoeren.","Do you want to refresh the current directory?":"Wilt u de huidige map verversen?","Delete selected files?":"Geselecteerde bestanden verwijderen?","Please select a thumbnail.":"Kies een miniatuur","Please select a file.":"Selecteer a.u.b. een bestand.","Log messages":"Log berichten","%filename is not an image.":"%filename is geen afbeelding.","You must select at least %num files.":"Selecteer tenminste %num bestanden.","You are not allowed to operate on more than %num files.":"U mag aan niet meer dan %num bestanden werken.","Close":"Sluiten","Change view":"Weergave aanpassen","Insert file":"Bestand toevoegen","Also allow !name role to !permission?":"Mag !name ook !permission?","New":"Nieuwe"}} };;
(function($) {
  $.authcache_cookie = function(name, value, lifetime) {
    lifetime = (typeof lifetime === 'undefined') ? Drupal.settings.authcache.cl : lifetime;
    $.cookie(name, value, $.extend(Drupal.settings.authcache.cp, {expires: lifetime}));
  };
}(jQuery));
;
(function ($, Drupal, window, document, undefined) {

Drupal.behaviors.callToAction = {
  attach: function(context, settings) {
    $('.block-call-to-action .handle').click(function() {
    
      var left = $('#call-to-action-wrapper').css('left');
      
      if (left != '0px' && left != '0') {
	      $('#call-to-action-wrapper').animate({
	        left: '+=302'
	      }, 1000, 'easeInOutExpo');
      }
    });
    
    $('a.close-contact-form').click(function(e) {
      e.preventDefault();
      $('#call-to-action-wrapper').animate({
	        left: '-=302'
	      }, 1000, 'easeInOutExpo');
    });
    
    $('a.open-contact').click(function(e) {
      e.preventDefault();
      var left = $('#call-to-action-wrapper').css('left');
      if (left != '0px' && left != '0') {
	      $('#call-to-action-wrapper').animate({
	        left: '+=302'
	      }, 1000, 'easeInOutExpo');
      }
    });
    
  }
}

})(jQuery, Drupal, this, this.document);
;
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
;
(function ($) {

/**
 * Attaches double-click behavior to toggle full path of Krumo elements.
 */
Drupal.behaviors.devel = {
  attach: function (context, settings) {

    // Add hint to footnote
    $('.krumo-footnote .krumo-call').before('<img style="vertical-align: middle;" title="Click to expand. Double-click to show path." src="' + Drupal.settings.basePath + 'misc/help.png"/>');

    var krumo_name = [];
    var krumo_type = [];

    function krumo_traverse(el) {
      krumo_name.push($(el).html());
      krumo_type.push($(el).siblings('em').html().match(/\w*/)[0]);

      if ($(el).closest('.krumo-nest').length > 0) {
        krumo_traverse($(el).closest('.krumo-nest').prev().find('.krumo-name'));
      }
    }

    $('.krumo-child > div:first-child', context).dblclick(
      function(e) {
        if ($(this).find('> .krumo-php-path').length > 0) {
          // Remove path if shown.
          $(this).find('> .krumo-php-path').remove();
        }
        else {
          // Get elements.
          krumo_traverse($(this).find('> a.krumo-name'));

          // Create path.
          var krumo_path_string = '';
          for (var i = krumo_name.length - 1; i >= 0; --i) {
            // Start element.
            if ((krumo_name.length - 1) == i)
              krumo_path_string += '$' + krumo_name[i];

            if (typeof krumo_name[(i-1)] !== 'undefined') {
              if (krumo_type[i] == 'Array') {
                krumo_path_string += "[";
                if (!/^\d*$/.test(krumo_name[(i-1)]))
                  krumo_path_string += "'";
                krumo_path_string += krumo_name[(i-1)];
                if (!/^\d*$/.test(krumo_name[(i-1)]))
                  krumo_path_string += "'";
                krumo_path_string += "]";
              }
              if (krumo_type[i] == 'Object')
                krumo_path_string += '->' + krumo_name[(i-1)];
            }
          }
          $(this).append('<div class="krumo-php-path" style="font-family: Courier, monospace; font-weight: bold;">' + krumo_path_string + '</div>');

          // Reset arrays.
          krumo_name = [];
          krumo_type = [];
        }
      }
    );
  }
};

})(jQuery);
;

(function($) {
	Drupal.behaviors.betterMessages = {
		attach: function (context) {
			var betterMessages = Drupal.settings.betterMessages; 
			var message_box = $('#better-messages-wrapper');
		
			/* jQuery UI Enhancements */
			if (betterMessages.jquery_ui != null) {
				if (betterMessages.jquery_ui.draggable == '1') { message_box.draggable(); }
			}
		
			/* Popup Message handling */
			if (!message_box.hasClass("better-messeges-processed")) {			
				/* Functions to determine the popin/popout animation */
				betterMessages.open = function() {
					switch (betterMessages.popin.effect) {
						case 'fadeIn': message_box.fadeIn(betterMessages.popin.duration);
							break;
						case 'slideDown': message_box.slideDown(betterMessages.popin.duration);
							break;
						default: message_box.fadeIn(betterMessages.popin.duration);
							break;
					}
				}
				betterMessages.close = function() {
					switch (betterMessages.popout.effect) {
						case 'fadeOut':	message_box.fadeOut(betterMessages.popout.duration);
							break;
						case 'slideUp':	message_box.slideUp(betterMessages.popout.duration);
							break;
						default: message_box.fadeOut(betterMessages.popout.duration);
							break;
					}
					message_box.addClass("better-messeges-processed");
				}
				/* Function to determine closing count */
				betterMessages.countDownClose = function(seconds) {
					if(seconds > 0) {
						seconds--;
						if (betterMessages.show_countdown == '1') {
							$('.message-timer').text(Drupal.t('Closing in' + ' ' + seconds + ' ' + Drupal.t('seconds')));
						}
			      if(seconds > 0) {
			      	betterMessages.countDown = setTimeout( function() {betterMessages.countDownClose(seconds);}, 1000 );
			      }
			      else {
							betterMessages.close();
						}
					}
				}
			
				/* Determine Popup Message position */
				message_box.css('width', betterMessages.width);
				var vertical = betterMessages.vertical;	var horizontal = betterMessages.horizontal;
				switch (betterMessages.position) {
					case 'center':
						vertical = ( $(window).height() - message_box.height() ) / 2;
						horizontal = ( $(window).width() - message_box.width() ) / 2;
						message_box.css({"top":vertical + 'px', "left":horizontal + 'px'});
						break;
					case 'tl':
						message_box.css({"top":vertical + 'px', "left":horizontal + 'px'});
						break;
					case 'tr':
						message_box.css({"top":vertical + 'px', "right":horizontal + 'px'});
						break;
					case 'bl':
						message_box.css({"bottom":vertical + 'px', "left":horizontal + 'px'});
						break;
					case 'br':
						message_box.css({"bottom":vertical + 'px', "right":horizontal + 'px'});
						break;
				}
			
				/* Here we control closing and opeing effects and controls */
				if (betterMessages.opendelay != 0) { 
					setTimeout( function() {betterMessages.open()}, betterMessages.opendelay * 1000 );
				} else { betterMessages.open(); }
				if (betterMessages.autoclose != 0) {
					betterMessages.countDownClose(betterMessages.autoclose);
				}
				if (betterMessages.hover_autoclose == '1') {
					message_box.hover(function() {
						clearTimeout(betterMessages.countDown);
						$('.message-timer').fadeOut('slow');
						}, function() {
							/* Suggest something to do here! */
						}
					);
				}
				$('a.message-close').click(function() { betterMessages.close();	return false; });
				/* Esc key handler for closing the message. This doesn't work on Safari or Chrome
					 See the issue here: http://code.google.com/p/chromium/issues/detail?id=14635
				*/
				$(document).keypress(function(e){
					if(e.keyCode==27){  
						betterMessages.close();
						return false; 
					}
				});
			
				/* Determine Popup Message position for IE6 bug with fixed display */
				if (betterMessages.fixed == '1' && !($.browser.msie && $.browser.version == '6.0')) {
					message_box.css({"position":"fixed"});
				}
				else { /* IE6 handing */
					message_box.css({"position":"absolute"});
					$(window).scroll(function() { message_box.stop().css({top:($(window).scrollTop() + vertical) + 'px'});});
				}
			}
		}
	}
})(jQuery);
;
