function validateForm() {
    var hometeam = document.getElementById('f_hometeam').value;
    var awayteam = document.getElementById('f_awayteam').value;
    // console.log(hometeam);
    // console.log(awayteam);
    console.log(document.getElementById('f_matchdate').value);
    alert("ehdaa yabaa");
    if (hometeam == awayteam) {
        displayError('awayTeamError', "Please choose two different teams");
        return false;
    }
    /*
    var xhr = new XMLHttpRequest();
    xhr.open("POST", 'https://api.randomservice.com/dog', false);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(
    {
        name: 'Roger'
    }));
    */
    // TODO ADD THE POST REQUEST AND ALERT IF OK
    //  const axios = require('axios');
    /*
        axios.post('https://api.randomservice.com/dog',
        {
            name: 'Roger',
            age: 8
            
        },
        {
            headers:
            {
                'content-type': 'application/json',
                //authorization: 'Bearer 123abc456def'
            }
        }).then((res) => 
        {
            console.log(" ana hena ya salama",res)
        }).catch((error) => {
            console.error(error)
            valid = false;
        });
    */
    return true;
}
function onSubmit() {
    var valid = validateForm();
    if (valid) {
        console.log(JSON.stringify(
            {
                "homeTeam": "Ahly",
                "awayTeam": "Zamalek",
                "stadium": "Cairo Stadium",
                "dateTime": "2018-03-29T11:34:00.000Z",
                "referee": "Mostafa Sherif",
                "linesman1": "Karim Ibrahim",
                "linesman2": "Youssef Sayed"
            }
        ));
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
    clearError("homeTeamError");
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
        '<td><button name="details_delete_button" id="del_'+match.id+'">Delete</button></td>' +
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
function simulateAddingMatches()
{
    // GET REQUEST 
    match = {
        id: "elid",
        homeTeam: "Ahly",
        awayTeam: "Zamalek",
        stadium: "Cairo Stadium",
        dateTime: "2018-03-29T11:34:00.000Z",
        referee: "Mostafa Sherif",
        linesman1: "Karim Ibrahim",
        linesman2: "Youssef Sayed"
    };
    addMatch(match);
}

function getMatch(id)
{
    match = {
        id: "elid",
        homeTeam: "0",
        awayTeam: "0",
        stadium: "1",
        dateTime: "2018-03-29T11:34:00.000Z",
        referee: "Mostafa Sherif",
        linesman1: "Karim Ibrahim",
        linesman2: "Youssef Sayed"
    };
    return match;
}
function getIdFromURL()
{
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('id');
    console.log("myParam:",myParam);
    match = getMatch(myParam);
    console.log("match:",match.homeTeam);
    document.getElementById('edit_hometeam').value = match.homeTeam;
    document.getElementById('edit_awayteam').value = match.awayTeam;
    document.getElementById('edit_stadium').value = match.stadium;
    document.getElementById('edit_matchdate').value = match.dateTime;
    document.getElementById('edit_refree').value = match.referee;
    document.getElementById('edit_linesman_one').value = match.linesman1;
    document.getElementById('edit_linesman_two').value = match.linesman2;
    editMatch(id);
}
function editMatch(id)
{
    //double check m3 tifa the id type

}