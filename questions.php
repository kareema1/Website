<?php
        session_start();
         if(!isset($_SESSION["mail"])){
            echo'<h1>Error1</h1>';
            die();
        }
        //If user is not admin then die
       if($_SESSION["job"] != "c"){
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
         
     $sql = "SELECT * FROM Question";
    $result = mysqli_query($conn, $sql);   
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $arr[$i] = $row["question"];
        $arr[$i+1] = $row['fanswer1'];
        $arr[$i+2] = $row['fanswer2'];
        $arr[$i+3] = $row['fanswer3'];
        $arr[$i+4] = $row['tanswer'];
        $i = $i+5;
     }
}
?>
<html>
<head>
<title>
    Test
</title>
	<meta charset="UTF-8">
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
		<div id ="countDown"></div>
		
		
       
	   
	   
	   </div>
		
    <!--- end of Don't touch -->
       
    <!---start code-->
	       </br></br>
        <div class="container" id="QF">
		<main>
		<?php
        $j = 0;
        for($i=0;$i<30;$i++){
            echo'<form action="#" class="questionForm" id=q'.($i + 1).'  data-question='.($i + 1).'>
		         <h3><p align="center">'.$arr[$j].'</p></h3>
                 <center>
		         </br></br>
                 <p><label><input name="q'.($i + 1).'" type="radio" value="a" /><i>'.$arr[$j+1].'</i></label></p></br>
                 <p><label><input name="q'.($i + 1).'" type="radio" value="b" /><i>'.$arr[$j+2].'</i></label></p></br>
                 <p><label><input name="q'.($i + 1).'" type="radio" value="c" /><i>'.$arr[$j+3].'</i></label></p></br>   
                 <p><label><input name="q'.($i + 1).'" type="radio" value="d" /><i>'.$arr[$j+4].'</i></label></p></br>
                 </br></br>
                 <button id="submit">submit</button>
                  </center>
            </form>';

            $j = $j+5;
            }

		?>
		<div id="results"></div>
		</main>
		
		</div><!--container-->
		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="quiz.js"></script>
		
		
    <!--end code--> 
	</div>
	
</body>
</html>
