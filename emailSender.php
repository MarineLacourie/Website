<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $saturday = $_POST['saturday'];
    $saturdayChildren = $_POST['saturday-children'];
    $saturdayAdults = $_POST['saturday-adults'];
    $saturdayNight = $_POST['saturday-night'];
    $sunday = $_POST['sunday'];
    $sundayChildren = $_POST['sunday-children'];
    $sundayAdults = $_POST['sunday-adults'];

    $messageToSend = "Nom : ".$name;
    $messageToSend .="\r\nEmail : ".$email;
    $messageToSend .="\r\nLastName : ".$lastname;
    $messageToSend .="\r\nSamedi : ".$saturday;
    $messageToSend .="\r\nSamedi Adults :".$saturdayAdults;
   
    mail("marine.lacourie@gmail.com", "Mariage Registration", $messageToSend);
    header('Location: http://royer-bertrand.com/mariage/');
?>