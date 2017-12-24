<?php
    session_start();
    if(!isset($_SESSION["mail"])){
      echo'<h1>Error</h1>';
      die();
      }
   if(isset($_SESSION["job"]) != "c"){
      echo'<h1>Error</h1>';
      die();
   }
?>
<html>
<head>
<title>
   Competition
</title>
	<meta charset="utf-8">
    <style>
        body{
			background-color:#f1f1f1;
			align-content:center;
			color:#4c4c4c;
			font-size:18px;
			
			
		}
		.mainBlock{
			background-color:#fff;
			width:960px;
			height:700px;
			margin:0 auto;
			border:5px solid #10e550;
			border-radius: 25px;
			background-size: cover;
			
		}
		.header{
			text-align:center;
			margin:20px auto;
			background-color:#f1f1f1;
			font-size:24px;
			padding:10px;
			width:350px;
			border:5px solid #c1c1c1;
			border-radius: 25px;
		}

    

		
    </style>   
</head>
<body>
    <!--- Dont touch --->
	<div class ='mainBlock'>
		<div class = 'header'>
           <b>Instructions</b>
        </div>
    <!--- end of Don't touch -->
    
    <!---start code-->

     
     <?php
       // $id = $_GET['id'];
        //This switch case checks what level is it

        
        
     ?>
   
    <!--end code--> 
	</div>
</body>
</html>
