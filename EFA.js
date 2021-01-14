function validateForm() {
    var hometeam = document.getElementById('f_hometeam').value;
    var awayteam = document.getElementById('f_awayteam').value;
    // console.log(hometeam);
    // console.log(awayteam);
    if (hometeam == awayteam)
    {
        displayError('awayTeamError',"Please choose two different teams");
        return false;
    }
    return true;
}
function onSubmit() {
    var valid = validateForm();
    if (valid) {
       console.log('SUBMIT BA2A YASTA ');
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
