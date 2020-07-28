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