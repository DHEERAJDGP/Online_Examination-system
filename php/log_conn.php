 <?php
 
 // this question for varification of user
 
   session_start();
   
 include_once("conn_db.php");

    //print_r($_POST);
	 
	 $username=$_POST['username'];

     $password=$_POST['password'];
	 

       if(isset($_POST['username']) && trim($_POST['password']) != "")
       {
            $sql = "SELECT password FROM reg WHERE username='$username'";
	        //echo $sql;
	        $res = mysqli_query($conn,$sql);
		        //print_r($res); 
				 if (mysqli_num_rows($res) > 0)
				 {
		             while ($row = mysqli_fetch_array($res, MYSQL_BOTH)) 
					 {   
				         //print_r($row);
                        //printf ("ID: %s  Name: %s", $row[0], $row["name"]);
						$pass=$row["password"];
						//print($password);
                     }
					 
					 if($pass==$password)
					 {
						$_SESSION["usename"]=$username;
						//header("refresh:.1,url=regpage.php");
                        header("Location:log_sess.php"); 						
					 }
					 else 
				         { 
					       $_SESSION['invalid_pass']="Invalid username or Password ";
					       //echo "<h3 style='background:red;width:19%;'>username or Password Invalid.</h3>";
						   header("Location:../index.php");
                         }
					 
					 
				 }	 
					 
			     else 
				 {  
			        $_SESSION['invalid_pass']="username or Password Invalid";
			        //echo "<h1 style='color:red'>username or Password Invalid.</h1>";
					//header("Location:../index.php");
			     }
	   
	        }			 
			
	

       


    //echo "hi"; 
    mysqli_close($conn);
 
 
 ?>