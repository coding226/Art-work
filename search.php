<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ff68c69b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="search.css">
    <title>The Search</title>
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo"><img src="images/AuxesisArt_logo.png" width="150" alt=""></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a href="index.php">HOME</a></li>
          <li><a href="swiper.php">GALLERY</a></li>
          <li><a href="bio.php">MY BIO</a></li>
          <li><a href="webForm.php">CONTACT</a></li>
        </ul>
      </header>
     <a href="swiper.php">
      <button class="arrow left">
        <svg width="60px" height="80px" viewBox="0 0 50 80" xml:space="preserve">
          <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
          45.63,75.8 0.375,38.087 45.63,0.375 "/>
        </svg>  
      </button>
    </a>
    <a href="swiper.php">
      <button class="arrow right">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60px" height="80px" viewBox="0 0 50 80" xml:space="preserve">
          <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
          0.375,0.375 45.63,38.087 0.375,75.8 "/>
        </svg>
      </button>
    </a>


      <div class="gallery">

        <figure class="gallery__item gallery__item--1">
          <a href="/ImageGallery/images_gallery/1_The_Search.jpg"><img src="/ImageGallery/images_gallery/1_The_Search.jpg" class="gallery__img" alt="Image 1"></a>
        </figure>

        <figure class="gallery__item gallery__item--2">
            <a href="http://localhost/AuxesisArt/home.php"> <h1>	Title: The Search <br>
                Medium: Graphite on paper <br>
                Size: 11”x14” <br>
                Year: 2020
                </h1> </a>
          </figure>
   

      </div>



      <footer class="foot">
        <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="https://www.instagram.com/auxesisart/" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-linkedin"></a>
      </footer>
</body>
</html>