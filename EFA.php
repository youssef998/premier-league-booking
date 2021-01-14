<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EFA Management</title>
<!--         
        <link rel="stylesheet" type="text/css" href="index.css" > -->
        <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
       
        <link rel="stylesheet" type="text/css" href="EFA.css">
        <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
        
        <script type="text/javascript" src="scripts/EFA.js"></script>
        <script type="text/javascript" src="scripts/require.js"></script>
        <?php 
        $teams = array("Zamalek", "Ahly", "Asyout");
        $stadiums = array("El saft", "borg el 3arab", "peramedz");
        ?>


    </head>
    
    <body>
        <?php include_once('navbar.php'); ?>
        <div class="efacontainer">
        <form method="POST"  action="" class="CreateMatchContainer" onsubmit="return onSubmit()">		
            <div class="row">
                <div class="col-sm-6">
                    <h2>Create Match</h2>
                </div>
            </div>
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
        <div class="MatchDetailsContainer">
            <div class="row">
                <div class="col-sm-6">
                    <h2>List Products</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <table id="MatchesTable" class="table table-bordered table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Home Team</th>
                                <th>Away Team</th>
                                <th>Venue/Stadium</th>
                                <th>Date/Time</th>
                                <th>Referee</th>
                                <th>First Linesman</th>
                                <th>Second Lines Man</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!--
        <table>
            <tr>
                <th>Home Team</th>
                <th>Away Team</th>
                <th>Venue/Stadium</th>
                <th>Date/Time</th>
                <th>Referee</th>
                <th>First Linesman</th>
                <th>Second Lines Man</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>Roland Mendel</td>
                <td>Austria</td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>Helen Bennett</td>
                <td>UK</td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>Yoshi Tannamuri</td>
                <td>Canada</td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>Giovanni Rovelli</td>
                <td>Italy</td>
            </tr>
        </table>
                    
        </div>-->
    </div>
    </body>
</html>