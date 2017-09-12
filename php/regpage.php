<?php

//this page after varified user and question  



session_start();

 if(!isset($_SESSION["usename"]))
 {	 
   header("Location:log_sess.php");
 }
else
{
  include("header.php");
	
 include_once("conn_db.php");

$name=$_SESSION["usename"];


   $sql ="SELECT * FROM ques WHERE ques_id ='1' ;";
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
	 
    }

   $sql2 ="SELECT u_ans FROM user_answ WHERE ques_id ='1' and username='$name' and lock_ans=1 ;";
   $res2 = mysqli_query($conn,$sql2);
	 $user_ans='@';	         
	
	if (mysqli_num_rows($res2) > 0)
	{
     while ($row= mysqli_fetch_array($res2,MYSQL_BOTH)) 
	 {
	  $user_ans=$row["u_ans"];
	  
	 }
	}	
mysqli_close($conn);	
?>
	
	
<!DOCTYPE html>
<html>
<head>
<title>
student_login
</title>
</head>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<script> </script>

 




<style>


#bar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #FFD147;
    position:absolute;
    top:21.3%;
	left:36px;
    width: 53%;
}

#bar li {
    float: left;
	margin-left:49px;
}

#bar li a {
    display: block;
    color: #990099;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	background-color: #FFD10F;
	cursor:pointer;
}

#bar li a:hover:not(.active) {
    background-color: #FF9933;
}

.active {
    background-color: #4CAF50;
}

#quesdiv{
	padding:20px;
	margin-top:7%;
	background-color:#FFD670;
	height:272px;
	width:50%;
	position:relative;
	
    left:36px;
	}
	
#timerdiv{
	padding:20px;
	top:16%;
	background-color:#F0D1D1;
	height:450px;
	width:17%;
	position:absolute;
    left:79%;
	}

#counter{
	padding-top:10px;
	background-color:#FFA68C;
	height:45px;
	width:68%;
	position:relative;
    left:16%;
	top:-1px;
}
#optireview{
	position:obsolute;
	margin-bottom:12px;
	hover
}
#optireview:hover{
	background-color:#0033CC;
}
td:hover{
	ackground-color:green;
	cursor:pointer;
}	



.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button3 {
    background-color: #A3FF7A;
    color: black;
    border: 2px solid #4CAF50;
	
}

.button3:hover {
    background-color: #4CAF50;
    color: white;
}
.button2 {
    background-color: #8CBAFF;
    color: black;
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}
.button4 {
    background-color: #FFAD99;
    color: black;
    border: 2px solid #f44336;
	
}

.button4:hover {
    background-color: #f44336;
    color: white;
}

#qs{
	position:relative;
    left:1%;
	top:-7px;
	}

#qdiv{
	position:relative;
    left:1%;
	top:6px;
}	
	
	
	
</style>
<body>

<div id="bar">
<ul>
  <li><a onclick="jump(1)" >APTITUDE</a></li>
  <li><a onclick="jump(12)" >REASONING</a></li>
  <li><a onclick="jump(22)" >ENGLISH</a></li>
  <li><a onclick="jump(32)" >COMPUTER</a></li>
</ul>
</div>



<?php 
echo "<div id='quesdiv' >";
echo "<FORM  id='qesform' method ='post' action ='submit.php'>"; 
         echo "<h3>".$ques_id.".".$question."?"."</h3>";
		 echo "<div id=qs>";
         echo "<h4>1. <input type='radio' id='op1' Name='opt' onclick='radval(id,opt.value)' value='$option1'/>".$option1." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. <input type='radio' id='op2' Name ='opt' onclick='radval(id,opt.value)' value='$option2'/>".$option2."</h4>";
		 echo "<h4>3. <input type='radio' id='op3' Name='opt' onclick='radval(id,opt.value)' value='$option3'/>".$option3."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. <input type='radio' id='op4' Name ='opt' onclick='radval(id,opt.value)' value='$option4'/>".$option4."</h4>
		 </div></br>";
		 echo"</br><input class='button button3' type='button' value='LOCK' onclick='lockp(opt.value,$ques_id)'/>";
	     
		 
echo "</FORM>";
echo "</div>"  ;
?>





<div id="qdivopt" style="background-color:#FFC20A;width:28.6%; margin-left:27%;margin-top:4px;">

<form>&nbsp;
<Input  class='button button4' type='submit'  VALUE ='SUBMIT' form="qesform" />
<input class="button button2" type="button" value="BACK" onclick="backp()"/>
<input class="button button2" type="button" value="NEXT" onclick="nextp()" />

</form>


</div>

<div id="timerdiv">
<div style="position:absolute;font-size:20px;top:6px;left:44px;background-color:yellow;width:190px;"><?php echo 'Welocome '.$_SESSION["usename"]; ?></div>
<h1 id="counter"></h1>
<h4>QUESTION_option</h4>
<table id="optireview">
<tr style="background-color:#FF994C">
<td style="width:40px;height:40px;" onclick="jump(1)" >1
</td>
<td style="width:40px;" onclick="jump(2)">2
</td>
<td style="width:40px;" onclick="jump(3)">3
</td>
<td style="width:40px;" onclick="jump(4)" >4
</td>
<td style="width:40px;"onclick="jump(5)" >5
</td>
<td style="width:40px;" onclick="jump(6)" >6
</td>
</tr>
<tr style="background-color:#FF994C" >
<td style="width:40px;height:40px;" onclick="jump(7)" >7
</td>
<td style="width:40px;" onclick="jump(8)" >8
</td>
<td style="width:40px;" onclick="jump(9)" >9
</td>
<td style="width:40px;" onclick="jump(10)" >10
</td>
<td style="width:40px;" onclick="jump(11)"  >11
</td>
<td style="width:40px;" onclick="jump(12)" >12
</td>
</tr>
<tr style="background-color:#FF994C"  >
<td style="width:40px;height:40px;" onclick="jump(13)" >13
</td>
<td style="width:40px;" onclick="jump(14)" >14
</td>
<td style="width:40px;" onclick="jump(15)" >15
</td>
<td style="width:40px;" onclick="jump(16)" >16
</td>
<td style="width:40px;" onclick="jump(17)" >17
</td>
<td style="width:40px;" onclick="jump(18)" >18
</td>
</tr>
<tr style="background-color:#FF994C">
<td style="width:40px;height:40px;" onclick="jump(13)" >19
</td>
<td style="width:40px;" onclick="jump(19)" >20
</td>
<td style="width:40px;" onclick="jump(20)" >21
</td>
<td style="width:40px;" onclick="jump(21)" >22
</td>
<td style="width:40px;" onclick="jump(22)" >23
</td>
<td style="width:40px;" onclick="jump(13)" >24
</td>
</tr>
<tr style="background-color:#FF994C">
<td style="width:40px;height:40px;" onclick="jump(13)" >25
</td>
<td style="width:40px;" onclick="jump(26)" >26
</td>
<td style="width:40px;" onclick="jump(27)" >27
</td>
<td style="width:40px;" onclick="jump(28)" >28
</td>
<td style="width:40px;" onclick="jump(29)" >29
</td>
<td style="width:40px;" onclick="jump(30)" >30
</td>
</tr>
<tr style="background-color:#FF994C">
<td style="width:40px;height:40px;" onclick="jump(31)" >31
</td>
<td style="width:40px;" onclick="jump(32)" >32
</td>
<td style="width:40px;" onclick="jump(33)" >33
</td>
<td style="width:40px;" onclick="jump(34)" >34
</td>
<td style="width:40px;" onclick="jump(35)">35
</td>
<td style="width:40px;" onclick="jump(36)" >36
</td>
</tr>
<tr style="background-color:#FF994C">
<td style="width:40px;height:40px;" onclick="jump(37)" >37
</td>
<td style="width:40px;" onclick="jump(38)" >38
</td>
<td style="width:40px;" onclick="jump(39)">39
</td>
<td style="width:40px;" onclick="jump(40)" >40
</td>
<td style="width:40px;" onclick="jump(41)" >41
</td>
<td style="width:40px;" onclick="jump(42)" >42
</td>
</tr>

</table>


</div>
<script type="text/javascript">
          var ques_id=2 ;  //<?php echo  $ques_id;?>
		  var b=0;
		  var that=this;
	       var id=0;
		   var op;
		   var num;
		  function backp() {
					if(ques_id>1){
						
			          var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
                       xmlhttp.onreadystatechange = function() {
					        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    //console.log(xmlhttp.responseText);
                    var a = xmlhttp.responseText;
                    //console.log(a);
					//alert(a);
					var temp= a.split("\n");
					console.log(temp);
					//ques_id=parseInt(temp[0])-1;
					document.getElementById("quesdiv").innerHTML = temp[1];
					//alert(ques_id);
					if(temp[2]!='@')
					{
					 document.getElementById("op1").disabled=true;
	                 document.getElementById("op2").disabled=true;
	                 document.getElementById("op3").disabled=true;
	                 document.getElementById("op4").disabled=true;	
					 //console.log(chk);	
			         document.getElementById(temp[2]).checked=true;
	                 document.getElementById(temp[2]).disabled=false;
					}	
					
                    }
            };
            xmlhttp.open("POST", "ques.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				     ques_id-=1;
					 var param = "ques_id="+ques_id;
					 xmlhttp.send(param);

		  }}
						  
		  
		  function nextp() {
			  
			  if(ques_id<42){
			          var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
                       xmlhttp.onreadystatechange = function() {
					        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    //console.log(xmlhttp.responseText);
                    var a = xmlhttp.responseText;
                    //console.log(a);
					     //alert(a);
					var temp= a.split("\n");
					console.log(temp);
					ques_id=parseInt(temp[0]);
					document.getElementById("quesdiv").innerHTML = temp[1];
					//console.log(ques_id);
					if(temp[2]!='@')
					{
					 document.getElementById("op1").disabled=true;
	                 document.getElementById("op2").disabled=true;
	                 document.getElementById("op3").disabled=true;
	                 document.getElementById("op4").disabled=true;	
						
			         document.getElementById(temp[2]).checked=true;
					 document.getElementById(temp[2]).disabled=false;
	                
					}	
					
			    }
            };
            xmlhttp.open("POST", "ques.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				
						ques_id+=1;
					
					 var param = "ques_id="+ques_id;
					 xmlhttp.send(param);
					 }			  
						  
		  }


function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        //This script expects an element with an ID = "counter". You can change that to what ever you want. 
        var counter = document.getElementById("counter");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+ current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        //console.log(counter.innerHTML);
		if( seconds > 0 ) {
            setTimeout(tick, 1000);
        } else {
            if(mins > 1){
                countdown(mins-1);           
            }
        }
    }
    tick();
}

function radval(op,a)   // function only for testing values
{    
   that.op=op ; // id of options
   var opt=a;// options containing value
   console.log("idop="+op);
   console.log("opt="+opt);
}

function lockp(b,q_id)
{  if(b!='')
	{
	 that.b=b;        //user answer conatain 
     that.id=q_id;	 //question number
	 
	 document.getElementById("op1").disabled=true;
	 document.getElementById("op2").disabled=true;
	 document.getElementById("op3").disabled=true;
	 document.getElementById("op4").disabled=true;	
	
	 
	 console.log("q_id="+q_id+","+"u_ans="+b);
	 updans(that.id,that.op) // we send question number and user answer option
	 
	}
   else
	   
   { 
       
   console.log("invalid choice");}
}



function Ajax(){
	           
	var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
                       xmlhttp.onreadystatechange = function() 
					   {
					        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
							{ //console.log(xmlhttp.responseText);
                                var a = xmlhttp.responseText;
	                            document.getElementById('optireview').innerHTML=xmlhttp.responseText;
								//console.log(a);
		                       setTimeout('Ajax()',500);
	                        }
					   };	
	                          xmlhttp.open("POST","queresult.php",true);
							  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							  data=null;
							  xmlhttp.send(data); 
							  console.log(data);
                       }


                      window.onload=function(){
						countdown(60);
                        Ajax();						
	                    check();
                       }

					   
					   
		function updans(q_id,op){
	         console.log(q_id+"ok"+op);  
	var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
                       xmlhttp.onreadystatechange = function() 
					   {
					        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
							{ //console.log(xmlhttp.responseText);
                                var a = xmlhttp.responseText;
	                            document.getElementById('optireview').innerHTML=xmlhttp.responseText;
								console.log(a);
		                    }
					   };	
	                          xmlhttp.open("POST","updans.php",true);
							  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							  updata="id="+q_id+"@"+op; // ques_id + option number
							  xmlhttp.send(updata); 
							  console.log(updata);
                       }			   
					   
					   
	function check()
	{
	  chk='<?php echo $user_ans; ?>';
	  console.log(chk);
	  
	               if(chk!='@')
					{
					 document.getElementById("op1").disabled=true;
	                 document.getElementById("op2").disabled=true;
	                 document.getElementById("op3").disabled=true;
	                 document.getElementById("op4").disabled=true;	
					 console.log(chk);	
			         document.getElementById(chk).checked=true;
	                 document.getElementById(chk).disabled=false;
					}  
		
		
	}			   
					   
	
    function jump(num) {
			  ques_id=num;
			  if(ques_id<=42){
			          var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
                       xmlhttp.onreadystatechange = function() {
					        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    //console.log(xmlhttp.responseText);
                    var a = xmlhttp.responseText;
                    //console.log(a);
					     //alert(a);
					var temp= a.split("\n");
					console.log(temp);
					ques_id=parseInt(temp[0]);
					document.getElementById("quesdiv").innerHTML = temp[1];
					//console.log(ques_id);
					if(temp[2]!='@')
					{
					 document.getElementById("op1").disabled=true;
	                 document.getElementById("op2").disabled=true;
	                 document.getElementById("op3").disabled=true;
	                 document.getElementById("op4").disabled=true;	
						
			         document.getElementById(temp[2]).checked=true;
					 document.getElementById(temp[2]).disabled=false;
	                
					}	
					
			    }
            };
            xmlhttp.open("POST", "ques.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				
						
					
					 var param = "ques_id="+ques_id;
					 xmlhttp.send(param);
					 }			  
						  
		  }	
					   
					   
					   
					   
					   

</script>
</body>
</html>
<?php }?>