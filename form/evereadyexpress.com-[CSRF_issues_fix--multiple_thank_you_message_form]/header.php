<?php
// Start session: Added by FED(RT) on 3rd April 2025
session_start();

// Generate CSRF token and store in session variable
if (empty($_SESSION['csrf_token_form1'])) {
  $_SESSION['csrf_token_form1'] = bin2hex(random_bytes(32));
}

// Please add this if second form is present or add more if other multiple forms are presents
// Generate CSRF token and store in session variable
if (empty($_SESSION['csrf_token_form2'])) {
  $_SESSION['csrf_token_form2'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MRP367LC');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  <title>Eveready Express</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="lib/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="lib/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRP367LC"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="site-wrapper">

    <!-- Header - starts -->
    <header class="site-header bg-white">
      <div class="site-header__top py-2 lg:py-2.5 text-white text-center bg-secondary">
        <div class="container">
          <span class="text-base lg:text-lg font-medium leading-tight block">Over 40 Years In Business!</span>
        </div>
      </div>
      <div class="sm:hidden">
        <a href="#heroForm" class="btn btn-primary w-full rounded-none uppercase text-base font-semibold js-has-smooth">Request A Quote</a>
      </div>
      <div class="site-header-nav">
        <div class="container">
          <div class="flex items-center">
            <figure class="max-w-[180px] sm:max-w-[200px] lg:max-w-[248px] [&_a]:inline-block">
              <a href="https://evereadyexpress.com/" target="_blank">
                <img src="./assets/images/site-header-logo.webp" alt="Eveready Express logo" width="864" height="228" loading="lazy">
              </a>
            </figure>

            <div
              class="pl-4 flex-1 flex max-lg:items-center justify-end flex-wrap gap-x-4 sm:gap-x-6 md:gap-x-8 lg:gap-x-11">
              <div class="flex items-center group relative transition-all duration-300">
                <a href="tel:9739288998"
                  class="size-11 stretched-link text-secondary text-base lg:text-lg rounded-full flex items-center justify-center border border-secondary/20 shadow-[0px_5px_16px_0px_rgba(0,0,0,0.10)] duration-300 group-hover:bg-secondary group-hover:border-secondary group-hover:text-white hover:bg-secondary hover:text-white focus:bg-secondary focus:text-white">
                  <i class="icon-phone"></i>
                </a>
                <div class="text-secondary pl-3 md:pl-4 lg:pl-5 text-base lg:text-lg font-semibold max-md:hidden">
                  <span>973-928-8998</span>
                </div>
              </div>
              <div class="hidden sm:block">
                <a href="#heroForm" class="btn btn-primary js-has-smooth min-w-[200px] uppercase text-base font-semibold">Request A Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header - ends -->

    <main class="site-content">

      <section class="relative max-md:!bg-none text-white z-10 pt-[125.5px] sm:pt-[78px] lg:pt-[97.44px] flex flex-col justify-center min-h-[580px] sm:min-h-[640px] lg:min-h-[720px] xl:min-h-[788px] bg-no-repeat bg-center bg-cover before:absolute before:top-0 before:left-0 before:h-full before:w-full before:bg-secondary/80 before:-z-[1]"
        style="background-image: url('./assets/images/hero-banner-bg-img.webp');">
        <figure class="md:hidden [&_img]:w-full">
          <img src="./assets/images/hero-banner-bg-img-mobile.webp" width="576" height="316" loading="lazy">
        </figure>
        <div class="container">
          <div class="flex flex-wrap items-center justify-between py-8 lg:py-12 gap-y-6 -mx-4">
            <div class="w-full lg:w-1/2 xl:w-[52%] px-4">
              <div class="text-white font-normal lg:max-w-[510px] xl:max-w-[648px]">
                <span class="border-l-[6px] border-primary block pl-2 text-base uppercase font-lead mb-2">
                  FAST. RELIABLE. DELIVERED.
                </span>
                <h1 class="uppercase font-lead leading-[1.375] mb-4">
                  Fast & Reliable
                  <span class="text-ss-red">Messenger and Courier</span>
                  Services in New JERSEY
                </h1>
                <div class="capitalize lg:max-w-[480px]">
                  <p>Providing trusted messenger and courier services across New Jersey and beyond—fast, secure, and
                    always on time.</p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-[42%] px-4">
              <div id="heroForm" class="bg-white text-black rounded-lg p-4 md:p-6">
                <form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
                  <div class="form-header text-secondary text-center [&_h2]:text-xl lg:[&_h2]:text-2xl [&_h2]:leading-relaxed">
                    <h2 class="mb-6 lg:mb-8 xl:mb-9">Get an Instant Online Quote</h2>
                    <div class="steps flex mb-8 max-w-[268px] mx-auto">
                      <div class="step inline-block relative pr-[70px] lg:pr-[86px] before:left-0 before:absolute before:w-full before:h-1 before:bg-ss-gray-700 before:top-1/2 before:-translate-y-1/2 after:absolute after:[&.active]:w-[70%] after:[&.active.completed]:w-[100%] after:h-1 after:bg-ss-red after:rounded-r-3xl after:left-0 after:top-1/2 after:-translate-y-1/2 after:z-[1] active">
                        <span class="text-sm relative z-[2] font-base font-bold text-white flex justify-center items-center size-8 rounded-full bg-ss-red">1</span>
                      </div>
                      <div class="step inline-block relative pr-[70px] lg:pr-[86px] before:left-0 before:absolute before:w-full before:h-1 before:bg-ss-gray-700 before:top-1/2 before:-translate-y-1/2 after:absolute after:[&.active]:w-[40%] after:[&.active.completed]:w-[100%] after:h-1 after:bg-ss-red after:rounded-r-3xl after:left-0 after:top-1/2 after:-translate-y-1/2 after:z-[1]">
                        <span class="text-sm relative z-[2] font-base font-bold text-white flex justify-center items-center size-8 rounded-full bg-ss-red">2</span>
                      </div>
                      <div class="step inline-block">
                        <span class="text-sm relative z-[2] font-base font-bold text-white flex justify-center items-center size-8 rounded-full bg-ss-red">3</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-section-0 grid lg:grid-cols-2 gap-4">
                    <div class="lg:col-span-2 mb-6 lg:mb-5 xl:mb-[22px] [&_h3]:text-lg [&_h3]:leading-tight [&_h3]:text-secondary">
                      <h3>Enter Your Details to Get Started</h3>
                    </div>
                    <?php /*
                    <div class="form-group">
                      <label for="full-name">Name<span class="text-ss-red">*</span></label>
                      <input class="form-control" id="full-name" placeholder="Name*" name="full-name" type="text" value="">
                      <!-- Add more checkbox input if needed -->
                      <div class="messages"></div>
                    </div>
                    */?>
                    <div class="form-group">
                      <label for="first-name">First<span class="text-ss-red">*</span></label>
                      <input class="form-control" id="full-name1" placeholder="First*" name="first-name" type="text" value="">
                      <!-- Add more checkbox input if needed -->
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                      <label for="last-name">Last<span class="text-ss-red">*</span></label>
                      <input class="form-control" id="full-name1" placeholder="Last*" name="last-name" type="text" value="">
                      <!-- Add more checkbox input if needed -->
                      <div class="messages"></div>
                    </div>
                    <div class="form-group lg:col-span-2">
                      <label for="email">Email Address<span class="text-ss-red">*</span></label>
                      <input class="form-control" id="email" placeholder="Email Address*" name="email" type="email" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group lg:col-span-2">
                      <label for="phone">Phone Number<span class="text-ss-red">*</span></label>
                      <input class="form-control" id="phone" placeholder="Phone Number*" name="phone" type="text" value="">
                      <!-- Add more checkbox input if needed -->
                      <div class="messages"></div>
                    </div>
                    <div class="form-group lg:col-span-2 flex items-center [&_input]:appearance-none [&_input]:w-5 [&_input]:min-w-5 [&_input]:h-5 [&_input]:bg-white [&_input]:rounded [&_input]:border [&_input]:border-secondary/50 [&_input]:mr-3 xl:[&_input]:mr-[14px] [&_input]:relative [&_input:checked]:border-ss-red [&_input]:cursor-pointer before:[&_input]:absolute before:[&_input:checked]:content-['✓'] before:[&_input:checked]:absolute [&_input:checked]:bg-ss-red before:[&_input:checked]:left-[3px] before:[&_input:checked]:-top-0.5 before:[&_input:checked]:text-base before:[&_input:checked]:text-white [&_label]:text-secondary text-xs leading-relaxed font-normal">
                      <input id="consent" name="consent" type="checkbox" value="I agree to receive SMS messages from Eveready Express">
                      <label for="consent" class="consent-form-label block w-full cursor-pointer">I agree to receive SMS messages from Eveready Express</label>
                      <!-- Add more checkbox input if needed -->
                      <div class="messages"></div>
                    </div>
                  </div>
                  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyABXweL-lkL8xyzdXq6n8UtvTm_9c1_pBg"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('streetAddressFrom'));
        google.maps.event.addListener(places, 'place_changed', function () {
            var place = places.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();
            var latlng = new google.maps.LatLng(latitude, longitude);
            var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
						console.log(results[0]);
                        var address = results[0].formatted_address;
                        var pin = results[0].address_components[results[0].address_components.length - 1].long_name;
						if(pin.length < 5)
						{
							   pin = results[0].address_components[results[0].address_components.length - 2].long_name;
							   
							   var country = results[0].address_components[results[0].address_components.length - 3].short_name;
								var state = results[0].address_components[results[0].address_components.length - 4].short_name;
								var city = results[0].address_components[results[0].address_components.length - 5].long_name;
						}
						else
						{
							pin=pin;
							var country = results[0].address_components[results[0].address_components.length - 2].short_name;
							var state = results[0].address_components[results[0].address_components.length - 3].short_name;
							var city = results[0].address_components[results[0].address_components.length - 4].long_name;
						}
                        
						
						jQuery('#from_country').val(country);
						jQuery('#from_city').val(city);
						jQuery('#from_state').val(state);
						jQuery('#zipCodeFrom').val(pin);
						
                    }
                }
            });
        });
		/*---to address---*/
		var places2 = new google.maps.places.Autocomplete(document.getElementById('streetAddressTo'));
        google.maps.event.addListener(places2, 'place_changed', function () {
            var place = places2.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();
            var latlng = new google.maps.LatLng(latitude, longitude);
            var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
						console.log(results[0]);
                        var address = results[0].formatted_address;
                        var pin = results[0].address_components[results[0].address_components.length - 1].long_name;
						if(pin.length < 5)
						{
							   pin = results[0].address_components[results[0].address_components.length - 2].long_name;
							   
							   var country = results[0].address_components[results[0].address_components.length - 3].short_name;
								var state = results[0].address_components[results[0].address_components.length - 4].short_name;
								var city = results[0].address_components[results[0].address_components.length - 5].long_name;
						}
						else
						{
							pin=pin;
							var country = results[0].address_components[results[0].address_components.length - 2].short_name;
							var state = results[0].address_components[results[0].address_components.length - 3].short_name;
							var city = results[0].address_components[results[0].address_components.length - 4].long_name;
						}
                        
						
						jQuery('#to_country').val(country);
						jQuery('#to_city').val(city);
						jQuery('#to_state').val(state);
						jQuery('#zipCodeTo').val(pin);
						
                    }
                }
            });
        });
		/*---end of to address--*/
    });
</script>

                  <div class="form-section-1" style="display: none">
                    <div class="form-header mb-6 lg:mb-5 xl:mb-[22px] [&_h3]:text-lg [&_h3]:leading-tight [&_h3]:text-secondary">
                      <h3>Address Details</h3>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                      <div class="form-group">
                        <label for="streetAddressFrom">Street Address<span class="text-ss-red">*</span></label>
                        <input class="form-control" id="streetAddressFrom" placeholder="From" name="street-address-from" type="text" value="">
                        <div class="messages"></div>
                      </div>
                      <div class="form-group">
                        <label for="streetAddressTo">Street Address<span class="text-ss-red">*</span></label>
                        <input class="form-control" id="streetAddressTo" placeholder="To" name="street-address-to" type="text" value="">
                        <div class="messages"></div>
                      </div>
                      <div class="form-group">
                        <label for="zipCodeFrom">(Zip)<span class="text-ss-red">*</span></label>
                        <input class="form-control" id="zipCodeFrom" placeholder="From" name="zip-from" type="text" value="">
                        <div class="messages"></div>
                      </div>
                      <div class="form-group">
                        <label for="zipCodeTo">(Zip)<span class="text-ss-red">*</span></label>
                        <input class="form-control" id="zipCodeTo" placeholder="To" name="zip-to" type="text" value="">
                        <div class="messages"></div>
                      </div>
                    </div>
                  </div>

                  <div class="form-section-2" style="display: none">
                    <div class="form-header mb-6 lg:mb-5 xl:mb-[22px] [&_h3]:text-lg [&_h3]:leading-tight [&_h3]:text-secondary">
                      <h3>Packing Details</h3>
                    </div>

                    <div class="form-group">
                      <label for="pieces">No. of pieces<span class="text-ss-red">*</span></label>
                      <input class="form-control" id="pieces" placeholder="1" name="no-of-pieces" type="text" value="1">
                      <div class="messages"></div>
                    </div>

                    <div class="form-group">
                      <label for="weight">Weight (LBS)<span class="text-ss-red">*</span></label>
                      <input class="form-control" id="weight" placeholder="1" name="weight-lbs" type="text" value="1">
                      <div class="messages"></div>
                    </div>

                    <div class="form-group">
                      <label for="packageType">Package Type<span class="text-ss-red">*</span></label>
                      <select class="form-control" name="package-type" id="packageType">
                        <option value="80">Env- Package</option>
                        <option value="90">Roll- Bag</option>
                        <option value="100">Box- Carton</option>
                        <option value="101">Large-Misc-Other</option>
                        <option value="102">Pallet 40x48x72</option>
                        <option value="105">Documents</option>
                        <option value="110">Other- Describe & DIMS</option>
                      </select>
                      <div class="messages"></div>
                    </div>

                    <div class="form-group">
                      <label for="vehicleType">Vehicle Type<span class="text-ss-red">*</span></label>
                      <select class="form-control" name="vehicle-type" id="vehicleType">
                        <option value="15">Cargo Van</option>
                        <option value="25">16' Truck</option>
                        <option value="26">16' Truck Lift Gate</option>
                        <option value="30">24-26' Truck</option>
                        <option value="31">24-26' Truck Lift Gate</option>
                      </select>
                      <div class="messages"></div>
                    </div>

                    <div class="form-group">
                      <div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                      <!-- You can enter a value here manually during local testing, That will bypass the validation -->
                      <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1">
                      <div class="messages"></div>
                    </div>
                    <!-- Hidden honepot fields for spam detection validation : Added by FED(GS) on 6th Feb 2025 -->
                    <div class="form-group" style="display:none;">
                      <input type="text" name="honeypot" style="display:none;" value="">
                      <div class="messages"></div>
                    </div>
                    <!-- Hidden CSRF Token validation using Session : Added by FED(GS) on 6th Feb 2025 -->
                    <div class="form-group" style="display:none;">
                      <input type="hidden" name="csrf_token_form1" value="<?php echo $_SESSION['csrf_token_form1']; ?>">
                      <div class="messages"></div>
                    </div>
                  </div>

                  <div class="form-footer">
                    <div class="sm:flex sm:justify-between mb-6 lg:mb-8 -mx-4">
                      <div class="btn-wrap px-4">
                        <button type="button" class="next btn btn-primary max-sm:w-full">Next</button>
                        <button type="submit" class="submitButton btn btn-primary max-sm:w-full relative" style="display: none;">
                          <svg class="absolute left-4 animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                          </svg>
                          Submit
                        </button>
                      </div>
                    </div>

                    <div class="text-secondary text-xs leading-relaxed font-normal">
                      <p>Disclaimer: Please note if you agree to receive SMS messages from Eveready Express, message frequency may vary. Message and Data Rates may apply.</p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="text-center p-4">
                <p>Have questions? Give us a call or <a href="#footerForm" class="js-has-smooth">send us a message</a>, and we'll be happy to help.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section { Hero Banner } -->