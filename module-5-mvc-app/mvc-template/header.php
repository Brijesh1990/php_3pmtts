<?php 
$mainurl="http://localhost/php-3pm-tts/mvc-template/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fly - Online flight booking and reservations</title>
  <meta name="title" content="Fly - Luxury Jet Flights">
  <meta name="description" content="This is a private flight html template made by codewithsadee">
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="102" height="48" alt="fly logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="102" height="48" alt="fly logo">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="<?php echo $mainurl;?>" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="<?php echo $mainurl;?>our-services" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li class="navbar-item">
            <a href="<?php echo $mainurl;?>blogs" class="navbar-link" data-nav-link>Blogs</a>
          </li>

          <li class="navbar-item">
            <a href="<?php echo $mainurl;?>flight-booking" class="navbar-link" data-nav-link>Flight Booking</a>
          </li>

          <li class="navbar-item">
            <a href="<?php echo $mainurl;?>create-account" class="navbar-link" data-nav-link>Account</a>
          </li>
          <li class="navbar-item">
            <a href="<?php echo $mainurl;?>contact-us" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>

      </nav>

      <div class="header-action">

        <button class="header-action-btn" aria-label="search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="header-action-btn" aria-label="cart">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="header-action-btn nav-open-btn" aria-label="menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

