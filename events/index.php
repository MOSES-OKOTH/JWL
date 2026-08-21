<!DOCTYPE html>
<html lang="en">
<?php
    $page_name = "events";
    $page_title = "Events | JWL Youth Ministry Kenya Chapter";

    include "../components/head.php";
?>
<body onload="removePreloader()">
    <?php
        include "../components/preloader.php";
        include "../components/header.php";
    ?>

    <section class="events-container">
        <div class="events">
            <div class="events-header">
                <h1>UPCOMING & PAST EVENTS</h1>
            </div>

            <div class="events-main">
                <div class="upcoming-events">
                    <div class="upcoming-events-header">
                        <h2>UPCOMING EVENTS</h2>
                    </div>

                    <div class="upcoming-events-main">
                        <div class="event">
                            <img src="../gallery/home1.jpeg" alt="">

                            <h4>Event Title</h4>
                            <p><span class="event-date">Event Date</span> | <span class="event-location">Event Location</span></p>

                            <div class="event-btns">
                                <a class="register-event" href="">Register <i class="fa-solid fa-user-plus"></i></a>

                                <!-- <a class="event-details">Details <i class="fa-solid fa-info-circle"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="past-events">
                    <div class="past-events-header">
                        <h2>PAST EVENTS</h2>
                    </div>

                    <div class="past-events-main">
                        <div class="event">
                            <img src="../gallery/home2.jpeg" alt="">

                            <h4>Event Title</h4>
                            <p><span class="event-date">Event Date</span> | <span class="event-location">Event Location</span></p>

                            <div class="event-btns">
                                <!-- <a class="register-event" href="">Register <i class="fa-solid fa-user-plus"></i></a> -->

                                <a class="event-details">Details <i class="fa-solid fa-info-circle"></i></a>
                            </div>
                        </div>

                        <div class="event">
                            <img src="../gallery/home3.jpeg" alt="">

                            <h4>Event Title</h4>
                            <p><span class="event-date">Event Date</span> | <span class="event-location">Event Location</span></p>

                            <div class="event-btns">
                                <!-- <a class="register-event" href="">Register <i class="fa-solid fa-user-plus"></i></a> -->

                                <a class="event-details">Details <i class="fa-solid fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </section>


    <style>
        /* DESKTOP VIEW */
        @media screen and (min-width: 800px) {
            .events-container{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                padding: 2rem;
                max-width: 100dvw;
                background: rgba(0,0,0,0.05);
            }

            .events{
                position: relative;
                width: 100%;
                max-width: 1440px;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 3rem 2rem;
                background: white;
                border-radius: 0.5rem;
            }

            .events .events-header{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                margin-bottom: 2rem;
            }

            .events .events-header h1{
                font-family: 'Oswald','Orbitron';
                font-weight: 500;
                color: var(--blue2);
                font-size: 2rem;
            }

            .events .events-main{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 2rem;
            }

            .events .events-main .upcoming-events, .events .events-main .past-events{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .events .events-main .upcoming-events .upcoming-events-header, .events .events-main .past-events .past-events-header{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .events .events-main .upcoming-events .upcoming-events-header h2, .events .events-main .past-events .past-events-header h2{
                font-family: 'Oswald','Orbitron';
                font-weight: 500;
                color: var(--blue1);
                font-size: 1.5rem;
            }

            .events .events-main .upcoming-events .upcoming-events-main, .events .events-main .past-events .past-events-main{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: row;
                gap: 1rem;
            }

            .events .events-main .upcoming-events .upcoming-events-main .event, .events .events-main .past-events .past-events-main .event{
                position: relative;
                height: max-content;
                width: 18rem;
                overflow-x: hidden;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 0.5rem;
                padding: 0 1rem;
                border-radius: 0.5rem;
                box-shadow: 0 0 1rem rgba(0,0,0,0.1);
            }

            .events .events-main .upcoming-events .upcoming-events-main .event img, .events .events-main .past-events .past-events-main .event img{
                position: relative;
                width: 18rem;
                height: 18rem;
                object-fit: cover;
                border-radius: 0.25rem 0.25rem 0 0;
            }

            .events .events-main .upcoming-events .upcoming-events-main .event h4, .events .events-main .past-events .past-events-main .event h4{
                font-family: 'Oswald','Orbitron';
                font-weight: 500;
                color: var(--blue2);
                font-size: 1.2rem;
            }

            .events .events-main .upcoming-events .upcoming-events-main .event p, .events .events-main .past-events .past-events-main .event p{
                font-weight: 400;
                font-size: 0.8rem;
            }

            .events .events-main .upcoming-events .upcoming-events-main .event .event-btns, .events .events-main .past-events .past-events-main .event .event-btns{
                padding: 1rem 0;
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                gap: 1rem;
            }

            .events .events-main .upcoming-events .upcoming-events-main .event .event-btns a, .events .events-main .past-events .past-events-main .event .event-btns a{
                text-decoration: none;
                position: relative;
                padding: 0.5rem 1rem;
                border: 2px solid var(--blue2);
                color: var(--blue2);
                font-weight: 500;
                font-size: 0.8rem;
                border-radius: 0.5rem;
                cursor: pointer;
            }

            .events .events-main .upcoming-events .upcoming-events-main .event .event-btns a:hover, .events .events-main .past-events .past-events-main .event .event-btns a:hover{
                background: var(--blue2);
                color: white;
                transition: all 200ms ease-in-out;
            }
        }

        /* MOBILE VIEW */
        @media screen and (max-width: 800px) {
            
        }
    </style>

    <?php
        include "../components/footer.php";
    ?>
</body>
</html>