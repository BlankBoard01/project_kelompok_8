<?php

// Create connection

//CREATE USER 'new_user'@'localhost' IDENTIFIED BY 'password';
//GRANT ALL PRIVILEGES ON * . * TO 'new_user'@'localhost';
//FLUSH PRIVILEGES;



$link = mysqli_connect("localhost","donat","11sija2","kelompok8");

// Check connection


echo 
"DATABASE Connected successfully";
//mysqli_close($conn);

$sql = "SELECT * FROM form";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>menu</th>";
                echo "<th>harga</th>";
                echo "<th>deskripsi</th>";
                echo "<th>gambar</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['menu'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "<td>" . $row['deskripsi'] . "</td>";
                echo "<td>" . $row['gambar'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>