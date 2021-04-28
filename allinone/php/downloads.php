<?php include 'filesLogic.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Note Exchange System</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="../css/download.css">
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
            <a href="logout.php" class="mobileLogOut">
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
              <a href="#"><img src="./icons/facebook.svg" alt=""></a>
              <a href="#"><img src="./icons/twitter.svg" alt=""></a>
              <a href="#"><img src="./icons/google.svg" alt=""></a>
              <a href="#"><img src="./icons/instagram.svg" alt=""></a>
              <a href="#"><img src="./icons/search.svg" alt=""></a>
            </div>
            <div class="auth flex items-center">
              <div>
                <a href="logout.php">Log Out</a>
              </div>
            </div>
          </div>
        </header>

        <nav>
          <div class="top">
            <div class="container flex justify-between">
              <div class="contact flex items-center">
                <img src="./icons/phone.svg" alt="">
                <div>
                  <h5>Call US: (+84) 123 456 789</h5>
                  <h6>E-mail : support@freshmeal.com</h6>
                </div>
              </div>
              <div class="branding">
                <img src="./icons/logo.svg" alt="">
              </div>
              <div class="time flex items-center">
                <img src="./icons/clock.svg" alt="">
                <div>
                  <h5>Working Hours:</h5>
                  <h6>Mon - Sat (69.00am - 12.00am)</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar magic-shadow">
            <div class="container flex justify-center">
              <a href="../php/index.php">Home</a>
              <a href="#">Download</a>
              <a href="../php/indexUpload.php">Upload</a>
              <a href="../php/aboutUs.html">About Us</a>
              <a href="#testing">Contact Us</a>
            </div>
          </div>
        </nav>

        <header class="hero flex items-center">
          <div class="container">
            <h1>Download <span>File</span></h1>
          </div>
        </header>

        <table id="downTable">
          <tr>
            <th>Filename</th>
            <th>size (in mb)</th>
            <th>Downloads</th>
            <th>Action</th>
          </tr>
          <tr>
            <?php foreach ($files as $file) : ?>
          <tr>
            <td><?php echo $file['name']; ?></td>
            <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
            <td><?php echo $file['downloads']; ?></td>
            <td><button class="btn btn-secondary" onclick="location.href=" downloads.php?file_id=<?php echo $file['id'] ?>">Download</button></td>
          </tr>
        <?php endforeach; ?>

        </tr>
        </table>




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
  <script src="../js/index.js"></script>


</body>

</html>