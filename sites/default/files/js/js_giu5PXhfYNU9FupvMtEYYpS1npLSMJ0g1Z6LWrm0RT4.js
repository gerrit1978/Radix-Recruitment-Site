Drupal.locale = { 'pluralFormula': function ($n) { return Number(($n!=1)); }, 'strings': {"":{"An AJAX HTTP error occurred.":"Er is een AJAX HTTP fout opgetreden.","HTTP Result Code: !status":"HTTP-resultaatcode: !status","An AJAX HTTP request terminated abnormally.":"Een AJAX HTTP-aanvraag is onverwacht afgebroken","Debugging information follows.":"Debug informatie volgt.","Path: !uri":"Pad: !uri","StatusText: !statusText":"Statustekst: !statusText","ResponseText: !responseText":"Antwoordtekst: !responseText","ReadyState: !readyState":"ReadyState: !readyState","Edit":"Bewerken","None":"Geen","Add":"Toevoegen","Upload":"Uploaden","Configure":"Instellen","All":"Alle","Done":"Gereed","Show":"Weergeven","Select all rows in this table":"Selecteer alle regels van deze tabel","Deselect all rows in this table":"De-selecteer alle regels van deze tabel","Not published":"Niet gepubliceerd","Please wait...":"Even geduld...","Hide":"Verbergen","Only files with the following extensions are allowed: %files-allowed.":"Uitsluitend bestanden met de volgende extensies zijn toegelaten: %files-allowed.","By @name on @date":"Door @name op @date","By @name":"Door @name","Not in menu":"Niet in een menu","Alias: @alias":"Alias: @alias","No alias":"Geen alias","New revision":"Nieuwe revisie","Drag to re-order":"Slepen om de volgorde te wijzigen","Changes made in this table will not be saved until the form is submitted.":"Wijzigingen in deze tabel worden pas opgeslagen wanneer het formulier wordt ingediend.","The changes to these blocks will not be saved until the \u003Cem\u003ESave blocks\u003C\/em\u003E button is clicked.":"Wijzigingen aan de blokken worden pas opgeslagen wanneer u de knop \u003Cem\u003EBlokken opslaan\u003C\/em\u003E aanklikt.","This permission is inherited from the authenticated user role.":"Dit toegangsrecht is ge\u00ebrfd van de rol \u0027geverifieerde gebruiker\u0027.","No revision":"Geen revisie","Not restricted":"Geen beperking","(active tab)":"(actieve tabblad)","Not customizable":"Niet aanpasbaar","Restricted to certain pages":"Beperkt tot bepaalde pagina\u0027s","The block cannot be placed in this region.":"Het blok kan niet worden geplaatst in dit gebied.","Customize dashboard":"Dashboard aanpassen","Hide summary":"Samenvatting verbergen","Edit summary":"Samenvatting bewerken","The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.":"Het bestand %filename kan niet ge\u00fcpload worden. Alleen bestanden met de volgende extensies zijn toegestaan: %extensions","Re-order rows by numerical weight instead of dragging.":"Herschik de rijen op basis van gewicht, in plaats van slepen.","Show row weights":"Gewicht van rijen tonen","Hide row weights":"Gewicht van rij verbergen","Autocomplete popup":"Popup voor automatisch aanvullen","Searching for matches...":"Zoeken naar overeenkomsten...","Available tokens":"Beschikbare tokens","Insert this token into your form":"Plaats deze token in uw formulier","First click a text field to insert your tokens into.":"Klik eerst een tekstveld aan om uw tokens in te plaatsen.","Automatic alias":"Automatische alias","Translatable":"Vertaalbaar","Not translatable":"Niet vertaalbaar","Restricted to certain languages":"Beperkt tot bepaalde talen","Remove group":"Groep verwijderen","Apply (all displays)":"Toepassen (alle weergaven)","Revert to default":"Terugzetten naar standaard","Apply (this display)":"Toepassen (deze weergave)","File browsing is disabled in directory %dir.":"Bestanden zoeken is uitgeschakeld in folder %dir.","You can not perform this operation.":"U kunt deze actie niet uitvoeren.","Do you want to refresh the current directory?":"Wilt u de huidige map verversen?","Delete selected files?":"Geselecteerde bestanden verwijderen?","Please select a thumbnail.":"Kies een miniatuur","Please select a file.":"Selecteer a.u.b. een bestand.","Log messages":"Log berichten","%filename is not an image.":"%filename is geen afbeelding.","You must select at least %num files.":"Selecteer tenminste %num bestanden.","You are not allowed to operate on more than %num files.":"U mag aan niet meer dan %num bestanden werken.","Close":"Sluiten","Change view":"Weergave aanpassen","Insert file":"Bestand toevoegen","Also allow !name role to !permission?":"Mag !name ook !permission?","New":"Nieuwe"}} };;
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
(function ($) {

/**
 * Show/hide the 'Email site administrator when updates are available' checkbox
 * on the install page.
 */
Drupal.hideEmailAdministratorCheckbox = function () {
  // Make sure the secondary box is shown / hidden as necessary on page load.
  if ($('#edit-update-status-module-1').is(':checked')) {
    $('.form-item-update-status-module-2').show();
  }
  else {
    $('.form-item-update-status-module-2').hide();
  }

  // Toggle the display as necessary when the checkbox is clicked.
  $('#edit-update-status-module-1').change( function () {
    $('.form-item-update-status-module-2').toggle();
  });
};

/**
 * Internal function to check using Ajax if clean URLs can be enabled on the
 * settings page.
 *
 * This function is not used to verify whether or not clean URLs
 * are currently enabled.
 */
Drupal.behaviors.cleanURLsSettingsCheck = {
  attach: function (context, settings) {
    // This behavior attaches by ID, so is only valid once on a page.
    // Also skip if we are on an install page, as Drupal.cleanURLsInstallCheck will handle
    // the processing.
    if (!($('#edit-clean-url').length) || $('#edit-clean-url.install').once('clean-url').length) {
      return;
    }
    var url = settings.basePath + 'admin/config/search/clean-urls/check';
    $.ajax({
      url: location.protocol + '//' + location.host + url,
      dataType: 'json',
      success: function () {
        // Check was successful. Redirect using a "clean URL". This will force the form that allows enabling clean URLs.
        location = settings.basePath +"admin/config/search/clean-urls";
      }
    });
  }
};

/**
 * Internal function to check using Ajax if clean URLs can be enabled on the
 * install page.
 *
 * This function is not used to verify whether or not clean URLs
 * are currently enabled.
 */
Drupal.cleanURLsInstallCheck = function () {
  var url = location.protocol + '//' + location.host + Drupal.settings.basePath + 'admin/config/search/clean-urls/check';
  // Submit a synchronous request to avoid database errors associated with
  // concurrent requests during install.
  $.ajax({
    async: false,
    url: url,
    dataType: 'json',
    success: function () {
      // Check was successful.
      $('#edit-clean-url').attr('value', 1);
    }
  });
};

/**
 * When a field is filled out, apply its value to other fields that will likely
 * use the same value. In the installer this is used to populate the
 * administrator e-mail address with the same value as the site e-mail address.
 */
Drupal.behaviors.copyFieldValue = {
  attach: function (context, settings) {
    for (var sourceId in settings.copyFieldValue) {
      $('#' + sourceId, context).once('copy-field-values').bind('blur', function () {
        // Get the list of target fields.
        var targetIds = settings.copyFieldValue[sourceId];
        // Add the behavior to update target fields on blur of the primary field.
        for (var delta in targetIds) {
          var targetField = $('#' + targetIds[delta]);
          if (targetField.val() == '') {
            targetField.val(this.value);
          }
        }
      });
    }
  }
};

/**
 * Show/hide custom format sections on the regional settings page.
 */
Drupal.behaviors.dateTime = {
  attach: function (context, settings) {
    for (var fieldName in settings.dateTime) {
      if (settings.dateTime.hasOwnProperty(fieldName)) {
        (function (fieldSettings, fieldName) {
          var source = '#edit-' + fieldName;
          var suffix = source + '-suffix';

          // Attach keyup handler to custom format inputs.
          $('input' + source, context).once('date-time').keyup(function () {
            var input = $(this);
            var url = fieldSettings.lookup + (/\?q=/.test(fieldSettings.lookup) ? '&format=' : '?format=') + encodeURIComponent(input.val());
            $.getJSON(url, function (data) {
              $(suffix).empty().append(' ' + fieldSettings.text + ': <em>' + data + '</em>');
            });
          });
        })(settings.dateTime[fieldName], fieldName);
      }
    }
  }
};

 /**
 * Show/hide settings for page caching depending on whether page caching is
 * enabled or not.
 */
Drupal.behaviors.pageCache = {
  attach: function (context, settings) {
    $('#edit-cache-0', context).change(function () {
      $('#page-compression-wrapper').hide();
      $('#cache-error').hide();
    });
    $('#edit-cache-1', context).change(function () {
      $('#page-compression-wrapper').show();
      $('#cache-error').hide();
    });
    $('#edit-cache-2', context).change(function () {
      $('#page-compression-wrapper').show();
      $('#cache-error').show();
    });
  }
};

})(jQuery);
;
