function getUser(id)
{
    console.log(data);
    $.ajax({
        type:'GET',
        url:'http://localhost:8080/user?id='+id,
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
    id= getIdFromURL();
    user=getUser(id);
    console.log("User is:",user.username);
    document.getElementById('first').value = user.firstName;
    document.getElementById('last').value = user.lastName;
    document.getElementById('email').value = user.email;
    document.getElementById('address').value = user.city;
}
function getIdFromURL()
{
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    console.log("myParam:",id);
    return id;
}