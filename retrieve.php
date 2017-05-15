<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "testdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "<h2>search gatepass of students</h2>";
 echo '<h3> <a href="search.php">search gatepass</h3></a>';

// Attempt select query execution
$sql = "SELECT * FROM gatepass";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<h1> List of Applicants for Gatepass</h1>";
        echo "<table border = 1>";
            echo "<tr>";
                echo "<th>name</th>";
                 echo "<th>email</th>";
                  echo "<th>cd</th>";
                  echo "<th>fromdate</th>";
                   echo "<th>returndate</th>";
                   echo "<th>luggage</th>";
                  echo "<th>purpose</th>";
                  echo "<th>hostel</th>";
                   echo "<th>rollno</th>";
                   echo "<th>phone</th>";
                   echo "<th>code</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            
                echo "<td width =15>" . $row['name'] . "</td>";
                echo "<td width = 20>" . $row['email'] . "</td>";
                echo "<td width =15>" . $row['cd'] . "</td>";
                echo "<td width =15>" . $row['fromdate'] . "</td>";
                echo "<td width =15>" . $row['returndate'] . "</td>";
                echo "<td width =15>" . $row['luggage'] . "</td>";
                echo "<td width =15>" . $row['purpose'] . "</td>";
                echo "<td width =15>" . $row['hostel'] . "</td>";
                echo "<td width =15>" . $row['roll'] . "</td>";
                echo "<td width =15>" . $row['phone'] . "</td>";
                echo "<td width =15>" . $row['code'] . "</td>";
                
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