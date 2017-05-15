




<?php
 $db=new mysqli('localhost','root','','shop');
     if(mysqli_connect_errno()){
        echo 'Could not connect to database:Plz try After Some time..';
        exit;
        }

$coupons = 1; //number of coupons
$size = 10; //number of characters
for ($i=0; $i<$coupons; $i++) {
   // Note that time() is not a very good random generator...
   $code= strtoupper(substr(md5(time().rand(10000,99999)), 0, $size));
   $qry="insert into code (code,status) values ('$code','received')";
   $result=$db->query($qry);
} 
echo "Your gatepass has been registered. you can track your gatepass status using:";
echo  $code;

echo '<h3> <a href="logout.php">logout</h3></a>';
echo '<h3> <a href="searchcode.php">search</h3></a>';
