function toggleYes() {
    $('#yes').collapse('toggle')
    
    $('#yes').on('shown.bs.collapse', function () {
        $('#no').collapse('hide')
        $('#attending-yes').attr('checked', true)
    })
    $('#yes').on('hidden.bs.collapse', function () {
        $('#attending-yes').attr('checked', false)
    })
}

function toggleNo() {
    $('#no').collapse('toggle')

    $('#no').on('shown.bs.collapse', function () {
        $('#yes').collapse('hide')
        $('#attending-no').attr('checked', true)
    })
    $('#no').on('hidden.bs.collapse', function () {
        $('#attending-no').attr('checked', false)
    })
}

function show(value) {
    switch(parseInt(value)) {
        case 1: 
            $('#a2').collapse('hide')
            $('#a3').collapse('hide')
            break;
        case 2: 
            $('#a2').collapse('show')
            $('#a3').collapse('hide')
            break;
        case 3:
            $('#a2').collapse('show')
            $('#a3').collapse('show')
            break;
        default:
            console.log('default')
            break;
    }
} 

function validate() {
    var a1fName = document.forms["form"]["a1-fName"].value;
    var a1lName = document.forms["form"]["a1-lName"].value;
    var a2fName = document.forms["form"]["a2-fName"].value;
    var a2lName = document.forms["form"]["a2-lName"].value;
    var a3fName = document.forms["form"]["a3-fName"].value;
    var a3lName = document.forms["form"]["a3-lName"].value;
    var a1diet = document.forms["form"]["a1-diet"].value;
    var a2diet = document.forms["form"]["a2-diet"].value;
    var a3diet = document.forms["form"]["a3-diet"].value;
    var totalAtt = document.forms["form"]["totalAttending"].value;

    switch(parseInt(totalAtt)) {
        case 1:
            if(a1fName == "" || a1lName == "") {
                alert("Please fill out all attendee name fields.");
                return false;
            }
            if(a1diet == "") {
                alert("Please indicate dietary restrictions for all attendees");
                return false;
            }
            break;
        case 2:
            if(a1fName == "" || a1lName == "" || a2fName == "" || a2lName == "") {
                alert("Please fill out all attendee name fields.");
                return false;
            }
            if(a1diet == "" || a2diet == "") {
                alert("Please indicate dietary restrictions for all attendees");
                return false;
            }
            break;
        case 3:
            if(a1fName == "" || a1lName == "" || a2fName == "" || a2lName == "" || a3fName == "" || a3lName == "") {
                alert("Please fill out all attendee name fields.");
                return false;
            }
            if(a1diet == "" || a2diet == "" || a3diet == "") {
                alert("Please indicate dietary restrictions for all attendees");
                return false;
            }
            break;
    }
}

function validateCode() {
    var code = document.getElementById("code");

    if(code.length > 6) {
        alert("Please enter valid code.");
        return false;
    }
    if(code.substring(0,2) != "JJ") {
        alert("Please enter valid code.");
        return false;
    }
    if(parseInt(code.substring(4)) > 72) {
        alert("Please enter valid code.");
        return false;
    }
    if(code.substring(2, 3) != "-") {
        alert("Please enter valid code.");
        return false;
    }
}