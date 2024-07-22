  <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>
<style>
body {
	margin: 0;
	padding: 0;
	text-align: left;
	font: 12px Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #061C37;
	background: #EEEFE4;
	background-image:url(u3.jpg);
	background-repeat:repeat-x;
}
.form {
  position: relative;
  z-index: 1;
background-image:url(i1.jpg);  
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

select {
 font-family: "Roboto", sans-serif;
color:
border: 0;
border-radius: 4px;
box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
}

#menu
{
display:block;
float:left;
clear:both;
width:960px;
height:54px;
float:left;
clear:both;
background_color:balck;
}
</style>
<script>
function openWin() {


    window.open("adminpage.html",target="_self");

}
</script>

</head>

<body>
<img src="l1.png" align="left" height="80">
<div id="container">
		<div id="header">
        	<h1>feedback<span class="off">system</span></h1>
<h2>Abeda Inamdar Senior College</h2>
       
       
        </div> 
      
        
        <div id="menu">

 <ul>
            	<li class="menuitem"><a href="index.html" target="_self">Home</a></li>
                <li class="menuitem"><a href="login.php">Login</a></li>

                
            
            </ul>
        	
           
        </div>
        
        <div id="leftmenu">

        

			 
       
                
                
              
        </div>
        
        
        
        
        
        
        
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
<marquee><h3>Student Feedback System</h2></marquee>
      
</div>
        <div id="content_bottom"> </div>
            
            <div id="footer">
			
			</div>



<div class=" login">
<div class="form">
    <form class="register-form" method="GET" name="myForm">
  <h1>RESET</h1>   
 
<input type="email" name="emailid" placeholder="EMAIL-ID"  required="required" /> 

<input type="password" name="password"  placeholder="PASSWORD" required="required" />
<input type="password" name="confirmpassword"  placeholder="CONFIRM PASSWORD" required="required" />

  <button name="submit"><h1>RESET</h1></button>
   
    </form>


</div>

      </div>
   </div>

</body>
</html>
<?php

$id=isset($_GET['id'])?$_GET['id']:'';

$emailid= isset($_GET['emailid'])?$_GET['emailid']: '';      

$password=isset($_GET['password'])?$_GET['password']:'';


$confirmpassword=isset($_GET['confirmpassword'])?$_GET['confirmpassword']:'';  

if(isset($_GET['submit'])&&($password == $confirmpassword))
{
echo "<script>alert('RESET sussefully')</script>";
}
if ($password != $confirmpassword) {
echo "<font size=4.5 color='red' face='Times New Roman'><h2>*password mismatch</h2>";
exit;
}


$con=mysqli_connect("localhost","root","");

$d=mysqli_select_db($con,"feedback");
 




$sql = "UPDATE registers SET password='$password',confirmpassword='$confirmpassword' WHERE emailid='$emailid' ";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>
