var ROF = {};

(function(){
	var $ = jQuery;

	ROF = {
		init: function(){
			ROF.mobileNav();
			ROF.smoothScroll();
			ROF.accountPopup();
			ROF.homepage();
			ROF.gallery();
			ROF.literature();
			ROF.single();
			ROF.projects();
			ROF.leaders();
			ROF.affiliations();
			ROF.product();
		},

		mobileNav: function(){
			var moreNav = '<div class="sidr-inner additional">';
			moreNav += '<a href="/contact-us/">Contact</a><br/>';
			moreNav += '<i class="fa fa-phone" style="color: #0067b5;"></i> 800-794-1801<br />';
			moreNav += '<i class="fa fa-envelope" style="color: #0067b5;"></i> <a href="mailto:info@romanfountains.com">info@romanfountains.com</a><br />';

			if( $('body').hasClass('logged-in') ){
				moreNav += '<i class="fa fa-user" style="color: #0067b5;margin-right: 5px;"></i> <a href="/my-account/">My Account</a> / <a href="/wp-login.php?action=logout">Logout</a>';
			}else{
				moreNav += '<i class="fa fa-user" style="color: #0067b5;margin-right: 5px;"></i> <a href="/my-account/">Login/Register</a>';
			}

			moreNav += '<br /><div class="social-links">';
			moreNav += $('.site-footer .social-links').clone().html();

			moreNav += "</div></div>";

			//Append addtional nav
			setTimeout(function(){ $('#sidr-main').append(moreNav); }, 1000);
		},

		smoothScroll: function(){
			if(!$('body.page-id-197').length) {
				return;
			}

			$('.capbuttons a').smoothScroll({
				preventDefault: true,
				direction: 'top',
				easing: 'swing',
				offset: -60
			});
		},

		accountPopup: function(){
			if( !$('html body').hasClass('logged-in') ){
				$('.account-pop').find('a').addClass('open-popup-link').attr('data-mfp-src','#account-required').attr('href','#');
				$('.open-popup-link').magnificPopup({
					type:'inline',
					midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
				});
			}
		},

		projects: function(){
			if ( $('html body').hasClass("page-id-103") ) {
				$('.vcex-teaser-content').matchHeight();

				return;
			}

			//Breadcrumb hack
			if( $('body').hasClass('single-portfolio') || $('body').hasClass('tax-portfolio_category') ){
				var linkHTML = '<span class="trail-portfolio-url"><a href="/our-projects/" title="Our Projects"><span>Our Projects</span></a></span><span class="sep"><span class="fa fa-angle-right"></span></span>';
				$('.site-breadcrumbs .breadcrumb-trail span:nth-child(2)').append(linkHTML);
			}
		},

		homepage: function(){
			if( $('html body').hasClass('home') ){
				$('.features h3').matchHeight();
				$('.features .vcex-icon-box-two-content p:first-child').matchHeight();
			}
		},

		gallery: function(){
			if ( !$('html body').hasClass("page-id-121") ) {
				return;
			}
			$('.portfolio-entry-details').matchHeight(false);
		},

		literature: function(){
			if ( !$('html body').hasClass("page-id-665") ) {
				return;
			}
			$('.othercontent h4').matchHeight();
		},

		single: function(){
			if ( $('html body').hasClass("single-portfolio") ) {
				$('.portfolio-entry-details').matchHeight(false);
			}
			if ($('html body').hasClass("single-staff") ) {
				$('.staff-entry-details').matchHeight();
			}

		},

		leaders: function(){
			//Breadcrumb hack
			if( $('body').hasClass('single-staff') ){
				var linkHTML = '<span class="trail-portfolio-url"><a href="/about/" title="About"><span>About</span></a></span><span class="sep"><span class="fa fa-angle-right"></span></span>';
				$('.site-breadcrumbs .breadcrumb-trail span:nth-child(2)').append(linkHTML);
			}
		},

		affiliations: function(){
			if( $('body').hasClass('page-id-846') ){
				$('.vcex-teaser a').attr('target','_blank');
			}
		},

		product: function(){
			$('.products li .product-entry-media a').matchHeight();
			$('.products li').matchHeight();
		}

	};
})();

jQuery(document).ready(function(){
	ROF.init();
});