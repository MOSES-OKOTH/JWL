<!DOCTYPE html>
<html lang="en">
<?php
    $page_name = "home";
    $page_title = "Home | JWL Youth Ministry Kenya Chapter";

    include "./components/head.php";
?>
<body onload="removePreloader()">
    <?php
        include "./components/preloader.php";
        include "./components/header.php";
    ?>

    <!-- HERO SECTION -->
    <section class="home-hero-container" id="home">
        <div class="home-hero">
            <h2>
                <span>United by Christ</span>
                <span>Transformed by His Love</span>
            </h2>

            <div class="hero-btns">
                <a href="#about-us">Explore More <i class="fa-solid fa-chevron-down"></i></a>
            </div>
        </div>
    </section>


    <!-- ABOUT US SECTION -->
        <section class="about-us-container" id="about-us">
        <div class="about-us">
            <div class="who-we-are">
                <h2>
                    WHO WE ARE
                </h2>

                <p>
                    <span>Jol Wo Lieec</span> (JWL) Youth Ministry is a vibrant, Christ-centered movement within the Episcopal Church of South Sudan (ECSS). Our name, Jel Wo Lieec, translates to "God, Look Upon Us," a prayerful declaration that reflects our complete dependence on God's grace and guidance in all we do.
                </p>
            </div>

            <div class="foundation-purpose">
                <div>
                    <h2>Our Foundation</h2>

                    <p>
                        Rooted in a rich history of faith and perseverance, our ministry traces its origins to the early missionary work of Archibald Shaw in Malek, Bor, beginning in 1906. The spiritual revival of the 1970s galvanized young Dinka Christians to organize a structured evangelistic movement, which formally adopted the name Jel Wo Lieec in 1989. This legacy of dedication and resilience continues to inspire our mission today.
                    </p>
                </div>

                <div>
                    <h2>Our Purpose</h2>

                    <p>
                        We are dedicated to raising a generation of young people who are deeply rooted in Holy Scripture, spiritually mature, and equipped to live out their faith. Guided by our motto, "Spread the Gospel," we exist to evangelize, disciple, and empower youth within the ECSS to become faithful leaders and active participants in the growth of the Church and society.
                    </p>
                </div>
            </div>

            <div class="foundation-purpose">
                <div>
                    <h2>Our Vision</h2>

                    <p>
                        To raise a Christ-centred generation of young people rooted in Holy Scripture, spiritually mature, morally upright, united in faith, and equipped to proclaim and live the Gospel of Jesus Christ for the glory of God.
                    </p>
                </div>

                <div>
                    <h2>Our Mission</h2>

                    <p>
                        To evangelize, disciple, and equip young people within the ECSS to live Christ-centred lives, uphold Biblical truth, develop Godly leadership, and participate faithfully in the growth of the Church and society.
                    </p>
                </div>
            </div>


            <div class="learn-more">
                <a href='<?php if($page_name="home"){ echo "./about-us/"; } else{ echo "../about-us/"; } ?>'>Learn More</a>

                <i class="fa-solid fa-chevron-down" id="scroll-down"></i>
            </div>
        </div>
    </section>



    <!-- CONTACTS SECTION -->
    <section class="contact-us-container">
        <div class="contact-us">
            <div class="contacts-socials">
                <h2>CONNECT WITH US</h2>

                <h5>
                    Join us in our mission to empower the next generation! Whether you want to learn more about our programs, partner with us, or support our efforts, we are here to connect with you. Your involvement makes a difference.
                </h5>

                <a href=""><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="https://wa.me/254798020310" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                <a href="tel:+254792913312" target="_blank"><i class="fa-solid fa-phone"></i> Call Us</a>
                <a href=""><i class="fa-brands fa-x-twitter"></i> X | Twitter</a>
                <a href=""><i class="fa-brands fa-instagram"></i> Instagram</a>
                <a href=""><i class="fa-brands fa-tiktok"></i> TikTok</a>
                <a href=""><i class="fa-brands fa-youtube"></i> YouTube</a>
                <a href="mailto:jwlkenyachapter@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i> Mail Us</a>
            </div>

            <div class="contact-form">
                <h2>SEND US A DIRECT MESSAGE</h2>

                <h5>
                    We would like to hear from you. Please send us a direct message and we will reach back to you as soon as possible.
                </h5>

                <div class="form-data">
                    <div>
                        <p>First Name</p>
                        <input type="text" placeholder="First Name">
                    </div>

                    <div>
                        <p>Last Name</p>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-data">
                    <div>
                        <p>Email</p>
                        <input type="text" placeholder="Email">
                    </div>

                    <div>
                        <p>Phone Number</p>
                        <input type="text" placeholder="+2547*********">
                    </div>
                </div>

                <div class="form-others">
                    <p>Subject</p>
                    <input type="text" placeholder="Subject">
                </div>

                <div class="form-others message">
                    <p>Message</p>
                    <textarea type="text" placeholder="Your message to us" ></textarea>
                </div>

                <button id="send-message">Send Message</button>
            </div>
        </div>
    </section>

    <?php
        include "./components/footer.php";
    ?>

    <style>
        /* DESKTOP VIEW */
        @media screen and (min-width: 800px) {
            /* HERO SECTION */
            .home-hero-container{
                position: relative;
                width: 100%;
                height: calc(100vh - 3rem);
                background-image: url(./gallery/home2.jpeg);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }

            .home-hero{
                position: absolute;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.5);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .home-hero h2{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 1rem;
                color: white;
            }

            .home-hero h2 span{
                font-family: 'Playfair Display';
                font-size: 3.5rem;
            }

            .home-hero .hero-btns{
                position: relative;
                margin-top: 3rem;
            }

            .home-hero .hero-btns a{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 0.25rem;
                text-decoration: none;
                background: var(--gold);
                padding: 0.5rem 2rem;
                color: purple;
                font-family: 'Ubuntu';
                border: 2px solid transparent;
                border-radius: 0.25rem;
            }

            .home-hero .home-btns a i{
                font-size: 1rem;
            }

            .home-hero .hero-btns a:hover{
                scale: 1.05;
                transition: 200ms;
                border: 2px solid white;
            }


            /* About Us Section */
            .about-us-container{
                position: relative;
                width: 100%;
                max-width: 100dvw;
                height: max-content;
                display: flex;
                flex-direction: row;
                justify-content: center;
                background-color: var(--grey);
            }

            .about-us{
                position: relative;
                top: -2rem;
                background: white;
                box-shadow: 2px 2px 4px 4px rgba(0,0,0,0.15);
                width: 94%;
                max-width: 1440px;
                padding: 4rem 4rem;
                /* padding-bottom: 17rem; */
            }

            .about-us .who-we-are{
                display: flex;
                flex-direction: column;
                width: 100%;
                gap: 1rem;
            }

            .about-us .who-we-are h2{
                font-family: 'Oswald';
                font-size: 3rem;
                text-align: center;
                color: var(--blue2);
            }

            .about-us .who-we-are p{
                font-size: 0.95rem;
                font-weight: 400;
                margin-bottom: 2.5rem;
                text-align: center;
            }

            .about-us .who-we-are p span{
                font-style: italic;
            }

            .about-us .foundation-purpose{
                position: relative;
                display: flex;
                flex-direction: row;
                gap: 3rem;
            }

            .about-us .foundation-purpose div{
                width: 50%;
                margin-bottom: 1rem;
            }


            .about-us .foundation-purpose div h2{
                font-family: 'Oswald';
                font-size: 1.25rem;
                margin-bottom: 0.5rem;
                color: var(--blue2);
            }

            .about-us .foundation-purpose div p{
                font-size: 0.95rem;
                text-align: justify;
                justify-content: right;
            }

            .about-us .learn-more{
                position: relative;
                display: flex;
                flex-direction: column;
                gap: 2rem;
                align-items: center;
                justify-content: center;
                width: 100%;
                margin-top: 8rem;
            }

            .about-us .learn-more a{
                text-decoration: none;
                padding: 0.5rem 2rem;
                border: 2px solid var(--blue3);
                color: var(--blue3);
            }

            .about-us .learn-more a:hover{
                background: var(--blue3);
                color: white;
                transition: 300ms;
            }

            .about-us .learn-more i{
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 1.5rem;
                font-size: 1.2rem;
                color: var(--blue2);
            }

            .about-us .learn-more i:hover{
                color: var(--gold);
                cursor: pointer;
                animation: bounceDown 500ms linear;
            }

            @keyframes bounceDown {
                0%{
                    position: relative;
                } 50%{
                    position: relative;
                    top: 1rem;
                } 100%{
                    position: relative;
                    top: 0;
                }
            }



            /* CONTACTS US SECTION */
            .contact-us-container{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                background: white;
            }

            .contact-us {
                position: relative;
                width: 100%;
                max-width: 1440px; 
                padding: 4rem 4rem;
                display: flex;
                flex-direction: row;
                gap: 2rem;
            }

            .contact-us .contacts-socials, .contact-us .contact-form{
                position: relative;
                width: calc(50% - 1rem);
            }

            .contact-us .contacts-socials{
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .contact-us .contacts-socials h2, .contact-us .contact-form h2{
                font-size: 1.25rem;
                font-family: 'Oswald';
                font-weight: 600;
                color: var(--blue2);
            }

            .contact-us .contacts-socials h5, .contact-us .contact-form h5{
                font-weight: 400;
                font-size: 0.95rem;
                text-align: justify;
                justify-content: right;
                margin-bottom: 1.25rem;
            }

            .contact-us .contacts-socials a{
                text-decoration: none;
                display: flex;
                flex-direction: row;
                gap: 1rem;
                align-items: center;
                font-size: 0.95rem;
                color: var(--blue2);
                margin-bottom: 1rem;
            }

            .contact-us .contacts-socials a i{
                font-size: 1.25rem;
            }

            .contact-us .contacts-socials a:hover{
                scale: 1.05;
                color: var(--gold);
                transition: 200ms;
            }

            .contact-us .contact-form{
                display: flex;
                flex-direction: column;
                gap: 1rem;
                justify-content: center;
                /* align-items: center; */
                padding-left: 2rem;
            }

            .contact-us .contact-form h2{
                color: var(--blue2);
                font-size: 1.25rem;
            }

            .contact-us .contact-form .form-data{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: row;
                gap: 2rem;
            }

            .contact-us .contact-form .form-data div{
                /* border: 2px solid black; */
                position: relative;
                width: 50%;
            }

            .contact-us .contact-form .form-data div p{
                font-weight: 400;
                font-size: 0.8rem;
            }

            .contact-us .contact-form .form-data div input{
                position: relative;
                width: 100%;
                border: none;
                border-bottom: 2px solid var(--blue2);
                padding: 0.5rem;
                outline: none;
            }
            
            .contact-us .contact-form .form-others{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .contact-us .contact-form .form-others p{
                font-weight: 400;
                font-size: 0.8rem;
            }

            .contact-us .contact-form .form-others input{
                position: relative;
                width: 100%;
                border: none;
                border-bottom: 2px solid var(--blue2);
                padding: 0.5rem;
                outline: none;
            }

            .contact-us .contact-form .message textarea{
                position: relative;
                width: 100%;
                min-width: 100%;
                max-width: 100%;
                border: none;
                border-bottom: 2px solid var(--blue2);
                padding: 0.5rem;
                outline: none;
                height: 4rem;
            }

            .contact-us .contact-form button{
                position: relative;
                background: var(--gold);
                border: 2px solid transparent;
                padding: 0.5rem 1.5rem;
            }

            .contact-us .contact-form button:hover{
                background: transparent;
                border: 2px solid var(--gold);
                transition: 200ms;
            }
        }


        /* MOBILE VIEW */
        @media screen and (max-width: 800px){
            /* HERO SECTION */
            .home-hero-container{
                position: relative;
                width: 100%;
                height: calc(100vh - 4rem);
                background-image: url(./gallery/home2.jpeg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .home-hero{
                position: absolute;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.5);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .home-hero h2{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 1rem;
                color: white;
            }

            .home-hero h2 span{
                font-family: 'Playfair Display';
                font-size: 2rem;
            }

            .home-hero .hero-btns{
                margin-top: 3rem;
            }

            .home-hero .hero-btns a{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 0.25rem;
                text-decoration: none;
                background: var(--gold);
                padding: 0.5rem 1.5rem;
                color: purple;
                font-family: 'Ubuntu';
                font-size: 0.9rem;
                border: 2px solid transparent;
            }

            .home-hero .hero-btns a:hover{
                scale: 1.05;
                transition: 200ms;
                border: 2px solid white;
            }


            /* About Us Section */
            .about-us-container{
                position: relative;
                width: 100%;
                max-width: 100dvw;
                height: max-content;
                display: flex;
                flex-direction: row;
                justify-content: center;
                background-color: var(--grey);
            }

            .about-us{
                position: relative;
                background: white;
                box-shadow: 2px 2px 4px 4px rgba(0,0,0,0.15);
                width: 100%;
                padding: 2rem;
                min-height: 75vh;
            }

            .about-us .who-we-are{
                display: flex;
                flex-direction: column;
                width: 100%;
                max-width: 100dvw;
                gap: 1rem;
            }

            .about-us .who-we-are h2{
                font-family: 'Oswald';
                font-size:1.75rem;
                text-align: center;
            }

            .about-us .who-we-are p{
                font-size: 0.9rem;
                font-weight: 400;
                margin-bottom: 2rem;
                text-align: center;
            }

            .about-us .who-we-are p span{
                font-style: italic;
            }

            .about-us .foundation-purpose{
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                position: relative;
            }

            .about-us .foundation-purpose div{
                width: 100%;
                max-width: 100dvw;
                margin-bottom: 1rem;
            }


            .about-us .foundation-purpose div h2{
                font-family: 'Oswald';
                font-size: 1.25rem;
                margin-bottom: 0.25rem;
                color: var(--blue2);
            }

            .about-us .foundation-purpose div p{
                font-size: 0.9rem;
                text-align: justify;
                justify-content: right;
            }

            .about-us .learn-more{
                display: flex;
                flex-direction: column;
                gap: 2rem;
                align-items: center;
                justify-content: center;
                position: relative;
                width: 100%;
                margin-top: 2rem;
                border-bottom: 2px solid rgba(0,0,0,0.05);
            }

            .about-us .learn-more a{
                text-decoration: none;
                padding: 0.5rem 1.5rem;
                border: 2px solid var(--blue3);
                color: var(--blue3);
            }

            .about-us .learn-more a:hover{
                background: var(--blue3);
                color: white;
                transition: 300ms;
            }

            .about-us .learn-more i{
                padding: 1.5rem;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 2.5rem;
                width: 2.5rem;
                font-size: 1.2rem;
                color: var(--blue2);
                margin-bottom: 1rem;
            }

            .about-us .learn-more i:hover{
                color: var(--gold);
                cursor: pointer;
                animation: bounceDown 500ms linear;
            }

            @keyframes bounceDown {
                0%{
                    position: relative;
                } 50%{
                    position: relative;
                    top: 1rem;
                } 100%{
                    position: relative;
                    top: 0;
                }
            }



            /* CONTACTS US SECTION */
            .contact-us-container{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                background: white;
            }

            .contact-us {
                position: relative;
                width: 100%;
                max-width: 1440px; 
                padding: 2rem;
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .contact-us .contacts-socials, .contact-us .contact-form{
                position: relative;
                width: 100%;
                max-width: 100dvw;
                /* border: 2px solid black; */
            }

            .contact-us .contacts-socials{
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .contact-us .contacts-socials h2, .contact-us .contact-form h2{
                font-size: 1.5rem;
                font-family: 'Oswald';
                font-weight: 600;
                color: var(--blue2);
            }

            .contact-us .contacts-socials h5, .contact-us .contact-form h5{
                font-weight: 400;
                font-size: 0.9rem;
                text-align: justify;
                justify-content: right;
                margin-bottom: 1.2rem;
            }

            .contact-us .contacts-socials a{
                text-decoration: none;
                display: flex;
                flex-direction: row;
                gap: 1rem;
                align-items: center;
                font-size: 1rem;
                color: var(--blue2);
                margin-bottom: 1rem;
            }

            .contact-us .contacts-socials a i{
                font-size: 1.5rem;
            }

            .contact-us .contacts-socials a:hover{
                scale: 1.05;
                color: var(--gold);
                transition: 200ms;
            }

            .contact-us .contact-form{
                display: flex;
                background: var(--white);
                padding: 1.5rem;
                border-radius: 0.25rem;
                flex-direction: column;
                gap: 1rem;
                justify-content: center;
                align-items: center;
            }

            .contact-form h2{
                text-align: center;
            }

            .contact-us .contact-form .form-data{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 0.75rem;
            }

            .contact-us .contact-form .form-data div{
                /* border: 2px solid black; */
                position: relative;
                width: 100%;
            }

            .contact-us .contact-form .form-data div p{
                font-weight: 450;
                font-size: 0.75rem;
            }

            .contact-us .contact-form .form-data div input{
                position: relative;
                width: 100%;
                border: none;
                border-bottom: 2px solid var(--blue2);
                padding: 0.5rem;
                outline: none;
            }

            .contact-us .contact-form input::placeholder, .contact-us .contact-form textarea::placeholder{
                font-size: 0.7rem;
            }
            
            .contact-us .contact-form .form-others{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .contact-us .contact-form .form-others p{
                font-weight: 400;
                font-size: 0.8rem;
            }

            .contact-us .contact-form .form-others input{
                position: relative;
                width: 100%;
                border: none;
                border-bottom: 2px solid var(--blue2);
                padding: 0.5rem;
                outline: none;
            }

            .contact-us .contact-form .message textarea{
                position: relative;
                width: 100%;
                min-width: 100%;
                max-width: 100%;
                border: none;
                border-bottom: 2px solid var(--blue2);
                padding: 0.5rem;
                outline: none;
                height: 4rem;
            }

            .contact-us .contact-form button{
                position: relative;
                background: var(--gold);
                border: 2px solid transparent;
                padding: 0.5rem 1.5rem;
            }

            .contact-us .contact-form button:hover{
                background: transparent;
                border: 2px solid var(--gold);
                transition: 200ms;
            }
        }
    </style>
</body>
</html>