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
   window.onscroll = function(ev)
{
	var B= document.body; //IE 'quirks'
        var D= document.documentElement; //IE with doctype
        D= (D.clientHeight)? D: B;
	
	if (D.scrollTop <= 300)
		{
			document.getElementById("navbar").style.backgroundColor="rgba(223, 223, 223,0.1)";
            var p=document.getElementsByClassName("navele");
            for(var i=0;i<p.length;i++)
            p[i].style.color="black";

		}
        else
        {
            document.getElementById("navbar").style.backgroundColor="rgb(0, 153, 255)";
            var p=document.getElementsByClassName("navele");
            for(var i=0;i<p.length;i++)
            p[i].style.color="white";
        }        
};
</script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>


<body >

<!-- NAVBAR -->

<nav class="navbar navbar" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <p class="navbar-brand navele" href="#">Harsh Srivastava</p>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="#" class="navele active">Home</a></li>
      <li ><a href="certifications.php" class="navele">Certifications</a></li>
      <li ><a href="projects.php" class="navele">Projects</a></li>
      <li ><a href="contact.php" class="navele">Contact Me</a></li>
    </ul>
  </div>
</nav>

<!-- NAVBAR ENDS HERE-->


<a id="top"></a>
 <div id="intro">
        
    <img src="images/pfp2.jpg" alt="A picture of me" id="profile-img"/>
    <h2 id="intro-name">Hey! Harsh Srivastava this side!</h2>
    <div id="wave-wrapper">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 330" class="wave">
    <path fill="#0099ff" fill-opacity="1" d="M0,0L80,42.7C160,85,320,171,480,181.3C640,192,800,128,960,117.3C1120,107,1280,149,1360,170.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    </div>
</div>
<!-- INTRO ENDS HERE-->

<div id="main">



<div id="certifications"  class="container-home" data-aos=\"fade-up\">>
<h2>My cerifications</h2>
<br>
<div class="container">

    <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
    <div class="card-body"> 
    <img class="card-img-top" src="certificates/1.jpg" alt="Card image cap">
    </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
    <div class="card-body"> 
    <img class="card-img-top" src="certificates/2.jpg" alt="Card image cap">
    </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
    <div class="card-body"> 
    <img class="card-img-top" src="certificates/3.jpg" alt="Card image cap">
    </div>
    </div>
    </div>

</div>
<br>

<a href="certifications.php" class="redirect">View all <i class="fas fa-external-link-square-alt"></i> </a>

</div>



<!--CERTIFICATIONS ENDS HERE-->




<!--LANGUAGE STACK STARTS HERE-->

<div id="languages"  class="container-home" data-aos=\"fade-up\">>
<h2>My Language Stack</h2>
<br>
<div class="container" style="align-items:center;">

<img src="https://img.icons8.com/color/144/000000/css3.png"/>
    <img src="https://img.icons8.com/color/144/000000/javascript--v1.png"/>

        <img src="https://img.icons8.com/color/144/000000/java-coffee-cup-logo--v1.png"/>
        <img src="https://img.icons8.com/officexs/150/000000/php-logo.png"/>
        <img src="https://img.icons8.com/color/144/000000/python--v1.png"/>
        
        <img src="https://img.icons8.com/color/144/000000/html-5--v2.png"/>
<img src="https://img.icons8.com/color/144/000000/mongodb.png" />
<img src="https://img.icons8.com/color/144/000000/bootstrap.png"/>
<img src="https://img.icons8.com/color/144/000000/c-plus-plus-logo.png"/>
<img src="https://img.icons8.com/ios-filled/100/000000/c.png"/>
</div>

</div>















<!--PROJECTS START HERE-->

<div id="projects" class="container-home" data-aos=\"fade-up\">>
<h2>My Projects</h2>
<br>
<div class="container">

    <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
    <div class="card-body"> 
    <img class="card-img-top" src="projects/1.png" alt="Card image cap">
    <div class="card-body-text"> 
    
    <h4 class="card-title"><a href="https://panchi-ws.herokuapp.com/home.php">Panchi</a></h5>
    <p class="card-text">A full-stack complain registering-cum-emergency assistance app developed particularly for women's safety.</p>
    </div>
    </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
    <div class="card-body"> 
    <img class="card-img-top" src="projects/2.png" alt="Card image cap">
    <div class="card-body-text"> 
    
    <h4 class="card-title"><a href="http://sahar-pos.rf.gd/?i=1">Sahar</a></h5>
    <p class="card-text">A full-stack user-friendly billing and inventory management web application.</p>
    </div>
    </div>
    </div>
    </div>

    <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
    <div class="card-body"> 
    <img class="card-img-top" src="projects/3.png" alt="Card image cap">
    <div class="card-body-text"> 
    
    <h4 class="card-title"><a href="https://harshsrivastava.netlify.app/">Portfolio</a></h5>
    <p class="card-text">A personal portfolio website, much like this one.</p>
    </div>
    </div>
    </div>
    </div>
    

</div>
<br>
<a href="projects.php" class="redirect">View all <i class="fas fa-external-link-square-alt"></i> </a>

</div>
<br>

<!--PROJECTS END HERE-->

</div>


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
    © 2021 Copyright: Harsh Srivastava
    
  </div>
  <!-- Copyright -->
</footer>


</body>
</html>
