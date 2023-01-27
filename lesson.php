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
            <h3>
                <?php echo ($completed ? "<i class='fa-solid fa-check'></i> " : ""); ?>
                <span <?php echo ($completed ? 'class="strike"' : ""); ?>>
                    <?php echo $postheader ?>
                </span>
            </h3>
            <p><?php echo $postdesc ?></p>
            <div id="post-detail">
                <?php
                if ($completetime != "") {
                    echo '<span><i class="fa-solid fa-clock"></i>Completed: ' . $completetime . '</span><span><i></i></span>';
                }
                ?>
                <span><i class="fa-solid fa-eye"></i><?php echo $postviews ?></span>
                <span><i class="fa-solid fa-comment"></i></i><?php echo $postncomments ?></span>
                <span><i class="fa-solid fa-star"></i></i>5.0</span>
            </div>
        </div>
        <article>
            <?php include "./lessons/" . $postkey . ".html"; ?>
            <form id="complete" action="./serverfunctions/postComplete.php" method="post">
                <p><i class="fa-solid fa-backward"></i></p>
                <button class="button-lg button-outline" type="button" onclick="window.location = '/index.php'">Go back</button>
                <?php
                if ($islogged) {
                    echo '
                        <input id="title" type="hidden" name="title" value="' . $postkey . '"  />
                        <button class="button-lg" type="submit">
                            <i class="fa-solid fa-' . ($completed ? 'xmark' : 'check') . '"></i> Mark as ' . ($completed ? 'in' : '') . 'complete
                        </button>
                    ';
                }
                ?>
            </form>
        </article>
        <?php 
            if (isset($_SESSION["secret"]) && $islogged) {
                echo '
                    <h3>Post a comment</h3>
                    <form id="comment-add" action="./serverfunctions/postComment.php" method="post">
                        <input type="hidden" name="posttitle" value="' . $postkey . '">
                        <textarea type="text" maxlength="1000" placeholder="Maximum 1000 characters" name="comment"></textarea>
                        <button type="submit" class="button-lg"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                ';
            }
        ?>
        <h3>Comments</h3>
        <div id="comments"></div>
    </div>
</body>

</html>

<script>
    let COMMENTS = <?php echo $comments; ?>;
    // let username = "<?php echo ($islogged ? $logged : ''); ?>";
    let commentdiv = document.getElementById("comments");
    COMMENTS.forEach((comment) => {
        commentdiv.innerHTML += `
            <div class="comment">
                <div class="comment-avatar">
                    <i class="fa-solid fa-${comment.username == 'berkefiliz' ? 'crown' : 'comment'}"></i>
                </div>
                <div class="comment-content">
                    <p class="comment-author">${comment.username}</p>
                    <p class="comment-text">${comment.comment.replace(/(?:\\(.))/g, '$1')}</p>
                    <div class="comment-controls">
                        <i class="fa-solid fa-chevron-up"></i>
                        <span>0</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        `;
    });
    if (COMMENTS.length == 0) {
        commentdiv.innerHTML += "<p>No comments yet</p>";
    }
</script>