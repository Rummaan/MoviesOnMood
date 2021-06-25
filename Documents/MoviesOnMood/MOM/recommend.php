<?php
	$servername="localhost";
	$username="Rums";
	$password="poki10";
	$dbname="login";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed" . mysqli_connect_error());
	}

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$id=1;
		$recommend=$_POST['recommend'];
		$sql=mysqli_query($conn,"INSERT INTO recommend (recommend) VALUES('$recommend')");	
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recommendations</title>
	<link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
	<style>
		body {
  			margin: 0px;
  			font-family:'Convergence';
  			background-color: #02C39A;
  			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('https://preview.redd.it/5lqpcm3o73r21.jpg?width=2324&format=pjpg&auto=webp&s=5afa0d2321b511690baf84cdee281164ee96a09d');
		}
		.topnav {
  			background-color: #EDEDED;
  			overflow: hidden;
		}
		.topnav a {
 			float: left;
  			color: #5E4C5A;
  			text-align: center;
			padding: 14px 30px;
  			text-decoration: none;
  			font-size: 17px;
		}
		.topnav a:hover {
 			background-color: #ddd;
  			color: black;
		}

		.topnav a.active {
  			background-color: #028090 ;
  			color: white;

		}
		.topnav input[type=text] {
			float: right;
  			padding: 6px;
  			border: none;
  			margin-top: 8px;
  			margin-right: 16px;
  			font-size: 17px;
		}

		header{
			height: 50%;
			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			position: relative;	
		}
		h1{
			text-align: center;
			font-size: 80px;
			font-family:'Convergence';
			color: white;
		}
		.fi{
			margin-top: 100px;
  			width: 500px;
  			height:auto;
  			color: white;
  			padding-left: 450px;

  		}
  		p{
  			float: right;
  		}
  		.end{
			margin-top: 100px;
			color: black;
			background-color: #b3b3cc;
			text-align: center;
			height: 90px;
		}
	</style>
</head>

<body>
	<h1>MOVIES ON MOOD</h1>
	</header>
	<div class="topnav">
  		<a href="homepage.html">Home</a>
  		<a href="moodtemp.html">Mood Template</a>
		<a href="#about">About us</a>
		<a href="">User Account</a>
		<a class="active" href="#">Recommendations</a>
		<input type="text" placeholder="Search..">
	</div>
	<div align="center" class="main fi" >
			<h2>Drop your Recommendations:</h2>
			<form action="recommend.php" method="post">
			
			<textarea rows="3"  cols="75" name="recommend" >
			</textarea>
			<p>
			<input type="submit" value="Submit">
		</p>
		</div>

</body>
<footer>
	<div class="end">
		<span>Project developed by: Students of SAKEC</span>
	</div>

</footer>
</html>