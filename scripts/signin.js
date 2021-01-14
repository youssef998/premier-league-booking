function onSubmit() {
    var valid =validateForm();
    var data = 
        {
            "username": document.getElementById('myuser').value,
            "password": document.getElementById('mypassword').value
            
        }
    if (valid) {
        $.ajax({
            type:'POST',
            data: data,
            url:'localhost:8080/home',
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