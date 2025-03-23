<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closca Bottle Shop</title>
    <!-- External Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- For Bootstrap, just use one version -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- For Swiper, just use one version -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js"></script>
    <link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="./css/light-dark.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href=""/>
    
</head>
<body>
    <div class="video-bg">
        <video width="320" height="240" autoplay loop muted>
        <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
        </video>
    </div>
    <main class="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top header">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="https://cdn.shopify.com/s/files/1/0689/1443/files/CLOSCA-LOGO-WEB-BLACK_130x@2x.png?v=1559116993" alt="Closca Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bottles">Bottles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mask</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Helmet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>
                    </ul>
                    
                    <div class="user-icons d-flex align-items-center">
                        <div class="dark-light flex-grow-1 text-center">
                            <svg class="moon" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon-size">
                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                            </svg>
                            <svg class="sun" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon-size" style="display: none;">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </div>
                        <div class="nav-item flex-grow-1 text-center">
                            <a class="nav-link" role="button" href="#">
                                <i class="fas fa-shopping-cart icon-size"></i>
                            </a>
                        </div>
                        <div class="nav-item dropdown flex-grow-1 text-center">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user icon-size"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="">
            <!-- Hero Carousel -->
            <section class="hero-carousel">
                <div class="mySwiper">
                    <div class="main-wrapper swiper-wrapper">
                        <div class="main swiper-slide" id="beach">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <h3 class="main-header">Closca Bottle</h3>
                                    <h1 class="main-title">Beach</h1>
                                    <h2 class="main-subtitle">₱ 39.90</h2>
                                </div>
                                <div class="main-content">
                                    <div class="main-content__title">In 20 years, there could be more plastic in our oceans than fish.</div>
                                    <div class="main-content__subtitle">Plastic pollution injures more than 100.000 marine animals every year.It takes around 450 years for one plastic bottle to decompose.</div>
                                    <div class="more-menu">
                                        Shop Now
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="-5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="https://images.unsplash.com/photo-1505118380757-91f5f5632de0?q=80&w=2902&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                    <img class="bottle-img" src="https://www.designforfinland.com/product-images/Closca_Bottle_Wave_Antarctica_450ml_Close.png/2083089000004207012/1100x1100" />
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide" id="savanna">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <h3 class="main-header">Closca Bottle</h3>
                                    <h1 class="main-title">Savanna</h1>
                                    <h2 class="main-subtitle">₱ 39.90</h2>
                                </div>
                                <div class="main-content">
                                    <div class="main-content__title">The Earth’s area affected by desertification is approx 11 times India’s size.
                                    </div>
                                    <div class="main-content__subtitle">The Savannas act as a carbon sink, absorbing CO2 from the atmosphere and helping to maintain the balance of global temperatures.</div>
                                    <div class="more-menu">
                                        Shop Now
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="-5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="https://images.unsplash.com/photo-1613109526778-27605f1f27d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80" alt="">
                                    <img class="bottle-img" src="https://fnac.sa/cdn/shop/files/Closca_Bottle_Wave_Sahara_600ml_Close.png?v=1703675684" />
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide" id="glacier">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <h3 class="main-header">Closca Bottle</h3>
                                    <h1 class="main-title">Glacier</h1>
                                    <h2 class="main-subtitle">₱ 39.90</h2>
                                </div>
                                <div class="main-content">
                                    <div class="main-content__title">Glaciers contain 75% of the World's freshwater.
                                    </div>
                                    <div class="main-content__subtitle">The effects of melting ice glaciers are biodiversity loss, the rising of the sea level and the deficiency of freshwater, among others.</div>
                                    <div class="more-menu">
                                        Shop Now
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="-5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="https://www.ecocamp.travel/hubfs/Imported_Blog_Media/26224159841_b1f88b101d_k-1024x683.jpg" alt="">
                                    <img class="bottle-img" src="https://gomagcdn.ro/domains/alty.ro/files/product/original/sticla-reutilizabila-apa-closca-glacier-copie-848-7049.png" />
                                </div>
                            </div>
                        </div>
                        <div class="main swiper-slide" id="coral">
                            <div class="left-side">
                                <div class="main-wrapper">
                                    <h3 class="main-header">Closca Bottle</h3>
                                    <h1 class="main-title">Coral</h1>
                                    <h2 class="main-subtitle">₱ 39.90</h2>
                                </div>
                                <div class="main-content">
                                    <div class="main-content__title">We will have lost 60% of our coral reefs by 2030.
                                    </div>
                                    <div class="main-content__subtitle">Coral reefs are essential to humans, as they protect the shorelines and are a source of
                                        nutrients and habitat for thousands of marine species.</div>
                                    <div class="more-menu">
                                        Shop Now
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="-5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <div class="right-side__img">
                                    <img class="bottle-bg" src="https://images.unsplash.com/photo-1546500840-ae38253aba9b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3260&q=80" alt="">
                                    <img class="bottle-img" src="https://fnac.sa/cdn/shop/files/Closca_Bottle_Wave_Arizona_600ml_Close.png?v=1703675684&width=1946" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-wrapper">
                    <div class="swiper-button swiper-prev-button">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                    <div class="swiper-button swiper-next-button">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </section>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                </div>
            </div>

            <!-- Product Catalog -->
            <section class="catalog-section" id="bottles">
                <div class="container px-4">
                    <h2 class="section-title">Our Collection</h2>
                    <div class="row px-4">
                        <!-- Product 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="https://www.designforfinland.com/product-images/Closca_Bottle_Wave_Antarctica_450ml_Close.png/2083089000004207012/1100x1100" class="card-img-top" alt="Closca Bottle Beach">
                                <div class="card-body">
                                    <h5 class="card-title">Closca Bottle Beach</h5>
                                    <p class="card-text">Collapsible design, eco-friendly water bottle.</p>
                                    <p class="card-text price">₱ 39.90</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="https://fnac.sa/cdn/shop/files/Closca_Bottle_Wave_Sahara_600ml_Close.png?v=1703675684" class="card-img-top" alt="Closca Bottle Savanna">
                                <div class="card-body">
                                    <h5 class="card-title">Closca Bottle Savanna</h5>
                                    <p class="card-text">Collapsible design, eco-friendly water bottle.</p>
                                    <p class="card-text price">₱ 39.90</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="https://gomagcdn.ro/domains/alty.ro/files/product/original/sticla-reutilizabila-apa-closca-glacier-copie-848-7049.png" class="card-img-top" alt="Closca Bottle Glacier">
                                <div class="card-body">
                                    <h5 class="card-title">Closca Bottle Glacier</h5>
                                    <p class="card-text">Collapsible design, eco-friendly water bottle.</p>
                                    <p class="card-text price">₱ 39.90</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="https://fnac.sa/cdn/shop/files/Closca_Bottle_Wave_Arizona_600ml_Close.png?v=1703675684&width=1946" class="card-img-top" alt="Closca Bottle Coral">
                                <div class="card-body">
                                    <h5 class="card-title">Closca Bottle Coral</h5>
                                    <p class="card-text">Collapsible design, eco-friendly water bottle.</p>
                                    <p class="card-text price">₱ 39.90</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Second row of products -->
                    <div class="row px-4 mt-4">
                        <!-- Product 5 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="https://www.designforfinland.com/product-images/Closca_Bottle_Wave_Antarctica_450ml_Close.png/2083089000004207012/1100x1100" class="card-img-top" alt="Closca Bottle Beach XL">
                                <div class="card-body">
                                    <h5 class="card-title">Closca Bottle Beach XL</h5>
                                    <p class="card-text">Large 600ml capacity, perfect for longer trips.</p>
                                    <p class="card-text price">₱ 44.90</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="https://fnac.sa/cdn/shop/files/Closca_Bottle_Wave_Sahara_600ml_Close.png?v=1703675684" class="card-img-top" alt="Closca Bottle Savanna XL">
                                <div class="card-body">
                                    <h5 class="card-title">Closca Bottle Savanna XL</h5>
                                    <p class="card-text">Large 600ml capacity, perfect for longer trips.</p>
                                    <p class="card-text price">₱ 44.90</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product 7 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="https://gomagcdn.ro/domains/alty.ro/files/product/original/sticla-reutilizabila-apa-closca-glacier-copie-848-7049.png" class="card-img-top" alt="Closca Bottle Glacier XL">
                                <div class="card-body">
                                    <h5 class="card-title">Closca Bottle Glacier XL</h5>
                                    <p class="card-text">Large 600ml capacity, perfect for longer trips.</p>
                                    <p class="card-text price">₱ 44.90</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product 8 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card product-card">
                                <img src="https://fnac.sa/cdn/shop/files/Closca_Bottle_Wave_Arizona_600ml_Close.png?v=1703675684&width=1946" class="card-img-top" alt="Closca Bottle Coral XL">
                                <div class="card-body">
                                    <h5 class="card-title">Closca Bottle Coral XL</h5>
                                    <p class="card-text">Large 600ml capacity, perfect for longer trips.</p>
                                    <p class="card-text price">₱ 44.90</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Frequently Asked Questions -->
            <section>
                <div class="container row gy-5 px-5 self-center">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What payment methods do you accept?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>We accept all major credit cards (Visa, Mastercard, American Express, Discover), PayPal, and Apple Pay. For enterprise customers, we also offer invoicing options. Contact our sales team for more information.</strong>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How do I reset my password?
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>To reset your password, click the "Forgot Password" link on the login page. Enter your email address, and we'll send you a password reset link. Follow the instructions in the email to create a new password. For security reasons, the link expires after 24 hours.</strong>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Do you offer customer support?
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Yes, we provide customer support via email, live chat, and phone. Our support team is available Monday through Friday from 9 AM to 6 PM EST. Premium plan subscribers receive priority support and extended hours, including weekend assistance.</strong>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Is my data secure?
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>We take data security very seriously. All data is encrypted both in transit and at rest using industry-standard protocols. We implement strict access controls, regular security audits, and comply with GDPR, CCPA, and other relevant privacy regulations. For more details, please review our Privacy Policy.</strong>
                        </div>
                        </div>
                    </div>
                </div>

            </section>

            
        </div>
        <!-- Footer Section -->
        <footer class="eco-footer">
            <div class="footer-container">
                <!-- Top Section with Newsletter -->
                <div class="footer-top">
                    <div class="footer-newsletter">
                        <h3 class="footer-title">Join Our Movement</h3>
                        <p class="footer-subtitle">Subscribe to learn about our latest eco-initiatives and exclusive offers.</p>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Your email address" required>
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="privacy-note">By subscribing, you agree to our <a href="#">Privacy Policy</a>.</p>
                    </div>
                    
                    <div class="footer-impact">
                        <h3 class="footer-title">Our Impact</h3>
                        <div class="impact-stats">
                            <div class="impact-item">
                                <span class="impact-number">250K+</span>
                                <span class="impact-text">Plastic Bottles Saved</span>
                            </div>
                            <div class="impact-item">
                                <span class="impact-number">₱ 50K</span>
                                <span class="impact-text">Donated to Conservation</span>
                            </div>
                            <div class="impact-item">
                                <span class="impact-number">15+</span>
                                <span class="impact-text">Conservation Partners</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Main Footer Navigation -->
                <div class="footer-nav">
                    <div class="footer-column">
                        <h4 class="footer-column-title">Shop</h4>
                        <ul class="footer-links">
                            <li><a href="#">Bottles</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Gift Sets</a></li>
                            <li><a href="#">Limited Editions</a></li>
                            <li><a href="#">Corporate Gifts</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h4 class="footer-column-title">About Us</h4>
                        <ul class="footer-links">
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Materials</a></li>
                            <li><a href="#">Design Process</a></li>
                            <li><a href="#">Certifications</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h4 class="footer-column-title">Support</h4>
                        <ul class="footer-links">
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="#">Care Instructions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Track Order</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h4 class="footer-column-title">Environmental Projects</h4>
                        <ul class="footer-links">
                            <li><a href="#">Beach Cleanup</a></li>
                            <li><a href="#">Coral Restoration</a></li>
                            <li><a href="#">Glacier Conservation</a></li>
                            <li><a href="#">Savanna Protection</a></li>
                            <li><a href="#">Partner With Us</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Bottom Footer with Social and Legal -->
                <div class="footer-bottom">
                    <div class="footer-social">
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                        <a href="#" aria-label="YouTube">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                        </a>
                        <a href="#" aria-label="Pinterest">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 12h4"></path><path d="M12 16V8"></path><circle cx="12" cy="12" r="10"></circle></svg>
                        </a>
                    </div>
                    
                    <div class="footer-payment">
                        <i class="fa-brands fa-cc-visa fs-4"></i>
                        <i class="fa-brands fa-cc-mastercard fs-4"></i>
                        <i class="fa-brands fa-cc-paypal fs-4"></i>
                        <img src="https://i.pinimg.com/736x/32/99/1d/32991d57f8466447865d7da039621694.jpg" class="rounded" alt="GCASH">
                    </div>


                    <div class="footer-legal">
                        <p class="copyright">© 2025 Closca. All Rights Reserved.</p>
                        <div class="legal-links">
                            <a href="#">Terms & Conditions</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Shipping Policy</a>
                            <a href="#">Cookies Settings</a>
                        </div>
                    </div>
                    
                    <div class="footer-eco-badge">
                        <div class="eco-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <div class="eco-text">
                                <span>Climate Positive</span>
                                <span>Certified B Corp</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Environmental Message Banner -->
            <div class="eco-banner">
                <div class="eco-banner-content">
                    <p>Every purchase plants a tree. Join our mission to protect the planet's ecosystems.</p>
                    <a href="#" class="eco-banner-link">Learn More</a>
                </div>
            </div>
        </footer>
    </main>

    <!-- Add Font Awesome for social icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="./js/carousel.js"></script>
    <script src="./js/light-dark.js"></script>

    <!-- Add a simple footer animation script -->
    <script src="./js/impact.js"> </script>


</body>