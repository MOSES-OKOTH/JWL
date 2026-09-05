<!-- HEADER SECTION -->
<section class="header-container">
    <div class="header">
        <div class="logo">
            <a href='<?php if($page_name=="home"){echo "./"; } else{ echo "../"; } ?>'>
                <img src='<?php if($page_name=="home"){ echo "./gallery/logo.jpeg"; } else { echo "../gallery/logo.jpeg"; } ?>' alt="JWL Kenya Chapter Logo" loading="lazy">
                <p>
                    <span>JWL KENYA CHAPTER</span>
                    <span>Youth Ministry</span>
                </p>
            </a>
        </div>

        <div class="links">
            <a href='<?php if($page_name=="home"){echo "./"; } else{ echo "../"; } ?>'>HOME</a>
            <a href='<?php if($page_name=="home"){echo "./about-us/"; } else{ echo "../about-us/"; } ?>'>ABOUT US</a>
            <a href='<?php if($page_name=="home"){echo "./programs/"; } else{ echo "../programs/"; } ?>'>PROGRAMS</a>
            <a href='<?php if($page_name=="home"){echo "./events/"; } else{ echo "../events"; } ?>'>EVENTS</a>
            <!-- <a href='<?php if($page_name=="home"){echo "./library/"; } else{ echo "../library/"; } ?>'>LIBRARY</a> -->
            <!-- <a href='<?php if($page_name=="home"){echo "./media/"; } else{ echo "../media/"; } ?>'>GET INVOLVED</a> -->
            <a href='<?php if($page_name=="home"){echo "./contacts/"; } else{ echo "../contacts/"; } ?>'>CONTACTS</a>
            <a href='<?php if($page_name=="home"){echo "./donate/"; } else{ echo "../donate/"; } ?>'> <i class="fa-solid fa-heart"></i> SUPPORT US</a>
        </div>

        <div class="mobile-ham-menu" onclick="showHamMenu()">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div class="mobile-ham-menu ham-close">
            <p onclick="hideHamMenu()">
                <i class="fa-solid fa-xmark"></i> Close
            </p>
        </div>
    </div>
</section>

<section id="notification">
    <div id="notification-message">
        <i class="fa-solid fa-exclamation-triangle"></i> <span id="message"></span>
    </div>

    <div id="close-notification">
        <i class="fa-solid fa-x"></i>
    </div>
</section>

<style>
    @keyframes notificationIn{
        0%{
            transform: translateX(100%);
        } 100%{
            transform: translateX(0);
        }
    }

    @keyframes notificationOut {
        0%{
            width: 100%;
        } 100%{
            width: 0;
        }
    }


    /* DESKTOP VIEW */
    @media screen and (min-width: 800px) {
        /* HEADER SECTION*/
        .header-container{
            background: var(--blue2);
            position: relative;
            width: 100%;
            max-width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        .header{
            position: relative;
            width: 100%;
            margin: 0 2.5rem;
            max-width: 1440px;
            padding: 0.75rem;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .header .logo{
            display: flex;
        }

        .header .logo a{
            text-decoration: none;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .header .logo img{
            height: 60px;
        }

        .header .logo p{
            display: flex;
            flex-direction: column;
            margin-left: 0.45rem;
            font-family: 'Oswald','Orbitron';
            font-weight: 500;
            color: white;
            font-size: 1.25rem;
        }

        .header .logo p span{
            font-family: 'Oswald';
        }

        .header .mobile-ham-menu{
            display: none;
        }

        .header .links{
            display: flex;
            flex-direction: row;
            gap: 1.25rem;
            max-width: 100%;
        }

        .header .links a{
            text-decoration: none;
            color: white;
            font-family: 'Ubuntu';
            font-weight: 450;
            padding: 0.5rem;
            border-bottom: 2px solid transparent;
        }

        .header .links a:hover{
            border-bottom: 2px solid orangered;
            transition: border-bottom 150ms ease-in;
        }

        .header .links a:last-child{
            background: var(--gold);
            padding: 0.5rem 0.75rem;
            border-radius: 0.25rem;
        }

        /* NOTIFICATION SECTION */
        #notification{
            z-index: 99;
            position: fixed;
            top: 10.5vh;
            right: 1vw;
            display: none;
            flex-direction: row;
            gap: 2vw;
            padding: 1vh 1vw;
            animation: notificationIn 0.5s linear forwards;
        }

        #notification::after{
            content: '';
            position: absolute;
            bottom: -1px;
            right: 0;
            width: 100%;
            height: 4px;
            background: purple;
            z-index: 99;
            border-radius: 6px;
            animation: notificationOut 5s linear forwards;
            animation-delay: 500ms;
        }

        #notification #notification-message{
            font-size: 0.85vw;
            font-weight: 500;
        }

        .good-notification{
            color: white;
            background: darkgreen;
            border: 2px solid green;
            border-radius: 6px;
        }

        .bad-notification{
            color: white;
            background: rgba(255, 0, 0, 0.75);
            border: 2px solid red;
            border-radius: 6px;
        }

        #close-notification {
            display: flex;
            justify-content: center;
            align-items: center;
            border-left: 2px solid white;
            padding-left: 1vw;
        }

        #close-notification:hover{
            cursor: pointer;
            color: red;
        }
    }

    /* MOBILE VIEW */
    @media screen and (max-width: 800px){
        /* HEADER SECTION*/
        .header-container{
            background: var(--blue2);
            position: relative;
            width: 100%;
            max-width: 100vw;
            overflow-x: hidden;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        .header{
            position: relative;
            width: 100%;
            margin: 0 1rem;
            padding: 1rem 2rem;
            max-width: 1440px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            max-width: 100dvw;
        }

        .header .logo{
            display: flex;
        }

        .header .logo a{
            text-decoration: none;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .header .logo img{
            height: 60px;
        }

        .header .logo p{
            display: flex;
            flex-direction: column;
            margin-left: 0.45rem;
            font-family: 'Oswald','Orbitron';
            font-weight: 500;
            color: white;
            font-size: 0.95rem;
        }

        .header .logo p span{
            font-family: 'Oswald';
        }

        .header .mobile-ham-menu{
            display: flex;
            color: white;
            font-size: 1.8rem;
        }

        .header .ham-close{
            /* box-sizing: border-box; */
            display: none;
            flex-direction: row;
            z-index: 1001;
            position: fixed;
            top: 80vh;
            width: 100%;
            max-width: 100dvw;
        }


        .header .ham-close p{
            border: 2px solid white;
            padding: 0.35rem 1.1rem;
            font-size: 0.9rem;
            font-weight: 400;
        }

        .header .links{
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            padding: 4rem 2rem;
            z-index: 100;
            width: 100%;
            height: 100vh;
            max-width: 100dvw;
            box-sizing: border-box;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            background: var(--blue2);
        }

        .header .links a{
            position: relative;
            width: 100%;
            text-decoration: none;
            color: white;
            font-family: 'Ubuntu';
            font-weight: 450;
            padding: 0.5rem;
            border-bottom: 2px solid rgba(255,255,255,0.1);
        }

        .header .links a:hover{
            border-bottom: 2px solid orangered;
            transition: border-bottom 150ms ease-in;
        }

        .header .links a:last-child{
            background: var(--gold);
            padding: 0.5rem 0.75rem;
            border-radius: 0.25rem;
        }

        /* NOTIFICATION SECTION */
        #notification{
            z-index: 99;
            max-width: 90vw;
            position: fixed;
            top: 7.5vh;
            right: 4vw;
            display: none;
            flex-direction: row;
            gap: 2.5vw;
            padding: 0.6vh 2.5vw;
            animation: notificationIn 0.5s linear forwards;
        }

        #notification::after{
            content: '';
            position: absolute;
            bottom: -1px;
            right: 0;
            width: 100%;
            height: 4px;
            background: purple;
            z-index: 99;
            border-radius: 6px;
            animation: notificationOut 5s linear forwards;
            animation-delay: 500ms;
        }

        #notification #notification-message{
            font-size: 0.9rem;
            font-weight: 500;
        }

        .good-notification{
            color: white;
            background: darkgreen;
            border: 2px solid green;
            border-radius: 6px;
        }

        .bad-notification{
            color: white;
            background: rgba(255, 0, 0, 0.75);
            border: 2px solid red;
            border-radius: 6px;
        }

        #close-notification {
            display: flex;
            justify-content: center;
            align-items: center;
            border-left: 2px solid white;
            padding-left: 2.5vw;
        }

        #close-notification:hover{
            cursor: pointer;
            color: red;
        }
    }
</style>



<script>
    function notify(message, type){
        let notification = document.getElementById('notification');
        let notificationMessage = document.getElementById('message');
        let closeNotification = document.getElementById('close-notification');

        notificationMessage.innerHTML = message;
        notification.classList.remove('good-notification');
        notification.classList.remove('bad-notification');
        notification.classList.add(type+"-notification");

        notification.style.display = 'flex';

        closeNotification.addEventListener('click', function(){
            notification.style.display = 'none';
        })

        let closingInterval = window.setInterval(() => {
            notification.style.display = 'none';
        }, 5600);

        window.setTimeout(() => {
            clearInterval(closingInterval);
        }, 6000);
    }
</script>