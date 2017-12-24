<html>
<head>
<title>
    Logout
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
		.back{
            text-align: center;
        }
    

		
    </style>   
</head>
<body>
    <!--- Dont touch --->
	<div class ='mainBlock'>
		<div class = 'header'>
            See You Soon
        </div>
    <!--- end of Don't touch -->
    
    <!---start code-->
    <div class="back">You have logged out, <br />
    <a href='index.php'>Back to Homepage</a></div>
    <?php
    
    session_start();
        // Destroying session
    session_destroy();
    ?>
        
    <!--end code--> 
	</div>
</body>
</html>