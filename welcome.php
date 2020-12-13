<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
   header("location: login.php");
   exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Welcome</title>
   <style type="text/css">
      body {
         font: 14px sans-serif;
         text-align: center;
      }
   </style>
</head>

<body>
   <h1> Artist and Album Database</h1>
   <div class="page-header">
      <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
   </div>
   <h3> Which task would you like to perform ? </h3>
   <ul>
      <li><a href="./addArtistForm.php">Add an artist</a></li>
      <li><a href="./addAlbumForm.php">Add and Album</a></li>
      <li><a href="./searchDataBase.php">Search for Artist or Album</a></li>
   </ul>
   <p>
      <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
   </p>
</body>

</html>