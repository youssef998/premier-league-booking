<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>LOGIssN</title>

    <style type="text/css">
        body{
    background-image: url("Mohamed-Salah-Cover-.jpg");
    background-size: cover;
}

    </style>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <!--  FontAWESOME -->
  <!--   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->

    <!-- my css-->


    <link rel="stylesheet" type="text/css" href="css/index.css" >
        <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
        <script type="text/javascript">
      //  $(document).ready(function(){
       // $('#isNews').change(function(){
        // $("#newsSource").prop("disabled", !$(this).is(':checked'));



    //         });
    //         $('.myForm').ajaxForm({
    //     beforeSubmit : function(formData, jqForm, options){
    //         if (lv.validateForm() == false){
    //             return false;
    //         }   else{
    //         // append 'remember-me' option to formData to write local cookie //
    //             formData.push({name:'remember-me', value:$('#btn_remember').find('span').hasClass('fa-check-square')});
    //             return true;
    //         }
    //     },
    //     success : function(responseText, status, xhr, $form){
    //         if (status == 'success') window.location.href = '/home';
    //     },
    //     error : function(e){
    //         lv.showLoginError('Login Failure', 'Please check your username and/or password');
    //     }
    // }); 



    //         });
    //     function validateForm(){
    //         var name= document.forms["myForm"]["username"].value;
    //         var password= document.forms["myForm"]["password"].value;
    //         name2=name.toUpperCase();
    //         if(name=="" || password=="")// || checkPassword=="" )//|| age=="")
    //         {
    //               alert("All fields must be filled out");
    //               return false;
    //         }
    //         if(password.length<8)
    //         {
    //             $("#message").text( "A password should be at least 8 characters." );
    //             return false;
    //         }
    //         if(password.search(/[0-9]/)==-1 ||password.search(/[A-Z]/)==-1)
    //         {
    //             $("#message").text( "A password should include at least one uppercase character and one numeric digit." );
    //             return false;
    //         }
            
    //     }
</script>
</head>
<body >
    <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div class="modal-content" style=" margin-top: 100px;"> 
                <div class="col-12 user-img">
                    <img src="css/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" name="myForm" action="calc.php" onsubmit=" return validateForm()" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Username" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Password" name="password"/><span id="message" style="color: red;"></span>
                    </div>
                     <div class="form-group" id="contrasena-group">
                </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Log in </button>
                     <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Sign Up </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>