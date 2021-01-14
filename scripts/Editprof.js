function getUser(id)
{
    console.log(data);
    $.ajax({
        type:'GET',
        url:'http://localhost:8080/user',
        success: function(result){
            console.log(result);
            var user = result;
            return user;
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
    document.getElementById('first').value = user.firstName;
    document.getElementById('last').value = user.lastName;
    document.getElementById('mail').value = user.email;
    document.getElementById('address').value = user.city;
}