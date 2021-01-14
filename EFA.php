<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EFA Management</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
       
        <link rel="stylesheet" type="text/css" href="EFA.css">
        <link rel="stylesheet" type="text/css" href="css/index.css" >
        <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
        
        <script type="text/javascript" src="EFA.js"></script>

        <?php 
        $teams = array("Zamalek", "Ahly", "Asyout");
        $stadiums = array("El saft", "borg el 3arab", "peramedz");
        ?>


    </head>
    <body>
        <form method="POST"  action="" class="CreateMatchContainer" onsubmit="return onSubmit()">		
            <h3>Create Match</h3>
            <div>
                <label >Home Team:</label>
                <?php
                    echo"<select id='f_hometeam' name='HomeTeam' class='selectpicker show-menu-arrow'>";
                    for($x=0; $x <count($teams); $x++)
                    {
                        echo "<option value=".$x." selected>".$teams[$x]."</option>";
                    }
                    echo"</select>";
                ?>
            </div>
            <div>
                <label >Away Team:</label>
                <select id='f_awayteam' name="AwayTeam">
                    <?php
                        for($x=count($teams)-1; $x>=0; $x--)
                        {
                            echo "<option value=".$x." selected>".$teams[$x]."</option>";
                        }
                    ?>
                </select>
                <span id="awayTeamError" class ="errorMessage"></span>
            </div>
            <div >
                <label >Stadiums:</label>
                <select name="Stadium" class="selectpicker show-menu-arrow">
                    <?php
                        for($x=0; $x<count($stadiums); $x++)
                        {
                            echo "<option id='f_stadium' value=".$x." selected>".$stadiums[$x]."</option>";
                        }
                    ?>
                 </select>
            </div>
            <div >  
                <label>Match Date:</label>
                <input name="matchDate" id="f_matchdate" type="datetime-local" required/>
            </div>
            <div >  
                <label>Referee:</label>
                <input name="referee" id="f_refree" type="text" required/>
            </div>
            <div >  
                <label>First Linesman:</label>
                <input name="first_lineman" id="f_linesman_one" type="text" required/>
            </div>
            <div >  
                <label>Second Linesman:</label>
                <input name="second_lineman" id="f_linesman_two" type="text" required/>
            </div>
            <div>
                <button name="createButton" id="f_button" type="submit" value="Submit" >Create</button>
            </div>
        </form>
        <div>
            
        </div>
    </body>
</html>