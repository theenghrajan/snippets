<?php
include 'header.php';
?>
<section class="bg-ss-orange-200/10 pt-48 pb-[60px]">
	<div class="text-center relative group">
		<a href="tel:2487651714" class="btn btn-orange stretched-link w-full rounded-none py-[14px]">
			<i class="icon-call pr-3 text-xl text-black group-hover:text-primary transition-all duration-300"></i>
			Call Us Now (248) 765-1714
		</a>
	</div>
	<div class="container">
		<div class="max-w-[993px] mx-auto pt-3 mb-6 text-center [&_h2]:leading-[1.2] [&_h2]:mb-4">
			<h2>Heating, Cooling and Refrigeration Service & Repair</h2>
			<div class="max-w-[870px] mx-auto leading-[1.75]">
				<p>All of the professionals at Serene Comfort take pride in their work, with quality workmanship. Service is key
					in any successful company; hard work and dedication results in happy clients and a good reputation.</p>
			</div>
		</div>

		<div class="ss-custom-tab overflow-hidden">
			<div class="mb-6 lg:mb-7 xl:mb-10 flex justify-center items-center">
				<ul class="tabNav list-none max-lg:w-full md:flex max-lg:border justify-between lg:[&_button]:flex-wrap lg:[&_button]:flex max-lg:[&_button_i]:hidden max-lg:[&_li]:w-[100%] lg:bg-transparent border border-ss-green rounded [&_button]:font-semibold [&_button]:font-lead [&_button]:min-h-[44px] [&_button]:uppercase max-lg:[&_button]:w-full lg:[&_button]:min-w-[232px] [&_button.active]:bg-ss-green [&_button]:inline-flex [&_button]:justify-center [&_button]:items-center [&_button.active]:text-white [&_button]:text-ss-green">
					<li>
						<button type="button" class="tab-btn active" data-tab="tab-1">Residential Services</button>
					</li>
					<li>
						<button type="button" class="tab-btn" data-tab="tab-2">Commercial Services</button>
					</li>
				</ul>
			</div>
			<div class="tabContent">
				<div class="tabPane" id="tab-1">
					<div class="swiper tabSlider pb-10">
						<div class="swiper-wrapper">
							<div class="swiper-slide h-auto">
								<div class="px-3">
									<div class="bg-white rounded [&_img]:w-full border border-black/10">
										<figure class="">
											<img src="./assets/images/heating.jpg" alt="About Featured Image" width="410" height="220" loading="lazy">
										</figure>
										<div class="py-5 text-sm leading-[1.71] bg-primary/10 [&_p]:mb-5">
											<div class="px-5 border-b border-black/10">
												<h3 class="h5">Home Heating & Cooling Installation</h3>
												<p>Whether you're upgrading your home's comfort or installing a new system, Serene Comfort offers expert residential HVAC installation services. We’ll help you choose the right size and model for your home, ensuring maximum efficiency, quiet performance, and consistent temperatures in every room—no matter the season.</p>
											</div>
											<div class="px-5 pt-4">
												<a href="#headerForm"
													class="js-has-smooth font-semibold inline-flex gap-2 items-center text-lg [&_i]:text-base text-black hover:text-primary font-lead capitalize transition-all duration-300">
													Get in touch
													<i class="icon-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div> <!-- /Item -->
							</div> <!-- /.swiper-slide -->
							<div class="swiper-slide h-auto">
								<div class="px-3">
									<div class="bg-white rounded [&_img]:w-full border border-black/10">
										<figure class="">
											<img src="./assets/images/cooling.jpg" alt="About Featured Image" width="410" height="220" loading="lazy">
										</figure>
										<div class="py-5 text-sm leading-[1.71] bg-primary/10 [&_p]:mb-5">
											<div class="px-5 border-b border-black/10">
												<h3 class="h5">Repairs & Troubleshooting</h3>
												<p>Unexpected breakdown? No problem. Our friendly, certified technicians diagnose and fix residential HVAC issues quickly and accurately. From uneven cooling to strange noises or complete system failures, we restore your home’s comfort with minimal hassle and maximum care.</p>
											</div>
											<div class="px-5 pt-4">
												<a href="#headerForm"
													class="js-has-smooth font-semibold inline-flex gap-2 items-center text-lg [&_i]:text-base text-black hover:text-primary font-lead capitalize transition-all duration-300">
													Get in touch
													<i class="icon-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div> <!-- /Item -->
							</div> <!-- /.swiper-slide -->
							<div class="swiper-slide h-auto">
								<div class="px-3">
									<div class="bg-white rounded [&_img]:w-full border border-black/10">
										<figure class="">
											<img src="./assets/images/indoor-air-quality.jpg" alt="About Featured Image" width="410" height="220" loading="lazy">
										</figure>
										<div class="py-5 text-sm leading-[1.71] bg-primary/10 [&_p]:mb-5">
											<div class="px-5 border-b border-black/10">
												<h3 class="h5">Seasonal Maintenance & Tune-Ups</h3>
												<p>Keep your HVAC system in top shape with our seasonal maintenance services. Regular tune-ups improve performance, reduce energy bills, and help prevent surprise repairs. We recommend scheduling maintenance before peak heating and cooling seasons to ensure your system is ready when you need it most.</p>
											</div>
											<div class="px-5 pt-4">
												<a href="#headerForm"
													class="js-has-smooth font-semibold inline-flex gap-2 items-center text-lg [&_i]:text-base text-black hover:text-primary font-lead capitalize transition-all duration-300">
													Get in touch
													<i class="icon-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div> <!-- /Item -->
							</div> <!-- /.swiper-slide -->
						</div> <!-- /.swiper-wrapper -->
						<div class="swiper-pagination !bottom-0 [&_.swiper-pagination-bullet-active]:bg-ss-green"></div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-2">
					<div class="swiper tabSlider pb-10">
						<div class="swiper-wrapper">
							<div class="swiper-slide h-auto">
								<div class="px-3">
									<div class="bg-white rounded [&_img]:w-full border border-black/10">
										<figure class="">
											<img src="./assets/images/heating.jpg" alt="Heating Image" width="410" height="220" loading="lazy">
										</figure>
										<div class="py-5 text-sm leading-[1.71] bg-primary/10 [&_p]:mb-5">
											<div class="px-5 border-b border-black/10">
												<h3 class="h5">HVAC System Installation & Replacement</h3>
												<p>At Serene Comfort, we specialize in commercial HVAC installations tailored to your building’s unique needs. Whether you’re constructing a new property or replacing an outdated system, our team delivers efficient, scalable heating and cooling solutions designed to maximize performance while minimizing energy costs. We work with top-tier equipment to ensure your workspace remains comfortable year-round.</p>
											</div>
											<div class="px-5 pt-4">
												<a href="#headerForm"
													class="js-has-smooth font-semibold inline-flex gap-2 items-center text-lg [&_i]:text-base text-black hover:text-primary font-lead capitalize transition-all duration-300">
													Get in touch
													<i class="icon-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div> <!-- /Item -->
							</div> <!-- /.swiper-slide -->
							<div class="swiper-slide h-auto">
								<div class="px-3">
									<div class="bg-white rounded [&_img]:w-full border border-black/10">
										<figure class="">
											<img src="./assets/images/cooling.jpg" alt="Cooling Image" width="410" height="220" loading="lazy">
										</figure>
										<div class="py-5 text-sm leading-[1.71] bg-primary/10 [&_p]:mb-5">
											<div class="px-5 border-b border-black/10">
												<h3 class="h5">Preventative Maintenance Programs</h3>
												<p>Keeping your business comfortable means staying ahead of HVAC issues. Our commercial preventative maintenance plans are customized to reduce downtime, extend system lifespan, and improve energy efficiency. Regular inspections and tune-ups help avoid costly repairs and ensure your system is running at peak performance—so you can focus on running your business.</p>
											</div>
											<div class="px-5 pt-4">
												<a href="#headerForm"
													class="js-has-smooth font-semibold inline-flex gap-2 items-center text-lg [&_i]:text-base text-black hover:text-primary font-lead capitalize transition-all duration-300">
													Get in touch
													<i class="icon-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div> <!-- /Item -->
							</div> <!-- /.swiper-slide -->
							<div class="swiper-slide h-auto">
								<div class="px-3">
									<div class="bg-white rounded [&_img]:w-full border border-black/10">
										<figure class="">
											<img src="./assets/images/indoor-air-quality.jpg" alt="Air Quality Image" width="410" height="220" loading="lazy">
										</figure>
										<div class="py-5 text-sm leading-[1.71] bg-primary/10 [&_p]:mb-5">
											<div class="px-5 border-b border-black/10">
												<h3 class="h5">Emergency Repairs & Diagnostics</h3>
												<p>When your HVAC system goes down, time is money. Our technicians are available for rapid diagnostics and emergency repairs to restore comfort as quickly as possible. We troubleshoot commercial systems with precision and provide transparent solutions, ensuring minimal disruption to your operations.</p>
											</div>
											<div class="px-5 pt-4">
												<a href="#headerForm"
													class="js-has-smooth font-semibold inline-flex gap-2 items-center text-lg [&_i]:text-base text-black hover:text-primary font-lead capitalize transition-all duration-300">
													Get in touch
													<i class="icon-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div> <!-- /Item -->
							</div> <!-- /.swiper-slide -->
						</div> <!-- /.swiper-wrapper -->
						<div class="swiper-pagination !bottom-0 [&_.swiper-pagination-bullet-active]:bg-ss-green"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Section { Tabs } -->

<section class="py-10 md:py-14 lg:py-20">
	<div class="container">
		<div class="flex flex-wrap -mx-7 items-center">
			<div class="w-full lg:w-1/2 px-7 max-lg:mb-10">
				<div class="flex max-sm:flex-wrap -mx-3 max-lg:justify-center">
					<figure
						class="max-sm:w-full max-sm:max-w-[80%] px-3 sm:mt-8 [&_img]:h-full [&_img]:object-cover [&_img]:w-full max-sm:mb-8">
						<img src="assets/images/about-us-img-1.jpg" width="300" height="556" alt="About Us Image 1" loading="lazy">
					</figure>
					<div class="max-sm:w-full max-sm:max-w-[80%] px-3">
						<figure class="max-sm:w-full [&_img]:w-full">
							<img src="assets/images/about-us-img-2.jpg" width="320" height="490" alt="About Us Image 2"
								loading="lazy">
						</figure>
						<div
							class="bg-ss-orange-200 py-3 sm:py-4 px-3 sm:px-5 rounded-bl rounded-br text-black font-lead text-lg lg:text-xl leading-[1.2] [&_p]:mb-0">
							<span class="flex items-center font-semibold text-3xl lg:text-[40px] lg:leading-[1.2]">
								<i class="icon-circle text-2xl md:text-3xl lg:text-4xl pr-2"></i>
								100%
							</span>
							<p>Satisfaction Guaranteed</p>
						</div>
					</div>
				</div>
			</div>
			<div class="w-full lg:w-1/2 px-7 relative">
				<div class="[&_h2]:mb-6 leading-[1.75]">
					<span
						class="text-ss-green relative before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:bg-ss-green before:size-2 pl-4 font-semibold uppercase block mb-2">About
						Us</span>
					<h2>About Serene Comfort</h2>
					<p>Serene Comfort is a recognized name in the heating and cooling industry, in <strong>Southeast
							Michigan.</strong> We've done
						this by providing custom tailored systems for all
						of our clients' comfort needs. From your home furnace and air conditioner to your
						businesses roof top units and refrigeration systems, we do it all. Our team of
						professionals will work with you from maintenance to service or replacing your
						whole heating and air conditioning system. All of the professionals at Serene
						Comfort take pride in their work, with quality workmanship. Service is key in any
						successful company; hard work and dedication results in happy clients and a good
						reputation</p>
					<div class="mt-6 [&_h3]:mb-5">
						<h3 class="h4">Our Mission</h3>
						<ul
							class="flex flex-wrap justify-between leading-[1.75] gap-y-5 [&_li]:w-full sm:[&_li]:w-1/3 [&_li]:relative [&_li]:before:absolute [&_li]:before:left-0 [&_li]:before:content-['\e907'] [&_li]:pl-6 [&_li]:before:font-icomoon [&_li]:before:text-ss-orange-200">
							<li>Quality workmanship</li>
							<li>Comfort</li>
							<li>Peace of Mind</li>
							<li>Affordable fair prices</li>
							<li>Honesty</li>
							<li>Reliability</li>
						</ul>
					</div>
				</div>
				<div class="mt-8 lg:mt-10 flex items-center flex-wrap gap-6">
					<a href="#headerForm" class="btn btn-primary js-has-smooth">Contact Us Today</a>
					<div
						class="relative inline-flex gap-3 items-center group md:bg-white shadow-[0px_4px_14px_0px_rgba(0,0, 0,0.16)] rounded-full pl-4 pr-5 py-3">
						<a href="tel:2487651714" class="stretched-link">
							<i class="icon-call border-[0.815px] text-xl size-10 flex justify-center items-center border-ss-green bg-transparent rounded-full group-hover:bg-ss-green group-hover:text-white transition-all duration-300 text-ss-green max-md:bg-white"></i>
						</a>
						<div class="[&_p]:mb-0 text-black/70 group-hover:text-black transition-all text-sm">
							<p>Call Us Now</p>
							<strong
								class="font-lead text-[20px] text-ss-green leading-8 tracking-[0.4px] group-hover:text-black transition-all">(248) 765-1714</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Section { About Us } -->

<section class="bg-ss-green text-white py-10 md:py-14 lg:py-20">
	<div class="container">
		<div class="flex flex-wrap -mx-7 items-center">
			<div class="w-full lg:w-1/2 px-7 max-lg:mb-10">
				<div class="[&_h2]:text-white [&_h2]:font-semibold [&_h2]:leading-[1.31] mb-8">
					<span
						class="text-white relative before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:bg-white before:size-2 pl-4 font-semibold uppercase mb-2 block">Checklist</span>
					<h2>Checklist Before Calling for Heating and Cooling Service</h2>
				</div>
				<ul
					class="text-white text-xl font-semibold [&_li]:py-5 custom-counter [&_li]:relative [&_li]:pl-[68px] [&_li]:before:absolute [&_li]:before:bottom-0 [&_li]:before:w-full [&_li]:before:h-[1px] [&_li]:before:bg-gradient-to-l [&_li]:before:to-ss-gray [&_li]:before:from-black/0 before:[&_li:last-child]:content-none mb-8">
					<li>
						<span
							class="absolute top-1/2 -translate-y-1/2 left-0 size-10 lg:size-12 bg-ss-orange-200  before:content-[counter(section,_decimal-leading-zero)] before:text-center rounded-lg flex justify-center items-center text-black font-lead font-semibold text-xl lg:text-2xl"></span>
						Check Disconnect Switches, on both your air condition outside and inside by the furnace.
					</li>
					<li>
						<span
							class="absolute top-1/2 -translate-y-1/2 left-0 size-10 lg:size-12 bg-ss-orange-200  before:content-[counter(section,_decimal-leading-zero)] before:text-center rounded-lg flex justify-center items-center text-black font-lead font-semibold text-xl lg:text-2xl"></span>
						Check Circuit Breakers
					</li>
					<li>
						<span
							class="absolute top-1/2 -translate-y-1/2 left-0 size-10 lg:size-12 bg-ss-orange-200  before:content-[counter(section,_decimal-leading-zero)] before:text-center rounded-lg flex justify-center items-center text-black font-lead font-semibold text-xl lg:text-2xl"></span>
						Check for blocked filters
					</li>
					<li>
						<span
							class="absolute top-1/2 -translate-y-1/2 left-0 size-10 lg:size-12 bg-ss-orange-200  before:content-[counter(section,_decimal-leading-zero)] before:text-center rounded-lg flex justify-center items-center text-black font-lead font-semibold text-xl lg:text-2xl"></span>
						Check to see if your thermostat is set correctly
					</li>
				</ul>
				<p>If all the above fails call Serene Comfort Heating, Cooling
					& Refrigeration your furnace and air conditioner service
					experts.</p>
				<div class="pt-7 lg:pt-10">
					<a href="#headerForm" class="btn btn-white js-has-smooth">Contact us Today</a>
				</div>
			</div>
			<div class="w-full lg:w-1/2 px-7 relative">
				<figure class="[&_img]:w-full [&_img]:h-full">
					<img src="assets/images/checklist-featured-image.jpg" width="580" height="670" alt="Checklist Featured Image"
						loading="lazy">
				</figure>
				<div
					class="absolute bottom-6 right-[52px] inline-flex gap-3 items-center group md:bg-white shadow-[0px_4px_14px_0px_rgba(0,0, 0,0.16)] rounded-full pl-4 pr-5 py-3">
					<a href="tel:2487651714" class="stretched-link">
						<i
							class="icon-call border-[0.815px] text-xl size-10 flex justify-center items-center border-ss-green bg-transparent rounded-full group-hover:bg-ss-green group-hover:text-white transition-all duration-300 text-ss-green max-md:bg-white"></i>
					</a>
					<div class="[&_p]:mb-0 text-black/70 group-hover:text-black transition-all text-sm max-md:hidden">
						<p>Call Us Now</p>
						<strong
							class="font-lead text-[20px] text-ss-green leading-8 tracking-[0.4px] group-hover:text-black transition-all">(248) 765-1714</strong>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Section { Checklist } -->

<?php /*
<section class="bg-ss-green/[0.08] py-10 md:py-14 lg:py-20">
	<div class="container">
		<div class="text-center [&_h2]:pt-2 pb-8">
			<span
				class="text-ss-green relative before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:bg-ss-green before:size-2 pl-4 font-semibold uppercase">Coupons</span>
			<h2>Discount Specials</h2>
		</div>
		<div class="flex flex-wrap -mx-4">
			<div class="w-full lg:w-1/2 px-4 h-auto max-lg:mb-10">
				<div
					class="bg-gradient-to-l to-ss-orange/10 from-ss-green/10 h-full px-6 py-8 [&_h3]:text-ss-green [&_h4]:font-semibold border border-dashed border-ss-green rounded">
					<h3 class="h4">Diagnostics Fee!</h3>
					<span class="block mb-4">Diagnostics fee discounted when performing a repair with Serene
						Comfort!</span>
					<h4 class="h5">Commercial or Residential</h4>
					<h5><span
							class="text-2xl sm:text-3xl md:text-4xl lg:text-[44px] lg:leading-[58px] text-ss-orange-200 font-semibold">$10.00
							Off</span> Service/Diagnostics</h5>
					<span class="block leading-normal mb-[2px]">Discount valid through October 31st, 2020</span>
					<span class="font-semibold text-black">During Regular Hours</span>
				</div>
			</div>
			<div class="w-full lg:w-1/2 px-4 h-auto">
				<div
					class="bg-gradient-to-l to-ss-orange/10 from-ss-green/10 h-full px-6 py-8 [&_h3]:text-ss-green [&_h4]:font-semibold border border-dashed border-ss-green rounded">
					<h3 class="h4">Diagnostics Fee!</h3>
					<span class="block mb-4">Diagnostics fee discounted when performing a repair with Serene
						Comfort!</span>
					<h4 class="h5">Commercial or Residential</h4>
					<h5><span
							class="text-2xl sm:text-3xl md:text-4xl lg:text-[44px] lg:leading-[58px] text-ss-orange-200 font-semibold">$10.00
							Off</span> Service/Diagnostics</h5>
					<span class="block leading-normal mb-[2px]">Discount valid through October 31st, 2020</span>
					<span class="font-semibold text-black">During Regular Hours</span>
				</div>
			</div>
		</div>
		<div class="mt-10 text-center">
			<a href="#headerForm" class="btn btn-primary js-has-smooth">Contact Us Today</a>
		</div>
	</div>
</section>
*/ ?>
<!-- /Section { Coupons } -->

<section class="py-10 md:py-16 lg:py-20">
	<div class="container">
		<div class="flex flex-wrap justify-between items-center -mx-5">
			<div class="w-full lg:w-5/12 px-5">
				<figure class="[&_img]:w-full [&_img]:h-full max-md:max-w-xs max-lg:max-w-lg mx-auto">
					<img src="assets/images/locations.png" width="479" height="499" alt="locations Featured Image" loading="lazy">
				</figure>
			</div>
			<div class="w-full lg:w-[45%] px-5">
				<div class="[&_h2]:mb-4 mb-6 lg:[&_h2]:leading-[1.31]">
					<span class="text-ss-green relative before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0
						before:bg-ss-green before:size-2 pl-4 font-semibold uppercase">Locations</span>
					<h2>Serving Michigan</h2>
					<!--<p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni-->
					<!--	dolores eos, qui ratione.</p>-->
				</div>
				<div class="[&_h3]:font-semibold [&_h3]:mb-4">
					<h3 class="h5">Zip Codes Servicing</h3>
					<span class="flex font-lead max-w-[186px] text-ss-green gap-4 uppercase font-semibold items-center justify-center border border-solid border-ss-green min-h-[50px] rounded-lg mb-4 lg:mb-10">
						Birmingham
						<i class="icon-down-arrow text-xs"></i>
					</span>
					<span class="flex gap-[5px] items-center mb-4 leading-[1.75]">
						<i class="icon-pin text-ss-orange-200"></i>
						48009
					</span>
					<span class="flex gap-[5px] items-center leading-[1.75]">
						<i class="icon-pin text-ss-orange-200"></i>
						48012
					</span>
					<div class="pt-10">
						<a href="#headerForm" class="btn btn-primary js-has-smooth">Contact Us Today</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Section { Locations } -->

<section class="container py-12">
	<div class="swiper testimonials-slider pb-10">
		<div class="flex flex-col md:flex-row gap-y-5 justify-between [&_h3]:h2 pb-10">
			<h2>What Our <span class="text-primary">clients Say</span>
			</h2>
		</div>
		<div class="swiper-wrapper">
			<div class="swiper-slide h-auto">
				<div class="h-full px-8 pt-9 pb-7 bg-gradient-to-l to-ss-orange/10 from-ss-green/10 rounded-lg box-shadow w-full">
					<strong class="block capitalize text-xl mb-2 lg:mb-4 font-lead">Mike, Troy, Michigan</strong>
					<p>Heating and Cooling wasn't anything i thought i could understand, but their technician explained to me how the whole system worked after installing a new furnace and central air conditioner.</p>
				</div>
			</div>
			<div class="swiper-slide h-auto">
				<div class="h-full px-8 pt-9 pb-7 bg-gradient-to-l to-ss-orange/10 from-ss-green/10 rounded-lg box-shadow w-full">
					<strong class="block capitalize text-xl mb-2 lg:mb-4 font-lead">Troy and Diana, Clawson, Michigan</strong>
					<p>I needed service on a cold February night, Serene Comfort was the only
						company available within an hour. They truly are a 24 hour company.</p>
				</div>
			</div>
			<div class="swiper-slide h-auto">
				<div class="h-full px-8 pt-9 pb-7 bg-gradient-to-l to-ss-orange/10 from-ss-green/10 rounded-lg box-shadow w-full">
					<strong class="block capitalize text-xl mb-2 lg:mb-4 font-lead">Samantha, Royal Oak, Michigan</strong>
					<p>Clean and prompt service, also they didn't keep me waiting around all day.</p>
				</div>
			</div>
			<div class="swiper-slide h-auto">
				<div class="h-full px-8 pt-9 pb-7 bg-gradient-to-l to-ss-orange/10 from-ss-green/10 rounded-lg box-shadow w-full">
					<strong class="block capitalize text-xl mb-2 lg:mb-4 font-lead">Paul, Rochester Hills, Michigan</strong>
					<p>They've got a team of knowledgeable professionals that will help guide you through your problem.</p>
				</div>
			</div>
			<div class="swiper-slide h-auto">
				<div class="h-full px-8 pt-9 pb-7 bg-gradient-to-l to-ss-orange/10 from-ss-green/10 rounded-lg box-shadow w-full">
					<strong class="block capitalize text-xl mb-2 lg:mb-4 font-lead">Julie, Bloomfield, Michigan</strong>
					<p>Went over and beyond my expectations!</p>
				</div>
			</div>
			<div class="swiper-slide h-auto">
				<div class="h-full px-8 pt-9 pb-7 bg-gradient-to-l to-ss-orange/10 from-ss-green/10 rounded-lg box-shadow w-full">
					<strong class="block capitalize text-xl mb-2 lg:mb-4 font-lead">Steven, Troy, Michigan</strong>
					<p>They did a great job, I refer them to all my friends and family.</p>
				</div>
			</div>
			<div class="swiper-slide h-auto">
				<div class="h-full px-8 pt-9 pb-7 bg-gradient-to-l to-ss-orange/10 from-ss-green/10 rounded-lg box-shadow w-full">
					<strong class="block capitalize text-xl mb-2 lg:mb-4 font-lead">Bill, Sterling Heights, Michigan</strong>
					<p>I don't trust anyone else with my heating and cooling equipment!</p>
				</div>
			</div>
		</div>
		<div class="swiper-pagination [&_.swiper-pagination-bullet-active]:bg-ss-green"></div>
	</div>
</section>

<section class="pb-10 md:pb-16 lg:pb-20">
	<div class="container">
		<div class="flex flex-wrap justify-between shadow-[0px_14px_30px_0px_rgba(0,0,0,0.05)] rounded-xl">
			<div class="w-full lg:w-5/12 h-auto">
				<div
					class="bg-ss-orange/10 md:py-8 lg:py-10 p-5 md:px-8 lg:px-12 [&_h2]:mb-6 max-lg:rounded-tr-xl rounded-tl-xl lg:rounded-bl-xl border border-[rgba(218,123,14,0.10)] h-full">
					<h2 class="h4">Contact Information</h2>
					<div class="relative group flex items-center gap-3 mb-7">
						<i
							class="icon-phone bg-white size-9 md:size-14 flex justify-center items-center rounded-full border border-ss-green text-ss-green group-hover:bg-transparent group-focus:bg-transparent group-hover:text-ss-green group-focus:text-ss-green transition-all duration-300 text-base md:text-2xl"></i>
						<div class="flex flex-col gap-y-[2px] flex-1">
							<span
								class="text-base text-black/70 group-hover:text-black block font-semibold leading-[1.75]transition-all duration-300">Call
								Us</span>
							<a href="tel:2487651714"
								class="stretched-link text-black group-hover:text-ss-green group-focus:text-ss-green focus:text-ss-green transition-all duration-300 font-lead text-lg md:text-xl leading-[1.2] font-semibold">(248) 765-1714</a>
						</div>
					</div>
					<div class="relative group flex items-center gap-3 mb-7">
						<i
							class="icon-mail-us bg-white size-9 md:size-14 flex justify-center items-center rounded-full border border-ss-green text-ss-green group-hover:bg-transparent group-focus:bg-transparent group-hover:text-ss-green group-focus:text-ss-green transition-all duration-300 text-base lg:text-2xl"></i>
						<div class="flex flex-col gap-y-[2px] flex-1">
							<span
								class="text-base text-black/70 group-hover:text-black block font-semibold leading-[1.75]transition-all duration-300">Mail
								Us</span>
							<a href="mailto:service@serenecomfort.net"
								class="stretched-link text-black group-hover:text-ss-green group-focus:text-ss-green focus:text-ss-green transition-all duration-300 font-lead text-lg md:text-xl leading-[1.2] font-semibold">service@serenecomfort.net</a>
						</div>
					</div>
					<div class="relative group flex items-center gap-3 mb-10">
						<i
							class="icon-location bg-white size-9 md:size-14 flex justify-center items-center rounded-full border border-ss-green text-ss-green text-base md:text-2xl"></i>
						<div class="flex flex-col gap-y-[2px] flex-1">
							<span class="text-base text-black/70 block font-semibold leading-[1.75]transition-all duration-300">Visit
								Us</span>
							<span class="text-black font-lead text-lg md:text-xl leading-[1.2] font-semibold">4037
								Morningdale Troy mi 48085</span>
						</div>
					</div>
					<figure class="[&_img]:rounded-lg [&_img]:w-full">
						<img src="./assets/images/contact-information.jpg" width="448" height="231"
							alt="Contact Information Featured Image" loading="lazy">
					</figure>
				</div>
			</div>
			<div class="w-full lg:w-7/12 h-auto">
				<div id="getInTouch"
					class="px-7 md:pl-8 lg:pl-12 md:pr-10 lg:pr-14 py-7 lg:py-10 lg:rounded-tr-xl rounded-br-xl max-lg:rounded-bl-xl border-l-0 border border-ss-blue/10 h-full">
					<form method="POST" action="mailer/index.php" id="form-id-1" class="validate form">
						<div class="form-header mb-8 xl:[&_h2]:text-[44px]">
							<h2>Get A Quote Form</h2>
						</div>
						<div class="form-section-0 get-in-touch">
							<div class="form-group !w-full">
								<input class="form-control" placeholder="Full Name" name="full-name" type="text" value="">
								<div class="messages"></div>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="email" type="email" value="">
								<div class="messages"></div>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Phone Number" name="phone" type="text" value="">
								<div class="messages"></div>
							</div>
							<div class="form-group !w-full">
								<input class="form-control" placeholder="Address" name="address" type="text" value="">
								<div class="messages"></div>
							</div>
							<div class="form-group !w-full">
								<textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
								<div class="messages"></div>
							</div>
							<div class="form-group m-0">
                            	<div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
                            	<div class="messages"></div>
                            </div>
                            <div class="form-group m-0">
                            	<!-- You can enter a value here manually during local testing, That will bypass the validation -->
                            	<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1">
                            	<div class="messages"></div>
                            </div>
                            <!-- Hidden honepot fields for spam detection validation : Added by FED(RT) on 8th Apr 2025 -->
            				<div class="form-group" style="display:none;">
            					<input type="text" name="honeypot" style="display:none;" value="">
            					<div class="messages"></div>
            				</div>
            				<!-- Hidden CSRF Token validation using Session : Added by FED(RT) on 8th Apr 2025 -->
            				<div class="form-group" style="display:none;">
            					<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            					<div class="messages"></div>
            				</div>
                        </div>
						<div class="form-footer mt-3"> 
						    <button type="submit" class="submitButton btn btn-primary">
								<svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg"
									fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
									<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
									<path class="opacity-75" fill="currentColor"
										d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
									</path>
								</svg>
								Contact Us 
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Section { Contact Information } -->

<?php
include 'footer.php';
