<!DOCTYPE html>
<html>
    <head>
        <title>Easy Web: Register</title>
        <link rel="stylesheet" href="styles/styles.css" />
        <link rel="stylesheet" href="styles/register.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        />
        <script>
            function focusText(id) {
                let div = document.getElementById("focus-desc");
                switch(id) {
                    case "username":
                        div.innerHTML = "Your username is unique to you.<br>It must be between 3 and 30 characters long.";
                        break;
                    case "title":
                        div.innerHTML = "Optional. Your title could be your job, or anything similar.<br>Or just put the name of your favourite Pokemon!";
                        break;
                    case "password":
                        div.innerHTML = "Your password needs to be between 8 and 50 characters.<br>Use letters or numbers only.<br>Do not share your password with anyone!";
                        break;
                    case "password2":
                        div.innerHTML = "Confirm your password by retyping it.<br>Passwords in both fields should match.";
                        break;
                    case "register":
                        div.innerHTML = "Ready?<br>You can always change your title and password!";
                        break;
                }
            }
        </script>
    </head>
    <body>
        <?php include "./sharedhtml/header.html"; ?>
        <div id="content">
            <div id="error"></div>
            <form
                id="register-form"
                method="post"
                action="./serverfunctions/registerUser.php"
            >
                <h2>Register</h2>
                <div class="form-grid">
                    <div>
                        <i class="fa-solid fa-user"></i>
                        <input
                            id="username"
                            type="text"
                            name="username"
                            placeholder="Username*"
                            tabindex="1"
                            onfocus="focusText('username')"
                            onmouseover="focusText('username')"
                            required
                        />
                    </div>
                    <div>
                        <i class="fa-solid fa-briefcase"></i>
                        <input
                            id="title"
                            type="title"
                            name="title"
                            placeholder="Title / Profession"
                            onfocus="focusText('title')"
                            onmouseover="focusText('title')"
                            tabindex="2"
                        />
                    </div>
                    <div>
                        <i class="fa-solid fa-lock"></i>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Password*"
                            onfocus="focusText('password')"
                            onmouseover="focusText('password')"
                            tabindex="3"
                            required
                        />
                    </div>
                    <div>
                        <i class="fa-solid fa-lock"></i>
                        <input
                            id="password2"
                            type="password"
                            name="password2"
                            placeholder="Confirm password*"
                            onfocus="focusText('password2')"
                            onmouseover="focusText('password2')"
                            tabindex="4"
                            required
                        />
                    </div>
                </div>
                <input type="hidden" value="" />
                <div id="button-wrapper">
                    <button
                        id="goback"
                        type="reset"
                        style="background-color: #d3d3d3"
                        onclick="window.location = '/index.php'"
                    >
                        Go back
                    </button>
                    <button
                        id="register"
                        type="submit"
                        tabindex="5"
                        onfocus="focusText('register')"
                        onmouseover="focusText('register')"
                    >
                        Register
                    </button>
                </div>
            </form>
            <div id="focus-desc"></div>
        </div>
    </body>

    <script>
        let url = window.location.href;
        if (url.indexOf("?") > -1) {
            let error = url.split("?error=")[1];
            let errordiv = document.getElementById("error");
            let errortext = "Unknown error";
            console.log(error)
            switch(error) {
                case "password_match":
                    errortext = "Passwords do not match!"
                    break;
            }
            errordiv.style.display = "block";
            errordiv.innerHTML = errortext;
        }
    </script>
</html>
