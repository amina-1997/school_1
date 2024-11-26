<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glory School</title>
    <link rel="icon" type="image/x-icon" href="image/gide School.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" 
          integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

<style>
    .navbar{
        background: rgba(0, 0, 0, 0.5); 

}
.navbar:hover {
    background: white;
}

.navbar:hover .nav-link {
    color: black !important; 
}
.nav-link :hover{
    background: rgba(0, 0, 0, 0.5); 


}


</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="image/gide School.png" alt="Glory School Logo" width="60px" class="rounded-circle"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon ms-5"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="#services">Academics</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="#courses">Achievements</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="#contact">Find your school</a></li>
                    <li class="nav-item"><a class="btn btn-danger fw-bold contact_button py-3 ms-2" href="#enroll">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
