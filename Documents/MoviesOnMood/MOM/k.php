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
		$id=1;
		$name=$_POST["name"];
		$comments=$_POST["comments"];
		$rate=$_POST["rate"];
		mysqli_query($conn,"INSERT INTO comments (id,name,comments,rate) VALUES('$id','$name','$comments','$rate')");	
	}

	$id=1;
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
<style>
	body {
			background-image: linear-gradient(rgba(0.5, 0, 0, 0.5), rgba(0, 0, 0, 1.0)), url('https://preview.redd.it/5lqpcm3o73r21.jpg?width=2324&format=pjpg&auto=webp&s=5afa0d2321b511690baf84cdee281164ee96a09d');
  			margin: 0;
  			font-family: 'Convergence';
  			color: white;
  		}
.item1 {
	 grid-area: header;
	 height: 345px;
 }
.item2 { grid-area: menu; 
overflow:scroll;
height: 300px;
}
.item3 { grid-area: main;
height: auto; 
overflow-y: scroll;}
.item4 { grid-area: right;
	
}
.item5 { grid-area: footer; }

.container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu menu menu menu menu menu'
    'footer footer footer footer footer footer'
    'main main main right right right';
  grid-gap: 10px;
  
  padding: 10px;

}

.container > div {
  border: 5px solid #05668D;
  
  padding: 10px;
  
  font-family: Arial,sans-serif;
}
img.resize{
			height: 300px;
			width: auto;
			float: left;
			margin-right: 10px;
			border: 3px solid #05668D  ;


		}
		img.logos{
			margin: 10px 10px 10px;
			height: 50px;
			width: 50px;
		}
		.pad{
			padding-left: 10px;
		}
		.checked {
 			color: orange;
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
		div.gallery{
			margin: 5px;
  			border: 0px solid #ccc;
  			float: left;
			max-width: 25%;		
			max-height: 5%;	
		}
		div.gallery:hover {
			border: 2px solid white;
		}
		div.gallery img {
  			width: 100%;
  			height: auto;
  		}
</style>
</head>
<body>

<h1>Grid Layout</h1>
<div class="topnav">
  		<a href="homepage.html">Home</a>
  		<a href="moodtemp.html">Mood Template</a>
		<a href="about.html">About us</a>
		<a href="user0.php">User Account</a>
		<a href="recommend.php">Recommendations</a>
		<input type="text" placeholder="Search..">
	</div>


<div class="container">
  <div class="item1">
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
  <div class="item2">
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
  <div class="item3">
			<h2 class="c" align="center">Caste And Crew</h2>
			<p class="pad">
				<?php
				echo"$caste";?>
			</p>
  </div>  
  <div class="item4">
  	<h2></h2>			
  </div>
  <div class="item5">Footer</div>
</div>

</body>
</html>
