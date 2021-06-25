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

if($_SERVER["REQUEST_METHOD"]=="POST"){		
		$mid=$_POST["list"];	
		$a=mysqli_query($conn,"SELECT * FROM general WHERE id=$mid");
	while($row = mysqli_fetch_assoc($a)){
				$title=$row['title'];
                }	
                
		mysqli_query($conn,"INSERT INTO list (id,name,mid) VALUES('$id','$title','$mid')");	
  
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
			background-color: gray;
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
		body{
      color: white;
    }
    	table {
            margin-top:30px; 
            border-collapse: collapse;
            width: 75%;    
            color: white;
            font-family: sans-serif;
            font-size: 16px;
            text-align: left;
        }
        th {
            text-align: center;
            background-color: #05668D;
            color: white;
            height:30px;
            font-size: 20px;
        }
        .t1{
        	width: 150px;
        	text-align: center;
        }
        .t2{
        	width:700px;
        }
        tr {
        	height: 50px;
        	background-color: none;
        	color: white;
        	margin-left: 10px; 
        	border-bottom: 2px solid #ddd;
        	font-size: 20px;
        }
        td{
        	padding-left: 20px; padding-right: 20px;
        }
        h3{
        	color: white;
        }
    .end{
      position:relative;
      bottom: -10px;
      height: 90px;
      width: 100%;
      color: black;
      background-color: #b3b3cc;
      text-align: center;   
    }
    .topnav a.b{
      float: right;
    }
    .in:link, .in:visited{
      color: white;
      text-decoration: none;
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
		<a class="active" href="user0.php">User Account</a>
		<a href="search.php">Search</a>
		<a href="about.html">About us</a>
    <a class="b" href="log.php">Logout</a>
	</div>
		<div align="center" class="main fi" >
			<form action="listf.php?id=<?php echo $id;?>" method="post">
			<td>
			<h2>Make your own Favourite list</h2>
			<h3>Enter Movie id from the list:</h3>
			<textarea name="list" rows="3"  cols="50">
			</textarea>
			</td>
			<p><input type="submit" value="Submit"></p>
			<h2>--My Favourite list--</h2>
			<?php 
            $sql1 = "SELECT * FROM list WHERE id=$id";
            if($result = mysqli_query($conn, $sql1)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table>";
                        echo "<tr>";
                        echo "<th>Movie id</th>";
                        echo "<th>Movie name</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td class='t1'>".$row['mid']."</td>";
                    echo "<td class='t2'>".$row['name']."</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);
            } else{
            echo "<center><br>Your List is Empty<br>Use Movie id to add it to your list</center>";
            }
            } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            
        ?><br><br>
         <a class="in" href="list.php?id=<?php echo $id;?>">Back to List Menu</a>
		</div>
    <br><br>
	<div align="center" class="main fi" >
		<h2>List of Movies</h2>
		<?php 
            $sql = "SELECT * FROM general WHERE 1";
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table>";
                        echo "<tr>";
                        echo "<th>Movie id</th>";
                        echo "<th>Movie Mood</th>";
                        echo "<th class='t2'>Movie Title</th>";
                       	echo "</tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td class='t1'>".$row['id']."</td>";
                    echo "<td class='t1'>".$row['mood']."</td>";
                    echo "<td class='t1'>".$row['title']."</td>";
                    echo "</tr>";
                }
            echo "</table>";
            mysqli_free_result($result);
            } 
            } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
		</div>
</body>
<footer>
  <div class="end">
    <p>Project developed by: Students of SAKEC</p>
  </div>
</footer>
</html>

