<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>
<script>
function checkNum()
{

if ((event.keyCode > 64 && event.keyCode < 91) || (event.keyCode > 96 && event.keyCode < 123) || event.keyCode == 8)
   return true;
else
   {
       alert("Please enter only char");
       return false;
   }

}

</script>
</head>

<body>
<img src="l1.png" align="left" height="80">
<div id="container">
		<div id="header">
        	<h1>feedback<span class="off">system</span></h1>
       
        </div> 
      
        
        <div id="menu">
<ul>
            	<li class="menuitem"><a href="index.html" target="_self">Home</a></li>
                <li class="menuitem"><a href="login.php">Login</a></li>
            </ul>
        	
            </nav>
        </div>
        <div id="leftmenu">

        

			 
       
                
                
              
        </div>
        
        
        
        
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
<marquee><h3>Student Feedback System</h2></marquee>
      
</div>
        <div id="content_bottom"> </div>
            
            <div id="footer">></div>
<div class=" login">
<div class="form">
    <form class="register-form" method="GET" name="myForm">
  <h1>Sign up</h1>     required=required/>
 <input type="text" name="firstname" placeholder="FIRSTNAME" onkeypress="checkNum()" required="required" /> 
<input type="text" name="lastname" placeholder="LASTNAME" onkeypress="checkNum()" required="required" /> 
<input type="email" name="emailid" placeholder="EMAIL-ID"  required="required" /> 
<input type="text" name="username"  placeholder="USERNAME" required="required" />
<input type="password" name="password"  placeholder="PASSWORD" required="required" />
<input type="password" name="confirmpassword"  placeholder="CONFIRM PASSWORD" required="required" />
<input type="tel"  pattern="^\d{10}$" name="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="CONTACT NUMBER" required="required" />
  <button name="submit"><h1>create</h1></button>
   <p>Already registered? <a href="login.php">Sign In</a></p>
 
    </form>


</div>

      </div>
   </div>

</body>
</html>

<?php
if(isset($_GET['submit']))
{

 echo "<script>alert('create sussefully')</script>";
}
$id=isset($_GET['id'])?$_GET['id']:'';
$firstname=isset($_GET['firstname'])?$_GET['firstname']:'';
$lastname=isset($_GET['lastname'])?$_GET['lastname']:'';
$emailid= isset($_GET['emailid'])?$_GET['emailid']: '';      
$username=isset($_GET['username'])?$_GET['username']:'';
      //echo $emailid;
$password=isset($_GET['password'])?$_GET['password']:'';
$confirmpassword=isset($_GET['confirmpassword'])?$_GET['confirmpassword']:'';  
$phone= isset($_GET['phone'])?$_GET['phone']: '';
if(isset($_GET['submit'])&&($password == $confirmpassword))
{
echo "<script>alert('create sussefully')</script>";
}
if ($password != $confirmpassword) {
echo "<font size=4.5 color='red' face='Times New Roman'><h2>*password mismatch</h2>";
exit;
}

$con=mysqli_connect("localhost","root","");

$d=mysqli_select_db($con,"feedback");

$q=mysqli_query($con,"insert into registeri values('$id','$firstname','$lastname','$emailid','$username','$password','$confirmpassword','$phone')");



$q1=mysqli_query($con,"select * from registeri");







while($row=mysqli_fetch_array($q1))

{
  
echo"successfully";
}



mysqli_close($con);

?>

			 
       
                
                
              
     