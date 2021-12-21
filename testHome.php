<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8ff68c69b1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <title>Mobile</title>
</head>
<body>
    <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo"><img src="images/AuxesisArt_logo.png" 
         width="250px" height="100px"   alt=""></a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="#" class="nav-links">HOME</a>
            </li>
            <li>
                <a href="http://localhost/AuxesisArt/ImageGallery/gallery.php" class="nav-links">GALLERY</a>
            </li>
            <li>
                <a href="#" class="nav-links">MY BIO</a>
            </li>
            <li>
                <a href="webForm.php" class="nav-links">CONTACT</a>
            </li>
            
        </ul>
</nav>

<script>
    let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
    
    mainNav.classList.toggle('active');
});
</script>


   


<div class="wrapper">

       





    <main class="mainContent">
        <img src="images/hero_1920.jpg" alt="">
        <section class="tagline">
            <h1>WHERE ARTISTRY DEVELOPS  <br> THROUGH DETAILS</h1>
            <!-- <button class="hero-button" onclick="window.location='about.php'">GALLERY</button> -->
            <div class="testButton">
                <a href="about.php"><span>GALLERY</span></a>
              </div>
        </section>
    </main>
      
    

    <footer class="foot">
        <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="https://www.instagram.com/auxesisart/" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-linkedin"></a>
    </footer>
</div>


</body>
</html>