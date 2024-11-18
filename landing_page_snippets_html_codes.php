<!--
**
** Recaptcha V2 implementation in the landing page.
** 
-->

<div class="form-group m-0">
	<div class="g-recaptcha-v2-visible" id="g-recaptcha-0"></div>
	<div class="messages"></div>
</div>
<div class="form-group m-0">
	<!-- You can enter a value here manually during local testing, That will bypass the validation -->
	<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-0">
	<div class="messages"></div>
</div>

<!-- Uncomment the following script from the footer. -->

<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
<script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script>\

<!-- update site key in var $recaptchaV2SiteKey builder.js and add validation as well. -->
<script>
	form_fields['form-id-0'] = {
		"g-recaptcha-response": {
			"presence": {
				"message": "must be validated"
			}
		},
		"google-recaptcha": {
			"presence": {
				"message": "must be validated"
			}
		}
	}
</script>

<!--
**
** Server-side validation implementation in the landing page.
** 

Go to mailer/index.php update the code in else condition -->

<!-- add this after URL to check UTM parameters
**
** domain_name.com/?utm_source=test_source_lc&utm_campaign=test_campain_lc&utm_medium=test_medium_lc&gclid=test_gclid_lc&msclkid=test_msclkid_lc
**
**
-->