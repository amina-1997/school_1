<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glory School</title>
    <link rel="icon" type="image/x-icon" href="image/scl.png">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" 
          integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

<style>
 .first-nav{
        background: rgba(0, 0, 0, 0.5); 

}
.first-nav:hover {
    background: white;
}

.first-nav:hover .nav-link {
    color: black !important; 
}
.nav-link :hover{
    background: rgba(0, 0, 0, 0.5); 


}
p{
    text-align:justify;
}
.navbar-nav .nav-link {
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #f39c12;
        transform: scale(0.9); 
        text-decoration: underline; 
    }

</style>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar first-nav navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="image/scl.png" alt="Glory School Logo" width="60px" class="rounded-circle"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars text-dark"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="pages/about.php">About</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="pages/academic.php">Academics</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="#courses">Achievements</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="#contact">Find your school</a></li>
                <li class="nav-item"><a class="btn btn-danger fw-bold contact_button py-3 ms-2" href="#enroll">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Carousel slider -->
    <div id="schoolSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#schoolSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#schoolSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#schoolSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('image/b1.jpg');">
                <div class="carousel-caption">
                    <h1>The 2025 Rankings Are In: Glory Schools Secure Top Spots</h1>
                    <div class="border bg-danger" style="width:30%; height:5px; margin-bottom:20px;"></div>
                    <p>From #1 Best Private School, to Best High School for STEM, Glory Schools has once again secured its spot as one of the nation’s top, private K–12 institutions.</p>
                    <a href="#" class="btn btn-danger px-5">Contact Us</a>
                    <a href="#" class="btn btn-light px-5">Find School</a> 
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('image/b2.jpg');">
                <div class="carousel-caption">
                    <h1>Bright Futures Start Here</h1>
                    <div class="border bg-danger" style="width:30%; height:5px; margin-bottom:20px;"></div>
                    <p>Empowering students to reach their full potential.</p>
                    <a href="#" class="btn btn-danger px-5">Contact Us</a>
                    <a href="#" class="btn btn-light px-5">Find School</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('image/b3.jpg');">
                <div class="carousel-caption">
                    <h1>Global Learning Dynamic Approach.</h1>
                    <div class="border bg-danger" style="width:30%; height:5px; margin-bottom:20px;"></div>
                    <p>World-acclaimed program. Expert Teachers. Unparalleled outcomes.</p>
                    <a href="#" class="btn btn-danger px-5">Contact Us</a>
                    <a href="#" class="btn btn-light px-5">Find School</a>
                </div>
            </div>
        </div>
       
    </div>
<!-----------para-1--------------->
    <div class="container-fluid mt-5 row">
    <div class="col-sm-5 bg-dark mt-5">
        <img src="image/p1.jpg" alt="" class="img-fluid ps-2" style="margin-top: -20px; padding-bottom: 20px; margin-left: 12px;">
    </div>

    <div class="col-sm-5 mt-4 ms-5">
        <h2 class="text-danger">Top-Tier K-12 Schools</h2>
        <p>
            We are a network of top-ranked private schools across America, dedicated to academic excellence. Our internationally acclaimed curriculum, combined with the expertise of our Subject Expert Teachers, ignites the intellectual curiosity of our students and unlocks their full potential.
        </p>
    </div>

    <div class="row bg-dark mt-5 pb-5 m-auto">
        <h3 class="text-center text-light py-3"><b>Outstanding Student Achievements</b></h3>
       
        <div class="col-sm-4">
            <div class="p02 size text-center" style="background:#c23616;">
           <br><div class="border bg-light m-auto" style="width:80%; height:3px;"></div>
           <i class="fa-solid fa-chevron-up fa-3x" style="margin-top:-25px; font-size:80px;"></i>
           <br><br><h1><b class="text-light text-center">95%</b></h1>
           <img src="image/note.webp" alt="" width="50px" class="mt-5">
           <p class="mt-5 text-light text-light text-center fs-5 px-3">Average SAT score out of 1600 for Class of 2024</p>
          <div class="border bg-light m-auto" style="width:80%; height:3px;"></div>
        
        </div>
        </div>
        <div class="col-sm-4">
            <div class="p02 size text-center" style="background:white;">
           <br><div class="border bg-dark m-auto" style="width:80%; height:3px;"></div>
           <i class="fa-solid fa-chevron-up fa-3x" style="margin-top:-25px; font-size:80px;"></i>
           <br><br><h1><b class="text-dark text-center">1240</b></h1>
           <img src="image/note1.png" alt="" width="50px" class="mt-5">
           <p class="mt-5 text-light text-dark text-center fs-5 px-3">Average SAT score out of 1600 for Class of 2024</p>
          <div class="border bg-dark m-auto" style="width:80%; height:3px;"></div>
        
        </div>
        </div>

        <div class="col-sm-4">
            <div class="p02 size text-center" style="background:#c23616;">
           <br><div class="border bg-light m-auto" style="width:80%; height:3px;"></div>
           <i class="fa-solid fa-chevron-up fa-3x text-light" style="margin-top:-25px; font-size:80px;"></i>
           <br><br><h1><b class="text-light text-center">65%</b></h1>
           <i class="fa-solid fa-graduation-cap fa-3x mt-5 text-light"></i>
           <p class="mt-5 text-light text-light text-center fs-5 px-3">Glory School students were admitted to a top 25 school*</p>
          <div class="border bg-light m-auto" style="width:80%; height:3px;"></div>
           <div>
           </div>
        </div>
        </div>
    </div>
</div>
<!-----------para-2--------------->


<div class="bg-color container-fluid pt-5 pb-3">
  <h1 class="text-center"><b class="text-danger">Explore Our Programs</b></h1><br>
  
    <div class="row">
        <!-- Program 1 -->
        <div class="col-sm-4">
            <div class="position-relative">
                <img src="image/p2.jpg" alt="Primary Program" class="img-fluid img1">
                <div class="phide">
                    <h5><b>Primary Program</b></h5>
                    <div class="bg-danger"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque assumenda esse explicabo itaque perspiciatis sunt quisquam, magnam atque, recusandae quasi qui rerum!</p>
                </div>
            </div>
        </div>
        <!-- Program 2 -->
        <div class="col-sm-4">
            <div class="position-relative">
                <img src="image/p3.jpg" alt="Middle School Program" class="img-fluid img1">
                <div class="phide">
                    <h5><b>Middle School Program</b></h5>
                    <div class="bg-danger"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque assumenda esse explicabo itaque perspiciatis sunt quisquam, magnam atque, recusandae quasi qui rerum!</p>
                </div>
            </div>
        </div>
        <!-- Program 3 -->
        <div class="col-sm-4">
            <div class="position-relative">
                <img src="image/p4.jpg" alt="High School Program" class="img-fluid img1">
                <div class="phide">
                    <h5><b>High School Program</b></h5>
                    <div class="bg-danger"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque assumenda esse explicabo itaque perspiciatis sunt quisquam, magnam atque, recusandae quasi qui rerum!</p>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    </div>
    <div class="bg-color2">
</div>


<!---------------para---3---------------->

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-sm-3">
            <img src="image/p5.jpg" alt="" width="100%">
        </div>
        <div class="col-sm-9 bg-color text-center" style="margin-left:-10px;"><br>
            <h5><b>Interested in learning more about Glory Schools?</b></h5>
            <p class="text-center">Complete our inquiry form and we’ll be in touch.</p>
            <a class="btn btn-danger fw-bold contact_button px-5 py-3" style="font-size:20px;" href="#enroll">Contact us</a>
        </div>
     </div>
</div>

<?php
include('footer.php');
?>