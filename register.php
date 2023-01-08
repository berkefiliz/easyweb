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
    </head>
    <body>
        <?php include "./sharedhtml/header.html"; ?>
        <div id="content">
            <form
                id="register-form"
                method="post"
                action="./serverfunctions/registerUser.php"
            >
                <h2>Details</h2>
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
                        <i class="fa-solid fa-at"></i>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Email*"
                            tabindex="2"
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
                            tabindex="4"
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
                    <button id="register" type="submit" tabindex="5">Register</button>
                </div>
            </form>
        </div>
    </body>
</html>
