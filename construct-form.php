<?php 
    session_start();
    $_SESSION['code'] = $_POST['code'];
    $_SESSION['name'] = 'Jennifer Hanson';

    header("Location: /rsvp/form.php");
    exit();
?>