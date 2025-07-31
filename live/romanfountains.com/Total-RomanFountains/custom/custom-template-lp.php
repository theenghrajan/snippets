<?php

/**
 * Template Name: Custom Landing Page
 *
 */
include 'header-custom-landing.php'; ?>

<section id="heroForm" class="group-block container -mt-[94px] relative z-10">
	<div class="sm:flex flex-wrap items-center p-8 pb-4 rounded bg-white shadow-lg">
		<div class="form-header lg:text-lg font-medium md:w-[250px] lg:w-[377px] lg:pr-11 [&_p]:mb-3 lg:[&_p]:mb-0">
			<h2 class="inline-block mb-4 ml-3 relative text-base lg:text-xl font-base uppercase text-primary">GET A FREE quote! <span class="absolute -left-3 top-1/2 -translate-y-1/2 top-block rounded-full size-8 bg-primary/20"></span></h2>
			<p>We would love to work on your project. Please fill out the form and an expert representative will contact you shortly.</p>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="21762fb" title="Landing Page From 1"]'); ?>
	</div>
</section>
<!-- /.group-block -->

<section class="group-block container py-7 sm:py-14 lg:py-28">
	<div class="flex max-lg:flex-col justify-between items-center">
		<div class="flex flex-row-reverse justify-center items-end max-sm:relative max-sm:pt-24 w-full h-full lg:max-w-[611px] max-lg:mb-5 lg:mr-8 xl:mr-0">
			<div class="flex flex-col h-full justify-between items-end pb-14 relative z-[-1]">
				<figure class="[&_img]:w-full [&_img]:h-full">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/bg-image.jpg" alt="Chandeiler" width="410" height="479" loading="lazy">
				</figure>
			</div>
			<div class="flex flex-col h-full -mr-[201px]">
				<div class="flex items-center max-w-[232px] mb-8 max-sm:absolute top-0 left-1/2 max-sm:-translate-x-1/2 bg-white px-5 py-4 rounded shadow-[0_4px_24px_0] shadow-[#1c3a4f1a] text-ss-dark font-medium text-xl leading-[1.1]">
					<span class="font-lead font-bold text-[54px] text-primary mr-4 leading-none">60+</span>
					<span>Years of experience</span>
				</div>
				<figure class="[&_img]:w-full [&_img]:h-full border-8 rounded border-white [&_img]:rounded-bl-[80px] md:[&_img]:rounded-bl-[120px] xl:[&_img]:rounded-bl-[150px]">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/foreground-img.jpg" alt="Piano Fountain" width="377" height="328" loading="lazy">
				</figure>
			</div>
		</div>
		<div class="flex flex-col justify-center items-start [&_h2]:mb-6 [&_h2]:text-ss-dark-100 lg:[&_h2]:pr-5 lg:max-w-[480px] xl:max-w-[572px] [&_p]:mb-3">
			<p><span class="sec-title">About Us</span></p>
			<h2>About Roman Fountains: A Trailblazing Leader</span></h2>
			<p>For <strong>60+ years</strong>, Roman Fountains has been a pioneering leader in the architectural water feature industry. We are a complete resource for all of your fountain requirements, from concept to completion. With a specialized focus on mechanical, electrical and plumbing, we ensure that your fountain will perform the way it was designed.</p>
			<p>Developed on a culture of responsive customer service, Roman Fountains strives to take the worries out of water features. From early design consultation through your water features startup, we are involved each step of the way.</p>
			<!-- <a href="#heroForm" class="js-has-smooth btn btn-primary">Contact Us Today <i class="icon-diagonal-arrow px-[7px]"></i></a> -->
		</div>
	</div>
</section>
<!-- /.group-block {About} -->

<section class="gallery bg-ss-blue-100 bg-opacity-[0.10] pt-12 md:pt-14 lg:pt-16 xl:pt-20 pb-12 md:pb-14 lg:pb-16 xl:pb-20">
	<div class="container text-center">
		<span class="uppercase text-primary pb-3">our fountain designs</span>
		<h2 class="xl:text-[40px] pb-6 md:pb-8 lg:pb-10">Innovative and Elegant Fountain Designs</h2>
		<div class="swiper gallerySwiper">
			<div class="swiper-wrapper pb-12">
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-25.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-25.jpg" alt="Gallery Feature Image" width="676" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-27.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-27.jpg" alt="Gallery Feature Image" width="864" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-21.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-21.jpg" alt="Gallery Feature Image" width="721" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-23.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-23.jpg" alt="Gallery Feature Image" width="572" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-2.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-2.jpg" alt="Gallery Feature Image" width="351" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-6.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-6.jpg" alt="Gallery Feature Image" width="480" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-7.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-7.jpg" alt="Gallery Feature Image" width="720" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-8.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-8.jpg" alt="Gallery Feature Image" width="720" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-9.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-9.jpg" alt="Gallery Feature Image" width="500" height="351" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-10.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-10.jpg" alt="Gallery Feature Image" width="772" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-11.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-11.jpg" alt="Gallery Feature Image" width="472" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-12.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-12.jpg" alt="Gallery Feature Image" width="719" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-13.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-13.jpg" alt="Gallery Feature Image" width="270" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-14.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-14.jpg" alt="Gallery Feature Image" width="500" height="333" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-15.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-15.jpg" alt="Gallery Feature Image" width="500" height="333" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-16.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-16.jpg" alt="Gallery Feature Image" width="933" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-17.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-17.jpg" alt="Gallery Feature Image" width="500" height="333" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-18.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-18.jpg" alt="Gallery Feature Image" width="720" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-19.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-19.jpg" alt="Gallery Feature Image" width="719" height="435" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-20.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-20.jpg" alt="Gallery Feature Image" width="641" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->
				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-24.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-24.jpg" alt="Gallery Feature Image" width="853" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->

				<div class="swiper-slide">
					<a data-fancybox href="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-26.jpg" class="overflow-hidden [&_img]:rounded-md [&_img]:w-full [&_img]:h-[480px] [&_img]:object-cover">
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/gallery-img-26.jpg" alt="Gallery Feature Image" width="745" height="480" loading="lazy">
					</a>
				</div> <!-- /.swiper-slide -->

			</div>
		</div>
	</div> <!-- /.swiper -->
	<div class="flex justify-center gap-4">
		<button class="swiper-button-prev" type="button"></button>
		<button class="swiper-button-next" type="button"></button>
	</div>
	<!-- <a href="#heroForm" class="js-has-smooth btn btn-primary">Contact Us Today <i class="icon-diagonal-arrow px-[7px]"></i></a> -->
	</div>
</section>
<!-- /.group-block {Gallery} -->

<section class="group-block container py-12 lg:pt-28 lg:pb-28 max-sm:text-center">
	<div class="flex max-lg:flex-wrap gap-x-[52px] gap-y-14 items-center">
		<div class="w-full lg:w-1/2">
			<span class="uppercase text-primary pb-3">why choose us</span>
			<h2 class="xl:leading-[46px] xl:text-[44px]">Why Choose Roman Fountains</h2>
			<p>Roman Fountains is your design, equipment, and advisory source every step of the way.</p>
			<div class="wrapper">
				<div class="flex justify-center gap-4">
					<div class="icon">
						<i class="w-16 h-16 sm:w-[85px] sm:h-[85px] bg-ss-blue-100 bg-opacity-[0.1] rounded-xl text-center flex items-center justify-center text-4xl text-ss-blue-100 icon-experience"></i>
					</div>
					<div class="max-sm:text-left">
						<h3 class="text-lg">Over 60+ Years Of Experience</h3>
						<p>Roman Fountains is a commercial water feature company that specializes in design and equipment supply with over 60+ years of experience.</p>
					</div>
				</div> <!-- /repeating item -->
				<div class="flex justify-center gap-4">
					<div class="icon">
						<i class="w-16 h-16 sm:w-[85px] sm:h-[85px] bg-ss-blue-100 bg-opacity-[0.1] rounded-xl text-center flex items-center justify-center text-4xl text-ss-blue-100 icon-material"></i>
					</div>
					<div class="max-sm:text-left">
						<h3 class="text-lg">High Quality Materials</h3>
						<p>We provide a wide range of components including pumps, nozzles (static and dynamic), filters and water treatment/filtering systems, vaults, lighting, and electrical control panels.</p>
					</div>
				</div> <!-- /repeating item -->
				<div class="flex justify-center gap-4">
					<div class="icon">
						<i class="w-16 h-16 sm:w-[85px] sm:h-[85px] bg-ss-blue-100 bg-opacity-[0.1] rounded-xl text-center flex items-center justify-center text-4xl text-ss-blue-100 icon-craftsmanship"></i>
					</div>
					<div class="max-sm:text-left">
						<h3 class="text-lg">Expert Craftsmanship</h3>
						<p>We actively work with you from initial concept development through a final engineered equipment specification to equipment sourcing, fabrication, assembly, and shipping.</p>
					</div>
				</div> <!-- /repeating item -->
				<div class="flex justify-center gap-4">
					<div class="icon">
						<i class="w-16 h-16 sm:w-[85px] sm:h-[85px] bg-ss-blue-100 bg-opacity-[0.1] rounded-xl text-center flex items-center justify-center text-4xl text-ss-blue-100 icon-customer-service"></i>
					</div>
					<div class="max-sm:text-left">
						<h3 class="text-lg">Exceptional Customer Service</h3>
						<p>We support the contractors installing and starting up the equipment, and those maintaining the system over its life.</p>
					</div>
				</div> <!-- /repeating item -->
			</div>
		</div>
		<picture class="flex justify-center items-center w-full lg:w-1/2">
			<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/why-choose-us-bg.jpg" alt="Why Choose Us Image" width="550" height="674" loading="lazy">
		</picture>
	</div>
</section>
<!-- /.group-block {Why Choose Us} -->

<section class="bg-ss-blue-100 bg-opacity-[0.10] pt-16 pb-16 max-sm:text-center">
	<div class="container">
		<div class="flex max-lg:flex-wrap gap-x-[52px] relative items-center">
			<div class="w-full lg:w-1/2">
				<span class="uppercase text-primary pb-3">our process</span>
				<h2 class="leading-[126%] xl:text-[44px] pb-8">Streamlined Steps to Stunning Fountains</h2>
				<div class="relative space-y-4">
					<div class="flex justify-center gap-4 sm:gap-6">
						<div class="count">
							<h3 class="w-12 h-12 sm:w-[80px] sm:h-[80px] bg-ss-blue-200 rounded-full text-center flex items-center justify-center text-2xl sm:text-[40px] text-white">1</h3>
						</div>
						<div class="text-base max-sm:text-left">
							<h3 class="h4">Design</h3>
							<p>Bringing water features to life: from classic fountains to peaceful waterfalls to stunning splashpads and show features. Our strength is active collaboration with Landscape Architects, Installers, and Owners. Our design experts work directly with component sourcing and manufacturing to ensure quality and availability and to achieve aesthetic beauty, longevity, and efficient lifecycle costs.</p>
						</div>
					</div> <!-- /repeating item -->
					<div class="flex justify-center gap-4 sm:gap-6">
						<div class="count">
							<h3 class="w-12 h-12 sm:w-[80px] sm:h-[80px] bg-ss-blue-200 rounded-full text-center flex items-center justify-center text-2xl sm:text-[40px] text-white">2</h3>
						</div>
						<div class="text-base max-sm:text-left">
							<h3 class="h4">Build</h3>
							<p>In-house engineering and manufacturing streamline the production process, ensuring quality and smooth transitions from design to production. We remove the disconnect that often exists between design-only services and third-party material sourcing. Our custom system assembly shop and UL508A Listed panel shop pre-assemble and test prior to shipping, limiting costly field installation time and mistakes in unpredictable field conditions.</p>
						</div>
					</div> <!-- /repeating item -->
					<div class="flex justify-center gap-4 sm:gap-6">
						<div class="count">
							<h3 class="w-12 h-12 sm:w-[80px] sm:h-[80px] bg-ss-blue-200 rounded-full text-center flex items-center justify-center text-2xl sm:text-[40px] text-white">3</h3>
						</div>
						<div class="text-base max-sm:text-left">
							<h3 class="h4">Field</h3>
							<p>We support owners and installing contractors, as well as those maintaining our water feature over its life. Remote phone support. Consulting, commissioning, and troubleshooting field services. Replacement parts. Our systems are designed and built for ease of installation and maintenance.</p>
						</div>
					</div> <!-- /repeating item -->
				</div>
			</div> <!-- /Column left -->
			<div class="w-full lg:w-1/2">
				<!-- <p>Built on a foundation of 60+ years of experience, Roman Fountains is your resource for all of your water feature needs. </p> -->
				<picture class="flex justify-center items-center pt-6 [&_img]:rounded-md">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/our-process-image.jpg" alt="Our Process Feature Image" width="792" height="528" loading="lazy">
				</picture>
			</div> <!-- /Column right -->
		</div>
	</div>
</section>
<!-- /.group-block {Our Process} -->

<section class="pt-12 lg:pt-28 px-4">
	<div class="container text-center">
		<h2 class="mb-8 lg:mb-12">Brands We Have Worked With</h2>
	</div>
	<div class="group-block border-solid border-y-[10px] border-primary/20 [&_.swiper-slide]:py-4 [&_.swiper-slide_img]:max-h-[80px] sm:[&_.swiper-slide_img]:max-h-[120px] [&_.swiper-slide_img]:max-w-[100%] [&_.swiper-slide_img]:w-auto md:[&_.swiper-slide_img]:w-full xl:[&_.swiper-slide_img]:max-h-none [&_.swiper-slide]:w-auto">
		<div class="swiper py-5 lg:py-0 image-slider border-solid border-y-[10px] border-primary">
			<div class="swiper-wrapper items-center">
				<div class="swiper-slide">
					<figure>
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/at&atlogo.svg" width="182" height="136" loading="lazy" alt="AT&T Stadium">
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/stanford-emblem.png" width="223" height="171" loading="lazy" alt="Stanford University">
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/truist-park.png" width="182" height="162" loading="lazy" alt="Truist Park">
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/empower-field-logo.png" width="301" height="154" loading="lazy" alt="Empower Field At Mile High Stadium">
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/microsoft.png" width="182" height="136" loading="lazy" alt="Microsoft">
					</figure>
				</div>
				<div class="swiper-slide">
					<figure>
						<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/jmu.png" width="336" height="171" loading="lazy" alt="James Madison University">
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.group-block {Image Slider} -->

<section class="py-12 lg:py-28 bg-primary lg:bg-transparent">
	<div class="container lg:flex flex-wrap items-center">
		<div class="lg:flex-1 text-center mb-4 lg:mb-0">
			<figure class="relative [&_img]:rounded-2xl [&_img]:w-auto [&_img]:h-[420px] lg:[&_img]:h-[640px] [&_img]:object-cover lg:[&_img]:ml-auto">
				<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/testimonial-img02.jpg" width="640" height="960" loading="lazy" alt="Testimonial Feature Image">
			</figure>
		</div>
		<div class="lg:w-[55%] flex items-center">
			<div class="testimonial-holder w-full">
				<div class="inner">
					<div class="swiper testimonials-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<blockquote class="text-white">
									<h2 class="text-white">What Our Customers Are Saying</h2>
									<div class="quote-holder">
										<p>I want to tell you i have been thoroughly pleased with the response i have had from your company, and your workmanship. I could not have been any better. I have been in the construction business for over 28 years and i have never dealt with a company quite so courteous and so invloved with everything you do. Thank you!</p>
										<p>President CM Properties, LLC/Fountain Shoppes of McHenry</p>
									</div>
									<cite>
										<strong class="author">Richard Mazrin</strong>
										<ul>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
										</ul>
									</cite>
								</blockquote>
							</div>
							<div class="swiper-slide">
								<blockquote class="text-white">
									<h2>What Our Customers Are Saying</h2>
									<div class="quote-holder">
										<p>I have the very confident feeling that everyone at Roman Fountains knows about my fountain personally, and has done everything possible to make it perfect.</p>
										<P>Project Manager - MacDonald-Miller</P>
									</div>
									<cite>
										<strong class="author">Steve Nicholes</strong>
										<ul>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
										</ul>
									</cite>
								</blockquote>
							</div>
							<div class="swiper-slide">
								<blockquote class="text-white">
									<h2>What Our Customers Are Saying</h2>
									<div class="quote-holder">
										<p>Your ability to coordinate fountain equipment helped us complete our contract documents in a timely fashion.</p>
										<P>Project Architect Helmuth, Obata & Kassabaum, P.C.</P>
									</div>
									<cite>
										<strong class="author">Richard Winokur</strong>
										<ul>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
											<li><i class="icon-star"></i></li>
										</ul>
									</cite>
								</blockquote>
							</div>
						</div>
						<!-- If we need navigation buttons -->
						<div class="swiper-button">
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.group-block {Testimonials} -->

<?php
include 'footer-custom-landing.php';
