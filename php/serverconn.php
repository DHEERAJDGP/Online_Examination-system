<?php
//this page for register its self


 session_start();

include_once("conn_db.php");
//echo "as";
//$mobile=$_POST['mob'];
//echo $mobile;
	
	if(isset($_POST['mob'] ))
	{


$username=$_POST['uname'];
$username=trim($username," ");
$username =str_replace(' ','',$username); 
$username=strtolower($username);           
$place=$_POST['place'];
$dob=$_POST['birth'];
$email=$_POST['email'];
$email=strtolower($email);
$mobile=$_POST['mob'];
$gender=$_POST['gender'];
$password=$_POST['psw'];

//$_SESSION["submit"]=0;

$submit=0;	
    
	           $result = mysql_query("SELECT * FROM reg where username='$username'");
               $row = mysql_num_rows($result);
			    //echo($row);

			 
	
	      if($row<1) 
		  {
	         $sql="INSERT INTO reg (username,place,dob,email,mobile,gender,password,submit) VALUES ('".$username."','".$place."','".$dob."','".$email."','".$mobile."','".$gender."','".$password."','".$submit."')";
             //echo $sql;
	
	         //print_r($_POST);
	         $res = mysqli_query($conn,$sql);
	
	         if(!$res)
		     {
		      die('Invalid query: ' . mysql_error());
		     }
             else
		     {
		     	  //echo "You have successfully created you account";
				  $_SESSION["successfully"]="You have successfully created you account" ;
				
			      header("Location:../index.php");
		     }		  
		  }
		  else
		  {
			 //echo "<h1>user name already exists....</h1>";
             //echo "<h2> you can try another user name....</h2>";
			 $_SESSION['already']="user name already exists....";
             header("Location:../index.php");			 
		  }
		  
		  
		  
		
	}
        mysqli_close($conn);      
		  
		  ?>
	
	


