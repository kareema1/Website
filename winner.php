 <?php
        //Connect to the database
        session_start();


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
   Today Winner
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
           Today Winner
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
    $d = date('Y-m-d');
    $sql = "SELECT * FROM Score WHERE date = '$d' ORDER BY points DESC";
    $result = mysqli_query($conn, $sql);   
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 1;
    $asd = 2;
    while($row = mysqli_fetch_assoc($result)) {
        if($asd != 1){
            echo"<h3>The Winner for today is: </h3>";
            echo "<div class='qblock'>#: ".$i." Name: ".$row["mail"]." - Points : " . $row["points"]. "<br></div>";
            echo"<br />";
            echo"<br />";
            echo"<div><a href='winnerTable.php'>View All Scores</a></div>";
        }
        $asd = 1;
        $i++;
    }
}
    ?>
    <!--end code--> 
	</div>
</body>
</html>