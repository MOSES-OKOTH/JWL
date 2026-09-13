<section class="side-panel-container">
    <div class="side-panel">
        <h1>Admin Panel</h1>
        <nav>
            <a href=""><i class="fa fa-sliders"></i> Dashboard</a>
            <a href=""><i class="fa fa-coins"></i> Contributions</a>
            <a href=""><i class="fa fa-users"></i> Joinees</a>
            <a href=""><i class="fa fa-calendar"></i> Events</a>
            <a href=""><i class="fa fa-user-plus"></i> User Database</a>
        </nav>

        <div class="signout">
            <a href=""><i class="fa-solid fa-right-from-bracket"></i> Signout</a>
        </div>
    </div>
</section>

<style>
    /* DESKTOP VIEW */
    @media screen and (min-width: 800px) {
        body{
            display: flex;
            flex-direction: row;
            position: relative;
            height: 100%;
            width: 100%;
            overflow-y: hidden;
        }

        .side-panel-container{
            display: flex;
            flex-direction: column;
            position: relative;
            height: 100dvh;
            padding: 2rem 1rem;
            background: var(--blue1);
        }

        .side-panel{
            display: flex;
            flex-direction: column;
            position: relative;
            height: 100%;
            width: max-content;
        }

        .side-panel h1{
            color: white;
            font-weight: 500;
            font-family: 'Orbitron';
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
        }

        .side-panel nav{
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .side-panel nav a{
            text-decoration: none;
            color: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
        }

        .side-panel nav a:hover{
            background: rgba(255,255,255,0.15);
        }

        .side-panel .signout{
            position: relative;
            margin-top: auto;
            position: relative;
            width: 100%;
        }

        .side-panel .signout a{
            text-decoration: none;
            color: white;
            font-weight: 500;
            padding: 0.5rem;
            border-radius: 0.25rem;
            position: relative;
            width: 100%;
        }

        .side-panel .signout a:hover{
            color: red;
            /* background: rgba(255,255,255,0.15); */
        }
    }

    /* MOBILE VIEW */
</style>