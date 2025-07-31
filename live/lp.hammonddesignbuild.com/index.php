<?php
include 'header.php'; ?>

<section class="container flex justify-center my-8 sm:my-16 lg:my-32 max-lg:flex-col max-xl:items-center gap-y-8 md:gap-11">
	<div class="relative w-full flex gap-4 lg:w-1/2">
		<div class="w-1/2">
			<figure class="even:self-end [&_img]:w-full">
				<img src="assets/images/about-us-feature-img-1.jpg" alt="Feature Image 1" width="321" height="521" loading="lazy">
			</figure>
		</div>
		<div class="w-1/2">
			<figure class="even:self-end [&_img]:w-full">
				<img src="assets/images/about-us-feature-img-2.jpg" alt="Feature Image 2" width="321" height="521" loading="lazy">
			</figure>
		</div>
		<div class="absolute p-1 -translate-x-1/2 -translate-y-1/2 bg-white rounded-full top-1/2 left-1/2">
			<div class="border border-dashed border-ss-brown rounded-full size-[152px] flex flex-col justify-center items-center">
				<span class="block text-[44px] leading-none text-ss-brown text-center font-black">20<sup class="text-3xl font-normal">+</sup></span><sup class="">+</sup>
				<span class="text-lg leading-[1.14] text-center">Years of
					Experience</span>
			</div>
		</div>
	</div>
	<div class="lg:w-1/2 [&_p]:mb-2">
		<div class="flex items-center text-ss-brown [&_p]:font-semibold [&_p]:ml-2 [&_p]:leading-normal [&_p]:mb-0 uppercase [&_i]:mb-2">
			<i class="icon-square text-[8px]"></i>
			<p>About Us</p>
		</div>
		<h2>About Hammond Design Build</h2>
		<p>We are a Full-Service Home Remodeling company located in Wilsonville, Oregon. With over 20 years of experience, we've built our business around four core principals: Integrity, Honesty, Workmanship and our Personal Commitment to Excellence.</p>
		<p>At Hammond Design Build, our designers, electricians, stone fabricators, carpenters, painters, plumbers, flooring specialists and tile setters have all gone through an extensive vetting process and have been with us for many years. Our knowledgeable team will work with you throughout the project to hand select finishes, layouts and a design you will enjoy for many years to come. </p>
		<div class="bg-ss-brown/[0.08] px-5 py-4 border-b-2 border-b-solid border-b-ss-brown mt-4 mb-7 [&_p]:mb-0">
			<p><span class="font-semibold text-ss-brown">Our mission is simple:</span> Honest people remodeling homes with superior craftsmanship and professional results.</p>
		</div>
		<div class="flex flex-wrap max-sm:justify-center gap-y-4 gap-11">
			<a href="#heroForm" class="btn btn-primary js-has-smooth">Get a free quote</a>
			<a href="tel:5038294383" class="flex items-center gap-[10px] text-ss-brown group hover:text-black">
				<span class="flex items-center justify-center border border-solid rounded-full size-11 border-ss-brown group-hover:bg-ss-brown group-hover:text-white">
					<i class="icon-phone"></i>
				</span>
				<span>
					<span class="block uppercase tracking-[0.28px] leading-[1.55] text-sm text-black hover:text-black">FREE CONSULTATION!</span>
					<span class="text-xl leading-[1.55] font-bold tracking-[0.4px]">503-826-4383</span>
				</span>
			</a>
		</div>
	</div>
</section>
<!-- /Section {About Us} -->

<section class="container max-sm:py-12">
	<div class="max-w-[788px] mx-auto mt-2 mb-10 text-center heading-section">
		<div class="flex items-center justify-center text-ss-brown [&_p]:font-semibold [&_p]:ml-2 [&_p]:leading-normal [&_p]:mb-0 uppercase ">
			<i class="icon-square text-[8px]"></i>
			<p>our services</p>
		</div>
		<h2 class="leading-normal">What We Offer</h2>
		<p>We are a full service Kitchen and Bathroom remodeling company. From a customer standpoint, this means when you choose Hammond Design Build, you can rest assured that each aspect of your project is meticulously and professionally managed.</p>
	</div>
	<ul class="flex flex-wrap justify-center -mx-4 mb-12 text-[15px]">
		<li class="px-4 mb-8 w-full md:w-1/2 lg:w-1/3">
			<div class="flex flex-col justify-between h-full shadow-2xl bg-white">
				<div class="px-5 pt-6">
					<span class="mb-3 size-12 rounded-full bg-ss-brown/10 text-ss-brown text-2xl flex items-center justify-center"><i class="icon-kitchen"></i></span>
					<h3 class="mb-2">Kitchens</h3>
					<p>Whether you're looking to replace the existing footprint or open up a wall to create an open floor plan, we will collaborate with you to find the perfect solution. Contact us today if you're interested in:</p>
					<ul class="list-disc list-inside mb-4">
						<li>Full kitchen remodeling</li>
						<li>Custom layouts</li>
						<li>Flooring options</li>
						<li>Cabinets & finishing</li>
						<li>& more!</li>
					</ul>
				</div>
				<figure class="[&_img]:w-full">
					<img src="./assets/images/ourservice-img01.jpg" alt="our services feature image" width="404" height="240" loading="lazy">
				</figure>
			</div>
		</li>
		<li class="px-4 mb-8 w-full md:w-1/2 lg:w-1/3">
			<div class="flex flex-col justify-between h-full shadow-2xl bg-white">
				<div class="px-5 pt-6">
					<span class="mb-3 size-12 rounded-full bg-ss-brown/10 text-ss-brown text-2xl flex items-center justify-center"><i class="icon-bathroom"></i></span>
					<h3 class="mb-2">Bathrooms</h3>
					<p>If your bathroom is cramped, dark or short on storage, trust Hammond Design Build to overhaul the space with the details that make all the difference. Talk to us about any of these services we offer:</p>
					<ul class="list-disc list-inside mb-4">
						<li>Full bathroom renovations</li>
						<li>Bath/shower remodels</li>
						<li>Cabinets & fixtures</li>
						<li>& more!</li>
					</ul>
				</div>
				<figure class="[&_img]:w-full">
					<img src="./assets/images/ourservice-img02.jpg" alt="our services feature image" width="404" height="240" loading="lazy">
				</figure>
			</div>
		</li>
		<li class="px-4 mb-8 w-full md:w-1/2 lg:w-1/3">
			<div class="flex flex-col justify-between h-full shadow-2xl bg-white">
				<div class="px-5 pt-6">
					<span class="mb-3 size-12 rounded-full bg-ss-brown/10 text-ss-brown text-2xl flex items-center justify-center"><i class="icon-interiors"></i></span>
					<h3 class="mb-2">Interiors</h3>
					<p>Kitchen & bathroom remodels are our primary focus, but we can also help freshen up other areas of your home as an extension of your renovation. Let us know how we can assist with:</p>
					<ul class="list-disc list-inside mb-4">
						<li>Fireplace surrounds</li>
						<li>Wall addition/removal</li>
						<li>Flooring</li>
						<li>Lighting</li>
						<li>Base & finish crown molding</li>
						<li>& more!</li>
					</ul>
				</div>
				<figure class="[&_img]:w-full">
					<img src="./assets/images/ourservice-img03.jpg" alt="our services feature image" width="404" height="240" loading="lazy">
				</figure>
			</div>
		</li>
	</ul>
	<div class="flex flex-wrap justify-center gap-y-4 gap-11">
		<a href="#heroForm" class="btn btn-primary js-has-smooth">Get a free quote</a>
		<a href="tel:5038294383" class="flex items-center gap-[10px] text-ss-brown group hover:text-black">
			<span class="flex items-center justify-center border border-solid rounded-full size-11 border-ss-brown group-hover:bg-ss-brown group-hover:text-white">
				<i class="icon-phone"></i>
			</span>
			<span>
				<span class="block uppercase tracking-[0.28px] leading-[1.55] text-sm text-black hover:text-black">FREE CONSULTATION!</span>
				<span class="text-xl leading-[1.55] font-bold tracking-[0.4px]">503-826-4383</span>
			</span>
		</a>
	</div>
</section>
<!-- /Section {Our Services} -->

<!-- Our Process Section - starts -->
<section class="pt-[30px] pb-[60px] lg:pt-[60px] lg:pb-20 xl:py-[120px]">
    <div class="container">
		<div class="max-w-[788px] mx-auto mt-2 mb-10 text-center heading-section">
			<div class="flex items-center justify-center text-ss-brown [&_p]:font-semibold [&_p]:ml-2 [&_p]:leading-normal [&_p]:mb-0 uppercase ">
				<i class="icon-square text-[8px]"></i>
				<p>Our Process</p>
			</div>
			<h2 class="leading-normal">4 Stages of HDB Remodeling</h2>
			<p>The HDB remodeling process is defined by 4 different stages: Discover, Design, Refine, Build, Enjoy. With our efficient approach and years of experience, we are able to deliver the highest quality renovations and exceed client expectations.</p>
		</div>

        <div class="flex flex-wrap lg:pt-28 lg:pb-20 xl:pb-24 gap-y-4 lg:gap-y-0 -mx-4 md:-mx-0">
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-0 max-md:pt-[106px] md:mt-[116px] md:mb-[116px] lg:mt-0 lg:mb-0">
                <div class="relative bg-ss-brown z-0 p-2 lg:p-[10px] md:min-h-[302px] before:absolute before:bg-white before:top-0 before:left-0 before:right-0 before:w-full before:h-1/2 before:z-[-1]">
                    <div class="relative bg-ss-gray text-center px-4 md:px-9 lg:px-4 xl:px-9 pb-4 md:pb-12 md:min-h-[300px] lg:min-h-[350px] xl:min-h-[320px] [&_p]:text-black/7 [&_p]:text-base [&_p]:leading-normal z-10 [&_p]:last-of-type:mb-0 pt-4">
                        <picture class="mb-4 lg:mb-[18px] max-w-48 xl:max-w-[204px] mx-auto p-2 bg-[#F1EDE8] rounded-full shadow -mt-[126px] md:-mt-[140px] [&_img]:rounded-full [&_img]:max-w-[176px] [&_img]:min-w-[176px] [&_img]:min-h-[176px] [&_img]:max-h-[176px] xl:[&_img]:max-w-[188px] xl:[&_img]:min-w-[188px] xl:[&_img]:min-h-[188px] xl:[&_img]:max-h-[188px] [&_img]:object-cover">
                            <img src="./assets/images/remodeling-discover-process-img.webp" alt="Discover" loading="lazy" width="952" height="840">
                        </picture>
                        <div>
                            <h3 class="text-xl font-semibold leading-none tracking-tight mb-[14px]">Discover</h3>
                            <p>In this phase, we spend time getting to know each other and pinpointing the clients vision for the space.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-0 max-md:pb-[96px] md:mt-[116px] md:mb-[116px] lg:mt-0 lg:mb-0">
                <div class="relative bg-ss-brown z-0 p-2 lg:p-[10px] md:min-h-[302px] before:absolute before:bg-white before:top-auto before:bottom-0 before:left-0 before:right-0 before:w-full before:h-1/2 before:z-[-1]">
                    <div class="relative bg-ss-gray text-center pt-4 md:pt-[30px] px-4 md:px-6 lg:px-4 xl:px-6 pb-4 md:min-h-[300px] lg:min-h-[350px] xl:min-h-[320px] [&_p]:text-black/7 [&_p]:text-base [&_p]:leading-normal z-10 [&_p]:last-of-type:mb-0">
                        <div class="mb-[14px]">
                            <h3 class="text-xl font-semibold leading-none tracking-tight mb-[14px]">Design</h3>
                            <p>Once we have a clear understanding of your goals, budget and project scope, we go to work on the design specs to create your dream space.</p>
                        </div>
                        <picture class="-mb-[120px] md--mb-[166px] max-w-48 xl:max-w-[204px] mx-auto p-2 bg-[#F1EDE8] rounded-full shadow [&_img]:rounded-full [&_img]:max-w-[176px] [&_img]:min-w-[176px] [&_img]:min-h-[176px] [&_img]:max-h-[176px] xl:[&_img]:max-w-[188px] xl:[&_img]:min-w-[188px] xl:[&_img]:min-h-[188px] xl:[&_img]:max-h-[188px] [&_img]:object-cover">
                            <img src="./assets/images/remodeling-design-process-img.webp" alt="Design" loading="lazy" width="952" height="840">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-0 max-md:pt-[96px] md:mb-20 lg:mb-0">
                <div class="relative bg-ss-brown z-0 p-2 lg:p-[10px] md:min-h-[302px] before:absolute before:bg-white before:top-0 before:left-0 before:right-0 before:w-full before:h-1/2 before:z-[-1]">
                    <div class="relative bg-ss-gray text-center pt-4 px-4 md:px-6 lg:px-4 xl:px-6 pb-4 md:pb-12 md:min-h-[300px] lg:min-h-[350px] xl:min-h-[320px] [&_p]:text-black/7 [&_p]:text-base [&_p]:leading-normal z-10 [&_p]:last-of-type:mb-0">
                        <picture class="mb-4 lg:mb-[18px] max-w-48 xl:max-w-[204px] mx-auto p-2 bg-[#F1EDE8] rounded-full shadow -mt-[116px] md:-mt-[140px] [&_img]:rounded-full [&_img]:max-w-[176px] [&_img]:min-w-[176px] [&_img]:min-h-[176px] [&_img]:max-h-[176px] xl:[&_img]:max-w-[188px] xl:[&_img]:min-w-[188px] xl:[&_img]:min-h-[188px] xl:[&_img]:max-h-[188px] [&_img]:object-cover">
                            <img src="./assets/images/remodeling-refine-process-img.webp" alt="Refine" loading="lazy" width="952" height="1174">
                        </picture>
                        <div>
                            <h3 class="text-xl font-semibold leading-none tracking-tight mb-[14px]">Refine</h3>
                            <p>Once your design framework is complete, you'll meet with your project designer to help guide you in picking out materials.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/4 px-4 md:px-0 max-md:pb-[106px] md:mb-20 lg:mb-0">
                <div class="relative bg-ss-brown z-0 p-2 lg:p-[10px] md:min-h-[302px] before:absolute before:bg-white before:top-auto before:bottom-0 before:left-0 before:right-0 before:w-full before:h-1/2 before:z-[-1]">
                    <div class="relative bg-ss-gray text-center pt-4 md:pt-[30px] px-4 md:px-7 lg:px-4 xl:px-7 pb-4 md:min-h-[300px] lg:min-h-[350px] xl:min-h-[320px] [&_p]:text-black/7 [&_p]:text-base [&_p]:leading-normal z-10 [&_p]:last-of-type:mb-0">
                        <div class="mb-[14px]">
                            <h3 class="text-xl font-semibold leading-none tracking-tight mb-[14px]">Build</h3>
                            <p>Time to roll up our sleeves and get to work! In this final phase we bring in our carefully vetted tradesmen to bring your vision to life.</p>
                        </div>
                        <picture class="-mb-[128px] md:-mb-[166px] max-w-48 xl:max-w-[204px] mx-auto p-2 bg-[#F1EDE8] rounded-full shadow [&_img]:rounded-full [&_img]:max-w-[176px] [&_img]:min-w-[176px] [&_img]:min-h-[176px] [&_img]:max-h-[176px] xl:[&_img]:max-w-[188px] xl:[&_img]:min-w-[188px] xl:[&_img]:min-h-[188px] xl:[&_img]:max-h-[188px] [&_img]:object-cover">
                            <img src="./assets/images/remodeling-build-process-img.webp" alt="Build" loading="lazy" width="952" height="1174">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-wrap text-center pt-8 lg:pt-[50px]">
			<a href="#heroForm" class="btn btn-primary js-has-smooth">Get a free quote</a>
        </div>
    </div>
</section>
<!--  /Section {Our Process} -->

<section class="block-gallery pt-20 pb-16 bg-ss-brown/[.08] text-center">
	<div class="container">
		<div class="max-w-5xl mx-auto heading-section">
			<div class="flex items-center justify-center text-ss-brown [&_p]:font-semibold [&_p]:ml-2 [&_p]:leading-normal [&_p]:mb-0 uppercase ">
				<i class="icon-square text-[8px]"></i>
				<p>Our Gallery</p>
			</div>
			<h2 class="mt-2 mb-10 leading-normal">Browse Our Extensive Image Gallery Showcasing Past Remodeling Work</h2>
		</div>
		<div class="media-section">
			<div class="flex flex-wrap -mx-2 lg:-mx-4">
				<div class="mb-4 lg:mb-9 px-2 lg:px-4 w-1/2 lg:w-1/3">
					<figure class="h-full [&_img]:w-full [&_img]:h-full">
						<img src="assets/images/Gallery-Image-1.jpg" alt="Gallery Image 1" width="404" height="516" loading="lazy">
					</figure>
				</div>
				<div class="mb-4 lg:mb-9 px-2 lg:px-4 w-1/2 lg:w-1/3">
					<figure class="h-full [&_img]:w-full [&_img]:h-full">
						<img src="assets/images/Gallery-Image-2.jpg" alt="Gallery Image 2" width="404" height="516" loading="lazy">
					</figure>
				</div>
				<div class="mb-4 lg:mb-9 px-2 lg:px-4 w-1/2 lg:w-1/3">
					<figure class="h-full [&_img]:w-full [&_img]:h-full">
						<img src="assets/images/Gallery-Image-3.jpg" alt="Gallery Image 3" width="404" height="516" loading="lazy">
					</figure>
				</div>
				<div class="mb-4 lg:mb-9 px-2 lg:px-4 w-1/2 lg:w-1/3">
					<figure class="h-full [&_img]:w-full [&_img]:h-full">
						<img src="assets/images/Gallery-Image-4.jpg" alt="Gallery Image 4" width="404" height="516" loading="lazy">
					</figure>
				</div>
				<div class="mb-4 lg:mb-9 px-2 lg:px-4 w-1/2 lg:w-1/3">
					<figure class="h-full [&_img]:w-full [&_img]:h-full">
						<img src="assets/images/Gallery-Image-5.jpg" alt="Gallery Image 5" width="404" height="516" loading="lazy">
					</figure>
				</div>
				<div class="mb-4 lg:mb-9 px-2 lg:px-4 w-1/2 lg:w-1/3">
					<figure class="h-full [&_img]:w-full [&_img]:h-full">
						<img src="assets/images/Gallery-Image-6.jpg" alt="Gallery Image 6" width="404" height="516" loading="lazy">
					</figure>
				</div>
			</div>
		</div>
		<a href="#heroForm" class="btn btn-primary js-has-smooth">Get a free quote</a>
	</div>
</section>
<!-- /Section {Gallery} -->

<section class="block-testimonial py-14 lg:py-20 xl:py-[120px]">
	<div class="container">
		<div class="max-w-5xl mx-auto mt-2 mb-10 text-center heading-section">
			<div class="flex items-center justify-center text-ss-brown [&_p]:font-semibold [&_p]:ml-2 [&_p]:leading-normal [&_p]:mb-0 uppercase ">
				<i class="icon-square text-[8px]"></i>
				<p>Testimonials</p>
			</div>
			<h2 class="leading-normal">What Our Clients Say About Us</h2>
		</div>
		<div class="lg:flex flex-wrap items-center">
			<div class="flex-1">
				<div class="lg:-mr-[31%]">
					<figure>
						<img src="./assets/images/testimonials-img01.jpg" alt="Testimonial silder image" width="837" height="531" loading="lazy">
					</figure>
				</div>
			</div>
			<div class="w-full lg:w-[50.5%]">
				<div class="w-full pt-4  lg:py-20 swiper testimonial-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide bg-white shadow-[1px_2px_30px_rgba(0,0,0,.05)]">
							<blockquote class="max-w-[730px] p-8 lg:py-12 xl:py-16 lg:px-12 xl:px-14">
								<div class="flex justify-between gap-5">
									<div class="flex items-center w-[360px] [&_img]:w-[50px] lg:[&_img]:w-[70px] [&_img]:h-[50px] lg:[&_img]:h-[70px] [&_img]:rounded-full [&_img]:object-cover">
										<img src="./assets/images/blank-img.jpg" width="70" height="70" loading="lazy" alt="Testimonials avatar image">
										<div class="pl-3">
											<span class="font-medium lg:text-xl">Evangeline D</span>
											<!-- <span class="block text-sm">Marketing Manager</span> -->
										</div>
									</div>
									<div class="text-[50px] text-ss-brown">
										<i class="icon-qoutation"></i>
									</div>
								</div>
								<ul class="[&_li]:inline-block [&_i]:text-ss-yellow">
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
								</ul>
								<div class="mt-5 text-sm leading-[30px] [&_p]:last:mb-0">
									<p>Amazing company to work with.Hammond Design Build delivered the vision we had for both our Master and Guest bathrooms.He has the most amazing group of people that worked on this project with great care and attention to detail.I highly recommend their company for any remodeling projects.</p>
								</div>
							</blockquote>
						</div>
						<div class="swiper-slide bg-white shadow-[1px_2px_30px_rgba(0,0,0,.05)]">
							<blockquote class="max-w-[730px] p-8 lg:py-12 xl:py-16 lg:px-12 xl:px-14">
								<div class="flex justify-between gap-5">
									<div class="flex items-center w-[360px] [&_img]:w-[50px] lg:[&_img]:w-[70px] [&_img]:h-[50px] lg:[&_img]:h-[70px] [&_img]:rounded-full [&_img]:object-cover">
										<img src="./assets/images/blank-img.jpg" width="70" height="70" loading="lazy" alt="Testimonials avatar image">
										<div class="pl-3">
											<span class="font-medium lg:text-xl">Rich D</span>
											<!-- <span class="block text-sm">Marketing Manager</span> -->
										</div>
									</div>
									<div class="text-[50px] text-ss-brown">
										<i class="icon-qoutation"></i>
									</div>
								</div>
								<ul class="[&_li]:inline-block [&_i]:text-ss-yellow">
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
								</ul>
								<div class="mt-5 text-sm leading-[30px] [&_p]:last:mb-0">
									<p>Hammond Design Build has been a tremendous resource for all the projects on our home over the last few years. They are quick to respond when questions arise and continue to provide valuable insights to make our projects run more efficiently ...More</p>
								</div>
							</blockquote>
						</div>
						<div class="swiper-slide bg-white shadow-[1px_2px_30px_rgba(0,0,0,.05)]">
							<blockquote class="max-w-[730px] p-8 lg:py-12 xl:py-16 lg:px-12 xl:px-14">
								<div class="flex justify-between gap-5">
									<div class="flex items-center w-[360px] [&_img]:w-[50px] lg:[&_img]:w-[70px] [&_img]:h-[50px] lg:[&_img]:h-[70px] [&_img]:rounded-full [&_img]:object-cover">
										<img src="./assets/images/blank-img.jpg" width="70" height="70" loading="lazy" alt="Testimonials avatar image">
										<div class="pl-3">
											<span class="font-medium lg:text-xl">Michele O</span>
											<!-- <span class="block text-sm">Marketing Manager</span> -->
										</div>
									</div>
									<div class="text-[50px] text-ss-brown">
										<i class="icon-qoutation"></i>
									</div>
								</div>
								<ul class="[&_li]:inline-block [&_i]:text-ss-yellow">
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
								</ul>
								<div class="mt-5 text-sm leading-[30px] [&_p]:last:mb-0">
									<p>HDB was terrific!  Our project was on schedule and within our budget/quote.  We got regular communication on our project, and we received expert design support in selecting materials.  We had such a great experience, we hired them for a second home improvement project.  We will call them for any of our future projects.</p>
								</div>
							</blockquote>
						</div>
						<div class="swiper-slide bg-white shadow-[1px_2px_30px_rgba(0,0,0,.05)]">
							<blockquote class="max-w-[730px] p-8 lg:py-12 xl:py-16 lg:px-12 xl:px-14">
								<div class="flex justify-between gap-5">
									<div class="flex items-center w-[360px] [&_img]:w-[50px] lg:[&_img]:w-[70px] [&_img]:h-[50px] lg:[&_img]:h-[70px] [&_img]:rounded-full [&_img]:object-cover">
										<img src="./assets/images/blank-img.jpg" width="70" height="70" loading="lazy" alt="Testimonials avatar image">
										<div class="pl-3">
											<span class="font-medium lg:text-xl">Sherron M.</span>
											<!-- <span class="block text-sm">Marketing Manager</span> -->
										</div>
									</div>
									<div class="text-[50px] text-ss-brown">
										<i class="icon-qoutation"></i>
									</div>
								</div>
								<ul class="[&_li]:inline-block [&_i]:text-ss-yellow">
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
								</ul>
								<div class="mt-5 text-sm leading-[30px] [&_p]:last:mb-0">
									<p>I started this review right after our remodel finished last August, then, as it does, life got in the way. That said, I think it’s a good thing that it got delayed because now I get to not only tell you about the process and experience, I …More</p>
								</div>
							</blockquote>
						</div>
						<div class="swiper-slide bg-white shadow-[1px_2px_30px_rgba(0,0,0,.05)]">
							<blockquote class="max-w-[730px] p-8 lg:py-12 xl:py-16 lg:px-12 xl:px-14">
								<div class="flex justify-between gap-5">
									<div class="flex items-center w-[360px] [&_img]:w-[50px] lg:[&_img]:w-[70px] [&_img]:h-[50px] lg:[&_img]:h-[70px] [&_img]:rounded-full [&_img]:object-cover">
										<img src="./assets/images/blank-img.jpg" width="70" height="70" loading="lazy" alt="Testimonials avatar image">
										<div class="pl-3">
											<span class="font-medium lg:text-xl">Cathedral Park Salon</span>
											<!-- <span class="block text-sm">Marketing Manager</span> -->
										</div>
									</div>
									<div class="text-[50px] text-ss-brown">
										<i class="icon-qoutation"></i>
									</div>
								</div>
								<ul class="[&_li]:inline-block [&_i]:text-ss-yellow">
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
									<li><i class="icon-star-rating"></i></li>
								</ul>
								<div class="mt-5 text-sm leading-[30px] [&_p]:last:mb-0">
									<p>We interviewed multiple contractors and when we met Todd my wife and I were impressed with his organized manner and his professionalism. He came with a system that we had not seen form any other contractors. He saw our vision and he shared his knowledge and know how with us. We were very glad we chose Hammond Design Build.</p>
								</div>
							</blockquote>
						</div>
					</div>
					<!-- If we need navigation buttons -->
					<div class="testimonial-buttons">
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include 'footer.php';
