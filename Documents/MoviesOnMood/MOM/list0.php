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
    $list=$_POST["list"];
    mysqli_query($conn,"INSERT INTO list (title) VALUES('$list')"); 
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Homepage</title>
  <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
  <style>
    body {
        margin: 0px;
        font-family:'Convergence';
        background-color: #02C39A;
        /*background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1.0)), url('https://preview.redd.it/5lqpcm3o73r21.jpg?width=2324&format=pjpg&auto=webp&s=5afa0d2321b511690baf84cdee281164ee96a09d');*/
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
    
    h2{
      color: white;
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
     .bod{
            color: white;
            margin-bottom: 200px;
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
    <a href="admin1.php">Admin</a>
    <a class="active" href="user0.php">User Account</a>
    <a href="search.php">Search</a>
    <a href="about.html">About us</a>
  </div>
  <div align="center" class="main fi" >
      <h2>Make your own Favourite list:</h2>
      <form action="list0.php" method="post">
      <textarea rows="1"  cols="35" name="list" >
      </textarea>
      <p>
      <input type="submit" value="Submit">
    </p>
  </div>
  <div class="main fi">
      
      <?php 
            $sql = "SELECT * FROM list WHERE id=$id";
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table>";
                        echo "<tr>";
                        echo "<th>Comments</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."<br> ".$row['title']. "</td>";
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
  
 
         
  
  </div>
</body>
</html>