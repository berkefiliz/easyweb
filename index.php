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
        <?php include "./sharedhtml/header.html"; ?>
        <div id="content">
            <div id="intro">
                <p>Learn the very basics of web design without the complicated vocabulary!</p>
                <button id="register" onclick="window.location = '/register.php'">Start now</button>
            </div>
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