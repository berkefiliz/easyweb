<?php
include "./serverfunctions/secrets.php";
include "./serverfunctions/loginCheck.php";
?>

<style>
    header {
        background-color: #2d3032;
        border-radius: 1em;
        padding: 2rem;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px,
            rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    header > a {
        text-decoration: none;
        font-size: 2rem;
        color: white;
    }

    header,
    nav {
        margin: 0 auto;
        max-width: 76rem;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        font-size: 1rem;
    }

    nav {
        padding: 1.8rem 0 0 0;
    }

    .nav-buttons > a {
        text-decoration: none;
        color: #2d3032;
        transition: color 0.1s ease-in-out;
        display: block;
        float: left;
        margin-left: 1.5rem;
    }

    .nav-buttons > a > i {
        margin-right: 0.5rem;
    }

    .nav-buttons > a:hover {
        color: #2d97cb;
    }

    @media screen and (max-width: 80rem) {
        header,
        nav {
            max-width: 100vw;
            padding: 1.5rem;
            border-radius: 0;
        }
    }
</style>

<header>
    <a style="margin: 0" href="/">Easy Web</a>
</header>
<nav>
    <div class="nav-buttons">
        <a href="/"><i class="fa-solid fa-house"></i> Home</a>
        <a href="/resources.php"><i class="fa-solid fa-book"></i> Resources</a>
        <a href="/contact.php"><i class="fa-solid fa-at"></i> Contact</a>
        <a href="https://github.com/berkefiliz/easyweb" target="_blank"
            ><i class="fa-solid fa-code"></i> Source</a
        >
    </div>
    <div class="nav-buttons">
        <?php
            if (isset($_SESSION["secret"]) && $_SESSION["secret"]) {
                echo '<a href="/serverfunctions/logoutUser.php"
                    ><i class="fa-solid fa-lock"></i> Logout</a
                >';
            } else {
                echo '<a href="/login.php"
                    ><i class="fa-solid fa-key"></i> Login</a
                >';
            };
        ?>
    </div>
</nav>
