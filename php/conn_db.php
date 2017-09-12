 <?php
 
/*$connection = mysql_connect("localhost","root","") or die("couldn't connect to SQL server");
mysql_select_db("online_exam") or die("couldn't select DB");

$connection = mysql_connect("mysql.hostinger.in","u404011229_dhee","dgp123") or die("couldn't connect to SQL server");
	mysql_select_db("u404011229_exam") or die("couldn't select DB");*/	
	
/*	
 $conn = mysqli_connect("mysql.hostinger.in","u404011229_dhee","SXHGEDZ2q1mR","u404011229_exam");
   // Check connection
   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());
   }	
	
*/	
	
	
   // Create connection
    $conn = mysqli_connect("localhost","root","","online_exam");
   // Check connection
   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());
   }


   
   
   
   
?>