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

    #login,
    #login > * {
        transition: color 0.1s ease-in-out;
        cursor: pointer;
    }
    #login > i {
        color: #2d3032;
        padding: 0.5rem;
    }
    #login:hover,
    #login:hover > i {
        color: #555759;
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
    <?php
        if (isset($logged)) {
            $target =  "./serverfunctions/logoutUser.php";
        } else {
            $target =  "./login.php";
        }
    ?>
    <div id="login" onclick="window.location = '<?php echo $target; ?>'">
        <i class="fa-solid fa-user"></i>
        <span><?php if (isset($logged)) {echo "Logout";} else {echo "Login";}?></span>
    </div>
</nav>