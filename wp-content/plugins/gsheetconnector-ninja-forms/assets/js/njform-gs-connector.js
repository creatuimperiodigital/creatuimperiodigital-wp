jQuery(document).ready(function () {
     
   /**
    * verify the api code
    * @since 1.0
    */
    jQuery(document).on('click', '#save-njform-gs-code', function (event) {
		event.preventDefault();
        jQuery( ".loading-sign" ).addClass( "loading" );
        var data = {
        action: 'verify_njforms_gs_integation',
        code: jQuery('#njforms-setting-google-access-code').val(),
        security: jQuery('#gs-ajax-nonce').val()
      };
      jQuery.post(ajaxurl, data, function (response ) {
          if( ! response.success ) { 
            jQuery( ".loading-sign" ).removeClass( "loading" );
            jQuery( "#njgs-validation-message" ).empty();
            jQuery("<span class='error-message'>Invalid access code entered.</span>").appendTo('#njgs-validation-message');
          } else {
            jQuery( ".loading-sign" ).removeClass( "loading" );
            jQuery( "#njgs-validation-message" ).empty();
            jQuery("<span class='gs-valid-message'>Your Google Access Code is Authorized or Saved.</span> <br/><br/><span class='wp-valid-notice'> Note: If you are getting any errors or not showing sheet in dropdown, then make sure to check the debug log. To contact us for any issues do send us your debug log.</span>").appendTo('#njgs-validation-message');
			//setTimeout(function () { location.reload(); }, 9000);

         setTimeout(function () { 
            window.location.href = jQuery("#redirect_auth_ninjaforms").val();
         }, 1000);
		  }
      });
      
    });  
    
	function html_decode(input) {
      var doc = new DOMParser().parseFromString(input, "text/html");
      return doc.documentElement.textContent;
   }

    /**
     * Clear debug
     */
      jQuery(document).on('click', '.debug-clear-kk', function () {
         jQuery( ".clear-loading-sign" ).addClass( "loading" );
         var data = {
            action: 'gs_clear_log',
            security: jQuery('#gs-ajax-nonce').val()
         };
         jQuery.post(ajaxurl, data, function (response ) {
            if( response.success ) { 
               jQuery( ".clear-loading-sign" ).removeClass( "loading" );
               jQuery( "#njgs-validation-message" ).empty();
               jQuery("<span class='gs-valid-message'>Logs are cleared.</span>").appendTo('#njgs-validation-message'); 
            }
         });
      });
	  
	   /**
    * deactivate the api code
    * @since 1.0
    */
    jQuery(document).on('click', '#wp-deactivate-log', function () {
        jQuery(".loading-sign-deactive").addClass( "loading" );
		var txt;
		var r = confirm("Are you sure you want to deactivate Google Sheet Integration ?");
		if (r == true) {
			var data = {
				action: 'deactivate_wp_integation',
				security: jQuery('#gs-ajax-nonce').val()
			};
			jQuery.post(ajaxurl, data, function (response ) {
				if ( response == -1 ) {
					return false; // Invalid nonce
				}
			 
				if( ! response.success ) {
					alert('Error while deactivation');
					jQuery( ".loading-sign-deactive" ).removeClass( "loading" );
					jQuery( "#deactivate-message" ).empty();
					
				} else {
					jQuery( ".loading-sign-deactive" ).removeClass( "loading" );
					jQuery( "#deactivate-message" ).empty();
					jQuery("</br><span class='gs-valid-message'>Your account is removed, now reauthenticate to configure NINJA FORMS to Google Sheet.</span>").appendTo('#deactivate-message');
		   		    setTimeout(function () { location.reload(); }, 5000);
				}
			});
		} else {
			jQuery( ".loading-sign-deactive" ).removeClass( "loading" );
		}
    });
   
});
