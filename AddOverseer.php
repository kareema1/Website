 <?php
        //Connect to the database
        session_start();
                if(!isset($_SESSION["mail"])){
            echo'<h1>Error</h1>';
            die();
        }
        
        if($_SESSION["job"] != "a"){
            echo'<h1>Error</h1>';
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
  Add Overseer
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
    .mail,.pass,.name{
            margin:10px;
            padding:8px;
            font-size: 14px;
        }
        
    .errorMsg1{
            color: #f70909;
            font-size: 14px;
    }
		
    </style>   
</head>
<body>
    <!--- Dont touch --->
	<div class ='mainBlock'>
		<div class = 'header'>
           Add Overseer
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
    <div class="container" align="center">
        <h4>Add New Overseer</h4>
        <form method="POST" action="#">
            <div class="cont">
            &emsp;&emsp;&emsp;Name : &emsp;&emsp;&nbsp;<input type="text" name="username" class="name" placeholder= "Enter your Name"/><br />
            &emsp;&emsp;&emsp;Email : &emsp;&emsp;&nbsp;<input type="text" name="usermail" class="mail" placeholder= "Enter your Email" /><br />
            &emsp;&emsp;Password : &emsp;&nbsp;&nbsp;&nbsp;<input type="password" name="userpass" class="pass"  placeholder= "Enter your Password" /><br />
            Confirm Password : <input type="password" name="userpass2" class="pass" placeholder= "Confirm Password" /><br />
            </div>
            <input type="submit" name="submit" value="Done" class="login" />
        </form>
    </div>
    <?php
    //When user click the submit button
    if(isset($_POST['submit'])){
        //if there is an empty feild them it will show error msg 1
         if(empty($_POST['username']) || empty($_POST['usermail']) || empty($_POST['userpass']) || empty($_POST['userpass2'])){
            echo"<div class='errorMsg1'>Please fill all feilds</div>";
        }else if($_POST['userpass'] != $_POST['userpass2']){
            echo"<div class='errorMsg1'>Passwords don't match</div>";
        }else{
            $userMail = $_POST["usermail"];
            $sql = "SELECT * from User WHERE mail = '$userMail'";
            $results = mysqli_query($conn,$sql);
            //if user mail is exist
            if(mysqli_num_rows($results) != 0){
                echo"<div class='errorMsg1'>This mail alrady exist</div>";
            }else{
                $sql2 = "INSERT INTO User (name, mail, password, job) VALUES ('$_POST[username]', '$_POST[usermail]', '$_POST[userpass]','b')";
                if (mysqli_query($conn, $sql2)) {
                    echo "Done";
                     header("Location:admin.php");
                     exit();
                } else {
                    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                }
            }
         }
    }
    ?>
        
    <!--end code--> 
	</div>
</body>
</html>