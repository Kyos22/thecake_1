@extends('layouts.appdetailproduct')
@section('main')
<link href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/component-loading-overlay.css?v=16694493214799988661668502207" rel="stylesheet" type="text/css" media="all" />
<script src="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/product-form.js?v=154520108827843999331668502208" defer="defer"></script>
<div class="container">
    <div class="row no-gutters">
        <div class="grid__item col-md-6 col-12 pdp-left-col">
            <media-gallery id="MediaGallery-template--16620971000044__main" class="slider-wrapper">
                <div id="GalleryStatus-template--16620971000044__main" class="visually-hidden" role="status"></div>
                <div id="Slider-Gallery-template--16620971000044__main" class="product-main-slider lightbox ">
                    @foreach($listimg as $img)
                    <div id="Slide-template--16620971000044__main-30919033389292" class="product-main-item grid__item" data-media-id="template--16620971000044__main-30919033389292">


                        <noscript>
                            <div class="product__media media gradient global-media-settings">
                                <img src="{{asset('images/' .$img-> name_photo)}}" loading="lazy" alt="">
                            </div>
                        </noscript>
                        <div class="product-item-img product__media media media--transparent gradient global-media-settings"><img src="{{asset('images/' .$img-> name_photo)}}" loading="lazy" alt="">
                            <a href="{{asset('images/' .$img -> name_photo)}}" data-caption="" class="open-lightbox">
                                <div class="img-prew-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 25 25" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 9.375C0 14.5527 4.19733 18.75 9.375 18.75C11.5395 18.75 13.5328 18.0164 15.1196 16.7843C15.1794 16.9108 15.2615 17.0293 15.3661 17.1339L22.8661 24.6339C23.3543 25.122 24.1457 25.122 24.6339 24.6339C25.122 24.1457 25.122 23.3543 24.6339 22.8661L17.1339 15.3661C17.0293 15.2615 16.9108 15.1794 16.7844 15.1196C18.0164 13.5328 18.75 11.5395 18.75 9.375C18.75 4.19733 14.5527 0 9.375 0C4.19733 0 0 4.19733 0 9.375ZM2.5 9.375C2.5 5.57804 5.57804 2.5 9.375 2.5C13.172 2.5 16.25 5.57804 16.25 9.375C16.25 13.172 13.172 16.25 9.375 16.25C5.57804 16.25 2.5 13.172 2.5 9.375Z" fill="white"></path>
                                    </svg>
                                </div>
                            </a>

                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="Slider-Thumbnails-template--16620971000044__main" class="product-thumb-slider ">
                   
                    @foreach($listimg as $img)
                    <div id="Slide-Thumbnails-template--16620971000044__main-0" class="product-thumb-item  thumbnail-list_item--variant" data-target="template--16620971000044__main-30919033520364" data-media-position="1">
                        <div class="thumb-img">
                            <img id="Thumbnail-template--16620971000044__main-0" src="{{asset('images/' .$img-> name_photo)}}" loading="lazy">
                        </div>
                    </div>
                    @endforeach
                </div>
            </media-gallery>
        </div>
        <div class="grid__item col-md-6 col-12 pdp-right-col">
            <div id="ProductInfo-template--16620971000044__main" class="pdp-right-inner"><a class="back-btn" href="javascript&colon;history.go(-1)">
                    <span class="svg-ic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="5" viewBox="0 0 11 5" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5791 2.28954C10.5791 2.53299 10.3818 2.73035 10.1383 2.73035L1.52698 2.73048L2.5628 3.73673C2.73742 3.90636 2.74146 4.18544 2.57183 4.36005C2.40219 4.53467 2.12312 4.53871 1.9485 4.36908L0.133482 2.60587C0.0480403 2.52287 -0.000171489 2.40882 -0.000171488 2.2897C-0.000171486 2.17058 0.0480403 2.05653 0.133482 1.97353L1.9485 0.210321C2.12312 0.0406877 2.40219 0.044729 2.57183 0.219347C2.74146 0.393966 2.73742 0.673036 2.5628 0.842669L1.52702 1.84888L10.1383 1.84875C10.3817 1.84874 10.5791 2.04609 10.5791 2.28954Z" fill="white"></path>
                        </svg>
                    </span>Back to category
                </a>
                <a class="wishbtn wish" href="/account/login" title="translation missing: en.customlabel.wballtext.wishlist"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        <use xlink:href="#wish"></use>
                    </svg></a>

                <p class="product__text">{{$name}}</p>
                <div class=" section-title">
                    <h3 class="product__title">{{$products -> name_product}}</h3>
                </div>
                <p>{{$products ->detail_product}}</p>
                <div class="no-js-hidden price" id="price-template--16620971000044__main" role="status">
                    <ins class="price-item--regular">{{$products -> price}} <span class=wbcur>VND</span></ins>
                    <del class="price-item--sale">

                        {{$products -> fakeprice}} <span class=wbcur>VND</span>

                    </del>

                </div>
                <div class="prorow-lbl-qntty">
                    <label class="product-labl" for="Quantity-template--16620971000044__main">Quantity</label>
                    <quantity-input class="quantity qty-spinner">
                        <button class="quantity__button no-js-hidden quantity-decrement " name="minus" type="button">
                            <svg width="12" height="2" viewBox="0 0 12 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0.251343V1.74871H12V0.251343H0Z" fill="#61AFB3"></path>
                            </svg>
                        </button>
                        <input class="quantity__input" type="number" name="quantity" id="Quantity-template--16620971000044__main" min="1" value="1" form="product-form-template--16620971000044__main">
                        <button class="quantity__button no-js-hidden quantity-increment" name="plus" type="button">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.74868 5.25132V0H5.25132V5.25132H0V6.74868H5.25132V12H6.74868V6.74868H12V5.25132H6.74868Z" fill="#61AFB3"></path>
                            </svg>
                        </button>
                    </quantity-input>
                </div><variant-selects class="no-js-hidden" data-section="template--16620971000044__main" data-url="/products/salted-caramel-dark-chocolate">
                    <div class="product-form__input product-form__input--dropdown">
                        <label class="form__label" for="Option-template--16620971000044__main-0">
                            Options
                        </label>
                        <div class="select">
                            <select id="Option-template--16620971000044__main-0" class="select__select nice-select" name="options[Flavour]" form="product-form-template--16620971000044__main">
                                <option value="Red velvet" selected="selected">
                                    normal eggs
                                </option>
                                <option value="Venila">
                                    many eggs
                                </option>
                                <option value="Coffee">
                                    fews eggs
                                </option>
                            </select>
                        </div>
                    </div>
                    <script type="application/json">
                        [{
                            "id": 43537942184172,
                            "title": "Red velvet",
                            "option1": "Red velvet",
                            "option2": null,
                            "option3": null,
                            "sku": "",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": {
                                "id": 38241362641132,
                                "product_id": 7838553047276,
                                "position": 5,
                                "created_at": "2022-12-02T12:07:33+05:30",
                                "updated_at": "2022-12-02T12:07:34+05:30",
                                "alt": null,
                                "width": 500,
                                "height": 500,
                                "src": "\/\/chocolate-workdo.myshopify.com\/cdn\/shop\/products\/TRFR-Chocolatier-Australia-Dark-Chocolate-Fruits-Of-Passion-Liqueur-Truffle-700-removebg-preview.png?v=1669963054",
                                "variant_ids": [43537942184172]
                            },
                            "available": true,
                            "name": "Salted Caramel Dark Chocolate - Red velvet",
                            "public_title": "Red velvet",
                            "options": ["Red velvet"],
                            "price": 5200,
                            "weight": 0,
                            "compare_at_price": 6000,
                            "inventory_management": "shopify",
                            "barcode": "",
                            "featured_media": {
                                "alt": null,
                                "id": 30919033520364,
                                "position": 5,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "\/\/chocolate-workdo.myshopify.com\/cdn\/shop\/products\/TRFR-Chocolatier-Australia-Dark-Chocolate-Fruits-Of-Passion-Liqueur-Truffle-700-removebg-preview.png?v=1669963054"
                                }
                            },
                            "quantity_rule": {
                                "min": 1,
                                "max": null,
                                "increment": 1
                            }
                        }, {
                            "id": 43537942216940,
                            "title": "Venila",
                            "option1": "Venila",
                            "option2": null,
                            "option3": null,
                            "sku": "",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": {
                                "id": 38241363165420,
                                "product_id": 7838553047276,
                                "position": 3,
                                "created_at": "2022-12-02T12:07:33+05:30",
                                "updated_at": "2022-12-02T12:07:35+05:30",
                                "alt": null,
                                "width": 500,
                                "height": 500,
                                "src": "\/\/chocolate-workdo.myshopify.com\/cdn\/shop\/products\/pure_white_truffle-removebg-preview.png?v=1669963055",
                                "variant_ids": [43537942216940]
                            },
                            "available": true,
                            "name": "Salted Caramel Dark Chocolate - Venila",
                            "public_title": "Venila",
                            "options": ["Venila"],
                            "price": 5200,
                            "weight": 0,
                            "compare_at_price": 6000,
                            "inventory_management": "shopify",
                            "barcode": "",
                            "featured_media": {
                                "alt": null,
                                "id": 30919033454828,
                                "position": 3,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "\/\/chocolate-workdo.myshopify.com\/cdn\/shop\/products\/pure_white_truffle-removebg-preview.png?v=1669963055"
                                }
                            },
                            "quantity_rule": {
                                "min": 1,
                                "max": null,
                                "increment": 1
                            }
                        }, {
                            "id": 43537942249708,
                            "title": "Coffee",
                            "option1": "Coffee",
                            "option2": null,
                            "option3": null,
                            "sku": "",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": {
                                "id": 38241362608364,
                                "product_id": 7838553047276,
                                "position": 6,
                                "created_at": "2022-12-02T12:07:33+05:30",
                                "updated_at": "2022-12-02T12:07:34+05:30",
                                "alt": null,
                                "width": 500,
                                "height": 500,
                                "src": "\/\/chocolate-workdo.myshopify.com\/cdn\/shop\/products\/TRGR-Chocolatier-Australia-Dark-Chocolate-Grand-Marnier-Liqueur-Truffle-700-removebg-preview.png?v=1669963054",
                                "variant_ids": [43537942249708]
                            },
                            "available": true,
                            "name": "Salted Caramel Dark Chocolate - Coffee",
                            "public_title": "Coffee",
                            "options": ["Coffee"],
                            "price": 5200,
                            "weight": 0,
                            "compare_at_price": 6000,
                            "inventory_management": "shopify",
                            "barcode": "",
                            "featured_media": {
                                "alt": null,
                                "id": 30919033553132,
                                "position": 6,
                                "preview_image": {
                                    "aspect_ratio": 1.0,
                                    "height": 500,
                                    "width": 500,
                                    "src": "\/\/chocolate-workdo.myshopify.com\/cdn\/shop\/products\/TRGR-Chocolatier-Australia-Dark-Chocolate-Grand-Marnier-Liqueur-Truffle-700-removebg-preview.png?v=1669963054"
                                }
                            },
                            "quantity_rule": {
                                "min": 1,
                                "max": null,
                                "increment": 1
                            }
                        }]
                    </script>
                </variant-selects><noscript class="product-form__noscript-wrapper-template--16620971000044__main">
                    <div class="product-form__input">
                        <label class="form__label" for="Variants-template--16620971000044__main">Product variants</label>
                        <div class="select">
                            <select name="id" id="Variants-template--16620971000044__main" class="select__select" form="product-form-template--16620971000044__main">
                                <option selected="selected" value="43537942184172">
                                    Red velvet

                                    - 52.00 USD
                                </option>
                                <option value="43537942216940">
                                    Venila

                                    - 52.00 USD
                                </option>
                                <option value="43537942249708">
                                    Coffee

                                    - 52.00 USD
                                </option>
                            </select>

                        </div>
                    </div>
                </noscript>
                <div>
                    <form method="post" action="/cart/add" id="product-form-installment-template--16620971000044__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43537942184172">
                    </form>
                </div>
                <div class="pdp-cart-btn">
                    <product-form class="product-cart pro-btn">
                        <div class="wbquicksuccess hidden" hidden>Liquid error (sections/main-product line 266): Could not find asset snippets/icon-check.liquid translation missing: en.wbcustomlabel.wballtext.quicksuccessmsg</div>
                        <div class="product-form__error-message-wrapper" role="alert" hidden>
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13" width="20" height="20">
                                <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2" />
                                <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7" />
                                <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white" />
                                <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                            </svg>
                            <span class="product-form__error-message"></span>
                        </div>
                        <form method="post" action="/cart/add" id="product-form-template--16620971000044__main" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43537942184172" disabled>
                            <button type="submit" name="add" class="btna btn-secondary d-flex align-items-center">
                                <span>Add to Cart
                                </span>
                                <svg viewBox="0 0 10 5">
                                    <path d="M2.37755e-08 2.57132C-3.38931e-06 2.7911 0.178166 2.96928 0.397953 2.96928L8.17233 2.9694L7.23718 3.87785C7.07954 4.031 7.07589 4.28295 7.22903 4.44059C7.38218 4.59824 7.63413 4.60189 7.79177 4.44874L9.43039 2.85691C9.50753 2.78197 9.55105 2.679 9.55105 2.57146C9.55105 2.46392 9.50753 2.36095 9.43039 2.28602L7.79177 0.69418C7.63413 0.541034 7.38218 0.544682 7.22903 0.702329C7.07589 0.859976 7.07954 1.11192 7.23718 1.26507L8.1723 2.17349L0.397965 2.17336C0.178179 2.17336 3.46059e-06 2.35153 2.37755e-08 2.57132Z">
                                    </path>
                                </svg>
                                <div class="loading-overlay__spinner hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.494 511.494" style="enable-background:new 0 0 511.494 511.494;" xml:space="preserve" width="512" height="512">
                                        <g>
                                            <path d="M478.291,255.492c-16.133,0.143-29.689,12.161-31.765,28.16c-15.37,105.014-112.961,177.685-217.975,162.315   S50.866,333.006,66.236,227.992S179.197,50.307,284.211,65.677c35.796,5.239,69.386,20.476,96.907,43.959l-24.107,24.107   c-8.33,8.332-8.328,21.84,0.004,30.17c4.015,4.014,9.465,6.262,15.142,6.246h97.835c11.782,0,21.333-9.551,21.333-21.333V50.991   c-0.003-11.782-9.556-21.331-21.338-21.329c-5.655,0.001-11.079,2.248-15.078,6.246l-28.416,28.416   C320.774-29.34,159.141-19.568,65.476,86.152S-18.415,353.505,87.304,447.17s267.353,83.892,361.017-21.828   c32.972-37.216,54.381-83.237,61.607-132.431c2.828-17.612-9.157-34.183-26.769-37.011   C481.549,255.641,479.922,255.505,478.291,255.492z" />
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </form>
                    </product-form>
                    <div class="pro-checkout">
                        <product-form class="product-form">
                            <form method="post" action="/cart/add" id="product-form-template--16620971000044__main" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43537942184172" disabled>
                                <div class="product-form__buttons">
                                    <div data-shopify="payment-button" data-has-selling-plan="false" data-has-fixed-selling-plan="false" class="shopify-payment-button"><button class="shopify-payment-button__button shopify-payment-button__button--unbranded shopify-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button><button class="shopify-payment-button__more-options shopify-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button></div>
                                </div>
                            </form>
                        </product-form>

                        <link href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/component-pickup-availability.css?v=23027427361927693261668502207" rel="stylesheet" type="text/css" media="all" />
                        <pickup-availability class="product__pickup-availabilities no-js-hidden" data-root-url="/" data-variant-id="43537942184172" data-has-only-default-variant="false">
                            <template>
                                <pickup-availability-preview class="pickup-availability-preview">
                                    Liquid error (sections/main-product line 321): Could not find asset snippets/icon-unavailable.liquid
                                    <div class="pickup-availability-info">
                                        <p class="caption-large">Couldn&#39;t load pickup availability</p>
                                        <button class="pickup-availability-button link link--text underlined-link">Refresh</button>
                                    </div>
                                </pickup-availability-preview>
                            </template>
                        </pickup-availability>

                        <script src="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/pickup-availability.js?v=95345216988985239631668502208" defer="defer"></script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        function isIE() {
            const ua = window.navigator.userAgent;
            const msie = ua.indexOf('MSIE ');
            const trident = ua.indexOf('Trident/');

            return (msie > 0 || trident > 0);
        }

        if (!isIE()) return;
        const hiddenInput = document.querySelector('#product-form-template--16620971000044__main input[name="id"]');
        const noScriptInputWrapper = document.createElement('div');
        const variantSwitcher = document.querySelector('variant-radios[data-section="template--16620971000044__main"]') || document.querySelector('variant-selects[data-section="template--16620971000044__main"]');
        noScriptInputWrapper.innerHTML = document.querySelector('.product-form__noscript-wrapper-template--16620971000044__main').textContent;
        variantSwitcher.outerHTML = noScriptInputWrapper.outerHTML;

        document.querySelector('#Variants-template--16620971000044__main').addEventListener('change', function(event) {
            hiddenInput.value = event.currentTarget.value;
        });
    });
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Product",
        "name": "Salted Caramel Dark Chocolate",
        "url": "https:\/\/chocolate-workdo.myshopify.com\/products\/salted-caramel-dark-chocolate",
        "image": [
            "https:\/\/chocolate-workdo.myshopify.com\/cdn\/shop\/products\/TRFR-Chocolatier-Australia-Dark-Chocolate-Fruits-Of-Passion-Liqueur-Truffle-700-removebg-preview_500x.png?v=1669963054"
        ],
        "description": "Dark Chocolate: Dark chocolate forms the base of this treat, providing a deep and intense chocolate flavor. It is known for its higher cocoa content and less sugar compared to milk chocolate, resulting in a more robust and slightly bitter taste.\nSalted Caramel Filling: The dark chocolate is filled with a luscious and creamy salted caramel center. The salted caramel adds a delightful contrast of flavors, with its sweet and buttery notes complemented by a hint of saltiness.",

        "brand": {
            "@type": "Thing",
            "name": "Dark Chocolate"
        },
        "offers": [{
                "@type": "Offer",
                "availability": "http://schema.org/InStock",
                "price": 52.0,
                "priceCurrency": "USD",
                "url": "https:\/\/chocolate-workdo.myshopify.com\/products\/salted-caramel-dark-chocolate?variant=43537942184172"
            },
            {
                "@type": "Offer",
                "availability": "http://schema.org/InStock",
                "price": 52.0,
                "priceCurrency": "USD",
                "url": "https:\/\/chocolate-workdo.myshopify.com\/products\/salted-caramel-dark-chocolate?variant=43537942216940"
            },
            {
                "@type": "Offer",
                "availability": "http://schema.org/InStock",
                "price": 52.0,
                "priceCurrency": "USD",
                "url": "https:\/\/chocolate-workdo.myshopify.com\/products\/salted-caramel-dark-chocolate?variant=43537942249708"
            }
        ]
    }
</script>
@endsection