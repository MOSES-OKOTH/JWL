<!DOCTYPE html>
<html lang="en">
<?php
    $page_name = "Contacts";
    $page_title = "Contacts | JWL Youth Ministry Kenya Chapter";

    include "../components/head.php";
?>
<body onload="removePreloader()">
    <?php
        include "../components/preloader.php";
        include "../components/header.php";
    ?>


    <section class="contacts-container">
        <div class="contacts">
            <div class="contacts-header">
                <h1>GET IN TOUCH WITH US</h1>
            </div>

            <div class="contacts-main">
                <div class="socials-dm">
                    <div class="socials">
                        <p>
                            Join us in our mission to empower the next generation! Whether you want to learn more about our programs, partner with us, or support our efforts, we are here to connect with you. Your involvement makes a difference.
                        </p>

                        <a href="tel:+254798020310"><i class="fa-solid fa-phone"></i> +254 798 020 310</a>

                        <a href="tel:+254792913312"><i class="fa-solid fa-phone"></i> +254 792 913 312</a>

                        <a href="https://maps.app.goo.gl/62G6XHJ5RVACUd7WA"><i class="fa-solid fa-map-location"></i> Nakuru, Kenya</a>

                        <a href="mail:jwlkenyachapter@gmail.com"><i class="fa-solid fa-envelope"></i> jwlkenyachapter@gmail.com</a>
                    </div>

                    <div class="dm">
                        <section class="dm-header">
                            <h2>SEND US A DIRECT MESSAGE</h2>
                        </section>

                        <section class="dm-main">
                            <section class="input-group">
                                <div>
                                    <p>First Name<span class="required">*</span></p>
                                    <input type="text" placeholder="First Name">
                                </div>

                                <div>
                                    <p>Last Name<span class="required">*</span></p>
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </section>

                            <section class="input-group">
                                <div>
                                    <p>Email</p>
                                    <input type="text" placeholder="Email">
                                </div>

                                <div>
                                    <p>Phone Number</p>
                                    <input type="tel" name="" id="" placeholder="Phone Number +2547****">
                                </div>
                            </section>

                            <section class="subject">
                                <p>Subject<span class="required">*</span></p>
                                <input type="text" name="" id="" placeholder="Subject">
                            </section>

                            <section class="message">
                                <p>Message<span class="required">*</span></p>
                                <textarea name="" id="" placeholder="Your message"></textarea>
                            </section>

                            <section class="submit-message">
                                <button id="submit">Send Message</button>
                            </section>
                        </section>
                    </div>
                </div>
            </div>

            <div class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.01278282439!2d35.98889043309216!3d-0.33432075425755337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18298e0a989f5c95%3A0x71a55ba743fc51b0!2sKingdom%20Hall%20of%20Jehovah's%20Witnesses%2CLangalanga!5e0!3m2!1sen!2ske!4v1786813536836!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </div>
    </section>

    

    <style>
        /* DESKTOP VIEW */
        @media screen and (min-width: 800px){
            .contacts-container{
                position: relative;
                display: flex;
                align-items: center;
                padding: 4rem;
                max-width: 100dvw;
                background: rgba(0,0,0,0.1);
            }

            .contacts{
                position: relative;
                width: 100%;
                max-width: 1440px;
                display: flex;
                flex-direction: column;
                gap: 2rem;
                padding: 2rem;
                background: white;
                border-radius: 0.5rem;
            }

            .contacts-header{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .contacts-header h1{
                font-family: 'Oswald';
                font-size: 2rem;
                font-weight: 600;
            }

            .contacts-main{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 4rem;
            }

            .contacts-main .socials-dm{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: row;
                gap: 4rem;
                padding: 1rem 0;
            }

            .contacts-main .socials-dm .socials, .contacts-main .socials-dm .dm{
                position: relative;
                width: calc(50% - 2rem);
            }

            .socials{
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .socials p{
                font-size: 1.05rem;
                text-align: justify;
                margin-bottom: 1rem;
            }

            .socials a{
                text-decoration: none;
                display: flex;
                gap: 1rem;
                align-items: center;
                font-size: 1rem;
                font-weight: 400;
                color: rgba(0,0,0,0.8);
            }

            .socials a i{
                font-size: 1.05rem;
            }

            .socials a:hover{
                text-decoration: underline;
            }

            .dm{
                position: relative;
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .dm-header{
                position: relative;
                width: 100%;
            }

            .dm-header h2{
                font-family: 'Oswald';
                font-weight: 500;
                font-size: 1.5rem;
                color: var(--blue1);
            }

            .dm-main{
                display: flex;
                flex-direction: column;
            }

            .dm-main .input-group{
                position: relative;
                width: 100%;
                display: flex;
                gap: 1rem;
            }

            .input-group div{
                position: relative;
                width: 100%;
            }

            .input-group div p, .subject p, .message p{
                font-size: 0.9rem;
                font-weight: 400;
                margin-bottom: 0.5rem;
            }

            .input-group div input{
                position: relative;
                width: 100%;
                border: none;
                outline: none;
                padding: 0.5rem;
                border-bottom: 1px solid var(--blue2);
                margin-bottom: 1rem;
            }

            .subject {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .subject input{
                border: none;
                outline: none;
                padding: 0.5rem;
                border-bottom: 1px solid var(--blue2);
            }

            .message{
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                margin-top: 0.5rem;
            }

            .message textarea{
                position: relative;
                width: 100%;
                min-width: 100%;
                height: 2rem;
                border: none;
                outline: none;
                padding: 0.5rem;
                border-bottom: 1px solid var(--blue2);
            }

            .required{
                position: relative;
                top: -0.25rem;
                margin-left: 0.2rem;
                font-size: 0.75rem;
                color: red;
            }

            .submit-message{
                position: relative;
                width: 100%;
                display: flex;
                algin-items: center;
                justify-content: center;
                margin-top: 1rem;
            }

            .submit-message button{
                background: var(--gold);
                border: 2px solid transparent;
                padding: 0.75rem 2rem;
                font-size: 0.8rem;
            }

            .submit-message button:hover{
                cursor: pointer;
                font-weight: 500;
                border: 2px solid var(--gold);
                background: var(--white);
                transition: 200ms;
            }

            .location{
                position: relative;
                width: 100%;
            }

            .location iframe{
                position: relative;
                width: 100%;
                border-radius: 0.5rem;
                height: 14rem;
            }
        }


        /* MOBILE VIEW */
        @media screen and (max-width: 800px){
            .contacts-container{
                position: relative;
                display: flex;
                align-items: center;
                padding: 1rem;
                max-width: 100dvw;
                background: rgba(0,0,0,0.1);
            }

            .contacts{
                position: relative;
                width: 100%;
                max-width: 1440px;
                display: flex;
                flex-direction: column;
                gap: 2rem;
                padding: 2rem;
                background: white;
                border-radius: 0.5rem;
            }

            .contacts-header{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .contacts-header h1{
                font-family: 'Oswald';
                font-size: 1.5rem;
                font-weight: 600;
            }

            .contacts-main{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 2rem;
            }

            .contacts-main .socials-dm{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 4rem;
                padding: 1rem 0;
            }

            .contacts-main .socials-dm .socials, .contacts-main .socials-dm .dm{
                position: relative;
                width: 100%;
            }

            .socials{
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .socials p{
                font-size: 0.95rem;
                text-align: justify;
                margin-bottom: 1rem;
            }

            .socials a{
                text-decoration: none;
                display: flex;
                gap: 1rem;
                align-items: center;
                font-size: 1rem;
                font-weight: 400;
                color: rgba(0,0,0,0.8);
            }

            .socials a i{
                font-size: 1.05rem;
            }

            .socials a:hover{
                text-decoration: underline;
            }

            .dm{
                position: relative;
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .dm-header{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .dm-header h2{
                font-family: 'Oswald';
                font-weight: 500;
                font-size: 1.25rem;
                color: var(--blue1);
            }

            .dm-main{
                display: flex;
                flex-direction: column;
            }

            .dm-main .input-group{
                position: relative;
                width: 100%;
                display: flex;
                gap: 1rem;
            }

            .input-group div{
                position: relative;
                width: 100%;
            }

            .input-group div p, .subject p, .message p{
                font-size: 0.75rem;
                font-weight: 400;
                margin-bottom: 0.25rem;
            }

            .input-group div input{
                position: relative;
                width: 100%;
                border: none;
                outline: none;
                padding: 0.25rem;
                border-bottom: 1px solid var(--blue2);
                margin-bottom: 1rem;
            }

            input::placeholder, textarea::placeholder{
                text-overflow: ellipsis;
                font-size: 0.7rem;
            }


            .subject {
                display: flex;
                flex-direction: column;
                gap: 0.25rem;
            }

            .subject input{
                border: none;
                outline: none;
                padding: 0.25rem;
                border-bottom: 1px solid var(--blue2);
            }

            .message{
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                margin-top: 0.5rem;
            }

            .message textarea{
                position: relative;
                width: 100%;
                min-width: 100%;
                height: 2rem;
                border: none;
                outline: none;
                padding: 0.25rem;
                border-bottom: 1px solid var(--blue2);
            }

            .required{
                position: relative;
                top: -0.25rem;
                margin-left: 0.2rem;
                font-size: 0.75rem;
                color: red;
            }

            .submit-message{
                position: relative;
                width: 100%;
                display: flex;
                algin-items: center;
                justify-content: center;
                margin-top: 1rem;
            }

            .submit-message button{
                background: var(--gold);
                border: 2px solid transparent;
                padding: 0.75rem 2rem;
                font-size: 0.8rem;
            }

            .submit-message button:hover{
                cursor: pointer;
                font-weight: 500;
                border: 2px solid var(--gold);
                background: var(--white);
                transition: 200ms;
            }

            .location{
                position: relative;
                width: 100%;
            }

            .location iframe{
                position: relative;
                width: 100%;
                border-radius: 0.5rem;
                height: 14rem;
            }
        }
    </style>

    <?php
        include "../components/footer.php";
    ?>
</body>
</html>