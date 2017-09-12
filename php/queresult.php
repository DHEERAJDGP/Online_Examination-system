<?php

//this page for selection of visited question color 

session_start();
$u_nam=$_SESSION["usename"];
include_once("conn_db.php");

  //var $color=array_fill(0,4, NULL);
    $color= array_fill(0, 43, '#FF994C');
 
   $sql ="SELECT ques_id FROM user_answ WHERE lock_ans=1 and username='$u_nam'";
   //echo $sql;
   $res = mysqli_query($conn,$sql) or die(mysql_error());
    
	
	while ($row= mysqli_fetch_array($res, MYSQL_BOTH)) 
	{
    //printf ("ID: %d email: %s", $row[0], $row["email"]);
	 $ques_id=$row["ques_id"];
	 $color[$ques_id]='red';
	}
   
    //echo $ques_id ;
	
	
	
	
	
	          echo "<tr style='background-color:#FF994C'>";
			  
              echo "<td onclick='jump(1)' style='width:40px;height:40px;background-color:".$color[1]."'>1</td>";
              echo "<td onclick='jump(2)' style='width:40px;background-color:".$color[2]."'>2</td>";
              echo "<td onclick='jump(3)' style='width:40px;background-color:".$color[3]."'>3</td>";
              echo "<td onclick='jump(4)' style='width:40px;background-color:".$color[4]."'>4</td>";
              echo "<td onclick='jump(5)' style='width:40px;background-color:".$color[5]."'>5</td>";
              echo "<td onclick='jump(6)' style='width:40px;background-color:".$color[6]."'>6</td></tr>";
                   
              echo "<tr  style='background-color:#FF994C'>";
              echo "<td onclick='jump(7)' style='width:40px;height:40px;background-color:".$color[7]."'>7</td>";
              echo "<td onclick='jump(8)' style='width:40px;background-color:".$color[8]."'>8</td>";
              echo "<td onclick='jump(9)' style='width:40px;background-color:".$color[9]."'>9</td>";
              echo "<td onclick='jump(10)' style='width:40px;background-color:".$color[10]."'>10</td>";
              echo "  <td onclick='jump(11)' style='width:40px;background-color:".$color[11]."'>11</td>";
              echo "  <td onclick='jump(12)' style='width:40px;background-color:".$color[12]."'>12</td></tr>";
              
			  echo "<tr style='background-color:#FF994C'>";
              echo "<td onclick='jump(13)' style='width:40px;height:40px;background-color:".$color[13]."'>13</td>";
              echo "<td onclick='jump(14)' style='width:40px;background-color:".$color[14]."'>14</td>";
              echo "<td onclick='jump(15)' style='width:40px;background-color:".$color[15]."'>15</td>";
              echo "<td onclick='jump(16)' style='width:40px;background-color:".$color[16]."'>16</td>";
              echo "  <td onclick='jump(17)' style='width:40px;background-color:".$color[17]."'>17</td>";
              echo "  <td onclick='jump(18)' style='width:40px;background-color:".$color[18]."'>18</td></tr>";
              
			  echo "<tr style='background-color:#FF994C'>";
              echo "<td onclick='jump(19)' style='width:40px;height:40px;background-color:".$color[19]."'>19</td>";
              echo "<td onclick='jump(20)' style='width:40px;background-color:".$color[20]."'>20</td>";
              echo "<td onclick='jump(21)' style='width:40px;background-color:".$color[21]."'>21</td>";
              echo "<td onclick='jump(22)' style='width:40px;background-color:".$color[22]."'>22</td>";
              echo "  <td onclick='jump(23)' style='width:40px;background-color:".$color[23]."'>23</td>";
              echo "  <td onclick='jump(24)' style='width:40px;background-color:".$color[24]."'>24</td></tr>";

			  echo "<tr style='background-color:#FF994C'>";
              echo "<td onclick='jump(25)' style='width:40px;height:40px;background-color:".$color[25]."'>25</td>";
              echo "<td onclick='jump(26)' style='width:40px;background-color:".$color[26]."'>26</td>";
              echo "<td onclick='jump(27)' style='width:40px;background-color:".$color[27]."'>27</td>";
              echo "<td onclick='jump(28)' style='width:40px;background-color:".$color[28]."'>28</td>";
              echo "  <td onclick='jump(29)' style='width:40px;background-color:".$color[29]."'>29</td>";
              echo "  <td onclick='jump(30)' style='width:40px;background-color:".$color[30]."'>30</td></tr>";
              
			  echo "<tr style='background-color:#FF994C'>";
              echo "<td onclick='jump(31)' style='width:40px;height:40px;background-color:".$color[31]."'>31</td>";
              echo "<td onclick='jump(32)' style='width:40px;background-color:".$color[32]."'>32</td>";
              echo "<td onclick='jump(33)' style='width:40px;background-color:".$color[33]."'>33</td>";
              echo "<td onclick='jump(34)' style='width:40px;background-color:".$color[34]."'>34</td>";
              echo "  <td onclick='jump(35)' style='width:40px;background-color:".$color[35]."'>35</td>";
              echo "  <td onclick='jump(36)' style='width:40px;background-color:".$color[36]."'>36</td></tr>";
              
			  echo "<tr style='background-color:#FF994C'>";
              echo "<td onclick='jump(37)' style='width:40px;height:40px;background-color:".$color[37]."'>37</td>";
              echo "<td onclick='jump(38)'style='width:40px;background-color:".$color[38]."'>38</td>";
              echo "<td onclick='jump(39)' style='width:40px;background-color:".$color[39]."'>39</td>";
              echo "<td onclick='jump(40)'style='width:40px;background-color:".$color[40]."'>40</td>";
              echo "  <td onclick='jump(41)' style='width:40px;background-color:".$color[41]."'>41</td>";
              echo "  <td onclick='jump(42)' style='width:40px;background-color:".$color[42]."'>42</td></tr>";
  
?>