<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humaidy Hasan</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Jost:wght@200;300;400;500;600;700;800;900&family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Box Icon Link -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Swipe Slider -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Style Links -->
    <link rel="stylesheet" href="./style.css?v=12">

</head>
<body>


    <!-- Nav Bar Start-->
    <header>

        <a href="./index.php" class="brand"><img src="./images/logo_img.png" alt=""></a>

        <ul class="navbar">
            <li><div id="close-icon"><i class='bx bx-x'></i></div></li>
            <li><a href="#home">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div id="menu-icon"><i class='bx bx-menu'></i></div>

    </header>
    <!-- Nav Bar End -->


    <!-- Home Section Start -->
    <section id="home" class="home">

        <h1 class="name">Humaidy Hasan</h1>
        <p class="title">Graphic Design, Visual Brand Identity, Logo, Packaging, Illustration Specialist.</p>

        <div class="button">
            <button>Scroll Projects</button>
            <button onclick="location.href='#about'">About Me</button>
        </div>


        <div class="social-icon">
            <div class="facebook-link"><i class='bx bxl-facebook'></i></div>
            <div class="linkend-link"><i class='bx bxl-linkedin'></i></div>
            <div class="instragram-link"><i class='bx bxl-instagram-alt' ></i></div>
        </div>


        <div class="hero">


            <div class="text-hero">

                <img class="clip-img" src="./images/Paper_clip.png" alt="">

            
                <h3>Welcome to my</h3>
                <h1>Creative World</h1>
                <p>Draw Your Imagination To The Reality</p>
            </div>


            <div class="img-hero">

                <div class="part-1">
                    <div><img  src="./images/short_project/kook.png" alt=""></div>
                    <div><img  src="./images/short_project/pocha.png" alt=""></div>
                    <div><img class="img-1" src="./images/short_project/Z letter.png" alt=""></div>
                </div>


                <div class="part-2">
                    <div><img class="img-2" src="./images/short_project/smoothie.png" alt=""></div>
                    <div><img class="img-3"  src="./images/short_project/Astro.png" alt=""></div>
                    <div><img class="img-1" src="./images/short_project/Pockebab.png" alt=""></div>
                </div>

            </div>

        </div>

    </section>
    <!-- Home Section End -->



    <!-- About Section Start -->
    <section id="about" class="about section">

        <div class="section-header">
            <p>My Intor</p>
            <h2>About Me</h2>
        </div>
        

        <div class="about-main">

            <div class="about-img">
                <img src="./images/profile.jpg" alt="">
            </div>

            <div class="about-details">
            
                <div class="about-box">

                    <div>
                        <i class='bx bx-award'></i>
                        <h6>Experience</h6>
                        <p>5 Years</p>
                    </div>

                    <div>
                        <i class='bx bx-briefcase-alt'></i>
                        <h6>Completed</h6>
                        <p>300+ Projects</p>
                    </div>

                    <div>
                        <i class='bx bx-support'></i>
                        <h6>Support</h6>
                        <p>Online 24/7</p>
                    </div>

                </div>


                <p class="my-info">Lorem ipsum dolor sit amet consectetur. Optio excepturi reprehenderit expedita. Repellat provident eveniet, quam sit laborum eos nulla tempora ex officia quaerat veniam corrupti non. Facere laboriosam voluptas debitis maiores nulla, libero possimus?</p>

                <button onclick="location.href='#contact'">Contact Me</button>
                <button>Scroll Project</button>

            </div>

        </div>

    </section>


    
    <!-- Service Section -->
    <section id="service" class="section">

        <div class="section-header sec-head">
            <p>My Service</p>
            <h2>What I Offer</h2>
        </div>


        <div class="main-service">

            <div class="service-item">
                <img src="./images/bannar_project/wall1.jpg" alt="">
                <div class="glass"><h3>Graphic Design</h3></div>
            </div>

            <div class="service-item">
                <img src="./images/bannar_project/wall2.jpg" alt="">
                <div class="glass"><h3>Product Design</h3></div>
            </div>


            <div class="service-item">
                <img src="./images/bannar_project/wall3.jpg" alt="">
                <div class="glass"><h3>Visual Brand Identity</h3></div>
            </div>

            <div class="service-item">
                <img src="./images/bannar_project/wall4.jpg" alt="">
                <div class="glass"><h3>Logo</h3></div>
            </div>

            <div class="service-item">
                <img src="./images/bannar_project/wall5.jpg" alt="">
                <div class="glass"><h3>Packaging</h3></div>
            </div>

            <div class="service-item">
                <img src="./images/bannar_project/wall6.jpg" alt="">
                <div class="glass"><h3>Illustration</h3></div>
            </div>

        </div>


    </section>
    <!-- Service Section End -->

    
    <!-- Testimonial Section Start -->
    <section class="testimonial section">

        <div class="section-header sec-head">
            <p>My Client's say</p>
            <h2>Testimonial</h2>
        </div>

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/profile.jpg" alt="">
                    <h4>Sara Cill</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus, recusandae repudiandae incidunt aperiam unde.</p>
                </div>


                <div class="swiper-slide">
                    <img src="./images/profile.jpg" alt="">
                    <h4>Sara Cill</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus, recusandae repudiandae incidunt aperiam unde.</p>
                </div>


                <div class="swiper-slide">
                    <img src="./images/profile.jpg" alt="">
                    <h4>Sara Cill</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus, recusandae repudiandae incidunt aperiam unde.</p>
                </div>


                <div class="swiper-slide">
                    <img src="./images/profile.jpg" alt="">
                    <h4>Sara Cill</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus, recusandae repudiandae incidunt aperiam unde.</p>
                </div>


                <div class="swiper-slide">
                    <img src="./images/profile.jpg" alt="">
                    <h4>Sara Cill</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus, recusandae repudiandae incidunt aperiam unde.</p>
                </div>


                <div class="swiper-slide">
                    <img src="./images/profile.jpg" alt="">
                    <h4>Sara Cill</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium necessitatibus, recusandae repudiandae incidunt aperiam unde.</p>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

        <button class="view-projects">Scroll Thrilling Projects</button>

    </section>
    <!-- Testimonial Section End -->



    <!-- Contact Section Start -->
    <section class="section" id="contact">

        <div class="section-header sec-head">
            <p>Get in Touch</p>
            <h2>Contact Me</h2>
        </div>


        <div class="contact-main">

            <div class="contact-item linkedin">
                <i class='bx bxl-linkedin'></i>
                <h4>Linkedin</h4>
                <p>linkedin.com/in/humaidy-hasan</p>
                <h5 class="contact-center">Write me  <i class='bx bx-right-arrow-alt'></i></h5>
            </div>


            <div class="contact-item whatsapp">
                <i class='bx bxl-whatsapp'></i>
                <h4>Whatsapp</h4>
                <p>+8801643729667</p>
                <h5 class="contact-center">Write me  <i class='bx bx-right-arrow-alt'></i></h5>
            </div>


            <div class="contact-item email">
                <i class='bx bx-envelope'></i>
                <h4>Email</h4>
                <p>humaidyhasan58@gmail.com</p>
                <h5 class="contact-center">Write me  <i class='bx bx-right-arrow-alt'></i></h5>
            </div>

        </div>

    </section>
    <!-- Contact Section end -->


    <!-- Footer Section Start -->
    <section class="footer">

        <h2>Humaidy Hasan</h2>
        <div class="footer-link">
            <li><a href="#home">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Service</a></li>
        </div>

        <div class="link-icon">
            <div class="facebook-link"><i class='bx bxl-facebook'></i></div>
            <div class="linkend-link"><i class='bx bxl-linkedin'></i></div>
            <div class="instragram-link"><i class='bx bxl-instagram-alt' ></i></div>
        </div>

        <p class="footer-tag">© Humaidy Hasan. All Right Reserved</p>

    </section>

    <!-- Footer Section End -->



    

    <!-- Java Script -->
    <script src="./script.js?v=3"></script>
    <!-- Screen Size -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Swipe Image Slider -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <!-- Initialize Swiper -->
    <script>


        var count = 0;
        $(window).resize(function() {

            if (document.documentElement.clientWidth < 1024 && document.documentElement.clientWidth > 500) {    
                count = 2;
                console.log(count);
            }else if(document.documentElement.clientWidth <= 500){
                count = 1;
                console.log(count);
            }else{
               count = 3;
               console.log(count);
            }

            // Swiper Start
            var swiper = new Swiper(".mySwiper", {
            slidesPerView: count,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            });
            // Swiper End

        }).resize()



        
    

    </script>
    
</body>
</html>