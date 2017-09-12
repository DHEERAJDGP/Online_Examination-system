<?php

//this page for session expired 

session_start();

 if(isset($_SESSION["usename"]))
 {
	 $u_nam=$_SESSION["usename"];
     include_once("conn_db.php");
	 //print_r($conn);
	 
	 $sql1 ="SELECT submit FROM reg where username='$u_nam' and submit=1";
	 
     print($sql1);
	 $result = mysqli_query($conn, $sql1);
	 print_r($result);
	 if (mysqli_num_rows($result) > 0)
	 { 
	                                                                         //header("Location:regpage.php"); 	 
      header("Location:submit.php");
	 }
	 
	 else
	 {
		header("Location:regpage.php");
	 }
	                                                                         //session_destroy();
	 
 }
 else
 {
	 include("header2.php");
     echo "<div><img style='margin-left:14%;margin-top:2%;'src='13.png'  />";	 
	 echo "<h1 style='float:right;margin-right:10%;'><marquee style='margin-top:12%; color:#FFFFFF ;width:430px;' bgcolor='#000080' scrollamount='17'>Sorry... please Login.</marquee>";
     echo "<marquee direction='right' style='margin-top:12%; color:#FFFFFF ;width:430px;' bgcolor='#000080' scrollamount='17'>Sorry... please Login.</marquee></h1></div>";

 }
?>