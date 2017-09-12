<?php

//this page contain next or back question update

session_start();
include_once("conn_db.php");

   $u_nam=$_SESSION["usename"];

  // print_r($_POST);
   $ques=$_POST['ques_id'];//question number
   //echo $_POST['text1'];
   
   $sql ="SELECT * FROM ques WHERE ques_id ='$ques'";
   //print($sql);
   $res = mysqli_query($conn,$sql) or die(mysql_error());
    
	while ($row= mysqli_fetch_array($res, MYSQL_BOTH)) 
	{
    //printf ("ID: %d email: %s", $row[0], $row["email"]);
	 $ques_id=$row["ques_id"];
	 $question=$row["question"];
	 $option1=$row["option1"];
	 $option2=$row["option2"];
	 $option3=$row["option3"];
	 $option4=$row["option4"];
	 $answer=$row["answer"];
	 
	 	 echo $ques."\n";
         echo "<FORM  id='qesform'  method ='post' action ='submit.php'>"; 
         echo "<h3>".$ques_id.".".$question."?"."</h3>";
		 echo "<div id='qs'>";
         echo "<h4>1. <input type='radio'id='op1' Name ='opt' onclick='radval(id,opt.value)' value='$option1'/>".$option1." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. <input type='radio' id='op2' Name ='opt' onclick='radval(id,opt.value)' value='$option2'/>".$option2."</h4>";
		 echo "<h4>3. <input type='radio' id='op3' Name ='opt' onclick='radval(id,opt.value)' value='$option3'/>".$option3."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. <input type='radio' id='op4' Name ='opt' onclick='radval(id,opt.value)' value='$option4'/>".$option4."</h4>";
		 echo "</div></br>";
		 echo "</br><input class='button button3' type='button' value='LOCK' onclick='lockp(opt.value,$ques_id)'/>";
	     echo "</FORM>";
}
   $sql2 ="SELECT u_ans FROM user_answ WHERE ques_id='$ques' and username='$u_nam';";
   $res2 = mysqli_query($conn,$sql2);
	 $user_ans='@';	         
	
	if (mysqli_num_rows($res) > 0)
	{
     while ($row= mysqli_fetch_array($res2,MYSQL_BOTH)) 
	 {
	  $user_ans=$row["u_ans"];
	 }
	}
	
	echo "\n".$user_ans; 
	
	
	
	
	//echo "wrong";
   
?>