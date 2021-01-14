function validateForm() {
    var hometeam = document.getElementById('f_hometeam').value;
    var awayteam = document.getElementById('f_awayteam').value;
    // console.log(hometeam);
    // console.log(awayteam);
    if (hometeam == awayteam) {
        displayError('awayTeamError', "Please choose two different teams");
        return false;
    }
    // TODO ADD THE POST REQUEST AND ALERT IF OK
    //  const axios = require('axios');

    return true;
}
function onSubmit() {
    var valid = validateForm();
    if (valid) {
        define(function (require) {
            var axios = require('name');
      
            axios.post('https://api.randomservice.com/dog',
            {
                "homeTeam": "Ahly",
                "awayTeam": "Zamalek",
                "stadium": "Cairo Stadium",
                "dateTime": "2018-03-29T11:34:00.000Z",
                "referee": "Mostafa Sherif",
                "linesman1": "Karim Ibrahim",
                "linesman2": "Youssef Sayed"
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
            })
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
    clearError("homeTeamError");
    return true;
}
