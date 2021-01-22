<?php 
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
          crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <title>Projekti</title>


<!--  PUNUAN : ARTIN HALILI dhe BLEDON IBISHI  -->
</head>
<body>
    <div class="nav">
        <a href="index.php" class="nav-item">Home</a>
        <a href="aboutus.php" class="nav-item">About</a>
        <a href="login.php" class="nav-item">Login</a>
        <a href="register.php" class="nav-item">Register</a>
        <a href="contact-us.php" class="nav-item">Contact us</a>
    </div>
    
    <section class="main-section">
        <h1>Learn About Nature</h1>
        <h4>All over the land</h4>
    </section>

    <section class="image">
        <i class="fas fa-arrow-left" id="prevButton"></i>
        <i class="fas fa-arrow-right" id="nextButton"></i>
        <div class="image-slide">
            <img src="images/cow.jpg" class="section-image" id="lastClone" alt="">
            <img src="images/monki.jpg" class="section-image" alt="">
            <img src="images/kaprollat.jpg" class="section-image" alt="">
            <img src="images/clouds.jpg" class="section-image" alt="">
            <img src="images/lion.jpg" class="section-image" alt="">
            <img src="images/cow.jpg" class="section-image" alt="">
            <img src="images/monki.jpg" class="section-image" id="firstClone" alt="">
        </div>
    </section>

    <section class="text">
        <div class="row">
            <div class="first-col">
                <div class="first-col-header">
                    <h4>All about nature</h4>
                    <p>PHASELLUS NEC ERAT SIT AMET NIBH PELLENTESQUE CONGUE</p>
                </div>
               <div class="first-col-p">
                   <p>
                       his is GrassyGreen, a free, fully standards-compliant CSS template designed by TEMPLATED.
                       The photos in this template are from Fotogrph. This free template is released under the
                       Creative Commons Attribution license, so you're pretty much free to do whatever you want
                       with it (even use it commercially) provided you give us credit for it. Have fun :)
                       <br>
                   </p>
                   <br>
                   <p>
                       Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam
                       neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero
                       eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus
                       lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus ac magna. Pellente
                       sque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam non wisi
                       a sem semper eleifend. Donec mattis libero eget urna.
                   </p>
               </div>
            </div>
            <div class="second-col">
                <div class="second-col-header">
                    <h4>Integer Gravida</h4>
                </div>
                <div class="second-col-lines">
                    <h5 class="second-col-h5">Varjamti i qmueshem.</h5>
                    <h5 class="second-col-h5">De kasa tu pesa.</h5>
                    <h5 class="second-col-h5">Qusebuse tuse.</h5>
                    <h5 class="second-col-h5">Moni beg time laps</h5>
                    <h5 class="second-col-h5">Geremoni man.</h5>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-row">
            <div class="footer-col-1">
                <h5>Latest Post</h5>
                <a href="#" class="footer-link">Click the link</a>
                <a href="#" class="footer-link">Why wouldnt you </a>
                <a href="#" class="footer-link">It doesent mean</a>
                <a href="#" class="footer-link">Anything at all</a>
            </div>
            <div class="footer-col-2">
                <h5>Popular links</h5>
                <a href="#" class="footer-link">Click the link</a>
                <a href="#" class="footer-link">Why wouldnt you </a>
                <a href="#" class="footer-link">It doesent mean</a>
                <a href="#" class="footer-link">Anything at all</a>
            </div>
            <div class="footer-col-3">
                <h5>Follow us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button class="footer-btns">READ MORE</button>
            </div>
        </div>
    </footer>

    <section class="copy-right">
        <p>&copy; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quo.</p>
    </section>
    <script src="slider.js"></script>
</body>
</html>