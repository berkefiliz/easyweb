<!DOCTYPE html>
<html>

<?php include "./serverfunctions/postPrepare.php"; ?>

<head>
    <title><?php echo "Easy Web: " . $postheader ?></title>
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="stylesheet" href="styles/post.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <?php
    include "./components/header.php";
    ?>
    <div id="content">
        <div id='welcome' class='info'>
            <h3><?php echo $postheader ?></h3>
            <p><?php echo $postdesc ?></p>
            <div id="post-detail">
                <span><i class="fa-solid fa-clock"></i>01 Jan 1970</span>
                <span><i></i></span>
                <span><i class="fa-solid fa-eye"></i>0</span>
                <span><i class="fa-solid fa-comment"></i></i>0</span>
                <span><i class="fa-solid fa-star"></i></i>5.0</span>
            </div>
        </div>
        <?php include "./lessons/" . $postkey . ".html" ?>
        <?php
        if (isset($_SESSION["secret"]) && $_SESSION["secret"]) {
            echo '<form action="./serverfunctions/postComplete.php" method="post">
                <input id="title" type="hidden" name="title" value="<?php echo $postkey ?>"  />
                <button class="button-lg" type="submit">Mark as complete</button>
            </form>';
        }
        ?>
    </div>
</body>

</html>