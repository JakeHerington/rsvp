<?php     
    if(isset($_POST)) {
    
        session_start();
        $file = fopen('output/rsvp.csv', 'a');
        $attendees = array();
        $attendee = array($_SESSION['code'], '', '', $_POST['attending'], '', '', '', '', $_SESSION['name']); // insert code here
        if($_POST['attending'] == 'yes') {
            switch($_POST['total-attending']) {
                
                case 1: 
                    // attendee 1
                    $attendee[1] = $_POST['a1-fName'];
                    $attendee[2] = $_POST['a1-lName'];
                    $attendee[4] = $_POST['a1-diet'];
                    if(isset($_POST['a1-gf'])) {
                        $attendee[5] = $_POST['a1-gf'];
                    }
                    else {
                        $attendee[5] = 'no';
                    }
                    if(isset($_POST['accom'])) {
                        $attendee[6] = $_POST['accom'];
                    }
                    else {
                        $attendee[6] = 'no';
                    }
                    $attendee[7] = $_POST['message'];
                    array_push($attendees, $attendee);
                break;
                case 2:
                    // attendee 1
                    $attendee[1] = $_POST['a1-fName'];
                    $attendee[2] = $_POST['a1-lName'];
                    $attendee[4] = $_POST['a1-diet'];
                    if(isset($_POST['a1-gf'])) {
                        $attendee[5] = $_POST['a1-gf'];
                    }
                    else {
                        $attendee[5] = 'no';
                    }
                    if(isset($_POST['accom'])) {
                        $attendee[6] = $_POST['accom'];
                    }
                    else {
                        $attendee[6] = 'no';
                    }
                    $attendee[7] = $_POST['message'];
                    array_push($attendees, $attendee);
                    // attendee 2
                    $attendee[1] = $_POST['a2-fName'];
                    $attendee[2] = $_POST['a2-lName'];
                    $attendee[4] = $_POST['a2-diet'];
                    if(isset($_POST['a2-gf'])) {
                        $attendee[5] = $_POST['a2-gf'];
                    }
                    else {
                        $attendee[5] = 'no';
                    }
                    array_push($attendees, $attendee);
                break;
                case 3:
                    $attendee[1] = $_POST['a1-fName'];
                    $attendee[2] = $_POST['a1-lName'];
                    $attendee[4] = $_POST['a1-diet'];
                    if(isset($_POST['a1-gf'])) {
                        $attendee[5] = $_POST['a1-gf'];
                    }
                    else {
                        $attendee[5] = 'no';
                    }
                    if(isset($_POST['accom'])) {
                        $attendee[6] = $_POST['accom'];
                    }
                    else {
                        $attendee[6] = 'no';
                    }
                    $attendee[7] = $_POST['message'];
                    array_push($attendees, $attendee);
                    // attendee 2
                    $attendee[1] = $_POST['a2-fName'];
                    $attendee[2] = $_POST['a2-lName'];
                    $attendee[4] = $_POST['a2-diet'];
                    if(isset($_POST['a2-gf'])) {
                        $attendee[5] = $_POST['a2-gf'];
                    }
                    else {
                        $attendee[5] = 'no';
                    }
                    array_push($attendees, $attendee);
                    // attendee 3
                    $attendee[1] = $_POST['a3-fName'];
                    $attendee[2] = $_POST['a3-lName'];
                    $attendee[4] = $_POST['a3-diet'];
                    if(isset($_POST['a3-gf'])) {
                        $attendee[5] = $_POST['a3-gf'];
                    }
                    else {
                        $attendee[5] = 'no';
                    }
                    array_push($attendees, $attendee);
            } 
        }
        else { // not attending
            $attendee[7] = $_POST['n-message'];
            array_push($attendees, $attendee);
        }

        foreach($attendees as $fields) {
            fputcsv($file, $fields);
        }
        fclose($file);

        header("Location: /rsvp/form-complete.html");
        exit();
    }
?>