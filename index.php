<!DOCTYPE html>
<html>
    <head>
        <title>Easy Web</title>
        <link rel="stylesheet" href="styles/styles.css" />
        <link rel="stylesheet" href="styles/homepage.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        />
    </head>
    <body>
        <?php include "./components/header.php"; ?>
        <div id="content">
            <?php
                if (isset($logged)) {
                    echo "
                        <div id='welcome' class='info'>
                            <h3>Welcome!</h3>
                            <p>Currently logged in as user @$logged!</p>
                            <p>Soon here will be a progress bar!</p>
                        </div>
                    ";
                } else {
                    echo "
                        <div id='welcome' class='info'>
                            <h3>Web design, simplified</h3>
                            <p>Learn the very basics without difficult terminology.</p>
                            <ul>
                                <li>Read short, concise and interactive classes</li>
                                <li>Join the discussion in the comments</li>
                                <li>Track your progress</li>
                            </ul>
                            <br>
                            <button id='register' class='button-lg' onclick=\"window.location = '/register.php'\">Register now</button>
                            <button id='login' class='button-lg button-outline' onclick=\"window.location = '/login.php'\">Login</button>
                        </div>
                    ";
                }
            ?>
        </div>
    </body>
</html>

<?php include "./serverfunctions/makeHomepage.php"; ?>

<script>
    let content = document.getElementById("content");
    SECTIONS.forEach((section) => {
        content.innerHTML += `
            <h2 id=section-${section.id}>${section.title}</h2>
        `;
        let lessons = LESSONS.filter(
            (lesson) => lesson.section == section.id
        ).sort((a, b) => (a.level > b.level ? 1 : -1));
        lessons.forEach((lesson) => {
            content.innerHTML += `
                <div class="item">
                    <div class="img-wrapper">
                        <img src="./thumbnails/${lesson.image}.png" />
                    </div>
                    <div class="desc-wrapper">
                        <p class="name">${lesson.title}</p>
                        <p class="desc">${lesson.desc}</p>
                    </div>
                </div>
            `
        });
    });
</script>