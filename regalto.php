<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>LOGIssN</title>

    <style type="text/css">

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css" >

    <link rel="stylesheet" type="text/css" href="css/index.css" >
        <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
        <script type="text/javascript">
            function validateForm(){
            
        }
</script>
</head>
<body >
    <title>Zebby Page</title>
    <link rel="stylesheet" href="index.css">
   <div class="sign-in-form">
    <img src="user.png" id="img1">
        <h1>Sign In</h1>
        <form name="myForm" action="home.php" onsubmit=" return validateForm()" method="post">
            <input type="text" class="input-box" placeholder="Username">
            <input type="password" class="input-box" placeholder="Password">
            <p><span> <input type="checkbox"> </span>I agree to the terms and conditions</p>
            <button type="submit" class="signin-btn" >Sign in</button>
            <hr>
                <p class="or">OR</p>
                <p>Create an account! <a href="/signup">Sign Up </a></p>
        </form>
   </div>
</body>
</html>