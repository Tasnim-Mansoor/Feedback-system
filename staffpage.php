<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>StudentFeedback</title>
<style>

  .slider-holder
        {
            width: 800px;
            height: 400px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            text-align: center;
            overflow: hidden;
        }
        
        .image-holder
        {
            width: 2400px;
            background-color: pink;
            height: 400px;
            clear: both;
            position: relative;
            
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
        
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-2:target ~ .image-holder
        {
            left: -800px;
        }
        
        #slider-image-3:target ~ .image-holder
        {
            left: -1600px;
        }
   
        .button-holder
        {
            position: relative;
            top: -20px;
        }
        
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
align:"center";
        }



  .slider-holder
        {
            width: 800px;
            height: 400px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            text-align: center;
            overflow: hidden;
        }
        
        .image-holder
        {
            width: 2400px;
            background-color: pink;
            height: 400px;
            clear: both;
            position: relative;
            
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
        
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-2:target ~ .image-holder
        {
            left: -800px;
        }
        
        #slider-image-3:target ~ .image-holder
        {
            left: -1600px;
        }
        
        .button-holder
        {
            position: relative;
            top: -20px;
        }
        
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
align:"center";
        }
</style>

</head>

</head>

<body>

<img src="l1.png" align="left" height="80">
<div id="container">

		<div id="header">
        	<h1>feedback<span class="off">system</span></h1>
 <h2>Abeda Inamdar Senior Collecge</h2>    
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
      </div> 
</div>
       
  </div>

 </div>    
  <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                


<a href="feedbackpage.php"><img src="l2.png"height="130" width="200"></a>
<br>

<img src="r3.jpg"height="150">
<img src="r2.jpg"height="150">
<br>

<img src="r1.jpg"height="160"width="180">


</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
    </div>      
<br>
<br>
<br>
   

  </div>
</a>
  </div>
</a>




	
</div>
      
       <br>
<br>     

   <div id="footer"></div>
<div class="slider-holder">

        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div class="image-holder">
            <img src="r1.jpg" height="400" width="800" class="slider-image" />
            <img src="r2.jpg" height="400" width="800"  class="slider-image" />
            <img src="r3.jpg" height="400" width="800"  class="slider-image" />

        </div>
        <div class="button-holder" >
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
      
        </div>
    </div>

   
  
</div>



        </div>


 
</div>
   <br>
 

</div>


</body>
</html>

