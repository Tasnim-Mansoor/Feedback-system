<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	background-color:white
	background-repeat:repeat-x;
}
</style>
</head>

<body>


<div id="container">

		<div id="header">
<br>
        	
       </div> 
</body>
</html>
<br>
<br>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	background-color:white
	background-repeat:repeat-x;
}
</style>
</head>

<body>


<div id="container">

		<div id="header">
<br>
        	<h1 align="center">Staff Report</h1>
       </div> 
</body>
</html>
<br>
<br>
<br>
<br>
<?php
$con  =  mysqli_connect("localhost","root","");
$d  =  mysqli_select_db($con,"feedback");
   $q4=mysqli_query($con,"select *from staff");
echo "<center>";
echo "<table border=1 width=30% height=20% bgcolor=powderblue>";
echo "<h2><tr><td><b>staff id</b></td><td><b>staff name  </td><td>subject</td> <td> <b>sem<b> </td><td> <b>code<b> </td><td> <b>department</b></td></tr></h2>";                                
                        while($row=mysqli_fetch_array($q4))
                                    {
                                            
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";
                                    }
echo "</table>";
echo "</center>";
