<!DOCTYPE html>
<html>
    <head>
        <title>Easy Web: Register</title>
        <link rel="stylesheet" href="styles/styles.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        />
    </head>
    <body>
        <?php include "./sharedhtml/header.html"; ?>
        <div id="content">
            <h2>Details</h2>
            <form id="register" method="post" action="../actions/comment.php">
                <input id="username" type="text" name="post" required />
            </form>
        </div>
    </body>
</html>