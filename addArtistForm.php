<?php
require_once "./config.php";


$artistname = mysqli_real_escape_string($link, $_REQUEST['artist_name']);



$sql = "INSERT INTO Artists (artistName) VALUES ('$artistname')";

if (mysqli_query($link, $sql)) {
    header("Location: addArtistForm.html");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>