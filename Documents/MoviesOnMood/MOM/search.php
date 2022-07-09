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
   <title>Search</title>
  <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
  <style>
    body {
        margin: 0px;
        font-family:'Convergence';
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1.0)), url('https://preview.redd.it/5lqpcm3o73r21.jpg?width=2324&format=pjpg&auto=webp&s=5afa0d2321b511690baf84cdee281164ee96a09d');
        color: white;
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
    
    .end{
      position:relative;
      bottom:-60px;
      height: 90px;
      width: 100%;
      color: black;
      background-color: #b3b3cc;
      text-align: center;   

    }
        .e{
          width:30px;
        }
        label{
          padding-left: 10px;
        }
    .search{
      margin-top: 50px;
      color: white;
      font-size: 50px;
      margin-bottom: 70px;
    }
    .seabox{
      font-size: 20px;
      width: 500px;
      height: 30px;
    }
    .box{
      height: 35px;
      width: 100px;
      font-size: 20px;
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
    <a class="active" href="search.php">Search</a>
    <a href="about.html">About us</a>
    
  </div>
  <div class="search" align="center">   
    <p><b>Search Movie:</b></p>
    <form method="POST">
    <input class="seabox" type="text" name="search" placeholder="Search"/>
    <input class="box" type="submit" name="submit">
  </form>
  </div>
  <div align="center" class="grid">
    <?php 

    $con = new PDO("mysql:host=localhost;dbname=login",'Rums','poki10');

    if(isset($_POST["submit"])){
      $str = $_POST["search"];
      $c=0;
      for ($i=1; $i<100 ; $i++) { 
        $sth = $con->prepare("SELECT * FROM `general` WHERE id=$i"); 
        $sth->setFetchMode(PDO:: FETCH_OBJ);
        $sth->execute();
        if($row=$sth->fetch()){
          similar_text($row->title, $str, $percent);
          //echo $percent;
          if($percent>65 || stristr($row->title, $str)!==false)
          {
              $c++;     
      ?>
      <div class="container">
      <a href="g0.php?id=<?php echo $row->id;?>">
         <img class="image" src="<?php echo $row->poster1;?>">
      </a>
      <div class="moviename">
        <p>
          <b><?php echo $row->title;?></b>
        </p>
      </div>
    </div>
  <?php     
      }
    }
  }
  ?>
  
  </div>
    <?php     
      if($c>0){

    }
    else
    {
      ?>
      <p align="center">Movie does not exist<br>Drop it as a Recommendation in the User Account tab</p>
    <?php
    } 
  }
?>
</div>

  <div class="end">
    <p>Project developed by: Students of SAKEC</p>
  </div>


  

</body>

</html>

