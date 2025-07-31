<?php
$phonenum = "";
$location = "";

if (isset($_GET['phone'])) {
	$phonenum = $_GET['phone'];
} else {
	$phonenum = "(732) 614-0809";
}

if (isset($_GET['loc'])) {
	$location = $_GET['loc'];
} else {
	$location = "OCEAN COUNTY NJ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<title>Mold &amp; Asbestos Testing Lab</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&family=Oswald:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700;800;900&family=Raleway:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="vendor/slick/slick.css">
	<link rel="stylesheet" href="assets/css/style.css">
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
		})(window, document, 'script', 'dataLayer', 'GTM-KCM5FZB');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175906613-72"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-175906613-72');
	</script>


</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCM5FZB"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="site-wrapper">
		<header id="header" class="site-header">
			<div class="container-fluid">
				<div class="header-between">
					<div class="site-logo">
						<img src="assets/images/header-logo.png" alt="header-logo">
					</div> <!-- / .site-logo -->
					<ul class="contact-list list-unstyled">
						<li class="contact-list__item"><a href="tel:<?php if ($phonenum) {
																		echo preg_replace('/[^0-9]/', '', $phonenum); ?> <?php } ?>" class="contact-list__link phone"><span>Call Us Today</span><?php if ($phonenum) {
																																																						echo $phonenum; ?> <?php } ?></a></li>
						<li class="contact-list__item"><a href="mailto:contact@irislaboratories.com" class="contact-list__link email"><span>Email Us</span>contact@irislaboratories.com </a></li>
					</ul><!-- /.contact-list -->
				</div><!-- /.header-between -->
			</div>
		</header> <!-- / .site-header -->

		<main id="main" class="site-content">
			<section class="banner bg-cover">
				<img src="assets/images/banner-cover-img.jpg" alt="Banner cover image">
				<figure class="banner__mobile-bg bg-cover">
					<img width="375" height="370" src="assets/images/mobile-banner-bg-2.jpg" alt="Banner background image">
				</figure>
				<div class="container">
					<div class="row align-items-center banner__inner">
						<div class="col-lg-7">
							<div class="banner__content">
								<h1 class="heading-primary">
									<span>Mold & Asbestos</span>Inspection Service <br>
									<?php /*
									<small>Located In <?php if ($location) { echo $location; ?> <?php } ?></small>
									*/ ?>
									<small>Serving Ocean County, Monmouth County, and all of South Jersey</small>
								</h1>
								<p>Looking for asbestos and mold inspection for your property?</p>
								<div class="btn-wrap">
									<a href="#primary-form" class="js-has-smooth-scroll">book online</a>
								</div>
							</div><!-- /.banner__content -->
						</div>
						<div class="col-lg-5">
							<div id="primary-form" class="banner__form default-form">
								<form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
									<div class="form-header">
										<h4>fill out contact form</h4>
									</div>

									<div class="form-section-0">
										<div class="form-group">
											<input class="form-control" placeholder="Name*" name="name" type="text" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Phone*" name="phone" type="text" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Email*" name="email" type="email" value="">
											<div class="messages"></div>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
											<div class="messages"></div>
										</div>
										<div class="form-group">
											<input type="hidden" id="utm_source" name="utm_source" value="" />
											<input type="hidden" id="utm_medium" name="utm_medium" value="" />
											<input type="hidden" id="utm_campaign" name="utm_campaign" value="" />
											<input type="hidden" name="current_url" value="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" />
										</div>
										<div class="form-group">
											<div class="g-recaptcha-v2-visible" id="g-recaptcha-T0mID"></div>
											<div class="messages"></div>
										</div>
										<div class="form-group">
											<!-- You can enter a value here manually during local testing, That will bypass the validation -->
											<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-T0mID">
											<div class="messages"></div>
										</div>
									</div>
									<div class="form-footer">
										<button type="submit" class="submitButton btn btn-primary">
											<span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
											Submit
										</button>
									</div>
								</form>
							</div><!-- /.banner__form -->
						</div>
					</div>
				</div>

			</section><!-- /.banner -->

			<section class="remidiation bg-cover">
				<img src="assets/images/rebitation-cover-img.jpg" alt="Mold & Asbestos Inspection Service">
				<div class="remidiation__content">
					<div class="container">
						<div class="block-title">
							<h2 class="heading-secondary">Mold & Asbestos Inspection Service</h2>
							<p>Our expertise is ASBESTOS and MOLD, Providing analysis and field<br> inspections for commercial and private properties.</p>
							<a href="tel:<?php if ($phonenum) {
												echo preg_replace('/[^0-9]/', '', $phonenum); ?> <?php } ?>" class="btn btn-primary btn-primary--alt"><span class="icon-phone-pause"></span> call today</a>
						</div><!-- /.block-title -->
					</div>
				</div><!-- /.remidiation__content -->
			</section><!-- /.remidiation -->

			<section class="about">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7">
							<div class="about__img-wrap">
								<img src="assets/images/about-us-img.jpg" alt="About us">
							</div><!-- /.about__img-wrap -->
						</div>
						<div class="col-lg-5">
							<div class="about__content">
								<h2 class="heading-secondary">About Us</h2>
								<h3 class="heading-tertiary">We are an accredited laboratory.</h3>
								<p>Our highly trained field experts are certified. Our laboratory is nationally accredited by NVLAP, NY-ELAP and NJ- DEP</p>
								<a href="#primary-form" class="btn btn-primary js-has-smooth-scroll">Book Online</a>
							</div><!-- /.about__content -->
						</div>
					</div>
				</div>
			</section><!-- /.about -->

			<section class="info">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="info__content">
								<h2 class="heading-secondary">Asbestos & Mold Inspection Service</h2>
								<p>Asbestos inspections will be conducted by a certified trained professional to find Asbestos Containing Material (ACM).</p>
								<p>Mold inspection involves a trained and Certified Professional inspecting for water or moisture intrusion and mold growth.</p>
								<a href="#primary-form" class="btn btn-primary js-has-smooth-scroll">Contact Us</a>
							</div><!-- /.info__content -->
						</div>
						<div class="col-lg-6">
							<div class="info__img-wrap">
								<img src="assets/images/info-img.jpg" alt="Info image">
							</div><!-- /.info__img-wrap -->
						</div>
					</div>
				</div>
			</section><!-- /.info -->

			<section class="why-choose text-center">
				<div class="container">
					<h2 class="heading-secondary">why choose us</h2>
					<div class="row card-wrap">
						<div class="col-sm-6 col-lg-4 card-wrap__item">
							<div class="card">
								<div class="card-header">
									<span class="icon-thumb"></span>
									<h3 class="title">RELIABLE SERVICES</h3>
								</div><!-- /.card-header -->
								<div class="card-body">
									<p>IRIS Environmetal Laboratories is Nationally accredited by NVLAP. Our team of EPA Licensed inspectors, Project monitors and Mold inspectors have decades of experience.</p>
								</div><!-- /.card-body -->
							</div><!-- /.card -->
						</div><!-- /.card-wrap__item -->
						<div class="col-sm-6 col-lg-4 card-wrap__item">
							<div class="card">
								<div class="card-header">
									<span class="icon-file-check"></span>
									<h3 class="title">QUICK APPOINTMENT</h3>
								</div><!-- /.card-header -->
								<div class="card-body">
									<p>We have the fastest turnaround times in the business. Oh! You can’t wait? Learn more about our super expedited turn around time when you really can’t wait.</p>
								</div><!-- /.card-body -->
							</div><!-- /.card -->
						</div><!-- /.card-wrap__item -->
						<div class="col-sm-6 col-lg-4 card-wrap__item">
							<div class="card">
								<div class="card-header">
									<span class="icon-icon-pawn"></span>
									<h3 class="title">Competitive price</h3>
								</div><!-- /.card-header -->
								<div class="card-body">
									<p>We offer cost-effective pricing along with our elite experts in the Mold and Asbestos industry. Contact us to learn more.</p>
								</div><!-- /.card-body -->
							</div><!-- /.card -->
						</div><!-- /.card-wrap__item -->
					</div><!-- /.card-wrap -->
					<div class="btn-wrap">
						<a href="tel:<?php if ($phonenum) {
											echo preg_replace('/[^0-9]/', '', $phonenum); ?> <?php } ?>" class="btn btn-primary btn-primary--alt"><span class="icon-phone-pause"></span> call today</a>
					</div>
				</div>
			</section><!-- /.why-choose -->

			<section class="testimonial text-center">
				<div class="container">
					<div class="block-title">
						<h2 class="heading-secondary">What Our<br> Clients Say About Us</h2>
						<p>We are an accredited laboratory. That means we are certified experts on what we do. So, don't worry! We will take good care of you!</p>
					</div>
					<!-- end .block-title -->
					<div class="slider">
						<div class="item">
							<blockquote class="blockquote">
								<span class="icon-quote"></span>
								<div class="reviews">
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
								</div>
								<!-- end .reviews -->
								<p>Fantastic lab in northern NJ! If you need any asbestos or mold testing done, these guys will take care of it for...</p>
							</blockquote>
							<h6>wally koscielny</h6>
						</div>
						<!-- end . item -->
						<div class="item">
							<blockquote class="blockquote">
								<span class="icon-quote"></span>
								<div class="reviews">
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
								</div>
								<!-- end .reviews -->
								<p>A great experience. We are purchasing a new home and the technician was able to answer all of my questions and concerns. He was on time, did a full walk through of the home, and made us feel like our safety was top priority.</p>
							</blockquote>
							<h6>Lindsay McIntyre</h6>
						</div>
						<!-- end . item -->
						<div class="item">
							<blockquote class="blockquote">
								<span class="icon-quote"></span>
								<div class="reviews">
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
								</div>
								<!-- end .reviews -->
								<p>We had our plaster tested for asbestos right beofre Labor Day weekend. We had the results the second business day.</p>
							</blockquote>
							<h6>Christen Sturkie</h6>
						</div>
						<!-- end . item -->
						<div class="item">
							<blockquote class="blockquote">
								<span class="icon-quote"></span>
								<div class="reviews">
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
									<span class="icon-star"></span>
								</div>
								<!-- end .reviews -->
								<p>Fantastic lab in northern NJ! If you need any asbestos or mold testing done, these guys will take care of it for...</p>
							</blockquote>
							<h6>wally koscielny</h6>
						</div>
						<!-- end . item -->
					</div>
					<!-- end .testimonial-slider -->
				</div>
			</section>
			<!-- end .testimonial -->


		</main> <!-- / .site-content -->

		<footer id="footer" class="site-footer text-center">

			<div class="site-footer__top">
				<div class="container">
					<div class="top-inner">
						<h2 class="heading-secondary">CALL NOW TO SCHEDULE WITH THE INDUSTRY- LEADING TEAM IN Asbestos & Mold Inspections</h2>
						<a href="tel:<?php if ($phonenum) {
											echo preg_replace('/[^0-9]/', '', $phonenum); ?> <?php } ?>" class="btn btn-white">Call us Today <strong><?php if ($phonenum) {
																																											echo $phonenum; ?> <?php } ?></strong></a>
					</div><!-- /.top-inner -->
				</div>
			</div><!-- /.site-footer__top -->
			<div class="site-footer__bottom">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 block-left">
							<div class="iris-box">
								<div class="iris-box__img">
									<img src="assets/images/iris-logo-footer.png" alt="Footer logo">
								</div><!-- /.iris-box__img -->
							</div><!-- /.iris-box -->
						</div>
						<div class="col-lg-8 block-right">
							<div class="contact-info bg-cover">
								<img src="assets/images/footer-cover-img.jpg" alt="Footer cover image">
								<div class="row contact-info__inner">
									<div class="col-sm-6 col-lg-4 contact-info__item">
										<div class="locaton">
											<div class="icon-wrap">
												<span class="icon icon-placeholder"></span>
											</div>
											<h4>Locations</h4>
											<a href="javascript:void(0)">Florida, Newark, Highland Lakes, Red Bank, Union, West Union, New York, Pittsburgh</a>
										</div><!-- /.contact-info__item -->
									</div>
									<div class="col-sm-6 col-lg-4 contact-info__item">
										<div class=" email">
											<div class="icon-wrap">
												<span class="icon icon-mail-open"></span>
											</div>
											<h4>Email</h4>
											<a href="mailto:contact@irislaboratories.com ">contact@irislaboratories.com </a>
										</div><!-- /.contact-info__item -->
									</div>
									<div class="col-sm-6 col-lg-4 contact-info__item">
										<div class="phone">
											<div class="icon-wrap">
												<span class="icon icon-telephone-ring"></span>
											</div>
											<h4>Phone</h4>
											<a href="tel:<?php if ($phonenum) {
																echo preg_replace('/[^0-9]/', '', $phonenum); ?> <?php } ?>"><?php if ($phonenum) {
																																					echo $phonenum; ?> <?php } ?></a>
										</div><!-- /.contact-info__item -->
									</div>
									<div class="col-12">
										<div class="copyright">
											<p>&copy; <?php echo date('Y'); ?> Iris & Bioterra . All Rights Reserved.</p>
										</div><!-- /.copyright -->
									</div>
								</div>
							</div><!-- /.contact-info -->
						</div>
					</div>
				</div>
			</div><!-- /.site-footer__bottom -->

		</footer> <!-- / .site-footer -->
	</div><!-- /.site-wrapper -->

	<script type="text/javascript" src="//cdn.callrail.com/companies/502058240/08805228fc51a82f58b1/12/swap.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/underscore-min.js"></script>
	<!-- Add Following Select2 Style if you're using select2 selector; -->
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/validate.min.js"></script>
	<script src="assets/js/builder.js"></script>
	<script src="vendor/slick/slick.min.js"></script>
	<script src="assets/js/main.js"></script>


	<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
	<script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script>
</body>

</html>