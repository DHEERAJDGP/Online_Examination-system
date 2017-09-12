<?php 

//this page contain front page of login

  session_start();
    if(isset($_SESSION["usename"]))
        { session_destroy();}
?>
<!DOCTYPE html>
<html>
<head>
<title>
student_login
</title>
</head>
<script>
</script>
<style>

#title_heder
{ 
  
 margin-top:2px;
 width:99.5%;
 height:20%;
 background:Orange ;
 padding-top:.5%;
 border-style: solid ;	
}
#title_footer
{   
 width:100%;
 height:5%;
 background:Orange ;
 padding-bottom:4%;
 
 position: absolute;
 bottom:-70px;
    
}


/* Full-width input fields */
input[name=uname], input[name=psw],input[name=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[name=place],input[name=birth],input[name=mob],input[name=gender] {
    width:40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.button3 {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}





.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin:-3% auto 8% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.button1 {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:20%;
}
   .button1:hover{
	background-color:#009900;
}           
.button2 {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.button2:hover{
	background-color:red;
}
</style>
<!--startpop -->
<style>
#body
{
  margin:0%;
  background:PeachPuff;  
}
#loginbox
{
	width:400px;
	height:300px;
	border:1px solid #000;
	position:absolute;
    top:150px; /*[wherever you want it]*/
    left:450px; /*[wherever you want it]*/
	background:#FFD1A3 ;
}

hr{position: 
   relative; 
   width:0px; 
   height:280px; 
   top:-215px;
   left:210px;
   color:Purple;
   }
   
 #newuser{
	 position:absolute;
    top:180px; /*[wherever you want it]*/
    left:73%;
    
	
    height:40%;	
 } 
#log
{ 
  margin-left:130px;	
} 

#img{
	margin-left:200px;
}	



</style>
<link rel="icon" href="image\icon1.ico" type="image/x-icon">
<!--endpop -->
<?php set_include_path("\php/header.php");?>
<body id="body" >
<div id="title_heder">
<center><h1> eExamination - Online Examination System</h1></center>
</div>
<!--startpop -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" style="width:40%;height:90%;" action="php\serverconn.php" method="post">
    

    <div class="container">
	<h3><u>USER REGISTATION</u></h3>	
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required> 
	  <label><b>Place</b></label>
      <input type="text" placeholder="Enter place" name="place" required>&nbsp;&nbsp;&nbsp;
      <label><b>Dob</b></label>&nbsp;&nbsp;
      <input type="date" name="birth" required>
	  <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      
	  <label><b>Mob</b></label>
	  <input type="tel" placeholder="Enter mobile no."   name="mob" required />&nbsp;
	  <label><b>Gender</b></label>
	  <input type="text" placeholder="Gender" name="gender" required>
	  <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
	  
	  
	  
        <input type="checkbox" required> I agree
      <button class="button button3" type="submit">Register</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>


<!--endpop -->

<img id="img"  style="margin-left:70px; margin-top:90px;height:180px;" src="image\12.png" />



<div id="loginbox" ><h3 style="margin-left:30px;">Already a Member?Login</h3>
<form action="php\log_conn.php" method="POST">
<label style="margin-left:70px;">UserName:</label><br>
<input style="margin-left:70px;margin-top:5px;" type="text" name="username" required/><br><br>
<label style="margin-left:70px;">Password:</label><br>
<input style="margin-left:70px;margin-top:5px;" type="password" name="password" required />
<br>
<input style="margin-left:70px;margin-top:15px;" class="button button1" type="submit"   value="Login"/>
<br>
  <?php if(isset($_SESSION['invalid_pass']))
        {  
	
	      echo "<div >
		   <h5 style='position:absolute;color:red;left:18%;'>Invalid username or Password </h5>
           </div>";
		  session_destroy();
		} 	
  ?>
<a style="margin-left:70px;" href="" >Forget Password </a>
</form>

</div>

<hr/>
<div id="newuser">
<h3>New User? Register Now</h3>
<h5>To start the test,click here to registor first</h5>

<button class="button button2" onclick="document.getElementById('id01').style.display='block'"><span>Register</span></button>

	<?php 
	if(isset($_SESSION["successfully"]))
        {  //echo $_SESSION["successfully"];
	
	      echo "<div style='position:absolute;color:red;'>
		   <h4>You have successfully created you account</h4>
		  </div>";
		  session_destroy();
		}
		
	   if(isset($_SESSION["already"]))
        {  
	
	      echo "<div >
		   <h3 style='position:absolute;color:red;'>user name already exists </h3><br>
           <h4 style='position:absolute;color:blue;'> you can try another user name....</h4>
		  </div>";
		  session_destroy();
		} 	
		
		
		?>

</div>


<div id="title_footer">
<center><h4> eExamination ---  Developed by Dheeraj kumar</h4></center>
</div>
</body>



<script>


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
 


</script>
</html>
