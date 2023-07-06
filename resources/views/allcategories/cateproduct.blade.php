@extends('layouts.appdetail')
@section('main')
<section id="shopify-section-template--16620970705132__banner" class="shopify-section common-banner-section">
            <div class="container">
                <a class="back-btn" href="javascript&colon;history.go(-1)">
                    <span class="svg-ic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="5" viewBox="0 0 11 5" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5791 2.28954C10.5791 2.53299 10.3818 2.73035 10.1383 2.73035L1.52698 2.73048L2.5628 3.73673C2.73742 3.90636 2.74146 4.18544 2.57183 4.36005C2.40219 4.53467 2.12312 4.53871 1.9485 4.36908L0.133482 2.60587C0.0480403 2.52287 -0.000171489 2.40882 -0.000171488 2.2897C-0.000171486 2.17058 0.0480403 2.05653 0.133482 1.97353L1.9485 0.210321C2.12312 0.0406877 2.40219 0.044729 2.57183 0.219347C2.74146 0.393966 2.73742 0.673036 2.5628 0.842669L1.52702 1.84888L10.1383 1.84875C10.3817 1.84874 10.5791 2.04609 10.5791 2.28954Z" fill="white"></path>
                        </svg>
                    </span>Back to Return
                </a>
                <h2 class="heading text-left">{{$name}}</h2>
                <div class="row collection-content">
                    <div class="col-12  collection-text"></div>
                </div>
            </div>

        </section>
        <section id="shopify-section-template--16620970705132__product-grid" class="shopify-section product-listing-section">
            <link href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/component-loading-overlay.css?v=16694493214799988661668502207" rel="stylesheet" type="text/css" media="all" />
            <link href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/main-collection-product.css?v=85348989868872481761668502208" rel="stylesheet" type="text/css" media="all" />
            <script src="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/product-form.js?v=154520108827843999331668502208" defer="defer"></script>
            <link rel="preload" href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/component-rte.css?v=20306380008624480011668502207" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript>
                <link href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/component-rte.css?v=20306380008624480011668502207" rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <div id="ProductGridContainer">
                <div class="collection container">
                    <div class="product-heading-row row no-gutters">
                        <div class="product-heading-column col-lg-3 col-md-4 col-1">
                            <div class="filter-title">
                                <h4 class="desk-only">Filters</h4>
                            </div>
                        </div>
                        <div class="product-heading-right-column col-lg-9 col-md-8 col-11">
                            <div class="product-sorting-row d-flex align-items-center justify-content-between">
                                <ul class="produdt-filter-cat d-flex align-items-center">
                                    <li><a href="javascript&colon;history.go(-1)">Home</a></li>
                                    <li><a href="#">cakes</a></li>
                                    <li><a href="#">{{$name}}</a></li>
                                </ul>
                                <div class="filter-select-box d-flex align-items-center justify-content-end">
                                    <facet-filters-form>
                                        <form id="FacetFiltersForm">
                                            <div class="facet-filters sorting caption">
                                                <div class="facet-filters__field">
                                                    <span class="sort-lbl"><label for="SortBy">Sort by:</label></span>
                                                    <div class="select"><select name="sort_by" class="facet-filters__sort select__select caption-large nice-select" id="SortBy" aria-describedby="a11y-refresh-page-message">
                                                            <option value="manual">Featured</option>
                                                            <option value="best-selling" selected="selected">Best selling</option>
                                                            <option value="title-ascending">Alphabetically, A-Z</option>
                                                            <option value="title-descending">Alphabetically, Z-A</option>
                                                            <option value="price-ascending">Price, low to high</option>
                                                            <option value="price-descending">Price, high to low</option>
                                                            <option value="created-ascending">Date, old to new</option>
                                                            <option value="created-descending">Date, new to old</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <noscript>
                                                    <button type="submit" class="facets__button-no-js button">Sort</button>
                                                </noscript>
                                            </div>
                                        </form>
                                    </facet-filters-form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-row row no-gutters padding-bottom">
                        <link href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/component-facets.css?v=127995005706867792421671439002" rel="stylesheet" type="text/css" media="all" />
                        <script src="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/facets.js?v=63602273955226303831669087575" defer="defer"></script>
                        <div class="product-filter-column col-lg-3 col-md-4 col-1" id="main-collection-filters" data-id="template--16620970705132__product-grid">

                            <div class="facets-container product-filter-body"><facet-filters-form class="facets small-hide">
                                    <form id="FacetFiltersForm" class="facets__form">


                                        <div class="active-facets active-facets-desktop">





                                            <facet-remove class="active-facets__button-wrapper">
                                                <a href="/collections/cakes" class="active-facets__button-remove btn">
                                                    <span>Remove all</span>
                                                </a>
                                            </facet-remove>
                                        </div>


                                        <div id="FacetsWrapperDesktop" class="facets__wrapper">
                                            <details id="Details-1-template--16620970705132__product-grid" class="product-widget disclosure-has-popup facets__disclosure js-filter" data-index="1" open="">
                                                <summary class="facets__summary caption-large focus-offset pro-itm">
                                                    <h4 class="acnav-label">Availability</h4>
                                                </summary>
                                                <div id="Facet-1-template--16620970705132__product-grid" class="facets__display pro-itm-inner acnav-list">
                                                    <div class="facets__header">
                                                        <span class="facets__selected no-js-hidden">0 selected</span>
                                                        <facet-remove>
                                                            <a href="/collections/cakes" class="facets__reset link">
                                                                Reset
                                                            </a>
                                                        </facet-remove>
                                                    </div>

                                                    <ul class="facets__list list-unstyled" role="list">
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Availability-1" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.availability" value="1" id="Filter-Availability-1">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                In stock
                                                            </label>
                                                            <span class="filter-count">(4)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Availability-2" class="facet-checkbox facet-checkbox--disabled">

                                                                <input type="checkbox" name="filter.v.availability" value="0" id="Filter-Availability-2" disabled>

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Out of stock
                                                            </label>
                                                            <span class="filter-count">(0)</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </details>



                                            <details id="Details-2-template--16620970705132__product-grid" class="product-price-widget product-widget disclosure-has-popup facets__disclosure js-filter" data-index="2" open="">
                                                <summary class="facets__summary caption-large focus-offset pro-itm">
                                                    <h4 class="acnav-label">
                                                        Price
                                                    </h4>
                                                </summary>
                                                <div id="Facet-2-template--16620970705132__product-grid" class="facets__display pro-itm-inner acnav-list">
                                                    <div class="facets__header"><span class="facets__selected">The highest price is 450.00 USD</span>
                                                        <facet-remove>
                                                            <a href="/collections/cakes" class="facets__reset link">
                                                                Reset
                                                            </a>
                                                        </facet-remove>
                                                    </div>
                                                    <price-range class="facets__price">
                                                        <div class="field">
                                                            <label class="field__label" for="Filter-Price-GTE">Min price:</label>
                                                            <input class="field__input" name="filter.v.price.gte" id="Filter-Price-GTE" type="number" placeholder="0" min="0" max="450.00">
                                                        </div>
                                                        <div class="field">
                                                            <label class="field__label" for="Filter-Price-LTE">Max price:</label>
                                                            <input class="field__input" name="filter.v.price.lte" id="Filter-Price-LTE" type="number" min="0" placeholder="450.00" max="450.00">
                                                        </div>
                                                    </price-range>
                                                </div>
                                            </details>


                                            <details id="Details-3-template--16620970705132__product-grid" class="product-widget disclosure-has-popup facets__disclosure js-filter" data-index="3" open="">
                                                <summary class="facets__summary caption-large focus-offset pro-itm">
                                                    <h4 class="acnav-label">Product type</h4>
                                                </summary>
                                                <div id="Facet-3-template--16620970705132__product-grid" class="facets__display pro-itm-inner acnav-list">
                                                    <div class="facets__header">
                                                        <span class="facets__selected no-js-hidden">0 selected</span>
                                                        <facet-remove>
                                                            <a href="/collections/cakes" class="facets__reset link">
                                                                Reset
                                                            </a>
                                                        </facet-remove>
                                                    </div>

                                                    <ul class="facets__list list-unstyled" role="list">
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Product type-1" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.p.product_type" value="cake" id="Filter-Product type-1">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                cake
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Product type-2" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.p.product_type" value="Chocolate" id="Filter-Product type-2">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Chocolate
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Product type-3" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.p.product_type" value="Dark Chocolate" id="Filter-Product type-3">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Dark Chocolate
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Product type-4" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.p.product_type" value="Donuts" id="Filter-Product type-4">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Donuts
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </details>


                                            <details id="Details-4-template--16620970705132__product-grid" class="product-widget disclosure-has-popup facets__disclosure js-filter" data-index="4" open="">
                                                <summary class="facets__summary caption-large focus-offset pro-itm">
                                                    <h4 class="acnav-label">Brand</h4>
                                                </summary>
                                                <div id="Facet-4-template--16620970705132__product-grid" class="facets__display pro-itm-inner acnav-list">
                                                    <div class="facets__header">
                                                        <span class="facets__selected no-js-hidden">0 selected</span>
                                                        <facet-remove>
                                                            <a href="/collections/cakes" class="facets__reset link">
                                                                Reset
                                                            </a>
                                                        </facet-remove>
                                                    </div>

                                                    <ul class="facets__list list-unstyled" role="list">
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Brand-1" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.p.vendor" value="Chocolate" id="Filter-Brand-1">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Chocolate
                                                            </label>
                                                            <span class="filter-count">(2)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Brand-2" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.p.vendor" value="Dark Chocolate" id="Filter-Brand-2">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Dark Chocolate
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Brand-3" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.p.vendor" value="Donuts" id="Filter-Brand-3">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Donuts
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </details>


                                            <details id="Details-5-template--16620970705132__product-grid" class="product-widget disclosure-has-popup facets__disclosure js-filter" data-index="5" open="">
                                                <summary class="facets__summary caption-large focus-offset pro-itm">
                                                    <h4 class="acnav-label">Flavor</h4>
                                                </summary>
                                                <div id="Facet-5-template--16620970705132__product-grid" class="facets__display pro-itm-inner acnav-list">
                                                    <div class="facets__header">
                                                        <span class="facets__selected no-js-hidden">0 selected</span>
                                                        <facet-remove>
                                                            <a href="/collections/cakes" class="facets__reset link">
                                                                Reset
                                                            </a>
                                                        </facet-remove>
                                                    </div>

                                                    <ul class="facets__list list-unstyled" role="list">
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Flavor-1" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.option.flavor" value="Bluebarry" id="Filter-Flavor-1">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Bluebarry
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Flavor-2" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.option.flavor" value="chocolate" id="Filter-Flavor-2">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                chocolate
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Flavor-3" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.option.flavor" value="Coffee" id="Filter-Flavor-3">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Coffee
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Flavor-4" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.option.flavor" value="cream" id="Filter-Flavor-4">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                cream
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Flavor-5" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.option.flavor" value="Dark choco" id="Filter-Flavor-5">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Dark choco
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Flavor-6" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.option.flavor" value="strawberry" id="Filter-Flavor-6">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                strawberry
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Flavor-7" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.option.flavor" value="Strawbery" id="Filter-Flavor-7">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                Strawbery
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                        <li class="list-menu__item  facets__item">
                                                            <label for="Filter-Flavor-8" class="facet-checkbox">

                                                                <input type="checkbox" name="filter.v.option.flavor" value="vanilla" id="Filter-Flavor-8">

                                                                <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                    <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                </svg>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg>

                                                                vanilla
                                                            </label>
                                                            <span class="filter-count">(1)</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </details>

                                            <noscript>
                                                <button type="submit" class="facets__button-no-js button button--tertiary">Filter</button>
                                            </noscript>
                                        </div>





                                    </form>
                                </facet-filters-form>
                                <div class="active-facets active-facets-mobile  medium-hide large-up-hide"><facet-remove class="active-facets__button-wrapper">
                                        <a href="/collections/cakes" class="active-facets__button-remove btn">
                                            <span>Remove all</span>
                                        </a>
                                    </facet-remove>
                                </div>
                                <div class="product-count light hidden " role="status">
                                    <p id="ProductCount" class="product-count__text">4 products
                                    </p>
                                    <div class="loading-overlay__spinner">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                        </svg>
                                    </div>
                                </div>

                                <menu-drawer class="mobile-facets__wrapper mobile-only" data-breakpoint="mobile">
                                    <div class="mobile-facets__disclosure disclosure-has-popup">
                                        <summary class="mobile-facets__open-wrapper focus-offset">
                                            <div class="mobile-facets__open mobile-only">
                                                <svg class="icon icon-filter" aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" d="M4.833 6.5a1.667 1.667 0 1 1 3.334 0 1.667 1.667 0 0 1-3.334 0ZM4.05 7H2.5a.5.5 0 0 1 0-1h1.55a2.5 2.5 0 0 1 4.9 0h8.55a.5.5 0 0 1 0 1H8.95a2.5 2.5 0 0 1-4.9 0Zm11.117 6.5a1.667 1.667 0 1 0-3.334 0 1.667 1.667 0 0 0 3.334 0ZM13.5 11a2.5 2.5 0 0 1 2.45 2h1.55a.5.5 0 0 1 0 1h-1.55a2.5 2.5 0 0 1-4.9 0H2.5a.5.5 0 0 1 0-1h8.55a2.5 2.5 0 0 1 2.45-2Z" fill="currentColor" />
                                                </svg>

                                            </div>
                                            <span tabindex="0" class="close-filter ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                                    <path d="M27.7618 25.0008L49.4275 3.33503C50.1903 2.57224 50.1903 1.33552 49.4275 0.572826C48.6647 -0.189868 47.428 -0.189965 46.6653 0.572826L24.9995 22.2386L3.33381 0.572826C2.57102 -0.189965 1.3343 -0.189965 0.571605 0.572826C-0.191089 1.33562 -0.191186 2.57233 0.571605 3.33503L22.2373 25.0007L0.571605 46.6665C-0.191186 47.4293 -0.191186 48.666 0.571605 49.4287C0.952952 49.81 1.45285 50.0007 1.95275 50.0007C2.45266 50.0007 2.95246 49.81 3.3339 49.4287L24.9995 27.763L46.6652 49.4287C47.0465 49.81 47.5464 50.0007 48.0463 50.0007C48.5462 50.0007 49.046 49.81 49.4275 49.4287C50.1903 48.6659 50.1903 47.4292 49.4275 46.6665L27.7618 25.0008Z" fill="white"></path>
                                                </svg>
                                            </span>
                                        </summary>
                                        <facet-filters-form>
                                            <form id="FacetFiltersFormMobile" class="mobile-facets">
                                                <div class="mobile-facets__inner product-filter-body">
                                                    <div class="mobile-facets__main">
                                                        <details id="Details-Mobile-1-template--16620970705132__product-grid" class="mobile-facets__details js-filter" data-index="mobile-1">
                                                            <summary class="mobile-facets__summary focus-inset">
                                                                <div>
                                                                    <span>Availability</span>
                                                                    <span class="mobile-facets__arrow no-js-hidden">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                                        </svg>
                                                                    </span>
                                                                    <noscript><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                                        </svg></noscript>
                                                                </div>
                                                            </summary>
                                                            <div id="FacetMobile-1-template--16620970705132__product-grid" class="mobile-facets__submenu">
                                                                <button class="mobile-facets__close-button link link--text focus-inset" aria-expanded="true" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                    Availability
                                                                </button>
                                                                <ul class="mobile-facets__list list-unstyled" role="list">
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Availability-mobile-1" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.availability" value="1" id="Filter-Availability-mobile-1">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            In stock
                                                                        </label>
                                                                        <span class="filter-count">4</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Availability-mobile-2" class="mobile-facets__label mobile-facets__label--disabled">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.availability" value="0" id="Filter-Availability-mobile-2" disabled>
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Out of stock
                                                                        </label>
                                                                        <span class="filter-count">0</span>
                                                                    </li>
                                                                </ul>

                                                                <div class="no-js-hidden mobile-facets__footer">
                                                                    <facet-remove class="mobile-facets__clear-wrapper btn-secondary">
                                                                        <a href="/collections/cakes" class="mobile-facets__clear">Clear</a>
                                                                    </facet-remove>
                                                                    <button type="button" class="no-js-hidden btn" onclick="this.closest('.mobile-facets__wrapper').querySelector('summary').click()">Apply</button>
                                                                    <noscript><button class="button">Apply</button></noscript>
                                                                </div>
                                                            </div>
                                                        </details>


                                                        <details id="Details-Mobile-2-template--16620970705132__product-grid" class="mobile-facets__details js-filter" data-index="mobile-2">
                                                            <summary class="mobile-facets__summary focus-inset">
                                                                <div>
                                                                    <span>Price</span>
                                                                    <span class="mobile-facets__arrow no-js-hidden">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                                        </svg>
                                                                    </span>
                                                                    <noscript><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                                        </svg></noscript>
                                                                </div>
                                                            </summary>
                                                            <div id="FacetMobile-2-template--16620970705132__product-grid" class="mobile-facets__submenu">
                                                                <button class="mobile-facets__close-button link link--text focus-inset" aria-expanded="true" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                    Price
                                                                </button>

                                                                <p class="mobile-facets__info">The highest price is 450.00 USD</p>

                                                                <price-range class="facets__price">
                                                                    <div class="field">
                                                                        <span class="field-currency">$</span>
                                                                        <label class="field__label" for="Mobile-Filter-Price-GTE">Min price:</label>
                                                                        <input class="field__input" name="filter.v.price.gte" id="Mobile-Filter-Price-GTE" type="number" placeholder="0" min="0" inputmode="decimal" max="450.00">
                                                                    </div>

                                                                    <div class="field">
                                                                        <span class="field-currency">$</span>
                                                                        <label class="field__label" for="Mobile-Filter-Price-LTE">Max price:</label>
                                                                        <input class="field__input" name="filter.v.price.lte" id="Mobile-Filter-Price-LTE" type="number" min="0" inputmode="decimal" placeholder="450.00" max="450.00">
                                                                    </div>
                                                                </price-range>
                                                                <div class="no-js-hidden mobile-facets__footer">
                                                                    <facet-remove class="mobile-facets__clear-wrapper btn-secondary">
                                                                        <a href="/collections/cakes" class="mobile-facets__clear">Clear</a>
                                                                    </facet-remove>
                                                                    <button type="button" class="no-js-hidden btn" onclick="this.closest('.mobile-facets__wrapper').querySelector('summary').click()">Apply</button>
                                                                    <noscript><button class="button">Apply</button></noscript>
                                                                </div>
                                                            </div>
                                                        </details>


                                                        <details id="Details-Mobile-3-template--16620970705132__product-grid" class="mobile-facets__details js-filter" data-index="mobile-3">
                                                            <summary class="mobile-facets__summary focus-inset">
                                                                <div>
                                                                    <span>Product type</span>
                                                                    <span class="mobile-facets__arrow no-js-hidden">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                                        </svg>
                                                                    </span>
                                                                    <noscript><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                                        </svg></noscript>
                                                                </div>
                                                            </summary>
                                                            <div id="FacetMobile-3-template--16620970705132__product-grid" class="mobile-facets__submenu">
                                                                <button class="mobile-facets__close-button link link--text focus-inset" aria-expanded="true" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                    Product type
                                                                </button>
                                                                <ul class="mobile-facets__list list-unstyled" role="list">
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Product type-mobile-1" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.p.product_type" value="cake" id="Filter-Product type-mobile-1">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            cake
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Product type-mobile-2" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.p.product_type" value="Chocolate" id="Filter-Product type-mobile-2">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Chocolate
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Product type-mobile-3" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.p.product_type" value="Dark Chocolate" id="Filter-Product type-mobile-3">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Dark Chocolate
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Product type-mobile-4" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.p.product_type" value="Donuts" id="Filter-Product type-mobile-4">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Donuts
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                </ul>

                                                                <div class="no-js-hidden mobile-facets__footer">
                                                                    <facet-remove class="mobile-facets__clear-wrapper btn-secondary">
                                                                        <a href="/collections/cakes" class="mobile-facets__clear">Clear</a>
                                                                    </facet-remove>
                                                                    <button type="button" class="no-js-hidden btn" onclick="this.closest('.mobile-facets__wrapper').querySelector('summary').click()">Apply</button>
                                                                    <noscript><button class="button">Apply</button></noscript>
                                                                </div>
                                                            </div>
                                                        </details>


                                                        <details id="Details-Mobile-4-template--16620970705132__product-grid" class="mobile-facets__details js-filter" data-index="mobile-4">
                                                            <summary class="mobile-facets__summary focus-inset">
                                                                <div>
                                                                    <span>Brand</span>
                                                                    <span class="mobile-facets__arrow no-js-hidden">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                                        </svg>
                                                                    </span>
                                                                    <noscript><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                                        </svg></noscript>
                                                                </div>
                                                            </summary>
                                                            <div id="FacetMobile-4-template--16620970705132__product-grid" class="mobile-facets__submenu">
                                                                <button class="mobile-facets__close-button link link--text focus-inset" aria-expanded="true" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                    Brand
                                                                </button>
                                                                <ul class="mobile-facets__list list-unstyled" role="list">
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Brand-mobile-1" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.p.vendor" value="Chocolate" id="Filter-Brand-mobile-1">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Chocolate
                                                                        </label>
                                                                        <span class="filter-count">2</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Brand-mobile-2" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.p.vendor" value="Dark Chocolate" id="Filter-Brand-mobile-2">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Dark Chocolate
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Brand-mobile-3" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.p.vendor" value="Donuts" id="Filter-Brand-mobile-3">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Donuts
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                </ul>

                                                                <div class="no-js-hidden mobile-facets__footer">
                                                                    <facet-remove class="mobile-facets__clear-wrapper btn-secondary">
                                                                        <a href="/collections/cakes" class="mobile-facets__clear">Clear</a>
                                                                    </facet-remove>
                                                                    <button type="button" class="no-js-hidden btn" onclick="this.closest('.mobile-facets__wrapper').querySelector('summary').click()">Apply</button>
                                                                    <noscript><button class="button">Apply</button></noscript>
                                                                </div>
                                                            </div>
                                                        </details>


                                                        <details id="Details-Mobile-5-template--16620970705132__product-grid" class="mobile-facets__details js-filter" data-index="mobile-5">
                                                            <summary class="mobile-facets__summary focus-inset">
                                                                <div>
                                                                    <span>Flavor</span>
                                                                    <span class="mobile-facets__arrow no-js-hidden">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                                        </svg>
                                                                    </span>
                                                                    <noscript><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                                        </svg></noscript>
                                                                </div>
                                                            </summary>
                                                            <div id="FacetMobile-5-template--16620970705132__product-grid" class="mobile-facets__submenu">
                                                                <button class="mobile-facets__close-button link link--text focus-inset" aria-expanded="true" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                                    </svg>
                                                                    Flavor
                                                                </button>
                                                                <ul class="mobile-facets__list list-unstyled" role="list">
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Flavor-mobile-1" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.option.flavor" value="Bluebarry" id="Filter-Flavor-mobile-1">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Bluebarry
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Flavor-mobile-2" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.option.flavor" value="chocolate" id="Filter-Flavor-mobile-2">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            chocolate
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Flavor-mobile-3" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.option.flavor" value="Coffee" id="Filter-Flavor-mobile-3">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Coffee
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Flavor-mobile-4" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.option.flavor" value="cream" id="Filter-Flavor-mobile-4">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            cream
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Flavor-mobile-5" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.option.flavor" value="Dark choco" id="Filter-Flavor-mobile-5">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Dark choco
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Flavor-mobile-6" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.option.flavor" value="strawberry" id="Filter-Flavor-mobile-6">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            strawberry
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Flavor-mobile-7" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.option.flavor" value="Strawbery" id="Filter-Flavor-mobile-7">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            Strawbery
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                    <li class="mobile-facets__item list-menu__item">
                                                                        <label for="Filter-Flavor-mobile-8" class="mobile-facets__label">
                                                                            <input class="mobile-facets__checkbox" type="checkbox" name="filter.v.option.flavor" value="vanilla" id="Filter-Flavor-mobile-8">
                                                                            <span class="mobile-facets__highlight"></span>
                                                                            <svg width="1.6rem" height="1.6rem" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                                                                                <rect width="16" height="16" stroke="currentColor" fill="none" stroke-width="1"></rect>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                                                <polyline points="20 6 9 17 4 12"></polyline>
                                                                            </svg>
                                                                            vanilla
                                                                        </label>
                                                                        <span class="filter-count">1</span>
                                                                    </li>
                                                                </ul>

                                                                <div class="no-js-hidden mobile-facets__footer">
                                                                    <facet-remove class="mobile-facets__clear-wrapper btn-secondary">
                                                                        <a href="/collections/cakes" class="mobile-facets__clear">Clear</a>
                                                                    </facet-remove>
                                                                    <button type="button" class="no-js-hidden btn" onclick="this.closest('.mobile-facets__wrapper').querySelector('summary').click()">Apply</button>
                                                                    <noscript><button class="button">Apply</button></noscript>
                                                                </div>
                                                            </div>
                                                        </details>

                                                        <div class="mobile-facets__footer">
                                                            <facet-remove class="mobile-facets__clear-wrapper btn-secondary">
                                                                <a href="/collections/cakes" class="mobile-facets__clear">Remove all</a>
                                                            </facet-remove>
                                                            <button type="button" class="no-js-hidden btn apply-btn">Apply</button>
                                                        </div>
                                                    </div>


                                                </div>
                                            </form>
                                        </facet-filters-form>
                                    </div>
                                </menu-drawer>
                            </div>
                        </div>
                        <div class="product-filter-right-column col-lg-9 col-md-8 col-12">
                            <div id="product-grid" data-id="template--16620970705132__product-grid" class="row">

                                @foreach($productsPerPage as $prd)

                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 product-card grid__item">
                                    <div class="card product-card-inner">
                                        <div class="card-top">
                                            <span>13%</span>

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
                                            <div id="pro-template--16620970705132__product-grid-7838553047276" class="card__media">
                                                <!-- note ảnh -->
                                                <a href="{{url('/allcategories/detailproduct/'.$prd->name_product)}}" title="Salted Caramel Dark Chocolate" class="product__media-item" data-media-id="template--16620970705132__product-grid-7838553047276-30919033520364" tabindex="0">
                                                    <img loading="lazy" class="default-img" src="{{asset('images/' .$prd -> photo)}}" alt="">
                                                </a>
                                                <a href="{{url('/allcategories/detailproduct/'.$prd->name_product)}}"  class="hover-img">
                                                    <img loading="lazy" srcset="{{asset('images/' .$prd -> photo)}}">
                                                </a></div>
                                        </div>
                                        <div id="ProductInfo-template--16620970705132__product-grid-7838553047276" class="card-bottom">
                                            <div class="card-top-inner">
                                                <div class="label">{{$name}}</div>
                                                <div class="card-title">
                                                    <h5 id="title--7838553047276" class="product-title">
                                                        <a href="{{url('/allcategories/detailproduct/'.$prd->name_product)}}" tabindex="0">{{$prd -> name_product}}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-bottom-inner">
                                                <variant-selects class="no-js-hidden" data-section="template--16620970705132__product-grid" data-product="7838553047276" data-url="" data-update-url="false" data-layout="card">
                                                    <div class="product-form__input product-form__input--dropdown">
                                                        <div class="select select-box">
                                                            <label>Flavour:</label>
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
                                                    <option data-v-title="Red velvet" data-price="{{$prd -> price}} <span class=wbcur>USD</span>" data-cprice="{{$prd -> fakeprice}} <span class=wbcur>USD</span>" selected="selected" value="43537942184172">
                                                        normal eggs

                                                        - {{$prd -> price}}
                                                    </option>
                                                    <option data-v-title="Venila" data-price="{{$prd -> price}} <span class=wbcur>USD</span>" data-cprice="{{$prd -> fakeprice}} <span class=wbcur>USD</span>" value="43537942216940">
                                                        many eggs

                                                        - {{$prd -> price}}
                                                    </option>
                                                    <option data-v-title="Venila" data-price="{{$prd -> price}} <span class=wbcur>USD</span>" data-cprice="{{$prd -> fakeprice}} <span class=wbcur>USD</span>" value="43537942216940">
                                                        few eggs

                                                        - {{$prd -> price}}
                                                    </option>
                                                    
                                                </select>
                                                <div class="card-btn-wrapper">
                                                    <div class="no-js-hidden price" id="price-template--16620970705132__product-grid-7838553047276" role="status">

                                                        <ins class="price-item--regular">{{$prd -> price}} <span class=wbcur>USD</span></ins>
                                                        <del class="price-item--sale">

                                                            {{$prd -> fakeprice}} <span class=wbcur>USD</span>

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
                    </div>
                </div>
            </div>


        </section>
        @endsection
        
