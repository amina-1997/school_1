<?php
    include('../header.php');
?>
<style>
    .background {
        background-image: url('../image/aboutb.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 400px;
        display: flex;
        align-items: flex-end;
    }
    .glory {
        background-color: rgba(28, 23, 23, 0.5);
        padding: 50px;
        font-size: 40px;
        margin-bottom: 0px;
    }
    .p02 {
        padding: 5% 20% 5% 20%;
        font-size: 20px;
    }
    .custom-img {
        position: absolute;
        top: -20px;
        right: -20px; /* Properly offsets the image to the left */
        width: auto;
        max-width: 95%;
        height: auto;
    }
    .b1 {
        color:#e74c3c ;
        border: none;
        padding: 10px 20px;
        font-size: 14px;
        border-radius: 4px;
        cursor: pointer;
    }

    .b1:hover {
        background-color:#e74c3c ;
        color:white;
    }

    

    .bg {
        background-color: #c0392b;
        background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.02) 25%, transparent 25%, 
        transparent 50%, rgba(0, 0, 0, 0.02) 50%, rgba(0, 0, 0, 0.02) 75%, transparent 75%,
        transparent);
        background-size: 10px 10px;
        padding: 20px; 
        margin-left:-5%;
        height:400px;
        width:40%;

    }
    .brd{
        border:8px solid rgba(236, 240, 241,0.5);

    }
    .slider {
      position: relative;
      width: 90%;
      overflow: hidden;
      height: 100%;

    }

    .slider h5 {
      position: absolute;
      width: 100%;
      text-align: center;
      opacity: 0;
      transform: translateY(100%);
      transition: all 0.5s ease-in-out;
      padding:4%;
    }

    .slider h5.active {
      opacity: 1;
      transform: translateY(0);
    }

    .slider h5.exit {
      opacity: 0;
      transform: translateY(-100%);
    }
img{
    object-fit:cover;
}
   
</style>

<div class="background">
    <p class="glory text-light">
        <b>Why Glory International Schools?</b><br>
        <b class="bg-danger" style="width: 70%; height: 5px; display: block;"></b>
    </p>
</div>

<div class="p02">
    <p>
        Ratione culpa assumenda harum aperiam veritatis at hic. Repellat fugit incidunt illo iusto eaque? Quos dolore tenetur magni officia vitae non omnis corporis maiores accusamus sapiente explicabo quod iste suscipit harum necessitatibus temporibus reiciendis nisi, ipsam eius? Qui consequuntur maxime nobis voluptates harum molestias veritatis sit accusantium autem.
    </p>
</div>

<div class="p3 text-center">
    <h1><b>Explore What Makes</b></h1>
    <h1><b>GLORY International Schools Extraordinary!</b></h1>
</div>

<!-- First Column -->
<div class="container-fluid mt-5 row">
    <div class="col-sm-5 mt-5 d-flex align-items-center justify-content-center position-relative" style="background-color:#e74c3c; height: 300px;">
        <img src="../image/a1.jpg" alt="" class="custom-img">
    </div>
    <div class="col-sm-5 mt-4 ms-5">
        <h1><b class="text-danger">Excellence</b></h1>
        <b class="bg-danger mb-3" style="width: 50%; height: 5px; display: block;"></b>
        <div style="text-align:justify;">
            <h5>
                Our students are accepted to and prepared to excel in the world’s best colleges and universities.
            </h5>
            <p class="moreText" style="display: none;">
                GLORY international students are admitted into the most competitive and highly ranked colleges and universities in the world. 
                With students outscoring schools across the globe in math, reading, and science according to the OECD Test for Schools (based on PISA), 
                as well as top SAT scores and National AP Scholars results, colleges take notice. In addition to top-notch test scores, 
                we also help students learn how to be good citizens and remain true to themselves.
            </p>
            <button class="toggleButton b1">Read More</button>
        </div>
    </div>
</div>

<!-- Second Column -->
<div class="container-fluid mt-5 row">
    <div class="col-sm-5 mt-5 d-flex align-items-center justify-content-center position-relative" style="background-color:#e74c3c; height: 300px;">
        <img src="../image/a2.jpg" alt="" class="custom-img">
    </div>
    <div class="col-sm-5 mt-4 ms-5">
        <h1><b class="text-danger">Innovation</b></h1>
        <b class="bg-danger mb-3" style="width: 50%; height: 5px; display: block;"></b>
        <div style="text-align:justify;">
            <h5>
                Empowering students to think critically and creatively through innovative methods.
            </h5>
            <p class="moreText" style="display: none;">
                At GLORY International Schools, we inspire students to innovate and approach challenges with a creative mindset. 
                Through state-of-the-art learning techniques and access to cutting-edge technology, our students explore problem-solving 
                beyond the ordinary. They learn the value of thinking outside the box while being rooted in their cultural identity.
            </p>
            <button class="toggleButton b1">Read More</button>
        </div>
    </div>
</div>

<!-- Third Column -->
<div class="container-fluid mt-5 row">
    <div class="col-sm-5 mt-5 d-flex align-items-center justify-content-center position-relative" style="background-color:#e74c3c; height: 300px;">
        <img src="../image/a3.jpg" alt="" class="custom-img">
    </div>
    <div class="col-sm-5 mt-4 ms-5">
        <h1><b class="text-danger">Community</b></h1>
        <b class="bg-danger mb-3" style="width: 50%; height: 5px; display: block;"></b>
        <div style="text-align:justify;">
            <h5>
                Building a sense of belonging through meaningful connections and collaborations.
            </h5>
            <p class="moreText" style="display: none;">
                We emphasize the importance of community values at GLORY International Schools. Our students grow up as part of a diverse, 
                inclusive, and respectful environment. Collaborating on projects, participating in events, and engaging in community services 
                help them become responsible global citizens.
            </p>
            <button class="toggleButton b1">Read More</button>
        </div>
    </div>
</div>

<!-- Fourth Column -->
<h1 class="text-center mt-5 mb-3"><b>Why Families Choose GLORY International School</b></h1>
<div class="row" style="height:px;">
    <div class="col-sm-6 ms-5">
        <img src="../image/ab2.jpg" alt="Background Image" style="width: 100%; height:500px;">
    </div>
    <!-- Text Slider -->
    <div class="col-sm-6 bg text-light p-5 mt-5 text-center">
    <div class="slider brd text-center py-5">
        <i class="fa-solid fa-quote-left" style="font-size:20px;"></i>
            <h5 class="active">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ad ut magnam, non fugit commodi.
           <br><br><p class="text-center">harris<br> <b>grade-9</b></p>
           
        </h5>
            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est similique aut rerum quam? Perspiciatis, illo!
           <br><br><p class="text-center">Lora<br><b>grade-5</b></p>

            </h5>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quidem autem repellat dolorum unde odio?
           <br><br><p class="text-center">katcheery<br> <b>grade-8</b></p>

            </h5>
         
     </div>
</div>


</div>
    


<?php
    include('../footer.php');
?>
<script>
    document.querySelectorAll(".toggleButton").forEach(function(button) {
        button.onclick = function () {
            const moreText = this.previousElementSibling;
            if (moreText.style.display === "none") {
                moreText.style.display = "block";
                this.innerText = "Read Less";
            } else {
                moreText.style.display = "none";
                this.innerText = "Read More";
            }
        };
    });

    const slides = document.querySelectorAll('.slider h5');
    let currentSlide = 0;

    function showNextSlide() {
      slides[currentSlide].classList.remove('active');
      slides[currentSlide].classList.add('exit');
      
      currentSlide = (currentSlide + 1) % slides.length;

      slides[currentSlide].classList.remove('exit');
      slides[currentSlide].classList.add('active');
    }

    setInterval(showNextSlide, 3000); 


</script>
