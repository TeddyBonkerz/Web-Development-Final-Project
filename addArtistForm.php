<?php
require_once "./config.php";


$artistname = mysqli_real_escape_string($link, $_REQUEST['artist_name']);
$artistname_err = "";

if (empty(trim($_POST["artist_name"]))) {
    $artistname_err = "Please enter an Artist Name.";
} else {
    $sql = "INSERT INTO Artists (artistName) VALUES ('$artistname')";

    if (mysqli_query($link, $sql)) {
        echo "Artist added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Artist</title>

    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Add an Artist</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($artistname_err)) ? 'has-error' : ''; ?>">
                <label>Artist Name</label>
                <input type="text" name="artist_name" id="artistname" value="<?php echo $artistname; ?>">
                <span class="help-block"><?php echo "<br>" + $artistname_err; ?></span>
            </div>

            <input type="submit" class="submit-button" value="Submit">

            <p><a href="./homepage.php">Return to Homepage</a>.</p>
        </form>
    </div>
</body>

</html>