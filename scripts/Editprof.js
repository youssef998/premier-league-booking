function getMatch(id)
{
    console.log(data);
    $.ajax({
        type:'GET',
        url:'http://localhost:8080/getuser',
        success: function(result){
            console.log(result);
            var match = result;
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
    user=getUser();
    console.log("User is:",user.username);
    document.getElementById('first').value = user.first;
    document.getElementById('last').value = user.last;
    document.getElementById('mail').value = user.email;
    document.getElementById('address').value = user.address;
}