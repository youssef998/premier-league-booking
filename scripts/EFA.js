
function validateEditForm() {
    var hometeam = document.getElementById('edit_hometeam').value;
    var awayteam = document.getElementById('edit_awayteam').value;
    //alert("ehdaa yabaa");
    if (hometeam == awayteam) {
        displayError('edit_awayTeamError', "Please choose two different teams");
        return false;
    }
    return true;
}

function validateForm() {
    var hometeam = document.getElementById('f_hometeam').value;
    var awayteam = document.getElementById('f_awayteam').value;
    //alert("ehdaa yabaa");
    if (hometeam == awayteam) {
        displayError('awayTeamError', "Please choose two different teams");
        return false;
    }
    return true;
}
function onSubmit() {
    var valid = validateForm();
    var data = 
        {
            "homeTeam": document.getElementById('f_hometeam').value,
            "awayTeam": document.getElementById('f_awayteam').value,
            "stadium": document.getElementById('f_stadium').value,
            "dateTime": document.getElementById('f_matchdate').value,
            "referee": document.getElementById('f_refree').value,
            "linesman1": document.getElementById('f_linesman_one').value,
            "linesman2": document.getElementById('f_linesman_two').value
        }

    console.log(data);
    if (valid) {
        $.ajax({
            type:'POST',
            data: data,
            url:'http://localhost:8080/match',
            success: function(result){
                console.log(result);
            },
            error: function(xhr, status, error){
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });
    }
    return valid;
}
function displayError(id, errorMessage) {
    document.getElementById(id).innerText = errorMessage;
}
function clearError(id) {
    document.getElementById(id).innerText = "";
}
function clearAllErrors() {
    clearError("awayTeamError");
    return true;
}

function addMatch(match) {
    // First check if a <tbody> tag exists, add one if not
    if ($("#MatchesTable tbody").length == 0) {
        $("#MatchesTable").append("<tbody></tbody>");
    }
    // Append product to the table
    $("#MatchesTable tbody").append("<tr id='tr_"+match.id+"'>" +
        '<td><button name="details_edit_button" id="edit_'+match.id+'" onclick="gotoedit(\''+match.id+'\')">Edit</button></td>' +
        "<td>"+match.homeTeam+"</td>" +
        "<td>"+match.awayTeam+"</td>" +
        "<td>"+match.stadium+"</td>" +
        "<td>"+match.dateTime+"</td>" +
        "<td>"+match.referee+"</td>" +
        "<td>"+match.linesman1+"</td>" +
        "<td>"+match.linesman2+"</td>" +
        "</tr>");
}
function gotoedit(id)
{
    // console.log(id);
    // similar behavior as an HTTP redirect
    // window.location.replace("/premier-league-booking/editMatches.php");
    // similar behavior as clicking on a link
    window.location.href = "/premier-league-booking/editMatches.php?id="+id;
}
function loadMatchesDetails()
{
    // GET REQUEST
    $.ajax({
        type:'GET',
        url:'http://localhost:8080/matches',
        success: function(result){
            console.log(result);
            for(var i =0; i < result.length;i++)
            {
                addMatch(JSON.parse(result[i]));
            }
            return match;
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            
        }
    });
}

function getMatch(id)
{
    console.log(data);
    $.ajax({
        type:'GET',
        url:'http://localhost:8080/match?id='+id,
        success: function(result){
            console.log(result);
            var match = JSON.parse(result);
            /*
            match = {
                id: "elid",
                homeTeam: "0",
                awayTeam: "0",
                stadium: "1",
                dateTime: "2018-03-29T11:34:00",
                referee: "Mostafa Sherif",
                linesman1: "Karim Ibrahim",
                linesman2: "Youssef Sayed"
            };
            */
            return match;
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            
        }
    });
    return null;
}
function loadEditFormValues()
{
    id= getIdFromURL();
    match = getMatch(id);
    if (match !=null)
    {
        console.log("match:",match.homeTeam);
        document.getElementById('edit_hometeam').value = match.homeTeam;
        document.getElementById('edit_awayteam').value = match.awayTeam;
        document.getElementById('edit_stadium').value = match.stadium;
        document.getElementById('edit_matchdate').value = match.dateTime;
        document.getElementById('edit_refree').value = match.referee;
        document.getElementById('edit_linesman_one').value = match.linesman1;
        document.getElementById('edit_linesman_two').value = match.linesman2;
    }
    else{
        alert('Returned Match with this id is null.');
    }
}
function getIdFromURL()
{
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    console.log("myParam:",id);
    return id;
}
function addStadium()
{
    var name = document.getElementById('stadium_name').value;
    var rows = document.getElementById('stadium_rows').value;
    var seats = document.getElementById('stadium_rows_seats').value;
    var stadium = {
        name : name,
        rows : rows,
        spr : seats
    };
    $.ajax({
        type:'POST',
        data: stadium,
        url:'http://localhost:8080/stadium',
        success: function(result){
            console.log(result);
            return true;
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            
        }
    });
    return false;
}
function editMatch()
{
    //double check m3 tifa the id type
    id = getIdFromURL();
    console.log(id);
    var valid = validateEditForm();
    var hometeam = document.getElementById('edit_hometeam').value;
    var awayteam = document.getElementById('edit_awayteam').value;
    var stadium =  document.getElementById('edit_stadium').value = match.stadium;
    var datetime = document.getElementById('edit_matchdate').value = match.dateTime;
    var referee = document.getElementById('edit_refree').value = match.referee;
    var linesman1 = document.getElementById('edit_linesman_one').value = match.linesman1;
    var linesman2 =document.getElementById('edit_linesman_two').value = match.linesman2;
    match = {
        "homeTeam": hometeam,
        "awayTeam": awayteam,
        "stadium": stadium,
        "dateTime": datetime,
        "referee": referee,
        "linesman1": linesman1,
        "linesman2": linesman2
    }
    if (valid) {
        $.ajax({
            type:'PUT',
            data: match,
            url:'http://localhost:8080/match?id='+id,
            success: function(result){
                console.log(result);
            },
            error: function(xhr, status, error){
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });
    }
    return valid;

}