<div class="preloader">
    <div class="spinner"></div>
</div>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        font-family: 'Inter',system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    body{
        height: 100dvh;
        width: 100%;
        max-width: 100dvw;
        overflow-x: hidden;
        box-sizing: border-box;
    }


    :root{
        --blue1: #1A365D;
        --blue2: #04151F;
        --blue3: #183A37;
        --white: #EFD6AC;
        --orange: #EFD6AC;
        --marron: #432534;
        --gold: #F59E0B;
        --grey: rgba(0,50,150,0.1);
    }

    @keyframes fadeOut{
        from{
            opacity: 1;
        } to{
            opacity: 0;
        }
    }

    @keyframes fadeIn{
        from{
            opacity: 0;
        } to{
            opacity: 1;
        }
    }

    @keyframes slideIn{
        from{
            transform: translateX(100vw);
        } to {
            translateX: 0;
        }
    }

    @keyframes spin{
        from{
            transform: rotate(0deg);
        } to{
            transform: rotate(360deg);
        }
    }


    /* DESKTOP VIEW */
    @media screen and (min-width: 800px){
        /* PRELOADER SECTION */
        .preloader{
            height: 100vh;
            max-height: 100dvh;
            width: 100%;
            max-width: 100%;
            position: fixed;
            background: var(--blue2);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .spinner{
            border: 4px solid rgba(255,255,255,0.5);
            height: 3rem;
            width: 3rem;
            border-radius: 50%;
            border-right: 4px solid var(--gold);
            animation: spin 600ms linear infinite;
        }
    }

    /* MOBILE VIEW */
    @media screen and (max-width: 800px){
        .preloader{
            height: 100vh;
            width: 100%;
            max-width: 100dvw;
            position: fixed;
            background: var(--blue2);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .spinner{
            border: 4px solid rgba(255,255,255,0.5);
            height: 3rem;
            width: 3rem;
            border-radius: 50%;
            border-right: 4px solid var(--gold);
            animation: spin 600ms linear infinite;
        }
    }
</style>

<script>
    function removePreloader(){
        const deviceWidth = window.innerWidth;

        if(deviceWidth <= 800){
            hideHamMenu();
        }

        let preloader = document.querySelector('.preloader');
        let time = 1500; // milliseconds

        preloader.style.animation = "fadeOut 1.4s ease-out";

        let int = setInterval(function(){
            if (preloader) {
                preloader.style.display = 'none';
                // document.title = "Home | JWL Youth Ministry Kenya Chapter";
                clearInterval(int);
            }
        }, time);
    }

    function hideHamMenu(){
        const link = document.querySelector(".links");
        const closeBtn = document.querySelector(".ham-close");

        link.style.display = "none"
        closeBtn.style.display = "none"
    }


    function showHamMenu(){
        const link = document.querySelector(".links");
        const closeBtn = document.querySelector(".ham-close");

        link.style = "display: flex;"
        closeBtn.style.display = "flex"
        link.style = "animation: slideIn 200ms linear;"
    }
</script>