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
  <meta charset="utf-8">
  <title>Annoyed</title>
  <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
  <style>
    body {
        margin: 0px;
        font-family:'Convergence';
        background-color: white;
        background-image: linear-gradient(rgba(0.5, 0, 0, 0.5), rgba(0, 0, 0, 1.0)), url('https://preview.redd.it/5lqpcm3o73r21.jpg?width=2324&format=pjpg&auto=webp&s=5afa0d2321b511690baf84cdee281164ee96a09d');
      
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
    .out{
          margin-left: 125px; 
          margin-top: 100px;
    }
    .tp{
      color: white;
      font-size: 20px;
      text-align: center;
    }
    .tp:link, .tp:visited{
      text-decoration: none;

    }
    
    .grid {
      display: grid;
      grid-auto-columns: max-content;
      grid-auto-flow: dense;
      grid-auto-rows: minmax(100px, auto);
      grid-gap: 40px;
      grid-template-columns: repeat(4, 1fr);
      margin: 75px auto;
      max-width: 1100px;
    }
  .container{
    border: 3px solid white;
    padding :20px 30px;
    border-radius: 5px;
  }
  .image {
      background-color: #e5e5e5;
      display:block;
      min-height: 300px;
      width: 100%;
      border: 1px solid white;
    }
    .moviename {
      font-size: 16px;
      font-weight: bold;
      color: white;
      width: 150px;
      height: 50px;
      word-wrap: break-word;
      padding-bottom: 20px;
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
    <a href="user0.php">User Account</a>
    <a href="search.php">Search</a>
    <a href="about.html">About us</a>
  </div>
  <div class="out">
   
    <h2>Lets make your mood better:</h2>
  </div>
    <div align="center" class="grid">
    <?php
      $img=mysqli_query($conn,"SELECT * FROM general WHERE mood='Annoyed'");
      while($rows=mysqli_fetch_assoc($img))
      {
        $id=$rows['id'];
        $poster=$rows['poster1'];
        $title=$rows['title'];
    ?>
    <div class="container">
      <a href="g0.php?id=<?php echo $id;?>">
         <img class="image" src="<?php echo $poster;?>">
      </a>
      <div class="moviename">
        <p>
          <b><?php echo $title;?></b>
        </p>
      </div>
    </div>
    <?php
      }
    ?>    
  </div>
   
</body>
<footer>
  <div class="end">
    <p>Project developed by: Students of SAKEC</p>
  </div>

</footer>
</html>