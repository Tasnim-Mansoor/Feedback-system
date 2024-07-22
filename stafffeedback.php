<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>

</head>

<body>
<img src="l1.png" align="left"height="80">
<div id="container">

		<div id="header">
        	<h1>feedback<span class="off">system</span></h1>
       </div> 
       </hr>


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
        <script src="js/script.js"></script>
    </body>
</html>



        </div>


            <div id="footer">></div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class=" login">
<div class="form">
     <form class="register-form" method="post">
	<h1>Feedback Report</h1>
    <form method="post">
<span class="auto-style8">department:</span><select class="auto-style1" name="select2" style="width: 347px; height: 30px">
 <option value="BCA"name="select2">BCA</option>
  <option value="BBA"name="select2">BBA</option>
  <option value="BCS"name="select2">BCS</option>
  <option value="MCA"name="select2">MCA</option>
<option value="MBA"name="select2">MBA</option>
  <option value="BBA(CA)"name="select2">BBA(CA)</option>
	  </select></p>
    	<p>Staff Name:<input type="text" name="name"></p>
   
      
        <button type="submit" name="submit"><h1>submit</h1></button>
  

</div>
<h1>REPORT</h1>
      </div>
  
   

</body>
</html>

<?php

$select2=isset($_POST['select2'])?$_REQUEST['select2']: ''; 
$name= isset($_POST['name'])?$_REQUEST['name']: '';  
			 
    $con  =  mysqli_connect("localhost","root","");
$d  =  mysqli_select_db($con,"feedback");
   $q4=mysqli_query($con,"select *from sfeedback where '$name'=staffname");
echo "<center>";
echo "<table border=1 width=30% height=20% bgcolor=gray>";
echo "<h2><tr><td><b> Register NO </b></td><td> <b> name<b> </td><td> <b>department </td> <td> <b>staff name<b> </td><td> <b> lectuteQuality<b> </td><td><b>elocution</b></td><td> <b>discipline_punctuality </td> <td> <b>voice</b> </td><td> <b>control_of_class </td> <td> <b>student_interaction</b> </td></tr></h2>";                                

					while($row=mysqli_fetch_array($q4))
	        {
                                            
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td></tr>";
                                    }
echo "</table>";
echo "</center>";
