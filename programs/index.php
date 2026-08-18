<!DOCTYPE html>
<html lang="en">
<?php
    $page_name = "programs";
    $page_title = "Programs | JWL Youth Ministry Kenya Chapter";

    include "../components/head.php";
?>
<body onload="removePreloader()">
    <?php
        include "../components/preloader.php";
        include "../components/header.php";
    ?>

    <section class="programs-container">
        <div class="programs">
            <div class="programs-header">
                <h1>OUR PROGRAMS</h1>
            </div>

            <div class="programs-main">
                <div class="programs-text">
                    <p>
                        Every young person deserves the chance to discover who they were created to be. At Jol Wo Lieec Ministry USA, we believe transformation happens when faith, education, creativity, and community come together around a young person with intention and love. That is why everything we do is built on four foundational ministries, each designed to meet young people where they are and walk with them toward who they are becoming.
                        <br>
                        What makes our work even more remarkable is that it is carried entirely by volunteers who give freely of their time, talent, and passion because they genuinely believe in this generation.
                    </p>
                </div>

                <div class="programs-content">
                    <div class="program">
                        <div class="program-header">
                            <div class="program-header-">
                                <img src="../gallery/home1.jpeg" alt="">
                            </div>

                            <div class="program-header-text">
                                <h2>Luäŋyic</h2>
                                <p>Bible Study, Mentorship & Leadership Development</p>
                            </div>
                        </div>

                        <div class="program-main">
                            <p>
                                Luäŋyic de Baibol equips youth through Bible study, mentorship, discipleship, leadership training, and life-skills development. This ministry helps young people build strong moral foundations, healthy decision-making habits, and confidence to lead with integrity in every area of life.
                                <br><br>
                                This ministry helps young people discover purpose, strengthen character, overcome discouragement, and grow into leaders who positively influence their families, churches, schools, and communities.
                            </p>
                        </div>
                    </div>


                    <div class="program">
                        <div class="program-header">
                            <div class="program-header-">
                                <img src="../gallery/home2.jpeg" alt="">
                            </div>

                            <div class="program-header-text">
                                <h2>Lëk</h2>
                                <p>Evangelism & Community Outreach</p>
                            </div>
                        </div>

                        <div class="program-main">
                            <p>
                                Lëk mobilizes youth to actively serve communities through outreach initiatives, volunteerism, humanitarian support, mentorship, and acts of compassion. This ministry inspires young people to become voices of hope and positive change within society.
                                <br><br>
                                It transforms compassion into action by helping youth develop servant leadership, community responsibility, teamwork, and a lifelong commitment to helping others.
                            </p>
                        </div>
                    </div>

                    <div class="program">
                        <div class="program-header">
                            <div class="program-header-">
                                <img src="../gallery/home3.jpeg" alt="">
                            </div>

                            <div class="program-header-text">
                                <h2>Agayth</h2>
                                <p>Linguistic, Educational & Cultural Development</p>
                            </div>
                        </div>

                        <div class="program-main">
                            <p>
                                Agayth preserves language, literacy, storytelling, translation, and cultural heritage while helping youth strengthen communication, educational growth, and identity formation.
                                <br><br>
                                This ministry empowers youth to embrace their identity, strengthen communication skills, pursue educational growth, and preserve cultural heritage while preparing for future opportunities.
                            </p>
                        </div>
                    </div>

                    <div class="program">
                        <div class="program-header">
                            <div class="program-header-">
                                <img src="../gallery/home4.jpeg" alt="">
                            </div>

                            <div class="program-header-text">
                                <h2>Alooŋ</h2>
                                <p>Music, Worship & Creative Arts Development</p>
                            </div>
                        </div>

                        <div class="program-main">
                            <p>
                                Alooŋ develops young worship leaders, singers, musicians, and creatives who inspire faith, healing, unity, and community connection through music, worship, and artistic expression.
                                <br><br>
                                This ministry gives young people confidence, belonging, creative expression, leadership skills, and emotional encouragement while strengthening unity and spiritual growth through worship and arts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="join-programs">
                <a href="../join/">Join Our Program</a>
            </div>
        </div>
    </section>


    <style>
        /* DESKTOP VIEW */
        @media screen and (min-width: 800px) {
            .programs-container{
                position: relative;
                background: rgba(0,0,0,0.1);
                width: 100%;
                padding: 2rem;
                display: flex;
                justify-content: center;
                max-width: 100dvw;
            }

            .programs{
                position: relative;
                width: 100%;
                background: white;
                border-radius: 0.5rem;
                max-width: 1440px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 2rem;
                padding: 4rem 2rem;
            }

            .programs-header{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction; row;
                justify-content: center;
            }

            .programs-header h1{
                font-family: 'Oswald';
                font-weight: 600;
                color: var(--blue2);
                font-size: 2rem;
            }

            .programs-main{
                position: relative;
                width: 100%;
                overflow-x: hidden;
                display: flex;
                flex-direction: column;
                gap: 2rem;
            }

            .programs-main .programs-text{
                position: relative;
                width: 100%;
            }

            .programs-main .programs-text p{
                font-size: 0.95rem;
                font-weight: 400;
                color: rgba(0,0,0,0.9);
                text-align: justify;

            }

            .programs-main .programs-content{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .programs-main .programs-content .program{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: row;
                gap: 2rem;
                padding: 1.5rem;
                box-shadow: 1px 1px 5px rgba(0,0,0,0.05);
                border: 2px solid rgba(0,0,0,0.05);
                border-radius: 0.25rem;
            }

            .programs-main .programs-content .program:hover{
                /* scale: 0.995; */
                background: rgba(0,0,250,0.025);
                transition: 150ms;
            }

            .programs-main .programs-content .program:nth-child(even){
                display: flex;
                flex-direction: row-reverse;
            }

            .programs-main .programs-content .program .program-header{
                position: relative;
                height: 16rem;
                width: 32rem;
                height: max-content;
                border-radius: 0.25rem;
            }

            .programs-main .programs-content .program .program-header img{
                position: relative;
                height: 16rem;
                min-height: 16rem;
                max-height: 16rem;
                width: 32rem;
                object-fit: cover;
                border-radius: 0.5rem;
            }

            .programs-main .programs-content .program .program-header .program-header-text{
                z-index: 2;
                position: absolute;
                top: 0;
                height: 100%;
                width: inherit;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: rgba(0,0,0,0.75);
                border-radius: 0.5rem;
            }

            .programs-main .programs-content .program .program-header .program-header-text:hover{
                background: black;
                transition: 150ms;
            }

            .programs-main .programs-content .program .program-header .program-header-text h2{
                color: var(--gold);
                font-family: 'Oswald';
                font-size: 4.5rem;
                font-weight: 500;
            }

            .programs-main .programs-content .program .program-header .program-header-text p{
                color: white;
                font-weight: 500;
                font-size: 0.95rem;
            }

            .programs-main .programs-content .program .program-main p{
                font-size: 1rem;
                text-align: justify;
            }

            .join-programs{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                margin-top: 2rem;
            }

            .join-programs a{
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0.5rem 1.5rem;
                background: var(--blue2);
                color: white;
                font-family: 'Oswald';
                font-weight: 400;
                font-size: 1rem;
                text-decoration: none;
                border: 2px solid transparent;
                border-radius: 0.25rem;
            }

            .join-programs a:hover{
                background: transparent;
                color: var(--blue2);
                border: 2px solid var(--blue2);
                transition: 150ms;
            }
        }

        /* MOBILE VIEW */
        @media screen and (max-width: 800px){
            .programs-container{
                position: relative;
                background: rgba(0,0,0,0.1);
                width: 100%;
                padding: 2rem 1rem;
                display: flex;
                justify-content: center;
                max-width: 100dvw;
            }

            .programs{
                position: relative;
                width: 100%;
                max-width: calc(100% - 2rem);
                background: white;
                border-radius: 0.5rem;
                max-width: 1440px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 2rem;
                padding: 2rem 1rem 4rem 1rem;
            }

            .programs-header{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction; row;
                justify-content: center;
            }

            .programs-header h1{
                font-family: 'Oswald';
                font-weight: 600;
                color: var(--blue2);
                font-size: 1.5rem;
            }

            .programs-main{
                position: relative;
                width: 100%;
                overflow-x: hidden;
                display: flex;
                flex-direction: column;
                gap: 2rem;
            }

            .programs-main .programs-text{
                position: relative;
                width: 100%;
            }

            .programs-main .programs-text p{
                font-size: 0.9rem;
                font-weight: 400;
                color: rgba(0,0,0,0.9);
                text-align: justify;

            }

            .programs-main .programs-content{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }

            .programs-main .programs-content .program{
                position: relative;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
                box-shadow: 2px 2px 5px rgba(0,0,0,0.05);
                border: 2px solid rgba(0,0,0,0.05);
                border-radius: 0.5rem;
            }

            .programs-main .programs-content .program:hover{
                /* scale: 0.995; */
                background: rgba(0,0,250,0.025);
                transition: 150ms;
            }

            .programs-main .programs-content .program .program-header{
                position: relative;
                height: 10rem;
                width: 100%;
                height: max-content;
                border-radius: 0.25rem;
            }

            .programs-main .programs-content .program .program-header img{
                position: relative;
                height: 10rem;
                min-height: 10rem;
                max-height: 10rem;
                width: 100%;
                object-fit: cover;
                border-radius: 0.25rem;
            }

            .programs-main .programs-content .program .program-header .program-header-text{
                z-index: 2;
                position: absolute;
                top: 0;
                height: 100%;
                width: inherit;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: rgba(0,0,0,0.75);
                border-radius: 0.25rem;
                padding: 1rem;
            }

            .programs-main .programs-content .program .program-header .program-header-text:hover{
                background: black;
                transition: 150ms;
            }

            .programs-main .programs-content .program .program-header .program-header-text h2{
                color: var(--gold);
                font-family: 'Oswald';
                font-size: 3rem;
                font-weight: 500;
            }

            .programs-main .programs-content .program .program-header .program-header-text p{
                color: white;
                font-weight: 500;
                font-size: 0.8rem;
                text-align: center;
            }

            .programs-main .programs-content .program .program-main p{
                font-size: 1rem;
                text-align: justify;
            }

            .join-programs{
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                margin-top: 2rem;
            }

            .join-programs a{
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0.5rem 1.5rem;
                background: var(--blue2);
                color: white;
                font-family: 'Oswald';
                font-weight: 400;
                font-size: 0.9rem;
                text-decoration: none;
                border: 2px solid transparent;
                border-radius: 0.25rem;
            }

            .join-programs a:hover{
                background: transparent;
                color: var(--blue2);
                border: 2px solid var(--blue2);
                transition: 150ms;
            }
        }

    </style>


    <?php
        include "../components/footer.php";
    ?>
</body>
</html>