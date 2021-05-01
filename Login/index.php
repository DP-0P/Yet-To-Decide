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
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>PDFHut</title>
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
                            <a href="../Login/index.php" style="color: #38d39f;">Home</a>
                        </li>
                        <li>
                            <a href="../file-upload-download/downloads.php">Download</a>
                        </li>
                        <li>
                            <a href="../file-upload-download/index.php">Upload</a>
                        </li>
                        <li>
                            <a href="../Login/about.php">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="time flex items-center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                        <a href="../Login/logout.php" class="mobileLogOut">
                            <h5>Log Out</h5>
                        </a>
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
                                <a id="logout" href="../Login/logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </header>

                <nav>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="#" class="navbar active">Home</a>
                            <a href="../file-upload-download/downloads.php">Download</a>
                            <a href="../file-upload-download/index.php">Upload</a>
                            <a href="#aboutUs">About Us</a>
                            <a href="../Login/contactUs.html">Contact Us</a>
                        </div>
                    </div>
                </nav>

                <header class="hero flex items-center">
                    <div class="container">
                        <div id="homeScroll" class="welcome flex items-center">
                            <span style="font-size: 25px;">Welcome to</span>

                            <img src="./icons/logo-2.svg" alt="">
                        </div>
                        <img src="photos/homebook.png" alt="" class="home-img">
                        <h1 style="font-size:60px;">PDF<span>Hut</span></h1>
                        <div >
                            <p style="font-size: 25px;">The Only Thing We're Serious About <br> Is Future.</p>
                        </div>
                        
                        <div>
                            <button class="btn btn-primary" targe>Available Books</button>
                        </div>

                    </div>
                </header>

                <section class="about-uss" id="aboutUs">
                    <div class="container">
                        <h1 style="font-size: 60px;" class="section-heading">About <span>Us</span></h1>
                        <div class="about-uss-wrap flex">
                            <div class="flex-1">
                                <img src="../Login/photos/book2.png" alt="">
                            </div>
                            <div  class="flex-1">
                                <h2 style="font-family: 'poppins';">The Best We Do is Creating <br> Enviroment And Platform To study</h2>
                                <p>We build and developed the place where you can find all the neccessary items
                                    like pdf, notes, books and many more. We help to make you thrive in your
                                    path to future.</p>
                                <button class="btn btn-secondary" onclick="location.href='../Login/About.php'"">Read More</button>
                            </div>
                        </div>
                    </div>
                </section>


                <footer>
                    <div class=" container">
                                    <div class="box">
                                        <h3>About us</h3>
                                        <p>It all Started with an idea of providing a simple platform where we all can exchange notes.</p>
                                        <button class="btn btn-secondary" onclick="location.href='../php/About Us.html'">Read </button>
                                    </div>

                                    <div class="box">
                                        <h3>Quick Links</h3>
                                        <ul>
                                            <li>
                                                <a href="#homeScroll">Home</a>
                                            </li>
                                            <li>
                                                <a href="../file-upload-download/downloads.php">Download</a>
                                            </li>
                                            <li>
                                                <a href="../file-upload-download/index.php">Upload</a>
                                            </li>
                                            <li>
                                                <a href="../Login/About.php">About us</a>
                                            </li>
                                            <li>
                                                <a href="../Login/contactUs.html">Contact us</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="box">
                                        <h3 style="text-align: center;">Follow Us</h3>
                                        <ul>
                                            <li>
                                                <a href="https://github.com/RIJULDAS">
                                                <i class='bx bxl-github'></i>
                                                    <span>Rijul</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/SouravReal">
                                                <i class='bx bxl-github'></i>
                                                    <span>Sourav</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/DP-0P">
                                                    <i class='bx bxl-github'></i>
                                                    <span>Deepak</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                            </div>
                            </footer>
                            <footer class="copyright">
                                <div>
                                    Copyright © 2021 .All rights reserved by <a href="https://github.com/codex-iter/Yet-To-Decide">PDFHut & Co.</a>
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