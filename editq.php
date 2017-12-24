 <?php
        //Connect to the database
        session_start();
         if(!isset($_SESSION["mail"])){
            echo'<h1>Error1</h1>';
            die();
        }
       if($_SESSION["job"] != "b"){
          echo'<h1>Error 2</h1>';
            die();
        }
        $host = "localhost";
        $user = "team_21";
        $password = "team21";
        $db = "sce_project";
        
        
       $conn = mysqli_connect($host,$user,$password);
        if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
        }
         mysqli_select_db($conn,$db);


?>
<html>
<head>
<title>
   Edit Questions
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
 a{
  text-decoration:none;
 }
 .qblock{
    padding:5px;
    margin-top:5px;
    margin-bottom:5px;
    margin-left:30px;
    margin-right:30px;
    background-color:#f1f1f1;
    text-align: left;
 }
		
    </style>   
</head>
<body>
    <!--- Dont touch --->
	<div class ='mainBlock'>
		<div class = 'header'>
            Edit Questions
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
    
    <?php
    $sql = "SELECT * FROM Question";
    $result = mysqli_query($conn, $sql);   
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='qblock'>Id: " . $row["id"]. " - Question: " . $row["question"]. "<a href='editqu.php?id=".$row["id"]."'> Edit</a> <br></div>";
    }
}
    ?>
    <!--end code--> 
	</div>
</body>
</html>