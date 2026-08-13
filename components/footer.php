<!-- FOOTER SECTION -->
<section class="footer-container">
    <div class="footer">
        <div class="footer-copyright">
            <p>
                &copy; <span class="year"></span> JWL Youth Ministry Kenya Chapter
            </p>
        </div>
    </div>
</section>

<style>
    /* DESKTOP VIEW */
    @media screen and (min-width: 800px){
        /* FOOTER SECTION */
        .footer-container{
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            border-top: 2px solid rgba(0,0,0,0.15)
        }

        .footer{
            position: relative;
            width: 100%;
            max-width: 1440px;
        }

        .footer .footer-copyright{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }

        .footer .footer-copyright p{
            font-size: 0.8rem;
            color: var(--blue2);
        }

        .footer .footer-copyright p a{
            text-decoration: none;
            color: var(--blue2);
        }

        .footer .footer-copyright p a:hover{
            text-decoration: underline;
        }
    }


    /* MOBILE VIEW */
    @media screen and (max-width: 800px) {
        /* FOOTER SECTION */
        .footer-container{
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            border-top: 2px solid rgba(0,0,0,0.15)
        }

        .footer{
            position: relative;
            width: 100%;
            max-width: 1440px;
        }

        .footer .footer-copyright{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }

        .footer .footer-copyright p{
            font-size: 0.7rem;
            color: var(--blue2);
        }

        .footer .footer-copyright p a{
            text-decoration: none;
            color: var(--blue2);
        }

        .footer .footer-copyright p a:hover{
            text-decoration: underline;
        }
    }
</style>


<script>
    function setCopyrightYear(){
        const yearComp = document.querySelector('.year')
        const now = new Date()

        const year = now.getFullYear();

        yearComp.textContent = year;
    }

    setCopyrightYear();
</script>