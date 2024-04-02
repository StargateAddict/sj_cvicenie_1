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
        <div class="mobile-navigation about-us-mbn">
            <i class="fa-solid fa-bars"></i>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="login.php" class="login-link">Login</a></li>
            </ul>
        </div>
        <main>
            <h1 class="text-center">About us</h1>
            <p class="text-center" style="max-width: 1000px;margin: 0 auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quam quia, libero, voluptas impedit aliquid consequatur sapiente amet consectetur, tempora corporis! 
                Corrupti sunt culpa dolores praesentium repellat iusto nesciunt necessitatibus?
            </p>
            <div class="cards-container">
                <div class="card">
                    <img src="img/RDA.jpg" alt="RDA">
                    <h2>Richard Dean Anderson</h2>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="card">
                    <img src="img/Amanda.jpg" alt="Amanda">
                    <h2>Amanda Tapping</h2>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="card">
                    <img src="img/Chris.jpg" alt="Chris">
                    <h2>Christopher Judge</h2>
                    <p>Lorem ipsum.</p>
                </div>
                <div class="card">
                    <img src="img/Michael.jpg" alt="Michael">
                    <h2>Michael Shanks</h2>
                    <p>Lorem ipsum.</p>
                </div>
            </div>
        </main>

        <?php
       include_once("./assetc/footer.php")
       ?>
        
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer"
        ></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="js/script.js"></script>
    </body>
</html>