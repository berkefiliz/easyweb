<!DOCTYPE html>
<html>
    <head>
        <title>Easy Web: Register</title>
        <link rel="stylesheet" href="styles/styles.css" />
        <link rel="stylesheet" href="styles/forms.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        />
        <script>
            function focusText(id) {
                let div = document.getElementById("focus-desc");
                switch (id) {
                    case "username":
                        div.innerHTML =
                            "Your username is unique to you.<br>It must be between 3 and 30 characters long.";
                        break;
                    case "email":
                        div.innerHTML =
                            "Optional. This will be used only if you request a new password.";
                        break;
                    case "password":
                        div.innerHTML =
                            "Your password needs to be between 8 and 50 characters.<br>Recommended to use upper-/lowercase letters, numbers and punctuation.<br>Do not share your password with anyone!";
                        break;
                    case "password2":
                        div.innerHTML =
                            "Confirm your password by retyping it.<br>Passwords in both fields should match.";
                        break;
                    case "register":
                        div.innerHTML =
                            "Ready to start?<br>You can always change your email and password!";
                        break;
                }
            }
        </script>
    </head>
    <body>
        <?php include "./components/header.php"; ?>
        <div id="content">
            <div class="info" id="error"></div>
            <form
                id="register-form"
                method="post"
                action="./serverfunctions/userRegister.php"
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
                            maxlength="30"
                            required
                        />
                    </div>
                    <div>
                        <i class="fa-solid fa-at"></i>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Email (optional)"
                            onfocus="focusText('email')"
                            tabindex="6"
                            maxlength="150"
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
                            tabindex="3"
                            maxlength="50"
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
                            tabindex="4"
                            maxlength="50"
                            required
                        />
                    </div>
                </div>
                <input id="secret" type="hidden" name="secret"  />
                <div id="button-wrapper">
                    <button
                        id="goback"
                        class="button-lg button-outline"
                        type="reset"
                        onclick="window.location = '/index.php'"
                    >
                        Go back
                    </button>
                    <button
                        id="register"
                        class="button-lg"
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
            switch (error) {
                case "password_match":
                    errortext = "Passwords do not match!";
                    break;
                case "password_length":
                    errortext =
                        "The password must be between 8 and 50 characters long!";
                    break;
                case "password_alpha":
                    errortext =
                        "The password must only contain letters and numbers!";
                    break;
                case "email_bad":
                    errortext =
                        "The email provided is not valid!";
                    break;
                case "username_length":
                    errortext =
                        "The username must be between 3 and 30 characters long!";
                    break;
                case "username_alpha":
                    errortext =
                        "The username must only contain letters and numbers!";
                    break;
                case "username_exists":
                    errortext = "This username is already taken!";
                    break;
                default:
                    errortext = "Something went wrong, please try again!";
                    break;
            }
            errordiv.style.display = "block";
            errordiv.innerHTML = errortext;
        }

        let secret = "";
        let characters =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            let charactersLength = characters.length;
        for (var i = 0; i < 30; i++) {
            secret += characters.charAt(
                Math.floor(Math.random() * charactersLength)
            );
        }

        let secretform = document.getElementById("secret");
        secretform.value = secret;
        secret = null;
    </script>
</html>
