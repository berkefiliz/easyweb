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
                <?php
                if ($completetime != "") {
                    echo '<span><i class="fa-solid fa-clock"></i>Completed: ' . $completetime . '</span><span><i></i></span>';
                }
                ?>
                <span><i class="fa-solid fa-eye"></i>0</span>
                <span><i class="fa-solid fa-comment"></i></i>0</span>
                <span><i class="fa-solid fa-star"></i></i>5.0</span>
            </div>
        </div>
        <article>
            <?php
            include "./lessons/" . $postkey . ".html";
            if ($islogged) {
                echo '<form id="complete" action="./serverfunctions/postComplete.php" method="post">
                        <p><i class="fa-solid fa-' . ($completed ? 'xmark' : 'check') . '"></i></p>
                        <input id="title" type="hidden" name="title" value="' . $postkey . '"  />
                        <button class="button-lg" type="submit">Mark as ' . ($completed ? 'in' : '') . 'complete</button>
                    </form>';
            } else {
                echo '<div id="complete">
                        <p><i class="fa-solid fa-backward"></i></p>
                        <button class="button-lg" type="submit" onclick="window.location = \'/index.php\'">Go back</button>
                    </div>';
            }
            ?>
        </article>
    </div>
</body>

</html>