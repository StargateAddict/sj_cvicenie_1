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
            <a href="login.html" class="login-link">Login</a>
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
          
    <div class="login-container">
        <div class="left-login-container">
            <bg-image src="img/inside-weather-dbH_vy7vICE-unsplash.jpg"></bg-image>
        </div>
        <div class="right-login-container">
            <form>
                <h2 class="text-center">Login to your account</h2>
                <label for="email">Email:</label><br />
                <input type="email" placeholder="Your email" id="email" required><br />
                <label for="password">Pssword:</label><br />
                <input type="password" placeholder="Your password" id="password" required><br />
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

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