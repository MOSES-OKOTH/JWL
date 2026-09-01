<!DOCTYPE html>
<html lang="en">
<?php
    $page_name = "Join";
    $page_title = "Join Us | JWL Youth Ministry Kenya Chapter";

    include "../components/head.php";
?>
<body onload="removePreloader()">
    <?php
        include "../components/preloader.php";
        include "../components/header.php";
    ?>


    <section class="join-container">
        <div class="join">
            <div class="join-header">
                <h1>JOIN OUR MINISTRY</h1>
            </div>

            <div class="join-main">
                <p>Join our mission to spread the gospel to create the next generation of spiritually grounded, empowered and united youths</p>

                <div class="join-form">
                    <div class="input-group">
                        <div>
                            <p>First Name <span class="required">*</span></p>
                            <input type="text" id="fname" placeholder="First Name">
                        </div>

                        <div>
                            <p>Last Name <span class="required">*</span></p>
                            <input type="text" id="lname" placeholder="Last name(s) | Other name(s)">
                        </div>
                    </div>

                    <div class="input-group">
                        <div>
                            <p>Phone Number</p>
                            <input type="text" id="phone" placeholder="Phone Number +2547********">
                        </div>

                        <div>
                            <p>Email Address</p>
                            <input type="text" id="email" placeholder="Email john.doe@mail.com">
                        </div>
                    </div>

                    <div class="input-group">
                        <div>
                            <p>Program of Interest <span class="required">*</span></p>
                            <select name="program" id="program">
                                <option value="">-- Select Ministry --</option>
                                <option value="Luäŋyic">Luäŋyic</option>
                                <option value="Lëk">Lëk</option>
                                <option value="Agayth">Agayth</option>
                                <option value="Alooŋ">Alooŋ</option>
                            </select>
                        </div>

                        <div>
                            <p>County of Residence</p>
                            <select name="county" id="county">
                                <option value="">-- Select County --</option>
                                <option value="Baringo">Baringo</option>
                                <option value="Bomet">Bomet</option>
                                <option value="Bungoma">Bungoma</option>
                                <option value="Busia">Busia</option>
                                <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
                                <option value="Embu">Embu</option>
                                <option value="Garissa">Garissa</option>
                                <option value="Homa Bay">Homa Bay</option>
                                <option value="Isiolo">Isiolo</option>
                                <option value="Kajiado">Kajiado</option>
                                <option value="Kakamega">Kakamega</option>
                                <option value="Kericho">Kericho</option>
                                <option value="Kiambu">Kiambu</option>
                                <option value="Kilifi">Kilifi</option>
                                <option value="Kirinyaga">Kirinyaga</option>
                                <option value="Kisii">Kisii</option>
                                <option value="Kisumu">Kisumu</option>
                                <option value="Kitui">Kitui</option>
                                <option value="Kwale">Kwale</option>
                                <option value="Laikipia">Laikipia</option>
                                <option value="Lamu">Lamu</option>
                                <option value="Machakos">Machakos</option>
                                <option value="Makueni">Makueni</option>
                                <option value="Mandera">Mandera</option>
                                <option value="Marsabit">Marsabit</option>
                                <option value="Meru">Meru</option>
                                <option value="Migori">Migori</option>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Murang'a">Murang'a</option>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Nakuru">Nakuru</option>
                                <option value="Nandi">Nandi</option>
                                <option value="Narok">Narok</option>
                                <option value="Nyamira">Nyamira</option>
                                <option value="Nyandarua">Nyandarua</option>
                                <option value="Nyeri">Nyeri</option>
                                <option value="Samburu">Samburu</option>
                                <option value="Siaya">Siaya</option>
                                <option value="Taita-Taveta">Taita-Taveta</option>
                                <option value="Tana River">Tana River</option>
                                <option value="Tharaka-Nithi">Tharaka-Nithi</option>
                                <option value="Trans Nzoia">Trans Nzoia</option>
                                <option value="Turkana">Turkana</option>
                                <option value="Uasin Gishu">Uasin Gishu</option>
                                <option value="Vihiga">Vihiga</option>
                                <option value="Wajir">Wajir</option>
                                <option value="West Pokot">West Pokot</option>
                            </select>
                        </div>
                    </div>

                    <button id="registerBtn">Register</button>
                </div>
            </div>
        </div>
    </section>

    <?php
        include "../components/footer.php";
    ?>

    <style>
        /* DESKTOP VIEW */
        @media screen and (min-width: 800px) {
            .join-container{
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

            .join{
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

            .join-header{
               position: relative;
                width: 100%;
                display: flex;
                justify-content: center; 
            }

            .join-header h1{
                font-family: 'Oswald';
                font-size: 2rem;
                font-weight: 600;
                color: var(--blue2);
            }

            .join-main{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 4rem;
            }

            .join-main p{
                font-size: 0.95rem;
                font-weight: 400;
            }

            .join-main .join-form{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .join-main .join-form .input-group{
                position: relative;
                /* width: 50%; */
                display: flex;
                flex-direction: row;
                gap: 2rem;
            }

            .input-group div{
                position: relative;
                flex-direction: column;
                gap: 0.5rem;
            }
        }

        /* MOBILE VIEW */
        @media screen and (max-width: 800px) {
            
        }
    </style>
</body>
</html>