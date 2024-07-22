
   <html>
<head>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style.css" />

<title>StudentFeedback</title>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	text-align: left;
	font: 12px Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #061C37;
	background: #EEEFE4;
	background-image:url(map2.jpg);
	background-repeat:repeat-x;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background:white ;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
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
background-color:blue;
}
h1
{
color:red;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.auto-style1 {
	color: #FFFF00;
	font-style: italic;
}
.auto-style4 {
	margin-top: 205;
}
</style>
</head>

<body>
<img src="l1.png" align="left" height="80"><div class="col_w450 float_r" id="map" style="height: 570px">
                    <h3 class="auto-style4">Where We Are</h3>
                    <a class="pirobox" href="images/map_big.jpg" title="Our Location">
                       <a href="https://www.google.co.in/maps/place/Abeda+Inamdar+Senior+College/@18.5046722,73.8754279,15z/data=!4m2!3m1!1s0x0:0xf10067d6406e4db0?sa=X&ved=0ahUKEwiM1uGpoOnYAhXLrI8KHZCqCd8Q_BIIiQEwEA"><img src="map.jpg" alt="Location Map" />
                    </a>
    
                    
                                    
                    <h3> Address</h3>
                    <h6>Address 2390 / B - K. B. Hidayatullah Road, New Modikhana, <br />
          , Camp, Pune, Maharashtra 411001 <br/>
Azam Campus, Camp, Pune, Maharashtra 411001
      pune<br />
   </h6>
                					<b>Phone:</b><h6> +91-20-26446970, 20-26457577</h6>
                    <b>Email:</b> <a href="mailto:info@company.com">prin-aisc@azamcampus.org</a> 
                </div>
                &nbsp;<div id="container">
		<div id="header">
        	
       
        </div> 
      
          

 <ul>
            	<li class="menuitem"><a href="index.html" target="_self"><h2>Home</h2></a></li>
                
                
            
            </ul>
   </br>  
          </br>   
          </br>  
            <div id="footer">></div>
<div class=" login">
<div class="form" style="left: -73px; top: -1px">
     <form class="register-form">
	<h1><span class="auto-style1">Contact</span> <span class="auto-style1">US</span> </h1>
    <form method="post">
    	      <input type="text" placeholder="username" name="username" required="required"/>
  
  <input type="text" placeholder="phone NO" name="phone" required="required"/>
  
      <input type="email" placeholder="email address"  ng-model="emailid"name="emailid"  required="required"/>
  
      <p> Message:</p>
		<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea cols="20" name="message" style="height: 211px; width: 357px" placeholder="message" ></textarea></p>
      
        <button type="submit" name=submit></h6>Submit</h26</button>
  

<div>

     

  
                <div class="cleaner"></div>
                </div>
        
    </div> <!-- end of main -->
    
</div> <!-- end of wrapper -->

     
  

</body>
</html>
<?php
if(isset($_GET['submit']))
{

 echo "<script>alert('message sent successfully')</script>";
}
$id=isset($_GET['id'])?$_GET['id']:''; 
$username=isset($_GET['username'])?$_GET['username']:'';
$phone=isset($_GET['phone'])?$_GET['phone']:''; 
$emailid=isset($_GET['emailid'])?$_GET['emailid']:''; 
$message=isset($_GET['message'])?$_GET['message']:''; 







$con=mysqli_connect("localhost","root","");

$d=mysqli_select_db($con,"feedback");
 
$q=mysqli_query($con,"insert into contact values('$id','$username','$phone','$emailid','$message')");


if(!$q1= mysqli_query($con,"select * from contact")) {
die(mysqli_error());

};



while($row=mysqli_fetch_array($q1))

{
}

 

mysqli_close($con);

?>





