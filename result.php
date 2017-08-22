<?php
require "connection.php";
$sql = "SELECT * FROM mytable";
global $connect;
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=20%>";
         echo "<thead>Database Data</thead>";
            echo "<tr>";
                echo "<th>Serail.NO</th>";
                echo "<th>COURSEID</th>";
                echo "<th>COURSENAME</th>";
                echo "<th>COURSETYPE</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['sl'] . "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Database empty plz save records first";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
// Close connection
mysqli_close($connect);
  echo   " <br > <br ><a href='index.php' >Go Back </a>";
?>