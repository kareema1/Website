<?php
    session_start();
    if(isset($_SESSION["mail"])){
    echo'<h1>Error</h1>';
    die();
	}
?>
<html>
<head>
<title>
    Log in
</title>
	<meta charset="utf-8">
    <style>
        body{
			background-color:#f1f1f1;
			align-content:center;
			color:#4c4c4c;
			font-size:18px;
            text-align: center;
			
			
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
		.container{
            background-color:#f1f1f1;
            width:500px;
            padding:5px;
            margin: 5px;
            margin: auto;
        }
        .mail,.pass{
            margin:10px;
            padding:8px;
            font-size: 14px;
        }
        .login{
            width:90px;
            height: 60px;
        }
        
        .errorMsg{
            color: #f70909;
            font-size: 14px;
        }
        <!---Menu Code -->
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

		
    </style>   
</head>
<body>
    <!--- Dont touch --->
	<div class ='mainBlock'>
		<div class = 'header'>
            Log in
        </div>
    <!--- end of Don't touch -->
    <div>
        
    </div>
    <!---start code-->
        <div class="menu">	
        <ul>
            <li><a href="index.php">Home</a> | </li>
			<li><a href="instructions.php">Instruction</a> | </li>
            <li><a href="winner.php">Today Winner</a> | </li>
            <li><a href="registration.php">Registration</a> | </li>
            <li><a href="login.php">login</a> | </li>
        </ul>
        </div>
        <br />
        <div class="container" align="center">
        <form method="POST" action="#">
            <input type="text" name="usermail" placeholder="Enter Your Mail" class="mail"/><br />
            <input type="password" name="password" placeholder="Enter Your Password" class="pass" /><br />
            <input type="submit" name="submit" value="Login" class="login" />
        </form>
    </div>
    <?php

        $host = "localhost";
        $user = "team_21";
        $password = "team21";
        $db = "sce_project";
        
        
       $conn = mysqli_connect($host,$user,$password);
        if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
        }
         mysqli_select_db($conn,$db);
         
        if(isset($_POST["usermail"])){
            $userMail = $_POST["usermail"];
            $userPass = $_POST["password"];
           // SELECT `id`, `name`, `mail`, `password`, `job` FROM `User` WHERE 1 ".$userMail."
            $sql = "SELECT * from User WHERE mail = '$userMail' AND password = '$userPass'";
            $results = mysqli_query($conn,$sql);
            //if user exist in the Database then creat session and move to Profile Page
            if(mysqli_num_rows($results) == 1){
                echo "You have loged in";
                $row = mysqli_fetch_array($results);
                $_SESSION["name"] = $row['name'];
                $_SESSION["mail"] = $row['mail'];
                $_SESSION["job"] = $row['job'];
                header("Location:index.php");
                //while($row = mysqli_fetch_array($results)) {
                //    $cat_id = $row['mail'];
                //    $cat_title = $row['name'];
                //    echo $cat_id . " " . $cat_title  ."<br>";
               // }
               
                exit();
            }else{
                echo"<div class='errorMsg'>Please check your Mail and Password </div>";
                session_destroy();
            }
        }
    
    ?>
        

    <!--end code--> 
	</div>
</body>
</html>