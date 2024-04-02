<?php 
include_once("./assetc/header.php");
?>
    <body>
            <nav class="navigation login-navigation" role="navigation">
                <div class="logo">
                    <img src="img/360_F_321672498_3Hpfgcx7bAlKQrze4Pr5IdstOXwvvV5o.jpg" alt="logo">
                </div>
                <ul class="left-navigation">
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/about.php">About Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul>
                <div class="right-navigation">
                    <a href="login.php" class="login-link">Login</a>
                </div>

                
            </nav>
            <div class="mobile-navigation">
                <i class="fa-solid fa-bars"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="login.php" class="login-link">Login</a></li>
                </ul>
            </div>

        <h2 style="text-align:center">Slideshow Gallery</h2>

        <div class="container">
        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="img/bence-balla-schottner-vFwjD8JLP4M-unsplash.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="img/hal-gatewood-Vfml26Iy4mI-unsplash.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="img/inside-weather-dbH_vy7vICE-unsplash.jpg" style="width:100%">
        </div>
            
        <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="img/paul-weaver-nWidMEQsnAQ-unsplash.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="img/phillip-goldsberry-fZuleEfeA1Q-unsplash.jpg" style="width:100%">
        </div>
            
        <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="img/virender-singh-hE0nmTffKtM-unsplash.jpg" style="width:100%">
        </div>
            
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="row">
            <div class="column">
            <img class="demo cursor" src="img/bence-balla-schottner-vFwjD8JLP4M-unsplash.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
            </div>
            <div class="column">
            <img class="demo cursor" src="img/hal-gatewood-Vfml26Iy4mI-unsplash.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column">
            <img class="demo cursor" src="img/inside-weather-dbH_vy7vICE-unsplash.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
            <img class="demo cursor" src="img/paul-weaver-nWidMEQsnAQ-unsplash.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
            <div class="column">
            <img class="demo cursor" src="img/phillip-goldsberry-fZuleEfeA1Q-unsplash.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
            </div>    
            <div class="column">
            <img class="demo cursor" src="img/virender-singh-hE0nmTffKtM-unsplash.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
            </div>
        </div>

        <?php 
            include_once("./assetc/footer.php");
        ?>
        
        <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
    
    </body>
</html>
