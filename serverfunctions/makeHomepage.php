<?php
$conn = mysqli_connect($servername, $username, $password, $database);

$sections = array();
$result = mysqli_query($conn, "SELECT id, title FROM sections");
while ($row = $result->fetch_assoc()) {
    $sections[] = $row;
}
$sections = json_encode($sections);

$lessons = array();
$result = mysqli_query($conn, "SELECT * FROM lessons");
while ($row = $result->fetch_assoc()) {
    $lessons[] = $row;
}
$nlessons = count($lessons);
$lessons = json_encode($lessons);

$ncomments = array();
$result = mysqli_query($conn, "SELECT posttitle, COUNT(*) as n FROM comments GROUP BY posttitle;");
while ($row = $result->fetch_assoc()) {
    $ncomments[] = $row;
}
$ncomments = json_encode($ncomments);

$progresstext = "";
$completed = "[]";
if (isset($_SESSION["secret"])) {
    $secret = mysqli_real_escape_string($conn, $_SESSION["secret"]);
    $result = mysqli_query($conn, "SELECT secret FROM users WHERE secret='$secret' LIMIT 1;");
    if (mysqli_num_rows($result) > 0) {
        $completed = array();
        $result = mysqli_query($conn, "SELECT posttitle, completetime FROM lessoncompletions WHERE usersecret='$secret';");
        while ($row = $result->fetch_assoc()) {
            $completed[] = $row;
        }
        $ncompleted = count($completed);
        $completed = json_encode($completed);
        $donepercent = round(($ncompleted / $nlessons) * 100);
        $progresstext = 'document.getElementById("progress").style.width = "' . $donepercent . '%"';
    }
}

$conn->close();

echo "
    <script id='rawdata'>
        var SECTIONS = $sections;
        var LESSONS = $lessons;
        var COMPLETED = $completed;
        var NCOMMENTS = $ncomments;
        $progresstext;
    </script>
";
