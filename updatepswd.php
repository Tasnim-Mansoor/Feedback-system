
     <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>
</head>

<body><img src="l1.png" align="left" height="80">
<div id="container">
		<div id="header">
        	<h1>feedback<span class="off">system</span></h1>
       
        </div> 
      
        
<div class="navbar">
   <div class="dropdown">
    <button class="dropbtn">home
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="staffpage.php">home</a>
     
</div>
</div>


<div class="dropdown">
    <button class="dropbtn">feedback
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      
      <a href="stafffeedback.php">view</a>
</div>
</div>
<div class="dropdown">
    <button class="dropbtn">updatepasswords
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      
     <a href="updatepswd.php">update</a>
</div>
</div>

  <div class="dropdown">
    <button class="dropbtn">logout
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="login.php">logout</a>
     </div>
</div>
        
        

			 
       
                
                
              
        </div>
        
        
        
        
		<div id="content">
        
        
        
            
            <div id="footer">></div>
<br>
<br>
<nr>
<br>
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
echo "<script>alert('Update sussefully')</script>";
}
if ($password != $confirmpassword) {
echo "<font size=4.5 color='red' face='Times New Roman'><h2>*password mismatch</h2>";
exit;
}


$con=mysqli_connect("localhost","root","");

$d=mysqli_select_db($con,"feedback");
 




$sql = "UPDATE registeri SET password='$password',confirmpassword='$confirmpassword' WHERE emailid='$emailid' ";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>
