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
h1
{
color:white;
text-align:center;
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
            	<li class="menuitem"><a href="adminpage.php" target="_self">Home</a></li>
                

                
            
            </ul>
        	
           
        </div>
        
        <div id="leftmenu">

        

			 
       
                
                
              
        </div>
        
        
        
        
        
        
        
		<div id="content">
        
        
        
            <div id="footer">
			
			</div>


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
echo "<table border=1 width=100% height=20% bgcolor=gray>";
echo "<h2><tr><td><b>staff id</b></td><td><b>subject id</b></td><td><b>staff name  </td><td>subject</td> <td> <b>sem<b> </td><td> <b>code<b> </td><td> <b>department</b></td></tr></h2>";                                
                        while($row=mysqli_fetch_array($q4))
                                    {
                                            
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>";
                                    }
echo "</table>";
echo "</center>";
