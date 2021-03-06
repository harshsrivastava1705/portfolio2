<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


  <link rel="stylesheet" href="index.css">

  <script>
    window.onscroll = function(ev) {
      var B = document.body; //IE 'quirks'
      var D = document.documentElement; //IE with doctype
      D = (D.clientHeight) ? D : B;

      if (D.scrollTop <= 300) {
        document.getElementById("navbar").style.backgroundColor = "rgba(223, 223, 223,0.1)";
        var p = document.getElementsByClassName("icon-bar");
        for (var i = 0; i < p.length; i++)
          p[i].style.backgroundColor = "black";
        var p = document.getElementsByClassName("navele");
        for (var i = 0; i < p.length; i++)
          p[i].style.color = "black";

      } else {
        document.getElementById("navbar").style.backgroundColor = "rgb(0, 153, 255)";
        var p = document.getElementsByClassName("icon-bar");
        for (var i = 0; i < p.length; i++)
          p[i].style.backgroundColor = "white";
        var p = document.getElementsByClassName("navele");
        for (var i = 0; i < p.length; i++)
          p[i].style.color = "white";
      }
    };
  </script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<?php

// Set the current working directory
$directory = getcwd() . "/certificates/";

// Initialize filecount variavle
$filecount = 0;

$files2 = glob($directory . "*");

if ($files2) {
  $filecount = count($files2);
}


?>



<body>

  <!-- NAVBAR -->

  <nav class="navbar" id="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <p class="navbar-brand navele" href="#">Harsh Srivastava</p>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item"><a href="index.php" class="navele">Home</a></li>
          <li class="nav-item"><a href="certifications.php" class="navele active">Certifications</a></li>
          <li class="nav-item"><a href="projects.php" class="navele ">Projects</a></li>
          <li class="nav-item"><a href="contact.php" class="navele ">Contact Me</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- NAVBAR ENDS HERE-->


  <a id="top"></a>
  <div id="intro">

    <img src="images/pfp2.jpg" alt="A picture of me" id="profile-img" />
    <h2 id="intro-name">Hey! Harsh Srivastava this side!</h2>
    <div id="wave-wrapper">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 330" class="wave">
        <path fill="#0099ff" fill-opacity="1" d="M0,0L80,42.7C160,85,320,171,480,181.3C640,192,800,128,960,117.3C1120,107,1280,149,1360,170.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
      </svg>
    </div>
  </div>
  <!-- INTRO ENDS HERE-->


  <div id="main">

    <?php

    for ($i = 1; $i <= $filecount / 2; $i++) {
      $path = "certificates/" . $i . ".txt";
      $myfile = fopen($path, "r");
      $link = fread($myfile, filesize("certificates/{$i}.txt"));
      fclose($myfile);
      echo "
    <div class=\"container-home\" data-aos=\"fade-up\">
    <img src=\"certificates/{$i}.jpg\" class=\"cert-img \" style=\"margin:1% 0 1% 0\"> <br>
    <a class=\"redirect\" href=\"{$link}\">Verify <i class=\"fas fa-external-link-square-alt\"></i></a>
    </div>
    
    ";
    }

    ?>





    <!--FOOTER STARTS HERE-->
    <div>
      <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h4 class="text-uppercase">About me</h4>

              <p>
                A 3rd year Computer Science student, specializing in Cyber Security, at SRMIST who is enthusiastic about
                web development and problem solving using various programming laguages.
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h4 class="text-uppercase">Work Experience</h4>

              <p>
                Currenlty a student; selected for summer internship (2022) at Fidelity Intl.
              </p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
        <br>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(90, 131, 245,0.1);">
          ?? 2021 Copyright: Harsh Srivastava

        </div>
        <!-- Copyright -->
      </footer>
    </div>
    <script>
      AOS.init();
    </script>
</body>

</html>