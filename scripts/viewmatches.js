teams = ["Zamalek", "Ahly", "Asyout"];
stadiums = ["El saft", "borg el 3arab", "peramedz"];
function loadGeneralMatchesDetails()
{
    // GET REQUEST
    $.ajax({
        type:'GET',
        url:'http://localhost:8080/matches',
        success: function(result){
            console.log(result);
            matches = result.matches
            for(var i =0; i < matches.length;i++)
            {
                addMatch(matches[i]);
            }
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            
        }
    });
}

function addMatch(match) {
    // First check if a <tbody> tag exists, add one if not
    if ($("#GeneralMatchesTable tbody").length == 0) {
        $("#GeneralMatchesTable").append("<tbody></tbody>");
    }
    // Append product to the table
    $("#GeneralMatchesTable tbody").append("<tr id='tr_G_"+match.id+"'>" +
        "<td>"+teams[match.homeTeam]+"</td>" +
        "<td>"+teams[match.awayTeam]+"</td>" +
        "<td>"+stadiums[match.stadium]+"</td>" +
        "<td>"+match.dateTime+"</td>" +
        "<td>"+match.referee+"</td>" +
        "<td>"+match.linesman1+"</td>" +
        "<td>"+match.linesman2+"</td>" +
        "</tr>");
}