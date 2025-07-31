<?php
include 'header.php'; ?>

<section class="relative pb-12">
	<div class="absolute inset-0 !bg-cover bg-center opacity-5 z-[-1]" style="background-image: url('./assets/images/bg02.jpg')"></div>
	
	<div id="heroForm" class="text-center text-ss-black-100/60 -mt-16 lg:-mt-[152px] relative z-10 px-4 md:px-0 mb-8 2xl:mb-12 ">
		<div class="container px-5 md:px-10 py-7 bg-white" style="box-shadow: 0px -15px 35.2px 0px rgba(0, 0, 0, 0.06);">
			<form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
				<div class="form-header mb-6">
					<h2 class="relative sm:flex justify-center items-center gap-2 text-primary font-base font-black uppercase text-lg lg:mb-6 [&_i]:text-primary/20 [&_i]:text-[30px]">
						<i class="icon-tap block"></i>
						GET A FREE CONSULTATION!
					</h2>
					<p>Honest Answers - Simple Solutions</p>
				</div>

				<div class="form-section-0 flex flex-wrap -mx-2">
					<div class="form-group px-2 w-full md:w-1/2 lg:w-1/5">
						<input class="form-control" placeholder="Full Name" name="full-name" type="text" value="">
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-1/5">
						<input class="form-control" placeholder="Email Address" name="email" type="email" value="">
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-1/5">
						<input class="form-control" placeholder="Phone Number" name="phone" type="text" value="">
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-2/5">
						<textarea class="form-control" placeholder="Your Message Here..." name="message"></textarea>
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-2/5">
						<div class="g-recaptcha-v2-visible" id="g-recaptcha-0"></div>
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-2/5">
						<!-- You can enter a value here manually during local testing, That will bypass the validation -->
						<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-0">
						<div class="messages"></div>
					</div>
				</div>
				<div class="form-footer">
					<button type="submit" class="submitButton btn btn-primary btn-sm">
						<svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
							<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
							<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
						</svg>
						Schedule A Consultation Today
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<div class="container" id="about-us">
		<div class="lg:flex items-center flex-wrap mb-10">
			<div class="bg-ss-blue-100/5 lg:w-[49.2%] [&_img]:w-full [&_img]:object-cover [&_img]:object-center mb-6 lg:mb-0">
				<figure>
					<img src="./assets/images/img02.jpg" width="630" height="472" loading="lazy" alt="about feature image">
				</figure>

				<div class="sm:flex flex-wrap items-center py-5 pl-6 pr-4">
					<div class="mb-4 sm:mb-0 sm:w-1/2 md:justify-start flex flex-wrap items-center">
						<ul class="md:w-[143px] list-none flex flex-wrap [&_li]:-ml-[18px] [&_li:first-child]:ml-0 [&_figure]:rounded-full [&_figure]:overflow-hidden [&_figure]:border-[2px] md:[&_figure]:border-[3px] [&_figure]:border-solid [&_figure]:border-white [&_figure]:size-[38px] md:[&_figure]:size-[49px]">
							<li>
								<figure>
									<img src="./assets/images/avatar01.jpg" width="52" height="52" loading="lazy" alt="avatar feature image">
								</figure>
							</li>
							<li>
								<figure>
									<img src="./assets/images/avatar02.jpg" width="52" height="52" loading="lazy" alt="avatar feature image">
								</figure>
							</li>
							<li>
								<figure>
									<img src="./assets/images/avatar03.jpg" width="52" height="52" loading="lazy" alt="avatar feature image">
								</figure>
							</li>
							<li>
								<figure>
									<img src="./assets/images/avatar04.jpg" width="52" height="52" loading="lazy" alt="avatar feature image">
								</figure>
							</li>
						</ul>
						<div class="sm:flex-1 pl-4 text-sm text-ss-black-100/70 [&_p:last-child]:mb-0">
							<strong class="block font-semibold text-black text-base md:text-xl">200+</strong>
							<p>5-Star Reviews</p>
						</div>
					</div>
					<div class="pt-3 sm:pt-0 sm:w-1/2 sm:pl-[5%] flex items-center flex-wrap border-t sm:border-t-0 sm:border-l border-solid border-ss-black-100/15">
						<strong class="text-[50px] md:text-[60px] font-black text-primary">70</strong>
						<strong class="flex-1 pl-1 md:text-xl font-semibold">Years of combined experience</strong>
					</div>
				</div>
			</div>
			<div class="lg:flex-1 lg:pl-[5%]">
				<h2>About Evolution Plumbing and Misting</h2>
				<p>Evolution Plumbing and Misting is the culmination of our founder’s years of staying true to his values and remaining committed to doing right by customers. Since opening shop in 2019, our company has aimed to deliver high-quality and affordable services with honesty and integrity. Today, numerous home and business owners in Gilbert, Chandler, and Mesa trust us. In fact, we have served thousands, and that number only continues to grow.</p>
				<p>We know calling a plumber can be tough. Many property owners have bad histories with contractors and might worry about unfair prices or hidden costs. If this rings true for you, consider Evolution Plumbing and Misting the next time you need a plumber.</p>
				<strong class="block mb-3">We strive to ensure our customers are 100% satisfied in choosing us by:</strong>
				<ul class="[&_li]:pl-[34px] [&_li]:relative [&_li]:mb-3 [&_li]:before:bg-[url('../images/icon-check.svg')] [&_li]:before:size-6 [&_li]:before:block [&_li]:before:absolute [&_li]:before:left-0 [&_li]:before:top-1/2 [&_li]:before:-translate-y-1/2 [&_li]:before:bg-no-repeat [&_li]:before:bg-center">
					<li>Offering upfront, detailed quotes for our service. </li>
					<li>Keeping our prices competitive.</li>
					<li>Backing solutions with an unparalleled 2-year warranty. </li>
					<li>Conducting ourselves with the utmost professionalism.</li>
					<li>Working directly with customers to meet their needs.</li>
				</ul>
			</div>
		</div>
		<div class="lg:text-center">
			<a href="tel:4806626555" class="btn-icon js-has-smooth">
				<i class="icon-phone-alt"></i>
				<div class="flex-1 pl-3">
					<span>Free Consultation</span>
					<strong class="tel">480-662-6555</strong>
				</div>
			</a>
		</div>
	</div>
</section>
<!-- /section {Form} -->

<section id="our-services" class="container text-center max-sm:text-start pt-10 md:pt-16 xl:pt-20 2xl:pt-24 pb-28 sm:pb-40 md:pb-48 lg:pb-56 2xl:pb-[252px] [&_p]:mb-6">
	<div class="flex justify-center max-sm:justify-start 2xl:mb-2 ">
		<h2 class="relative sm:flex justify-center items-center gap-2 text-primary font-base font-black uppercase text-lg mb-0 [&_i]:text-primary/20 [&_i]:text-[30px] max-sm:pb-1">
			<i class="icon-tap block"></i>
			Our Services
		</h2>
	</div>
	<h2 class="mb-5">Plumbing Services In Arizona</h2>
	<p>When you trust Evolution Plumbing and Misting, you can know the job will be done right the first time.</p>
	<div class="swiper card-slider max-lg:pb-12">
		<div class="swiper-wrapper lg:flex lg:flex-wrap lg:justify-center lg:-mx-3 lg:gap-y-6 lg:text-start">
			<div class="swiper-slide lg:w-1/3 xl:w-1/4 lg:px-3 h-auto">
				<div class="flip-card focus:outline-0 bg-transparent w-full h-full">
					<div class="max-lg:flex max-lg:flex-col flip-card-inner min-h-[326px] relative h-full">
						<div class="flip-card-front max-lg:min-h-[200px] z-10 max-lg:relative lg:absolute w-full h-full">
							<figure class="absolute inset-0 before:absolute before:inset-0 before:h-full before:bg-gradient-to-b from-white/0 to-ss-blue-100 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
								<img src="./assets/images/service-img-01.jpg" alt="Service Img 01" width="305" height="326" loading="lazy">
							</figure>
							<div class="absolute inset-0 flex items-end text-white pl-5 lg:mb-4">
								<h4 class="font-base">Plumbing Repairs</h4>
							</div>
						</div>
						<div class="max-md:flex-1 flip-card-back h-full px-5 max-lg:pb-1 lg:pt-6 bg-ss-blue-100 text-white z-1 text-start [&_p]:text-sm">
							<h4 class="max-lg:hidden mb-4 font-base">Plumbing Repairs</h4>
							<p>We offer fast, reliable solutions for all your plumbing issues. For all plumbing repair needs, our expert technicians use cutting-edge technology to diagnose and fix problems efficiently. Trust us to restore your plumbing system to perfect working order. Call today for prompt, professional repair services!</p>
						</div>
					</div>
				</div> <!-- Card -->
			</div>
			<div class="swiper-slide lg:w-1/3 xl:w-1/4 lg:px-3 h-auto">
				<div class="flip-card focus:outline-0 bg-transparent w-full h-full">
					<div class="max-lg:flex max-lg:flex-col flip-card-inner min-h-[326px] relative h-full">
						<div class="flip-card-front max-lg:min-h-[200px] z-10 max-lg:relative lg:absolute w-full h-full">
							<figure class="absolute inset-0 before:absolute before:inset-0 before:h-full before:bg-gradient-to-b from-white/0 to-ss-blue-100 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
								<img src="./assets/images/service-img-02.jpg" alt="Service Img 02" width="305" height="326" loading="lazy">
							</figure>
							<div class="absolute inset-0 flex items-end text-white pl-5 lg:mb-4">
								<h4 class="font-base">Commercial Plumbing</h4>
							</div>
						</div>
						<div class="max-md:flex-1 flip-card-back h-full px-5 max-lg:pb-1 lg:pt-6 bg-ss-blue-100 text-white z-1 text-start [&_p]:text-sm">
							<h4 class="max-lg:hidden mb-4 font-base">Commercial Plumbing</h4>
							<p>We specialize in comprehensive commercial plumbing services tailored to your business needs. Our skilled technicians handle everything from routine maintenance and repairs to large-scale installations and upgrades. We use advanced technology and techniques to ensure minimal disruption to your operations.</p>
						</div>
					</div>
				</div> <!-- Card -->
			</div>
			<div class="swiper-slide lg:w-1/3 xl:w-1/4 lg:px-3 h-auto">
				<div class="flip-card focus:outline-0 bg-transparent w-full h-full">
					<div class="max-lg:flex max-lg:flex-col flip-card-inner min-h-[326px] relative h-full">
						<div class="flip-card-front max-lg:min-h-[200px] z-10 max-lg:relative lg:absolute w-full h-full">
							<figure class="absolute inset-0 before:absolute before:inset-0 before:h-full before:bg-gradient-to-b from-white/0 to-ss-blue-100 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
								<img src="./assets/images/service-img-03.jpg" alt="Service Img 03" width="305" height="326" loading="lazy">
							</figure>
							<div class="absolute inset-0 flex items-end text-white pl-5 lg:mb-4">
								<h4 class="font-base">Water Fixture Services</h4>
							</div>
						</div>
						<div class="max-md:flex-1 flip-card-back h-full px-5 max-lg:pb-1 lg:pt-6 bg-ss-blue-100 text-white z-1 text-start [&_p]:text-sm">
							<h4 class="max-lg:hidden mb-4 font-base">Water Fixture Services</h4>
							<p>Upgrade your home with our expert water fixture services. We specialize in the installation, repair, and maintenance of faucets, sinks, showers, and toilets. Our skilled technicians ensure precise, efficient service to enhance the functionality and aesthetics of your fixtures. Whether you're remodeling or need a quick fix, Evolution Plumbing delivers top-quality results.</p>
						</div>
					</div>
				</div> <!-- Card -->
			</div>
			<div class="swiper-slide lg:w-1/3 xl:w-1/4 lg:px-3 h-auto">
				<div class="flip-card focus:outline-0 bg-transparent w-full h-full">
					<div class="max-lg:flex max-lg:flex-col flip-card-inner min-h-[326px] relative h-full">
						<div class="flip-card-front max-lg:min-h-[200px] z-10 max-lg:relative lg:absolute w-full h-full">
							<figure class="absolute inset-0 before:absolute before:inset-0 before:h-full before:bg-gradient-to-b from-white/0 to-ss-blue-100 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
								<img src="./assets/images/service-img-04.jpg" alt="Service Img 04" width="305" height="326" loading="lazy">
							</figure>
							<div class="absolute inset-0 flex items-end text-white pl-5 lg:mb-4">
								<h4 class="font-base">Water Heaters</h4>
							</div>
						</div>
						<div class="max-md:flex-1 flip-card-back h-full px-5 max-lg:pb-1 lg:pt-6 bg-ss-blue-100 text-white z-1 text-start [&_p]:text-sm">
							<h4 class="max-lg:hidden mb-4 font-base">Water Heaters</h4>
							<p>We offer top-notch water heater services to keep your home comfortable. Our expert technicians specialize in the installation, repair, and maintenance of all types of water heaters, including tankless systems. We ensure efficient, reliable hot water solutions tailored to your needs.</p>
						</div>
					</div>
				</div> <!-- Card -->
			</div>
			<div class="swiper-slide lg:w-1/3 xl:w-1/4 lg:px-3 h-auto">
				<div class="flip-card focus:outline-0 bg-transparent w-full h-full">
					<div class="max-lg:flex max-lg:flex-col flip-card-inner min-h-[326px] relative h-full">
						<div class="flip-card-front max-lg:min-h-[200px] z-10 max-lg:relative lg:absolute w-full h-full">
							<figure class="absolute inset-0 before:absolute before:inset-0 before:h-full before:bg-gradient-to-b from-white/0 to-ss-blue-100 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
								<img src="./assets/images/service-img-05.jpg" alt="Service Img 05" width="305" height="326" loading="lazy">
							</figure>
							<div class="absolute inset-0 flex items-end text-white pl-5 lg:mb-4">
								<h4 class="font-base">Misters</h4>
							</div>
						</div>
						<div class="max-md:flex-1 flip-card-back h-full px-5 max-lg:pb-1 lg:pt-6 bg-ss-blue-100 text-white z-1 text-start [&_p]:text-sm">
							<h4 class="max-lg:hidden mb-4 font-base">Misters</h4>
							<p>Beat the heat with our premium water mister services. Our expert team designs, installs, and maintains high-quality water misting systems perfect for patios, gardens, and commercial spaces. Enjoy a cooler, more comfortable outdoor environment with our efficient and reliable solutions.</p>
						</div>
					</div>
				</div> <!-- Card -->
			</div>
			<div class="swiper-slide lg:w-1/3 xl:w-1/4 lg:px-3 h-auto">
				<div class="flip-card focus:outline-0 bg-transparent w-full h-full">
					<div class="max-lg:flex max-lg:flex-col flip-card-inner min-h-[326px] relative h-full">
						<div class="flip-card-front max-lg:min-h-[200px] z-10 max-lg:relative lg:absolute w-full h-full">
							<figure class="absolute inset-0 before:absolute before:inset-0 before:h-full before:bg-gradient-to-b from-white/0 to-ss-blue-100 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
								<img src="./assets/images/service-img-06.jpg" alt="Service Img 06" width="305" height="326" loading="lazy">
							</figure>
							<div class="absolute inset-0 flex items-end text-white pl-5 lg:mb-4">
								<h4 class="font-base">Pipe Leak Detection & Repair</h4>
							</div>
						</div>
						<div class="max-md:flex-1 flip-card-back h-full px-5 max-lg:pb-1 lg:pt-6 bg-ss-blue-100 text-white z-1 text-start [&_p]:text-sm">
							<h4 class="max-lg:hidden mb-4 font-base">Pipe Leak Detection & Repair</h4>
							<p>We specialize in advanced pipe leak detection and repair services. Our skilled technicians use state-of-the-art technology to quickly locate and fix leaks, preventing damage and saving you money. Whether it's a minor drip or a major burst, we ensure precise and efficient solutions to restore your plumbing system.</p>
						</div>
					</div>
				</div> <!-- Card -->
			</div>
			<div class="swiper-slide lg:w-1/3 xl:w-1/4 lg:px-3 h-auto">
				<div class="flip-card focus:outline-0 bg-transparent w-full h-full">
					<div class="max-lg:flex max-lg:flex-col flip-card-inner min-h-[326px] relative h-full">
						<div class="flip-card-front max-lg:min-h-[200px] z-10 max-lg:relative lg:absolute w-full h-full">
							<figure class="absolute inset-0 before:absolute before:inset-0 before:h-full before:bg-gradient-to-b from-white/0 to-ss-blue-100 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
								<img src="./assets/images/service-img-07.jpg" alt="Service Img 07" width="305" height="326" loading="lazy">
							</figure>
							<div class="absolute inset-0 flex items-end text-white pl-5 lg:mb-4">
								<h4 class="font-base">Piping & Repiping</h4>
							</div>
						</div>
						<div class="max-md:flex-1 flip-card-back h-full px-5 max-lg:pb-1 lg:pt-6 bg-ss-blue-100 text-white z-1 text-start [&_p]:text-sm">
							<h4 class="max-lg:hidden mb-4 font-base">Piping & Repiping</h4>
							<p>Our Team is capable of handling everything from minor pipe repairs to complete system overhauls, ensuring your plumbing is efficient and reliable. Using high-quality materials and advanced techniques, we provide durable solutions tailored to your needs. Trust Evolution Plumbing for professional piping and repiping services that keep your water flowing smoothly.</p>
						</div>
					</div>
				</div> <!-- Card -->
			</div>
			<div class="swiper-slide lg:w-1/3 xl:w-1/4 lg:px-3 h-auto">
				<div class="flip-card focus:outline-0 bg-transparent w-full h-full">
					<div class="max-lg:flex max-lg:flex-col flip-card-inner min-h-[326px] relative h-full">
						<div class="flip-card-front max-lg:min-h-[200px] z-10 max-lg:relative lg:absolute w-full h-full">
							<figure class="absolute inset-0 before:absolute before:inset-0 before:h-full before:bg-gradient-to-b from-white/0 to-ss-blue-100 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
								<img src="./assets/images/service-img-08.jpeg" alt="Service Img 08" width="305" height="326" loading="lazy">
							</figure>
							<div class="absolute inset-0 flex items-end text-white pl-5 lg:mb-4">
								<h4 class="font-base">Water Treatment</h4>
							</div>
						</div>
						<div class="max-md:flex-1 flip-card-back h-full px-5 max-lg:pb-1 lg:pt-6 bg-ss-blue-100 text-white z-1 text-start [&_p]:text-sm">
							<h4 class="max-lg:hidden mb-4 font-base">Water Treatment</h4>
							<p>Ensure clean, safe water with our professional water treatment services. Our experts specialize in the installation, maintenance, and repair of water filtration and purification systems. We use cutting-edge technology to remove contaminants, improve taste, and provide your home or business with the highest quality water.</p>
						</div>
					</div>
				</div> <!-- Card -->
			</div>
		</div>
		<div class="swiper-pagination lg:hidden [&_.swiper-pagination-bullet]:size-3"></div>
	</div>
</section>
<!-- /section {Our Services} -->

<section id="why-choose-evolution-plumbing" class="pt-[1px] pb-10 2xl:pb-16 bg-ss-blue-100">
	<div class="text-center text-ss-black-100/60 -mt-16 lg:-mt-[152px] relative z-10 px-4 md:px-0 mb-12 ">
		<div class="container px-5 md:px-10 py-7 bg-white" style="box-shadow: 0px -15px 35.2px 0px rgba(0, 0, 0, 0.06);">
			<form method="POST" action="mailer/index.php" id="form-id-1" class="validate form">
				<div class="form-header mb-6">
					<h2 class="relative sm:flex justify-center items-center gap-2 text-primary font-base font-black uppercase text-lg lg:mb-6 [&_i]:text-primary/20 [&_i]:text-[30px]">
						<i class="icon-tap block"></i>
						GET A FREE CONSULTATION!
					</h2>
					<p>Honest Answers - Simple Solutions</p>
				</div>

				<div class="form-section-0 flex flex-wrap -mx-2">
					<div class="form-group px-2 w-full md:w-1/2 lg:w-1/5">
						<input class="form-control" placeholder="Full Name" name="full-name" type="text" value="">
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-1/5">
						<input class="form-control" placeholder="Email Address" name="email" type="email" value="">
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-1/5">
						<input class="form-control" placeholder="Phone Number" name="phone" type="text" value="">
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-2/5">
						<textarea class="form-control" placeholder="Your Message Here..." name="message"></textarea>
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-2/5">
						<div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
						<div class="messages"></div>
					</div>
					<div class="form-group px-2 w-full md:w-1/2 lg:w-2/5">
						<!-- You can enter a value here manually during local testing, That will bypass the validation -->
						<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1">
						<div class="messages"></div>
					</div>
				</div>
				<div class="form-footer">
					<button type="submit" class="submitButton btn btn-primary btn-sm">
						<svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
							<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
							<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
						</svg>
						Schedule A Consultation Today
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<div class="container">
		<h2 class="xl:text-[40px] mb-5 lg:mb-10 text-white text-center max-sm:text-start">Why Choose Evolution Plumbing and Misting?</h2>
		<ul class="flex justify-center flex-wrap [&_li:nth-child(odd)]:bg-primary-100 [&_li:nth-child(even)]:bg-primary-200 [&_li]:w-full md:[&_li]:w-1/2 lg:[&_li]:w-1/3 xl:[&_li]:w-1/4 [&_li]:p-7 [&_figure]:mb-7 max-sm:mb-0 max-sm:[&_li]:flex max-sm:[&_figure]:pr-3">
			<li>
				<figure>
					<img src="./assets/images/icon01.svg" width="60" height="60" loading="lazy" alt="icon estimate">
				</figure>
				<div>
					<h3 class="text-[22px]">Get a 100% Free Estimate </h3>
					<p>You can be confident you'll be happy when our team drives away.</p>
				</div>
			</li>
			<li>
				<figure>
					<img src="./assets/images/icon02.svg" width="60" height="60" loading="lazy" alt="icon emergency">
				</figure>
				<div>
					<h3 class="text-[22px]">Available for Emergency</h3>
					<p>Plumbing emergencies can't wait. Call for immediate help.</p>
				</div>
			</li>
			<li>
				<figure>
					<img src="./assets/images/icon03.svg" width="60" height="60" loading="lazy" alt="icon guaranted">
				</figure>
				<div>
					<h3 class="text-[22px]">Your Satisfaction Guaranteed</h3>
					<p>You can be confident you'll be happy when our team drives away.</p>
				</div>
			</li>
			<li>
				<figure>
					<img src="./assets/images/icon04.svg" width="60" height="60" loading="lazy" alt="icon warranty">
				</figure>
				<div>
					<h3 class="text-[22px]">Ask About Our Warranty</h3>
					<p>Talk to our team about our plumbing services warranty!</p>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- /section {Why Choose Us} -->

<section id="reviews-and-testimonials" class="py-5 sm:py-8 md:py-12 lg:py-28 bg-ss-blue-100/95 lg:bg-transparent">
	<div class="form-header mb-6 lg:mb-8">
		<div class="container text-center max-lg:text-white max-sm:text-start">
			<h2 class="relative sm:flex justify-center items-center gap-2 text-primary font-base font-black uppercase text-lg mb-0 [&_i]:text-primary/20 [&_i]:text-[30px] max-sm:pb-1">
				<i class="icon-tap block"></i>
				Reviews & Testimonials
			</h2>
			<h2>Hear From Our Happy Customers</h2>
			<p>At Evolution Plumbing and Misting, your satisfaction is our priority! See for yourself what our customers have to say about working with us.</p>
		</div>
	</div>
	<div class="container lg:flex flex-wrap items-center [&_figure]:relative [&_figure]:z-[1] [&_figure]:block [&_figure_img]:h-[439px] [&_figure_img]:w-full [&_figure_img]:object-center [&_figure_img]:object-cover ">
		<div class="lg:flex-1 text-center mb-4 lg:mb-0">
			<figure class="rounded-[20px] overflow-hidden">
				<img src="./assets/images/img01.jpg" width="570" height="439" loading="lazy" alt="Image Description">
			</figure>
		</div>
		<div class="lg:w-[55%] flex items-center">
			<div class="testimonial-holder w-full">
				<div class="inner">
					<div class="swiper testimonials-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide sm:w-1/2 lg:w-1/3 xl:w-1/4 max-md:px-2 px-3">
								<blockquote class="text-white">
									<span class="block text-lg font-extrabold uppercase py-1 pl-8 relative before:content-['\e900'] before:font-icomoon before:text-white/20 before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:text-[28px]">Benifits</span>
									<h2>Why Choose Evolution Plumbing and Misting?</h2>
									<div class="quote-holder">
										<p>On short notice, we needed the faucets replaced in our bathroom vanity. The response was very fast, work was done professionally and very quickly. Thank you!</p>
									</div>
									<cite>
										<strong class="author">Steve P.</strong>
									</cite>
									<ul>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
									</ul>
								</blockquote>
							</div>
							<div class="swiper-slide sm:w-1/2 lg:w-1/3 xl:w-1/4 max-md:px-2 px-3">
								<blockquote class="text-white">
									<span class="block text-lg font-extrabold uppercase py-1 pl-8 relative before:content-['\e900'] before:font-icomoon before:text-white/20 before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:text-[28px]">Benifits</span>
									<h2>Why Choose Evolution Plumbing and Misting?</h2>
									<div class="quote-holder">
										<p>Ryan @ Evolution Plumbing was recommended to me and everything from my initial contact.consultation, pricing, and installation was done in a very professional and courteous manner. Working with Ryan was without any pressure; i choose a marathon 50 gal water heater from Evolution, the install was very clean and the appointment was scheduled and fulfilled perfectly.</p>
									</div>
									<cite>
										<strong class="author">Dennis Ang</strong>
									</cite>
									<ul>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
									</ul>
								</blockquote>
							</div>
							<div class="swiper-slide sm:w-1/2 lg:w-1/3 xl:w-1/4 max-md:px-2 px-3">
								<blockquote class="text-white">
									<span class="block text-lg font-extrabold uppercase py-1 pl-8 relative before:content-['\e900'] before:font-icomoon before:text-white/20 before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:text-[28px]">Benifits</span>
									<h2>Why Choose Evolution Plumbing and Misting?</h2>
									<div class="quote-holder">
										<p>I had an excellent experience with this company during the installation of a new water softener. Ryan and Justin were both highly professional and knowledgeable. Justin, in particular, impressed me with his considerate approac, addressing my questions patiently and going the extra mile by providing an additional service-capping a valve for free. Their service met and exceeded my expectations, combining efficiency, professionalism, and a generous touch. I wholeheartedly recommend this company, especially Ryan and Justin, for their outstanding customer-centric approach.</p>
									</div>
									<cite>
										<strong class="author">Nandita R.</strong>
									</cite>
									<ul>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
										<li><i class="icon-star"></i></li>
									</ul>
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
<!-- /section {Testimonials} -->

<?php
include 'footer.php';
