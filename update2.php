
       <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>
<style>
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
</style>
</head>


<body>
<img src="l1.png" align="left" height="80">
<div id="container">
		<div id="header">
        	<h1>feedback<span class="off">system</span></h1>
       
        </div> 
      
        <div class="navbar">
   <div class="dropdown">
    <button class="dropbtn">home
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="hod.php">home</a>
     
</div>
</div>


<div class="dropdown">
    <button class="dropbtn">staff Feedback
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      
     <a href="rf.php">view</a>
</div>
</div>
<div class="dropdown">
    <button class="dropbtn">updatepasswords
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      
     <a href="update2.php">update</a>
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

<div class=" login">
<div class="form">
    <form class="register-form" method="GET">
  <h1></h1>   <input type="text" placeholder="username" name="username" required=required/>
    <input type="password" placeholder="password" name="password" required="required"/>
       <button name="submit"><h1>update</h1></button>
   
    </form>
</div>

      </div>
   </div>

</body>
</html>

<?php
if(isset($_GET['submit']))
{

 echo "<script>alert('update sussefully')</script>";
}
$id=isset($_GET['id'])?$_GET['id']:'';
$username=isset($_GET['username'])?$_GET['username']:'';

$password=isset($_GET['password'])?$_GET['password']:'';







$con=mysqli_connect("localhost","root","");

$d=mysqli_select_db($con,"feedback");
 




$sql = "UPDATE hlogin SET password='$password'  WHERE username='$username' ";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>


			 
       
                
                