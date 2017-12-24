 <?php
        
        session_start();
         if(!isset($_SESSION["mail"])){
            echo'<h1>Error11</h1>';
            die();
        }
       if($_SESSION["job"] != "c"){
          echo'<h1>Error 2</h1>';
            die();
        }
            if(!isset($_GET['score']) || !isset($_GET['time'])){
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
         
           $s = "SELECT * FROM Score WHERE mail = '$_SESSION[mail]'";
          $result2 = mysqli_query($conn, $s);   
            if (mysqli_num_rows($result2) > 0) {
             while($row = mysqli_fetch_assoc($result2)) {
                if($row['date'] == date('Y-m-d')){
                    echo "<h3>You have played Today</h3>";
                    die();
                }
             }
        }


?>
<html>
<head>
<title>
   Results
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
            Results
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
        $m = $_GET['time'] % 60;
        echo'<div class="res"><h3>Good Work '.$_SESSION['name'].'</h3></div>';
        echo'<div class="res">Your Score is '.$_GET['score'].' Points</div>';
        echo'<div class="res">Time: '.intval($_GET['time']/60).' Minutes </div>';
        echo'<div class="res">'.$m.' Seconds</div>';
        $d = date('Y-m-d');
         $sql2 = "INSERT INTO Score (mail, date, points, answered) VALUES ('$_SESSION[mail]','$d', '$_GET[score]','$_GET[time]')";
        if (mysqli_query($conn, $sql2)) {
                echo " ";
         } else {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
        }

       
    ?>
    <!--end code--> 
	</div>
</body>
</html>