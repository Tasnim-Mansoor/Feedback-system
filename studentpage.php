  <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>
<style>
img {
    border-radius: 8px;
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
       </hr>

 <div class="navbar">
 <div class="dropdown">
    <button class="dropbtn">Home
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="studentpage.php">home</a>
     
</div>
</div>
<div class="dropdown">
  <button class="dropbtn">Feedback
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      <a href="feedbackpage.php">Staff</a>
     <a href="canteenfeedback.php">Canteen</a>
<a href="libraryfeedback.php">Library</a>
<a href="transportfeedback.php">Transport</a>
</div>
</div>

<div class="dropdown">
    <button class="dropbtn">ChangePassword
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      <a href="updatepasswords.php">Update</a>
      
</div>
</div>


  <div class="dropdown">
    <button class="dropbtn">Logout
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="login.php">Logout</a>
     

  </div> 
</div>
        
        

			 
       
                
                
              
        
  </div>
</div>
<div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                


<a href="feedbackpage.php"><img src="t8.png"height="130" width="200"></a>
<br>

<img src="t9.jpeg"height="130" width="180">
<img src="e3.jpg"height="150">
<br>

<img src="r1.jpg"height="160"width="180">


</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
    </div>      
<div id="footer"></div>
<br>
<img src="t11.png"height="300"width="800">
 <img src="t10.png"height="300"width="800">  

       
 
               

  

</div>
                
                
             
      
  

</body>
</html>
</body>
</html>
  
</div>
<form method="POST" action="login.php">
</form>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","") or die("I cannot connect");      //echo "connected successfuly";
$d=mysqli_select_db($con,"feedback");
$q=mysqli_query($con,"select * from registers");

$username= isset($_GET['username'])?$_REQUEST['username']: '';      //echo $emailid;
  

$n=0;
while($row=mysqli_fetch_array($q))
{
        
}
