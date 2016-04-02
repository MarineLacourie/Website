<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $saturday = $_POST['saturday'];
    $saturdayAdults = $_POST['saturday-adults'];
    $saturdayChildren = $_POST['saturday-children'];
    $saturdayNight = $_POST['night'];
    $sunday = $_POST['sunday'];
    $sundayChildren = $_POST['sunday-children'];
    $sundayAdults = $_POST['sunday-adults'];
    $comments = $_POST['comments'];

    $messageToSend = "Nom : ".$name;
    $messageToSend .="\r\nLastName : ".$lastname;
    $messageToSend .="\r\nEmail : ".$email;
    $messageToSend .="\r\nSamedi : ".$saturday;
    $messageToSend .="\r\nSamedi Adults :".$saturdayAdults;
    $messageToSend .="\r\nSamedi Enfants :".$saturdayChildren;
    $messageToSend .="\r\nSamedi Nuits :".$saturdayNight;

    $messageToSend .="\r\nDimanche :".$sunday;
    $messageToSend .="\r\Dimanche Adults :".$sundayAdults;
    $messageToSend .="\r\Dimanche Enfants :".$sundayChildren;

    $messageToSend .="\r\nComments :".$comments;
   
    mail("marine.lacourie@gmail.com", "Mariage Registration", $messageToSend);
    header('Location: http://royer-bertrand.com/mariage/');
?>