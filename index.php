<!DOCTYPE html>
<html>

<head>
    <title>Easy Web</title>
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="stylesheet" href="styles/homepage.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div id="content">
        <?php
        if (isset($logged) && $islogged) {
            echo "
                <div id='welcome' class='info'>
                    <h3>Welcome!</h3>
                    <p>Currently logged in as user @$logged!</p>
                    <div id='progressbar'>
                        <div id='progress'></div>
                    </div>
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
    <footer>
        <i class="fa-solid fa-screwdriver-wrench"></i>
        <p>Please note that the website is still work in progress!</p>
        <p>There may be missing pages and functionality.</p>
    </footer>
</body>

</html>

<?php include "./serverfunctions/makeHomepage.php"; 
?>

<script>
    // List completed lessons
    let completed = [];
    COMPLETED.forEach((lesson) => {
        completed.push(lesson["posttitle"]);
    });
    // Create item grid
    let content = document.getElementById("content");
    SECTIONS.forEach((section) => {
        let newcontent = "";
        newcontent += `
            <h2 id=section-${section.id}>${section.title}</h2>
            <div class="item-grid">
        `;
        let lessons = LESSONS.filter(
            (lesson) => lesson.section == section.id
        ).sort((a, b) => (a.level > b.level ? 1 : -1));
        lessons.forEach((lesson) => {
            let iscomplete = completed.indexOf(lesson.link) > -1;
            newcontent += `
                <div id='post-${lesson.link}' class="item" onclick="window.location = '/lesson.php?id=${lesson.link}'">
                    <div class="img-wrapper">
                        <img src="./thumbnails/${lesson.image}.png" />
                    </div>
                    <div class="desc-wrapper">
                        <p class="name">${iscomplete ? "<i class='fa-solid fa-check'></i>" : lesson.level} - <span ${iscomplete ? "class='strike'" : ""}>${lesson.title}</span></p>
                        <p class="desc">${lesson.desc}</p>
                        <div class="detail">
                        ` + (iscomplete ? "DONE!" : "") + `
                            <span><i class="fa-solid fa-eye"></i>0</span>
                            <span><i class="fa-solid fa-comment"></i></i>0</span>
                            <span><i class="fa-solid fa-star"></i></i>5.0</span>
                        </div>
                    </div>
                </div>
            `
        });
        newcontent += "</div>";
        content.innerHTML += newcontent;
    });
    document.getElementById("rawdata").remove();
</script>