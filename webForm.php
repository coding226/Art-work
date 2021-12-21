

<?php include("form_process.php"); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8ff68c69b1.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
    <title>Contact Us</title>
</head>
<body>

<header class="header">
    <a href="" class="logo"><img src="images/AuxesisArt_logo.png" width="150" alt=""></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="index.html">HOME</a></li>
      <li><a href="swiper.html">GALLERY</a></li>
      <li><a href="#careers">MY BIO</a></li>
      <li><a href="webForm.php">CONTACT</a></li>
    </ul>
  </header>


    <div class="container">
        <h1 class="brand"><span>Get</span>  in Touch</h1>
            <div class="wrapper">
        <!-- <div class="company-info">
            <h1><span>Get</span> in Touch</h1>
        </div> -->
        <div class="contact">
            <!-- <h1>Get in Touch</h1> -->
            <form action= "<?=$_SERVER['PHP_SELF']; ?>" method="POST">
                <p>
                    <label for="">First Name*</label>
                    <input type="text" name="first_name" value="<?= $first_name ?>" tabindex="1"  autofocus>
                    <span class="error"><?= $first_name_error ?></span>
                </p>
                <p>
                    <label for="">Last Name*</label>
                    <input type="text" name="last_name" value="<?= $last_name ?>" tabindex="2"  >
                    <span class="error"><?= $last_name_error ?></span>
                </p>
                <p>
                    <label for="">Email*</label>
                    <input type="text" name="email" value="<?= $email ?>" tabindex="3"  >
                    <span class="error"><?= $email_error ?></span>
                </p>
                <p>
                    <label for="">Phone Number*</label>
                    <input type="text" name="phone" value="<?= $phone ?>" tabindex="4"  >
                    <span class="error"><?= $phone_error ?></span>
                </p>
                <p class="full">
                    <label for="">Message*</label>
                    <textarea name="message" value="<?= $message ?>" rows ='5' type="text" tabindex="5"  ></textarea>
                    
                </p>
                <p class="full">
                    <button>SEND</button>
                </p>
                <div class="success"><?= $success ?></div>
            </form>
        </div>
    </div>
    <footer class="foot">
        <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      
      <a href="https://www.instagram.com/auxesisart/" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-linkedin"></a>
    </footer>
    </div>

    
    <!-- <script>
    let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
    
    mainNav.classList.toggle('active');
});
</script> -->
</body>
</html>