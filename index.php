<?php 
include_once("./assetc/header.php");
?>
    <body>
        <!--vonkajšia navigácia-->
        <div class="outer-navigation">
            <div class="nav-content">
                <nav class="navigation" role="navigation">
                    <div class="logo">
                        <img src="img/360_F_321672498_3Hpfgcx7bAlKQrze4Pr5IdstOXwvvV5o.jpg" alt="logo">
                    </div>
                    <ul class="left-navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                    <div class="right-navigation">
                        <a href="login.php" class="login-link">Login</a>
                    </div>
                </nav>
                <div class="main-title-container">
                    <h1 class="main_title">The best sofas on the market.</h1>
                    <button>Explore</button>
                </div>
                <!--arrov down-->
                <div>
                    <i class="fa fa-solid fa-angle-down arrow-down-navigation" id="scroll-icon"></i>
                </div>
                <div class="mobile-navigation">
                    <i class="fa-solid fa-bars"></i>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="login.php" class="login-link">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <main>
            <div class="sofa-row">
                <div class="img-container">
                    <img src="img/phillip-goldsberry-fZuleEfeA1Q-unsplash.jpg" alt="sofa">
                </div>
                <div class="text-container">
                    <h2>Comfort wherever you are</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Eum distinctio labore ea exercitationem nesciunt, impedit, magnam quos quis officia eveniet eligendi animi quam aut commodi deserunt earum repellendus.
                        Iusto, possimus.
                    </p>
                </div>               
            </div>
            <div class="sofa-row">
                <div class="text-container">
                    <h2>Comfort wherever you are</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Eum distinctio labore ea exercitationem nesciunt, impedit, magnam quos quis officia eveniet eligendi animi quam aut commodi deserunt earum repellendus.
                        Iusto, possimus.
                    </p>
                </div>
                <div class="img-container">
                    <img src="img/bence-balla-schottner-vFwjD8JLP4M-unsplash.jpg" alt="sofa">
                </div>               
            </div>
            <div class="our-mission">
                <h2 class="text-center">Our Mission</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit nemo corporis accusantium veniam numquam consequuntur eveniet, reiciendis dolorum mollitia nesciunt dolor voluptas voluptate, obcaecati placeat, molestias culpa repudiandae voluptatibus ullam.
                </p>
                <button>Learn More</button>
            </div>
            <div class="contact-form" id="contact">
                <form >
                    <h2>Contact Us</h2>
                    <label for="name">Your name:</label>
                    <input type="text" placeholder="Your name" id="name" required> <br />
                    <label for="email">Your Email:</label>
                    <input type="text" placeholder="Your Email" id="email" required> <br />
                    <label for="message">Your message</label><br />
                    <textarea  id="message" rows="8"></textarea>
                    <button type="submit">Send</button>
                </form>
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