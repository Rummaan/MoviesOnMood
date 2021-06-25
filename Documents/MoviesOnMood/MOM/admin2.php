<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'Rums');
    define('DB_PASSWORD', 'poki10');
    define('DB_NAME', 'login');
 
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
   <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    
    <style >
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
        table {
            margin-top:30px; 
            border-collapse: collapse;
            width: 800px;    
            color: white;
            font-family: sans-serif;
            font-size: 16px;
            text-align: left;
        }
        th {
            text-align: center;
            background-color: #028090;
            color: white;
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
        <a class="active" href="admin1.php">Admin</a>
        <a href="user0.php">User Account</a>
        <a href="search.php">Search</a>
        <a href="about.html">About us</a>
        <a class="b" href="logadmin.php">Logout</a>
    </div>
    <div class="bod" align="center">
        <h2>Recommendations</h2>
        <?php
            $sql = "SELECT * FROM recommend";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table>";
                        echo "<tr>";
                        echo "<th>SrNo.</th>";
                        echo "<th>Recommendations</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['recommend'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
            } else{
            echo "No records to display.";
            }
            } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            mysqli_close($link);
        ?>
    </div>
</body>
<footer>
    <div class="end">
        <span>Project developed by: Students of SAKEC</span>
    </div>
</footer>
</html>