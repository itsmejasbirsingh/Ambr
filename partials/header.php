<?php require('utils/connections.php'); 
require('utils/functions.php');

?>
<!doctype html>
<html class="no-js home-2" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Ambr Homes</title>
   <meta name="author" content="Jasbir Singh">
   <meta name="description" content="Ambr - Real Estate Website">
   <meta name="keywords" content="Construction website">
   <meta name="robots" content="INDEX,FOLLOW">
   <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
   <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon.png">
   <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicon.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon.png">
   <link rel="manifest" href="assets/img/favicons/manifest.json">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
   <meta name="theme-color" content="#ffffff">
   <link rel="preconnect" href="https://fonts.googleapis.com/">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/app.min.css">
   <link rel="stylesheet" href="assets/css/fontawesome.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="home-2">
   <div class="preloader">
      <!-- <button class="th-btn preloaderCls">Cancel Preloader</button> -->
      <div id="preloader" class="preloader-inner">
         <div class="txt-loading"><span data-text-preloader="A" class="letters-loading">A </span><span data-text-preloader="M" class="letters-loading">M </span><span data-text-preloader="B" class="letters-loading">B </span><span data-text-preloader="R" class="letters-loading">R </span></div>
         <div class="txt-loading" style="margin-left: -20px"><span data-text-preloader="H" class="letters-loading">H </span><span data-text-preloader="O" class="letters-loading">O </span><span data-text-preloader="M" class="letters-loading">M </span><span data-text-preloader="E" class="letters-loading">E </span><span data-text-preloader="S" class="letters-loading">S </span></div>
      </div>
   </div>
 <?php include('partials/color-switcher.php'); ?>
   <!-- <div class="sidemenu-wrapper sidemenu-cart d-none d-lg-block">
      <div class="sidemenu-content">
         <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
         <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
               <ul class="woocommerce-mini-cart cart_list product_list_widget">
                  <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_1_1.png" alt="Cart Image">Bosco Apple Fruit</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>940.00</span></span></li>
                  <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_1_2.png" alt="Cart Image">Green Cauliflower</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>899.00</span></span></li>
                  <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_1_3.png" alt="Cart Image">Mandarin orange</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>756.00</span></span></li>
                  <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_1_4.png" alt="Cart Image">Shallot Red onion</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>723.00</span></span></li>
                  <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_1_5.png" alt="Cart Image">Sour Red Cherry</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1080.00</span></span></li>
               </ul>
               <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4398.00</span></p>
               <p class="woocommerce-mini-cart__buttons buttons"><a href="cart.php" class="th-btn wc-forward">View cart</a> <a href="checkout.php" class="th-btn checkout wc-forward">Checkout</a></p>
            </div>
         </div>
      </div>
   </div> -->
   <?php include('sidebar.php') ?>
   <div class="popup-search-box d-none d-lg-block">
      <button class="searchClose"><i class="fal fa-times"></i></button>
      <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i class="fal fa-search"></i></button></form>
   </div>
   <div class="th-menu-wrapper">
      <div class="th-menu-area text-center">
         <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
         <div class="mobile-logo"><a href="index.php"><img src="assets/logo.png" alt="ambr-html"></a></div>
         <div class="th-mobile-menu">
            <ul>
               <li class="active">
                  <a href="./">Home</a>
                  <!-- <ul class="sub-menu th-submenu th-open">
                     <li><a href="index.php">Home Real Estate</a></li>
                     <li><a href="home-2.php">Home Property</a></li>
                     <li><a href="home-3.php">Home Map</a></li>
                  </ul> -->
               </li>
               <li><a href="about.php">About Us</a></li>
               <li>
                  <a href="property.php">Properties</a>
                  
               </li>
               <!-- <li class="menu-item-has-children">
                  <a href="#">Agencies</a>
                  <ul class="sub-menu">
                     <li><a href="agency.php">Agencies</a></li>
                     <li><a href="agency-details.php">Agency Details</a></li>
                  </ul>
               </li> -->
               <!-- <li class="menu-item-has-children">
                  <a href="#">Pages</a>
                  <ul class="sub-menu">
                     <li class="menu-item-has-children">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                           <li><a href="shop.php">Shop</a></li>
                           <li><a href="shop-details.php">Shop Details</a></li>
                           <li><a href="cart.php">Cart Page</a></li>
                           <li><a href="checkout.php">Checkout</a></li>
                           <li><a href="wishlist.php">Wishlist</a></li>
                        </ul>
                     </li>
                     <li><a href="team.php">Agents Page</a></li>
                     <li><a href="team-details.php">Agent Details</a></li>
                     <li><a href="gallery.php">Gallery Page</a></li>
                     <li><a href="service.php">Service Page</a></li>
                     <li><a href="service-right-sidebar.php">Service with sidebar</a></li>
                     <li><a href="service-details.php">Service Details</a></li>
                     <li><a href="pricing.php">Pricing Plan</a></li>
                     <li><a href="neighborhood-guide.php">Neighborhood Guide</a></li>
                     <li><a href="faq.php">Faq Page</a></li>
                     <li><a href="error.php">Error Page</a></li>
                  </ul>
               </li> -->
               <!-- <li class="menu-item-has-children">
                  <a href="#">Blog</a>
                  <ul class="sub-menu">
                     <li><a href="blog.php">Blog Grid</a></li>
                     <li><a href="blog-grid-right-sidebar.php">Blog Grid With Right Sidebar</a></li>
                     <li><a href="blog-grid-left-sidebar.php">Blog Grid With Left Sidebar</a></li>
                     <li><a href="blog-details.php">Blog Details</a></li>
                  </ul>
               </li> -->
               <li><a href="contact.php">Contact Us</a></li>
            </ul>
         </div>
      </div>
   </div>
   <header class="th-header header-default">
      <div class="header-top">
         <div class="container th-container3">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
               <div class="col-auto d-none d-lg-block">
                  <div class="header-links">
                     <ul>
                        <li><i class="fa-solid fa-envelope"></i> <a href="mailto:infomailexample@mail.com">infomailexample@mail.com</a></li>
                        <li><i class="fa-solid fa-phone"></i> <a href="tel:+0012345678900">+00 (123) 456 789 00</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-auto">
                  <div class="header-links">
                     <ul>
                        <li>
                           <div class="th-social">
                              <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> 
                              <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> 
                              <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> 
                              <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                           </div>
                        </li>
                        <!-- <li class="lang-wrapper">
                           <div class="lang-menu">
                              <div class="icon"><img src="assets/img/icon/english.png" alt="icon"></div>
                              <select class="form-select nice-select">
                                 <option selected="">English</option>
                                 <option>Spanish</option>
                                 <option>Hindi</option>
                              </select>
                           </div>
                        </li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="sticky-wrapper">
         <div class="menu-area">
            <div class="container th-container3">
               <div class="row align-items-center justify-content-between">
                  <div class="col-auto">
                     <div class="header-logo"><a href="./"><img style="height: 80px;" src="./assets/logo.png" alt="ambr-html"></a></div>
                  </div>
                  <div class="col-auto">
                     <nav class="main-menu d-none d-lg-inline-block">
                        <ul>
                           <li class="active">
                              <a href="./">Home</a>
                              <!-- <ul class="mega-menu mega-menu-content allow-natural-scroll">
                                 <li>
                                    <div class="container">
                                       <div class="row gy-4">
                                          <div class="col-lg-4">
                                             <div class="mega-menu-box">
                                                <div class="mega-menu-img">
                                                   <img src="assets/img/pages/index.jpg" alt="Home One">
                                                   <div class="btn-wrap"><a href="index.php" class="th-btn radius">View Demo</a></div>
                                                </div>
                                                <h3 class="mega-menu-title"><a href="index.php"><span class="text-theme">01.</span> Home Real Estate</a></h3>
                                             </div>
                                          </div>
                                          <div class="col-lg-4">
                                             <div class="mega-menu-box">
                                                <div class="mega-menu-img">
                                                   <img src="assets/img/pages/home-2.jpg" alt="Home Two">
                                                   <div class="btn-wrap"><a href="home-2.php" class="th-btn radius">View Demo</a></div>
                                                </div>
                                                <h3 class="mega-menu-title"><a href="home-2.php"><span class="text-theme">02.</span> Home Property</a></h3>
                                             </div>
                                          </div>
                                          <div class="col-lg-4">
                                             <div class="mega-menu-box">
                                                <div class="mega-menu-img">
                                                   <img src="assets/img/pages/home-3.jpg" alt="Home Three">
                                                   <div class="btn-wrap"><a href="home-3.php" class="th-btn radius">View Demo</a></div>
                                                </div>
                                                <h3 class="mega-menu-title"><a href="home-3.php"><span class="text-theme">03.</span> Home Map</a></h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul> -->
                           </li>
                           <li><a href="about.php">About Us</a></li>
                           <li>
                              <a href="property.php">Properties</a>
                             
                           </li>
                           <!-- <li class="menu-item-has-children">
                              <a href="#">Agencies</a>
                              <ul class="sub-menu">
                                 <li><a href="agency.php">Agencies</a></li>
                                 <li><a href="agency-details.php">Agency Details</a></li>
                              </ul>
                           </li> -->
                           <!-- <li class="menu-item-has-children">
                              <a href="#">Pages</a>
                              <ul class="sub-menu">
                                 <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                       <li><a href="shop.php">Shop</a></li>
                                       <li><a href="shop-details.php">Shop Details</a></li>
                                       <li><a href="cart.php">Cart Page</a></li>
                                       <li><a href="checkout.php">Checkout</a></li>
                                       <li><a href="wishlist.php">Wishlist</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="team.php">Agents Page</a></li>
                                 <li><a href="team-details.php">Agent Details</a></li>
                                 <li><a href="gallery.php">Gallery Page</a></li>
                                 <li><a href="service.php">Service Page</a></li>
                                 <li><a href="service-right-sidebar.php">Service with sidebar</a></li>
                                 <li><a href="service-details.php">Service Details</a></li>
                                 <li><a href="pricing.php">Pricing Plan</a></li>
                                 <li><a href="neighborhood-guide.php">Neighborhood Guide</a></li>
                                 <li><a href="faq.php">Faq Page</a></li>
                                 <li><a href="error.php">Error Page</a></li>
                              </ul>
                           </li> -->
                           <!-- <li class="menu-item-has-children">
                              <a href="#">Blog</a>
                              <ul class="sub-menu">
                                 <li><a href="blog.php">Blog Grid</a></li>
                                 <li><a href="blog-grid-right-sidebar.php">Blog Grid With Right Sidebar</a></li>
                                 <li><a href="blog-grid-left-sidebar.php">Blog Grid With Left Sidebar</a></li>
                                 <li><a href="blog-details.php">Blog Details</a></li>
                              </ul>
                           </li> -->
                           <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                     </nav>
                     <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                  </div>
                  <!-- <div class="col-auto d-none d-xl-block">
                     <div class="header-button"><a href="contact.php" class="th-btn bg-black pill"><i class="fa-regular fa-house-chimney me-2"></i> Add Listing </a><button type="button" class="sidemenu-bar sideMenuInfo pill"><span></span> <span></span> <span></span></button></div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
   </header>