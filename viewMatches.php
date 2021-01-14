
<!DOCTYPE html>


<html lang="en">
    <head>
        <title>View Matches</title>
<!--         
        <link rel="stylesheet" type="text/css" href="index.css" > -->
        <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
       
        <link rel="stylesheet" type="text/css" href="viewmatches.css">
        <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js> </script>
        
        <script type="text/javascript" src="scripts/viewmatches.js"></script>
        <script type="text/javascript" src="scripts/require.js"></script>
        <script>
        $(document).ready(function() {
            loadGeneralMatchesDetails(); 
        });
        </script>


    </head>
    
    <body>
        <div class="viewmatchescontainer">
            <div class="matchesdetailsgeneralcontainer">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Matches Details</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <table id="GeneralMatchesTable" class="table table-bordered table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th>Home Team</th>
                                    <th>Away Team</th>
                                    <th>Venue/Stadium</th>
                                    <th>Date/Time</th>
                                    <th>Referee</th>
                                    <th>First Linesman</th>
                                    <th>Second Lines Man</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>