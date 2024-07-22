 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>
<style>

.form {
  position: relative;
  z-index: 1;
background-image:url(canteen.jpg);  
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
      <a href="studentpage.php">home</a>
     
</div>
</div>
<div class="dropdown">
  <button class="dropbtn">Feedback
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      <a href="feedbackpage.php">staff</a>
     <a href="canteenfeedback.php">Canteen</a>
<a href="libraryfeedback.php">Library</a>
     <a href="Transportfeedback.php">Transport</a>
</div>
</div>

<div class="dropdown">
    <button class="dropbtn">ChangePassword
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      <a href="updatepasswords.php">update</a>
      
</div>
</div>


  <div class="dropdown">
    <button class="dropbtn">logout
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="login.php">logout</a>
     

  </div> 
</div>
        
        

			 
       
                
                
              
        
        
        
        
   </br>  
          </br>   
          </br>  
            <div id="footer">></div>
<div class=" login">
<div class="form">
     <form class="register-form">
	<h1>Canteen Feedback </h1>
    <form method="post">
    	<p>Regisrtion NO:<input type="text" name="registerNo"></p>
      <p>  Name:<input type="text" name="name"></p>
      <p> department:<input type="text"  name="department" ></p>
      <p> feedback:</p>
		<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea cols="20" name="feedback" style="height: 211px; width: 357px"></textarea></p>
      
        <button type="submit" name=submit><h1>Submit</h1></button>
  <button type="submit"><h1>clear</h1></button>

</div>

      </div>
   </div>

</body>
</html>

       
         
   <?php
if(isset($_GET['submit']))
{

 echo "<script>alert('insert sussefully')</script>";
}

$registerNo=$_GET['registerNo'];

$name=$_GET['name'];

$department=$_GET['department'];

$feedback=$_GET['feedback'];






$con=mysqli_connect("localhost","root","");

$d=mysqli_select_db($con,"feedback");
 
$q=mysqli_query($con,"insert into canteenfeedback values($registerNo,'$name','$department','$feedback')");


if(!$q1= mysqli_query($con,"select * from canteenfeedback")) {
die(mysqli_error());

};



while($row=mysqli_fetch_array($q1))

{


}



mysqli_close($con);

?>
    
 




			 
       
                
                