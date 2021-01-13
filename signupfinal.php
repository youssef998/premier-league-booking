<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>LOGIssN</title>

    <style type="text/css">

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
        <script type="text/javascript">

        function validateForm(){
            var first= document.forms["myForm"]["first"].value;
            var last= document.forms["myForm"]["last"].value;
            var password= document.forms["myForm"]["password"].value;
            var confirm= document.forms["myForm"]["confirmPassword"].value;
            var email= document.forms["myForm"]["email"].value;
            var name= document.forms["myForm"]["username"].value;
            var name= document.forms["myForm"]["username"].value;
            var date= document.forms["myForm"]["date"].value;
            
            if(name=="" || password=="" || first=="" || last=="" || confirm=="" ||email=="" || date=="")
            {
                  alert("All fields must be filled out");
                  return false;
            }
            if(password.length<8)
            {
                $("#m5").text( "A password should be at least 8 characters." );
                return false;
            }
            if(password.search(/[0-9]/)==-1 ||password.search(/[A-Z]/)==-1)
            {
                $("#m5").text( "A password should include at least one uppercase character and one numeric digit." );
                return false;
            }
            if(password!=confirm)
            {
                $("#m5").text( "Passwords should match" );
                return false;
            }
            
        }


var AM = require('./modules/signup-manager');
module.exports = function(app) {

/*
    login & logout
*/

    app.get('/', function(req, res){
    // check if the user has an auto login key saved in a cookie //
        if (req.cookies.login == undefined){
            res.render('login', { title: 'Hello - Please Login To Your Account' });
        }   else{
    // attempt automatic login //
            AM.validateLoginKey(req.cookies.login, req.ip, function(e, o){
                if (o){
                    AM.autoLogin(o.user, o.pass, function(o){
                        req.session.user = o;
                        res.redirect('/home');
                    });
                }   else{
                    res.render('login', { title: 'Hello - Please Login To Your Account' });
                }
            });
        }
    });
    
    app.post('/', function(req, res){
        AM.manualLogin(req.body['user'], req.body['pass'], function(e, o){
            if (!o){
                res.status(400).send(e);
            }   else{
                req.session.user = o;
                if (req.body['remember-me'] == 'false'){
                    res.status(200).send(o);
                }   else{
                    AM.generateLoginKey(o.user, req.ip, function(key){
                        res.cookie('login', key, { maxAge: 900000 });
                        res.status(200).send(o);
                    });
                }
            }
        });
    });

    // app.post('/logout', function(req, res){
    //     res.clearCookie('login');
    //     req.session.destroy(function(e){ res.status(200).send('ok'); });
    // })




app.get('/signup', function(req, res) {
        res.render('signup', {  title: 'Signup' });
    });
    
    app.post('/signup', function(req, res){
        AM.addNewAccount({
            name    : req.body['name'],
            email   : req.body['email'],
            user    : req.body['user'],
            pass    : req.body['pass'],
        }, function(e){
            if (e){
                res.status(400).send(e);
            }   else{
                res.status(200).send('ok');
            }
        });
    
    app.get('*', function(req, res) { res.render('404', { title: 'Page Not Found'}); });
};
</script>
</head>
<body >
    <title>Sign up Page</title>
    <link rel="stylesheet" href="index.css">
   <div class="sign-in-form">
    <img src="user.png" id="img1">
        <h1>Welcome to the egyptian lega</h1>
        <form name="myForm" action="regalto.php" onsubmit=" return validateForm()" method="post">
            <input type="text" class="input-box" placeholder="First name" name="first"><span id="m1" style="color: red;"></span>
            <input type="text" class="input-box" placeholder="Last name" name="last"><span id="m2" style="color: red;"></span>
            <input type="email" class="input-box" placeholder="Email" name="email"><span id="m3" style="color: red;"></span>
             <input type="text" class="input-box" placeholder="Username" name="username"><span id="m4" style="color: red;"></span>
            <input type="password" class="input-box" placeholder="Password" name="password"><span id="m5" style="color: red;"></span>
            <input type="password" class="input-box" placeholder="Confirm Password"name="confirmPassword"><span id="m6" style="color: red;"></span>
            <input type="date" class="input-box" name="date" >
            <select name="gender" class="input-box">
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
            <input type="text" class="input-box" name="address" placeholder="Address (Optional)">
            <select name="role" class="input-box">
            <option value="Manager">Manager</option>
            <option value="fan">Fan</option>
            </select>
            
            <button type="submit" class="signin-btn" >Sign up</button>
        </form>
   </div>
</body>
</html>