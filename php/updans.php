<?php

//this page inser answer of given question

session_start();
include_once("conn_db.php");
 
   //print_r($_POST['id']);
   $myArray=explode('@',$_POST['id']);
  // print_r($myArray);
  
   $ques_id=$myArray[0];
   $u_ans=$myArray[1];
   $u_nam=$_SESSION["usename"];
   //echo $sql;
   
   $lock=1;
               
    
			   $sq="SELECT * FROM user_answ where ques_id=$ques_id and lock_ans=1 and username='$u_nam'";
			   $result = mysqli_query($conn,$sq);
               $row = mysqli_num_rows($result);
			    //echo($row);

			 if($row<1)         //check whether question is locked already or not.
			 {
			    	if($ques_id>0)
                      {
	                    $sql="INSERT INTO user_answ (ques_id,u_ans,lock_ans,username) VALUES ('".$ques_id."','".$u_ans."','".$lock."','".$u_nam."')";
      
                        $res = mysqli_query($conn,$sql) or die(mysql_error());
    
                      }
			 }	
			else
             
             {
				 echo "Already exists";
			 }		 
 
 
 
?>

