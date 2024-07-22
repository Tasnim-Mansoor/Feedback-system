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
     <form class="register-form">


<h1> Login</h1>



    	<form action="adminlog.php" method="post">
<select style="width:360px; height: 38px;"  "height:200px" name="opt">

<option value="">Select</option>
<option value="1" name="opt"> Admin</option>
<option value="2" name="opt"> Staff</option>
<option value="3" name="opt"> Student</option>
<option value="4" name="opt"> HOD</option>
</select>
<br>
<br>
<input type="text" name="username" placeholder="Username" id="emailid" required="required" /> 
<input type="password" name="password"  placeholder="Password" required="required" />

 <button type="submit" value="login" name="submit"><h1>LogIn</h1></button>

	<p> Not registered?[student]<a href ="create1.php" target="_self" >CREATE AN ACCOUNT</a></p>

	<p> Not registered?[staff]<a href ="create2.php" target="_self" >CREATE AN ACCOUNT</a></p>


    </form>
<br>
<br><img src="admin.png" width="100" height="100" align="center">

<p align="right"> forget passwords?<a href ="f.php" target="_self" >reset</a></p>
</div>

      </div>
   </div>

</body>
</html>
<?php
if(isset($_GET['submit']))
{
echo "<script>alert('invalid username or password')</script>";
}
$con=mysqli_connect("localhost","root","") or die("I cannot connect");      //echo "connected successfuly";
$d=mysqli_select_db($con,"feedback");
$opt= isset($_GET['opt'])?$_REQUEST['opt']: ''; 

$username =isset($_GET['username'])?$_REQUEST['username']: ''; 
 //echo $emailid;
$password=isset($_GET['password'])?$_REQUEST['password']:'';  
  

if($opt==1)
{
$q=mysqli_query($con,"select * from login");
$n=0;
while($row=mysqli_fetch_array($q))
{
            if($row[1]==$username && $row[2]==$password)
            $n=1;
}

if($n==1)
{


            header("location:adminpage.php");


}

}

elseif($opt==3)
{
$q=mysqli_query($con,"select * from registers");

    

$n=0;
while($row=mysqli_fetch_array($q))
{
            if($row[4]==$username && $row[5]==$password)
            $n=1;
}

if($n==1)
{

            header("location:studentpage.php");
echo"welcome '$username'";

}

}

elseif($opt==2)
{
$q=mysqli_query($con,"select * from registeri");

    

$n=0;
while($row=mysqli_fetch_array($q))
{
            if($row[4]==$username && $row[5]==$password)
            $n=1;
}

if($n==1)
{

            header("location:staffpage.php");


}



}
elseif($opt==4)
{
$q=mysqli_query($con,"select * from hlogin");

    

$n=0;
while($row=mysqli_fetch_array($q))
{
            if($row[1]==$username && $row[2]==$password)
            $n=1;
}

if($n==1)
{

            header("location:hod.php");


}

}

?>



