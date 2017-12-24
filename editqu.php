 <?php
        //Start session
        session_start();
         if(!isset($_SESSION["mail"])){
            echo'<h1>Error1</h1>';
            die();
        }
        //If user is not admin then die
       if($_SESSION["job"] != "b"){
          echo'<h1>Error 2</h1>';
            die();
        }
        $id = $_GET["id"];
        if(!isset($id)){
        die();
    }

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
   Edit Question
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
    textarea{
        font-size:14px;
    }
		
    </style>   
</head>
<body>
    <!--- Dont touch --->
	<div class ='mainBlock'>
		<div class = 'header'>
            Edit Question
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
    echo"<form method='post' action='#'>";
        $q = "SELECT * FROM Question WHERE id = '{$id}'";
        $res = mysqli_query($conn,$q);
        if(mysqli_num_rows($res) == 1){
            $row = mysqli_fetch_array($res);
            echo"Question :<br /> <textarea name='q' rows='4' cols='50'>".$row['question']."</textarea><br />";
            echo"A :<br /> <textarea name='f1' rows='4' cols='50'>".$row['fanswer1']."</textarea><br />";
            echo"B :<br /> <textarea name='f2' rows='4' cols='50'>".$row['fanswer2']."</textarea><br />";
            echo"C :<br /> <textarea name='f3' rows='4' cols='50'>".$row['fanswer3']."</textarea><br />";
            echo"D :<br /> <textarea name='t' rows='4' cols='50'>".$row['tanswer']."</textarea><br />";
            echo"<br /><input type='submit' name='submit' value='Update' class='update' /><br />";
            
            if(isset($_POST['submit'])){
            $sq = "UPDATE Question SET question= '".$_POST['q']."' , tanswer = '".$_POST['t']."' ,fanswer1 = '".$_POST['f1']."' ,fanswer2='".$_POST['f2']."' ,fanswer3 = '".$_POST['f3']."' WHERE id=$id";
            if (mysqli_query($conn, $sq)) {
            echo "Record updated successfully";
            header("Location:editq.php");
            } else {
            echo "Error updating record: " . mysqli_error($conn);
             }
            }
            
            //Delete only Overseers
            //if (mysqli_query($conn, $sql)) {
            //echo "Record deleted successfully";
            //} else {
            //echo "Error deleting record: " . mysqli_error($conn);
            //}
}
    ?>

     </form>
    <!--end code--> 
	</div>
</body>
</html>