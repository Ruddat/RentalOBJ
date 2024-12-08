<?php $page = 'home-03'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')

<body class="body">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
            <span class="icon icon-villa-fill"></span>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">


            <!-- Slider -->
            <section class="flat-slider home-3">
                <div class="container position-relative z-1">
                    <div class="row position-relative">
                        <div class="col-xl-8 col-lg-7">
                            <div class="slider-content">
                                <div class="heading">
                                    <h1 class="title-large title text-white animationtext clip">
                                        Indulge in Your
                                        <br>
                                        <span class="tf-text s1 cd-words-wrapper">
                                            <span class="item-text is-visible">Sanctuary</span>
                                            <span class="item-text is-hidden">Safe House</span>
                                        </span>
                                    </h1>
                                    <p class="subtitle text-white body-2 wow fadeInUp" data-wow-delay=".2s">Discover your private oasis at Homelengo, where every corner, from the spacious garden to the relaxing pool, is crafted for your comfort and enjoyment.</p>
                                </div>
                                <a href="contact.html" class="tf-btn btn-view primary size-1 hover-btn-view">Contact us <span class="icon icon-arrow-right2"></span></a>
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="flat-tab flat-tab-form">
                                <ul class="nav-tab-form style-2 style-3" role="tablist">
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#forRent" class="nav-link-item active"  data-bs-toggle="tab">Rent</a>
                                    </li>
                                    <li class="nav-tab-item" role="presentation">
                                        <a href="#forSale" class="nav-link-item" data-bs-toggle="tab">Sale</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show"  role="tabpanel">
                                        <div class="form-sl flat-filter-form">
                                            <form method="post">
                                                <div class="wd-filter-select">
                                                    <div class="inner-group">
                                                        <div class="form-group-1 form-style">
                                                            <input type="text" class="form-control" placeholder="Search Keyword." value="" name="s" title="Search for" required="">
                                                        </div>
                                                        <div class="form-group-2 form-style">
                                                            <div class="group-ip ip-icon">
                                                                <input type="text" class="form-control" placeholder="Search Location" value="" name="s" title="Search for" required="">
                                                                <a href="#" class="icon-right icon-location"></a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-3 form-style">
                                                            <div class="group-select">
                                                                <div class="nice-select" tabindex="0"><span class="current">Property type</span>
                                                                    <ul class="list">
                                                                        <li data-value class="option selected">Property type</li>
                                                                        <li data-value="villa" class="option">Villa</li>
                                                                        <li data-value="studio" class="option">Studio</li>
                                                                        <li data-value="office" class="option">Office</li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-4 form-style grid-2 gap-10">
                                                            <a class="tf-btn btn-line filter-advanced pull-right">
                                                                <span class="text-1">Advanced</span>
                                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 12.375V3.4375M5.5 12.375C5.86467 12.375 6.21441 12.5199 6.47227 12.7777C6.73013 13.0356 6.875 13.3853 6.875 13.75C6.875 14.1147 6.73013 14.4644 6.47227 14.7223C6.21441 14.9801 5.86467 15.125 5.5 15.125M5.5 12.375C5.13533 12.375 4.78559 12.5199 4.52773 12.7777C4.26987 13.0356 4.125 13.3853 4.125 13.75C4.125 14.1147 4.26987 14.4644 4.52773 14.7223C4.78559 14.9801 5.13533 15.125 5.5 15.125M5.5 15.125V18.5625M16.5 12.375V3.4375M16.5 12.375C16.8647 12.375 17.2144 12.5199 17.4723 12.7777C17.7301 13.0356 17.875 13.3853 17.875 13.75C17.875 14.1147 17.7301 14.4644 17.4723 14.7223C17.2144 14.9801 16.8647 15.125 16.5 15.125M16.5 12.375C16.1353 12.375 15.7856 12.5199 15.5277 12.7777C15.2699 13.0356 15.125 13.3853 15.125 13.75C15.125 14.1147 15.2699 14.4644 15.5277 14.7223C15.7856 14.9801 16.1353 15.125 16.5 15.125M16.5 15.125V18.5625M11 6.875V3.4375M11 6.875C11.3647 6.875 11.7144 7.01987 11.9723 7.27773C12.2301 7.53559 12.375 7.88533 12.375 8.25C12.375 8.61467 12.2301 8.96441 11.9723 9.22227C11.7144 9.48013 11.3647 9.625 11 9.625M11 6.875C10.6353 6.875 10.2856 7.01987 10.0277 7.27773C9.76987 7.53559 9.625 7.88533 9.625 8.25C9.625 8.61467 9.76987 8.96441 10.0277 9.22227C10.2856 9.48013 10.6353 9.625 11 9.625M11 9.625V18.5625" stroke="#161E2D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </a>
                                                            <button type="submit" class="tf-btn btn-search primary">Search <i class="icon icon-search"></i> </button>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="wd-search-form">
                                                    <div class="grid-2 group-box group-price">
                                                        <div class="widget-price">
                                                            <div class="box-title-price">
                                                                <span class="title-price fw-6">Price:</span>
                                                                <div class="caption-price">
                                                                    <span id="slider-range-value1" class="fw-6"></span>
                                                                    <span>-</span>
                                                                    <span id="slider-range-value2" class="fw-6"></span>
                                                                </div>
                                                            </div>
                                                            <div id="slider-range"></div>
                                                            <div class="slider-labels">
                                                                <div>
                                                                    <input type="hidden" name="min-value" value="">
                                                                    <input type="hidden" name="max-value" value="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="widget-price">
                                                            <div class="box-title-price">
                                                                <span class="title-price fw-6">Size:</span>
                                                                <div class="caption-price">
                                                                    <span id="slider-range-value01" class="fw-7"></span>
                                                                    <span>-</span>
                                                                    <span id="slider-range-value02" class="fw-7"></span>
                                                                </div>
                                                            </div>
                                                            <div id="slider-range2"></div>
                                                            <div class="slider-labels">
                                                            <div>
                                                                <input type="hidden" name="min-value2" value="">
                                                                <input type="hidden" name="max-value2" value="">
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-2 group-box">
                                                        <div class="group-select grid-2">
                                                            <div class="box-select">
                                                                <label class="title-select fw-6">Rooms</label>
                                                                <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option">1</li>
                                                                        <li data-value="2" class="option selected">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="4" class="option">4</li>
                                                                        <li data-value="5" class="option">5</li>
                                                                        <li data-value="6" class="option">6</li>
                                                                        <li data-value="7" class="option">7</li>
                                                                        <li data-value="8" class="option">8</li>
                                                                        <li data-value="9" class="option">9</li>
                                                                        <li data-value="10" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="box-select">
                                                                <label class="title-select fw-6">Bathrooms</label>
                                                                <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option">1</li>
                                                                        <li data-value="2" class="option selected">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="4" class="option">4</li>
                                                                        <li data-value="5" class="option">5</li>
                                                                        <li data-value="6" class="option">6</li>
                                                                        <li data-value="7" class="option">7</li>
                                                                        <li data-value="8" class="option">8</li>
                                                                        <li data-value="9" class="option">9</li>
                                                                        <li data-value="10" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="group-select grid-2">
                                                            <div class="box-select">
                                                                <label class="title-select fw-6">Bedrooms</label>
                                                                <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option">1</li>
                                                                        <li data-value="2" class="option selected">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="4" class="option">4</li>
                                                                        <li data-value="5" class="option">5</li>
                                                                        <li data-value="6" class="option">6</li>
                                                                        <li data-value="7" class="option">7</li>
                                                                        <li data-value="8" class="option">8</li>
                                                                        <li data-value="9" class="option">9</li>
                                                                        <li data-value="10" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="box-select">
                                                                <label class="title-select fw-6">Type</label>
                                                                <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option">1</li>
                                                                        <li data-value="2" class="option selected">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="4" class="option">4</li>
                                                                        <li data-value="5" class="option">5</li>
                                                                        <li data-value="6" class="option">6</li>
                                                                        <li data-value="7" class="option">7</li>
                                                                        <li data-value="8" class="option">8</li>
                                                                        <li data-value="9" class="option">9</li>
                                                                        <li data-value="10" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="group-checkbox">
                                                        <div class="text-1 text-black-2">Amenities:</div>
                                                        <div class="group-amenities grid-6">
                                                            <div class="box-amenities">
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb1" checked>
                                                                    <label for="cb1" class="text-cb-amenities">Air Condition</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb2">
                                                                    <label for="cb2" class="text-cb-amenities">Cable TV</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb3">
                                                                    <label for="cb3" class="text-cb-amenities">Ceiling Height</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb4">
                                                                    <label for="cb4" class="text-cb-amenities">Fireplace</label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="box-amenities">
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb5">
                                                                    <label for="cb5" class="text-cb-amenities">Disabled Access</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb6" checked>
                                                                    <label for="cb6" class="text-cb-amenities">Elevator</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb7">
                                                                    <label for="cb7" class="text-cb-amenities">Fence</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb8">
                                                                    <label for="cb8" class="text-cb-amenities">Garden</label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="box-amenities">
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb9" checked>
                                                                    <label for="cb9" class="text-cb-amenities">Floor</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb10">
                                                                    <label for="cb10" class="text-cb-amenities">Furnishing</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb11" checked>
                                                                    <label for="cb11" class="text-cb-amenities">Garage</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb12">
                                                                    <label for="cb12" class="text-cb-amenities">Pet Friendly</label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="box-amenities">
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb13">
                                                                    <label for="cb13" class="text-cb-amenities">Heating</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb14">
                                                                    <label for="cb14" class="text-cb-amenities">Intercom</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb15">
                                                                    <label for="cb15" class="text-cb-amenities">Parking</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb16">
                                                                    <label for="cb16" class="text-cb-amenities">WiFi</label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="box-amenities">
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb17">
                                                                    <label for="cb17" class="text-cb-amenities">Renovation</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb18">
                                                                    <label for="cb18" class="text-cb-amenities">Security</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb19">
                                                                    <label for="cb19" class="text-cb-amenities">Swimming Pool</label>
                                                                </fieldset>

                                                            </div>
                                                            <div class="box-amenities">
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb20">
                                                                    <label for="cb20" class="text-cb-amenities">Window Type</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb21">
                                                                    <label for="cb21" class="text-cb-amenities">Search property</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item mt-16">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb22">
                                                                    <label for="cb22" class="text-cb-amenities">Construction Year</label>
                                                                </fieldset>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="wrap-search-link">
                                <div class="categories-list">
                                    <a href="#"><i class="icon icon-house-fill"></i> Houses</a>
                                    <a href="#"><i class="icon icon-villa-fill"></i> Villa</a>
                                    <a href="#"><i class="icon icon-office-fill"></i> Office</a>
                                    <a href="#"><i class="icon icon-apartment"></i> Apartments</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </section>
            <!-- /Slider -->
            <!-- Location -->
            <section class="flat-section">
                <div class="container">
                    <div class="box-title text-center wow fadeInUp">
                        <div class="text-subtitle text-primary">Explore Cities</div>
                        <h3 class="mt-4 title">Properties By Cities</h3>
                    </div>
                    <div class="wow fadeInUp swiper tf-sw-mobile sw-over" data-screen="575" data-preview="1" data-space="15" data-wow-delay=".2s">
                        <div class="tf-layout-mobile-sm sm-col-2 lg-col-3 swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-1.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Dallas</a></h6>
                                        <p class="mt-4">263 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view active">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-2.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Atlanta</a></h6>
                                        <p class="mt-4">275 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-3.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Orlando</a></h6>
                                        <p class="mt-4">256 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-4.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Miami</a></h6>
                                        <p class="mt-4">312 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-5.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Houston</a></h6>
                                        <p class="mt-4">237 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-6.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Phoenix</a></h6>
                                        <p class="mt-4">221 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-7.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Seattle</a></h6>
                                        <p class="mt-4">188 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-8.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Denver</a></h6>
                                        <p class="mt-4">193 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-location-v3 hover-img not-overlay hover-btn-view">
                                    <div class="img-style">
                                        <img src="{{ URL::asset('/build/images/location/lo-sm-9.jpg') }}" alt="image-location">
                                    </div>
                                    <div class="content">
                                        <h6><a href="topmap-list.html" class="link">Austin</a></h6>
                                        <p class="mt-4">309 properties</p>
                                        <a href="topmap-list.html" class="btn-view style-1"><span class="text">Explore Now</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination sw-pagination-mb text-center d-sm-none d-block"></div>
                        <div class="sec-btn text-center">
                            <a href="topmap-list.html" class="tf-btn btn-view primary size-1 hover-btn-view">View All Cities <span class="icon icon-arrow-right2"></span></a>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Location -->
            <!-- Recommended -->
            <section class="flat-section flat-recommended pt-0">
                <div class="container">
                    <div class="box-title text-center wow fadeInUp">
                        <div class="text-subtitle text-primary">Featured Properties</div>
                        <h3 class="title mt-4">Recommended For You</h3>
                    </div>
                    <div class="flat-tab-recommended flat-animate-tab wow fadeInUp" data-wow-delay=".2s">
                        <ul class="nav-tab-recommended justify-content-md-center" role="tablist">
                            <li class="nav-tab-item" role="presentation">
                                <a href="#viewAll" class="nav-link-item"  data-bs-toggle="tab">View All</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#apartment" class="nav-link-item  active" data-bs-toggle="tab">Apartment</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#villa" class="nav-link-item" data-bs-toggle="tab">Villa</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#studio" class="nav-link-item" data-bs-toggle="tab">Studio</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#house" class="nav-link-item" data-bs-toggle="tab">House</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#office" class="nav-link-item" data-bs-toggle="tab">Office</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="viewAll" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-19.jpg') }}" src="{{ URL::asset('/build/images/home/house-19.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png1.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-20.jpg') }}" src="{{ URL::asset('/build/images/home/house-20.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png2.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-21.jpg') }}" src="{{ URL::asset('/build/images/home/house-21.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png3.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-22.jpg') }}" src="{{ URL::asset('/build/images/home/house-22.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png4.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-23.jpg') }}" src="{{ URL::asset('/build/images/home/house-23.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png5.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-24.jpg') }}" src="{{ URL::asset('/build/images/home/house-24.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png6.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="sidebar-grid.html" class="tf-btn btn-view primary size-1 hover-btn-view">View All Properties <span class="icon icon-arrow-right2"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane active show" id="apartment" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-19.jpg') }}" src="{{ URL::asset('/build/images/home/house-19.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png1.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-20.jpg') }}" src="{{ URL::asset('/build/images/home/house-20.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png2.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-21.jpg') }}" src="{{ URL::asset('/build/images/home/house-21.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png3.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-22.jpg') }}" src="{{ URL::asset('/build/images/home/house-22.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png4.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-23.jpg') }}" src="{{ URL::asset('/build/images/home/house-23.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png5.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-24.jpg') }}" src="{{ URL::asset('/build/images/home/house-24.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png6.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="sidebar-grid.html" class="tf-btn btn-view primary size-1 hover-btn-view">View All Properties <span class="icon icon-arrow-right2"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="villa" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-19.jpg') }}" src="{{ URL::asset('/build/images/home/house-19.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png1.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-20.jpg') }}" src="{{ URL::asset('/build/images/home/house-20.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png2.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-21.jpg') }}" src="{{ URL::asset('/build/images/home/house-21.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png3.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-22.jpg') }}" src="{{ URL::asset('/build/images/home/house-22.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png4.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-23.jpg') }}" src="{{ URL::asset('/build/images/home/house-23.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png5.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-24.jpg') }}" src="{{ URL::asset('/build/images/home/house-24.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png6.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="sidebar-grid.html" class="tf-btn btn-view primary size-1 hover-btn-view">View All Properties <span class="icon icon-arrow-right2"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="studio" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-19.jpg') }}" src="{{ URL::asset('/build/images/home/house-19.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png1.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-20.jpg') }}" src="{{ URL::asset('/build/images/home/house-20.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png2.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-21.jpg') }}" src="{{ URL::asset('/build/images/home/house-21.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png3.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-22.jpg') }}" src="{{ URL::asset('/build/images/home/house-22.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png4.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-23.jpg') }}" src="{{ URL::asset('/build/images/home/house-23.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png5.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-24.jpg') }}" src="{{ URL::asset('/build/images/home/house-24.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png6.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="sidebar-grid.html" class="tf-btn btn-view primary size-1 hover-btn-view">View All Properties <span class="icon icon-arrow-right2"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="house" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-19.jpg') }}" src="{{ URL::asset('/build/images/home/house-19.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png1.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-20.jpg') }}" src="{{ URL::asset('/build/images/home/house-20.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png2.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-21.jpg') }}" src="{{ URL::asset('/build/images/home/house-21.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png3.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-22.jpg') }}" src="{{ URL::asset('/build/images/home/house-22.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png4.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-23.jpg') }}" src="{{ URL::asset('/build/images/home/house-23.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png5.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-24.jpg') }}" src="{{ URL::asset('/build/images/home/house-24.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png6.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="sidebar-grid.html" class="tf-btn btn-view primary size-1 hover-btn-view">View All Properties <span class="icon icon-arrow-right2"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="office" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-19.jpg') }}" src="{{ URL::asset('/build/images/home/house-19.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png1.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-20.jpg') }}" src="{{ URL::asset('/build/images/home/house-20.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png2.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-21.jpg') }}" src="{{ URL::asset('/build/images/home/house-21.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png3.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-22.jpg') }}" src="{{ URL::asset('/build/images/home/house-22.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png4.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-23.jpg') }}" src="{{ URL::asset('/build/images/home/house-23.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png5.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="homelengo-box">
                                            <div class="archive-top">
                                                <a href="property-details-v1.html" class="images-group">
                                                    <div class="images-style">
                                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/home/house-24.jpg') }}" src="{{ URL::asset('/build/images/home/house-24.jpg') }}" alt="img">
                                                    </div>
                                                    <div class="top">
                                                        <ul class="d-flex gap-6">
                                                            <li class="flag-tag primary">Featured</li>
                                                            <li class="flag-tag style-1">For Sale</li>
                                                        </ul>

                                                    </div>
                                                    <div class="bottom">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        145 Brooklyn Ave, Califonia, New York
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="archive-bottom">
                                                <div class="content-top">
                                                    <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                        <ul class="meta-list">
                                                            <li class="item">
                                                                <i class="icon icon-bed"></i>
                                                                <span class="text-variant-1">Beds:</span>
                                                                <span class="fw-6">3</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-bath"></i>
                                                                <span class="text-variant-1">Baths:</span>
                                                                <span class="fw-6">2</span>
                                                            </li>
                                                            <li class="item">
                                                                <i class="icon icon-sqft"></i>
                                                                <span class="text-variant-1">Sqft:</span>
                                                                <span class="fw-6">1150</span>
                                                            </li>
                                                        </ul>

                                                </div>

                                                <div class="content-bottom">
                                                    <div class="d-flex gap-8 align-items-center">
                                                        <div class="avatar avt-40 round">
                                                            <img src="{{ URL::asset('/build/images/avatar/avt-png6.png') }}" alt="avt">
                                                        </div>
                                                        <span>Arlene McCoy</span>
                                                    </div>
                                                    <h6 class="price">$7250,00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="sidebar-grid.html" class="tf-btn btn-view primary size-1 hover-btn-view">View All Properties <span class="icon icon-arrow-right2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Recommended -->
            <!-- Categories -->
            <section class="flat-section flat-categories bg-primary-new">
                <div class="container">
                    <div class="box-title text-center wow fadeInUp">
                        <div class="text-subtitle text-primary">Property Type</div>
                        <h3 class="title mt-4">Try Searching For</h3>
                    </div>
                    <div class="wrap-categories-sw wow fadeInUp" data-wow-delay=".2s">
                        <div class="swiper tf-sw-categories" data-preview="6" data-tablet="4" data-mobile-sm="3" data-mobile="2" data-space="15" data-space-md="30" data-space-lg="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="homelengo-categories style-02">
                                        <div class="icon-box">
                                            <span class="icon icon-apartment1"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Apartment</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homelengo-categories style-02">
                                        <div class="icon-box">
                                            <span class="icon icon-villa-line"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Villa</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>

                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homelengo-categories style-02">
                                        <div class="icon-box">
                                            <span class="icon icon-studio"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Studio</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>

                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homelengo-categories style-02">
                                        <div class="icon-box">
                                            <p class="icon icon-office1"></p>

                                        </div>
                                        <div class="content text-center">
                                            <h6>Office</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>

                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homelengo-categories style-02">
                                        <div class="icon-box">
                                            <p class="icon icon-townhouse"></p>

                                        </div>
                                        <div class="content text-center">
                                            <h6>Townhouse</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>

                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homelengo-categories style-02">
                                        <div class="icon-box">
                                            <span class="icon icon-commercial"></span>

                                        </div>
                                        <div class="content text-center">
                                            <h6>Commercial</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>

                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homelengo-categories style-02">
                                        <div class="icon-box">
                                            <span class="icon icon-villa-line"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Villa</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>

                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homelengo-categories style-02">
                                        <div class="icon-box">
                                            <span class="icon icon-studio"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Studio</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="sw-pagination sw-pagination-category text-center"></div>

                        </div>


                    </div>
                </div>
            </section>
            <!-- End Categories -->
            <!-- Service  -->
            <section class="flat-section">
                <div class="container">
                    <div class="box-title text-center wow fadeInUp">
                        <div class="text-subtitle text-primary">Explore Cities</div>
                        <h3 class="title mt-4">Our Location For You</h3>
                    </div>
                    <div class="tf-grid-layout md-col-3 wow fadeInUp" data-wow-delay=".2s">
                        <div class="box-service">
                            <div class="image">
                                <img class="lazyload" data-src="{{ URL::asset('/build/images/service/home-1.png') }}" src="{{ URL::asset('/build/images/service/home-1.png') }}" alt="image-location">
                            </div>
                            <div class="content">
                                <h5 class="title">Buy A New Home</h5>
                                <p class="description">Discover your dream home effortlessly. Explore diverse properties and expert guidance for a seamless buying experience.</p>
                                <a href="sidebar-grid.html" class="tf-btn btn-line">Learn More <span class="icon icon-arrow-right2"></span></a>
                            </div>
                        </div>
                        <div class="box-service">
                            <div class="image">
                                <img class="lazyload" data-src="{{ URL::asset('/build/images/service/home-2.png') }}" src="{{ URL::asset('/build/images/service/home-2.png') }}" alt="image-location">
                            </div>
                            <div class="content">
                                <h5 class="title">Sell a home</h5>
                                <p class="description">Sell confidently with expert guidance and effective strategies, showcasing your property's best features for a successful sale.</p>
                                <a href="sidebar-grid.html" class="tf-btn btn-line">Learn More <span class="icon icon-arrow-right2"></span></a>
                            </div>
                        </div>
                        <div class="box-service">
                            <div class="image">
                                <img class="lazyload" data-src="{{ URL::asset('/build/images/service/home-3.png') }}" src="{{ URL::asset('/build/images/service/home-3.png') }}" alt="image-location">
                            </div>
                            <div class="content">
                                <h5 class="title">Rent a home</h5>
                                <p class="description">Discover your perfect rental effortlessly. Explore a diverse variety of listings tailored precisely to suit your unique lifestyle needs.</p>
                                <a href="sidebar-grid.html" class="tf-btn btn-line">Learn More <span class="icon icon-arrow-right2"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Service -->
            <!-- partner -->
            <section class="flat-section pt-0">
                <div class="container2">
                    <h6 class="mb-20 text-center text-capitalize text-black-4">Trusted by over 150+ major companies</h6>
                    <div class="swiper tf-sw-partner" data-preview="6" data-tablet="4" data-mobile-sm="3" data-mobile="2" data-space="15" data-space-md="30" data-space-lg="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="partner-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80" fill="white"/>
                                        <g clip-path="url(#clip0_13428_2167)">
                                        <path d="M54.2977 29.8287C54.2977 30.0109 54.1486 30.16 53.9663 30.16H49.26C49.0777 30.16 48.9286 30.0109 48.9286 29.8287V25.1243C48.9286 24.9421 49.0777 24.793 49.26 24.793H53.9663C54.1486 24.793 54.2977 24.9421 54.2977 25.1243V29.8287Z" fill="#B9B9B9"/>
                                        <path d="M61.0588 29.8287C61.0588 30.0109 60.9097 30.16 60.7274 30.16H56.0211C55.8388 30.16 55.6897 30.0109 55.6897 29.8287V25.1243C55.6897 24.9421 55.8388 24.793 56.0211 24.793H60.7274C60.9097 24.793 61.0588 24.9421 61.0588 25.1243V29.8287Z" fill="#B9B9B9"/>
                                        <path d="M104.31 29.8287C104.31 30.0109 104.161 30.16 103.979 30.16H99.2726C99.0903 30.16 98.9412 30.0109 98.9412 29.8287V25.1243C98.9412 24.9421 99.0903 24.793 99.2726 24.793H103.979C104.161 24.793 104.31 24.9421 104.31 25.1243V29.8287Z" fill="#B9B9B9"/>
                                        <path d="M111.071 29.8287C111.071 30.0109 110.922 30.16 110.74 30.16H106.034C105.851 30.16 105.702 30.0109 105.702 29.8287V25.1243C105.702 24.9421 105.851 24.793 106.034 24.793H110.74C110.922 24.793 111.071 24.9421 111.071 25.1243V29.8287Z" fill="#B9B9B9"/>
                                        <path d="M121.777 25.3895L115.894 19.5089V15.3511C115.894 15.1192 115.695 14.937 115.463 14.937H113.607C113.375 14.937 113.193 15.1192 113.193 15.3511V16.8254L105.404 9.03987C105.189 8.82453 104.824 8.82453 104.592 9.03987L103.78 9.85155C103.565 10.0669 103.2 10.4313 102.968 10.6632L95.9252 17.7033L82.0052 3.78878C81.7898 3.55687 81.4252 3.20901 81.1932 2.9771L80.3978 2.16541C80.1823 1.95007 79.8178 1.95007 79.5858 2.16541L71.7972 9.95094V8.47666C71.7972 8.24475 71.6149 8.06254 71.3663 8.06254H69.5104C69.2784 8.06254 69.0795 8.26132 69.0795 8.47666V12.6345L64.0418 17.6702L56.9989 10.6301C56.7835 10.4148 56.4189 10.0503 56.1869 9.81842L55.3749 9.00674C55.1595 8.7914 54.7949 8.7914 54.5629 9.00674L46.7743 16.7923V15.318C46.7743 15.0861 46.5921 14.9039 46.3435 14.9039H44.4875C44.2555 14.9039 44.0566 15.0861 44.0566 15.318V19.4758L38.1738 25.3563C37.9583 25.5717 37.9583 25.9361 38.1738 26.168L38.9858 26.9797C39.2012 27.1951 39.5658 27.1951 39.7978 26.9797L54.5463 12.2203C54.7618 12.005 55.1264 12.005 55.3583 12.2203L70.1235 26.9797C70.3389 27.1951 70.7035 27.1951 70.9355 26.9797L71.7475 26.168C71.9629 25.9527 71.9629 25.5883 71.7475 25.3563L65.6492 19.2604L79.5692 5.34589C79.7846 5.13054 80.1492 5.13054 80.3812 5.34589L94.3012 19.2604L88.2029 25.3563C87.9875 25.5717 87.9875 25.9361 88.2029 26.168L89.0149 26.9797C89.2303 27.1951 89.5949 27.1951 89.8269 26.9797L104.575 12.2203C104.791 12.005 105.155 12.005 105.387 12.2203L120.136 26.9797C120.351 27.1951 120.716 27.1951 120.948 26.9797L121.76 26.168C122.009 25.9858 122.009 25.6214 121.777 25.3895Z" fill="#B9B9B9"/>
                                        <path d="M55.7229 13.7941C55.64 13.7113 55.4909 13.5622 55.408 13.4794L55.0931 13.1647C55.0103 13.0818 54.8611 13.0818 54.7783 13.1647L48.5143 19.4428C48.4314 19.5256 48.4314 19.6747 48.5143 19.7575L48.8291 20.0722C48.912 20.1551 49.0611 20.1551 49.144 20.0722L54.7949 14.4236C54.8777 14.3408 55.0269 14.3408 55.1097 14.4236L60.7606 20.0722C60.8434 20.1551 60.9926 20.1551 61.0754 20.0722L61.3903 19.7575C61.4731 19.6747 61.4731 19.5256 61.3903 19.4428L55.7229 13.7941Z" fill="#B9B9B9"/>
                                        <path d="M80.779 6.86981C80.6961 6.78698 80.547 6.6379 80.4641 6.55508L80.1493 6.24034C80.0664 6.15752 79.9173 6.15752 79.8344 6.24034L73.5538 12.5185C73.471 12.6013 73.471 12.7504 73.5538 12.8332L73.8687 13.1479C73.9516 13.2308 74.1007 13.2308 74.1836 13.1479L79.8344 7.49928C79.9173 7.41645 80.0664 7.41645 80.1493 7.49928L85.8001 13.1479C85.883 13.2308 86.0321 13.2308 86.115 13.1479L86.4298 12.8332C86.5127 12.7504 86.5127 12.6178 86.4298 12.5185L80.779 6.86981Z" fill="#B9B9B9"/>
                                        <path d="M105.785 13.7941C105.702 13.7113 105.553 13.5622 105.47 13.4794L105.155 13.1647C105.073 13.0818 104.923 13.0818 104.841 13.1647L98.5601 19.4428C98.4772 19.5256 98.4772 19.6747 98.5601 19.7575L98.8749 20.0722C98.9578 20.1551 99.1069 20.1551 99.1898 20.0722L104.857 14.407C104.94 14.3242 105.089 14.3242 105.172 14.407L110.823 20.0557C110.906 20.1385 111.055 20.1385 111.138 20.0557L111.453 19.7409C111.535 19.6581 111.535 19.509 111.453 19.4262L105.785 13.7941Z" fill="#B9B9B9"/>
                                        <path d="M80 36.0408C99.952 36.0408 117.219 40.2483 125.571 46.3774C123.069 38.5422 103.631 32.4297 80 32.4297C56.3692 32.4297 36.9309 38.5256 34.4286 46.3774C42.7806 40.2483 60.048 36.0408 80 36.0408Z" fill="#E3E3E3"/>
                                        <path d="M54.2977 34.0527V31.5183C54.2977 31.3361 54.1486 31.187 53.9663 31.187H49.26C49.0777 31.187 48.9286 31.3361 48.9286 31.5183V35.5105C50.6023 34.9804 52.4086 34.5 54.2977 34.0527Z" fill="#B9B9B9"/>
                                        <path d="M61.0588 32.7607V31.5183C61.0588 31.3361 60.9097 31.187 60.7274 31.187H56.0211C55.8388 31.187 55.6897 31.3361 55.6897 31.5183V33.7546C57.4131 33.3736 59.2028 33.0423 61.0588 32.7607Z" fill="#B9B9B9"/>
                                        <path d="M104.31 33.738V31.5017C104.31 31.3195 104.161 31.1704 103.979 31.1704H99.2726C99.0903 31.1704 98.9412 31.3195 98.9412 31.5017V32.7441C100.797 33.0422 102.587 33.3735 104.31 33.738Z" fill="#B9B9B9"/>
                                        <path d="M111.071 35.5105V31.5183C111.071 31.3361 110.922 31.187 110.74 31.187H106.034C105.851 31.187 105.702 31.3361 105.702 31.5183V34.0527C107.591 34.5 109.398 34.9804 111.071 35.5105Z" fill="#B9B9B9"/>
                                        <path d="M79.304 23.7496C79.304 23.9318 79.1548 24.0809 78.9725 24.0809H74.2662C74.084 24.0809 73.9348 23.9318 73.9348 23.7496V19.0452C73.9348 18.863 74.084 18.7139 74.2662 18.7139H78.9725C79.1548 18.7139 79.304 18.863 79.304 19.0452V23.7496Z" fill="#B9B9B9"/>
                                        <path d="M86.0651 23.7496C86.0651 23.9318 85.9159 24.0809 85.7336 24.0809H81.0274C80.8451 24.0809 80.6959 23.9318 80.6959 23.7496V19.0452C80.6959 18.863 80.8451 18.7139 81.0274 18.7139H85.7336C85.9159 18.7139 86.0651 18.863 86.0651 19.0452V23.7496Z" fill="#B9B9B9"/>
                                        <path d="M79.304 30.1437C79.304 30.3259 79.1548 30.475 78.9725 30.475H74.2662C74.084 30.475 73.9348 30.3259 73.9348 30.1437V25.4392C73.9348 25.257 74.084 25.1079 74.2662 25.1079H78.9725C79.1548 25.1079 79.304 25.257 79.304 25.4392V30.1437Z" fill="#B9B9B9"/>
                                        <path d="M86.0651 30.1437C86.0651 30.3259 85.9159 30.475 85.7336 30.475H81.0274C80.8451 30.475 80.6959 30.3259 80.6959 30.1437V25.4392C80.6959 25.257 80.8451 25.1079 81.0274 25.1079H85.7336C85.9159 25.1079 86.0651 25.257 86.0651 25.4392V30.1437Z" fill="#B9B9B9"/>
                                        <path d="M22 52.7881H29.656C31.4291 52.7881 32.7549 53.1691 33.6331 53.9311C34.5114 54.6931 34.9589 55.7532 34.9589 57.1281C34.9589 57.8901 34.8429 58.5196 34.6274 59.0331C34.3954 59.53 34.1469 59.9441 33.8486 60.2423C33.5503 60.557 33.252 60.7724 32.9537 60.9049C32.6554 61.0374 32.44 61.1368 32.3074 61.17V61.2196C32.5394 61.2528 32.8046 61.319 33.0863 61.4516C33.368 61.5675 33.6166 61.7663 33.8651 62.0313C34.0971 62.2964 34.296 62.6277 34.4617 63.0584C34.6109 63.4725 34.6937 64.0026 34.6937 64.632C34.6937 65.5762 34.76 66.4376 34.9091 67.1996C35.0583 67.9781 35.2737 68.5248 35.572 68.8561H32.556C32.3406 68.5082 32.2246 68.1272 32.1914 67.7131C32.1583 67.299 32.1417 66.8849 32.1417 66.5039C32.1417 65.775 32.092 65.129 32.0091 64.5989C31.9263 64.0688 31.7606 63.6216 31.512 63.2737C31.28 62.9258 30.9486 62.6608 30.5343 62.4951C30.12 62.3295 29.5897 62.2467 28.9434 62.2467H24.8171V68.8561H22V52.7881ZM24.8171 60.0932H29.424C30.3189 60.0932 30.9983 59.8779 31.4623 59.4472C31.9263 59.0165 32.1583 58.387 32.1583 57.5257C32.1583 57.0121 32.0754 56.598 31.9263 56.2833C31.7771 55.9686 31.5783 55.7035 31.3131 55.5379C31.048 55.3557 30.7497 55.2397 30.4183 55.1734C30.0869 55.1072 29.7389 55.0906 29.3743 55.0906H24.8171V60.0932Z" fill="#B9B9B9"/>
                                        <path d="M39.4663 63.6876C39.4663 64.1349 39.5326 64.5656 39.6652 64.9963C39.7978 65.4104 39.9801 65.7748 40.2452 66.0895C40.4938 66.4043 40.8252 66.6528 41.2063 66.835C41.5875 67.0172 42.0681 67.1166 42.5983 67.1166C43.3441 67.1166 43.9572 66.9509 44.4046 66.6362C44.8686 66.3215 45.2001 65.8245 45.4321 65.195H47.8515C47.7189 65.8245 47.4869 66.3877 47.1555 66.8847C46.8241 67.3816 46.4263 67.7957 45.9623 68.127C45.4983 68.4583 44.9846 68.7234 44.4046 68.889C43.8246 69.0547 43.2281 69.1541 42.5983 69.1541C41.6869 69.1541 40.8749 69.005 40.1789 68.7068C39.4663 68.4086 38.8863 67.9945 38.3892 67.4479C37.9086 66.9012 37.5275 66.2718 37.2955 65.5098C37.0469 64.7643 36.9309 63.9361 36.9309 63.0416C36.9309 62.2133 37.0635 61.4348 37.3286 60.6894C37.5938 59.9439 37.9583 59.2979 38.4555 58.7347C38.9361 58.1715 39.5326 57.7242 40.2121 57.3929C40.9081 57.0616 41.6869 56.896 42.5486 56.896C43.4601 56.896 44.2886 57.0948 45.0178 57.4758C45.7469 57.8568 46.3435 58.3703 46.8241 58.9997C47.3046 59.6292 47.6526 60.3581 47.8681 61.1698C48.0835 61.9814 48.1332 62.8263 48.0338 63.7042H39.4663V63.6876ZM45.4486 61.998C45.4155 61.6004 45.3326 61.2029 45.1835 60.8219C45.0343 60.4409 44.8521 60.1262 44.6035 59.8446C44.3549 59.563 44.0566 59.3476 43.7086 59.1654C43.3606 58.9997 42.9629 58.9004 42.5321 58.9004C42.0846 58.9004 41.6703 58.9832 41.3058 59.1323C40.9412 59.2813 40.6263 59.5133 40.3612 59.7783C40.0961 60.0599 39.8972 60.3746 39.7315 60.7556C39.5823 61.1366 39.4829 61.5342 39.4663 61.9649H45.4486V61.998Z" fill="#B9B9B9"/>
                                        <path d="M59.6834 66.2556C59.6834 66.5703 59.7165 66.8022 59.7994 66.9347C59.8822 67.0673 60.0479 67.1335 60.2799 67.1335C60.3628 67.1335 60.4457 67.1335 60.5451 67.1335C60.6445 67.1335 60.7771 67.1169 60.9097 67.0838V68.8563C60.8268 68.8894 60.7108 68.9225 60.5617 68.9557C60.4125 68.9888 60.2799 69.0219 60.1308 69.055C59.9817 69.0882 59.8325 69.1047 59.6834 69.1213C59.5342 69.1379 59.4017 69.1379 59.3022 69.1379C58.7719 69.1379 58.3411 69.0385 57.9931 68.8231C57.6451 68.6078 57.4297 68.2434 57.3137 67.7299C56.7999 68.2268 56.1868 68.5912 55.4411 68.8066C54.6954 69.0219 53.9828 69.1379 53.2868 69.1379C52.7565 69.1379 52.2594 69.0716 51.7788 68.9225C51.2982 68.7734 50.8839 68.5747 50.5028 68.2931C50.1382 68.0115 49.8399 67.6636 49.6245 67.2329C49.4091 66.8022 49.2931 66.3053 49.2931 65.7421C49.2931 65.0298 49.4257 64.4334 49.6908 63.9862C49.9559 63.5389 50.3039 63.1911 50.7182 62.926C51.1491 62.6775 51.6297 62.4953 52.1599 62.3794C52.6902 62.2634 53.2205 62.1806 53.7674 62.1143C54.2314 62.0315 54.6788 61.9653 55.0931 61.9156C55.5074 61.8824 55.8885 61.8162 56.2034 61.7168C56.5182 61.634 56.7834 61.4849 56.9657 61.3027C57.1479 61.1204 57.2474 60.8388 57.2474 60.4578C57.2474 60.1265 57.1645 59.8615 57.0154 59.6462C56.8662 59.4308 56.6674 59.2817 56.4354 59.1658C56.2034 59.0498 55.9382 58.9836 55.6565 58.9339C55.3748 58.9007 55.1097 58.8842 54.8445 58.8842C54.1319 58.8842 53.5354 59.0333 53.0714 59.3314C52.6074 59.6296 52.3422 60.0934 52.2925 60.7229H49.7239C49.7737 59.9775 49.9559 59.348 50.2708 58.851C50.5857 58.3541 50.9834 57.9565 51.4805 57.6584C51.9611 57.3602 52.5245 57.1448 53.1377 57.0289C53.7508 56.9129 54.3805 56.8467 55.0268 56.8467C55.5902 56.8467 56.1537 56.9129 56.7171 57.0289C57.2639 57.1448 57.7777 57.3436 58.2085 57.6087C58.6559 57.8737 59.0039 58.2216 59.2691 58.6523C59.5342 59.0829 59.6668 59.5965 59.6668 60.2094V66.2556H59.6834ZM57.1314 63.0088C56.7337 63.2573 56.2697 63.423 55.6897 63.4727C55.1262 63.5224 54.5462 63.6052 53.9828 63.7046C53.7177 63.7543 53.4525 63.8205 53.2039 63.9034C52.9554 63.9862 52.7234 64.1021 52.5245 64.2346C52.3257 64.3837 52.1765 64.5659 52.0605 64.7979C51.9445 65.0298 51.8948 65.3114 51.8948 65.6427C51.8948 65.9243 51.9777 66.1727 52.1434 66.355C52.3091 66.5537 52.5079 66.7028 52.7399 66.8188C52.9719 66.9347 53.2205 67.0176 53.5022 67.0507C53.7839 67.1004 54.0325 67.117 54.2479 67.117C54.5297 67.117 54.8445 67.0838 55.1759 67.001C55.5074 66.9182 55.8222 66.8022 56.1039 66.62C56.4022 66.4378 56.6342 66.2059 56.8331 65.9408C57.0319 65.6592 57.1314 65.3279 57.1314 64.9138V63.0088Z" fill="#B9B9B9"/>
                                        <path d="M62.5171 52.7881H65.0857V68.823H62.5171V52.7881Z" fill="#B9B9B9"/>
                                        <path d="M74.4817 52.7881H86.0319V55.2066H77.2822V59.4141H85.3691V61.7H77.2822V66.3879H86.1811V68.8064H74.4651V52.7881H74.4817Z" fill="#B9B9B9"/>
                                        <path d="M90.2081 65.0956C90.2909 65.841 90.5726 66.3711 91.0698 66.6693C91.5669 66.9675 92.1635 67.1165 92.8429 67.1165C93.0749 67.1165 93.3566 67.1 93.6715 67.0668C93.9864 67.0337 94.2681 66.9509 94.5332 66.8515C94.7984 66.7521 95.0304 66.5865 95.1961 66.3877C95.3618 66.1889 95.4446 65.9239 95.4281 65.5926C95.4115 65.2613 95.2955 64.9962 95.0635 64.7809C94.8315 64.5655 94.5498 64.3999 94.2018 64.2674C93.8538 64.1348 93.4561 64.0355 92.9921 63.9361C92.5446 63.8532 92.0806 63.7539 91.6166 63.6379C91.1361 63.5385 90.6721 63.406 90.2412 63.2569C89.7938 63.1078 89.3961 62.909 89.0481 62.644C88.7001 62.3955 88.4184 62.0642 88.2029 61.6667C87.9875 61.2691 87.8881 60.7722 87.8881 60.1924C87.8881 59.5629 88.0372 59.0328 88.3521 58.6022C88.6669 58.1715 89.0481 57.8236 89.5286 57.5751C89.9926 57.3101 90.5229 57.1279 91.1029 57.0285C91.6829 56.9291 92.2298 56.8794 92.7601 56.8794C93.3566 56.8794 93.9366 56.9457 94.4835 57.0782C95.0304 57.2107 95.5275 57.4095 95.9749 57.6911C96.4224 57.9727 96.7869 58.3537 97.0686 58.8009C97.3669 59.2647 97.5492 59.8114 97.6155 60.4574H94.9475C94.8315 59.8445 94.5498 59.4304 94.1024 59.2151C93.6549 58.9997 93.1578 58.9003 92.5778 58.9003C92.3955 58.9003 92.1801 58.9169 91.9315 58.95C91.6829 58.9831 91.4509 59.0328 91.2355 59.1157C91.0201 59.1985 90.8378 59.3144 90.6886 59.4801C90.5395 59.6292 90.4566 59.8445 90.4566 60.093C90.4566 60.4077 90.5726 60.6562 90.7881 60.855C91.0035 61.0538 91.2852 61.2029 91.6498 61.3354C91.9978 61.4679 92.3955 61.5673 92.8595 61.6667C93.3069 61.7495 93.7709 61.8489 94.2515 61.9648C94.7155 62.0642 95.1795 62.1967 95.6269 62.3458C96.0744 62.4949 96.4721 62.6937 96.8366 62.9587C97.1846 63.2072 97.4664 63.5385 97.6983 63.9195C97.9138 64.3171 98.0298 64.7809 98.0298 65.3607C98.0298 66.0564 97.8806 66.6362 97.5658 67.1165C97.2509 67.5969 96.8366 67.9779 96.3395 68.2927C95.8424 68.5908 95.2789 68.8062 94.6658 68.9387C94.0526 69.0712 93.4395 69.1375 92.8429 69.1375C92.1138 69.1375 91.4344 69.0546 90.8046 68.889C90.1749 68.7233 89.6446 68.4749 89.1806 68.1436C88.7166 67.8123 88.3686 67.3816 88.1035 66.8846C87.8384 66.3877 87.7058 65.7913 87.6892 65.0956H90.2081Z" fill="#B9B9B9"/>
                                        <path d="M98.7754 57.2111H100.714V53.7324H103.283V57.2111H105.603V59.116H103.283V65.3113C103.283 65.5764 103.299 65.8083 103.316 66.0071C103.333 66.2058 103.399 66.3715 103.465 66.504C103.548 66.6365 103.664 66.7359 103.83 66.8022C103.995 66.8684 104.227 66.9016 104.509 66.9016C104.691 66.9016 104.874 66.9016 105.056 66.885C105.238 66.885 105.421 66.8519 105.603 66.8022V68.7734C105.321 68.8065 105.039 68.8397 104.774 68.8562C104.509 68.8894 104.227 68.9059 103.946 68.9059C103.266 68.9059 102.736 68.8397 102.322 68.7071C101.907 68.5746 101.593 68.3924 101.361 68.1439C101.129 67.8955 100.963 67.5807 100.897 67.2163C100.814 66.8353 100.764 66.4212 100.747 65.9408V59.0829H98.8085V57.2111H98.7754Z" fill="#B9B9B9"/>
                                        <path d="M117.153 66.2556C117.153 66.5703 117.186 66.8022 117.269 66.9347C117.352 67.0673 117.518 67.1335 117.75 67.1335C117.833 67.1335 117.915 67.1335 118.015 67.1335C118.114 67.1335 118.247 67.1169 118.379 67.0838V68.8563C118.297 68.8894 118.181 68.9225 118.031 68.9557C117.882 68.9888 117.75 69.0219 117.601 69.055C117.451 69.0882 117.302 69.1047 117.153 69.1213C117.004 69.1379 116.871 69.1379 116.772 69.1379C116.242 69.1379 115.811 69.0385 115.463 68.8231C115.115 68.6078 114.899 68.2434 114.783 67.7299C114.27 68.2268 113.657 68.5912 112.911 68.8066C112.165 69.0385 111.453 69.1379 110.757 69.1379C110.226 69.1379 109.729 69.0716 109.249 68.9225C108.768 68.7734 108.354 68.5747 107.973 68.2931C107.608 68.0115 107.31 67.6636 107.094 67.2329C106.879 66.8022 106.763 66.3053 106.763 65.7421C106.763 65.0298 106.895 64.4334 107.161 63.9862C107.426 63.5389 107.774 63.1911 108.188 62.926C108.619 62.6775 109.099 62.4953 109.63 62.3794C110.16 62.2634 110.69 62.1806 111.237 62.1143C111.701 62.0315 112.149 61.9653 112.563 61.9156C112.977 61.8824 113.358 61.8162 113.673 61.7168C113.988 61.634 114.253 61.4849 114.435 61.3027C114.618 61.1204 114.717 60.8388 114.717 60.4578C114.717 60.1265 114.634 59.8615 114.485 59.6462C114.336 59.4308 114.137 59.2817 113.905 59.1658C113.673 59.0498 113.408 58.9836 113.126 58.9339C112.845 58.9007 112.579 58.8842 112.314 58.8842C111.602 58.8842 111.005 59.0333 110.541 59.3314C110.077 59.6296 109.812 60.0934 109.762 60.7229H107.194C107.243 59.9775 107.426 59.348 107.741 58.851C108.055 58.3541 108.453 57.9565 108.95 57.6584C109.431 57.3602 109.994 57.1448 110.607 57.0289C111.221 56.9129 111.85 56.8467 112.497 56.8467C113.06 56.8467 113.623 56.9129 114.187 57.0289C114.734 57.1448 115.247 57.3436 115.678 57.6087C116.126 57.8737 116.474 58.2216 116.739 58.6523C117.004 59.0829 117.137 59.5965 117.137 60.2094V66.2556H117.153ZM114.601 63.0088C114.203 63.2573 113.739 63.423 113.159 63.4727C112.596 63.5224 112.016 63.6052 111.453 63.7046C111.187 63.7543 110.922 63.8205 110.674 63.9034C110.425 63.9862 110.193 64.1021 109.994 64.2346C109.795 64.3837 109.646 64.5659 109.53 64.7979C109.414 65.0298 109.365 65.3114 109.365 65.6427C109.365 65.9243 109.447 66.1727 109.613 66.355C109.779 66.5537 109.978 66.7028 110.21 66.8188C110.442 66.9347 110.69 67.0176 110.972 67.0507C111.254 67.1004 111.502 67.117 111.718 67.117C111.999 67.117 112.314 67.0838 112.646 67.001C112.977 66.9182 113.292 66.8022 113.574 66.62C113.872 66.4378 114.104 66.2059 114.303 65.9408C114.502 65.6592 114.601 65.3279 114.601 64.9138V63.0088Z" fill="#B9B9B9"/>
                                        <path d="M118.761 57.2111H120.699V53.7324H123.251V57.2111H125.571V59.116H123.251V65.3113C123.251 65.5764 123.268 65.8083 123.285 66.0071C123.301 66.2058 123.367 66.3715 123.434 66.504C123.517 66.6365 123.633 66.7359 123.798 66.8022C123.964 66.8684 124.196 66.9016 124.478 66.9016C124.66 66.9016 124.842 66.9016 125.025 66.885C125.207 66.885 125.389 66.8519 125.571 66.8022V68.7734C125.29 68.8065 125.008 68.8397 124.743 68.8562C124.478 68.8894 124.196 68.9059 123.914 68.9059C123.235 68.9059 122.705 68.8397 122.29 68.7071C121.876 68.5746 121.561 68.3924 121.329 68.1439C121.097 67.8955 120.931 67.5807 120.865 67.2163C120.782 66.8353 120.733 66.4212 120.716 65.9408V59.0829H118.777V57.2111H118.761Z" fill="#B9B9B9"/>
                                        <path d="M129.416 63.6876C129.416 64.1349 129.482 64.5656 129.615 64.9963C129.747 65.4104 129.93 65.7748 130.195 66.0895C130.443 66.4043 130.775 66.6528 131.156 66.835C131.554 67.0172 132.018 67.1166 132.548 67.1166C133.294 67.1166 133.907 66.9509 134.354 66.6362C134.818 66.3215 135.15 65.8245 135.382 65.195H137.801C137.669 65.8245 137.437 66.3877 137.105 66.8847C136.774 67.3816 136.376 67.7957 135.912 68.127C135.448 68.4583 134.934 68.7234 134.354 68.889C133.774 69.0547 133.178 69.1541 132.548 69.1541C131.637 69.1541 130.825 69.005 130.129 68.7068C129.416 68.4086 128.836 67.9945 128.339 67.4479C127.858 66.9012 127.477 66.2718 127.245 65.5098C126.997 64.7643 126.881 63.9361 126.881 63.0416C126.881 62.2133 127.013 61.4348 127.278 60.6894C127.543 59.9439 127.908 59.2979 128.405 58.7347C128.886 58.1715 129.482 57.7242 130.162 57.3929C130.858 57.0616 131.637 56.896 132.498 56.896C133.41 56.896 134.238 57.0948 134.967 57.4758C135.697 57.8568 136.293 58.3703 136.774 58.9997C137.254 59.6292 137.602 60.3581 137.818 61.1698C138.033 61.9814 138.083 62.8263 137.983 63.7042H129.416V63.6876ZM135.382 61.998C135.349 61.6004 135.266 61.2029 135.117 60.8219C134.967 60.4409 134.785 60.1262 134.537 59.8446C134.288 59.563 133.99 59.3476 133.642 59.1654C133.294 58.9997 132.896 58.9004 132.465 58.9004C132.018 58.9004 131.603 58.9832 131.239 59.1323C130.874 59.2813 130.559 59.5133 130.294 59.7783C130.029 60.0599 129.83 60.3746 129.665 60.7556C129.515 61.1366 129.416 61.5342 129.399 61.9649H135.382V61.998Z" fill="#B9B9B9"/>
                                        <path d="M37.1132 73.71H37.8589L38.6543 76.0125H38.6709L39.4497 73.71H40.1623L38.9692 76.9567C38.9194 77.0892 38.8532 77.2217 38.8034 77.3543C38.7537 77.4868 38.6874 77.5862 38.6046 77.6855C38.5217 77.7849 38.4389 77.8678 38.3229 77.9175C38.2069 77.9672 38.0577 78.0003 37.8754 78.0003C37.7097 78.0003 37.5606 77.9837 37.4114 77.9672V77.4039C37.4612 77.4039 37.5274 77.4205 37.5772 77.4371C37.6269 77.4536 37.6766 77.4536 37.7429 77.4536C37.8257 77.4536 37.892 77.4371 37.9417 77.4205C37.9914 77.4039 38.0412 77.3708 38.0743 77.3377C38.1074 77.3046 38.1406 77.2549 38.1572 77.2052C38.1737 77.1555 38.2069 77.0892 38.2234 77.023L38.3063 76.791L37.1132 73.71Z" fill="#B9B9B9"/>
                                        <path d="M43.1285 76.8738C42.88 76.8738 42.6645 76.8406 42.4657 76.7578C42.2668 76.675 42.1177 76.559 41.9851 76.4265C41.8525 76.2774 41.7531 76.1118 41.6868 75.913C41.6205 75.7142 41.5874 75.4989 41.5874 75.267C41.5874 75.035 41.6205 74.8197 41.6868 74.6209C41.7531 74.4221 41.8525 74.2565 41.9851 74.1074C42.1177 73.9583 42.2834 73.8589 42.4657 73.7761C42.6645 73.6933 42.88 73.6602 43.1285 73.6602C43.3771 73.6602 43.5925 73.6933 43.7914 73.7761C43.9903 73.8589 44.1394 73.9749 44.272 74.1074C44.4045 74.2565 44.504 74.4221 44.5703 74.6209C44.6365 74.8197 44.6697 75.035 44.6697 75.267C44.6697 75.4989 44.6365 75.7308 44.5703 75.913C44.504 76.1118 44.4045 76.2774 44.272 76.4265C44.1394 76.5756 43.9737 76.675 43.7914 76.7578C43.5925 76.8241 43.3771 76.8738 43.1285 76.8738ZM43.1285 76.3271C43.2777 76.3271 43.4103 76.294 43.5263 76.2277C43.6423 76.1615 43.7251 76.0786 43.808 75.9792C43.8743 75.8799 43.924 75.7639 43.9737 75.6314C44.0068 75.4989 44.0234 75.3663 44.0234 75.2338C44.0234 75.1013 44.0068 74.9688 43.9737 74.8363C43.9405 74.7037 43.8908 74.5878 43.808 74.4884C43.7417 74.389 43.6423 74.3062 43.5263 74.2399C43.4103 74.1737 43.2777 74.1405 43.1285 74.1405C42.9794 74.1405 42.8468 74.1737 42.7308 74.2399C42.6148 74.3062 42.532 74.389 42.4491 74.4884C42.3828 74.5878 42.3331 74.7037 42.2834 74.8363C42.2503 74.9688 42.2337 75.1013 42.2337 75.2338C42.2337 75.3663 42.2503 75.4989 42.2834 75.6314C42.3165 75.7639 42.3663 75.8799 42.4491 75.9792C42.5154 76.0786 42.6148 76.1615 42.7308 76.2277C42.8468 76.294 42.9794 76.3271 43.1285 76.3271Z" fill="#B9B9B9"/>
                                        <path d="M49.144 76.7744H48.4812V76.3437H48.4646C48.3818 76.4928 48.2492 76.6253 48.1 76.7081C47.9343 76.8075 47.7686 76.8406 47.6029 76.8406C47.2052 76.8406 46.9069 76.7412 46.7246 76.5425C46.5423 76.3437 46.4595 76.0455 46.4595 75.6314V73.6767H47.1389V75.5651C47.1389 75.8302 47.1886 76.0289 47.288 76.1283C47.3875 76.2443 47.5366 76.294 47.7189 76.294C47.868 76.294 47.984 76.2774 48.0835 76.2277C48.1829 76.178 48.2492 76.1283 48.3155 76.0455C48.3818 75.9792 48.4149 75.8799 48.448 75.7805C48.4812 75.6811 48.4812 75.5651 48.4812 75.4492V73.6602H49.1606V76.7744H49.144Z" fill="#B9B9B9"/>
                                        <path d="M51.0498 73.7097H51.6795V74.3061H51.6961C51.7126 74.2233 51.7623 74.1404 51.8121 74.0576C51.8618 73.9748 51.9446 73.9085 52.0275 73.8423C52.1103 73.776 52.1932 73.7263 52.2926 73.6766C52.3921 73.6435 52.4915 73.6104 52.5909 73.6104C52.6738 73.6104 52.7235 73.6104 52.7566 73.6104C52.7898 73.6104 52.8229 73.6104 52.8561 73.6269V74.2729C52.8063 74.2729 52.7566 74.2564 52.7069 74.2564C52.6572 74.2564 52.6075 74.2398 52.5578 74.2398C52.4418 74.2398 52.3423 74.2564 52.2263 74.3061C52.1269 74.3558 52.0441 74.422 51.9612 74.5049C51.8783 74.5877 51.8286 74.7036 51.7789 74.8362C51.7292 74.9687 51.7126 75.1178 51.7126 75.2834V76.7411H51.0332V73.7097H51.0498Z" fill="#B9B9B9"/>
                                        <path d="M56.8663 73.7099H57.38V72.7822H58.0595V73.7099H58.6726V74.2234H58.0595V75.8633C58.0595 75.9296 58.0595 75.9958 58.076 76.0455C58.076 76.0952 58.0926 76.1449 58.1258 76.178C58.1423 76.2112 58.1755 76.2443 58.2252 76.2609C58.2749 76.2774 58.3246 76.294 58.4075 76.294C58.4572 76.294 58.5069 76.294 58.5566 76.294C58.6063 76.294 58.656 76.2774 58.7058 76.2774V76.8075C58.6229 76.8075 58.5566 76.8241 58.4903 76.8241C58.424 76.8241 58.3412 76.8406 58.2749 76.8406C58.0926 76.8406 57.96 76.8241 57.844 76.7909C57.728 76.7578 57.6452 76.7081 57.5955 76.6419C57.5292 76.5756 57.496 76.4928 57.4629 76.3934C57.4463 76.294 57.4298 76.178 57.4298 76.0621V74.2565H56.916V73.7099H56.8663Z" fill="#B9B9B9"/>
                                        <path d="M62.9148 76.095C62.9148 76.1778 62.9314 76.2441 62.948 76.2772C62.9645 76.3104 63.0143 76.3269 63.0805 76.3269C63.0971 76.3269 63.1303 76.3269 63.1468 76.3269C63.18 76.3269 63.2131 76.3269 63.2463 76.3104V76.7742C63.2297 76.7742 63.1965 76.7907 63.1468 76.8073C63.1137 76.8239 63.064 76.8239 63.0308 76.8404C62.9977 76.8404 62.948 76.857 62.9148 76.857C62.8817 76.857 62.8485 76.857 62.8154 76.857C62.6828 76.857 62.5668 76.8239 62.4674 76.7742C62.368 76.7245 62.3183 76.6251 62.2851 76.476C62.1525 76.6085 61.9868 76.7079 61.788 76.7576C61.5891 76.8239 61.4068 76.8404 61.2245 76.8404C61.092 76.8404 60.9594 76.8239 60.8268 76.7907C60.6943 76.7576 60.5948 76.6914 60.4954 76.6251C60.396 76.5588 60.3131 76.4594 60.2634 76.3435C60.2137 76.2275 60.1805 76.095 60.1805 75.9459C60.1805 75.7637 60.2137 75.5981 60.28 75.4821C60.3463 75.3662 60.4457 75.2668 60.5617 75.2005C60.6777 75.1343 60.7937 75.0846 60.9428 75.0514C61.0754 75.0183 61.2245 75.0017 61.3737 74.9852C61.4897 74.9686 61.6057 74.952 61.7217 74.9355C61.8377 74.9189 61.9371 74.9023 62.02 74.8858C62.1028 74.8692 62.1691 74.8195 62.2188 74.7698C62.2685 74.7201 62.2851 74.6539 62.2851 74.5545C62.2851 74.4717 62.2685 74.3888 62.2188 74.3391C62.1691 74.2894 62.1194 74.2397 62.0697 74.2066C62.0034 74.1735 61.9371 74.1569 61.8708 74.1404C61.788 74.1238 61.7217 74.1238 61.6554 74.1238C61.4731 74.1238 61.3074 74.1569 61.1914 74.2397C61.0754 74.3226 60.9925 74.4385 60.976 74.6042H60.2965C60.3131 74.4054 60.3628 74.2397 60.4457 74.1072C60.5285 73.9747 60.628 73.8753 60.7605 73.7925C60.8931 73.7097 61.0423 73.66 61.1914 73.6268C61.3571 73.5937 61.5228 73.5771 61.6885 73.5771C61.8377 73.5771 61.9868 73.5937 62.136 73.6268C62.2851 73.66 62.4177 73.7097 62.5337 73.7759C62.6497 73.8422 62.7491 73.9416 62.8154 74.0575C62.8817 74.1735 62.9148 74.306 62.9148 74.4717V76.095ZM62.2354 75.2502C62.136 75.3165 62.0034 75.3662 61.8543 75.3662C61.7051 75.3827 61.556 75.3993 61.4068 75.4324C61.3405 75.449 61.2577 75.4656 61.1914 75.4821C61.1251 75.4987 61.0588 75.5318 61.0091 75.5649C60.9594 75.5981 60.9097 75.6478 60.8931 75.714C60.86 75.7803 60.8434 75.8465 60.8434 75.9294C60.8434 76.0122 60.86 76.0619 60.9097 76.1116C60.9594 76.1613 61.0091 76.211 61.0754 76.2275C61.1417 76.2607 61.208 76.2772 61.2743 76.2938C61.3405 76.3104 61.4068 76.3104 61.4731 76.3104C61.556 76.3104 61.6223 76.2938 61.7217 76.2772C61.8045 76.2607 61.8874 76.2275 61.9703 76.1778C62.0531 76.1281 62.1194 76.0619 62.1691 75.9956C62.2188 75.9294 62.252 75.83 62.252 75.7306V75.2502H62.2354Z" fill="#B9B9B9"/>
                                        <path d="M67.6875 76.6252C67.6875 77.089 67.5549 77.4369 67.2897 77.6688C67.0246 77.9007 66.66 78.0167 66.1629 78.0167C66.0137 78.0167 65.848 78.0001 65.6989 77.967C65.5497 77.9338 65.4006 77.8841 65.268 77.8013C65.1355 77.7185 65.036 77.6191 64.9366 77.5032C64.8537 77.3872 64.804 77.2215 64.7875 77.0559H65.4669C65.4834 77.1553 65.5166 77.2215 65.5663 77.2878C65.616 77.3541 65.6657 77.3872 65.732 77.4203C65.7983 77.4535 65.8646 77.47 65.9475 77.4866C66.0303 77.5032 66.1132 77.5032 66.196 77.5032C66.4777 77.5032 66.6766 77.4369 66.7926 77.3044C66.9252 77.1719 66.9749 76.9731 66.9749 76.7246V76.2608H66.9583C66.8589 76.4264 66.7263 76.559 66.5606 76.6583C66.3949 76.7577 66.2126 76.8074 66.0303 76.8074C65.7817 76.8074 65.5829 76.7577 65.4006 76.6749C65.2349 76.5921 65.0857 76.4761 64.9697 76.327C64.8537 76.178 64.7709 76.0123 64.7212 75.8135C64.6714 75.6147 64.6383 75.416 64.6383 75.1841C64.6383 74.9853 64.6714 74.7865 64.7377 74.5877C64.804 74.4055 64.8869 74.2399 65.0195 74.0908C65.1355 73.9583 65.2846 73.8423 65.4503 73.7595C65.616 73.6767 65.8149 73.627 66.0303 73.627C66.2292 73.627 66.3949 73.6601 66.5606 73.7429C66.7263 73.8257 66.8423 73.9583 66.9417 74.1239H66.9583V73.7098H67.6377V76.6252H67.6875ZM66.1795 76.2442C66.3286 76.2442 66.4612 76.2111 66.5606 76.1448C66.66 76.0786 66.7429 75.9957 66.8092 75.8964C66.8754 75.797 66.9252 75.681 66.9583 75.5485C66.9914 75.416 67.008 75.2835 67.008 75.1509C67.008 75.0184 66.9914 74.8859 66.9583 74.7699C66.9252 74.654 66.8754 74.538 66.8092 74.4386C66.7429 74.3392 66.66 74.273 66.5606 74.2067C66.4612 74.157 66.3286 74.1239 66.1795 74.1239C66.0303 74.1239 65.8977 74.157 65.7983 74.2233C65.6989 74.2896 65.616 74.3724 65.5497 74.4718C65.4834 74.5712 65.4337 74.6871 65.4172 74.8196C65.384 74.9522 65.3675 75.0681 65.3675 75.2006C65.3675 75.3331 65.384 75.4491 65.4172 75.5651C65.4503 75.681 65.5 75.797 65.5663 75.8964C65.6326 75.9957 65.7154 76.062 65.8149 76.1283C65.9143 76.2111 66.0469 76.2442 66.1795 76.2442Z" fill="#B9B9B9"/>
                                        <path d="M69.5765 72.5337H70.256V76.7743H69.5765V72.5337Z" fill="#B9B9B9"/>
                                        <path d="M72.1948 72.5337H72.8743V73.1797H72.1948V72.5337ZM72.1948 73.7098H72.8743V76.7909H72.1948V73.7098Z" fill="#B9B9B9"/>
                                        <path d="M74.8131 73.7098H75.4594V74.157L75.476 74.1736C75.5754 74.008 75.708 73.8754 75.8737 73.776C76.0394 73.6766 76.2217 73.627 76.4205 73.627C76.752 73.627 77.0171 73.7098 77.216 73.892C77.4148 74.0742 77.5143 74.3227 77.5143 74.6705V76.7743H76.8348V74.8362C76.8348 74.5877 76.7685 74.4221 76.6857 74.3061C76.5863 74.1902 76.4371 74.1405 76.2382 74.1405C76.1222 74.1405 76.0228 74.157 75.9234 74.2067C75.824 74.2564 75.7577 74.3061 75.6914 74.3724C75.6251 74.4386 75.5754 74.538 75.5423 74.6374C75.5091 74.7368 75.4925 74.8362 75.4925 74.9521V76.7577H74.8131V73.7098Z" fill="#B9B9B9"/>
                                        <path d="M79.9504 75.416C79.9504 75.5319 79.9669 75.6479 80.0001 75.7638C80.0332 75.8798 80.0829 75.9792 80.1492 76.062C80.2155 76.1448 80.2984 76.2111 80.3978 76.2608C80.4972 76.3105 80.6298 76.327 80.7624 76.327C80.9612 76.327 81.1269 76.2773 81.2429 76.1945C81.3589 76.1117 81.4584 75.9792 81.5081 75.8135H82.1544C82.1212 75.9792 82.0549 76.1283 81.9721 76.2608C81.8892 76.3933 81.7732 76.5093 81.6572 76.5921C81.5412 76.6749 81.3921 76.7412 81.2429 76.7909C81.0938 76.8406 80.9281 76.8571 80.7624 76.8571C80.5138 76.8571 80.2984 76.824 80.1161 76.7412C79.9338 76.6583 79.7681 76.559 79.6355 76.4099C79.5029 76.2608 79.4035 76.0951 79.3372 75.8964C79.2709 75.6976 79.2378 75.4822 79.2378 75.2503C79.2378 75.035 79.2709 74.8196 79.3372 74.6209C79.4035 74.4221 79.5029 74.2564 79.6355 74.1073C79.7681 73.9583 79.9172 73.8423 80.0995 73.7595C80.2818 73.6767 80.4806 73.627 80.7126 73.627C80.9612 73.627 81.1767 73.6766 81.3589 73.776C81.5578 73.8754 81.7069 74.008 81.8395 74.1736C81.9721 74.3392 82.0549 74.538 82.1212 74.7534C82.1709 74.9687 82.1875 75.2006 82.1709 75.416H79.9504ZM81.5247 74.9687C81.5247 74.8693 81.4915 74.7534 81.4584 74.654C81.4252 74.5546 81.3755 74.4718 81.3092 74.3889C81.2429 74.3227 81.1601 74.2564 81.0772 74.2067C80.9778 74.157 80.8784 74.1405 80.7624 74.1405C80.6464 74.1405 80.5304 74.157 80.4309 74.2067C80.3315 74.2564 80.2487 74.3061 80.1824 74.3724C80.1161 74.4386 80.0498 74.538 80.0167 74.6374C79.9669 74.7368 79.9504 74.8362 79.9504 74.9521H81.5247V74.9687Z" fill="#B9B9B9"/>
                                        <path d="M89.5949 76.6252C89.5949 77.089 89.4623 77.4369 89.1972 77.6688C88.9321 77.9007 88.5675 78.0167 88.0703 78.0167C87.9212 78.0167 87.7555 78.0001 87.6063 77.967C87.4572 77.9338 87.3081 77.8841 87.1755 77.8013C87.0429 77.7185 86.9435 77.6191 86.8441 77.5032C86.7612 77.3872 86.7115 77.2215 86.6949 77.0559H87.3743C87.3909 77.1553 87.4241 77.2215 87.4738 77.2878C87.5235 77.3541 87.5732 77.3872 87.6395 77.4203C87.7058 77.4535 87.7721 77.47 87.8549 77.4866C87.9378 77.5032 88.0206 77.5032 88.1035 77.5032C88.3852 77.5032 88.5841 77.4369 88.7001 77.3044C88.8326 77.1719 88.8823 76.9731 88.8823 76.7246V76.2608H88.8658C88.7663 76.4264 88.6338 76.559 88.4681 76.6583C88.3023 76.7577 88.1201 76.8074 87.9378 76.8074C87.6892 76.8074 87.4903 76.7577 87.3081 76.6749C87.1423 76.5921 86.9932 76.4761 86.8772 76.327C86.7612 76.178 86.6783 76.0123 86.6286 75.8135C86.5789 75.6147 86.5458 75.416 86.5458 75.1841C86.5458 74.9853 86.5789 74.7865 86.6452 74.5877C86.7115 74.4055 86.7943 74.2399 86.9269 74.0908C87.0429 73.9583 87.1921 73.8423 87.3578 73.7595C87.5235 73.6767 87.7223 73.627 87.9378 73.627C88.1366 73.627 88.3023 73.6601 88.4681 73.7429C88.6338 73.8257 88.7498 73.9583 88.8492 74.1239H88.8658V73.7098H89.5452V76.6252H89.5949ZM88.0869 76.2442C88.2361 76.2442 88.3686 76.2111 88.4681 76.1448C88.5675 76.0786 88.6503 75.9957 88.7166 75.8964C88.7829 75.797 88.8326 75.681 88.8658 75.5485C88.8989 75.416 88.9155 75.2835 88.9155 75.1509C88.9155 75.0184 88.8989 74.8859 88.8658 74.7699C88.8326 74.654 88.7829 74.538 88.7166 74.4386C88.6503 74.3392 88.5675 74.273 88.4681 74.2067C88.3686 74.157 88.2361 74.1239 88.0869 74.1239C87.9378 74.1239 87.8052 74.157 87.7058 74.2233C87.6063 74.2896 87.5235 74.3724 87.4572 74.4718C87.3909 74.5712 87.3412 74.6871 87.3246 74.8196C87.2915 74.9522 87.2749 75.0681 87.2749 75.2006C87.2749 75.3331 87.2915 75.4491 87.3246 75.5651C87.3578 75.681 87.4075 75.797 87.4738 75.8964C87.5401 75.9957 87.6229 76.062 87.7223 76.1283C87.8218 76.2111 87.9543 76.2442 88.0869 76.2442Z" fill="#B9B9B9"/>
                                        <path d="M92.876 76.8738C92.6274 76.8738 92.412 76.8406 92.2131 76.7578C92.0143 76.675 91.8651 76.559 91.7326 76.4265C91.6 76.2774 91.5006 76.1118 91.4343 75.913C91.368 75.7142 91.3348 75.4989 91.3348 75.267C91.3348 75.035 91.368 74.8197 91.4343 74.6209C91.5006 74.4221 91.6 74.2565 91.7326 74.1074C91.8651 73.9583 92.0308 73.8589 92.2131 73.7761C92.412 73.6933 92.6274 73.6602 92.876 73.6602C93.1246 73.6602 93.34 73.6933 93.5388 73.7761C93.7377 73.8589 93.8868 73.9749 94.0194 74.1074C94.152 74.2565 94.2514 74.4221 94.3177 74.6209C94.384 74.8197 94.4171 75.035 94.4171 75.267C94.4171 75.4989 94.384 75.7308 94.3177 75.913C94.2514 76.1118 94.152 76.2774 94.0194 76.4265C93.8868 76.5756 93.7211 76.675 93.5388 76.7578C93.34 76.8241 93.1246 76.8738 92.876 76.8738ZM92.876 76.3271C93.0251 76.3271 93.1577 76.294 93.2737 76.2277C93.3897 76.1615 93.4726 76.0786 93.5554 75.9792C93.6217 75.8799 93.6714 75.7639 93.7211 75.6314C93.7543 75.4989 93.7708 75.3663 93.7708 75.2338C93.7708 75.1013 93.7543 74.9688 93.7211 74.8363C93.688 74.7037 93.6383 74.5878 93.5554 74.4884C93.4891 74.389 93.3897 74.3062 93.2737 74.2399C93.1577 74.1737 93.0251 74.1405 92.876 74.1405C92.7268 74.1405 92.5943 74.1737 92.4783 74.2399C92.3623 74.3062 92.2794 74.389 92.1966 74.4884C92.1303 74.5878 92.0806 74.7037 92.0308 74.8363C91.9811 74.9688 91.9811 75.1013 91.9811 75.2338C91.9811 75.3663 91.9977 75.4989 92.0308 75.6314C92.064 75.7639 92.1137 75.8799 92.1966 75.9792C92.2628 76.0786 92.3623 76.1615 92.4783 76.2277C92.5943 76.294 92.7268 76.3271 92.876 76.3271Z" fill="#B9B9B9"/>
                                        <path d="M96.7206 75.416C96.7206 75.5319 96.7372 75.6479 96.7703 75.7638C96.8035 75.8798 96.8532 75.9792 96.9195 76.062C96.9858 76.1448 97.0686 76.2111 97.1681 76.2608C97.2675 76.3105 97.4001 76.327 97.5326 76.327C97.7315 76.327 97.8972 76.2773 98.0132 76.1945C98.1292 76.1117 98.2286 75.9792 98.2783 75.8135H98.9246C98.8915 75.9792 98.8252 76.1283 98.7423 76.2608C98.6595 76.3933 98.5435 76.5093 98.4275 76.5921C98.3115 76.6749 98.1623 76.7412 98.0132 76.7909C97.8641 76.8406 97.6983 76.8571 97.5326 76.8571C97.2841 76.8571 97.0686 76.824 96.8863 76.7412C96.7041 76.6583 96.5383 76.559 96.4058 76.4099C96.2732 76.2608 96.1738 76.0951 96.1075 75.8964C96.0412 75.6976 96.0081 75.4822 96.0081 75.2503C96.0081 75.035 96.0412 74.8196 96.1075 74.6209C96.1738 74.4221 96.2732 74.2564 96.4058 74.1073C96.5383 73.9583 96.6875 73.8423 96.8698 73.7595C97.0521 73.6767 97.2509 73.627 97.4829 73.627C97.7315 73.627 97.9469 73.6766 98.1292 73.776C98.3281 73.8754 98.4772 74.008 98.6098 74.1736C98.7423 74.3392 98.8252 74.538 98.8915 74.7534C98.9412 74.9687 98.9578 75.2006 98.9412 75.416H96.7206ZM98.2949 74.9687C98.2949 74.8693 98.2618 74.7534 98.2286 74.654C98.1955 74.5546 98.1458 74.4718 98.0795 74.3889C98.0132 74.3227 97.9303 74.2564 97.8475 74.2067C97.7481 74.157 97.6486 74.1405 97.5326 74.1405C97.4166 74.1405 97.3006 74.157 97.2012 74.2067C97.1018 74.2564 97.0189 74.3061 96.9526 74.3724C96.8863 74.4386 96.8201 74.538 96.7869 74.6374C96.7372 74.7368 96.7206 74.8362 96.7206 74.9521H98.2949V74.9687Z" fill="#B9B9B9"/>
                                        <path d="M101.195 75.7969C101.211 75.9957 101.294 76.1282 101.427 76.211C101.559 76.2938 101.709 76.327 101.891 76.327C101.957 76.327 102.023 76.327 102.106 76.3104C102.189 76.2938 102.272 76.2773 102.338 76.2607C102.405 76.2276 102.471 76.1944 102.521 76.1448C102.57 76.0951 102.587 76.0288 102.587 75.9294C102.587 75.8466 102.554 75.7638 102.487 75.7141C102.421 75.6644 102.355 75.6147 102.255 75.5815C102.156 75.5484 102.057 75.5153 101.941 75.4987C101.825 75.4822 101.709 75.449 101.576 75.4159C101.443 75.3828 101.327 75.3496 101.211 75.3165C101.095 75.2834 100.996 75.2171 100.897 75.1509C100.797 75.0846 100.731 75.0018 100.681 74.8858C100.631 74.7864 100.598 74.6539 100.598 74.4883C100.598 74.3226 100.631 74.1901 100.714 74.0741C100.797 73.9582 100.897 73.8754 101.029 73.7925C101.162 73.7263 101.294 73.6766 101.443 73.6434C101.593 73.6103 101.742 73.5938 101.874 73.5938C102.04 73.5938 102.189 73.6103 102.322 73.6434C102.471 73.6766 102.603 73.7263 102.719 73.8091C102.835 73.8919 102.935 73.9747 103.018 74.1073C103.101 74.2232 103.15 74.3723 103.167 74.5379H102.454C102.421 74.3723 102.355 74.2729 102.239 74.2067C102.123 74.157 101.99 74.1238 101.841 74.1238C101.791 74.1238 101.742 74.1238 101.675 74.1404C101.609 74.1404 101.543 74.157 101.493 74.1901C101.443 74.2066 101.394 74.2398 101.344 74.2895C101.311 74.3392 101.278 74.3889 101.278 74.4551C101.278 74.5379 101.311 74.6042 101.361 74.6539C101.41 74.7036 101.493 74.7533 101.593 74.7864C101.692 74.8196 101.791 74.8527 101.907 74.8692C102.023 74.8858 102.156 74.9189 102.272 74.9521C102.388 74.9852 102.521 75.0183 102.637 75.0515C102.753 75.0846 102.869 75.1509 102.951 75.2171C103.051 75.2834 103.117 75.3662 103.183 75.4656C103.233 75.565 103.266 75.6975 103.266 75.8466C103.266 76.0288 103.217 76.1779 103.134 76.3104C103.051 76.4429 102.935 76.5423 102.802 76.6251C102.67 76.708 102.521 76.7577 102.355 76.7908C102.189 76.8239 102.023 76.8405 101.874 76.8405C101.675 76.8405 101.493 76.8239 101.344 76.7742C101.178 76.7245 101.029 76.6583 100.913 76.5754C100.797 76.4926 100.698 76.3767 100.631 76.2441C100.565 76.1116 100.532 75.946 100.515 75.7638H101.195V75.7969Z" fill="#B9B9B9"/>
                                        <path d="M107.807 72.5337H108.486V74.1074H108.503C108.586 73.9748 108.718 73.8589 108.867 73.7595C109.033 73.6601 109.215 73.627 109.414 73.627C109.746 73.627 110.011 73.7098 110.21 73.892C110.409 74.0742 110.508 74.3227 110.508 74.6706V76.7743H109.829V74.8362C109.829 74.5877 109.762 74.4221 109.679 74.3061C109.58 74.1902 109.431 74.1405 109.232 74.1405C109.116 74.1405 109.017 74.1571 108.917 74.2068C108.818 74.2564 108.751 74.3061 108.685 74.3724C108.619 74.4387 108.569 74.5381 108.536 74.6374C108.503 74.7368 108.486 74.8362 108.486 74.9522V76.7578H107.807V72.5337Z" fill="#B9B9B9"/>
                                        <path d="M112.944 75.416C112.944 75.5319 112.961 75.6479 112.994 75.7638C113.027 75.8798 113.077 75.9792 113.143 76.062C113.209 76.1448 113.292 76.2111 113.391 76.2608C113.491 76.3105 113.623 76.327 113.756 76.327C113.955 76.327 114.121 76.2773 114.237 76.1945C114.353 76.1117 114.452 75.9792 114.502 75.8135H115.148C115.115 75.9792 115.049 76.1283 114.966 76.2608C114.883 76.3933 114.767 76.5093 114.651 76.5921C114.535 76.6749 114.386 76.7412 114.237 76.7909C114.087 76.8406 113.922 76.8571 113.756 76.8571C113.507 76.8571 113.292 76.824 113.11 76.7412C112.927 76.6583 112.762 76.559 112.629 76.4099C112.497 76.2608 112.397 76.0951 112.331 75.8964C112.265 75.6976 112.231 75.4822 112.231 75.2503C112.231 75.035 112.265 74.8196 112.331 74.6209C112.397 74.4221 112.497 74.2564 112.629 74.1073C112.762 73.9583 112.911 73.8423 113.093 73.7595C113.275 73.6767 113.474 73.627 113.706 73.627C113.955 73.627 114.17 73.6766 114.353 73.776C114.551 73.8754 114.701 74.008 114.833 74.1736C114.966 74.3392 115.049 74.538 115.115 74.7534C115.165 74.9687 115.181 75.2006 115.165 75.416H112.944ZM114.518 74.9687C114.518 74.8693 114.485 74.7534 114.452 74.654C114.419 74.5546 114.369 74.4718 114.303 74.3889C114.237 74.3227 114.154 74.2564 114.071 74.2067C113.971 74.157 113.872 74.1405 113.756 74.1405C113.64 74.1405 113.524 74.157 113.425 74.2067C113.325 74.2564 113.242 74.3061 113.176 74.3724C113.11 74.4386 113.043 74.538 113.01 74.6374C112.961 74.7368 112.944 74.8362 112.944 74.9521H114.518V74.9687Z" fill="#B9B9B9"/>
                                        <path d="M116.905 73.7097H117.534V74.3061H117.551C117.567 74.2233 117.617 74.1404 117.667 74.0576C117.717 73.9748 117.799 73.9085 117.882 73.8423C117.965 73.776 118.048 73.7263 118.147 73.6766C118.247 73.6435 118.346 73.6104 118.446 73.6104C118.529 73.6104 118.578 73.6104 118.611 73.6104C118.645 73.6104 118.678 73.6104 118.711 73.6269V74.2729C118.661 74.2729 118.611 74.2564 118.562 74.2564C118.512 74.2564 118.462 74.2398 118.413 74.2398C118.297 74.2398 118.197 74.2564 118.081 74.3061C117.982 74.3558 117.899 74.422 117.816 74.5049C117.733 74.5877 117.683 74.7036 117.634 74.8362C117.584 74.9687 117.567 75.1178 117.567 75.2834V76.7411H116.888V73.7097H116.905Z" fill="#B9B9B9"/>
                                        <path d="M120.617 75.416C120.617 75.5319 120.633 75.6479 120.666 75.7638C120.699 75.8798 120.749 75.9792 120.815 76.062C120.882 76.1448 120.965 76.2111 121.064 76.2608C121.163 76.3105 121.296 76.327 121.429 76.327C121.627 76.327 121.793 76.2773 121.909 76.1945C122.025 76.1117 122.125 75.9792 122.174 75.8135H122.821C122.787 75.9792 122.721 76.1283 122.638 76.2608C122.555 76.3933 122.439 76.5093 122.323 76.5921C122.207 76.6749 122.058 76.7412 121.909 76.7909C121.76 76.8406 121.594 76.8571 121.429 76.8571C121.18 76.8571 120.965 76.824 120.782 76.7412C120.6 76.6583 120.434 76.559 120.302 76.4099C120.169 76.2608 120.07 76.0951 120.003 75.8964C119.937 75.6976 119.904 75.4822 119.904 75.2503C119.904 75.035 119.937 74.8196 120.003 74.6209C120.07 74.4221 120.169 74.2564 120.302 74.1073C120.434 73.9583 120.583 73.8423 120.766 73.7595C120.948 73.6767 121.147 73.627 121.379 73.627C121.627 73.627 121.843 73.6766 122.025 73.776C122.224 73.8754 122.373 74.008 122.506 74.1736C122.638 74.3392 122.721 74.538 122.787 74.7534C122.837 74.9687 122.854 75.2006 122.837 75.416H120.617ZM122.207 74.9687C122.207 74.8693 122.174 74.7534 122.141 74.654C122.108 74.5546 122.058 74.4718 121.992 74.3889C121.926 74.3227 121.843 74.2564 121.76 74.2067C121.661 74.157 121.561 74.1405 121.445 74.1405C121.329 74.1405 121.213 74.157 121.114 74.2067C121.014 74.2564 120.931 74.3061 120.865 74.3724C120.799 74.4386 120.733 74.538 120.699 74.6374C120.65 74.7368 120.633 74.8362 120.633 74.9521H122.207V74.9687Z" fill="#B9B9B9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_13428_2167">
                                        <rect width="116" height="76" fill="white" transform="translate(22 2)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80" fill="white"/>
                                        <path d="M65.9719 53.383L64.1897 50.3278L50.3565 26.353H46.877L62.45 53.383H65.9719Z" fill="#B9B9B9"/>
                                        <path d="M79.9317 53.383L78.192 50.3278L76.4522 47.3151L74.67 44.3023L72.9303 41.2895L71.1905 38.2343L64.3163 26.353H60.8368L69.4508 41.2895L71.1905 44.3023L72.9303 47.3151L74.67 50.3278L76.4522 53.383H76.4098H76.4522H79.9317Z" fill="#B9B9B9"/>
                                        <path d="M85.151 50.3278L83.4113 47.3151L81.6715 44.3023L79.9317 41.2895L78.192 38.2343L76.4522 35.2216L74.67 32.2088L71.3178 26.353H67.8383L72.9302 35.2216L76.4522 41.2895L78.192 44.3023L79.9317 47.3151L81.6715 50.3278L83.4113 53.383H86.8908H86.9332H86.8908L85.151 50.3278Z" fill="#B9B9B9"/>
                                        <path d="M92.7046 7.0459H89.1826L76.4526 29.1536L78.1924 32.1664L92.7046 7.0459Z" fill="#B9B9B9"/>
                                        <path d="M69.4508 53.383H72.9303L71.1905 50.3278L69.4508 47.3151L67.711 44.3023L57.3573 26.353H53.8353L65.9712 47.3151L67.711 50.3278L69.4508 53.383Z" fill="#B9B9B9"/>
                                        <path d="M81.6715 38.1919L99.6632 7.0459H96.1837L79.9318 35.1791L79.9742 35.2216L81.6715 38.1919Z" fill="#B9B9B9"/>
                                        <path d="M85.1939 44.2599L106.665 7.0459H103.186L83.4541 41.2471V41.2895L85.1939 44.2599Z" fill="#B9B9B9"/>
                                        <path d="M113.666 7.0459H110.144L86.9332 47.2726V47.3151L88.673 50.3278L113.666 7.0459Z" fill="#B9B9B9"/>
                                        <path d="M49.0828 65.986C48.7433 66.283 48.2766 66.4952 47.7674 66.4952C46.7065 66.4952 45.8154 65.6465 45.8154 64.5432C45.8154 63.4824 46.7065 62.5913 47.7674 62.5913C48.2766 62.5913 48.7433 62.8035 49.0828 63.1005L50.0163 62.167C49.4223 61.6153 48.6585 61.2759 47.7674 61.2759C45.9852 61.2759 44.5 62.7186 44.5 64.5432C44.5 66.3679 45.9427 67.8106 47.7674 67.8106C48.616 67.8106 49.4223 67.4711 50.0163 66.9195L49.0828 65.986Z" fill="#B9B9B9"/>
                                        <path d="M58.5878 61.3184C56.8056 61.3184 55.3204 62.7611 55.3204 64.5857C55.3204 66.4103 56.7632 67.8531 58.5878 67.8531C60.37 67.8531 61.8552 66.4103 61.8552 64.5857C61.8552 62.7611 60.4124 61.3184 58.5878 61.3184ZM58.5878 66.5377C57.527 66.5377 56.6359 65.6466 56.6359 64.5857C56.6359 63.5249 57.527 62.6338 58.5878 62.6338C59.6486 62.6338 60.5397 63.5249 60.5397 64.5857C60.5397 65.6466 59.6911 66.5377 58.5878 66.5377Z" fill="#B9B9B9"/>
                                        <path d="M70.8935 66.0709L68.984 61.3184H67.6261V67.8106H68.8991V64.5857L70.2145 67.8106H71.6148L72.9303 64.5857V67.8106H74.2033V61.3184H72.803L70.8935 66.0709Z" fill="#B9B9B9"/>
                                        <path d="M81.7995 61.3184H79.9749V67.8106H81.2903V65.2222H81.8419C82.9027 65.2222 83.7938 64.3311 83.7938 63.2703C83.7514 62.2095 82.8603 61.3184 81.7995 61.3184ZM81.7995 63.9068H81.2903V62.5914H81.7995C82.1389 62.5914 82.436 62.8884 82.436 63.2279C82.436 63.6098 82.1389 63.9068 81.7995 63.9068Z" fill="#B9B9B9"/>
                                        <path d="M90.9644 61.3184L88.6306 67.8106H90.0309L90.7099 65.986H92.7042L93.3831 67.8106H94.7834L92.4496 61.3184H90.9644ZM91.1342 64.713L91.6434 63.2279L92.195 64.713H91.1342Z" fill="#B9B9B9"/>
                                        <path d="M105.731 61.3184H104.416V65.6466L101.827 61.3184H100.3V67.8106H101.573V63.4825L104.204 67.8106H105.731V61.3184Z" fill="#B9B9B9"/>
                                        <path d="M114.302 67.8106V64.713L115.999 61.3184H114.557L113.623 63.1006L112.732 61.3184H111.289L112.987 64.713V67.8106H114.302Z" fill="#B9B9B9"/>
                                        <path d="M44.5 70.9932H45.2638V73.3695H45.6881V70.9932H46.4519V70.6113H44.5V70.9932Z" fill="#B9B9B9"/>
                                        <path d="M49.5064 70.6113L48.488 73.3695H48.9124L49.1245 72.733H50.1854L50.3975 73.3695H50.8219L49.8035 70.6113H49.5064ZM49.2518 72.3935L49.6337 71.2054L50.0156 72.3935H49.2518Z" fill="#B9B9B9"/>
                                        <path d="M54.3017 72.2233H54.8534V72.3507C54.8534 72.5204 54.8109 72.6477 54.6836 72.775C54.5988 72.9023 54.429 72.9447 54.3017 72.9447C54.2169 72.9447 54.132 72.9447 54.0471 72.9023C53.9623 72.8599 53.9198 72.8174 53.8774 72.775C53.835 72.7325 53.7925 72.6477 53.7501 72.5628C53.7501 72.478 53.7077 72.2658 53.7077 72.0112C53.7077 71.7566 53.7077 71.5444 53.7501 71.4595C53.7501 71.3747 53.7925 71.2898 53.8774 71.2474C53.9198 71.205 53.9623 71.1625 54.0471 71.1201C54.132 71.0777 54.2169 71.0777 54.3017 71.0777C54.429 71.0777 54.5563 71.1201 54.6412 71.205C54.7261 71.2898 54.8109 71.3747 54.8109 71.502H55.2353C55.1928 71.2898 55.0655 71.0777 54.9382 70.9079C54.7685 70.7382 54.5563 70.6533 54.3017 70.6533C54.0896 70.6533 53.9198 70.6958 53.7501 70.8231C53.6228 70.9079 53.4955 71.0352 53.4106 71.1625C53.3682 71.2474 53.3258 71.3323 53.3258 71.4171C53.3258 71.5444 53.2833 71.7566 53.2833 72.0536C53.2833 72.3507 53.2833 72.5628 53.3258 72.6901C53.3258 72.7326 53.3682 72.8174 53.3682 72.8174C53.3682 72.8599 53.4106 72.9023 53.4106 72.9447C53.4955 73.072 53.5804 73.1993 53.7501 73.2842C53.8774 73.369 54.0896 73.4539 54.3017 73.4539C54.5988 73.4539 54.8109 73.369 54.9807 73.1569C55.1504 72.9871 55.2777 72.7326 55.2777 72.478V71.9263H54.3017V72.2233Z" fill="#B9B9B9"/>
                                        <path d="M58.5029 70.6113H58.0786V73.3695H59.8608V72.9876H58.5029V70.6113Z" fill="#B9B9B9"/>
                                        <path d="M63.0016 70.6113H62.5773V73.3695H63.0016V70.6113Z" fill="#B9B9B9"/>
                                        <path d="M67.5406 72.5633L66.2677 70.6113H65.8857V73.3695H66.3101V71.4176L67.5406 73.3695H67.965V70.6113H67.5406V72.5633Z" fill="#B9B9B9"/>
                                        <path d="M70.8517 73.3695H72.6339V72.9876H71.276V72.1814H72.4217V71.7995H71.276V70.9932H72.6339V70.6113H70.8517V73.3695Z" fill="#B9B9B9"/>
                                        <path d="M79.4651 72.2233H80.0167V72.3507C80.0167 72.5204 79.9743 72.6477 79.847 72.775C79.7621 72.9023 79.5924 72.9447 79.4651 72.9447C79.3802 72.9447 79.2953 72.9447 79.2105 72.9023C79.1256 72.8599 79.0832 72.8174 79.0407 72.775C78.9983 72.7325 78.9559 72.6477 78.9134 72.5628C78.9134 72.478 78.871 72.2658 78.871 72.0112C78.871 71.7566 78.871 71.5444 78.9134 71.4595C78.9134 71.3747 78.9559 71.2898 79.0407 71.2474C79.0832 71.205 79.1256 71.1625 79.2105 71.1201C79.2953 71.0777 79.3802 71.0777 79.4651 71.0777C79.5924 71.0777 79.7197 71.1201 79.8045 71.205C79.8894 71.2898 79.9743 71.3747 79.9743 71.502H80.3986C80.3562 71.2898 80.2289 71.0777 80.1016 70.9079C79.9318 70.7382 79.7197 70.6533 79.4651 70.6533C79.2529 70.6533 79.0832 70.6958 78.9134 70.8231C78.7861 70.9079 78.6588 71.0352 78.574 71.1625C78.5315 71.2474 78.4891 71.3323 78.4891 71.4171C78.4891 71.5444 78.4467 71.7566 78.4467 72.0536C78.4467 72.3507 78.4467 72.5628 78.4891 72.6901C78.4891 72.7326 78.5315 72.8174 78.5315 72.8174C78.5315 72.8599 78.574 72.9023 78.574 72.9447C78.6588 73.072 78.7437 73.1993 78.9134 73.2842C79.0407 73.369 79.2529 73.4539 79.4651 73.4539C79.7621 73.4539 79.9743 73.369 80.144 73.1569C80.3137 72.9871 80.441 72.7326 80.441 72.478V71.9263H79.4651V72.2233Z" fill="#B9B9B9"/>
                                        <path d="M85.0244 71.0776C84.9395 70.9503 84.8547 70.823 84.7274 70.7381C84.6001 70.6532 84.3879 70.5684 84.1757 70.5684C83.9636 70.5684 83.7938 70.6108 83.6241 70.7381C83.4968 70.823 83.3695 70.9503 83.2846 71.0776C83.2422 71.1624 83.1998 71.2473 83.1998 71.3322C83.1998 71.4595 83.1573 71.6716 83.1573 71.9687C83.1573 72.2657 83.1573 72.4779 83.1998 72.6052C83.1998 72.6476 83.2422 72.7325 83.2422 72.7325C83.2422 72.7749 83.2846 72.8173 83.2846 72.8598C83.3695 72.9871 83.4544 73.1144 83.6241 73.1992C83.7514 73.2841 83.9636 73.369 84.1757 73.369C84.3879 73.369 84.5577 73.3265 84.7274 73.1992C84.8547 73.1144 84.982 72.9871 85.0244 72.8598C85.0668 72.7749 85.1093 72.69 85.1093 72.6052C85.1093 72.4779 85.1517 72.2657 85.1517 71.9687C85.1517 71.6292 85.1517 71.417 85.1093 71.3322C85.1093 71.2473 85.0668 71.1624 85.0244 71.0776ZM84.6849 72.5203C84.6849 72.6052 84.6425 72.69 84.5576 72.7325C84.5152 72.7749 84.4728 72.8173 84.3879 72.8598C84.303 72.9022 84.2182 72.9022 84.1333 72.9022C84.0484 72.9022 83.9636 72.9022 83.8787 72.8598C83.7939 72.8173 83.7514 72.7749 83.709 72.7325C83.6665 72.69 83.6241 72.6052 83.5817 72.5203C83.5817 72.4354 83.5392 72.2233 83.5392 71.9687C83.5392 71.7141 83.5392 71.5019 83.5817 71.417C83.5817 71.3322 83.6241 71.2473 83.709 71.2049C83.7514 71.1624 83.7939 71.12 83.8787 71.0776C83.9636 71.0351 84.0484 71.0351 84.1333 71.0351C84.2182 71.0351 84.303 71.0776 84.3879 71.0776C84.4728 71.12 84.5152 71.1624 84.5576 71.2049C84.6001 71.2473 84.6425 71.3322 84.6849 71.417C84.6849 71.5019 84.7274 71.7141 84.7274 71.9687C84.7274 72.2657 84.7274 72.4354 84.6849 72.5203Z" fill="#B9B9B9"/>
                                        <path d="M87.951 73.3695H89.7333V72.9876H88.3754V72.1814H89.5211V71.7995H88.3754V70.9932H89.7333V70.6113H87.951V73.3695Z" fill="#B9B9B9"/>
                                        <path d="M93.468 71.7995C93.3407 71.7995 93.2134 71.757 93.171 71.757C93.0437 71.7146 92.9164 71.6722 92.8739 71.6297C92.8315 71.5449 92.7891 71.5024 92.7891 71.4176C92.7891 71.2903 92.8315 71.2054 92.9164 71.1205C93.0012 71.0357 93.1285 71.0357 93.2558 71.0357C93.5104 71.0357 93.7226 71.1205 93.9348 71.2478L94.1469 70.9084C93.8923 70.7386 93.5953 70.6113 93.2558 70.6113C92.9588 70.6113 92.7466 70.6962 92.5769 70.8235C92.4072 70.9508 92.3223 71.163 92.3223 71.4176C92.3223 71.6297 92.4072 71.7995 92.5345 71.9268C92.6618 72.0541 92.8315 72.1389 93.0861 72.1814C93.2134 72.1814 93.3407 72.2238 93.468 72.2238C93.7226 72.2662 93.8499 72.3935 93.8075 72.6057C93.8075 72.8603 93.6377 72.9876 93.2558 72.9876C92.9588 72.9876 92.7042 72.9027 92.492 72.733L92.2374 73.03C92.5345 73.2846 92.8739 73.4119 93.2983 73.4119C93.9348 73.4119 94.2318 73.1573 94.2742 72.6057C94.2742 72.3935 94.2318 72.2238 94.1045 72.0965C93.9348 71.9268 93.7226 71.8419 93.468 71.7995Z" fill="#B9B9B9"/>
                                        <path d="M101.742 71.7995H100.639V70.6113H100.257V73.3695H100.639V72.1814H101.742V73.3695H102.166V70.6113H101.742V71.7995Z" fill="#B9B9B9"/>
                                        <path d="M105.095 73.3695H106.835V72.9876H105.477V72.1814H106.623V71.7995H105.477V70.9932H106.835V70.6113H105.095V73.3695Z" fill="#B9B9B9"/>
                                        <path d="M111.459 71.3751C111.459 71.1205 111.374 70.9084 111.204 70.7811C111.077 70.6538 110.865 70.6113 110.653 70.6113H109.592V73.3695H110.016V72.1814H110.568L111.12 73.3695H111.629L110.992 72.1389C111.289 72.0116 111.459 71.757 111.459 71.3751ZM109.974 71.7995V70.9508H110.61C110.738 70.9508 110.865 70.9932 110.907 71.0357C110.992 71.1205 111.035 71.2054 111.035 71.3327C111.035 71.46 110.992 71.5449 110.907 71.6297C110.822 71.7146 110.695 71.757 110.568 71.757H109.974V71.7995Z" fill="#B9B9B9"/>
                                        <path d="M114.218 73.3695H116V72.9876H114.642V72.1814H115.788V71.7995H114.642V70.9932H116V70.6113H114.218V73.3695Z" fill="#B9B9B9"/>
                                        </svg>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80" fill="white"/>
                                        <g clip-path="url(#clip0_13428_2256)">
                                        <mask id="mask0_13428_2256" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="-16" y="-56" width="194" height="193">
                                        <path d="M177.063 -55.9746H-15.0627V136.151H177.063V-55.9746Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0_13428_2256)">
                                        <path d="M24.4883 41.5127H8.99915V57.0018H24.4883V41.5127Z" fill="#B9B9B9"/>
                                        <path d="M16.6458 35.9984C20.7288 35.9984 24.0388 32.6884 24.0388 28.6054C24.0388 24.5224 20.7288 21.2124 16.6458 21.2124C12.5628 21.2124 9.25281 24.5224 9.25281 28.6054C9.25281 32.6884 12.5628 35.9984 16.6458 35.9984Z" fill="#B9B9B9"/>
                                        <path d="M36.6192 21.1816H31.1552V57.3089H36.6192V21.1816Z" fill="#E3E3E3"/>
                                        <path d="M24.4883 41.5127L8.99915 57.0018H24.4883V41.5127Z" fill="#E3E3E3"/>
                                        <path d="M47.2675 38.9297H44.9447V27.016C44.9447 25.301 45.4942 23.9023 46.5932 22.82C47.7088 21.7377 49.0825 21.1965 50.7143 21.1965C52.5126 21.1965 53.8613 21.6544 54.7604 22.5702C55.6762 23.4694 56.1341 24.5766 56.1341 25.8921C56.1341 27.5738 55.3515 28.781 53.7864 29.5136V29.6135C55.9343 30.2296 57.0083 31.7199 57.0083 34.0843C57.0083 37.3146 55.1018 38.9297 51.2887 38.9297H48.1667V36.7318H51.2638C52.4127 36.7318 53.2535 36.4987 53.7864 36.0324C54.3192 35.5662 54.5856 34.8169 54.5856 33.7846C54.5856 32.8854 54.2942 32.1944 53.7114 31.7115C53.1453 31.2287 52.371 30.9872 51.3886 30.9872H48.916V28.9142H50.5145C51.4136 28.9142 52.1796 28.6728 52.8123 28.1899C53.4617 27.6904 53.7864 27.0243 53.7864 26.1918C53.7864 25.3925 53.5366 24.7265 53.0371 24.1937C52.5542 23.6608 51.7633 23.3944 50.6643 23.3944C49.6653 23.3944 48.8494 23.7108 48.2166 24.3435C47.5839 24.9596 47.2675 25.8671 47.2675 27.0659V38.9297ZM66.2938 31.8864V34.1342C65.6611 33.6514 64.8868 33.4099 63.971 33.4099C63.1884 33.4099 62.5807 33.5681 62.1478 33.8845C61.7148 34.1842 61.4984 34.6171 61.4984 35.1832C61.4984 36.2822 62.3143 36.8317 63.9461 36.8317H67.2429V32.0612C67.2429 30.0464 66.2605 29.0391 64.2957 29.0391H60.2995V26.9411H64.4206C66.0357 26.9411 67.2762 27.3407 68.1421 28.1399C69.0079 28.9392 69.4408 30.0881 69.4408 31.5867V38.9297H63.8711C62.4558 38.9297 61.3319 38.6133 60.4993 37.9806C59.6668 37.3479 59.2505 36.4237 59.2505 35.2082C59.2505 33.9927 59.6918 33.0686 60.5743 32.4358C61.4567 31.8031 62.564 31.4868 63.8961 31.4868C64.6454 31.4868 65.4446 31.62 66.2938 31.8864ZM82.127 38.9297H77.8061C75.9579 38.9297 74.6342 38.6549 73.8349 38.1055C73.1189 37.6226 72.661 37.0481 72.4612 36.3821C72.2781 35.6994 72.1865 34.8086 72.1865 33.7096V26.9411H74.3844V33.6847C74.3844 33.9844 74.3927 34.2425 74.4094 34.4589C74.426 34.6587 74.4843 34.9252 74.5842 35.2582C74.6841 35.5745 74.8256 35.841 75.0088 36.0574C75.192 36.2572 75.4584 36.4404 75.808 36.6069C76.1577 36.7567 76.5823 36.8317 77.0818 36.8317H79.9291V26.9411H82.127V38.9297ZM87.4579 21.4463V26.9411H89.5809C91.4292 26.9411 92.7529 27.2158 93.5521 27.7653C94.2681 28.2482 94.7177 28.8309 94.9009 29.5136C95.1007 30.1797 95.2006 31.0622 95.2006 32.1611V38.9297H93.0027V32.1861C93.0027 31.8864 92.9943 31.6366 92.9777 31.4368C92.961 31.2203 92.9028 30.9539 92.8028 30.6376C92.7029 30.3045 92.5614 30.0381 92.3783 29.8383C92.1951 29.6219 91.9287 29.4387 91.579 29.2888C91.2293 29.1223 90.8047 29.0391 90.3052 29.0391H87.4579V38.9297H85.26V21.4463H87.4579ZM99.5609 28.5146C100.726 27.2991 102.183 26.6913 103.932 26.6913C104.781 26.6913 105.572 26.8578 106.304 27.1908C107.054 27.5072 107.703 27.9484 108.253 28.5146C108.819 29.0807 109.26 29.7467 109.576 30.5127C109.893 31.262 110.051 32.0695 110.051 32.9354C110.051 33.8012 109.893 34.6171 109.576 35.3831C109.277 36.1323 108.852 36.7901 108.303 37.3562C107.753 37.9223 107.104 38.3719 106.354 38.7049C105.605 39.0213 104.798 39.1795 103.932 39.1795C103.049 39.1795 102.233 39.0213 101.484 38.7049C100.751 38.3719 100.11 37.9223 99.5609 37.3562C99.0114 36.7901 98.5785 36.1323 98.2621 35.3831C97.9624 34.6171 97.8125 33.8012 97.8125 32.9354C97.8125 31.1704 98.3953 29.6968 99.5609 28.5146ZM103.932 28.7893C102.766 28.7893 101.825 29.1723 101.109 29.9382C100.41 30.7042 100.06 31.7032 100.06 32.9354C100.06 34.1675 100.41 35.1666 101.109 35.9325C101.825 36.6985 102.766 37.0814 103.932 37.0814C105.114 37.0814 106.055 36.6985 106.754 35.9325C107.453 35.1499 107.803 34.1509 107.803 32.9354C107.803 31.7199 107.453 30.7291 106.754 29.9632C106.055 29.1806 105.114 28.7893 103.932 28.7893ZM122.616 38.9297H118.295C116.447 38.9297 115.123 38.6549 114.324 38.1055C113.608 37.6226 113.15 37.0481 112.95 36.3821C112.767 35.6994 112.675 34.8086 112.675 33.7096V26.9411H114.873V33.6847C114.873 33.9844 114.882 34.2425 114.898 34.4589C114.915 34.6587 114.973 34.9252 115.073 35.2582C115.173 35.5745 115.315 35.841 115.498 36.0574C115.681 36.2572 115.947 36.4404 116.297 36.6069C116.647 36.7567 117.071 36.8317 117.571 36.8317H120.418V26.9411H122.616V38.9297ZM134.066 26.9411V29.0391H129.645C129.162 29.0391 128.746 29.1307 128.396 29.3138C128.047 29.497 127.872 29.7551 127.872 30.0881C127.872 30.2879 127.914 30.471 127.997 30.6376C128.08 30.7874 128.172 30.9123 128.272 31.0122C128.388 31.1121 128.555 31.2203 128.771 31.3369C129.004 31.4368 129.179 31.5117 129.296 31.5617C129.429 31.595 129.962 31.7615 130.894 32.0612C131.826 32.3609 132.518 32.6107 132.967 32.8105C133.417 33.0103 133.758 33.285 133.991 33.6347C134.241 33.9677 134.399 34.3007 134.466 34.6338C134.532 34.9501 134.566 35.2665 134.566 35.5829C134.566 37.8141 133.034 38.9297 129.97 38.9297H125.649V36.8317H129.97C131.535 36.8317 132.318 36.4154 132.318 35.5829C132.318 35.1832 132.085 34.8502 131.618 34.5838C131.169 34.3174 130.611 34.0926 129.945 33.9095C129.296 33.7263 128.638 33.5182 127.972 33.285C127.322 33.0353 126.765 32.644 126.298 32.1112C125.849 31.5617 125.624 30.8873 125.624 30.0881C125.624 29.0724 126.015 28.2981 126.798 27.7653C127.581 27.2158 128.53 26.9411 129.645 26.9411H134.066ZM142.936 26.6913C145.766 26.8079 147.182 27.9817 147.182 30.213C147.182 32.9937 145.358 34.384 141.712 34.384H140.688V32.4608H141.887C143.002 32.4608 143.777 32.2943 144.21 31.9613C144.642 31.6116 144.859 31.0372 144.859 30.2379C144.859 29.7218 144.667 29.3388 144.284 29.089C143.902 28.8226 143.41 28.6894 142.811 28.6894C141.629 28.6894 140.696 29.1057 140.014 29.9382C139.347 30.7708 139.014 31.7698 139.014 32.9354C139.014 34.1675 139.372 35.1666 140.088 35.9325C140.821 36.6985 141.77 37.0814 142.936 37.0814C143.985 37.0814 144.842 36.8234 145.508 36.3072L147.007 37.7808C145.858 38.7132 144.501 39.1795 142.936 39.1795C141.038 39.1795 139.522 38.6216 138.39 37.506C137.258 36.3904 136.692 34.9501 136.692 33.1851C136.692 31.2203 137.249 29.6302 138.365 28.4147C139.481 27.1992 141.004 26.6247 142.936 26.6913Z" fill="#B9B9B9"/>
                                        <path d="M58.507 55.5957C58.3415 55.5957 58.2053 55.5422 58.0982 55.4351C57.9911 55.328 57.9376 55.1917 57.9376 55.0262V44.7614C57.9376 44.5959 57.9911 44.4596 58.0982 44.3525C58.2053 44.2454 58.3415 44.1919 58.507 44.1919H61.2375C61.9481 44.1919 62.5809 44.3428 63.1357 44.6446C63.6906 44.9366 64.1238 45.3503 64.4353 45.8857C64.7565 46.4113 64.9171 47.0197 64.9171 47.7109C64.9171 48.3728 64.7565 48.9617 64.4353 49.4777C64.1238 49.9936 63.6906 50.3976 63.1357 50.6896C62.5809 50.9816 61.9481 51.1276 61.2375 51.1276H59.0765V55.0262C59.0765 55.1917 59.023 55.328 58.9159 55.4351C58.8088 55.5422 58.6725 55.5957 58.507 55.5957ZM64.6105 55.5957C64.4839 55.5957 64.3817 55.5714 64.3038 55.5227C64.2357 55.474 64.1724 55.401 64.114 55.3037L61.3105 50.8356L62.4494 50.5436L65.0631 54.7196C65.2091 54.9532 65.2335 55.1577 65.1361 55.3329C65.0485 55.5081 64.8733 55.5957 64.6105 55.5957ZM59.0765 50.0325H61.2375C61.734 50.0325 62.172 49.9352 62.5517 49.7405C62.941 49.5361 63.2477 49.2586 63.4715 48.9082C63.6954 48.5578 63.8074 48.1587 63.8074 47.7109C63.8074 47.2339 63.6954 46.8153 63.4715 46.4551C63.2477 46.0852 62.941 45.7981 62.5517 45.5937C62.172 45.3892 61.734 45.287 61.2375 45.287H59.0765V50.0325ZM67.5332 55.5957C67.3677 55.5957 67.2314 55.5422 67.1243 55.4351C67.0172 55.328 66.9637 55.1917 66.9637 55.0262V44.7614C66.9637 44.5959 67.0172 44.4596 67.1243 44.3525C67.2314 44.2454 67.3677 44.1919 67.5332 44.1919H74.3813C74.537 44.1919 74.6685 44.2454 74.7755 44.3525C74.8923 44.4499 74.9507 44.5813 74.9507 44.7468C74.9507 44.8928 74.8923 45.0193 74.7755 45.1264C74.6685 45.2335 74.537 45.287 74.3813 45.287H68.1026V49.317H72.6729C72.8384 49.317 72.9747 49.3706 73.0818 49.4777C73.1888 49.5847 73.2424 49.7162 73.2424 49.8719C73.2424 50.0277 73.1888 50.1591 73.0818 50.2661C72.9747 50.3732 72.8384 50.4268 72.6729 50.4268H68.1026V54.5006H74.3813C74.537 54.5006 74.6685 54.5541 74.7755 54.6612C74.8923 54.7683 74.9507 54.8948 74.9507 55.0408C74.9507 55.2063 74.8923 55.3426 74.7755 55.4497C74.6685 55.547 74.537 55.5957 74.3813 55.5957H67.5332ZM76.4457 55.5957C76.2218 55.5957 76.0612 55.5032 75.9638 55.3183C75.8665 55.1333 75.8568 54.9532 75.9346 54.778L80.2275 44.5862C80.3346 44.3233 80.5195 44.1919 80.7823 44.1919C81.0354 44.1919 81.2155 44.3233 81.3226 44.5862L85.6301 54.7926C85.7177 54.9776 85.7031 55.1577 85.5863 55.3329C85.4792 55.5081 85.3234 55.5957 85.119 55.5957C85.0022 55.5957 84.8951 55.5665 84.7978 55.5081C84.7102 55.4497 84.6372 55.3621 84.5787 55.2453L80.5633 45.506H81.016L76.9713 55.2453C76.9227 55.3621 76.8497 55.4497 76.7523 55.5081C76.6647 55.5665 76.5625 55.5957 76.4457 55.5957ZM77.4094 52.8798L77.8474 51.9015H83.7757L84.2137 52.8798H77.4094ZM87.9097 55.5957C87.754 55.5957 87.6177 55.5422 87.5009 55.4351C87.3938 55.328 87.3403 55.1917 87.3403 55.0262V44.7614C87.3403 44.6056 87.3938 44.4742 87.5009 44.3671C87.6177 44.2503 87.754 44.1919 87.9097 44.1919C88.0655 44.1919 88.1969 44.2503 88.304 44.3671C88.4208 44.4742 88.4792 44.6056 88.4792 44.7614V54.5152H94.1884C94.3441 54.5152 94.4755 54.5687 94.5826 54.6758C94.6994 54.7732 94.7578 54.8997 94.7578 55.0554C94.7578 55.2112 94.6994 55.3426 94.5826 55.4497C94.4755 55.547 94.3441 55.5957 94.1884 55.5957H87.9097ZM101.428 55.5957C101.262 55.5957 101.126 55.5422 101.019 55.4351C100.912 55.328 100.858 55.1917 100.858 55.0262V44.7614C100.858 44.5959 100.912 44.4596 101.019 44.3525C101.126 44.2454 101.262 44.1919 101.428 44.1919H108.276C108.431 44.1919 108.563 44.2454 108.67 44.3525C108.787 44.4499 108.845 44.5813 108.845 44.7468C108.845 44.8928 108.787 45.0193 108.67 45.1264C108.563 45.2335 108.431 45.287 108.276 45.287H101.997V49.317H106.567C106.733 49.317 106.869 49.3706 106.976 49.4777C107.083 49.5847 107.137 49.7162 107.137 49.8719C107.137 50.0277 107.083 50.1591 106.976 50.2661C106.869 50.3732 106.733 50.4268 106.567 50.4268H101.997V54.5006H108.276C108.431 54.5006 108.563 54.5541 108.67 54.6612C108.787 54.7683 108.845 54.8948 108.845 55.0408C108.845 55.2063 108.787 55.3426 108.67 55.4497C108.563 55.547 108.431 55.5957 108.276 55.5957H101.428ZM114.472 55.7417C113.849 55.7417 113.27 55.6541 112.735 55.4789C112.209 55.2939 111.752 55.036 111.362 54.705C110.973 54.374 110.676 53.9895 110.471 53.5515C110.394 53.3957 110.389 53.2546 110.457 53.128C110.535 52.9918 110.661 52.8993 110.837 52.8506C110.973 52.8117 111.104 52.8263 111.231 52.8944C111.367 52.9626 111.469 53.0648 111.537 53.2011C111.683 53.4833 111.898 53.7364 112.18 53.9603C112.462 54.1842 112.798 54.3594 113.187 54.486C113.577 54.6028 114.005 54.6612 114.472 54.6612C114.988 54.6612 115.446 54.5785 115.845 54.413C116.244 54.2378 116.555 53.9895 116.779 53.6683C117.013 53.3373 117.13 52.9382 117.13 52.471C117.13 51.8772 116.911 51.3661 116.473 50.9378C116.035 50.5095 115.348 50.2369 114.414 50.1201C113.275 49.9838 112.384 49.6334 111.742 49.0688C111.099 48.4945 110.778 47.7936 110.778 46.9662C110.778 46.3724 110.934 45.8565 111.245 45.4184C111.567 44.9804 112.005 44.6446 112.559 44.4109C113.114 44.1676 113.752 44.0459 114.472 44.0459C115.008 44.0459 115.494 44.1335 115.932 44.3087C116.37 44.4742 116.75 44.6981 117.071 44.9804C117.402 45.253 117.67 45.5547 117.874 45.8857C117.972 46.0414 118.001 46.1923 117.962 46.3383C117.933 46.4843 117.85 46.5963 117.714 46.6742C117.568 46.7423 117.417 46.752 117.261 46.7034C117.115 46.6547 117.003 46.5622 116.925 46.4259C116.779 46.2021 116.594 45.9928 116.37 45.7981C116.156 45.5937 115.894 45.433 115.582 45.3162C115.271 45.1994 114.896 45.1361 114.458 45.1264C113.689 45.1264 113.071 45.2919 112.603 45.6229C112.136 45.9441 111.902 46.4162 111.902 47.0392C111.902 47.3702 111.99 47.6768 112.165 47.9591C112.34 48.2317 112.628 48.4702 113.027 48.6746C113.436 48.8693 113.981 49.0153 114.662 49.1126C115.879 49.2878 116.779 49.6626 117.363 50.2369C117.957 50.8015 118.254 51.5413 118.254 52.4564C118.254 52.982 118.157 53.4493 117.962 53.8581C117.777 54.267 117.509 54.6125 117.159 54.8948C116.818 55.1674 116.414 55.3767 115.947 55.5227C115.49 55.6687 114.998 55.7417 114.472 55.7417ZM123.366 55.5957C123.21 55.5957 123.074 55.5422 122.957 55.4351C122.85 55.3183 122.796 55.182 122.796 55.0262V44.1919H123.935V55.0262C123.935 55.182 123.882 55.3183 123.774 55.4351C123.667 55.5422 123.531 55.5957 123.366 55.5957ZM119.336 45.2286C119.18 45.2286 119.053 45.1799 118.956 45.0826C118.859 44.9853 118.81 44.8636 118.81 44.7176C118.81 44.5618 118.859 44.4353 118.956 44.3379C119.053 44.2406 119.18 44.1919 119.336 44.1919H127.41C127.566 44.1919 127.693 44.2406 127.79 44.3379C127.887 44.4353 127.936 44.5618 127.936 44.7176C127.936 44.8636 127.887 44.9853 127.79 45.0826C127.693 45.1799 127.566 45.2286 127.41 45.2286H119.336ZM127.822 55.5957C127.598 55.5957 127.437 55.5032 127.34 55.3183C127.243 55.1333 127.233 54.9532 127.311 54.778L131.604 44.5862C131.711 44.3233 131.896 44.1919 132.159 44.1919C132.412 44.1919 132.592 44.3233 132.699 44.5862L137.006 54.7926C137.094 54.9776 137.079 55.1577 136.963 55.3329C136.855 55.5081 136.7 55.5957 136.495 55.5957C136.378 55.5957 136.271 55.5665 136.174 55.5081C136.086 55.4497 136.013 55.3621 135.955 55.2453L131.94 45.506H132.392L128.348 55.2453C128.299 55.3621 128.226 55.4497 128.129 55.5081C128.041 55.5665 127.939 55.5957 127.822 55.5957ZM128.786 52.8798L129.224 51.9015H135.152L135.59 52.8798H128.786ZM140.862 55.5957C140.706 55.5957 140.57 55.5422 140.453 55.4351C140.346 55.3183 140.292 55.182 140.292 55.0262V44.1919H141.431V55.0262C141.431 55.182 141.378 55.3183 141.271 55.4351C141.164 55.5422 141.027 55.5957 140.862 55.5957ZM136.832 45.2286C136.676 45.2286 136.55 45.1799 136.452 45.0826C136.355 44.9853 136.306 44.8636 136.306 44.7176C136.306 44.5618 136.355 44.4353 136.452 44.3379C136.55 44.2406 136.676 44.1919 136.832 44.1919H144.906C145.062 44.1919 145.189 44.2406 145.286 44.3379C145.383 44.4353 145.432 44.5618 145.432 44.7176C145.432 44.8636 145.383 44.9853 145.286 45.0826C145.189 45.1799 145.062 45.2286 144.906 45.2286H136.832ZM147.685 55.5957C147.519 55.5957 147.383 55.5422 147.276 55.4351C147.169 55.328 147.115 55.1917 147.115 55.0262V44.7614C147.115 44.5959 147.169 44.4596 147.276 44.3525C147.383 44.2454 147.519 44.1919 147.685 44.1919H154.533C154.689 44.1919 154.82 44.2454 154.927 44.3525C155.044 44.4499 155.102 44.5813 155.102 44.7468C155.102 44.8928 155.044 45.0193 154.927 45.1264C154.82 45.2335 154.689 45.287 154.533 45.287H148.254V49.317H152.824C152.99 49.317 153.126 49.3706 153.233 49.4777C153.34 49.5847 153.394 49.7162 153.394 49.8719C153.394 50.0277 153.34 50.1591 153.233 50.2661C153.126 50.3732 152.99 50.4268 152.824 50.4268H148.254V54.5006H154.533C154.689 54.5006 154.82 54.5541 154.927 54.6612C155.044 54.7683 155.102 54.8948 155.102 55.0408C155.102 55.2063 155.044 55.3426 154.927 55.4497C154.82 55.547 154.689 55.5957 154.533 55.5957H147.685Z" fill="#B9B9B9"/>
                                        </g>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_13428_2256">
                                        <rect width="142.68" height="41.8449" fill="white" transform="translate(8.99976 19)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80" fill="white"/>
                                        <path d="M61.6716 7.87703C61.6716 8.24817 61.5616 8.61098 61.3554 8.91957C61.1492 9.22817 60.8561 9.46869 60.5132 9.61072C60.1703 9.75275 59.793 9.78991 59.429 9.7175C59.065 9.6451 58.7306 9.46637 58.4682 9.20394C58.2058 8.9415 58.027 8.60713 57.9546 8.24312C57.8822 7.87911 57.9194 7.5018 58.0614 7.15891C58.2035 6.81601 58.444 6.52294 58.7526 6.31674C59.0612 6.11055 59.424 6.00049 59.7951 6.00049C60.0417 6.00012 60.2858 6.0484 60.5137 6.14257C60.7415 6.23675 60.9485 6.37496 61.1229 6.54928C61.2972 6.72361 61.4354 6.93063 61.5296 7.15847C61.6237 7.38631 61.672 7.63049 61.6716 7.87703Z" fill="#E3E3E3"/>
                                        <path d="M70.6085 7.87703C70.6085 8.24829 70.4984 8.61121 70.2921 8.91987C70.0858 9.22852 69.7925 9.46904 69.4495 9.61099C69.1064 9.75293 68.729 9.78993 68.3649 9.71729C68.0008 9.64466 67.6664 9.46565 67.4041 9.20293C67.1418 8.94021 66.9633 8.60558 66.8912 8.24138C66.8191 7.87718 66.8567 7.49978 66.9991 7.15694C67.1416 6.8141 67.3826 6.52122 67.6915 6.31536C68.0005 6.10951 68.3636 5.99993 68.7348 6.00049C68.9811 6.00049 69.225 6.04905 69.4525 6.14339C69.68 6.23773 69.8867 6.376 70.0608 6.55029C70.2348 6.72458 70.3727 6.93147 70.4667 7.15912C70.5607 7.38678 70.6089 7.63073 70.6085 7.87703Z" fill="#E3E3E3"/>
                                        <path d="M88.4845 7.87703C88.4845 8.24817 88.3745 8.61098 88.1683 8.91957C87.9621 9.22817 87.669 9.46869 87.3261 9.61072C86.9832 9.75275 86.6059 9.78991 86.2419 9.7175C85.8779 9.6451 85.5435 9.46637 85.2811 9.20394C85.0186 8.9415 84.8399 8.60713 84.7675 8.24312C84.6951 7.87911 84.7323 7.5018 84.8743 7.15891C85.0163 6.81601 85.2568 6.52294 85.5654 6.31674C85.874 6.11055 86.2368 6.00049 86.608 6.00049C86.8545 6.00012 87.0987 6.0484 87.3265 6.14257C87.5544 6.23675 87.7614 6.37496 87.9357 6.54928C88.1101 6.72361 88.2483 6.93063 88.3424 7.15847C88.4366 7.38631 88.4849 7.63049 88.4845 7.87703Z" fill="#E3E3E3"/>
                                        <path d="M97.4214 7.87703C97.4214 8.24829 97.3113 8.61121 97.105 8.91987C96.8986 9.22852 96.6054 9.46904 96.2623 9.61099C95.9193 9.75293 95.5418 9.78993 95.1777 9.71729C94.8136 9.64466 94.4793 9.46565 94.217 9.20293C93.9546 8.94021 93.7761 8.60558 93.704 8.24138C93.632 7.87718 93.6695 7.49978 93.812 7.15694C93.9545 6.8141 94.1954 6.52122 94.5044 6.31536C94.8134 6.10951 95.1764 5.99993 95.5477 6.00049C95.794 6.00049 96.0379 6.04905 96.2654 6.14339C96.4929 6.23773 96.6996 6.376 96.8736 6.55029C97.0476 6.72458 97.1856 6.93147 97.2796 7.15912C97.3736 7.38678 97.4218 7.63073 97.4214 7.87703Z" fill="#E3E3E3"/>
                                        <path d="M61.6716 16.8853C61.6716 17.2565 61.5616 17.6193 61.3554 17.9279C61.1492 18.2365 60.8561 18.477 60.5132 18.619C60.1703 18.761 59.793 18.7982 59.429 18.7258C59.065 18.6534 58.7306 18.4747 58.4682 18.2122C58.2058 17.9498 58.027 17.6154 57.9546 17.2514C57.8822 16.8874 57.9194 16.5101 58.0614 16.1672C58.2035 15.8243 58.444 15.5312 58.7526 15.325C59.0612 15.1188 59.424 15.0088 59.7951 15.0088C60.0417 15.0084 60.2858 15.0567 60.5137 15.1509C60.7415 15.245 60.9485 15.3833 61.1229 15.5576C61.2972 15.7319 61.4354 15.9389 61.5296 16.1668C61.6237 16.3946 61.672 16.6388 61.6716 16.8853Z" fill="#E3E3E3"/>
                                        <path d="M70.6085 16.8853C70.6085 17.2566 70.4984 17.6195 70.2921 17.9282C70.0858 18.2368 69.7925 18.4773 69.4495 18.6193C69.1064 18.7612 68.729 18.7982 68.3649 18.7256C68.0008 18.653 67.6664 18.474 67.4041 18.2112C67.1418 17.9485 66.9633 17.6139 66.8912 17.2497C66.8191 16.8855 66.8567 16.5081 66.9991 16.1652C67.1416 15.8224 67.3826 15.5295 67.6915 15.3237C68.0005 15.1178 68.3636 15.0082 68.7348 15.0088C68.9811 15.0088 69.225 15.0573 69.4525 15.1517C69.68 15.246 69.8867 15.3843 70.0608 15.5586C70.2348 15.7329 70.3727 15.9398 70.4667 16.1674C70.5607 16.3951 70.6089 16.639 70.6085 16.8853Z" fill="#E3E3E3"/>
                                        <path d="M97.4214 16.8853C97.4214 17.2566 97.3113 17.6195 97.105 17.9282C96.8986 18.2368 96.6054 18.4773 96.2623 18.6193C95.9193 18.7612 95.5418 18.7982 95.1777 18.7256C94.8136 18.653 94.4793 18.474 94.217 18.2112C93.9546 17.9485 93.7761 17.6139 93.704 17.2497C93.632 16.8855 93.6695 16.5081 93.812 16.1652C93.9545 15.8224 94.1954 15.5295 94.5044 15.3237C94.8134 15.1178 95.1764 15.0082 95.5477 15.0088C95.794 15.0088 96.0379 15.0573 96.2654 15.1517C96.4929 15.246 96.6996 15.3843 96.8736 15.5586C97.0476 15.7329 97.1856 15.9398 97.2796 16.1674C97.3736 16.3951 97.4218 16.639 97.4214 16.8853Z" fill="#E3E3E3"/>
                                        <path d="M61.6716 25.8941C61.6716 26.2653 61.5616 26.6281 61.3554 26.9367C61.1492 27.2453 60.8561 27.4858 60.5132 27.6278C60.1703 27.7698 59.793 27.807 59.429 27.7346C59.065 27.6622 58.7306 27.4835 58.4682 27.221C58.2058 26.9586 58.027 26.6242 57.9546 26.2602C57.8822 25.8962 57.9194 25.5189 58.0614 25.176C58.2035 24.8331 58.444 24.54 58.7526 24.3338C59.0612 24.1276 59.424 24.0176 59.7951 24.0176C60.0417 24.0172 60.2858 24.0655 60.5137 24.1597C60.7415 24.2538 60.9485 24.392 61.1229 24.5664C61.2972 24.7407 61.4354 24.9477 61.5296 25.1756C61.6237 25.4034 61.672 25.6476 61.6716 25.8941Z" fill="#E3E3E3"/>
                                        <path d="M60.3106 34.9028H59.2816V43.9113H60.3106V34.9028Z" fill="#B9B9B9"/>
                                        <path d="M69.2486 25.894H68.2196V43.9111H69.2486V25.894Z" fill="#B9B9B9"/>
                                        <path d="M78.1855 7.87695H77.1565V43.9138H78.1855V7.87695Z" fill="#B9B9B9"/>
                                        <path d="M87.1235 16.8857H86.0945V43.9113H87.1235V16.8857Z" fill="#B9B9B9"/>
                                        <path d="M96.0636 25.894H95.0347V43.9111H96.0636V25.894Z" fill="#B9B9B9"/>
                                        <path d="M75.7968 16.8853C75.7968 17.2565 75.9068 17.6193 76.113 17.9279C76.3192 18.2365 76.6123 18.477 76.9552 18.619C77.2981 18.761 77.6754 18.7982 78.0394 18.7258C78.4034 18.6534 78.7378 18.4747 79.0002 18.2122C79.2626 17.9498 79.4414 17.6154 79.5138 17.2514C79.5862 16.8874 79.549 16.5101 79.407 16.1672C79.265 15.8243 79.0244 15.5312 78.7158 15.325C78.4072 15.1188 78.0444 15.0088 77.6733 15.0088C77.4268 15.0084 77.1826 15.0567 76.9547 15.1509C76.7269 15.245 76.5199 15.3833 76.3455 15.5576C76.1712 15.7319 76.033 15.9389 75.9388 16.1668C75.8447 16.3946 75.7964 16.6388 75.7968 16.8853Z" fill="#B9B9B9"/>
                                        <path d="M66.8588 25.8941C66.8588 26.2653 66.9688 26.6281 67.175 26.9367C67.3812 27.2453 67.6743 27.4858 68.0172 27.6278C68.3601 27.7698 68.7374 27.807 69.1014 27.7346C69.4654 27.6622 69.7998 27.4835 70.0622 27.221C70.3247 26.9586 70.5034 26.6242 70.5758 26.2602C70.6482 25.8962 70.611 25.5189 70.469 25.176C70.327 24.8331 70.0864 24.54 69.7778 24.3338C69.4693 24.1276 69.1064 24.0176 68.7353 24.0176C68.4888 24.0172 68.2446 24.0655 68.0167 24.1597C67.7889 24.2538 67.5819 24.392 67.4076 24.5664C67.2332 24.7407 67.095 24.9477 67.0008 25.1756C66.9067 25.4034 66.8584 25.6476 66.8588 25.8941Z" fill="#B9B9B9"/>
                                        <path d="M75.7968 25.8941C75.7968 26.2653 75.9068 26.6281 76.113 26.9367C76.3192 27.2453 76.6123 27.4858 76.9552 27.6278C77.2981 27.7698 77.6754 27.807 78.0394 27.7346C78.4034 27.6622 78.7378 27.4835 79.0002 27.221C79.2626 26.9586 79.4414 26.6242 79.5138 26.2602C79.5862 25.8962 79.549 25.5189 79.407 25.176C79.265 24.8331 79.0244 24.54 78.7158 24.3338C78.4072 24.1276 78.0444 24.0176 77.6733 24.0176C77.4268 24.0172 77.1826 24.0655 76.9547 24.1597C76.7269 24.2538 76.5199 24.392 76.3455 24.5664C76.1712 24.7407 76.033 24.9477 75.9388 25.1756C75.8447 25.4034 75.7964 25.6476 75.7968 25.8941Z" fill="#B9B9B9"/>
                                        <path d="M93.6716 25.8941C93.6716 26.2653 93.7817 26.6281 93.9879 26.9367C94.1941 27.2453 94.4872 27.4858 94.8301 27.6278C95.1729 27.7698 95.5503 27.807 95.9143 27.7346C96.2783 27.6622 96.6126 27.4835 96.8751 27.221C97.1375 26.9586 97.3162 26.6242 97.3886 26.2602C97.4611 25.8962 97.4239 25.5189 97.2819 25.176C97.1398 24.8331 96.8993 24.54 96.5907 24.3338C96.2821 24.1276 95.9193 24.0176 95.5482 24.0176C95.3016 24.0172 95.0574 24.0655 94.8296 24.1597C94.6018 24.2538 94.3948 24.392 94.2204 24.5664C94.0461 24.7407 93.9079 24.9477 93.8137 25.1756C93.7195 25.4034 93.6713 25.6476 93.6716 25.8941Z" fill="#B9B9B9"/>
                                        <path d="M57.9208 34.9142C57.9202 35.2856 58.0299 35.6488 58.2359 35.9578C58.4418 36.2669 58.7349 36.5078 59.0779 36.6502C59.4209 36.7926 59.7984 36.83 60.1627 36.7577C60.527 36.6854 60.8616 36.5066 61.1242 36.244C61.3868 35.9814 61.5656 35.6467 61.6379 35.2825C61.7102 34.9182 61.6728 34.5406 61.5305 34.1976C61.3881 33.8546 61.1471 33.5616 60.8381 33.3556C60.5291 33.1496 60.1659 33.04 59.7945 33.0405C59.2978 33.0413 58.8216 33.2389 58.4704 33.5902C58.1192 33.9414 57.9215 34.4175 57.9208 34.9142Z" fill="#B9B9B9"/>
                                        <path d="M66.8588 34.9142C66.8582 35.2855 66.9678 35.6486 67.1736 35.9575C67.3795 36.2665 67.6724 36.5075 68.0152 36.6499C68.3581 36.7924 68.7355 36.83 69.0997 36.7579C69.4639 36.6858 69.7985 36.5073 70.0612 36.245C70.3239 35.9827 70.5029 35.6483 70.5756 35.2842C70.6482 34.9201 70.6112 34.5427 70.4693 34.1996C70.3273 33.8565 70.0868 33.5633 69.7781 33.357C69.4695 33.1507 69.1066 33.0405 68.7353 33.0405C68.2381 33.0405 67.7612 33.2378 67.4094 33.5891C67.0576 33.9405 66.8595 34.417 66.8588 34.9142Z" fill="#B9B9B9"/>
                                        <path d="M75.7968 34.9142C75.7962 35.2855 75.9058 35.6486 76.1116 35.9575C76.3175 36.2665 76.6104 36.5075 76.9532 36.6499C77.296 36.7924 77.6734 36.83 78.0376 36.7579C78.4018 36.6858 78.7365 36.5073 78.9992 36.245C79.2619 35.9827 79.4409 35.6483 79.5136 35.2842C79.5862 34.9201 79.5492 34.5427 79.4073 34.1996C79.2653 33.8565 79.0248 33.5633 78.7161 33.357C78.4075 33.1507 78.0446 33.0405 77.6733 33.0405C77.1761 33.0405 76.6992 33.2378 76.3474 33.5891C75.9955 33.9405 75.7975 34.417 75.7968 34.9142Z" fill="#B9B9B9"/>
                                        <path d="M84.7336 34.9142C84.7331 35.2856 84.8427 35.6488 85.0487 35.9578C85.2547 36.2669 85.5477 36.5078 85.8908 36.6502C86.2338 36.7926 86.6113 36.83 86.9756 36.7577C87.3399 36.6854 87.6745 36.5066 87.9371 36.244C88.1997 35.9814 88.3785 35.6467 88.4508 35.2825C88.5231 34.9182 88.4857 34.5406 88.3433 34.1976C88.2009 33.8546 87.96 33.5616 87.651 33.3556C87.3419 33.1496 86.9787 33.04 86.6073 33.0405C86.1106 33.0413 85.6345 33.2389 85.2833 33.5902C84.932 33.9414 84.7344 34.4175 84.7336 34.9142Z" fill="#B9B9B9"/>
                                        <path d="M93.6716 34.9142C93.6711 35.2855 93.7807 35.6486 93.9865 35.9575C94.1924 36.2665 94.4852 36.5075 94.8281 36.6499C95.1709 36.7924 95.5483 36.83 95.9125 36.7579C96.2767 36.6858 96.6114 36.5073 96.8741 36.245C97.1368 35.9827 97.3158 35.6483 97.3884 35.2842C97.4611 34.9201 97.4241 34.5427 97.2821 34.1996C97.1402 33.8565 96.8997 33.5633 96.591 33.357C96.2824 33.1507 95.9194 33.0405 95.5482 33.0405C95.051 33.0405 94.5741 33.2378 94.2223 33.5891C93.8704 33.9405 93.6724 34.417 93.6716 34.9142Z" fill="#B9B9B9"/>
                                        <path d="M57.9208 43.9113C57.9202 44.2827 58.0299 44.6459 58.2359 44.9549C58.4418 45.2639 58.7349 45.5049 59.0779 45.6473C59.4209 45.7897 59.7984 45.8271 60.1627 45.7547C60.527 45.6824 60.8616 45.5037 61.1242 45.241C61.3868 44.9784 61.5656 44.6438 61.6379 44.2795C61.7102 43.9153 61.6728 43.5377 61.5305 43.1947C61.3881 42.8517 61.1471 42.5587 60.8381 42.3527C60.5291 42.1467 60.1659 42.037 59.7945 42.0376C59.2978 42.0383 58.8216 42.236 58.4704 42.5872C58.1192 42.9384 57.9215 43.4146 57.9208 43.9113Z" fill="#B9B9B9"/>
                                        <path d="M66.8588 43.9113C66.8582 44.2826 66.9678 44.6456 67.1736 44.9546C67.3795 45.2636 67.6724 45.5045 68.0152 45.647C68.3581 45.7895 68.7355 45.827 69.0997 45.755C69.4639 45.6829 69.7985 45.5044 70.0612 45.242C70.3239 44.9797 70.5029 44.6454 70.5756 44.2813C70.6482 43.9172 70.6112 43.5397 70.4693 43.1967C70.3273 42.8536 70.0868 42.5604 69.7781 42.354C69.4695 42.1477 69.1066 42.0376 68.7353 42.0376C68.2381 42.0376 67.7612 42.2349 67.4094 42.5862C67.0576 42.9375 66.8595 43.4141 66.8588 43.9113Z" fill="#B9B9B9"/>
                                        <path d="M75.7968 43.9113C75.7962 44.2826 75.9058 44.6456 76.1116 44.9546C76.3175 45.2636 76.6104 45.5045 76.9532 45.647C77.296 45.7895 77.6734 45.827 78.0376 45.755C78.4018 45.6829 78.7365 45.5044 78.9992 45.242C79.2619 44.9797 79.4409 44.6454 79.5136 44.2813C79.5862 43.9172 79.5492 43.5397 79.4073 43.1967C79.2653 42.8536 79.0248 42.5604 78.7161 42.354C78.4075 42.1477 78.0446 42.0376 77.6733 42.0376C77.1761 42.0376 76.6992 42.2349 76.3474 42.5862C75.9955 42.9375 75.7975 43.4141 75.7968 43.9113Z" fill="#B9B9B9"/>
                                        <path d="M84.7336 43.9113C84.7331 44.2827 84.8427 44.6459 85.0487 44.9549C85.2547 45.2639 85.5477 45.5049 85.8908 45.6473C86.2338 45.7897 86.6113 45.8271 86.9756 45.7547C87.3399 45.6824 87.6745 45.5037 87.9371 45.241C88.1997 44.9784 88.3785 44.6438 88.4508 44.2795C88.5231 43.9153 88.4857 43.5377 88.3433 43.1947C88.2009 42.8517 87.96 42.5587 87.651 42.3527C87.3419 42.1467 86.9787 42.037 86.6073 42.0376C86.1106 42.0383 85.6345 42.236 85.2833 42.5872C84.932 42.9384 84.7344 43.4146 84.7336 43.9113Z" fill="#B9B9B9"/>
                                        <path d="M93.6716 43.9113C93.6711 44.2826 93.7807 44.6456 93.9865 44.9546C94.1924 45.2636 94.4852 45.5045 94.8281 45.647C95.1709 45.7895 95.5483 45.827 95.9125 45.755C96.2767 45.6829 96.6114 45.5044 96.8741 45.242C97.1368 44.9797 97.3158 44.6454 97.3884 44.2813C97.4611 43.9172 97.4241 43.5397 97.2821 43.1967C97.1402 42.8536 96.8997 42.5604 96.591 42.354C96.2824 42.1477 95.9194 42.0376 95.5482 42.0376C95.051 42.0376 94.5741 42.2349 94.2223 42.5862C93.8704 42.9375 93.6724 43.4141 93.6716 43.9113Z" fill="#B9B9B9"/>
                                        <path d="M75.7968 7.87703C75.7968 8.24817 75.9068 8.61098 76.113 8.91957C76.3192 9.22817 76.6123 9.46869 76.9552 9.61072C77.2981 9.75275 77.6754 9.78991 78.0394 9.7175C78.4034 9.6451 78.7378 9.46637 79.0002 9.20394C79.2626 8.9415 79.4414 8.60713 79.5138 8.24312C79.5862 7.87911 79.549 7.5018 79.407 7.15891C79.265 6.81601 79.0244 6.52294 78.7158 6.31674C78.4072 6.11055 78.0444 6.00049 77.6733 6.00049C77.4268 6.00012 77.1826 6.0484 76.9547 6.14257C76.7269 6.23675 76.5199 6.37496 76.3455 6.54928C76.1712 6.72361 76.033 6.93063 75.9388 7.15847C75.8447 7.38631 75.7964 7.63049 75.7968 7.87703Z" fill="#B9B9B9"/>
                                        <path d="M84.7336 16.8853C84.7336 17.2566 84.8438 17.6195 85.0501 17.9282C85.2564 18.2368 85.5497 18.4773 85.8927 18.6193C86.2358 18.7612 86.6132 18.7982 86.9773 18.7256C87.3414 18.653 87.6758 18.474 87.9381 18.2112C88.2004 17.9485 88.3789 17.6139 88.451 17.2497C88.5231 16.8855 88.4855 16.5081 88.3431 16.1652C88.2006 15.8224 87.9596 15.5295 87.6507 15.3237C87.3417 15.1178 86.9786 15.0082 86.6073 15.0088C86.361 15.0088 86.1172 15.0573 85.8897 15.1517C85.6621 15.246 85.4555 15.3843 85.2814 15.5586C85.1074 15.7329 84.9695 15.9398 84.8755 16.1674C84.7815 16.3951 84.7333 16.639 84.7336 16.8853Z" fill="#E3E3E3"/>
                                        <path d="M84.7336 25.8941C84.7336 26.2654 84.8438 26.6283 85.0501 26.937C85.2564 27.2456 85.5497 27.4861 85.8927 27.6281C86.2358 27.77 86.6132 27.807 86.9773 27.7344C87.3414 27.6617 87.6758 27.4827 87.9381 27.22C88.2004 26.9573 88.3789 26.6227 88.451 26.2585C88.5231 25.8943 88.4855 25.5169 88.3431 25.174C88.2006 24.8312 87.9596 24.5383 87.6507 24.3325C87.3417 24.1266 86.9786 24.017 86.6073 24.0176C86.361 24.0176 86.1172 24.0661 85.8897 24.1605C85.6621 24.2548 85.4555 24.3931 85.2814 24.5674C85.1074 24.7417 84.9695 24.9486 84.8755 25.1762C84.7815 25.4039 84.7333 25.6478 84.7336 25.8941Z" fill="#B9B9B9"/>
                                        <path d="M43.2187 64.2095H41.4812L46.5068 50.5228H48.2176L53.2432 64.2095H51.5056L47.4156 52.6881H47.3087L43.2187 64.2095ZM43.8603 58.8631H50.864V60.3334H43.8603V58.8631ZM59.3314 64.4233C58.369 64.4233 57.5403 64.1961 56.8453 63.7417C56.1503 63.2872 55.6156 62.6613 55.2414 61.8638C54.8671 61.0663 54.68 60.1551 54.68 59.1304C54.68 58.0879 54.8716 57.1679 55.2548 56.3704C55.6424 55.5684 56.1815 54.9424 56.872 54.4925C57.5671 54.038 58.3779 53.8108 59.3046 53.8108C60.0264 53.8108 60.6769 53.9444 61.256 54.2118C61.8352 54.4791 62.3097 54.8533 62.6795 55.3345C63.0493 55.8157 63.2788 56.377 63.3679 57.0186H61.7907C61.6704 56.5508 61.4031 56.1365 60.9887 55.7756C60.5788 55.4102 60.0264 55.2276 59.3314 55.2276C58.7165 55.2276 58.1774 55.388 57.7141 55.7087C57.2552 56.0251 56.8965 56.4728 56.6381 57.052C56.3842 57.6268 56.2572 58.3017 56.2572 59.077C56.2572 59.87 56.3819 60.5606 56.6314 61.1487C56.8854 61.7368 57.2418 62.1934 57.7007 62.5187C58.1641 62.8439 58.7076 63.0065 59.3314 63.0065C59.7412 63.0065 60.1133 62.9353 60.4474 62.7927C60.7816 62.6501 61.0645 62.4452 61.2961 62.1779C61.5278 61.9105 61.6927 61.5898 61.7907 61.2155H63.3679C63.2788 61.8214 63.0582 62.3672 62.7063 62.8528C62.3587 63.334 61.8976 63.7172 61.3229 64.0023C60.7526 64.283 60.0888 64.4233 59.3314 64.4233ZM69.8437 64.4233C68.8813 64.4233 68.0526 64.1961 67.3576 63.7417C66.6626 63.2872 66.1279 62.6613 65.7537 61.8638C65.3794 61.0663 65.1923 60.1551 65.1923 59.1304C65.1923 58.0879 65.3839 57.1679 65.767 56.3704C66.1547 55.5684 66.6937 54.9424 67.3843 54.4925C68.0793 54.038 68.8902 53.8108 69.8169 53.8108C70.5387 53.8108 71.1892 53.9444 71.7683 54.2118C72.3475 54.4791 72.822 54.8533 73.1918 55.3345C73.5616 55.8157 73.7911 56.377 73.8802 57.0186H72.303C72.1827 56.5508 71.9154 56.1365 71.501 55.7756C71.0911 55.4102 70.5387 55.2276 69.8437 55.2276C69.2288 55.2276 68.6897 55.388 68.2264 55.7087C67.7675 56.0251 67.4088 56.4728 67.1504 57.052C66.8965 57.6268 66.7695 58.3017 66.7695 59.077C66.7695 59.87 66.8942 60.5606 67.1437 61.1487C67.3977 61.7368 67.7541 62.1934 68.213 62.5187C68.6764 62.8439 69.2199 63.0065 69.8437 63.0065C70.2535 63.0065 70.6256 62.9353 70.9597 62.7927C71.2939 62.6501 71.5768 62.4452 71.8084 62.1779C72.0401 61.9105 72.205 61.5898 72.303 61.2155H73.8802C73.7911 61.8214 73.5705 62.3672 73.2185 62.8528C72.871 63.334 72.4099 63.7172 71.8352 64.0023C71.2649 64.283 70.6011 64.4233 69.8437 64.4233ZM82.6549 60.0126V53.9444H84.2321V64.2095H82.6549V62.4719H82.548C82.3074 62.9932 81.9331 63.4365 81.4252 63.8018C80.9173 64.1627 80.2757 64.3431 79.5005 64.3431C78.859 64.3431 78.2887 64.2028 77.7897 63.9221C77.2907 63.637 76.8986 63.2093 76.6135 62.639C76.3283 62.0642 76.1858 61.3403 76.1858 60.467V53.9444H77.763V60.3601C77.763 61.1086 77.9724 61.7056 78.3912 62.1511C78.8144 62.5967 79.3535 62.8194 80.0084 62.8194C80.4005 62.8194 80.7992 62.7192 81.2047 62.5187C81.6146 62.3182 81.9576 62.0108 82.2339 61.5964C82.5145 61.1821 82.6549 60.6541 82.6549 60.0126ZM94.3918 56.2434L92.975 56.6444C92.8859 56.4082 92.7545 56.1788 92.5807 55.956C92.4114 55.7288 92.1798 55.5417 91.8857 55.3946C91.5917 55.2476 91.2152 55.1741 90.7563 55.1741C90.1281 55.1741 89.6046 55.3189 89.1858 55.6085C88.7715 55.8936 88.5643 56.2568 88.5643 56.6978C88.5643 57.0899 88.7069 57.3995 88.992 57.6268C89.2771 57.854 89.7227 58.0433 90.3286 58.1948L91.8523 58.5691C92.7701 58.7918 93.454 59.1327 93.904 59.5915C94.354 60.046 94.579 60.6319 94.579 61.3492C94.579 61.9373 94.4096 62.463 94.071 62.9263C93.7369 63.3897 93.2691 63.755 92.6676 64.0223C92.0662 64.2897 91.3667 64.4233 90.5692 64.4233C89.5222 64.4233 88.6556 64.1961 87.9695 63.7417C87.2834 63.2872 86.849 62.6234 86.6663 61.7501L88.1633 61.3759C88.3059 61.9284 88.5754 62.3427 88.9719 62.6189C89.3729 62.8952 89.8964 63.0333 90.5424 63.0333C91.2776 63.0333 91.8612 62.8773 92.2934 62.5655C92.73 62.2491 92.9483 61.8704 92.9483 61.4294C92.9483 61.0729 92.8236 60.7744 92.5741 60.5338C92.3246 60.2888 91.9414 60.1061 91.4246 59.9858L89.7138 59.5849C88.7737 59.3621 88.0831 59.0168 87.642 58.549C87.2054 58.0767 86.9871 57.4864 86.9871 56.778C86.9871 56.1988 87.1497 55.6865 87.475 55.2409C87.8047 54.7954 88.2524 54.4457 88.8182 54.1917C89.3885 53.9378 90.0345 53.8108 90.7563 53.8108C91.7721 53.8108 92.5696 54.0336 93.1488 54.4791C93.7324 54.9246 94.1468 55.5127 94.3918 56.2434ZM99.9738 64.4501C99.3233 64.4501 98.733 64.3275 98.2028 64.0825C97.6726 63.833 97.2516 63.4743 96.9397 63.0065C96.6278 62.5343 96.4719 61.964 96.4719 61.2957C96.4719 60.7076 96.5877 60.2309 96.8194 59.8655C97.0511 59.4958 97.3607 59.2062 97.7483 58.9968C98.136 58.7874 98.5637 58.6314 99.0315 58.529C99.5037 58.422 99.9782 58.3374 100.455 58.275C101.079 58.1948 101.584 58.1347 101.972 58.0946C102.364 58.05 102.649 57.9765 102.827 57.874C103.01 57.7716 103.101 57.5933 103.101 57.3394V57.2859C103.101 56.6265 102.921 56.1142 102.56 55.7488C102.204 55.3835 101.662 55.2008 100.936 55.2008C100.183 55.2008 99.5928 55.3657 99.1651 55.6954C98.7374 56.0251 98.4367 56.377 98.2629 56.7513L96.7659 56.2167C97.0333 55.5929 97.3897 55.1073 97.8352 54.7598C98.2852 54.4078 98.7753 54.1628 99.3055 54.0246C99.8401 53.8821 100.366 53.8108 100.883 53.8108C101.212 53.8108 101.591 53.8509 102.019 53.9311C102.451 54.0068 102.867 54.165 103.268 54.4056C103.674 54.6462 104.01 55.0093 104.278 55.4949C104.545 55.9805 104.679 56.631 104.679 57.4463V64.2095H103.101V62.8194H103.021C102.914 63.0422 102.736 63.2805 102.487 63.5345C102.237 63.7884 101.905 64.0045 101.491 64.1827C101.076 64.361 100.571 64.4501 99.9738 64.4501ZM100.214 63.0333C100.838 63.0333 101.364 62.9108 101.792 62.6657C102.224 62.4207 102.549 62.1043 102.767 61.7167C102.99 61.3291 103.101 60.9215 103.101 60.4937V59.0502C103.035 59.1304 102.888 59.2039 102.66 59.2708C102.438 59.3331 102.179 59.3888 101.885 59.4378C101.595 59.4824 101.313 59.5225 101.036 59.5581C100.765 59.5893 100.544 59.6161 100.375 59.6383C99.9649 59.6918 99.5817 59.7787 99.2253 59.899C98.8733 60.0148 98.5882 60.1908 98.3699 60.4269C98.156 60.6586 98.0491 60.9749 98.0491 61.3759C98.0491 61.9239 98.2518 62.3382 98.6572 62.6189C99.0671 62.8952 99.5862 63.0333 100.214 63.0333ZM112.128 53.9444V55.281H106.595V53.9444H112.128ZM108.252 64.2095V52.5277C108.252 51.9396 108.39 51.4495 108.667 51.0574C108.943 50.6653 109.302 50.3713 109.743 50.1753C110.184 49.9792 110.649 49.8812 111.139 49.8812C111.527 49.8812 111.843 49.9124 112.088 49.9748C112.333 50.0371 112.516 50.0951 112.636 50.1485L112.182 51.5119C112.102 51.4851 111.99 51.4517 111.848 51.4116C111.71 51.3715 111.527 51.3515 111.3 51.3515C110.778 51.3515 110.402 51.4829 110.17 51.7458C109.943 52.0086 109.829 52.394 109.829 52.9019V64.2095H108.252Z" fill="#B9B9B9"/>
                                        <path d="M42.2901 73.0542C42.1434 73.0542 42.0103 73.0266 41.8907 72.9714C41.7712 72.9151 41.6762 72.8342 41.6059 72.7288C41.5356 72.6223 41.5004 72.4937 41.5004 72.343C41.5004 72.2104 41.5266 72.1029 41.5788 72.0205C41.631 71.9371 41.7009 71.8718 41.7883 71.8246C41.8757 71.7774 41.9721 71.7422 42.0776 71.7191C42.1841 71.695 42.2911 71.6759 42.3986 71.6619C42.5392 71.6438 42.6532 71.6302 42.7406 71.6212C42.829 71.6111 42.8933 71.5946 42.9335 71.5714C42.9747 71.5483 42.9953 71.5082 42.9953 71.4509V71.4388C42.9953 71.2902 42.9546 71.1746 42.8732 71.0922C42.7929 71.0099 42.6708 70.9687 42.5071 70.9687C42.3373 70.9687 42.2042 71.0059 42.1077 71.0802C42.0113 71.1545 41.9435 71.2339 41.9043 71.3183L41.5667 71.1977C41.627 71.0571 41.7074 70.9476 41.8079 70.8692C41.9093 70.7899 42.0198 70.7346 42.1394 70.7035C42.2599 70.6713 42.3785 70.6552 42.495 70.6552C42.5693 70.6552 42.6547 70.6643 42.7512 70.6824C42.8486 70.6994 42.9426 70.7351 43.033 70.7894C43.1244 70.8436 43.2002 70.9255 43.2605 71.035C43.3208 71.1445 43.3509 71.2912 43.3509 71.475V73H42.9953V72.6866H42.9772C42.9531 72.7368 42.9129 72.7905 42.8567 72.8478C42.8004 72.9051 42.7256 72.9538 42.6321 72.994C42.5387 73.0342 42.4247 73.0542 42.2901 73.0542ZM42.3443 72.7348C42.485 72.7348 42.6035 72.7072 42.6999 72.6519C42.7974 72.5966 42.8707 72.5253 42.92 72.4379C42.9702 72.3505 42.9953 72.2586 42.9953 72.1622V71.8367C42.9802 71.8547 42.9471 71.8713 42.8958 71.8864C42.8456 71.9005 42.7873 71.913 42.721 71.9241C42.6557 71.9341 42.5919 71.9432 42.5297 71.9512C42.4684 71.9582 42.4187 71.9642 42.3805 71.9693C42.2881 71.9813 42.2017 72.0009 42.1213 72.028C42.0419 72.0542 41.9776 72.0938 41.9284 72.1471C41.8802 72.1993 41.8561 72.2707 41.8561 72.3611C41.8561 72.4846 41.9018 72.5781 41.9932 72.6414C42.0856 72.7036 42.2027 72.7348 42.3443 72.7348ZM44.9403 73.0482C44.7234 73.0482 44.5365 72.997 44.3798 72.8945C44.2231 72.792 44.1025 72.6509 44.0181 72.4711C43.9337 72.2912 43.8915 72.0858 43.8915 71.8547C43.8915 71.6197 43.9347 71.4122 44.0211 71.2324C44.1085 71.0516 44.2301 70.9104 44.3858 70.8089C44.5425 70.7065 44.7254 70.6552 44.9343 70.6552C45.0971 70.6552 45.2437 70.6854 45.3743 70.7457C45.5049 70.8059 45.6119 70.8903 45.6953 70.9988C45.7787 71.1073 45.8304 71.2339 45.8505 71.3786H45.4949C45.4678 71.2731 45.4075 71.1797 45.3141 71.0983C45.2216 71.0159 45.0971 70.9747 44.9403 70.9747C44.8017 70.9747 44.6802 71.0109 44.5757 71.0832C44.4722 71.1545 44.3913 71.2555 44.3331 71.3861C44.2758 71.5157 44.2472 71.6679 44.2472 71.8427C44.2472 72.0215 44.2753 72.1772 44.3316 72.3098C44.3888 72.4424 44.4692 72.5454 44.5727 72.6188C44.6771 72.6921 44.7997 72.7288 44.9403 72.7288C45.0328 72.7288 45.1167 72.7127 45.192 72.6805C45.2673 72.6484 45.3311 72.6022 45.3834 72.5419C45.4356 72.4816 45.4728 72.4093 45.4949 72.3249H45.8505C45.8304 72.4615 45.7807 72.5846 45.7013 72.6941C45.623 72.8026 45.519 72.889 45.3894 72.9533C45.2608 73.0166 45.1111 73.0482 44.9403 73.0482ZM47.3107 73.0482C47.0937 73.0482 46.9069 72.997 46.7501 72.8945C46.5934 72.792 46.4729 72.6509 46.3885 72.4711C46.3041 72.2912 46.2619 72.0858 46.2619 71.8547C46.2619 71.6197 46.3051 71.4122 46.3915 71.2324C46.4789 71.0516 46.6005 70.9104 46.7562 70.8089C46.9129 70.7065 47.0957 70.6552 47.3047 70.6552C47.4674 70.6552 47.6141 70.6854 47.7447 70.7457C47.8753 70.8059 47.9823 70.8903 48.0657 70.9988C48.1491 71.1073 48.2008 71.2339 48.2209 71.3786H47.8653C47.8381 71.2731 47.7779 71.1797 47.6844 71.0983C47.592 71.0159 47.4674 70.9747 47.3107 70.9747C47.1721 70.9747 47.0505 71.0109 46.946 71.0832C46.8426 71.1545 46.7617 71.2555 46.7034 71.3861C46.6462 71.5157 46.6175 71.6679 46.6175 71.8427C46.6175 72.0215 46.6457 72.1772 46.7019 72.3098C46.7592 72.4424 46.8396 72.5454 46.943 72.6188C47.0475 72.6921 47.1701 72.7288 47.3107 72.7288C47.4031 72.7288 47.487 72.7127 47.5624 72.6805C47.6377 72.6484 47.7015 72.6022 47.7538 72.5419C47.806 72.4816 47.8432 72.4093 47.8653 72.3249H48.2209C48.2008 72.4615 48.1511 72.5846 48.0717 72.6941C47.9934 72.8026 47.8894 72.889 47.7598 72.9533C47.6312 73.0166 47.4815 73.0482 47.3107 73.0482ZM49.6811 73.0482C49.4721 73.0482 49.2888 72.9985 49.1311 72.899C48.9743 72.7996 48.8518 72.6604 48.7634 72.4816C48.676 72.3028 48.6323 72.0938 48.6323 71.8547C48.6323 71.6136 48.676 71.4032 48.7634 71.2234C48.8518 71.0435 48.9743 70.9039 49.1311 70.8044C49.2888 70.705 49.4721 70.6552 49.6811 70.6552C49.8901 70.6552 50.0729 70.705 50.2296 70.8044C50.3873 70.9039 50.5099 71.0435 50.5973 71.2234C50.6857 71.4032 50.7299 71.6136 50.7299 71.8547C50.7299 72.0938 50.6857 72.3028 50.5973 72.4816C50.5099 72.6604 50.3873 72.7996 50.2296 72.899C50.0729 72.9985 49.8901 73.0482 49.6811 73.0482ZM49.6811 72.7288C49.8398 72.7288 49.9704 72.6881 50.0729 72.6067C50.1754 72.5253 50.2512 72.4183 50.3004 72.2857C50.3497 72.1531 50.3743 72.0095 50.3743 71.8547C50.3743 71.7 50.3497 71.5559 50.3004 71.4223C50.2512 71.2887 50.1754 71.1807 50.0729 71.0983C49.9704 71.0159 49.8398 70.9747 49.6811 70.9747C49.5224 70.9747 49.3918 71.0159 49.2893 71.0983C49.1868 71.1807 49.111 71.2887 49.0618 71.4223C49.0125 71.5559 48.9879 71.7 48.9879 71.8547C48.9879 72.0095 49.0125 72.1531 49.0618 72.2857C49.111 72.4183 49.1868 72.5253 49.2893 72.6067C49.3918 72.6881 49.5224 72.7288 49.6811 72.7288ZM52.7315 72.0537V70.6854H53.0871V73H52.7315V72.6082H52.7073C52.6531 72.7257 52.5687 72.8257 52.4542 72.9081C52.3397 72.9895 52.195 73.0301 52.0202 73.0301C51.8755 73.0301 51.7469 72.9985 51.6344 72.9352C51.5219 72.8709 51.4335 72.7745 51.3692 72.6459C51.3049 72.5163 51.2728 72.353 51.2728 72.1561V70.6854H51.6284V72.132C51.6284 72.3008 51.6756 72.4354 51.77 72.5359C51.8655 72.6363 51.987 72.6866 52.1347 72.6866C52.2231 72.6866 52.313 72.664 52.4045 72.6188C52.4969 72.5735 52.5742 72.5042 52.6365 72.4108C52.6998 72.3174 52.7315 72.1983 52.7315 72.0537ZM54.0941 71.6076V73H53.7385V70.6854H54.082V71.047H54.1122C54.1664 70.9295 54.2488 70.8351 54.3593 70.7637C54.4698 70.6914 54.6125 70.6552 54.7873 70.6552C54.944 70.6552 55.0811 70.6874 55.1987 70.7517C55.3162 70.815 55.4076 70.9114 55.4729 71.041C55.5382 71.1696 55.5709 71.3324 55.5709 71.5293V73H55.2152V71.5534C55.2152 71.3715 55.168 71.2299 55.0736 71.1284C54.9791 71.0259 54.8495 70.9747 54.6848 70.9747C54.5713 70.9747 54.4698 70.9993 54.3804 71.0485C54.292 71.0978 54.2222 71.1696 54.1709 71.264C54.1197 71.3585 54.0941 71.473 54.0941 71.6076ZM57.2273 70.6854V70.9868H56.0278V70.6854H57.2273ZM56.3774 70.1308H56.7331V72.337C56.7331 72.4374 56.7476 72.5128 56.7768 72.563C56.8069 72.6122 56.8451 72.6454 56.8913 72.6625C56.9385 72.6785 56.9882 72.6866 57.0405 72.6866C57.0797 72.6866 57.1118 72.6846 57.1369 72.6805C57.162 72.6755 57.1821 72.6715 57.1972 72.6685L57.2695 72.9879C57.2454 72.997 57.2118 73.006 57.1686 73.0151C57.1254 73.0251 57.0706 73.0301 57.0043 73.0301C56.9038 73.0301 56.8054 73.0085 56.709 72.9653C56.6135 72.9221 56.5342 72.8563 56.4709 72.7679C56.4086 72.6795 56.3774 72.568 56.3774 72.4334V70.1308ZM57.7623 73V70.6854H58.1179V73H57.7623ZM57.9431 70.2996C57.8738 70.2996 57.814 70.276 57.7638 70.2288C57.7146 70.1816 57.69 70.1248 57.69 70.0585C57.69 69.9922 57.7146 69.9354 57.7638 69.8882C57.814 69.841 57.8738 69.8174 57.9431 69.8174C58.0124 69.8174 58.0717 69.841 58.1209 69.8882C58.1712 69.9354 58.1963 69.9922 58.1963 70.0585C58.1963 70.1248 58.1712 70.1816 58.1209 70.2288C58.0717 70.276 58.0124 70.2996 57.9431 70.2996ZM59.1249 71.6076V73H58.7693V70.6854H59.1129V71.047H59.143C59.1972 70.9295 59.2796 70.8351 59.3901 70.7637C59.5006 70.6914 59.6433 70.6552 59.8181 70.6552C59.9748 70.6552 60.1119 70.6874 60.2295 70.7517C60.347 70.815 60.4384 70.9114 60.5037 71.041C60.569 71.1696 60.6017 71.3324 60.6017 71.5293V73H60.2461V71.5534C60.2461 71.3715 60.1988 71.2299 60.1044 71.1284C60.01 71.0259 59.8804 70.9747 59.7156 70.9747C59.6021 70.9747 59.5006 70.9993 59.4112 71.0485C59.3228 71.0978 59.253 71.1696 59.2018 71.264C59.1505 71.3585 59.1249 71.473 59.1249 71.6076ZM62.1858 73.9162C62.014 73.9162 61.8664 73.8941 61.7428 73.8499C61.6192 73.8067 61.5163 73.7494 61.4339 73.6781C61.3525 73.6078 61.2877 73.5324 61.2395 73.4521L61.5228 73.2532C61.5549 73.2954 61.5956 73.3436 61.6448 73.3978C61.6941 73.4531 61.7614 73.5008 61.8468 73.541C61.9332 73.5822 62.0462 73.6028 62.1858 73.6028C62.3727 73.6028 62.5269 73.5576 62.6484 73.4671C62.77 73.3767 62.8308 73.2351 62.8308 73.0422V72.572H62.8006C62.7745 72.6142 62.7374 72.6665 62.6891 72.7288C62.6419 72.79 62.5736 72.8448 62.4842 72.893C62.3958 72.9402 62.2762 72.9638 62.1255 72.9638C61.9387 72.9638 61.7709 72.9196 61.6222 72.8312C61.4746 72.7428 61.3575 72.6142 61.2711 72.4455C61.1857 72.2767 61.143 72.0717 61.143 71.8306C61.143 71.5935 61.1847 71.3871 61.2681 71.2113C61.3515 71.0345 61.4675 70.8979 61.6162 70.8014C61.7649 70.704 61.9367 70.6552 62.1316 70.6552C62.2823 70.6552 62.4018 70.6804 62.4902 70.7306C62.5796 70.7798 62.6479 70.8361 62.6952 70.8994C62.7434 70.9617 62.7806 71.0129 62.8067 71.0531H62.8428V70.6854H63.1864V73.0663C63.1864 73.2652 63.1412 73.427 63.0508 73.5515C62.9614 73.6771 62.8408 73.769 62.6891 73.8273C62.5384 73.8866 62.3707 73.9162 62.1858 73.9162ZM62.1738 72.6444C62.3164 72.6444 62.437 72.6117 62.5354 72.5464C62.6339 72.4811 62.7087 72.3872 62.76 72.2646C62.8112 72.1421 62.8368 71.9954 62.8368 71.8246C62.8368 71.6578 62.8117 71.5107 62.7615 71.3831C62.7112 71.2555 62.6369 71.1555 62.5384 71.0832C62.44 71.0109 62.3184 70.9747 62.1738 70.9747C62.0231 70.9747 61.8975 71.0129 61.797 71.0892C61.6976 71.1656 61.6227 71.2681 61.5725 71.3966C61.5233 71.5252 61.4987 71.6679 61.4987 71.8246C61.4987 71.9853 61.5238 72.1275 61.574 72.2511C61.6253 72.3736 61.7006 72.4701 61.8001 72.5404C61.9005 72.6097 62.0251 72.6444 62.1738 72.6444ZM65.9049 73.0422C65.702 73.0422 65.5272 73.005 65.3805 72.9307C65.2338 72.8563 65.1208 72.7544 65.0414 72.6248C64.9621 72.4952 64.9224 72.347 64.9224 72.1802C64.9224 72.0516 64.9495 71.9376 65.0037 71.8382C65.059 71.7377 65.1349 71.6448 65.2313 71.5594C65.3287 71.473 65.4408 71.3866 65.5673 71.3002L66.0134 70.9687C66.1008 70.9114 66.1706 70.8501 66.2228 70.7848C66.2761 70.7195 66.3027 70.6341 66.3027 70.5287C66.3027 70.4503 66.268 70.3745 66.1987 70.3011C66.1304 70.2278 66.0405 70.1911 65.929 70.1911C65.8506 70.1911 65.7813 70.2112 65.721 70.2514C65.6618 70.2906 65.6151 70.3408 65.5809 70.4021C65.5477 70.4624 65.5312 70.5246 65.5312 70.5889C65.5312 70.6613 65.5508 70.7346 65.5899 70.8089C65.6301 70.8823 65.6809 70.9576 65.7421 71.035C65.8044 71.1113 65.8687 71.1897 65.935 71.2701L67.3515 73H66.9236L65.7542 71.5895C65.6457 71.4589 65.5472 71.3404 65.4588 71.2339C65.3704 71.1274 65.3001 71.0224 65.2479 70.919C65.1956 70.8155 65.1695 70.7035 65.1695 70.5829C65.1695 70.4443 65.2002 70.3227 65.2614 70.2182C65.3237 70.1128 65.4106 70.0309 65.5221 69.9726C65.6346 69.9133 65.7662 69.8837 65.9169 69.8837C66.0716 69.8837 66.2048 69.9138 66.3163 69.9741C66.4278 70.0334 66.5137 70.1123 66.574 70.2107C66.6342 70.3082 66.6644 70.4141 66.6644 70.5287C66.6644 70.6763 66.6277 70.8044 66.5544 70.9129C66.481 71.0214 66.3811 71.1224 66.2545 71.2158L65.6397 71.6739C65.501 71.7764 65.4071 71.8758 65.3579 71.9723C65.3086 72.0687 65.284 72.138 65.284 72.1802C65.284 72.2767 65.3092 72.3666 65.3594 72.45C65.4096 72.5334 65.4804 72.6007 65.5719 72.6519C65.6633 72.7031 65.7703 72.7288 65.8928 72.7288C66.0094 72.7288 66.1229 72.7041 66.2334 72.6549C66.3439 72.6047 66.4439 72.5324 66.5333 72.4379C66.6237 72.3435 66.695 72.23 66.7472 72.0974C66.8005 71.9648 66.8271 71.8156 66.8271 71.6498H67.1707C67.1707 71.8547 67.1471 72.022 67.0999 72.1516C67.0526 72.2812 66.9994 72.3827 66.9401 72.456C66.8809 72.5293 66.8331 72.5841 66.797 72.6203C66.7849 72.6353 66.7739 72.6504 66.7638 72.6655C66.7538 72.6805 66.7427 72.6956 66.7307 72.7107C66.6312 72.8222 66.5056 72.9056 66.3539 72.9608C66.2022 73.0151 66.0526 73.0422 65.9049 73.0422ZM69.9694 70.6854V70.9868H68.7217V70.6854H69.9694ZM69.0954 73V70.3659C69.0954 70.2333 69.1265 70.1228 69.1888 70.0344C69.2511 69.946 69.332 69.8797 69.4314 69.8355C69.5309 69.7913 69.6359 69.7692 69.7464 69.7692C69.8338 69.7692 69.9051 69.7762 69.9604 69.7903C70.0156 69.8043 70.0568 69.8174 70.0839 69.8295L69.9815 70.1369C69.9634 70.1308 69.9383 70.1233 69.9061 70.1143C69.875 70.1052 69.8338 70.1007 69.7825 70.1007C69.665 70.1007 69.5801 70.1303 69.5279 70.1896C69.4766 70.2489 69.451 70.3358 69.451 70.4503V73H69.0954ZM70.4678 73V70.6854H70.8234V73H70.4678ZM70.6486 70.2996C70.5793 70.2996 70.5196 70.276 70.4693 70.2288C70.4201 70.1816 70.3955 70.1248 70.3955 70.0585C70.3955 69.9922 70.4201 69.9354 70.4693 69.8882C70.5196 69.841 70.5793 69.8174 70.6486 69.8174C70.718 69.8174 70.7772 69.841 70.8265 69.8882C70.8767 69.9354 70.9018 69.9922 70.9018 70.0585C70.9018 70.1248 70.8767 70.1816 70.8265 70.2288C70.7772 70.276 70.718 70.2996 70.6486 70.2996ZM71.8304 71.6076V73H71.4748V70.6854H71.8184V71.047H71.8485C71.9028 70.9295 71.9851 70.8351 72.0957 70.7637C72.2062 70.6914 72.3488 70.6552 72.5236 70.6552C72.6803 70.6552 72.8175 70.6874 72.935 70.7517C73.0525 70.815 73.144 70.9114 73.2093 71.041C73.2746 71.1696 73.3072 71.3324 73.3072 71.5293V73H72.9516V71.5534C72.9516 71.3715 72.9044 71.2299 72.8099 71.1284C72.7155 71.0259 72.5859 70.9747 72.4211 70.9747C72.3076 70.9747 72.2062 70.9993 72.1168 71.0485C72.0283 71.0978 71.9585 71.1696 71.9073 71.264C71.8561 71.3585 71.8304 71.473 71.8304 71.6076ZM74.6382 73.0542C74.4915 73.0542 74.3584 73.0266 74.2389 72.9714C74.1193 72.9151 74.0244 72.8342 73.9541 72.7288C73.8837 72.6223 73.8486 72.4937 73.8486 72.343C73.8486 72.2104 73.8747 72.1029 73.9269 72.0205C73.9792 71.9371 74.049 71.8718 74.1364 71.8246C74.2238 71.7774 74.3202 71.7422 74.4257 71.7191C74.5322 71.695 74.6392 71.6759 74.7467 71.6619C74.8873 71.6438 75.0014 71.6302 75.0888 71.6212C75.1772 71.6111 75.2415 71.5946 75.2816 71.5714C75.3228 71.5483 75.3434 71.5082 75.3434 71.4509V71.4388C75.3434 71.2902 75.3027 71.1746 75.2214 71.0922C75.141 71.0099 75.0189 70.9687 74.8552 70.9687C74.6854 70.9687 74.5523 71.0059 74.4559 71.0802C74.3594 71.1545 74.2916 71.2339 74.2524 71.3183L73.9149 71.1977C73.9752 71.0571 74.0555 70.9476 74.156 70.8692C74.2574 70.7899 74.368 70.7346 74.4875 70.7035C74.6081 70.6713 74.7266 70.6552 74.8431 70.6552C74.9175 70.6552 75.0029 70.6643 75.0993 70.6824C75.1968 70.6994 75.2907 70.7351 75.3811 70.7894C75.4725 70.8436 75.5484 70.9255 75.6086 71.035C75.6689 71.1445 75.6991 71.2912 75.6991 71.475V73H75.3434V72.6866H75.3253C75.3012 72.7368 75.2611 72.7905 75.2048 72.8478C75.1485 72.9051 75.0737 72.9538 74.9803 72.994C74.8868 73.0342 74.7728 73.0542 74.6382 73.0542ZM74.6924 72.7348C74.8331 72.7348 74.9516 72.7072 75.0481 72.6519C75.1455 72.5966 75.2189 72.5253 75.2681 72.4379C75.3183 72.3505 75.3434 72.2586 75.3434 72.1622V71.8367C75.3284 71.8547 75.2952 71.8713 75.244 71.8864C75.1937 71.9005 75.1355 71.913 75.0692 71.9241C75.0039 71.9341 74.9401 71.9432 74.8778 71.9512C74.8165 71.9582 74.7668 71.9642 74.7286 71.9693C74.6362 71.9813 74.5498 72.0009 74.4694 72.028C74.3901 72.0542 74.3258 72.0938 74.2765 72.1471C74.2283 72.1993 74.2042 72.2707 74.2042 72.3611C74.2042 72.4846 74.2499 72.5781 74.3413 72.6414C74.4338 72.7036 74.5508 72.7348 74.6924 72.7348ZM76.7038 71.6076V73H76.3482V70.6854H76.6917V71.047H76.7219C76.7761 70.9295 76.8585 70.8351 76.969 70.7637C77.0795 70.6914 77.2222 70.6552 77.397 70.6552C77.5537 70.6552 77.6908 70.6874 77.8084 70.7517C77.9259 70.815 78.0173 70.9114 78.0826 71.041C78.1479 71.1696 78.1806 71.3324 78.1806 71.5293V73H77.8249V71.5534C77.8249 71.3715 77.7777 71.2299 77.6833 71.1284C77.5889 71.0259 77.4593 70.9747 77.2945 70.9747C77.181 70.9747 77.0795 70.9993 76.9901 71.0485C76.9017 71.0978 76.8319 71.1696 76.7806 71.264C76.7294 71.3585 76.7038 71.473 76.7038 71.6076ZM79.7707 73.0482C79.5537 73.0482 79.3669 72.997 79.2102 72.8945C79.0534 72.792 78.9329 72.6509 78.8485 72.4711C78.7641 72.2912 78.7219 72.0858 78.7219 71.8547C78.7219 71.6197 78.7651 71.4122 78.8515 71.2324C78.9389 71.0516 79.0605 70.9104 79.2162 70.8089C79.3729 70.7065 79.5557 70.6552 79.7647 70.6552C79.9275 70.6552 80.0741 70.6854 80.2047 70.7457C80.3353 70.8059 80.4423 70.8903 80.5257 70.9988C80.6091 71.1073 80.6608 71.2339 80.6809 71.3786H80.3253C80.2982 71.2731 80.2379 71.1797 80.1444 71.0983C80.052 71.0159 79.9275 70.9747 79.7707 70.9747C79.6321 70.9747 79.5105 71.0109 79.4061 71.0832C79.3026 71.1545 79.2217 71.2555 79.1634 71.3861C79.1062 71.5157 79.0776 71.6679 79.0776 71.8427C79.0776 72.0215 79.1057 72.1772 79.1619 72.3098C79.2192 72.4424 79.2996 72.5454 79.403 72.6188C79.5075 72.6921 79.6301 72.7288 79.7707 72.7288C79.8632 72.7288 79.947 72.7127 80.0224 72.6805C80.0977 72.6484 80.1615 72.6022 80.2138 72.5419C80.266 72.4816 80.3032 72.4093 80.3253 72.3249H80.6809C80.6608 72.4615 80.6111 72.5846 80.5317 72.6941C80.4534 72.8026 80.3494 72.889 80.2198 72.9533C80.0912 73.0166 79.9415 73.0482 79.7707 73.0482ZM81.2008 73V70.6854H81.5564V73H81.2008ZM81.3816 70.2996C81.3123 70.2996 81.2525 70.276 81.2023 70.2288C81.1531 70.1816 81.1285 70.1248 81.1285 70.0585C81.1285 69.9922 81.1531 69.9354 81.2023 69.8882C81.2525 69.841 81.3123 69.8174 81.3816 69.8174C81.4509 69.8174 81.5102 69.841 81.5594 69.8882C81.6097 69.9354 81.6348 69.9922 81.6348 70.0585C81.6348 70.1248 81.6097 70.1816 81.5594 70.2288C81.5102 70.276 81.4509 70.2996 81.3816 70.2996ZM82.8889 73.0542C82.7422 73.0542 82.6091 73.0266 82.4896 72.9714C82.37 72.9151 82.2751 72.8342 82.2048 72.7288C82.1345 72.6223 82.0993 72.4937 82.0993 72.343C82.0993 72.2104 82.1254 72.1029 82.1777 72.0205C82.2299 71.9371 82.2997 71.8718 82.3871 71.8246C82.4745 71.7774 82.571 71.7422 82.6764 71.7191C82.7829 71.695 82.8899 71.6759 82.9974 71.6619C83.1381 71.6438 83.2521 71.6302 83.3395 71.6212C83.4279 71.6111 83.4922 71.5946 83.5324 71.5714C83.5736 71.5483 83.5941 71.5082 83.5941 71.4509V71.4388C83.5941 71.2902 83.5535 71.1746 83.4721 71.0922C83.3917 71.0099 83.2697 70.9687 83.1059 70.9687C82.9361 70.9687 82.803 71.0059 82.7066 71.0802C82.6101 71.1545 82.5423 71.2339 82.5031 71.3183L82.1656 71.1977C82.2259 71.0571 82.3062 70.9476 82.4067 70.8692C82.5082 70.7899 82.6187 70.7346 82.7382 70.7035C82.8588 70.6713 82.9773 70.6552 83.0939 70.6552C83.1682 70.6552 83.2536 70.6643 83.35 70.6824C83.4475 70.6994 83.5414 70.7351 83.6318 70.7894C83.7232 70.8436 83.7991 70.9255 83.8594 71.035C83.9196 71.1445 83.9498 71.2912 83.9498 71.475V73H83.5941V72.6866H83.5761C83.552 72.7368 83.5118 72.7905 83.4555 72.8478C83.3993 72.9051 83.3244 72.9538 83.231 72.994C83.1376 73.0342 83.0235 73.0542 82.8889 73.0542ZM82.9432 72.7348C83.0838 72.7348 83.2024 72.7072 83.2988 72.6519C83.3962 72.5966 83.4696 72.5253 83.5188 72.4379C83.569 72.3505 83.5941 72.2586 83.5941 72.1622V71.8367C83.5791 71.8547 83.5459 71.8713 83.4947 71.8864C83.4445 71.9005 83.3862 71.913 83.3199 71.9241C83.2546 71.9341 83.1908 71.9432 83.1285 71.9512C83.0672 71.9582 83.0175 71.9642 82.9793 71.9693C82.8869 71.9813 82.8005 72.0009 82.7201 72.028C82.6408 72.0542 82.5765 72.0938 82.5273 72.1471C82.479 72.1993 82.4549 72.2707 82.4549 72.3611C82.4549 72.4846 82.5006 72.5781 82.5921 72.6414C82.6845 72.7036 82.8015 72.7348 82.9432 72.7348ZM84.9545 69.9138V73H84.5989V69.9138H84.9545ZM86.7994 73V70.6854H87.1429V71.047H87.1731C87.2213 70.9235 87.2991 70.8275 87.4066 70.7592C87.5141 70.6899 87.6432 70.6552 87.7939 70.6552C87.9466 70.6552 88.0737 70.6899 88.1752 70.7592C88.2776 70.8275 88.3575 70.9235 88.4148 71.047H88.4389C88.4981 70.9275 88.5871 70.8326 88.7056 70.7622C88.8241 70.6909 88.9663 70.6552 89.1321 70.6552C89.339 70.6552 89.5083 70.72 89.6399 70.8496C89.7715 70.9782 89.8373 71.1786 89.8373 71.4509V73H89.4817V71.4509C89.4817 71.2801 89.4349 71.1581 89.3415 71.0847C89.2481 71.0114 89.1381 70.9747 89.0115 70.9747C88.8488 70.9747 88.7227 71.0239 88.6333 71.1224C88.5439 71.2198 88.4991 71.3434 88.4991 71.4931V73H88.1375V71.4147C88.1375 71.2831 88.0948 71.1771 88.0094 71.0968C87.924 71.0154 87.814 70.9747 87.6794 70.9747C87.587 70.9747 87.5006 70.9993 87.4202 71.0485C87.3408 71.0978 87.2765 71.1661 87.2273 71.2535C87.1791 71.3399 87.155 71.4398 87.155 71.5534V73H86.7994ZM91.1686 73.0542C91.022 73.0542 90.8889 73.0266 90.7693 72.9714C90.6498 72.9151 90.5548 72.8342 90.4845 72.7288C90.4142 72.6223 90.379 72.4937 90.379 72.343C90.379 72.2104 90.4051 72.1029 90.4574 72.0205C90.5096 71.9371 90.5794 71.8718 90.6668 71.8246C90.7542 71.7774 90.8507 71.7422 90.9562 71.7191C91.0627 71.695 91.1696 71.6759 91.2771 71.6619C91.4178 71.6438 91.5318 71.6302 91.6192 71.6212C91.7076 71.6111 91.7719 71.5946 91.8121 71.5714C91.8533 71.5483 91.8739 71.5082 91.8739 71.4509V71.4388C91.8739 71.2902 91.8332 71.1746 91.7518 71.0922C91.6714 71.0099 91.5494 70.9687 91.3856 70.9687C91.2159 70.9687 91.0827 71.0059 90.9863 71.0802C90.8899 71.1545 90.8221 71.2339 90.7829 71.3183L90.4453 71.1977C90.5056 71.0571 90.586 70.9476 90.6864 70.8692C90.7879 70.7899 90.8984 70.7346 91.018 70.7035C91.1385 70.6713 91.257 70.6552 91.3736 70.6552C91.4479 70.6552 91.5333 70.6643 91.6298 70.6824C91.7272 70.6994 91.8211 70.7351 91.9116 70.7894C92.003 70.8436 92.0788 70.9255 92.1391 71.035C92.1994 71.1445 92.2295 71.2912 92.2295 71.475V73H91.8739V72.6866H91.8558C91.8317 72.7368 91.7915 72.7905 91.7352 72.8478C91.679 72.9051 91.6041 72.9538 91.5107 72.994C91.4173 73.0342 91.3033 73.0542 91.1686 73.0542ZM91.2229 72.7348C91.3635 72.7348 91.4821 72.7072 91.5785 72.6519C91.676 72.5966 91.7493 72.5253 91.7985 72.4379C91.8488 72.3505 91.8739 72.2586 91.8739 72.1622V71.8367C91.8588 71.8547 91.8257 71.8713 91.7744 71.8864C91.7242 71.9005 91.6659 71.913 91.5996 71.9241C91.5343 71.9341 91.4705 71.9432 91.4082 71.9512C91.347 71.9582 91.2972 71.9642 91.2591 71.9693C91.1666 71.9813 91.0802 72.0009 90.9999 72.028C90.9205 72.0542 90.8562 72.0938 90.807 72.1471C90.7588 72.1993 90.7347 72.2707 90.7347 72.3611C90.7347 72.4846 90.7804 72.5781 90.8718 72.6414C90.9642 72.7036 91.0812 72.7348 91.2229 72.7348ZM93.2342 71.6076V73H92.8786V70.6854H93.2222V71.047H93.2523C93.3066 70.9295 93.3889 70.8351 93.4995 70.7637C93.61 70.6914 93.7526 70.6552 93.9274 70.6552C94.0841 70.6552 94.2213 70.6874 94.3388 70.7517C94.4563 70.815 94.5478 70.9114 94.6131 71.041C94.6784 71.1696 94.711 71.3324 94.711 71.5293V73H94.3554V71.5534C94.3554 71.3715 94.3082 71.2299 94.2137 71.1284C94.1193 71.0259 93.9897 70.9747 93.8249 70.9747C93.7114 70.9747 93.61 70.9993 93.5206 71.0485C93.4321 71.0978 93.3623 71.1696 93.3111 71.264C93.2599 71.3585 93.2342 71.473 93.2342 71.6076ZM96.042 73.0542C95.8953 73.0542 95.7622 73.0266 95.6427 72.9714C95.5231 72.9151 95.4282 72.8342 95.3579 72.7288C95.2875 72.6223 95.2524 72.4937 95.2524 72.343C95.2524 72.2104 95.2785 72.1029 95.3307 72.0205C95.383 71.9371 95.4528 71.8718 95.5402 71.8246C95.6276 71.7774 95.724 71.7422 95.8295 71.7191C95.936 71.695 96.043 71.6759 96.1505 71.6619C96.2911 71.6438 96.4052 71.6302 96.4926 71.6212C96.581 71.6111 96.6453 71.5946 96.6854 71.5714C96.7266 71.5483 96.7472 71.5082 96.7472 71.4509V71.4388C96.7472 71.2902 96.7065 71.1746 96.6252 71.0922C96.5448 71.0099 96.4227 70.9687 96.259 70.9687C96.0892 70.9687 95.9561 71.0059 95.8597 71.0802C95.7632 71.1545 95.6954 71.2339 95.6562 71.3183L95.3187 71.1977C95.379 71.0571 95.4593 70.9476 95.5598 70.8692C95.6612 70.7899 95.7718 70.7346 95.8913 70.7035C96.0119 70.6713 96.1304 70.6552 96.2469 70.6552C96.3213 70.6552 96.4067 70.6643 96.5031 70.6824C96.6006 70.6994 96.6945 70.7351 96.7849 70.7894C96.8763 70.8436 96.9522 70.9255 97.0124 71.035C97.0727 71.1445 97.1029 71.2912 97.1029 71.475V73H96.7472V72.6866H96.7291C96.705 72.7368 96.6649 72.7905 96.6086 72.8478C96.5523 72.9051 96.4775 72.9538 96.3841 72.994C96.2906 73.0342 96.1766 73.0542 96.042 73.0542ZM96.0962 72.7348C96.2369 72.7348 96.3554 72.7072 96.4519 72.6519C96.5493 72.5966 96.6227 72.5253 96.6719 72.4379C96.7221 72.3505 96.7472 72.2586 96.7472 72.1622V71.8367C96.7322 71.8547 96.699 71.8713 96.6478 71.8864C96.5975 71.9005 96.5393 71.913 96.473 71.9241C96.4077 71.9341 96.3439 71.9432 96.2816 71.9512C96.2203 71.9582 96.1706 71.9642 96.1324 71.9693C96.04 71.9813 95.9536 72.0009 95.8732 72.028C95.7939 72.0542 95.7296 72.0938 95.6803 72.1471C95.6321 72.1993 95.608 72.2707 95.608 72.3611C95.608 72.4846 95.6537 72.5781 95.7451 72.6414C95.8376 72.7036 95.9546 72.7348 96.0962 72.7348ZM98.6863 73.9162C98.5145 73.9162 98.3668 73.8941 98.2432 73.8499C98.1197 73.8067 98.0167 73.7494 97.9343 73.6781C97.8529 73.6078 97.7881 73.5324 97.7399 73.4521L98.0232 73.2532C98.0554 73.2954 98.096 73.3436 98.1453 73.3978C98.1945 73.4531 98.2618 73.5008 98.3472 73.541C98.4336 73.5822 98.5466 73.6028 98.6863 73.6028C98.8731 73.6028 99.0273 73.5576 99.1489 73.4671C99.2704 73.3767 99.3312 73.2351 99.3312 73.0422V72.572H99.3011C99.275 72.6142 99.2378 72.6665 99.1896 72.7288C99.1423 72.79 99.074 72.8448 98.9846 72.893C98.8962 72.9402 98.7767 72.9638 98.626 72.9638C98.4391 72.9638 98.2713 72.9196 98.1227 72.8312C97.975 72.7428 97.858 72.6142 97.7716 72.4455C97.6862 72.2767 97.6435 72.0717 97.6435 71.8306C97.6435 71.5935 97.6852 71.3871 97.7685 71.2113C97.8519 71.0345 97.968 70.8979 98.1166 70.8014C98.2653 70.704 98.4371 70.6552 98.632 70.6552C98.7827 70.6552 98.9022 70.6804 98.9906 70.7306C99.0801 70.7798 99.1484 70.8361 99.1956 70.8994C99.2438 70.9617 99.281 71.0129 99.3071 71.0531H99.3433V70.6854H99.6868V73.0663C99.6868 73.2652 99.6416 73.427 99.5512 73.5515C99.4618 73.6771 99.3413 73.769 99.1896 73.8273C99.0389 73.8866 98.8711 73.9162 98.6863 73.9162ZM98.6742 72.6444C98.8168 72.6444 98.9374 72.6117 99.0359 72.5464C99.1343 72.4811 99.2091 72.3872 99.2604 72.2646C99.3116 72.1421 99.3372 71.9954 99.3372 71.8246C99.3372 71.6578 99.3121 71.5107 99.2619 71.3831C99.2117 71.2555 99.1373 71.1555 99.0389 71.0832C98.9404 71.0109 98.8189 70.9747 98.6742 70.9747C98.5235 70.9747 98.3979 71.0129 98.2975 71.0892C98.198 71.1656 98.1232 71.2681 98.0729 71.3966C98.0237 71.5252 97.9991 71.6679 97.9991 71.8246C97.9991 71.9853 98.0242 72.1275 98.0744 72.2511C98.1257 72.3736 98.201 72.4701 98.3005 72.5404C98.4009 72.6097 98.5255 72.6444 98.6742 72.6444ZM101.308 73.0482C101.085 73.0482 100.893 72.999 100.731 72.9005C100.57 72.8011 100.446 72.6625 100.359 72.4846C100.273 72.3058 100.229 72.0979 100.229 71.8608C100.229 71.6237 100.273 71.4147 100.359 71.2339C100.446 71.0521 100.568 70.9104 100.724 70.8089C100.88 70.7065 101.063 70.6552 101.272 70.6552C101.393 70.6552 101.512 70.6753 101.629 70.7155C101.747 70.7557 101.854 70.821 101.95 70.9114C102.047 71.0008 102.124 71.1194 102.181 71.2671C102.238 71.4147 102.267 71.5966 102.267 71.8126V71.9632H100.482V71.6558H101.905C101.905 71.5252 101.879 71.4087 101.827 71.3062C101.775 71.2038 101.702 71.1229 101.607 71.0636C101.512 71.0043 101.401 70.9747 101.272 70.9747C101.13 70.9747 101.008 71.0099 100.904 71.0802C100.802 71.1495 100.723 71.2399 100.668 71.3514C100.613 71.4629 100.585 71.5825 100.585 71.7101V71.915C100.585 72.0898 100.615 72.238 100.675 72.3596C100.737 72.4801 100.822 72.572 100.93 72.6353C101.039 72.6976 101.165 72.7288 101.308 72.7288C101.402 72.7288 101.486 72.7157 101.561 72.6896C101.638 72.6625 101.704 72.6223 101.759 72.569C101.814 72.5148 101.857 72.4475 101.887 72.3671L102.231 72.4635C102.194 72.5801 102.134 72.6825 102.048 72.7709C101.963 72.8584 101.857 72.9267 101.732 72.9759C101.606 73.0241 101.465 73.0482 101.308 73.0482ZM102.808 73V70.6854H103.151V71.047H103.181C103.23 70.9235 103.307 70.8275 103.415 70.7592C103.522 70.6899 103.652 70.6552 103.802 70.6552C103.955 70.6552 104.082 70.6899 104.183 70.7592C104.286 70.8275 104.366 70.9235 104.423 71.047H104.447C104.506 70.9275 104.595 70.8326 104.714 70.7622C104.832 70.6909 104.975 70.6552 105.14 70.6552C105.347 70.6552 105.517 70.72 105.648 70.8496C105.78 70.9782 105.846 71.1786 105.846 71.4509V73H105.49V71.4509C105.49 71.2801 105.443 71.1581 105.35 71.0847C105.256 71.0114 105.146 70.9747 105.02 70.9747C104.857 70.9747 104.731 71.0239 104.642 71.1224C104.552 71.2198 104.507 71.3434 104.507 71.4931V73H104.146V71.4147C104.146 71.2831 104.103 71.1771 104.018 71.0968C103.932 71.0154 103.822 70.9747 103.688 70.9747C103.595 70.9747 103.509 70.9993 103.429 71.0485C103.349 71.0978 103.285 71.1661 103.236 71.2535C103.187 71.3399 103.163 71.4398 103.163 71.5534V73H102.808ZM107.466 73.0482C107.243 73.0482 107.051 72.999 106.889 72.9005C106.728 72.8011 106.604 72.6625 106.517 72.4846C106.431 72.3058 106.387 72.0979 106.387 71.8608C106.387 71.6237 106.431 71.4147 106.517 71.2339C106.604 71.0521 106.726 70.9104 106.882 70.8089C107.038 70.7065 107.221 70.6552 107.43 70.6552C107.551 70.6552 107.67 70.6753 107.787 70.7155C107.905 70.7557 108.012 70.821 108.108 70.9114C108.205 71.0008 108.282 71.1194 108.339 71.2671C108.396 71.4147 108.425 71.5966 108.425 71.8126V71.9632H106.64V71.6558H108.063C108.063 71.5252 108.037 71.4087 107.985 71.3062C107.933 71.2038 107.86 71.1229 107.765 71.0636C107.67 71.0043 107.559 70.9747 107.43 70.9747C107.288 70.9747 107.166 71.0099 107.062 71.0802C106.96 71.1495 106.881 71.2399 106.826 71.3514C106.771 71.4629 106.743 71.5825 106.743 71.7101V71.915C106.743 72.0898 106.773 72.238 106.833 72.3596C106.895 72.4801 106.98 72.572 107.088 72.6353C107.197 72.6976 107.323 72.7288 107.466 72.7288C107.56 72.7288 107.644 72.7157 107.719 72.6896C107.796 72.6625 107.862 72.6223 107.917 72.569C107.972 72.5148 108.015 72.4475 108.045 72.3671L108.389 72.4635C108.352 72.5801 108.292 72.6825 108.206 72.7709C108.121 72.8584 108.015 72.9267 107.89 72.9759C107.764 73.0241 107.623 73.0482 107.466 73.0482ZM109.321 71.6076V73H108.966V70.6854H109.309V71.047H109.339C109.394 70.9295 109.476 70.8351 109.587 70.7637C109.697 70.6914 109.84 70.6552 110.014 70.6552C110.171 70.6552 110.308 70.6874 110.426 70.7517C110.543 70.815 110.635 70.9114 110.7 71.041C110.765 71.1696 110.798 71.3324 110.798 71.5293V73H110.442V71.5534C110.442 71.3715 110.395 71.2299 110.301 71.1284C110.206 71.0259 110.077 70.9747 109.912 70.9747C109.798 70.9747 109.697 70.9993 109.608 71.0485C109.519 71.0978 109.449 71.1696 109.398 71.264C109.347 71.3585 109.321 71.473 109.321 71.6076ZM112.455 70.6854V70.9868H111.255V70.6854H112.455ZM111.605 70.1308H111.96V72.337C111.96 72.4374 111.975 72.5128 112.004 72.563C112.034 72.6122 112.072 72.6454 112.118 72.6625C112.166 72.6785 112.215 72.6866 112.268 72.6866C112.307 72.6866 112.339 72.6846 112.364 72.6805C112.389 72.6755 112.409 72.6715 112.424 72.6685L112.497 72.9879C112.473 72.997 112.439 73.006 112.396 73.0151C112.353 73.0251 112.298 73.0301 112.232 73.0301C112.131 73.0301 112.033 73.0085 111.936 72.9653C111.841 72.9221 111.761 72.8563 111.698 72.7679C111.636 72.6795 111.605 72.568 111.605 72.4334V70.1308Z" fill="#B9B9B9"/>
                                    </svg>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80" fill="white"/>
                                        <path d="M37.8612 32.6509L32.1848 38.3062L34.3705 40.4838L40.0795 34.8285L37.8612 32.6509Z" fill="#EBEBEB"/>
                                        <path d="M26.3781 44.0913L20.7017 49.7466L22.8875 51.9567L28.5639 46.2689L26.3781 44.0913Z" fill="#BBBBBB"/>
                                        <path d="M30.7828 36.9084L36.4592 31.2206L34.2734 29.043L28.5644 34.6983L30.7828 36.9084Z" fill="#BBBBBB"/>
                                        <path d="M24.9748 42.6935L22.7564 40.4834L17.08 46.1712L19.2658 48.3488L24.9748 42.6935Z" fill="#EBEBEB"/>
                                        <path d="M24.9748 38.3062L19.2658 32.6509L17.08 34.8285L22.7564 40.4838L24.9748 38.3062Z" fill="#EBEBEB"/>
                                        <path d="M26.3781 36.9084L28.5639 34.6983L22.8875 29.043L20.7017 31.2206L26.3781 36.9084Z" fill="#BBBBBB"/>
                                        <path d="M32.1848 42.6935L37.8612 48.3488L40.0795 46.1712L34.3705 40.4834L32.1848 42.6935Z" fill="#EBEBEB"/>
                                        <path d="M36.4592 49.7466L30.7828 44.0913L28.5644 46.2689L34.2734 51.9567L36.4592 49.7466Z" fill="#BBBBBB"/>
                                        <path d="M36.4587 54.1347L34.2729 51.957L28.5639 57.6123L22.8875 51.957L20.7017 54.1347L28.5639 62.0001L36.4587 54.1347Z" fill="#BBBBBB"/>
                                        <path d="M17.0805 34.8285L14.8948 32.6509L7 40.4838L14.8948 48.3492L17.0805 46.1716L11.4041 40.4838L17.0805 34.8285Z" fill="#EBEBEB"/>
                                        <path d="M42.2651 32.6509L40.0793 34.8285L45.7558 40.4838L40.0793 46.1716L42.2651 48.3492L50.1599 40.4838L42.2651 32.6509Z" fill="#EBEBEB"/>
                                        <path d="M34.2729 29.043L36.4587 26.8654L28.5639 19L20.7017 26.8654L22.8875 29.043L28.5639 23.3877L34.2729 29.043Z" fill="#BBBBBB"/>
                                        <path d="M67.6875 40.6042C68.3803 40.052 68.9345 39.2237 69.1424 38.1884V38.1194L67.6875 37.7743V37.8433C67.4797 38.6026 67.2026 39.2238 66.7176 39.6379C66.2327 40.052 65.6092 40.2591 64.9164 40.2591C64.3622 40.2591 63.8079 40.121 63.323 39.8449C62.8381 39.5689 62.4917 39.0857 62.2145 38.5335C61.9374 37.9124 61.8682 37.2222 61.8682 36.4629C61.8682 35.8417 61.9374 35.2206 62.1453 34.6684C62.3531 34.1163 62.6995 33.6331 63.1844 33.288C63.6694 32.9429 64.2929 32.8049 64.9857 32.8049C65.6092 32.8049 66.1634 32.9429 66.5791 33.288C66.9947 33.5641 67.3411 34.0472 67.549 34.7374V34.8065L69.0038 34.4614V34.3923C68.7267 33.4951 68.2417 32.8049 67.549 32.3217C66.8562 31.8386 66.0248 31.5625 65.055 31.5625C64.1543 31.5625 63.3923 31.7696 62.6302 32.1147C61.9374 32.5288 61.3139 33.0809 60.9676 33.8402C60.5519 34.5994 60.3441 35.4966 60.3441 36.4629C60.3441 37.3602 60.5519 38.2575 60.8983 39.0857C61.2447 39.914 61.7989 40.5351 62.4224 40.9493C63.1152 41.3634 63.9465 41.5705 65.055 41.5705C66.0941 41.4324 66.9947 41.1563 67.6875 40.6042Z" fill="#BBBBBB"/>
                                        <path d="M82.6505 39.0851C83.0662 38.3259 83.274 37.4286 83.274 36.4623C83.274 35.496 83.0661 34.6678 82.7198 33.8395C82.3041 33.0803 81.7498 32.4592 81.0571 32.045C80.295 31.6309 79.4637 31.4238 78.5631 31.4238C77.1775 31.4238 75.9998 31.907 75.0992 32.8042C74.1986 33.7015 73.7829 35.0129 73.7829 36.6004C73.7829 37.4286 73.9907 38.2568 74.3371 39.0161C74.6835 39.7753 75.307 40.3965 75.9998 40.8106C76.7618 41.2248 77.5932 41.5008 78.4938 41.5008C79.3944 41.5008 80.1565 41.2938 80.9185 40.8796C81.6113 40.4655 82.2348 39.8443 82.6505 39.0851ZM78.4938 40.1894C77.5932 40.1894 76.7618 39.8443 76.1383 39.2231C75.5148 38.6019 75.2377 37.7047 75.2377 36.5314C75.2377 35.1509 75.5841 34.1156 76.2076 33.4944C76.8311 32.8733 77.5932 32.5972 78.4938 32.5972C79.1173 32.5972 79.6715 32.7352 80.2258 33.0803C80.7107 33.3564 81.1264 33.8395 81.3342 34.3917C81.6113 34.9439 81.7498 35.6341 81.7498 36.3933C81.7498 37.5667 81.4727 38.5329 80.8492 39.1541C80.2257 39.8443 79.3944 40.1894 78.4938 40.1894Z" fill="#BBBBBB"/>
                                        <path d="M97.7542 31.7002H96.3687V41.4321H97.7542V31.7002Z" fill="#BBBBBB"/>
                                        <path d="M93.6679 41.4319L95.8848 35.2891V31.8381L93.5293 38.464C93.3215 39.0162 93.1829 39.4303 93.1137 39.7754L92.698 38.6021L90.3425 31.769H90.204V35.2891L92.3516 41.5009H93.6679V41.4319Z" fill="#BBBBBB"/>
                                        <path d="M89.6492 31.7002H88.2637V41.4321H89.6492V31.7002Z" fill="#BBBBBB"/>
                                        <path d="M109.601 36.6697C110.155 36.1175 110.432 35.3583 110.432 34.53C110.432 34.0469 110.363 33.5638 110.155 33.2187C109.947 32.8045 109.67 32.4594 109.324 32.2524C108.977 32.0453 108.562 31.8382 108.077 31.7692C107.73 31.7002 107.245 31.7002 106.553 31.7002H104.751V33.0116H106.622C107.176 33.0116 107.592 33.0116 107.8 33.0806C108.146 33.1496 108.354 33.3567 108.562 33.6328C108.769 33.9088 108.839 34.254 108.839 34.5991C108.839 35.1512 108.7 35.4963 108.354 35.8414C108.007 36.1175 107.453 36.2555 106.622 36.2555H104.682V37.5669H106.622C108.077 37.5669 109.116 37.2909 109.601 36.6697Z" fill="#BBBBBB"/>
                                        <path d="M104.267 31.7002H102.812V41.4321H104.267V31.7002Z" fill="#BBBBBB"/>
                                        <path d="M120.825 31.7002H119.301L115.49 41.4321H117.015L117.43 40.3277L118.539 37.3599L118.747 36.7387L119.578 34.5991C119.786 34.1159 119.924 33.6327 119.994 33.1496C120.132 33.6327 120.34 34.1849 120.617 34.8061L121.587 37.3599H119.093L118.677 38.5332H122.072L123.18 41.4321H124.843L120.825 31.7002Z" fill="#BBBBBB"/>
                                        <path d="M136.203 38.9473V41.4321H137.658V31.7002H136.273V39.0163L136.203 38.9473Z" fill="#BBBBBB"/>
                                        <path d="M131.216 31.7002H129.83V41.4321H131.216V31.7002Z" fill="#BBBBBB"/>
                                        <path d="M135.719 38.1883L131.7 32.3906V34.8063L135.719 40.6731V38.1883Z" fill="#BBBBBB"/>
                                        <path d="M150.266 31.7002L148.326 34.53C147.98 35.0822 147.633 35.6343 147.356 36.1175L146.525 37.3599V41.4321H147.98V37.3599L151.929 31.7692H150.266V31.7002Z" fill="#BBBBBB"/>
                                        <path d="M146.456 34.6681L144.516 31.7002H142.715L146.248 36.8767L147.079 35.6344L146.456 34.6681Z" fill="#BBBBBB"/>
                                        <path d="M61.9386 49.3008V46.2639H62.9084V45.7808H60.4144V46.2639H61.3843V49.3008H61.9386Z" fill="#BBBBBB"/>
                                        <path d="M67.2015 45.7808H66.7858L65.4695 49.3008H66.0238L66.3009 48.5416H67.6172L67.8943 49.3008H68.4485L67.2015 45.7808ZM66.5087 48.0585L66.9936 46.54L67.4786 48.0585H66.5087Z" fill="#BBBBBB"/>
                                        <path d="M72.3979 46.5402C72.4672 46.4711 72.5364 46.4021 72.6057 46.3331C72.675 46.2641 72.8135 46.2641 72.9521 46.2641C73.0906 46.2641 73.2985 46.3331 73.3678 46.4021C73.5063 46.4711 73.5756 46.6092 73.5756 46.7472H74.1298C74.0605 46.4711 73.922 46.1951 73.7142 45.988C73.5063 45.781 73.2292 45.7119 72.8828 45.7119C72.6057 45.7119 72.3979 45.7809 72.19 45.919C71.9822 46.057 71.8437 46.1951 71.7744 46.3331C71.7051 46.4021 71.7051 46.5402 71.6358 46.6782C71.6358 46.8163 71.5665 47.0923 71.5665 47.5064C71.5665 47.9206 71.5665 48.1966 71.6358 48.3347C71.6358 48.4037 71.6358 48.4727 71.7051 48.5417C71.7051 48.6108 71.7744 48.6108 71.7744 48.6798C71.8437 48.8178 71.9822 48.9559 72.19 49.0939C72.3979 49.232 72.6057 49.301 72.8828 49.301C73.2292 49.301 73.5756 49.1629 73.7834 48.9559C73.9913 48.7488 74.1298 48.4037 74.1298 48.0586V47.3684H72.8828V47.8515H73.5756V48.0586C73.5756 48.2657 73.5063 48.4727 73.3678 48.6108C73.2292 48.7488 73.0906 48.8178 72.8828 48.8178C72.7443 48.8178 72.675 48.8178 72.5364 48.7488C72.4671 48.6798 72.3979 48.6108 72.3286 48.5417C72.2593 48.4727 72.19 48.3347 72.19 48.2657C72.19 48.1276 72.1208 47.9206 72.1208 47.5755C72.1208 47.2304 72.1207 47.0233 72.19 46.8853C72.2593 46.7472 72.3286 46.6092 72.3979 46.5402Z" fill="#BBBBBB"/>
                                        <path d="M77.8016 45.7808V49.3008H80.0185V48.8177H78.2865V45.7808H77.8016Z" fill="#BBBBBB"/>
                                        <path d="M84.1064 45.7808H83.5522V49.3008H84.1064V45.7808Z" fill="#BBBBBB"/>
                                        <path d="M88.3335 46.8161L89.9269 49.3008H90.4118V45.7808H89.9269V48.3345H89.8576L88.2642 45.7808H87.7792V49.3008H88.3335V46.8161Z" fill="#BBBBBB"/>
                                        <path d="M96.4384 46.333V45.7808H94.1523V49.3008H96.4384V48.8177H94.7065V47.7824H96.1614V47.2992H94.7065V46.333H96.4384Z" fill="#BBBBBB"/>
                                        <path d="M104.059 48.5416C104.059 48.6106 104.128 48.6106 104.128 48.6796C104.198 48.8177 104.336 48.9557 104.544 49.0938C104.752 49.2318 104.96 49.3008 105.237 49.3008C105.583 49.3008 105.93 49.1628 106.137 48.9557C106.345 48.7487 106.484 48.4036 106.484 48.0585V47.3683H105.237V47.8514H105.93V48.0585C105.93 48.2655 105.86 48.4726 105.722 48.6106C105.583 48.7487 105.445 48.8177 105.237 48.8177C105.098 48.8177 105.029 48.8177 104.89 48.7487C104.821 48.6797 104.752 48.6106 104.683 48.5416C104.613 48.4726 104.544 48.3345 104.544 48.2655C104.544 48.1275 104.475 47.9204 104.475 47.5753C104.475 47.2302 104.475 47.0232 104.544 46.8851C104.544 46.7471 104.613 46.678 104.683 46.609C104.752 46.54 104.821 46.471 104.89 46.402C104.96 46.3329 105.098 46.333 105.237 46.333C105.375 46.333 105.583 46.4019 105.652 46.471C105.791 46.54 105.86 46.678 105.86 46.8161H106.414C106.345 46.54 106.207 46.2639 105.999 46.0569C105.791 45.8498 105.514 45.7808 105.167 45.7808C104.89 45.7808 104.683 45.8498 104.475 45.9879C104.267 46.1259 104.128 46.2639 104.059 46.402C103.99 46.471 103.99 46.609 103.92 46.7471C103.92 46.8851 103.851 47.1612 103.851 47.5753C103.851 47.9894 103.851 48.2655 103.92 48.4036C103.99 48.4726 103.99 48.5416 104.059 48.5416Z" fill="#BBBBBB"/>
                                        <path d="M110.016 48.5417C110.016 48.6108 110.086 48.6108 110.086 48.6798C110.155 48.8178 110.294 48.9559 110.501 49.0939C110.709 49.232 110.917 49.301 111.194 49.301C111.471 49.301 111.679 49.232 111.887 49.0939C112.095 48.9559 112.233 48.8178 112.303 48.6798C112.372 48.6108 112.372 48.4727 112.441 48.3347C112.441 48.1966 112.441 47.9206 112.441 47.5064C112.441 47.0923 112.441 46.8163 112.441 46.6782C112.441 46.5402 112.372 46.4021 112.303 46.3331C112.233 46.1951 112.095 46.057 111.887 45.919C111.679 45.7809 111.471 45.7119 111.194 45.7119C110.917 45.7119 110.709 45.7809 110.501 45.919C110.294 46.057 110.155 46.1951 110.086 46.3331C110.016 46.4021 110.016 46.5402 109.947 46.6782C109.947 46.8163 109.878 47.0923 109.878 47.5064C109.878 47.9206 109.878 48.1966 109.947 48.3347C110.016 48.4727 110.016 48.5417 110.016 48.5417ZM110.501 46.8853C110.501 46.7472 110.571 46.6782 110.64 46.6092C110.709 46.5402 110.778 46.4711 110.848 46.4021C110.917 46.3331 111.056 46.3331 111.194 46.3331C111.333 46.3331 111.402 46.3331 111.541 46.4021C111.61 46.4711 111.679 46.5402 111.748 46.6092C111.818 46.6782 111.887 46.8162 111.887 46.8853C111.887 47.0233 111.956 47.2304 111.956 47.5755C111.956 47.9206 111.956 48.1276 111.887 48.2657C111.887 48.4037 111.818 48.4727 111.748 48.5417C111.679 48.6108 111.61 48.6798 111.541 48.7488C111.471 48.8178 111.333 48.8178 111.194 48.8178C111.056 48.8178 110.986 48.8178 110.848 48.7488C110.778 48.6798 110.709 48.6108 110.64 48.5417C110.571 48.4727 110.501 48.3347 110.501 48.2657C110.501 48.1276 110.432 47.9206 110.432 47.5755C110.501 47.2304 110.501 46.9543 110.501 46.8853Z" fill="#BBBBBB"/>
                                        <path d="M118.33 46.333V45.7808H116.113V49.3008H118.33V48.8177H116.598V47.7824H118.053V47.2992H116.598V46.333H118.33Z" fill="#BBBBBB"/>
                                        <path d="M122.901 48.8178C122.485 48.8178 122.208 48.6798 121.931 48.4727L121.585 48.8868C121.931 49.2319 122.416 49.37 122.901 49.37C123.732 49.37 124.148 49.0249 124.148 48.3347C124.148 48.0586 124.079 47.8515 123.94 47.6445C123.802 47.4374 123.525 47.3684 123.178 47.2994C123.04 47.2994 122.901 47.2304 122.762 47.2304C122.555 47.2304 122.485 47.1614 122.416 47.0233C122.347 46.9543 122.277 46.8162 122.277 46.7472C122.277 46.6092 122.347 46.4712 122.485 46.3331C122.624 46.2641 122.762 46.1951 122.901 46.1951C123.247 46.1951 123.525 46.2641 123.802 46.4711L124.079 46.057C123.732 45.85 123.386 45.7119 122.901 45.7119C122.555 45.7119 122.278 45.781 122.07 45.988C121.862 46.1951 121.793 46.4021 121.793 46.7472C121.793 47.0233 121.862 47.2304 122.07 47.3684C122.208 47.5755 122.485 47.6445 122.762 47.7135C122.901 47.7135 123.109 47.7825 123.247 47.7825C123.525 47.8515 123.732 47.9896 123.732 48.2657C123.525 48.6798 123.317 48.8178 122.901 48.8178Z" fill="#BBBBBB"/>
                                        <path d="M134.263 49.3008V45.7808H133.778V47.2992H132.323V45.7808H131.838V49.3008H132.323V47.7824H133.778V49.3008H134.263Z" fill="#BBBBBB"/>
                                        <path d="M140.292 46.333V45.7808H138.006V49.3008H140.292V48.8177H138.56V47.7824H140.015V47.2992H138.56V46.333H140.292Z" fill="#BBBBBB"/>
                                        <path d="M146.178 46.8154C146.178 46.4703 146.04 46.2632 145.832 46.0562C145.624 45.9181 145.416 45.8491 145.139 45.8491H143.754V49.3691H144.308V47.8507H145.001L145.763 49.3691H146.386L145.555 47.7817C145.971 47.5746 146.178 47.2985 146.178 46.8154ZM145.555 47.1605C145.486 47.2985 145.278 47.2986 145.07 47.3676H144.239V46.3323H145.07C145.209 46.3323 145.347 46.4013 145.486 46.4703C145.624 46.5393 145.694 46.6774 145.694 46.8844C145.694 46.9534 145.624 47.0915 145.555 47.1605Z" fill="#BBBBBB"/>
                                        <path d="M152 46.333V45.7808H149.783V49.3008H152V48.8177H150.268V47.7824H151.792V47.2992H150.268V46.333H152Z" fill="#BBBBBB"/>
                                    </svg>


                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partner-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80" fill="white"/>
                                        <g clip-path="url(#clip0_1)">
                                        <path opacity="0.84" fill-rule="evenodd" clip-rule="evenodd" d="M79.9952 54.3755C88.4901 54.3755 95.379 54.6191 95.379 54.9213C95.379 55.2234 88.4901 55.467 79.9952 55.467C71.5002 55.467 64.6113 55.2234 64.6113 54.9213C64.6113 54.6191 71.5002 54.3755 79.9952 54.3755Z" fill="#B9B9B9"/>
                                        <path d="M111.131 66.4411V60.3596H114.826V61.6948H112.737V62.7474H114.71V64.0533H112.737V65.0767H114.826V66.4411H111.131ZM110.24 66.4411H108.702L108.344 63.8097C108.325 63.6245 108.296 63.4198 108.276 63.1859C108.257 62.9618 108.238 62.7084 108.218 62.4452C108.18 62.6986 108.102 63.0203 107.996 63.4101C107.976 63.4881 107.957 63.5465 107.938 63.5855L107.115 66.4314H106.022L105.2 63.5855C105.19 63.5465 105.17 63.4881 105.151 63.4101C105.035 63.03 104.958 62.7084 104.929 62.455C104.909 62.6889 104.89 62.913 104.871 63.1372C104.851 63.3614 104.822 63.5855 104.793 63.8097L104.435 66.4411H102.906L103.835 60.3596H105.47L106.38 63.4978C106.39 63.5173 106.399 63.5563 106.409 63.605C106.496 63.8876 106.544 64.1216 106.573 64.3262C106.583 64.219 106.602 64.1021 106.631 63.9656C106.66 63.8389 106.699 63.6732 106.757 63.4881L107.676 60.3596H109.312L110.24 66.4411ZM96.511 66.4411L98.5912 60.3596H100.652L102.742 66.4411H101.107L100.797 65.3496H98.4558L98.1462 66.4411H96.511ZM98.8138 64.1703H100.449L99.8297 62.1626C99.8103 62.1041 99.7813 62.0067 99.7523 61.8702C99.7232 61.7338 99.6749 61.5583 99.6265 61.3439C99.5878 61.4901 99.5588 61.6363 99.5201 61.7728C99.491 61.9092 99.4523 62.0359 99.4136 62.1626L98.8138 64.1703ZM90.0189 66.4411V60.3596H91.6056L93.889 63.4881C93.9374 63.5563 94.0051 63.683 94.1019 63.8682C94.1986 64.0631 94.3147 64.2872 94.4308 64.5601C94.4018 64.3067 94.3728 64.0826 94.3631 63.8876C94.3437 63.6927 94.3437 63.5173 94.3437 63.3614V60.3596H95.9208V66.4411H94.3437L92.0604 63.3029C92.012 63.2347 91.9443 63.108 91.8378 62.9228C91.7411 62.7279 91.625 62.5037 91.5089 62.2406C91.5379 62.494 91.5669 62.7181 91.5766 62.9228C91.5959 63.1177 91.5959 63.2931 91.5959 63.4491V66.4508H90.0189V66.4411ZM82.743 64.4822C82.9849 64.7648 83.2267 64.9695 83.4686 65.1059C83.7105 65.2423 83.9427 65.3106 84.1749 65.3106C84.3975 65.3106 84.5716 65.2521 84.7168 65.1351C84.8619 65.0182 84.9296 64.8623 84.9296 64.6868C84.9296 64.4822 84.8716 64.3262 84.7458 64.219C84.62 64.1118 84.3491 63.9949 83.9137 63.8779C83.3235 63.722 82.9075 63.5076 82.6559 63.2542C82.414 63.0008 82.2882 62.6402 82.2882 62.1918C82.2882 61.6071 82.4817 61.1393 82.8688 60.7689C83.2558 60.3986 83.7589 60.2231 84.3684 60.2231C84.6974 60.2231 85.0167 60.2719 85.3166 60.3596C85.6166 60.4473 85.8972 60.5838 86.1681 60.7689L85.6553 61.9579C85.4714 61.802 85.2779 61.6753 85.0747 61.5973C84.8812 61.5194 84.6877 61.4706 84.4942 61.4706C84.291 61.4706 84.1362 61.5194 84.0105 61.6168C83.8847 61.7143 83.8266 61.8312 83.8266 61.9872C83.8266 62.1431 83.8847 62.2601 83.9911 62.3575C84.0975 62.4452 84.3104 62.533 84.62 62.6207L84.6974 62.6402C85.365 62.8253 85.8101 63.0203 86.0229 63.2444C86.1681 63.3906 86.2745 63.5758 86.3519 63.7804C86.4293 63.9851 86.4583 64.219 86.4583 64.4724C86.4583 65.1156 86.2455 65.6322 85.8294 66.0318C85.4134 66.4216 84.8522 66.6165 84.1459 66.6165C83.7299 66.6165 83.3429 66.5483 82.9945 66.4021C82.6462 66.2559 82.3173 66.0318 81.998 65.7199L82.743 64.4822ZM77.8376 64.4822C78.0795 64.7648 78.3213 64.9695 78.5632 65.1059C78.8051 65.2423 79.0373 65.3106 79.2695 65.3106C79.4921 65.3106 79.6662 65.2521 79.8113 65.1351C79.9565 65.0182 80.0242 64.8623 80.0242 64.6868C80.0242 64.4822 79.9662 64.3262 79.8404 64.219C79.7146 64.1118 79.4437 63.9949 79.0083 63.8779C78.4181 63.722 78.0021 63.5076 77.7505 63.2542C77.5086 63.0008 77.3828 62.6402 77.3828 62.1918C77.3828 61.6071 77.5763 61.1393 77.9634 60.7689C78.3504 60.3986 78.8535 60.2231 79.463 60.2231C79.792 60.2231 80.1113 60.2719 80.4112 60.3596C80.7112 60.4473 80.9917 60.5838 81.2626 60.7689L80.7499 61.9579C80.566 61.802 80.3725 61.6753 80.1693 61.5973C79.9758 61.5194 79.7823 61.4706 79.5888 61.4706C79.3856 61.4706 79.2308 61.5194 79.105 61.6168C78.9793 61.7143 78.9212 61.8312 78.9212 61.9872C78.9212 62.1431 78.9793 62.2601 79.0857 62.3575C79.1921 62.4452 79.405 62.533 79.7146 62.6207L79.792 62.6402C80.4596 62.8253 80.9047 63.0203 81.1175 63.2444C81.2626 63.3906 81.3691 63.5758 81.4465 63.7804C81.5239 63.9851 81.5529 64.219 81.5529 64.4724C81.5529 65.1156 81.3401 65.6322 80.924 66.0318C80.508 66.4216 79.9468 66.6165 79.2405 66.6165C78.8148 66.6165 78.4374 66.5483 78.0891 66.4021C77.7408 66.2559 77.4119 66.0318 77.0926 65.7199L77.8376 64.4822ZM72.7774 66.4411V60.3596H76.4733V61.6948H74.3835V62.7474H76.3572V64.0533H74.3835V65.0767H76.4733V66.4411H72.7774ZM65.5789 66.4411V60.3596H67.1656L69.449 63.4881C69.4974 63.5563 69.5651 63.683 69.6619 63.8682C69.7586 64.0631 69.8747 64.2872 69.9908 64.5601C69.9618 64.3067 69.9328 64.0826 69.9231 63.8876C69.9038 63.6927 69.9038 63.5173 69.9038 63.3614V60.3596H71.4809V66.4411H69.9038L67.6204 63.3029C67.572 63.2347 67.5043 63.108 67.3979 62.9228C67.3011 62.7279 67.185 62.5037 67.0689 62.2406C67.0979 62.494 67.1269 62.7181 67.1366 62.9228C67.156 63.1177 67.156 63.2931 67.156 63.4491V66.4508H65.5789V66.4411ZM62.5892 66.4411V60.3596H64.2534V66.4411H62.5892ZM57.916 64.4822C58.1579 64.7648 58.3998 64.9695 58.6416 65.1059C58.8835 65.2423 59.1157 65.3106 59.3479 65.3106C59.5705 65.3106 59.7446 65.2521 59.8898 65.1351C60.0349 65.0182 60.1026 64.8623 60.1026 64.6868C60.1026 64.4822 60.0446 64.3262 59.9188 64.219C59.793 64.1118 59.5221 63.9949 59.0867 63.8779C58.4965 63.722 58.0805 63.5076 57.8289 63.2542C57.587 63.0008 57.4612 62.6402 57.4612 62.1918C57.4612 61.6071 57.6548 61.1393 58.0418 60.7689C58.4288 60.3986 58.9319 60.2231 59.5415 60.2231C59.8704 60.2231 60.1897 60.2719 60.4896 60.3596C60.7896 60.4473 61.0702 60.5838 61.3411 60.7689L60.8283 61.9579C60.6444 61.802 60.4509 61.6753 60.2478 61.5973C60.0542 61.5194 59.8607 61.4706 59.6672 61.4706C59.4641 61.4706 59.3092 61.5194 59.1835 61.6168C59.0577 61.7143 58.9996 61.8312 58.9996 61.9872C58.9996 62.1431 59.0577 62.2601 59.1641 62.3575C59.2705 62.4452 59.4834 62.533 59.793 62.6207L59.8704 62.6402C60.538 62.8253 60.9831 63.0203 61.1959 63.2444C61.3411 63.3906 61.4475 63.5758 61.5249 63.7804C61.6023 63.9851 61.6313 64.219 61.6313 64.4724C61.6313 65.1156 61.4185 65.6322 61.0024 66.0318C60.5767 66.4216 60.0252 66.6165 59.3189 66.6165C58.8932 66.6165 58.5159 66.5483 58.1676 66.4021C57.8192 66.2559 57.4903 66.0318 57.171 65.7199L57.916 64.4822ZM51.0175 60.3596H52.6623V63.3126C52.6623 63.7512 52.6719 64.0631 52.6913 64.2483C52.7106 64.4334 52.7493 64.5991 52.8074 64.7258C52.8654 64.8817 52.9816 64.9987 53.1364 65.0864C53.2912 65.1644 53.4847 65.2131 53.7072 65.2131C53.9297 65.2131 54.1232 65.1741 54.2781 65.0864C54.4329 65.0084 54.5393 64.8817 54.607 64.7258C54.6651 64.5991 54.6941 64.4432 54.7231 64.2483C54.7425 64.0533 54.7521 63.7415 54.7521 63.3126V62.8936V60.3498H56.3873V63.566C56.3873 64.2288 56.3486 64.7258 56.2712 65.0377C56.1938 65.3593 56.0583 65.6224 55.8648 65.8466C55.6616 66.0902 55.3714 66.2754 55.0134 66.4021C54.6554 66.5288 54.22 66.5873 53.6975 66.5873C53.1847 66.5873 52.7397 66.5288 52.3817 66.4021C52.0237 66.2754 51.7431 66.0902 51.5302 65.8466C51.3464 65.6224 51.211 65.3495 51.1239 65.0377C51.0465 64.7161 50.9981 64.2288 50.9981 63.566V62.9423V60.3596H51.0175ZM46.857 65.2034H47.4376C47.8246 65.2034 48.1052 65.1546 48.2697 65.0572C48.4341 64.9597 48.5115 64.794 48.5115 64.5699C48.5115 64.3165 48.4341 64.141 48.289 64.0338C48.1439 63.9364 47.8633 63.8779 47.4666 63.8779H46.8667V65.2034H46.857ZM45.3283 66.4411V60.3596H46.9828C47.6601 60.3596 48.1439 60.3791 48.4148 60.4278C48.6857 60.4765 48.9179 60.5448 49.1114 60.652C49.3339 60.7787 49.4984 60.9443 49.6242 61.149C49.7403 61.3634 49.7984 61.5973 49.7984 61.8702C49.7984 62.2211 49.7113 62.494 49.5371 62.6986C49.363 62.9033 49.0824 63.0592 48.705 63.1664C49.1308 63.1957 49.4694 63.3516 49.7113 63.6245C49.9532 63.8974 50.0789 64.258 50.0789 64.7063C50.0789 65.0279 50.0112 65.3106 49.8758 65.564C49.7403 65.8076 49.5468 66.0025 49.2952 66.139C49.0921 66.2462 48.8308 66.3339 48.5309 66.3729C48.2309 66.4216 47.7375 66.4411 47.0506 66.4411H45.3283ZM46.857 62.7961H47.186C47.5924 62.7961 47.873 62.7474 48.0278 62.6596C48.1826 62.5719 48.2503 62.416 48.2503 62.1918C48.2503 61.9579 48.1826 61.802 48.0374 61.7045C47.8923 61.6168 47.6214 61.5681 47.215 61.5681H46.857V62.7961Z" fill="#B9B9B9"/>
                                        <path d="M96.7626 72.9218V68.8577H99.2201V69.345H97.3237V70.5535H99.0073V71.0311H97.3237V72.4345H99.3652V72.9218H96.7626ZM94.2179 69.3158C93.9761 69.3158 93.7922 69.3255 93.6665 69.3353V70.8654H94.0728C94.2663 70.8654 94.4405 70.8557 94.5953 70.8362C94.7501 70.8167 94.8856 70.7777 94.992 70.729C95.0984 70.6705 95.1855 70.5925 95.2435 70.4951C95.3016 70.3976 95.3306 70.2612 95.3306 70.0955C95.3306 69.9395 95.3016 69.8128 95.2435 69.7154C95.1855 69.6179 95.1081 69.5302 95.0113 69.4717C94.9146 69.4133 94.7985 69.3743 94.663 69.345C94.5082 69.3255 94.3728 69.3158 94.2179 69.3158ZM95.0694 71.2163C95.1274 71.2942 95.2145 71.4014 95.3016 71.5281C95.3983 71.6548 95.4951 71.7913 95.5919 71.9472C95.6886 72.1032 95.795 72.2591 95.8918 72.4345C95.9885 72.6002 96.0756 72.7659 96.1433 72.9218H95.5241C95.4467 72.7756 95.3596 72.6197 95.2726 72.4735C95.1855 72.3176 95.0887 72.1714 94.992 72.0349C94.8952 71.8985 94.8081 71.762 94.7114 71.6451C94.6243 71.5281 94.5372 71.4209 94.4598 71.3332C94.4115 71.3332 94.3534 71.343 94.305 71.343C94.2566 71.343 94.1986 71.343 94.1405 71.343H93.6665V72.9316H93.1053V68.926C93.2601 68.887 93.4439 68.8577 93.6374 68.848C93.8309 68.8382 94.0148 68.8285 94.1792 68.8285C94.7501 68.8285 95.1758 68.9357 95.4757 69.1501C95.7757 69.3645 95.9208 69.6861 95.9208 70.115C95.9208 70.3879 95.8531 70.612 95.708 70.8069C95.5531 70.9824 95.35 71.1286 95.0694 71.2163ZM89.777 72.9218V68.8577H92.2345V69.345H90.3381V70.5535H92.0216V71.0311H90.3381V72.4345H92.3796V72.9218H89.777ZM88.2095 68.8577H88.7707V72.9218H88.2095V71.0506H86.2358V72.9218H85.6746V68.8577H86.2358V70.5535H88.2095V68.8577ZM81.0111 72.9218V68.8577H83.4686V69.345H81.5722V70.5535H83.2558V71.0311H81.5722V72.4345H83.6137V72.9218H81.0111ZM79.5307 72.9218C79.4437 72.7756 79.3469 72.6197 79.2405 72.4345C79.1341 72.2591 79.0083 72.0642 78.8825 71.879C78.7567 71.6841 78.6213 71.4892 78.4858 71.2942C78.3503 71.0993 78.2149 70.9044 78.0794 70.7192C77.944 70.534 77.8085 70.3586 77.6827 70.1929C77.557 70.0273 77.4409 69.8811 77.3248 69.7544V72.9218H76.7733V68.8577H77.2183C77.4022 69.0527 77.5957 69.2768 77.7989 69.54C78.002 69.8031 78.2149 70.0662 78.4181 70.3391C78.6213 70.612 78.8148 70.8849 78.9986 71.148C79.1824 71.4112 79.3276 71.6548 79.4533 71.8595V68.848H80.0048V72.9121H79.5307V72.9218ZM75.2059 68.8577H75.767V72.9218H75.2059V68.8577ZM74.6157 72.4248V72.9218H72.1871V68.8577H72.7483V72.4248H74.6157ZM70.7358 70.9239H71.297V72.8244C71.2486 72.8439 71.1809 72.8536 71.0938 72.8731C71.0067 72.8926 70.91 72.9121 70.7939 72.9316C70.6778 72.9511 70.552 72.9706 70.4165 72.9803C70.2811 72.99 70.1456 72.9998 70.0005 72.9998C69.7199 72.9998 69.4587 72.9511 69.2265 72.8633C68.9943 72.7659 68.7911 72.6294 68.6266 72.454C68.4621 72.2786 68.3267 72.0544 68.2396 71.7913C68.1525 71.5281 68.1041 71.226 68.1041 70.8849C68.1041 70.5438 68.1525 70.2417 68.2589 69.9785C68.3654 69.7154 68.5008 69.4912 68.675 69.3158C68.8491 69.1404 69.0523 69.0039 69.2845 68.9065C69.5167 68.809 69.7683 68.77 70.0392 68.77C70.223 68.77 70.3875 68.7798 70.523 68.809C70.6681 68.8285 70.7842 68.8577 70.8906 68.887C70.9874 68.9162 71.0745 68.9454 71.1422 68.9844C71.2099 69.0137 71.2486 69.0429 71.2777 69.0527L71.0938 69.5302C70.9777 69.4522 70.8326 69.3938 70.6488 69.345C70.4649 69.2963 70.2714 69.2671 70.0779 69.2671C69.8747 69.2671 69.6812 69.3061 69.5167 69.3743C69.3523 69.4522 69.2071 69.5594 69.0813 69.6959C68.9652 69.8323 68.8685 70.0078 68.8008 70.2124C68.733 70.4171 68.704 70.6413 68.704 70.8849C68.704 71.1286 68.733 71.3527 68.7911 71.5476C68.8491 71.7426 68.9362 71.918 69.0426 72.0642C69.1588 72.2104 69.2942 72.3176 69.4684 72.3955C69.6328 72.4735 69.836 72.5125 70.0682 72.5125C70.2327 72.5125 70.3682 72.5027 70.4843 72.4833C70.6004 72.4638 70.6778 72.4443 70.7358 72.4345V70.9239ZM66.5851 71.4112C66.4593 71.0701 66.3335 70.7387 66.2174 70.4268C66.0917 70.1052 65.9659 69.8031 65.8401 69.5107C65.7046 69.8031 65.5789 70.1052 65.4531 70.4268C65.3273 70.7485 65.2112 71.0701 65.0854 71.4112H66.5851ZM67.1076 72.9218C67.0398 72.7464 66.9818 72.571 66.9237 72.4053C66.8657 72.2396 66.8076 72.0642 66.7399 71.8887H64.9113L64.5436 72.9218H63.9631C64.1179 72.493 64.263 72.0934 64.3985 71.7328C64.5339 71.3722 64.6694 71.0213 64.7952 70.69C64.9209 70.3586 65.0564 70.0467 65.1822 69.7446C65.308 69.4425 65.4434 69.1501 65.5789 68.8577H66.1013C66.2368 69.1501 66.3722 69.4425 66.5077 69.7446C66.6335 70.0467 66.7689 70.3586 66.8947 70.69C67.0205 71.0213 67.156 71.3625 67.2914 71.7328C67.4269 72.0934 67.572 72.493 67.7268 72.9218H67.1076ZM63.8179 68.8577V69.3548H62.5505V72.9218H61.9893V69.3548H60.7218V68.8577H63.8179Z" fill="#B9B9B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.3301 49.5314H72.816L89.7092 32.5149H92.6602L96.8884 28.2656H79.9952L84.2233 32.5149L67.3301 49.5314Z" fill="#E3E3E3"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M92.6602 32.5149V35.4972L78.7374 49.5314H84.2233L92.6602 41.0232L96.8883 45.2724V28.2656L92.6602 32.5149Z" fill="#E3E3E3"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M96.8884 32.5149V38.0408L110.821 24.0066H113.772L118 19.7573H101.107L105.325 24.0066L96.8884 32.5149Z" fill="#B9B9B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M113.772 24.0066V26.9889L91.6733 49.5314H97.1593L113.772 32.5149L118 36.7739V19.7573L113.772 24.0066Z" fill="#B9B9B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M92.6602 28.2658H87.1743L101.107 14.2315V11.2493L105.325 7V24.0068L101.107 19.7575L92.6602 28.2658Z" fill="#E3E3E3"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M101.107 11.2493H98.1461L84.2233 25.2835V19.7575L92.6602 11.2493L88.4418 7H105.325L101.107 11.2493Z" fill="#E3E3E3"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2221 49.5316H53.7362L79.9952 22.7398V19.7576L84.2233 15.5083V32.5151L79.9952 28.2658L59.2221 49.5316Z" fill="#B9B9B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M79.9952 19.7576H77.0442L47.4859 49.5316H42L71.5582 19.7576L67.3301 15.5083H84.2233L79.9952 19.7576Z" fill="#B9B9B9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_1">
                                        <rect width="76" height="66" fill="white" transform="translate(42 7)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End partner -->
            <!-- Testimonial -->
            <section class="bg-primary-new">
                <div class="flat-img-with-text flat-testimonial-v2">
                    <div class="content-left img-animation wow">
                        <img class="lazyload" data-src="{{ URL::asset('/build/images/banner/banner-tes.jpg') }}" src="{{ URL::asset('/build/images/banner/banner-tes.jpg') }}" alt="">
                        <div class="content-text">
                            <h4 class="text-white">Our Testimonials</h4>
                            <p class="body-2 text-white">Our seasoned team excels in real estate with years of successful market navigation, offering informed decisions and optimal results.</p>
                        </div>
                    </div>
                    <div class="content-right">
                        <div class="archive-top">
                            <div class="swiper tf-sw-testimonial" data-preview="1" data-tablet="1" data-mobile-sm="1" data-mobile="1" data-space="15" data-space-md="30" data-space-lg="30" data-centered="false" data-loop="false">
                                <div class="swiper-wrapper wow fadeInUp">
                                    <div class="swiper-slide">
                                        <div class="box-tes-item">
                                            <ul class="list-star">
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                            </ul>
                                            <p class="note body-2">
                                                "My experience with property management services has exceeded expectations. They efficiently manage properties with a professional and attentive approach in every situation. I feel reassured that any issue will be resolved promptly and effectively."
                                            </p>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-tes-item">
                                            <ul class="list-star">
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                            </ul>
                                            <p class="note body-2">
                                                "My experience with property management services has exceeded expectations. They efficiently manage properties with a professional and attentive approach in every situation. I feel reassured that any issue will be resolved promptly and effectively."
                                            </p>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box-tes-item wow fadeIn" data-wow-delay=".2s" data-wow-duration="2000ms">
                                            <ul class="list-star">
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                            </ul>
                                            <p class="note body-2">
                                                "My experience with property management services has exceeded expectations. They efficiently manage properties with a professional and attentive approach in every situation. I feel reassured that any issue will be resolved promptly and effectively."
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="sw-pagination sw-pagination-testimonial"></div>
                            </div>
                        </div>
                        <div class="archive-bottom">
                            <h6 class="mb-20">Trusted by over 150+ major companies</h6>
                            <div class="tf-marquee">
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_12)">
                                        <path d="M54.2976 29.8291C54.2976 30.0113 54.1485 30.1604 53.9662 30.1604H49.2599C49.0776 30.1604 48.9285 30.0113 48.9285 29.8291V25.1246C48.9285 24.9424 49.0776 24.7933 49.2599 24.7933H53.9662C54.1485 24.7933 54.2976 24.9424 54.2976 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M61.0584 29.8291C61.0584 30.0113 60.9092 30.1604 60.7269 30.1604H56.0206C55.8384 30.1604 55.6892 30.0113 55.6892 29.8291V25.1246C55.6892 24.9424 55.8384 24.7933 56.0206 24.7933H60.7269C60.9092 24.7933 61.0584 24.9424 61.0584 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M104.31 29.8291C104.31 30.0113 104.161 30.1604 103.979 30.1604H99.2723C99.0901 30.1604 98.9409 30.0113 98.9409 29.8291V25.1246C98.9409 24.9424 99.0901 24.7933 99.2723 24.7933H103.979C104.161 24.7933 104.31 24.9424 104.31 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M111.071 29.8291C111.071 30.0113 110.922 30.1604 110.739 30.1604H106.033C105.851 30.1604 105.702 30.0113 105.702 29.8291V25.1246C105.702 24.9424 105.851 24.7933 106.033 24.7933H110.739C110.922 24.7933 111.071 24.9424 111.071 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M121.777 25.3897L115.894 19.5092V15.3514C115.894 15.1195 115.695 14.9372 115.463 14.9372H113.607C113.375 14.9372 113.193 15.1195 113.193 15.3514V16.8256L105.404 9.04011C105.189 8.82477 104.824 8.82477 104.592 9.04011L103.78 9.8518C103.565 10.0671 103.2 10.4316 102.968 10.6635L95.9254 17.7036L82.0055 3.78902C81.79 3.55711 81.4255 3.20925 81.1935 2.97734L80.398 2.16566C80.1826 1.95031 79.818 1.95031 79.586 2.16566L71.7975 9.95119V8.47691C71.7975 8.245 71.6152 8.06278 71.3666 8.06278H69.5106C69.2786 8.06278 69.0797 8.26156 69.0797 8.47691V12.6347L64.042 17.6705L56.9992 10.6303C56.7837 10.415 56.4192 10.0506 56.1872 9.81867L55.3752 9.00698C55.1597 8.79164 54.7952 8.79164 54.5632 9.00698L46.7746 16.7925V15.3182C46.7746 15.0863 46.5923 14.9041 46.3437 14.9041H44.4877C44.2557 14.9041 44.0569 15.0863 44.0569 15.3182V19.476L38.174 25.3566C37.9586 25.5719 37.9586 25.9364 38.174 26.1683L38.986 26.98C39.2015 27.1953 39.566 27.1953 39.798 26.98L54.5466 12.2206C54.762 12.0052 55.1266 12.0052 55.3586 12.2206L70.1237 26.98C70.3392 27.1953 70.7037 27.1953 70.9357 26.98L71.7477 26.1683C71.9632 25.9529 71.9632 25.5885 71.7477 25.3566L65.6494 19.2607L79.5694 5.34613C79.7849 5.13079 80.1494 5.13079 80.3814 5.34613L94.3014 19.2607L88.2032 25.3566C87.9877 25.5719 87.9877 25.9364 88.2032 26.1683L89.0152 26.98C89.2306 27.1953 89.5952 27.1953 89.8272 26.98L104.576 12.2206C104.791 12.0052 105.156 12.0052 105.388 12.2206L120.136 26.98C120.352 27.1953 120.716 27.1953 120.948 26.98L121.76 26.1683C122.009 25.9861 122.009 25.6216 121.777 25.3897Z" fill="#A6B5CB"/>
                                        <path d="M55.7236 13.7942C55.6407 13.7114 55.4916 13.5623 55.4087 13.4795L55.0939 13.1648C55.011 13.082 54.8619 13.082 54.779 13.1648L48.515 19.4429C48.4322 19.5257 48.4322 19.6748 48.515 19.7576L48.8299 20.0724C48.9127 20.1552 49.0619 20.1552 49.1447 20.0724L54.7956 14.4237C54.8785 14.3409 55.0276 14.3409 55.1105 14.4237L60.7613 20.0724C60.8442 20.1552 60.9933 20.1552 61.0762 20.0724L61.391 19.7576C61.4739 19.6748 61.4739 19.5257 61.391 19.4429L55.7236 13.7942Z" fill="#A6B5CB"/>
                                        <path d="M80.7792 6.87005C80.6964 6.78723 80.5472 6.63814 80.4644 6.55532L80.1495 6.24059C80.0667 6.15776 79.9175 6.15776 79.8347 6.24059L73.5541 12.5187C73.4712 12.6015 73.4712 12.7506 73.5541 12.8334L73.8689 13.1482C73.9518 13.231 74.1009 13.231 74.1838 13.1482L79.8347 7.49952C79.9175 7.4167 80.0667 7.4167 80.1495 7.49952L85.8004 13.1482C85.8832 13.231 86.0324 13.231 86.1152 13.1482L86.4301 12.8334C86.5129 12.7506 86.5129 12.6181 86.4301 12.5187L80.7792 6.87005Z" fill="#A6B5CB"/>
                                        <path d="M105.785 13.7942C105.702 13.7114 105.553 13.5623 105.47 13.4795L105.155 13.1648C105.073 13.082 104.923 13.082 104.841 13.1648L98.5599 19.4429C98.4771 19.5257 98.4771 19.6748 98.5599 19.7576L98.8748 20.0724C98.9577 20.1552 99.1068 20.1552 99.1897 20.0724L104.857 14.4072C104.94 14.3243 105.089 14.3243 105.172 14.4072L110.823 20.0558C110.906 20.1386 111.055 20.1386 111.138 20.0558L111.453 19.7411C111.535 19.6582 111.535 19.5092 111.453 19.4263L105.785 13.7942Z" fill="#A6B5CB"/>
                                        <path d="M79.9999 36.041C99.9519 36.041 117.219 40.2485 125.571 46.3775C123.069 38.5423 103.631 32.4298 79.9999 32.4298C56.369 32.4298 36.9308 38.5257 34.4285 46.3775C42.7805 40.2485 60.0479 36.041 79.9999 36.041Z" fill="#E3E3E3"/>
                                        <path d="M54.2976 34.0532V31.5188C54.2976 31.3366 54.1485 31.1875 53.9662 31.1875H49.2599C49.0776 31.1875 48.9285 31.3366 48.9285 31.5188V35.511C50.6022 34.9809 52.4085 34.5005 54.2976 34.0532Z" fill="#A6B5CB"/>
                                        <path d="M61.0584 32.7612V31.5188C61.0584 31.3366 60.9092 31.1875 60.7269 31.1875H56.0206C55.8384 31.1875 55.6892 31.3366 55.6892 31.5188V33.7551C57.4126 33.3741 59.2024 33.0428 61.0584 32.7612Z" fill="#A6B5CB"/>
                                        <path d="M104.31 33.7385V31.5022C104.31 31.32 104.161 31.1709 103.979 31.1709H99.2723C99.0901 31.1709 98.9409 31.32 98.9409 31.5022V32.7446C100.797 33.0427 102.587 33.374 104.31 33.7385Z" fill="#A6B5CB"/>
                                        <path d="M111.071 35.511V31.5188C111.071 31.3366 110.922 31.1875 110.74 31.1875H106.033C105.851 31.1875 105.702 31.3366 105.702 31.5188V34.0532C107.591 34.5005 109.397 34.9809 111.071 35.511Z" fill="#A6B5CB"/>
                                        <path d="M79.3035 23.7499C79.3035 23.9321 79.1543 24.0812 78.972 24.0812H74.2658C74.0835 24.0812 73.9343 23.9321 73.9343 23.7499V19.0454C73.9343 18.8632 74.0835 18.7141 74.2658 18.7141H78.972C79.1543 18.7141 79.3035 18.8632 79.3035 19.0454V23.7499Z" fill="#A6B5CB"/>
                                        <path d="M86.0642 23.7499C86.0642 23.9321 85.9151 24.0812 85.7328 24.0812H81.0265C80.8442 24.0812 80.6951 23.9321 80.6951 23.7499V19.0454C80.6951 18.8632 80.8442 18.7141 81.0265 18.7141H85.7328C85.9151 18.7141 86.0642 18.8632 86.0642 19.0454V23.7499Z" fill="#A6B5CB"/>
                                        <path d="M79.3035 30.1439C79.3035 30.3261 79.1543 30.4752 78.972 30.4752H74.2658C74.0835 30.4752 73.9343 30.3261 73.9343 30.1439V25.4395C73.9343 25.2572 74.0835 25.1082 74.2658 25.1082H78.972C79.1543 25.1082 79.3035 25.2572 79.3035 25.4395V30.1439Z" fill="#A6B5CB"/>
                                        <path d="M86.0642 30.1439C86.0642 30.3261 85.9151 30.4752 85.7328 30.4752H81.0265C80.8442 30.4752 80.6951 30.3261 80.6951 30.1439V25.4395C80.6951 25.2572 80.8442 25.1082 81.0265 25.1082H85.7328C85.9151 25.1082 86.0642 25.2572 86.0642 25.4395V30.1439Z" fill="#A6B5CB"/>
                                        <path d="M22 52.7881H29.656C31.4291 52.7881 32.7549 53.1691 33.6331 53.9311C34.5114 54.6931 34.9589 55.7532 34.9589 57.1281C34.9589 57.8901 34.8429 58.5196 34.6274 59.0331C34.3954 59.53 34.1469 59.9441 33.8486 60.2423C33.5503 60.557 33.252 60.7724 32.9537 60.9049C32.6554 61.0374 32.44 61.1368 32.3074 61.17V61.2196C32.5394 61.2528 32.8046 61.319 33.0863 61.4516C33.368 61.5675 33.6166 61.7663 33.8651 62.0313C34.0971 62.2964 34.296 62.6277 34.4617 63.0584C34.6109 63.4725 34.6937 64.0026 34.6937 64.632C34.6937 65.5762 34.76 66.4376 34.9091 67.1996C35.0583 67.9781 35.2737 68.5248 35.572 68.8561H32.556C32.3406 68.5082 32.2246 68.1272 32.1914 67.7131C32.1583 67.299 32.1417 66.8849 32.1417 66.5039C32.1417 65.775 32.092 65.129 32.0091 64.5989C31.9263 64.0688 31.7606 63.6216 31.512 63.2737C31.28 62.9258 30.9486 62.6608 30.5343 62.4951C30.12 62.3295 29.5897 62.2467 28.9434 62.2467H24.8171V68.8561H22V52.7881ZM24.8171 60.0932H29.424C30.3189 60.0932 30.9983 59.8779 31.4623 59.4472C31.9263 59.0165 32.1583 58.387 32.1583 57.5257C32.1583 57.0121 32.0754 56.598 31.9263 56.2833C31.7771 55.9686 31.5783 55.7035 31.3131 55.5379C31.048 55.3557 30.7497 55.2397 30.4183 55.1734C30.0869 55.1072 29.7389 55.0906 29.3743 55.0906H24.8171V60.0932Z" fill="#A6B5CB"/>
                                        <path d="M39.4663 63.6879C39.4663 64.1351 39.5326 64.5658 39.6652 64.9965C39.7978 65.4106 39.9801 65.7751 40.2452 66.0898C40.4938 66.4045 40.8252 66.653 41.2063 66.8352C41.5875 67.0174 42.0681 67.1168 42.5983 67.1168C43.3441 67.1168 43.9572 66.9512 44.4046 66.6364C44.8686 66.3217 45.2001 65.8248 45.4321 65.1953H47.8515C47.7189 65.8248 47.4869 66.388 47.1555 66.8849C46.8241 67.3819 46.4263 67.796 45.9623 68.1273C45.4983 68.4586 44.9846 68.7236 44.4046 68.8893C43.8246 69.0549 43.2281 69.1543 42.5983 69.1543C41.6869 69.1543 40.8749 69.0052 40.1789 68.7071C39.4663 68.4089 38.8863 67.9948 38.3892 67.4481C37.9086 66.9015 37.5275 66.272 37.2955 65.51C37.0469 64.7646 36.9309 63.9363 36.9309 63.0418C36.9309 62.2136 37.0635 61.435 37.3286 60.6896C37.5938 59.9442 37.9583 59.2982 38.4555 58.735C38.9361 58.1717 39.5326 57.7245 40.2121 57.3932C40.9081 57.0619 41.6869 56.8962 42.5486 56.8962C43.4601 56.8962 44.2886 57.095 45.0178 57.476C45.7469 57.857 46.3435 58.3705 46.8241 59C47.3046 59.6295 47.6526 60.3583 47.8681 61.17C48.0835 61.9817 48.1332 62.8265 48.0338 63.7044H39.4663V63.6879ZM45.4486 61.9982C45.4155 61.6007 45.3326 61.2031 45.1835 60.8221C45.0343 60.4411 44.8521 60.1264 44.6035 59.8448C44.3549 59.5632 44.0566 59.3479 43.7086 59.1656C43.3606 59 42.9629 58.9006 42.5321 58.9006C42.0846 58.9006 41.6703 58.9834 41.3058 59.1325C40.9412 59.2816 40.6263 59.5135 40.3612 59.7785C40.0961 60.0601 39.8972 60.3749 39.7315 60.7559C39.5823 61.1369 39.4829 61.5344 39.4663 61.9651H45.4486V61.9982Z" fill="#A6B5CB"/>
                                        <path d="M59.6835 66.2554C59.6835 66.5702 59.7166 66.8021 59.7995 66.9346C59.8824 67.0671 60.0481 67.1334 60.2801 67.1334C60.3629 67.1334 60.4458 67.1334 60.5452 67.1334C60.6446 67.1334 60.7772 67.1168 60.9098 67.0837V68.8561C60.8269 68.8893 60.7109 68.9224 60.5618 68.9555C60.4126 68.9887 60.2801 69.0218 60.1309 69.0549C59.9818 69.0881 59.8326 69.1046 59.6835 69.1212C59.5344 69.1378 59.4018 69.1377 59.3024 69.1377C58.7721 69.1377 58.3412 69.0384 57.9932 68.823C57.6452 68.6077 57.4298 68.2432 57.3138 67.7297C56.8001 68.2267 56.1869 68.5911 55.4412 68.8065C54.6955 69.0218 53.9829 69.1377 53.2869 69.1377C52.7566 69.1377 52.2595 69.0715 51.7789 68.9224C51.2984 68.7733 50.8841 68.5745 50.5029 68.2929C50.1384 68.0113 49.8401 67.6635 49.6246 67.2328C49.4092 66.8021 49.2932 66.3051 49.2932 65.7419C49.2932 65.0296 49.4258 64.4333 49.6909 63.9861C49.9561 63.5388 50.3041 63.1909 50.7184 62.9259C51.1492 62.6774 51.6298 62.4952 52.1601 62.3793C52.6904 62.2633 53.2206 62.1805 53.7675 62.1142C54.2315 62.0314 54.6789 61.9651 55.0932 61.9154C55.5075 61.8823 55.8886 61.816 56.2035 61.7167C56.5184 61.6338 56.7835 61.4847 56.9658 61.3025C57.1481 61.1203 57.2475 60.8387 57.2475 60.4577C57.2475 60.1264 57.1646 59.8614 57.0155 59.646C56.8664 59.4307 56.6675 59.2816 56.4355 59.1657C56.2035 59.0497 55.9384 58.9834 55.6566 58.9337C55.3749 58.9006 55.1098 58.884 54.8446 58.884C54.1321 58.884 53.5355 59.0331 53.0715 59.3313C52.6075 59.6295 52.3424 60.0933 52.2926 60.7228H49.7241C49.7738 59.9773 49.9561 59.3479 50.2709 58.8509C50.5858 58.354 50.9835 57.9564 51.4806 57.6582C51.9612 57.3601 52.5246 57.1447 53.1378 57.0288C53.7509 56.9128 54.3806 56.8466 55.0269 56.8466C55.5904 56.8466 56.1538 56.9128 56.7172 57.0288C57.2641 57.1447 57.7778 57.3435 58.2086 57.6085C58.6561 57.8736 59.0041 58.2214 59.2692 58.6521C59.5344 59.0828 59.6669 59.5963 59.6669 60.2092V66.2554H59.6835ZM57.1315 63.0087C56.7338 63.2572 56.2698 63.4228 55.6898 63.4725C55.1264 63.5222 54.5464 63.6051 53.9829 63.7044C53.7178 63.7541 53.4526 63.8204 53.2041 63.9032C52.9555 63.9861 52.7235 64.102 52.5246 64.2345C52.3258 64.3836 52.1766 64.5658 52.0606 64.7977C51.9446 65.0296 51.8949 65.3112 51.8949 65.6425C51.8949 65.9242 51.9778 66.1726 52.1435 66.3548C52.3092 66.5536 52.5081 66.7027 52.7401 66.8187C52.9721 66.9346 53.2206 67.0174 53.5024 67.0506C53.7841 67.1003 54.0326 67.1168 54.2481 67.1168C54.5298 67.1168 54.8446 67.0837 55.1761 67.0009C55.5075 66.918 55.8224 66.8021 56.1041 66.6199C56.4024 66.4377 56.6344 66.2058 56.8332 65.9407C57.0321 65.6591 57.1315 65.3278 57.1315 64.9137V63.0087Z" fill="#A6B5CB"/>
                                        <path d="M62.5176 52.7881H65.0861V68.823H62.5176V52.7881Z" fill="#A6B5CB"/>
                                        <path d="M74.4814 52.7881H86.0317V55.2066H77.282V59.4141H85.3688V61.7H77.282V66.3879H86.1808V68.8064H74.4648V52.7881H74.4814Z" fill="#A6B5CB"/>
                                        <path d="M90.2083 65.0959C90.2912 65.8413 90.5729 66.3714 91.07 66.6695C91.5672 66.9677 92.1637 67.1168 92.8432 67.1168C93.0752 67.1168 93.3569 67.1002 93.6717 67.0671C93.9866 67.034 94.2683 66.9511 94.5335 66.8517C94.7986 66.7524 95.0306 66.5867 95.1963 66.3879C95.362 66.1891 95.4449 65.9241 95.4283 65.5928C95.4117 65.2615 95.2957 64.9965 95.0637 64.7811C94.8317 64.5658 94.55 64.4001 94.202 64.2676C93.854 64.1351 93.4563 64.0357 92.9923 63.9363C92.5449 63.8535 92.0809 63.7541 91.6169 63.6381C91.1363 63.5388 90.6723 63.4062 90.2415 63.2571C89.794 63.1081 89.3963 62.9093 89.0483 62.6442C88.7003 62.3958 88.4186 62.0645 88.2032 61.6669C87.9877 61.2694 87.8883 60.7724 87.8883 60.1926C87.8883 59.5632 88.0375 59.0331 88.3523 58.6024C88.6672 58.1717 89.0483 57.8238 89.5289 57.5754C89.9929 57.3103 90.5232 57.1281 91.1032 57.0287C91.6832 56.9293 92.23 56.8796 92.7603 56.8796C93.3569 56.8796 93.9369 56.9459 94.4837 57.0784C95.0306 57.2109 95.5277 57.4097 95.9752 57.6913C96.4226 57.9729 96.7872 58.3539 97.0689 58.8012C97.3672 59.265 97.5495 59.8116 97.6157 60.4577H94.9477C94.8317 59.8448 94.55 59.4306 94.1026 59.2153C93.6552 59 93.158 58.9006 92.578 58.9006C92.3957 58.9006 92.1803 58.9171 91.9317 58.9503C91.6832 58.9834 91.4512 59.0331 91.2357 59.1159C91.0203 59.1987 90.838 59.3147 90.6889 59.4803C90.5397 59.6294 90.4569 59.8448 90.4569 60.0932C90.4569 60.408 90.5729 60.6564 90.7883 60.8552C91.0037 61.054 91.2855 61.2031 91.65 61.3356C91.998 61.4681 92.3957 61.5675 92.8597 61.6669C93.3072 61.7497 93.7712 61.8491 94.2517 61.9651C94.7157 62.0645 95.1797 62.197 95.6272 62.3461C96.0746 62.4952 96.4723 62.6939 96.8369 62.959C97.1849 63.2075 97.4666 63.5387 97.6986 63.9197C97.914 64.3173 98.03 64.7811 98.03 65.3609C98.03 66.0566 97.8809 66.6364 97.566 67.1168C97.2512 67.5972 96.8369 67.9782 96.3397 68.2929C95.8426 68.5911 95.2792 68.8064 94.666 68.9389C94.0529 69.0714 93.4397 69.1377 92.8432 69.1377C92.114 69.1377 91.4346 69.0549 90.8049 68.8892C90.1752 68.7236 89.6449 68.4751 89.1809 68.1438C88.7169 67.8125 88.3689 67.3818 88.1037 66.8849C87.8386 66.3879 87.706 65.7916 87.6895 65.0959H90.2083Z" fill="#A6B5CB"/>
                                        <path d="M98.7754 57.2109H100.714V53.7323H103.283V57.2109H105.603V59.1159H103.283V65.3112C103.283 65.5762 103.299 65.8082 103.316 66.0069C103.333 66.2057 103.399 66.3714 103.465 66.5039C103.548 66.6364 103.664 66.7358 103.83 66.8021C103.995 66.8683 104.227 66.9014 104.509 66.9014C104.691 66.9014 104.874 66.9014 105.056 66.8849C105.238 66.8849 105.421 66.8517 105.603 66.8021V68.7733C105.321 68.8064 105.039 68.8395 104.774 68.8561C104.509 68.8892 104.227 68.9058 103.946 68.9058C103.266 68.9058 102.736 68.8395 102.322 68.707C101.907 68.5745 101.593 68.3923 101.361 68.1438C101.129 67.8953 100.963 67.5806 100.897 67.2162C100.814 66.8352 100.764 66.4211 100.747 65.9407V59.0828H98.8085V57.2109H98.7754Z" fill="#A6B5CB"/>
                                        <path d="M117.153 66.2554C117.153 66.5702 117.186 66.8021 117.269 66.9346C117.352 67.0671 117.518 67.1334 117.75 67.1334C117.833 67.1334 117.916 67.1334 118.015 67.1334C118.114 67.1334 118.247 67.1168 118.38 67.0837V68.8561C118.297 68.8893 118.181 68.9224 118.032 68.9555C117.882 68.9887 117.75 69.0218 117.601 69.0549C117.452 69.0881 117.302 69.1046 117.153 69.1212C117.004 69.1378 116.872 69.1377 116.772 69.1377C116.242 69.1377 115.811 69.0384 115.463 68.823C115.115 68.6077 114.9 68.2432 114.784 67.7297C114.27 68.2267 113.657 68.5911 112.911 68.8065C112.165 69.0384 111.453 69.1377 110.757 69.1377C110.226 69.1377 109.729 69.0715 109.249 68.9224C108.768 68.7733 108.354 68.5745 107.973 68.2929C107.608 68.0113 107.31 67.6635 107.094 67.2328C106.879 66.8021 106.763 66.3051 106.763 65.7419C106.763 65.0296 106.896 64.4333 107.161 63.9861C107.426 63.5388 107.774 63.1909 108.188 62.9259C108.619 62.6774 109.1 62.4952 109.63 62.3793C110.16 62.2633 110.69 62.1805 111.237 62.1142C111.701 62.0314 112.149 61.9651 112.563 61.9154C112.977 61.8823 113.358 61.816 113.673 61.7167C113.988 61.6338 114.253 61.4847 114.436 61.3025C114.618 61.1203 114.717 60.8387 114.717 60.4577C114.717 60.1264 114.634 59.8614 114.485 59.646C114.336 59.4307 114.137 59.2816 113.905 59.1657C113.673 59.0497 113.408 58.9834 113.126 58.9337C112.845 58.9006 112.58 58.884 112.314 58.884C111.602 58.884 111.005 59.0331 110.541 59.3313C110.077 59.6295 109.812 60.0933 109.762 60.7228H107.194C107.244 59.9773 107.426 59.3479 107.741 58.8509C108.056 58.354 108.453 57.9564 108.95 57.6582C109.431 57.3601 109.994 57.1447 110.608 57.0288C111.221 56.9128 111.85 56.8466 112.497 56.8466C113.06 56.8466 113.624 56.9128 114.187 57.0288C114.734 57.1447 115.248 57.3435 115.678 57.6085C116.126 57.8736 116.474 58.2214 116.739 58.6521C117.004 59.0828 117.137 59.5963 117.137 60.2092V66.2554H117.153ZM114.601 63.0087C114.204 63.2572 113.74 63.4228 113.16 63.4725C112.596 63.5222 112.016 63.6051 111.453 63.7044C111.188 63.7541 110.922 63.8204 110.674 63.9032C110.425 63.9861 110.193 64.102 109.994 64.2345C109.796 64.3836 109.646 64.5658 109.53 64.7977C109.414 65.0296 109.365 65.3112 109.365 65.6425C109.365 65.9242 109.448 66.1726 109.613 66.3548C109.779 66.5536 109.978 66.7027 110.21 66.8187C110.442 66.9346 110.69 67.0174 110.972 67.0506C111.254 67.1003 111.502 67.1168 111.718 67.1168C112 67.1168 112.314 67.0837 112.646 67.0009C112.977 66.918 113.292 66.8021 113.574 66.6199C113.872 66.4377 114.104 66.2058 114.303 65.9407C114.502 65.6591 114.601 65.3278 114.601 64.9137V63.0087Z" fill="#A6B5CB"/>
                                        <path d="M118.76 57.2109H120.699V53.7323H123.251V57.2109H125.571V59.1159H123.251V65.3112C123.251 65.5762 123.268 65.8082 123.284 66.0069C123.301 66.2057 123.367 66.3714 123.434 66.5039C123.516 66.6364 123.632 66.7358 123.798 66.8021C123.964 66.8683 124.196 66.9014 124.478 66.9014C124.66 66.9014 124.842 66.9014 125.024 66.8849C125.207 66.8849 125.389 66.8517 125.571 66.8021V68.7733C125.29 68.8064 125.008 68.8395 124.743 68.8561C124.478 68.8892 124.196 68.9058 123.914 68.9058C123.235 68.9058 122.704 68.8395 122.29 68.707C121.876 68.5745 121.561 68.3923 121.329 68.1438C121.097 67.8953 120.931 67.5806 120.865 67.2162C120.782 66.8352 120.732 66.4211 120.716 65.9407V59.0828H118.777V57.2109H118.76Z" fill="#A6B5CB"/>
                                        <path d="M129.416 63.6879C129.416 64.1351 129.483 64.5658 129.615 64.9965C129.748 65.4106 129.93 65.7751 130.195 66.0898C130.444 66.4045 130.775 66.653 131.156 66.8352C131.554 67.0174 132.018 67.1168 132.548 67.1168C133.294 67.1168 133.907 66.9512 134.355 66.6364C134.819 66.3217 135.15 65.8248 135.382 65.1953H137.801C137.669 65.8248 137.437 66.388 137.105 66.8849C136.774 67.3819 136.376 67.796 135.912 68.1273C135.448 68.4586 134.935 68.7236 134.355 68.8893C133.775 69.0549 133.178 69.1543 132.548 69.1543C131.637 69.1543 130.825 69.0052 130.129 68.7071C129.416 68.4089 128.836 67.9948 128.339 67.4481C127.859 66.9015 127.477 66.272 127.245 65.51C126.997 64.7646 126.881 63.9363 126.881 63.0418C126.881 62.2136 127.013 61.435 127.279 60.6896C127.544 59.9442 127.908 59.2982 128.405 58.735C128.886 58.1717 129.483 57.7245 130.162 57.3932C130.858 57.0619 131.637 56.8962 132.499 56.8962C133.41 56.8962 134.239 57.095 134.968 57.476C135.697 57.857 136.293 58.3705 136.774 59C137.255 59.6295 137.603 60.3583 137.818 61.17C138.033 61.9817 138.083 62.8265 137.984 63.7044H129.416V63.6879ZM135.382 61.9982C135.349 61.6007 135.266 61.2031 135.117 60.8221C134.968 60.4411 134.785 60.1264 134.537 59.8448C134.288 59.5632 133.99 59.3479 133.642 59.1656C133.294 59 132.896 58.9006 132.465 58.9006C132.018 58.9006 131.604 58.9834 131.239 59.1325C130.875 59.2816 130.56 59.5135 130.295 59.7785C130.029 60.0601 129.831 60.3749 129.665 60.7559C129.516 61.1369 129.416 61.5344 129.4 61.9651H135.382V61.9982Z" fill="#A6B5CB"/>
                                        <path d="M37.113 73.7097H37.8588L38.6542 76.0122H38.6708L39.4496 73.7097H40.1622L38.969 76.9564C38.9193 77.089 38.853 77.2215 38.8033 77.354C38.7536 77.4865 38.6873 77.5859 38.6045 77.6853C38.5216 77.7847 38.4388 77.8675 38.3228 77.9172C38.2068 77.9669 38.0576 78 37.8753 78C37.7096 78 37.5605 77.9835 37.4113 77.9669V77.4037C37.461 77.4037 37.5273 77.4203 37.577 77.4368C37.6268 77.4534 37.6765 77.4534 37.7428 77.4534C37.8256 77.4534 37.8919 77.4368 37.9416 77.4203C37.9913 77.4037 38.041 77.3706 38.0742 77.3374C38.1073 77.3043 38.1405 77.2546 38.157 77.2049C38.1736 77.1552 38.2068 77.089 38.2233 77.0227L38.3062 76.7908L37.113 73.7097Z" fill="#A6B5CB"/>
                                        <path d="M43.1288 76.8735C42.8802 76.8735 42.6648 76.8404 42.4659 76.7576C42.2671 76.6747 42.1179 76.5588 41.9854 76.4263C41.8528 76.2772 41.7534 76.1115 41.6871 75.9127C41.6208 75.714 41.5876 75.4986 41.5876 75.2667C41.5876 75.0348 41.6208 74.8195 41.6871 74.6207C41.7534 74.4219 41.8528 74.2562 41.9854 74.1072C42.1179 73.9581 42.2836 73.8587 42.4659 73.7759C42.6648 73.693 42.8802 73.6599 43.1288 73.6599C43.3774 73.6599 43.5928 73.693 43.7916 73.7759C43.9905 73.8587 44.1396 73.9746 44.2722 74.1072C44.4048 74.2562 44.5042 74.4219 44.5705 74.6207C44.6368 74.8195 44.6699 75.0348 44.6699 75.2667C44.6699 75.4986 44.6368 75.7305 44.5705 75.9127C44.5042 76.1115 44.4048 76.2772 44.2722 76.4263C44.1396 76.5753 43.9739 76.6747 43.7916 76.7576C43.5928 76.8238 43.3774 76.8735 43.1288 76.8735ZM43.1288 76.3269C43.2779 76.3269 43.4105 76.2937 43.5265 76.2275C43.6425 76.1612 43.7254 76.0784 43.8082 75.979C43.8745 75.8796 43.9242 75.7637 43.9739 75.6311C44.0071 75.4986 44.0236 75.3661 44.0236 75.2336C44.0236 75.1011 44.0071 74.9685 43.9739 74.836C43.9408 74.7035 43.8911 74.5875 43.8082 74.4882C43.7419 74.3888 43.6425 74.3059 43.5265 74.2397C43.4105 74.1734 43.2779 74.1403 43.1288 74.1403C42.9796 74.1403 42.8471 74.1734 42.7311 74.2397C42.6151 74.3059 42.5322 74.3888 42.4494 74.4882C42.3831 74.5875 42.3334 74.7035 42.2836 74.836C42.2505 74.9685 42.2339 75.1011 42.2339 75.2336C42.2339 75.3661 42.2505 75.4986 42.2836 75.6311C42.3168 75.7637 42.3665 75.8796 42.4494 75.979C42.5156 76.0784 42.6151 76.1612 42.7311 76.2275C42.8471 76.2937 42.9796 76.3269 43.1288 76.3269Z" fill="#A6B5CB"/>
                                        <path d="M49.1443 76.7741H48.4814V76.3434H48.4649C48.382 76.4925 48.2494 76.625 48.1003 76.7079C47.9346 76.8073 47.7689 76.8404 47.6031 76.8404C47.2054 76.8404 46.9071 76.741 46.7249 76.5422C46.5426 76.3434 46.4597 76.0453 46.4597 75.6311V73.6765H47.1391V75.5649C47.1391 75.8299 47.1889 76.0287 47.2883 76.1281C47.3877 76.244 47.5369 76.2937 47.7191 76.2937C47.8683 76.2937 47.9843 76.2772 48.0837 76.2275C48.1831 76.1778 48.2494 76.1281 48.3157 76.0453C48.382 75.979 48.4151 75.8796 48.4483 75.7802C48.4814 75.6808 48.4814 75.5649 48.4814 75.4489V73.6599H49.1609V76.7741H49.1443Z" fill="#A6B5CB"/>
                                        <path d="M51.0495 73.7096H51.6792V74.306H51.6958C51.7124 74.2231 51.7621 74.1403 51.8118 74.0575C51.8615 73.9747 51.9444 73.9084 52.0272 73.8421C52.1101 73.7759 52.193 73.7262 52.2924 73.6765C52.3918 73.6434 52.4912 73.6102 52.5907 73.6102C52.6735 73.6102 52.7232 73.6102 52.7564 73.6102C52.7895 73.6102 52.8227 73.6102 52.8558 73.6268V74.2728C52.8061 74.2728 52.7564 74.2563 52.7067 74.2563C52.657 74.2563 52.6072 74.2397 52.5575 74.2397C52.4415 74.2397 52.3421 74.2563 52.2261 74.306C52.1267 74.3557 52.0438 74.4219 51.961 74.5047C51.8781 74.5876 51.8284 74.7035 51.7787 74.836C51.729 74.9686 51.7124 75.1176 51.7124 75.2833V76.741H51.033V73.7096H51.0495Z" fill="#A6B5CB"/>
                                        <path d="M56.8662 73.7096H57.3799V72.782H58.0594V73.7096H58.6725V74.2231H58.0594V75.8631C58.0594 75.9293 58.0594 75.9956 58.0759 76.0453C58.0759 76.095 58.0925 76.1447 58.1256 76.1778C58.1422 76.2109 58.1754 76.2441 58.2251 76.2606C58.2748 76.2772 58.3245 76.2938 58.4074 76.2938C58.4571 76.2938 58.5068 76.2938 58.5565 76.2938C58.6062 76.2938 58.6559 76.2772 58.7056 76.2772V76.8073C58.6228 76.8073 58.5565 76.8238 58.4902 76.8238C58.4239 76.8238 58.3411 76.8404 58.2748 76.8404C58.0925 76.8404 57.9599 76.8238 57.8439 76.7907C57.7279 76.7576 57.6451 76.7079 57.5954 76.6416C57.5291 76.5754 57.4959 76.4925 57.4628 76.3931C57.4462 76.2938 57.4296 76.1778 57.4296 76.0618V74.2563H56.9159V73.7096H56.8662Z" fill="#A6B5CB"/>
                                        <path d="M62.9147 76.095C62.9147 76.1778 62.9313 76.2441 62.9479 76.2772C62.9644 76.3104 63.0141 76.3269 63.0804 76.3269C63.097 76.3269 63.1301 76.3269 63.1467 76.3269C63.1799 76.3269 63.213 76.3269 63.2461 76.3104V76.7742C63.2296 76.7742 63.1964 76.7907 63.1467 76.8073C63.1136 76.8239 63.0639 76.8239 63.0307 76.8404C62.9976 76.8404 62.9478 76.857 62.9147 76.857C62.8816 76.857 62.8484 76.857 62.8153 76.857C62.6827 76.857 62.5667 76.8239 62.4673 76.7742C62.3678 76.7245 62.3181 76.6251 62.285 76.476C62.1524 76.6085 61.9867 76.7079 61.7879 76.7576C61.589 76.8239 61.4067 76.8404 61.2244 76.8404C61.0918 76.8404 60.9593 76.8239 60.8267 76.7907C60.6941 76.7576 60.5947 76.6914 60.4953 76.6251C60.3959 76.5588 60.313 76.4594 60.2633 76.3435C60.2136 76.2275 60.1804 76.095 60.1804 75.9459C60.1804 75.7637 60.2136 75.5981 60.2798 75.4821C60.3461 75.3662 60.4456 75.2668 60.5616 75.2005C60.6776 75.1343 60.7936 75.0846 60.9427 75.0514C61.0753 75.0183 61.2244 75.0017 61.3736 74.9852C61.4896 74.9686 61.6056 74.952 61.7216 74.9355C61.8376 74.9189 61.937 74.9023 62.0198 74.8858C62.1027 74.8692 62.169 74.8195 62.2187 74.7698C62.2684 74.7201 62.285 74.6539 62.285 74.5545C62.285 74.4717 62.2684 74.3888 62.2187 74.3391C62.169 74.2894 62.1193 74.2397 62.0696 74.2066C62.0033 74.1735 61.937 74.1569 61.8707 74.1404C61.7879 74.1238 61.7216 74.1238 61.6553 74.1238C61.473 74.1238 61.3073 74.1569 61.1913 74.2397C61.0753 74.3226 60.9924 74.4385 60.9758 74.6042H60.2964C60.313 74.4054 60.3627 74.2397 60.4456 74.1072C60.5284 73.9747 60.6278 73.8753 60.7604 73.7925C60.893 73.7097 61.0421 73.66 61.1913 73.6268C61.357 73.5937 61.5227 73.5771 61.6884 73.5771C61.8376 73.5771 61.9867 73.5937 62.1358 73.6268C62.285 73.66 62.4176 73.7097 62.5336 73.7759C62.6496 73.8422 62.749 73.9416 62.8153 74.0575C62.8816 74.1735 62.9147 74.306 62.9147 74.4717V76.095ZM62.2353 75.2502C62.1359 75.3165 62.0033 75.3662 61.8541 75.3662C61.705 75.3827 61.5559 75.3993 61.4067 75.4324C61.3404 75.449 61.2576 75.4656 61.1913 75.4821C61.125 75.4987 61.0587 75.5318 61.009 75.5649C60.9593 75.5981 60.9096 75.6478 60.893 75.714C60.8598 75.7803 60.8433 75.8465 60.8433 75.9294C60.8433 76.0122 60.8599 76.0619 60.9096 76.1116C60.9593 76.1613 61.009 76.211 61.0753 76.2275C61.1416 76.2607 61.2078 76.2772 61.2741 76.2938C61.3404 76.3104 61.4067 76.3104 61.473 76.3104C61.5558 76.3104 61.6221 76.2938 61.7216 76.2772C61.8044 76.2607 61.8873 76.2275 61.9701 76.1778C62.053 76.1281 62.1193 76.0619 62.169 75.9956C62.2187 75.9294 62.2518 75.83 62.2518 75.7306V75.2502H62.2353Z" fill="#A6B5CB"/>
                                        <path d="M67.6876 76.6251C67.6876 77.0889 67.555 77.4368 67.2899 77.6687C67.0247 77.9006 66.6601 78.0165 66.163 78.0165C66.0139 78.0165 65.8481 78 65.699 77.9669C65.5499 77.9337 65.4007 77.884 65.2681 77.8012C65.1356 77.7184 65.0361 77.619 64.9367 77.503C64.8539 77.3871 64.8041 77.2214 64.7876 77.0558H65.467C65.4836 77.1552 65.5167 77.2214 65.5664 77.2877C65.6161 77.3539 65.6659 77.3871 65.7321 77.4202C65.7984 77.4533 65.8647 77.4699 65.9476 77.4865C66.0304 77.503 66.1133 77.503 66.1961 77.503C66.4779 77.503 66.6767 77.4368 66.7927 77.3043C66.9253 77.1717 66.975 76.973 66.975 76.7245V76.2607H66.9584C66.859 76.4263 66.7264 76.5588 66.5607 76.6582C66.395 76.7576 66.2127 76.8073 66.0304 76.8073C65.7819 76.8073 65.583 76.7576 65.4007 76.6748C65.235 76.592 65.0859 76.476 64.9699 76.3269C64.8539 76.1778 64.771 76.0122 64.7213 75.8134C64.6716 75.6146 64.6384 75.4158 64.6384 75.1839C64.6384 74.9852 64.6716 74.7864 64.7379 74.5876C64.8041 74.4054 64.887 74.2397 65.0196 74.0907C65.1356 73.9581 65.2847 73.8422 65.4504 73.7594C65.6161 73.6765 65.815 73.6268 66.0304 73.6268C66.2293 73.6268 66.395 73.66 66.5607 73.7428C66.7264 73.8256 66.8424 73.9581 66.9419 74.1238H66.9584V73.7097H67.6379V76.6251H67.6876ZM66.1796 76.2441C66.3287 76.2441 66.4613 76.211 66.5607 76.1447C66.6601 76.0784 66.743 75.9956 66.8093 75.8962C66.8756 75.7968 66.9253 75.6809 66.9584 75.5484C66.9916 75.4158 67.0081 75.2833 67.0081 75.1508C67.0081 75.0183 66.9916 74.8858 66.9584 74.7698C66.9253 74.6539 66.8756 74.5379 66.8093 74.4385C66.743 74.3391 66.6601 74.2729 66.5607 74.2066C66.4613 74.1569 66.3287 74.1238 66.1796 74.1238C66.0304 74.1238 65.8979 74.1569 65.7984 74.2232C65.699 74.2894 65.6161 74.3723 65.5499 74.4716C65.4836 74.571 65.4339 74.687 65.4173 74.8195C65.3841 74.952 65.3676 75.068 65.3676 75.2005C65.3676 75.333 65.3841 75.449 65.4173 75.5649C65.4504 75.6809 65.5001 75.7968 65.5664 75.8962C65.6327 75.9956 65.7156 76.0619 65.815 76.1281C65.9144 76.211 66.047 76.2441 66.1796 76.2441Z" fill="#A6B5CB"/>
                                        <path d="M69.5769 72.5336H70.2563V76.7742H69.5769V72.5336Z" fill="#A6B5CB"/>
                                        <path d="M72.1951 72.5336H72.8745V73.1796H72.1951V72.5336ZM72.1951 73.7097H72.8745V76.7908H72.1951V73.7097Z" fill="#A6B5CB"/>
                                        <path d="M74.813 73.7097H75.4593V74.1569L75.4758 74.1735C75.5753 74.0078 75.7078 73.8753 75.8736 73.7759C76.0393 73.6765 76.2216 73.6268 76.4204 73.6268C76.7518 73.6268 77.017 73.7097 77.2158 73.8919C77.4147 74.0741 77.5141 74.3226 77.5141 74.6704V76.7742H76.8347V74.8361C76.8347 74.5876 76.7684 74.4219 76.6856 74.306C76.5861 74.19 76.437 74.1403 76.2381 74.1403C76.1221 74.1403 76.0227 74.1569 75.9233 74.2066C75.8238 74.2563 75.7576 74.306 75.6913 74.3723C75.625 74.4385 75.5753 74.5379 75.5421 74.6373C75.509 74.7367 75.4924 74.8361 75.4924 74.952V76.7576H74.813V73.7097Z" fill="#A6B5CB"/>
                                        <path d="M79.9506 75.4158C79.9506 75.5318 79.9672 75.6478 80.0003 75.7637C80.0335 75.8797 80.0832 75.9791 80.1495 76.0619C80.2158 76.1447 80.2986 76.211 80.398 76.2607C80.4975 76.3104 80.63 76.3269 80.7626 76.3269C80.9615 76.3269 81.1272 76.2772 81.2432 76.1944C81.3592 76.1116 81.4586 75.9791 81.5083 75.8134H82.1546C82.1215 75.9791 82.0552 76.1281 81.9723 76.2607C81.8895 76.3932 81.7735 76.5091 81.6575 76.592C81.5415 76.6748 81.3923 76.741 81.2432 76.7907C81.094 76.8404 80.9283 76.857 80.7626 76.857C80.514 76.857 80.2986 76.8239 80.1163 76.741C79.934 76.6582 79.7683 76.5588 79.6358 76.4097C79.5032 76.2607 79.4038 76.095 79.3375 75.8962C79.2712 75.6975 79.238 75.4821 79.238 75.2502C79.238 75.0349 79.2712 74.8195 79.3375 74.6207C79.4038 74.4219 79.5032 74.2563 79.6358 74.1072C79.7683 73.9581 79.9175 73.8422 80.0998 73.7594C80.282 73.6765 80.4809 73.6268 80.7129 73.6268C80.9615 73.6268 81.1769 73.6765 81.3592 73.7759C81.558 73.8753 81.7072 74.0078 81.8398 74.1735C81.9723 74.3391 82.0552 74.5379 82.1215 74.7533C82.1712 74.9686 82.1878 75.2005 82.1712 75.4158H79.9506ZM81.5249 74.9686C81.5249 74.8692 81.4918 74.7532 81.4586 74.6539C81.4255 74.5545 81.3758 74.4716 81.3095 74.3888C81.2432 74.3226 81.1603 74.2563 81.0775 74.2066C80.978 74.1569 80.8786 74.1403 80.7626 74.1403C80.6466 74.1403 80.5306 74.1569 80.4312 74.2066C80.3318 74.2563 80.2489 74.306 80.1826 74.3723C80.1163 74.4385 80.05 74.5379 80.0169 74.6373C79.9672 74.7367 79.9506 74.8361 79.9506 74.952H81.5249V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M89.5948 76.6251C89.5948 77.0889 89.4622 77.4368 89.1971 77.6687C88.9319 77.9006 88.5674 78.0165 88.0702 78.0165C87.9211 78.0165 87.7554 78 87.6062 77.9669C87.4571 77.9337 87.3079 77.884 87.1754 77.8012C87.0428 77.7184 86.9434 77.619 86.8439 77.503C86.7611 77.3871 86.7114 77.2214 86.6948 77.0558H87.3742C87.3908 77.1552 87.4239 77.2214 87.4737 77.2877C87.5234 77.3539 87.5731 77.3871 87.6394 77.4202C87.7057 77.4533 87.7719 77.4699 87.8548 77.4865C87.9377 77.503 88.0205 77.503 88.1034 77.503C88.3851 77.503 88.5839 77.4368 88.6999 77.3043C88.8325 77.1717 88.8822 76.973 88.8822 76.7245V76.2607H88.8657C88.7662 76.4263 88.6337 76.5588 88.4679 76.6582C88.3022 76.7576 88.1199 76.8073 87.9377 76.8073C87.6891 76.8073 87.4902 76.7576 87.3079 76.6748C87.1422 76.592 86.9931 76.476 86.8771 76.3269C86.7611 76.1778 86.6782 76.0122 86.6285 75.8134C86.5788 75.6146 86.5457 75.4158 86.5457 75.1839C86.5457 74.9852 86.5788 74.7864 86.6451 74.5876C86.7114 74.4054 86.7942 74.2397 86.9268 74.0907C87.0428 73.9581 87.1919 73.8422 87.3577 73.7594C87.5234 73.6765 87.7222 73.6268 87.9377 73.6268C88.1365 73.6268 88.3022 73.66 88.4679 73.7428C88.6337 73.8256 88.7497 73.9581 88.8491 74.1238H88.8657V73.7097H89.5451V76.6251H89.5948ZM88.0868 76.2441C88.2359 76.2441 88.3685 76.211 88.4679 76.1447C88.5674 76.0784 88.6502 75.9956 88.7165 75.8962C88.7828 75.7968 88.8325 75.6809 88.8657 75.5484C88.8988 75.4158 88.9154 75.2833 88.9154 75.1508C88.9154 75.0183 88.8988 74.8858 88.8657 74.7698C88.8325 74.6539 88.7828 74.5379 88.7165 74.4385C88.6502 74.3391 88.5674 74.2729 88.4679 74.2066C88.3685 74.1569 88.2359 74.1238 88.0868 74.1238C87.9377 74.1238 87.8051 74.1569 87.7057 74.2232C87.6062 74.2894 87.5234 74.3723 87.4571 74.4716C87.3908 74.571 87.3411 74.687 87.3245 74.8195C87.2914 74.952 87.2748 75.068 87.2748 75.2005C87.2748 75.333 87.2914 75.449 87.3245 75.5649C87.3577 75.6809 87.4074 75.7968 87.4737 75.8962C87.5399 75.9956 87.6228 76.0619 87.7222 76.1281C87.8217 76.211 87.9542 76.2441 88.0868 76.2441Z" fill="#A6B5CB"/>
                                        <path d="M92.8759 76.8736C92.6273 76.8736 92.4119 76.8405 92.213 76.7577C92.0141 76.6749 91.865 76.5589 91.7324 76.4264C91.5999 76.2773 91.5004 76.1116 91.4341 75.9129C91.3679 75.7141 91.3347 75.4987 91.3347 75.2668C91.3347 75.0349 91.3679 74.8196 91.4341 74.6208C91.5004 74.422 91.5999 74.2564 91.7324 74.1073C91.865 73.9582 92.0307 73.8588 92.213 73.776C92.4119 73.6932 92.6273 73.66 92.8759 73.66C93.1244 73.66 93.3399 73.6932 93.5387 73.776C93.7376 73.8588 93.8867 73.9748 94.0193 74.1073C94.1519 74.2564 94.2513 74.422 94.3176 74.6208C94.3839 74.8196 94.417 75.0349 94.417 75.2668C94.417 75.4987 94.3839 75.7307 94.3176 75.9129C94.2513 76.1116 94.1519 76.2773 94.0193 76.4264C93.8867 76.5755 93.721 76.6749 93.5387 76.7577C93.3399 76.8239 93.1244 76.8736 92.8759 76.8736ZM92.8759 76.327C93.025 76.327 93.1576 76.2939 93.2736 76.2276C93.3896 76.1613 93.4724 76.0785 93.5553 75.9791C93.6216 75.8797 93.6713 75.7638 93.721 75.6313C93.7541 75.4987 93.7707 75.3662 93.7707 75.2337C93.7707 75.1012 93.7541 74.9687 93.721 74.8361C93.6879 74.7036 93.6381 74.5877 93.5553 74.4883C93.489 74.3889 93.3896 74.3061 93.2736 74.2398C93.1576 74.1735 93.025 74.1404 92.8759 74.1404C92.7267 74.1404 92.5941 74.1735 92.4781 74.2398C92.3621 74.3061 92.2793 74.3889 92.1964 74.4883C92.1301 74.5877 92.0804 74.7036 92.0307 74.8361C91.981 74.9687 91.981 75.1012 91.981 75.2337C91.981 75.3662 91.9976 75.4987 92.0307 75.6313C92.0639 75.7638 92.1136 75.8797 92.1964 75.9791C92.2627 76.0785 92.3621 76.1613 92.4781 76.2276C92.5941 76.2939 92.7267 76.327 92.8759 76.327Z" fill="#A6B5CB"/>
                                        <path d="M96.7201 75.4158C96.7201 75.5318 96.7367 75.6478 96.7699 75.7637C96.803 75.8797 96.8527 75.9791 96.919 76.0619C96.9853 76.1447 97.0681 76.211 97.1676 76.2607C97.267 76.3104 97.3996 76.3269 97.5321 76.3269C97.731 76.3269 97.8967 76.2772 98.0127 76.1944C98.1287 76.1116 98.2281 75.9791 98.2779 75.8134H98.9241C98.891 75.9791 98.8247 76.1281 98.7419 76.2607C98.659 76.3932 98.543 76.5091 98.427 76.592C98.311 76.6748 98.1619 76.741 98.0127 76.7907C97.8636 76.8404 97.6979 76.857 97.5321 76.857C97.2836 76.857 97.0681 76.8239 96.8859 76.741C96.7036 76.6582 96.5379 76.5588 96.4053 76.4097C96.2727 76.2607 96.1733 76.095 96.107 75.8962C96.0407 75.6975 96.0076 75.4821 96.0076 75.2502C96.0076 75.0349 96.0407 74.8195 96.107 74.6207C96.1733 74.4219 96.2727 74.2563 96.4053 74.1072C96.5379 73.9581 96.687 73.8422 96.8693 73.7594C97.0516 73.6765 97.2504 73.6268 97.4824 73.6268C97.731 73.6268 97.9464 73.6765 98.1287 73.7759C98.3276 73.8753 98.4767 74.0078 98.6093 74.1735C98.7419 74.3391 98.8247 74.5379 98.891 74.7533C98.9407 74.9686 98.9573 75.2005 98.9407 75.4158H96.7201ZM98.2944 74.9686C98.2944 74.8692 98.2613 74.7532 98.2281 74.6539C98.195 74.5545 98.1453 74.4716 98.079 74.3888C98.0127 74.3226 97.9299 74.2563 97.847 74.2066C97.7476 74.1569 97.6481 74.1403 97.5321 74.1403C97.4161 74.1403 97.3001 74.1569 97.2007 74.2066C97.1013 74.2563 97.0184 74.306 96.9521 74.3723C96.8859 74.4385 96.8196 74.5379 96.7864 74.6373C96.7367 74.7367 96.7201 74.8361 96.7201 74.952H98.2944V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M101.195 75.7969C101.211 75.9957 101.294 76.1282 101.427 76.211C101.559 76.2938 101.709 76.327 101.891 76.327C101.957 76.327 102.023 76.327 102.106 76.3104C102.189 76.2938 102.272 76.2773 102.338 76.2607C102.405 76.2276 102.471 76.1944 102.521 76.1448C102.57 76.0951 102.587 76.0288 102.587 75.9294C102.587 75.8466 102.554 75.7638 102.487 75.7141C102.421 75.6644 102.355 75.6147 102.255 75.5815C102.156 75.5484 102.057 75.5153 101.941 75.4987C101.825 75.4822 101.709 75.449 101.576 75.4159C101.443 75.3828 101.327 75.3496 101.211 75.3165C101.095 75.2834 100.996 75.2171 100.897 75.1509C100.797 75.0846 100.731 75.0018 100.681 74.8858C100.631 74.7864 100.598 74.6539 100.598 74.4883C100.598 74.3226 100.631 74.1901 100.714 74.0741C100.797 73.9582 100.897 73.8754 101.029 73.7925C101.162 73.7263 101.294 73.6766 101.443 73.6434C101.593 73.6103 101.742 73.5938 101.874 73.5938C102.04 73.5938 102.189 73.6103 102.322 73.6434C102.471 73.6766 102.603 73.7263 102.719 73.8091C102.835 73.8919 102.935 73.9747 103.018 74.1073C103.101 74.2232 103.15 74.3723 103.167 74.5379H102.454C102.421 74.3723 102.355 74.2729 102.239 74.2067C102.123 74.157 101.99 74.1238 101.841 74.1238C101.791 74.1238 101.742 74.1238 101.675 74.1404C101.609 74.1404 101.543 74.157 101.493 74.1901C101.443 74.2066 101.394 74.2398 101.344 74.2895C101.311 74.3392 101.278 74.3889 101.278 74.4551C101.278 74.5379 101.311 74.6042 101.361 74.6539C101.41 74.7036 101.493 74.7533 101.593 74.7864C101.692 74.8196 101.791 74.8527 101.907 74.8692C102.023 74.8858 102.156 74.9189 102.272 74.9521C102.388 74.9852 102.521 75.0183 102.637 75.0515C102.753 75.0846 102.869 75.1509 102.951 75.2171C103.051 75.2834 103.117 75.3662 103.183 75.4656C103.233 75.565 103.266 75.6975 103.266 75.8466C103.266 76.0288 103.217 76.1779 103.134 76.3104C103.051 76.4429 102.935 76.5423 102.802 76.6251C102.67 76.708 102.521 76.7577 102.355 76.7908C102.189 76.8239 102.023 76.8405 101.874 76.8405C101.675 76.8405 101.493 76.8239 101.344 76.7742C101.178 76.7245 101.029 76.6583 100.913 76.5754C100.797 76.4926 100.698 76.3767 100.631 76.2441C100.565 76.1116 100.532 75.946 100.515 75.7638H101.195V75.7969Z" fill="#A6B5CB"/>
                                        <path d="M107.806 72.5336H108.486V74.1072H108.502C108.585 73.9747 108.718 73.8588 108.867 73.7594C109.033 73.66 109.215 73.6269 109.414 73.6269C109.745 73.6269 110.01 73.7097 110.209 73.8919C110.408 74.0741 110.508 74.3226 110.508 74.6705V76.7742H109.828V74.8361C109.828 74.5876 109.762 74.422 109.679 74.306C109.58 74.1901 109.43 74.1404 109.232 74.1404C109.116 74.1404 109.016 74.1569 108.917 74.2066C108.817 74.2563 108.751 74.306 108.685 74.3723C108.618 74.4385 108.569 74.5379 108.536 74.6373C108.502 74.7367 108.486 74.8361 108.486 74.9521V76.7576H107.806V72.5336Z" fill="#A6B5CB"/>
                                        <path d="M112.944 75.4158C112.944 75.5318 112.961 75.6478 112.994 75.7637C113.027 75.8797 113.077 75.9791 113.143 76.0619C113.209 76.1447 113.292 76.211 113.391 76.2607C113.491 76.3104 113.623 76.3269 113.756 76.3269C113.955 76.3269 114.121 76.2772 114.237 76.1944C114.353 76.1116 114.452 75.9791 114.502 75.8134H115.148C115.115 75.9791 115.049 76.1281 114.966 76.2607C114.883 76.3932 114.767 76.5091 114.651 76.592C114.535 76.6748 114.386 76.741 114.237 76.7907C114.087 76.8404 113.922 76.857 113.756 76.857C113.507 76.857 113.292 76.8239 113.11 76.741C112.927 76.6582 112.762 76.5588 112.629 76.4097C112.497 76.2607 112.397 76.095 112.331 75.8962C112.265 75.6975 112.231 75.4821 112.231 75.2502C112.231 75.0349 112.265 74.8195 112.331 74.6207C112.397 74.4219 112.497 74.2563 112.629 74.1072C112.762 73.9581 112.911 73.8422 113.093 73.7594C113.275 73.6765 113.474 73.6268 113.706 73.6268C113.955 73.6268 114.17 73.6765 114.353 73.7759C114.551 73.8753 114.701 74.0078 114.833 74.1735C114.966 74.3391 115.049 74.5379 115.115 74.7533C115.165 74.9686 115.181 75.2005 115.165 75.4158H112.944ZM114.518 74.9686C114.518 74.8692 114.485 74.7532 114.452 74.6539C114.419 74.5545 114.369 74.4716 114.303 74.3888C114.237 74.3226 114.154 74.2563 114.071 74.2066C113.971 74.1569 113.872 74.1403 113.756 74.1403C113.64 74.1403 113.524 74.1569 113.425 74.2066C113.325 74.2563 113.242 74.306 113.176 74.3723C113.11 74.4385 113.043 74.5379 113.01 74.6373C112.961 74.7367 112.944 74.8361 112.944 74.952H114.518V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M116.904 73.7097H117.534V74.3061H117.55C117.567 74.2233 117.617 74.1404 117.666 74.0576C117.716 73.9748 117.799 73.9085 117.882 73.8423C117.965 73.776 118.047 73.7263 118.147 73.6766C118.246 73.6435 118.346 73.6104 118.445 73.6104C118.528 73.6104 118.578 73.6104 118.611 73.6104C118.644 73.6104 118.677 73.6104 118.71 73.6269V74.2729C118.661 74.2729 118.611 74.2564 118.561 74.2564C118.511 74.2564 118.462 74.2398 118.412 74.2398C118.296 74.2398 118.197 74.2564 118.081 74.3061C117.981 74.3558 117.898 74.422 117.815 74.5049C117.733 74.5877 117.683 74.7036 117.633 74.8362C117.583 74.9687 117.567 75.1178 117.567 75.2834V76.7411H116.887V73.7097H116.904Z" fill="#A6B5CB"/>
                                        <path d="M120.616 75.4158C120.616 75.5318 120.633 75.6478 120.666 75.7637C120.699 75.8797 120.749 75.9791 120.815 76.0619C120.882 76.1447 120.964 76.211 121.064 76.2607C121.163 76.3104 121.296 76.3269 121.428 76.3269C121.627 76.3269 121.793 76.2772 121.909 76.1944C122.025 76.1116 122.124 75.9791 122.174 75.8134H122.82C122.787 75.9791 122.721 76.1281 122.638 76.2607C122.555 76.3932 122.439 76.5091 122.323 76.592C122.207 76.6748 122.058 76.741 121.909 76.7907C121.76 76.8404 121.594 76.857 121.428 76.857C121.18 76.857 120.964 76.8239 120.782 76.741C120.6 76.6582 120.434 76.5588 120.302 76.4097C120.169 76.2607 120.07 76.095 120.003 75.8962C119.937 75.6975 119.904 75.4821 119.904 75.2502C119.904 75.0349 119.937 74.8195 120.003 74.6207C120.07 74.4219 120.169 74.2563 120.302 74.1072C120.434 73.9581 120.583 73.8422 120.766 73.7594C120.948 73.6765 121.147 73.6268 121.379 73.6268C121.627 73.6268 121.843 73.6765 122.025 73.7759C122.224 73.8753 122.373 74.0078 122.506 74.1735C122.638 74.3391 122.721 74.5379 122.787 74.7533C122.837 74.9686 122.854 75.2005 122.837 75.4158H120.616ZM122.207 74.9686C122.207 74.8692 122.174 74.7532 122.141 74.6539C122.108 74.5545 122.058 74.4716 121.992 74.3888C121.926 74.3226 121.843 74.2563 121.76 74.2066C121.66 74.1569 121.561 74.1403 121.445 74.1403C121.329 74.1403 121.213 74.1569 121.114 74.2066C121.014 74.2563 120.931 74.306 120.865 74.3723C120.799 74.4385 120.732 74.5379 120.699 74.6373C120.65 74.7367 120.633 74.8361 120.633 74.952H122.207V74.9686Z" fill="#A6B5CB"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_12">
                                        <rect width="116" height="76" fill="white" transform="translate(22 2)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M65.9719 53.3831L64.1897 50.3279L50.3565 26.3531H46.877L62.45 53.3831H65.9719Z" fill="#A6B5CB"/>
                                        <path d="M79.9319 53.3831L78.1921 50.3279L76.4524 47.3152L74.6702 44.3024L72.9304 41.2897L71.1906 38.2345L64.3164 26.3531H60.8369L69.4509 41.2897L71.1906 44.3024L72.9304 47.3152L74.6702 50.3279L76.4524 53.3831H76.4099H76.4524H79.9319Z" fill="#A6B5CB"/>
                                        <path d="M85.1507 50.3279L83.4109 47.3152L81.6711 44.3024L79.9314 41.2897L78.1916 38.2345L76.4519 35.2217L74.6697 32.2089L71.3174 26.3531H67.8379L72.9299 35.2217L76.4519 41.2897L78.1916 44.3024L79.9314 47.3152L81.6711 50.3279L83.4109 53.3831H86.8904H86.9329H86.8904L85.1507 50.3279Z" fill="#A6B5CB"/>
                                        <path d="M92.7041 7.04602H89.1821L76.4521 29.1538L78.1919 32.1665L92.7041 7.04602Z" fill="#A6B5CB"/>
                                        <path d="M69.4504 53.3831H72.9299L71.1902 50.3279L69.4504 47.3152L67.7106 44.3024L57.3569 26.3531H53.835L65.9709 47.3152L67.7106 50.3279L69.4504 53.3831Z" fill="#A6B5CB"/>
                                        <path d="M81.6717 38.192L99.6634 7.04602H96.1838L79.9319 35.1793L79.9743 35.2217L81.6717 38.192Z" fill="#A6B5CB"/>
                                        <path d="M85.1939 44.26L106.665 7.04602H103.186L83.4541 41.2472V41.2897L85.1939 44.26Z" fill="#A6B5CB"/>
                                        <path d="M113.667 7.04602H110.145L86.9336 47.2728V47.3152L88.6734 50.3279L113.667 7.04602Z" fill="#A6B5CB"/>
                                        <path d="M49.0828 65.9861C48.7433 66.2831 48.2766 66.4953 47.7674 66.4953C46.7065 66.4953 45.8154 65.6466 45.8154 64.5434C45.8154 63.4825 46.7065 62.5914 47.7674 62.5914C48.2766 62.5914 48.7433 62.8036 49.0828 63.1006L50.0163 62.1671C49.4223 61.6155 48.6585 61.276 47.7674 61.276C45.9852 61.276 44.5 62.7187 44.5 64.5434C44.5 66.368 45.9427 67.8107 47.7674 67.8107C48.616 67.8107 49.4223 67.4713 50.0163 66.9196L49.0828 65.9861Z" fill="#A6B5CB"/>
                                        <path d="M58.5879 61.3184C56.8057 61.3184 55.3206 62.7611 55.3206 64.5857C55.3206 66.4103 56.7633 67.8531 58.5879 67.8531C60.3701 67.8531 61.8553 66.4103 61.8553 64.5857C61.8553 62.7611 60.4125 61.3184 58.5879 61.3184ZM58.5879 66.5377C57.5271 66.5377 56.636 65.6466 56.636 64.5857C56.636 63.5249 57.5271 62.6338 58.5879 62.6338C59.6487 62.6338 60.5398 63.5249 60.5398 64.5857C60.5398 65.6466 59.6912 66.5377 58.5879 66.5377Z" fill="#A6B5CB"/>
                                        <path d="M70.8936 66.0709L68.9841 61.3184H67.6262V67.8106H68.8992V64.5857L70.2147 67.8106H71.615L72.9304 64.5857V67.8106H74.2034V61.3184H72.8031L70.8936 66.0709Z" fill="#A6B5CB"/>
                                        <path d="M81.7992 61.3184H79.9746V67.8106H81.29V65.2222H81.8417C82.9025 65.2222 83.7936 64.3311 83.7936 63.2703C83.7512 62.2095 82.8601 61.3184 81.7992 61.3184ZM81.7992 63.9068H81.29V62.5914H81.7992C82.1387 62.5914 82.4357 62.8884 82.4357 63.2279C82.4357 63.6098 82.1387 63.9068 81.7992 63.9068Z" fill="#A6B5CB"/>
                                        <path d="M90.9647 61.3184L88.6309 67.8106H90.0312L90.7101 65.986H92.7045L93.3834 67.8106H94.7837L92.4499 61.3184H90.9647ZM91.1344 64.713L91.6436 63.2279L92.1953 64.713H91.1344Z" fill="#A6B5CB"/>
                                        <path d="M105.731 61.3184H104.416V65.6466L101.827 61.3184H100.3V67.8106H101.573V63.4825L104.204 67.8106H105.731V61.3184Z" fill="#A6B5CB"/>
                                        <path d="M114.302 67.8106V64.713L115.999 61.3184H114.557L113.623 63.1006L112.732 61.3184H111.289L112.987 64.713V67.8106H114.302Z" fill="#A6B5CB"/>
                                        <path d="M44.5 70.9932H45.2638V73.3695H45.6881V70.9932H46.4519V70.6113H44.5V70.9932Z" fill="#A6B5CB"/>
                                        <path d="M49.5064 70.6113L48.488 73.3695H48.9124L49.1245 72.733H50.1854L50.3975 73.3695H50.8219L49.8035 70.6113H49.5064ZM49.2518 72.3935L49.6337 71.2054L50.0156 72.3935H49.2518Z" fill="#A6B5CB"/>
                                        <path d="M54.3019 72.2237H54.8535V72.351C54.8535 72.5207 54.8111 72.648 54.6838 72.7753C54.5989 72.9026 54.4292 72.9451 54.3019 72.9451C54.217 72.9451 54.1321 72.9451 54.0473 72.9027C53.9624 72.8602 53.92 72.8178 53.8775 72.7753C53.8351 72.7329 53.7926 72.648 53.7502 72.5632C53.7502 72.4783 53.7078 72.2661 53.7078 72.0115C53.7078 71.7569 53.7078 71.5448 53.7502 71.4599C53.7502 71.375 53.7927 71.2902 53.8775 71.2477C53.92 71.2053 53.9624 71.1629 54.0473 71.1205C54.1321 71.078 54.217 71.078 54.3019 71.078C54.4292 71.078 54.5565 71.1205 54.6413 71.2053C54.7262 71.2902 54.811 71.3751 54.811 71.5024H55.2354C55.1929 71.2902 55.0657 71.078 54.9384 70.9083C54.7686 70.7386 54.5565 70.6537 54.3019 70.6537C54.0897 70.6537 53.9199 70.6961 53.7502 70.8234C53.6229 70.9083 53.4956 71.0356 53.4108 71.1629C53.3683 71.2478 53.3259 71.3326 53.3259 71.4175C53.3259 71.5448 53.2834 71.757 53.2834 72.054C53.2834 72.351 53.2834 72.5632 53.3259 72.6905C53.3259 72.7329 53.3683 72.8178 53.3683 72.8178C53.3683 72.8602 53.4108 72.9026 53.4108 72.9451C53.4956 73.0724 53.5805 73.1997 53.7502 73.2845C53.8775 73.3694 54.0897 73.4543 54.3019 73.4543C54.5989 73.4543 54.811 73.3694 54.9808 73.1572C55.1505 72.9875 55.2778 72.7329 55.2778 72.4783V71.9267H54.3019V72.2237Z" fill="#A6B5CB"/>
                                        <path d="M58.5034 70.6113H58.0791V73.3695H59.8613V72.9876H58.5034V70.6113Z" fill="#A6B5CB"/>
                                        <path d="M63.0015 70.6113H62.5771V73.3695H63.0015V70.6113Z" fill="#A6B5CB"/>
                                        <path d="M67.5406 72.5633L66.2677 70.6113H65.8857V73.3695H66.3101V71.4176L67.5406 73.3695H67.965V70.6113H67.5406V72.5633Z" fill="#A6B5CB"/>
                                        <path d="M70.8518 73.3695H72.634V72.9876H71.2761V72.1814H72.4218V71.7995H71.2761V70.9932H72.634V70.6113H70.8518V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M79.4647 72.2236H80.0163V72.3509C80.0163 72.5206 79.9739 72.6479 79.8466 72.7752C79.7617 72.9025 79.592 72.945 79.4647 72.945C79.3798 72.945 79.295 72.945 79.2101 72.9025C79.1252 72.8601 79.0828 72.8177 79.0404 72.7752C78.9979 72.7328 78.9555 72.6479 78.9131 72.5631C78.9131 72.4782 78.8706 72.266 78.8706 72.0114C78.8706 71.7568 78.8706 71.5447 78.9131 71.4598C78.9131 71.3749 78.9555 71.2901 79.0404 71.2476C79.0828 71.2052 79.1252 71.1628 79.2101 71.1203C79.295 71.0779 79.3798 71.0779 79.4647 71.0779C79.592 71.0779 79.7193 71.1203 79.8042 71.2052C79.889 71.2901 79.9739 71.3749 79.9739 71.5022H80.3982C80.3558 71.2901 80.2285 71.0779 80.1012 70.9082C79.9315 70.7384 79.7193 70.6536 79.4647 70.6536C79.2525 70.6536 79.0828 70.696 78.9131 70.8233C78.7858 70.9082 78.6585 71.0355 78.5736 71.1628C78.5312 71.2476 78.4887 71.3325 78.4887 71.4174C78.4887 71.5447 78.4463 71.7568 78.4463 72.0539C78.4463 72.3509 78.4463 72.5631 78.4887 72.6904C78.4887 72.7328 78.5312 72.8177 78.5312 72.8177C78.5312 72.8601 78.5736 72.9025 78.5736 72.945C78.6585 73.0723 78.7433 73.1996 78.9131 73.2844C79.0404 73.3693 79.2525 73.4542 79.4647 73.4542C79.7617 73.4542 79.9739 73.3693 80.1436 73.1571C80.3134 72.9874 80.4407 72.7328 80.4407 72.4782V71.9266H79.4647V72.2236Z" fill="#A6B5CB"/>
                                        <path d="M85.0245 71.0774C84.9397 70.9501 84.8548 70.8228 84.7275 70.738C84.6002 70.6531 84.388 70.5682 84.1759 70.5682C83.9637 70.5682 83.794 70.6107 83.6242 70.738C83.4969 70.8228 83.3696 70.9501 83.2848 71.0774C83.2423 71.1623 83.1999 71.2472 83.1999 71.332C83.1999 71.4593 83.1575 71.6715 83.1575 71.9685C83.1575 72.2656 83.1575 72.4777 83.1999 72.605C83.1999 72.6475 83.2423 72.7323 83.2423 72.7323C83.2423 72.7748 83.2848 72.8172 83.2848 72.8596C83.3696 72.9869 83.4545 73.1142 83.6242 73.1991C83.7515 73.284 83.9637 73.3688 84.1759 73.3688C84.388 73.3688 84.5578 73.3264 84.7275 73.1991C84.8548 73.1142 84.9821 72.9869 85.0245 72.8596C85.067 72.7748 85.1094 72.6899 85.1094 72.605C85.1094 72.4777 85.1518 72.2656 85.1518 71.9685C85.1518 71.6291 85.1518 71.4169 85.1094 71.332C85.1094 71.2472 85.067 71.1623 85.0245 71.0774ZM84.6851 72.5202C84.6851 72.605 84.6426 72.6899 84.5578 72.7323C84.5153 72.7748 84.4729 72.8172 84.388 72.8596C84.3032 72.9021 84.2183 72.9021 84.1334 72.9021C84.0486 72.9021 83.9637 72.9021 83.8788 72.8596C83.794 72.8172 83.7515 72.7748 83.7091 72.7323C83.6667 72.6899 83.6242 72.605 83.5818 72.5202C83.5818 72.4353 83.5394 72.2231 83.5394 71.9685C83.5394 71.7139 83.5394 71.5018 83.5818 71.4169C83.5818 71.332 83.6242 71.2472 83.7091 71.2047C83.7515 71.1623 83.794 71.1199 83.8788 71.0774C83.9637 71.035 84.0486 71.035 84.1334 71.035C84.2183 71.035 84.3032 71.0774 84.388 71.0774C84.4729 71.1199 84.5153 71.1623 84.5578 71.2047C84.6002 71.2472 84.6426 71.332 84.6851 71.4169C84.6851 71.5018 84.7275 71.7139 84.7275 71.9685C84.7275 72.2656 84.7275 72.4353 84.6851 72.5202Z" fill="#A6B5CB"/>
                                        <path d="M87.9509 73.3695H89.7331V72.9876H88.3753V72.1814H89.521V71.7995H88.3753V70.9932H89.7331V70.6113H87.9509V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M93.4679 71.7995C93.3406 71.7995 93.2133 71.757 93.1708 71.757C93.0435 71.7146 92.9162 71.6722 92.8738 71.6297C92.8314 71.5449 92.789 71.5024 92.789 71.4176C92.789 71.2903 92.8314 71.2054 92.9163 71.1205C93.0011 71.0357 93.1284 71.0357 93.2557 71.0357C93.5103 71.0357 93.7225 71.1205 93.9346 71.2478L94.1468 70.9084C93.8922 70.7386 93.5952 70.6113 93.2557 70.6113C92.9587 70.6113 92.7465 70.6962 92.5768 70.8235C92.4071 70.9508 92.3222 71.163 92.3222 71.4176C92.3222 71.6297 92.407 71.7995 92.5343 71.9268C92.6616 72.0541 92.8314 72.1389 93.086 72.1814C93.2133 72.1814 93.3406 72.2238 93.4679 72.2238C93.7225 72.2662 93.8498 72.3935 93.8073 72.6057C93.8073 72.8603 93.6376 72.9876 93.2557 72.9876C92.9587 72.9876 92.7041 72.9027 92.4919 72.733L92.2373 73.03C92.5343 73.2846 92.8738 73.4119 93.2981 73.4119C93.9346 73.4119 94.2317 73.1573 94.2741 72.6057C94.2741 72.3935 94.2317 72.2238 94.1044 72.0965C93.9346 71.9268 93.7225 71.8419 93.4679 71.7995Z" fill="#A6B5CB"/>
                                        <path d="M101.742 71.7995H100.639V70.6113H100.257V73.3695H100.639V72.1814H101.742V73.3695H102.166V70.6113H101.742V71.7995Z" fill="#A6B5CB"/>
                                        <path d="M105.095 73.3695H106.834V72.9876H105.477V72.1814H106.622V71.7995H105.477V70.9932H106.834V70.6113H105.095V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M111.459 71.3751C111.459 71.1205 111.374 70.9084 111.204 70.7811C111.077 70.6538 110.865 70.6113 110.653 70.6113H109.592V73.3695H110.016V72.1814H110.568L111.12 73.3695H111.629L110.992 72.1389C111.289 72.0116 111.459 71.757 111.459 71.3751ZM109.974 71.7995V70.9508H110.61C110.738 70.9508 110.865 70.9932 110.907 71.0357C110.992 71.1205 111.035 71.2054 111.035 71.3327C111.035 71.46 110.992 71.5449 110.907 71.6297C110.823 71.7146 110.695 71.757 110.568 71.757H109.974V71.7995Z" fill="#A6B5CB"/>
                                        <path d="M114.218 73.3695H116V72.9876H114.642V72.1814H115.788V71.7995H114.642V70.9932H116V70.6113H114.218V73.3695Z" fill="#A6B5CB"/>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_13437_5683)">
                                        <mask id="mask0_13437_5683" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="-16" y="-56" width="194" height="193">
                                        <path d="M177.063 -55.9742H-15.0625V136.151H177.063V-55.9742Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0_13437_5683)">
                                        <path d="M24.4882 41.5131H8.99902V57.0022H24.4882V41.5131Z" fill="#A6B5CB"/>
                                        <path d="M16.6457 35.9991C20.7287 35.9991 24.0387 32.6892 24.0387 28.6061C24.0387 24.5231 20.7287 21.2131 16.6457 21.2131C12.5626 21.2131 9.25269 24.5231 9.25269 28.6061C9.25269 32.6892 12.5626 35.9991 16.6457 35.9991Z" fill="#A6B5CB"/>
                                        <path d="M36.6193 21.1824H31.1553V57.3096H36.6193V21.1824Z" fill="#E3E3E3"/>
                                        <path d="M24.4882 41.5131L8.99902 57.0022H24.4882V41.5131Z" fill="#E3E3E3"/>
                                        <path d="M47.2675 38.9302H44.9447V27.0165C44.9447 25.3014 45.4942 23.9028 46.5932 22.8205C47.7088 21.7382 49.0825 21.197 50.7143 21.197C52.5126 21.197 53.8613 21.6549 54.7604 22.5707C55.6762 23.4698 56.1341 24.5771 56.1341 25.8925C56.1341 27.5743 55.3515 28.7815 53.7864 29.5141V29.614C55.9343 30.2301 57.0083 31.7204 57.0083 34.0848C57.0083 37.315 55.1018 38.9302 51.2887 38.9302H48.1667V36.7323H51.2638C52.4127 36.7323 53.2535 36.4991 53.7864 36.0329C54.3192 35.5667 54.5856 34.8174 54.5856 33.7851C54.5856 32.8859 54.2942 32.1949 53.7114 31.712C53.1453 31.2291 52.371 30.9877 51.3886 30.9877H48.916V28.9147H50.5145C51.4136 28.9147 52.1796 28.6732 52.8123 28.1904C53.4617 27.6908 53.7864 27.0248 53.7864 26.1923C53.7864 25.393 53.5366 24.727 53.0371 24.1942C52.5542 23.6613 51.7633 23.3949 50.6643 23.3949C49.6653 23.3949 48.8494 23.7113 48.2166 24.344C47.5839 24.9601 47.2675 25.8676 47.2675 27.0664V38.9302ZM66.2938 31.8869V34.1347C65.6611 33.6519 64.8868 33.4104 63.971 33.4104C63.1884 33.4104 62.5807 33.5686 62.1478 33.885C61.7148 34.1847 61.4984 34.6176 61.4984 35.1837C61.4984 36.2827 62.3143 36.8322 63.9461 36.8322H67.2429V32.0617C67.2429 30.0469 66.2605 29.0396 64.2957 29.0396H60.2995V26.9416H64.4206C66.0357 26.9416 67.2762 27.3412 68.1421 28.1404C69.0079 28.9397 69.4408 30.0886 69.4408 31.5871V38.9302H63.8711C62.4558 38.9302 61.3319 38.6138 60.4993 37.9811C59.6668 37.3483 59.2505 36.4242 59.2505 35.2087C59.2505 33.9932 59.6918 33.0691 60.5743 32.4363C61.4567 31.8036 62.564 31.4872 63.8961 31.4872C64.6454 31.4872 65.4446 31.6204 66.2938 31.8869ZM82.127 38.9302H77.8061C75.9579 38.9302 74.6342 38.6554 73.8349 38.106C73.1189 37.6231 72.661 37.0486 72.4612 36.3826C72.2781 35.6999 72.1865 34.8091 72.1865 33.7101V26.9416H74.3844V33.6852C74.3844 33.9849 74.3927 34.243 74.4094 34.4594C74.426 34.6592 74.4843 34.9256 74.5842 35.2587C74.6841 35.575 74.8256 35.8414 75.0088 36.0579C75.192 36.2577 75.4584 36.4409 75.808 36.6074C76.1577 36.7572 76.5823 36.8322 77.0818 36.8322H79.9291V26.9416H82.127V38.9302ZM87.4579 21.4468V26.9416H89.5809C91.4292 26.9416 92.7529 27.2163 93.5521 27.7658C94.2681 28.2486 94.7177 28.8314 94.9009 29.5141C95.1007 30.1801 95.2006 31.0626 95.2006 32.1616V38.9302H93.0027V32.1866C93.0027 31.8869 92.9943 31.6371 92.9777 31.4373C92.961 31.2208 92.9028 30.9544 92.8028 30.638C92.7029 30.305 92.5614 30.0386 92.3783 29.8388C92.1951 29.6223 91.9287 29.4392 91.579 29.2893C91.2293 29.1228 90.8047 29.0396 90.3052 29.0396H87.4579V38.9302H85.26V21.4468H87.4579ZM99.5609 28.5151C100.726 27.2995 102.183 26.6918 103.932 26.6918C104.781 26.6918 105.572 26.8583 106.304 27.1913C107.054 27.5077 107.703 27.9489 108.253 28.5151C108.819 29.0812 109.26 29.7472 109.576 30.5132C109.893 31.2625 110.051 32.07 110.051 32.9359C110.051 33.8017 109.893 34.6176 109.576 35.3835C109.277 36.1328 108.852 36.7905 108.303 37.3567C107.753 37.9228 107.104 38.3724 106.354 38.7054C105.605 39.0218 104.798 39.1799 103.932 39.1799C103.049 39.1799 102.233 39.0218 101.484 38.7054C100.751 38.3724 100.11 37.9228 99.5609 37.3567C99.0114 36.7905 98.5785 36.1328 98.2621 35.3835C97.9624 34.6176 97.8125 33.8017 97.8125 32.9359C97.8125 31.1709 98.3953 29.6973 99.5609 28.5151ZM103.932 28.7898C102.766 28.7898 101.825 29.1728 101.109 29.9387C100.41 30.7046 100.06 31.7037 100.06 32.9359C100.06 34.168 100.41 35.1671 101.109 35.933C101.825 36.699 102.766 37.0819 103.932 37.0819C105.114 37.0819 106.055 36.699 106.754 35.933C107.453 35.1504 107.803 34.1514 107.803 32.9359C107.803 31.7204 107.453 30.7296 106.754 29.9637C106.055 29.1811 105.114 28.7898 103.932 28.7898ZM122.616 38.9302H118.295C116.447 38.9302 115.123 38.6554 114.324 38.106C113.608 37.6231 113.15 37.0486 112.95 36.3826C112.767 35.6999 112.675 34.8091 112.675 33.7101V26.9416H114.873V33.6852C114.873 33.9849 114.882 34.243 114.898 34.4594C114.915 34.6592 114.973 34.9256 115.073 35.2587C115.173 35.575 115.315 35.8414 115.498 36.0579C115.681 36.2577 115.947 36.4409 116.297 36.6074C116.647 36.7572 117.071 36.8322 117.571 36.8322H120.418V26.9416H122.616V38.9302ZM134.066 26.9416V29.0396H129.645C129.162 29.0396 128.746 29.1311 128.396 29.3143C128.047 29.4975 127.872 29.7555 127.872 30.0886C127.872 30.2884 127.914 30.4715 127.997 30.638C128.08 30.7879 128.172 30.9128 128.272 31.0127C128.388 31.1126 128.555 31.2208 128.771 31.3374C129.004 31.4373 129.179 31.5122 129.296 31.5622C129.429 31.5955 129.962 31.762 130.894 32.0617C131.826 32.3614 132.518 32.6112 132.967 32.811C133.417 33.0108 133.758 33.2855 133.991 33.6352C134.241 33.9682 134.399 34.3012 134.466 34.6343C134.532 34.9506 134.566 35.267 134.566 35.5834C134.566 37.8146 133.034 38.9302 129.97 38.9302H125.649V36.8322H129.97C131.535 36.8322 132.318 36.4159 132.318 35.5834C132.318 35.1837 132.085 34.8507 131.618 34.5843C131.169 34.3179 130.611 34.0931 129.945 33.9099C129.296 33.7268 128.638 33.5186 127.972 33.2855C127.322 33.0358 126.765 32.6445 126.298 32.1116C125.849 31.5622 125.624 30.8878 125.624 30.0886C125.624 29.0729 126.015 28.2986 126.798 27.7658C127.581 27.2163 128.53 26.9416 129.645 26.9416H134.066ZM142.936 26.6918C145.766 26.8083 147.182 27.9822 147.182 30.2134C147.182 32.9941 145.358 34.3845 141.712 34.3845H140.688V32.4613H141.887C143.002 32.4613 143.777 32.2948 144.21 31.9618C144.642 31.6121 144.859 31.0377 144.859 30.2384C144.859 29.7222 144.667 29.3393 144.284 29.0895C143.902 28.8231 143.41 28.6899 142.811 28.6899C141.629 28.6899 140.696 29.1062 140.014 29.9387C139.347 30.7713 139.014 31.7703 139.014 32.9359C139.014 34.168 139.372 35.1671 140.088 35.933C140.821 36.699 141.77 37.0819 142.936 37.0819C143.985 37.0819 144.842 36.8238 145.508 36.3077L147.007 37.7813C145.858 38.7137 144.501 39.1799 142.936 39.1799C141.038 39.1799 139.522 38.6221 138.39 37.5065C137.258 36.3909 136.692 34.9506 136.692 33.1856C136.692 31.2208 137.249 29.6307 138.365 28.4152C139.481 27.1996 141.004 26.6252 142.936 26.6918Z" fill="#A6B5CB"/>
                                        <path d="M58.5069 55.5962C58.3414 55.5962 58.2051 55.5427 58.0981 55.4356C57.991 55.3285 57.9374 55.1922 57.9374 55.0267V44.7619C57.9374 44.5964 57.991 44.4601 58.0981 44.353C58.2051 44.2459 58.3414 44.1924 58.5069 44.1924H61.2374C61.948 44.1924 62.5807 44.3433 63.1356 44.645C63.6905 44.9371 64.1236 45.3508 64.4351 45.8862C64.7564 46.4118 64.917 47.0202 64.917 47.7114C64.917 48.3733 64.7564 48.9622 64.4351 49.4782C64.1236 49.9941 63.6905 50.398 63.1356 50.6901C62.5807 50.9821 61.948 51.1281 61.2374 51.1281H59.0764V55.0267C59.0764 55.1922 59.0228 55.3285 58.9158 55.4356C58.8087 55.5427 58.6724 55.5962 58.5069 55.5962ZM64.6103 55.5962C64.4838 55.5962 64.3816 55.5719 64.3037 55.5232C64.2356 55.4745 64.1723 55.4015 64.1139 55.3042L61.3104 50.8361L62.4493 50.5441L65.063 54.7201C65.209 54.9537 65.2333 55.1581 65.136 55.3334C65.0484 55.5086 64.8732 55.5962 64.6103 55.5962ZM59.0764 50.033H61.2374C61.7338 50.033 62.1719 49.9357 62.5515 49.741C62.9409 49.5366 63.2475 49.2591 63.4714 48.9087C63.6953 48.5583 63.8073 48.1591 63.8073 47.7114C63.8073 47.2344 63.6953 46.8158 63.4714 46.4556C63.2475 46.0857 62.9409 45.7986 62.5515 45.5941C62.1719 45.3897 61.7338 45.2875 61.2374 45.2875H59.0764V50.033ZM67.533 55.5962C67.3676 55.5962 67.2313 55.5427 67.1242 55.4356C67.0171 55.3285 66.9636 55.1922 66.9636 55.0267V44.7619C66.9636 44.5964 67.0171 44.4601 67.1242 44.353C67.2313 44.2459 67.3676 44.1924 67.533 44.1924H74.3812C74.5369 44.1924 74.6683 44.2459 74.7754 44.353C74.8922 44.4504 74.9506 44.5818 74.9506 44.7473C74.9506 44.8933 74.8922 45.0198 74.7754 45.1269C74.6683 45.234 74.5369 45.2875 74.3812 45.2875H68.1025V49.3175H72.6728C72.8383 49.3175 72.9746 49.3711 73.0816 49.4782C73.1887 49.5852 73.2422 49.7166 73.2422 49.8724C73.2422 50.0281 73.1887 50.1596 73.0816 50.2666C72.9746 50.3737 72.8383 50.4273 72.6728 50.4273H68.1025V54.5011H74.3812C74.5369 54.5011 74.6683 54.5546 74.7754 54.6617C74.8922 54.7688 74.9506 54.8953 74.9506 55.0413C74.9506 55.2068 74.8922 55.3431 74.7754 55.4502C74.6683 55.5475 74.5369 55.5962 74.3812 55.5962H67.533ZM76.4456 55.5962C76.2217 55.5962 76.0611 55.5037 75.9637 55.3188C75.8664 55.1338 75.8566 54.9537 75.9345 54.7785L80.2274 44.5866C80.3344 44.3238 80.5194 44.1924 80.7822 44.1924C81.0353 44.1924 81.2154 44.3238 81.3225 44.5866L85.6299 54.7931C85.7175 54.9781 85.7029 55.1581 85.5861 55.3334C85.4791 55.5086 85.3233 55.5962 85.1189 55.5962C85.0021 55.5962 84.895 55.567 84.7976 55.5086C84.71 55.4502 84.637 55.3626 84.5786 55.2458L80.5632 45.5065H81.0158L76.9712 55.2458C76.9226 55.3626 76.8495 55.4502 76.7522 55.5086C76.6646 55.567 76.5624 55.5962 76.4456 55.5962ZM77.4093 52.8803L77.8473 51.902H83.7755L84.2136 52.8803H77.4093ZM87.9096 55.5962C87.7538 55.5962 87.6176 55.5427 87.5008 55.4356C87.3937 55.3285 87.3401 55.1922 87.3401 55.0267V44.7619C87.3401 44.6061 87.3937 44.4747 87.5008 44.3676C87.6176 44.2508 87.7538 44.1924 87.9096 44.1924C88.0653 44.1924 88.1968 44.2508 88.3038 44.3676C88.4206 44.4747 88.4791 44.6061 88.4791 44.7619V54.5157H94.1883C94.344 54.5157 94.4754 54.5692 94.5825 54.6763C94.6993 54.7736 94.7577 54.9002 94.7577 55.0559C94.7577 55.2117 94.6993 55.3431 94.5825 55.4502C94.4754 55.5475 94.344 55.5962 94.1883 55.5962H87.9096ZM101.427 55.5962C101.262 55.5962 101.126 55.5427 101.019 55.4356C100.911 55.3285 100.858 55.1922 100.858 55.0267V44.7619C100.858 44.5964 100.911 44.4601 101.019 44.353C101.126 44.2459 101.262 44.1924 101.427 44.1924H108.276C108.431 44.1924 108.563 44.2459 108.67 44.353C108.787 44.4504 108.845 44.5818 108.845 44.7473C108.845 44.8933 108.787 45.0198 108.67 45.1269C108.563 45.234 108.431 45.2875 108.276 45.2875H101.997V49.3175H106.567C106.733 49.3175 106.869 49.3711 106.976 49.4782C107.083 49.5852 107.137 49.7166 107.137 49.8724C107.137 50.0281 107.083 50.1596 106.976 50.2666C106.869 50.3737 106.733 50.4273 106.567 50.4273H101.997V54.5011H108.276C108.431 54.5011 108.563 54.5546 108.67 54.6617C108.787 54.7688 108.845 54.8953 108.845 55.0413C108.845 55.2068 108.787 55.3431 108.67 55.4502C108.563 55.5475 108.431 55.5962 108.276 55.5962H101.427ZM114.472 55.7422C113.849 55.7422 113.27 55.6546 112.735 55.4794C112.209 55.2944 111.751 55.0365 111.362 54.7055C110.973 54.3745 110.676 53.99 110.471 53.552C110.393 53.3962 110.389 53.2551 110.457 53.1285C110.535 52.9923 110.661 52.8998 110.836 52.8511C110.973 52.8122 111.104 52.8268 111.231 52.8949C111.367 52.963 111.469 53.0653 111.537 53.2015C111.683 53.4838 111.897 53.7369 112.18 53.9608C112.462 54.1847 112.798 54.3599 113.187 54.4865C113.577 54.6033 114.005 54.6617 114.472 54.6617C114.988 54.6617 115.446 54.579 115.845 54.4135C116.244 54.2382 116.555 53.99 116.779 53.6688C117.013 53.3378 117.13 52.9387 117.13 52.4715C117.13 51.8777 116.911 51.3666 116.473 50.9383C116.035 50.51 115.348 50.2374 114.414 50.1206C113.275 49.9843 112.384 49.6339 111.742 49.0693C111.099 48.495 110.778 47.7941 110.778 46.9667C110.778 46.3729 110.934 45.857 111.245 45.4189C111.566 44.9809 112.005 44.645 112.559 44.4114C113.114 44.1681 113.752 44.0464 114.472 44.0464C115.008 44.0464 115.494 44.134 115.932 44.3092C116.37 44.4747 116.75 44.6986 117.071 44.9809C117.402 45.2534 117.67 45.5552 117.874 45.8862C117.972 46.0419 118.001 46.1928 117.962 46.3388C117.933 46.4848 117.85 46.5968 117.714 46.6747C117.568 46.7428 117.417 46.7525 117.261 46.7039C117.115 46.6552 117.003 46.5627 116.925 46.4264C116.779 46.2025 116.594 45.9933 116.37 45.7986C116.156 45.5941 115.893 45.4335 115.582 45.3167C115.27 45.1999 114.896 45.1366 114.458 45.1269C113.689 45.1269 113.07 45.2924 112.603 45.6233C112.136 45.9446 111.902 46.4167 111.902 47.0397C111.902 47.3707 111.99 47.6773 112.165 47.9596C112.34 48.2322 112.628 48.4706 113.027 48.6751C113.435 48.8698 113.981 49.0158 114.662 49.1131C115.879 49.2883 116.779 49.6631 117.363 50.2374C117.957 50.802 118.254 51.5418 118.254 52.4569C118.254 52.9825 118.157 53.4498 117.962 53.8586C117.777 54.2675 117.509 54.613 117.159 54.8953C116.818 55.1679 116.414 55.3772 115.947 55.5232C115.489 55.6692 114.998 55.7422 114.472 55.7422ZM123.366 55.5962C123.21 55.5962 123.074 55.5427 122.957 55.4356C122.85 55.3188 122.796 55.1825 122.796 55.0267V44.1924H123.935V55.0267C123.935 55.1825 123.881 55.3188 123.774 55.4356C123.667 55.5427 123.531 55.5962 123.366 55.5962ZM119.336 45.2291C119.18 45.2291 119.053 45.1804 118.956 45.0831C118.859 44.9857 118.81 44.8641 118.81 44.7181C118.81 44.5623 118.859 44.4358 118.956 44.3384C119.053 44.2411 119.18 44.1924 119.336 44.1924H127.41C127.566 44.1924 127.692 44.2411 127.79 44.3384C127.887 44.4358 127.936 44.5623 127.936 44.7181C127.936 44.8641 127.887 44.9857 127.79 45.0831C127.692 45.1804 127.566 45.2291 127.41 45.2291H119.336ZM127.822 55.5962C127.598 55.5962 127.437 55.5037 127.34 55.3188C127.243 55.1338 127.233 54.9537 127.311 54.7785L131.604 44.5866C131.711 44.3238 131.896 44.1924 132.159 44.1924C132.412 44.1924 132.592 44.3238 132.699 44.5866L137.006 54.7931C137.094 54.9781 137.079 55.1581 136.962 55.3334C136.855 55.5086 136.7 55.5962 136.495 55.5962C136.378 55.5962 136.271 55.567 136.174 55.5086C136.086 55.4502 136.013 55.3626 135.955 55.2458L131.939 45.5065H132.392L128.348 55.2458C128.299 55.3626 128.226 55.4502 128.128 55.5086C128.041 55.567 127.939 55.5962 127.822 55.5962ZM128.786 52.8803L129.224 51.902H135.152L135.59 52.8803H128.786ZM140.862 55.5962C140.706 55.5962 140.57 55.5427 140.453 55.4356C140.346 55.3188 140.292 55.1825 140.292 55.0267V44.1924H141.431V55.0267C141.431 55.1825 141.378 55.3188 141.271 55.4356C141.163 55.5427 141.027 55.5962 140.862 55.5962ZM136.832 45.2291C136.676 45.2291 136.549 45.1804 136.452 45.0831C136.355 44.9857 136.306 44.8641 136.306 44.7181C136.306 44.5623 136.355 44.4358 136.452 44.3384C136.549 44.2411 136.676 44.1924 136.832 44.1924H144.906C145.062 44.1924 145.189 44.2411 145.286 44.3384C145.383 44.4358 145.432 44.5623 145.432 44.7181C145.432 44.8641 145.383 44.9857 145.286 45.0831C145.189 45.1804 145.062 45.2291 144.906 45.2291H136.832ZM147.685 55.5962C147.519 55.5962 147.383 55.5427 147.276 55.4356C147.169 55.3285 147.115 55.1922 147.115 55.0267V44.7619C147.115 44.5964 147.169 44.4601 147.276 44.353C147.383 44.2459 147.519 44.1924 147.685 44.1924H154.533C154.688 44.1924 154.82 44.2459 154.927 44.353C155.044 44.4504 155.102 44.5818 155.102 44.7473C155.102 44.8933 155.044 45.0198 154.927 45.1269C154.82 45.234 154.688 45.2875 154.533 45.2875H148.254V49.3175H152.824C152.99 49.3175 153.126 49.3711 153.233 49.4782C153.34 49.5852 153.394 49.7166 153.394 49.8724C153.394 50.0281 153.34 50.1596 153.233 50.2666C153.126 50.3737 152.99 50.4273 152.824 50.4273H148.254V54.5011H154.533C154.688 54.5011 154.82 54.5546 154.927 54.6617C155.044 54.7688 155.102 54.8953 155.102 55.0413C155.102 55.2068 155.044 55.3431 154.927 55.4502C154.82 55.5475 154.688 55.5962 154.533 55.5962H147.685Z" fill="#A6B5CB"/>
                                        </g>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_13437_5683">
                                        <rect width="142.68" height="41.8449" fill="white" transform="translate(9 19.0002)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M61.672 7.87715C61.672 8.24829 61.562 8.6111 61.3558 8.9197C61.1496 9.22829 60.8565 9.46881 60.5136 9.61084C60.1707 9.75287 59.7934 9.79003 59.4294 9.71763C59.0654 9.64522 58.731 9.4665 58.4686 9.20406C58.2061 8.94162 58.0274 8.60725 57.955 8.24324C57.8826 7.87923 57.9198 7.50192 58.0618 7.15903C58.2038 6.81614 58.4443 6.52306 58.7529 6.31687C59.0615 6.11067 59.4243 6.00061 59.7955 6.00061C60.042 6.00024 60.2862 6.04852 60.514 6.1427C60.7419 6.23687 60.9489 6.37508 61.1232 6.5494C61.2976 6.72373 61.4358 6.93075 61.5299 7.15859C61.6241 7.38643 61.6724 7.63061 61.672 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M70.6085 7.87715C70.6085 8.24841 70.4984 8.61133 70.2921 8.91999C70.0858 9.22864 69.7925 9.46916 69.4495 9.61111C69.1064 9.75306 68.729 9.79005 68.3649 9.71742C68.0008 9.64478 67.6664 9.46578 67.4041 9.20305C67.1418 8.94033 66.9633 8.6057 66.8912 8.2415C66.8191 7.8773 66.8567 7.4999 66.9991 7.15706C67.1416 6.81422 67.3826 6.52134 67.6915 6.31549C68.0005 6.10963 68.3636 6.00005 68.7348 6.00061C68.9811 6.00061 69.225 6.04917 69.4525 6.14351C69.68 6.23785 69.8867 6.37612 70.0608 6.55041C70.2348 6.7247 70.3727 6.93159 70.4667 7.15924C70.5607 7.3869 70.6089 7.63085 70.6085 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M88.4845 7.87715C88.4845 8.24829 88.3745 8.6111 88.1683 8.9197C87.9621 9.22829 87.669 9.46881 87.3261 9.61084C86.9832 9.75287 86.6059 9.79003 86.2419 9.71763C85.8779 9.64522 85.5435 9.4665 85.2811 9.20406C85.0186 8.94162 84.8399 8.60725 84.7675 8.24324C84.6951 7.87923 84.7323 7.50192 84.8743 7.15903C85.0163 6.81614 85.2568 6.52306 85.5654 6.31687C85.874 6.11067 86.2368 6.00061 86.608 6.00061C86.8545 6.00024 87.0987 6.04852 87.3265 6.1427C87.5544 6.23687 87.7614 6.37508 87.9357 6.5494C88.1101 6.72373 88.2483 6.93075 88.3424 7.15859C88.4366 7.38643 88.4849 7.63061 88.4845 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M97.421 7.87715C97.421 8.24841 97.3109 8.61133 97.1046 8.91999C96.8983 9.22864 96.605 9.46916 96.262 9.61111C95.9189 9.75306 95.5415 9.79005 95.1774 9.71742C94.8133 9.64478 94.4789 9.46578 94.2166 9.20305C93.9543 8.94033 93.7758 8.6057 93.7037 8.2415C93.6316 7.8773 93.6692 7.4999 93.8116 7.15706C93.9541 6.81422 94.1951 6.52134 94.504 6.31549C94.813 6.10963 95.1761 6.00005 95.5473 6.00061C95.7936 6.00061 96.0375 6.04917 96.265 6.14351C96.4925 6.23785 96.6992 6.37612 96.8732 6.55041C97.0473 6.7247 97.1852 6.93159 97.2792 7.15924C97.3732 7.3869 97.4214 7.63085 97.421 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M61.672 16.8854C61.672 17.2566 61.562 17.6194 61.3558 17.928C61.1496 18.2366 60.8565 18.4771 60.5136 18.6191C60.1707 18.7612 59.7934 18.7983 59.4294 18.7259C59.0654 18.6535 58.731 18.4748 58.4686 18.2124C58.2061 17.9499 58.0274 17.6156 57.955 17.2515C57.8826 16.8875 57.9198 16.5102 58.0618 16.1673C58.2038 15.8244 58.4443 15.5314 58.7529 15.3252C59.0615 15.119 59.4243 15.0089 59.7955 15.0089C60.042 15.0085 60.2862 15.0568 60.514 15.151C60.7419 15.2452 60.9489 15.3834 61.1232 15.5577C61.2976 15.732 61.4358 15.939 61.5299 16.1669C61.6241 16.3947 61.6724 16.6389 61.672 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M70.6085 16.8854C70.6085 17.2567 70.4984 17.6196 70.2921 17.9283C70.0858 18.2369 69.7925 18.4775 69.4495 18.6194C69.1064 18.7614 68.729 18.7984 68.3649 18.7257C68.0008 18.6531 67.6664 18.4741 67.4041 18.2114C67.1418 17.9486 66.9633 17.614 66.8912 17.2498C66.8191 16.8856 66.8567 16.5082 66.9991 16.1654C67.1416 15.8225 67.3826 15.5296 67.6915 15.3238C68.0005 15.1179 68.3636 15.0084 68.7348 15.0089C68.9811 15.0089 69.225 15.0575 69.4525 15.1518C69.68 15.2462 69.8867 15.3844 70.0608 15.5587C70.2348 15.733 70.3727 15.9399 70.4667 16.1675C70.5607 16.3952 70.6089 16.6392 70.6085 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M97.421 16.8854C97.421 17.2567 97.3109 17.6196 97.1046 17.9283C96.8983 18.2369 96.605 18.4775 96.262 18.6194C95.9189 18.7614 95.5415 18.7984 95.1774 18.7257C94.8133 18.6531 94.4789 18.4741 94.2166 18.2114C93.9543 17.9486 93.7758 17.614 93.7037 17.2498C93.6316 16.8856 93.6692 16.5082 93.8116 16.1654C93.9541 15.8225 94.1951 15.5296 94.504 15.3238C94.813 15.1179 95.1761 15.0084 95.5473 15.0089C95.7936 15.0089 96.0375 15.0575 96.265 15.1518C96.4925 15.2462 96.6992 15.3844 96.8732 15.5587C97.0473 15.733 97.1852 15.9399 97.2792 16.1675C97.3732 16.3952 97.4214 16.6392 97.421 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M61.672 25.8944C61.672 26.2655 61.562 26.6283 61.3558 26.9369C61.1496 27.2455 60.8565 27.486 60.5136 27.6281C60.1707 27.7701 59.7934 27.8072 59.4294 27.7348C59.0654 27.6624 58.731 27.4837 58.4686 27.2213C58.2061 26.9588 58.0274 26.6245 57.955 26.2605C57.8826 25.8964 57.9198 25.5191 58.0618 25.1762C58.2038 24.8333 58.4443 24.5403 58.7529 24.3341C59.0615 24.1279 59.4243 24.0178 59.7955 24.0178C60.042 24.0175 60.2862 24.0657 60.514 24.1599C60.7419 24.2541 60.9489 24.3923 61.1232 24.5666C61.2976 24.7409 61.4358 24.948 61.5299 25.1758C61.6241 25.4036 61.6724 25.6478 61.672 25.8944Z" fill="#E3E3E3"/>
                                        <path d="M60.3102 34.9028H59.2812V43.9113H60.3102V34.9028Z" fill="#A6B5CB"/>
                                        <path d="M69.2487 25.894H68.2197V43.9111H69.2487V25.894Z" fill="#A6B5CB"/>
                                        <path d="M78.1852 7.87695H77.1562V43.9138H78.1852V7.87695Z" fill="#A6B5CB"/>
                                        <path d="M87.1235 16.8857H86.0945V43.9113H87.1235V16.8857Z" fill="#A6B5CB"/>
                                        <path d="M96.0641 25.894H95.0352V43.9111H96.0641V25.894Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 16.8854C75.7969 17.2566 75.9069 17.6194 76.1131 17.928C76.3193 18.2366 76.6124 18.4771 76.9553 18.6191C77.2982 18.7612 77.6755 18.7983 78.0395 18.7259C78.4035 18.6535 78.7379 18.4748 79.0003 18.2124C79.2628 17.9499 79.4415 17.6156 79.5139 17.2515C79.5863 16.8875 79.5491 16.5102 79.4071 16.1673C79.2651 15.8244 79.0246 15.5314 78.716 15.3252C78.4074 15.119 78.0446 15.0089 77.6734 15.0089C77.4269 15.0085 77.1827 15.0568 76.9549 15.151C76.727 15.2452 76.52 15.3834 76.3457 15.5577C76.1713 15.732 76.0331 15.939 75.939 16.1669C75.8448 16.3947 75.7965 16.6389 75.7969 16.8854Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 25.8944C66.8584 26.2655 66.9685 26.6283 67.1747 26.9369C67.3808 27.2455 67.6739 27.486 68.0168 27.6281C68.3597 27.7701 68.737 27.8072 69.101 27.7348C69.465 27.6624 69.7994 27.4837 70.0618 27.2213C70.3243 26.9588 70.503 26.6245 70.5754 26.2605C70.6478 25.8964 70.6107 25.5191 70.4686 25.1762C70.3266 24.8333 70.0861 24.5403 69.7775 24.3341C69.4689 24.1279 69.1061 24.0178 68.7349 24.0178C68.4884 24.0175 68.2442 24.0657 68.0164 24.1599C67.7885 24.2541 67.5815 24.3923 67.4072 24.5666C67.2329 24.7409 67.0947 24.948 67.0005 25.1758C66.9063 25.4036 66.858 25.6478 66.8584 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 25.8944C75.7969 26.2655 75.9069 26.6283 76.1131 26.9369C76.3193 27.2455 76.6124 27.486 76.9553 27.6281C77.2982 27.7701 77.6755 27.8072 78.0395 27.7348C78.4035 27.6624 78.7379 27.4837 79.0003 27.2213C79.2628 26.9588 79.4415 26.6245 79.5139 26.2605C79.5863 25.8964 79.5491 25.5191 79.4071 25.1762C79.2651 24.8333 79.0246 24.5403 78.716 24.3341C78.4074 24.1279 78.0446 24.0178 77.6734 24.0178C77.4269 24.0175 77.1827 24.0657 76.9549 24.1599C76.727 24.2541 76.52 24.3923 76.3457 24.5666C76.1713 24.7409 76.0331 24.948 75.939 25.1758C75.8448 25.4036 75.7965 25.6478 75.7969 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 25.8944C93.6719 26.2655 93.7819 26.6283 93.9881 26.9369C94.1943 27.2455 94.4874 27.486 94.8303 27.6281C95.1732 27.7701 95.5505 27.8072 95.9145 27.7348C96.2785 27.6624 96.6129 27.4837 96.8753 27.2213C97.1378 26.9588 97.3165 26.6245 97.3889 26.2605C97.4613 25.8964 97.4241 25.5191 97.2821 25.1762C97.1401 24.8333 96.8996 24.5403 96.591 24.3341C96.2824 24.1279 95.9196 24.0178 95.5484 24.0178C95.3019 24.0175 95.0577 24.0657 94.8299 24.1599C94.602 24.2541 94.395 24.3923 94.2207 24.5666C94.0463 24.7409 93.9081 24.948 93.814 25.1758C93.7198 25.4036 93.6715 25.6478 93.6719 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M57.9207 34.9142C57.9201 35.2856 58.0297 35.6488 58.2357 35.9578C58.4417 36.2669 58.7348 36.5078 59.0778 36.6502C59.4208 36.7926 59.7983 36.83 60.1626 36.7577C60.5269 36.6854 60.8615 36.5066 61.1241 36.244C61.3867 35.9814 61.5655 35.6467 61.6378 35.2825C61.7101 34.9182 61.6727 34.5406 61.5303 34.1976C61.388 33.8546 61.147 33.5616 60.838 33.3556C60.5289 33.1496 60.1657 33.04 59.7944 33.0405C59.2977 33.0413 58.8215 33.2389 58.4703 33.5902C58.1191 33.9414 57.9214 34.4175 57.9207 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 34.9142C66.8578 35.2855 66.9674 35.6486 67.1733 35.9575C67.3791 36.2665 67.672 36.5075 68.0149 36.6499C68.3577 36.7924 68.7351 36.83 69.0993 36.7579C69.4635 36.6858 69.7981 36.5073 70.0608 36.245C70.3236 35.9827 70.5026 35.6483 70.5752 35.2842C70.6478 34.9201 70.6108 34.5427 70.4689 34.1996C70.327 33.8565 70.0864 33.5633 69.7778 33.357C69.4691 33.1507 69.1062 33.0405 68.7349 33.0405C68.2377 33.0405 67.7609 33.2378 67.409 33.5891C67.0572 33.9405 66.8592 34.417 66.8584 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 34.9142C75.7963 35.2855 75.9059 35.6486 76.1118 35.9575C76.3176 36.2665 76.6105 36.5075 76.9533 36.6499C77.2962 36.7924 77.6736 36.83 78.0378 36.7579C78.402 36.6858 78.7366 36.5073 78.9993 36.245C79.262 35.9827 79.441 35.6483 79.5137 35.2842C79.5863 34.9201 79.5493 34.5427 79.4074 34.1996C79.2654 33.8565 79.0249 33.5633 78.7163 33.357C78.4076 33.1507 78.0447 33.0405 77.6734 33.0405C77.1762 33.0405 76.6993 33.2378 76.3475 33.5891C75.9957 33.9405 75.7976 34.417 75.7969 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 34.9142C84.7331 35.2856 84.8427 35.6488 85.0487 35.9578C85.2547 36.2669 85.5477 36.5078 85.8908 36.6502C86.2338 36.7926 86.6113 36.83 86.9756 36.7577C87.3399 36.6854 87.6745 36.5066 87.9371 36.244C88.1997 35.9814 88.3785 35.6467 88.4508 35.2825C88.5231 34.9182 88.4857 34.5406 88.3433 34.1976C88.2009 33.8546 87.96 33.5616 87.651 33.3556C87.3419 33.1496 86.9787 33.04 86.6073 33.0405C86.1106 33.0413 85.6345 33.2389 85.2833 33.5902C84.932 33.9414 84.7344 34.4175 84.7336 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 34.9142C93.6713 35.2855 93.7809 35.6486 93.9868 35.9575C94.1926 36.2665 94.4855 36.5075 94.8283 36.6499C95.1712 36.7924 95.5486 36.83 95.9128 36.7579C96.277 36.6858 96.6116 36.5073 96.8743 36.245C97.137 35.9827 97.316 35.6483 97.3887 35.2842C97.4613 34.9201 97.4243 34.5427 97.2824 34.1996C97.1404 33.8565 96.8999 33.5633 96.5913 33.357C96.2826 33.1507 95.9197 33.0405 95.5484 33.0405C95.0512 33.0405 94.5743 33.2378 94.2225 33.5891C93.8707 33.9405 93.6726 34.417 93.6719 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M57.9207 43.9114C57.9201 44.2828 58.0297 44.646 58.2357 44.955C58.4417 45.2641 58.7348 45.505 59.0778 45.6474C59.4208 45.7898 59.7983 45.8272 60.1626 45.7549C60.5269 45.6826 60.8615 45.5038 61.1241 45.2412C61.3867 44.9786 61.5655 44.6439 61.6378 44.2797C61.7101 43.9154 61.6727 43.5378 61.5303 43.1948C61.388 42.8518 61.147 42.5588 60.838 42.3528C60.5289 42.1468 60.1657 42.0372 59.7944 42.0377C59.2977 42.0385 58.8215 42.2361 58.4703 42.5873C58.1191 42.9386 57.9214 43.4147 57.9207 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 43.9114C66.8578 44.2827 66.9674 44.6458 67.1733 44.9547C67.3791 45.2637 67.672 45.5047 68.0149 45.6471C68.3577 45.7896 68.7351 45.8272 69.0993 45.7551C69.4635 45.683 69.7981 45.5045 70.0608 45.2422C70.3236 44.9798 70.5026 44.6455 70.5752 44.2814C70.6478 43.9173 70.6108 43.5398 70.4689 43.1968C70.327 42.8537 70.0864 42.5605 69.7778 42.3542C69.4691 42.1478 69.1062 42.0377 68.7349 42.0377C68.2377 42.0377 67.7609 42.235 67.409 42.5863C67.0572 42.9376 66.8592 43.4142 66.8584 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 43.9114C75.7963 44.2827 75.9059 44.6458 76.1118 44.9547C76.3176 45.2637 76.6105 45.5047 76.9533 45.6471C77.2962 45.7896 77.6736 45.8272 78.0378 45.7551C78.402 45.683 78.7366 45.5045 78.9993 45.2422C79.262 44.9798 79.441 44.6455 79.5137 44.2814C79.5863 43.9173 79.5493 43.5398 79.4074 43.1968C79.2654 42.8537 79.0249 42.5605 78.7163 42.3542C78.4076 42.1478 78.0447 42.0377 77.6734 42.0377C77.1762 42.0377 76.6993 42.235 76.3475 42.5863C75.9957 42.9376 75.7976 43.4142 75.7969 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 43.9114C84.7331 44.2828 84.8427 44.646 85.0487 44.955C85.2547 45.2641 85.5477 45.505 85.8908 45.6474C86.2338 45.7898 86.6113 45.8272 86.9756 45.7549C87.3399 45.6826 87.6745 45.5038 87.9371 45.2412C88.1997 44.9786 88.3785 44.6439 88.4508 44.2797C88.5231 43.9154 88.4857 43.5378 88.3433 43.1948C88.2009 42.8518 87.96 42.5588 87.651 42.3528C87.3419 42.1468 86.9787 42.0372 86.6073 42.0377C86.1106 42.0385 85.6345 42.2361 85.2833 42.5873C84.932 42.9386 84.7344 43.4147 84.7336 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 43.9114C93.6713 44.2827 93.7809 44.6458 93.9868 44.9547C94.1926 45.2637 94.4855 45.5047 94.8283 45.6471C95.1712 45.7896 95.5486 45.8272 95.9128 45.7551C96.277 45.683 96.6116 45.5045 96.8743 45.2422C97.137 44.9798 97.316 44.6455 97.3887 44.2814C97.4613 43.9173 97.4243 43.5398 97.2824 43.1968C97.1404 42.8537 96.8999 42.5605 96.5913 42.3542C96.2826 42.1478 95.9197 42.0377 95.5484 42.0377C95.0512 42.0377 94.5743 42.235 94.2225 42.5863C93.8707 42.9376 93.6726 43.4142 93.6719 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 7.87715C75.7969 8.24829 75.9069 8.6111 76.1131 8.9197C76.3193 9.22829 76.6124 9.46881 76.9553 9.61084C77.2982 9.75287 77.6755 9.79003 78.0395 9.71763C78.4035 9.64522 78.7379 9.4665 79.0003 9.20406C79.2628 8.94162 79.4415 8.60725 79.5139 8.24324C79.5863 7.87923 79.5491 7.50192 79.4071 7.15903C79.2651 6.81614 79.0246 6.52306 78.716 6.31687C78.4074 6.11067 78.0446 6.00061 77.6734 6.00061C77.4269 6.00024 77.1827 6.04852 76.9549 6.1427C76.727 6.23687 76.52 6.37508 76.3457 6.5494C76.1713 6.72373 76.0331 6.93075 75.939 7.15859C75.8448 7.38643 75.7965 7.63061 75.7969 7.87715Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 16.8854C84.7336 17.2567 84.8438 17.6196 85.0501 17.9283C85.2564 18.2369 85.5497 18.4775 85.8927 18.6194C86.2358 18.7614 86.6132 18.7984 86.9773 18.7257C87.3414 18.6531 87.6758 18.4741 87.9381 18.2114C88.2004 17.9486 88.3789 17.614 88.451 17.2498C88.5231 16.8856 88.4855 16.5082 88.3431 16.1654C88.2006 15.8225 87.9596 15.5296 87.6507 15.3238C87.3417 15.1179 86.9786 15.0084 86.6073 15.0089C86.361 15.0089 86.1172 15.0575 85.8897 15.1518C85.6621 15.2462 85.4555 15.3844 85.2814 15.5587C85.1074 15.733 84.9695 15.9399 84.8755 16.1675C84.7815 16.3952 84.7333 16.6392 84.7336 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M84.7336 25.8944C84.7336 26.2656 84.8438 26.6285 85.0501 26.9372C85.2564 27.2459 85.5497 27.4864 85.8927 27.6283C86.2358 27.7703 86.6132 27.8073 86.9773 27.7346C87.3414 27.662 87.6758 27.483 87.9381 27.2203C88.2004 26.9575 88.3789 26.6229 88.451 26.2587C88.5231 25.8945 88.4855 25.5171 88.3431 25.1743C88.2006 24.8314 87.9596 24.5386 87.6507 24.3327C87.3417 24.1268 86.9786 24.0173 86.6073 24.0178C86.361 24.0178 86.1172 24.0664 85.8897 24.1607C85.6621 24.2551 85.4555 24.3933 85.2814 24.5676C85.1074 24.7419 84.9695 24.9488 84.8755 25.1765C84.7815 25.4041 84.7333 25.6481 84.7336 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M43.2187 64.2096H41.4812L46.5068 50.5229H48.2176L53.2432 64.2096H51.5056L47.4156 52.6882H47.3087L43.2187 64.2096ZM43.8603 58.8632H50.864V60.3335H43.8603V58.8632ZM59.3314 64.4234C58.369 64.4234 57.5403 64.1962 56.8453 63.7418C56.1503 63.2873 55.6156 62.6614 55.2414 61.8639C54.8671 61.0664 54.68 60.1553 54.68 59.1305C54.68 58.088 54.8716 57.168 55.2548 56.3705C55.6424 55.5685 56.1815 54.9426 56.872 54.4926C57.5671 54.0381 58.3779 53.8109 59.3046 53.8109C60.0264 53.8109 60.6769 53.9446 61.256 54.2119C61.8352 54.4792 62.3097 54.8535 62.6795 55.3346C63.0493 55.8158 63.2788 56.3772 63.3679 57.0187H61.7907C61.6704 56.5509 61.4031 56.1366 60.9887 55.7757C60.5788 55.4104 60.0264 55.2277 59.3314 55.2277C58.7165 55.2277 58.1774 55.3881 57.7141 55.7089C57.2552 56.0252 56.8965 56.473 56.6381 57.0521C56.3842 57.6269 56.2572 58.3019 56.2572 59.0771C56.2572 59.8701 56.3819 60.5607 56.6314 61.1488C56.8854 61.7369 57.2418 62.1936 57.7007 62.5188C58.1641 62.844 58.7076 63.0067 59.3314 63.0067C59.7412 63.0067 60.1133 62.9354 60.4474 62.7928C60.7816 62.6502 61.0645 62.4453 61.2961 62.178C61.5278 61.9107 61.6927 61.5899 61.7907 61.2156H63.3679C63.2788 61.8216 63.0582 62.3673 62.7063 62.853C62.3587 63.3341 61.8976 63.7173 61.3229 64.0024C60.7526 64.2831 60.0888 64.4234 59.3314 64.4234ZM69.8437 64.4234C68.8813 64.4234 68.0526 64.1962 67.3576 63.7418C66.6626 63.2873 66.1279 62.6614 65.7537 61.8639C65.3794 61.0664 65.1923 60.1553 65.1923 59.1305C65.1923 58.088 65.3839 57.168 65.767 56.3705C66.1547 55.5685 66.6937 54.9426 67.3843 54.4926C68.0793 54.0381 68.8902 53.8109 69.8169 53.8109C70.5387 53.8109 71.1892 53.9446 71.7683 54.2119C72.3475 54.4792 72.822 54.8535 73.1918 55.3346C73.5616 55.8158 73.7911 56.3772 73.8802 57.0187H72.303C72.1827 56.5509 71.9154 56.1366 71.501 55.7757C71.0911 55.4104 70.5387 55.2277 69.8437 55.2277C69.2288 55.2277 68.6897 55.3881 68.2264 55.7089C67.7675 56.0252 67.4088 56.473 67.1504 57.0521C66.8965 57.6269 66.7695 58.3019 66.7695 59.0771C66.7695 59.8701 66.8942 60.5607 67.1437 61.1488C67.3977 61.7369 67.7541 62.1936 68.213 62.5188C68.6764 62.844 69.2199 63.0067 69.8437 63.0067C70.2535 63.0067 70.6256 62.9354 70.9597 62.7928C71.2939 62.6502 71.5768 62.4453 71.8084 62.178C72.0401 61.9107 72.205 61.5899 72.303 61.2156H73.8802C73.7911 61.8216 73.5705 62.3673 73.2185 62.853C72.871 63.3341 72.4099 63.7173 71.8352 64.0024C71.2649 64.2831 70.6011 64.4234 69.8437 64.4234ZM82.6549 60.0127V53.9446H84.2321V64.2096H82.6549V62.472H82.548C82.3074 62.9933 81.9331 63.4366 81.4252 63.8019C80.9173 64.1628 80.2757 64.3433 79.5005 64.3433C78.859 64.3433 78.2887 64.2029 77.7897 63.9222C77.2907 63.6371 76.8986 63.2094 76.6135 62.6391C76.3283 62.0644 76.1858 61.3404 76.1858 60.4671V53.9446H77.763V60.3602C77.763 61.1087 77.9724 61.7057 78.3912 62.1512C78.8144 62.5968 79.3535 62.8195 80.0084 62.8195C80.4005 62.8195 80.7992 62.7193 81.2047 62.5188C81.6146 62.3183 81.9576 62.0109 82.2339 61.5966C82.5145 61.1822 82.6549 60.6543 82.6549 60.0127ZM94.3918 56.2435L92.975 56.6445C92.8859 56.4084 92.7545 56.1789 92.5807 55.9561C92.4114 55.7289 92.1798 55.5418 91.8857 55.3948C91.5917 55.2477 91.2152 55.1742 90.7563 55.1742C90.1281 55.1742 89.6046 55.319 89.1858 55.6086C88.7715 55.8938 88.5643 56.2569 88.5643 56.6979C88.5643 57.09 88.7069 57.3997 88.992 57.6269C89.2771 57.8541 89.7227 58.0435 90.3286 58.1949L91.8523 58.5692C92.7701 58.7919 93.454 59.1328 93.904 59.5917C94.354 60.0461 94.579 60.632 94.579 61.3493C94.579 61.9374 94.4096 62.4631 94.071 62.9265C93.7369 63.3898 93.2691 63.7552 92.6676 64.0225C92.0662 64.2898 91.3667 64.4234 90.5692 64.4234C89.5222 64.4234 88.6556 64.1962 87.9695 63.7418C87.2834 63.2873 86.849 62.6235 86.6663 61.7503L88.1633 61.376C88.3059 61.9285 88.5754 62.3428 88.9719 62.6191C89.3729 62.8953 89.8964 63.0334 90.5424 63.0334C91.2776 63.0334 91.8612 62.8775 92.2934 62.5656C92.73 62.2493 92.9483 61.8706 92.9483 61.4295C92.9483 61.0731 92.8236 60.7746 92.5741 60.534C92.3246 60.2889 91.9414 60.1063 91.4246 59.986L89.7138 59.585C88.7737 59.3622 88.0831 59.0169 87.642 58.5491C87.2054 58.0769 86.9871 57.4865 86.9871 56.7781C86.9871 56.199 87.1497 55.6866 87.475 55.2411C87.8047 54.7955 88.2524 54.4458 88.8182 54.1918C89.3885 53.9379 90.0345 53.8109 90.7563 53.8109C91.7721 53.8109 92.5696 54.0337 93.1488 54.4792C93.7324 54.9247 94.1468 55.5128 94.3918 56.2435ZM99.9738 64.4502C99.3233 64.4502 98.733 64.3277 98.2028 64.0826C97.6726 63.8331 97.2516 63.4745 96.9397 63.0067C96.6278 62.5344 96.4719 61.9641 96.4719 61.2958C96.4719 60.7077 96.5877 60.231 96.8194 59.8657C97.0511 59.4959 97.3607 59.2063 97.7483 58.9969C98.136 58.7875 98.5637 58.6316 99.0315 58.5291C99.5037 58.4222 99.9782 58.3375 100.455 58.2751C101.079 58.1949 101.584 58.1348 101.972 58.0947C102.364 58.0501 102.649 57.9766 102.827 57.8741C103.01 57.7717 103.101 57.5935 103.101 57.3395V57.286C103.101 56.6267 102.921 56.1143 102.56 55.749C102.204 55.3836 101.662 55.201 100.936 55.201C100.183 55.201 99.5928 55.3658 99.1651 55.6955C98.7374 56.0252 98.4367 56.3772 98.2629 56.7514L96.7659 56.2168C97.0333 55.593 97.3897 55.1074 97.8352 54.7599C98.2852 54.4079 98.7753 54.1629 99.3055 54.0248C99.8401 53.8822 100.366 53.8109 100.883 53.8109C101.212 53.8109 101.591 53.851 102.019 53.9312C102.451 54.0069 102.867 54.1651 103.268 54.4057C103.674 54.6463 104.01 55.0094 104.278 55.495C104.545 55.9806 104.679 56.6311 104.679 57.4464V64.2096H103.101V62.8195H103.021C102.914 63.0423 102.736 63.2807 102.487 63.5346C102.237 63.7886 101.905 64.0047 101.491 64.1829C101.076 64.3611 100.571 64.4502 99.9738 64.4502ZM100.214 63.0334C100.838 63.0334 101.364 62.9109 101.792 62.6658C102.224 62.4208 102.549 62.1045 102.767 61.7169C102.99 61.3292 103.101 60.9216 103.101 60.4939V59.0504C103.035 59.1305 102.888 59.2041 102.66 59.2709C102.438 59.3333 102.179 59.389 101.885 59.438C101.595 59.4825 101.313 59.5226 101.036 59.5583C100.765 59.5894 100.544 59.6162 100.375 59.6385C99.9649 59.6919 99.5817 59.7788 99.2253 59.8991C98.8733 60.0149 98.5882 60.1909 98.3699 60.427C98.156 60.6587 98.0491 60.975 98.0491 61.376C98.0491 61.924 98.2518 62.3384 98.6572 62.6191C99.0671 62.8953 99.5862 63.0334 100.214 63.0334ZM112.128 53.9446V55.2812H106.595V53.9446H112.128ZM108.252 64.2096V52.5278C108.252 51.9397 108.39 51.4496 108.667 51.0575C108.943 50.6655 109.302 50.3714 109.743 50.1754C110.184 49.9793 110.649 49.8813 111.139 49.8813C111.527 49.8813 111.843 49.9125 112.088 49.9749C112.333 50.0373 112.516 50.0952 112.636 50.1486L112.182 51.512C112.102 51.4852 111.99 51.4518 111.848 51.4117C111.71 51.3716 111.527 51.3516 111.3 51.3516C110.778 51.3516 110.402 51.483 110.17 51.7459C109.943 52.0087 109.829 52.3941 109.829 52.902V64.2096H108.252Z" fill="#A6B5CB"/>
                                    </svg>

                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.8612 32.6508L32.1848 38.3061L34.3705 40.4837L40.0796 34.8284L37.8612 32.6508Z" fill="#A6B5CB"/>
                                        <path d="M26.3786 44.0911L20.7021 49.7464L22.8879 51.9565L28.5643 46.2687L26.3786 44.0911Z" fill="#A6B5CB"/>
                                        <path d="M30.7828 36.9086L36.4592 31.2208L34.2735 29.0432L28.5645 34.6985L30.7828 36.9086Z" fill="#A6B5CB"/>
                                        <path d="M24.9749 42.6936L22.7565 40.4835L17.0801 46.1713L19.2658 48.349L24.9749 42.6936Z" fill="#A6B5CB"/>
                                        <path d="M24.9749 38.3061L19.2658 32.6508L17.0801 34.8284L22.7565 40.4837L24.9749 38.3061Z" fill="#A6B5CB"/>
                                        <path d="M26.3786 36.9086L28.5643 34.6985L22.8879 29.0432L20.7021 31.2208L26.3786 36.9086Z" fill="#A6B5CB"/>
                                        <path d="M32.1848 42.6936L37.8612 48.349L40.0796 46.1713L34.3705 40.4835L32.1848 42.6936Z" fill="#A6B5CB"/>
                                        <path d="M36.4592 49.7464L30.7828 44.0911L28.5645 46.2687L34.2735 51.9565L36.4592 49.7464Z" fill="#A6B5CB"/>
                                        <path d="M36.4591 54.1345L34.2733 51.9569L28.5643 57.6122L22.8879 51.9569L20.7021 54.1345L28.5643 62L36.4591 54.1345Z" fill="#A6B5CB"/>
                                        <path d="M17.0805 34.8284L14.8948 32.6508L7 40.4837L14.8948 48.3491L17.0805 46.1715L11.4041 40.4837L17.0805 34.8284Z" fill="#A6B5CB"/>
                                        <path d="M42.2651 32.6508L40.0793 34.8284L45.7558 40.4837L40.0793 46.1715L42.2651 48.3491L50.1599 40.4837L42.2651 32.6508Z" fill="#A6B5CB"/>
                                        <path d="M34.2733 29.043L36.4591 26.8654L28.5643 19L20.7021 26.8654L22.8879 29.043L28.5643 23.3877L34.2733 29.043Z" fill="#A6B5CB"/>
                                        <path d="M67.6872 40.604C68.38 40.0519 68.9342 39.2236 69.142 38.1883V38.1193L67.6872 37.7742V37.8432C67.4794 38.6024 67.2023 39.2237 66.7173 39.6378C66.2324 40.0519 65.6089 40.2589 64.9161 40.2589C64.3619 40.2589 63.8076 40.1209 63.3227 39.8448C62.8378 39.5687 62.4914 39.0856 62.2142 38.5334C61.9371 37.9122 61.8679 37.222 61.8679 36.4628C61.8679 35.8416 61.9371 35.2205 62.145 34.6683C62.3528 34.1161 62.6992 33.633 63.1841 33.2879C63.6691 32.9428 64.2926 32.8047 64.9854 32.8047C65.6089 32.8047 66.1631 32.9428 66.5788 33.2879C66.9944 33.564 67.3408 34.0471 67.5487 34.7373V34.8063L69.0035 34.4612V34.3922C68.7264 33.4949 68.2414 32.8047 67.5487 32.3216C66.8559 31.8384 66.0245 31.5624 65.0546 31.5624C64.154 31.5624 63.392 31.7694 62.6299 32.1145C61.9371 32.5287 61.3136 33.0808 60.9672 33.84C60.5516 34.5993 60.3438 35.4965 60.3438 36.4628C60.3438 37.3601 60.5516 38.2574 60.898 39.0856C61.2444 39.9139 61.7986 40.535 62.4221 40.9491C63.1149 41.3633 63.9462 41.5703 65.0546 41.5703C66.0938 41.4323 66.9944 41.1562 67.6872 40.604Z" fill="#A6B5CB"/>
                                        <path d="M82.6498 39.0849C83.0655 38.3256 83.2733 37.4284 83.2733 36.4621C83.2733 35.4958 83.0655 34.6675 82.7191 33.8393C82.3034 33.0801 81.7492 32.4589 81.0564 32.0448C80.2943 31.6307 79.463 31.4236 78.5624 31.4236C77.1768 31.4236 75.9991 31.9067 75.0985 32.804C74.1979 33.7013 73.7822 35.0126 73.7822 36.6001C73.7822 37.4284 73.9901 38.2566 74.3364 39.0158C74.6828 39.7751 75.3063 40.3963 75.9991 40.8104C76.7612 41.2245 77.5925 41.5006 78.4931 41.5006C79.3937 41.5006 80.1558 41.2935 80.9179 40.8794C81.6107 40.4653 82.2342 39.8441 82.6498 39.0849ZM78.4931 40.1892C77.5925 40.1892 76.7612 39.8441 76.1377 39.2229C75.5142 38.6017 75.2371 37.7045 75.2371 36.5311C75.2371 35.1507 75.5835 34.1154 76.207 33.4942C76.8305 32.873 77.5925 32.5969 78.4931 32.5969C79.1166 32.5969 79.6709 32.735 80.2251 33.0801C80.71 33.3562 81.1257 33.8393 81.3335 34.3915C81.6106 34.9436 81.7492 35.6338 81.7492 36.3931C81.7492 37.5664 81.4721 38.5327 80.8486 39.1539C80.2251 39.8441 79.3937 40.1892 78.4931 40.1892Z" fill="#A6B5CB"/>
                                        <path d="M97.754 31.7H96.3684V41.4318H97.754V31.7Z" fill="#A6B5CB"/>
                                        <path d="M93.668 41.4315L95.8849 35.2887V31.8377L93.5294 38.4637C93.3216 39.0158 93.1831 39.43 93.1138 39.7751L92.6981 38.6017L90.3427 31.7687H90.2041V35.2887L92.3517 41.5006H93.668V41.4315Z" fill="#A6B5CB"/>
                                        <path d="M89.6492 31.7H88.2637V41.4318H89.6492V31.7Z" fill="#A6B5CB"/>
                                        <path d="M109.6 36.6694C110.155 36.1173 110.432 35.358 110.432 34.5298C110.432 34.0466 110.362 33.5635 110.155 33.2184C109.947 32.8043 109.67 32.4592 109.323 32.2521C108.977 32.045 108.561 31.838 108.076 31.769C107.73 31.6999 107.245 31.7 106.552 31.7H104.751V33.0113H106.621C107.176 33.0113 107.591 33.0113 107.799 33.0804C108.146 33.1494 108.353 33.3564 108.561 33.6325C108.769 33.9086 108.838 34.2537 108.838 34.5988C108.838 35.151 108.7 35.4961 108.353 35.8412C108.007 36.1173 107.453 36.2553 106.621 36.2553H104.682V37.5667H106.621C108.076 37.5667 109.115 37.2906 109.6 36.6694Z" fill="#A6B5CB"/>
                                        <path d="M104.267 31.7H102.812V41.4318H104.267V31.7Z" fill="#A6B5CB"/>
                                        <path d="M120.825 31.7H119.301L115.49 41.4318H117.014L117.43 40.3275L118.538 37.3596L118.746 36.7384L119.578 34.5988C119.785 34.1157 119.924 33.6325 119.993 33.1494C120.132 33.6325 120.34 34.1847 120.617 34.8059L121.587 37.3596H119.093L118.677 38.5329H122.072L123.18 41.4318H124.843L120.825 31.7Z" fill="#A6B5CB"/>
                                        <path d="M136.203 38.9471V41.4318H137.658V31.7H136.272V39.0161L136.203 38.9471Z" fill="#A6B5CB"/>
                                        <path d="M131.216 31.7H129.83V41.4318H131.216V31.7Z" fill="#A6B5CB"/>
                                        <path d="M135.718 38.1878L131.7 32.3901V34.8059L135.718 40.6726V38.1878Z" fill="#A6B5CB"/>
                                        <path d="M150.265 31.7L148.326 34.5298C147.979 35.0819 147.633 35.6341 147.356 36.1172L146.524 37.3596V41.4318H147.979V37.3596L151.928 31.769H150.265V31.7Z" fill="#A6B5CB"/>
                                        <path d="M146.455 34.6678L144.515 31.7H142.714L146.247 36.8765L147.078 35.6341L146.455 34.6678Z" fill="#A6B5CB"/>
                                        <path d="M61.9382 49.3005V46.2635H62.9081V45.7804H60.4141V46.2635H61.384V49.3005H61.9382Z" fill="#A6B5CB"/>
                                        <path d="M67.2017 45.7804H66.786L65.4697 49.3005H66.0239L66.3011 48.5412H67.6173L67.8945 49.3005H68.4487L67.2017 45.7804ZM66.5089 48.0581L66.9938 46.5396L67.4788 48.0581H66.5089Z" fill="#A6B5CB"/>
                                        <path d="M72.3975 46.5399C72.4668 46.4709 72.5361 46.4019 72.6053 46.3329C72.6746 46.2639 72.8132 46.2638 72.9517 46.2638C73.0903 46.2638 73.2981 46.3329 73.3674 46.4019C73.506 46.4709 73.5752 46.6089 73.5752 46.747H74.1295C74.0602 46.4709 73.9216 46.1948 73.7138 45.9878C73.506 45.7807 73.2288 45.7117 72.8824 45.7117C72.6053 45.7117 72.3975 45.7807 72.1897 45.9187C71.9818 46.0568 71.8433 46.1948 71.774 46.3329C71.7047 46.4019 71.7047 46.5399 71.6354 46.678C71.6354 46.816 71.5662 47.0921 71.5662 47.5062C71.5662 47.9203 71.5662 48.1964 71.6354 48.3344C71.6354 48.4035 71.6354 48.4725 71.7047 48.5415C71.7047 48.6105 71.774 48.6105 71.774 48.6795C71.8433 48.8176 71.9818 48.9556 72.1897 49.0937C72.3975 49.2317 72.6053 49.3007 72.8824 49.3007C73.2288 49.3007 73.5752 49.1627 73.7831 48.9556C73.9909 48.7486 74.1295 48.4035 74.1295 48.0584V47.3682H72.8824V47.8513H73.5752V48.0584C73.5752 48.2654 73.506 48.4725 73.3674 48.6105C73.2288 48.7486 73.0903 48.8176 72.8824 48.8176C72.7439 48.8176 72.6746 48.8176 72.5361 48.7486C72.4668 48.6796 72.3975 48.6105 72.3282 48.5415C72.2589 48.4725 72.1897 48.3345 72.1897 48.2654C72.1897 48.1274 72.1204 47.9203 72.1204 47.5752C72.1204 47.2301 72.1204 47.0231 72.1897 46.885C72.2589 46.747 72.3282 46.6089 72.3975 46.5399Z" fill="#A6B5CB"/>
                                        <path d="M77.8018 45.7804V49.3005H80.0186V48.8173H78.2867V45.7804H77.8018Z" fill="#A6B5CB"/>
                                        <path d="M84.1062 45.7804H83.552V49.3005H84.1062V45.7804Z" fill="#A6B5CB"/>
                                        <path d="M88.3335 46.8157L89.9269 49.3005H90.4119V45.7804H89.9269V48.3342H89.8576L88.2643 45.7804H87.7793V49.3005H88.3335V46.8157Z" fill="#A6B5CB"/>
                                        <path d="M96.4385 46.3326V45.7804H94.1523V49.3005H96.4385V48.8173H94.7066V47.782H96.1614V47.2989H94.7066V46.3326H96.4385Z" fill="#A6B5CB"/>
                                        <path d="M104.058 48.5412C104.058 48.6102 104.128 48.6102 104.128 48.6793C104.197 48.8173 104.336 48.9554 104.543 49.0934C104.751 49.2314 104.959 49.3005 105.236 49.3005C105.583 49.3005 105.929 49.1624 106.137 48.9554C106.345 48.7483 106.483 48.4032 106.483 48.0581V47.3679H105.236V47.851H105.929V48.0581C105.929 48.2652 105.86 48.4722 105.721 48.6103C105.583 48.7483 105.444 48.8173 105.236 48.8173C105.098 48.8173 105.028 48.8173 104.89 48.7483C104.82 48.6793 104.751 48.6102 104.682 48.5412C104.613 48.4722 104.543 48.3342 104.543 48.2652C104.543 48.1271 104.474 47.9201 104.474 47.575C104.474 47.2298 104.474 47.0228 104.543 46.8847C104.543 46.7467 104.613 46.6777 104.682 46.6086C104.751 46.5396 104.82 46.4706 104.89 46.4016C104.959 46.3326 105.098 46.3326 105.236 46.3326C105.375 46.3326 105.583 46.4016 105.652 46.4706C105.79 46.5396 105.86 46.6777 105.86 46.8157H106.414C106.345 46.5396 106.206 46.2636 105.998 46.0565C105.79 45.8494 105.513 45.7804 105.167 45.7804C104.89 45.7804 104.682 45.8494 104.474 45.9875C104.266 46.1255 104.128 46.2636 104.058 46.4016C103.989 46.4706 103.989 46.6087 103.92 46.7467C103.92 46.8847 103.851 47.1608 103.851 47.575C103.851 47.9891 103.851 48.2652 103.92 48.4032C103.989 48.4722 103.989 48.5412 104.058 48.5412Z" fill="#A6B5CB"/>
                                        <path d="M110.016 48.5415C110.016 48.6105 110.086 48.6105 110.086 48.6795C110.155 48.8176 110.294 48.9556 110.501 49.0937C110.709 49.2317 110.917 49.3007 111.194 49.3007C111.471 49.3007 111.679 49.2317 111.887 49.0937C112.095 48.9556 112.233 48.8176 112.303 48.6795C112.372 48.6105 112.372 48.4725 112.441 48.3344C112.441 48.1964 112.441 47.9203 112.441 47.5062C112.441 47.0921 112.441 46.816 112.441 46.678C112.441 46.5399 112.372 46.4019 112.303 46.3329C112.233 46.1948 112.095 46.0568 111.887 45.9187C111.679 45.7807 111.471 45.7117 111.194 45.7117C110.917 45.7117 110.709 45.7807 110.501 45.9187C110.294 46.0568 110.155 46.1948 110.086 46.3329C110.016 46.4019 110.016 46.5399 109.947 46.678C109.947 46.816 109.878 47.0921 109.878 47.5062C109.878 47.9203 109.878 48.1964 109.947 48.3344C110.016 48.4725 110.016 48.5415 110.016 48.5415ZM110.501 46.885C110.501 46.747 110.571 46.6779 110.64 46.6089C110.709 46.5399 110.779 46.4709 110.848 46.4019C110.917 46.3329 111.056 46.3329 111.194 46.3329C111.333 46.3329 111.402 46.3329 111.541 46.4019C111.61 46.4709 111.679 46.5399 111.748 46.6089C111.818 46.6779 111.887 46.816 111.887 46.885C111.887 47.0231 111.956 47.2301 111.956 47.5752C111.956 47.9203 111.956 48.1274 111.887 48.2654C111.887 48.4035 111.818 48.4725 111.748 48.5415C111.679 48.6105 111.61 48.6796 111.541 48.7486C111.471 48.8176 111.333 48.8176 111.194 48.8176C111.056 48.8176 110.986 48.8176 110.848 48.7486C110.779 48.6796 110.709 48.6105 110.64 48.5415C110.571 48.4725 110.501 48.3345 110.501 48.2654C110.501 48.1274 110.432 47.9203 110.432 47.5752C110.501 47.2301 110.501 46.954 110.501 46.885Z" fill="#A6B5CB"/>
                                        <path d="M118.329 46.3326V45.7804H116.112V49.3005H118.329V48.8173H116.597V47.782H118.052V47.2989H116.597V46.3326H118.329Z" fill="#A6B5CB"/>
                                        <path d="M122.9 48.8176C122.485 48.8176 122.207 48.6795 121.93 48.4725L121.584 48.8866C121.93 49.2317 122.415 49.3697 122.9 49.3697C123.732 49.3697 124.147 49.0246 124.147 48.3344C124.147 48.0584 124.078 47.8513 123.939 47.6442C123.801 47.4372 123.524 47.3682 123.177 47.2991C123.039 47.2991 122.9 47.2301 122.762 47.2301C122.554 47.2301 122.485 47.1611 122.415 47.0231C122.346 46.9541 122.277 46.816 122.277 46.747C122.277 46.6089 122.346 46.4709 122.485 46.3329C122.623 46.2639 122.762 46.1948 122.9 46.1948C123.247 46.1948 123.524 46.2638 123.801 46.4709L124.078 46.0568C123.732 45.8497 123.385 45.7117 122.9 45.7117C122.554 45.7117 122.277 45.7807 122.069 45.9878C121.861 46.1948 121.792 46.4019 121.792 46.747C121.792 47.0231 121.861 47.2301 122.069 47.3682C122.207 47.5752 122.485 47.6443 122.762 47.7133C122.9 47.7133 123.108 47.7823 123.247 47.7823C123.524 47.8513 123.732 47.9894 123.732 48.2654C123.524 48.6796 123.316 48.8176 122.9 48.8176Z" fill="#A6B5CB"/>
                                        <path d="M134.263 49.3005V45.7804H133.778V47.2989H132.323V45.7804H131.838V49.3005H132.323V47.782H133.778V49.3005H134.263Z" fill="#A6B5CB"/>
                                        <path d="M140.292 46.3326V45.7804H138.006V49.3005H140.292V48.8173H138.56V47.782H140.015V47.2989H138.56V46.3326H140.292Z" fill="#A6B5CB"/>
                                        <path d="M146.178 46.8154C146.178 46.4703 146.039 46.2632 145.831 46.0562C145.623 45.9181 145.416 45.8491 145.138 45.8491H143.753V49.3691H144.307V47.8507H145L145.762 49.3691H146.386L145.554 47.7817C145.97 47.5746 146.178 47.2985 146.178 46.8154ZM145.554 47.1605C145.485 47.2985 145.277 47.2986 145.069 47.3676H144.238V46.3323H145.069C145.208 46.3323 145.346 46.4013 145.485 46.4703C145.623 46.5393 145.693 46.6774 145.693 46.8844C145.693 46.9534 145.623 47.0915 145.554 47.1605Z" fill="#A6B5CB"/>
                                        <path d="M152 46.3326V45.7804H149.783V49.3005H152V48.8173H150.268V47.782H151.792V47.2989H150.268V46.3326H152Z" fill="#A6B5CB"/>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80"/>
                                        <g clip-path="url(#clip0_13428)">
                                        <path opacity="0.84" fill-rule="evenodd" clip-rule="evenodd" d="M79.9952 54.3755C88.4901 54.3755 95.379 54.6191 95.379 54.9213C95.379 55.2234 88.4901 55.467 79.9952 55.467C71.5002 55.467 64.6113 55.2234 64.6113 54.9213C64.6113 54.6191 71.5002 54.3755 79.9952 54.3755Z" fill="#A6B5CB"/>
                                        <path d="M111.131 66.4411V60.3596H114.826V61.6948H112.737V62.7474H114.71V64.0533H112.737V65.0767H114.826V66.4411H111.131ZM110.24 66.4411H108.702L108.344 63.8097C108.325 63.6245 108.296 63.4198 108.276 63.1859C108.257 62.9618 108.238 62.7084 108.218 62.4452C108.18 62.6986 108.102 63.0203 107.996 63.4101C107.976 63.4881 107.957 63.5465 107.938 63.5855L107.115 66.4314H106.022L105.2 63.5855C105.19 63.5465 105.17 63.4881 105.151 63.4101C105.035 63.03 104.958 62.7084 104.929 62.455C104.909 62.6889 104.89 62.913 104.871 63.1372C104.851 63.3614 104.822 63.5855 104.793 63.8097L104.435 66.4411H102.906L103.835 60.3596H105.47L106.38 63.4978C106.39 63.5173 106.399 63.5563 106.409 63.605C106.496 63.8876 106.544 64.1216 106.573 64.3262C106.583 64.219 106.602 64.1021 106.631 63.9656C106.66 63.8389 106.699 63.6732 106.757 63.4881L107.676 60.3596H109.312L110.24 66.4411ZM96.511 66.4411L98.5912 60.3596H100.652L102.742 66.4411H101.107L100.797 65.3496H98.4558L98.1462 66.4411H96.511ZM98.8138 64.1703H100.449L99.8297 62.1626C99.8103 62.1041 99.7813 62.0067 99.7523 61.8702C99.7232 61.7338 99.6749 61.5583 99.6265 61.3439C99.5878 61.4901 99.5588 61.6363 99.5201 61.7728C99.491 61.9092 99.4523 62.0359 99.4136 62.1626L98.8138 64.1703ZM90.0189 66.4411V60.3596H91.6056L93.889 63.4881C93.9374 63.5563 94.0051 63.683 94.1019 63.8682C94.1986 64.0631 94.3147 64.2872 94.4308 64.5601C94.4018 64.3067 94.3728 64.0826 94.3631 63.8876C94.3437 63.6927 94.3437 63.5173 94.3437 63.3614V60.3596H95.9208V66.4411H94.3437L92.0604 63.3029C92.012 63.2347 91.9443 63.108 91.8378 62.9228C91.7411 62.7279 91.625 62.5037 91.5089 62.2406C91.5379 62.494 91.5669 62.7181 91.5766 62.9228C91.5959 63.1177 91.5959 63.2931 91.5959 63.4491V66.4508H90.0189V66.4411ZM82.743 64.4822C82.9849 64.7648 83.2267 64.9695 83.4686 65.1059C83.7105 65.2423 83.9427 65.3106 84.1749 65.3106C84.3975 65.3106 84.5716 65.2521 84.7168 65.1351C84.8619 65.0182 84.9296 64.8623 84.9296 64.6868C84.9296 64.4822 84.8716 64.3262 84.7458 64.219C84.62 64.1118 84.3491 63.9949 83.9137 63.8779C83.3235 63.722 82.9075 63.5076 82.6559 63.2542C82.414 63.0008 82.2882 62.6402 82.2882 62.1918C82.2882 61.6071 82.4817 61.1393 82.8688 60.7689C83.2558 60.3986 83.7589 60.2231 84.3684 60.2231C84.6974 60.2231 85.0167 60.2719 85.3166 60.3596C85.6166 60.4473 85.8972 60.5838 86.1681 60.7689L85.6553 61.9579C85.4714 61.802 85.2779 61.6753 85.0747 61.5973C84.8812 61.5194 84.6877 61.4706 84.4942 61.4706C84.291 61.4706 84.1362 61.5194 84.0105 61.6168C83.8847 61.7143 83.8266 61.8312 83.8266 61.9872C83.8266 62.1431 83.8847 62.2601 83.9911 62.3575C84.0975 62.4452 84.3104 62.533 84.62 62.6207L84.6974 62.6402C85.365 62.8253 85.8101 63.0203 86.0229 63.2444C86.1681 63.3906 86.2745 63.5758 86.3519 63.7804C86.4293 63.9851 86.4583 64.219 86.4583 64.4724C86.4583 65.1156 86.2455 65.6322 85.8294 66.0318C85.4134 66.4216 84.8522 66.6165 84.1459 66.6165C83.7299 66.6165 83.3429 66.5483 82.9945 66.4021C82.6462 66.2559 82.3173 66.0318 81.998 65.7199L82.743 64.4822ZM77.8376 64.4822C78.0795 64.7648 78.3213 64.9695 78.5632 65.1059C78.8051 65.2423 79.0373 65.3106 79.2695 65.3106C79.4921 65.3106 79.6662 65.2521 79.8113 65.1351C79.9565 65.0182 80.0242 64.8623 80.0242 64.6868C80.0242 64.4822 79.9662 64.3262 79.8404 64.219C79.7146 64.1118 79.4437 63.9949 79.0083 63.8779C78.4181 63.722 78.0021 63.5076 77.7505 63.2542C77.5086 63.0008 77.3828 62.6402 77.3828 62.1918C77.3828 61.6071 77.5763 61.1393 77.9634 60.7689C78.3504 60.3986 78.8535 60.2231 79.463 60.2231C79.792 60.2231 80.1113 60.2719 80.4112 60.3596C80.7112 60.4473 80.9917 60.5838 81.2626 60.7689L80.7499 61.9579C80.566 61.802 80.3725 61.6753 80.1693 61.5973C79.9758 61.5194 79.7823 61.4706 79.5888 61.4706C79.3856 61.4706 79.2308 61.5194 79.105 61.6168C78.9793 61.7143 78.9212 61.8312 78.9212 61.9872C78.9212 62.1431 78.9793 62.2601 79.0857 62.3575C79.1921 62.4452 79.405 62.533 79.7146 62.6207L79.792 62.6402C80.4596 62.8253 80.9047 63.0203 81.1175 63.2444C81.2626 63.3906 81.3691 63.5758 81.4465 63.7804C81.5239 63.9851 81.5529 64.219 81.5529 64.4724C81.5529 65.1156 81.3401 65.6322 80.924 66.0318C80.508 66.4216 79.9468 66.6165 79.2405 66.6165C78.8148 66.6165 78.4374 66.5483 78.0891 66.4021C77.7408 66.2559 77.4119 66.0318 77.0926 65.7199L77.8376 64.4822ZM72.7774 66.4411V60.3596H76.4733V61.6948H74.3835V62.7474H76.3572V64.0533H74.3835V65.0767H76.4733V66.4411H72.7774ZM65.5789 66.4411V60.3596H67.1656L69.449 63.4881C69.4974 63.5563 69.5651 63.683 69.6619 63.8682C69.7586 64.0631 69.8747 64.2872 69.9908 64.5601C69.9618 64.3067 69.9328 64.0826 69.9231 63.8876C69.9038 63.6927 69.9038 63.5173 69.9038 63.3614V60.3596H71.4809V66.4411H69.9038L67.6204 63.3029C67.572 63.2347 67.5043 63.108 67.3979 62.9228C67.3011 62.7279 67.185 62.5037 67.0689 62.2406C67.0979 62.494 67.1269 62.7181 67.1366 62.9228C67.156 63.1177 67.156 63.2931 67.156 63.4491V66.4508H65.5789V66.4411ZM62.5892 66.4411V60.3596H64.2534V66.4411H62.5892ZM57.916 64.4822C58.1579 64.7648 58.3998 64.9695 58.6416 65.1059C58.8835 65.2423 59.1157 65.3106 59.3479 65.3106C59.5705 65.3106 59.7446 65.2521 59.8898 65.1351C60.0349 65.0182 60.1026 64.8623 60.1026 64.6868C60.1026 64.4822 60.0446 64.3262 59.9188 64.219C59.793 64.1118 59.5221 63.9949 59.0867 63.8779C58.4965 63.722 58.0805 63.5076 57.8289 63.2542C57.587 63.0008 57.4612 62.6402 57.4612 62.1918C57.4612 61.6071 57.6548 61.1393 58.0418 60.7689C58.4288 60.3986 58.9319 60.2231 59.5415 60.2231C59.8704 60.2231 60.1897 60.2719 60.4896 60.3596C60.7896 60.4473 61.0702 60.5838 61.3411 60.7689L60.8283 61.9579C60.6444 61.802 60.4509 61.6753 60.2478 61.5973C60.0542 61.5194 59.8607 61.4706 59.6672 61.4706C59.4641 61.4706 59.3092 61.5194 59.1835 61.6168C59.0577 61.7143 58.9996 61.8312 58.9996 61.9872C58.9996 62.1431 59.0577 62.2601 59.1641 62.3575C59.2705 62.4452 59.4834 62.533 59.793 62.6207L59.8704 62.6402C60.538 62.8253 60.9831 63.0203 61.1959 63.2444C61.3411 63.3906 61.4475 63.5758 61.5249 63.7804C61.6023 63.9851 61.6313 64.219 61.6313 64.4724C61.6313 65.1156 61.4185 65.6322 61.0024 66.0318C60.5767 66.4216 60.0252 66.6165 59.3189 66.6165C58.8932 66.6165 58.5159 66.5483 58.1676 66.4021C57.8192 66.2559 57.4903 66.0318 57.171 65.7199L57.916 64.4822ZM51.0175 60.3596H52.6623V63.3126C52.6623 63.7512 52.6719 64.0631 52.6913 64.2483C52.7106 64.4334 52.7493 64.5991 52.8074 64.7258C52.8654 64.8817 52.9816 64.9987 53.1364 65.0864C53.2912 65.1644 53.4847 65.2131 53.7072 65.2131C53.9297 65.2131 54.1232 65.1741 54.2781 65.0864C54.4329 65.0084 54.5393 64.8817 54.607 64.7258C54.6651 64.5991 54.6941 64.4432 54.7231 64.2483C54.7425 64.0533 54.7521 63.7415 54.7521 63.3126V62.8936V60.3498H56.3873V63.566C56.3873 64.2288 56.3486 64.7258 56.2712 65.0377C56.1938 65.3593 56.0583 65.6224 55.8648 65.8466C55.6616 66.0902 55.3714 66.2754 55.0134 66.4021C54.6554 66.5288 54.22 66.5873 53.6975 66.5873C53.1847 66.5873 52.7397 66.5288 52.3817 66.4021C52.0237 66.2754 51.7431 66.0902 51.5302 65.8466C51.3464 65.6224 51.211 65.3495 51.1239 65.0377C51.0465 64.7161 50.9981 64.2288 50.9981 63.566V62.9423V60.3596H51.0175ZM46.857 65.2034H47.4376C47.8246 65.2034 48.1052 65.1546 48.2697 65.0572C48.4341 64.9597 48.5115 64.794 48.5115 64.5699C48.5115 64.3165 48.4341 64.141 48.289 64.0338C48.1439 63.9364 47.8633 63.8779 47.4666 63.8779H46.8667V65.2034H46.857ZM45.3283 66.4411V60.3596H46.9828C47.6601 60.3596 48.1439 60.3791 48.4148 60.4278C48.6857 60.4765 48.9179 60.5448 49.1114 60.652C49.3339 60.7787 49.4984 60.9443 49.6242 61.149C49.7403 61.3634 49.7984 61.5973 49.7984 61.8702C49.7984 62.2211 49.7113 62.494 49.5371 62.6986C49.363 62.9033 49.0824 63.0592 48.705 63.1664C49.1308 63.1957 49.4694 63.3516 49.7113 63.6245C49.9532 63.8974 50.0789 64.258 50.0789 64.7063C50.0789 65.0279 50.0112 65.3106 49.8758 65.564C49.7403 65.8076 49.5468 66.0025 49.2952 66.139C49.0921 66.2462 48.8308 66.3339 48.5309 66.3729C48.2309 66.4216 47.7375 66.4411 47.0506 66.4411H45.3283ZM46.857 62.7961H47.186C47.5924 62.7961 47.873 62.7474 48.0278 62.6596C48.1826 62.5719 48.2503 62.416 48.2503 62.1918C48.2503 61.9579 48.1826 61.802 48.0374 61.7045C47.8923 61.6168 47.6214 61.5681 47.215 61.5681H46.857V62.7961Z" fill="#A6B5CB"/>
                                        <path d="M96.7626 72.9218V68.8577H99.2201V69.345H97.3237V70.5535H99.0073V71.0311H97.3237V72.4345H99.3652V72.9218H96.7626ZM94.2179 69.3158C93.9761 69.3158 93.7922 69.3255 93.6665 69.3353V70.8654H94.0728C94.2663 70.8654 94.4405 70.8557 94.5953 70.8362C94.7501 70.8167 94.8856 70.7777 94.992 70.729C95.0984 70.6705 95.1855 70.5925 95.2435 70.4951C95.3016 70.3976 95.3306 70.2612 95.3306 70.0955C95.3306 69.9395 95.3016 69.8128 95.2435 69.7154C95.1855 69.6179 95.1081 69.5302 95.0113 69.4717C94.9146 69.4133 94.7985 69.3743 94.663 69.345C94.5082 69.3255 94.3728 69.3158 94.2179 69.3158ZM95.0694 71.2163C95.1274 71.2942 95.2145 71.4014 95.3016 71.5281C95.3983 71.6548 95.4951 71.7913 95.5919 71.9472C95.6886 72.1032 95.795 72.2591 95.8918 72.4345C95.9885 72.6002 96.0756 72.7659 96.1433 72.9218H95.5241C95.4467 72.7756 95.3596 72.6197 95.2726 72.4735C95.1855 72.3176 95.0887 72.1714 94.992 72.0349C94.8952 71.8985 94.8081 71.762 94.7114 71.6451C94.6243 71.5281 94.5372 71.4209 94.4598 71.3332C94.4115 71.3332 94.3534 71.343 94.305 71.343C94.2566 71.343 94.1986 71.343 94.1405 71.343H93.6665V72.9316H93.1053V68.926C93.2601 68.887 93.4439 68.8577 93.6374 68.848C93.8309 68.8382 94.0148 68.8285 94.1792 68.8285C94.7501 68.8285 95.1758 68.9357 95.4757 69.1501C95.7757 69.3645 95.9208 69.6861 95.9208 70.115C95.9208 70.3879 95.8531 70.612 95.708 70.8069C95.5531 70.9824 95.35 71.1286 95.0694 71.2163ZM89.777 72.9218V68.8577H92.2345V69.345H90.3381V70.5535H92.0216V71.0311H90.3381V72.4345H92.3796V72.9218H89.777ZM88.2095 68.8577H88.7707V72.9218H88.2095V71.0506H86.2358V72.9218H85.6746V68.8577H86.2358V70.5535H88.2095V68.8577ZM81.0111 72.9218V68.8577H83.4686V69.345H81.5722V70.5535H83.2558V71.0311H81.5722V72.4345H83.6137V72.9218H81.0111ZM79.5307 72.9218C79.4437 72.7756 79.3469 72.6197 79.2405 72.4345C79.1341 72.2591 79.0083 72.0642 78.8825 71.879C78.7567 71.6841 78.6213 71.4892 78.4858 71.2942C78.3503 71.0993 78.2149 70.9044 78.0794 70.7192C77.944 70.534 77.8085 70.3586 77.6827 70.1929C77.557 70.0273 77.4409 69.8811 77.3248 69.7544V72.9218H76.7733V68.8577H77.2183C77.4022 69.0527 77.5957 69.2768 77.7989 69.54C78.002 69.8031 78.2149 70.0662 78.4181 70.3391C78.6213 70.612 78.8148 70.8849 78.9986 71.148C79.1824 71.4112 79.3276 71.6548 79.4533 71.8595V68.848H80.0048V72.9121H79.5307V72.9218ZM75.2059 68.8577H75.767V72.9218H75.2059V68.8577ZM74.6157 72.4248V72.9218H72.1871V68.8577H72.7483V72.4248H74.6157ZM70.7358 70.9239H71.297V72.8244C71.2486 72.8439 71.1809 72.8536 71.0938 72.8731C71.0067 72.8926 70.91 72.9121 70.7939 72.9316C70.6778 72.9511 70.552 72.9706 70.4165 72.9803C70.2811 72.99 70.1456 72.9998 70.0005 72.9998C69.7199 72.9998 69.4587 72.9511 69.2265 72.8633C68.9943 72.7659 68.7911 72.6294 68.6266 72.454C68.4621 72.2786 68.3267 72.0544 68.2396 71.7913C68.1525 71.5281 68.1041 71.226 68.1041 70.8849C68.1041 70.5438 68.1525 70.2417 68.2589 69.9785C68.3654 69.7154 68.5008 69.4912 68.675 69.3158C68.8491 69.1404 69.0523 69.0039 69.2845 68.9065C69.5167 68.809 69.7683 68.77 70.0392 68.77C70.223 68.77 70.3875 68.7798 70.523 68.809C70.6681 68.8285 70.7842 68.8577 70.8906 68.887C70.9874 68.9162 71.0745 68.9454 71.1422 68.9844C71.2099 69.0137 71.2486 69.0429 71.2777 69.0527L71.0938 69.5302C70.9777 69.4522 70.8326 69.3938 70.6488 69.345C70.4649 69.2963 70.2714 69.2671 70.0779 69.2671C69.8747 69.2671 69.6812 69.3061 69.5167 69.3743C69.3523 69.4522 69.2071 69.5594 69.0813 69.6959C68.9652 69.8323 68.8685 70.0078 68.8008 70.2124C68.733 70.4171 68.704 70.6413 68.704 70.8849C68.704 71.1286 68.733 71.3527 68.7911 71.5476C68.8491 71.7426 68.9362 71.918 69.0426 72.0642C69.1588 72.2104 69.2942 72.3176 69.4684 72.3955C69.6328 72.4735 69.836 72.5125 70.0682 72.5125C70.2327 72.5125 70.3682 72.5027 70.4843 72.4833C70.6004 72.4638 70.6778 72.4443 70.7358 72.4345V70.9239ZM66.5851 71.4112C66.4593 71.0701 66.3335 70.7387 66.2174 70.4268C66.0917 70.1052 65.9659 69.8031 65.8401 69.5107C65.7046 69.8031 65.5789 70.1052 65.4531 70.4268C65.3273 70.7485 65.2112 71.0701 65.0854 71.4112H66.5851ZM67.1076 72.9218C67.0398 72.7464 66.9818 72.571 66.9237 72.4053C66.8657 72.2396 66.8076 72.0642 66.7399 71.8887H64.9113L64.5436 72.9218H63.9631C64.1179 72.493 64.263 72.0934 64.3985 71.7328C64.5339 71.3722 64.6694 71.0213 64.7952 70.69C64.9209 70.3586 65.0564 70.0467 65.1822 69.7446C65.308 69.4425 65.4434 69.1501 65.5789 68.8577H66.1013C66.2368 69.1501 66.3722 69.4425 66.5077 69.7446C66.6335 70.0467 66.7689 70.3586 66.8947 70.69C67.0205 71.0213 67.156 71.3625 67.2914 71.7328C67.4269 72.0934 67.572 72.493 67.7268 72.9218H67.1076ZM63.8179 68.8577V69.3548H62.5505V72.9218H61.9893V69.3548H60.7218V68.8577H63.8179Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.3301 49.5314H72.816L89.7092 32.5149H92.6602L96.8884 28.2656H79.9952L84.2233 32.5149L67.3301 49.5314Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M92.6602 32.5149V35.4972L78.7374 49.5314H84.2233L92.6602 41.0232L96.8883 45.2724V28.2656L92.6602 32.5149Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M96.8884 32.5149V38.0408L110.821 24.0066H113.772L118 19.7573H101.107L105.325 24.0066L96.8884 32.5149Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M113.772 24.0066V26.9889L91.6733 49.5314H97.1593L113.772 32.5149L118 36.7739V19.7573L113.772 24.0066Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M92.6602 28.2658H87.1743L101.107 14.2315V11.2493L105.325 7V24.0068L101.107 19.7575L92.6602 28.2658Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M101.107 11.2493H98.1461L84.2233 25.2835V19.7575L92.6602 11.2493L88.4418 7H105.325L101.107 11.2493Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2221 49.5316H53.7362L79.9952 22.7398V19.7576L84.2233 15.5083V32.5151L79.9952 28.2658L59.2221 49.5316Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M79.9952 19.7576H77.0442L47.4859 49.5316H42L71.5582 19.7576L67.3301 15.5083H84.2233L79.9952 19.7576Z" fill="#A6B5CB"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_13428">
                                        <rect width="76" height="66" transform="translate(42 7)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <!-- --- -->
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_123)">
                                        <path d="M54.2976 29.8291C54.2976 30.0113 54.1485 30.1604 53.9662 30.1604H49.2599C49.0776 30.1604 48.9285 30.0113 48.9285 29.8291V25.1246C48.9285 24.9424 49.0776 24.7933 49.2599 24.7933H53.9662C54.1485 24.7933 54.2976 24.9424 54.2976 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M61.0584 29.8291C61.0584 30.0113 60.9092 30.1604 60.7269 30.1604H56.0206C55.8384 30.1604 55.6892 30.0113 55.6892 29.8291V25.1246C55.6892 24.9424 55.8384 24.7933 56.0206 24.7933H60.7269C60.9092 24.7933 61.0584 24.9424 61.0584 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M104.31 29.8291C104.31 30.0113 104.161 30.1604 103.979 30.1604H99.2723C99.0901 30.1604 98.9409 30.0113 98.9409 29.8291V25.1246C98.9409 24.9424 99.0901 24.7933 99.2723 24.7933H103.979C104.161 24.7933 104.31 24.9424 104.31 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M111.071 29.8291C111.071 30.0113 110.922 30.1604 110.739 30.1604H106.033C105.851 30.1604 105.702 30.0113 105.702 29.8291V25.1246C105.702 24.9424 105.851 24.7933 106.033 24.7933H110.739C110.922 24.7933 111.071 24.9424 111.071 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M121.777 25.3897L115.894 19.5092V15.3514C115.894 15.1195 115.695 14.9372 115.463 14.9372H113.607C113.375 14.9372 113.193 15.1195 113.193 15.3514V16.8256L105.404 9.04011C105.189 8.82477 104.824 8.82477 104.592 9.04011L103.78 9.8518C103.565 10.0671 103.2 10.4316 102.968 10.6635L95.9254 17.7036L82.0055 3.78902C81.79 3.55711 81.4255 3.20925 81.1935 2.97734L80.398 2.16566C80.1826 1.95031 79.818 1.95031 79.586 2.16566L71.7975 9.95119V8.47691C71.7975 8.245 71.6152 8.06278 71.3666 8.06278H69.5106C69.2786 8.06278 69.0797 8.26156 69.0797 8.47691V12.6347L64.042 17.6705L56.9992 10.6303C56.7837 10.415 56.4192 10.0506 56.1872 9.81867L55.3752 9.00698C55.1597 8.79164 54.7952 8.79164 54.5632 9.00698L46.7746 16.7925V15.3182C46.7746 15.0863 46.5923 14.9041 46.3437 14.9041H44.4877C44.2557 14.9041 44.0569 15.0863 44.0569 15.3182V19.476L38.174 25.3566C37.9586 25.5719 37.9586 25.9364 38.174 26.1683L38.986 26.98C39.2015 27.1953 39.566 27.1953 39.798 26.98L54.5466 12.2206C54.762 12.0052 55.1266 12.0052 55.3586 12.2206L70.1237 26.98C70.3392 27.1953 70.7037 27.1953 70.9357 26.98L71.7477 26.1683C71.9632 25.9529 71.9632 25.5885 71.7477 25.3566L65.6494 19.2607L79.5694 5.34613C79.7849 5.13079 80.1494 5.13079 80.3814 5.34613L94.3014 19.2607L88.2032 25.3566C87.9877 25.5719 87.9877 25.9364 88.2032 26.1683L89.0152 26.98C89.2306 27.1953 89.5952 27.1953 89.8272 26.98L104.576 12.2206C104.791 12.0052 105.156 12.0052 105.388 12.2206L120.136 26.98C120.352 27.1953 120.716 27.1953 120.948 26.98L121.76 26.1683C122.009 25.9861 122.009 25.6216 121.777 25.3897Z" fill="#A6B5CB"/>
                                        <path d="M55.7236 13.7942C55.6407 13.7114 55.4916 13.5623 55.4087 13.4795L55.0939 13.1648C55.011 13.082 54.8619 13.082 54.779 13.1648L48.515 19.4429C48.4322 19.5257 48.4322 19.6748 48.515 19.7576L48.8299 20.0724C48.9127 20.1552 49.0619 20.1552 49.1447 20.0724L54.7956 14.4237C54.8785 14.3409 55.0276 14.3409 55.1105 14.4237L60.7613 20.0724C60.8442 20.1552 60.9933 20.1552 61.0762 20.0724L61.391 19.7576C61.4739 19.6748 61.4739 19.5257 61.391 19.4429L55.7236 13.7942Z" fill="#A6B5CB"/>
                                        <path d="M80.7792 6.87005C80.6964 6.78723 80.5472 6.63814 80.4644 6.55532L80.1495 6.24059C80.0667 6.15776 79.9175 6.15776 79.8347 6.24059L73.5541 12.5187C73.4712 12.6015 73.4712 12.7506 73.5541 12.8334L73.8689 13.1482C73.9518 13.231 74.1009 13.231 74.1838 13.1482L79.8347 7.49952C79.9175 7.4167 80.0667 7.4167 80.1495 7.49952L85.8004 13.1482C85.8832 13.231 86.0324 13.231 86.1152 13.1482L86.4301 12.8334C86.5129 12.7506 86.5129 12.6181 86.4301 12.5187L80.7792 6.87005Z" fill="#A6B5CB"/>
                                        <path d="M105.785 13.7942C105.702 13.7114 105.553 13.5623 105.47 13.4795L105.155 13.1648C105.073 13.082 104.923 13.082 104.841 13.1648L98.5599 19.4429C98.4771 19.5257 98.4771 19.6748 98.5599 19.7576L98.8748 20.0724C98.9577 20.1552 99.1068 20.1552 99.1897 20.0724L104.857 14.4072C104.94 14.3243 105.089 14.3243 105.172 14.4072L110.823 20.0558C110.906 20.1386 111.055 20.1386 111.138 20.0558L111.453 19.7411C111.535 19.6582 111.535 19.5092 111.453 19.4263L105.785 13.7942Z" fill="#A6B5CB"/>
                                        <path d="M79.9999 36.041C99.9519 36.041 117.219 40.2485 125.571 46.3775C123.069 38.5423 103.631 32.4298 79.9999 32.4298C56.369 32.4298 36.9308 38.5257 34.4285 46.3775C42.7805 40.2485 60.0479 36.041 79.9999 36.041Z" fill="#E3E3E3"/>
                                        <path d="M54.2976 34.0532V31.5188C54.2976 31.3366 54.1485 31.1875 53.9662 31.1875H49.2599C49.0776 31.1875 48.9285 31.3366 48.9285 31.5188V35.511C50.6022 34.9809 52.4085 34.5005 54.2976 34.0532Z" fill="#A6B5CB"/>
                                        <path d="M61.0584 32.7612V31.5188C61.0584 31.3366 60.9092 31.1875 60.7269 31.1875H56.0206C55.8384 31.1875 55.6892 31.3366 55.6892 31.5188V33.7551C57.4126 33.3741 59.2024 33.0428 61.0584 32.7612Z" fill="#A6B5CB"/>
                                        <path d="M104.31 33.7385V31.5022C104.31 31.32 104.161 31.1709 103.979 31.1709H99.2723C99.0901 31.1709 98.9409 31.32 98.9409 31.5022V32.7446C100.797 33.0427 102.587 33.374 104.31 33.7385Z" fill="#A6B5CB"/>
                                        <path d="M111.071 35.511V31.5188C111.071 31.3366 110.922 31.1875 110.74 31.1875H106.033C105.851 31.1875 105.702 31.3366 105.702 31.5188V34.0532C107.591 34.5005 109.397 34.9809 111.071 35.511Z" fill="#A6B5CB"/>
                                        <path d="M79.3035 23.7499C79.3035 23.9321 79.1543 24.0812 78.972 24.0812H74.2658C74.0835 24.0812 73.9343 23.9321 73.9343 23.7499V19.0454C73.9343 18.8632 74.0835 18.7141 74.2658 18.7141H78.972C79.1543 18.7141 79.3035 18.8632 79.3035 19.0454V23.7499Z" fill="#A6B5CB"/>
                                        <path d="M86.0642 23.7499C86.0642 23.9321 85.9151 24.0812 85.7328 24.0812H81.0265C80.8442 24.0812 80.6951 23.9321 80.6951 23.7499V19.0454C80.6951 18.8632 80.8442 18.7141 81.0265 18.7141H85.7328C85.9151 18.7141 86.0642 18.8632 86.0642 19.0454V23.7499Z" fill="#A6B5CB"/>
                                        <path d="M79.3035 30.1439C79.3035 30.3261 79.1543 30.4752 78.972 30.4752H74.2658C74.0835 30.4752 73.9343 30.3261 73.9343 30.1439V25.4395C73.9343 25.2572 74.0835 25.1082 74.2658 25.1082H78.972C79.1543 25.1082 79.3035 25.2572 79.3035 25.4395V30.1439Z" fill="#A6B5CB"/>
                                        <path d="M86.0642 30.1439C86.0642 30.3261 85.9151 30.4752 85.7328 30.4752H81.0265C80.8442 30.4752 80.6951 30.3261 80.6951 30.1439V25.4395C80.6951 25.2572 80.8442 25.1082 81.0265 25.1082H85.7328C85.9151 25.1082 86.0642 25.2572 86.0642 25.4395V30.1439Z" fill="#A6B5CB"/>
                                        <path d="M22 52.7881H29.656C31.4291 52.7881 32.7549 53.1691 33.6331 53.9311C34.5114 54.6931 34.9589 55.7532 34.9589 57.1281C34.9589 57.8901 34.8429 58.5196 34.6274 59.0331C34.3954 59.53 34.1469 59.9441 33.8486 60.2423C33.5503 60.557 33.252 60.7724 32.9537 60.9049C32.6554 61.0374 32.44 61.1368 32.3074 61.17V61.2196C32.5394 61.2528 32.8046 61.319 33.0863 61.4516C33.368 61.5675 33.6166 61.7663 33.8651 62.0313C34.0971 62.2964 34.296 62.6277 34.4617 63.0584C34.6109 63.4725 34.6937 64.0026 34.6937 64.632C34.6937 65.5762 34.76 66.4376 34.9091 67.1996C35.0583 67.9781 35.2737 68.5248 35.572 68.8561H32.556C32.3406 68.5082 32.2246 68.1272 32.1914 67.7131C32.1583 67.299 32.1417 66.8849 32.1417 66.5039C32.1417 65.775 32.092 65.129 32.0091 64.5989C31.9263 64.0688 31.7606 63.6216 31.512 63.2737C31.28 62.9258 30.9486 62.6608 30.5343 62.4951C30.12 62.3295 29.5897 62.2467 28.9434 62.2467H24.8171V68.8561H22V52.7881ZM24.8171 60.0932H29.424C30.3189 60.0932 30.9983 59.8779 31.4623 59.4472C31.9263 59.0165 32.1583 58.387 32.1583 57.5257C32.1583 57.0121 32.0754 56.598 31.9263 56.2833C31.7771 55.9686 31.5783 55.7035 31.3131 55.5379C31.048 55.3557 30.7497 55.2397 30.4183 55.1734C30.0869 55.1072 29.7389 55.0906 29.3743 55.0906H24.8171V60.0932Z" fill="#A6B5CB"/>
                                        <path d="M39.4663 63.6879C39.4663 64.1351 39.5326 64.5658 39.6652 64.9965C39.7978 65.4106 39.9801 65.7751 40.2452 66.0898C40.4938 66.4045 40.8252 66.653 41.2063 66.8352C41.5875 67.0174 42.0681 67.1168 42.5983 67.1168C43.3441 67.1168 43.9572 66.9512 44.4046 66.6364C44.8686 66.3217 45.2001 65.8248 45.4321 65.1953H47.8515C47.7189 65.8248 47.4869 66.388 47.1555 66.8849C46.8241 67.3819 46.4263 67.796 45.9623 68.1273C45.4983 68.4586 44.9846 68.7236 44.4046 68.8893C43.8246 69.0549 43.2281 69.1543 42.5983 69.1543C41.6869 69.1543 40.8749 69.0052 40.1789 68.7071C39.4663 68.4089 38.8863 67.9948 38.3892 67.4481C37.9086 66.9015 37.5275 66.272 37.2955 65.51C37.0469 64.7646 36.9309 63.9363 36.9309 63.0418C36.9309 62.2136 37.0635 61.435 37.3286 60.6896C37.5938 59.9442 37.9583 59.2982 38.4555 58.735C38.9361 58.1717 39.5326 57.7245 40.2121 57.3932C40.9081 57.0619 41.6869 56.8962 42.5486 56.8962C43.4601 56.8962 44.2886 57.095 45.0178 57.476C45.7469 57.857 46.3435 58.3705 46.8241 59C47.3046 59.6295 47.6526 60.3583 47.8681 61.17C48.0835 61.9817 48.1332 62.8265 48.0338 63.7044H39.4663V63.6879ZM45.4486 61.9982C45.4155 61.6007 45.3326 61.2031 45.1835 60.8221C45.0343 60.4411 44.8521 60.1264 44.6035 59.8448C44.3549 59.5632 44.0566 59.3479 43.7086 59.1656C43.3606 59 42.9629 58.9006 42.5321 58.9006C42.0846 58.9006 41.6703 58.9834 41.3058 59.1325C40.9412 59.2816 40.6263 59.5135 40.3612 59.7785C40.0961 60.0601 39.8972 60.3749 39.7315 60.7559C39.5823 61.1369 39.4829 61.5344 39.4663 61.9651H45.4486V61.9982Z" fill="#A6B5CB"/>
                                        <path d="M59.6835 66.2554C59.6835 66.5702 59.7166 66.8021 59.7995 66.9346C59.8824 67.0671 60.0481 67.1334 60.2801 67.1334C60.3629 67.1334 60.4458 67.1334 60.5452 67.1334C60.6446 67.1334 60.7772 67.1168 60.9098 67.0837V68.8561C60.8269 68.8893 60.7109 68.9224 60.5618 68.9555C60.4126 68.9887 60.2801 69.0218 60.1309 69.0549C59.9818 69.0881 59.8326 69.1046 59.6835 69.1212C59.5344 69.1378 59.4018 69.1377 59.3024 69.1377C58.7721 69.1377 58.3412 69.0384 57.9932 68.823C57.6452 68.6077 57.4298 68.2432 57.3138 67.7297C56.8001 68.2267 56.1869 68.5911 55.4412 68.8065C54.6955 69.0218 53.9829 69.1377 53.2869 69.1377C52.7566 69.1377 52.2595 69.0715 51.7789 68.9224C51.2984 68.7733 50.8841 68.5745 50.5029 68.2929C50.1384 68.0113 49.8401 67.6635 49.6246 67.2328C49.4092 66.8021 49.2932 66.3051 49.2932 65.7419C49.2932 65.0296 49.4258 64.4333 49.6909 63.9861C49.9561 63.5388 50.3041 63.1909 50.7184 62.9259C51.1492 62.6774 51.6298 62.4952 52.1601 62.3793C52.6904 62.2633 53.2206 62.1805 53.7675 62.1142C54.2315 62.0314 54.6789 61.9651 55.0932 61.9154C55.5075 61.8823 55.8886 61.816 56.2035 61.7167C56.5184 61.6338 56.7835 61.4847 56.9658 61.3025C57.1481 61.1203 57.2475 60.8387 57.2475 60.4577C57.2475 60.1264 57.1646 59.8614 57.0155 59.646C56.8664 59.4307 56.6675 59.2816 56.4355 59.1657C56.2035 59.0497 55.9384 58.9834 55.6566 58.9337C55.3749 58.9006 55.1098 58.884 54.8446 58.884C54.1321 58.884 53.5355 59.0331 53.0715 59.3313C52.6075 59.6295 52.3424 60.0933 52.2926 60.7228H49.7241C49.7738 59.9773 49.9561 59.3479 50.2709 58.8509C50.5858 58.354 50.9835 57.9564 51.4806 57.6582C51.9612 57.3601 52.5246 57.1447 53.1378 57.0288C53.7509 56.9128 54.3806 56.8466 55.0269 56.8466C55.5904 56.8466 56.1538 56.9128 56.7172 57.0288C57.2641 57.1447 57.7778 57.3435 58.2086 57.6085C58.6561 57.8736 59.0041 58.2214 59.2692 58.6521C59.5344 59.0828 59.6669 59.5963 59.6669 60.2092V66.2554H59.6835ZM57.1315 63.0087C56.7338 63.2572 56.2698 63.4228 55.6898 63.4725C55.1264 63.5222 54.5464 63.6051 53.9829 63.7044C53.7178 63.7541 53.4526 63.8204 53.2041 63.9032C52.9555 63.9861 52.7235 64.102 52.5246 64.2345C52.3258 64.3836 52.1766 64.5658 52.0606 64.7977C51.9446 65.0296 51.8949 65.3112 51.8949 65.6425C51.8949 65.9242 51.9778 66.1726 52.1435 66.3548C52.3092 66.5536 52.5081 66.7027 52.7401 66.8187C52.9721 66.9346 53.2206 67.0174 53.5024 67.0506C53.7841 67.1003 54.0326 67.1168 54.2481 67.1168C54.5298 67.1168 54.8446 67.0837 55.1761 67.0009C55.5075 66.918 55.8224 66.8021 56.1041 66.6199C56.4024 66.4377 56.6344 66.2058 56.8332 65.9407C57.0321 65.6591 57.1315 65.3278 57.1315 64.9137V63.0087Z" fill="#A6B5CB"/>
                                        <path d="M62.5176 52.7881H65.0861V68.823H62.5176V52.7881Z" fill="#A6B5CB"/>
                                        <path d="M74.4814 52.7881H86.0317V55.2066H77.282V59.4141H85.3688V61.7H77.282V66.3879H86.1808V68.8064H74.4648V52.7881H74.4814Z" fill="#A6B5CB"/>
                                        <path d="M90.2083 65.0959C90.2912 65.8413 90.5729 66.3714 91.07 66.6695C91.5672 66.9677 92.1637 67.1168 92.8432 67.1168C93.0752 67.1168 93.3569 67.1002 93.6717 67.0671C93.9866 67.034 94.2683 66.9511 94.5335 66.8517C94.7986 66.7524 95.0306 66.5867 95.1963 66.3879C95.362 66.1891 95.4449 65.9241 95.4283 65.5928C95.4117 65.2615 95.2957 64.9965 95.0637 64.7811C94.8317 64.5658 94.55 64.4001 94.202 64.2676C93.854 64.1351 93.4563 64.0357 92.9923 63.9363C92.5449 63.8535 92.0809 63.7541 91.6169 63.6381C91.1363 63.5388 90.6723 63.4062 90.2415 63.2571C89.794 63.1081 89.3963 62.9093 89.0483 62.6442C88.7003 62.3958 88.4186 62.0645 88.2032 61.6669C87.9877 61.2694 87.8883 60.7724 87.8883 60.1926C87.8883 59.5632 88.0375 59.0331 88.3523 58.6024C88.6672 58.1717 89.0483 57.8238 89.5289 57.5754C89.9929 57.3103 90.5232 57.1281 91.1032 57.0287C91.6832 56.9293 92.23 56.8796 92.7603 56.8796C93.3569 56.8796 93.9369 56.9459 94.4837 57.0784C95.0306 57.2109 95.5277 57.4097 95.9752 57.6913C96.4226 57.9729 96.7872 58.3539 97.0689 58.8012C97.3672 59.265 97.5495 59.8116 97.6157 60.4577H94.9477C94.8317 59.8448 94.55 59.4306 94.1026 59.2153C93.6552 59 93.158 58.9006 92.578 58.9006C92.3957 58.9006 92.1803 58.9171 91.9317 58.9503C91.6832 58.9834 91.4512 59.0331 91.2357 59.1159C91.0203 59.1987 90.838 59.3147 90.6889 59.4803C90.5397 59.6294 90.4569 59.8448 90.4569 60.0932C90.4569 60.408 90.5729 60.6564 90.7883 60.8552C91.0037 61.054 91.2855 61.2031 91.65 61.3356C91.998 61.4681 92.3957 61.5675 92.8597 61.6669C93.3072 61.7497 93.7712 61.8491 94.2517 61.9651C94.7157 62.0645 95.1797 62.197 95.6272 62.3461C96.0746 62.4952 96.4723 62.6939 96.8369 62.959C97.1849 63.2075 97.4666 63.5387 97.6986 63.9197C97.914 64.3173 98.03 64.7811 98.03 65.3609C98.03 66.0566 97.8809 66.6364 97.566 67.1168C97.2512 67.5972 96.8369 67.9782 96.3397 68.2929C95.8426 68.5911 95.2792 68.8064 94.666 68.9389C94.0529 69.0714 93.4397 69.1377 92.8432 69.1377C92.114 69.1377 91.4346 69.0549 90.8049 68.8892C90.1752 68.7236 89.6449 68.4751 89.1809 68.1438C88.7169 67.8125 88.3689 67.3818 88.1037 66.8849C87.8386 66.3879 87.706 65.7916 87.6895 65.0959H90.2083Z" fill="#A6B5CB"/>
                                        <path d="M98.7754 57.2109H100.714V53.7323H103.283V57.2109H105.603V59.1159H103.283V65.3112C103.283 65.5762 103.299 65.8082 103.316 66.0069C103.333 66.2057 103.399 66.3714 103.465 66.5039C103.548 66.6364 103.664 66.7358 103.83 66.8021C103.995 66.8683 104.227 66.9014 104.509 66.9014C104.691 66.9014 104.874 66.9014 105.056 66.8849C105.238 66.8849 105.421 66.8517 105.603 66.8021V68.7733C105.321 68.8064 105.039 68.8395 104.774 68.8561C104.509 68.8892 104.227 68.9058 103.946 68.9058C103.266 68.9058 102.736 68.8395 102.322 68.707C101.907 68.5745 101.593 68.3923 101.361 68.1438C101.129 67.8953 100.963 67.5806 100.897 67.2162C100.814 66.8352 100.764 66.4211 100.747 65.9407V59.0828H98.8085V57.2109H98.7754Z" fill="#A6B5CB"/>
                                        <path d="M117.153 66.2554C117.153 66.5702 117.186 66.8021 117.269 66.9346C117.352 67.0671 117.518 67.1334 117.75 67.1334C117.833 67.1334 117.916 67.1334 118.015 67.1334C118.114 67.1334 118.247 67.1168 118.38 67.0837V68.8561C118.297 68.8893 118.181 68.9224 118.032 68.9555C117.882 68.9887 117.75 69.0218 117.601 69.0549C117.452 69.0881 117.302 69.1046 117.153 69.1212C117.004 69.1378 116.872 69.1377 116.772 69.1377C116.242 69.1377 115.811 69.0384 115.463 68.823C115.115 68.6077 114.9 68.2432 114.784 67.7297C114.27 68.2267 113.657 68.5911 112.911 68.8065C112.165 69.0384 111.453 69.1377 110.757 69.1377C110.226 69.1377 109.729 69.0715 109.249 68.9224C108.768 68.7733 108.354 68.5745 107.973 68.2929C107.608 68.0113 107.31 67.6635 107.094 67.2328C106.879 66.8021 106.763 66.3051 106.763 65.7419C106.763 65.0296 106.896 64.4333 107.161 63.9861C107.426 63.5388 107.774 63.1909 108.188 62.9259C108.619 62.6774 109.1 62.4952 109.63 62.3793C110.16 62.2633 110.69 62.1805 111.237 62.1142C111.701 62.0314 112.149 61.9651 112.563 61.9154C112.977 61.8823 113.358 61.816 113.673 61.7167C113.988 61.6338 114.253 61.4847 114.436 61.3025C114.618 61.1203 114.717 60.8387 114.717 60.4577C114.717 60.1264 114.634 59.8614 114.485 59.646C114.336 59.4307 114.137 59.2816 113.905 59.1657C113.673 59.0497 113.408 58.9834 113.126 58.9337C112.845 58.9006 112.58 58.884 112.314 58.884C111.602 58.884 111.005 59.0331 110.541 59.3313C110.077 59.6295 109.812 60.0933 109.762 60.7228H107.194C107.244 59.9773 107.426 59.3479 107.741 58.8509C108.056 58.354 108.453 57.9564 108.95 57.6582C109.431 57.3601 109.994 57.1447 110.608 57.0288C111.221 56.9128 111.85 56.8466 112.497 56.8466C113.06 56.8466 113.624 56.9128 114.187 57.0288C114.734 57.1447 115.248 57.3435 115.678 57.6085C116.126 57.8736 116.474 58.2214 116.739 58.6521C117.004 59.0828 117.137 59.5963 117.137 60.2092V66.2554H117.153ZM114.601 63.0087C114.204 63.2572 113.74 63.4228 113.16 63.4725C112.596 63.5222 112.016 63.6051 111.453 63.7044C111.188 63.7541 110.922 63.8204 110.674 63.9032C110.425 63.9861 110.193 64.102 109.994 64.2345C109.796 64.3836 109.646 64.5658 109.53 64.7977C109.414 65.0296 109.365 65.3112 109.365 65.6425C109.365 65.9242 109.448 66.1726 109.613 66.3548C109.779 66.5536 109.978 66.7027 110.21 66.8187C110.442 66.9346 110.69 67.0174 110.972 67.0506C111.254 67.1003 111.502 67.1168 111.718 67.1168C112 67.1168 112.314 67.0837 112.646 67.0009C112.977 66.918 113.292 66.8021 113.574 66.6199C113.872 66.4377 114.104 66.2058 114.303 65.9407C114.502 65.6591 114.601 65.3278 114.601 64.9137V63.0087Z" fill="#A6B5CB"/>
                                        <path d="M118.76 57.2109H120.699V53.7323H123.251V57.2109H125.571V59.1159H123.251V65.3112C123.251 65.5762 123.268 65.8082 123.284 66.0069C123.301 66.2057 123.367 66.3714 123.434 66.5039C123.516 66.6364 123.632 66.7358 123.798 66.8021C123.964 66.8683 124.196 66.9014 124.478 66.9014C124.66 66.9014 124.842 66.9014 125.024 66.8849C125.207 66.8849 125.389 66.8517 125.571 66.8021V68.7733C125.29 68.8064 125.008 68.8395 124.743 68.8561C124.478 68.8892 124.196 68.9058 123.914 68.9058C123.235 68.9058 122.704 68.8395 122.29 68.707C121.876 68.5745 121.561 68.3923 121.329 68.1438C121.097 67.8953 120.931 67.5806 120.865 67.2162C120.782 66.8352 120.732 66.4211 120.716 65.9407V59.0828H118.777V57.2109H118.76Z" fill="#A6B5CB"/>
                                        <path d="M129.416 63.6879C129.416 64.1351 129.483 64.5658 129.615 64.9965C129.748 65.4106 129.93 65.7751 130.195 66.0898C130.444 66.4045 130.775 66.653 131.156 66.8352C131.554 67.0174 132.018 67.1168 132.548 67.1168C133.294 67.1168 133.907 66.9512 134.355 66.6364C134.819 66.3217 135.15 65.8248 135.382 65.1953H137.801C137.669 65.8248 137.437 66.388 137.105 66.8849C136.774 67.3819 136.376 67.796 135.912 68.1273C135.448 68.4586 134.935 68.7236 134.355 68.8893C133.775 69.0549 133.178 69.1543 132.548 69.1543C131.637 69.1543 130.825 69.0052 130.129 68.7071C129.416 68.4089 128.836 67.9948 128.339 67.4481C127.859 66.9015 127.477 66.272 127.245 65.51C126.997 64.7646 126.881 63.9363 126.881 63.0418C126.881 62.2136 127.013 61.435 127.279 60.6896C127.544 59.9442 127.908 59.2982 128.405 58.735C128.886 58.1717 129.483 57.7245 130.162 57.3932C130.858 57.0619 131.637 56.8962 132.499 56.8962C133.41 56.8962 134.239 57.095 134.968 57.476C135.697 57.857 136.293 58.3705 136.774 59C137.255 59.6295 137.603 60.3583 137.818 61.17C138.033 61.9817 138.083 62.8265 137.984 63.7044H129.416V63.6879ZM135.382 61.9982C135.349 61.6007 135.266 61.2031 135.117 60.8221C134.968 60.4411 134.785 60.1264 134.537 59.8448C134.288 59.5632 133.99 59.3479 133.642 59.1656C133.294 59 132.896 58.9006 132.465 58.9006C132.018 58.9006 131.604 58.9834 131.239 59.1325C130.875 59.2816 130.56 59.5135 130.295 59.7785C130.029 60.0601 129.831 60.3749 129.665 60.7559C129.516 61.1369 129.416 61.5344 129.4 61.9651H135.382V61.9982Z" fill="#A6B5CB"/>
                                        <path d="M37.113 73.7097H37.8588L38.6542 76.0122H38.6708L39.4496 73.7097H40.1622L38.969 76.9564C38.9193 77.089 38.853 77.2215 38.8033 77.354C38.7536 77.4865 38.6873 77.5859 38.6045 77.6853C38.5216 77.7847 38.4388 77.8675 38.3228 77.9172C38.2068 77.9669 38.0576 78 37.8753 78C37.7096 78 37.5605 77.9835 37.4113 77.9669V77.4037C37.461 77.4037 37.5273 77.4203 37.577 77.4368C37.6268 77.4534 37.6765 77.4534 37.7428 77.4534C37.8256 77.4534 37.8919 77.4368 37.9416 77.4203C37.9913 77.4037 38.041 77.3706 38.0742 77.3374C38.1073 77.3043 38.1405 77.2546 38.157 77.2049C38.1736 77.1552 38.2068 77.089 38.2233 77.0227L38.3062 76.7908L37.113 73.7097Z" fill="#A6B5CB"/>
                                        <path d="M43.1288 76.8735C42.8802 76.8735 42.6648 76.8404 42.4659 76.7576C42.2671 76.6747 42.1179 76.5588 41.9854 76.4263C41.8528 76.2772 41.7534 76.1115 41.6871 75.9127C41.6208 75.714 41.5876 75.4986 41.5876 75.2667C41.5876 75.0348 41.6208 74.8195 41.6871 74.6207C41.7534 74.4219 41.8528 74.2562 41.9854 74.1072C42.1179 73.9581 42.2836 73.8587 42.4659 73.7759C42.6648 73.693 42.8802 73.6599 43.1288 73.6599C43.3774 73.6599 43.5928 73.693 43.7916 73.7759C43.9905 73.8587 44.1396 73.9746 44.2722 74.1072C44.4048 74.2562 44.5042 74.4219 44.5705 74.6207C44.6368 74.8195 44.6699 75.0348 44.6699 75.2667C44.6699 75.4986 44.6368 75.7305 44.5705 75.9127C44.5042 76.1115 44.4048 76.2772 44.2722 76.4263C44.1396 76.5753 43.9739 76.6747 43.7916 76.7576C43.5928 76.8238 43.3774 76.8735 43.1288 76.8735ZM43.1288 76.3269C43.2779 76.3269 43.4105 76.2937 43.5265 76.2275C43.6425 76.1612 43.7254 76.0784 43.8082 75.979C43.8745 75.8796 43.9242 75.7637 43.9739 75.6311C44.0071 75.4986 44.0236 75.3661 44.0236 75.2336C44.0236 75.1011 44.0071 74.9685 43.9739 74.836C43.9408 74.7035 43.8911 74.5875 43.8082 74.4882C43.7419 74.3888 43.6425 74.3059 43.5265 74.2397C43.4105 74.1734 43.2779 74.1403 43.1288 74.1403C42.9796 74.1403 42.8471 74.1734 42.7311 74.2397C42.6151 74.3059 42.5322 74.3888 42.4494 74.4882C42.3831 74.5875 42.3334 74.7035 42.2836 74.836C42.2505 74.9685 42.2339 75.1011 42.2339 75.2336C42.2339 75.3661 42.2505 75.4986 42.2836 75.6311C42.3168 75.7637 42.3665 75.8796 42.4494 75.979C42.5156 76.0784 42.6151 76.1612 42.7311 76.2275C42.8471 76.2937 42.9796 76.3269 43.1288 76.3269Z" fill="#A6B5CB"/>
                                        <path d="M49.1443 76.7741H48.4814V76.3434H48.4649C48.382 76.4925 48.2494 76.625 48.1003 76.7079C47.9346 76.8073 47.7689 76.8404 47.6031 76.8404C47.2054 76.8404 46.9071 76.741 46.7249 76.5422C46.5426 76.3434 46.4597 76.0453 46.4597 75.6311V73.6765H47.1391V75.5649C47.1391 75.8299 47.1889 76.0287 47.2883 76.1281C47.3877 76.244 47.5369 76.2937 47.7191 76.2937C47.8683 76.2937 47.9843 76.2772 48.0837 76.2275C48.1831 76.1778 48.2494 76.1281 48.3157 76.0453C48.382 75.979 48.4151 75.8796 48.4483 75.7802C48.4814 75.6808 48.4814 75.5649 48.4814 75.4489V73.6599H49.1609V76.7741H49.1443Z" fill="#A6B5CB"/>
                                        <path d="M51.0495 73.7096H51.6792V74.306H51.6958C51.7124 74.2231 51.7621 74.1403 51.8118 74.0575C51.8615 73.9747 51.9444 73.9084 52.0272 73.8421C52.1101 73.7759 52.193 73.7262 52.2924 73.6765C52.3918 73.6434 52.4912 73.6102 52.5907 73.6102C52.6735 73.6102 52.7232 73.6102 52.7564 73.6102C52.7895 73.6102 52.8227 73.6102 52.8558 73.6268V74.2728C52.8061 74.2728 52.7564 74.2563 52.7067 74.2563C52.657 74.2563 52.6072 74.2397 52.5575 74.2397C52.4415 74.2397 52.3421 74.2563 52.2261 74.306C52.1267 74.3557 52.0438 74.4219 51.961 74.5047C51.8781 74.5876 51.8284 74.7035 51.7787 74.836C51.729 74.9686 51.7124 75.1176 51.7124 75.2833V76.741H51.033V73.7096H51.0495Z" fill="#A6B5CB"/>
                                        <path d="M56.8662 73.7096H57.3799V72.782H58.0594V73.7096H58.6725V74.2231H58.0594V75.8631C58.0594 75.9293 58.0594 75.9956 58.0759 76.0453C58.0759 76.095 58.0925 76.1447 58.1256 76.1778C58.1422 76.2109 58.1754 76.2441 58.2251 76.2606C58.2748 76.2772 58.3245 76.2938 58.4074 76.2938C58.4571 76.2938 58.5068 76.2938 58.5565 76.2938C58.6062 76.2938 58.6559 76.2772 58.7056 76.2772V76.8073C58.6228 76.8073 58.5565 76.8238 58.4902 76.8238C58.4239 76.8238 58.3411 76.8404 58.2748 76.8404C58.0925 76.8404 57.9599 76.8238 57.8439 76.7907C57.7279 76.7576 57.6451 76.7079 57.5954 76.6416C57.5291 76.5754 57.4959 76.4925 57.4628 76.3931C57.4462 76.2938 57.4296 76.1778 57.4296 76.0618V74.2563H56.9159V73.7096H56.8662Z" fill="#A6B5CB"/>
                                        <path d="M62.9147 76.095C62.9147 76.1778 62.9313 76.2441 62.9479 76.2772C62.9644 76.3104 63.0141 76.3269 63.0804 76.3269C63.097 76.3269 63.1301 76.3269 63.1467 76.3269C63.1799 76.3269 63.213 76.3269 63.2461 76.3104V76.7742C63.2296 76.7742 63.1964 76.7907 63.1467 76.8073C63.1136 76.8239 63.0639 76.8239 63.0307 76.8404C62.9976 76.8404 62.9478 76.857 62.9147 76.857C62.8816 76.857 62.8484 76.857 62.8153 76.857C62.6827 76.857 62.5667 76.8239 62.4673 76.7742C62.3678 76.7245 62.3181 76.6251 62.285 76.476C62.1524 76.6085 61.9867 76.7079 61.7879 76.7576C61.589 76.8239 61.4067 76.8404 61.2244 76.8404C61.0918 76.8404 60.9593 76.8239 60.8267 76.7907C60.6941 76.7576 60.5947 76.6914 60.4953 76.6251C60.3959 76.5588 60.313 76.4594 60.2633 76.3435C60.2136 76.2275 60.1804 76.095 60.1804 75.9459C60.1804 75.7637 60.2136 75.5981 60.2798 75.4821C60.3461 75.3662 60.4456 75.2668 60.5616 75.2005C60.6776 75.1343 60.7936 75.0846 60.9427 75.0514C61.0753 75.0183 61.2244 75.0017 61.3736 74.9852C61.4896 74.9686 61.6056 74.952 61.7216 74.9355C61.8376 74.9189 61.937 74.9023 62.0198 74.8858C62.1027 74.8692 62.169 74.8195 62.2187 74.7698C62.2684 74.7201 62.285 74.6539 62.285 74.5545C62.285 74.4717 62.2684 74.3888 62.2187 74.3391C62.169 74.2894 62.1193 74.2397 62.0696 74.2066C62.0033 74.1735 61.937 74.1569 61.8707 74.1404C61.7879 74.1238 61.7216 74.1238 61.6553 74.1238C61.473 74.1238 61.3073 74.1569 61.1913 74.2397C61.0753 74.3226 60.9924 74.4385 60.9758 74.6042H60.2964C60.313 74.4054 60.3627 74.2397 60.4456 74.1072C60.5284 73.9747 60.6278 73.8753 60.7604 73.7925C60.893 73.7097 61.0421 73.66 61.1913 73.6268C61.357 73.5937 61.5227 73.5771 61.6884 73.5771C61.8376 73.5771 61.9867 73.5937 62.1358 73.6268C62.285 73.66 62.4176 73.7097 62.5336 73.7759C62.6496 73.8422 62.749 73.9416 62.8153 74.0575C62.8816 74.1735 62.9147 74.306 62.9147 74.4717V76.095ZM62.2353 75.2502C62.1359 75.3165 62.0033 75.3662 61.8541 75.3662C61.705 75.3827 61.5559 75.3993 61.4067 75.4324C61.3404 75.449 61.2576 75.4656 61.1913 75.4821C61.125 75.4987 61.0587 75.5318 61.009 75.5649C60.9593 75.5981 60.9096 75.6478 60.893 75.714C60.8598 75.7803 60.8433 75.8465 60.8433 75.9294C60.8433 76.0122 60.8599 76.0619 60.9096 76.1116C60.9593 76.1613 61.009 76.211 61.0753 76.2275C61.1416 76.2607 61.2078 76.2772 61.2741 76.2938C61.3404 76.3104 61.4067 76.3104 61.473 76.3104C61.5558 76.3104 61.6221 76.2938 61.7216 76.2772C61.8044 76.2607 61.8873 76.2275 61.9701 76.1778C62.053 76.1281 62.1193 76.0619 62.169 75.9956C62.2187 75.9294 62.2518 75.83 62.2518 75.7306V75.2502H62.2353Z" fill="#A6B5CB"/>
                                        <path d="M67.6876 76.6251C67.6876 77.0889 67.555 77.4368 67.2899 77.6687C67.0247 77.9006 66.6601 78.0165 66.163 78.0165C66.0139 78.0165 65.8481 78 65.699 77.9669C65.5499 77.9337 65.4007 77.884 65.2681 77.8012C65.1356 77.7184 65.0361 77.619 64.9367 77.503C64.8539 77.3871 64.8041 77.2214 64.7876 77.0558H65.467C65.4836 77.1552 65.5167 77.2214 65.5664 77.2877C65.6161 77.3539 65.6659 77.3871 65.7321 77.4202C65.7984 77.4533 65.8647 77.4699 65.9476 77.4865C66.0304 77.503 66.1133 77.503 66.1961 77.503C66.4779 77.503 66.6767 77.4368 66.7927 77.3043C66.9253 77.1717 66.975 76.973 66.975 76.7245V76.2607H66.9584C66.859 76.4263 66.7264 76.5588 66.5607 76.6582C66.395 76.7576 66.2127 76.8073 66.0304 76.8073C65.7819 76.8073 65.583 76.7576 65.4007 76.6748C65.235 76.592 65.0859 76.476 64.9699 76.3269C64.8539 76.1778 64.771 76.0122 64.7213 75.8134C64.6716 75.6146 64.6384 75.4158 64.6384 75.1839C64.6384 74.9852 64.6716 74.7864 64.7379 74.5876C64.8041 74.4054 64.887 74.2397 65.0196 74.0907C65.1356 73.9581 65.2847 73.8422 65.4504 73.7594C65.6161 73.6765 65.815 73.6268 66.0304 73.6268C66.2293 73.6268 66.395 73.66 66.5607 73.7428C66.7264 73.8256 66.8424 73.9581 66.9419 74.1238H66.9584V73.7097H67.6379V76.6251H67.6876ZM66.1796 76.2441C66.3287 76.2441 66.4613 76.211 66.5607 76.1447C66.6601 76.0784 66.743 75.9956 66.8093 75.8962C66.8756 75.7968 66.9253 75.6809 66.9584 75.5484C66.9916 75.4158 67.0081 75.2833 67.0081 75.1508C67.0081 75.0183 66.9916 74.8858 66.9584 74.7698C66.9253 74.6539 66.8756 74.5379 66.8093 74.4385C66.743 74.3391 66.6601 74.2729 66.5607 74.2066C66.4613 74.1569 66.3287 74.1238 66.1796 74.1238C66.0304 74.1238 65.8979 74.1569 65.7984 74.2232C65.699 74.2894 65.6161 74.3723 65.5499 74.4716C65.4836 74.571 65.4339 74.687 65.4173 74.8195C65.3841 74.952 65.3676 75.068 65.3676 75.2005C65.3676 75.333 65.3841 75.449 65.4173 75.5649C65.4504 75.6809 65.5001 75.7968 65.5664 75.8962C65.6327 75.9956 65.7156 76.0619 65.815 76.1281C65.9144 76.211 66.047 76.2441 66.1796 76.2441Z" fill="#A6B5CB"/>
                                        <path d="M69.5769 72.5336H70.2563V76.7742H69.5769V72.5336Z" fill="#A6B5CB"/>
                                        <path d="M72.1951 72.5336H72.8745V73.1796H72.1951V72.5336ZM72.1951 73.7097H72.8745V76.7908H72.1951V73.7097Z" fill="#A6B5CB"/>
                                        <path d="M74.813 73.7097H75.4593V74.1569L75.4758 74.1735C75.5753 74.0078 75.7078 73.8753 75.8736 73.7759C76.0393 73.6765 76.2216 73.6268 76.4204 73.6268C76.7518 73.6268 77.017 73.7097 77.2158 73.8919C77.4147 74.0741 77.5141 74.3226 77.5141 74.6704V76.7742H76.8347V74.8361C76.8347 74.5876 76.7684 74.4219 76.6856 74.306C76.5861 74.19 76.437 74.1403 76.2381 74.1403C76.1221 74.1403 76.0227 74.1569 75.9233 74.2066C75.8238 74.2563 75.7576 74.306 75.6913 74.3723C75.625 74.4385 75.5753 74.5379 75.5421 74.6373C75.509 74.7367 75.4924 74.8361 75.4924 74.952V76.7576H74.813V73.7097Z" fill="#A6B5CB"/>
                                        <path d="M79.9506 75.4158C79.9506 75.5318 79.9672 75.6478 80.0003 75.7637C80.0335 75.8797 80.0832 75.9791 80.1495 76.0619C80.2158 76.1447 80.2986 76.211 80.398 76.2607C80.4975 76.3104 80.63 76.3269 80.7626 76.3269C80.9615 76.3269 81.1272 76.2772 81.2432 76.1944C81.3592 76.1116 81.4586 75.9791 81.5083 75.8134H82.1546C82.1215 75.9791 82.0552 76.1281 81.9723 76.2607C81.8895 76.3932 81.7735 76.5091 81.6575 76.592C81.5415 76.6748 81.3923 76.741 81.2432 76.7907C81.094 76.8404 80.9283 76.857 80.7626 76.857C80.514 76.857 80.2986 76.8239 80.1163 76.741C79.934 76.6582 79.7683 76.5588 79.6358 76.4097C79.5032 76.2607 79.4038 76.095 79.3375 75.8962C79.2712 75.6975 79.238 75.4821 79.238 75.2502C79.238 75.0349 79.2712 74.8195 79.3375 74.6207C79.4038 74.4219 79.5032 74.2563 79.6358 74.1072C79.7683 73.9581 79.9175 73.8422 80.0998 73.7594C80.282 73.6765 80.4809 73.6268 80.7129 73.6268C80.9615 73.6268 81.1769 73.6765 81.3592 73.7759C81.558 73.8753 81.7072 74.0078 81.8398 74.1735C81.9723 74.3391 82.0552 74.5379 82.1215 74.7533C82.1712 74.9686 82.1878 75.2005 82.1712 75.4158H79.9506ZM81.5249 74.9686C81.5249 74.8692 81.4918 74.7532 81.4586 74.6539C81.4255 74.5545 81.3758 74.4716 81.3095 74.3888C81.2432 74.3226 81.1603 74.2563 81.0775 74.2066C80.978 74.1569 80.8786 74.1403 80.7626 74.1403C80.6466 74.1403 80.5306 74.1569 80.4312 74.2066C80.3318 74.2563 80.2489 74.306 80.1826 74.3723C80.1163 74.4385 80.05 74.5379 80.0169 74.6373C79.9672 74.7367 79.9506 74.8361 79.9506 74.952H81.5249V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M89.5948 76.6251C89.5948 77.0889 89.4622 77.4368 89.1971 77.6687C88.9319 77.9006 88.5674 78.0165 88.0702 78.0165C87.9211 78.0165 87.7554 78 87.6062 77.9669C87.4571 77.9337 87.3079 77.884 87.1754 77.8012C87.0428 77.7184 86.9434 77.619 86.8439 77.503C86.7611 77.3871 86.7114 77.2214 86.6948 77.0558H87.3742C87.3908 77.1552 87.4239 77.2214 87.4737 77.2877C87.5234 77.3539 87.5731 77.3871 87.6394 77.4202C87.7057 77.4533 87.7719 77.4699 87.8548 77.4865C87.9377 77.503 88.0205 77.503 88.1034 77.503C88.3851 77.503 88.5839 77.4368 88.6999 77.3043C88.8325 77.1717 88.8822 76.973 88.8822 76.7245V76.2607H88.8657C88.7662 76.4263 88.6337 76.5588 88.4679 76.6582C88.3022 76.7576 88.1199 76.8073 87.9377 76.8073C87.6891 76.8073 87.4902 76.7576 87.3079 76.6748C87.1422 76.592 86.9931 76.476 86.8771 76.3269C86.7611 76.1778 86.6782 76.0122 86.6285 75.8134C86.5788 75.6146 86.5457 75.4158 86.5457 75.1839C86.5457 74.9852 86.5788 74.7864 86.6451 74.5876C86.7114 74.4054 86.7942 74.2397 86.9268 74.0907C87.0428 73.9581 87.1919 73.8422 87.3577 73.7594C87.5234 73.6765 87.7222 73.6268 87.9377 73.6268C88.1365 73.6268 88.3022 73.66 88.4679 73.7428C88.6337 73.8256 88.7497 73.9581 88.8491 74.1238H88.8657V73.7097H89.5451V76.6251H89.5948ZM88.0868 76.2441C88.2359 76.2441 88.3685 76.211 88.4679 76.1447C88.5674 76.0784 88.6502 75.9956 88.7165 75.8962C88.7828 75.7968 88.8325 75.6809 88.8657 75.5484C88.8988 75.4158 88.9154 75.2833 88.9154 75.1508C88.9154 75.0183 88.8988 74.8858 88.8657 74.7698C88.8325 74.6539 88.7828 74.5379 88.7165 74.4385C88.6502 74.3391 88.5674 74.2729 88.4679 74.2066C88.3685 74.1569 88.2359 74.1238 88.0868 74.1238C87.9377 74.1238 87.8051 74.1569 87.7057 74.2232C87.6062 74.2894 87.5234 74.3723 87.4571 74.4716C87.3908 74.571 87.3411 74.687 87.3245 74.8195C87.2914 74.952 87.2748 75.068 87.2748 75.2005C87.2748 75.333 87.2914 75.449 87.3245 75.5649C87.3577 75.6809 87.4074 75.7968 87.4737 75.8962C87.5399 75.9956 87.6228 76.0619 87.7222 76.1281C87.8217 76.211 87.9542 76.2441 88.0868 76.2441Z" fill="#A6B5CB"/>
                                        <path d="M92.8759 76.8736C92.6273 76.8736 92.4119 76.8405 92.213 76.7577C92.0141 76.6749 91.865 76.5589 91.7324 76.4264C91.5999 76.2773 91.5004 76.1116 91.4341 75.9129C91.3679 75.7141 91.3347 75.4987 91.3347 75.2668C91.3347 75.0349 91.3679 74.8196 91.4341 74.6208C91.5004 74.422 91.5999 74.2564 91.7324 74.1073C91.865 73.9582 92.0307 73.8588 92.213 73.776C92.4119 73.6932 92.6273 73.66 92.8759 73.66C93.1244 73.66 93.3399 73.6932 93.5387 73.776C93.7376 73.8588 93.8867 73.9748 94.0193 74.1073C94.1519 74.2564 94.2513 74.422 94.3176 74.6208C94.3839 74.8196 94.417 75.0349 94.417 75.2668C94.417 75.4987 94.3839 75.7307 94.3176 75.9129C94.2513 76.1116 94.1519 76.2773 94.0193 76.4264C93.8867 76.5755 93.721 76.6749 93.5387 76.7577C93.3399 76.8239 93.1244 76.8736 92.8759 76.8736ZM92.8759 76.327C93.025 76.327 93.1576 76.2939 93.2736 76.2276C93.3896 76.1613 93.4724 76.0785 93.5553 75.9791C93.6216 75.8797 93.6713 75.7638 93.721 75.6313C93.7541 75.4987 93.7707 75.3662 93.7707 75.2337C93.7707 75.1012 93.7541 74.9687 93.721 74.8361C93.6879 74.7036 93.6381 74.5877 93.5553 74.4883C93.489 74.3889 93.3896 74.3061 93.2736 74.2398C93.1576 74.1735 93.025 74.1404 92.8759 74.1404C92.7267 74.1404 92.5941 74.1735 92.4781 74.2398C92.3621 74.3061 92.2793 74.3889 92.1964 74.4883C92.1301 74.5877 92.0804 74.7036 92.0307 74.8361C91.981 74.9687 91.981 75.1012 91.981 75.2337C91.981 75.3662 91.9976 75.4987 92.0307 75.6313C92.0639 75.7638 92.1136 75.8797 92.1964 75.9791C92.2627 76.0785 92.3621 76.1613 92.4781 76.2276C92.5941 76.2939 92.7267 76.327 92.8759 76.327Z" fill="#A6B5CB"/>
                                        <path d="M96.7201 75.4158C96.7201 75.5318 96.7367 75.6478 96.7699 75.7637C96.803 75.8797 96.8527 75.9791 96.919 76.0619C96.9853 76.1447 97.0681 76.211 97.1676 76.2607C97.267 76.3104 97.3996 76.3269 97.5321 76.3269C97.731 76.3269 97.8967 76.2772 98.0127 76.1944C98.1287 76.1116 98.2281 75.9791 98.2779 75.8134H98.9241C98.891 75.9791 98.8247 76.1281 98.7419 76.2607C98.659 76.3932 98.543 76.5091 98.427 76.592C98.311 76.6748 98.1619 76.741 98.0127 76.7907C97.8636 76.8404 97.6979 76.857 97.5321 76.857C97.2836 76.857 97.0681 76.8239 96.8859 76.741C96.7036 76.6582 96.5379 76.5588 96.4053 76.4097C96.2727 76.2607 96.1733 76.095 96.107 75.8962C96.0407 75.6975 96.0076 75.4821 96.0076 75.2502C96.0076 75.0349 96.0407 74.8195 96.107 74.6207C96.1733 74.4219 96.2727 74.2563 96.4053 74.1072C96.5379 73.9581 96.687 73.8422 96.8693 73.7594C97.0516 73.6765 97.2504 73.6268 97.4824 73.6268C97.731 73.6268 97.9464 73.6765 98.1287 73.7759C98.3276 73.8753 98.4767 74.0078 98.6093 74.1735C98.7419 74.3391 98.8247 74.5379 98.891 74.7533C98.9407 74.9686 98.9573 75.2005 98.9407 75.4158H96.7201ZM98.2944 74.9686C98.2944 74.8692 98.2613 74.7532 98.2281 74.6539C98.195 74.5545 98.1453 74.4716 98.079 74.3888C98.0127 74.3226 97.9299 74.2563 97.847 74.2066C97.7476 74.1569 97.6481 74.1403 97.5321 74.1403C97.4161 74.1403 97.3001 74.1569 97.2007 74.2066C97.1013 74.2563 97.0184 74.306 96.9521 74.3723C96.8859 74.4385 96.8196 74.5379 96.7864 74.6373C96.7367 74.7367 96.7201 74.8361 96.7201 74.952H98.2944V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M101.195 75.7969C101.211 75.9957 101.294 76.1282 101.427 76.211C101.559 76.2938 101.709 76.327 101.891 76.327C101.957 76.327 102.023 76.327 102.106 76.3104C102.189 76.2938 102.272 76.2773 102.338 76.2607C102.405 76.2276 102.471 76.1944 102.521 76.1448C102.57 76.0951 102.587 76.0288 102.587 75.9294C102.587 75.8466 102.554 75.7638 102.487 75.7141C102.421 75.6644 102.355 75.6147 102.255 75.5815C102.156 75.5484 102.057 75.5153 101.941 75.4987C101.825 75.4822 101.709 75.449 101.576 75.4159C101.443 75.3828 101.327 75.3496 101.211 75.3165C101.095 75.2834 100.996 75.2171 100.897 75.1509C100.797 75.0846 100.731 75.0018 100.681 74.8858C100.631 74.7864 100.598 74.6539 100.598 74.4883C100.598 74.3226 100.631 74.1901 100.714 74.0741C100.797 73.9582 100.897 73.8754 101.029 73.7925C101.162 73.7263 101.294 73.6766 101.443 73.6434C101.593 73.6103 101.742 73.5938 101.874 73.5938C102.04 73.5938 102.189 73.6103 102.322 73.6434C102.471 73.6766 102.603 73.7263 102.719 73.8091C102.835 73.8919 102.935 73.9747 103.018 74.1073C103.101 74.2232 103.15 74.3723 103.167 74.5379H102.454C102.421 74.3723 102.355 74.2729 102.239 74.2067C102.123 74.157 101.99 74.1238 101.841 74.1238C101.791 74.1238 101.742 74.1238 101.675 74.1404C101.609 74.1404 101.543 74.157 101.493 74.1901C101.443 74.2066 101.394 74.2398 101.344 74.2895C101.311 74.3392 101.278 74.3889 101.278 74.4551C101.278 74.5379 101.311 74.6042 101.361 74.6539C101.41 74.7036 101.493 74.7533 101.593 74.7864C101.692 74.8196 101.791 74.8527 101.907 74.8692C102.023 74.8858 102.156 74.9189 102.272 74.9521C102.388 74.9852 102.521 75.0183 102.637 75.0515C102.753 75.0846 102.869 75.1509 102.951 75.2171C103.051 75.2834 103.117 75.3662 103.183 75.4656C103.233 75.565 103.266 75.6975 103.266 75.8466C103.266 76.0288 103.217 76.1779 103.134 76.3104C103.051 76.4429 102.935 76.5423 102.802 76.6251C102.67 76.708 102.521 76.7577 102.355 76.7908C102.189 76.8239 102.023 76.8405 101.874 76.8405C101.675 76.8405 101.493 76.8239 101.344 76.7742C101.178 76.7245 101.029 76.6583 100.913 76.5754C100.797 76.4926 100.698 76.3767 100.631 76.2441C100.565 76.1116 100.532 75.946 100.515 75.7638H101.195V75.7969Z" fill="#A6B5CB"/>
                                        <path d="M107.806 72.5336H108.486V74.1072H108.502C108.585 73.9747 108.718 73.8588 108.867 73.7594C109.033 73.66 109.215 73.6269 109.414 73.6269C109.745 73.6269 110.01 73.7097 110.209 73.8919C110.408 74.0741 110.508 74.3226 110.508 74.6705V76.7742H109.828V74.8361C109.828 74.5876 109.762 74.422 109.679 74.306C109.58 74.1901 109.43 74.1404 109.232 74.1404C109.116 74.1404 109.016 74.1569 108.917 74.2066C108.817 74.2563 108.751 74.306 108.685 74.3723C108.618 74.4385 108.569 74.5379 108.536 74.6373C108.502 74.7367 108.486 74.8361 108.486 74.9521V76.7576H107.806V72.5336Z" fill="#A6B5CB"/>
                                        <path d="M112.944 75.4158C112.944 75.5318 112.961 75.6478 112.994 75.7637C113.027 75.8797 113.077 75.9791 113.143 76.0619C113.209 76.1447 113.292 76.211 113.391 76.2607C113.491 76.3104 113.623 76.3269 113.756 76.3269C113.955 76.3269 114.121 76.2772 114.237 76.1944C114.353 76.1116 114.452 75.9791 114.502 75.8134H115.148C115.115 75.9791 115.049 76.1281 114.966 76.2607C114.883 76.3932 114.767 76.5091 114.651 76.592C114.535 76.6748 114.386 76.741 114.237 76.7907C114.087 76.8404 113.922 76.857 113.756 76.857C113.507 76.857 113.292 76.8239 113.11 76.741C112.927 76.6582 112.762 76.5588 112.629 76.4097C112.497 76.2607 112.397 76.095 112.331 75.8962C112.265 75.6975 112.231 75.4821 112.231 75.2502C112.231 75.0349 112.265 74.8195 112.331 74.6207C112.397 74.4219 112.497 74.2563 112.629 74.1072C112.762 73.9581 112.911 73.8422 113.093 73.7594C113.275 73.6765 113.474 73.6268 113.706 73.6268C113.955 73.6268 114.17 73.6765 114.353 73.7759C114.551 73.8753 114.701 74.0078 114.833 74.1735C114.966 74.3391 115.049 74.5379 115.115 74.7533C115.165 74.9686 115.181 75.2005 115.165 75.4158H112.944ZM114.518 74.9686C114.518 74.8692 114.485 74.7532 114.452 74.6539C114.419 74.5545 114.369 74.4716 114.303 74.3888C114.237 74.3226 114.154 74.2563 114.071 74.2066C113.971 74.1569 113.872 74.1403 113.756 74.1403C113.64 74.1403 113.524 74.1569 113.425 74.2066C113.325 74.2563 113.242 74.306 113.176 74.3723C113.11 74.4385 113.043 74.5379 113.01 74.6373C112.961 74.7367 112.944 74.8361 112.944 74.952H114.518V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M116.904 73.7097H117.534V74.3061H117.55C117.567 74.2233 117.617 74.1404 117.666 74.0576C117.716 73.9748 117.799 73.9085 117.882 73.8423C117.965 73.776 118.047 73.7263 118.147 73.6766C118.246 73.6435 118.346 73.6104 118.445 73.6104C118.528 73.6104 118.578 73.6104 118.611 73.6104C118.644 73.6104 118.677 73.6104 118.71 73.6269V74.2729C118.661 74.2729 118.611 74.2564 118.561 74.2564C118.511 74.2564 118.462 74.2398 118.412 74.2398C118.296 74.2398 118.197 74.2564 118.081 74.3061C117.981 74.3558 117.898 74.422 117.815 74.5049C117.733 74.5877 117.683 74.7036 117.633 74.8362C117.583 74.9687 117.567 75.1178 117.567 75.2834V76.7411H116.887V73.7097H116.904Z" fill="#A6B5CB"/>
                                        <path d="M120.616 75.4158C120.616 75.5318 120.633 75.6478 120.666 75.7637C120.699 75.8797 120.749 75.9791 120.815 76.0619C120.882 76.1447 120.964 76.211 121.064 76.2607C121.163 76.3104 121.296 76.3269 121.428 76.3269C121.627 76.3269 121.793 76.2772 121.909 76.1944C122.025 76.1116 122.124 75.9791 122.174 75.8134H122.82C122.787 75.9791 122.721 76.1281 122.638 76.2607C122.555 76.3932 122.439 76.5091 122.323 76.592C122.207 76.6748 122.058 76.741 121.909 76.7907C121.76 76.8404 121.594 76.857 121.428 76.857C121.18 76.857 120.964 76.8239 120.782 76.741C120.6 76.6582 120.434 76.5588 120.302 76.4097C120.169 76.2607 120.07 76.095 120.003 75.8962C119.937 75.6975 119.904 75.4821 119.904 75.2502C119.904 75.0349 119.937 74.8195 120.003 74.6207C120.07 74.4219 120.169 74.2563 120.302 74.1072C120.434 73.9581 120.583 73.8422 120.766 73.7594C120.948 73.6765 121.147 73.6268 121.379 73.6268C121.627 73.6268 121.843 73.6765 122.025 73.7759C122.224 73.8753 122.373 74.0078 122.506 74.1735C122.638 74.3391 122.721 74.5379 122.787 74.7533C122.837 74.9686 122.854 75.2005 122.837 75.4158H120.616ZM122.207 74.9686C122.207 74.8692 122.174 74.7532 122.141 74.6539C122.108 74.5545 122.058 74.4716 121.992 74.3888C121.926 74.3226 121.843 74.2563 121.76 74.2066C121.66 74.1569 121.561 74.1403 121.445 74.1403C121.329 74.1403 121.213 74.1569 121.114 74.2066C121.014 74.2563 120.931 74.306 120.865 74.3723C120.799 74.4385 120.732 74.5379 120.699 74.6373C120.65 74.7367 120.633 74.8361 120.633 74.952H122.207V74.9686Z" fill="#A6B5CB"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_123">
                                        <rect width="116" height="76" fill="white" transform="translate(22 2)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M65.9719 53.3831L64.1897 50.3279L50.3565 26.3531H46.877L62.45 53.3831H65.9719Z" fill="#A6B5CB"/>
                                        <path d="M79.9319 53.3831L78.1921 50.3279L76.4524 47.3152L74.6702 44.3024L72.9304 41.2897L71.1906 38.2345L64.3164 26.3531H60.8369L69.4509 41.2897L71.1906 44.3024L72.9304 47.3152L74.6702 50.3279L76.4524 53.3831H76.4099H76.4524H79.9319Z" fill="#A6B5CB"/>
                                        <path d="M85.1507 50.3279L83.4109 47.3152L81.6711 44.3024L79.9314 41.2897L78.1916 38.2345L76.4519 35.2217L74.6697 32.2089L71.3174 26.3531H67.8379L72.9299 35.2217L76.4519 41.2897L78.1916 44.3024L79.9314 47.3152L81.6711 50.3279L83.4109 53.3831H86.8904H86.9329H86.8904L85.1507 50.3279Z" fill="#A6B5CB"/>
                                        <path d="M92.7041 7.04602H89.1821L76.4521 29.1538L78.1919 32.1665L92.7041 7.04602Z" fill="#A6B5CB"/>
                                        <path d="M69.4504 53.3831H72.9299L71.1902 50.3279L69.4504 47.3152L67.7106 44.3024L57.3569 26.3531H53.835L65.9709 47.3152L67.7106 50.3279L69.4504 53.3831Z" fill="#A6B5CB"/>
                                        <path d="M81.6717 38.192L99.6634 7.04602H96.1838L79.9319 35.1793L79.9743 35.2217L81.6717 38.192Z" fill="#A6B5CB"/>
                                        <path d="M85.1939 44.26L106.665 7.04602H103.186L83.4541 41.2472V41.2897L85.1939 44.26Z" fill="#A6B5CB"/>
                                        <path d="M113.667 7.04602H110.145L86.9336 47.2728V47.3152L88.6734 50.3279L113.667 7.04602Z" fill="#A6B5CB"/>
                                        <path d="M49.0828 65.9861C48.7433 66.2831 48.2766 66.4953 47.7674 66.4953C46.7065 66.4953 45.8154 65.6466 45.8154 64.5434C45.8154 63.4825 46.7065 62.5914 47.7674 62.5914C48.2766 62.5914 48.7433 62.8036 49.0828 63.1006L50.0163 62.1671C49.4223 61.6155 48.6585 61.276 47.7674 61.276C45.9852 61.276 44.5 62.7187 44.5 64.5434C44.5 66.368 45.9427 67.8107 47.7674 67.8107C48.616 67.8107 49.4223 67.4713 50.0163 66.9196L49.0828 65.9861Z" fill="#A6B5CB"/>
                                        <path d="M58.5879 61.3184C56.8057 61.3184 55.3206 62.7611 55.3206 64.5857C55.3206 66.4103 56.7633 67.8531 58.5879 67.8531C60.3701 67.8531 61.8553 66.4103 61.8553 64.5857C61.8553 62.7611 60.4125 61.3184 58.5879 61.3184ZM58.5879 66.5377C57.5271 66.5377 56.636 65.6466 56.636 64.5857C56.636 63.5249 57.5271 62.6338 58.5879 62.6338C59.6487 62.6338 60.5398 63.5249 60.5398 64.5857C60.5398 65.6466 59.6912 66.5377 58.5879 66.5377Z" fill="#A6B5CB"/>
                                        <path d="M70.8936 66.0709L68.9841 61.3184H67.6262V67.8106H68.8992V64.5857L70.2147 67.8106H71.615L72.9304 64.5857V67.8106H74.2034V61.3184H72.8031L70.8936 66.0709Z" fill="#A6B5CB"/>
                                        <path d="M81.7992 61.3184H79.9746V67.8106H81.29V65.2222H81.8417C82.9025 65.2222 83.7936 64.3311 83.7936 63.2703C83.7512 62.2095 82.8601 61.3184 81.7992 61.3184ZM81.7992 63.9068H81.29V62.5914H81.7992C82.1387 62.5914 82.4357 62.8884 82.4357 63.2279C82.4357 63.6098 82.1387 63.9068 81.7992 63.9068Z" fill="#A6B5CB"/>
                                        <path d="M90.9647 61.3184L88.6309 67.8106H90.0312L90.7101 65.986H92.7045L93.3834 67.8106H94.7837L92.4499 61.3184H90.9647ZM91.1344 64.713L91.6436 63.2279L92.1953 64.713H91.1344Z" fill="#A6B5CB"/>
                                        <path d="M105.731 61.3184H104.416V65.6466L101.827 61.3184H100.3V67.8106H101.573V63.4825L104.204 67.8106H105.731V61.3184Z" fill="#A6B5CB"/>
                                        <path d="M114.302 67.8106V64.713L115.999 61.3184H114.557L113.623 63.1006L112.732 61.3184H111.289L112.987 64.713V67.8106H114.302Z" fill="#A6B5CB"/>
                                        <path d="M44.5 70.9932H45.2638V73.3695H45.6881V70.9932H46.4519V70.6113H44.5V70.9932Z" fill="#A6B5CB"/>
                                        <path d="M49.5064 70.6113L48.488 73.3695H48.9124L49.1245 72.733H50.1854L50.3975 73.3695H50.8219L49.8035 70.6113H49.5064ZM49.2518 72.3935L49.6337 71.2054L50.0156 72.3935H49.2518Z" fill="#A6B5CB"/>
                                        <path d="M54.3019 72.2237H54.8535V72.351C54.8535 72.5207 54.8111 72.648 54.6838 72.7753C54.5989 72.9026 54.4292 72.9451 54.3019 72.9451C54.217 72.9451 54.1321 72.9451 54.0473 72.9027C53.9624 72.8602 53.92 72.8178 53.8775 72.7753C53.8351 72.7329 53.7926 72.648 53.7502 72.5632C53.7502 72.4783 53.7078 72.2661 53.7078 72.0115C53.7078 71.7569 53.7078 71.5448 53.7502 71.4599C53.7502 71.375 53.7927 71.2902 53.8775 71.2477C53.92 71.2053 53.9624 71.1629 54.0473 71.1205C54.1321 71.078 54.217 71.078 54.3019 71.078C54.4292 71.078 54.5565 71.1205 54.6413 71.2053C54.7262 71.2902 54.811 71.3751 54.811 71.5024H55.2354C55.1929 71.2902 55.0657 71.078 54.9384 70.9083C54.7686 70.7386 54.5565 70.6537 54.3019 70.6537C54.0897 70.6537 53.9199 70.6961 53.7502 70.8234C53.6229 70.9083 53.4956 71.0356 53.4108 71.1629C53.3683 71.2478 53.3259 71.3326 53.3259 71.4175C53.3259 71.5448 53.2834 71.757 53.2834 72.054C53.2834 72.351 53.2834 72.5632 53.3259 72.6905C53.3259 72.7329 53.3683 72.8178 53.3683 72.8178C53.3683 72.8602 53.4108 72.9026 53.4108 72.9451C53.4956 73.0724 53.5805 73.1997 53.7502 73.2845C53.8775 73.3694 54.0897 73.4543 54.3019 73.4543C54.5989 73.4543 54.811 73.3694 54.9808 73.1572C55.1505 72.9875 55.2778 72.7329 55.2778 72.4783V71.9267H54.3019V72.2237Z" fill="#A6B5CB"/>
                                        <path d="M58.5034 70.6113H58.0791V73.3695H59.8613V72.9876H58.5034V70.6113Z" fill="#A6B5CB"/>
                                        <path d="M63.0015 70.6113H62.5771V73.3695H63.0015V70.6113Z" fill="#A6B5CB"/>
                                        <path d="M67.5406 72.5633L66.2677 70.6113H65.8857V73.3695H66.3101V71.4176L67.5406 73.3695H67.965V70.6113H67.5406V72.5633Z" fill="#A6B5CB"/>
                                        <path d="M70.8518 73.3695H72.634V72.9876H71.2761V72.1814H72.4218V71.7995H71.2761V70.9932H72.634V70.6113H70.8518V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M79.4647 72.2236H80.0163V72.3509C80.0163 72.5206 79.9739 72.6479 79.8466 72.7752C79.7617 72.9025 79.592 72.945 79.4647 72.945C79.3798 72.945 79.295 72.945 79.2101 72.9025C79.1252 72.8601 79.0828 72.8177 79.0404 72.7752C78.9979 72.7328 78.9555 72.6479 78.9131 72.5631C78.9131 72.4782 78.8706 72.266 78.8706 72.0114C78.8706 71.7568 78.8706 71.5447 78.9131 71.4598C78.9131 71.3749 78.9555 71.2901 79.0404 71.2476C79.0828 71.2052 79.1252 71.1628 79.2101 71.1203C79.295 71.0779 79.3798 71.0779 79.4647 71.0779C79.592 71.0779 79.7193 71.1203 79.8042 71.2052C79.889 71.2901 79.9739 71.3749 79.9739 71.5022H80.3982C80.3558 71.2901 80.2285 71.0779 80.1012 70.9082C79.9315 70.7384 79.7193 70.6536 79.4647 70.6536C79.2525 70.6536 79.0828 70.696 78.9131 70.8233C78.7858 70.9082 78.6585 71.0355 78.5736 71.1628C78.5312 71.2476 78.4887 71.3325 78.4887 71.4174C78.4887 71.5447 78.4463 71.7568 78.4463 72.0539C78.4463 72.3509 78.4463 72.5631 78.4887 72.6904C78.4887 72.7328 78.5312 72.8177 78.5312 72.8177C78.5312 72.8601 78.5736 72.9025 78.5736 72.945C78.6585 73.0723 78.7433 73.1996 78.9131 73.2844C79.0404 73.3693 79.2525 73.4542 79.4647 73.4542C79.7617 73.4542 79.9739 73.3693 80.1436 73.1571C80.3134 72.9874 80.4407 72.7328 80.4407 72.4782V71.9266H79.4647V72.2236Z" fill="#A6B5CB"/>
                                        <path d="M85.0245 71.0774C84.9397 70.9501 84.8548 70.8228 84.7275 70.738C84.6002 70.6531 84.388 70.5682 84.1759 70.5682C83.9637 70.5682 83.794 70.6107 83.6242 70.738C83.4969 70.8228 83.3696 70.9501 83.2848 71.0774C83.2423 71.1623 83.1999 71.2472 83.1999 71.332C83.1999 71.4593 83.1575 71.6715 83.1575 71.9685C83.1575 72.2656 83.1575 72.4777 83.1999 72.605C83.1999 72.6475 83.2423 72.7323 83.2423 72.7323C83.2423 72.7748 83.2848 72.8172 83.2848 72.8596C83.3696 72.9869 83.4545 73.1142 83.6242 73.1991C83.7515 73.284 83.9637 73.3688 84.1759 73.3688C84.388 73.3688 84.5578 73.3264 84.7275 73.1991C84.8548 73.1142 84.9821 72.9869 85.0245 72.8596C85.067 72.7748 85.1094 72.6899 85.1094 72.605C85.1094 72.4777 85.1518 72.2656 85.1518 71.9685C85.1518 71.6291 85.1518 71.4169 85.1094 71.332C85.1094 71.2472 85.067 71.1623 85.0245 71.0774ZM84.6851 72.5202C84.6851 72.605 84.6426 72.6899 84.5578 72.7323C84.5153 72.7748 84.4729 72.8172 84.388 72.8596C84.3032 72.9021 84.2183 72.9021 84.1334 72.9021C84.0486 72.9021 83.9637 72.9021 83.8788 72.8596C83.794 72.8172 83.7515 72.7748 83.7091 72.7323C83.6667 72.6899 83.6242 72.605 83.5818 72.5202C83.5818 72.4353 83.5394 72.2231 83.5394 71.9685C83.5394 71.7139 83.5394 71.5018 83.5818 71.4169C83.5818 71.332 83.6242 71.2472 83.7091 71.2047C83.7515 71.1623 83.794 71.1199 83.8788 71.0774C83.9637 71.035 84.0486 71.035 84.1334 71.035C84.2183 71.035 84.3032 71.0774 84.388 71.0774C84.4729 71.1199 84.5153 71.1623 84.5578 71.2047C84.6002 71.2472 84.6426 71.332 84.6851 71.4169C84.6851 71.5018 84.7275 71.7139 84.7275 71.9685C84.7275 72.2656 84.7275 72.4353 84.6851 72.5202Z" fill="#A6B5CB"/>
                                        <path d="M87.9509 73.3695H89.7331V72.9876H88.3753V72.1814H89.521V71.7995H88.3753V70.9932H89.7331V70.6113H87.9509V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M93.4679 71.7995C93.3406 71.7995 93.2133 71.757 93.1708 71.757C93.0435 71.7146 92.9162 71.6722 92.8738 71.6297C92.8314 71.5449 92.789 71.5024 92.789 71.4176C92.789 71.2903 92.8314 71.2054 92.9163 71.1205C93.0011 71.0357 93.1284 71.0357 93.2557 71.0357C93.5103 71.0357 93.7225 71.1205 93.9346 71.2478L94.1468 70.9084C93.8922 70.7386 93.5952 70.6113 93.2557 70.6113C92.9587 70.6113 92.7465 70.6962 92.5768 70.8235C92.4071 70.9508 92.3222 71.163 92.3222 71.4176C92.3222 71.6297 92.407 71.7995 92.5343 71.9268C92.6616 72.0541 92.8314 72.1389 93.086 72.1814C93.2133 72.1814 93.3406 72.2238 93.4679 72.2238C93.7225 72.2662 93.8498 72.3935 93.8073 72.6057C93.8073 72.8603 93.6376 72.9876 93.2557 72.9876C92.9587 72.9876 92.7041 72.9027 92.4919 72.733L92.2373 73.03C92.5343 73.2846 92.8738 73.4119 93.2981 73.4119C93.9346 73.4119 94.2317 73.1573 94.2741 72.6057C94.2741 72.3935 94.2317 72.2238 94.1044 72.0965C93.9346 71.9268 93.7225 71.8419 93.4679 71.7995Z" fill="#A6B5CB"/>
                                        <path d="M101.742 71.7995H100.639V70.6113H100.257V73.3695H100.639V72.1814H101.742V73.3695H102.166V70.6113H101.742V71.7995Z" fill="#A6B5CB"/>
                                        <path d="M105.095 73.3695H106.834V72.9876H105.477V72.1814H106.622V71.7995H105.477V70.9932H106.834V70.6113H105.095V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M111.459 71.3751C111.459 71.1205 111.374 70.9084 111.204 70.7811C111.077 70.6538 110.865 70.6113 110.653 70.6113H109.592V73.3695H110.016V72.1814H110.568L111.12 73.3695H111.629L110.992 72.1389C111.289 72.0116 111.459 71.757 111.459 71.3751ZM109.974 71.7995V70.9508H110.61C110.738 70.9508 110.865 70.9932 110.907 71.0357C110.992 71.1205 111.035 71.2054 111.035 71.3327C111.035 71.46 110.992 71.5449 110.907 71.6297C110.823 71.7146 110.695 71.757 110.568 71.757H109.974V71.7995Z" fill="#A6B5CB"/>
                                        <path d="M114.218 73.3695H116V72.9876H114.642V72.1814H115.788V71.7995H114.642V70.9932H116V70.6113H114.218V73.3695Z" fill="#A6B5CB"/>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_13437)">
                                        <mask id="mask0_13437" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="-16" y="-56" width="194" height="193">
                                        <path d="M177.063 -55.9742H-15.0625V136.151H177.063V-55.9742Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0_13437)">
                                        <path d="M24.4882 41.5131H8.99902V57.0022H24.4882V41.5131Z" fill="#A6B5CB"/>
                                        <path d="M16.6457 35.9991C20.7287 35.9991 24.0387 32.6892 24.0387 28.6061C24.0387 24.5231 20.7287 21.2131 16.6457 21.2131C12.5626 21.2131 9.25269 24.5231 9.25269 28.6061C9.25269 32.6892 12.5626 35.9991 16.6457 35.9991Z" fill="#A6B5CB"/>
                                        <path d="M36.6193 21.1824H31.1553V57.3096H36.6193V21.1824Z" fill="#E3E3E3"/>
                                        <path d="M24.4882 41.5131L8.99902 57.0022H24.4882V41.5131Z" fill="#E3E3E3"/>
                                        <path d="M47.2675 38.9302H44.9447V27.0165C44.9447 25.3014 45.4942 23.9028 46.5932 22.8205C47.7088 21.7382 49.0825 21.197 50.7143 21.197C52.5126 21.197 53.8613 21.6549 54.7604 22.5707C55.6762 23.4698 56.1341 24.5771 56.1341 25.8925C56.1341 27.5743 55.3515 28.7815 53.7864 29.5141V29.614C55.9343 30.2301 57.0083 31.7204 57.0083 34.0848C57.0083 37.315 55.1018 38.9302 51.2887 38.9302H48.1667V36.7323H51.2638C52.4127 36.7323 53.2535 36.4991 53.7864 36.0329C54.3192 35.5667 54.5856 34.8174 54.5856 33.7851C54.5856 32.8859 54.2942 32.1949 53.7114 31.712C53.1453 31.2291 52.371 30.9877 51.3886 30.9877H48.916V28.9147H50.5145C51.4136 28.9147 52.1796 28.6732 52.8123 28.1904C53.4617 27.6908 53.7864 27.0248 53.7864 26.1923C53.7864 25.393 53.5366 24.727 53.0371 24.1942C52.5542 23.6613 51.7633 23.3949 50.6643 23.3949C49.6653 23.3949 48.8494 23.7113 48.2166 24.344C47.5839 24.9601 47.2675 25.8676 47.2675 27.0664V38.9302ZM66.2938 31.8869V34.1347C65.6611 33.6519 64.8868 33.4104 63.971 33.4104C63.1884 33.4104 62.5807 33.5686 62.1478 33.885C61.7148 34.1847 61.4984 34.6176 61.4984 35.1837C61.4984 36.2827 62.3143 36.8322 63.9461 36.8322H67.2429V32.0617C67.2429 30.0469 66.2605 29.0396 64.2957 29.0396H60.2995V26.9416H64.4206C66.0357 26.9416 67.2762 27.3412 68.1421 28.1404C69.0079 28.9397 69.4408 30.0886 69.4408 31.5871V38.9302H63.8711C62.4558 38.9302 61.3319 38.6138 60.4993 37.9811C59.6668 37.3483 59.2505 36.4242 59.2505 35.2087C59.2505 33.9932 59.6918 33.0691 60.5743 32.4363C61.4567 31.8036 62.564 31.4872 63.8961 31.4872C64.6454 31.4872 65.4446 31.6204 66.2938 31.8869ZM82.127 38.9302H77.8061C75.9579 38.9302 74.6342 38.6554 73.8349 38.106C73.1189 37.6231 72.661 37.0486 72.4612 36.3826C72.2781 35.6999 72.1865 34.8091 72.1865 33.7101V26.9416H74.3844V33.6852C74.3844 33.9849 74.3927 34.243 74.4094 34.4594C74.426 34.6592 74.4843 34.9256 74.5842 35.2587C74.6841 35.575 74.8256 35.8414 75.0088 36.0579C75.192 36.2577 75.4584 36.4409 75.808 36.6074C76.1577 36.7572 76.5823 36.8322 77.0818 36.8322H79.9291V26.9416H82.127V38.9302ZM87.4579 21.4468V26.9416H89.5809C91.4292 26.9416 92.7529 27.2163 93.5521 27.7658C94.2681 28.2486 94.7177 28.8314 94.9009 29.5141C95.1007 30.1801 95.2006 31.0626 95.2006 32.1616V38.9302H93.0027V32.1866C93.0027 31.8869 92.9943 31.6371 92.9777 31.4373C92.961 31.2208 92.9028 30.9544 92.8028 30.638C92.7029 30.305 92.5614 30.0386 92.3783 29.8388C92.1951 29.6223 91.9287 29.4392 91.579 29.2893C91.2293 29.1228 90.8047 29.0396 90.3052 29.0396H87.4579V38.9302H85.26V21.4468H87.4579ZM99.5609 28.5151C100.726 27.2995 102.183 26.6918 103.932 26.6918C104.781 26.6918 105.572 26.8583 106.304 27.1913C107.054 27.5077 107.703 27.9489 108.253 28.5151C108.819 29.0812 109.26 29.7472 109.576 30.5132C109.893 31.2625 110.051 32.07 110.051 32.9359C110.051 33.8017 109.893 34.6176 109.576 35.3835C109.277 36.1328 108.852 36.7905 108.303 37.3567C107.753 37.9228 107.104 38.3724 106.354 38.7054C105.605 39.0218 104.798 39.1799 103.932 39.1799C103.049 39.1799 102.233 39.0218 101.484 38.7054C100.751 38.3724 100.11 37.9228 99.5609 37.3567C99.0114 36.7905 98.5785 36.1328 98.2621 35.3835C97.9624 34.6176 97.8125 33.8017 97.8125 32.9359C97.8125 31.1709 98.3953 29.6973 99.5609 28.5151ZM103.932 28.7898C102.766 28.7898 101.825 29.1728 101.109 29.9387C100.41 30.7046 100.06 31.7037 100.06 32.9359C100.06 34.168 100.41 35.1671 101.109 35.933C101.825 36.699 102.766 37.0819 103.932 37.0819C105.114 37.0819 106.055 36.699 106.754 35.933C107.453 35.1504 107.803 34.1514 107.803 32.9359C107.803 31.7204 107.453 30.7296 106.754 29.9637C106.055 29.1811 105.114 28.7898 103.932 28.7898ZM122.616 38.9302H118.295C116.447 38.9302 115.123 38.6554 114.324 38.106C113.608 37.6231 113.15 37.0486 112.95 36.3826C112.767 35.6999 112.675 34.8091 112.675 33.7101V26.9416H114.873V33.6852C114.873 33.9849 114.882 34.243 114.898 34.4594C114.915 34.6592 114.973 34.9256 115.073 35.2587C115.173 35.575 115.315 35.8414 115.498 36.0579C115.681 36.2577 115.947 36.4409 116.297 36.6074C116.647 36.7572 117.071 36.8322 117.571 36.8322H120.418V26.9416H122.616V38.9302ZM134.066 26.9416V29.0396H129.645C129.162 29.0396 128.746 29.1311 128.396 29.3143C128.047 29.4975 127.872 29.7555 127.872 30.0886C127.872 30.2884 127.914 30.4715 127.997 30.638C128.08 30.7879 128.172 30.9128 128.272 31.0127C128.388 31.1126 128.555 31.2208 128.771 31.3374C129.004 31.4373 129.179 31.5122 129.296 31.5622C129.429 31.5955 129.962 31.762 130.894 32.0617C131.826 32.3614 132.518 32.6112 132.967 32.811C133.417 33.0108 133.758 33.2855 133.991 33.6352C134.241 33.9682 134.399 34.3012 134.466 34.6343C134.532 34.9506 134.566 35.267 134.566 35.5834C134.566 37.8146 133.034 38.9302 129.97 38.9302H125.649V36.8322H129.97C131.535 36.8322 132.318 36.4159 132.318 35.5834C132.318 35.1837 132.085 34.8507 131.618 34.5843C131.169 34.3179 130.611 34.0931 129.945 33.9099C129.296 33.7268 128.638 33.5186 127.972 33.2855C127.322 33.0358 126.765 32.6445 126.298 32.1116C125.849 31.5622 125.624 30.8878 125.624 30.0886C125.624 29.0729 126.015 28.2986 126.798 27.7658C127.581 27.2163 128.53 26.9416 129.645 26.9416H134.066ZM142.936 26.6918C145.766 26.8083 147.182 27.9822 147.182 30.2134C147.182 32.9941 145.358 34.3845 141.712 34.3845H140.688V32.4613H141.887C143.002 32.4613 143.777 32.2948 144.21 31.9618C144.642 31.6121 144.859 31.0377 144.859 30.2384C144.859 29.7222 144.667 29.3393 144.284 29.0895C143.902 28.8231 143.41 28.6899 142.811 28.6899C141.629 28.6899 140.696 29.1062 140.014 29.9387C139.347 30.7713 139.014 31.7703 139.014 32.9359C139.014 34.168 139.372 35.1671 140.088 35.933C140.821 36.699 141.77 37.0819 142.936 37.0819C143.985 37.0819 144.842 36.8238 145.508 36.3077L147.007 37.7813C145.858 38.7137 144.501 39.1799 142.936 39.1799C141.038 39.1799 139.522 38.6221 138.39 37.5065C137.258 36.3909 136.692 34.9506 136.692 33.1856C136.692 31.2208 137.249 29.6307 138.365 28.4152C139.481 27.1996 141.004 26.6252 142.936 26.6918Z" fill="#A6B5CB"/>
                                        <path d="M58.5069 55.5962C58.3414 55.5962 58.2051 55.5427 58.0981 55.4356C57.991 55.3285 57.9374 55.1922 57.9374 55.0267V44.7619C57.9374 44.5964 57.991 44.4601 58.0981 44.353C58.2051 44.2459 58.3414 44.1924 58.5069 44.1924H61.2374C61.948 44.1924 62.5807 44.3433 63.1356 44.645C63.6905 44.9371 64.1236 45.3508 64.4351 45.8862C64.7564 46.4118 64.917 47.0202 64.917 47.7114C64.917 48.3733 64.7564 48.9622 64.4351 49.4782C64.1236 49.9941 63.6905 50.398 63.1356 50.6901C62.5807 50.9821 61.948 51.1281 61.2374 51.1281H59.0764V55.0267C59.0764 55.1922 59.0228 55.3285 58.9158 55.4356C58.8087 55.5427 58.6724 55.5962 58.5069 55.5962ZM64.6103 55.5962C64.4838 55.5962 64.3816 55.5719 64.3037 55.5232C64.2356 55.4745 64.1723 55.4015 64.1139 55.3042L61.3104 50.8361L62.4493 50.5441L65.063 54.7201C65.209 54.9537 65.2333 55.1581 65.136 55.3334C65.0484 55.5086 64.8732 55.5962 64.6103 55.5962ZM59.0764 50.033H61.2374C61.7338 50.033 62.1719 49.9357 62.5515 49.741C62.9409 49.5366 63.2475 49.2591 63.4714 48.9087C63.6953 48.5583 63.8073 48.1591 63.8073 47.7114C63.8073 47.2344 63.6953 46.8158 63.4714 46.4556C63.2475 46.0857 62.9409 45.7986 62.5515 45.5941C62.1719 45.3897 61.7338 45.2875 61.2374 45.2875H59.0764V50.033ZM67.533 55.5962C67.3676 55.5962 67.2313 55.5427 67.1242 55.4356C67.0171 55.3285 66.9636 55.1922 66.9636 55.0267V44.7619C66.9636 44.5964 67.0171 44.4601 67.1242 44.353C67.2313 44.2459 67.3676 44.1924 67.533 44.1924H74.3812C74.5369 44.1924 74.6683 44.2459 74.7754 44.353C74.8922 44.4504 74.9506 44.5818 74.9506 44.7473C74.9506 44.8933 74.8922 45.0198 74.7754 45.1269C74.6683 45.234 74.5369 45.2875 74.3812 45.2875H68.1025V49.3175H72.6728C72.8383 49.3175 72.9746 49.3711 73.0816 49.4782C73.1887 49.5852 73.2422 49.7166 73.2422 49.8724C73.2422 50.0281 73.1887 50.1596 73.0816 50.2666C72.9746 50.3737 72.8383 50.4273 72.6728 50.4273H68.1025V54.5011H74.3812C74.5369 54.5011 74.6683 54.5546 74.7754 54.6617C74.8922 54.7688 74.9506 54.8953 74.9506 55.0413C74.9506 55.2068 74.8922 55.3431 74.7754 55.4502C74.6683 55.5475 74.5369 55.5962 74.3812 55.5962H67.533ZM76.4456 55.5962C76.2217 55.5962 76.0611 55.5037 75.9637 55.3188C75.8664 55.1338 75.8566 54.9537 75.9345 54.7785L80.2274 44.5866C80.3344 44.3238 80.5194 44.1924 80.7822 44.1924C81.0353 44.1924 81.2154 44.3238 81.3225 44.5866L85.6299 54.7931C85.7175 54.9781 85.7029 55.1581 85.5861 55.3334C85.4791 55.5086 85.3233 55.5962 85.1189 55.5962C85.0021 55.5962 84.895 55.567 84.7976 55.5086C84.71 55.4502 84.637 55.3626 84.5786 55.2458L80.5632 45.5065H81.0158L76.9712 55.2458C76.9226 55.3626 76.8495 55.4502 76.7522 55.5086C76.6646 55.567 76.5624 55.5962 76.4456 55.5962ZM77.4093 52.8803L77.8473 51.902H83.7755L84.2136 52.8803H77.4093ZM87.9096 55.5962C87.7538 55.5962 87.6176 55.5427 87.5008 55.4356C87.3937 55.3285 87.3401 55.1922 87.3401 55.0267V44.7619C87.3401 44.6061 87.3937 44.4747 87.5008 44.3676C87.6176 44.2508 87.7538 44.1924 87.9096 44.1924C88.0653 44.1924 88.1968 44.2508 88.3038 44.3676C88.4206 44.4747 88.4791 44.6061 88.4791 44.7619V54.5157H94.1883C94.344 54.5157 94.4754 54.5692 94.5825 54.6763C94.6993 54.7736 94.7577 54.9002 94.7577 55.0559C94.7577 55.2117 94.6993 55.3431 94.5825 55.4502C94.4754 55.5475 94.344 55.5962 94.1883 55.5962H87.9096ZM101.427 55.5962C101.262 55.5962 101.126 55.5427 101.019 55.4356C100.911 55.3285 100.858 55.1922 100.858 55.0267V44.7619C100.858 44.5964 100.911 44.4601 101.019 44.353C101.126 44.2459 101.262 44.1924 101.427 44.1924H108.276C108.431 44.1924 108.563 44.2459 108.67 44.353C108.787 44.4504 108.845 44.5818 108.845 44.7473C108.845 44.8933 108.787 45.0198 108.67 45.1269C108.563 45.234 108.431 45.2875 108.276 45.2875H101.997V49.3175H106.567C106.733 49.3175 106.869 49.3711 106.976 49.4782C107.083 49.5852 107.137 49.7166 107.137 49.8724C107.137 50.0281 107.083 50.1596 106.976 50.2666C106.869 50.3737 106.733 50.4273 106.567 50.4273H101.997V54.5011H108.276C108.431 54.5011 108.563 54.5546 108.67 54.6617C108.787 54.7688 108.845 54.8953 108.845 55.0413C108.845 55.2068 108.787 55.3431 108.67 55.4502C108.563 55.5475 108.431 55.5962 108.276 55.5962H101.427ZM114.472 55.7422C113.849 55.7422 113.27 55.6546 112.735 55.4794C112.209 55.2944 111.751 55.0365 111.362 54.7055C110.973 54.3745 110.676 53.99 110.471 53.552C110.393 53.3962 110.389 53.2551 110.457 53.1285C110.535 52.9923 110.661 52.8998 110.836 52.8511C110.973 52.8122 111.104 52.8268 111.231 52.8949C111.367 52.963 111.469 53.0653 111.537 53.2015C111.683 53.4838 111.897 53.7369 112.18 53.9608C112.462 54.1847 112.798 54.3599 113.187 54.4865C113.577 54.6033 114.005 54.6617 114.472 54.6617C114.988 54.6617 115.446 54.579 115.845 54.4135C116.244 54.2382 116.555 53.99 116.779 53.6688C117.013 53.3378 117.13 52.9387 117.13 52.4715C117.13 51.8777 116.911 51.3666 116.473 50.9383C116.035 50.51 115.348 50.2374 114.414 50.1206C113.275 49.9843 112.384 49.6339 111.742 49.0693C111.099 48.495 110.778 47.7941 110.778 46.9667C110.778 46.3729 110.934 45.857 111.245 45.4189C111.566 44.9809 112.005 44.645 112.559 44.4114C113.114 44.1681 113.752 44.0464 114.472 44.0464C115.008 44.0464 115.494 44.134 115.932 44.3092C116.37 44.4747 116.75 44.6986 117.071 44.9809C117.402 45.2534 117.67 45.5552 117.874 45.8862C117.972 46.0419 118.001 46.1928 117.962 46.3388C117.933 46.4848 117.85 46.5968 117.714 46.6747C117.568 46.7428 117.417 46.7525 117.261 46.7039C117.115 46.6552 117.003 46.5627 116.925 46.4264C116.779 46.2025 116.594 45.9933 116.37 45.7986C116.156 45.5941 115.893 45.4335 115.582 45.3167C115.27 45.1999 114.896 45.1366 114.458 45.1269C113.689 45.1269 113.07 45.2924 112.603 45.6233C112.136 45.9446 111.902 46.4167 111.902 47.0397C111.902 47.3707 111.99 47.6773 112.165 47.9596C112.34 48.2322 112.628 48.4706 113.027 48.6751C113.435 48.8698 113.981 49.0158 114.662 49.1131C115.879 49.2883 116.779 49.6631 117.363 50.2374C117.957 50.802 118.254 51.5418 118.254 52.4569C118.254 52.9825 118.157 53.4498 117.962 53.8586C117.777 54.2675 117.509 54.613 117.159 54.8953C116.818 55.1679 116.414 55.3772 115.947 55.5232C115.489 55.6692 114.998 55.7422 114.472 55.7422ZM123.366 55.5962C123.21 55.5962 123.074 55.5427 122.957 55.4356C122.85 55.3188 122.796 55.1825 122.796 55.0267V44.1924H123.935V55.0267C123.935 55.1825 123.881 55.3188 123.774 55.4356C123.667 55.5427 123.531 55.5962 123.366 55.5962ZM119.336 45.2291C119.18 45.2291 119.053 45.1804 118.956 45.0831C118.859 44.9857 118.81 44.8641 118.81 44.7181C118.81 44.5623 118.859 44.4358 118.956 44.3384C119.053 44.2411 119.18 44.1924 119.336 44.1924H127.41C127.566 44.1924 127.692 44.2411 127.79 44.3384C127.887 44.4358 127.936 44.5623 127.936 44.7181C127.936 44.8641 127.887 44.9857 127.79 45.0831C127.692 45.1804 127.566 45.2291 127.41 45.2291H119.336ZM127.822 55.5962C127.598 55.5962 127.437 55.5037 127.34 55.3188C127.243 55.1338 127.233 54.9537 127.311 54.7785L131.604 44.5866C131.711 44.3238 131.896 44.1924 132.159 44.1924C132.412 44.1924 132.592 44.3238 132.699 44.5866L137.006 54.7931C137.094 54.9781 137.079 55.1581 136.962 55.3334C136.855 55.5086 136.7 55.5962 136.495 55.5962C136.378 55.5962 136.271 55.567 136.174 55.5086C136.086 55.4502 136.013 55.3626 135.955 55.2458L131.939 45.5065H132.392L128.348 55.2458C128.299 55.3626 128.226 55.4502 128.128 55.5086C128.041 55.567 127.939 55.5962 127.822 55.5962ZM128.786 52.8803L129.224 51.902H135.152L135.59 52.8803H128.786ZM140.862 55.5962C140.706 55.5962 140.57 55.5427 140.453 55.4356C140.346 55.3188 140.292 55.1825 140.292 55.0267V44.1924H141.431V55.0267C141.431 55.1825 141.378 55.3188 141.271 55.4356C141.163 55.5427 141.027 55.5962 140.862 55.5962ZM136.832 45.2291C136.676 45.2291 136.549 45.1804 136.452 45.0831C136.355 44.9857 136.306 44.8641 136.306 44.7181C136.306 44.5623 136.355 44.4358 136.452 44.3384C136.549 44.2411 136.676 44.1924 136.832 44.1924H144.906C145.062 44.1924 145.189 44.2411 145.286 44.3384C145.383 44.4358 145.432 44.5623 145.432 44.7181C145.432 44.8641 145.383 44.9857 145.286 45.0831C145.189 45.1804 145.062 45.2291 144.906 45.2291H136.832ZM147.685 55.5962C147.519 55.5962 147.383 55.5427 147.276 55.4356C147.169 55.3285 147.115 55.1922 147.115 55.0267V44.7619C147.115 44.5964 147.169 44.4601 147.276 44.353C147.383 44.2459 147.519 44.1924 147.685 44.1924H154.533C154.688 44.1924 154.82 44.2459 154.927 44.353C155.044 44.4504 155.102 44.5818 155.102 44.7473C155.102 44.8933 155.044 45.0198 154.927 45.1269C154.82 45.234 154.688 45.2875 154.533 45.2875H148.254V49.3175H152.824C152.99 49.3175 153.126 49.3711 153.233 49.4782C153.34 49.5852 153.394 49.7166 153.394 49.8724C153.394 50.0281 153.34 50.1596 153.233 50.2666C153.126 50.3737 152.99 50.4273 152.824 50.4273H148.254V54.5011H154.533C154.688 54.5011 154.82 54.5546 154.927 54.6617C155.044 54.7688 155.102 54.8953 155.102 55.0413C155.102 55.2068 155.044 55.3431 154.927 55.4502C154.82 55.5475 154.688 55.5962 154.533 55.5962H147.685Z" fill="#A6B5CB"/>
                                        </g>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_13437">
                                        <rect width="142.68" height="41.8449" fill="white" transform="translate(9 19.0002)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M61.672 7.87715C61.672 8.24829 61.562 8.6111 61.3558 8.9197C61.1496 9.22829 60.8565 9.46881 60.5136 9.61084C60.1707 9.75287 59.7934 9.79003 59.4294 9.71763C59.0654 9.64522 58.731 9.4665 58.4686 9.20406C58.2061 8.94162 58.0274 8.60725 57.955 8.24324C57.8826 7.87923 57.9198 7.50192 58.0618 7.15903C58.2038 6.81614 58.4443 6.52306 58.7529 6.31687C59.0615 6.11067 59.4243 6.00061 59.7955 6.00061C60.042 6.00024 60.2862 6.04852 60.514 6.1427C60.7419 6.23687 60.9489 6.37508 61.1232 6.5494C61.2976 6.72373 61.4358 6.93075 61.5299 7.15859C61.6241 7.38643 61.6724 7.63061 61.672 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M70.6085 7.87715C70.6085 8.24841 70.4984 8.61133 70.2921 8.91999C70.0858 9.22864 69.7925 9.46916 69.4495 9.61111C69.1064 9.75306 68.729 9.79005 68.3649 9.71742C68.0008 9.64478 67.6664 9.46578 67.4041 9.20305C67.1418 8.94033 66.9633 8.6057 66.8912 8.2415C66.8191 7.8773 66.8567 7.4999 66.9991 7.15706C67.1416 6.81422 67.3826 6.52134 67.6915 6.31549C68.0005 6.10963 68.3636 6.00005 68.7348 6.00061C68.9811 6.00061 69.225 6.04917 69.4525 6.14351C69.68 6.23785 69.8867 6.37612 70.0608 6.55041C70.2348 6.7247 70.3727 6.93159 70.4667 7.15924C70.5607 7.3869 70.6089 7.63085 70.6085 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M88.4845 7.87715C88.4845 8.24829 88.3745 8.6111 88.1683 8.9197C87.9621 9.22829 87.669 9.46881 87.3261 9.61084C86.9832 9.75287 86.6059 9.79003 86.2419 9.71763C85.8779 9.64522 85.5435 9.4665 85.2811 9.20406C85.0186 8.94162 84.8399 8.60725 84.7675 8.24324C84.6951 7.87923 84.7323 7.50192 84.8743 7.15903C85.0163 6.81614 85.2568 6.52306 85.5654 6.31687C85.874 6.11067 86.2368 6.00061 86.608 6.00061C86.8545 6.00024 87.0987 6.04852 87.3265 6.1427C87.5544 6.23687 87.7614 6.37508 87.9357 6.5494C88.1101 6.72373 88.2483 6.93075 88.3424 7.15859C88.4366 7.38643 88.4849 7.63061 88.4845 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M97.421 7.87715C97.421 8.24841 97.3109 8.61133 97.1046 8.91999C96.8983 9.22864 96.605 9.46916 96.262 9.61111C95.9189 9.75306 95.5415 9.79005 95.1774 9.71742C94.8133 9.64478 94.4789 9.46578 94.2166 9.20305C93.9543 8.94033 93.7758 8.6057 93.7037 8.2415C93.6316 7.8773 93.6692 7.4999 93.8116 7.15706C93.9541 6.81422 94.1951 6.52134 94.504 6.31549C94.813 6.10963 95.1761 6.00005 95.5473 6.00061C95.7936 6.00061 96.0375 6.04917 96.265 6.14351C96.4925 6.23785 96.6992 6.37612 96.8732 6.55041C97.0473 6.7247 97.1852 6.93159 97.2792 7.15924C97.3732 7.3869 97.4214 7.63085 97.421 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M61.672 16.8854C61.672 17.2566 61.562 17.6194 61.3558 17.928C61.1496 18.2366 60.8565 18.4771 60.5136 18.6191C60.1707 18.7612 59.7934 18.7983 59.4294 18.7259C59.0654 18.6535 58.731 18.4748 58.4686 18.2124C58.2061 17.9499 58.0274 17.6156 57.955 17.2515C57.8826 16.8875 57.9198 16.5102 58.0618 16.1673C58.2038 15.8244 58.4443 15.5314 58.7529 15.3252C59.0615 15.119 59.4243 15.0089 59.7955 15.0089C60.042 15.0085 60.2862 15.0568 60.514 15.151C60.7419 15.2452 60.9489 15.3834 61.1232 15.5577C61.2976 15.732 61.4358 15.939 61.5299 16.1669C61.6241 16.3947 61.6724 16.6389 61.672 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M70.6085 16.8854C70.6085 17.2567 70.4984 17.6196 70.2921 17.9283C70.0858 18.2369 69.7925 18.4775 69.4495 18.6194C69.1064 18.7614 68.729 18.7984 68.3649 18.7257C68.0008 18.6531 67.6664 18.4741 67.4041 18.2114C67.1418 17.9486 66.9633 17.614 66.8912 17.2498C66.8191 16.8856 66.8567 16.5082 66.9991 16.1654C67.1416 15.8225 67.3826 15.5296 67.6915 15.3238C68.0005 15.1179 68.3636 15.0084 68.7348 15.0089C68.9811 15.0089 69.225 15.0575 69.4525 15.1518C69.68 15.2462 69.8867 15.3844 70.0608 15.5587C70.2348 15.733 70.3727 15.9399 70.4667 16.1675C70.5607 16.3952 70.6089 16.6392 70.6085 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M97.421 16.8854C97.421 17.2567 97.3109 17.6196 97.1046 17.9283C96.8983 18.2369 96.605 18.4775 96.262 18.6194C95.9189 18.7614 95.5415 18.7984 95.1774 18.7257C94.8133 18.6531 94.4789 18.4741 94.2166 18.2114C93.9543 17.9486 93.7758 17.614 93.7037 17.2498C93.6316 16.8856 93.6692 16.5082 93.8116 16.1654C93.9541 15.8225 94.1951 15.5296 94.504 15.3238C94.813 15.1179 95.1761 15.0084 95.5473 15.0089C95.7936 15.0089 96.0375 15.0575 96.265 15.1518C96.4925 15.2462 96.6992 15.3844 96.8732 15.5587C97.0473 15.733 97.1852 15.9399 97.2792 16.1675C97.3732 16.3952 97.4214 16.6392 97.421 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M61.672 25.8944C61.672 26.2655 61.562 26.6283 61.3558 26.9369C61.1496 27.2455 60.8565 27.486 60.5136 27.6281C60.1707 27.7701 59.7934 27.8072 59.4294 27.7348C59.0654 27.6624 58.731 27.4837 58.4686 27.2213C58.2061 26.9588 58.0274 26.6245 57.955 26.2605C57.8826 25.8964 57.9198 25.5191 58.0618 25.1762C58.2038 24.8333 58.4443 24.5403 58.7529 24.3341C59.0615 24.1279 59.4243 24.0178 59.7955 24.0178C60.042 24.0175 60.2862 24.0657 60.514 24.1599C60.7419 24.2541 60.9489 24.3923 61.1232 24.5666C61.2976 24.7409 61.4358 24.948 61.5299 25.1758C61.6241 25.4036 61.6724 25.6478 61.672 25.8944Z" fill="#E3E3E3"/>
                                        <path d="M60.3102 34.9028H59.2812V43.9113H60.3102V34.9028Z" fill="#A6B5CB"/>
                                        <path d="M69.2487 25.894H68.2197V43.9111H69.2487V25.894Z" fill="#A6B5CB"/>
                                        <path d="M78.1852 7.87695H77.1562V43.9138H78.1852V7.87695Z" fill="#A6B5CB"/>
                                        <path d="M87.1235 16.8857H86.0945V43.9113H87.1235V16.8857Z" fill="#A6B5CB"/>
                                        <path d="M96.0641 25.894H95.0352V43.9111H96.0641V25.894Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 16.8854C75.7969 17.2566 75.9069 17.6194 76.1131 17.928C76.3193 18.2366 76.6124 18.4771 76.9553 18.6191C77.2982 18.7612 77.6755 18.7983 78.0395 18.7259C78.4035 18.6535 78.7379 18.4748 79.0003 18.2124C79.2628 17.9499 79.4415 17.6156 79.5139 17.2515C79.5863 16.8875 79.5491 16.5102 79.4071 16.1673C79.2651 15.8244 79.0246 15.5314 78.716 15.3252C78.4074 15.119 78.0446 15.0089 77.6734 15.0089C77.4269 15.0085 77.1827 15.0568 76.9549 15.151C76.727 15.2452 76.52 15.3834 76.3457 15.5577C76.1713 15.732 76.0331 15.939 75.939 16.1669C75.8448 16.3947 75.7965 16.6389 75.7969 16.8854Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 25.8944C66.8584 26.2655 66.9685 26.6283 67.1747 26.9369C67.3808 27.2455 67.6739 27.486 68.0168 27.6281C68.3597 27.7701 68.737 27.8072 69.101 27.7348C69.465 27.6624 69.7994 27.4837 70.0618 27.2213C70.3243 26.9588 70.503 26.6245 70.5754 26.2605C70.6478 25.8964 70.6107 25.5191 70.4686 25.1762C70.3266 24.8333 70.0861 24.5403 69.7775 24.3341C69.4689 24.1279 69.1061 24.0178 68.7349 24.0178C68.4884 24.0175 68.2442 24.0657 68.0164 24.1599C67.7885 24.2541 67.5815 24.3923 67.4072 24.5666C67.2329 24.7409 67.0947 24.948 67.0005 25.1758C66.9063 25.4036 66.858 25.6478 66.8584 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 25.8944C75.7969 26.2655 75.9069 26.6283 76.1131 26.9369C76.3193 27.2455 76.6124 27.486 76.9553 27.6281C77.2982 27.7701 77.6755 27.8072 78.0395 27.7348C78.4035 27.6624 78.7379 27.4837 79.0003 27.2213C79.2628 26.9588 79.4415 26.6245 79.5139 26.2605C79.5863 25.8964 79.5491 25.5191 79.4071 25.1762C79.2651 24.8333 79.0246 24.5403 78.716 24.3341C78.4074 24.1279 78.0446 24.0178 77.6734 24.0178C77.4269 24.0175 77.1827 24.0657 76.9549 24.1599C76.727 24.2541 76.52 24.3923 76.3457 24.5666C76.1713 24.7409 76.0331 24.948 75.939 25.1758C75.8448 25.4036 75.7965 25.6478 75.7969 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 25.8944C93.6719 26.2655 93.7819 26.6283 93.9881 26.9369C94.1943 27.2455 94.4874 27.486 94.8303 27.6281C95.1732 27.7701 95.5505 27.8072 95.9145 27.7348C96.2785 27.6624 96.6129 27.4837 96.8753 27.2213C97.1378 26.9588 97.3165 26.6245 97.3889 26.2605C97.4613 25.8964 97.4241 25.5191 97.2821 25.1762C97.1401 24.8333 96.8996 24.5403 96.591 24.3341C96.2824 24.1279 95.9196 24.0178 95.5484 24.0178C95.3019 24.0175 95.0577 24.0657 94.8299 24.1599C94.602 24.2541 94.395 24.3923 94.2207 24.5666C94.0463 24.7409 93.9081 24.948 93.814 25.1758C93.7198 25.4036 93.6715 25.6478 93.6719 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M57.9207 34.9142C57.9201 35.2856 58.0297 35.6488 58.2357 35.9578C58.4417 36.2669 58.7348 36.5078 59.0778 36.6502C59.4208 36.7926 59.7983 36.83 60.1626 36.7577C60.5269 36.6854 60.8615 36.5066 61.1241 36.244C61.3867 35.9814 61.5655 35.6467 61.6378 35.2825C61.7101 34.9182 61.6727 34.5406 61.5303 34.1976C61.388 33.8546 61.147 33.5616 60.838 33.3556C60.5289 33.1496 60.1657 33.04 59.7944 33.0405C59.2977 33.0413 58.8215 33.2389 58.4703 33.5902C58.1191 33.9414 57.9214 34.4175 57.9207 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 34.9142C66.8578 35.2855 66.9674 35.6486 67.1733 35.9575C67.3791 36.2665 67.672 36.5075 68.0149 36.6499C68.3577 36.7924 68.7351 36.83 69.0993 36.7579C69.4635 36.6858 69.7981 36.5073 70.0608 36.245C70.3236 35.9827 70.5026 35.6483 70.5752 35.2842C70.6478 34.9201 70.6108 34.5427 70.4689 34.1996C70.327 33.8565 70.0864 33.5633 69.7778 33.357C69.4691 33.1507 69.1062 33.0405 68.7349 33.0405C68.2377 33.0405 67.7609 33.2378 67.409 33.5891C67.0572 33.9405 66.8592 34.417 66.8584 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 34.9142C75.7963 35.2855 75.9059 35.6486 76.1118 35.9575C76.3176 36.2665 76.6105 36.5075 76.9533 36.6499C77.2962 36.7924 77.6736 36.83 78.0378 36.7579C78.402 36.6858 78.7366 36.5073 78.9993 36.245C79.262 35.9827 79.441 35.6483 79.5137 35.2842C79.5863 34.9201 79.5493 34.5427 79.4074 34.1996C79.2654 33.8565 79.0249 33.5633 78.7163 33.357C78.4076 33.1507 78.0447 33.0405 77.6734 33.0405C77.1762 33.0405 76.6993 33.2378 76.3475 33.5891C75.9957 33.9405 75.7976 34.417 75.7969 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 34.9142C84.7331 35.2856 84.8427 35.6488 85.0487 35.9578C85.2547 36.2669 85.5477 36.5078 85.8908 36.6502C86.2338 36.7926 86.6113 36.83 86.9756 36.7577C87.3399 36.6854 87.6745 36.5066 87.9371 36.244C88.1997 35.9814 88.3785 35.6467 88.4508 35.2825C88.5231 34.9182 88.4857 34.5406 88.3433 34.1976C88.2009 33.8546 87.96 33.5616 87.651 33.3556C87.3419 33.1496 86.9787 33.04 86.6073 33.0405C86.1106 33.0413 85.6345 33.2389 85.2833 33.5902C84.932 33.9414 84.7344 34.4175 84.7336 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 34.9142C93.6713 35.2855 93.7809 35.6486 93.9868 35.9575C94.1926 36.2665 94.4855 36.5075 94.8283 36.6499C95.1712 36.7924 95.5486 36.83 95.9128 36.7579C96.277 36.6858 96.6116 36.5073 96.8743 36.245C97.137 35.9827 97.316 35.6483 97.3887 35.2842C97.4613 34.9201 97.4243 34.5427 97.2824 34.1996C97.1404 33.8565 96.8999 33.5633 96.5913 33.357C96.2826 33.1507 95.9197 33.0405 95.5484 33.0405C95.0512 33.0405 94.5743 33.2378 94.2225 33.5891C93.8707 33.9405 93.6726 34.417 93.6719 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M57.9207 43.9114C57.9201 44.2828 58.0297 44.646 58.2357 44.955C58.4417 45.2641 58.7348 45.505 59.0778 45.6474C59.4208 45.7898 59.7983 45.8272 60.1626 45.7549C60.5269 45.6826 60.8615 45.5038 61.1241 45.2412C61.3867 44.9786 61.5655 44.6439 61.6378 44.2797C61.7101 43.9154 61.6727 43.5378 61.5303 43.1948C61.388 42.8518 61.147 42.5588 60.838 42.3528C60.5289 42.1468 60.1657 42.0372 59.7944 42.0377C59.2977 42.0385 58.8215 42.2361 58.4703 42.5873C58.1191 42.9386 57.9214 43.4147 57.9207 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 43.9114C66.8578 44.2827 66.9674 44.6458 67.1733 44.9547C67.3791 45.2637 67.672 45.5047 68.0149 45.6471C68.3577 45.7896 68.7351 45.8272 69.0993 45.7551C69.4635 45.683 69.7981 45.5045 70.0608 45.2422C70.3236 44.9798 70.5026 44.6455 70.5752 44.2814C70.6478 43.9173 70.6108 43.5398 70.4689 43.1968C70.327 42.8537 70.0864 42.5605 69.7778 42.3542C69.4691 42.1478 69.1062 42.0377 68.7349 42.0377C68.2377 42.0377 67.7609 42.235 67.409 42.5863C67.0572 42.9376 66.8592 43.4142 66.8584 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 43.9114C75.7963 44.2827 75.9059 44.6458 76.1118 44.9547C76.3176 45.2637 76.6105 45.5047 76.9533 45.6471C77.2962 45.7896 77.6736 45.8272 78.0378 45.7551C78.402 45.683 78.7366 45.5045 78.9993 45.2422C79.262 44.9798 79.441 44.6455 79.5137 44.2814C79.5863 43.9173 79.5493 43.5398 79.4074 43.1968C79.2654 42.8537 79.0249 42.5605 78.7163 42.3542C78.4076 42.1478 78.0447 42.0377 77.6734 42.0377C77.1762 42.0377 76.6993 42.235 76.3475 42.5863C75.9957 42.9376 75.7976 43.4142 75.7969 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 43.9114C84.7331 44.2828 84.8427 44.646 85.0487 44.955C85.2547 45.2641 85.5477 45.505 85.8908 45.6474C86.2338 45.7898 86.6113 45.8272 86.9756 45.7549C87.3399 45.6826 87.6745 45.5038 87.9371 45.2412C88.1997 44.9786 88.3785 44.6439 88.4508 44.2797C88.5231 43.9154 88.4857 43.5378 88.3433 43.1948C88.2009 42.8518 87.96 42.5588 87.651 42.3528C87.3419 42.1468 86.9787 42.0372 86.6073 42.0377C86.1106 42.0385 85.6345 42.2361 85.2833 42.5873C84.932 42.9386 84.7344 43.4147 84.7336 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 43.9114C93.6713 44.2827 93.7809 44.6458 93.9868 44.9547C94.1926 45.2637 94.4855 45.5047 94.8283 45.6471C95.1712 45.7896 95.5486 45.8272 95.9128 45.7551C96.277 45.683 96.6116 45.5045 96.8743 45.2422C97.137 44.9798 97.316 44.6455 97.3887 44.2814C97.4613 43.9173 97.4243 43.5398 97.2824 43.1968C97.1404 42.8537 96.8999 42.5605 96.5913 42.3542C96.2826 42.1478 95.9197 42.0377 95.5484 42.0377C95.0512 42.0377 94.5743 42.235 94.2225 42.5863C93.8707 42.9376 93.6726 43.4142 93.6719 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 7.87715C75.7969 8.24829 75.9069 8.6111 76.1131 8.9197C76.3193 9.22829 76.6124 9.46881 76.9553 9.61084C77.2982 9.75287 77.6755 9.79003 78.0395 9.71763C78.4035 9.64522 78.7379 9.4665 79.0003 9.20406C79.2628 8.94162 79.4415 8.60725 79.5139 8.24324C79.5863 7.87923 79.5491 7.50192 79.4071 7.15903C79.2651 6.81614 79.0246 6.52306 78.716 6.31687C78.4074 6.11067 78.0446 6.00061 77.6734 6.00061C77.4269 6.00024 77.1827 6.04852 76.9549 6.1427C76.727 6.23687 76.52 6.37508 76.3457 6.5494C76.1713 6.72373 76.0331 6.93075 75.939 7.15859C75.8448 7.38643 75.7965 7.63061 75.7969 7.87715Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 16.8854C84.7336 17.2567 84.8438 17.6196 85.0501 17.9283C85.2564 18.2369 85.5497 18.4775 85.8927 18.6194C86.2358 18.7614 86.6132 18.7984 86.9773 18.7257C87.3414 18.6531 87.6758 18.4741 87.9381 18.2114C88.2004 17.9486 88.3789 17.614 88.451 17.2498C88.5231 16.8856 88.4855 16.5082 88.3431 16.1654C88.2006 15.8225 87.9596 15.5296 87.6507 15.3238C87.3417 15.1179 86.9786 15.0084 86.6073 15.0089C86.361 15.0089 86.1172 15.0575 85.8897 15.1518C85.6621 15.2462 85.4555 15.3844 85.2814 15.5587C85.1074 15.733 84.9695 15.9399 84.8755 16.1675C84.7815 16.3952 84.7333 16.6392 84.7336 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M84.7336 25.8944C84.7336 26.2656 84.8438 26.6285 85.0501 26.9372C85.2564 27.2459 85.5497 27.4864 85.8927 27.6283C86.2358 27.7703 86.6132 27.8073 86.9773 27.7346C87.3414 27.662 87.6758 27.483 87.9381 27.2203C88.2004 26.9575 88.3789 26.6229 88.451 26.2587C88.5231 25.8945 88.4855 25.5171 88.3431 25.1743C88.2006 24.8314 87.9596 24.5386 87.6507 24.3327C87.3417 24.1268 86.9786 24.0173 86.6073 24.0178C86.361 24.0178 86.1172 24.0664 85.8897 24.1607C85.6621 24.2551 85.4555 24.3933 85.2814 24.5676C85.1074 24.7419 84.9695 24.9488 84.8755 25.1765C84.7815 25.4041 84.7333 25.6481 84.7336 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M43.2187 64.2096H41.4812L46.5068 50.5229H48.2176L53.2432 64.2096H51.5056L47.4156 52.6882H47.3087L43.2187 64.2096ZM43.8603 58.8632H50.864V60.3335H43.8603V58.8632ZM59.3314 64.4234C58.369 64.4234 57.5403 64.1962 56.8453 63.7418C56.1503 63.2873 55.6156 62.6614 55.2414 61.8639C54.8671 61.0664 54.68 60.1553 54.68 59.1305C54.68 58.088 54.8716 57.168 55.2548 56.3705C55.6424 55.5685 56.1815 54.9426 56.872 54.4926C57.5671 54.0381 58.3779 53.8109 59.3046 53.8109C60.0264 53.8109 60.6769 53.9446 61.256 54.2119C61.8352 54.4792 62.3097 54.8535 62.6795 55.3346C63.0493 55.8158 63.2788 56.3772 63.3679 57.0187H61.7907C61.6704 56.5509 61.4031 56.1366 60.9887 55.7757C60.5788 55.4104 60.0264 55.2277 59.3314 55.2277C58.7165 55.2277 58.1774 55.3881 57.7141 55.7089C57.2552 56.0252 56.8965 56.473 56.6381 57.0521C56.3842 57.6269 56.2572 58.3019 56.2572 59.0771C56.2572 59.8701 56.3819 60.5607 56.6314 61.1488C56.8854 61.7369 57.2418 62.1936 57.7007 62.5188C58.1641 62.844 58.7076 63.0067 59.3314 63.0067C59.7412 63.0067 60.1133 62.9354 60.4474 62.7928C60.7816 62.6502 61.0645 62.4453 61.2961 62.178C61.5278 61.9107 61.6927 61.5899 61.7907 61.2156H63.3679C63.2788 61.8216 63.0582 62.3673 62.7063 62.853C62.3587 63.3341 61.8976 63.7173 61.3229 64.0024C60.7526 64.2831 60.0888 64.4234 59.3314 64.4234ZM69.8437 64.4234C68.8813 64.4234 68.0526 64.1962 67.3576 63.7418C66.6626 63.2873 66.1279 62.6614 65.7537 61.8639C65.3794 61.0664 65.1923 60.1553 65.1923 59.1305C65.1923 58.088 65.3839 57.168 65.767 56.3705C66.1547 55.5685 66.6937 54.9426 67.3843 54.4926C68.0793 54.0381 68.8902 53.8109 69.8169 53.8109C70.5387 53.8109 71.1892 53.9446 71.7683 54.2119C72.3475 54.4792 72.822 54.8535 73.1918 55.3346C73.5616 55.8158 73.7911 56.3772 73.8802 57.0187H72.303C72.1827 56.5509 71.9154 56.1366 71.501 55.7757C71.0911 55.4104 70.5387 55.2277 69.8437 55.2277C69.2288 55.2277 68.6897 55.3881 68.2264 55.7089C67.7675 56.0252 67.4088 56.473 67.1504 57.0521C66.8965 57.6269 66.7695 58.3019 66.7695 59.0771C66.7695 59.8701 66.8942 60.5607 67.1437 61.1488C67.3977 61.7369 67.7541 62.1936 68.213 62.5188C68.6764 62.844 69.2199 63.0067 69.8437 63.0067C70.2535 63.0067 70.6256 62.9354 70.9597 62.7928C71.2939 62.6502 71.5768 62.4453 71.8084 62.178C72.0401 61.9107 72.205 61.5899 72.303 61.2156H73.8802C73.7911 61.8216 73.5705 62.3673 73.2185 62.853C72.871 63.3341 72.4099 63.7173 71.8352 64.0024C71.2649 64.2831 70.6011 64.4234 69.8437 64.4234ZM82.6549 60.0127V53.9446H84.2321V64.2096H82.6549V62.472H82.548C82.3074 62.9933 81.9331 63.4366 81.4252 63.8019C80.9173 64.1628 80.2757 64.3433 79.5005 64.3433C78.859 64.3433 78.2887 64.2029 77.7897 63.9222C77.2907 63.6371 76.8986 63.2094 76.6135 62.6391C76.3283 62.0644 76.1858 61.3404 76.1858 60.4671V53.9446H77.763V60.3602C77.763 61.1087 77.9724 61.7057 78.3912 62.1512C78.8144 62.5968 79.3535 62.8195 80.0084 62.8195C80.4005 62.8195 80.7992 62.7193 81.2047 62.5188C81.6146 62.3183 81.9576 62.0109 82.2339 61.5966C82.5145 61.1822 82.6549 60.6543 82.6549 60.0127ZM94.3918 56.2435L92.975 56.6445C92.8859 56.4084 92.7545 56.1789 92.5807 55.9561C92.4114 55.7289 92.1798 55.5418 91.8857 55.3948C91.5917 55.2477 91.2152 55.1742 90.7563 55.1742C90.1281 55.1742 89.6046 55.319 89.1858 55.6086C88.7715 55.8938 88.5643 56.2569 88.5643 56.6979C88.5643 57.09 88.7069 57.3997 88.992 57.6269C89.2771 57.8541 89.7227 58.0435 90.3286 58.1949L91.8523 58.5692C92.7701 58.7919 93.454 59.1328 93.904 59.5917C94.354 60.0461 94.579 60.632 94.579 61.3493C94.579 61.9374 94.4096 62.4631 94.071 62.9265C93.7369 63.3898 93.2691 63.7552 92.6676 64.0225C92.0662 64.2898 91.3667 64.4234 90.5692 64.4234C89.5222 64.4234 88.6556 64.1962 87.9695 63.7418C87.2834 63.2873 86.849 62.6235 86.6663 61.7503L88.1633 61.376C88.3059 61.9285 88.5754 62.3428 88.9719 62.6191C89.3729 62.8953 89.8964 63.0334 90.5424 63.0334C91.2776 63.0334 91.8612 62.8775 92.2934 62.5656C92.73 62.2493 92.9483 61.8706 92.9483 61.4295C92.9483 61.0731 92.8236 60.7746 92.5741 60.534C92.3246 60.2889 91.9414 60.1063 91.4246 59.986L89.7138 59.585C88.7737 59.3622 88.0831 59.0169 87.642 58.5491C87.2054 58.0769 86.9871 57.4865 86.9871 56.7781C86.9871 56.199 87.1497 55.6866 87.475 55.2411C87.8047 54.7955 88.2524 54.4458 88.8182 54.1918C89.3885 53.9379 90.0345 53.8109 90.7563 53.8109C91.7721 53.8109 92.5696 54.0337 93.1488 54.4792C93.7324 54.9247 94.1468 55.5128 94.3918 56.2435ZM99.9738 64.4502C99.3233 64.4502 98.733 64.3277 98.2028 64.0826C97.6726 63.8331 97.2516 63.4745 96.9397 63.0067C96.6278 62.5344 96.4719 61.9641 96.4719 61.2958C96.4719 60.7077 96.5877 60.231 96.8194 59.8657C97.0511 59.4959 97.3607 59.2063 97.7483 58.9969C98.136 58.7875 98.5637 58.6316 99.0315 58.5291C99.5037 58.4222 99.9782 58.3375 100.455 58.2751C101.079 58.1949 101.584 58.1348 101.972 58.0947C102.364 58.0501 102.649 57.9766 102.827 57.8741C103.01 57.7717 103.101 57.5935 103.101 57.3395V57.286C103.101 56.6267 102.921 56.1143 102.56 55.749C102.204 55.3836 101.662 55.201 100.936 55.201C100.183 55.201 99.5928 55.3658 99.1651 55.6955C98.7374 56.0252 98.4367 56.3772 98.2629 56.7514L96.7659 56.2168C97.0333 55.593 97.3897 55.1074 97.8352 54.7599C98.2852 54.4079 98.7753 54.1629 99.3055 54.0248C99.8401 53.8822 100.366 53.8109 100.883 53.8109C101.212 53.8109 101.591 53.851 102.019 53.9312C102.451 54.0069 102.867 54.1651 103.268 54.4057C103.674 54.6463 104.01 55.0094 104.278 55.495C104.545 55.9806 104.679 56.6311 104.679 57.4464V64.2096H103.101V62.8195H103.021C102.914 63.0423 102.736 63.2807 102.487 63.5346C102.237 63.7886 101.905 64.0047 101.491 64.1829C101.076 64.3611 100.571 64.4502 99.9738 64.4502ZM100.214 63.0334C100.838 63.0334 101.364 62.9109 101.792 62.6658C102.224 62.4208 102.549 62.1045 102.767 61.7169C102.99 61.3292 103.101 60.9216 103.101 60.4939V59.0504C103.035 59.1305 102.888 59.2041 102.66 59.2709C102.438 59.3333 102.179 59.389 101.885 59.438C101.595 59.4825 101.313 59.5226 101.036 59.5583C100.765 59.5894 100.544 59.6162 100.375 59.6385C99.9649 59.6919 99.5817 59.7788 99.2253 59.8991C98.8733 60.0149 98.5882 60.1909 98.3699 60.427C98.156 60.6587 98.0491 60.975 98.0491 61.376C98.0491 61.924 98.2518 62.3384 98.6572 62.6191C99.0671 62.8953 99.5862 63.0334 100.214 63.0334ZM112.128 53.9446V55.2812H106.595V53.9446H112.128ZM108.252 64.2096V52.5278C108.252 51.9397 108.39 51.4496 108.667 51.0575C108.943 50.6655 109.302 50.3714 109.743 50.1754C110.184 49.9793 110.649 49.8813 111.139 49.8813C111.527 49.8813 111.843 49.9125 112.088 49.9749C112.333 50.0373 112.516 50.0952 112.636 50.1486L112.182 51.512C112.102 51.4852 111.99 51.4518 111.848 51.4117C111.71 51.3716 111.527 51.3516 111.3 51.3516C110.778 51.3516 110.402 51.483 110.17 51.7459C109.943 52.0087 109.829 52.3941 109.829 52.902V64.2096H108.252Z" fill="#A6B5CB"/>
                                    </svg>

                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.8612 32.6508L32.1848 38.3061L34.3705 40.4837L40.0796 34.8284L37.8612 32.6508Z" fill="#A6B5CB"/>
                                        <path d="M26.3786 44.0911L20.7021 49.7464L22.8879 51.9565L28.5643 46.2687L26.3786 44.0911Z" fill="#A6B5CB"/>
                                        <path d="M30.7828 36.9086L36.4592 31.2208L34.2735 29.0432L28.5645 34.6985L30.7828 36.9086Z" fill="#A6B5CB"/>
                                        <path d="M24.9749 42.6936L22.7565 40.4835L17.0801 46.1713L19.2658 48.349L24.9749 42.6936Z" fill="#A6B5CB"/>
                                        <path d="M24.9749 38.3061L19.2658 32.6508L17.0801 34.8284L22.7565 40.4837L24.9749 38.3061Z" fill="#A6B5CB"/>
                                        <path d="M26.3786 36.9086L28.5643 34.6985L22.8879 29.0432L20.7021 31.2208L26.3786 36.9086Z" fill="#A6B5CB"/>
                                        <path d="M32.1848 42.6936L37.8612 48.349L40.0796 46.1713L34.3705 40.4835L32.1848 42.6936Z" fill="#A6B5CB"/>
                                        <path d="M36.4592 49.7464L30.7828 44.0911L28.5645 46.2687L34.2735 51.9565L36.4592 49.7464Z" fill="#A6B5CB"/>
                                        <path d="M36.4591 54.1345L34.2733 51.9569L28.5643 57.6122L22.8879 51.9569L20.7021 54.1345L28.5643 62L36.4591 54.1345Z" fill="#A6B5CB"/>
                                        <path d="M17.0805 34.8284L14.8948 32.6508L7 40.4837L14.8948 48.3491L17.0805 46.1715L11.4041 40.4837L17.0805 34.8284Z" fill="#A6B5CB"/>
                                        <path d="M42.2651 32.6508L40.0793 34.8284L45.7558 40.4837L40.0793 46.1715L42.2651 48.3491L50.1599 40.4837L42.2651 32.6508Z" fill="#A6B5CB"/>
                                        <path d="M34.2733 29.043L36.4591 26.8654L28.5643 19L20.7021 26.8654L22.8879 29.043L28.5643 23.3877L34.2733 29.043Z" fill="#A6B5CB"/>
                                        <path d="M67.6872 40.604C68.38 40.0519 68.9342 39.2236 69.142 38.1883V38.1193L67.6872 37.7742V37.8432C67.4794 38.6024 67.2023 39.2237 66.7173 39.6378C66.2324 40.0519 65.6089 40.2589 64.9161 40.2589C64.3619 40.2589 63.8076 40.1209 63.3227 39.8448C62.8378 39.5687 62.4914 39.0856 62.2142 38.5334C61.9371 37.9122 61.8679 37.222 61.8679 36.4628C61.8679 35.8416 61.9371 35.2205 62.145 34.6683C62.3528 34.1161 62.6992 33.633 63.1841 33.2879C63.6691 32.9428 64.2926 32.8047 64.9854 32.8047C65.6089 32.8047 66.1631 32.9428 66.5788 33.2879C66.9944 33.564 67.3408 34.0471 67.5487 34.7373V34.8063L69.0035 34.4612V34.3922C68.7264 33.4949 68.2414 32.8047 67.5487 32.3216C66.8559 31.8384 66.0245 31.5624 65.0546 31.5624C64.154 31.5624 63.392 31.7694 62.6299 32.1145C61.9371 32.5287 61.3136 33.0808 60.9672 33.84C60.5516 34.5993 60.3438 35.4965 60.3438 36.4628C60.3438 37.3601 60.5516 38.2574 60.898 39.0856C61.2444 39.9139 61.7986 40.535 62.4221 40.9491C63.1149 41.3633 63.9462 41.5703 65.0546 41.5703C66.0938 41.4323 66.9944 41.1562 67.6872 40.604Z" fill="#A6B5CB"/>
                                        <path d="M82.6498 39.0849C83.0655 38.3256 83.2733 37.4284 83.2733 36.4621C83.2733 35.4958 83.0655 34.6675 82.7191 33.8393C82.3034 33.0801 81.7492 32.4589 81.0564 32.0448C80.2943 31.6307 79.463 31.4236 78.5624 31.4236C77.1768 31.4236 75.9991 31.9067 75.0985 32.804C74.1979 33.7013 73.7822 35.0126 73.7822 36.6001C73.7822 37.4284 73.9901 38.2566 74.3364 39.0158C74.6828 39.7751 75.3063 40.3963 75.9991 40.8104C76.7612 41.2245 77.5925 41.5006 78.4931 41.5006C79.3937 41.5006 80.1558 41.2935 80.9179 40.8794C81.6107 40.4653 82.2342 39.8441 82.6498 39.0849ZM78.4931 40.1892C77.5925 40.1892 76.7612 39.8441 76.1377 39.2229C75.5142 38.6017 75.2371 37.7045 75.2371 36.5311C75.2371 35.1507 75.5835 34.1154 76.207 33.4942C76.8305 32.873 77.5925 32.5969 78.4931 32.5969C79.1166 32.5969 79.6709 32.735 80.2251 33.0801C80.71 33.3562 81.1257 33.8393 81.3335 34.3915C81.6106 34.9436 81.7492 35.6338 81.7492 36.3931C81.7492 37.5664 81.4721 38.5327 80.8486 39.1539C80.2251 39.8441 79.3937 40.1892 78.4931 40.1892Z" fill="#A6B5CB"/>
                                        <path d="M97.754 31.7H96.3684V41.4318H97.754V31.7Z" fill="#A6B5CB"/>
                                        <path d="M93.668 41.4315L95.8849 35.2887V31.8377L93.5294 38.4637C93.3216 39.0158 93.1831 39.43 93.1138 39.7751L92.6981 38.6017L90.3427 31.7687H90.2041V35.2887L92.3517 41.5006H93.668V41.4315Z" fill="#A6B5CB"/>
                                        <path d="M89.6492 31.7H88.2637V41.4318H89.6492V31.7Z" fill="#A6B5CB"/>
                                        <path d="M109.6 36.6694C110.155 36.1173 110.432 35.358 110.432 34.5298C110.432 34.0466 110.362 33.5635 110.155 33.2184C109.947 32.8043 109.67 32.4592 109.323 32.2521C108.977 32.045 108.561 31.838 108.076 31.769C107.73 31.6999 107.245 31.7 106.552 31.7H104.751V33.0113H106.621C107.176 33.0113 107.591 33.0113 107.799 33.0804C108.146 33.1494 108.353 33.3564 108.561 33.6325C108.769 33.9086 108.838 34.2537 108.838 34.5988C108.838 35.151 108.7 35.4961 108.353 35.8412C108.007 36.1173 107.453 36.2553 106.621 36.2553H104.682V37.5667H106.621C108.076 37.5667 109.115 37.2906 109.6 36.6694Z" fill="#A6B5CB"/>
                                        <path d="M104.267 31.7H102.812V41.4318H104.267V31.7Z" fill="#A6B5CB"/>
                                        <path d="M120.825 31.7H119.301L115.49 41.4318H117.014L117.43 40.3275L118.538 37.3596L118.746 36.7384L119.578 34.5988C119.785 34.1157 119.924 33.6325 119.993 33.1494C120.132 33.6325 120.34 34.1847 120.617 34.8059L121.587 37.3596H119.093L118.677 38.5329H122.072L123.18 41.4318H124.843L120.825 31.7Z" fill="#A6B5CB"/>
                                        <path d="M136.203 38.9471V41.4318H137.658V31.7H136.272V39.0161L136.203 38.9471Z" fill="#A6B5CB"/>
                                        <path d="M131.216 31.7H129.83V41.4318H131.216V31.7Z" fill="#A6B5CB"/>
                                        <path d="M135.718 38.1878L131.7 32.3901V34.8059L135.718 40.6726V38.1878Z" fill="#A6B5CB"/>
                                        <path d="M150.265 31.7L148.326 34.5298C147.979 35.0819 147.633 35.6341 147.356 36.1172L146.524 37.3596V41.4318H147.979V37.3596L151.928 31.769H150.265V31.7Z" fill="#A6B5CB"/>
                                        <path d="M146.455 34.6678L144.515 31.7H142.714L146.247 36.8765L147.078 35.6341L146.455 34.6678Z" fill="#A6B5CB"/>
                                        <path d="M61.9382 49.3005V46.2635H62.9081V45.7804H60.4141V46.2635H61.384V49.3005H61.9382Z" fill="#A6B5CB"/>
                                        <path d="M67.2017 45.7804H66.786L65.4697 49.3005H66.0239L66.3011 48.5412H67.6173L67.8945 49.3005H68.4487L67.2017 45.7804ZM66.5089 48.0581L66.9938 46.5396L67.4788 48.0581H66.5089Z" fill="#A6B5CB"/>
                                        <path d="M72.3975 46.5399C72.4668 46.4709 72.5361 46.4019 72.6053 46.3329C72.6746 46.2639 72.8132 46.2638 72.9517 46.2638C73.0903 46.2638 73.2981 46.3329 73.3674 46.4019C73.506 46.4709 73.5752 46.6089 73.5752 46.747H74.1295C74.0602 46.4709 73.9216 46.1948 73.7138 45.9878C73.506 45.7807 73.2288 45.7117 72.8824 45.7117C72.6053 45.7117 72.3975 45.7807 72.1897 45.9187C71.9818 46.0568 71.8433 46.1948 71.774 46.3329C71.7047 46.4019 71.7047 46.5399 71.6354 46.678C71.6354 46.816 71.5662 47.0921 71.5662 47.5062C71.5662 47.9203 71.5662 48.1964 71.6354 48.3344C71.6354 48.4035 71.6354 48.4725 71.7047 48.5415C71.7047 48.6105 71.774 48.6105 71.774 48.6795C71.8433 48.8176 71.9818 48.9556 72.1897 49.0937C72.3975 49.2317 72.6053 49.3007 72.8824 49.3007C73.2288 49.3007 73.5752 49.1627 73.7831 48.9556C73.9909 48.7486 74.1295 48.4035 74.1295 48.0584V47.3682H72.8824V47.8513H73.5752V48.0584C73.5752 48.2654 73.506 48.4725 73.3674 48.6105C73.2288 48.7486 73.0903 48.8176 72.8824 48.8176C72.7439 48.8176 72.6746 48.8176 72.5361 48.7486C72.4668 48.6796 72.3975 48.6105 72.3282 48.5415C72.2589 48.4725 72.1897 48.3345 72.1897 48.2654C72.1897 48.1274 72.1204 47.9203 72.1204 47.5752C72.1204 47.2301 72.1204 47.0231 72.1897 46.885C72.2589 46.747 72.3282 46.6089 72.3975 46.5399Z" fill="#A6B5CB"/>
                                        <path d="M77.8018 45.7804V49.3005H80.0186V48.8173H78.2867V45.7804H77.8018Z" fill="#A6B5CB"/>
                                        <path d="M84.1062 45.7804H83.552V49.3005H84.1062V45.7804Z" fill="#A6B5CB"/>
                                        <path d="M88.3335 46.8157L89.9269 49.3005H90.4119V45.7804H89.9269V48.3342H89.8576L88.2643 45.7804H87.7793V49.3005H88.3335V46.8157Z" fill="#A6B5CB"/>
                                        <path d="M96.4385 46.3326V45.7804H94.1523V49.3005H96.4385V48.8173H94.7066V47.782H96.1614V47.2989H94.7066V46.3326H96.4385Z" fill="#A6B5CB"/>
                                        <path d="M104.058 48.5412C104.058 48.6102 104.128 48.6102 104.128 48.6793C104.197 48.8173 104.336 48.9554 104.543 49.0934C104.751 49.2314 104.959 49.3005 105.236 49.3005C105.583 49.3005 105.929 49.1624 106.137 48.9554C106.345 48.7483 106.483 48.4032 106.483 48.0581V47.3679H105.236V47.851H105.929V48.0581C105.929 48.2652 105.86 48.4722 105.721 48.6103C105.583 48.7483 105.444 48.8173 105.236 48.8173C105.098 48.8173 105.028 48.8173 104.89 48.7483C104.82 48.6793 104.751 48.6102 104.682 48.5412C104.613 48.4722 104.543 48.3342 104.543 48.2652C104.543 48.1271 104.474 47.9201 104.474 47.575C104.474 47.2298 104.474 47.0228 104.543 46.8847C104.543 46.7467 104.613 46.6777 104.682 46.6086C104.751 46.5396 104.82 46.4706 104.89 46.4016C104.959 46.3326 105.098 46.3326 105.236 46.3326C105.375 46.3326 105.583 46.4016 105.652 46.4706C105.79 46.5396 105.86 46.6777 105.86 46.8157H106.414C106.345 46.5396 106.206 46.2636 105.998 46.0565C105.79 45.8494 105.513 45.7804 105.167 45.7804C104.89 45.7804 104.682 45.8494 104.474 45.9875C104.266 46.1255 104.128 46.2636 104.058 46.4016C103.989 46.4706 103.989 46.6087 103.92 46.7467C103.92 46.8847 103.851 47.1608 103.851 47.575C103.851 47.9891 103.851 48.2652 103.92 48.4032C103.989 48.4722 103.989 48.5412 104.058 48.5412Z" fill="#A6B5CB"/>
                                        <path d="M110.016 48.5415C110.016 48.6105 110.086 48.6105 110.086 48.6795C110.155 48.8176 110.294 48.9556 110.501 49.0937C110.709 49.2317 110.917 49.3007 111.194 49.3007C111.471 49.3007 111.679 49.2317 111.887 49.0937C112.095 48.9556 112.233 48.8176 112.303 48.6795C112.372 48.6105 112.372 48.4725 112.441 48.3344C112.441 48.1964 112.441 47.9203 112.441 47.5062C112.441 47.0921 112.441 46.816 112.441 46.678C112.441 46.5399 112.372 46.4019 112.303 46.3329C112.233 46.1948 112.095 46.0568 111.887 45.9187C111.679 45.7807 111.471 45.7117 111.194 45.7117C110.917 45.7117 110.709 45.7807 110.501 45.9187C110.294 46.0568 110.155 46.1948 110.086 46.3329C110.016 46.4019 110.016 46.5399 109.947 46.678C109.947 46.816 109.878 47.0921 109.878 47.5062C109.878 47.9203 109.878 48.1964 109.947 48.3344C110.016 48.4725 110.016 48.5415 110.016 48.5415ZM110.501 46.885C110.501 46.747 110.571 46.6779 110.64 46.6089C110.709 46.5399 110.779 46.4709 110.848 46.4019C110.917 46.3329 111.056 46.3329 111.194 46.3329C111.333 46.3329 111.402 46.3329 111.541 46.4019C111.61 46.4709 111.679 46.5399 111.748 46.6089C111.818 46.6779 111.887 46.816 111.887 46.885C111.887 47.0231 111.956 47.2301 111.956 47.5752C111.956 47.9203 111.956 48.1274 111.887 48.2654C111.887 48.4035 111.818 48.4725 111.748 48.5415C111.679 48.6105 111.61 48.6796 111.541 48.7486C111.471 48.8176 111.333 48.8176 111.194 48.8176C111.056 48.8176 110.986 48.8176 110.848 48.7486C110.779 48.6796 110.709 48.6105 110.64 48.5415C110.571 48.4725 110.501 48.3345 110.501 48.2654C110.501 48.1274 110.432 47.9203 110.432 47.5752C110.501 47.2301 110.501 46.954 110.501 46.885Z" fill="#A6B5CB"/>
                                        <path d="M118.329 46.3326V45.7804H116.112V49.3005H118.329V48.8173H116.597V47.782H118.052V47.2989H116.597V46.3326H118.329Z" fill="#A6B5CB"/>
                                        <path d="M122.9 48.8176C122.485 48.8176 122.207 48.6795 121.93 48.4725L121.584 48.8866C121.93 49.2317 122.415 49.3697 122.9 49.3697C123.732 49.3697 124.147 49.0246 124.147 48.3344C124.147 48.0584 124.078 47.8513 123.939 47.6442C123.801 47.4372 123.524 47.3682 123.177 47.2991C123.039 47.2991 122.9 47.2301 122.762 47.2301C122.554 47.2301 122.485 47.1611 122.415 47.0231C122.346 46.9541 122.277 46.816 122.277 46.747C122.277 46.6089 122.346 46.4709 122.485 46.3329C122.623 46.2639 122.762 46.1948 122.9 46.1948C123.247 46.1948 123.524 46.2638 123.801 46.4709L124.078 46.0568C123.732 45.8497 123.385 45.7117 122.9 45.7117C122.554 45.7117 122.277 45.7807 122.069 45.9878C121.861 46.1948 121.792 46.4019 121.792 46.747C121.792 47.0231 121.861 47.2301 122.069 47.3682C122.207 47.5752 122.485 47.6443 122.762 47.7133C122.9 47.7133 123.108 47.7823 123.247 47.7823C123.524 47.8513 123.732 47.9894 123.732 48.2654C123.524 48.6796 123.316 48.8176 122.9 48.8176Z" fill="#A6B5CB"/>
                                        <path d="M134.263 49.3005V45.7804H133.778V47.2989H132.323V45.7804H131.838V49.3005H132.323V47.782H133.778V49.3005H134.263Z" fill="#A6B5CB"/>
                                        <path d="M140.292 46.3326V45.7804H138.006V49.3005H140.292V48.8173H138.56V47.782H140.015V47.2989H138.56V46.3326H140.292Z" fill="#A6B5CB"/>
                                        <path d="M146.178 46.8154C146.178 46.4703 146.039 46.2632 145.831 46.0562C145.623 45.9181 145.416 45.8491 145.138 45.8491H143.753V49.3691H144.307V47.8507H145L145.762 49.3691H146.386L145.554 47.7817C145.97 47.5746 146.178 47.2985 146.178 46.8154ZM145.554 47.1605C145.485 47.2985 145.277 47.2986 145.069 47.3676H144.238V46.3323H145.069C145.208 46.3323 145.346 46.4013 145.485 46.4703C145.623 46.5393 145.693 46.6774 145.693 46.8844C145.693 46.9534 145.623 47.0915 145.554 47.1605Z" fill="#A6B5CB"/>
                                        <path d="M152 46.3326V45.7804H149.783V49.3005H152V48.8173H150.268V47.782H151.792V47.2989H150.268V46.3326H152Z" fill="#A6B5CB"/>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80"/>
                                        <g clip-path="url(#clip0_2347)">
                                        <path opacity="0.84" fill-rule="evenodd" clip-rule="evenodd" d="M79.9952 54.3755C88.4901 54.3755 95.379 54.6191 95.379 54.9213C95.379 55.2234 88.4901 55.467 79.9952 55.467C71.5002 55.467 64.6113 55.2234 64.6113 54.9213C64.6113 54.6191 71.5002 54.3755 79.9952 54.3755Z" fill="#A6B5CB"/>
                                        <path d="M111.131 66.4411V60.3596H114.826V61.6948H112.737V62.7474H114.71V64.0533H112.737V65.0767H114.826V66.4411H111.131ZM110.24 66.4411H108.702L108.344 63.8097C108.325 63.6245 108.296 63.4198 108.276 63.1859C108.257 62.9618 108.238 62.7084 108.218 62.4452C108.18 62.6986 108.102 63.0203 107.996 63.4101C107.976 63.4881 107.957 63.5465 107.938 63.5855L107.115 66.4314H106.022L105.2 63.5855C105.19 63.5465 105.17 63.4881 105.151 63.4101C105.035 63.03 104.958 62.7084 104.929 62.455C104.909 62.6889 104.89 62.913 104.871 63.1372C104.851 63.3614 104.822 63.5855 104.793 63.8097L104.435 66.4411H102.906L103.835 60.3596H105.47L106.38 63.4978C106.39 63.5173 106.399 63.5563 106.409 63.605C106.496 63.8876 106.544 64.1216 106.573 64.3262C106.583 64.219 106.602 64.1021 106.631 63.9656C106.66 63.8389 106.699 63.6732 106.757 63.4881L107.676 60.3596H109.312L110.24 66.4411ZM96.511 66.4411L98.5912 60.3596H100.652L102.742 66.4411H101.107L100.797 65.3496H98.4558L98.1462 66.4411H96.511ZM98.8138 64.1703H100.449L99.8297 62.1626C99.8103 62.1041 99.7813 62.0067 99.7523 61.8702C99.7232 61.7338 99.6749 61.5583 99.6265 61.3439C99.5878 61.4901 99.5588 61.6363 99.5201 61.7728C99.491 61.9092 99.4523 62.0359 99.4136 62.1626L98.8138 64.1703ZM90.0189 66.4411V60.3596H91.6056L93.889 63.4881C93.9374 63.5563 94.0051 63.683 94.1019 63.8682C94.1986 64.0631 94.3147 64.2872 94.4308 64.5601C94.4018 64.3067 94.3728 64.0826 94.3631 63.8876C94.3437 63.6927 94.3437 63.5173 94.3437 63.3614V60.3596H95.9208V66.4411H94.3437L92.0604 63.3029C92.012 63.2347 91.9443 63.108 91.8378 62.9228C91.7411 62.7279 91.625 62.5037 91.5089 62.2406C91.5379 62.494 91.5669 62.7181 91.5766 62.9228C91.5959 63.1177 91.5959 63.2931 91.5959 63.4491V66.4508H90.0189V66.4411ZM82.743 64.4822C82.9849 64.7648 83.2267 64.9695 83.4686 65.1059C83.7105 65.2423 83.9427 65.3106 84.1749 65.3106C84.3975 65.3106 84.5716 65.2521 84.7168 65.1351C84.8619 65.0182 84.9296 64.8623 84.9296 64.6868C84.9296 64.4822 84.8716 64.3262 84.7458 64.219C84.62 64.1118 84.3491 63.9949 83.9137 63.8779C83.3235 63.722 82.9075 63.5076 82.6559 63.2542C82.414 63.0008 82.2882 62.6402 82.2882 62.1918C82.2882 61.6071 82.4817 61.1393 82.8688 60.7689C83.2558 60.3986 83.7589 60.2231 84.3684 60.2231C84.6974 60.2231 85.0167 60.2719 85.3166 60.3596C85.6166 60.4473 85.8972 60.5838 86.1681 60.7689L85.6553 61.9579C85.4714 61.802 85.2779 61.6753 85.0747 61.5973C84.8812 61.5194 84.6877 61.4706 84.4942 61.4706C84.291 61.4706 84.1362 61.5194 84.0105 61.6168C83.8847 61.7143 83.8266 61.8312 83.8266 61.9872C83.8266 62.1431 83.8847 62.2601 83.9911 62.3575C84.0975 62.4452 84.3104 62.533 84.62 62.6207L84.6974 62.6402C85.365 62.8253 85.8101 63.0203 86.0229 63.2444C86.1681 63.3906 86.2745 63.5758 86.3519 63.7804C86.4293 63.9851 86.4583 64.219 86.4583 64.4724C86.4583 65.1156 86.2455 65.6322 85.8294 66.0318C85.4134 66.4216 84.8522 66.6165 84.1459 66.6165C83.7299 66.6165 83.3429 66.5483 82.9945 66.4021C82.6462 66.2559 82.3173 66.0318 81.998 65.7199L82.743 64.4822ZM77.8376 64.4822C78.0795 64.7648 78.3213 64.9695 78.5632 65.1059C78.8051 65.2423 79.0373 65.3106 79.2695 65.3106C79.4921 65.3106 79.6662 65.2521 79.8113 65.1351C79.9565 65.0182 80.0242 64.8623 80.0242 64.6868C80.0242 64.4822 79.9662 64.3262 79.8404 64.219C79.7146 64.1118 79.4437 63.9949 79.0083 63.8779C78.4181 63.722 78.0021 63.5076 77.7505 63.2542C77.5086 63.0008 77.3828 62.6402 77.3828 62.1918C77.3828 61.6071 77.5763 61.1393 77.9634 60.7689C78.3504 60.3986 78.8535 60.2231 79.463 60.2231C79.792 60.2231 80.1113 60.2719 80.4112 60.3596C80.7112 60.4473 80.9917 60.5838 81.2626 60.7689L80.7499 61.9579C80.566 61.802 80.3725 61.6753 80.1693 61.5973C79.9758 61.5194 79.7823 61.4706 79.5888 61.4706C79.3856 61.4706 79.2308 61.5194 79.105 61.6168C78.9793 61.7143 78.9212 61.8312 78.9212 61.9872C78.9212 62.1431 78.9793 62.2601 79.0857 62.3575C79.1921 62.4452 79.405 62.533 79.7146 62.6207L79.792 62.6402C80.4596 62.8253 80.9047 63.0203 81.1175 63.2444C81.2626 63.3906 81.3691 63.5758 81.4465 63.7804C81.5239 63.9851 81.5529 64.219 81.5529 64.4724C81.5529 65.1156 81.3401 65.6322 80.924 66.0318C80.508 66.4216 79.9468 66.6165 79.2405 66.6165C78.8148 66.6165 78.4374 66.5483 78.0891 66.4021C77.7408 66.2559 77.4119 66.0318 77.0926 65.7199L77.8376 64.4822ZM72.7774 66.4411V60.3596H76.4733V61.6948H74.3835V62.7474H76.3572V64.0533H74.3835V65.0767H76.4733V66.4411H72.7774ZM65.5789 66.4411V60.3596H67.1656L69.449 63.4881C69.4974 63.5563 69.5651 63.683 69.6619 63.8682C69.7586 64.0631 69.8747 64.2872 69.9908 64.5601C69.9618 64.3067 69.9328 64.0826 69.9231 63.8876C69.9038 63.6927 69.9038 63.5173 69.9038 63.3614V60.3596H71.4809V66.4411H69.9038L67.6204 63.3029C67.572 63.2347 67.5043 63.108 67.3979 62.9228C67.3011 62.7279 67.185 62.5037 67.0689 62.2406C67.0979 62.494 67.1269 62.7181 67.1366 62.9228C67.156 63.1177 67.156 63.2931 67.156 63.4491V66.4508H65.5789V66.4411ZM62.5892 66.4411V60.3596H64.2534V66.4411H62.5892ZM57.916 64.4822C58.1579 64.7648 58.3998 64.9695 58.6416 65.1059C58.8835 65.2423 59.1157 65.3106 59.3479 65.3106C59.5705 65.3106 59.7446 65.2521 59.8898 65.1351C60.0349 65.0182 60.1026 64.8623 60.1026 64.6868C60.1026 64.4822 60.0446 64.3262 59.9188 64.219C59.793 64.1118 59.5221 63.9949 59.0867 63.8779C58.4965 63.722 58.0805 63.5076 57.8289 63.2542C57.587 63.0008 57.4612 62.6402 57.4612 62.1918C57.4612 61.6071 57.6548 61.1393 58.0418 60.7689C58.4288 60.3986 58.9319 60.2231 59.5415 60.2231C59.8704 60.2231 60.1897 60.2719 60.4896 60.3596C60.7896 60.4473 61.0702 60.5838 61.3411 60.7689L60.8283 61.9579C60.6444 61.802 60.4509 61.6753 60.2478 61.5973C60.0542 61.5194 59.8607 61.4706 59.6672 61.4706C59.4641 61.4706 59.3092 61.5194 59.1835 61.6168C59.0577 61.7143 58.9996 61.8312 58.9996 61.9872C58.9996 62.1431 59.0577 62.2601 59.1641 62.3575C59.2705 62.4452 59.4834 62.533 59.793 62.6207L59.8704 62.6402C60.538 62.8253 60.9831 63.0203 61.1959 63.2444C61.3411 63.3906 61.4475 63.5758 61.5249 63.7804C61.6023 63.9851 61.6313 64.219 61.6313 64.4724C61.6313 65.1156 61.4185 65.6322 61.0024 66.0318C60.5767 66.4216 60.0252 66.6165 59.3189 66.6165C58.8932 66.6165 58.5159 66.5483 58.1676 66.4021C57.8192 66.2559 57.4903 66.0318 57.171 65.7199L57.916 64.4822ZM51.0175 60.3596H52.6623V63.3126C52.6623 63.7512 52.6719 64.0631 52.6913 64.2483C52.7106 64.4334 52.7493 64.5991 52.8074 64.7258C52.8654 64.8817 52.9816 64.9987 53.1364 65.0864C53.2912 65.1644 53.4847 65.2131 53.7072 65.2131C53.9297 65.2131 54.1232 65.1741 54.2781 65.0864C54.4329 65.0084 54.5393 64.8817 54.607 64.7258C54.6651 64.5991 54.6941 64.4432 54.7231 64.2483C54.7425 64.0533 54.7521 63.7415 54.7521 63.3126V62.8936V60.3498H56.3873V63.566C56.3873 64.2288 56.3486 64.7258 56.2712 65.0377C56.1938 65.3593 56.0583 65.6224 55.8648 65.8466C55.6616 66.0902 55.3714 66.2754 55.0134 66.4021C54.6554 66.5288 54.22 66.5873 53.6975 66.5873C53.1847 66.5873 52.7397 66.5288 52.3817 66.4021C52.0237 66.2754 51.7431 66.0902 51.5302 65.8466C51.3464 65.6224 51.211 65.3495 51.1239 65.0377C51.0465 64.7161 50.9981 64.2288 50.9981 63.566V62.9423V60.3596H51.0175ZM46.857 65.2034H47.4376C47.8246 65.2034 48.1052 65.1546 48.2697 65.0572C48.4341 64.9597 48.5115 64.794 48.5115 64.5699C48.5115 64.3165 48.4341 64.141 48.289 64.0338C48.1439 63.9364 47.8633 63.8779 47.4666 63.8779H46.8667V65.2034H46.857ZM45.3283 66.4411V60.3596H46.9828C47.6601 60.3596 48.1439 60.3791 48.4148 60.4278C48.6857 60.4765 48.9179 60.5448 49.1114 60.652C49.3339 60.7787 49.4984 60.9443 49.6242 61.149C49.7403 61.3634 49.7984 61.5973 49.7984 61.8702C49.7984 62.2211 49.7113 62.494 49.5371 62.6986C49.363 62.9033 49.0824 63.0592 48.705 63.1664C49.1308 63.1957 49.4694 63.3516 49.7113 63.6245C49.9532 63.8974 50.0789 64.258 50.0789 64.7063C50.0789 65.0279 50.0112 65.3106 49.8758 65.564C49.7403 65.8076 49.5468 66.0025 49.2952 66.139C49.0921 66.2462 48.8308 66.3339 48.5309 66.3729C48.2309 66.4216 47.7375 66.4411 47.0506 66.4411H45.3283ZM46.857 62.7961H47.186C47.5924 62.7961 47.873 62.7474 48.0278 62.6596C48.1826 62.5719 48.2503 62.416 48.2503 62.1918C48.2503 61.9579 48.1826 61.802 48.0374 61.7045C47.8923 61.6168 47.6214 61.5681 47.215 61.5681H46.857V62.7961Z" fill="#A6B5CB"/>
                                        <path d="M96.7626 72.9218V68.8577H99.2201V69.345H97.3237V70.5535H99.0073V71.0311H97.3237V72.4345H99.3652V72.9218H96.7626ZM94.2179 69.3158C93.9761 69.3158 93.7922 69.3255 93.6665 69.3353V70.8654H94.0728C94.2663 70.8654 94.4405 70.8557 94.5953 70.8362C94.7501 70.8167 94.8856 70.7777 94.992 70.729C95.0984 70.6705 95.1855 70.5925 95.2435 70.4951C95.3016 70.3976 95.3306 70.2612 95.3306 70.0955C95.3306 69.9395 95.3016 69.8128 95.2435 69.7154C95.1855 69.6179 95.1081 69.5302 95.0113 69.4717C94.9146 69.4133 94.7985 69.3743 94.663 69.345C94.5082 69.3255 94.3728 69.3158 94.2179 69.3158ZM95.0694 71.2163C95.1274 71.2942 95.2145 71.4014 95.3016 71.5281C95.3983 71.6548 95.4951 71.7913 95.5919 71.9472C95.6886 72.1032 95.795 72.2591 95.8918 72.4345C95.9885 72.6002 96.0756 72.7659 96.1433 72.9218H95.5241C95.4467 72.7756 95.3596 72.6197 95.2726 72.4735C95.1855 72.3176 95.0887 72.1714 94.992 72.0349C94.8952 71.8985 94.8081 71.762 94.7114 71.6451C94.6243 71.5281 94.5372 71.4209 94.4598 71.3332C94.4115 71.3332 94.3534 71.343 94.305 71.343C94.2566 71.343 94.1986 71.343 94.1405 71.343H93.6665V72.9316H93.1053V68.926C93.2601 68.887 93.4439 68.8577 93.6374 68.848C93.8309 68.8382 94.0148 68.8285 94.1792 68.8285C94.7501 68.8285 95.1758 68.9357 95.4757 69.1501C95.7757 69.3645 95.9208 69.6861 95.9208 70.115C95.9208 70.3879 95.8531 70.612 95.708 70.8069C95.5531 70.9824 95.35 71.1286 95.0694 71.2163ZM89.777 72.9218V68.8577H92.2345V69.345H90.3381V70.5535H92.0216V71.0311H90.3381V72.4345H92.3796V72.9218H89.777ZM88.2095 68.8577H88.7707V72.9218H88.2095V71.0506H86.2358V72.9218H85.6746V68.8577H86.2358V70.5535H88.2095V68.8577ZM81.0111 72.9218V68.8577H83.4686V69.345H81.5722V70.5535H83.2558V71.0311H81.5722V72.4345H83.6137V72.9218H81.0111ZM79.5307 72.9218C79.4437 72.7756 79.3469 72.6197 79.2405 72.4345C79.1341 72.2591 79.0083 72.0642 78.8825 71.879C78.7567 71.6841 78.6213 71.4892 78.4858 71.2942C78.3503 71.0993 78.2149 70.9044 78.0794 70.7192C77.944 70.534 77.8085 70.3586 77.6827 70.1929C77.557 70.0273 77.4409 69.8811 77.3248 69.7544V72.9218H76.7733V68.8577H77.2183C77.4022 69.0527 77.5957 69.2768 77.7989 69.54C78.002 69.8031 78.2149 70.0662 78.4181 70.3391C78.6213 70.612 78.8148 70.8849 78.9986 71.148C79.1824 71.4112 79.3276 71.6548 79.4533 71.8595V68.848H80.0048V72.9121H79.5307V72.9218ZM75.2059 68.8577H75.767V72.9218H75.2059V68.8577ZM74.6157 72.4248V72.9218H72.1871V68.8577H72.7483V72.4248H74.6157ZM70.7358 70.9239H71.297V72.8244C71.2486 72.8439 71.1809 72.8536 71.0938 72.8731C71.0067 72.8926 70.91 72.9121 70.7939 72.9316C70.6778 72.9511 70.552 72.9706 70.4165 72.9803C70.2811 72.99 70.1456 72.9998 70.0005 72.9998C69.7199 72.9998 69.4587 72.9511 69.2265 72.8633C68.9943 72.7659 68.7911 72.6294 68.6266 72.454C68.4621 72.2786 68.3267 72.0544 68.2396 71.7913C68.1525 71.5281 68.1041 71.226 68.1041 70.8849C68.1041 70.5438 68.1525 70.2417 68.2589 69.9785C68.3654 69.7154 68.5008 69.4912 68.675 69.3158C68.8491 69.1404 69.0523 69.0039 69.2845 68.9065C69.5167 68.809 69.7683 68.77 70.0392 68.77C70.223 68.77 70.3875 68.7798 70.523 68.809C70.6681 68.8285 70.7842 68.8577 70.8906 68.887C70.9874 68.9162 71.0745 68.9454 71.1422 68.9844C71.2099 69.0137 71.2486 69.0429 71.2777 69.0527L71.0938 69.5302C70.9777 69.4522 70.8326 69.3938 70.6488 69.345C70.4649 69.2963 70.2714 69.2671 70.0779 69.2671C69.8747 69.2671 69.6812 69.3061 69.5167 69.3743C69.3523 69.4522 69.2071 69.5594 69.0813 69.6959C68.9652 69.8323 68.8685 70.0078 68.8008 70.2124C68.733 70.4171 68.704 70.6413 68.704 70.8849C68.704 71.1286 68.733 71.3527 68.7911 71.5476C68.8491 71.7426 68.9362 71.918 69.0426 72.0642C69.1588 72.2104 69.2942 72.3176 69.4684 72.3955C69.6328 72.4735 69.836 72.5125 70.0682 72.5125C70.2327 72.5125 70.3682 72.5027 70.4843 72.4833C70.6004 72.4638 70.6778 72.4443 70.7358 72.4345V70.9239ZM66.5851 71.4112C66.4593 71.0701 66.3335 70.7387 66.2174 70.4268C66.0917 70.1052 65.9659 69.8031 65.8401 69.5107C65.7046 69.8031 65.5789 70.1052 65.4531 70.4268C65.3273 70.7485 65.2112 71.0701 65.0854 71.4112H66.5851ZM67.1076 72.9218C67.0398 72.7464 66.9818 72.571 66.9237 72.4053C66.8657 72.2396 66.8076 72.0642 66.7399 71.8887H64.9113L64.5436 72.9218H63.9631C64.1179 72.493 64.263 72.0934 64.3985 71.7328C64.5339 71.3722 64.6694 71.0213 64.7952 70.69C64.9209 70.3586 65.0564 70.0467 65.1822 69.7446C65.308 69.4425 65.4434 69.1501 65.5789 68.8577H66.1013C66.2368 69.1501 66.3722 69.4425 66.5077 69.7446C66.6335 70.0467 66.7689 70.3586 66.8947 70.69C67.0205 71.0213 67.156 71.3625 67.2914 71.7328C67.4269 72.0934 67.572 72.493 67.7268 72.9218H67.1076ZM63.8179 68.8577V69.3548H62.5505V72.9218H61.9893V69.3548H60.7218V68.8577H63.8179Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.3301 49.5314H72.816L89.7092 32.5149H92.6602L96.8884 28.2656H79.9952L84.2233 32.5149L67.3301 49.5314Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M92.6602 32.5149V35.4972L78.7374 49.5314H84.2233L92.6602 41.0232L96.8883 45.2724V28.2656L92.6602 32.5149Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M96.8884 32.5149V38.0408L110.821 24.0066H113.772L118 19.7573H101.107L105.325 24.0066L96.8884 32.5149Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M113.772 24.0066V26.9889L91.6733 49.5314H97.1593L113.772 32.5149L118 36.7739V19.7573L113.772 24.0066Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M92.6602 28.2658H87.1743L101.107 14.2315V11.2493L105.325 7V24.0068L101.107 19.7575L92.6602 28.2658Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M101.107 11.2493H98.1461L84.2233 25.2835V19.7575L92.6602 11.2493L88.4418 7H105.325L101.107 11.2493Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2221 49.5316H53.7362L79.9952 22.7398V19.7576L84.2233 15.5083V32.5151L79.9952 28.2658L59.2221 49.5316Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M79.9952 19.7576H77.0442L47.4859 49.5316H42L71.5582 19.7576L67.3301 15.5083H84.2233L79.9952 19.7576Z" fill="#A6B5CB"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_2347">
                                        <rect width="76" height="66" transform="translate(42 7)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <!-- --- -->
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1234)">
                                        <path d="M54.2976 29.8291C54.2976 30.0113 54.1485 30.1604 53.9662 30.1604H49.2599C49.0776 30.1604 48.9285 30.0113 48.9285 29.8291V25.1246C48.9285 24.9424 49.0776 24.7933 49.2599 24.7933H53.9662C54.1485 24.7933 54.2976 24.9424 54.2976 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M61.0584 29.8291C61.0584 30.0113 60.9092 30.1604 60.7269 30.1604H56.0206C55.8384 30.1604 55.6892 30.0113 55.6892 29.8291V25.1246C55.6892 24.9424 55.8384 24.7933 56.0206 24.7933H60.7269C60.9092 24.7933 61.0584 24.9424 61.0584 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M104.31 29.8291C104.31 30.0113 104.161 30.1604 103.979 30.1604H99.2723C99.0901 30.1604 98.9409 30.0113 98.9409 29.8291V25.1246C98.9409 24.9424 99.0901 24.7933 99.2723 24.7933H103.979C104.161 24.7933 104.31 24.9424 104.31 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M111.071 29.8291C111.071 30.0113 110.922 30.1604 110.739 30.1604H106.033C105.851 30.1604 105.702 30.0113 105.702 29.8291V25.1246C105.702 24.9424 105.851 24.7933 106.033 24.7933H110.739C110.922 24.7933 111.071 24.9424 111.071 25.1246V29.8291Z" fill="#A6B5CB"/>
                                        <path d="M121.777 25.3897L115.894 19.5092V15.3514C115.894 15.1195 115.695 14.9372 115.463 14.9372H113.607C113.375 14.9372 113.193 15.1195 113.193 15.3514V16.8256L105.404 9.04011C105.189 8.82477 104.824 8.82477 104.592 9.04011L103.78 9.8518C103.565 10.0671 103.2 10.4316 102.968 10.6635L95.9254 17.7036L82.0055 3.78902C81.79 3.55711 81.4255 3.20925 81.1935 2.97734L80.398 2.16566C80.1826 1.95031 79.818 1.95031 79.586 2.16566L71.7975 9.95119V8.47691C71.7975 8.245 71.6152 8.06278 71.3666 8.06278H69.5106C69.2786 8.06278 69.0797 8.26156 69.0797 8.47691V12.6347L64.042 17.6705L56.9992 10.6303C56.7837 10.415 56.4192 10.0506 56.1872 9.81867L55.3752 9.00698C55.1597 8.79164 54.7952 8.79164 54.5632 9.00698L46.7746 16.7925V15.3182C46.7746 15.0863 46.5923 14.9041 46.3437 14.9041H44.4877C44.2557 14.9041 44.0569 15.0863 44.0569 15.3182V19.476L38.174 25.3566C37.9586 25.5719 37.9586 25.9364 38.174 26.1683L38.986 26.98C39.2015 27.1953 39.566 27.1953 39.798 26.98L54.5466 12.2206C54.762 12.0052 55.1266 12.0052 55.3586 12.2206L70.1237 26.98C70.3392 27.1953 70.7037 27.1953 70.9357 26.98L71.7477 26.1683C71.9632 25.9529 71.9632 25.5885 71.7477 25.3566L65.6494 19.2607L79.5694 5.34613C79.7849 5.13079 80.1494 5.13079 80.3814 5.34613L94.3014 19.2607L88.2032 25.3566C87.9877 25.5719 87.9877 25.9364 88.2032 26.1683L89.0152 26.98C89.2306 27.1953 89.5952 27.1953 89.8272 26.98L104.576 12.2206C104.791 12.0052 105.156 12.0052 105.388 12.2206L120.136 26.98C120.352 27.1953 120.716 27.1953 120.948 26.98L121.76 26.1683C122.009 25.9861 122.009 25.6216 121.777 25.3897Z" fill="#A6B5CB"/>
                                        <path d="M55.7236 13.7942C55.6407 13.7114 55.4916 13.5623 55.4087 13.4795L55.0939 13.1648C55.011 13.082 54.8619 13.082 54.779 13.1648L48.515 19.4429C48.4322 19.5257 48.4322 19.6748 48.515 19.7576L48.8299 20.0724C48.9127 20.1552 49.0619 20.1552 49.1447 20.0724L54.7956 14.4237C54.8785 14.3409 55.0276 14.3409 55.1105 14.4237L60.7613 20.0724C60.8442 20.1552 60.9933 20.1552 61.0762 20.0724L61.391 19.7576C61.4739 19.6748 61.4739 19.5257 61.391 19.4429L55.7236 13.7942Z" fill="#A6B5CB"/>
                                        <path d="M80.7792 6.87005C80.6964 6.78723 80.5472 6.63814 80.4644 6.55532L80.1495 6.24059C80.0667 6.15776 79.9175 6.15776 79.8347 6.24059L73.5541 12.5187C73.4712 12.6015 73.4712 12.7506 73.5541 12.8334L73.8689 13.1482C73.9518 13.231 74.1009 13.231 74.1838 13.1482L79.8347 7.49952C79.9175 7.4167 80.0667 7.4167 80.1495 7.49952L85.8004 13.1482C85.8832 13.231 86.0324 13.231 86.1152 13.1482L86.4301 12.8334C86.5129 12.7506 86.5129 12.6181 86.4301 12.5187L80.7792 6.87005Z" fill="#A6B5CB"/>
                                        <path d="M105.785 13.7942C105.702 13.7114 105.553 13.5623 105.47 13.4795L105.155 13.1648C105.073 13.082 104.923 13.082 104.841 13.1648L98.5599 19.4429C98.4771 19.5257 98.4771 19.6748 98.5599 19.7576L98.8748 20.0724C98.9577 20.1552 99.1068 20.1552 99.1897 20.0724L104.857 14.4072C104.94 14.3243 105.089 14.3243 105.172 14.4072L110.823 20.0558C110.906 20.1386 111.055 20.1386 111.138 20.0558L111.453 19.7411C111.535 19.6582 111.535 19.5092 111.453 19.4263L105.785 13.7942Z" fill="#A6B5CB"/>
                                        <path d="M79.9999 36.041C99.9519 36.041 117.219 40.2485 125.571 46.3775C123.069 38.5423 103.631 32.4298 79.9999 32.4298C56.369 32.4298 36.9308 38.5257 34.4285 46.3775C42.7805 40.2485 60.0479 36.041 79.9999 36.041Z" fill="#E3E3E3"/>
                                        <path d="M54.2976 34.0532V31.5188C54.2976 31.3366 54.1485 31.1875 53.9662 31.1875H49.2599C49.0776 31.1875 48.9285 31.3366 48.9285 31.5188V35.511C50.6022 34.9809 52.4085 34.5005 54.2976 34.0532Z" fill="#A6B5CB"/>
                                        <path d="M61.0584 32.7612V31.5188C61.0584 31.3366 60.9092 31.1875 60.7269 31.1875H56.0206C55.8384 31.1875 55.6892 31.3366 55.6892 31.5188V33.7551C57.4126 33.3741 59.2024 33.0428 61.0584 32.7612Z" fill="#A6B5CB"/>
                                        <path d="M104.31 33.7385V31.5022C104.31 31.32 104.161 31.1709 103.979 31.1709H99.2723C99.0901 31.1709 98.9409 31.32 98.9409 31.5022V32.7446C100.797 33.0427 102.587 33.374 104.31 33.7385Z" fill="#A6B5CB"/>
                                        <path d="M111.071 35.511V31.5188C111.071 31.3366 110.922 31.1875 110.74 31.1875H106.033C105.851 31.1875 105.702 31.3366 105.702 31.5188V34.0532C107.591 34.5005 109.397 34.9809 111.071 35.511Z" fill="#A6B5CB"/>
                                        <path d="M79.3035 23.7499C79.3035 23.9321 79.1543 24.0812 78.972 24.0812H74.2658C74.0835 24.0812 73.9343 23.9321 73.9343 23.7499V19.0454C73.9343 18.8632 74.0835 18.7141 74.2658 18.7141H78.972C79.1543 18.7141 79.3035 18.8632 79.3035 19.0454V23.7499Z" fill="#A6B5CB"/>
                                        <path d="M86.0642 23.7499C86.0642 23.9321 85.9151 24.0812 85.7328 24.0812H81.0265C80.8442 24.0812 80.6951 23.9321 80.6951 23.7499V19.0454C80.6951 18.8632 80.8442 18.7141 81.0265 18.7141H85.7328C85.9151 18.7141 86.0642 18.8632 86.0642 19.0454V23.7499Z" fill="#A6B5CB"/>
                                        <path d="M79.3035 30.1439C79.3035 30.3261 79.1543 30.4752 78.972 30.4752H74.2658C74.0835 30.4752 73.9343 30.3261 73.9343 30.1439V25.4395C73.9343 25.2572 74.0835 25.1082 74.2658 25.1082H78.972C79.1543 25.1082 79.3035 25.2572 79.3035 25.4395V30.1439Z" fill="#A6B5CB"/>
                                        <path d="M86.0642 30.1439C86.0642 30.3261 85.9151 30.4752 85.7328 30.4752H81.0265C80.8442 30.4752 80.6951 30.3261 80.6951 30.1439V25.4395C80.6951 25.2572 80.8442 25.1082 81.0265 25.1082H85.7328C85.9151 25.1082 86.0642 25.2572 86.0642 25.4395V30.1439Z" fill="#A6B5CB"/>
                                        <path d="M22 52.7881H29.656C31.4291 52.7881 32.7549 53.1691 33.6331 53.9311C34.5114 54.6931 34.9589 55.7532 34.9589 57.1281C34.9589 57.8901 34.8429 58.5196 34.6274 59.0331C34.3954 59.53 34.1469 59.9441 33.8486 60.2423C33.5503 60.557 33.252 60.7724 32.9537 60.9049C32.6554 61.0374 32.44 61.1368 32.3074 61.17V61.2196C32.5394 61.2528 32.8046 61.319 33.0863 61.4516C33.368 61.5675 33.6166 61.7663 33.8651 62.0313C34.0971 62.2964 34.296 62.6277 34.4617 63.0584C34.6109 63.4725 34.6937 64.0026 34.6937 64.632C34.6937 65.5762 34.76 66.4376 34.9091 67.1996C35.0583 67.9781 35.2737 68.5248 35.572 68.8561H32.556C32.3406 68.5082 32.2246 68.1272 32.1914 67.7131C32.1583 67.299 32.1417 66.8849 32.1417 66.5039C32.1417 65.775 32.092 65.129 32.0091 64.5989C31.9263 64.0688 31.7606 63.6216 31.512 63.2737C31.28 62.9258 30.9486 62.6608 30.5343 62.4951C30.12 62.3295 29.5897 62.2467 28.9434 62.2467H24.8171V68.8561H22V52.7881ZM24.8171 60.0932H29.424C30.3189 60.0932 30.9983 59.8779 31.4623 59.4472C31.9263 59.0165 32.1583 58.387 32.1583 57.5257C32.1583 57.0121 32.0754 56.598 31.9263 56.2833C31.7771 55.9686 31.5783 55.7035 31.3131 55.5379C31.048 55.3557 30.7497 55.2397 30.4183 55.1734C30.0869 55.1072 29.7389 55.0906 29.3743 55.0906H24.8171V60.0932Z" fill="#A6B5CB"/>
                                        <path d="M39.4663 63.6879C39.4663 64.1351 39.5326 64.5658 39.6652 64.9965C39.7978 65.4106 39.9801 65.7751 40.2452 66.0898C40.4938 66.4045 40.8252 66.653 41.2063 66.8352C41.5875 67.0174 42.0681 67.1168 42.5983 67.1168C43.3441 67.1168 43.9572 66.9512 44.4046 66.6364C44.8686 66.3217 45.2001 65.8248 45.4321 65.1953H47.8515C47.7189 65.8248 47.4869 66.388 47.1555 66.8849C46.8241 67.3819 46.4263 67.796 45.9623 68.1273C45.4983 68.4586 44.9846 68.7236 44.4046 68.8893C43.8246 69.0549 43.2281 69.1543 42.5983 69.1543C41.6869 69.1543 40.8749 69.0052 40.1789 68.7071C39.4663 68.4089 38.8863 67.9948 38.3892 67.4481C37.9086 66.9015 37.5275 66.272 37.2955 65.51C37.0469 64.7646 36.9309 63.9363 36.9309 63.0418C36.9309 62.2136 37.0635 61.435 37.3286 60.6896C37.5938 59.9442 37.9583 59.2982 38.4555 58.735C38.9361 58.1717 39.5326 57.7245 40.2121 57.3932C40.9081 57.0619 41.6869 56.8962 42.5486 56.8962C43.4601 56.8962 44.2886 57.095 45.0178 57.476C45.7469 57.857 46.3435 58.3705 46.8241 59C47.3046 59.6295 47.6526 60.3583 47.8681 61.17C48.0835 61.9817 48.1332 62.8265 48.0338 63.7044H39.4663V63.6879ZM45.4486 61.9982C45.4155 61.6007 45.3326 61.2031 45.1835 60.8221C45.0343 60.4411 44.8521 60.1264 44.6035 59.8448C44.3549 59.5632 44.0566 59.3479 43.7086 59.1656C43.3606 59 42.9629 58.9006 42.5321 58.9006C42.0846 58.9006 41.6703 58.9834 41.3058 59.1325C40.9412 59.2816 40.6263 59.5135 40.3612 59.7785C40.0961 60.0601 39.8972 60.3749 39.7315 60.7559C39.5823 61.1369 39.4829 61.5344 39.4663 61.9651H45.4486V61.9982Z" fill="#A6B5CB"/>
                                        <path d="M59.6835 66.2554C59.6835 66.5702 59.7166 66.8021 59.7995 66.9346C59.8824 67.0671 60.0481 67.1334 60.2801 67.1334C60.3629 67.1334 60.4458 67.1334 60.5452 67.1334C60.6446 67.1334 60.7772 67.1168 60.9098 67.0837V68.8561C60.8269 68.8893 60.7109 68.9224 60.5618 68.9555C60.4126 68.9887 60.2801 69.0218 60.1309 69.0549C59.9818 69.0881 59.8326 69.1046 59.6835 69.1212C59.5344 69.1378 59.4018 69.1377 59.3024 69.1377C58.7721 69.1377 58.3412 69.0384 57.9932 68.823C57.6452 68.6077 57.4298 68.2432 57.3138 67.7297C56.8001 68.2267 56.1869 68.5911 55.4412 68.8065C54.6955 69.0218 53.9829 69.1377 53.2869 69.1377C52.7566 69.1377 52.2595 69.0715 51.7789 68.9224C51.2984 68.7733 50.8841 68.5745 50.5029 68.2929C50.1384 68.0113 49.8401 67.6635 49.6246 67.2328C49.4092 66.8021 49.2932 66.3051 49.2932 65.7419C49.2932 65.0296 49.4258 64.4333 49.6909 63.9861C49.9561 63.5388 50.3041 63.1909 50.7184 62.9259C51.1492 62.6774 51.6298 62.4952 52.1601 62.3793C52.6904 62.2633 53.2206 62.1805 53.7675 62.1142C54.2315 62.0314 54.6789 61.9651 55.0932 61.9154C55.5075 61.8823 55.8886 61.816 56.2035 61.7167C56.5184 61.6338 56.7835 61.4847 56.9658 61.3025C57.1481 61.1203 57.2475 60.8387 57.2475 60.4577C57.2475 60.1264 57.1646 59.8614 57.0155 59.646C56.8664 59.4307 56.6675 59.2816 56.4355 59.1657C56.2035 59.0497 55.9384 58.9834 55.6566 58.9337C55.3749 58.9006 55.1098 58.884 54.8446 58.884C54.1321 58.884 53.5355 59.0331 53.0715 59.3313C52.6075 59.6295 52.3424 60.0933 52.2926 60.7228H49.7241C49.7738 59.9773 49.9561 59.3479 50.2709 58.8509C50.5858 58.354 50.9835 57.9564 51.4806 57.6582C51.9612 57.3601 52.5246 57.1447 53.1378 57.0288C53.7509 56.9128 54.3806 56.8466 55.0269 56.8466C55.5904 56.8466 56.1538 56.9128 56.7172 57.0288C57.2641 57.1447 57.7778 57.3435 58.2086 57.6085C58.6561 57.8736 59.0041 58.2214 59.2692 58.6521C59.5344 59.0828 59.6669 59.5963 59.6669 60.2092V66.2554H59.6835ZM57.1315 63.0087C56.7338 63.2572 56.2698 63.4228 55.6898 63.4725C55.1264 63.5222 54.5464 63.6051 53.9829 63.7044C53.7178 63.7541 53.4526 63.8204 53.2041 63.9032C52.9555 63.9861 52.7235 64.102 52.5246 64.2345C52.3258 64.3836 52.1766 64.5658 52.0606 64.7977C51.9446 65.0296 51.8949 65.3112 51.8949 65.6425C51.8949 65.9242 51.9778 66.1726 52.1435 66.3548C52.3092 66.5536 52.5081 66.7027 52.7401 66.8187C52.9721 66.9346 53.2206 67.0174 53.5024 67.0506C53.7841 67.1003 54.0326 67.1168 54.2481 67.1168C54.5298 67.1168 54.8446 67.0837 55.1761 67.0009C55.5075 66.918 55.8224 66.8021 56.1041 66.6199C56.4024 66.4377 56.6344 66.2058 56.8332 65.9407C57.0321 65.6591 57.1315 65.3278 57.1315 64.9137V63.0087Z" fill="#A6B5CB"/>
                                        <path d="M62.5176 52.7881H65.0861V68.823H62.5176V52.7881Z" fill="#A6B5CB"/>
                                        <path d="M74.4814 52.7881H86.0317V55.2066H77.282V59.4141H85.3688V61.7H77.282V66.3879H86.1808V68.8064H74.4648V52.7881H74.4814Z" fill="#A6B5CB"/>
                                        <path d="M90.2083 65.0959C90.2912 65.8413 90.5729 66.3714 91.07 66.6695C91.5672 66.9677 92.1637 67.1168 92.8432 67.1168C93.0752 67.1168 93.3569 67.1002 93.6717 67.0671C93.9866 67.034 94.2683 66.9511 94.5335 66.8517C94.7986 66.7524 95.0306 66.5867 95.1963 66.3879C95.362 66.1891 95.4449 65.9241 95.4283 65.5928C95.4117 65.2615 95.2957 64.9965 95.0637 64.7811C94.8317 64.5658 94.55 64.4001 94.202 64.2676C93.854 64.1351 93.4563 64.0357 92.9923 63.9363C92.5449 63.8535 92.0809 63.7541 91.6169 63.6381C91.1363 63.5388 90.6723 63.4062 90.2415 63.2571C89.794 63.1081 89.3963 62.9093 89.0483 62.6442C88.7003 62.3958 88.4186 62.0645 88.2032 61.6669C87.9877 61.2694 87.8883 60.7724 87.8883 60.1926C87.8883 59.5632 88.0375 59.0331 88.3523 58.6024C88.6672 58.1717 89.0483 57.8238 89.5289 57.5754C89.9929 57.3103 90.5232 57.1281 91.1032 57.0287C91.6832 56.9293 92.23 56.8796 92.7603 56.8796C93.3569 56.8796 93.9369 56.9459 94.4837 57.0784C95.0306 57.2109 95.5277 57.4097 95.9752 57.6913C96.4226 57.9729 96.7872 58.3539 97.0689 58.8012C97.3672 59.265 97.5495 59.8116 97.6157 60.4577H94.9477C94.8317 59.8448 94.55 59.4306 94.1026 59.2153C93.6552 59 93.158 58.9006 92.578 58.9006C92.3957 58.9006 92.1803 58.9171 91.9317 58.9503C91.6832 58.9834 91.4512 59.0331 91.2357 59.1159C91.0203 59.1987 90.838 59.3147 90.6889 59.4803C90.5397 59.6294 90.4569 59.8448 90.4569 60.0932C90.4569 60.408 90.5729 60.6564 90.7883 60.8552C91.0037 61.054 91.2855 61.2031 91.65 61.3356C91.998 61.4681 92.3957 61.5675 92.8597 61.6669C93.3072 61.7497 93.7712 61.8491 94.2517 61.9651C94.7157 62.0645 95.1797 62.197 95.6272 62.3461C96.0746 62.4952 96.4723 62.6939 96.8369 62.959C97.1849 63.2075 97.4666 63.5387 97.6986 63.9197C97.914 64.3173 98.03 64.7811 98.03 65.3609C98.03 66.0566 97.8809 66.6364 97.566 67.1168C97.2512 67.5972 96.8369 67.9782 96.3397 68.2929C95.8426 68.5911 95.2792 68.8064 94.666 68.9389C94.0529 69.0714 93.4397 69.1377 92.8432 69.1377C92.114 69.1377 91.4346 69.0549 90.8049 68.8892C90.1752 68.7236 89.6449 68.4751 89.1809 68.1438C88.7169 67.8125 88.3689 67.3818 88.1037 66.8849C87.8386 66.3879 87.706 65.7916 87.6895 65.0959H90.2083Z" fill="#A6B5CB"/>
                                        <path d="M98.7754 57.2109H100.714V53.7323H103.283V57.2109H105.603V59.1159H103.283V65.3112C103.283 65.5762 103.299 65.8082 103.316 66.0069C103.333 66.2057 103.399 66.3714 103.465 66.5039C103.548 66.6364 103.664 66.7358 103.83 66.8021C103.995 66.8683 104.227 66.9014 104.509 66.9014C104.691 66.9014 104.874 66.9014 105.056 66.8849C105.238 66.8849 105.421 66.8517 105.603 66.8021V68.7733C105.321 68.8064 105.039 68.8395 104.774 68.8561C104.509 68.8892 104.227 68.9058 103.946 68.9058C103.266 68.9058 102.736 68.8395 102.322 68.707C101.907 68.5745 101.593 68.3923 101.361 68.1438C101.129 67.8953 100.963 67.5806 100.897 67.2162C100.814 66.8352 100.764 66.4211 100.747 65.9407V59.0828H98.8085V57.2109H98.7754Z" fill="#A6B5CB"/>
                                        <path d="M117.153 66.2554C117.153 66.5702 117.186 66.8021 117.269 66.9346C117.352 67.0671 117.518 67.1334 117.75 67.1334C117.833 67.1334 117.916 67.1334 118.015 67.1334C118.114 67.1334 118.247 67.1168 118.38 67.0837V68.8561C118.297 68.8893 118.181 68.9224 118.032 68.9555C117.882 68.9887 117.75 69.0218 117.601 69.0549C117.452 69.0881 117.302 69.1046 117.153 69.1212C117.004 69.1378 116.872 69.1377 116.772 69.1377C116.242 69.1377 115.811 69.0384 115.463 68.823C115.115 68.6077 114.9 68.2432 114.784 67.7297C114.27 68.2267 113.657 68.5911 112.911 68.8065C112.165 69.0384 111.453 69.1377 110.757 69.1377C110.226 69.1377 109.729 69.0715 109.249 68.9224C108.768 68.7733 108.354 68.5745 107.973 68.2929C107.608 68.0113 107.31 67.6635 107.094 67.2328C106.879 66.8021 106.763 66.3051 106.763 65.7419C106.763 65.0296 106.896 64.4333 107.161 63.9861C107.426 63.5388 107.774 63.1909 108.188 62.9259C108.619 62.6774 109.1 62.4952 109.63 62.3793C110.16 62.2633 110.69 62.1805 111.237 62.1142C111.701 62.0314 112.149 61.9651 112.563 61.9154C112.977 61.8823 113.358 61.816 113.673 61.7167C113.988 61.6338 114.253 61.4847 114.436 61.3025C114.618 61.1203 114.717 60.8387 114.717 60.4577C114.717 60.1264 114.634 59.8614 114.485 59.646C114.336 59.4307 114.137 59.2816 113.905 59.1657C113.673 59.0497 113.408 58.9834 113.126 58.9337C112.845 58.9006 112.58 58.884 112.314 58.884C111.602 58.884 111.005 59.0331 110.541 59.3313C110.077 59.6295 109.812 60.0933 109.762 60.7228H107.194C107.244 59.9773 107.426 59.3479 107.741 58.8509C108.056 58.354 108.453 57.9564 108.95 57.6582C109.431 57.3601 109.994 57.1447 110.608 57.0288C111.221 56.9128 111.85 56.8466 112.497 56.8466C113.06 56.8466 113.624 56.9128 114.187 57.0288C114.734 57.1447 115.248 57.3435 115.678 57.6085C116.126 57.8736 116.474 58.2214 116.739 58.6521C117.004 59.0828 117.137 59.5963 117.137 60.2092V66.2554H117.153ZM114.601 63.0087C114.204 63.2572 113.74 63.4228 113.16 63.4725C112.596 63.5222 112.016 63.6051 111.453 63.7044C111.188 63.7541 110.922 63.8204 110.674 63.9032C110.425 63.9861 110.193 64.102 109.994 64.2345C109.796 64.3836 109.646 64.5658 109.53 64.7977C109.414 65.0296 109.365 65.3112 109.365 65.6425C109.365 65.9242 109.448 66.1726 109.613 66.3548C109.779 66.5536 109.978 66.7027 110.21 66.8187C110.442 66.9346 110.69 67.0174 110.972 67.0506C111.254 67.1003 111.502 67.1168 111.718 67.1168C112 67.1168 112.314 67.0837 112.646 67.0009C112.977 66.918 113.292 66.8021 113.574 66.6199C113.872 66.4377 114.104 66.2058 114.303 65.9407C114.502 65.6591 114.601 65.3278 114.601 64.9137V63.0087Z" fill="#A6B5CB"/>
                                        <path d="M118.76 57.2109H120.699V53.7323H123.251V57.2109H125.571V59.1159H123.251V65.3112C123.251 65.5762 123.268 65.8082 123.284 66.0069C123.301 66.2057 123.367 66.3714 123.434 66.5039C123.516 66.6364 123.632 66.7358 123.798 66.8021C123.964 66.8683 124.196 66.9014 124.478 66.9014C124.66 66.9014 124.842 66.9014 125.024 66.8849C125.207 66.8849 125.389 66.8517 125.571 66.8021V68.7733C125.29 68.8064 125.008 68.8395 124.743 68.8561C124.478 68.8892 124.196 68.9058 123.914 68.9058C123.235 68.9058 122.704 68.8395 122.29 68.707C121.876 68.5745 121.561 68.3923 121.329 68.1438C121.097 67.8953 120.931 67.5806 120.865 67.2162C120.782 66.8352 120.732 66.4211 120.716 65.9407V59.0828H118.777V57.2109H118.76Z" fill="#A6B5CB"/>
                                        <path d="M129.416 63.6879C129.416 64.1351 129.483 64.5658 129.615 64.9965C129.748 65.4106 129.93 65.7751 130.195 66.0898C130.444 66.4045 130.775 66.653 131.156 66.8352C131.554 67.0174 132.018 67.1168 132.548 67.1168C133.294 67.1168 133.907 66.9512 134.355 66.6364C134.819 66.3217 135.15 65.8248 135.382 65.1953H137.801C137.669 65.8248 137.437 66.388 137.105 66.8849C136.774 67.3819 136.376 67.796 135.912 68.1273C135.448 68.4586 134.935 68.7236 134.355 68.8893C133.775 69.0549 133.178 69.1543 132.548 69.1543C131.637 69.1543 130.825 69.0052 130.129 68.7071C129.416 68.4089 128.836 67.9948 128.339 67.4481C127.859 66.9015 127.477 66.272 127.245 65.51C126.997 64.7646 126.881 63.9363 126.881 63.0418C126.881 62.2136 127.013 61.435 127.279 60.6896C127.544 59.9442 127.908 59.2982 128.405 58.735C128.886 58.1717 129.483 57.7245 130.162 57.3932C130.858 57.0619 131.637 56.8962 132.499 56.8962C133.41 56.8962 134.239 57.095 134.968 57.476C135.697 57.857 136.293 58.3705 136.774 59C137.255 59.6295 137.603 60.3583 137.818 61.17C138.033 61.9817 138.083 62.8265 137.984 63.7044H129.416V63.6879ZM135.382 61.9982C135.349 61.6007 135.266 61.2031 135.117 60.8221C134.968 60.4411 134.785 60.1264 134.537 59.8448C134.288 59.5632 133.99 59.3479 133.642 59.1656C133.294 59 132.896 58.9006 132.465 58.9006C132.018 58.9006 131.604 58.9834 131.239 59.1325C130.875 59.2816 130.56 59.5135 130.295 59.7785C130.029 60.0601 129.831 60.3749 129.665 60.7559C129.516 61.1369 129.416 61.5344 129.4 61.9651H135.382V61.9982Z" fill="#A6B5CB"/>
                                        <path d="M37.113 73.7097H37.8588L38.6542 76.0122H38.6708L39.4496 73.7097H40.1622L38.969 76.9564C38.9193 77.089 38.853 77.2215 38.8033 77.354C38.7536 77.4865 38.6873 77.5859 38.6045 77.6853C38.5216 77.7847 38.4388 77.8675 38.3228 77.9172C38.2068 77.9669 38.0576 78 37.8753 78C37.7096 78 37.5605 77.9835 37.4113 77.9669V77.4037C37.461 77.4037 37.5273 77.4203 37.577 77.4368C37.6268 77.4534 37.6765 77.4534 37.7428 77.4534C37.8256 77.4534 37.8919 77.4368 37.9416 77.4203C37.9913 77.4037 38.041 77.3706 38.0742 77.3374C38.1073 77.3043 38.1405 77.2546 38.157 77.2049C38.1736 77.1552 38.2068 77.089 38.2233 77.0227L38.3062 76.7908L37.113 73.7097Z" fill="#A6B5CB"/>
                                        <path d="M43.1288 76.8735C42.8802 76.8735 42.6648 76.8404 42.4659 76.7576C42.2671 76.6747 42.1179 76.5588 41.9854 76.4263C41.8528 76.2772 41.7534 76.1115 41.6871 75.9127C41.6208 75.714 41.5876 75.4986 41.5876 75.2667C41.5876 75.0348 41.6208 74.8195 41.6871 74.6207C41.7534 74.4219 41.8528 74.2562 41.9854 74.1072C42.1179 73.9581 42.2836 73.8587 42.4659 73.7759C42.6648 73.693 42.8802 73.6599 43.1288 73.6599C43.3774 73.6599 43.5928 73.693 43.7916 73.7759C43.9905 73.8587 44.1396 73.9746 44.2722 74.1072C44.4048 74.2562 44.5042 74.4219 44.5705 74.6207C44.6368 74.8195 44.6699 75.0348 44.6699 75.2667C44.6699 75.4986 44.6368 75.7305 44.5705 75.9127C44.5042 76.1115 44.4048 76.2772 44.2722 76.4263C44.1396 76.5753 43.9739 76.6747 43.7916 76.7576C43.5928 76.8238 43.3774 76.8735 43.1288 76.8735ZM43.1288 76.3269C43.2779 76.3269 43.4105 76.2937 43.5265 76.2275C43.6425 76.1612 43.7254 76.0784 43.8082 75.979C43.8745 75.8796 43.9242 75.7637 43.9739 75.6311C44.0071 75.4986 44.0236 75.3661 44.0236 75.2336C44.0236 75.1011 44.0071 74.9685 43.9739 74.836C43.9408 74.7035 43.8911 74.5875 43.8082 74.4882C43.7419 74.3888 43.6425 74.3059 43.5265 74.2397C43.4105 74.1734 43.2779 74.1403 43.1288 74.1403C42.9796 74.1403 42.8471 74.1734 42.7311 74.2397C42.6151 74.3059 42.5322 74.3888 42.4494 74.4882C42.3831 74.5875 42.3334 74.7035 42.2836 74.836C42.2505 74.9685 42.2339 75.1011 42.2339 75.2336C42.2339 75.3661 42.2505 75.4986 42.2836 75.6311C42.3168 75.7637 42.3665 75.8796 42.4494 75.979C42.5156 76.0784 42.6151 76.1612 42.7311 76.2275C42.8471 76.2937 42.9796 76.3269 43.1288 76.3269Z" fill="#A6B5CB"/>
                                        <path d="M49.1443 76.7741H48.4814V76.3434H48.4649C48.382 76.4925 48.2494 76.625 48.1003 76.7079C47.9346 76.8073 47.7689 76.8404 47.6031 76.8404C47.2054 76.8404 46.9071 76.741 46.7249 76.5422C46.5426 76.3434 46.4597 76.0453 46.4597 75.6311V73.6765H47.1391V75.5649C47.1391 75.8299 47.1889 76.0287 47.2883 76.1281C47.3877 76.244 47.5369 76.2937 47.7191 76.2937C47.8683 76.2937 47.9843 76.2772 48.0837 76.2275C48.1831 76.1778 48.2494 76.1281 48.3157 76.0453C48.382 75.979 48.4151 75.8796 48.4483 75.7802C48.4814 75.6808 48.4814 75.5649 48.4814 75.4489V73.6599H49.1609V76.7741H49.1443Z" fill="#A6B5CB"/>
                                        <path d="M51.0495 73.7096H51.6792V74.306H51.6958C51.7124 74.2231 51.7621 74.1403 51.8118 74.0575C51.8615 73.9747 51.9444 73.9084 52.0272 73.8421C52.1101 73.7759 52.193 73.7262 52.2924 73.6765C52.3918 73.6434 52.4912 73.6102 52.5907 73.6102C52.6735 73.6102 52.7232 73.6102 52.7564 73.6102C52.7895 73.6102 52.8227 73.6102 52.8558 73.6268V74.2728C52.8061 74.2728 52.7564 74.2563 52.7067 74.2563C52.657 74.2563 52.6072 74.2397 52.5575 74.2397C52.4415 74.2397 52.3421 74.2563 52.2261 74.306C52.1267 74.3557 52.0438 74.4219 51.961 74.5047C51.8781 74.5876 51.8284 74.7035 51.7787 74.836C51.729 74.9686 51.7124 75.1176 51.7124 75.2833V76.741H51.033V73.7096H51.0495Z" fill="#A6B5CB"/>
                                        <path d="M56.8662 73.7096H57.3799V72.782H58.0594V73.7096H58.6725V74.2231H58.0594V75.8631C58.0594 75.9293 58.0594 75.9956 58.0759 76.0453C58.0759 76.095 58.0925 76.1447 58.1256 76.1778C58.1422 76.2109 58.1754 76.2441 58.2251 76.2606C58.2748 76.2772 58.3245 76.2938 58.4074 76.2938C58.4571 76.2938 58.5068 76.2938 58.5565 76.2938C58.6062 76.2938 58.6559 76.2772 58.7056 76.2772V76.8073C58.6228 76.8073 58.5565 76.8238 58.4902 76.8238C58.4239 76.8238 58.3411 76.8404 58.2748 76.8404C58.0925 76.8404 57.9599 76.8238 57.8439 76.7907C57.7279 76.7576 57.6451 76.7079 57.5954 76.6416C57.5291 76.5754 57.4959 76.4925 57.4628 76.3931C57.4462 76.2938 57.4296 76.1778 57.4296 76.0618V74.2563H56.9159V73.7096H56.8662Z" fill="#A6B5CB"/>
                                        <path d="M62.9147 76.095C62.9147 76.1778 62.9313 76.2441 62.9479 76.2772C62.9644 76.3104 63.0141 76.3269 63.0804 76.3269C63.097 76.3269 63.1301 76.3269 63.1467 76.3269C63.1799 76.3269 63.213 76.3269 63.2461 76.3104V76.7742C63.2296 76.7742 63.1964 76.7907 63.1467 76.8073C63.1136 76.8239 63.0639 76.8239 63.0307 76.8404C62.9976 76.8404 62.9478 76.857 62.9147 76.857C62.8816 76.857 62.8484 76.857 62.8153 76.857C62.6827 76.857 62.5667 76.8239 62.4673 76.7742C62.3678 76.7245 62.3181 76.6251 62.285 76.476C62.1524 76.6085 61.9867 76.7079 61.7879 76.7576C61.589 76.8239 61.4067 76.8404 61.2244 76.8404C61.0918 76.8404 60.9593 76.8239 60.8267 76.7907C60.6941 76.7576 60.5947 76.6914 60.4953 76.6251C60.3959 76.5588 60.313 76.4594 60.2633 76.3435C60.2136 76.2275 60.1804 76.095 60.1804 75.9459C60.1804 75.7637 60.2136 75.5981 60.2798 75.4821C60.3461 75.3662 60.4456 75.2668 60.5616 75.2005C60.6776 75.1343 60.7936 75.0846 60.9427 75.0514C61.0753 75.0183 61.2244 75.0017 61.3736 74.9852C61.4896 74.9686 61.6056 74.952 61.7216 74.9355C61.8376 74.9189 61.937 74.9023 62.0198 74.8858C62.1027 74.8692 62.169 74.8195 62.2187 74.7698C62.2684 74.7201 62.285 74.6539 62.285 74.5545C62.285 74.4717 62.2684 74.3888 62.2187 74.3391C62.169 74.2894 62.1193 74.2397 62.0696 74.2066C62.0033 74.1735 61.937 74.1569 61.8707 74.1404C61.7879 74.1238 61.7216 74.1238 61.6553 74.1238C61.473 74.1238 61.3073 74.1569 61.1913 74.2397C61.0753 74.3226 60.9924 74.4385 60.9758 74.6042H60.2964C60.313 74.4054 60.3627 74.2397 60.4456 74.1072C60.5284 73.9747 60.6278 73.8753 60.7604 73.7925C60.893 73.7097 61.0421 73.66 61.1913 73.6268C61.357 73.5937 61.5227 73.5771 61.6884 73.5771C61.8376 73.5771 61.9867 73.5937 62.1358 73.6268C62.285 73.66 62.4176 73.7097 62.5336 73.7759C62.6496 73.8422 62.749 73.9416 62.8153 74.0575C62.8816 74.1735 62.9147 74.306 62.9147 74.4717V76.095ZM62.2353 75.2502C62.1359 75.3165 62.0033 75.3662 61.8541 75.3662C61.705 75.3827 61.5559 75.3993 61.4067 75.4324C61.3404 75.449 61.2576 75.4656 61.1913 75.4821C61.125 75.4987 61.0587 75.5318 61.009 75.5649C60.9593 75.5981 60.9096 75.6478 60.893 75.714C60.8598 75.7803 60.8433 75.8465 60.8433 75.9294C60.8433 76.0122 60.8599 76.0619 60.9096 76.1116C60.9593 76.1613 61.009 76.211 61.0753 76.2275C61.1416 76.2607 61.2078 76.2772 61.2741 76.2938C61.3404 76.3104 61.4067 76.3104 61.473 76.3104C61.5558 76.3104 61.6221 76.2938 61.7216 76.2772C61.8044 76.2607 61.8873 76.2275 61.9701 76.1778C62.053 76.1281 62.1193 76.0619 62.169 75.9956C62.2187 75.9294 62.2518 75.83 62.2518 75.7306V75.2502H62.2353Z" fill="#A6B5CB"/>
                                        <path d="M67.6876 76.6251C67.6876 77.0889 67.555 77.4368 67.2899 77.6687C67.0247 77.9006 66.6601 78.0165 66.163 78.0165C66.0139 78.0165 65.8481 78 65.699 77.9669C65.5499 77.9337 65.4007 77.884 65.2681 77.8012C65.1356 77.7184 65.0361 77.619 64.9367 77.503C64.8539 77.3871 64.8041 77.2214 64.7876 77.0558H65.467C65.4836 77.1552 65.5167 77.2214 65.5664 77.2877C65.6161 77.3539 65.6659 77.3871 65.7321 77.4202C65.7984 77.4533 65.8647 77.4699 65.9476 77.4865C66.0304 77.503 66.1133 77.503 66.1961 77.503C66.4779 77.503 66.6767 77.4368 66.7927 77.3043C66.9253 77.1717 66.975 76.973 66.975 76.7245V76.2607H66.9584C66.859 76.4263 66.7264 76.5588 66.5607 76.6582C66.395 76.7576 66.2127 76.8073 66.0304 76.8073C65.7819 76.8073 65.583 76.7576 65.4007 76.6748C65.235 76.592 65.0859 76.476 64.9699 76.3269C64.8539 76.1778 64.771 76.0122 64.7213 75.8134C64.6716 75.6146 64.6384 75.4158 64.6384 75.1839C64.6384 74.9852 64.6716 74.7864 64.7379 74.5876C64.8041 74.4054 64.887 74.2397 65.0196 74.0907C65.1356 73.9581 65.2847 73.8422 65.4504 73.7594C65.6161 73.6765 65.815 73.6268 66.0304 73.6268C66.2293 73.6268 66.395 73.66 66.5607 73.7428C66.7264 73.8256 66.8424 73.9581 66.9419 74.1238H66.9584V73.7097H67.6379V76.6251H67.6876ZM66.1796 76.2441C66.3287 76.2441 66.4613 76.211 66.5607 76.1447C66.6601 76.0784 66.743 75.9956 66.8093 75.8962C66.8756 75.7968 66.9253 75.6809 66.9584 75.5484C66.9916 75.4158 67.0081 75.2833 67.0081 75.1508C67.0081 75.0183 66.9916 74.8858 66.9584 74.7698C66.9253 74.6539 66.8756 74.5379 66.8093 74.4385C66.743 74.3391 66.6601 74.2729 66.5607 74.2066C66.4613 74.1569 66.3287 74.1238 66.1796 74.1238C66.0304 74.1238 65.8979 74.1569 65.7984 74.2232C65.699 74.2894 65.6161 74.3723 65.5499 74.4716C65.4836 74.571 65.4339 74.687 65.4173 74.8195C65.3841 74.952 65.3676 75.068 65.3676 75.2005C65.3676 75.333 65.3841 75.449 65.4173 75.5649C65.4504 75.6809 65.5001 75.7968 65.5664 75.8962C65.6327 75.9956 65.7156 76.0619 65.815 76.1281C65.9144 76.211 66.047 76.2441 66.1796 76.2441Z" fill="#A6B5CB"/>
                                        <path d="M69.5769 72.5336H70.2563V76.7742H69.5769V72.5336Z" fill="#A6B5CB"/>
                                        <path d="M72.1951 72.5336H72.8745V73.1796H72.1951V72.5336ZM72.1951 73.7097H72.8745V76.7908H72.1951V73.7097Z" fill="#A6B5CB"/>
                                        <path d="M74.813 73.7097H75.4593V74.1569L75.4758 74.1735C75.5753 74.0078 75.7078 73.8753 75.8736 73.7759C76.0393 73.6765 76.2216 73.6268 76.4204 73.6268C76.7518 73.6268 77.017 73.7097 77.2158 73.8919C77.4147 74.0741 77.5141 74.3226 77.5141 74.6704V76.7742H76.8347V74.8361C76.8347 74.5876 76.7684 74.4219 76.6856 74.306C76.5861 74.19 76.437 74.1403 76.2381 74.1403C76.1221 74.1403 76.0227 74.1569 75.9233 74.2066C75.8238 74.2563 75.7576 74.306 75.6913 74.3723C75.625 74.4385 75.5753 74.5379 75.5421 74.6373C75.509 74.7367 75.4924 74.8361 75.4924 74.952V76.7576H74.813V73.7097Z" fill="#A6B5CB"/>
                                        <path d="M79.9506 75.4158C79.9506 75.5318 79.9672 75.6478 80.0003 75.7637C80.0335 75.8797 80.0832 75.9791 80.1495 76.0619C80.2158 76.1447 80.2986 76.211 80.398 76.2607C80.4975 76.3104 80.63 76.3269 80.7626 76.3269C80.9615 76.3269 81.1272 76.2772 81.2432 76.1944C81.3592 76.1116 81.4586 75.9791 81.5083 75.8134H82.1546C82.1215 75.9791 82.0552 76.1281 81.9723 76.2607C81.8895 76.3932 81.7735 76.5091 81.6575 76.592C81.5415 76.6748 81.3923 76.741 81.2432 76.7907C81.094 76.8404 80.9283 76.857 80.7626 76.857C80.514 76.857 80.2986 76.8239 80.1163 76.741C79.934 76.6582 79.7683 76.5588 79.6358 76.4097C79.5032 76.2607 79.4038 76.095 79.3375 75.8962C79.2712 75.6975 79.238 75.4821 79.238 75.2502C79.238 75.0349 79.2712 74.8195 79.3375 74.6207C79.4038 74.4219 79.5032 74.2563 79.6358 74.1072C79.7683 73.9581 79.9175 73.8422 80.0998 73.7594C80.282 73.6765 80.4809 73.6268 80.7129 73.6268C80.9615 73.6268 81.1769 73.6765 81.3592 73.7759C81.558 73.8753 81.7072 74.0078 81.8398 74.1735C81.9723 74.3391 82.0552 74.5379 82.1215 74.7533C82.1712 74.9686 82.1878 75.2005 82.1712 75.4158H79.9506ZM81.5249 74.9686C81.5249 74.8692 81.4918 74.7532 81.4586 74.6539C81.4255 74.5545 81.3758 74.4716 81.3095 74.3888C81.2432 74.3226 81.1603 74.2563 81.0775 74.2066C80.978 74.1569 80.8786 74.1403 80.7626 74.1403C80.6466 74.1403 80.5306 74.1569 80.4312 74.2066C80.3318 74.2563 80.2489 74.306 80.1826 74.3723C80.1163 74.4385 80.05 74.5379 80.0169 74.6373C79.9672 74.7367 79.9506 74.8361 79.9506 74.952H81.5249V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M89.5948 76.6251C89.5948 77.0889 89.4622 77.4368 89.1971 77.6687C88.9319 77.9006 88.5674 78.0165 88.0702 78.0165C87.9211 78.0165 87.7554 78 87.6062 77.9669C87.4571 77.9337 87.3079 77.884 87.1754 77.8012C87.0428 77.7184 86.9434 77.619 86.8439 77.503C86.7611 77.3871 86.7114 77.2214 86.6948 77.0558H87.3742C87.3908 77.1552 87.4239 77.2214 87.4737 77.2877C87.5234 77.3539 87.5731 77.3871 87.6394 77.4202C87.7057 77.4533 87.7719 77.4699 87.8548 77.4865C87.9377 77.503 88.0205 77.503 88.1034 77.503C88.3851 77.503 88.5839 77.4368 88.6999 77.3043C88.8325 77.1717 88.8822 76.973 88.8822 76.7245V76.2607H88.8657C88.7662 76.4263 88.6337 76.5588 88.4679 76.6582C88.3022 76.7576 88.1199 76.8073 87.9377 76.8073C87.6891 76.8073 87.4902 76.7576 87.3079 76.6748C87.1422 76.592 86.9931 76.476 86.8771 76.3269C86.7611 76.1778 86.6782 76.0122 86.6285 75.8134C86.5788 75.6146 86.5457 75.4158 86.5457 75.1839C86.5457 74.9852 86.5788 74.7864 86.6451 74.5876C86.7114 74.4054 86.7942 74.2397 86.9268 74.0907C87.0428 73.9581 87.1919 73.8422 87.3577 73.7594C87.5234 73.6765 87.7222 73.6268 87.9377 73.6268C88.1365 73.6268 88.3022 73.66 88.4679 73.7428C88.6337 73.8256 88.7497 73.9581 88.8491 74.1238H88.8657V73.7097H89.5451V76.6251H89.5948ZM88.0868 76.2441C88.2359 76.2441 88.3685 76.211 88.4679 76.1447C88.5674 76.0784 88.6502 75.9956 88.7165 75.8962C88.7828 75.7968 88.8325 75.6809 88.8657 75.5484C88.8988 75.4158 88.9154 75.2833 88.9154 75.1508C88.9154 75.0183 88.8988 74.8858 88.8657 74.7698C88.8325 74.6539 88.7828 74.5379 88.7165 74.4385C88.6502 74.3391 88.5674 74.2729 88.4679 74.2066C88.3685 74.1569 88.2359 74.1238 88.0868 74.1238C87.9377 74.1238 87.8051 74.1569 87.7057 74.2232C87.6062 74.2894 87.5234 74.3723 87.4571 74.4716C87.3908 74.571 87.3411 74.687 87.3245 74.8195C87.2914 74.952 87.2748 75.068 87.2748 75.2005C87.2748 75.333 87.2914 75.449 87.3245 75.5649C87.3577 75.6809 87.4074 75.7968 87.4737 75.8962C87.5399 75.9956 87.6228 76.0619 87.7222 76.1281C87.8217 76.211 87.9542 76.2441 88.0868 76.2441Z" fill="#A6B5CB"/>
                                        <path d="M92.8759 76.8736C92.6273 76.8736 92.4119 76.8405 92.213 76.7577C92.0141 76.6749 91.865 76.5589 91.7324 76.4264C91.5999 76.2773 91.5004 76.1116 91.4341 75.9129C91.3679 75.7141 91.3347 75.4987 91.3347 75.2668C91.3347 75.0349 91.3679 74.8196 91.4341 74.6208C91.5004 74.422 91.5999 74.2564 91.7324 74.1073C91.865 73.9582 92.0307 73.8588 92.213 73.776C92.4119 73.6932 92.6273 73.66 92.8759 73.66C93.1244 73.66 93.3399 73.6932 93.5387 73.776C93.7376 73.8588 93.8867 73.9748 94.0193 74.1073C94.1519 74.2564 94.2513 74.422 94.3176 74.6208C94.3839 74.8196 94.417 75.0349 94.417 75.2668C94.417 75.4987 94.3839 75.7307 94.3176 75.9129C94.2513 76.1116 94.1519 76.2773 94.0193 76.4264C93.8867 76.5755 93.721 76.6749 93.5387 76.7577C93.3399 76.8239 93.1244 76.8736 92.8759 76.8736ZM92.8759 76.327C93.025 76.327 93.1576 76.2939 93.2736 76.2276C93.3896 76.1613 93.4724 76.0785 93.5553 75.9791C93.6216 75.8797 93.6713 75.7638 93.721 75.6313C93.7541 75.4987 93.7707 75.3662 93.7707 75.2337C93.7707 75.1012 93.7541 74.9687 93.721 74.8361C93.6879 74.7036 93.6381 74.5877 93.5553 74.4883C93.489 74.3889 93.3896 74.3061 93.2736 74.2398C93.1576 74.1735 93.025 74.1404 92.8759 74.1404C92.7267 74.1404 92.5941 74.1735 92.4781 74.2398C92.3621 74.3061 92.2793 74.3889 92.1964 74.4883C92.1301 74.5877 92.0804 74.7036 92.0307 74.8361C91.981 74.9687 91.981 75.1012 91.981 75.2337C91.981 75.3662 91.9976 75.4987 92.0307 75.6313C92.0639 75.7638 92.1136 75.8797 92.1964 75.9791C92.2627 76.0785 92.3621 76.1613 92.4781 76.2276C92.5941 76.2939 92.7267 76.327 92.8759 76.327Z" fill="#A6B5CB"/>
                                        <path d="M96.7201 75.4158C96.7201 75.5318 96.7367 75.6478 96.7699 75.7637C96.803 75.8797 96.8527 75.9791 96.919 76.0619C96.9853 76.1447 97.0681 76.211 97.1676 76.2607C97.267 76.3104 97.3996 76.3269 97.5321 76.3269C97.731 76.3269 97.8967 76.2772 98.0127 76.1944C98.1287 76.1116 98.2281 75.9791 98.2779 75.8134H98.9241C98.891 75.9791 98.8247 76.1281 98.7419 76.2607C98.659 76.3932 98.543 76.5091 98.427 76.592C98.311 76.6748 98.1619 76.741 98.0127 76.7907C97.8636 76.8404 97.6979 76.857 97.5321 76.857C97.2836 76.857 97.0681 76.8239 96.8859 76.741C96.7036 76.6582 96.5379 76.5588 96.4053 76.4097C96.2727 76.2607 96.1733 76.095 96.107 75.8962C96.0407 75.6975 96.0076 75.4821 96.0076 75.2502C96.0076 75.0349 96.0407 74.8195 96.107 74.6207C96.1733 74.4219 96.2727 74.2563 96.4053 74.1072C96.5379 73.9581 96.687 73.8422 96.8693 73.7594C97.0516 73.6765 97.2504 73.6268 97.4824 73.6268C97.731 73.6268 97.9464 73.6765 98.1287 73.7759C98.3276 73.8753 98.4767 74.0078 98.6093 74.1735C98.7419 74.3391 98.8247 74.5379 98.891 74.7533C98.9407 74.9686 98.9573 75.2005 98.9407 75.4158H96.7201ZM98.2944 74.9686C98.2944 74.8692 98.2613 74.7532 98.2281 74.6539C98.195 74.5545 98.1453 74.4716 98.079 74.3888C98.0127 74.3226 97.9299 74.2563 97.847 74.2066C97.7476 74.1569 97.6481 74.1403 97.5321 74.1403C97.4161 74.1403 97.3001 74.1569 97.2007 74.2066C97.1013 74.2563 97.0184 74.306 96.9521 74.3723C96.8859 74.4385 96.8196 74.5379 96.7864 74.6373C96.7367 74.7367 96.7201 74.8361 96.7201 74.952H98.2944V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M101.195 75.7969C101.211 75.9957 101.294 76.1282 101.427 76.211C101.559 76.2938 101.709 76.327 101.891 76.327C101.957 76.327 102.023 76.327 102.106 76.3104C102.189 76.2938 102.272 76.2773 102.338 76.2607C102.405 76.2276 102.471 76.1944 102.521 76.1448C102.57 76.0951 102.587 76.0288 102.587 75.9294C102.587 75.8466 102.554 75.7638 102.487 75.7141C102.421 75.6644 102.355 75.6147 102.255 75.5815C102.156 75.5484 102.057 75.5153 101.941 75.4987C101.825 75.4822 101.709 75.449 101.576 75.4159C101.443 75.3828 101.327 75.3496 101.211 75.3165C101.095 75.2834 100.996 75.2171 100.897 75.1509C100.797 75.0846 100.731 75.0018 100.681 74.8858C100.631 74.7864 100.598 74.6539 100.598 74.4883C100.598 74.3226 100.631 74.1901 100.714 74.0741C100.797 73.9582 100.897 73.8754 101.029 73.7925C101.162 73.7263 101.294 73.6766 101.443 73.6434C101.593 73.6103 101.742 73.5938 101.874 73.5938C102.04 73.5938 102.189 73.6103 102.322 73.6434C102.471 73.6766 102.603 73.7263 102.719 73.8091C102.835 73.8919 102.935 73.9747 103.018 74.1073C103.101 74.2232 103.15 74.3723 103.167 74.5379H102.454C102.421 74.3723 102.355 74.2729 102.239 74.2067C102.123 74.157 101.99 74.1238 101.841 74.1238C101.791 74.1238 101.742 74.1238 101.675 74.1404C101.609 74.1404 101.543 74.157 101.493 74.1901C101.443 74.2066 101.394 74.2398 101.344 74.2895C101.311 74.3392 101.278 74.3889 101.278 74.4551C101.278 74.5379 101.311 74.6042 101.361 74.6539C101.41 74.7036 101.493 74.7533 101.593 74.7864C101.692 74.8196 101.791 74.8527 101.907 74.8692C102.023 74.8858 102.156 74.9189 102.272 74.9521C102.388 74.9852 102.521 75.0183 102.637 75.0515C102.753 75.0846 102.869 75.1509 102.951 75.2171C103.051 75.2834 103.117 75.3662 103.183 75.4656C103.233 75.565 103.266 75.6975 103.266 75.8466C103.266 76.0288 103.217 76.1779 103.134 76.3104C103.051 76.4429 102.935 76.5423 102.802 76.6251C102.67 76.708 102.521 76.7577 102.355 76.7908C102.189 76.8239 102.023 76.8405 101.874 76.8405C101.675 76.8405 101.493 76.8239 101.344 76.7742C101.178 76.7245 101.029 76.6583 100.913 76.5754C100.797 76.4926 100.698 76.3767 100.631 76.2441C100.565 76.1116 100.532 75.946 100.515 75.7638H101.195V75.7969Z" fill="#A6B5CB"/>
                                        <path d="M107.806 72.5336H108.486V74.1072H108.502C108.585 73.9747 108.718 73.8588 108.867 73.7594C109.033 73.66 109.215 73.6269 109.414 73.6269C109.745 73.6269 110.01 73.7097 110.209 73.8919C110.408 74.0741 110.508 74.3226 110.508 74.6705V76.7742H109.828V74.8361C109.828 74.5876 109.762 74.422 109.679 74.306C109.58 74.1901 109.43 74.1404 109.232 74.1404C109.116 74.1404 109.016 74.1569 108.917 74.2066C108.817 74.2563 108.751 74.306 108.685 74.3723C108.618 74.4385 108.569 74.5379 108.536 74.6373C108.502 74.7367 108.486 74.8361 108.486 74.9521V76.7576H107.806V72.5336Z" fill="#A6B5CB"/>
                                        <path d="M112.944 75.4158C112.944 75.5318 112.961 75.6478 112.994 75.7637C113.027 75.8797 113.077 75.9791 113.143 76.0619C113.209 76.1447 113.292 76.211 113.391 76.2607C113.491 76.3104 113.623 76.3269 113.756 76.3269C113.955 76.3269 114.121 76.2772 114.237 76.1944C114.353 76.1116 114.452 75.9791 114.502 75.8134H115.148C115.115 75.9791 115.049 76.1281 114.966 76.2607C114.883 76.3932 114.767 76.5091 114.651 76.592C114.535 76.6748 114.386 76.741 114.237 76.7907C114.087 76.8404 113.922 76.857 113.756 76.857C113.507 76.857 113.292 76.8239 113.11 76.741C112.927 76.6582 112.762 76.5588 112.629 76.4097C112.497 76.2607 112.397 76.095 112.331 75.8962C112.265 75.6975 112.231 75.4821 112.231 75.2502C112.231 75.0349 112.265 74.8195 112.331 74.6207C112.397 74.4219 112.497 74.2563 112.629 74.1072C112.762 73.9581 112.911 73.8422 113.093 73.7594C113.275 73.6765 113.474 73.6268 113.706 73.6268C113.955 73.6268 114.17 73.6765 114.353 73.7759C114.551 73.8753 114.701 74.0078 114.833 74.1735C114.966 74.3391 115.049 74.5379 115.115 74.7533C115.165 74.9686 115.181 75.2005 115.165 75.4158H112.944ZM114.518 74.9686C114.518 74.8692 114.485 74.7532 114.452 74.6539C114.419 74.5545 114.369 74.4716 114.303 74.3888C114.237 74.3226 114.154 74.2563 114.071 74.2066C113.971 74.1569 113.872 74.1403 113.756 74.1403C113.64 74.1403 113.524 74.1569 113.425 74.2066C113.325 74.2563 113.242 74.306 113.176 74.3723C113.11 74.4385 113.043 74.5379 113.01 74.6373C112.961 74.7367 112.944 74.8361 112.944 74.952H114.518V74.9686Z" fill="#A6B5CB"/>
                                        <path d="M116.904 73.7097H117.534V74.3061H117.55C117.567 74.2233 117.617 74.1404 117.666 74.0576C117.716 73.9748 117.799 73.9085 117.882 73.8423C117.965 73.776 118.047 73.7263 118.147 73.6766C118.246 73.6435 118.346 73.6104 118.445 73.6104C118.528 73.6104 118.578 73.6104 118.611 73.6104C118.644 73.6104 118.677 73.6104 118.71 73.6269V74.2729C118.661 74.2729 118.611 74.2564 118.561 74.2564C118.511 74.2564 118.462 74.2398 118.412 74.2398C118.296 74.2398 118.197 74.2564 118.081 74.3061C117.981 74.3558 117.898 74.422 117.815 74.5049C117.733 74.5877 117.683 74.7036 117.633 74.8362C117.583 74.9687 117.567 75.1178 117.567 75.2834V76.7411H116.887V73.7097H116.904Z" fill="#A6B5CB"/>
                                        <path d="M120.616 75.4158C120.616 75.5318 120.633 75.6478 120.666 75.7637C120.699 75.8797 120.749 75.9791 120.815 76.0619C120.882 76.1447 120.964 76.211 121.064 76.2607C121.163 76.3104 121.296 76.3269 121.428 76.3269C121.627 76.3269 121.793 76.2772 121.909 76.1944C122.025 76.1116 122.124 75.9791 122.174 75.8134H122.82C122.787 75.9791 122.721 76.1281 122.638 76.2607C122.555 76.3932 122.439 76.5091 122.323 76.592C122.207 76.6748 122.058 76.741 121.909 76.7907C121.76 76.8404 121.594 76.857 121.428 76.857C121.18 76.857 120.964 76.8239 120.782 76.741C120.6 76.6582 120.434 76.5588 120.302 76.4097C120.169 76.2607 120.07 76.095 120.003 75.8962C119.937 75.6975 119.904 75.4821 119.904 75.2502C119.904 75.0349 119.937 74.8195 120.003 74.6207C120.07 74.4219 120.169 74.2563 120.302 74.1072C120.434 73.9581 120.583 73.8422 120.766 73.7594C120.948 73.6765 121.147 73.6268 121.379 73.6268C121.627 73.6268 121.843 73.6765 122.025 73.7759C122.224 73.8753 122.373 74.0078 122.506 74.1735C122.638 74.3391 122.721 74.5379 122.787 74.7533C122.837 74.9686 122.854 75.2005 122.837 75.4158H120.616ZM122.207 74.9686C122.207 74.8692 122.174 74.7532 122.141 74.6539C122.108 74.5545 122.058 74.4716 121.992 74.3888C121.926 74.3226 121.843 74.2563 121.76 74.2066C121.66 74.1569 121.561 74.1403 121.445 74.1403C121.329 74.1403 121.213 74.1569 121.114 74.2066C121.014 74.2563 120.931 74.306 120.865 74.3723C120.799 74.4385 120.732 74.5379 120.699 74.6373C120.65 74.7367 120.633 74.8361 120.633 74.952H122.207V74.9686Z" fill="#A6B5CB"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_1234">
                                        <rect width="116" height="76" fill="white" transform="translate(22 2)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M65.9719 53.3831L64.1897 50.3279L50.3565 26.3531H46.877L62.45 53.3831H65.9719Z" fill="#A6B5CB"/>
                                        <path d="M79.9319 53.3831L78.1921 50.3279L76.4524 47.3152L74.6702 44.3024L72.9304 41.2897L71.1906 38.2345L64.3164 26.3531H60.8369L69.4509 41.2897L71.1906 44.3024L72.9304 47.3152L74.6702 50.3279L76.4524 53.3831H76.4099H76.4524H79.9319Z" fill="#A6B5CB"/>
                                        <path d="M85.1507 50.3279L83.4109 47.3152L81.6711 44.3024L79.9314 41.2897L78.1916 38.2345L76.4519 35.2217L74.6697 32.2089L71.3174 26.3531H67.8379L72.9299 35.2217L76.4519 41.2897L78.1916 44.3024L79.9314 47.3152L81.6711 50.3279L83.4109 53.3831H86.8904H86.9329H86.8904L85.1507 50.3279Z" fill="#A6B5CB"/>
                                        <path d="M92.7041 7.04602H89.1821L76.4521 29.1538L78.1919 32.1665L92.7041 7.04602Z" fill="#A6B5CB"/>
                                        <path d="M69.4504 53.3831H72.9299L71.1902 50.3279L69.4504 47.3152L67.7106 44.3024L57.3569 26.3531H53.835L65.9709 47.3152L67.7106 50.3279L69.4504 53.3831Z" fill="#A6B5CB"/>
                                        <path d="M81.6717 38.192L99.6634 7.04602H96.1838L79.9319 35.1793L79.9743 35.2217L81.6717 38.192Z" fill="#A6B5CB"/>
                                        <path d="M85.1939 44.26L106.665 7.04602H103.186L83.4541 41.2472V41.2897L85.1939 44.26Z" fill="#A6B5CB"/>
                                        <path d="M113.667 7.04602H110.145L86.9336 47.2728V47.3152L88.6734 50.3279L113.667 7.04602Z" fill="#A6B5CB"/>
                                        <path d="M49.0828 65.9861C48.7433 66.2831 48.2766 66.4953 47.7674 66.4953C46.7065 66.4953 45.8154 65.6466 45.8154 64.5434C45.8154 63.4825 46.7065 62.5914 47.7674 62.5914C48.2766 62.5914 48.7433 62.8036 49.0828 63.1006L50.0163 62.1671C49.4223 61.6155 48.6585 61.276 47.7674 61.276C45.9852 61.276 44.5 62.7187 44.5 64.5434C44.5 66.368 45.9427 67.8107 47.7674 67.8107C48.616 67.8107 49.4223 67.4713 50.0163 66.9196L49.0828 65.9861Z" fill="#A6B5CB"/>
                                        <path d="M58.5879 61.3184C56.8057 61.3184 55.3206 62.7611 55.3206 64.5857C55.3206 66.4103 56.7633 67.8531 58.5879 67.8531C60.3701 67.8531 61.8553 66.4103 61.8553 64.5857C61.8553 62.7611 60.4125 61.3184 58.5879 61.3184ZM58.5879 66.5377C57.5271 66.5377 56.636 65.6466 56.636 64.5857C56.636 63.5249 57.5271 62.6338 58.5879 62.6338C59.6487 62.6338 60.5398 63.5249 60.5398 64.5857C60.5398 65.6466 59.6912 66.5377 58.5879 66.5377Z" fill="#A6B5CB"/>
                                        <path d="M70.8936 66.0709L68.9841 61.3184H67.6262V67.8106H68.8992V64.5857L70.2147 67.8106H71.615L72.9304 64.5857V67.8106H74.2034V61.3184H72.8031L70.8936 66.0709Z" fill="#A6B5CB"/>
                                        <path d="M81.7992 61.3184H79.9746V67.8106H81.29V65.2222H81.8417C82.9025 65.2222 83.7936 64.3311 83.7936 63.2703C83.7512 62.2095 82.8601 61.3184 81.7992 61.3184ZM81.7992 63.9068H81.29V62.5914H81.7992C82.1387 62.5914 82.4357 62.8884 82.4357 63.2279C82.4357 63.6098 82.1387 63.9068 81.7992 63.9068Z" fill="#A6B5CB"/>
                                        <path d="M90.9647 61.3184L88.6309 67.8106H90.0312L90.7101 65.986H92.7045L93.3834 67.8106H94.7837L92.4499 61.3184H90.9647ZM91.1344 64.713L91.6436 63.2279L92.1953 64.713H91.1344Z" fill="#A6B5CB"/>
                                        <path d="M105.731 61.3184H104.416V65.6466L101.827 61.3184H100.3V67.8106H101.573V63.4825L104.204 67.8106H105.731V61.3184Z" fill="#A6B5CB"/>
                                        <path d="M114.302 67.8106V64.713L115.999 61.3184H114.557L113.623 63.1006L112.732 61.3184H111.289L112.987 64.713V67.8106H114.302Z" fill="#A6B5CB"/>
                                        <path d="M44.5 70.9932H45.2638V73.3695H45.6881V70.9932H46.4519V70.6113H44.5V70.9932Z" fill="#A6B5CB"/>
                                        <path d="M49.5064 70.6113L48.488 73.3695H48.9124L49.1245 72.733H50.1854L50.3975 73.3695H50.8219L49.8035 70.6113H49.5064ZM49.2518 72.3935L49.6337 71.2054L50.0156 72.3935H49.2518Z" fill="#A6B5CB"/>
                                        <path d="M54.3019 72.2237H54.8535V72.351C54.8535 72.5207 54.8111 72.648 54.6838 72.7753C54.5989 72.9026 54.4292 72.9451 54.3019 72.9451C54.217 72.9451 54.1321 72.9451 54.0473 72.9027C53.9624 72.8602 53.92 72.8178 53.8775 72.7753C53.8351 72.7329 53.7926 72.648 53.7502 72.5632C53.7502 72.4783 53.7078 72.2661 53.7078 72.0115C53.7078 71.7569 53.7078 71.5448 53.7502 71.4599C53.7502 71.375 53.7927 71.2902 53.8775 71.2477C53.92 71.2053 53.9624 71.1629 54.0473 71.1205C54.1321 71.078 54.217 71.078 54.3019 71.078C54.4292 71.078 54.5565 71.1205 54.6413 71.2053C54.7262 71.2902 54.811 71.3751 54.811 71.5024H55.2354C55.1929 71.2902 55.0657 71.078 54.9384 70.9083C54.7686 70.7386 54.5565 70.6537 54.3019 70.6537C54.0897 70.6537 53.9199 70.6961 53.7502 70.8234C53.6229 70.9083 53.4956 71.0356 53.4108 71.1629C53.3683 71.2478 53.3259 71.3326 53.3259 71.4175C53.3259 71.5448 53.2834 71.757 53.2834 72.054C53.2834 72.351 53.2834 72.5632 53.3259 72.6905C53.3259 72.7329 53.3683 72.8178 53.3683 72.8178C53.3683 72.8602 53.4108 72.9026 53.4108 72.9451C53.4956 73.0724 53.5805 73.1997 53.7502 73.2845C53.8775 73.3694 54.0897 73.4543 54.3019 73.4543C54.5989 73.4543 54.811 73.3694 54.9808 73.1572C55.1505 72.9875 55.2778 72.7329 55.2778 72.4783V71.9267H54.3019V72.2237Z" fill="#A6B5CB"/>
                                        <path d="M58.5034 70.6113H58.0791V73.3695H59.8613V72.9876H58.5034V70.6113Z" fill="#A6B5CB"/>
                                        <path d="M63.0015 70.6113H62.5771V73.3695H63.0015V70.6113Z" fill="#A6B5CB"/>
                                        <path d="M67.5406 72.5633L66.2677 70.6113H65.8857V73.3695H66.3101V71.4176L67.5406 73.3695H67.965V70.6113H67.5406V72.5633Z" fill="#A6B5CB"/>
                                        <path d="M70.8518 73.3695H72.634V72.9876H71.2761V72.1814H72.4218V71.7995H71.2761V70.9932H72.634V70.6113H70.8518V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M79.4647 72.2236H80.0163V72.3509C80.0163 72.5206 79.9739 72.6479 79.8466 72.7752C79.7617 72.9025 79.592 72.945 79.4647 72.945C79.3798 72.945 79.295 72.945 79.2101 72.9025C79.1252 72.8601 79.0828 72.8177 79.0404 72.7752C78.9979 72.7328 78.9555 72.6479 78.9131 72.5631C78.9131 72.4782 78.8706 72.266 78.8706 72.0114C78.8706 71.7568 78.8706 71.5447 78.9131 71.4598C78.9131 71.3749 78.9555 71.2901 79.0404 71.2476C79.0828 71.2052 79.1252 71.1628 79.2101 71.1203C79.295 71.0779 79.3798 71.0779 79.4647 71.0779C79.592 71.0779 79.7193 71.1203 79.8042 71.2052C79.889 71.2901 79.9739 71.3749 79.9739 71.5022H80.3982C80.3558 71.2901 80.2285 71.0779 80.1012 70.9082C79.9315 70.7384 79.7193 70.6536 79.4647 70.6536C79.2525 70.6536 79.0828 70.696 78.9131 70.8233C78.7858 70.9082 78.6585 71.0355 78.5736 71.1628C78.5312 71.2476 78.4887 71.3325 78.4887 71.4174C78.4887 71.5447 78.4463 71.7568 78.4463 72.0539C78.4463 72.3509 78.4463 72.5631 78.4887 72.6904C78.4887 72.7328 78.5312 72.8177 78.5312 72.8177C78.5312 72.8601 78.5736 72.9025 78.5736 72.945C78.6585 73.0723 78.7433 73.1996 78.9131 73.2844C79.0404 73.3693 79.2525 73.4542 79.4647 73.4542C79.7617 73.4542 79.9739 73.3693 80.1436 73.1571C80.3134 72.9874 80.4407 72.7328 80.4407 72.4782V71.9266H79.4647V72.2236Z" fill="#A6B5CB"/>
                                        <path d="M85.0245 71.0774C84.9397 70.9501 84.8548 70.8228 84.7275 70.738C84.6002 70.6531 84.388 70.5682 84.1759 70.5682C83.9637 70.5682 83.794 70.6107 83.6242 70.738C83.4969 70.8228 83.3696 70.9501 83.2848 71.0774C83.2423 71.1623 83.1999 71.2472 83.1999 71.332C83.1999 71.4593 83.1575 71.6715 83.1575 71.9685C83.1575 72.2656 83.1575 72.4777 83.1999 72.605C83.1999 72.6475 83.2423 72.7323 83.2423 72.7323C83.2423 72.7748 83.2848 72.8172 83.2848 72.8596C83.3696 72.9869 83.4545 73.1142 83.6242 73.1991C83.7515 73.284 83.9637 73.3688 84.1759 73.3688C84.388 73.3688 84.5578 73.3264 84.7275 73.1991C84.8548 73.1142 84.9821 72.9869 85.0245 72.8596C85.067 72.7748 85.1094 72.6899 85.1094 72.605C85.1094 72.4777 85.1518 72.2656 85.1518 71.9685C85.1518 71.6291 85.1518 71.4169 85.1094 71.332C85.1094 71.2472 85.067 71.1623 85.0245 71.0774ZM84.6851 72.5202C84.6851 72.605 84.6426 72.6899 84.5578 72.7323C84.5153 72.7748 84.4729 72.8172 84.388 72.8596C84.3032 72.9021 84.2183 72.9021 84.1334 72.9021C84.0486 72.9021 83.9637 72.9021 83.8788 72.8596C83.794 72.8172 83.7515 72.7748 83.7091 72.7323C83.6667 72.6899 83.6242 72.605 83.5818 72.5202C83.5818 72.4353 83.5394 72.2231 83.5394 71.9685C83.5394 71.7139 83.5394 71.5018 83.5818 71.4169C83.5818 71.332 83.6242 71.2472 83.7091 71.2047C83.7515 71.1623 83.794 71.1199 83.8788 71.0774C83.9637 71.035 84.0486 71.035 84.1334 71.035C84.2183 71.035 84.3032 71.0774 84.388 71.0774C84.4729 71.1199 84.5153 71.1623 84.5578 71.2047C84.6002 71.2472 84.6426 71.332 84.6851 71.4169C84.6851 71.5018 84.7275 71.7139 84.7275 71.9685C84.7275 72.2656 84.7275 72.4353 84.6851 72.5202Z" fill="#A6B5CB"/>
                                        <path d="M87.9509 73.3695H89.7331V72.9876H88.3753V72.1814H89.521V71.7995H88.3753V70.9932H89.7331V70.6113H87.9509V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M93.4679 71.7995C93.3406 71.7995 93.2133 71.757 93.1708 71.757C93.0435 71.7146 92.9162 71.6722 92.8738 71.6297C92.8314 71.5449 92.789 71.5024 92.789 71.4176C92.789 71.2903 92.8314 71.2054 92.9163 71.1205C93.0011 71.0357 93.1284 71.0357 93.2557 71.0357C93.5103 71.0357 93.7225 71.1205 93.9346 71.2478L94.1468 70.9084C93.8922 70.7386 93.5952 70.6113 93.2557 70.6113C92.9587 70.6113 92.7465 70.6962 92.5768 70.8235C92.4071 70.9508 92.3222 71.163 92.3222 71.4176C92.3222 71.6297 92.407 71.7995 92.5343 71.9268C92.6616 72.0541 92.8314 72.1389 93.086 72.1814C93.2133 72.1814 93.3406 72.2238 93.4679 72.2238C93.7225 72.2662 93.8498 72.3935 93.8073 72.6057C93.8073 72.8603 93.6376 72.9876 93.2557 72.9876C92.9587 72.9876 92.7041 72.9027 92.4919 72.733L92.2373 73.03C92.5343 73.2846 92.8738 73.4119 93.2981 73.4119C93.9346 73.4119 94.2317 73.1573 94.2741 72.6057C94.2741 72.3935 94.2317 72.2238 94.1044 72.0965C93.9346 71.9268 93.7225 71.8419 93.4679 71.7995Z" fill="#A6B5CB"/>
                                        <path d="M101.742 71.7995H100.639V70.6113H100.257V73.3695H100.639V72.1814H101.742V73.3695H102.166V70.6113H101.742V71.7995Z" fill="#A6B5CB"/>
                                        <path d="M105.095 73.3695H106.834V72.9876H105.477V72.1814H106.622V71.7995H105.477V70.9932H106.834V70.6113H105.095V73.3695Z" fill="#A6B5CB"/>
                                        <path d="M111.459 71.3751C111.459 71.1205 111.374 70.9084 111.204 70.7811C111.077 70.6538 110.865 70.6113 110.653 70.6113H109.592V73.3695H110.016V72.1814H110.568L111.12 73.3695H111.629L110.992 72.1389C111.289 72.0116 111.459 71.757 111.459 71.3751ZM109.974 71.7995V70.9508H110.61C110.738 70.9508 110.865 70.9932 110.907 71.0357C110.992 71.1205 111.035 71.2054 111.035 71.3327C111.035 71.46 110.992 71.5449 110.907 71.6297C110.823 71.7146 110.695 71.757 110.568 71.757H109.974V71.7995Z" fill="#A6B5CB"/>
                                        <path d="M114.218 73.3695H116V72.9876H114.642V72.1814H115.788V71.7995H114.642V70.9932H116V70.6113H114.218V73.3695Z" fill="#A6B5CB"/>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5683)">
                                        <mask id="mask0_5683" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="-16" y="-56" width="194" height="193">
                                        <path d="M177.063 -55.9742H-15.0625V136.151H177.063V-55.9742Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0_5683)">
                                        <path d="M24.4882 41.5131H8.99902V57.0022H24.4882V41.5131Z" fill="#A6B5CB"/>
                                        <path d="M16.6457 35.9991C20.7287 35.9991 24.0387 32.6892 24.0387 28.6061C24.0387 24.5231 20.7287 21.2131 16.6457 21.2131C12.5626 21.2131 9.25269 24.5231 9.25269 28.6061C9.25269 32.6892 12.5626 35.9991 16.6457 35.9991Z" fill="#A6B5CB"/>
                                        <path d="M36.6193 21.1824H31.1553V57.3096H36.6193V21.1824Z" fill="#E3E3E3"/>
                                        <path d="M24.4882 41.5131L8.99902 57.0022H24.4882V41.5131Z" fill="#E3E3E3"/>
                                        <path d="M47.2675 38.9302H44.9447V27.0165C44.9447 25.3014 45.4942 23.9028 46.5932 22.8205C47.7088 21.7382 49.0825 21.197 50.7143 21.197C52.5126 21.197 53.8613 21.6549 54.7604 22.5707C55.6762 23.4698 56.1341 24.5771 56.1341 25.8925C56.1341 27.5743 55.3515 28.7815 53.7864 29.5141V29.614C55.9343 30.2301 57.0083 31.7204 57.0083 34.0848C57.0083 37.315 55.1018 38.9302 51.2887 38.9302H48.1667V36.7323H51.2638C52.4127 36.7323 53.2535 36.4991 53.7864 36.0329C54.3192 35.5667 54.5856 34.8174 54.5856 33.7851C54.5856 32.8859 54.2942 32.1949 53.7114 31.712C53.1453 31.2291 52.371 30.9877 51.3886 30.9877H48.916V28.9147H50.5145C51.4136 28.9147 52.1796 28.6732 52.8123 28.1904C53.4617 27.6908 53.7864 27.0248 53.7864 26.1923C53.7864 25.393 53.5366 24.727 53.0371 24.1942C52.5542 23.6613 51.7633 23.3949 50.6643 23.3949C49.6653 23.3949 48.8494 23.7113 48.2166 24.344C47.5839 24.9601 47.2675 25.8676 47.2675 27.0664V38.9302ZM66.2938 31.8869V34.1347C65.6611 33.6519 64.8868 33.4104 63.971 33.4104C63.1884 33.4104 62.5807 33.5686 62.1478 33.885C61.7148 34.1847 61.4984 34.6176 61.4984 35.1837C61.4984 36.2827 62.3143 36.8322 63.9461 36.8322H67.2429V32.0617C67.2429 30.0469 66.2605 29.0396 64.2957 29.0396H60.2995V26.9416H64.4206C66.0357 26.9416 67.2762 27.3412 68.1421 28.1404C69.0079 28.9397 69.4408 30.0886 69.4408 31.5871V38.9302H63.8711C62.4558 38.9302 61.3319 38.6138 60.4993 37.9811C59.6668 37.3483 59.2505 36.4242 59.2505 35.2087C59.2505 33.9932 59.6918 33.0691 60.5743 32.4363C61.4567 31.8036 62.564 31.4872 63.8961 31.4872C64.6454 31.4872 65.4446 31.6204 66.2938 31.8869ZM82.127 38.9302H77.8061C75.9579 38.9302 74.6342 38.6554 73.8349 38.106C73.1189 37.6231 72.661 37.0486 72.4612 36.3826C72.2781 35.6999 72.1865 34.8091 72.1865 33.7101V26.9416H74.3844V33.6852C74.3844 33.9849 74.3927 34.243 74.4094 34.4594C74.426 34.6592 74.4843 34.9256 74.5842 35.2587C74.6841 35.575 74.8256 35.8414 75.0088 36.0579C75.192 36.2577 75.4584 36.4409 75.808 36.6074C76.1577 36.7572 76.5823 36.8322 77.0818 36.8322H79.9291V26.9416H82.127V38.9302ZM87.4579 21.4468V26.9416H89.5809C91.4292 26.9416 92.7529 27.2163 93.5521 27.7658C94.2681 28.2486 94.7177 28.8314 94.9009 29.5141C95.1007 30.1801 95.2006 31.0626 95.2006 32.1616V38.9302H93.0027V32.1866C93.0027 31.8869 92.9943 31.6371 92.9777 31.4373C92.961 31.2208 92.9028 30.9544 92.8028 30.638C92.7029 30.305 92.5614 30.0386 92.3783 29.8388C92.1951 29.6223 91.9287 29.4392 91.579 29.2893C91.2293 29.1228 90.8047 29.0396 90.3052 29.0396H87.4579V38.9302H85.26V21.4468H87.4579ZM99.5609 28.5151C100.726 27.2995 102.183 26.6918 103.932 26.6918C104.781 26.6918 105.572 26.8583 106.304 27.1913C107.054 27.5077 107.703 27.9489 108.253 28.5151C108.819 29.0812 109.26 29.7472 109.576 30.5132C109.893 31.2625 110.051 32.07 110.051 32.9359C110.051 33.8017 109.893 34.6176 109.576 35.3835C109.277 36.1328 108.852 36.7905 108.303 37.3567C107.753 37.9228 107.104 38.3724 106.354 38.7054C105.605 39.0218 104.798 39.1799 103.932 39.1799C103.049 39.1799 102.233 39.0218 101.484 38.7054C100.751 38.3724 100.11 37.9228 99.5609 37.3567C99.0114 36.7905 98.5785 36.1328 98.2621 35.3835C97.9624 34.6176 97.8125 33.8017 97.8125 32.9359C97.8125 31.1709 98.3953 29.6973 99.5609 28.5151ZM103.932 28.7898C102.766 28.7898 101.825 29.1728 101.109 29.9387C100.41 30.7046 100.06 31.7037 100.06 32.9359C100.06 34.168 100.41 35.1671 101.109 35.933C101.825 36.699 102.766 37.0819 103.932 37.0819C105.114 37.0819 106.055 36.699 106.754 35.933C107.453 35.1504 107.803 34.1514 107.803 32.9359C107.803 31.7204 107.453 30.7296 106.754 29.9637C106.055 29.1811 105.114 28.7898 103.932 28.7898ZM122.616 38.9302H118.295C116.447 38.9302 115.123 38.6554 114.324 38.106C113.608 37.6231 113.15 37.0486 112.95 36.3826C112.767 35.6999 112.675 34.8091 112.675 33.7101V26.9416H114.873V33.6852C114.873 33.9849 114.882 34.243 114.898 34.4594C114.915 34.6592 114.973 34.9256 115.073 35.2587C115.173 35.575 115.315 35.8414 115.498 36.0579C115.681 36.2577 115.947 36.4409 116.297 36.6074C116.647 36.7572 117.071 36.8322 117.571 36.8322H120.418V26.9416H122.616V38.9302ZM134.066 26.9416V29.0396H129.645C129.162 29.0396 128.746 29.1311 128.396 29.3143C128.047 29.4975 127.872 29.7555 127.872 30.0886C127.872 30.2884 127.914 30.4715 127.997 30.638C128.08 30.7879 128.172 30.9128 128.272 31.0127C128.388 31.1126 128.555 31.2208 128.771 31.3374C129.004 31.4373 129.179 31.5122 129.296 31.5622C129.429 31.5955 129.962 31.762 130.894 32.0617C131.826 32.3614 132.518 32.6112 132.967 32.811C133.417 33.0108 133.758 33.2855 133.991 33.6352C134.241 33.9682 134.399 34.3012 134.466 34.6343C134.532 34.9506 134.566 35.267 134.566 35.5834C134.566 37.8146 133.034 38.9302 129.97 38.9302H125.649V36.8322H129.97C131.535 36.8322 132.318 36.4159 132.318 35.5834C132.318 35.1837 132.085 34.8507 131.618 34.5843C131.169 34.3179 130.611 34.0931 129.945 33.9099C129.296 33.7268 128.638 33.5186 127.972 33.2855C127.322 33.0358 126.765 32.6445 126.298 32.1116C125.849 31.5622 125.624 30.8878 125.624 30.0886C125.624 29.0729 126.015 28.2986 126.798 27.7658C127.581 27.2163 128.53 26.9416 129.645 26.9416H134.066ZM142.936 26.6918C145.766 26.8083 147.182 27.9822 147.182 30.2134C147.182 32.9941 145.358 34.3845 141.712 34.3845H140.688V32.4613H141.887C143.002 32.4613 143.777 32.2948 144.21 31.9618C144.642 31.6121 144.859 31.0377 144.859 30.2384C144.859 29.7222 144.667 29.3393 144.284 29.0895C143.902 28.8231 143.41 28.6899 142.811 28.6899C141.629 28.6899 140.696 29.1062 140.014 29.9387C139.347 30.7713 139.014 31.7703 139.014 32.9359C139.014 34.168 139.372 35.1671 140.088 35.933C140.821 36.699 141.77 37.0819 142.936 37.0819C143.985 37.0819 144.842 36.8238 145.508 36.3077L147.007 37.7813C145.858 38.7137 144.501 39.1799 142.936 39.1799C141.038 39.1799 139.522 38.6221 138.39 37.5065C137.258 36.3909 136.692 34.9506 136.692 33.1856C136.692 31.2208 137.249 29.6307 138.365 28.4152C139.481 27.1996 141.004 26.6252 142.936 26.6918Z" fill="#A6B5CB"/>
                                        <path d="M58.5069 55.5962C58.3414 55.5962 58.2051 55.5427 58.0981 55.4356C57.991 55.3285 57.9374 55.1922 57.9374 55.0267V44.7619C57.9374 44.5964 57.991 44.4601 58.0981 44.353C58.2051 44.2459 58.3414 44.1924 58.5069 44.1924H61.2374C61.948 44.1924 62.5807 44.3433 63.1356 44.645C63.6905 44.9371 64.1236 45.3508 64.4351 45.8862C64.7564 46.4118 64.917 47.0202 64.917 47.7114C64.917 48.3733 64.7564 48.9622 64.4351 49.4782C64.1236 49.9941 63.6905 50.398 63.1356 50.6901C62.5807 50.9821 61.948 51.1281 61.2374 51.1281H59.0764V55.0267C59.0764 55.1922 59.0228 55.3285 58.9158 55.4356C58.8087 55.5427 58.6724 55.5962 58.5069 55.5962ZM64.6103 55.5962C64.4838 55.5962 64.3816 55.5719 64.3037 55.5232C64.2356 55.4745 64.1723 55.4015 64.1139 55.3042L61.3104 50.8361L62.4493 50.5441L65.063 54.7201C65.209 54.9537 65.2333 55.1581 65.136 55.3334C65.0484 55.5086 64.8732 55.5962 64.6103 55.5962ZM59.0764 50.033H61.2374C61.7338 50.033 62.1719 49.9357 62.5515 49.741C62.9409 49.5366 63.2475 49.2591 63.4714 48.9087C63.6953 48.5583 63.8073 48.1591 63.8073 47.7114C63.8073 47.2344 63.6953 46.8158 63.4714 46.4556C63.2475 46.0857 62.9409 45.7986 62.5515 45.5941C62.1719 45.3897 61.7338 45.2875 61.2374 45.2875H59.0764V50.033ZM67.533 55.5962C67.3676 55.5962 67.2313 55.5427 67.1242 55.4356C67.0171 55.3285 66.9636 55.1922 66.9636 55.0267V44.7619C66.9636 44.5964 67.0171 44.4601 67.1242 44.353C67.2313 44.2459 67.3676 44.1924 67.533 44.1924H74.3812C74.5369 44.1924 74.6683 44.2459 74.7754 44.353C74.8922 44.4504 74.9506 44.5818 74.9506 44.7473C74.9506 44.8933 74.8922 45.0198 74.7754 45.1269C74.6683 45.234 74.5369 45.2875 74.3812 45.2875H68.1025V49.3175H72.6728C72.8383 49.3175 72.9746 49.3711 73.0816 49.4782C73.1887 49.5852 73.2422 49.7166 73.2422 49.8724C73.2422 50.0281 73.1887 50.1596 73.0816 50.2666C72.9746 50.3737 72.8383 50.4273 72.6728 50.4273H68.1025V54.5011H74.3812C74.5369 54.5011 74.6683 54.5546 74.7754 54.6617C74.8922 54.7688 74.9506 54.8953 74.9506 55.0413C74.9506 55.2068 74.8922 55.3431 74.7754 55.4502C74.6683 55.5475 74.5369 55.5962 74.3812 55.5962H67.533ZM76.4456 55.5962C76.2217 55.5962 76.0611 55.5037 75.9637 55.3188C75.8664 55.1338 75.8566 54.9537 75.9345 54.7785L80.2274 44.5866C80.3344 44.3238 80.5194 44.1924 80.7822 44.1924C81.0353 44.1924 81.2154 44.3238 81.3225 44.5866L85.6299 54.7931C85.7175 54.9781 85.7029 55.1581 85.5861 55.3334C85.4791 55.5086 85.3233 55.5962 85.1189 55.5962C85.0021 55.5962 84.895 55.567 84.7976 55.5086C84.71 55.4502 84.637 55.3626 84.5786 55.2458L80.5632 45.5065H81.0158L76.9712 55.2458C76.9226 55.3626 76.8495 55.4502 76.7522 55.5086C76.6646 55.567 76.5624 55.5962 76.4456 55.5962ZM77.4093 52.8803L77.8473 51.902H83.7755L84.2136 52.8803H77.4093ZM87.9096 55.5962C87.7538 55.5962 87.6176 55.5427 87.5008 55.4356C87.3937 55.3285 87.3401 55.1922 87.3401 55.0267V44.7619C87.3401 44.6061 87.3937 44.4747 87.5008 44.3676C87.6176 44.2508 87.7538 44.1924 87.9096 44.1924C88.0653 44.1924 88.1968 44.2508 88.3038 44.3676C88.4206 44.4747 88.4791 44.6061 88.4791 44.7619V54.5157H94.1883C94.344 54.5157 94.4754 54.5692 94.5825 54.6763C94.6993 54.7736 94.7577 54.9002 94.7577 55.0559C94.7577 55.2117 94.6993 55.3431 94.5825 55.4502C94.4754 55.5475 94.344 55.5962 94.1883 55.5962H87.9096ZM101.427 55.5962C101.262 55.5962 101.126 55.5427 101.019 55.4356C100.911 55.3285 100.858 55.1922 100.858 55.0267V44.7619C100.858 44.5964 100.911 44.4601 101.019 44.353C101.126 44.2459 101.262 44.1924 101.427 44.1924H108.276C108.431 44.1924 108.563 44.2459 108.67 44.353C108.787 44.4504 108.845 44.5818 108.845 44.7473C108.845 44.8933 108.787 45.0198 108.67 45.1269C108.563 45.234 108.431 45.2875 108.276 45.2875H101.997V49.3175H106.567C106.733 49.3175 106.869 49.3711 106.976 49.4782C107.083 49.5852 107.137 49.7166 107.137 49.8724C107.137 50.0281 107.083 50.1596 106.976 50.2666C106.869 50.3737 106.733 50.4273 106.567 50.4273H101.997V54.5011H108.276C108.431 54.5011 108.563 54.5546 108.67 54.6617C108.787 54.7688 108.845 54.8953 108.845 55.0413C108.845 55.2068 108.787 55.3431 108.67 55.4502C108.563 55.5475 108.431 55.5962 108.276 55.5962H101.427ZM114.472 55.7422C113.849 55.7422 113.27 55.6546 112.735 55.4794C112.209 55.2944 111.751 55.0365 111.362 54.7055C110.973 54.3745 110.676 53.99 110.471 53.552C110.393 53.3962 110.389 53.2551 110.457 53.1285C110.535 52.9923 110.661 52.8998 110.836 52.8511C110.973 52.8122 111.104 52.8268 111.231 52.8949C111.367 52.963 111.469 53.0653 111.537 53.2015C111.683 53.4838 111.897 53.7369 112.18 53.9608C112.462 54.1847 112.798 54.3599 113.187 54.4865C113.577 54.6033 114.005 54.6617 114.472 54.6617C114.988 54.6617 115.446 54.579 115.845 54.4135C116.244 54.2382 116.555 53.99 116.779 53.6688C117.013 53.3378 117.13 52.9387 117.13 52.4715C117.13 51.8777 116.911 51.3666 116.473 50.9383C116.035 50.51 115.348 50.2374 114.414 50.1206C113.275 49.9843 112.384 49.6339 111.742 49.0693C111.099 48.495 110.778 47.7941 110.778 46.9667C110.778 46.3729 110.934 45.857 111.245 45.4189C111.566 44.9809 112.005 44.645 112.559 44.4114C113.114 44.1681 113.752 44.0464 114.472 44.0464C115.008 44.0464 115.494 44.134 115.932 44.3092C116.37 44.4747 116.75 44.6986 117.071 44.9809C117.402 45.2534 117.67 45.5552 117.874 45.8862C117.972 46.0419 118.001 46.1928 117.962 46.3388C117.933 46.4848 117.85 46.5968 117.714 46.6747C117.568 46.7428 117.417 46.7525 117.261 46.7039C117.115 46.6552 117.003 46.5627 116.925 46.4264C116.779 46.2025 116.594 45.9933 116.37 45.7986C116.156 45.5941 115.893 45.4335 115.582 45.3167C115.27 45.1999 114.896 45.1366 114.458 45.1269C113.689 45.1269 113.07 45.2924 112.603 45.6233C112.136 45.9446 111.902 46.4167 111.902 47.0397C111.902 47.3707 111.99 47.6773 112.165 47.9596C112.34 48.2322 112.628 48.4706 113.027 48.6751C113.435 48.8698 113.981 49.0158 114.662 49.1131C115.879 49.2883 116.779 49.6631 117.363 50.2374C117.957 50.802 118.254 51.5418 118.254 52.4569C118.254 52.9825 118.157 53.4498 117.962 53.8586C117.777 54.2675 117.509 54.613 117.159 54.8953C116.818 55.1679 116.414 55.3772 115.947 55.5232C115.489 55.6692 114.998 55.7422 114.472 55.7422ZM123.366 55.5962C123.21 55.5962 123.074 55.5427 122.957 55.4356C122.85 55.3188 122.796 55.1825 122.796 55.0267V44.1924H123.935V55.0267C123.935 55.1825 123.881 55.3188 123.774 55.4356C123.667 55.5427 123.531 55.5962 123.366 55.5962ZM119.336 45.2291C119.18 45.2291 119.053 45.1804 118.956 45.0831C118.859 44.9857 118.81 44.8641 118.81 44.7181C118.81 44.5623 118.859 44.4358 118.956 44.3384C119.053 44.2411 119.18 44.1924 119.336 44.1924H127.41C127.566 44.1924 127.692 44.2411 127.79 44.3384C127.887 44.4358 127.936 44.5623 127.936 44.7181C127.936 44.8641 127.887 44.9857 127.79 45.0831C127.692 45.1804 127.566 45.2291 127.41 45.2291H119.336ZM127.822 55.5962C127.598 55.5962 127.437 55.5037 127.34 55.3188C127.243 55.1338 127.233 54.9537 127.311 54.7785L131.604 44.5866C131.711 44.3238 131.896 44.1924 132.159 44.1924C132.412 44.1924 132.592 44.3238 132.699 44.5866L137.006 54.7931C137.094 54.9781 137.079 55.1581 136.962 55.3334C136.855 55.5086 136.7 55.5962 136.495 55.5962C136.378 55.5962 136.271 55.567 136.174 55.5086C136.086 55.4502 136.013 55.3626 135.955 55.2458L131.939 45.5065H132.392L128.348 55.2458C128.299 55.3626 128.226 55.4502 128.128 55.5086C128.041 55.567 127.939 55.5962 127.822 55.5962ZM128.786 52.8803L129.224 51.902H135.152L135.59 52.8803H128.786ZM140.862 55.5962C140.706 55.5962 140.57 55.5427 140.453 55.4356C140.346 55.3188 140.292 55.1825 140.292 55.0267V44.1924H141.431V55.0267C141.431 55.1825 141.378 55.3188 141.271 55.4356C141.163 55.5427 141.027 55.5962 140.862 55.5962ZM136.832 45.2291C136.676 45.2291 136.549 45.1804 136.452 45.0831C136.355 44.9857 136.306 44.8641 136.306 44.7181C136.306 44.5623 136.355 44.4358 136.452 44.3384C136.549 44.2411 136.676 44.1924 136.832 44.1924H144.906C145.062 44.1924 145.189 44.2411 145.286 44.3384C145.383 44.4358 145.432 44.5623 145.432 44.7181C145.432 44.8641 145.383 44.9857 145.286 45.0831C145.189 45.1804 145.062 45.2291 144.906 45.2291H136.832ZM147.685 55.5962C147.519 55.5962 147.383 55.5427 147.276 55.4356C147.169 55.3285 147.115 55.1922 147.115 55.0267V44.7619C147.115 44.5964 147.169 44.4601 147.276 44.353C147.383 44.2459 147.519 44.1924 147.685 44.1924H154.533C154.688 44.1924 154.82 44.2459 154.927 44.353C155.044 44.4504 155.102 44.5818 155.102 44.7473C155.102 44.8933 155.044 45.0198 154.927 45.1269C154.82 45.234 154.688 45.2875 154.533 45.2875H148.254V49.3175H152.824C152.99 49.3175 153.126 49.3711 153.233 49.4782C153.34 49.5852 153.394 49.7166 153.394 49.8724C153.394 50.0281 153.34 50.1596 153.233 50.2666C153.126 50.3737 152.99 50.4273 152.824 50.4273H148.254V54.5011H154.533C154.688 54.5011 154.82 54.5546 154.927 54.6617C155.044 54.7688 155.102 54.8953 155.102 55.0413C155.102 55.2068 155.044 55.3431 154.927 55.4502C154.82 55.5475 154.688 55.5962 154.533 55.5962H147.685Z" fill="#A6B5CB"/>
                                        </g>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_5683">
                                        <rect width="142.68" height="41.8449" fill="white" transform="translate(9 19.0002)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M61.672 7.87715C61.672 8.24829 61.562 8.6111 61.3558 8.9197C61.1496 9.22829 60.8565 9.46881 60.5136 9.61084C60.1707 9.75287 59.7934 9.79003 59.4294 9.71763C59.0654 9.64522 58.731 9.4665 58.4686 9.20406C58.2061 8.94162 58.0274 8.60725 57.955 8.24324C57.8826 7.87923 57.9198 7.50192 58.0618 7.15903C58.2038 6.81614 58.4443 6.52306 58.7529 6.31687C59.0615 6.11067 59.4243 6.00061 59.7955 6.00061C60.042 6.00024 60.2862 6.04852 60.514 6.1427C60.7419 6.23687 60.9489 6.37508 61.1232 6.5494C61.2976 6.72373 61.4358 6.93075 61.5299 7.15859C61.6241 7.38643 61.6724 7.63061 61.672 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M70.6085 7.87715C70.6085 8.24841 70.4984 8.61133 70.2921 8.91999C70.0858 9.22864 69.7925 9.46916 69.4495 9.61111C69.1064 9.75306 68.729 9.79005 68.3649 9.71742C68.0008 9.64478 67.6664 9.46578 67.4041 9.20305C67.1418 8.94033 66.9633 8.6057 66.8912 8.2415C66.8191 7.8773 66.8567 7.4999 66.9991 7.15706C67.1416 6.81422 67.3826 6.52134 67.6915 6.31549C68.0005 6.10963 68.3636 6.00005 68.7348 6.00061C68.9811 6.00061 69.225 6.04917 69.4525 6.14351C69.68 6.23785 69.8867 6.37612 70.0608 6.55041C70.2348 6.7247 70.3727 6.93159 70.4667 7.15924C70.5607 7.3869 70.6089 7.63085 70.6085 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M88.4845 7.87715C88.4845 8.24829 88.3745 8.6111 88.1683 8.9197C87.9621 9.22829 87.669 9.46881 87.3261 9.61084C86.9832 9.75287 86.6059 9.79003 86.2419 9.71763C85.8779 9.64522 85.5435 9.4665 85.2811 9.20406C85.0186 8.94162 84.8399 8.60725 84.7675 8.24324C84.6951 7.87923 84.7323 7.50192 84.8743 7.15903C85.0163 6.81614 85.2568 6.52306 85.5654 6.31687C85.874 6.11067 86.2368 6.00061 86.608 6.00061C86.8545 6.00024 87.0987 6.04852 87.3265 6.1427C87.5544 6.23687 87.7614 6.37508 87.9357 6.5494C88.1101 6.72373 88.2483 6.93075 88.3424 7.15859C88.4366 7.38643 88.4849 7.63061 88.4845 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M97.421 7.87715C97.421 8.24841 97.3109 8.61133 97.1046 8.91999C96.8983 9.22864 96.605 9.46916 96.262 9.61111C95.9189 9.75306 95.5415 9.79005 95.1774 9.71742C94.8133 9.64478 94.4789 9.46578 94.2166 9.20305C93.9543 8.94033 93.7758 8.6057 93.7037 8.2415C93.6316 7.8773 93.6692 7.4999 93.8116 7.15706C93.9541 6.81422 94.1951 6.52134 94.504 6.31549C94.813 6.10963 95.1761 6.00005 95.5473 6.00061C95.7936 6.00061 96.0375 6.04917 96.265 6.14351C96.4925 6.23785 96.6992 6.37612 96.8732 6.55041C97.0473 6.7247 97.1852 6.93159 97.2792 7.15924C97.3732 7.3869 97.4214 7.63085 97.421 7.87715Z" fill="#E3E3E3"/>
                                        <path d="M61.672 16.8854C61.672 17.2566 61.562 17.6194 61.3558 17.928C61.1496 18.2366 60.8565 18.4771 60.5136 18.6191C60.1707 18.7612 59.7934 18.7983 59.4294 18.7259C59.0654 18.6535 58.731 18.4748 58.4686 18.2124C58.2061 17.9499 58.0274 17.6156 57.955 17.2515C57.8826 16.8875 57.9198 16.5102 58.0618 16.1673C58.2038 15.8244 58.4443 15.5314 58.7529 15.3252C59.0615 15.119 59.4243 15.0089 59.7955 15.0089C60.042 15.0085 60.2862 15.0568 60.514 15.151C60.7419 15.2452 60.9489 15.3834 61.1232 15.5577C61.2976 15.732 61.4358 15.939 61.5299 16.1669C61.6241 16.3947 61.6724 16.6389 61.672 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M70.6085 16.8854C70.6085 17.2567 70.4984 17.6196 70.2921 17.9283C70.0858 18.2369 69.7925 18.4775 69.4495 18.6194C69.1064 18.7614 68.729 18.7984 68.3649 18.7257C68.0008 18.6531 67.6664 18.4741 67.4041 18.2114C67.1418 17.9486 66.9633 17.614 66.8912 17.2498C66.8191 16.8856 66.8567 16.5082 66.9991 16.1654C67.1416 15.8225 67.3826 15.5296 67.6915 15.3238C68.0005 15.1179 68.3636 15.0084 68.7348 15.0089C68.9811 15.0089 69.225 15.0575 69.4525 15.1518C69.68 15.2462 69.8867 15.3844 70.0608 15.5587C70.2348 15.733 70.3727 15.9399 70.4667 16.1675C70.5607 16.3952 70.6089 16.6392 70.6085 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M97.421 16.8854C97.421 17.2567 97.3109 17.6196 97.1046 17.9283C96.8983 18.2369 96.605 18.4775 96.262 18.6194C95.9189 18.7614 95.5415 18.7984 95.1774 18.7257C94.8133 18.6531 94.4789 18.4741 94.2166 18.2114C93.9543 17.9486 93.7758 17.614 93.7037 17.2498C93.6316 16.8856 93.6692 16.5082 93.8116 16.1654C93.9541 15.8225 94.1951 15.5296 94.504 15.3238C94.813 15.1179 95.1761 15.0084 95.5473 15.0089C95.7936 15.0089 96.0375 15.0575 96.265 15.1518C96.4925 15.2462 96.6992 15.3844 96.8732 15.5587C97.0473 15.733 97.1852 15.9399 97.2792 16.1675C97.3732 16.3952 97.4214 16.6392 97.421 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M61.672 25.8944C61.672 26.2655 61.562 26.6283 61.3558 26.9369C61.1496 27.2455 60.8565 27.486 60.5136 27.6281C60.1707 27.7701 59.7934 27.8072 59.4294 27.7348C59.0654 27.6624 58.731 27.4837 58.4686 27.2213C58.2061 26.9588 58.0274 26.6245 57.955 26.2605C57.8826 25.8964 57.9198 25.5191 58.0618 25.1762C58.2038 24.8333 58.4443 24.5403 58.7529 24.3341C59.0615 24.1279 59.4243 24.0178 59.7955 24.0178C60.042 24.0175 60.2862 24.0657 60.514 24.1599C60.7419 24.2541 60.9489 24.3923 61.1232 24.5666C61.2976 24.7409 61.4358 24.948 61.5299 25.1758C61.6241 25.4036 61.6724 25.6478 61.672 25.8944Z" fill="#E3E3E3"/>
                                        <path d="M60.3102 34.9028H59.2812V43.9113H60.3102V34.9028Z" fill="#A6B5CB"/>
                                        <path d="M69.2487 25.894H68.2197V43.9111H69.2487V25.894Z" fill="#A6B5CB"/>
                                        <path d="M78.1852 7.87695H77.1562V43.9138H78.1852V7.87695Z" fill="#A6B5CB"/>
                                        <path d="M87.1235 16.8857H86.0945V43.9113H87.1235V16.8857Z" fill="#A6B5CB"/>
                                        <path d="M96.0641 25.894H95.0352V43.9111H96.0641V25.894Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 16.8854C75.7969 17.2566 75.9069 17.6194 76.1131 17.928C76.3193 18.2366 76.6124 18.4771 76.9553 18.6191C77.2982 18.7612 77.6755 18.7983 78.0395 18.7259C78.4035 18.6535 78.7379 18.4748 79.0003 18.2124C79.2628 17.9499 79.4415 17.6156 79.5139 17.2515C79.5863 16.8875 79.5491 16.5102 79.4071 16.1673C79.2651 15.8244 79.0246 15.5314 78.716 15.3252C78.4074 15.119 78.0446 15.0089 77.6734 15.0089C77.4269 15.0085 77.1827 15.0568 76.9549 15.151C76.727 15.2452 76.52 15.3834 76.3457 15.5577C76.1713 15.732 76.0331 15.939 75.939 16.1669C75.8448 16.3947 75.7965 16.6389 75.7969 16.8854Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 25.8944C66.8584 26.2655 66.9685 26.6283 67.1747 26.9369C67.3808 27.2455 67.6739 27.486 68.0168 27.6281C68.3597 27.7701 68.737 27.8072 69.101 27.7348C69.465 27.6624 69.7994 27.4837 70.0618 27.2213C70.3243 26.9588 70.503 26.6245 70.5754 26.2605C70.6478 25.8964 70.6107 25.5191 70.4686 25.1762C70.3266 24.8333 70.0861 24.5403 69.7775 24.3341C69.4689 24.1279 69.1061 24.0178 68.7349 24.0178C68.4884 24.0175 68.2442 24.0657 68.0164 24.1599C67.7885 24.2541 67.5815 24.3923 67.4072 24.5666C67.2329 24.7409 67.0947 24.948 67.0005 25.1758C66.9063 25.4036 66.858 25.6478 66.8584 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 25.8944C75.7969 26.2655 75.9069 26.6283 76.1131 26.9369C76.3193 27.2455 76.6124 27.486 76.9553 27.6281C77.2982 27.7701 77.6755 27.8072 78.0395 27.7348C78.4035 27.6624 78.7379 27.4837 79.0003 27.2213C79.2628 26.9588 79.4415 26.6245 79.5139 26.2605C79.5863 25.8964 79.5491 25.5191 79.4071 25.1762C79.2651 24.8333 79.0246 24.5403 78.716 24.3341C78.4074 24.1279 78.0446 24.0178 77.6734 24.0178C77.4269 24.0175 77.1827 24.0657 76.9549 24.1599C76.727 24.2541 76.52 24.3923 76.3457 24.5666C76.1713 24.7409 76.0331 24.948 75.939 25.1758C75.8448 25.4036 75.7965 25.6478 75.7969 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 25.8944C93.6719 26.2655 93.7819 26.6283 93.9881 26.9369C94.1943 27.2455 94.4874 27.486 94.8303 27.6281C95.1732 27.7701 95.5505 27.8072 95.9145 27.7348C96.2785 27.6624 96.6129 27.4837 96.8753 27.2213C97.1378 26.9588 97.3165 26.6245 97.3889 26.2605C97.4613 25.8964 97.4241 25.5191 97.2821 25.1762C97.1401 24.8333 96.8996 24.5403 96.591 24.3341C96.2824 24.1279 95.9196 24.0178 95.5484 24.0178C95.3019 24.0175 95.0577 24.0657 94.8299 24.1599C94.602 24.2541 94.395 24.3923 94.2207 24.5666C94.0463 24.7409 93.9081 24.948 93.814 25.1758C93.7198 25.4036 93.6715 25.6478 93.6719 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M57.9207 34.9142C57.9201 35.2856 58.0297 35.6488 58.2357 35.9578C58.4417 36.2669 58.7348 36.5078 59.0778 36.6502C59.4208 36.7926 59.7983 36.83 60.1626 36.7577C60.5269 36.6854 60.8615 36.5066 61.1241 36.244C61.3867 35.9814 61.5655 35.6467 61.6378 35.2825C61.7101 34.9182 61.6727 34.5406 61.5303 34.1976C61.388 33.8546 61.147 33.5616 60.838 33.3556C60.5289 33.1496 60.1657 33.04 59.7944 33.0405C59.2977 33.0413 58.8215 33.2389 58.4703 33.5902C58.1191 33.9414 57.9214 34.4175 57.9207 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 34.9142C66.8578 35.2855 66.9674 35.6486 67.1733 35.9575C67.3791 36.2665 67.672 36.5075 68.0149 36.6499C68.3577 36.7924 68.7351 36.83 69.0993 36.7579C69.4635 36.6858 69.7981 36.5073 70.0608 36.245C70.3236 35.9827 70.5026 35.6483 70.5752 35.2842C70.6478 34.9201 70.6108 34.5427 70.4689 34.1996C70.327 33.8565 70.0864 33.5633 69.7778 33.357C69.4691 33.1507 69.1062 33.0405 68.7349 33.0405C68.2377 33.0405 67.7609 33.2378 67.409 33.5891C67.0572 33.9405 66.8592 34.417 66.8584 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 34.9142C75.7963 35.2855 75.9059 35.6486 76.1118 35.9575C76.3176 36.2665 76.6105 36.5075 76.9533 36.6499C77.2962 36.7924 77.6736 36.83 78.0378 36.7579C78.402 36.6858 78.7366 36.5073 78.9993 36.245C79.262 35.9827 79.441 35.6483 79.5137 35.2842C79.5863 34.9201 79.5493 34.5427 79.4074 34.1996C79.2654 33.8565 79.0249 33.5633 78.7163 33.357C78.4076 33.1507 78.0447 33.0405 77.6734 33.0405C77.1762 33.0405 76.6993 33.2378 76.3475 33.5891C75.9957 33.9405 75.7976 34.417 75.7969 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 34.9142C84.7331 35.2856 84.8427 35.6488 85.0487 35.9578C85.2547 36.2669 85.5477 36.5078 85.8908 36.6502C86.2338 36.7926 86.6113 36.83 86.9756 36.7577C87.3399 36.6854 87.6745 36.5066 87.9371 36.244C88.1997 35.9814 88.3785 35.6467 88.4508 35.2825C88.5231 34.9182 88.4857 34.5406 88.3433 34.1976C88.2009 33.8546 87.96 33.5616 87.651 33.3556C87.3419 33.1496 86.9787 33.04 86.6073 33.0405C86.1106 33.0413 85.6345 33.2389 85.2833 33.5902C84.932 33.9414 84.7344 34.4175 84.7336 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 34.9142C93.6713 35.2855 93.7809 35.6486 93.9868 35.9575C94.1926 36.2665 94.4855 36.5075 94.8283 36.6499C95.1712 36.7924 95.5486 36.83 95.9128 36.7579C96.277 36.6858 96.6116 36.5073 96.8743 36.245C97.137 35.9827 97.316 35.6483 97.3887 35.2842C97.4613 34.9201 97.4243 34.5427 97.2824 34.1996C97.1404 33.8565 96.8999 33.5633 96.5913 33.357C96.2826 33.1507 95.9197 33.0405 95.5484 33.0405C95.0512 33.0405 94.5743 33.2378 94.2225 33.5891C93.8707 33.9405 93.6726 34.417 93.6719 34.9142Z" fill="#A6B5CB"/>
                                        <path d="M57.9207 43.9114C57.9201 44.2828 58.0297 44.646 58.2357 44.955C58.4417 45.2641 58.7348 45.505 59.0778 45.6474C59.4208 45.7898 59.7983 45.8272 60.1626 45.7549C60.5269 45.6826 60.8615 45.5038 61.1241 45.2412C61.3867 44.9786 61.5655 44.6439 61.6378 44.2797C61.7101 43.9154 61.6727 43.5378 61.5303 43.1948C61.388 42.8518 61.147 42.5588 60.838 42.3528C60.5289 42.1468 60.1657 42.0372 59.7944 42.0377C59.2977 42.0385 58.8215 42.2361 58.4703 42.5873C58.1191 42.9386 57.9214 43.4147 57.9207 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M66.8584 43.9114C66.8578 44.2827 66.9674 44.6458 67.1733 44.9547C67.3791 45.2637 67.672 45.5047 68.0149 45.6471C68.3577 45.7896 68.7351 45.8272 69.0993 45.7551C69.4635 45.683 69.7981 45.5045 70.0608 45.2422C70.3236 44.9798 70.5026 44.6455 70.5752 44.2814C70.6478 43.9173 70.6108 43.5398 70.4689 43.1968C70.327 42.8537 70.0864 42.5605 69.7778 42.3542C69.4691 42.1478 69.1062 42.0377 68.7349 42.0377C68.2377 42.0377 67.7609 42.235 67.409 42.5863C67.0572 42.9376 66.8592 43.4142 66.8584 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 43.9114C75.7963 44.2827 75.9059 44.6458 76.1118 44.9547C76.3176 45.2637 76.6105 45.5047 76.9533 45.6471C77.2962 45.7896 77.6736 45.8272 78.0378 45.7551C78.402 45.683 78.7366 45.5045 78.9993 45.2422C79.262 44.9798 79.441 44.6455 79.5137 44.2814C79.5863 43.9173 79.5493 43.5398 79.4074 43.1968C79.2654 42.8537 79.0249 42.5605 78.7163 42.3542C78.4076 42.1478 78.0447 42.0377 77.6734 42.0377C77.1762 42.0377 76.6993 42.235 76.3475 42.5863C75.9957 42.9376 75.7976 43.4142 75.7969 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 43.9114C84.7331 44.2828 84.8427 44.646 85.0487 44.955C85.2547 45.2641 85.5477 45.505 85.8908 45.6474C86.2338 45.7898 86.6113 45.8272 86.9756 45.7549C87.3399 45.6826 87.6745 45.5038 87.9371 45.2412C88.1997 44.9786 88.3785 44.6439 88.4508 44.2797C88.5231 43.9154 88.4857 43.5378 88.3433 43.1948C88.2009 42.8518 87.96 42.5588 87.651 42.3528C87.3419 42.1468 86.9787 42.0372 86.6073 42.0377C86.1106 42.0385 85.6345 42.2361 85.2833 42.5873C84.932 42.9386 84.7344 43.4147 84.7336 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M93.6719 43.9114C93.6713 44.2827 93.7809 44.6458 93.9868 44.9547C94.1926 45.2637 94.4855 45.5047 94.8283 45.6471C95.1712 45.7896 95.5486 45.8272 95.9128 45.7551C96.277 45.683 96.6116 45.5045 96.8743 45.2422C97.137 44.9798 97.316 44.6455 97.3887 44.2814C97.4613 43.9173 97.4243 43.5398 97.2824 43.1968C97.1404 42.8537 96.8999 42.5605 96.5913 42.3542C96.2826 42.1478 95.9197 42.0377 95.5484 42.0377C95.0512 42.0377 94.5743 42.235 94.2225 42.5863C93.8707 42.9376 93.6726 43.4142 93.6719 43.9114Z" fill="#A6B5CB"/>
                                        <path d="M75.7969 7.87715C75.7969 8.24829 75.9069 8.6111 76.1131 8.9197C76.3193 9.22829 76.6124 9.46881 76.9553 9.61084C77.2982 9.75287 77.6755 9.79003 78.0395 9.71763C78.4035 9.64522 78.7379 9.4665 79.0003 9.20406C79.2628 8.94162 79.4415 8.60725 79.5139 8.24324C79.5863 7.87923 79.5491 7.50192 79.4071 7.15903C79.2651 6.81614 79.0246 6.52306 78.716 6.31687C78.4074 6.11067 78.0446 6.00061 77.6734 6.00061C77.4269 6.00024 77.1827 6.04852 76.9549 6.1427C76.727 6.23687 76.52 6.37508 76.3457 6.5494C76.1713 6.72373 76.0331 6.93075 75.939 7.15859C75.8448 7.38643 75.7965 7.63061 75.7969 7.87715Z" fill="#A6B5CB"/>
                                        <path d="M84.7336 16.8854C84.7336 17.2567 84.8438 17.6196 85.0501 17.9283C85.2564 18.2369 85.5497 18.4775 85.8927 18.6194C86.2358 18.7614 86.6132 18.7984 86.9773 18.7257C87.3414 18.6531 87.6758 18.4741 87.9381 18.2114C88.2004 17.9486 88.3789 17.614 88.451 17.2498C88.5231 16.8856 88.4855 16.5082 88.3431 16.1654C88.2006 15.8225 87.9596 15.5296 87.6507 15.3238C87.3417 15.1179 86.9786 15.0084 86.6073 15.0089C86.361 15.0089 86.1172 15.0575 85.8897 15.1518C85.6621 15.2462 85.4555 15.3844 85.2814 15.5587C85.1074 15.733 84.9695 15.9399 84.8755 16.1675C84.7815 16.3952 84.7333 16.6392 84.7336 16.8854Z" fill="#E3E3E3"/>
                                        <path d="M84.7336 25.8944C84.7336 26.2656 84.8438 26.6285 85.0501 26.9372C85.2564 27.2459 85.5497 27.4864 85.8927 27.6283C86.2358 27.7703 86.6132 27.8073 86.9773 27.7346C87.3414 27.662 87.6758 27.483 87.9381 27.2203C88.2004 26.9575 88.3789 26.6229 88.451 26.2587C88.5231 25.8945 88.4855 25.5171 88.3431 25.1743C88.2006 24.8314 87.9596 24.5386 87.6507 24.3327C87.3417 24.1268 86.9786 24.0173 86.6073 24.0178C86.361 24.0178 86.1172 24.0664 85.8897 24.1607C85.6621 24.2551 85.4555 24.3933 85.2814 24.5676C85.1074 24.7419 84.9695 24.9488 84.8755 25.1765C84.7815 25.4041 84.7333 25.6481 84.7336 25.8944Z" fill="#A6B5CB"/>
                                        <path d="M43.2187 64.2096H41.4812L46.5068 50.5229H48.2176L53.2432 64.2096H51.5056L47.4156 52.6882H47.3087L43.2187 64.2096ZM43.8603 58.8632H50.864V60.3335H43.8603V58.8632ZM59.3314 64.4234C58.369 64.4234 57.5403 64.1962 56.8453 63.7418C56.1503 63.2873 55.6156 62.6614 55.2414 61.8639C54.8671 61.0664 54.68 60.1553 54.68 59.1305C54.68 58.088 54.8716 57.168 55.2548 56.3705C55.6424 55.5685 56.1815 54.9426 56.872 54.4926C57.5671 54.0381 58.3779 53.8109 59.3046 53.8109C60.0264 53.8109 60.6769 53.9446 61.256 54.2119C61.8352 54.4792 62.3097 54.8535 62.6795 55.3346C63.0493 55.8158 63.2788 56.3772 63.3679 57.0187H61.7907C61.6704 56.5509 61.4031 56.1366 60.9887 55.7757C60.5788 55.4104 60.0264 55.2277 59.3314 55.2277C58.7165 55.2277 58.1774 55.3881 57.7141 55.7089C57.2552 56.0252 56.8965 56.473 56.6381 57.0521C56.3842 57.6269 56.2572 58.3019 56.2572 59.0771C56.2572 59.8701 56.3819 60.5607 56.6314 61.1488C56.8854 61.7369 57.2418 62.1936 57.7007 62.5188C58.1641 62.844 58.7076 63.0067 59.3314 63.0067C59.7412 63.0067 60.1133 62.9354 60.4474 62.7928C60.7816 62.6502 61.0645 62.4453 61.2961 62.178C61.5278 61.9107 61.6927 61.5899 61.7907 61.2156H63.3679C63.2788 61.8216 63.0582 62.3673 62.7063 62.853C62.3587 63.3341 61.8976 63.7173 61.3229 64.0024C60.7526 64.2831 60.0888 64.4234 59.3314 64.4234ZM69.8437 64.4234C68.8813 64.4234 68.0526 64.1962 67.3576 63.7418C66.6626 63.2873 66.1279 62.6614 65.7537 61.8639C65.3794 61.0664 65.1923 60.1553 65.1923 59.1305C65.1923 58.088 65.3839 57.168 65.767 56.3705C66.1547 55.5685 66.6937 54.9426 67.3843 54.4926C68.0793 54.0381 68.8902 53.8109 69.8169 53.8109C70.5387 53.8109 71.1892 53.9446 71.7683 54.2119C72.3475 54.4792 72.822 54.8535 73.1918 55.3346C73.5616 55.8158 73.7911 56.3772 73.8802 57.0187H72.303C72.1827 56.5509 71.9154 56.1366 71.501 55.7757C71.0911 55.4104 70.5387 55.2277 69.8437 55.2277C69.2288 55.2277 68.6897 55.3881 68.2264 55.7089C67.7675 56.0252 67.4088 56.473 67.1504 57.0521C66.8965 57.6269 66.7695 58.3019 66.7695 59.0771C66.7695 59.8701 66.8942 60.5607 67.1437 61.1488C67.3977 61.7369 67.7541 62.1936 68.213 62.5188C68.6764 62.844 69.2199 63.0067 69.8437 63.0067C70.2535 63.0067 70.6256 62.9354 70.9597 62.7928C71.2939 62.6502 71.5768 62.4453 71.8084 62.178C72.0401 61.9107 72.205 61.5899 72.303 61.2156H73.8802C73.7911 61.8216 73.5705 62.3673 73.2185 62.853C72.871 63.3341 72.4099 63.7173 71.8352 64.0024C71.2649 64.2831 70.6011 64.4234 69.8437 64.4234ZM82.6549 60.0127V53.9446H84.2321V64.2096H82.6549V62.472H82.548C82.3074 62.9933 81.9331 63.4366 81.4252 63.8019C80.9173 64.1628 80.2757 64.3433 79.5005 64.3433C78.859 64.3433 78.2887 64.2029 77.7897 63.9222C77.2907 63.6371 76.8986 63.2094 76.6135 62.6391C76.3283 62.0644 76.1858 61.3404 76.1858 60.4671V53.9446H77.763V60.3602C77.763 61.1087 77.9724 61.7057 78.3912 62.1512C78.8144 62.5968 79.3535 62.8195 80.0084 62.8195C80.4005 62.8195 80.7992 62.7193 81.2047 62.5188C81.6146 62.3183 81.9576 62.0109 82.2339 61.5966C82.5145 61.1822 82.6549 60.6543 82.6549 60.0127ZM94.3918 56.2435L92.975 56.6445C92.8859 56.4084 92.7545 56.1789 92.5807 55.9561C92.4114 55.7289 92.1798 55.5418 91.8857 55.3948C91.5917 55.2477 91.2152 55.1742 90.7563 55.1742C90.1281 55.1742 89.6046 55.319 89.1858 55.6086C88.7715 55.8938 88.5643 56.2569 88.5643 56.6979C88.5643 57.09 88.7069 57.3997 88.992 57.6269C89.2771 57.8541 89.7227 58.0435 90.3286 58.1949L91.8523 58.5692C92.7701 58.7919 93.454 59.1328 93.904 59.5917C94.354 60.0461 94.579 60.632 94.579 61.3493C94.579 61.9374 94.4096 62.4631 94.071 62.9265C93.7369 63.3898 93.2691 63.7552 92.6676 64.0225C92.0662 64.2898 91.3667 64.4234 90.5692 64.4234C89.5222 64.4234 88.6556 64.1962 87.9695 63.7418C87.2834 63.2873 86.849 62.6235 86.6663 61.7503L88.1633 61.376C88.3059 61.9285 88.5754 62.3428 88.9719 62.6191C89.3729 62.8953 89.8964 63.0334 90.5424 63.0334C91.2776 63.0334 91.8612 62.8775 92.2934 62.5656C92.73 62.2493 92.9483 61.8706 92.9483 61.4295C92.9483 61.0731 92.8236 60.7746 92.5741 60.534C92.3246 60.2889 91.9414 60.1063 91.4246 59.986L89.7138 59.585C88.7737 59.3622 88.0831 59.0169 87.642 58.5491C87.2054 58.0769 86.9871 57.4865 86.9871 56.7781C86.9871 56.199 87.1497 55.6866 87.475 55.2411C87.8047 54.7955 88.2524 54.4458 88.8182 54.1918C89.3885 53.9379 90.0345 53.8109 90.7563 53.8109C91.7721 53.8109 92.5696 54.0337 93.1488 54.4792C93.7324 54.9247 94.1468 55.5128 94.3918 56.2435ZM99.9738 64.4502C99.3233 64.4502 98.733 64.3277 98.2028 64.0826C97.6726 63.8331 97.2516 63.4745 96.9397 63.0067C96.6278 62.5344 96.4719 61.9641 96.4719 61.2958C96.4719 60.7077 96.5877 60.231 96.8194 59.8657C97.0511 59.4959 97.3607 59.2063 97.7483 58.9969C98.136 58.7875 98.5637 58.6316 99.0315 58.5291C99.5037 58.4222 99.9782 58.3375 100.455 58.2751C101.079 58.1949 101.584 58.1348 101.972 58.0947C102.364 58.0501 102.649 57.9766 102.827 57.8741C103.01 57.7717 103.101 57.5935 103.101 57.3395V57.286C103.101 56.6267 102.921 56.1143 102.56 55.749C102.204 55.3836 101.662 55.201 100.936 55.201C100.183 55.201 99.5928 55.3658 99.1651 55.6955C98.7374 56.0252 98.4367 56.3772 98.2629 56.7514L96.7659 56.2168C97.0333 55.593 97.3897 55.1074 97.8352 54.7599C98.2852 54.4079 98.7753 54.1629 99.3055 54.0248C99.8401 53.8822 100.366 53.8109 100.883 53.8109C101.212 53.8109 101.591 53.851 102.019 53.9312C102.451 54.0069 102.867 54.1651 103.268 54.4057C103.674 54.6463 104.01 55.0094 104.278 55.495C104.545 55.9806 104.679 56.6311 104.679 57.4464V64.2096H103.101V62.8195H103.021C102.914 63.0423 102.736 63.2807 102.487 63.5346C102.237 63.7886 101.905 64.0047 101.491 64.1829C101.076 64.3611 100.571 64.4502 99.9738 64.4502ZM100.214 63.0334C100.838 63.0334 101.364 62.9109 101.792 62.6658C102.224 62.4208 102.549 62.1045 102.767 61.7169C102.99 61.3292 103.101 60.9216 103.101 60.4939V59.0504C103.035 59.1305 102.888 59.2041 102.66 59.2709C102.438 59.3333 102.179 59.389 101.885 59.438C101.595 59.4825 101.313 59.5226 101.036 59.5583C100.765 59.5894 100.544 59.6162 100.375 59.6385C99.9649 59.6919 99.5817 59.7788 99.2253 59.8991C98.8733 60.0149 98.5882 60.1909 98.3699 60.427C98.156 60.6587 98.0491 60.975 98.0491 61.376C98.0491 61.924 98.2518 62.3384 98.6572 62.6191C99.0671 62.8953 99.5862 63.0334 100.214 63.0334ZM112.128 53.9446V55.2812H106.595V53.9446H112.128ZM108.252 64.2096V52.5278C108.252 51.9397 108.39 51.4496 108.667 51.0575C108.943 50.6655 109.302 50.3714 109.743 50.1754C110.184 49.9793 110.649 49.8813 111.139 49.8813C111.527 49.8813 111.843 49.9125 112.088 49.9749C112.333 50.0373 112.516 50.0952 112.636 50.1486L112.182 51.512C112.102 51.4852 111.99 51.4518 111.848 51.4117C111.71 51.3716 111.527 51.3516 111.3 51.3516C110.778 51.3516 110.402 51.483 110.17 51.7459C109.943 52.0087 109.829 52.3941 109.829 52.902V64.2096H108.252Z" fill="#A6B5CB"/>
                                    </svg>

                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.8612 32.6508L32.1848 38.3061L34.3705 40.4837L40.0796 34.8284L37.8612 32.6508Z" fill="#A6B5CB"/>
                                        <path d="M26.3786 44.0911L20.7021 49.7464L22.8879 51.9565L28.5643 46.2687L26.3786 44.0911Z" fill="#A6B5CB"/>
                                        <path d="M30.7828 36.9086L36.4592 31.2208L34.2735 29.0432L28.5645 34.6985L30.7828 36.9086Z" fill="#A6B5CB"/>
                                        <path d="M24.9749 42.6936L22.7565 40.4835L17.0801 46.1713L19.2658 48.349L24.9749 42.6936Z" fill="#A6B5CB"/>
                                        <path d="M24.9749 38.3061L19.2658 32.6508L17.0801 34.8284L22.7565 40.4837L24.9749 38.3061Z" fill="#A6B5CB"/>
                                        <path d="M26.3786 36.9086L28.5643 34.6985L22.8879 29.0432L20.7021 31.2208L26.3786 36.9086Z" fill="#A6B5CB"/>
                                        <path d="M32.1848 42.6936L37.8612 48.349L40.0796 46.1713L34.3705 40.4835L32.1848 42.6936Z" fill="#A6B5CB"/>
                                        <path d="M36.4592 49.7464L30.7828 44.0911L28.5645 46.2687L34.2735 51.9565L36.4592 49.7464Z" fill="#A6B5CB"/>
                                        <path d="M36.4591 54.1345L34.2733 51.9569L28.5643 57.6122L22.8879 51.9569L20.7021 54.1345L28.5643 62L36.4591 54.1345Z" fill="#A6B5CB"/>
                                        <path d="M17.0805 34.8284L14.8948 32.6508L7 40.4837L14.8948 48.3491L17.0805 46.1715L11.4041 40.4837L17.0805 34.8284Z" fill="#A6B5CB"/>
                                        <path d="M42.2651 32.6508L40.0793 34.8284L45.7558 40.4837L40.0793 46.1715L42.2651 48.3491L50.1599 40.4837L42.2651 32.6508Z" fill="#A6B5CB"/>
                                        <path d="M34.2733 29.043L36.4591 26.8654L28.5643 19L20.7021 26.8654L22.8879 29.043L28.5643 23.3877L34.2733 29.043Z" fill="#A6B5CB"/>
                                        <path d="M67.6872 40.604C68.38 40.0519 68.9342 39.2236 69.142 38.1883V38.1193L67.6872 37.7742V37.8432C67.4794 38.6024 67.2023 39.2237 66.7173 39.6378C66.2324 40.0519 65.6089 40.2589 64.9161 40.2589C64.3619 40.2589 63.8076 40.1209 63.3227 39.8448C62.8378 39.5687 62.4914 39.0856 62.2142 38.5334C61.9371 37.9122 61.8679 37.222 61.8679 36.4628C61.8679 35.8416 61.9371 35.2205 62.145 34.6683C62.3528 34.1161 62.6992 33.633 63.1841 33.2879C63.6691 32.9428 64.2926 32.8047 64.9854 32.8047C65.6089 32.8047 66.1631 32.9428 66.5788 33.2879C66.9944 33.564 67.3408 34.0471 67.5487 34.7373V34.8063L69.0035 34.4612V34.3922C68.7264 33.4949 68.2414 32.8047 67.5487 32.3216C66.8559 31.8384 66.0245 31.5624 65.0546 31.5624C64.154 31.5624 63.392 31.7694 62.6299 32.1145C61.9371 32.5287 61.3136 33.0808 60.9672 33.84C60.5516 34.5993 60.3438 35.4965 60.3438 36.4628C60.3438 37.3601 60.5516 38.2574 60.898 39.0856C61.2444 39.9139 61.7986 40.535 62.4221 40.9491C63.1149 41.3633 63.9462 41.5703 65.0546 41.5703C66.0938 41.4323 66.9944 41.1562 67.6872 40.604Z" fill="#A6B5CB"/>
                                        <path d="M82.6498 39.0849C83.0655 38.3256 83.2733 37.4284 83.2733 36.4621C83.2733 35.4958 83.0655 34.6675 82.7191 33.8393C82.3034 33.0801 81.7492 32.4589 81.0564 32.0448C80.2943 31.6307 79.463 31.4236 78.5624 31.4236C77.1768 31.4236 75.9991 31.9067 75.0985 32.804C74.1979 33.7013 73.7822 35.0126 73.7822 36.6001C73.7822 37.4284 73.9901 38.2566 74.3364 39.0158C74.6828 39.7751 75.3063 40.3963 75.9991 40.8104C76.7612 41.2245 77.5925 41.5006 78.4931 41.5006C79.3937 41.5006 80.1558 41.2935 80.9179 40.8794C81.6107 40.4653 82.2342 39.8441 82.6498 39.0849ZM78.4931 40.1892C77.5925 40.1892 76.7612 39.8441 76.1377 39.2229C75.5142 38.6017 75.2371 37.7045 75.2371 36.5311C75.2371 35.1507 75.5835 34.1154 76.207 33.4942C76.8305 32.873 77.5925 32.5969 78.4931 32.5969C79.1166 32.5969 79.6709 32.735 80.2251 33.0801C80.71 33.3562 81.1257 33.8393 81.3335 34.3915C81.6106 34.9436 81.7492 35.6338 81.7492 36.3931C81.7492 37.5664 81.4721 38.5327 80.8486 39.1539C80.2251 39.8441 79.3937 40.1892 78.4931 40.1892Z" fill="#A6B5CB"/>
                                        <path d="M97.754 31.7H96.3684V41.4318H97.754V31.7Z" fill="#A6B5CB"/>
                                        <path d="M93.668 41.4315L95.8849 35.2887V31.8377L93.5294 38.4637C93.3216 39.0158 93.1831 39.43 93.1138 39.7751L92.6981 38.6017L90.3427 31.7687H90.2041V35.2887L92.3517 41.5006H93.668V41.4315Z" fill="#A6B5CB"/>
                                        <path d="M89.6492 31.7H88.2637V41.4318H89.6492V31.7Z" fill="#A6B5CB"/>
                                        <path d="M109.6 36.6694C110.155 36.1173 110.432 35.358 110.432 34.5298C110.432 34.0466 110.362 33.5635 110.155 33.2184C109.947 32.8043 109.67 32.4592 109.323 32.2521C108.977 32.045 108.561 31.838 108.076 31.769C107.73 31.6999 107.245 31.7 106.552 31.7H104.751V33.0113H106.621C107.176 33.0113 107.591 33.0113 107.799 33.0804C108.146 33.1494 108.353 33.3564 108.561 33.6325C108.769 33.9086 108.838 34.2537 108.838 34.5988C108.838 35.151 108.7 35.4961 108.353 35.8412C108.007 36.1173 107.453 36.2553 106.621 36.2553H104.682V37.5667H106.621C108.076 37.5667 109.115 37.2906 109.6 36.6694Z" fill="#A6B5CB"/>
                                        <path d="M104.267 31.7H102.812V41.4318H104.267V31.7Z" fill="#A6B5CB"/>
                                        <path d="M120.825 31.7H119.301L115.49 41.4318H117.014L117.43 40.3275L118.538 37.3596L118.746 36.7384L119.578 34.5988C119.785 34.1157 119.924 33.6325 119.993 33.1494C120.132 33.6325 120.34 34.1847 120.617 34.8059L121.587 37.3596H119.093L118.677 38.5329H122.072L123.18 41.4318H124.843L120.825 31.7Z" fill="#A6B5CB"/>
                                        <path d="M136.203 38.9471V41.4318H137.658V31.7H136.272V39.0161L136.203 38.9471Z" fill="#A6B5CB"/>
                                        <path d="M131.216 31.7H129.83V41.4318H131.216V31.7Z" fill="#A6B5CB"/>
                                        <path d="M135.718 38.1878L131.7 32.3901V34.8059L135.718 40.6726V38.1878Z" fill="#A6B5CB"/>
                                        <path d="M150.265 31.7L148.326 34.5298C147.979 35.0819 147.633 35.6341 147.356 36.1172L146.524 37.3596V41.4318H147.979V37.3596L151.928 31.769H150.265V31.7Z" fill="#A6B5CB"/>
                                        <path d="M146.455 34.6678L144.515 31.7H142.714L146.247 36.8765L147.078 35.6341L146.455 34.6678Z" fill="#A6B5CB"/>
                                        <path d="M61.9382 49.3005V46.2635H62.9081V45.7804H60.4141V46.2635H61.384V49.3005H61.9382Z" fill="#A6B5CB"/>
                                        <path d="M67.2017 45.7804H66.786L65.4697 49.3005H66.0239L66.3011 48.5412H67.6173L67.8945 49.3005H68.4487L67.2017 45.7804ZM66.5089 48.0581L66.9938 46.5396L67.4788 48.0581H66.5089Z" fill="#A6B5CB"/>
                                        <path d="M72.3975 46.5399C72.4668 46.4709 72.5361 46.4019 72.6053 46.3329C72.6746 46.2639 72.8132 46.2638 72.9517 46.2638C73.0903 46.2638 73.2981 46.3329 73.3674 46.4019C73.506 46.4709 73.5752 46.6089 73.5752 46.747H74.1295C74.0602 46.4709 73.9216 46.1948 73.7138 45.9878C73.506 45.7807 73.2288 45.7117 72.8824 45.7117C72.6053 45.7117 72.3975 45.7807 72.1897 45.9187C71.9818 46.0568 71.8433 46.1948 71.774 46.3329C71.7047 46.4019 71.7047 46.5399 71.6354 46.678C71.6354 46.816 71.5662 47.0921 71.5662 47.5062C71.5662 47.9203 71.5662 48.1964 71.6354 48.3344C71.6354 48.4035 71.6354 48.4725 71.7047 48.5415C71.7047 48.6105 71.774 48.6105 71.774 48.6795C71.8433 48.8176 71.9818 48.9556 72.1897 49.0937C72.3975 49.2317 72.6053 49.3007 72.8824 49.3007C73.2288 49.3007 73.5752 49.1627 73.7831 48.9556C73.9909 48.7486 74.1295 48.4035 74.1295 48.0584V47.3682H72.8824V47.8513H73.5752V48.0584C73.5752 48.2654 73.506 48.4725 73.3674 48.6105C73.2288 48.7486 73.0903 48.8176 72.8824 48.8176C72.7439 48.8176 72.6746 48.8176 72.5361 48.7486C72.4668 48.6796 72.3975 48.6105 72.3282 48.5415C72.2589 48.4725 72.1897 48.3345 72.1897 48.2654C72.1897 48.1274 72.1204 47.9203 72.1204 47.5752C72.1204 47.2301 72.1204 47.0231 72.1897 46.885C72.2589 46.747 72.3282 46.6089 72.3975 46.5399Z" fill="#A6B5CB"/>
                                        <path d="M77.8018 45.7804V49.3005H80.0186V48.8173H78.2867V45.7804H77.8018Z" fill="#A6B5CB"/>
                                        <path d="M84.1062 45.7804H83.552V49.3005H84.1062V45.7804Z" fill="#A6B5CB"/>
                                        <path d="M88.3335 46.8157L89.9269 49.3005H90.4119V45.7804H89.9269V48.3342H89.8576L88.2643 45.7804H87.7793V49.3005H88.3335V46.8157Z" fill="#A6B5CB"/>
                                        <path d="M96.4385 46.3326V45.7804H94.1523V49.3005H96.4385V48.8173H94.7066V47.782H96.1614V47.2989H94.7066V46.3326H96.4385Z" fill="#A6B5CB"/>
                                        <path d="M104.058 48.5412C104.058 48.6102 104.128 48.6102 104.128 48.6793C104.197 48.8173 104.336 48.9554 104.543 49.0934C104.751 49.2314 104.959 49.3005 105.236 49.3005C105.583 49.3005 105.929 49.1624 106.137 48.9554C106.345 48.7483 106.483 48.4032 106.483 48.0581V47.3679H105.236V47.851H105.929V48.0581C105.929 48.2652 105.86 48.4722 105.721 48.6103C105.583 48.7483 105.444 48.8173 105.236 48.8173C105.098 48.8173 105.028 48.8173 104.89 48.7483C104.82 48.6793 104.751 48.6102 104.682 48.5412C104.613 48.4722 104.543 48.3342 104.543 48.2652C104.543 48.1271 104.474 47.9201 104.474 47.575C104.474 47.2298 104.474 47.0228 104.543 46.8847C104.543 46.7467 104.613 46.6777 104.682 46.6086C104.751 46.5396 104.82 46.4706 104.89 46.4016C104.959 46.3326 105.098 46.3326 105.236 46.3326C105.375 46.3326 105.583 46.4016 105.652 46.4706C105.79 46.5396 105.86 46.6777 105.86 46.8157H106.414C106.345 46.5396 106.206 46.2636 105.998 46.0565C105.79 45.8494 105.513 45.7804 105.167 45.7804C104.89 45.7804 104.682 45.8494 104.474 45.9875C104.266 46.1255 104.128 46.2636 104.058 46.4016C103.989 46.4706 103.989 46.6087 103.92 46.7467C103.92 46.8847 103.851 47.1608 103.851 47.575C103.851 47.9891 103.851 48.2652 103.92 48.4032C103.989 48.4722 103.989 48.5412 104.058 48.5412Z" fill="#A6B5CB"/>
                                        <path d="M110.016 48.5415C110.016 48.6105 110.086 48.6105 110.086 48.6795C110.155 48.8176 110.294 48.9556 110.501 49.0937C110.709 49.2317 110.917 49.3007 111.194 49.3007C111.471 49.3007 111.679 49.2317 111.887 49.0937C112.095 48.9556 112.233 48.8176 112.303 48.6795C112.372 48.6105 112.372 48.4725 112.441 48.3344C112.441 48.1964 112.441 47.9203 112.441 47.5062C112.441 47.0921 112.441 46.816 112.441 46.678C112.441 46.5399 112.372 46.4019 112.303 46.3329C112.233 46.1948 112.095 46.0568 111.887 45.9187C111.679 45.7807 111.471 45.7117 111.194 45.7117C110.917 45.7117 110.709 45.7807 110.501 45.9187C110.294 46.0568 110.155 46.1948 110.086 46.3329C110.016 46.4019 110.016 46.5399 109.947 46.678C109.947 46.816 109.878 47.0921 109.878 47.5062C109.878 47.9203 109.878 48.1964 109.947 48.3344C110.016 48.4725 110.016 48.5415 110.016 48.5415ZM110.501 46.885C110.501 46.747 110.571 46.6779 110.64 46.6089C110.709 46.5399 110.779 46.4709 110.848 46.4019C110.917 46.3329 111.056 46.3329 111.194 46.3329C111.333 46.3329 111.402 46.3329 111.541 46.4019C111.61 46.4709 111.679 46.5399 111.748 46.6089C111.818 46.6779 111.887 46.816 111.887 46.885C111.887 47.0231 111.956 47.2301 111.956 47.5752C111.956 47.9203 111.956 48.1274 111.887 48.2654C111.887 48.4035 111.818 48.4725 111.748 48.5415C111.679 48.6105 111.61 48.6796 111.541 48.7486C111.471 48.8176 111.333 48.8176 111.194 48.8176C111.056 48.8176 110.986 48.8176 110.848 48.7486C110.779 48.6796 110.709 48.6105 110.64 48.5415C110.571 48.4725 110.501 48.3345 110.501 48.2654C110.501 48.1274 110.432 47.9203 110.432 47.5752C110.501 47.2301 110.501 46.954 110.501 46.885Z" fill="#A6B5CB"/>
                                        <path d="M118.329 46.3326V45.7804H116.112V49.3005H118.329V48.8173H116.597V47.782H118.052V47.2989H116.597V46.3326H118.329Z" fill="#A6B5CB"/>
                                        <path d="M122.9 48.8176C122.485 48.8176 122.207 48.6795 121.93 48.4725L121.584 48.8866C121.93 49.2317 122.415 49.3697 122.9 49.3697C123.732 49.3697 124.147 49.0246 124.147 48.3344C124.147 48.0584 124.078 47.8513 123.939 47.6442C123.801 47.4372 123.524 47.3682 123.177 47.2991C123.039 47.2991 122.9 47.2301 122.762 47.2301C122.554 47.2301 122.485 47.1611 122.415 47.0231C122.346 46.9541 122.277 46.816 122.277 46.747C122.277 46.6089 122.346 46.4709 122.485 46.3329C122.623 46.2639 122.762 46.1948 122.9 46.1948C123.247 46.1948 123.524 46.2638 123.801 46.4709L124.078 46.0568C123.732 45.8497 123.385 45.7117 122.9 45.7117C122.554 45.7117 122.277 45.7807 122.069 45.9878C121.861 46.1948 121.792 46.4019 121.792 46.747C121.792 47.0231 121.861 47.2301 122.069 47.3682C122.207 47.5752 122.485 47.6443 122.762 47.7133C122.9 47.7133 123.108 47.7823 123.247 47.7823C123.524 47.8513 123.732 47.9894 123.732 48.2654C123.524 48.6796 123.316 48.8176 122.9 48.8176Z" fill="#A6B5CB"/>
                                        <path d="M134.263 49.3005V45.7804H133.778V47.2989H132.323V45.7804H131.838V49.3005H132.323V47.782H133.778V49.3005H134.263Z" fill="#A6B5CB"/>
                                        <path d="M140.292 46.3326V45.7804H138.006V49.3005H140.292V48.8173H138.56V47.782H140.015V47.2989H138.56V46.3326H140.292Z" fill="#A6B5CB"/>
                                        <path d="M146.178 46.8154C146.178 46.4703 146.039 46.2632 145.831 46.0562C145.623 45.9181 145.416 45.8491 145.138 45.8491H143.753V49.3691H144.307V47.8507H145L145.762 49.3691H146.386L145.554 47.7817C145.97 47.5746 146.178 47.2985 146.178 46.8154ZM145.554 47.1605C145.485 47.2985 145.277 47.2986 145.069 47.3676H144.238V46.3323H145.069C145.208 46.3323 145.346 46.4013 145.485 46.4703C145.623 46.5393 145.693 46.6774 145.693 46.8844C145.693 46.9534 145.623 47.0915 145.554 47.1605Z" fill="#A6B5CB"/>
                                        <path d="M152 46.3326V45.7804H149.783V49.3005H152V48.8173H150.268V47.782H151.792V47.2989H150.268V46.3326H152Z" fill="#A6B5CB"/>
                                    </svg>
                                </div>
                                <div class="marquee-item">
                                    <svg width="160" height="80" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="160" height="80"/>
                                        <g clip-path="url(#clip0_13428_2347)">
                                        <path opacity="0.84" fill-rule="evenodd" clip-rule="evenodd" d="M79.9952 54.3755C88.4901 54.3755 95.379 54.6191 95.379 54.9213C95.379 55.2234 88.4901 55.467 79.9952 55.467C71.5002 55.467 64.6113 55.2234 64.6113 54.9213C64.6113 54.6191 71.5002 54.3755 79.9952 54.3755Z" fill="#A6B5CB"/>
                                        <path d="M111.131 66.4411V60.3596H114.826V61.6948H112.737V62.7474H114.71V64.0533H112.737V65.0767H114.826V66.4411H111.131ZM110.24 66.4411H108.702L108.344 63.8097C108.325 63.6245 108.296 63.4198 108.276 63.1859C108.257 62.9618 108.238 62.7084 108.218 62.4452C108.18 62.6986 108.102 63.0203 107.996 63.4101C107.976 63.4881 107.957 63.5465 107.938 63.5855L107.115 66.4314H106.022L105.2 63.5855C105.19 63.5465 105.17 63.4881 105.151 63.4101C105.035 63.03 104.958 62.7084 104.929 62.455C104.909 62.6889 104.89 62.913 104.871 63.1372C104.851 63.3614 104.822 63.5855 104.793 63.8097L104.435 66.4411H102.906L103.835 60.3596H105.47L106.38 63.4978C106.39 63.5173 106.399 63.5563 106.409 63.605C106.496 63.8876 106.544 64.1216 106.573 64.3262C106.583 64.219 106.602 64.1021 106.631 63.9656C106.66 63.8389 106.699 63.6732 106.757 63.4881L107.676 60.3596H109.312L110.24 66.4411ZM96.511 66.4411L98.5912 60.3596H100.652L102.742 66.4411H101.107L100.797 65.3496H98.4558L98.1462 66.4411H96.511ZM98.8138 64.1703H100.449L99.8297 62.1626C99.8103 62.1041 99.7813 62.0067 99.7523 61.8702C99.7232 61.7338 99.6749 61.5583 99.6265 61.3439C99.5878 61.4901 99.5588 61.6363 99.5201 61.7728C99.491 61.9092 99.4523 62.0359 99.4136 62.1626L98.8138 64.1703ZM90.0189 66.4411V60.3596H91.6056L93.889 63.4881C93.9374 63.5563 94.0051 63.683 94.1019 63.8682C94.1986 64.0631 94.3147 64.2872 94.4308 64.5601C94.4018 64.3067 94.3728 64.0826 94.3631 63.8876C94.3437 63.6927 94.3437 63.5173 94.3437 63.3614V60.3596H95.9208V66.4411H94.3437L92.0604 63.3029C92.012 63.2347 91.9443 63.108 91.8378 62.9228C91.7411 62.7279 91.625 62.5037 91.5089 62.2406C91.5379 62.494 91.5669 62.7181 91.5766 62.9228C91.5959 63.1177 91.5959 63.2931 91.5959 63.4491V66.4508H90.0189V66.4411ZM82.743 64.4822C82.9849 64.7648 83.2267 64.9695 83.4686 65.1059C83.7105 65.2423 83.9427 65.3106 84.1749 65.3106C84.3975 65.3106 84.5716 65.2521 84.7168 65.1351C84.8619 65.0182 84.9296 64.8623 84.9296 64.6868C84.9296 64.4822 84.8716 64.3262 84.7458 64.219C84.62 64.1118 84.3491 63.9949 83.9137 63.8779C83.3235 63.722 82.9075 63.5076 82.6559 63.2542C82.414 63.0008 82.2882 62.6402 82.2882 62.1918C82.2882 61.6071 82.4817 61.1393 82.8688 60.7689C83.2558 60.3986 83.7589 60.2231 84.3684 60.2231C84.6974 60.2231 85.0167 60.2719 85.3166 60.3596C85.6166 60.4473 85.8972 60.5838 86.1681 60.7689L85.6553 61.9579C85.4714 61.802 85.2779 61.6753 85.0747 61.5973C84.8812 61.5194 84.6877 61.4706 84.4942 61.4706C84.291 61.4706 84.1362 61.5194 84.0105 61.6168C83.8847 61.7143 83.8266 61.8312 83.8266 61.9872C83.8266 62.1431 83.8847 62.2601 83.9911 62.3575C84.0975 62.4452 84.3104 62.533 84.62 62.6207L84.6974 62.6402C85.365 62.8253 85.8101 63.0203 86.0229 63.2444C86.1681 63.3906 86.2745 63.5758 86.3519 63.7804C86.4293 63.9851 86.4583 64.219 86.4583 64.4724C86.4583 65.1156 86.2455 65.6322 85.8294 66.0318C85.4134 66.4216 84.8522 66.6165 84.1459 66.6165C83.7299 66.6165 83.3429 66.5483 82.9945 66.4021C82.6462 66.2559 82.3173 66.0318 81.998 65.7199L82.743 64.4822ZM77.8376 64.4822C78.0795 64.7648 78.3213 64.9695 78.5632 65.1059C78.8051 65.2423 79.0373 65.3106 79.2695 65.3106C79.4921 65.3106 79.6662 65.2521 79.8113 65.1351C79.9565 65.0182 80.0242 64.8623 80.0242 64.6868C80.0242 64.4822 79.9662 64.3262 79.8404 64.219C79.7146 64.1118 79.4437 63.9949 79.0083 63.8779C78.4181 63.722 78.0021 63.5076 77.7505 63.2542C77.5086 63.0008 77.3828 62.6402 77.3828 62.1918C77.3828 61.6071 77.5763 61.1393 77.9634 60.7689C78.3504 60.3986 78.8535 60.2231 79.463 60.2231C79.792 60.2231 80.1113 60.2719 80.4112 60.3596C80.7112 60.4473 80.9917 60.5838 81.2626 60.7689L80.7499 61.9579C80.566 61.802 80.3725 61.6753 80.1693 61.5973C79.9758 61.5194 79.7823 61.4706 79.5888 61.4706C79.3856 61.4706 79.2308 61.5194 79.105 61.6168C78.9793 61.7143 78.9212 61.8312 78.9212 61.9872C78.9212 62.1431 78.9793 62.2601 79.0857 62.3575C79.1921 62.4452 79.405 62.533 79.7146 62.6207L79.792 62.6402C80.4596 62.8253 80.9047 63.0203 81.1175 63.2444C81.2626 63.3906 81.3691 63.5758 81.4465 63.7804C81.5239 63.9851 81.5529 64.219 81.5529 64.4724C81.5529 65.1156 81.3401 65.6322 80.924 66.0318C80.508 66.4216 79.9468 66.6165 79.2405 66.6165C78.8148 66.6165 78.4374 66.5483 78.0891 66.4021C77.7408 66.2559 77.4119 66.0318 77.0926 65.7199L77.8376 64.4822ZM72.7774 66.4411V60.3596H76.4733V61.6948H74.3835V62.7474H76.3572V64.0533H74.3835V65.0767H76.4733V66.4411H72.7774ZM65.5789 66.4411V60.3596H67.1656L69.449 63.4881C69.4974 63.5563 69.5651 63.683 69.6619 63.8682C69.7586 64.0631 69.8747 64.2872 69.9908 64.5601C69.9618 64.3067 69.9328 64.0826 69.9231 63.8876C69.9038 63.6927 69.9038 63.5173 69.9038 63.3614V60.3596H71.4809V66.4411H69.9038L67.6204 63.3029C67.572 63.2347 67.5043 63.108 67.3979 62.9228C67.3011 62.7279 67.185 62.5037 67.0689 62.2406C67.0979 62.494 67.1269 62.7181 67.1366 62.9228C67.156 63.1177 67.156 63.2931 67.156 63.4491V66.4508H65.5789V66.4411ZM62.5892 66.4411V60.3596H64.2534V66.4411H62.5892ZM57.916 64.4822C58.1579 64.7648 58.3998 64.9695 58.6416 65.1059C58.8835 65.2423 59.1157 65.3106 59.3479 65.3106C59.5705 65.3106 59.7446 65.2521 59.8898 65.1351C60.0349 65.0182 60.1026 64.8623 60.1026 64.6868C60.1026 64.4822 60.0446 64.3262 59.9188 64.219C59.793 64.1118 59.5221 63.9949 59.0867 63.8779C58.4965 63.722 58.0805 63.5076 57.8289 63.2542C57.587 63.0008 57.4612 62.6402 57.4612 62.1918C57.4612 61.6071 57.6548 61.1393 58.0418 60.7689C58.4288 60.3986 58.9319 60.2231 59.5415 60.2231C59.8704 60.2231 60.1897 60.2719 60.4896 60.3596C60.7896 60.4473 61.0702 60.5838 61.3411 60.7689L60.8283 61.9579C60.6444 61.802 60.4509 61.6753 60.2478 61.5973C60.0542 61.5194 59.8607 61.4706 59.6672 61.4706C59.4641 61.4706 59.3092 61.5194 59.1835 61.6168C59.0577 61.7143 58.9996 61.8312 58.9996 61.9872C58.9996 62.1431 59.0577 62.2601 59.1641 62.3575C59.2705 62.4452 59.4834 62.533 59.793 62.6207L59.8704 62.6402C60.538 62.8253 60.9831 63.0203 61.1959 63.2444C61.3411 63.3906 61.4475 63.5758 61.5249 63.7804C61.6023 63.9851 61.6313 64.219 61.6313 64.4724C61.6313 65.1156 61.4185 65.6322 61.0024 66.0318C60.5767 66.4216 60.0252 66.6165 59.3189 66.6165C58.8932 66.6165 58.5159 66.5483 58.1676 66.4021C57.8192 66.2559 57.4903 66.0318 57.171 65.7199L57.916 64.4822ZM51.0175 60.3596H52.6623V63.3126C52.6623 63.7512 52.6719 64.0631 52.6913 64.2483C52.7106 64.4334 52.7493 64.5991 52.8074 64.7258C52.8654 64.8817 52.9816 64.9987 53.1364 65.0864C53.2912 65.1644 53.4847 65.2131 53.7072 65.2131C53.9297 65.2131 54.1232 65.1741 54.2781 65.0864C54.4329 65.0084 54.5393 64.8817 54.607 64.7258C54.6651 64.5991 54.6941 64.4432 54.7231 64.2483C54.7425 64.0533 54.7521 63.7415 54.7521 63.3126V62.8936V60.3498H56.3873V63.566C56.3873 64.2288 56.3486 64.7258 56.2712 65.0377C56.1938 65.3593 56.0583 65.6224 55.8648 65.8466C55.6616 66.0902 55.3714 66.2754 55.0134 66.4021C54.6554 66.5288 54.22 66.5873 53.6975 66.5873C53.1847 66.5873 52.7397 66.5288 52.3817 66.4021C52.0237 66.2754 51.7431 66.0902 51.5302 65.8466C51.3464 65.6224 51.211 65.3495 51.1239 65.0377C51.0465 64.7161 50.9981 64.2288 50.9981 63.566V62.9423V60.3596H51.0175ZM46.857 65.2034H47.4376C47.8246 65.2034 48.1052 65.1546 48.2697 65.0572C48.4341 64.9597 48.5115 64.794 48.5115 64.5699C48.5115 64.3165 48.4341 64.141 48.289 64.0338C48.1439 63.9364 47.8633 63.8779 47.4666 63.8779H46.8667V65.2034H46.857ZM45.3283 66.4411V60.3596H46.9828C47.6601 60.3596 48.1439 60.3791 48.4148 60.4278C48.6857 60.4765 48.9179 60.5448 49.1114 60.652C49.3339 60.7787 49.4984 60.9443 49.6242 61.149C49.7403 61.3634 49.7984 61.5973 49.7984 61.8702C49.7984 62.2211 49.7113 62.494 49.5371 62.6986C49.363 62.9033 49.0824 63.0592 48.705 63.1664C49.1308 63.1957 49.4694 63.3516 49.7113 63.6245C49.9532 63.8974 50.0789 64.258 50.0789 64.7063C50.0789 65.0279 50.0112 65.3106 49.8758 65.564C49.7403 65.8076 49.5468 66.0025 49.2952 66.139C49.0921 66.2462 48.8308 66.3339 48.5309 66.3729C48.2309 66.4216 47.7375 66.4411 47.0506 66.4411H45.3283ZM46.857 62.7961H47.186C47.5924 62.7961 47.873 62.7474 48.0278 62.6596C48.1826 62.5719 48.2503 62.416 48.2503 62.1918C48.2503 61.9579 48.1826 61.802 48.0374 61.7045C47.8923 61.6168 47.6214 61.5681 47.215 61.5681H46.857V62.7961Z" fill="#A6B5CB"/>
                                        <path d="M96.7626 72.9218V68.8577H99.2201V69.345H97.3237V70.5535H99.0073V71.0311H97.3237V72.4345H99.3652V72.9218H96.7626ZM94.2179 69.3158C93.9761 69.3158 93.7922 69.3255 93.6665 69.3353V70.8654H94.0728C94.2663 70.8654 94.4405 70.8557 94.5953 70.8362C94.7501 70.8167 94.8856 70.7777 94.992 70.729C95.0984 70.6705 95.1855 70.5925 95.2435 70.4951C95.3016 70.3976 95.3306 70.2612 95.3306 70.0955C95.3306 69.9395 95.3016 69.8128 95.2435 69.7154C95.1855 69.6179 95.1081 69.5302 95.0113 69.4717C94.9146 69.4133 94.7985 69.3743 94.663 69.345C94.5082 69.3255 94.3728 69.3158 94.2179 69.3158ZM95.0694 71.2163C95.1274 71.2942 95.2145 71.4014 95.3016 71.5281C95.3983 71.6548 95.4951 71.7913 95.5919 71.9472C95.6886 72.1032 95.795 72.2591 95.8918 72.4345C95.9885 72.6002 96.0756 72.7659 96.1433 72.9218H95.5241C95.4467 72.7756 95.3596 72.6197 95.2726 72.4735C95.1855 72.3176 95.0887 72.1714 94.992 72.0349C94.8952 71.8985 94.8081 71.762 94.7114 71.6451C94.6243 71.5281 94.5372 71.4209 94.4598 71.3332C94.4115 71.3332 94.3534 71.343 94.305 71.343C94.2566 71.343 94.1986 71.343 94.1405 71.343H93.6665V72.9316H93.1053V68.926C93.2601 68.887 93.4439 68.8577 93.6374 68.848C93.8309 68.8382 94.0148 68.8285 94.1792 68.8285C94.7501 68.8285 95.1758 68.9357 95.4757 69.1501C95.7757 69.3645 95.9208 69.6861 95.9208 70.115C95.9208 70.3879 95.8531 70.612 95.708 70.8069C95.5531 70.9824 95.35 71.1286 95.0694 71.2163ZM89.777 72.9218V68.8577H92.2345V69.345H90.3381V70.5535H92.0216V71.0311H90.3381V72.4345H92.3796V72.9218H89.777ZM88.2095 68.8577H88.7707V72.9218H88.2095V71.0506H86.2358V72.9218H85.6746V68.8577H86.2358V70.5535H88.2095V68.8577ZM81.0111 72.9218V68.8577H83.4686V69.345H81.5722V70.5535H83.2558V71.0311H81.5722V72.4345H83.6137V72.9218H81.0111ZM79.5307 72.9218C79.4437 72.7756 79.3469 72.6197 79.2405 72.4345C79.1341 72.2591 79.0083 72.0642 78.8825 71.879C78.7567 71.6841 78.6213 71.4892 78.4858 71.2942C78.3503 71.0993 78.2149 70.9044 78.0794 70.7192C77.944 70.534 77.8085 70.3586 77.6827 70.1929C77.557 70.0273 77.4409 69.8811 77.3248 69.7544V72.9218H76.7733V68.8577H77.2183C77.4022 69.0527 77.5957 69.2768 77.7989 69.54C78.002 69.8031 78.2149 70.0662 78.4181 70.3391C78.6213 70.612 78.8148 70.8849 78.9986 71.148C79.1824 71.4112 79.3276 71.6548 79.4533 71.8595V68.848H80.0048V72.9121H79.5307V72.9218ZM75.2059 68.8577H75.767V72.9218H75.2059V68.8577ZM74.6157 72.4248V72.9218H72.1871V68.8577H72.7483V72.4248H74.6157ZM70.7358 70.9239H71.297V72.8244C71.2486 72.8439 71.1809 72.8536 71.0938 72.8731C71.0067 72.8926 70.91 72.9121 70.7939 72.9316C70.6778 72.9511 70.552 72.9706 70.4165 72.9803C70.2811 72.99 70.1456 72.9998 70.0005 72.9998C69.7199 72.9998 69.4587 72.9511 69.2265 72.8633C68.9943 72.7659 68.7911 72.6294 68.6266 72.454C68.4621 72.2786 68.3267 72.0544 68.2396 71.7913C68.1525 71.5281 68.1041 71.226 68.1041 70.8849C68.1041 70.5438 68.1525 70.2417 68.2589 69.9785C68.3654 69.7154 68.5008 69.4912 68.675 69.3158C68.8491 69.1404 69.0523 69.0039 69.2845 68.9065C69.5167 68.809 69.7683 68.77 70.0392 68.77C70.223 68.77 70.3875 68.7798 70.523 68.809C70.6681 68.8285 70.7842 68.8577 70.8906 68.887C70.9874 68.9162 71.0745 68.9454 71.1422 68.9844C71.2099 69.0137 71.2486 69.0429 71.2777 69.0527L71.0938 69.5302C70.9777 69.4522 70.8326 69.3938 70.6488 69.345C70.4649 69.2963 70.2714 69.2671 70.0779 69.2671C69.8747 69.2671 69.6812 69.3061 69.5167 69.3743C69.3523 69.4522 69.2071 69.5594 69.0813 69.6959C68.9652 69.8323 68.8685 70.0078 68.8008 70.2124C68.733 70.4171 68.704 70.6413 68.704 70.8849C68.704 71.1286 68.733 71.3527 68.7911 71.5476C68.8491 71.7426 68.9362 71.918 69.0426 72.0642C69.1588 72.2104 69.2942 72.3176 69.4684 72.3955C69.6328 72.4735 69.836 72.5125 70.0682 72.5125C70.2327 72.5125 70.3682 72.5027 70.4843 72.4833C70.6004 72.4638 70.6778 72.4443 70.7358 72.4345V70.9239ZM66.5851 71.4112C66.4593 71.0701 66.3335 70.7387 66.2174 70.4268C66.0917 70.1052 65.9659 69.8031 65.8401 69.5107C65.7046 69.8031 65.5789 70.1052 65.4531 70.4268C65.3273 70.7485 65.2112 71.0701 65.0854 71.4112H66.5851ZM67.1076 72.9218C67.0398 72.7464 66.9818 72.571 66.9237 72.4053C66.8657 72.2396 66.8076 72.0642 66.7399 71.8887H64.9113L64.5436 72.9218H63.9631C64.1179 72.493 64.263 72.0934 64.3985 71.7328C64.5339 71.3722 64.6694 71.0213 64.7952 70.69C64.9209 70.3586 65.0564 70.0467 65.1822 69.7446C65.308 69.4425 65.4434 69.1501 65.5789 68.8577H66.1013C66.2368 69.1501 66.3722 69.4425 66.5077 69.7446C66.6335 70.0467 66.7689 70.3586 66.8947 70.69C67.0205 71.0213 67.156 71.3625 67.2914 71.7328C67.4269 72.0934 67.572 72.493 67.7268 72.9218H67.1076ZM63.8179 68.8577V69.3548H62.5505V72.9218H61.9893V69.3548H60.7218V68.8577H63.8179Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M67.3301 49.5314H72.816L89.7092 32.5149H92.6602L96.8884 28.2656H79.9952L84.2233 32.5149L67.3301 49.5314Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M92.6602 32.5149V35.4972L78.7374 49.5314H84.2233L92.6602 41.0232L96.8883 45.2724V28.2656L92.6602 32.5149Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M96.8884 32.5149V38.0408L110.821 24.0066H113.772L118 19.7573H101.107L105.325 24.0066L96.8884 32.5149Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M113.772 24.0066V26.9889L91.6733 49.5314H97.1593L113.772 32.5149L118 36.7739V19.7573L113.772 24.0066Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M92.6602 28.2658H87.1743L101.107 14.2315V11.2493L105.325 7V24.0068L101.107 19.7575L92.6602 28.2658Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M101.107 11.2493H98.1461L84.2233 25.2835V19.7575L92.6602 11.2493L88.4418 7H105.325L101.107 11.2493Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2221 49.5316H53.7362L79.9952 22.7398V19.7576L84.2233 15.5083V32.5151L79.9952 28.2658L59.2221 49.5316Z" fill="#A6B5CB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M79.9952 19.7576H77.0442L47.4859 49.5316H42L71.5582 19.7576L67.3301 15.5083H84.2233L79.9952 19.7576Z" fill="#A6B5CB"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_13428_2347">
                                        <rect width="76" height="66" transform="translate(42 7)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Testimonial -->
            <!-- Agents -->
            <section class="flat-section">
                <div class="container">
                    <div class="box-title style-3 text-center wow fadeInUp">
                        <div class="text-subtitle text-primary">Our Teams</div>
                        <h3 class="title mt-4">Meet Our Agents</h3>
                    </div>
                    <div class="swiper tf-sw-mobile-1" data-screen="991" data-preview="1" data-space="15">
                        <div class="swiper-wrapper tf-layout-mobile-lg lg-col-2 wow fadeInUp" data-wow-delay=".2s">
                            <div class="swiper-slide">
                                <div class="box-agent style-list hover-img hover-btn-view">
                                    <a href="#" class="box-img img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/agents/agent-1.jpg') }}"  src="{{ URL::asset('/build/images/agents/agent-1.jpg') }}" alt="image-agent">
                                        <ul class="agent-social">
                                            <li><span class="icon icon-facebook"></span></li>
                                            <li><span class="icon icon-x"></span></li>
                                            <li><span class="icon icon-linkedin"></span></li>
                                            <li><span class="icon icon-instargram"></span></li>
                                        </ul>
                                    </a>
                                    <div class="archive-content">
                                        <div class="top">
                                            <h5><a href="#" class="link">Jack Halow</a></h5>
                                            <p class="mt-4 text-variant-1">CEO & Founder</p>
                                        </div>
                                        <ul class="list-info">
                                            <li class="item"><span class="icon icon-phone-line2"></span>1-333-345-6868</li>
                                            <li class="item"><span class="icon icon-mail-line"></span>themesflat@gmail.com</li>
                                            <li class="item"><span class="icon icon-mapPin"></span>2972 Westheimer Rd. Santa Ana, Illinois 85486 </li>
                                        </ul>
                                        <a href="#" class="tf-btn btn-view style-1 primary size-1">View profile <i class="icon icon-arrow-right2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-agent style-list hover-img hover-btn-view">
                                    <a href="#" class="box-img img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/agents/agent-2.jpg') }}"  src="{{ URL::asset('/build/images/agents/agent-2.jpg') }}" alt="image-agent">
                                        <ul class="agent-social">
                                            <li><span class="icon icon-facebook"></span></li>
                                            <li><span class="icon icon-x"></span></li>
                                            <li><span class="icon icon-linkedin"></span></li>
                                            <li><span class="icon icon-instargram"></span></li>
                                        </ul>
                                    </a>
                                    <div class="archive-content">
                                        <div class="top">
                                            <h5><a href="#" class="link">Darrell Steward</a></h5>
                                            <p class="mt-4 text-variant-1">CEO & Founder</p>
                                        </div>
                                        <ul class="list-info">
                                            <li class="item"><span class="icon icon-phone-line2"></span>1-333-345-6868</li>
                                            <li class="item"><span class="icon icon-mail-line"></span>themesflat@gmail.com</li>
                                            <li class="item"><span class="icon icon-mapPin"></span>2972 Westheimer Rd. Santa Ana, Illinois 85486 </li>
                                        </ul>
                                        <a href="#" class="tf-btn btn-view style-1 primary size-1">View profile <i class="icon icon-arrow-right2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-agent style-list hover-img hover-btn-view">
                                    <a href="#" class="box-img img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/agents/agent-3.jpg') }}"  src="{{ URL::asset('/build/images/agents/agent-3.jpg') }}" alt="image-agent">
                                        <ul class="agent-social">
                                            <li><span class="icon icon-facebook"></span></li>
                                            <li><span class="icon icon-x"></span></li>
                                            <li><span class="icon icon-linkedin"></span></li>
                                            <li><span class="icon icon-instargram"></span></li>
                                        </ul>
                                    </a>
                                    <div class="archive-content">
                                        <div class="top">
                                            <h5><a href="#" class="link">Theresa Webb</a></h5>
                                            <p class="mt-4 text-variant-1">CEO & Founder</p>
                                        </div>
                                        <ul class="list-info">
                                            <li class="item"><span class="icon icon-phone-line2"></span>1-333-345-6868</li>
                                            <li class="item"><span class="icon icon-mail-line"></span>themesflat@gmail.com</li>
                                            <li class="item"><span class="icon icon-mapPin"></span>2972 Westheimer Rd. Santa Ana, Illinois 85486 </li>
                                        </ul>
                                        <a href="#" class="tf-btn btn-view style-1 primary size-1">View profile <i class="icon icon-arrow-right2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-agent style-list hover-img hover-btn-view">
                                    <a href="#" class="box-img img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/agents/agent-4.jpg') }}"  src="{{ URL::asset('/build/images/agents/agent-4.jpg') }}" alt="image-agent">
                                        <ul class="agent-social">
                                            <li><span class="icon icon-facebook"></span></li>
                                            <li><span class="icon icon-x"></span></li>
                                            <li><span class="icon icon-linkedin"></span></li>
                                            <li><span class="icon icon-instargram"></span></li>
                                        </ul>
                                    </a>
                                    <div class="archive-content">
                                        <div class="top">
                                            <h5><a href="#" class="link">Marvin McKinney</a></h5>
                                            <p class="mt-4 text-variant-1">CEO & Founder</p>
                                        </div>
                                        <ul class="list-info">
                                            <li class="item"><span class="icon icon-phone-line2"></span>1-333-345-6868</li>
                                            <li class="item"><span class="icon icon-mail-line"></span>themesflat@gmail.com</li>
                                            <li class="item"><span class="icon icon-mapPin"></span>2972 Westheimer Rd. Santa Ana, Illinois 85486 </li>
                                        </ul>
                                        <a href="#" class="tf-btn btn-view style-1 primary size-1">View profile  <i class="icon icon-arrow-right2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination sw-pagination-mb-1 text-center d-lg-none d-block"></div>
                    </div>
                    <p class="mt-30 text-center desc body-2 text-variant-3">Become an agent and get the commission you deserve. <a href="contact.html" class="text-primary"> Contact us</a></p>

                </div>
            </section>
            <!-- End Agents -->
            <!-- Latest new -->
            <section class="flat-section pt-0">
                <div class="container">
                    <div class="box-title text-center wow fadeInUp">
                        <div class="text-subtitle text-primary">Latest New</div>
                        <h3 class="title mt-4">The Most Recent Estate</h3>
                    </div>
                    <div class="swiper tf-sw-location wow fadeInUp" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="15" data-space="15" data-pagination="1" data-pagination-sm="2"  data-pagination-md="3" data-pagination-lg="4" data-wow-delay=".2s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="blog-detail.html" class="flat-blog-item hover-img style-1">
                                    <div class="img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/blog/blog-13.jpg') }}" src="{{ URL::asset('/build/images/blog/blog-13.jpg') }}" alt="img-blog">
                                    </div>
                                    <span class="date-post">January 28, 2024</span>
                                    <div class="content-box">
                                        <h6 class="title">Building gains into housing stocks...</h6>
                                        <div class="post-author">
                                            <span class="fw-6">Jerome Bell</span>
                                            <span>Furniture</span>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog-detail.html" class="flat-blog-item hover-img style-1">
                                    <div class="img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/blog/blog-14.jpg') }}" src="{{ URL::asset('/build/images/blog/blog-14.jpg') }}" alt="img-blog">
                                    </div>
                                    <span class="date-post">January 28, 2024</span>
                                    <div class="content-box">
                                        <h6 class="title">92% of millennial home buyers say inflation...</h6>
                                        <div class="post-author">
                                            <span class="fw-6">Jerome Bell</span>
                                            <span>Furniture</span>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog-detail.html" class="flat-blog-item hover-img style-1">
                                    <div class="img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/blog/blog-15.jpg') }}" src="{{ URL::asset('/build/images/blog/blog-15.jpg') }}" alt="img-blog">
                                    </div>
                                    <span class="date-post">January 28, 2024</span>
                                    <div class="content-box">
                                        <h6 class="title">Building gains into housing stocks and how...</h6>
                                        <div class="post-author">
                                            <span class="fw-6">Jerome Bell</span>
                                            <span>Furniture</span>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog-detail.html" class="flat-blog-item hover-img style-1">
                                    <div class="img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/blog/blog-16.jpg') }}" src="{{ URL::asset('/build/images/blog/blog-16.jpg') }}" alt="img-blog">
                                    </div>
                                    <span class="date-post">January 28, 2024</span>
                                    <div class="content-box">
                                        <h6 class="title">We are hiring moderately, says Compass CEO...</h6>
                                        <div class="post-author">
                                            <span class="fw-6">Jerome Bell</span>
                                            <span>Furniture</span>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="sw-pagination sw-pagination-location text-center"></div>
                    </div>
                </div>
            </section>
            <!-- /Latest new -->
            <!-- Latest New -->
            <section class="flat-section bg-primary-new">
                <div class="container">
                    <div class="box-title text-center wow fadeInUp">
                        <div class="text-subtitle text-primary">Latest New</div>
                        <h3 class="title mt-4">From Our Blog</h3>
                    </div>
                    <div class="swiper tf-sw-latest" data-preview="3" data-tablet="2" data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="15" data-space="15">
                        <div class="swiper-wrapper wow fadeInUp" data-wow-delay=".2s">
                            <div class="swiper-slide">
                                <a href="blog-detail.html" class="flat-blog-item hover-img">
                                    <div class="img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/blog/blog-17.jpg') }}" src="{{ URL::asset('/build/images/blog/blog-17.jpg') }}" alt="img-blog">
                                        <span class="date-post">January 28, 2024</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="post-author">
                                            <span class="fw-6">Jerome Bell</span>
                                            <span>Furniture</span>
                                        </div>
                                        <h5 class="title link">Building gains into housing stocks and how to trade the sector</h5>
                                        <p class="description">The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog-detail.html" class="flat-blog-item hover-img">
                                    <div class="img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/blog/blog-18.jpg') }}" src="{{ URL::asset('/build/images/blog/blog-18.jpg') }}" alt="img-blog">
                                        <span class="date-post">January 28, 2024</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="post-author">
                                            <span class="fw-6">Jerome Bell</span>
                                            <span>Furniture</span>
                                        </div>
                                        <h5 class="title link">Building gains into housing stocks and how to trade the sector</h5>
                                        <p class="description">The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="blog-detail.html" class="flat-blog-item hover-img">
                                    <div class="img-style">
                                        <img class="lazyload" data-src="{{ URL::asset('/build/images/blog/blog-19.jpg') }}" src="{{ URL::asset('/build/images/blog/blog-19.jpg') }}" alt="img-blog">
                                        <span class="date-post">January 28, 2024</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="post-author">
                                            <span class="fw-6">Jerome Bell</span>
                                            <span>Furniture</span>
                                        </div>
                                        <h5 class="title link">Building gains into housing stocks and how to trade the sector</h5>
                                        <p class="description">The average contract interest rate for 30-year fixed-rate mortgages with conforming loan balances...</p>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="sw-pagination sw-pagination-latest text-center"></div>
                    </div>
                </div>
            </section>
            <!-- End Latest New -->




            @include('rentalobj.layout.partials.footer')




        </div>
        <!-- /#page -->
    </div>

    <!-- go top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- popup login -->
    <div class="modal modal-account fade" id="modalLogin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="{{ URL::asset('/build/images/banner/banner-account1.jpg') }}" alt="banner">
                    </div>
                    <form class="form-account">
                        <div class="title-box">
                            <h4>Login</h4>
                            <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="box">
                            <fieldset class="box-fieldset">
                                <label>Account</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="text" class="form-control" placeholder="Your name">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="text" class="form-control" placeholder="Your password">
                                </div>
                                <div class="text-forgot text-end"><a href="#">Forgot password</a></div>

                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <a href="dashboard.html" class="tf-btn primary w-100">Login</a>
                            <div class="text text-center">Don’t you have an account? <a href="#modalRegister" data-bs-toggle="modal" class="text-primary">Register</a></div>
                        </div>
                        <p class="box text-center caption-2">or login with</p>
                        <div class="group-btn">
                            <a href="#" class="btn-social">
                                <img src="{{ URL::asset('/build/images/logo/google.jpg') }}" alt="img">
                                Google
                            </a>
                            <a href="#" class="btn-social">
                                <img src="{{ URL::asset('/build/images/logo/fb.jpg') }}" alt="img">
                                Facebook
                            </a>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- popup register -->
    <div class="modal modal-account fade" id="modalRegister">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="{{ URL::asset('/build/images/banner/banner-account2.jpg') }}" alt="banner">
                    </div>
                    <form class="form-account">
                        <div class="title-box">
                            <h4>Register</h4>
                            <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="box">
                            <fieldset class="box-fieldset">
                                <label>User name</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="text" class="form-control" placeholder="User name">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Email address</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.3125 5.0625V12.9375C16.3125 13.3851 16.1347 13.8143 15.8182 14.1307C15.5018 14.4472 15.0726 14.625 14.625 14.625H3.375C2.92745 14.625 2.49822 14.4472 2.18176 14.1307C1.86529 13.8143 1.6875 13.3851 1.6875 12.9375V5.0625M16.3125 5.0625C16.3125 4.61495 16.1347 4.18573 15.8182 3.86926C15.5018 3.55279 15.0726 3.375 14.625 3.375H3.375C2.92745 3.375 2.49822 3.55279 2.18176 3.86926C1.86529 4.18573 1.6875 4.61495 1.6875 5.0625M16.3125 5.0625V5.24475C16.3125 5.53286 16.2388 5.81618 16.0983 6.06772C15.9578 6.31926 15.7553 6.53065 15.51 6.68175L9.885 10.143C9.61891 10.3069 9.31252 10.3937 9 10.3937C8.68748 10.3937 8.38109 10.3069 8.115 10.143L2.49 6.6825C2.24469 6.5314 2.04215 6.32001 1.90168 6.06847C1.7612 5.81693 1.68747 5.53361 1.6875 5.2455V5.0625" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    <input type="text" class="form-control" placeholder="Email address">
                                </div>

                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="password" class="form-control" placeholder="Your password">
                                </div>
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label>Confirm password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="password" class="form-control" placeholder="Confirm password">
                                </div>
                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <a href="dashboard.html" class="tf-btn primary w-100">Sign Up</a>
                            <div class="text text-center">Don’t you have an account? <a href="#modalLogin" data-bs-toggle="modal" class="text-primary">Sign In</a></div>
                        </div>
                        <p class="box text-center caption-2">or login with</p>
                        <div class="group-btn">
                            <a href="#" class="btn-social">
                                <img src="{{ URL::asset('/build/images/logo/google.jpg') }}" alt="img">
                                Google
                            </a>
                            <a href="#" class="btn-social">
                                <img src="{{ URL::asset('/build/images/logo/fb.jpg') }}" alt="img">
                                Facebook
                            </a>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
