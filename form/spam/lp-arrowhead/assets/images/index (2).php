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
		})(window, document, 'script', 'dataLayer', 'GTM-W8ZRRDK');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65592635-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-65592635-1');
	</script>

	<meta charset="utf-8">
	<title>NFC Academy</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">

	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<!-- Add Following Select2 Style if you're using select2 selector; This is a basic style please use sass to add your own css for select2 -->
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="vendor/slick/slick.css">
	<link rel="stylesheet" href="vendor/fancybox/jquery.fancybox.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9452543.js"></script>
	<!-- End of HubSpot Embed Code -->



</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8ZRRDK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="site-wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="site-header__item">
					<figure class="site-header__logo">
						<img width="175" height="88" src="assets/images/nfc-academy-logo.png" alt="NFC Academy">
					</figure>
				</div><!-- /.site-header__item -->
				<div class="site-header__item">
					<div class="site-header__contact">
						<a href="tel:8889961399" class="ctp-button ctp-button--icon-only">
							<span>Have Question? Call Us</span>
							888-996-1399
						</a>
					</div>
				</div><!-- /.site-header__item -->
			</div>
		</header> <!-- / .site-header -->

		<main id="main" class="site-content">

			<section class="hero">
				<div class="container">
					<div class="row inner">
						<div class="col-lg-6 inner__item inner__item-content">
							<div class="inner__content">
								<h1 class="heading-primary">Accredited K-12<br> Homeschool Programs</h1>

								<ul class="list-checked">
									<li class="list-checked__item">Online programs grades 3-12</li>
									<li class="list-checked__item">Book programs K-5TH grade</li>
									<li class="list-checked__item">Private Christian School for Homeschool Families</li>
									<li class="list-checked__item">Affordable Tuition</li>
									<li class="list-checked__item">Biblical Worldview Program</li>
									<li class="list-checked__item">Accredited Programs and NCAA Approved</li>
								</ul>

								<div class="inner__btn">
									<a href="#bannerForm" class="btn btn-primary btn-primary--transparent js-has-smooth">Request Information</a>
								</div>
							</div>
						</div><!-- /.inner__item -->
						<div class="col-lg-6 inner__item inner__item-figure">
							<figure class="inner__figure">
								<img width="917" height="675" src="assets/images/hero-cover-img.png" alt="Hero cover image">
							</figure>
						</div><!-- /.inner__item -->
					</div><!-- /.inner -->
					<!-- <div class="banner-content-new">
						<p>NFC Academy Offices will be closed most of the day on Thursday and all day on Friday because of Hurricane Helene. We plan to reopen on Monday, September 30.</p>
					</div> -->
				</div>
			</section><!-- /.hero -->

			<section class="form-section">
				<div class="container">
					<div id="bannerForm" class="form-wrap">
						<form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
							<div class="row inner">
								<div class="col-xl-2 inner__item inner__header">
									<div class="form-header block-title">
										<small class="sub-heading">Contact us</small>
										<h2 class="heading-secondary">Start anytime from just about anywhere</h2>
									</div>
								</div>
								<div class="col-xl-10 inner__item inner__body">
									<div class="form-section-0 form-row">
										<div class="form-group col-lg-6">
											<input class="form-control" placeholder="First Name*" name="first-name" type="text" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group col-lg-6">
											<input class="form-control" placeholder="Last Name*" name="last-name" type="text" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group col-lg-6">
											<input class="form-control" placeholder="Email Address*" name="email-address" type="email" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group col-lg-6">
											<input class="form-control" placeholder="Phone Number*" name="phone-number" type="text" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group col-lg-6">
											<select class="form-control advanced-select2" name="country" id="JVybK">
												<option selected="" value="US">United States</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan Republic</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BB">Barbados</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BO">Bolivia</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BW">Botswana</option>
												<option value="BR">Brazil</option>
												<option value="BN">Brunei</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="TD">Chad</option>
												<option value="CL">Chile</option>
												<option value="C2">China</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="HR">Croatia</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="CD">Democratic Republic of the Congo</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="SV">El Salvador</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FK">Falkland Islands</option>
												<option value="FO">Faroe Islands</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="GF">French Guiana</option>
												<option value="PF">French Polynesia</option>
												<option value="GA">Gabon Republic</option>
												<option value="GM">Gambia</option>
												<option value="DE">Germany</option>
												<option value="GI">Gibraltar</option>
												<option value="GR">Greece</option>
												<option value="GL">Greenland</option>
												<option value="GD">Grenada</option>
												<option value="GP">Guadeloupe</option>
												<option value="GT">Guatemala</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea Bissau</option>
												<option value="GY">Guyana</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="IE">Ireland</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JP">Japan</option>
												<option value="JO">Jordan</option>
												<option value="KZ">Kazakhstan</option>
												<option value="KE">Kenya</option>
												<option value="KI">Kiribati</option>
												<option value="KW">Kuwait</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="LA">Laos</option>
												<option value="LV">Latvia</option>
												<option value="LS">Lesotho</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MG">Madagascar</option>
												<option value="MW">Malawi</option>
												<option value="MY">Malaysia</option>
												<option value="MV">Maldives</option>
												<option value="ML">Mali</option>
												<option value="MT">Malta</option>
												<option value="MH">Marshall Islands</option>
												<option value="MQ">Martinique</option>
												<option value="MR">Mauritania</option>
												<option value="MU">Mauritius</option>
												<option value="YT">Mayotte</option>
												<option value="MX">Mexico</option>
												<option value="FM">Micronesia</option>
												<option value="MN">Mongolia</option>
												<option value="MS">Montserrat</option>
												<option value="MA">Morocco</option>
												<option value="MZ">Mozambique</option>
												<option value="NA">Namibia</option>
												<option value="NR">Nauru</option>
												<option value="NP">Nepal</option>
												<option value="NL">Netherlands</option>
												<option value="AN">Netherlands Antilles</option>
												<option value="NC">New Caledonia</option>
												<option value="NZ">New Zealand</option>
												<option value="NI">Nicaragua</option>
												<option value="NE">Niger</option>
												<option value="NU">Niue</option>
												<option value="NF">Norfolk Island</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PW">Palau</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PN">Pitcairn Islands</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="QA">Qatar</option>
												<option value="CG">Republic of the Congo</option>
												<option value="RE">Reunion</option>
												<option value="RO">Romania</option>
												<option value="RU">Russia</option>
												<option value="RW">Rwanda</option>
												<option value="KN">Saint Kitts and Nevis Anguilla</option>
												<option value="PM">Saint Pierre and Miquelon</option>
												<option value="VC">Saint Vincent and Grenadines</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="ST">Sao Tome and Prencipe</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="KR">South Korea</option>
												<option value="ES">Spain</option>
												<option value="LK">Sri Lanka</option>
												<option value="SH">St. Helena</option>
												<option value="LC">St. Lucia</option>
												<option value="SR">Suriname</option>
												<option value="SJ">Svalbard and Jan Mayen Islands</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="TW">Taiwan</option>
												<option value="TJ">Tajikistan</option>
												<option value="TZ">Tanzania</option>
												<option value="TH">Thailand</option>
												<option value="TG">Togo</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB">United Kingdom</option>
												<option value="UY">Uruguay</option>
												<option value="VU">Vanuatu</option>
												<option value="VA">Vatican City State</option>
												<option value="VE">Venezuela</option>
												<option value="VN">Vietnam</option>
												<option value="VG">Virgin Islands (British)</option>
												<option value="WF">Wallis and Futuna Islands</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
											</select>
											<!-- Add more options if needed -->
											<div class="messages"></div>
										</div>
										<div class="form-group col-lg-6">
											<select class="form-control advanced-select2" name="state" id="QEQGs">
												<option value="" disabled selected>State*</option>
												<option value="AK">AK</option>
												<option value="AL">AL</option>
												<option value="AR">AR</option>
												<option value="AZ">AZ</option>
												<option value="CA">CA</option>
												<option value="CO">CO</option>
												<option value="CT">CT</option>
												<option value="DC">DC</option>
												<option value="DE">DE</option>
												<option value="FL">FL</option>
												<option value="GA">GA</option>
												<option value="HI">HI</option>
												<option value="IA">IA</option>
												<option value="ID">ID</option>
												<option value="IL">IL</option>
												<option value="IN">IN</option>
												<option value="KS">KS</option>
												<option value="KY">KY</option>
												<option value="LA">LA</option>
												<option value="MA">MA</option>
												<option value="MD">MD</option>
												<option value="ME">ME</option>
												<option value="MI">MI</option>
												<option value="MN">MN</option>
												<option value="MO">MO</option>
												<option value="MS">MS</option>
												<option value="MT">MT</option>
												<option value="NC">NC</option>
												<option value="ND">ND</option>
												<option value="NE">NE</option>
												<option value="NH">NH</option>
												<option value="NJ">NJ</option>
												<option value="NM">NM</option>
												<option value="NV">NV</option>
												<option value="NY">NY</option>
												<option value="OH">OH</option>
												<option value="OK">OK</option>
												<option value="OR">OR</option>
												<option value="PA">PA</option>
												<option value="PR">PR</option>
												<option value="RI">RI</option>
												<option value="SC">SC</option>
												<option value="SD">SD</option>
												<option value="TN">TN</option>
												<option value="TX">TX</option>
												<option value="UT">UT</option>
												<option value="VA">VA</option>
												<option value="VT">VT</option>
												<option value="WA">WA</option>
												<option value="WI">WI</option>
												<option value="WV">WV</option>
												<option value="WY">WY</option>
											</select>
											<!-- Add more options if needed -->
											<div class="messages"></div>
										</div>
										<div class="form-group col-lg-6">
											<input class="form-control" placeholder="Zip Code" name="zip-code" type="text" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group col-lg-6">
											<select class="form-control advanced-select2" name="select-program" id="rHQEZ">
												<!-- <option value="" disabled selected>Select Program</option> -->
												<option value="" disabled selected>Which Program Are You Interested In?</option>
												<option value="K-5th Grade Print Program">K-5th Grade Print Program</option>
												<option value="Elementary 3-5 Online Program">Elementary 3-5 Online Program</option>
												<option value="Middle School 6-8 Online Program">Middle School 6-8 Online Program</option>
												<option value="High School 9-12 Online Program">High School 9-12 Online Program</option>
												<option value="Book K-5 &amp; Online 3-12">Book K-5 &amp; Online 3-12</option>
											</select>
											</select>
											<!-- Add more options if needed -->
											<div class="messages"></div>
										</div>
										<!-- Refer hidden input field -->
										<div class="form-group col-lg-6" style="display:none;">
											<?php
											if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
												$url = $_SERVER['HTTP_REFERER'];
											} else {
												$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
												$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
											}
											?>
											<input class="form-control" type="hidden" name="URL" value="<?php echo $url; ?>" />
											<div class="messages"></div>
										</div>
									</div>
									<div class="form-footer">
										<span class="foot-note">By submitting contact information through this form, I agree that NFC Academy may call and/or text me about its offerings and other business matters by any phone numbers I provide.</span>
										<button type="submit" class="submitButton btn btn-primary">
											<span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
											Submit Now
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section><!-- /.form-section -->

			<section class="highlight">
				<div class="container">
					<div class="highlight__inner" style="background-image: url(assets/images/green-panel-bg.png);">
						<div class="highlight__content">
							<!--<h2 class="heading-secondary heading-secondary--white text-uppercase">Enroll Now K-12 Pay Only a $20 Grade Reservation Fee.</h2>-->
							<!--<p>Registration Fees Are Waived!</p>-->
							<!--<p>Money Back Guarantee for New Online Students.</p>-->
							<!--<h2 class="heading-secondary heading-secondary--white text-uppercase">Save $100. Enroll Now and We Will Apply Your Registration Fee to Your First Tuition Payment!!</h2>-->
							<h2 class="heading-secondary heading-secondary--white text-uppercase">NFC Academy is a private accredited Christian School for Homeschool Families.</h2>
							<h2 class="heading-secondary heading-secondary--white text-uppercase">Enroll Now With Registration Fee Waived.</h2>
							<h2 class="heading-secondary heading-secondary--white text-uppercase">Enroll for Just $20.</h2>
							<!-- <p>Secure your class placement now and start later this summer by Labor Day. At NFC Academy we are proud of our accredited programs which includes superior academics, flexible scheduling, and a faith-based education.  Our online programs come with Academy teachers or our three home-teacher options. The youngest learners will love the book program available for kindergarten and 1st -4th grade.</p> -->
							<!-- <small>*Limited time.</small> -->
						</div>
						<!-- / .highlight__content -->
					</div>
				</div>
			</section><!-- / .highlight -->

			<?php /*
			<section class="highlight">
				<div class="container">
					<div class="highlight__inner" style="background: url(assets/images/highlight-bg.jpg);">
						<div class="highlight__content">
							<!--<h2 class="heading-secondary heading-secondary--white text-uppercase">Enroll Now K-12 Pay Only a $20 Grade Reservation Fee.</h2>-->
							<!--<p>Registration Fees Are Waived!</p>-->
							<!--<p>Money Back Guarantee for New Online Students.</p>-->
							<h2 class="heading-secondary heading-secondary--white text-uppercase">Enroll Now for Grades K-12!</h2>
							<p>Accredited and Affordable Online and Book Programs</p>
							<p>Money Back Guarantee for New Online Students</p>
						</div>
						<!-- / .highlight__content -->
					</div>
				</div>
			</section><!-- / .highlight -->
			*/ ?>

			<section class="about-us">
				<div class="container">
					<div class="row inner align-items-center">
						<div class="col-lg-6 inner__item">
							<figure class="about-us__figure">
								<img width="735" height="722" src="assets/images/about-us-image.jpg" alt="About Us Image">
							</figure><!-- / .about-us__figure -->
						</div>

						<div class="col-lg-6 inner__item">
							<div class="about-us__content">
								<div class="block-title">
									<!-- <small class="sub-heading">About Us</small> -->
									<h2 class="heading-secondary">About Us</h2>
								</div>
								<p>NFC Academy is dedicated to providing a robust education tailored specifically for homeschool families, for students from Kindergarten through 12th grade. As a private Christian school designed for the needs of homeschool families in mind, NFC Academy offers a flexible learning environment that aligns with Christian values and academic excellence.</p>
								<ul>
									<li>Online Grades 3-12 with NFC Academy Teachers and Home Teacher options</li>
									<li>Start Anytime from Just About Anywhere</li>
									<li>A Private Christian School with A Biblical Worldview Program</li>
									<li>Accredited and High School Courses Approved by the NCAA</li>
									<li>Book Program for Kindergarten – 2nd Grade</li>
									<li>Affordable Tuition with Payment Plans</li>
									<li>Live Graduation Services</li>
								</ul>
								<p>Overall, NFC Academy stands firm in its commitment to delivering an exceptional Christian education that not only meets academic standards but also nurtures the values and beliefs that are essential to the homeschool experience. Families can trust that NFC Academy is a partner in their educational journey, offering both support and resources to ensure their children's success.</p>
							</div><!-- / .about-us__content -->
						</div>
					</div>
				</div>
			</section><!-- / .about-us -->

			<section class="card-section bg-gray">
				<span class="circle-white circle-white-one"></span>

				<div class="container">
					<div class="block-title text-center">
						<!-- <small class="sub-heading">Our Online & Book Based Programs</small> -->
						<h2 class="heading-secondary">Online Programs Grades 3-12</h2>
					</div>

					<div class="sliders-wrapper">
						<div class="sliders-wrapper__top">
							<div class="slider-top">
								<div class="slider-top__item">
									<div class="card">
										<div class="card__figure">
											<img width="460" height="298" src="assets/images/card-image01.jpg" alt="Card Image">
										</div>
										<div class="card__content">
											<h3 class="card__heading">​Elementary</h3>
											<p>​Serving students online from 3rd through 5th Grade. Giving students the opportunity to discover, discern, and learn direction for their lives. You can choose from our Homeschool Edition program where the parent at home is the primary teacher or you can select to have Academy teachers as the primary teacher for your courses. Both programs use our Biblical worldview curriculum and are fully accredited. No matter what program you choose NFC Academy will take care of all of your records and provide you with a report card.</p>
										</div>
									</div><!-- / .card -->
								</div><!-- / .inner-top__item -->

								<div class="slider-top__item">
									<div class="card">
										<div class="card__figure">
											<img width="460" height="298" src="assets/images/card-image02.jpg" alt="Card Image">
										</div>

										<div class="card__content">
											<h3 class="card__heading">Middle School</h3>
											<p>Serving Middle School grades 6 – 8 with our online biblical worldview curriculum preparing students for success as they enter high school. The Homeschool Edition program option is available in the online program for grades 6-8 where the parent is the teacher or you can select the Homeschool Advantage program to have NFC Academy teachers as the primary teachers of your child’s courses. Each program is online and fully accredited, and the Academy will take care of your report cards and all your record keeping.</p>
										</div>
										<!-- <a href="#bannerForm" class="btn btn-primary--light btn-shadow js-has-smooth">Request Information</a> -->
									</div><!-- / .card .card-alt -->
								</div><!-- / .inner-top__item -->

								<div class="slider-top__item">
									<div class="card">
										<div class="card__figure">
											<img width="460" height="298" src="assets/images/card-image03.jpg" alt="Card Image">
										</div>

										<div class="card__content">
											<h3 class="card__heading">High School</h3>
											<p>Serving High School grades 9 – 12 with 2 program options. In the Homeschool Advantage program, you will have Academy teachers for all of your child’s courses while the Homeschool Plus program allows you to be the primary teacher of your child’s courses. Both programs are fully accredited with the Homeschool Advantage program courses approved by the NCAA. You can start your school year anytime and work from just about anywhere and the Academy will take care of your report cards and transcript.</p>
										</div>
									</div><!-- / .card -->
								</div><!-- / .slider-top__item -->
							</div><!-- / .slider-top -->
						</div><!-- / .sliders-wrapper__top -->

						<div class="sliders-wrapper__bottom">
							<span class="circle-white circle-white-two"></span>
							<span class="circle-white circle-white-three"></span>
							<h2 class="heading-secondary text-center">Book Program Kindergarten-4th Grade</h2>
							<div class="slider-bottom">
								<div class="slider-bottom__item">
									<div class="card">
										<div class="card__figure">
											<img width="460" height="325" src="assets/images/card-image04.jpg" alt="Card Image">
										</div>

										<div class="card__content">
											<h3 class="card__heading">Kindergarten</h3>
											<p>NFC Academy Kindergarten has all the tools you need to make your homeschool successful with your kindergartner. Our biblical worldview Christian LIFEPAC curriculum, Positive Action for Christ Bible curriculum is perfect for teaching to your homeschool student. Using phonics, reading material, and kindergarten math and numbers an exciting and fun filled year is instore.</p>
										</div>
									</div><!-- / .card -->
								</div><!-- / .slider-bottom__item -->

								<div class="slider-bottom__item">
									<div class="card">
										<div class="card__figure">
											<img width="460" height="298" src="assets/images/card-image05.jpg" alt="Card Image">
										</div>

										<div class="card__content">
											<h3 class="card__heading">1<sup>ST</sup> & 2<sup>ND</sup> Grade</h3>
											<p>NFC Academy’s Accredited First and Second Grade program uses the Christian homeschool LIFEPAC program for Bible, History, Language Arts, Math and Science. LIFEPAC is a book based first and second grade homeschool curriculum that is a brightly illustrated, engaging workbook curriculum filled with fun and exciting learning.</p>
										</div>
									</div><!-- / .card -->
								</div><!-- / .slider-bottom__item -->

								<div class="slider-bottom__item">
									<div class="card">
										<div class="card__figure">
											<img width="460" height="298" src="assets/images/card-image06.jpg" alt="Card Image">
										</div>

										<div class="card__content">
											<h3 class="card__heading">3<sup>RD</sup> – 4<sup>TH</sup> Grade</h3>
											<p>​Our Elementary school curriculum starts with third grade and moves through to fifth grade. Your studies in Bible, History, Language Arts, Math and Science are presented using the biblical worldview curriculum from LIFEPAC. This material will continue to prepare you for your next step into and beyond elementary school.​</p>
										</div>
									</div><!-- / .card -->
								</div><!-- / .slider-bottom__item -->
							</div><!-- / .slider-bottom -->
						</div><!-- / .sliders-wrapper__bottom -->
					</div><!-- / .sliders-wrapper -->
				</div>
			</section><!-- / .card-section -->

			<section class="process">
				<div class="container">
					<div class="row inner align-items-center">
						<div class="col-lg-5 inner__item inner__left">
							<div class="process__content">
								<div class="block-title">
									<small class="sub-heading">Our Process</small>
									<h2 class="heading-secondary">How to Get Started</h2>
								</div>
								<a href="tel:8889961399" class="btn btn-primary btn-shadow"><i class="icon-phone-handle"></i> Call Us Today!</a>
							</div><!-- / .process__content -->
						</div>
						<div class="col-lg-7 inner__item inner__right">
							<div class="panels-wrapper">
								<div class="row panel-row">
									<div class="col-lg-6 panel-row__item">
										<div class="panel panel-skyblue">
											<div class="panel__content">
												<h4 class="panel__heading">Contact Us For Information</h4>
											</div>
										</div><!-- / .panel-skyblue -->
									</div><!-- / .panel-row__item -->
									<div class="col-lg-6 panel-row__item">
										<div class="panel panel-green" style="background-image: url(assets/images/green-panel-bg.png);">
											<div class="panel__content">
												<h4 class="panel__heading">Speak To An Admissions Rep</h4>
											</div>
										</div><!-- / .panel-green -->
									</div><!-- / .panel-row__item -->
									<div class="col-lg-6 panel-row__item">
										<div class="panel panel-yellow" style="background-image: url(assets/images/yellow-panel-bg.png);">
											<div class="panel__content">
												<h4 class="panel__heading">Try A Lesson</h4>
											</div>
										</div><!-- / .panel-yellow -->
									</div> <!-- / .panel-row__item -->
									<div class="col-lg-6 panel-row__item">
										<div class="panel panel-pink">
											<div class="panel__content">
												<h4 class="panel__heading">Select A Program & Enroll</h4>
											</div>
										</div><!-- / .panel-pink -->
									</div> <!-- / .panel-row__item -->
								</div><!-- / .panel-row -->
							</div><!-- / .panels-wrapper -->
						</div><!-- / .inner__item -->
					</div><!-- / .inner -->
				</div>
			</section><!-- / .process -->

			<section class="features" style="background-image: url(assets/images/features-bg-img.jpg);">
				<div class="container">
					<div class="features__heading">
						<h2 class="heading-secondary text-white">Why Choose NFC Academy</h2>
					</div>
					<div class="row inner">
						<div class="col-lg-5 inner__video-wrap">
							<!-- <a data-fancybox href="#myVideo" class="inner__video-thumbnail">
								<img src="assets/images/features-thumbnail.jpg" width="812" height="470" alt="Why choose video thumbnail">
								<span class="play-button"></span>
							</a> -->
							<!-- <div id="myVideo" class="video-block" style="display: none;"> -->
							<div class="video-block">
								<video width="1280" height="720" id="featuresCideo" class="video" controls="controls" preload="none" poster="assets/images/features-thumbnail.jpg">
									<source src="assets/videos/nflcacademy-video.m4v" type="video/mp4">
									<source src="assets/videos/nflcacademy-video.webm" type="video/webm">
									<source src="assets/videos/nflcacademy-video.ogv" type="video/ogg">
									Your browser doesn't support HTML5 video tag.
								</video>
							</div>
						</div><!-- /.inner__video-wrap -->
						<div class="col-lg-7 inner__icon-wrap">
							<div class="row inner__icon-inner">
								<div class="col-lg-6 inner__icon-item">
									<figure class="inner__icon-img">
										<img src="assets/images/features-icon-img01.png" alt="Fully Accredited">
									</figure>
									<span class="inner__figcaption">Fully Accredited</span>
									<p>Parents can have confidence in NFC Academy’s academic programs with three distinct accreditation partners. </p>
								</div><!-- /.inner__icon-item -->
								<div class="col-lg-6 inner__icon-item">
									<figure class="inner__icon-img">
										<img src="assets/images/features-icon-img02.png" alt="Affordable Tuition">
									</figure>
									<span class="inner__figcaption">Affordable Tuition</span>
									<p>NFC Academy’s affordable tuition allows families to have an accredited program for their homeschool needs.</p>
								</div><!-- /.inner__icon-item -->
								<div class="col-lg-6 inner__icon-item">
									<figure class="inner__icon-img">
										<img src="assets/images/features-icon-img03.png" alt="Flexible Schedule">
									</figure>
									<span class="inner__figcaption">Flexible Schedule</span>
									<p>Our families have the flexibility to establish their children’s school hours in a way that works for their busy daily schedules.</p>
								</div><!-- /.inner__icon-item -->
								<div class="col-lg-6 inner__icon-item">
									<figure class="inner__icon-img">
										<img src="assets/images/features-icon-img04.png" alt="Enroll Anytime">
									</figure>
									<span class="inner__figcaption">Enroll Anytime, Anywhere</span>
									<p>Start anytime from anywhere you have Internet in our online program. For those in our book program we will ship everything directly to you.</p>
								</div><!-- /.inner__icon-item -->
								<div class="col-lg-6 inner__icon-item">
									<figure class="inner__icon-img">
										<img src="assets/images/features-icon-img05.png" alt="NCAA Approved Courses">
									</figure>
									<span class="inner__figcaption">NCAA Approved Courses</span>
									<p>Our core courses in the Homeschool Advantage program for student-athletes have been approved by the NCAA for initial student eligibility.</p>
								</div><!-- /.inner__icon-item -->
								<div class="col-lg-6 inner__icon-item">
									<figure class="inner__icon-img">
										<img src="assets/images/features-icon-img06.png" alt="Biblical Worldview">
									</figure>
									<span class="inner__figcaption">Biblical Worldview</span>
									<p>Presenting academic excellence in our programs and teaching life lessons from a biblical worldview.</p>
								</div><!-- /.inner__icon-item -->
							</div>
						</div><!-- /.inner__icon-wrap -->
					</div><!-- /.inner -->
				</div>
			</section><!-- /.features -->

			<section class="dual-col bg-gray bg-ring">
				<span class="circle-white circle-white-four"></span>
				<span class="circle-white circle-white-five"></span>
				<div class="container">
					<div class="row inner">
						<div class="col-md-6 col-xl-5 inner__item order-1 order-md-0">
							<div class="inner__content">
								<h2 class="heading-secondary">More Than Just A Curriculum</h2>
								<ul class="list-arrow inner__list">
									<li class="list-arrow__item">Highly Qualified Teaching Staff</li>
									<li class="list-arrow__item">Virtual Science Labs</li>
									<li class="list-arrow__item">Kindergarten Phonics and Language Arts -Library</li>
									<li class="list-arrow__item">Writing Center</li>
									<li class="list-arrow__item">Online Libraries – Gale Library & Britannica School</li>
									<li class="list-arrow__item">Math Video Libraries for grades K-12</li>
									<li class="list-arrow__item">Online Gradebook</li>
									<li class="list-arrow__item">Parent Portal</li>
								</ul><!-- /.list-arrow -->
							</div><!-- /.inner__content -->
						</div><!-- /.inner__item -->
						<div class="col-md-6 col-xl-7 inner__item order-0 order-md-1">
							<figure class="inner__img bg-ring">
								<img src="assets/images/dual-col-feature-img.jpg" alt="">
							</figure>
						</div><!-- /.inner__item -->
					</div><!-- /.inner -->
				</div>
			</section><!-- /.dual-col -->

			<section class="section-authorized bg-primary-gradient-light">
				<div class="container">
					<div class="section-authorized__heading text-center">
						<h2 class="heading-secondary">NFC Academy <span class="text-uppercase">is Fully Accredited</span></h2>
					</div><!-- /.section-authorized__heading -->
					<div class="logo-wrapper">
						<figure>
							<img src="assets/images/cognia-logo.png" width="200" height="200" alt="Cognia Logo" loading="lazy">
						</figure>
						<figure>
							<img src="assets/images/sacs-logo.png" width="178" height="177" alt="MSA CESS logo" loading="lazy">
						</figure>
						<figure>
							<img src="assets/images/msa-cess-logo.png" width="219" height="140" alt="Faccs Logo" loading="lazy">
						</figure>
						<figure>
							<img src="assets/images/faccs-logo.png" width="240" height="120" alt="Faccs Logo" loading="lazy">
						</figure>
						<figure>
							<img src="assets/images/ncaa-logo.png" width="197" height="191" alt="Faccs Logo" loading="lazy">
						</figure>
					</div>

					<?php /*
					<div class="row inner text-white">
						<div class="col-lg-4 inner__item">
							<figure class="inner__logo">
								<img src="assets/images/authorized-section-logo01.png" width="175" height="176" alt="Cognia Logo">
							</figure>
							<div class="inner__text">
								<p><strong>Cognia</strong> is the largest community of education professionals in the world. We are a non-profit, non-partisan organization that conducts rigorous, on-site reviews of a variety of educational institutions and systems to ensure that all learners realize their full potential.</p>
							</div>
						</div><!-- /.inner__item -->
						<div class="col-lg-4 inner__item">
							<figure class="inner__logo">
								<img src="assets/images/authorized-section-logo02.jpg" width="253" height="177" alt="MSA CESS logo">
							</figure>
							<div class="inner__text">
								<p>The <strong>Middle States Commissions on Elementary and Secondary Schools</strong> aspire to improve the quality of education in the United States and around the world by assisting schools to achieve excellence through the process of accreditation. </p>
							</div>
						</div><!-- /.inner__item -->
						<div class="col-lg-4 inner__item">
							<figure class="inner__logo">
								<img src="assets/images/authorized-section-logo03.jpg" width="253" height="177" alt="Faccs Logo">
							</figure>
							<div class="inner__text">
								<p>The <strong>Florida Association of Christian Colleges and Schools</strong> is a voluntary, service providing association of Christian schools, Christian colleges, and universities. Started in 1968, it is the oldest, state-level association of Christian schools in the nation. </p>
							</div>
						</div><!-- /.inner__item -->
					</div><!-- /.inner -->
					*/ ?>
				</div>
			</section><!-- /.section-authorized -->

			<section class="testimonials bg-gray">
				<div class="container">
					<div class="testimonials__heading text-center">
						<h2 class="heading-secondary">What Our Families Say</h2>
						<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> -->
					</div><!-- /.tesimonials__heading -->
					<div class="testimonials__slider">
						<div class="testimonials__slider-item">
							<blockquote class="blockquote">
								<i class="icon-quote-left blockquote__icon"></i>
								<h3 class="blockquote__title">Mom from Illinois</h3>
								<ul class="star-icon__list list-unstyled">
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
								</ul>
								<p>"We have been with NFC Academy since our son started kindergarten...he just completed second grade. He looks forward to new challenges each day and what makes this school awesome is that you base everything according to God's Word. Thanks NFC Academy...keep up the good work!"</p>
							</blockquote><!-- /.blockquote -->
						</div><!-- /.testimonials__slider-item -->
						<div class="testimonials__slider-item">
							<blockquote class="blockquote">
								<i class="icon-quote-left blockquote__icon"></i>
								<h3 class="blockquote__title">​Georgia Homeschool Mom</h3>
								<ul class="star-icon__list list-unstyled">
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
								</ul>
								<p>"My goal is to help my son reach graduation date. I like NFC Academy, because they are with you every step of the way in reaching your child's educational goals.​"</p>
							</blockquote><!-- /.blockquote -->
						</div><!-- /.testimonials__slider-item -->
						<div class="testimonials__slider-item">
							<blockquote class="blockquote">
								<i class="icon-quote-left blockquote__icon"></i>
								<h3 class="blockquote__title">Texas</h3>
								<ul class="star-icon__list list-unstyled">
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
								</ul>
								<p>"NFC Academy provides the NCAA approved courses we need and flexibility we appreciate for our student athlete to complete her work around her schedule. We love that it is all online so we can take high school on the road with us. The availability of standardized testing was good."</p>
							</blockquote><!-- /.blockquote -->
						</div><!-- /.testimonials__slider-item -->
						<div class="testimonials__slider-item">
							<blockquote class="blockquote">
								<i class="icon-quote-left blockquote__icon"></i>
								<h3 class="blockquote__title">Amy M.</h3>
								<ul class="star-icon__list list-unstyled">
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
								</ul>
								<p>"We currently live outside the US, but want our two middle school aged children to have a well-rounded education that will culminate with a high school diploma. Our children are challenged by the NFC Academy curriculum...and have the teacher support and resources to be successful. I highly recommend NFC Academy Homeschool Advantage Program."</p>
							</blockquote><!-- /.blockquote -->
						</div><!-- /.testimonials__slider-item -->
						<div class="testimonials__slider-item">
							<blockquote class="blockquote">
								<i class="icon-quote-left blockquote__icon"></i>
								<h3 class="blockquote__title">From Oklahoma</h3>
								<ul class="star-icon__list list-unstyled">
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
								</ul>
								<p>"NFC Academy is exactly what we needed. We are able to travel and keep school going. It is especially important to have accreditation and the ability to call upon the office for transcripts, etc. Such an answer to prayer for us."</p>
							</blockquote><!-- /.blockquote -->
						</div><!-- /.testimonials__slider-item -->
						<div class="testimonials__slider-item">
							<blockquote class="blockquote">
								<i class="icon-quote-left blockquote__icon"></i>
								<h3 class="blockquote__title">KP From New York</h3>
								<ul class="star-icon__list list-unstyled">
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
									<li class="star-icon__list-item"><i class="icon-star"></i></li>
								</ul>
								<p>"I absolutely love this program. The daily lesson and labs are top notch. The flexibility is wonderful. The teachers communicate very well with students and parents. It is a wonderful program and worth every penny."</p>
							</blockquote><!-- /.blockquote -->
						</div><!-- /.testimonials__slider-item -->
					</div><!-- /.testimonials__slider -->
				</div>
			</section><!-- /.testimonials -->

		</main> <!-- / .site-content -->

		<footer id="footer" class="site-footer">
			<div class="container">
				<div class="inner">
					<div class="inner__item inner__mail">
						<i class="inner__icon icon-mail"></i>
						<h4 class="inner__title">Email</h4>
						<a href="mailto:nfcacademy@nflchurch.com">nfcacademy@nflchurch.com</a>
					</div><!-- /.inner__item -->
					<div class="inner__item inner__address">
						<i class="inner__icon icon-location-pin"></i>
						<h4 class="inner__title">Address</h4>
						<span>3000 N Meridian Road Tallahassee, FL 32312</span>
					</div><!-- /.inner__item -->
					<div class="inner__item inner__logo">
						<img src="assets/images/site-footer-logo.png" alt="Footer logo">
					</div><!-- /.inner__item -->
					<div class="inner__item inner__number">
						<i class="inner__icon icon-phone-handle-alt"></i>
						<h4 class="inner__title">Phone Number</h4>
						<a href="tel:8889961399">888-996-1399</a>
					</div><!-- /.inner__item -->
					<div class="inner__item inner__fax">
						<i class="inner__icon icon-fax"></i>
						<h4 class="inner__title">FAX</h4>
						<span>850-386-7163</span>
					</div><!-- /.inner__item -->
				</div><!-- /.inner -->
			</div>
			<div class="copyright">
				<div class="container">
					<p>All Rights Reserved @<?php echo date('Y'); ?>. NFC Academy</p>
				</div>
			</div>
		</footer> <!-- / .site-footer -->

		<div class="sticky-phone">
			<div class="container">
				<a href="tel:8889961399" class="sticky-phone__phone-number"><i class="icon-phone-handle"></i> 888-996-1399</a>
			</div>
		</div>
	</div>
	<!-- /.site-wrapper -->


	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/underscore-min.js"></script>
	<!-- Add Following Select2 Style if you're using select2 selector; -->
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/validate.min.js"></script>
	<script src="assets/js/builder.js"></script>
	<script src="vendor/slick/slick.min.js"></script>
	<script src="vendor/fancybox/jquery.fancybox.min.js"></script>
	<script src="assets/js/main.js"></script>


	<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
	<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script> -->
</body>

</html>