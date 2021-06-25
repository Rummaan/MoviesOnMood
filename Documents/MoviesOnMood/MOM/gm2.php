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

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$id=3;
		$name=$_POST["name"];
		$comments=$_POST["comments"];
		$rate=$_POST["rate"];
		mysqli_query($conn,"INSERT INTO comments (id,name,comments,rate) VALUES('$id','$name','$comments','$rate')");	
	}

	$id=3;
	$img=mysqli_query($conn,"SELECT * FROM general WHERE id=$id");
	while($row = mysqli_fetch_assoc($img)){
				$title=$row['title'];
                $descr=$row['description'];
                $poster=$row['poster'];
                $yt=$row['ytlink'];
                $caste=$row['cnc'];
                $p1=$row['p1'];
                $p2=$row['p2'];
                $p3=$row['p3'];
                $p4=$row['p4'];
                }
	  	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MoviePage</title>
	<link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		body {
			background-image: linear-gradient(rgba(0.5, 0, 0, 0.5), rgba(0, 0, 0, 1.0)), url('https://preview.redd.it/5lqpcm3o73r21.jpg?width=2324&format=pjpg&auto=webp&s=5afa0d2321b511690baf84cdee281164ee96a09d');
  			margin: 0;
  			font-family: 'Convergence';
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
		h2{
			color: white;
		}
		h1{
			text-align: center;
			font-size: 80px;
			color: white;
		}
		img.resize{
			height: 300px;
			width: auto;
			float: left;
			margin-right: 10px;
			border: 3px solid #05668D  ;


		}
		div.m{
			position: relative;
		}
		.main {
 			width: auto;
 			border: 3px solid #05668D;
			padding: 10px;
  			margin: 20px ;
  			border-radius:10px;
  			position: absolute;
  			font-family: Arial,sans-serif;

  		}
		p{
			color:white;
		}
		img.logos{
			margin: 10px 10px 10px;
			height: 50px;
			width: 50px;
		}
		p.in{
			position: relative;
				
		}
		.f{ 
			height: 345px;
		}
  		.s{
  			width: 760px;
  			margin-top: 625px;
  			height: 225px;
  			overflow-y:scroll; 
  		}
  		.t{
  			height:auto;
  			margin-left: 815px;
  			margin-top: 400px;
  		}
  		.fo{
  			height: 190px;
  			margin-top: 400px;  	
  			overflow: hidden;
  		}
  		.fi{
  			width: 1285px;
  			height:auto;
  			margin-top: 885px;
  			color: white;
  		}
  		ul{
  			color: white;
  		}
  		div.gallery {
			margin: 5px;
  			border: 0px solid #ccc;
  			float: left;
			width: 180px;
			
		}
		div.gallery:hover {
			border: 0px solid #777;
		}
		div.gallery img {
  			width: 100%;
  			height: auto;
  		}
		.end{
			position: absolute;
			bottom: -800px;
			height: 90px;
			width: 100%;
			color: black;
			background-color: #b3b3cc;
			text-align: center;		

		}
		.pad{
			padding-left: 10px;
		}
		.checked {
 			color: orange;
		}
		table {
            margin-top:30px; 
            border-collapse: collapse;
            width: 100%;    
            color: white;
            font-family: sans-serif;
            font-size: 16px;
            text-align: left;
        }
        th{
            text-align: center;
            background-color: #05668D;
            color: white;
            height:40px;
            font-size: 30px;
        }
        tr{
        	height: 50px;
        	background-color: white;
        	color: black;
        	margin-left: 10px; 
        	border-bottom: 3px solid #ddd;
        	font-size: 15px;
        }
        td{
        	padding-left: 20px; padding-right: 20px;
        }
        .e{
        	width:30px;
        }
        label{
        	padding-left: 10px;
        }


	</style>
</head>
<body>
	<header>
		<h1>MOVIES ON MOOD</h1>
	</header>
	<div class="topnav">
  		<a href="homepage.html">Home</a>
  		<a href="moodtemp.html">Mood Template</a>
		<a href="about.html">About us</a>
		<a href="user0.php">User Account</a>
		<a href="recommend.php">Recommendations</a>
		<input type="text" placeholder="Search..">
	</div>
	<div class="m">
		<div class="main f">
			
			<p>
				<?php
				echo"<img class='resize' src='$poster'>";
				echo"<h2 class='c' >$title</h2>
				<p class='pad'>
					$descr";?><br><br>Average rating:<br>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<p class="in">Available on:<br>
					<img class="logos" src="https://cdn.vox-cdn.com/thumbor/lfpXTYMyJpDlMevYNh0PfJu3M6Q=/39x0:3111x2048/920x613/filters:focal(39x0:3111x2048):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/49901753/netflixlogo.0.0.png">
					<img class="logos" src="https://www.mediaplaynews.com/wp-content/uploads/2018/04/Prime-Video-Stacked.jpg"></p>
				</p>

			</p>
		</div>
		<div class="main s">
			<h2 class="c" align="center">Caste And Crew</h2>
			<p class="pad">
				<?php
				echo"$caste";?>
			</p>
		</div>
		<div class="main t">
			<h2 class="c">Watch Trailer:</h2>
			<?php
			echo "
			<iframe width='485' height='375'
				src='$yt'>
			</iframe>"?>
		</div>
		<div class="main fo">
			<h2 class="c" align="center">Picture Gallery</h2>
		
			<div class="gallery">
				<?php
				echo"
				<a target='_blank' href='$p1'>
    			<img src='$p1'width='600' height'400'>
 	 			</a>";?>
			</div>

			<div class="gallery">
  				<?php
				echo"
				<a target='_blank' href='$p2'>
    			<img src='$p2'width='600' height'400'>
 	 			</a>";?>
  			</div>

			<div class="gallery">
  				<?php
				echo"
				<a target='_blank' href='$p3'>
    			<img src='$p3'width='600' height'400'>
 	 			</a>";?>
  			</div>

			<div class="gallery">
  				<?php
				echo"
				<a target='_blank' href='$p4'>
    			<img src='$p4'width='600' height'400'>
 	 			</a>";?>
  			</div>
		</div>
		<div class="main fi">
			<form action="gm2.php" method="post">
			<td>
			<h2>Comments:</h2>
			<label for="name">Name:</label>
  			<input type="text" name="name">
  			<label for="rate">Rating:</label>
  			<input class='e' type="text" name="rate">/5<br><br>
			<textarea name="comments" rows="3"  cols="180">
			</textarea>
			</td>
			<p><input type="submit" value="Submit"></p>
			<?php 
            $sql = "SELECT * FROM comments WHERE id=3";
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table>";
                        echo "<tr>";
                        echo "<th>Comments</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['name']."  (Rating :".$row['rate'].")"."<br>' ".$row['comments']. "'</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);
            } else{
            echo "<center><br>No Comments yet<br>Be the first to comment</center>";
            }
            } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
		</div>
	</div> 
	

</body>

</html>

