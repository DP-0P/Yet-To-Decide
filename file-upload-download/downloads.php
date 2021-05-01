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
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <title>Note Exchange System</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="../file-upload-download/download.css">
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
              <a href="../Login/About.php">About Us</a>
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
                <a style="color: #FE4545;" href="../Login/logout.php">Log Out</a>
              </div>
            </div>
          </div>
        </header>

        <nav>
          <div class="navbar magic-shadow">
            <div class="container flex justify-center">
              <a href="../Login/index.php">Home</a>
              <a href="#" class="navbar active">Download</a>
              <a href="../file-upload-download/index.php">Upload</a>
              <a href="../Login/about.php">About Us</a>
              <a href="../Login/contactUs.html">Contact Us</a>
            </div>
          </div>
        </nav>

        <header id="homeScroll" class="hero flex items-center">
          <div class="container">
            <h1 style="font-size: 50px; text-align:center">Download <span>File</span></h1>
          </div>
        </header>

        <table id="downTable">
          <tr>
            <!-- <th>ID</th> -->
            <th>Filename</th>
            <th>Subject Name</th>
            <th>Description</th>
            <th>Size </th>
            <th>Downloads</th>
            <th>Action</th>
          </tr>

          <tr>
            <?php foreach ($files as $file) : ?>
          <tr>
            <!-- <td><?php echo $file['id']; ?></td> -->
            <td><?php echo $file['name']; ?></td>
            <td><?php echo $file['sname']; ?></td>
            <td><?php echo $file['description']; ?></td>
            <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
            <td><?php echo $file['downloads']; ?></td>
            <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>"><button class="btn btn-secondary">Download</button></a></td>

          </tr>
        <?php endforeach; ?>

        </tr>
        </table>
        
        <footer  class="copyright">
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