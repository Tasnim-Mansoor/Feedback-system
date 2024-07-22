 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>
</head>

<body>
<img src="l1.png" align="left" height="80">
<div id="container">
		<div id="header">
        	<h1>feedback<span class="off">system</span></h1>
       
        </div> 
      
        
       <div class="navbar">
   <div class="dropdown">
    <button class="dropbtn">Home
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="adminpage.php">home</a>
     
</div>
</div>
<div class="dropdown">
  <button class="dropbtn">Subject
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      <a href="addsubject.php">ADD</a>
      <a href="updatesubject.php">update</a>
     
</div>
</div>
<div class="dropdown">
  <button class="dropbtn">student
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      <a href="addstudent.php">Add</a>
      <a href="updatestudent.php">Update</a>
      
</div>
</div>
<div class="dropdown">
    <button class="dropbtn">Staff
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      <a href="addstaff.php">Add</a>
      <a href="updatestaff.php">Update</a>
    
</div>
</div>
<div class="dropdown">
    <button class="dropbtn"> Feedback Report
      <i class="fa fa-caret-down"></i>
    </button>
<div class="dropdown-content">
      
     <a href="rf.php">Staff</a>
<a href="cf.php">Canteen</a>
<a href="lf.php">Library</a>
<a href="tf.php">Transport</a>
</div>
</div>

 <div class="dropdown">

    <button class="dropbtn">Report
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="rs.php">Student</a>
     <a href="rs2.php">Staff</a>
 <a href="rs3.php">Subject</a>
</div>
</div>   
  <div class="dropdown">
    <button class="dropbtn">Delete
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="ds.php">Student</a>
 <a href="ds2.php">Staff</a>
 <a href="ds3.php">Subject</a>
     
</div>
</div>
       

  <div class="dropdown">
    <button class="dropbtn">Logout
      <i class="fa fa-caret-down"></i>
    </button><div class="dropdown-content">
      <a href="login.php">Logout</a>
     
</div>
</div>
        
        
   </br>  
          </br>   
          </br>  
<br>
<br>

            <div id="footer">></div>
<div class=" login">
<div class="form">
     <form class="register-form">
	<h1>Add Staff </h1>
    <form method="post">
<p>Staff ID:<input type="text" name="id"></p>
 	<p>Subject ID:<input type="text" name="subid"></p>
    	<p>Staff Name:<input type="text" name="name"></p>
      <p>  subject name:<input type="text" name="subject" ></p>
      <p>  Semester:<input type="text" name="sem"></p>
     <p>  Subject code:<input type="text" name="code"></p>
       <p> Deparment:<input type="text" name="department" ></p>
      
        <button type="submit" name="submit"><h1>Add</h1></button>
  <button type="reset"><h1>clear</h1></button>

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
$id=isset($_GET['id'])?$_GET['id']:''; 
$subid=isset($_GET['subid'])?$_GET['subid']:''; 
$name=isset($_GET['name'])?$_GET['name']:''; 
$subject=isset($_GET['subject'])?$_GET['subject']:''; 
$code=isset($_GET['code'])?$_GET['code']:'';

$sem=isset($_GET['sem'])?$_GET['sem']:'';

$department=isset($_GET['department'])?$_GET['department']:'';






$con=mysqli_connect("localhost","root","");

$d=mysqli_select_db($con,"feedback");
 
$q=mysqli_query($con,"insert into staff values($id,'$subid','$name','$subject','$code','$sem','$department')");


if(!$q1= mysqli_query($con,"select * from staff")) {
die(mysqli_error());

};



while($row=mysqli_fetch_array($q1))

{
}

 

mysqli_close($con);

?>






</body>
</html>
      
         
       
 




			 
       
                
                
              
     