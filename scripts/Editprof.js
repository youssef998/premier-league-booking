function onSubmit() {
    var valid = validateForm();
    var data = JSON.stringify(
        {
            "homeTeFam": document.getElementById('first').value,
            "awayTeam": document.getElementById('last').value,
            "stadium": document.getElementById('mail').value,
            "dateTime": document.getElementById('address').value,
        }
    )

    if (valid) {
        $.ajax({
            type:'POST',
            data: data,
            url:'localhost:8080/match',
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