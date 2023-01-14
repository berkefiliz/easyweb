<!DOCTYPE html>
<html>
    <head>
        <title>Easy Web: Login</title>
        <link rel="stylesheet" href="styles/styles.css" />
        <link rel="stylesheet" href="styles/forms.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        />
    </head>
    <body>
        <?php include "./components/header.php"; ?>
        <div id="content">
            <div id="error" class="info"></div>
            <form
                id="register-form"
                method="post"
                action="./serverfunctions/loginUser.php"
            >
                <h2>Login</h2>
                <div class="form-grid">
                    <div>
                        <i class="fa-solid fa-user"></i>
                        <input
                            id="username"
                            type="text"
                            name="username"
                            placeholder="Username*"
                            tabindex="1"
                            required
                        />
                    </div>
                    <div>
                        <i class="fa-solid fa-lock"></i>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Password*"
                            tabindex="2"
                            required
                        />
                    </div>
                </div>
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
                        tabindex="3"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </body>

    <script>
        let url = window.location.href;
        if (url.indexOf("?") > -1) {
            let error = url.split("?error=")[1];
            let errordiv = document.getElementById("error");
            let errortext = "Unknown error";
            switch (error) {
                case "wrong_credentials":
                    errortext = "Incorrect username or password!";
                    break;
                default:
                    errortext = "Something went wrong, please try again!";
                    break;
            }
            errordiv.style.display = "block";
            errordiv.innerHTML = errortext;
        }
    </script>
</html>
