<!DOCTYPE html>


<html lang="en">
<head>
    <title>Home</title>

    <style type="text/css">

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
    <script type="text/javascript">
    </script>
</head>
<body >
<?php
$user=$_POST["username"]; 
?>
            
            
    <link rel="stylesheet" href="index.css">
    <nav>
        <ul>
            <li><a><?php echo $user;?></a></li>
            <li><a href="home.php">Home</a></li>
             <li><a href="#">Sports</a></li>
              <li><a href="editprof.php">Edit Profile</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="regalto.php">Sign out</a></li>
        </ul>
    </nav>
    <img src="flag1.jpg" id="img2" >
</body>
</html>