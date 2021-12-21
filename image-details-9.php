<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>GALLERY</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8ff68c69b1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="swiper.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Demo styles -->
  <style>
    body {
      background: #0000;
      font-family:  'Playfair Display', serif,  Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
      padding-top: 200px;
      padding-bottom: 50px;
    }



    .swiper-slide {
      background-position: center;
      background-size: cover;
      width:50vh;
      height: 50vh;

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


  
  <div class="middle-row photo-details-con-box">
    <div id="picbox-2">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/1_The_Search.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">The  <span>Search</span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
                                            Size: 11”x14”<br>
                                            Year: 2020 <br> <br>
                                            Self-Portrait. First Place Winner, Artist of Month (January 2021), Fine Arts League of Cupertino (FALC). </div>
        </div>
    </div>

    <div id="picbox-3">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/2_Cub-Ital.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Cub<span>-Ital</span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
                                            Size: 11”x14” <br>
                                            Year: 2020 <br><br>
                                            Cari & Frank.</div>
        </div>
    </div>

    <div id="picbox-4">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/3_Gus_Fring.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Gus <span>Fring</span></div>
            <div class="picG-description">Medium: White charcoal on black paper <br>
                                                    Size: 8”x10”<br>
                                                    Year: 2020</div>
        </div>
    </div>

    <div id="picbox-5">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/4_Mike_Ehrmantraut.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Mike  <span>Ehrmantraut</span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020<br></div>
        </div>
    </div>

    <div id="picbox-6">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/5_Whisper.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Whis<span>per</span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
Size: 11”x14”<br>
Year: 2020<br><br></div>
        </div>
    </div>

    <div id="picbox-7">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/6_Will_Graham.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Will  <span>Graham</span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020<br></div>
        </div>
    </div>

    <div id="picbox-8">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/7_Hannibal_Lecter.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Hannibal  <span>Lecter </span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2020<br></div>
        </div>
    </div>

    <div id="picbox-9">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/8_Brandon_Stark.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Brandon  <span>Stark</span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2019<br></div>
        </div>
    </div>

    <div id="picbox-1">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/9_Sansa_Stark.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Sansa  <span>Stark</span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
Size: 8”x10”<br>
Year: 2019<br></div>
        </div>
    </div>

    <div id="picbox-10">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/10_Jon_Snow.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Jon  <span>Snow</span></div>
            <div class="picG-description">Medium: Graphite on paper  <br>
                                            Size: 8”x10”<br>
                                            Year: 2019<br></div>
        </div>
    </div>

    <div id="picbox-11">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/11_Arya_Stark.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Arya  <span>Stark</span></div>
            <div class="picG-description">Medium: Graphite on paper <br>
                                            Size: 8”x10”<br>
                                            Year: 2016<br></div>
        </div>
    </div>

    <div id="picbox-12">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/12_Joe_Miller.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">Joe <span>Miller</span></div>
            <div class="picG-description">Medium: White charcoal on black paper <br>
Size: 12”x12”<br>
Year: 2017<br></div>
        </div>
    </div>

    <div id="picbox-13">
        <div class="picContainer">
        
            <div id="image1" class="img">
                <img src="swiper-images/13_The_Doctor.jpg" />
            </div>
            <div class="left" onclick="left()"></div>
            <div class="right" onclick="right()"></div>
            
        </div>
        <div class="picG-details-box">
            
            <div class="picG-title">The   <span>Doctor</span></div>
            <div class="picG-description">Medium: White charcoal on black paper <br>
Size: 12”x12”<br>
Year: 2014<br><br>
The 10th Doctor, autographed by David Tennant.</div>
        </div>
    </div>

    
  </div>
  

  
  
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });

    // image details

    let i = 0;
    let j = 0;
    let box1 = document.getElementById("picbox-1");
    let box2 = document.getElementById("picbox-2");
    let box3 = document.getElementById("picbox-3");
    let box4 = document.getElementById("picbox-4");
    let box5 = document.getElementById("picbox-5");
    let box6 = document.getElementById("picbox-6");
    let box7 = document.getElementById("picbox-7");
    let box8 = document.getElementById("picbox-8");
    let box9 = document.getElementById("picbox-9");
    let box10 = document.getElementById("picbox-10");
    let box11 = document.getElementById("picbox-11");
    let box12 = document.getElementById("picbox-12");
    let box13 = document.getElementById("picbox-13");


    document.addEventListener("keydown", (e) => {
        if (e.keyCode == 37) {
            right();
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.keyCode == 39 ) {
            right();
        }
    });

    box1.style.opacity = 1;
    box2.style.opacity = 0;
    box3.style.opacity = 0;
    box4.style.opacity = 0;
    box5.style.opacity = 0;
    box6.style.opacity = 0;
    box7.style.opacity = 0;
    box8.style.opacity = 0;
    box9.style.opacity = 0;
    box10.style.opacity = 0;
    box11.style.opacity = 0;
    box12.style.opacity = 0;
    box13.style.opacity = 0;

    function right() {
        if (i == 0) {
            box1.style.opacity = 0;
            box2.style.opacity = 1;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=1;
        }
        else if (i == 1) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 1;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=2;
        }
        else if (i == 2) {  
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 1;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=3;
        }
        else if (i == 3) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 1;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=4;
        }
        else if (i == 4) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 1;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=5;
        }
        else if (i == 5) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 1;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=6;
        }else if (i == 6) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 1;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=7;
        }else if (i == 7) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 1;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=8;
        }else if (i == 8) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 1;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=9;
        }
        else if (i == 9) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 1;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i++;
            j=10;
        }
        else if (i == 10) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 1;
            box13.style.opacity = 0;
            i++;
            j=11;
        }
        else if (i == 11) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 1;
            i++;
            j=12;
        }
        else if (i == 12) {
            box1.style.opacity = 1;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=0;
            j=0;
        }
        
    }

    function left() {
        if (j == 0) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 1;
            i=12;
            j=12;
        }
        else if (j == 1) {
            box1.style.opacity = 1;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=0;
            j=0;
        }
        else if (j == 2) {
            box1.style.opacity = 0;
            box2.style.opacity = 1;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=1;
            j=1;
        }
        else if (j == 3) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 1;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=2;
            j=2;
        }
        else if (j == 4) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 1;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=3;
            j=3;
        }
        else if (j == 5) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 1;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=4;
            j=4;
        }else if (j == 6) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 1;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=5;
            j=5;
        }else if (j == 7) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 1;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=6;
            j=6;
        }else if (j == 8) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 1;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=7;
            j=7;
        }
        else if (j == 9) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 1;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=8;
            j=8;
        }
        else if (j == 10) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 1;
            box11.style.opacity = 0;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=9;
            j=9;
        }
        else if (j == 11) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 1;
            box12.style.opacity = 0;
            box13.style.opacity = 0;
            i=10;
            j=10;
        }
        else if (j == 12) {
            box1.style.opacity = 0;
            box2.style.opacity = 0;
            box3.style.opacity = 0;
            box4.style.opacity = 0;
            box5.style.opacity = 0;
            box6.style.opacity = 0;
            box7.style.opacity = 0;
            box8.style.opacity = 0;
            box9.style.opacity = 0;
            box10.style.opacity = 0;
            box11.style.opacity = 0;
            box12.style.opacity = 1;
            box13.style.opacity = 0;
            i=11;
            j=11;
        }
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


