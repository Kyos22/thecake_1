<section id="shopify-section-template--16620970705132__df1c8f66-354b-4e03-8359-3dfc1f8c47e8" class="shopify-section pro-base-slider-sec">
    <div class="container" data-section="pdp-slider">
        <div class="section-title">
            <h3>Immerse yourself <br> <b>in The Cake</b></h3>
        </div>
        <div class="pro-base-slider-main">
            @foreach($immerse as $cake)
            <div class="grid__item product-card">
                <div class="card product-card-inner">
                    <div class="card-top">
                        <span>100%</span>

                        <div class="favorite-icon">

                            <a class="wishlist wish add-wishlist" href="/account/login" title="translation missing: en.customlabel.wballtext.wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    <use xlink:href="#wish"></use>
                                </svg>
                            </a>

                        </div>
                    </div>
                    <div class="product-card-image product-img">
                        <div id="pro-template--16620970737900__166357255109ff5dc3-7838553047276" class="card__media">
                            <a href="{{url('/allcategories/detailproductuser/'.$cake->name_product)}}" title="{{$cake->name_product}}" class="product__media-item" data-media-id="template--16620970737900__166357255109ff5dc3-7838553047276-30919033520364" tabindex="0">
                                <img loading="lazy" class="default-img" srcset="{{asset('images/' .$cake -> photo)}}" alt="">
                            </a>
                            <a href="{{url('/allcategories/detailproductuser/'.$cake->name_product)}}" class="hover-img">
                                <img loading="lazy" srcset="{{asset('images/' .$cake -> photo)}}">
                            </a>
                        </div>
                    </div>
                    <div id="ProductInfo-template--16620970737900__166357255109ff5dc3-7838553047276" class="card-bottom">
                        <div class="card-top-inner">
                            <div class="label">{{$cake -> name_category}}</div>
                            <div class="card-title">
                                <h5 id="title--7838553047276" class="product-title">
                                    <a href="{{url('/allcategories/detailproductuser/'.$cake->name_product)}}" tabindex="0">{{$cake-> name_product}}</a>
                                </h5>
                            </div>
                        </div>
                        <div class="card-bottom-inner">
                            <variant-selects class="no-js-hidden" data-section="template--16620970705132__product-grid" data-product="7838553047276" data-url="" data-update-url="false" data-layout="card">
                                <div class="product-form__input product-form__input--dropdown">
                                    <div class="select select-box">
                                        <label>Options:</label>
                                        <select id="Option-template--16620970705132__product-grid-7838553047276-0" class="select__select nice-select" name="options[Flavour]" form="product-form-template--16620970705132__product-grid-7838553047276">
                                            <option data-val="Red velvet" value="Red velvet" selected="selected">
                                                Normal eggs
                                            </option>
                                            <option data-val="Venila" value="Venila">
                                                Many egg
                                            </option>
                                            <option data-val="Venila" value="Venila">
                                                Fews egg
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

                                <wbdemo id="abc"></wbdemo>


                            </variant-selects><select id="Variants-template--16620970705132__product-grid-7838553047276" class="select__select no-js" form="product-form-template--16620970705132__product-grid-7838553047276">
                                <option data-v-title="Red velvet" data-price="{{$cake -> price}} <span class=wbcur>USD</span>" data-cprice="{{$cake -> fakeprice}} <span class=wbcur>USD</span>" selected="selected" value="43537942184172">
                                    normal eggs

                                    - {{$cake -> price}}
                                </option>
                                <option data-v-title="Venila" data-price="{{$cake -> price}} <span class=wbcur>USD</span>" data-cprice="{{$cake -> fakeprice}} <span class=wbcur>USD</span>" value="43537942216940">
                                    many eggs

                                    - {{$cake -> price}}
                                </option>
                                <option data-v-title="Venila" data-price="{{$cake -> price}} <span class=wbcur>USD</span>" data-cprice="{{$cake -> fakeprice}} <span class=wbcur>USD</span>" value="43537942216940">
                                    few eggs

                                    - {{$cake -> price}}
                                </option>

                            </select>
                            <div class="card-btn-wrapper">
                                <div class="no-js-hidden price" id="price-template--16620970705132__product-grid-7838553047276" role="status">

                                    <ins class="price-item--regular">{{$cake -> price}} <span class=wbcur>VND</span></ins>
                                    <del class="price-item--sale">

                                        {{$cake -> fakeprice}} <span class=wbcur>VND</span>

                                    </del>


                                </div>
                                <product-form class="product-form">
                                    <div class="wbquicksuccess hidden" hidden>translation missing: en.wbcustomlabel.wballtext.quicksuccessmsg</div>
                                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13" width="20" height="20">
                                            <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2" />
                                            <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7" />
                                            <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white" />
                                            <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                                        </svg>
                                        <span class="product-form__error-message"></span>
                                    </div>
                                    <form method="post" action="/cart/add" id="product-form-template--16620970705132__product-grid-7838553047276" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="43537942184172" disabled>
                                        <button type="submit" name="add" class="btn-secondary cartb product-form__submit" aria-label="Add to Cart"><span>Add to Cart</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1258 5.12596H2.87416C2.04526 5.12596 1.38823 5.82533 1.43994 6.65262L1.79919 12.4007C1.84653 13.1581 2.47458 13.7481 3.23342 13.7481H10.7666C11.5254 13.7481 12.1535 13.1581 12.2008 12.4007L12.5601 6.65262C12.6118 5.82533 11.9547 5.12596 11.1258 5.12596ZM2.87416 3.68893C1.21635 3.68893 -0.0977 5.08768 0.00571155 6.74226L0.364968 12.4904C0.459638 14.0051 1.71574 15.1851 3.23342 15.1851H10.7666C12.2843 15.1851 13.5404 14.0051 13.635 12.4904L13.9943 6.74226C14.0977 5.08768 12.7837 3.68893 11.1258 3.68893H2.87416Z" fill="white"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.40723 4.40744C3.40723 2.42332 5.01567 0.81488 6.99979 0.81488C8.9839 0.81488 10.5923 2.42332 10.5923 4.40744V5.84447C10.5923 6.24129 10.2707 6.56298 9.87384 6.56298C9.47701 6.56298 9.15532 6.24129 9.15532 5.84447V4.40744C9.15532 3.21697 8.19026 2.2519 6.99979 2.2519C5.80932 2.2519 4.84425 3.21697 4.84425 4.40744V5.84447C4.84425 6.24129 4.52256 6.56298 4.12574 6.56298C3.72892 6.56298 3.40723 6.24129 3.40723 5.84447V4.40744Z" fill="white"></path>
                                            </svg>
                                            <div class="loading-overlay__spinner hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.494 511.494" style="enable-background:new 0 0 511.494 511.494;" xml:space="preserve" width="512" height="512">
                                                    <g>
                                                        <path d="M478.291,255.492c-16.133,0.143-29.689,12.161-31.765,28.16c-15.37,105.014-112.961,177.685-217.975,162.315 S50.866,333.006,66.236,227.992S179.197,50.307,284.211,65.677c35.796,5.239,69.386,20.476,96.907,43.959l-24.107,24.107   c-8.33,8.332-8.328,21.84,0.004,30.17c4.015,4.014,9.465,6.262,15.142,6.246h97.835c11.782,0,21.333-9.551,21.333-21.333V50.991   c-0.003-11.782-9.556-21.331-21.338-21.329c-5.655,0.001-11.079,2.248-15.078,6.246l-28.416,28.416   C320.774-29.34,159.141-19.568,65.476,86.152S-18.415,353.505,87.304,447.17s267.353,83.892,361.017-21.828   c32.972-37.216,54.381-83.237,61.607-132.431c2.828-17.612-9.157-34.183-26.769-37.011   C481.549,255.641,479.922,255.505,478.291,255.492z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </button>
                                    </form>
                                </product-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>