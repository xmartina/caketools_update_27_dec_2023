<?php
    session_start();
    const pageName = 'Home';
    const rootDir = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
    include_once ('includes/generalConfig.php');
    include_once ('includes/core.php');
    include_once (rootDir.'partials/front/header/main.php');
?>
        <section class="tf-slider">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper-container slider-home home1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="tf-slider-item">
                                            <div class="content-inner">
                                                <h1 class="heading">
                                                    Defind, Coll<span>ect</span> and Sell Sup<span>er</span> Rate NFT
                                                    <img src="/assets/images/slider/bg-slider.png" alt="Image">
                                                </h1>
                                                <p class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                                <div class="btn-slider ">
                                                    <a href="explore-banner.html" class="tf-button style-2">Explore now</a>
                                                    <a href="add-NFT.html" class="tf-button style-3">Creat</a>
                                                </div>
                                            </div>
                                            <div class="image">
                                                <div class="img-slider-main ani5"><img src="/assets/images/slider/slider-1.jpg" alt="Image"></div>
                                                <img src="/assets/images/slider/slider-2.png" alt="Image" class="img-slider-2 ani4">
                                                <img src="/assets/images/slider/slider-3.png" alt="Image" class="img-slider-3 ani5">

                                                <div class="current-bid ">
                                                    <div class="title">Current bid</div>
                                                    <div class="price">1.56 wETH</div>
                                                </div>
                                                <div class="card-infor ani5">
                                                    <img src="/assets/images/slider/slider-4.png" alt="Image">
                                                    <div class="inner ">
                                                        <h6 class="name">“The Monkey Sad ”</h6>
                                                        <p class="author">@SolvadorDali</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item-->
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="tf-section tf-category">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tf-heading mb40 wow fadeInUp">
                            <h4 class="heading">All Categories</h4>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeInUp">
                        <div class="swiper-container product-category ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="tf-product-category">
                                            <img src="/assets/images/product-category/product-category-1.jpg" alt="Image">
                                            <div class="category"><a href="#">Digital art</a></div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="tf-product-category">
                                            <img src="/assets/images/product-category/product-category-2.jpg" alt="Image">
                                            <div class="category"><a href="#">Style</a></div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="tf-product-category">
                                            <img src="/assets/images/product-category/product-category-3.jpg" alt="Image">
                                            <div class="category"><a href="#">Music</a></div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="tf-product-category">
                                            <img src="/assets/images/product-category/product-category-4.jpg" alt="Image">
                                            <div class="category"><a href="#">Sport</a></div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="tf-product-category">
                                            <img src="/assets/images/product-category/product-category-1.jpg" alt="Image">
                                            <div class="category"><a href="#">Digital art</a></div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="tf-product-category">
                                            <img src="/assets/images/product-category/product-category-2.jpg" alt="Image">
                                            <div class="category"><a href="#">Style</a></div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                            </div>

                        </div>
                        <div class="swiper-button-next button-product-category-next"></div>
                        <div class="swiper-button-prev button-product-category-prev"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tf-section tf-live-auction visible-sw">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tf-heading mb40 wow fadeInUp">
                            <h4 class="heading">Live Auctions</h4>
                            <a class="button" href="live-auction.html">Explore<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeInUp">
                        <div class="swiper-container live-auction visible">
                            <div class="swiper-wrapper ">
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="sc-product style1">
                                            <div class="top">
                                                <a href="item-details.html" class="tag">Giulia Glur #32</a>
                                                <div class="wish-list">
                                                    <a href="#" class="heart-icon"></a>
                                                </div>
                                            </div>
                                            <div class="features">
                                                <div class="product-media">
                                                    <img src="/assets/images/product/product1.jpg" alt="images">
                                                </div>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="55555" data-labels=" ,  h , m , s "></span>
                                                </div>
                                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                                            </div>
                                            <div class="bottom">
                                                <div class="details-product">
                                                    <div class="author">
                                                        <div class="avatar">
                                                            <img src="/assets/images/author/author1.png" alt="images">
                                                        </div>
                                                        <div class="content">
                                                            <div class="position">Creator</div>
                                                            <div class="name"> <a href="#">Magnus Perry</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="current-bid">
                                                        <div class="subtitle">Current bid</div>
                                                        <div class="price">
                                                            <span class="cash">5 ETH</span><span class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> <span class="icon-btn-product"></span> Place Bid</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="sc-product style1">
                                            <div class="top">
                                                <a href="item-details.html" class="tag">Giulia Glur #32</a>
                                                <div class="wish-list">
                                                    <a href="#" class="heart-icon"></a>
                                                </div>
                                            </div>
                                            <div class="features">
                                                <div class="product-media">
                                                    <img src="/assets/images/product/product27.jpg" alt="images">
                                                </div>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="55555" data-labels=" ,  h , m , s "></span>
                                                </div>
                                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                                            </div>
                                            <div class="bottom">
                                                <div class="details-product">
                                                    <div class="author">
                                                        <div class="avatar">
                                                            <img src="/assets/images/author/author14.png" alt="images">
                                                        </div>
                                                        <div class="content">
                                                            <div class="position">Creator</div>
                                                            <div class="name"> <a href="#">Frederick Dixon</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="current-bid">
                                                        <div class="subtitle">Current bid</div>
                                                        <div class="price">
                                                            <span class="cash">5 ETH</span><span class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> <span class="icon-btn-product"></span> Place Bid</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="sc-product style1">
                                            <div class="top">
                                                <a href="item-details.html" class="tag">Archetype #588</a>
                                                <div class="wish-list">
                                                    <a href="#" class="heart-icon"></a>
                                                </div>
                                            </div>
                                            <div class="features">
                                                <div class="product-media">
                                                    <img src="/assets/images/product/product28.jpg" alt="images">
                                                </div>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="55555" data-labels=" ,  h , m , s "></span>
                                                </div>
                                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                                            </div>
                                            <div class="bottom">
                                                <div class="details-product">
                                                    <div class="author">
                                                        <div class="avatar">
                                                            <img src="/assets/images/author/author15.png" alt="images">
                                                        </div>
                                                        <div class="content">
                                                            <div class="position">Creator</div>
                                                            <div class="name"> <a href="#">Theo Watts</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="current-bid">
                                                        <div class="subtitle">Current bid</div>
                                                        <div class="price">
                                                            <span class="cash">5 ETH</span><span class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> <span class="icon-btn-product"></span> Place Bid</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="sc-product style1">
                                            <div class="top">
                                                <a href="item-details.html" class="tag">3DPunks #070</a>
                                                <div class="wish-list">
                                                    <a href="#" class="heart-icon"></a>
                                                </div>
                                            </div>
                                            <div class="features">
                                                <div class="product-media">
                                                    <img src="/assets/images/product/product29.jpg" alt="images">
                                                </div>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="55555" data-labels=" ,  h , m , s "></span>
                                                </div>
                                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                                            </div>
                                            <div class="bottom">
                                                <div class="details-product">
                                                    <div class="author">
                                                        <div class="avatar">
                                                            <img src="/assets/images/author/author16.png" alt="images">
                                                        </div>
                                                        <div class="content">
                                                            <div class="position">Creator</div>
                                                            <div class="name"> <a href="#">Neville Gutierrez</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="current-bid">
                                                        <div class="subtitle">Current bid</div>
                                                        <div class="price">
                                                            <span class="cash">5 ETH</span><span class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> <span class="icon-btn-product"></span> Place Bid</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="sc-product style1">
                                            <div class="top">
                                                <a href="item-details.html" class="tag">Angelic Nyan Cat</a>
                                                <div class="wish-list">
                                                    <a href="#" class="heart-icon"></a>
                                                </div>
                                            </div>
                                            <div class="features">
                                                <div class="product-media">
                                                    <img src="/assets/images/product/product31.jpg" alt="images">
                                                </div>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="55555" data-labels=" ,  h , m , s "></span>
                                                </div>
                                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                                            </div>
                                            <div class="bottom">
                                                <div class="details-product">
                                                    <div class="author">
                                                        <div class="avatar">
                                                            <img src="/assets/images/author/author17.png" alt="images">
                                                        </div>
                                                        <div class="content">
                                                            <div class="position">Creator</div>
                                                            <div class="name"> <a href="#">Frederick Dixon</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="current-bid">
                                                        <div class="subtitle">Current bid</div>
                                                        <div class="price">
                                                            <span class="cash">5 ETH</span><span class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> <span class="icon-btn-product"></span> Place Bid</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="sc-product style1">
                                            <div class="top">
                                                <a href="item-details.html" class="tag">Sweet Baby #1</a>
                                                <div class="wish-list">
                                                    <a href="#" class="heart-icon"></a>
                                                </div>
                                            </div>
                                            <div class="features">
                                                <div class="product-media">
                                                    <img src="/assets/images/product/product30.jpg" alt="images">
                                                </div>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="55555" data-labels=" ,  h , m , s "></span>
                                                </div>
                                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                                            </div>
                                            <div class="bottom">
                                                <div class="details-product">
                                                    <div class="author">
                                                        <div class="avatar">
                                                            <img src="/assets/images/author/author1.png" alt="images">
                                                        </div>
                                                        <div class="content">
                                                            <div class="position">Creator</div>
                                                            <div class="name"> <a href="#">Stephan Neal</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="current-bid">
                                                        <div class="subtitle">Current bid</div>
                                                        <div class="price">
                                                            <span class="cash">5 ETH</span><span class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> <span class="icon-btn-product"></span> Place Bid</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- item-->
                                </div>

                            </div>

                        </div>
                        <div class="swiper-pagination swiper-pagination-live-auction"></div>
                        <div class="swiper-button-next button-live-auction-next"></div>
                        <div class="swiper-button-prev button-live-auction-prev"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tf-section tf-create-and-sell">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tf-heading style-2 mb40 wow fadeInUp">
                            <h4 class="heading">Create And Sell NFTs</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tf-create wow fadeInUp"  data-wow-delay="0.2s">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-create-1.svg" alt="Image">
                            </div>
                            <h6 class="title"><a href="#"> Set up your wallet</a></h6>
                            <p class="content">Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit Voluptatem Accusantium Doloremque</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tf-create wow fadeInUp"  data-wow-delay="0.4s">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-create-2.svg" alt="Image">
                            </div>
                            <h6 class="title"><a href="#">Create Your collection</a> </h6>
                            <p class="content">Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit Voluptatem Accusantium Doloremque</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tf-create wow fadeInUp"  data-wow-delay="0.6s">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-create-3.svg" alt="Image">
                            </div>
                            <h6 class="title"><a href="#">Add Your NFTs</a> </h6>
                            <p class="content">Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit Voluptatem Accusantium Doloremque</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tf-create wow fadeInUp"  data-wow-delay="0.8s">
                            <div class="icon">
                                <img src="/assets/images/svg/icon-create-4.svg" alt="Image">
                            </div>
                            <h6 class="title"><a href="#"> List them for sale</a></h6>
                            <p class="content">Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit Voluptatem Accusantium Doloremque</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tf-section tf-hot-pick tf-filter">
            <div class="tf-container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="tf-heading mb23 wow fadeInUp">
                            <h4 class="heading">Hot Picks</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="top-menu wow fadeInUp">
                            <ul class="filter-menu">
                                <li class="active"><a href="#" data-filter=".3d">3D MODEL</a></li>
                                <li><a href="#" data-filter=".anime">ANIME/MANGA</a></li>
                                <li><a href="#" data-filter=".cyber">CYBER PUNK</a></li>
                                <li><a href="#" data-filter=".pixel">PIXEL ART </a></li>
                                <li><a href="#" data-filter=".music">MUSIC </a></li>
                                <li><a href="#" data-filter=".abstract">ABSTRACT </a></li>
                                <li><a href="#" data-filter=".2d">2D ARTS </a></li>
                            </ul>
                            <div id="item_category" class="dropdown">
                                <a href="#" class="btn-selector nolink ">Recently Create</a>
                                <ul >
                                    <li><span>Recently Listed</span></li>
                                    <li class="active"><span>Recently Created</span></li>
                                    <li><span>Recently Sold</span></li>
                                    <li><span>Recently Received</span></li>
                                    <li><span>Recently Soon</span></li>
                                    <li><span>Recently Low to Hight</span></li>
                                    <li><span>Recently Last Sale</span></li>
                                    <li><span>Oldest</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tf-filter-container wow fadeInUp">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d cyber">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Avidlines #14843</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author1.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Frank Stevens</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product2.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d pixel">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Archetype #597</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author14.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Buck Morrison</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product32.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d music">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Chimera #977</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author15.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Henrietta Collins</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product33.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d 2d">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Sweet Baby #1</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author16.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Samantha Keller</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product34.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d anime">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Cool Cat 3D #2538</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author17.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Theodore Woods</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product35.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d abstract">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Doodle #9972</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author18.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Lionel Romero</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product36.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d abstract">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Slow Mo #127</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author19.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Bryant Carpenter</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product37.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d 2d">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Kick Shock #1</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author20.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Bailey Quinn</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product38.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore anime 3d">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Night ines #1243</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author21.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Roy Marshman</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product39.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore cyber 3d">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Archetype #597</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author22.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Polly Graves</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product40.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore pixel 3d">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Militaire Elec #527</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author23.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Kenneth Bailey</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product41.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore music 3d">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="item-details.html" class="tag">Sweet Baby #1</a>
                                <div class="wish-list">
                                    <a href="#" class="heart-icon"></a>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="/assets/images/author/author24.png" alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">Sophia Sandoval</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product42.jpg" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
                                <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
                            </div>
                            <div class="bottom-style2">
                                <div class="price">
                                    <div class="icon"><img src="/assets/images/icon/ethe.svg" alt="images"></div>
                                    <div class="content">
                                        <div class="name">ETH</div>
                                        <div class="cash">4.53</div>
                                    </div>
                                </div>
                                <div class="product-button">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="col-md-12">
                    <div class="btn-loadmore mt17 wow fadeInUp">
                        <a href="explore-grid.html" class="tf-button loadmore style-4">Load more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="tf-section tf-collection">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tf-heading mb30 wow fadeInUp">
                            <h4 class="heading">Popular Collection</h4>
                            <a class="button style-2" href="collection.html">Explore<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="collection-carousel wow fadeInUp">
                            <div class="swiper-container product-category-1 pt10">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product style1 collection">
                                                <a href="#">
                                                    <div class="thumb-collection">
                                                        <div class="left-thumb">
                                                            <img src="/assets/images/collection/collection1.jpg" alt="images">
                                                        </div>
                                                        <div class="right-thumb">
                                                            <div class="top-cl">
                                                                <img src="/assets/images/collection/collection2.jpg" alt="images">
                                                            </div>
                                                            <div class="bottom-cl">
                                                                <img src="/assets/images/collection/collection3.jpg" alt="images">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="tf-author">
                                                    <div class="image">
                                                        <img src="/assets/images/author/author-cl.png" alt="Image">
                                                        <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="name">Moonbirds</a>
                                                    </div>
                                                    <div class="details-item">26 Items</div>
                                                </div>
                                                <div class="top">
                                                    <div class="content">
                                                        <div class="details"><span><img src="/assets/images/icon/ethe.svg" alt="images"></span> <a href="#">33.2 wETH</a> </div>
                                                        <div class="price">$ 92,025</div>
                                                    </div>
                                                    <div class="wish-list">
                                                        <a href="#" class="heart-icon"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product style1 collection">
                                                <a href="#">
                                                    <div class="thumb-collection">
                                                        <div class="left-thumb">
                                                            <img src="/assets/images/collection/collection4.jpg" alt="images">
                                                        </div>
                                                        <div class="right-thumb">
                                                            <div class="top-cl">
                                                                <img src="/assets/images/collection/collection5.jpg" alt="images">
                                                            </div>
                                                            <div class="bottom-cl">
                                                                <img src="/assets/images/collection/collection6.jpg" alt="images">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="tf-author">
                                                    <div class="image">
                                                        <img src="/assets/images/author/author-cl.png" alt="Image">
                                                        <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="name">Cassandra</a>
                                                    </div>
                                                    <div class="details-item">26 Items</div>
                                                </div>
                                                <div class="top">
                                                    <div class="content">
                                                        <div class="details"><span><img src="/assets/images/icon/ethe.svg" alt="images"></span> <a href="#">33.2 wETH</a> </div>
                                                        <div class="price">$ 92,025</div>
                                                    </div>
                                                    <div class="wish-list">
                                                        <a href="#" class="heart-icon"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product style1 collection">
                                                <a href="#">
                                                    <div class="thumb-collection">
                                                        <div class="left-thumb">
                                                            <img src="/assets/images/collection/collection7.jpg" alt="images">
                                                        </div>
                                                        <div class="right-thumb">
                                                            <div class="top-cl">
                                                                <img src="/assets/images/collection/collection8.jpg" alt="images">
                                                            </div>
                                                            <div class="bottom-cl">
                                                                <img src="/assets/images/collection/collection9.jpg" alt="images">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="tf-author">
                                                    <div class="image">
                                                        <img src="/assets/images/author/author-cl.png" alt="Image">
                                                        <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="name">Quinn Herrera</a>
                                                    </div>
                                                    <div class="details-item">26 Items</div>
                                                </div>
                                                <div class="top">
                                                    <div class="content">
                                                        <div class="details"><span><img src="/assets/images/icon/ethe.svg" alt="images"></span> <a href="#">33.2 wETH</a> </div>
                                                        <div class="price">$ 92,025</div>
                                                    </div>
                                                    <div class="wish-list">
                                                        <a href="#" class="heart-icon"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product style1 collection">
                                                <a href="#">
                                                    <div class="thumb-collection">
                                                        <div class="left-thumb">
                                                            <img src="/assets/images/collection/collection10.jpg" alt="images">
                                                        </div>
                                                        <div class="right-thumb">
                                                            <div class="top-cl">
                                                                <img src="/assets/images/collection/collection11.jpg" alt="images">
                                                            </div>
                                                            <div class="bottom-cl">
                                                                <img src="/assets/images/collection/collection12.jpg" alt="images">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="tf-author">
                                                    <div class="image">
                                                        <img src="/assets/images/author/author-cl.png" alt="Image">
                                                        <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="name">Humbert Watts</a>
                                                    </div>
                                                    <div class="details-item">26 Items</div>
                                                </div>
                                                <div class="top">
                                                    <div class="content">
                                                        <div class="details"><span><img src="/assets/images/icon/ethe.svg" alt="images"></span> <a href="#">33.2 wETH</a> </div>
                                                        <div class="price">$ 92,025</div>
                                                    </div>
                                                    <div class="wish-list">
                                                        <a href="#" class="heart-icon"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product style1 collection">
                                                <a href="#">
                                                    <div class="thumb-collection">
                                                        <div class="left-thumb">
                                                            <img src="/assets/images/collection/collection1.jpg" alt="images">
                                                        </div>
                                                        <div class="right-thumb">
                                                            <div class="top-cl">
                                                                <img src="/assets/images/collection/collection2.jpg" alt="images">
                                                            </div>
                                                            <div class="bottom-cl">
                                                                <img src="/assets/images/collection/collection3.jpg" alt="images">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="tf-author">
                                                    <div class="image">
                                                        <img src="/assets/images/author/author-cl.png" alt="Image">
                                                        <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="name">Moonbirds</a>
                                                    </div>
                                                    <div class="details-item">26 Items</div>
                                                </div>
                                                <div class="top">
                                                    <div class="content">
                                                        <div class="details"><span><img src="/assets/images/icon/ethe.svg" alt="images"></span> <a href="#">33.2 wETH</a> </div>
                                                        <div class="price">$ 92,025</div>
                                                    </div>
                                                    <div class="wish-list">
                                                        <a href="#" class="heart-icon"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product style1 collection">
                                                <a href="#">
                                                    <div class="thumb-collection">
                                                        <div class="left-thumb">
                                                            <img src="/assets/images/collection/collection10.jpg" alt="images">
                                                        </div>
                                                        <div class="right-thumb">
                                                            <div class="top-cl">
                                                                <img src="/assets/images/collection/collection11.jpg" alt="images">
                                                            </div>
                                                            <div class="bottom-cl">
                                                                <img src="/assets/images/collection/collection12.jpg" alt="images">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="tf-author">
                                                    <div class="image">
                                                        <img src="/assets/images/author/author-cl.png" alt="Image">
                                                        <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                                        </svg>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="name">Humbert Watts</a>
                                                    </div>
                                                    <div class="details-item">26 Items</div>
                                                </div>
                                                <div class="top">
                                                    <div class="content">
                                                        <div class="details"><span><img src="/assets/images/icon/ethe.svg" alt="images"></span> <a href="#">33.2 wETH</a> </div>
                                                        <div class="price">$ 92,025</div>
                                                    </div>
                                                    <div class="wish-list">
                                                        <a href="#" class="heart-icon"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tf-section tf-top-seller wow fadeInUp">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tf-heading mb40 ">
                            <h4 class="heading">Top Seller</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author2.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Roxanne Wallaker</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author3.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Winifred Clem</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author13.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Angelica Sherman</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author4.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Hayden Yates</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author5.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Rowena Tillery</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author6.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Roderick Norman</a>
                                    <span class="icon active"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author7.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Virginia Richards</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author8.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Barbara Moore</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author9.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Virginia Richards</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author10.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Colin Fennimore</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#10</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author11.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Ebenezer Anderson</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#11</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tf-author">
                            <div class="image">
                                <img src="/assets/images/author/author12.png" alt="Image">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-svg" fill-rule="evenodd" clip-rule="evenodd" d="M4.94987 0.242313C5.88929 -0.127324 6.99031 0.916511 7.99984 0.916511C9.00936 0.916511 10.1104 -0.127329 11.0498 0.242306C11.1437 0.27926 11.2368 0.317871 11.329 0.358101C12.2539 0.761615 12.295 2.27725 13.0085 2.9908C13.7221 3.70438 15.2378 3.74531 15.6414 4.67026C15.6817 4.76261 15.7204 4.85583 15.7574 4.94989C16.127 5.8893 15.0832 6.99032 15.0832 7.99984C15.0832 9.00937 16.127 10.1104 15.7574 11.0498C15.7205 11.1436 15.6819 11.2366 15.6417 11.3287C15.2382 12.2538 13.7222 12.2947 13.0085 13.0083C12.2949 13.722 12.254 15.2381 11.3289 15.6416C11.2368 15.6818 11.1437 15.7204 11.0498 15.7574C10.1104 16.127 9.00938 15.0832 7.99986 15.0832C6.99033 15.0832 5.88932 16.127 4.9499 15.7574C4.85599 15.7204 4.76292 15.6818 4.67071 15.6416C3.7457 15.2381 3.70478 13.7221 2.99117 13.0085C2.27755 12.2949 0.761626 12.254 0.358081 11.329C0.317858 11.2368 0.279254 11.1437 0.242306 11.0498C-0.127328 10.1104 0.916511 9.00936 0.916511 7.99984C0.916511 6.99032 -0.127325 5.8893 0.242311 4.94988C0.279288 4.8559 0.317923 4.76276 0.35818 4.67049C0.761743 3.74551 2.27757 3.70458 2.99117 2.99098C3.70475 2.2774 3.74573 0.76162 4.6707 0.358091C4.7629 0.317867 4.85597 0.279262 4.94987 0.242313Z" fill="#48BC65"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0095 5.6464C12.11 5.74017 12.1665 5.86733 12.1665 5.99991C12.1665 6.1325 12.11 6.25966 12.0095 6.35343L7.71997 10.3536C7.61942 10.4473 7.48306 10.5 7.34088 10.5C7.1987 10.5 7.06234 10.4473 6.96179 10.3536L4.81702 8.35351C4.71935 8.25921 4.6653 8.1329 4.66652 8.0018C4.66775 7.8707 4.72414 7.74528 4.82355 7.65258C4.92297 7.55987 5.05745 7.50728 5.19804 7.50614C5.33863 7.505 5.47407 7.5554 5.5752 7.64648L7.34088 9.29305L11.2513 5.6464C11.3519 5.55266 11.4882 5.5 11.6304 5.5C11.7726 5.5 11.909 5.55266 12.0095 5.6464Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="#">Simona Davidson</a>
                                    <span class="icon"><i class="far fa-plus"></i></span>
                                </div>
                                <div class="price">
                                    <span class="price-eth">1.56 wETH</span>
                                    <span>#12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tf-section tf-explore tf-filter">
            <div class="tf-container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="tf-heading style-2 wow fadeInUp">
                            <h4 class="heading">Explore</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="filter-menu style-2 wow fadeInUp">
                            <li class="active"><a href="#" data-filter=".3d">3D MODEL</a></li>
                            <li><a href="#" data-filter=".anime">ANIME/MANGA</a></li>
                            <li><a href="#" data-filter=".cyber">CYBER PUNK</a></li>
                            <li><a href="#" data-filter=".pixel">PIXEL ART </a></li>
                            <li><a href="#" data-filter=".music">MUSIC </a></li>
                            <li><a href="#" data-filter=".abstract">ABSTRACT </a></li>
                            <li><a href="#" data-filter=".2d">2D ARTS </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row tf-filter-container wow fadeInUp">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d cyber">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product3.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“The Monkey sad ”</a> </div>
                                    <div class="creator"> <a href="#">@SolvadorDali</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d pixel">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product44.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“Phyllis Lowe”</a> </div>
                                    <div class="creator"> <a href="#">@Samson Hartley</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d music">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product45.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“Camille Rogers”</a> </div>
                                    <div class="creator"> <a href="#">@SolvadorDali</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d 2d">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product46.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“Skye Carter”</a> </div>
                                    <div class="creator"> <a href="#">@Russell Loxley</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d abstract">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product48.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“Valentine Romero”</a> </div>
                                    <div class="creator"> <a href="#">@IrisHayward</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d abstract">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product49.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“Julia Tomlinson”</a> </div>
                                    <div class="creator"> <a href="#">@ZoePeay</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d anime">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product50.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“Herbert Nunez”</a> </div>
                                    <div class="creator"> <a href="#">@JuliaTomlinson</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d anime">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product47.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“Herbert Little”</a> </div>
                                    <div class="creator"> <a href="#">@Sidney Hall</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore anime ">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product3.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“The Monkey sad ”</a> </div>
                                    <div class="creator"> <a href="#">@SolvadorDali</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore cyber ">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product45.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“The Monkey sad ”</a> </div>
                                    <div class="creator"> <a href="#">@SolvadorDali</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore pixel ">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product47.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“The Monkey sad ”</a> </div>
                                    <div class="creator"> <a href="#">@SolvadorDali</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore music ">
                        <div class="sc-product style3">
                            <div class="features">
                                <div class="product-media">
                                    <img src="/assets/images/product/product49.jpg" alt="images">
                                </div>
                            </div>
                            <div class="content">
                                <div class="details-product">
                                    <div class="title"> <a href="item-details.html">“The Monkey sad ”</a> </div>
                                    <div class="creator"> <a href="#">@SolvadorDali</a> </div>
                                </div>
                                <div class="price">
                                    <div class="subtitle">Current bid</div>
                                    <div class="cash">1.56wETH</div>
                                </div>
                                <div class="profile-author">
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Jordan" tabindex="0"><img src="/assets/images/author/authorpd14.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Daniel Rose" tabindex="0"><img src="/assets/images/author/authorpd15.png" alt="images"></a>
                                    <a href="#" class="avatar" data-tooltip="Creator: Solvador" tabindex="0"><img src="/assets/images/author/authorpd16.png" alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="btn-loadmore mt8 wow fadeInUp">
                        <a href="explore-grid.html" class="tf-button loadmore style-4">Load more</a>
                    </div>
                </div>
            </div>
        </section>

<?php include_once (rootDir.'partials/front/footer/main.php');?>