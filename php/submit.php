<?php

//this page for submit question 


 include("header2.php");
 session_start();
 //$_SESSION["usename"]="dheeraj";
 if(isset($_SESSION["usename"]))
 {
       include_once("conn_db.php");
	   
       $u_name=$_SESSION['usename'];
 
        
	   $sql1="UPDATE reg set submit=1 where username='$u_name'";
	   $res1= mysqli_query($conn,$sql1) or die(mysql_error());
	   //print_r($res1);
 
 
       /* $sql ="SELECT user_answ.ques_id, user_answ.username, ques.answer FROM user_answ INNER JOIN ques ON user_answ.u_ans = ques.answer AND user_answ.ques_id = ques.ques_id;";*/
       
	   $sql2 ="SELECT COUNT( ques_id ) FROM user_answ where username='$u_name' and lock_ans=1"; 
       //echo $sql2; 
       $res2 = mysqli_query($conn,$sql2) or die(mysql_error());
	   
       while ($row2= mysqli_fetch_array($res2, MYSQL_BOTH)) 
	   { //print_r($row2);
         $point2=$row2[0];
	   }
   
   
   
   
   
       $sql ="SELECT COUNT( user_answ.ques_id ) FROM user_answ INNER JOIN ques ON user_answ.u_ans = ques.answer AND user_answ.ques_id = ques.ques_id and username='$u_name' ;"; 
   
       $res = mysqli_query($conn,$sql) or die(mysql_error());
       while ($row= mysqli_fetch_array($res, MYSQL_BOTH)) 
	   {
         $point=$row[0];
	   }
   // echo $point;
 
  echo "</br></br><h1 style='color:red;text-align:center; position: absolute;left:35%;top:78%;'>THANK YOU</h1>";
  echo "<b><div id='marksboard' style='color:yellow;text-align:center; position: absolute;left:32%;top:25%;font-size:30px;'>".'User_ID : '.$_SESSION['usename']."</div></b>";
  echo "<b><div id='marksboard' style='color:yellow;text-align:center; position: absolute;left:32%;top:33%;font-size:30px;'>".'Total attempt question : '.$point2."</div></b>";
  echo "<b><div id='marksboard' style='color:pink;text-align:center; position: absolute;left:32%;top:40%;font-size:30px;'>".'Total Right question : '.$point."</div></b>";
  
  echo "<b><div id='marksboard' style='color:red;text-align:center; position: absolute;left:36%;top:47%;font-size:50px;'>".$point." point"."</div></b>";
  echo "<img  style='margin-left:300px; margin-top:-35px;height:50%;' src='../image\mark.png' />";
  
  session_destroy();
 }
 
 
 else
 {
	 
   header("Location:log_sess.php"); 
	 
	 
 }
 
 
 
 
 
 
 
 
 
 
 
 
 ?>