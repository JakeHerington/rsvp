function toggleYes() {
    $('#yes').collapse('toggle')

    $('#yes').on('shown.bs.collapse', function () {
        $('#no').collapse('hide')
    })
}

function toggleNo() {
    $('#no').collapse('toggle')

    $('#no').on('shown.bs.collapse', function () {
        $('#yes').collapse('hide')
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