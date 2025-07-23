import $ from 'jquery';
export default function productOptionGraphql (context) { 
    const selectorAttrName = "attr-cards-ids";
    const {graphql_token, currency_selector} = context;
    const active_currency_id = currency_selector.active_currency_id;
    const active_currency_code = currency_selector.active_currency_code;

    const setProductOptionPlp = () => {
        const productIds = [];
        const cardSelector = $("body ["+selectorAttrName+"]");
        if(cardSelector.length > 0){ cardSelector.each(function(){ const attr_card_id = $(this).attr(selectorAttrName); productIds.push(attr_card_id); }); }
        if(productIds.length > 0){ getOptionsWithGraphql(productIds); }
    }

    const getOptionsWithGraphql = (productIds) => {
        if(graphql_token != "" && graphql_token != "undefined") { 
            fetch("/graphql?setCurrencyId="+active_currency_id, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Authorization': 'Bearer '+graphql_token },
                body: JSON.stringify({query: `
                    query ExtendedProductsById {
                        site {
                        products(entityIds: [${productIds}], first: 50) {
                            edges {
                            node {
                                entityId
                                name      
                                path
                                productOptions(first: 50) {
                                edges {
                                    node {
                                    entityId
                                    displayName
                                    isRequired
                                    isVariantOption
                                    ... on CheckboxOption {
                                        checkedByDefault
                                    }
                                    ... on MultipleChoiceOption {
                                    displayStyle
                                        values(first: 50) {
                                        edges {
                                            node {
                                            entityId
                                            label
                                            isDefault
                                            ... on SwatchOptionValue {
                                                hexColors
                                                imageUrl(width: 200)
                                            }
                                            }
                                        }
                                        }
                                    }
                                    }
                                }
                                }
                            }
                            }
                        }
                        }
                    }
                `}),
            }).then(res => res.json())
            .then((res) => {
                if(res.data != null){
                    const productsGq = res.data.site.products.edges;
                    productsGq.length > 0 && productsGq.map((list) => {
                        const obj = list.node;
                        const entityId = obj.entityId;
                        const path = obj.path;
                        const productOptions = obj.productOptions.edges;
                        const otherOption = [];
                        productOptions.length > 0 && productOptions.map((poList) => {
                            const po_obj = poList.node;
                            const po_entityId = po_obj.entityId
                            const po_isRequired = po_obj.isRequired
                            const po_displayStyle = po_obj.displayStyle
                            
                            if(po_displayStyle === "Swatch"){
                                const po_values = po_obj.values.edges;
                                let optionHtml = `<div class="custom-swatch-form-field">`;
                                let otherOptCount = 0
                                po_values.length > 0 && po_values.map((po_list, opi)=>{
                                    const vl_obj = po_list.node;
                                    const vl_entityId = vl_obj.entityId;
                                    const vl_label = vl_obj.label;
                                    const vl_hexColors = vl_obj.hexColors;
                                    const imageUrl = vl_obj.imageUrl;
                                    if(opi < 3){
                                        if(vl_hexColors?.length > 0){
                                            optionHtml += `<div class="option-swatch color-${vl_hexColors.length}">`;
                                            vl_hexColors.map((hex, i)=>{
                                                optionHtml += `<label class="label-swatch" data-pid="${entityId}" name="${po_entityId}" value="${vl_entityId}" style="background-color: ${hex}" title="${vl_label}">${vl_label}</label>`;
                                            })
                                            optionHtml += `</div>`;
                                        }else{
                                            optionHtml += `<div class="option-swatch color-pattern">`;
                                            optionHtml += `<label class="label-swatch" data-pid="${entityId}" name="${po_entityId}" value="${vl_entityId}" title="${vl_label}" style="background-image: url('${imageUrl}');background-size: cover;background-repeat: no-repeat;">${vl_label}</label>`;
                                            optionHtml += `</div>`;
                                        }
                                    }else{
                                        otherOptCount++;
                                    }                                    
                                });
                                optionHtml += ` <input style="display: none;" type="text" value="" id="opt_obj_${entityId}"  /> </div>`;

                                let otherOptHtml = "";
                                if(otherOptCount > 0){
                                    otherOptHtml = `<a href="${path}" class="showmore">+${otherOptCount}</a>`;
                                }

                                $('['+selectorAttrName+'="'+entityId+'"] .card-product-swatch').html('');
                                $('['+selectorAttrName+'="'+entityId+'"] .card-product-swatch').append(optionHtml);
                                $('['+selectorAttrName+'="'+entityId+'"] .card-product-swatch .custom-swatch-form-field').append(otherOptHtml);
                                optionHtml = "";
                                otherOptHtml = "";
                            }else{
                                if(po_isRequired == true){
                                    const otherOptionFirstValue = po_obj.values?.edges[0]?.node?.entityId;
                                    otherOption.push([po_entityId,otherOptionFirstValue]);
                                }
                            }
                            
                        })
                        $('['+selectorAttrName+'="'+entityId+'"] #opt_obj_'+entityId).attr('value',JSON.stringify(otherOption));
                    })
                }
            });     
        }
    }

    const option_image_update_onclick = () => {
        $("body").on('click', '.card-product-swatch .option-swatch label',function(){
            $(this).parent().parent().find('.option-swatch').removeClass('active');
            $(this).parent().addClass('active');
            const productId = $(this).attr('data-pid');
            const name = $(this).attr('name');
            const values = $(this).attr('value');
            const opt_obj_val = $("#opt_obj_"+productId).val();

            let query_parameters = ` product ( entityId: ${parseInt(productId)} optionValueIds: [{"optionEntityId": ${name},"valueEntityId": ${values}}] ) `
            if(opt_obj_val != ""){
                const otherOption = JSON.parse($("#opt_obj_"+productId).val());
                let optionEntity = `{ optionEntityId: ${parseInt(name)},valueEntityId: ${parseInt(values)} },`;
                otherOption.map((ids) => {
                    optionEntity += `{optionEntityId: ${parseInt(ids[0])},valueEntityId: ${parseInt(ids[1])}},`
                })
                query_parameters = ` product ( entityId: ${parseInt(productId)} optionValueIds:  [${optionEntity.slice(0, -1)}] )`
            }
            
            //if only Swatch in product to set add to cart links
            
                if(opt_obj_val == "[]"){
                    const endpointurl = "/cart.php?action=add&product_id="+productId+"&attribute%5B"+name+"%5D="+values+"&qty=1";
                    if ($(window).width() >= 800) { 
                        $('['+selectorAttrName+'="'+productId+'"] a.card-figcaption-button:not(.quickview)').html("add to cart");
                    }
                    $('['+selectorAttrName+'="'+productId+'"] a.card-figcaption-button:not(.quickview)').attr("href", endpointurl);
                }


            fetch("/graphql?setCurrencyId="+active_currency_id, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Authorization': 'Bearer '+graphql_token },
                body: JSON.stringify({query: `
                    query ProductsWithOptionSelections { site { currency(currencyCode: ${active_currency_code}){
                        display{ symbol }
                    } productWithSelectedOptions: ${query_parameters} { 
                        ...ProductFields 
                    } 
                    } }
                    fragment ProductFields on Product {
                        name
                        sku
                        prices{ basePrice { currencyCode value } salePrice{ currencyCode value } }
                        defaultImage{ urlOriginal }
                    }
                `}),
            }).then(res => res.json())
            .then((res) => {
                const objs = res.data.site;
                if(objs != null){
                    const symbol = objs.currency.display.symbol;
                    const selectedOptions = objs.productWithSelectedOptions;

                    const basePrice = selectedOptions.prices.basePrice.value;
                    const salePrice = selectedOptions.prices.salePrice?.value;
                    const urlOriginal = selectedOptions.defaultImage.urlOriginal;

                    let priceHtml = "";
                    if(typeof salePrice != "undefined" && salePrice != null){
                        priceHtml += `<div class="price-section d-inline-block price-section--withTax"><span data-product-price-with-tax="" class="price price--withTax">${symbol}${salePrice.toFixed(2)}</span></div>`;
                        priceHtml += `<div class="price-section d-inline-block price-section--withTax rrp-price--withTax"><span data-product-rrp-with-tax="" class="price price--rrp">${symbol}${basePrice.toFixed(2)}</span></div>`;
                    }else{
                        priceHtml += `<div class="price-section d-inline-block price-section--withTax"><span data-product-price-with-tax="" class="price price--withTax">${symbol}${basePrice.toFixed(2)}</span></div>`;
                    }
                    $('['+selectorAttrName+'="'+productId+'"] .card-img-container .card-image').attr('src',urlOriginal).attr('srcset',urlOriginal);
                    $('['+selectorAttrName+'="'+productId+'"] .card-text[data-test-info-type="price"]').html(priceHtml);
                }
            }); 
        })
    }


    //ON Load
    setProductOptionPlp();
    option_image_update_onclick();
}
