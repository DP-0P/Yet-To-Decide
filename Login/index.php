<?php
session_start();

include("connection.php");
include("functions.php");


$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note Exchange System</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../Login/index.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="nav-background">
            <div class="mobile-logo">
                <img src="./icons/logo.svg" alt="">
            </div>
            <div class="mobile-nav">
                <div class="cart">
                    <div class="flex items-center">
                        <img src="./icons/cart-dark.svg" alt="">
                    </div>
                </div>
                <div class="nav-top">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Download</a>
                        </li>
                        <li>
                            <a href="#">Upload</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="time flex items-center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                    <a href="logout.php" class="mobileLogOut"><h5>Log Out</h5></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" />
                </svg>
            </div>
            <div class="site-content">
                <header class="topbar">
                    <div class="container flex justify-between items-center">
                        <div class="icons">
                        <p class="userID">Current User: <?php echo $user_data['Name']; ?></p>
                        </div>
                        <div class="auth flex items-center">
                            <div>
                                <a href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </header>

                <nav>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="#" class="down" style="color: white;">Home</a>
                            <a href="../file-upload-download/downloads.php">Download</a>
                            <a href="../file-upload-download/index.php">Upload</a>
                            <a href="#aboutUs">About Us</a>
                            <a href="#testing">Contact Us</a>
                        </div>
                    </div>
                </nav>
 
                <header class="hero flex items-center">
                    <div class="container">
                        <div class="welcome flex items-center">
                            <span>Welcome to</span>
                            <img src="./icons/logo-2.svg" alt="">
                        </div>
                        <h1>PDF<span>Hut</span></h1>
                        <p>The Only Thing We're Serious About <br> Is Future.</p>
                        <div>
                            <button class="btn btn-primary" targe>Available Books</button>
                        </div>
                        <!-- <div class="hero-image">
                            <img src="../photos/homebook.png" alt="">
                        </div> -->

                    </div>
                </header>
                    
                <section class="about-meal" id="aboutUs">
                    <div class="container" >
                        <h1 class="section-heading">About <span>Us</span></h1>
                        <div class="about-meal-wrap flex">
                            <div class="flex-1">
                                <img src="../Login/photos/book2.png" alt="">
                            </div>
                            <div class="flex-1">
                                <h2>The Best We Do is Creating <br> Enviroment And Platform To study</h2>
                                <p>We build and developed the place where you can find all the neccessary items 
                                    like pdf, notes, books and many more. We help to make you thrive in your 
                                    path to future.</p>
                                <button class="btn btn-secondary" onclick="location.href='../php/aboutUS.html'"">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>


                <footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum
                                passage.</p>
                            <button class="btn btn-secondary" onclick="location.href='../php/About Us.html'">Read </button>
                        </div>

                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/codersgyan">
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/CoderGyan">
                                            <img src="./icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/google.svg" alt="">
                                            <span>Google +</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/codersgyan/">
                                            <img src="./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </footer>
                <footer class="copyright">
                    <div>
                        Copyright © 2020 .All rights reserved by <a href="https://www.instagram.com/codersgyan/">Coder's Gyan</a>.
                    </div>
                </footer>
            </div>
        </div>
    </div>





    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="mains.js"></script>

    
</body>

</html>