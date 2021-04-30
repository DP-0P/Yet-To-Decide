<?php
session_start();

include("connection.php");
include("functions.php");


$user_data = check_login($con);
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Explore hist</title>
  <link rel="stylesheet" href="../Login/aboutus.css" />
  <link rel="stylesheet" href="./style/kimbie.dark.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
              <a href="../Login/index" ">Home</a>
            </li>
            <li>
              <a href="../file-upload-download/downloads.php">Download</a>
            </li>
            <li>
              <a href="../file-upload-download/index.php" >Upload</a>
            </li>
            <li>
              <a href="../Login/about.php" style="color: #38d39f;">About Us</a>
            </li>
            <li>
              <a href="#">Contact Us</a>
            </li>
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
                <a href="../Login/logout.php">Log Out</a>
              </div>
            </div>
          </div>
        </header>

        <nav>
          <div class="navbar magic-shadow">
            <div class="container flex justify-center">
              <a href="../Login/index.php">Home</a>
              <a href="../file-upload-download/downloads.php">Download</a>
              <a href="../file-upload-download/index.php">Upload</a>
              <a href="#" id="down">About Us</a>
              <a href="#testing">Contact Us</a>
            </div>
          </div>
        </nav>

        <header class="hero flex items-center">
          <div id="#homeScroll" class="container">
            <h1>About <span>Us</span></h1>
          </div>
        </header>

        <div class="containerUpload">


          <p>
            At Notes Exchange System , we’re tied in with presenting a flexible
            and simple platform for exchanging notes, regardless of whether it
            implies going the additional mile. When you stroll through our
            entryways, we do what we can to make everybody feel comfortable in
            light of the fact that our family stretches out through your locale.
          </p>
          <p>
            Notes Exchange System is an organization that is continually
            developing. From a small idea in 2010, we’ve kept on extending vision
            to help other individuals end up effective entrepreneurs by owning an
            Notes Exchange System establishment. We search for franchisees who are
            focused on quality of books, not compromising.
          </p>
          <p>
            Today, we can be found in numerous nations and have our sights on
            extending much more. Be that as it may, regardless of where you
            discover us, quality will dependably be our formula.
          </p>
          <p>
            We Believe in Quality. All around. Quality books and notes can’t be
            made without quality initiative. Find out about the general population
            driving The Notes Exchange System .
          </p>
        </div>



        <footer>
          <div class="container">
            <div class="box">
              <h3>About us</h3>
              <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum
                passage.</p>
              <button class="btn btn-secondary" onclick="location.href='../php/About Us.html'">Read </button>
            </div>

            <div class="box">
              <h3>Quik Links</h3>
              <ul>
                <li>
                  <a href="../Login/index.php">Home</a>
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
                  <a href="#">Contact us</a>
                </li>

              </ul>
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
            Copyright © 2021 .All rights reserved by <a href="https://github.com/codex-iter/Yet-To-Decide">PDFHut & Co.</a>
          </div>
        </footer>

      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="../Login/mains.js"></script>

</body>

</html>