function loadPendingUsers()
{
    $.ajax({
        type:'GET',
        url:'http://localhost:8080/pusers',
        success: function(result){
            console.log(result);
            users = result.users
            for(var i =0; i < users.length;i++)
            {
                addUser(users[i]);
            }
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            
        }
    });
}
function loadCurrentUsers()
{
    $.ajax({
        type:'GET',
        url:'http://localhost:8080/users',
        success: function(result){
            console.log(result);
            users = result.users
            for(var i =0; i < users.length;i++)
            {
                addCurrentUser(users[i]);
            }
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            
        }
    });

}
function addUser(user)
{
    // First check if a <tbody> tag exists, add one if not
    if ($("#usersTable tbody").length == 0) {
        $("#usersTable").append("<tbody></tbody>");
    }
    // Append product to the table
    $("#usersTable tbody").append("<tr id='tr_"+user.id+"'>" +
        "<td>"+user.username+"</td>" +
        "<td>"+user.firstName+"</td>" +
        "<td>"+user.lastName+"</td>" +
        "<td>"+user.role+"</td>" +
        "<td>"+user.email+"</td>" +
        "<td>"+user.city+"</td>" +
        "<td>"+user.gender+"</td>" +
        "<td>"+user.birthDate+"</td>" +
        '<td><button name="pending_user_accept_button" id="pending_user_accept_button_'+user.id+'" onclick="approveUser(\''+user.id+'\')">Approve</button></td>' +
        '<td><button name="pending_user_reject_button" id="depending_user_reject_button_'+user.id+'"onclick="rejectUser(\''+user.id+'\')">Reject</button></td>' +
        "</tr>");
}
function addCurrentUser(user)
{
    // First check if a <tbody> tag exists, add one if not
    if ($("#currentUsersTable tbody").length == 0) {
        $("#currentUsersTable").append("<tbody></tbody>");
    }
    // Append product to the table
    $("#currentUsersTable tbody").append("<tr id='tr_"+user.id+"'>" +
        "<td>"+user.username+"</td>" +
        "<td>"+user.firstName+"</td>" +
        "<td>"+user.lastName+"</td>" +
        "<td>"+user.role+"</td>" +
        "<td>"+user.email+"</td>" +
        "<td>"+user.city+"</td>" +
        "<td>"+user.gender+"</td>" +
        "<td>"+user.birthDate+"</td>" +
        '<td><button name="delCurrent_user_reject_button_" id="delCurrent_user_accept_button_'+user.id+'" onclick="deleteCurrentUser(\''+user.id+'\')">Delete</button></td>' +
        "</tr>");
}
function approveUser(id)
{
    $.ajax({
        type:'POST',
        data : {
            id : id
        },
        url:'http://localhost:8080/approve',
        success: function(result){
            console.log(result);
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
        }
    });
    location.reload();
    alert('approved id:', id);
}
function rejectUser(id)
{
    $.ajax({
        type:'POST',
        data : {
            id : id
        },
        url:'http://localhost:8080/decline',
        success: function(result){
            console.log(result);
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
        }
    });
    location.reload();
    alert('rejected id:', id);
}
function deleteCurrentUser(id)
{
    $.ajax({
        type:'DELETE',
        data : {
            id : id
        },
        url:'http://localhost:8080/user',
        success: function(result){
            console.log(result);
        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
        }
    });
    location.reload();
    alert('deleted id:', id);
}