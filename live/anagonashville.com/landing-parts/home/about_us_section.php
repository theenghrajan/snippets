<!-- Start About us section -->
<section class="py-6 md:py-9 lg:py-[50px]">
    <div class="container">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:gap-12">
            <figure class="w-full lg:w-1/2 ">
                <img
                    src="./assets/images/about-us.png"
                    alt="About us"
                    width="630"
                    height="450"
                    loading="lazy"
                    class="w-full">
            </figure>
            <div class="flex flex-col w-full gap-1 lg:w-1/2">
                <?php
                // Block title component
                block_title(array(
                    'additional-class' => 'mb-3 [&_h2]:mb-0',
                    'maxwidth' => 1132,
                    'block-align' => 'left',
                    'content-align' => 'left',
                    'title' => 'About Us',
                ));
                ?>
                <div class="flex flex-col text-base text-ss-dark-300 lg:[&_p]:mb-8 lg:last-of-type:[&_p]:mb-0">
                    <p>Anago of Nashville is your choice for janitorial services for a reason. For more than 20 years, we've been partnering with companies in Nashville and 27 counties in the surrounding area. We have a passion for providing the very best in cleaning techniques, technology, customer service relationships and everything else involving the art of sparkle.</p>
                    <p>Our commercial cleaners develop a custom cleaning plan with your specific needs in mind. Our work reflects your desire to impress clients, increase staff productivity or simply to declutter your life. We are highly motivated to deliver exactly what are you looking for, and then some.</p>
                </div>
                <div class="mt-8">
                    <a href="#heroForm" class="btn btn-primary js-has-smooth">Get Your Free Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About us section -->