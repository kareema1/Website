 <?php
        //Connect to the database
        session_start();
         if(!isset($_SESSION["mail"])){
            echo'<h1>Error1</h1>';
            die();
        }
       if($_SESSION["job"] != "a"){
          echo'<h1>Error 2</h1>';
            die();
        }




?>
<html>
<head>
<title>
   Admin
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
            text-align: center;
			
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
		
        .menu{
			padding:5px;
			margin: 5px;
		}
		.menu a{
			color:#4C4C4C;
			text-decoration:none;
		}
        
        ul{
			list-style: none;
			padding: 0;
			margin: 0;
			width: 900px;
			background-color: #c1c1c1;
			height:35px;
			margin: auto;
			border: solid 1px #ccc;
			 
		}
		li{
			float:left;
			padding:5px;
			background-color: #c1c1c1;
			display: block;
			height:25px;
		}
        
        .container{
            background-color:#f1f1f1;
            width:500px;
            padding:5px;
            margin: 5px;
            margin: auto;
        }

    .cont{
        text-align: left;
    }
 .linko{
   width: 200px;
   background-color:#c1c1c1;
   padding:5px;
   margin:5px;
   text-decoration:none;
   color:#4c4c4c;
   display: block;
   margin: auto;
   
 }
		
    </style>   
</head>
<body>
    <!--- Dont touch --->
	<div class ='mainBlock'>
		<div class = 'header'>
            Admin
        </div>
    <!--- end of Don't touch -->
    
    <!---start code-->
        <!---start code-->

     <div class="menu">	
        <ul>
            <li><a href="index.php">Home</a> | </li>
           <li><a href="instructions.php">Instruction</a> | </li>
           <li><a href="winner.php">Today Winner</a> | </li>
            <li><a href="logout.php">logout</a> | </li>
        </ul>
      </div>
    
     <a class="linko" href="AddOverseer.php">Add New Overseer</a>
     <br />
     <a class="linko" href="deleteOverseer.php">Delete Overseer</a>
    <!--end code--> 
	</div>
</body>
</html>