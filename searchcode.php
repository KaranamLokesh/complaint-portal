<?php

$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'shop';

// Database Connection String
$con = mysql_connect($db_hostname,$db_username,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_database, $con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <form action="" method="post">  
Search: <input type="text" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  
    </head>
    <body>

<?php
        
if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM code WHERE code LIKE '".$term."'"; 
$r_query = mysql_query($sql); 
echo "<table border =1>";
while ($row = mysql_fetch_array($r_query)){  

echo ' status: ' .$row['status'];  


 
}
    
}
        echo "<table>";

?>
    </body>
</html>