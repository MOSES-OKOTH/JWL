<!DOCTYPE html>
<html lang="en">
<?php
    $page_name = "Donate";
    $page_title = "Support US | JWL Youth Ministry Kenya Chapter";

    include "../components/head.php";
?>
<body onload="removePreloader()">
    <?php
        include "../components/preloader.php";
        include "../components/header.php";
    ?>

    <section class="donate-container">
        <div class="donate">
            <div class="donate-header">
                <h1>SUPPORT OUR MISSION</h1>
            </div>

            <div class="donate-main">
                <div class="donate-text">
                    <p>
                        Your generosity makes a big difference. Every gift you give to Jol Wo Lieec Ministry Kenya Chapter directly supports our work of drawing young people back to Christ, building a generation rooted in faith, integrity, and purpose.
                        <br>
                        From outreach missions and youth conferences to community programs and ministry development, your donation helps us reach further, serve deeper, and impact more lives.
                    </p>
                </div>

                <div class="donate-mpesa-paypal">
                    <div class="mpesa">
                        <div class="stk-push">
                            <h1>Pay with M-Pesa</h1>

                            <div class="input-group">
                                <p>Phone Number</p>
                                <input type="text" name="" id="phone" placeholder="Phone Number 07********">
                            </div>

                            <div class="input-group">
                                <p>Amount</p>
                                <input type="number" id="mpesa-amount" placeholder="Amount in KES">
                            </div>

                            <div class="submit-mpesa">
                                <button id="submit-mpesa">Send STK Push</button>
                            </div>
                        </div>

                        <div class="direct-payment">
                            <p>You can make direct payments to our Mpesa Till Number:</p>
                            <p>123 456</p>
                        </div>
                    </div>

                    <div class="paypal">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        /* DESKTOP VIEW */
        @media screen and (min-width: 800px) {
            .donate-container{
                position: relative;
                padding: 4rem;
                width: 100%;
                max-width: 100dvw;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: rgba(0,0,0,0.1);
            }

            .donate{
                /* border: 2px solid black; */
                position: relative;
                width: 100%;
                max-width: 1440px;
                background: white;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 4rem;
                padding: 4rem;
            }

            .donate-header{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .donate-header h1{
                font-family: 'Oswald';
                font-size: 2rem;
                font-weight: 600;
                color: var(--blue2);
            }

            .donate-main{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: row;
                gap: 4rem;
            }

            .donate-main .donate-text, .donate-main .donate-mpesa-paypal{
                position: relative;
                width: calc(50% - 2rem);
                display: flex;
                flex-direction: column;
            }

            .donate-text p{
                font-size: 1rem;
                text-align: justify;
                color: rgba(0,0,0,0.8);
            }

            .mpesa{
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .stk-push{
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .stk-push h1{
                font-family: 'Oswald';
                font-size: 1.5rem;
                color: var(--blue3);
            }

            .stk-push p{
                font-size: 0.9rem;
                color: rgba(0,0,0,0.8);
                font-weight: 500;
                margin-bottom: 0.25rem;
            }

            .stk-push input{
                position: raltive;
                width: 100%;
                padding: 0.75rem 1rem;
                border: 2px solid rgba(0,0,0,0.4);
                outline: none;
            }


            .submit-mpesa{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: flex-end;
            }


            .submit-mpesa button{
                border: 2px solid transparent;
                background: green;
                color: white;
                font-size: 0.85rem;
                font-weight: 500;
                padding: 0.75rem 2rem;
            }

            .submit-mpesa button:hover{
                cursor: pointer;
                border: 2px solid green;
                background: rgba(0,255,0,0.05);
                color: green;
                transition: 200ms;
            }

            .direct-payment{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                padding: 1rem 2rem;
                background: rgba(0,255,0,0.1);
                border: 2px solid rgba(0,255,0,0.2);
                border-radius: 0.5rem;
            }

            .direct-payment p{
                font-size: 0.95rem;
                color: rgba(0,0,0,0.8);
                text-align: center;
            }

            .direct-payment p:last-child{
                font-family: 'Oswald';
                font-weight: 500;
                letter-spacing: 0.25rem;
                font-size: 4rem;
                color: black;
            }
        }

        /* MOBILE VIEW */
        @media screen and (max-width: 800px) {
            .donate-container{
                position: relative;
                padding: 1rem;
                width: 100%;
                max-width: 100dvw;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: rgba(0,0,0,0.1);
            }

            .donate{
                /* border: 2px solid black; */
                position: relative;
                width: 100%;
                max-width: 1440px;
                background: white;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 4rem;
                padding: 4rem 2rem;
                border-radius: 0.5rem;
            }

            .donate-header{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .donate-header h1{
                font-family: 'Oswald';
                font-size: 1.5rem;
                font-weight: 600;
                color: var(--blue2);
            }

            .donate-main{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 2rem;
            }

            .donate-main .donate-text, .donate-main .donate-mpesa-paypal{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
            }

            .donate-text p{
                font-size: 0.9rem;
                text-align: justify;
                color: rgba(0,0,0,0.8);
            }

            .mpesa{
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .stk-push{
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .stk-push h1{
                font-family: 'Oswald';
                font-size: 1.25rem;
                color: var(--blue3);
            }

            .stk-push p{
                font-size: 0.9rem;
                color: rgba(0,0,0,0.8);
                font-weight: 500;
                margin-bottom: 0.25rem;
            }

            .stk-push input{
                position: raltive;
                width: 100%;
                padding: 0.75rem 1rem;
                border: 2px solid rgba(0,0,0,0.4);
                outline: none;
            }


            .submit-mpesa{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: flex-end;
            }


            .submit-mpesa button{
                border: 2px solid transparent;
                background: green;
                color: white;
                font-size: 0.85rem;
                font-weight: 500;
                padding: 0.5rem 1.5rem;
            }

            .submit-mpesa button:hover{
                cursor: pointer;
                border: 2px solid green;
                background: rgba(0,255,0,0.05);
                color: green;
                transition: 200ms;
            }

            .direct-payment{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                padding: 1rem 2rem;
                background: rgba(0,255,0,0.1);
                border: 2px solid rgba(0,255,0,0.2);
                border-radius: 0.25rem;
            }

            .direct-payment p{
                font-size: 0.9rem;
                color: rgba(0,0,0,0.8);
                text-align: center;
            }

            .direct-payment p:last-child{
                font-family: 'Oswald';
                font-weight: 500;
                letter-spacing: 0.25rem;
                font-size: 3rem;
                color: black;
            }
        }
    </style>
    <?php
        include "../components/footer.php";
    ?>
</body>
</html>