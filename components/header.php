<?php
include "./serverfunctions/secrets.php";
include "./serverfunctions/loginCheck.php";
?>

<style>
    header {
        background-color: #2d3032;
        border-radius: 1em;
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
        padding: 2rem;
    }

    nav {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        font-size: 1rem;
    }

    #nav-buttons > a {
        text-decoration: none;
        color: #2d3032;
        transition: color 0.1s ease-in-out;
        display: block;
        float: right;
        margin-left: 1.5rem;
        margin-top: 0.5rem;
    }

    #nav-buttons > a > i {
        margin-right: 0.5rem;
    }

    #nav-buttons > a:hover {
        color: #2d97cb;
    }

    #search {
        flex: 0.8;
        max-width: 30rem;
        display: flex;
    }

    #search > i {
        padding: 0.5rem;
    }

    #search > input {
        flex: 1;
        border: none;
        padding: 0.5rem;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px,
            rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    #search > input:focus {
        outline: 1px solid #666;
    }

    #search > button {
        border: none;
        padding: 0.5rem;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px,
            rgba(0, 0, 0, 0.23) 0px 3px 6px;
        cursor: pointer;
        margin-left: 0.5rem;
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
    <div id="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Search" />
        <button>Go</button>
    </div>
    <div id="nav-buttons">
        <a href="/serverfunctions/logoutUser.php"
            ><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a
        >
        <a href="https://github.com/berkefiliz/easyweb" , target="_blank"
            ><i class="fa-solid fa-code"></i> Source</a
        >
    </div>
</nav>
