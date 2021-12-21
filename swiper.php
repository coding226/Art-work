<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>GALLERY</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8ff68c69b1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="mg-popup.css">
  <link rel="stylesheet" href="swiper.css">
  <link rel="stylesheet" href="swiper-mobile.css">
  <link rel="stylesheet" href="gallerystyle.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Demo styles -->
  <style>


 body {
      background: #0000;
      font-family: 'Playfair Display', serif;
      font-size: 16px;
      color: #000;
      margin: 0;
      padding: 0;
    }
    .swiper-mobile-view{
      padding: 100px 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 450px;
    }

    .swiper-wrapper{
      text-align: center;
    }
    .swiper-wrapper a{
      text-decoration: none;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width:50vh;
      height: 50vh;

    }
    .m-photo-title{
      margin: 5px 0;
      color:white;
      font-size: 25px;
      font-family: 'Playfair Display', serif;
      word-spacing: 5px;
    }
    .m-photo-title span{
      color:red;
    }
    .m-photo-des{
      font-size: 18px;
      text-transform: none;
      padding:0 20px;
      font-family: 'Playfair Display', serif;
      text-align: justify;
      margin-left: 55px;
      
      /* font-style: italic; */
    }
    /* image gallery */
    
    .container {
      width: 100%;
      display: block;
      margin: 0 auto;
      padding:200px 0;
    }
    .masonry {
      -webkit-column-count: 3;
         -moz-column-count: 3;
              column-count: 3;
      -webkit-column-gap: 5px;
         -moz-column-gap: 5px;
              column-gap: 5px;
      -webkit-box-shadow: 0 0 50px 0 rgba(80, 9, 9, 1.0);
              box-shadow: 0 0 50px 0 rgba(80, 9, 9, 1.0);
      /* border:1px solid red; */
      padding:10px;
    }
    .masonry .brick {
      -webkit-box-sizing: border-box;
              box-sizing: border-box;
      -webkit-column-break-inside: avoid;
      page-break-inside: avoid;
      -moz-column-break-inside: avoid;
           break-inside: avoid;
      counter-increment: brick-counter;
    }
    .masonry img {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
         object-fit: cover;
    }
    #image-4-mas{
      height: 605px;
    }
    #image-9-mas{
      height: 570px;
    }
    #image-5-mas{
      height: 288px;
    }
    .masonry-image-gallery-mobile{
        display: none;   
    }

    @media only screen and (max-width: 768px){

      .header{
        z-index:0;
      }

      .masonry-image-gallery{
        display: none;
      }
      /* ---------------mobile view--------------- */
      .masonry-image-gallery-mobile{
        display: block;   
      }

      .masonry {
      -webkit-column-count: 2;
         -moz-column-count: 2;
              column-count: 2;
      -webkit-column-gap: 2px;
         -moz-column-gap: 2px;
              column-gap: 2px;
      -webkit-box-shadow: 0 0 50px 0 rgba(80, 9, 9, 1.0);
              box-shadow: 0 0 50px 0 rgba(80, 9, 9, 1.0);
      /* border:1px solid red; */
      padding:10px;
    }
    #image-5-mas-mobile{
      height: 288px;
    }

    }
 
    


</style>


  
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
  


<!-- Mobile view -->
<div class="middle-row masonry-image-gallery-mobile">
  <div class="container">
  <div class="masonry popup-gallery">
       
        <div class="brick">
          <a href="swiper-images/1_The_Search.jpg" title="The <span class='m-m-title-red'>Search</span> <br> <span class='m-m-des'>Medium: Graphite on paper <br>
                                            Size: 11”x14”<br>
                                            Year: 2020 <br>
                                            Self-Portrait. First Place Winner, Artist of Month (January 2021), Fine Arts League of Cupertino (FALC).</span>" ><img src="swiper-images/1_The_Search.jpg" width="75" height="75" onclick="ShowSecond()"></a>
       
        </div>
      
        <div class="brick">
        <a href="swiper-images/2_Cub-Ital.jpg" title='Cub <span class="m-m-title-red">-Ital</span> <br> <span class="m-m-des">Medium: Graphite on paper <br>
                                            Size: 11”x14” <br>
                                            Year: 2020 <br><br>
                                            Cari & Frank.</span>'><img src="swiper-images/2_Cub-Ital.jpg" width="75" height="75" onclick="ShowSecond()"></a>
        
        </div>
        <div class="brick">
        <a href="swiper-images/3_Gus_Fring.jpg" title='Gus <span class="m-m-title-red">Fring</span> <br> <span class="m-m-des">Medium: White charcoal on black paper <br>
                                                    Size: 8”x10”<br>
                                                    Year: 2020 </span>'><img src="swiper-images/3_Gus_Fring.jpg" width="75" height="75" onclick="ShowSecond()"></a>
      </div>
      <div class="brick">
        <a href="swiper-images/4_Mike_Ehrmantraut.jpg" title='Mike <span class="m-m-title-red">Ehrmantraut</span> <br> <span class="m-m-des">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020<br> </span>'><img src="swiper-images/4_Mike_Ehrmantraut.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
  <div class="brick">
        <a href="swiper-images/6_Will_Graham.jpg" title='Will <span class="m-m-title-red">Graham</span> <br> <span class="m-m-des"> Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020<br></span>'><img src="swiper-images/6_Will_Graham.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
 
 
 
  <div class="brick">
        <a href="swiper-images/7_Hannibal_Lecter.jpg" title='Hannibal <span class="m-m-title-red">Lecter</span> <br> <span class="m-m-des">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020 </span>'><img src="swiper-images/7_Hannibal_Lecter.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
 
 
  <div class="brick">
        <a href="swiper-images/8_Brandon_Stark.jpg" title='Brandon <span class="m-m-title-red">Stark</span> <br> <span class="m-m-des">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2019 </span>'><img src="swiper-images/8_Brandon_Stark.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
 
  <div class="brick">
        <a href="swiper-images/9_Sansa_Stark.jpg" title='Sansa <span class="m-m-title-red">Stark</span> <br> <span class="m-m-des">Medium: Graphite on paper <br>
Size: 8”x10”<br>
Year: 2019 </span>'><img src="swiper-images/9_Sansa_Stark.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
 
  <div class="brick">
        <a href="swiper-images/10_Jon_Snow.jpg" title='Jon <span class="m-m-title-red">Snow</span> <br> <span class="m-m-des">Medium: Graphite on paper  <br>
                                            Size: 8”x10”<br>
                                            Year: 2019 </span>'><img src="swiper-images/10_Jon_Snow.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
 
  <div class="brick">
        <a href="swiper-images/11_Arya_Stark.jpg" title='Arya <span class="m-m-title-red">Stark</span> <br> <span class="m-m-des">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2016 </span>'><img src="swiper-images/11_Arya_Stark.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
 
  <div class="brick">
        <a href="swiper-images/12_Joe_Miller.jpg" title='Joe <span class="m-m-title-red">Miller</span> <br> <span class="m-m-des">Medium: White charcoal on black paper <br>
Size: 12”x12”<br>
Year: 2017</span>'><img src="swiper-images/12_Joe_Miller.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
 
<div class="brick">
        <a href="swiper-images/13_The_Doctor.jpg" title='The <span class="m-m-title-red">Doctor</span> <br> <span class="m-m-des">Medium: White charcoal on black paper <br>
Size: 12”x12”<br>
Year: 2014 </span>'><img src="swiper-images/13_The_Doctor.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>
 
 
 
<div class="brick">
        <a href="swiper-images/5_Whisper.jpg" title='Whis <span class="m-m-title-red">per</span> <br> <span class="m-m-des">Medium: Graphite on paper <br>
Size: 11”x14”<br>
Year: 2020<br><br>
Hannibal Lecter and Will Graham.  </span>'><img src="swiper-images/5_Whisper.jpg" width="75" height="75" onclick="ShowSecond()"></a>
 </div>

      </div>
      </div>
  </div>

<!-- PC view -->
  <div class="middle-row masonry-image-gallery">
  <div class="container">
  <div class="masonry">
        <div class="brick">
        <a href="swiper-images/1_The_Search.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>The&nbsp;</span> <span class='datatitle-second'>Search</span> <br><br> Medium: Graphite on paper <br>
                                            Size: 11”x14”<br>
                                            Year: 2020 <br> <br>
                                            Self-Portrait. First Place Winner, Artist of Month (January 2021), Fine Arts League of Cupertino (FALC). ">
	          <img src="swiper-images/1_The_Search.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/2_Cub-Ital.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Cub</span> <span class='datatitle-second'>-Ital</span> <br><br> Medium: Graphite on paper <br>
                                            Size: 11”x14” <br>
                                            Year: 2020 <br><br>
                                            Cari & Frank. ">
	          <img src="swiper-images/2_Cub-Ital.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/3_Gus_Fring.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Gus&nbsp;</span> <span class='datatitle-second'>Fring</span> <br><br> Medium: White charcoal on black paper <br>
                                                    Size: 8”x10”<br>
                                                    Year: 2020 ">
	          <img src="swiper-images/3_Gus_Fring.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/4_Mike_Ehrmantraut.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Mike&nbsp;</span> <span class='datatitle-second'>Ehrmantraut</span> <br><br> Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020 ">
	          <img id="image-4-mas" src="swiper-images/4_Mike_Ehrmantraut.jpg">
        </a>
        </div>
        
        <div class="brick">
        <a href="swiper-images/6_Will_Graham.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Will&nbsp;</span> <span class='datatitle-second'>Graham</span> <br><br> Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020 ">
	          <img src="swiper-images/6_Will_Graham.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/7_Hannibal_Lecter.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Hannibal&nbsp;</span> <span class='datatitle-second'>Lecter</span> <br><br> Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020 ">
	          <img src="swiper-images/7_Hannibal_Lecter.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/8_Brandon_Stark.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Brandon&nbsp;</span> <span class='datatitle-second'>Stark</span> <br><br> Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2019 ">
	          <img src="swiper-images/8_Brandon_Stark.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/9_Sansa_Stark.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Sansa&nbsp;</span> <span class='datatitle-second'>Stark</span> <br><br> Medium: Graphite on paper ">
	          <img id="image-9-mas" src="swiper-images/9_Sansa_Stark.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/10_Jon_Snow.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Jon&nbsp;</span> <span class='datatitle-second'>Snow</span> <br><br> Medium: Graphite on paper  <br>
                                            Size: 8”x10”<br>
                                            Year: 2019 ">
	          <img src="swiper-images/10_Jon_Snow.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/11_Arya_Stark.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Arya&nbsp;</span> <span class='datatitle-second'>Stark</span> <br><br> Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2016 ">
	          <img src="swiper-images/11_Arya_Stark.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/12_Joe_Miller.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Joe&nbsp;</span> <span class='datatitle-second'>Miller</span> <br><br> Medium: White charcoal on black paper ">
	          <img src="swiper-images/12_Joe_Miller.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/13_The_Doctor.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>The&nbsp;</span> <span class='datatitle-second'>Doctor</span> <br><br> Medium: White charcoal on black paper ">
	          <img src="swiper-images/13_The_Doctor.jpg">
        </a>
        </div>
        <div class="brick">
        <a href="swiper-images/5_Whisper.jpg" data-lightbox="image-1" data-title="<span class='datatitle-first'>Whis&nbsp;</span> <span class='datatitle-second'>per</span> <br><br> Medium: Graphite on paper <br>
        Size: 11”x14”<br>
        Year: 2020 ">
	          <img src="swiper-images/5_Whisper.jpg">
        </a>
        </div>
      </div>
      </div>
  </div>







  
  <!-- Swiper JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js" integrity="sha512-+m6t3R87+6LdtYiCzRhC5+E0l4VQ9qIT1H9+t1wmHkMJvvUQNI5MKKb7b08WL4Kgp9K0IBgHDSLCRJk05cFUYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="galleryscript.js"></script>
  <script>

$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><br><br><br>Swipe</button>' // markup of an arrow button
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			
		}

    
	});



});



  </script>
 
 <script type="text/javascript">
 
function ShowSecond() {

  setTimeout(function(){
      $(".mfp-arrow").css("transition","5s");
      $(".mfp-arrow").css("opacity",0);				
    },1);
 

        
  }




  

 </script>



<footer class="foot">
  <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="https://www.instagram.com/auxesisart/" class="fa fa-instagram"></a>
<a href="#" class="fa fa-linkedin"></a>
</footer>
</body>



</html>
