var ROF = ROF || {};

(function(){
	var $ = jQuery,
	$materialEstimateInput = $('.js-material-estimate-total'),
	$estimateInput = $('.js-estimate-total');

	//Field Definitions
	var $nozzleCount = $('.js-nozzle-count'),
	$sprayHeight = $('.js-spray-height'),
	$lightingWrapper = $('.js-is-lit'),
	$equiptmentStorageWrapper = $('.js-equiptment-storage'),
	$hasZonesWrapper = $('.js-has-zones'),
	$programmableLightsWrapper = $('.js-is-programmable'),
	$programmableMusicWrapper = $('.js-needs-music'),
	$isInteractiveWrapper = $('.js-is-interactive');

	//Traditional Pricing Chart
	var nozzlePriceRange = {
		price1: 131.07,
		price2: 165.7,
		price3: 280.5,
		price4: 357.44,
		price5: 564,
		price6: 864
	};

	//Helper method to format price
	function formatPrice( price ){
		return  '$' + price.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	//Run calculations
	ROF.setupEstimator = function(){

		//Setup ClueTips
		$('.tip').cluetip({splitTitle: '|',showTitle:false});

		$('form.wpcf7-form').change(function( event ) {
			event.preventDefault();

			ROF.estimateCalculator();
		});

		//Set default
		ROF.estimateCalculator();

		//Setup Range slider
		$('input[type="range"]').rangeslider({
			polyfill: false,
			onSlide: function(position, value) {
				$('.js-nozzle-range').text( value );
			},
		});

		//Set Default selected state
		function setRadio( $radioSpan ){
			$radioSpan.find('input').prop('checked', true).trigger("change");
			$radioSpan.siblings().removeClass('active');
			$radioSpan.addClass('active');
		}

		//Listen for Radio clicks
		$('.wpcf7-radio .wpcf7-list-item').on('click', function(){
			setRadio( $(this) );
		});

		$('.wpcf7-radio .wpcf7-list-item input:checked').each(function(){
			setRadio( $(this).parent() );
		});
	};

	ROF.estimateCalculator = function(){
		//console.log('Estimate!');

		//NOTE: This is checking the form ID. If this chagnes it  won't work
		if( $('input[name="_wpcf7"]').val() !== "99" ){
			ROF.traditionalCalculations();
		}else{
			ROF.dryDeckCalculations();
		}

	};

	ROF.traditionalCalculations = function(){
		var total = 0,
		baseNozzlePrice = 0;

		//Get Base Nozzle price
		switch( parseInt($sprayHeight.val(), 10) ){
		case 1:
		case 2:
			baseNozzlePrice = nozzlePriceRange.price1;
			break;
		case 3:
			baseNozzlePrice = nozzlePriceRange.price2;
			break;
		case 4:
		case 5:
			baseNozzlePrice = nozzlePriceRange.price3;
			break;
		case 6:
		case 7:
		case 8:
			baseNozzlePrice = nozzlePriceRange.price4;
			break;
		case 9:
		case 10:
		case 11:
		case 12:
			baseNozzlePrice = nozzlePriceRange.price5;
			break;
		default: //13-15
			baseNozzlePrice = nozzlePriceRange.price6;
			break;
		}

		//Cost of Nozzles (including couplings, etc.)
		//Math Note: Nozzle count * price
		var nozzleCount = parseInt( $nozzleCount.val(), 10 );
		var nozzleCost = ( nozzleCount * baseNozzlePrice ).toFixed(2);
		//console.log('Nozzle Cost: ' + nozzleCost );

		total = nozzleCost;

		//Lighting
		//Math Note: If Yes, check nozzle count for math
		var lightingCost = 0;
		if( $lightingWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			if( nozzleCount === 1 ){
				lightingCost = 1500;
			}else if( nozzleCount < 9 && nozzleCount > 1 ){
				lightingCost = ( nozzleCost * 3 ).toFixed(2);
			}else if( nozzleCount > 8 ){
				lightingCost = ( nozzleCost * 1.5 ).toFixed(2);
			}
		}
		console.log( 'Lighting Cost: ' + lightingCost );
		//

		//Station/Skid Pump and Assembly (excluding vault components)
		var stationSkidPumpCost = 0;
		if( nozzleCount === 1 ){
			stationSkidPumpCost = 5000;
		}else if( nozzleCount > 1 && nozzleCount < 9 ){
			stationSkidPumpCost = (nozzleCost * 6).toFixed(2);
		}else if( nozzleCount > 8 ){
			stationSkidPumpCost = (nozzleCost * 2.5).toFixed(2);
		}
		console.log( 'Station/Skid Pump & Assembly Cost: ' + stationSkidPumpCost );
		//

		//Vault components (required with or without vault)
		var vaultComponentCost = 0;
		if( nozzleCount === 1 ){
			vaultComponentCost = 7500;
		}else if( nozzleCount > 1 && nozzleCount < 9 ){
			vaultComponentCost = (nozzleCost * 10).toFixed(2);
		}else if( nozzleCount > 8 ){
			vaultComponentCost = (nozzleCost * 4.5).toFixed(2);
		}
		console.log( 'Vault Component Cost: ' + vaultComponentCost );
		//

		//Vault (size dependent on number of nozzles)(optional)
		var vaultCost = 0;
		if( $equiptmentStorageWrapper.find("input[type='radio']:checked").val() === "Underground Vault" ){
			if( nozzleCount < 28 && nozzleCount > 20 ){
				vaultCost = 26551;
			}else if( nozzleCount < 21 && nozzleCount > 12 ){
				vaultCost = 16200;
			}else if( nozzleCount < 13 && nozzleCount > 5 ){
				vaultCost = 7663;
			}else if( nozzleCount < 6 &&  nozzleCount > 0 ){
				vaultCost = 4600;
			}
		}
		console.log( 'Vault Cost: ' + vaultCost );
		//

		//Electrical Component (required for interactive)(optional)
		var electricalComponentCost = 0;
		if( $hasZonesWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			electricalComponentCost = (nozzleCost * 3).toFixed(2);
		}
		console.log( 'Electrical Component Cost: ' + electricalComponentCost );
		//

		//Programable Logic & DMX (optional)(Full lights and nozzles)
		var programmableLightsNozzlesCost = 0;
		if( $programmableLightsWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			if( nozzleCount === 1 ){
				programmableLightsNozzlesCost = 2500;
			}else if( nozzleCount < 9 && nozzleCount > 1 ){
				programmableLightsNozzlesCost = (nozzleCost * 5).toFixed(2);
			}else if( nozzleCount > 8 ){
				programmableLightsNozzlesCost = (nozzleCost * 2).toFixed(2);
			}
		}
		console.log( 'Programmable Lights/Nozzle Cost: ' + programmableLightsNozzlesCost );
		//

		//Programable Logic & DMX (optional)(Music)
		var programmableMusicCost = 0;
		if( $programmableMusicWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			programmableMusicCost = (nozzleCost * 5).toFixed(2);
		}
		console.log( 'Programmable Music Cost: ' + programmableMusicCost );
		//

		//In Pool Components
		var poolComponentsCost = 0;
		if( nozzleCount === 1 ){
			poolComponentsCost = 2000;
		}else if( nozzleCount > 1 && nozzleCount < 21 ){
			poolComponentsCost = (nozzleCost * 4.4).toFixed(2);
		}else if( nozzleCount > 20 ){
			poolComponentsCost = (nozzleCost * 2.2).toFixed(2);
		}
		console.log( 'Pool Component Cost: ' + poolComponentsCost );
		//

		//Filteration
		var filtrationCost = 0;
		if( nozzleCount === 1 ){
			filtrationCost = 2000;
		}else if( nozzleCount > 1 && nozzleCount < 21 ){
			filtrationCost = (nozzleCost * 1.37).toFixed(2);
		}else if( nozzleCount > 20 ){
			filtrationCost = (nozzleCost * 0.5).toFixed(2);
		}
		console.log( 'Filtration Cost: ' + filtrationCost );
		//

		//Spray Effects Extras
		var sprayEffectsCost = (nozzleCost * 0.83).toFixed(2);
		console.log( 'Spray Effects Cost: ' + sprayEffectsCost );

		//Filteration optional
		var optionalFiltrationCost = 0;
		if( $isInteractiveWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			if( nozzleCount === 1 ){
				optionalFiltrationCost = 2500;
			}else if( nozzleCount < 9 && nozzleCount > 1 ){
				optionalFiltrationCost = (nozzleCost * 17).toFixed(2);
			}else if(  nozzleCount > 8 ){
				optionalFiltrationCost = (nozzleCost * 5).toFixed(2);
			}
		}
		console.log( 'Optional Filter Cost: ' + optionalFiltrationCost );
		//

		total = Number(total) +
		Number(lightingCost) +
		Number(stationSkidPumpCost) +
		Number(vaultComponentCost) +
		Number(vaultCost) +
		Number(electricalComponentCost) +
		Number(programmableLightsNozzlesCost) +
		Number(programmableMusicCost) +
		Number(poolComponentsCost) +
		Number(filtrationCost) +
		Number(sprayEffectsCost) +
		Number(optionalFiltrationCost);

		//Shipping
		//Note: 5% of total cost
		var shippingCost = (total * 0.05).toFixed(2);
		console.log('Shipping Cost: ' + shippingCost);

		//total = (Number(total) + Number(shippingCost)).toFixed(2);
		console.log( 'Total: ' + total );

		//Distributor Pricing (40%)
		var distributorPricing = total*0.6;

		var lowRange = (distributorPricing*0.9).toFixed(2);
		var highRange = (distributorPricing*1.1).toFixed(2);
		var materialRange = formatPrice(lowRange) + ' - ' + formatPrice(highRange);

		console.log('Material Estimate: ' + materialRange );

		//Estimated Cost with Labor & Material
		var estimateRange = formatPrice((lowRange*3).toFixed(2)) + ' - ' + formatPrice((highRange*3).toFixed(2));
		console.log( 'Material/Labor Range: ' + estimateRange );

		//Output Total Estimated Cost
		$materialEstimateInput.val( materialRange + "*" );
		$estimateInput.val( estimateRange );
	};

	ROF.dryDeckCalculations = function(){
		var total = 0;

		console.log( '---');

		//Cost of Nozzles (including couplings, etc.)
		//Math Note: Nozzle count * price
		var nozzleCount = parseInt( $nozzleCount.val(), 10 );
		var nozzleCost = ( nozzleCount * 3100 ).toFixed(2);
		console.log('Nozzle Cost: ' + nozzleCost );

		total = nozzleCost;

		//Filteration
		var filtrationCost = 0;
		if( $isInteractiveWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			filtrationCost = ( nozzleCost * 0.224).toFixed(2);
		}
		console.log( 'Filtration Cost: ' + filtrationCost );
		//

		//Station/Skid Pump and Assembly (excluding vault components)
		var stationSkidPumpCost = 0;
		if( nozzleCount < 12 ){
			stationSkidPumpCost = 17500;
		}else{
			stationSkidPumpCost = (nozzleCount * 0.406).toFixed(2);
		}
		console.log( 'Station/Skid Pump & Assembly Cost: ' + stationSkidPumpCost );
		//

		//Vault components (required with or without vault)
		var vaultComponentCost = 0;
		if( nozzleCount < 12 ){
			vaultComponentCost = 17500;
		}else{
			vaultComponentCost = (nozzleCount * 0.578).toFixed(2);
		}
		console.log( 'Vault Component Cost: ' + vaultComponentCost );
		//

		//Vault (size dependent on number of nozzles)(optional)
		//***********

		var vaultCost = 0;
		if( $equiptmentStorageWrapper.find("input[type='radio']:checked").val() === "Underground Vault" ){

			if( nozzleCount > 28){
				vaultCost = 75756;
			}else if( nozzleCount < 28 && nozzleCount > 20 ){
				vaultCost = 26551;
			}else if( nozzleCount < 21 && nozzleCount > 12 ){
				vaultCost = 16200;
			}else if( nozzleCount < 13 && nozzleCount > 5 ){
				vaultCost = 7663;
			}
		}
		console.log( 'Vault Cost: ' + vaultCost );
		//

		//Electrical Component (required for interactive)(optional)
		var electricalComponentCost = 0;
		if( $hasZonesWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			electricalComponentCost = (nozzleCost * 0.213).toFixed(2);
		}
		console.log( 'Electrical Component Cost: ' + electricalComponentCost );
		//

		//Programable Logic & DMX (optional)(Full lights and nozzles)
		var programmableLightsNozzlesCost = 0;
		if( $programmableLightsWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			programmableLightsNozzlesCost = (nozzleCost * 0.15).toFixed(2);
		}
		console.log( 'Programmable Lights/Nozzle Cost: ' + programmableLightsNozzlesCost );
		//

		//Programable Logic & DMX (optional)(Music)
		var programmableMusicCost = 0;
		if( $programmableMusicWrapper.find("input[type='radio']:checked").val() === "Yes" ){
			programmableMusicCost = (nozzleCost * 0.15).toFixed(2);
		}
		console.log( 'Programmable Music Cost: ' + programmableMusicCost );
		//

		//Lighting
		//Math Note: If Yes, check nozzle count for math
		var lightingCost = 0;
		if( $lightingWrapper.find("input[type='radio']:checked").val() === "No" ){
			lightingCost = -( ( nozzleCount * 450).toFixed(2) );
		}
		console.log( 'Lighting Cost: ' + lightingCost );
		//

		total = Number(total) +
		Number(filtrationCost) +
		Number(stationSkidPumpCost) +
		Number(vaultComponentCost) +
		Number(vaultCost) +
		Number(electricalComponentCost) +
		Number(programmableLightsNozzlesCost) +
		Number(programmableMusicCost);

		//Shipping
		//Note: 5% of total cost
		var shippingCost = (total * 0.05).toFixed(2);
		console.log('Shipping Cost: ' + shippingCost);

		total = total + Number(shippingCost) + Number(lightingCost);
		console.log( 'Total: ' + total );

		//Distributor Pricing (40%)
		var distributorPricing = total*0.6;

		var lowRange = (distributorPricing*0.9).toFixed(2);
		var highRange = (distributorPricing*1.1).toFixed(2);
		var materialRange = formatPrice(lowRange) + ' - ' + formatPrice(highRange);

		console.log('Material Estimate: ' + materialRange );

		//Estimated Cost with Labor & Material
		var estimateRange = formatPrice((lowRange*3).toFixed(2)) + ' - ' + formatPrice((highRange*3).toFixed(2));
		console.log( 'Material/Labor Range: ' + estimateRange );

		console.log('---');
		console.log('---');

		//Output Total Estimated Cost
		$materialEstimateInput.val( materialRange );
		$estimateInput.val( estimateRange );
	};

	ROF.displayEstimate = function(){
		$('.js-equiptment-total').text( $materialEstimateInput.val() + "*" );
		$('.js-total-project').text( $estimateInput.val() );

		$('.js-estimate-box').fadeIn();

		//Update estimate numbers as they clear on submit
		setTimeout( function(){
			ROF.estimateCalculator();
		},1000);

		//Add reset button
		var resetBtn = '<p class="tac"><a href="#" class="reset-btn js-reset">Reset</a></p>';
		$('form.wpcf7-form ol').append( resetBtn );
		$('form.wpcf7-form .wpcf7-submit').parent().hide();

		//Disable form and add reset button
		$('form.wpcf7-form :input').attr('readonly', true);
		$('form.wpcf7-form .wpcf7-form-control-wrap').css({opacity:'.5','pointer-events':'none'});
		$('.wpcf7-radio .wpcf7-list-item').off();

		//Rig up reset button
		$('form.wpcf7-form .js-reset').on('click', function(e){
			e.preventDefault();
			location.reload();
		});

	};

})();

//On Ready
jQuery(document).ready(function(){
	ROF.setupEstimator();
});