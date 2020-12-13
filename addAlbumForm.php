<?php
require_once "./config.php";

$albumname = mysqli_real_escape_string($link, $_REQUEST['album_name']);

$sql = "INSERT INTO Albums (albumName) VALUES ('$albumname')";

if (mysqli_query($link, $sql)) {
    header("Location: addAlbumForm.html");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>