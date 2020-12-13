<?php

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
            <div class="form-group <?php echo (!empty($artistiname_err)) ? 'has-error' : ''; ?>">
                <label>Artist Name</label>
                <input type="text" name="artistname" class="form-control" value="<?php echo $artistname; ?>">
                <span class="help-block"><?php echo "<br>"; echo $artistiname_err; ?></span>
            </div>

            <input type="submit" class="submit-button" value="Submit">

            <p><a href="./homepage.php">Return to Homepage</a>.</p>
        </form>
    </div>
</body>

</html>