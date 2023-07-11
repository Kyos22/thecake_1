@extends('layoutsuser.appuser')
@section('main')
<section id="shopify-section-template--16620970836204__main" class="shopify-section section">
            <link rel="stylesheet" href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/section-main-page.css?3073" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/component-rte.css?v=20306380008624480011668502207" media="print" onload="this.media='all'">

            <noscript>
                <link href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/section-main-page.css?3073" rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <noscript>
                <link href="//chocolate-workdo.myshopify.com/cdn/shop/t/3/assets/component-rte.css?v=20306380008624480011668502207" rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <style data-shopify>
                .section-template--16620970836204__main-padding {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }

                @media screen and (min-width: 750px) {
                    .section-template--16620970836204__main-padding {
                        padding-top: px;
                        padding-bottom: px;
                    }
                }
            </style>
            <div class="common-banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <div class="common-banner-content">
                                <div class="section-title">
                                    <h2>
                                        Contact us
                                    </h2>
                                </div>
                                <p>the act or state of touching; a touching or meeting, as of two things or people. immediate proximity or association. an acquaintance, colleague, or relative through whom a person can gain access to information, favors, influential people, and the like.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rte">

            </div>


        </section>
        <section id="shopify-section-template--16620970836204__form" class="shopify-section contact-page padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 contact-left-column">
                        <div class="contact-left-inner row">
                            <ul class='col-sm-6 col-12'>
                                <li>
                                    <h4>Call us</h4>
                                    <p><a href="tel:+48 0021-32-12">+84 767778778</a></p>
                                </li>
                                <li>
                                    <h4>EMAIL:</h4>
                                    <p><a href="mailto:shop@company.com">nguyenthanhcongvt123@gmail.com</a></p>
                                </li>
                            </ul>
                            <ul class="col-sm-6 col-12">
                                <li>
                                    <h4>ADDRESS:</h4>
                                    <p class="address">mom house,<br><br> VietNam not China</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-12 contact-right-column">
                        <div class="contact-right-inner">
                            <div class="section-title">
                                <h2><span>Contact <b>form</b></span></h2>
                            </div>
                            <form method="post" action="/pages/postcontact" id="ContactForm" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />
                            @csrf    
                            <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="ContactForm-name">Name</label>
                                            <input class="form-control" autocomplete="name" type="text" id="ContactForm-name" name="name" placeholder=" Name">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="ContactForm-email">Email</label>
                                            <input autocomplete="email" type="email" id="ContactForm-email" name="email" spellcheck="false" autocapitalize="off"  aria-required="true" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="ContactForm-phone">Phone number</label>
                                            <input type="tel" id="ContactForm-phone" autocomplete="tel" name="phone" pattern="[0-9\-]*"  placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="ContactForm-body">Description:</label>
                                            <textarea rows="10" id="ContactForm-body" name="description" placeholder="How Can We Help?"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-8 col-12">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" id="ch1">
                                            <label for="ch1">
                                                <span>I have read and agree to the <a href="privacy-policy.html">Terms &amp; Conditions.</a> </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='col-lg-4 col-12'>
                                        <button type="submit" class="btn submit-btn">
                                            Send Message&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.18164 3.99989C0.181641 3.82416 0.324095 3.68171 0.499822 3.68171L6.73168 3.68171L4.72946 1.67942C4.60521 1.55516 4.60521 1.3537 4.72947 1.22944C4.85373 1.10519 5.05519 1.10519 5.17945 1.22945L7.72482 3.7749C7.84907 3.89916 7.84907 4.10062 7.72482 4.22487L5.17945 6.77033C5.05519 6.89459 4.85373 6.89459 4.72947 6.77034C4.60521 6.64608 4.60521 6.44462 4.72946 6.32036L6.73168 4.31807L0.499822 4.31807C0.324095 4.31807 0.181641 4.17562 0.18164 3.99989Z" fill="white"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
@endsection
