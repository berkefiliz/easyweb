<!DOCTYPE html>
<html>

<head>
    <title>Easy Web: Contact</title>
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="stylesheet" href="styles/homepage.css" />
    <link rel="stylesheet" href="styles/contact.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <?php include "./components/header.php"; ?>
    <div id="content">
        <div id='welcome' class='info'>
            <h3>Contact form</h3>
            <p>As of now, this form is in my todo list. Please use the links provided below.</p>
        </div>
        <div id="card">
            <img src="./assets/profile.png" alt="Profile of me">
            <div id="desc-wrapper">
                <div id="social-wrapper">
                    <h2>Berke Filiz</h2>
                    <a class="social button-lg email" href="https://berkefiliz.com" target="_blank">
                        <i class="fa-solid fa-at"></i>
                    </a>
                    <a class="social button-lg keybase" href="https://keybase.io/berkefiliz" target="_blank">
                        <i class="fa-brands fa-keybase"></i>
                    </a>
                    <a class="social button-lg linkedin" href="https://www.linkedin.com/in/berke-filiz/" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
                <p id="desc">
                    I am a <u>web developer</u> and <u>junior data scientist</u>, currently located in the Netherlands.
                    <br><br>I think that starting is the most difficult part of learning a completely new skill.
                    With the amount of new terminology, the learning curve is often demotivating. With this blog,
                    I hope to give some context to complete beginners before they can delve condifently into
                    exploring web design on their own.
                </p>
            </div>
        </div>
    </div>
</body>

</html>