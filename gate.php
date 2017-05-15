<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="css/bootstrap">
<link rel="stylesheet"  href="css/bootstrap.min">
<link rel="stylesheet"  href="css/bootstrap-grid">
<link rel="stylesheet"  href="css/bootstrap-grid.min">
<link rel="stylesheet"  href="css/bootstrap-reboot">
<link rel="stylesheet"  href="css/bootstrap-reboot.min">
<title>Gate Pass</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="mystyles.css">
	<title>gate pass</title>
</head>
<body>

<div class="container">
  <h2>e-gate pass</h2>
    
      <?php
    
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
             
               
            
               
             $name=$_POST['name'];
             
             $email = $_POST['email'];
             $cd = $_POST['cd'];
             $fromdate = $_POST['fromdate'];
             
            $returndate = $_POST['returndate'];
              
              
              $luggage = $_POST['luggage'];
             $purpose = $_POST['purpose'];
             $hostel = $_POST['hostel'];
             $roll = $_POST['roll'];
             $phone = $_POST['phone'];
             $coupons = 1; //number of coupons
$size = 10; //number of characters
for ($i=0; $i<$coupons; $i++) {
   // Note that time() is not a very good random generator...
   $code= strtoupper(substr(md5(time().rand(10000,99999)), 0, $size));
             
            
            $sql = "INSERT INTO gatepass ". "(name,email, cd, fromdate,returndate,luggage,purpose,hostel,roll,phone,code
               ) ". "VALUES('$name','$email','$cd', '$fromdate' ,'$returndate','$luggage','$purpose','$hostel','$roll','$phone','$code')";
}
            mysql_select_db('testdb');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>   
  <form role="form" method="post" action="index.php">
  <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="cd">current date</label>
      <input type="date" class="form-control" id="cd" name="cd" placeholder="Enter today's date">
    </div>
    <div class="form-group">
      <label for="from">From</label>
      <input type="date" class="form-control" id="from" name="fromdate" placeholder="date of journey">
    </div>
     <div class="form-group">
      <label for="return">return on</label>
      <input type="date" class="form-control" id="return" name="returndate" placeholder="return date">
    </div>
     <div class="form-group">
      <label for="luggage">luggage(quantity)</label>
      <input type="number" class="form-control" id="luggage" name="luggage" placeholder="quantity">
    </div>
      <div class="form-group">
      <label for="purpose">purpose:</label>
      <input type="text" class="form-control" id="purpose" name="purpose" placeholder="Purpose">
    </div>
     <div class="form-group">
      <label for="hostel">hostel number</label>
      <input type="text" class="form-control" id="hostel" name="hostel" placeholder="ex: BH-1">
    </div>
     <div class="form-group">
      <label for="roll">Roll number</label>
      <input type="text" class="form-control" id="roll" name="roll" placeholder="ex:IPGXXXX-XXX">
    </div>
     <div class="form-group">
      <label for="phone">phonenumber</label>
      <input type="tel" class="form-control" id="phone" name="phone" placeholder="mobile">
    </div>
    
    <button type="submit" id = "add" name="add" class="btn btn-default">Submit</button>
  </form>
     <?php
         }
      ?>
  
</body>
</html>