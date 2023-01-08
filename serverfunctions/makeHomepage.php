<?php
include "secrets.php";

$conn = mysqli_connect($servername, $username, $password, $database);

$sections = array();
$result = mysqli_query($conn, "SELECT * FROM sections");
while ($row = $result->fetch_assoc()) {
    $sections[] = $row;
}
$sections = json_encode($sections);

$lessons = array();
$result = mysqli_query($conn, "SELECT * FROM lessons");
while ($row = $result->fetch_assoc()) {
    $lessons[] = $row;
}
$lessons = json_encode($lessons);

// $stmt = $conn -> prepare("UPDATE `postindex` SET `views` = `views` + 1 WHERE `uid` = ?");
// $stmt -> bind_param("s", $uid);
// $stmt -> execute();
// $stmt -> close();
$conn->close();

echo "<script>var SECTIONS = " . $sections . "; var LESSONS = " . $lessons . ";</script>";
