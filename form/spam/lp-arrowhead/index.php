<?php
include 'header.php';
?>

<section id="discover" class="py-10 lg:pt-24 lg:pb-24">
  <div class="container">
    <div class="flex flex-col -mx-6 lg:flex-row lg:flex-wrap justify-between text-base">
      <!-- Media Wrapper -->
      <div class="mb-5 px-6 lg:w-[45%]">
        <div class="pr-8 xl:pr-16 max-w-[568px] relative h-full">
          <figure class="h-full [&_img]:h-full [&_img]:object-center [&_img]:object-cover">
            <img src="./assets/images/discover-cozy-comfort-feature-img.jpg" alt="Discover cozy comfort feature img" width="516" height="654" loading="lazy">
          </figure>
          <a href="#popup-video" data-fancybox rel="noreferrer noopener" class="absolute max-w-[276px] right-0 bottom-8 hover:cursor-pointer hover:opacity-95 hover:transition w-[50%]">
            <img src="./assets/images/temporary-video-thumbnail.png" alt="Discover cozy feature video thumbnail" width="688" height="582" loading="lazy">
          </a>
        </div>
        <div id="popup-video" style="display: none; padding: 0;" >
          <video class="bg-primary" width="322" height="279" controls>
            <source src="./assets/videos/arrowhead-video.mp4" type="video/mp4">
            <source src="./assets/videos/arrowhead-video.webm" type="video/webm">
          </video>
        </div>
      </div>
      <!-- Content Wrapper -->
      <div class="px-6 lg:w-[55%]">
        <h2 class="uppercase">Discover Cozy Comfort at Our <span class="text-primary">Red Rocks Retreat</span></h2>
        <p>Your Romantic Getaway Near Red Rocks, Offering Cozy Rooms, Stunning Views, and 420-Friendly Comfort!</p>
        <!-- Card Wrapper -->
        <div class="bg-[#edbd140f] px-6 py-4 mb-5">
          <div class="border-b border-t-ss-dark/10 pb-4 mb-4">
            <span><i class="icon-romantic-getaways-special-occasions text-primary mr-3 size-[30px]"></i></span>
            <span class="text-primary text-lg font-medium ">Romantic Getaways & Special Occasions</span>
          </div>
          <p>Celebrate your anniversary, honeymoon, or proposal at our unique, intimate bed and breakfast—only 30 minutes from Denver and close to Red Rocks.</p>
        </div>
        <!-- card wrapper -->
        <div class="bg-[#edbd140f] px-6 py-4">
          <div class="title border-b border-t-ss-dark/10 pb-4 mb-4">
            <span><i class="icon-friendly-mountain-retreat text-primary mr-3 size-[30px]"></i></span>
            <span class="text-primary text-lg font-medium ">420-Friendly Mountain Retreat</span>
          </div>
          <p>Enjoy beautiful outdoor spaces, including private smoking decks with stunning mountain views, while adhering to our non-smoking indoor policy.</p>
        </div>
        <!-- Button -->
        <div class="pt-4 lg:pt-12">
          <a class="js-has-smooth btn btn-outline" href="#footer-form">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Discover cozy} -->

<section class="bg-primary/[4%] pt-10 lg:py-16">
    <div class="container">
        <div class="[&_h2_span]:text-primary [&_h2]:uppercase mb-4 lg:mb-10 text-center">
            <h2>Our Amenities & <span>Services</span></h2>
        </div>

        <div class="block-tab flex flex-wrap justify-between gap-y-6 -mx-[5px]">
			<div class="max-lg:w-full lg:w-[25%] px-[5px]">
				<div class="max-sm:flex-col flex lg:flex-col gap-y-3 lg:gap-y-12 h-full [&_button]:text-black bg-ss-yellow-100 [&_button]:p-2 [&_button]:min-h-[48px] lg:[&_button]:min-h-[67px] [&_button]:inline-flex [&_button]:justify-center [&_button]:rounded-[4px] [&_button]:items-center [&_button]:bg-ss-gray/30 [&_button]:w-full [&_.tab.active_button]:bg-ss-yellow p-2 lg:p-6 [&_button]:text-center max-lg:[&_button]:w-full [&_button]:h-full max-sm:[&_.tab]:w-full max-lg:[&_.tab]:w-[31%]">
					<!-- Tab buttons -->
					<div class="tab active" data-tab="0">
						<button class="slide__nav text-left">Rooms</button>
					</div>
					<div class="tab" data-tab="1">
						<button class="slide__nav text-left">Weddings</button>
					</div>
					<div class="tab" data-tab="2">
						<button class="slide__nav text-left">Sweethearts Celebration</button>
					</div>
				</div>
			</div>

			<div class="w-full lg:w-[75%] px-[5px] text-base">
				<div class="swiper tab-slider h-full">
					<div class="swiper-wrapper">
						<!-- Slide 1 -->
						<div class="swiper-slide h-auto">
							<div class="h-full flex max-lg:flex-wrap-reverse lg:-mx-6 xl:-mx-[30px] lg:bg-white lg:px-5 xl:px-9 lg:py-6">
								<div class="lg:flex-1 lg:px-6 xl:px-[30px] max-lg:pb-8">
                                    <strong class="font-semibold text-lg lg:text-[28px] block pb-2 border-b border-solid border-ss-dark/10 mb-3">Master Suite</strong>
									<p>Are you looking for a romantic anniversary getaway in Colorado? The Arrowhead Manor gives you the Master Suite, truly unlike any other room out there. We believe it stands out as one the best places to stay if you are celebrating any occasion, but especially if you are wanting an anniversary getaway in Colorado. This suite uniquely exudes luxury (with the largest square footage in the Manor!) and is one of our customer’s favorites.</p>
									<div class="pt-5">
                                        <a href="#heroForm" class="js-has-smooth btn btn-outline">Book Now</a>
                                    </div>
								</div>
                                <div class="max-w-[374px] lg:w-[40%] lg:px-6 xl:px-[30px] max-lg:mb-4">
									<img src="./assets/images/master-suite.jpg" width="374" height="410" alt="Services Featured Image" loading="lazy">
								</div>
							</div>
						</div>
                        <div class="swiper-slide h-auto">
							<div class="h-full flex max-lg:flex-wrap-reverse lg:-mx-6 xl:-mx-[30px] lg:bg-white lg:px-5 xl:px-9 lg:py-6">
								<div class="lg:flex-1 lg:px-6 xl:px-[30px] max-lg:pb-8">
                                    <strong class="font-semibold text-lg lg:text-[28px] block pb-2 border-b border-solid border-ss-dark/10 mb-3">Wedding</strong>
									<p>Arrowhead offers the most affordable cheap Colorado elopement package available.  The best part is, we include pictures with our awesome backdrops!</p>
									<div class="pt-5">
                                        <a href="#heroForm" class="js-has-smooth btn btn-outline">Book Now</a>
                                    </div>
								</div>
                                <div class="max-w-[374px] lg:w-[40%] lg:px-6 xl:px-[30px] max-lg:mb-4">
									<img src="./assets/images/services01.jpg" width="374" height="410" alt="Services Featured Image" loading="lazy">
								</div>
							</div>
						</div>
                        <div class="swiper-slide h-auto">
							<div class="h-full flex max-lg:flex-wrap-reverse lg:-mx-6 xl:-mx-[30px] lg:bg-white lg:px-5 xl:px-9 lg:py-6">
								<div class="lg:flex-1 lg:px-6 xl:px-[30px] max-lg:pb-8">
                                    <strong class="font-semibold text-lg lg:text-[28px] block pb-2 border-b border-solid border-ss-dark/10 mb-3">Sweetheart Celebration</strong>
									<p>Looking for a romantic celebration near Denver?  Book a romantic night away at Arrowhead. Arrowhead is conveniently located with awesome mountain views.  Our rooms have rejuvenating jetted tubs, cozy fireplaces, warm and comfy beds, with lots of unique amenities.</p>
									<div class="pt-5">
                                        <a href="#heroForm" class="js-has-smooth btn btn-outline">Book Now</a>
                                    </div>
								</div>
                                <div class="max-w-[374px] lg:w-[40%] lg:px-6 xl:px-[30px] max-lg:mb-4">
									<img src="./assets/images/services02.jpg" width="374" height="410" alt="Services Featured Image" loading="lazy">
								</div>
							</div>
						</div>
					</div>

					<!-- Navigation arrows -->
					<div class="navigation-holder max-lg:px-3 absolute bottom-[1.95rem] lg:bottom-[7%] right-0 lg:right-[40%] flex gap-3 [&_i]:text-primary [&_i]:text-2xl [&_.swiper-button-disabled]:pointer-events-auto [&_.swiper-button-disabled]:cursor-not-allowed">
						<div class="swiper-button-prev static m-0 after:content-none"><i class="icon-arrow-left"></i></div>
						<div class="swiper-button-next static m-0 after:content-none"><i class="icon-arrow-right"></i></div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- /Section - {Tab} -->

<section class="container py-12 lg:py-24">
    <div class="[&_h2_span]:text-primary [&_h2]:uppercase text-center mb-6 lg:mb-8">
        <h2><span>Special</span> Package</h2>
    </div>
    <div class="flex flex-wrap -mx-[10px]">
        <div class="px-[10px] w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-5">
            <div class="flex relative h-full group cursor-pointer transition-all bg-black/5 md:bg-transparent hover:bg-black/5 max-md:!bg-none md:hover:!bg-none bg-cover bg-center bg-no-repeat min-h-[335px] text-sm" style="background-image: url('./assets/images/special-img01.jpg')">
                <div class="p-6 group-hover:opacity-100 transition-all md:opacity-0 text-center flex flex-col items-center justify-center [&_p:last-child]:mb-0">
                    <figure class="rounded-full overflow-hidden size-28 [&_img]:object-cover [&_img]:object-center [&_img]:w-full [&_img]:h-full mb-3 lg:mb-5">
                        <img src="./assets/images/special-img01.jpg" alt="Special Package Feature Image" width="101" height="101" loading="lazy">
                    </figure>
                    <div class="[&_strong]:block text-base lg:text-lg [&_strong]:font-medium [&_strong]:leading-[1.1] text-black mb-3">
                        <strong>Master Suite</strong>
                        <strong>($29)</strong>
                    </div>
                    <p>Silver tray and ice bucket with a bottle of sparkling cider, long stem silk rose, chocolates and a cute stuffed animal.</p>
                </div>
            </div>
        </div>
        <div class="px-[10px] w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-5">
            <div class="flex relative h-full group cursor-pointer transition-all bg-black/5 md:bg-transparent hover:bg-black/5 max-md:!bg-none md:hover:!bg-none bg-cover bg-center bg-no-repeat min-h-[335px] text-sm" style="background-image: url('./assets/images/special-img08.png')">
                <div class="p-6 group-hover:opacity-100 transition-all md:opacity-0 text-center flex flex-col items-center justify-center [&_p:last-child]:mb-0">
                    <figure class="rounded-full overflow-hidden size-28 [&_img]:object-cover [&_img]:object-center [&_img]:w-full [&_img]:h-full mb-3 lg:mb-5">
                        <img src="./assets/images/special-img08.png" alt="Special Package Feature Image" width="101" height="101" loading="lazy">
                    </figure>
                    <div class="[&_strong]:block text-base lg:text-lg [&_strong]:font-medium [&_strong]:leading-[1.1] text-black mb-3">
                        <strong>Silk Rose Petals</strong>
                        <strong>($24.99)</strong>
                    </div>
                    <p>Silk rose petals sprinkled on your bed, put in a heart shape, or you initials.</p>
                </div>
            </div>
        </div>
        <div class="px-[10px] w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-5">
            <div class="flex relative h-full group cursor-pointer transition-all bg-black/5 md:bg-transparent hover:bg-black/5 max-md:!bg-none md:hover:!bg-none bg-cover bg-center bg-no-repeat min-h-[335px] text-sm" style="background-image: url('./assets/images/special-img02.jpg')">
                <div class="p-6 group-hover:opacity-100 transition-all md:opacity-0 text-center flex flex-col items-center justify-center [&_p:last-child]:mb-0">
                    <figure class="rounded-full overflow-hidden size-28 [&_img]:object-cover [&_img]:object-center [&_img]:w-full [&_img]:h-full mb-3 lg:mb-5">
                        <img src="./assets/images/special-img02.jpg" alt="Special Package Feature Image" width="101" height="101" loading="lazy">
                    </figure>
                    <div class="[&_strong]:block text-base lg:text-lg [&_strong]:font-medium [&_strong]:leading-[1.1] text-black mb-3">
                        <strong>Chocolate Covered Strawberries</strong>
                        <strong>($29)</strong>
                    </div>
                    <p>A plate filled with chocolate covered strawberries. Waiting for you in your mini fridge</p>
                </div>
            </div>
        </div>
        <div class="px-[10px] w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-5">
            <div class="flex relative h-full group cursor-pointer transition-all bg-black/5 md:bg-transparent hover:bg-black/5 max-md:!bg-none md:hover:!bg-none bg-cover bg-center bg-no-repeat min-h-[335px] text-sm" style="background-image: url('./assets/images/special-img03.jpg')">
                <div class="p-6 group-hover:opacity-100 transition-all md:opacity-0 text-center flex flex-col items-center justify-center [&_p:last-child]:mb-0">
                    <figure class="rounded-full overflow-hidden size-28 [&_img]:object-cover [&_img]:object-center [&_img]:w-full [&_img]:h-full mb-3 lg:mb-5">
                        <img src="./assets/images/special-img03.jpg" alt="Special Package Feature Image" width="101" height="101" loading="lazy">
                    </figure>
                    <div class="[&_strong]:block text-base lg:text-lg [&_strong]:font-medium [&_strong]:leading-[1.1] text-black mb-3">
                        <strong>Spa Package</strong>
                        <strong>($33 & Up)</strong>
                    </div>
                    <p>Assortment of scrubs, lotions and oils to treat each other to a massage. Relaxing and private. Waiting in your room upon arrival.</p>
                </div>
            </div>
        </div>
        <div class="px-[10px] w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-5">
            <div class="flex relative h-full group cursor-pointer transition-all bg-black/5 md:bg-transparent hover:bg-black/5 max-md:!bg-none md:hover:!bg-none bg-cover bg-center bg-no-repeat min-h-[335px] text-sm" style="background-image: url('./assets/images/special-img04.jpg')">
                <div class="p-6 group-hover:opacity-100 transition-all md:opacity-0 text-center flex flex-col items-center justify-center [&_p:last-child]:mb-0">
                    <figure class="rounded-full overflow-hidden size-28 [&_img]:object-cover [&_img]:object-center [&_img]:w-full [&_img]:h-full mb-3 lg:mb-5">
                        <img src="./assets/images/special-img04.jpg" alt="Special Package Feature Image" width="101" height="101" loading="lazy">
                    </figure>
                    <div class="[&_strong]:block text-base lg:text-lg [&_strong]:font-medium [&_strong]:leading-[1.1] text-black mb-3">
                        <strong>Love Note On The Sign</strong>
                        <strong>($49)</strong>
                    </div>
                    <p>Put you own love note on the large entrance sign. Lit up at night and left there for 48 hours. Start off your stay right!</p>
                </div>
            </div>
        </div>
        <div class="px-[10px] w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-5">
            <div class="flex relative h-full group cursor-pointer transition-all bg-black/5 md:bg-transparent hover:bg-black/5 max-md:!bg-none md:hover:!bg-none bg-cover bg-center bg-no-repeat min-h-[335px] text-sm" style="background-image: url('./assets/images/special-img05.jpg')">
                <div class="p-6 group-hover:opacity-100 transition-all md:opacity-0 text-center flex flex-col items-center justify-center [&_p:last-child]:mb-0">
                    <figure class="rounded-full overflow-hidden size-28 [&_img]:object-cover [&_img]:object-center [&_img]:w-full [&_img]:h-full mb-3 lg:mb-5">
                        <img src="./assets/images/special-img05.jpg" alt="Special Package Feature Image" width="101" height="101" loading="lazy">
                    </figure>
                    <div class="[&_strong]:block text-base lg:text-lg [&_strong]:font-medium [&_strong]:leading-[1.1] text-black mb-3">
                        <strong>Honeymoon/Anniversary Package</strong>
                        <strong>($59)</strong>
                    </div>
                    <p>Chocolate covered strawberries, bottle of sparkling cider and silk rose petals on the bed. All waiting in the room upon arrival.</p>
                </div>
            </div>
        </div>
        <div class="px-[10px] w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-5">
            <div class="flex relative h-full group cursor-pointer transition-all bg-black/5 md:bg-transparent hover:bg-black/5 max-md:!bg-none md:hover:!bg-none bg-cover bg-center bg-no-repeat min-h-[335px] text-sm" style="background-image: url('./assets/images/special-img06.jpg')">
                <div class="p-6 group-hover:opacity-100 transition-all md:opacity-0 text-center flex flex-col items-center justify-center [&_p:last-child]:mb-0">
                    <figure class="rounded-full overflow-hidden size-28 [&_img]:object-cover [&_img]:object-center [&_img]:w-full [&_img]:h-full mb-3 lg:mb-5">
                        <img src="./assets/images/special-img06.jpg" alt="Special Package Feature Image" width="101" height="101" loading="lazy">
                    </figure>
                    <div class="[&_strong]:block text-base lg:text-lg [&_strong]:font-medium [&_strong]:leading-[1.1] text-black mb-3">
                        <strong>Couples Massage</strong>
                        <strong>($230)</strong>
                    </div>
                    <p>Enjoy a relaxing couples massge in the privacy of your own room.</p>
                </div>
            </div>
        </div>
        <div class="px-[10px] w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-5">
            <div class="flex relative h-full group cursor-pointer transition-all bg-black/5 md:bg-transparent hover:bg-black/5 max-md:!bg-none md:hover:!bg-none bg-cover bg-center bg-no-repeat min-h-[335px] text-sm" style="background-image: url('./assets/images/special-img07.jpg')">
                <div class="p-6 group-hover:opacity-100 transition-all md:opacity-0 text-center flex flex-col items-center justify-center [&_p:last-child]:mb-0">
                    <figure class="rounded-full overflow-hidden size-28 [&_img]:object-cover [&_img]:object-center [&_img]:w-full [&_img]:h-full mb-3 lg:mb-5">
                        <img src="./assets/images/special-img07.jpg" alt="Special Package Feature Image" width="101" height="101" loading="lazy">
                    </figure>
                    <div class="[&_strong]:block text-base lg:text-lg [&_strong]:font-medium [&_strong]:leading-[1.1] text-black mb-3">
                        <strong>Birthday/Anniversary Decorations</strong>
                        <strong>($29)</strong>
                    </div>
                    <p>Walk into your room to be surprised with decorations spread around. Remind your loved one you are thinking of them.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 lg:pt-8 text-center">
        <a href="#heroForm" class="js-has-smooth btn btn-outline">Book Now</a>
    </div>
</section>
<!-- /Section {Special Package} -->


<section class="bg-primary/[6%] py-5 sm:py-8 md:py-12 lg:py-14">
    <div class="container lg:flex flex-wrap items-center">
        <div class="lg:flex-1 text-center mb-4 lg:mb-0">
            <figure class="relative z-[1] [&_img]:w-full">
                <img src="./assets/images/img01.jpg" width="570" height="396" loading="lazy" alt="Testimonial Slider Feature image">
            </figure>
        </div>
        <div class="lg:w-[55%]">
            <div class="pl-5 lg:pl-[116px] py-8 lg:py-14 pr-6 lg:-ml-[10%] [&_h2_span]:text-primary [&_h2]:capitalize bg-ss-yellow-100">
                <h2 class="h3">Reviews from Our <span>Happy Guests</span></h2>
                <span class="w-[71px] h-1 bg-primary block"></span>
                <div class="swiper testimonialSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="pt-5 relative text-base">
                                <figure class="absolute top-0 left-0">
                                    <img src="./assets/images/icon-quote.png" width="59" height="52" loading="lazy" alt="Image Description">
                                </figure>
                                <p>Stayed here yesterday! Super nice place and was clean I didn’t happen to make it to breakfast but I had a great time in the evergreen sweet with a hot tub on the deck!! Was a super great night had lots of fun the only down fall was having to get the DVD player to work (I didn’t know how to use) but they had plenty of movies to choose from!! And was a great clean place full of fun I will hopefully be back soon the location was great my gf has lived in conifer her entire life so she’s always wanted to stay here and she loved it!</p>
                                <div class="pr-[90px] pt-5">
                                    <strong class="font-medium block text-base lg:text-lg">Danny R.</strong>
                                    <ul class="[&_i]:text-ss-yellow flex gap-2">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="pt-5 relative text-base">
                                <figure class="absolute top-0 left-0">
                                    <img src="./assets/images/icon-quote.png" width="59" height="52" loading="lazy" alt="Image Description">
                                </figure>
                                <p>Raging snowstorm forced me to stop driving & fortunately found Arrowhead. Great place with nice, comfortable room & full breakfast.</p>
                                <div class="pr-[90px] pt-5">
                                    <strong class="font-medium block text-base lg:text-lg">William Paradies</strong>
                                    <ul class="[&_i]:text-ss-yellow flex gap-2">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="pt-5 relative text-base">
                                <figure class="absolute top-0 left-0">
                                    <img src="./assets/images/icon-quote.png" width="59" height="52" loading="lazy" alt="Image Description">
                                </figure>
                                <p>Stayed here yesterday! Super nice place and was clean I didn’t happen to make it to breakfast but I had a great time in the evergreen sweet with a hot tub on the deck!! Was a super great night had lots of fun the only down fall was having to get the DVD player to work (I didn’t know how to use) but they had plenty of movies to choose from!! And was a great clean place full of fun I will hopefully be back soon the location was great my gf has lived in conifer her entire life so she’s always wanted to stay here and she loved it!</p>
                                <div class="pr-[90px] pt-5">
                                    <strong class="font-medium block text-base lg:text-lg">Jared Vachalek</strong>
                                    <ul class="[&_i]:text-ss-yellow flex gap-2">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="pt-5 relative text-base">
                                <figure class="absolute top-0 left-0">
                                    <img src="./assets/images/icon-quote.png" width="59" height="52" loading="lazy" alt="Image Description">
                                </figure>
                                <p>We stayed here to attend a concert at Red Rocks. Conveniently located, and the shuttle service made the concert going hassle free. Our room was lovely and the breakfast delicious. The views from the patio are stunning.</p>
                                <div class="pr-[90px] pt-5">
                                    <strong class="font-medium block text-base lg:text-lg">kathy starnick</strong>
                                    <ul class="[&_i]:text-ss-yellow flex gap-2">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="pt-5 relative text-base">
                                <figure class="absolute top-0 left-0">
                                    <img src="./assets/images/icon-quote.png" width="59" height="52" loading="lazy" alt="Image Description">
                                </figure>
                                <p>From the moment of my first inquiry, I was very impressed with how quickly I received a response. The accommodations were lovely! I utilized the shuttle to Red Rocks Amphitheater and was very pleased with the attentiveness of the driver…and his directions back to the car when I took a wrong turn on the way out! Breakfast was delicious!! I have several food sensitivities and every effort was made to ensure I could have a scrumptious breakfast.I traveled alone and felt very safe at Arrowhead, much more so than I would have at a hotel. I look forward to staying here again for my next trip to the area!</p>
                                <div class="pr-[90px] pt-5">
                                    <strong class="font-medium block text-base lg:text-lg">Suellen Gunn</strong>
                                    <ul class="[&_i]:text-ss-yellow flex gap-2">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="pt-5 relative text-base">
                                <figure class="absolute top-0 left-0">
                                    <img src="./assets/images/icon-quote.png" width="59" height="52" loading="lazy" alt="Image Description">
                                </figure>
                                <p>Stayed in Evergreen Suite. First experience at a true Bed and Breakfast. It is NOT a hotel. Completely different vibe with your privacy being first and foremost. Took shuttle to red rocks. Totally worth it. Breakfast on the deck was fantastic. Enjoyed a wake and bake right on deck with coffee. Met good people we hope to stay in contact with. We will 100% be back for a longer stay. Room was so amazing. Whole place is fantastic. Parking is fine. I drive a truck and had zero issues. I can only assume the bad reviews on here are "that guy". Staff was stellar. STAY HERE!!!</p>
                                <div class="pr-[90px] pt-5">
                                    <strong class="font-medium block text-base lg:text-lg">Colin Coker</strong>
                                    <ul class="[&_i]:text-ss-yellow flex gap-2">
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                        <li><i class="icon-star"></i></li>
                                    </ul>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="navigation flex gap-3 md:absolute right-11 bottom-1 [&_i]:text-primary [&_i]:text-2xl">
                        <div class="swiper-button-prev after:content-none static m-0">
                            <i class="icon-arrow-left"></i>
                        </div>
                        <div class="swiper-button-next after:content-none static m-0">
                            <i class="icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section - {Reviews} -->

<section class="py-10 md:py-16 lg:py-24">
	<div class="text-center mb-10">
		<h2 class="uppercase">Stunning Views at <span class="text-primary">Arrowhead Manor</span></h2>
	</div>
	<div class="swiper viewSlider">
		<div class="swiper-wrapper even:[&>.swiper-slide]:pt-5">
			<div class="swiper-slide">
				<figure class="w-full [&_img]:w-full">
					<img src="assets/images/view-slider-img-1.png" width="305" height="326" alt="View Slider Image" loading="lazy">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure class="w-full [&_img]:w-full">
					<img src="assets/images/view-slider-img-2.png" width="305" height="326" alt="View Slider Image" loading="lazy">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure class="w-full [&_img]:w-full">
					<img src="assets/images/view-slider-img-3.png" width="305" height="326" alt="View Slider Image" loading="lazy">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure class="w-full [&_img]:w-full">
					<img src="assets/images/view-slider-img-4.png" width="305" height="326" alt="View Slider Image" loading="lazy">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure class="w-full [&_img]:w-full">
					<img src="assets/images/view-slider-img-1.png" width="305" height="326" alt="View Slider Image" loading="lazy">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure class="w-full [&_img]:w-full">
					<img src="assets/images/view-slider-img-2.png" width="305" height="326" alt="View Slider Image" loading="lazy">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure class="w-full [&_img]:w-full">
					<img src="assets/images/view-slider-img-3.png" width="305" height="326" alt="View Slider Image" loading="lazy">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure class="w-full [&_img]:w-full">
					<img src="assets/images/view-slider-img-4.png" width="305" height="326" alt="View Slider Image" loading="lazy">
				</figure>
			</div>
		</div>
	</div>
	<div class="btn-wrap flex justify-center pt-12">
		<a href="#heroForm" class="js-has-smooth btn btn-outline">Book Now</a>
	</div>
</section>
<!-- /Section {Stunning Views At Arrowhead Manor} -->

<section class="bg-primary/[4%] py-10 lg:py-16" id="footer-form">
	<div class="container">
		<form method="POST" action="mailer/index.php" id="form-id-1" class="validate form heroForm">
			<div class="form-header md:max-w-[726px] mx-auto text-center [&_h2]:mb-4 mb-6">
				<h2>Book Your <span class="text-primary">Hotel</span></h2>
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>-->
			</div>
			<div class="form-section-0 flex flex-wrap -mx-2">
				<div class="form-group w-full px-2">
					<input class="form-control" placeholder="Enter your name" name="full-name" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group w-full md:w-1/2 px-2">
					<input class="form-control" placeholder="Enter your email" name="email" type="email" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group w-full md:w-1/2 px-2">
					<input class="form-control" placeholder="Enter Your phone" name="phone" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group w-full px-2 h-32">
					<textarea class="form-control" placeholder="Enter your message here" name="message" cols="50" rows="10"></textarea>
					<div class="messages"></div>
				</div>
				<div class="form-group m-0 w-full px-2">
                	<div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
                	<div class="messages"></div>
                </div>
                <div class="form-group m-0 w-full px-2">
                	<!-- You can enter a value here manually during local testing, That will bypass the validation -->
                	<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1">
                	<div class="messages"></div>
                </div>
                <!-- Hidden honepot fields for spam detection validation : Added by FED(GS) on 7th Feb 2025 -->
                <div class="form-group" style="display:none;">
                    <input type="text" name="honeypot" style="display:none;" value="">
                    <div class="messages"></div>
                </div>
                <!-- Hidden CSRF Token validation using Session : Added by FED(GS) on 7th Feb 2025 -->
                <div class="form-group" style="display:none;">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <div class="messages"></div>
                </div>
			</div>
			<div class="form-footer flex justify-center pt-9">
				<button type="submit" class="submitButton btn btn-outline">
					<svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
						<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
						<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
					</svg>
					Book Now
				</button>
			</div>
		</form>
	</div>
</section>
<!-- /Section {Book Your Hotel} -->

<?php
include 'footer.php';
