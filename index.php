<?php
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
		$s = "SELECT * FROM Score WHERE mail = '$_SESSION[mail]'";
		$result2 = mysqli_query($conn, $s);   
		if (mysqli_num_rows($result2) > 0) {
		while($row = mysqli_fetch_assoc($result2)) {
		if($row['date'] == date('Y-m-d')){
		$check = 1;
					}
             }
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
			background: #ffffff url("img.jpg") no-repeat right top;
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
		
		.menu{
			padding:5px;
			margin: 5px;
		}
		.menu a{
			color:#4C4C4C;
			text-decoration:none;
		}
		.startButton{
			margin:0  auto;
			text-align:center;
			
		
		}
		
		.startButton{
			margin:0  auto;
			background-color:#10e550;
			padding:10px;
			font-size:20px;
			border-radius: 15px;
			border:2px solid #3a3a3a;
			color:#fff;
			text-decoration:none;
			margin-top:300px;
			display:block;
			width:200px;
		}
		
		.asd{
			margin:0  auto;
			background-color:#E20F36;
			padding:10px;
			font-size:20px;
			border-radius: 15px;
			border:2px solid #3a3a3a;
			color:#fff;
			text-decoration:none;
			margin-top:300px;
			display:block;
			width:500px;
		}
		
		.startButton a{
			color:#fff;
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
		.welcomMsg{
			margin-top:10px;
			margin-left:50px;
		}
    </style>   
</head>
<body>
        
	<div class ='mainBlock'>
		<div class = 'header'>
            Welcome To The Competition
        </div>
		<div class="menu">
			<?php
			session_start();

			echo'
				<ul>
				<li><a href="index.php">Home</a> | </li>
				<li><a href="instructions.php">Instruction</a> | </li>
				<li><a href="winner.php">Today Winner</a> | </li>
			';
			if(isset($_SESSION["mail"])){
				echo'<li><a href="logout.php">logout</a> | </li>';
			}else{
				echo'<li><a href="registration.php">Registration</a> | </li>
					<li><a href="login.php">login</a> | </li>';
			}
			echo'</ul>';
			if(isset($_SESSION["mail"])){
				echo "<div class='welcomMsg'>Welcome {$_SESSION['name']}</div>";
			}
			if(isset($_SESSION['job'])){
				if($_SESSION['job'] == "c"){

				if($check != 1){
					echo"<div class='startButton'><a href='questions.php'>Start Compition</a></div>";
				}else{
					echo"<div class='asd'>You have Played, You can play agin tomorro</div>";
				}
				}else if($_SESSION['job'] == "a"){
					echo"<div class='startButton'><a href='admin.php'>Controll</a></div>";
				}else if($_SESSION['job'] == "b"){
					echo"<div class='startButton'><a href='editq.php'>Controll</a></div>";
				}
			}
			?>
		</div>

	</div>
</body>
</html>