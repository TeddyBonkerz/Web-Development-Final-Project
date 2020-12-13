<?php
require_once "./config.php";

$artistname = mysqli_real_escape_string($link, $_REQUEST['artist_name']);
$albumname = mysqli_real_escape_string($link, $_REQUEST['album_name']);
$year = mysqli_real_escape_string($link, $_REQUEST['year']);

$sql = "INSERT INTO Albums (artistName, albumName, albumYear) VALUES ('$artistname', '$albumname', '$year')";

if (mysqli_query($link, $sql)) {
    header("Location: addAlbumForm.html");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>