<?php 
session_start();

	include("connection.php");
	include("functions.php");


	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styless.css">
    <title>Notes Exchange System</title>
	
</head>

	<body>
    <a href="#" class="scrolltop " id="scroll-top">
        <i class='bx bx-chevron-up scrolltop-icon'></i>
    </a>
    <header class="header1" id="header">
        <nav class="nav 1-container">
            <img class="logo" src="photos/nes.png">
            <a href="#" class="nav-logo">Notes Exchange System

            </a>
             Hello, <?php echo $user_data['user_name']; ?>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-items"><a href="#home" class="nav-link active-link">Home</a></li>
                    <li class="nav-items"><a href="#about us" class="nav-link">About us</a></li>
                    <li class="nav-items"><a href="#upload" class="nav-link">upload/Download</a></li>
                    <li class="nav-items"><a href="#contact" class="nav-link">Contact Us</a></li>
                     <li class="nav-items"><a href="logout.php" class="nav-link">Log Out</a></li>
                </ul>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>

    </header>
    <main class="main1">
        <section class="home" id="home">
            <div class="home-container bd-container bd-grid">
                <div class="home-data">
                    <h1 class="home-title">Notes Exchange System</h1>
                    <h2 class="home-sub">The Only Thing We're Serious About <br> Is Future.</h2>
                    <a href="#"
                        class="button" target="_blank">Available Books</a>
                </div>
                <img src="photos/homebook.png" alt="" class="home-img">
            </div>

        </section>

        <section class="about section bd-container" id="about us">
            <div class="about-container bd-grid">
                <div class="about-data">
                    <span class="section-sub about-initial">About Us</span>
                    <h2 class="section-title about-initial">The Best We Do is Creating <br> Enviroment And Platform To study</h2>
                    <p class="about-description">We build and developed the place where you can find all the neccessary items like pdf,notes,books and many more. We help to make you thrive in your path to future.</p>
                    <a href="About Us.html" class="button"
                        target="_blank">About Us</a>

                </div>
                <img src="photos/book2.png" alt="" class="about-img">
            </div>
             <section class="about section bd-container" id="upload">
            <div class="about-container bd-grid">
                <div class="about-data">
                    <span class="section-sub about-initial">upload</span>
                  
                    <a href="#" class="button"
                        target="_blank">upload/Download</a>

                </div>
            </div>
            

       
       
            <section class="contact section bd-container" id="contact">
                <div class="contact-container bd-grid" id="tt">
                    <div class="contact-data">
                        <span class="section-sub contact-initial">Let's Talk</span>
                        <h2 class="section-title contact-initial">Contact Us</h2>
                        <p class="contact-description">For any queries and problem facing in this websites contact us. We
                            are available 24*7.</p>
                    </div>
                    <div class="contact-button">
                        <a href="mailto:sririjuldas@gmail.com,rjldas00@gmail.com,deepakpattnayak2013@gmail.com,rajprusty99@gmail.com" class="button">Reach Us Now</a>
                    </div>
                </div>

            </section>
            <footer class="footer section bd-container">
                <div class="footer-container bd-grid">
                    <div class="footer-content">
                        <a href="#" class="footer-logo">Notes Exchange System</a>
                        <span class="footer-description">Platform for notes exchange</span>
                        <div>
                            <a href="https://www.facebook.com/" class="footer-social" target="_blank"><i
                                    class='bx bxl-facebook'></i></a>
                            <a href="https://www.instagram.com/" class="footer-social" target="_blank"><i
                                    class='bx bxl-instagram'></i></a>
                            <a href="https://twitter.com/login" class="footer-social" target="_blank"><i
                                    class='bx bxl-twitter'></i></a>
                        </div>
                    </div>
                   
                    <div class="footer-content">
                        <h3 class="footer-title">Information</h3>
                        <ul>
                            <li><a href="tel:+918598000020" class="footer-link">Call Us</a></li>
                            <li><a href="mailto:sririjuldas@gmail.com,rjldas00@gmail.com,deepakpattnayak2013@gmail.com,rajprusty99@gmail.com" class="footer-link">Mail
                                    Us</a></li>
                            <li><a href="file:///C:/Users/Rijul/OneDrive/Desktop/food%20website/Privacy%20Policy.html"
                                    class="footer-link" target="_blank">Privacy Policy</a></li>

                        </ul>
                    </div>
                    <div class="footer-content">
                        <h3 class="footer-title">Address</h3>
                        <ul>
                            
                            <li>Odisha</li>
                            <li>Bhubaneswar</li>
                            <li>sririjuldas@gmail.com,deepakpattnayak2013@gmail.com,rajprusty99@gmail.com</li>
                        </ul>
                    </div>

                </div>
                <p class="footer-copy">&#169; 2020 NES. All Rights Reserved.</p>

            </footer>

            <!-- scroll revel -->
            <script src="https://unpkg.com/scrollreveal"></script>
            <script src="mains.js"></script>





	
	
	
</body>
</html>