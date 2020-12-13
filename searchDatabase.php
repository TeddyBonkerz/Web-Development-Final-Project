<?php
require_once "./config.php";


    $selection = $_POST['filter'];
    $arg = $_POST['searchId'];
    $sql = "";

    if($selection == 'artist_name'){
        $sql = "SELECT * FROM Albums WHERE artistName = '$arg'";
    }else if($selection == 'album_name'){
        $sql = "SELECT * FROM Albums WHERE albumName = '$arg'";
    }else if($selection == 'year'){
        $sql = "SELECT * FROM Albums WHERE albumYear = '$arg'";
    }else if($selection == 'show_all'){
        $sql = "SELECT * FROM Albums";
    }

    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>Artist Name</th>";
                    echo "<th>Album </th>";
                    echo "<th>Year Released</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['artistName'] . "</td>";
                    echo "<td>" . $row['albumName'] . "</td>";
                    echo "<td>" . $row['albumYear'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

mysqli_close($link);
?>
