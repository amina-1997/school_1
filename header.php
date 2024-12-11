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
        background: black; 
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
        <a class="navbar-brand" href="index.php"><img src="image/scl.png" alt="Glory School Logo" width="60px" class="rounded-circle"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars text-dark"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="academic.php">Academics</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="#courses">Achievements</a></li>
                <li class="nav-item"><a class="nav-link fw-bold text-light py-3" href="#contact">Find your school</a></li>
                <li class="nav-item"><a class="btn btn-danger fw-bold contact_button py-3 ms-2" href="#enroll">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>
