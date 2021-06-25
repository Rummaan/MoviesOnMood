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
<!DOCTYPE html>
<html>
<head>
	<title>..</title>
</head>
<body>
	<h2>hello</h2>
	  <p>
	  	<?php
	  	$id=1;
		$img=mysqli_query($conn,"SELECT * FROM try WHERE id=$id");
	 	while($row = mysqli_fetch_assoc($img)){
	 				$title=$row['title'];
                    $nm=$row['img'] ;
                    $des=$row['description'];
                }
	  	
	  		
			echo "<img src='$nm'>";
			echo "<p>
			 	<h1>$title</h1>
			 	$des
			 </p>"
	  	?>
	  </p>

  
</body>
</html>
