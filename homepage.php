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
   <title>Home</title>
   <style type="text/css">
      body {
         font: 14px sans-serif;
         text-align: center;
      }
      a:hover{
         background: yellow;
      }
      .content{
         margin: auto
      }
      .task-list{
         display: inline-block; text-align: left;
      }
   </style>
</head>

<body>
   <h1> Artist and Album Database</h1>
   <div class="page-header">
      <h1>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
   </div>
   <div class="content">
      <h3> Which task would you like to perform ? </h3>
      <ul class="task-list">
         <li><a href="./addArtistForm.php">Add an artist</a></li>
         <li><a href="./addAlbumForm.php">Add and Album</a></li>
         <li><a href="./searchDataBase.php">Search for Artist or Album</a></li>
      </ul>
   </div>
   <p>
      <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
   </p>
</body>

</html>