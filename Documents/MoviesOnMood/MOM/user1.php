<?php
	$servername="localhost";
	$username="Rums";
	$password="poki10";
	$dbname="login";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed" . mysqli_connect_error());
	}
?>
<?php
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mood Template</title>
	<link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
	<style>
		body {
  			margin: 0;
  			font-family:'Convergence';
  			background-color: #02C39A;
  			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1.0)), url('https://preview.redd.it/5lqpcm3o73r21.jpg?width=2324&format=pjpg&auto=webp&s=5afa0d2321b511690baf84cdee281164ee96a09d');
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
		.bod{
			margin: 70px 100px;
			font-size: 19px;
			margin-bottom: 250px;
		}
		.in:link, .in:visited{
			color: white;
			text-decoration: none;
		}
		.end{
			position: relative;
			bottom: 0px;
			height: 90px;
			width: 100%;
			color: black;
			background-color: #b3b3cc;
			text-align: center;		

		}
		.topnav a.b{
			float: right;
		}

	</style>
</head>
<body>
	<header>
		<h1>MOVIES ON MOOD</h1>
	</header>
	<div class="topnav">
  		<a href="homepage.php">Home</a>
  		<a href="moodtemp.html">Mood Template</a>
		<a href="admin1.php">Admin</a>
		<a class="active" href="user1.php">User Account</a>
		<a href="search.php">Search</a>
		<a href="about.html">About us</a>
		<a class="b" href="log.php">Logout</a>
	</div>
	<div class="bod">
		<a class="in" href="user11.php">Recommend a Movie</a><br><br>
		<a class="in" href="list.php?id=<?php echo $id;?>">Favourite List</a>

	</div>
</body>
<footer>
	<div class="end">
		<span>Project developed by: Students of SAKEC</span>
	</div>
</footer>
</html>