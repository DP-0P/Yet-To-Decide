<?php include 'filesLogic.php'; ?>



<?php 
session_start();

	include("../Login/connection.php");
	include("../Login/functions.php");
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
  <link rel="stylesheet" href="index.css">
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
              <a href="../Login/index.php">Home</a>
            </li>
            <li>
              <a href="../file-upload-download/downloads.php">Download</a>
            </li>
            <li>
              <a href="../file-upload-download/index.php">Upload</a>
            </li>
            <li>
              <a href="../Login/About.php" style="color: #38d39f;">About Us</a>
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
              <a href="#" id="down">Upload</a>
              <a href="../Login/About.php">About Us</a>
              <a href="#testing">Contact Us</a>
            </div>
          </div>
        </nav>

        <header id="#homeScroll" class="hero flex items-center">
          <div class="container">
            <h1>Upload <span>File</span></h1>
          </div>
        </header>

        <div class="containerUpload">
          <div class="row">
            <form action="index.php" method="post" enctype="multipart/form-data">
              <label for="subject">Choose a subject:</label>
              <select id="subject" name="subjects">
                <option value="AD1">AD1</option>
                <option value="ADM">ADM</option>
                <option value="COA">COA</option>
                <option value="CSW2">CSW2</option>
                <option value="PME">PME</option>
              </select>

              <div>
                <label id="descri" for="desc">Description:</label>
              </div>
              <div>

                <textarea id="des" rows="4" cols="50" name="descriptions" " placeholder=" Brief description about the note/book."></textarea>

              </div>

              <div class="row">
                <div class="col-75">
                  <input id="inputFile" type="file" name="myfile">
                </div>
              </div>
              <button id="sub" class="btn btn-secondary" type="submit" name="save">Submit</button>
            </form>

            
          </div>
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
                                    <a href="#homeScroll">Upload</a>
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
  <script src="index.js"></script>


</body>

</html>