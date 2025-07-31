<?php

/**
 * Template Name: Custom Landing Page Parts
 *
 */
include 'header-custom-landing-parts.php'; ?>

<section id="heroForm" class="group-block container -mt-[94px] relative z-10">
	<div class="sm:flex flex-wrap items-center p-8 pb-4 rounded bg-white shadow-lg">
		<div class="form-header text-sm font-medium md:w-[250px] lg:w-[377px] lg:pr-11 [&_p]:mb-3 lg:[&_p]:mb-0">
			<h2 class="inline-block mb-4 ml-3 relative text-base font-base uppercase text-primary">GET A FREE quote! <span class="absolute -left-3 top-1/2 -translate-y-1/2 top-block rounded-full size-8 bg-primary/20"></span></h2>
			<p>We would love to work on your project. Please fill out the form and an expert representative will contact you shortly.</p>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="62932fa" title="Landing Page From 2"]'); ?>
	</div>
</section>
<!-- /.group-block -->

<section class="py-8 sm:py-14 lg:py-24 bg-ss-blue-400">
	<div class="container text-center mx-auto">
		<div class="[&_h2]:text-ss-dark-200 [&_p]:mb-3">
			<p><span class="sec-title">Products</span></p>
			<h2>Our Fountain Parts</h2>
		</div>
		<div class="flex flex-row flex-wrap gap-4 lg:gap-6 justify-center py-8 lg:py-12 [&_p]:mb-0 [&_p]:font-semibold lg:[&_p]:text-base">
			<div class="flex flex-col rounded-2xl max-w-[305px] border border-ss-blue-300 lg:w-1/3 overflow-hidden">
				<figure class="[&_img]:w-full [&_img]:h-full [&_img]:rounded-t-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/fountain-nozzles.jpg" alt="Fountain Nozzles" width="298" height="189" loading="lazy">
				</figure>
				<div class="bg-ss-blue-300 flex items-center flex-1 justify-center">
					<div class="p-5">
						<p>Fountain Nozzles</p>
					</div>
				</div>
			</div>
			<div class="flex flex-col rounded-2xl max-w-[305px] border border-ss-blue-300 lg:w-1/3 overflow-hidden">
				<figure class="[&_img]:w-full [&_img]:h-full [&_img]:rounded-t-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/control-panel.jpg" alt="Custom UL508A Listed Control Panels" width="298" height="189" loading="lazy">
				</figure>
				<div class="bg-ss-blue-300 flex items-center flex-1 justify-center">
					<div class="p-5">
						<p>Custom UL508A Listed Control Panels</p>
					</div>
				</div>
			</div>
			<div class="flex flex-col rounded-2xl max-w-[305px] border border-ss-blue-300 lg:w-1/3 overflow-hidden">
				<figure class="[&_img]:w-full [&_img]:h-full [&_img]:rounded-t-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/fountain-build-components.jpg" alt="Fountain Build Components" width="298" height="189" loading="lazy">
				</figure>
				<div class="bg-ss-blue-300 flex items-center flex-1 justify-center">
					<div class="p-5">
						<p>Fountain Build Components</p>
					</div>
				</div>
			</div>
			<div class="flex flex-col rounded-2xl max-w-[305px] border border-ss-blue-300 lg:w-1/3 overflow-hidden">
				<figure class="[&_img]:w-full [&_img]:h-full [&_img]:rounded-t-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/submersible-lighting.jpg" alt="Submersible Lighting" width="298" height="189" loading="lazy">
				</figure>
				<div class="bg-ss-blue-300 flex items-center flex-1 justify-center">
					<div class="p-5">
						<p>Submersible Lighting</p>
					</div>
				</div>
			</div>
			<div class="flex flex-col rounded-2xl max-w-[305px] border border-ss-blue-300 lg:w-1/3 overflow-hidden">
				<figure class="[&_img]:w-full [&_img]:h-full [&_img]:rounded-t-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/fountain-level-control.jpg" alt="Fountain Level Control" width="298" height="199" loading="lazy">
				</figure>
				<div class="bg-ss-blue-300 flex items-center flex-1 justify-center">
					<div class="p-5">
						<p>Fountain Level Control</p>
					</div>
				</div>
			</div>
			<div class="flex flex-col rounded-2xl max-w-[305px] border border-ss-blue-300 lg:w-1/3 overflow-hidden">
				<figure class="[&_img]:w-full [&_img]:h-full [&_img]:rounded-t-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/lighting-wind-control-panels.jpg" alt="Lighting & Wind Control Panels" width="298" height="189" loading="lazy">
				</figure>
				<div class="bg-ss-blue-300 flex items-center flex-1 justify-center">
					<div class="p-5">
						<p>Lighting & Wind Control Panels</p>
					</div>
				</div>
			</div>
		</div>
		<a href="#heroForm" class="btn btn-primary rounded-none md:rounded js-has-smooth">Contact Us Today<i class="icon-diagonal-arrow ml-5"></i>
		</a>
	</div>
</section>
<!-- /.group-block {products} -->

<section class="group-block py-8 sm:py-14 lg:py-24">
	<div class="w-full container text-center">
		<div class="[&_h2]:text-ss-dark-200 [&_p]:mb-3 pb-10">
			<p><span class="sec-title">Pre-Designed</span></p>
			<h2>Our Pre-Designed Water Features</h2>
		</div>
		<div class="flex flex-wrap gap-6 justify-center">
			<div>
				<figure class="relative before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-b before:from-black/0 before:to-black before:rounded-2xl [&_img]:rounded-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/buckingham.jpg" alt="Buckingham" width="306" height="253" loading="lazy">
					<figcaption class="absolute top-1/2 bottom-0 left-0 right-0 flex items-end justify-center text-white font-bold pb-6">Buckingham</figcaption>
				</figure>
			</div>
			<div>
				<figure class="relative before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-b before:from-black/0 before:to-black before:rounded-2xl [&_img]:rounded-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/coronado.jpg" alt="Coronado" width="306" height="253" loading="lazy">
					<figcaption class="absolute top-1/2 bottom-0 left-0 right-0 flex items-end justify-center text-white font-bold pb-6">Coronado</figcaption>

				</figure>
			</div>
			<div>
				<figure class="relative before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-b before:from-black/0 before:to-black before:rounded-2xl [&_img]:rounded-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/hampton.jpg" alt="Hampton" width="306" height="253" loading="lazy">
					<figcaption class="absolute top-1/2 bottom-0 left-0 right-0 flex items-end justify-center text-white font-bold pb-6">Hampton</figcaption>

				</figure>
			</div>
			<div>
				<figure class="relative before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-b before:from-black/0 before:to-black before:rounded-2xl [&_img]:rounded-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/oasis.jpg" alt="Oasis" width="306" height="253" loading="lazy">
					<figcaption class="absolute top-1/2 bottom-0 left-0 right-0 flex items-end justify-center text-white font-bold pb-6">Oasis</figcaption>

				</figure>
			</div>
			<div>
				<figure class="relative before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-b before:from-black/0 before:to-black before:rounded-2xl [&_img]:rounded-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/robinson.jpg" alt="Robinson" width="306" height="253" loading="lazy">
					<figcaption class="absolute top-1/2 bottom-0 left-0 right-0 flex items-end justify-center text-white font-bold pb-6">Robinson</figcaption>

				</figure>
			</div>
			<div>
				<figure class="relative before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-b before:from-black/0 before:to-black before:rounded-2xl [&_img]:rounded-2xl">
					<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/vernal.jpg" alt="Vernal" width="306" height="253" loading="lazy">
					<figcaption class="absolute top-1/2 bottom-0 left-0 right-0 flex items-end justify-center text-white font-bold pb-6">Vernal</figcaption>

				</figure>
			</div>
		</div>
	</div>
</section>
<!-- /.group-block {pre-designed} -->

<section class="bg-ss-blue-100 bg-opacity-[0.10] pt-16 pb-16 max-sm:text-center">
	<div class="flex container max-lg:flex-wrap gap-x-[52px] gap-y-14 items-center">
		<div class="w-full lg:w-1/2 lg:[&_h2]:text-[1.9rem] xl:[&_h2]:text-[2.55rem]">
			<span class="uppercase text-primary pb-3">why choose us</span>
			<h2>Why Choose Roman Fountains</h2>
			<p>Roman Fountains is your design, equipment, and advisory source every step of the way.</p>
			<div> <!-- Card Wrapper -->
				<div class="flex  flex-wrap sm:flex-nowrap justify-center gap-4">
					<div>
						<i class="w-[85px] h-[85px] bg-ss-blue-100 bg-opacity-[0.1] rounded-xl text-center flex items-center justify-center text-4xl text-ss-blue-100 icon-craftsmanship"></i>
					</div>
					<div>
						<h3 class="text-lg">Expert Craftsmanship</h3>
						<p>We actively work with you from initial concept development through a final engineered equipment specification to equipment sourcing, fabrication, assembly, and shipping.</p>
					</div><!-- Card -->
				</div> <!-- Card -->
				<div class="flex flex-wrap sm:flex-nowrap justify-center gap-4">
					<div>
						<i class="w-[85px] h-[85px] bg-ss-blue-100 bg-opacity-[0.1] rounded-xl text-center flex items-center justify-center text-4xl text-ss-blue-100 icon-customer-service"></i>
					</div>
					<div>
						<h3 class="text-lg">Exceptional Customer Service</h3>
						<p>We support the contractors installing and starting up the equipment, and those maintaining the system over its life.</p>
					</div><!-- Card -->
				</div> <!-- Card -->
				<div class="flex  flex-wrap sm:flex-nowrap justify-center gap-4">
					<div>
						<div class="w-[85px] h-[85px] bg-ss-blue-100 bg-opacity-[0.1] rounded-xl text-center flex items-center justify-center">
							<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_2880_986)">
									<path d="M21.6016 36.8125L22.2643 34.801" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13.7109 21.1809L15.72 21.8438" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19.8984 14.0001L20.8542 15.8906" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M31.0471 36.1094L30.0938 34.2188" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M14.4219 30.625L16.3124 29.6716" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<mask id="mask0_2880_986" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="42" height="42">
										<path d="M41.2499 41.25V0.750126H0.75V41.25H41.2499Z" fill="white" stroke="white" stroke-width="1.5" />
									</mask>
									<g mask="url(#mask0_2880_986)">
										<path d="M23.2888 9.30901C25.6212 8.9858 28.0581 9.17644 30.4439 9.96247C38.7943 12.7134 43.3334 21.7105 40.5824 30.0587C37.8339 38.4069 28.8371 42.9461 20.4868 40.1975C12.1387 37.4488 7.59968 28.4495 10.3505 20.1012C11.9923 15.1133 15.8663 11.4855 20.4983 9.95779" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M27.4219 9.28091L28.6916 5.43234M34.5491 7.36237L33.2818 11.2109" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M31.6571 2.06662L28.5946 1.05731C28.1203 0.901615 27.604 1.16206 27.4483 1.63637L26.7251 3.8316C26.5693 4.30598 26.8274 4.82221 27.3018 4.97798L35.9381 7.822C36.4125 7.97786 36.9288 7.71741 37.0845 7.24302L37.8077 5.04779C37.9635 4.5734 37.703 4.05718 37.2287 3.90132L34.2824 2.93164" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M8.26765 11.3281H0.617188M17.455 11.3281H12.3672" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M8.86131 15.6328H3.07812" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M4.94465 24.25H0.617188" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M9.69618 28.5469H2.60156" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M7.4042 32.8594H4.39062" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M14.6529 37.1641H8.02344" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M37.2581 28.9375L27.4219 25.6982" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M29.3494 13.2961L26.1172 23.1094" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M19.3281 19.6625L23.7951 23.7344" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M25.7266 27.1128L25.9963 29.4219" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M10.4527 19.9375H5.67188" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M26.1109 23.1158C27.1852 23.4692 27.7688 24.6273 27.4153 25.7015C27.0619 26.776 25.9039 27.3596 24.8296 27.0062C23.7553 26.6527 23.1716 25.4947 23.5251 24.4203C23.8785 23.346 25.0365 22.7623 26.1109 23.1158Z" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M29.349 13.2968C22.8427 11.1528 15.8318 14.6921 13.6878 21.1986C11.5462 27.7052 15.083 34.7162 21.5893 36.858C28.0957 39.0019 35.1066 35.465 37.2506 28.9585L37.2575 28.9353C39.3853 22.4358 35.8483 15.4363 29.349 13.2968Z" stroke="#1476BB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									</g>
								</g>
								<defs>
									<clipPath id="clip0_2880_986">
										<rect width="42" height="42" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</div>
					</div>
					<div>
						<h3 class="text-lg">Fast & Free Quotes</h3>
						<p>Our fast and free quote service ensures that you get the information you need quickly, allowing you to make informed decisions without any delays or hidden costs.</p>
					</div><!-- Card -->
				</div> <!-- Card -->
			</div>
		</div>
		<picture class="flex justify-center items-center w-full lg:w-1/2">
			<img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/why-choose-us-bg.jpg" alt="Why Choose Us Image" width="550" height="674" loading="lazy">
		</picture>
	</div>
</section>
<!-- /.group-block {Why Choose Us} -->

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
include 'footer-custom-landing-parts.php';
