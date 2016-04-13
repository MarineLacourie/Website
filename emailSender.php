<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $saturday = $_POST['saturday'];
    $saturdayAdults = $_POST['saturday-adults'];
    $namesSaturday = $_POST['namesSaturday'];
    $saturdayChildren = $_POST['saturday-children'];
    $saturdayNight = $_POST['night'];
    $sunday = $_POST['sunday'];
    $sundayChildren = $_POST['sunday-children'];
    $sundayAdults = $_POST['sunday-adults'];
    $namesSundayAdults = $_POST['namesSunday'];
    $comments = $_POST['comments'];

    $messageToSend = "Prénom : ".$name;
    $messageToSend .="\r\nNom : ".$lastname;
    $messageToSend .="\r\nE-mail : ".$email;
    $messageToSend .="\r\nPrésence samedi soir : ".$saturday;
    $messageToSend .="\r\nNombre adultes samedi soir : ".$saturdayAdults;
    $messageToSend .="\r\nPrénoms adultes samedi soir : ".$namesSaturday;
    $messageToSend .="\r\nNombre enfants samedi soir : ".$saturdayChildren;
    $messageToSend .="\r\nNombre tentes :".$saturdayNight;

    $messageToSend .="\r\nPrésence dimanche midi : ".$sunday;
    $messageToSend .="\r\nNombre adultes dimanche midi : ".$sundayAdults;
    $messageToSend .="\r\Prénoms adultes dimanche midi : ".$namesSunday;
    $messageToSend .="\r\nNombre enfants dimanche midi : ".$sundayChildren;

    $messageToSend .="\r\nCommentaires : ".$comments;
   
    mail("marine.lacourie@gmail.com", "Mariage Registration", $messageToSend);
    header('Location: http://royer-bertrand.com/mariage/');
?>