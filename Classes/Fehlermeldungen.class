<?php

$msg = "" ; //Message = Fehlermeldung, die auf der Seite angezeigt wird, falls User falsche Eingaben macht

//Messages = Array, mit allen möglichen Fehlermeldungen
$messages =  
    [
    'Passwortbestätigung unkorrekt!',
    'Bitte geben Sie eine gültige Emailadresse ein!',
    'Bitte füllen Sie alle Felder aus!',
    'Emailadresse bereits registriert!',
    'Sie wurden registriert'
    ];  
    


}
    

  
    //Überprüfung, ob User Eingaben gültig. Falls nicht, wird die entsprechende Fehlermeldung aus dem messages-Array in die msg-Variable übergeben
    
    $eingabenOk = false; //Variable wird true, wenn alle Eingaben gültig sind

    if(empty($vorname) or empty($nachname) or empty($email) or empty($passwort))
    {
        //'Bitte füllen Sie alle Felder aus!' ;
        $msg = $messages[2];
    }  
   
    //Check Email
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    {
        //'Bitte geben Sie eine gültige Emailadresse ein';
        $msg = $messages[1];
    }

    elseif($passwort != $passwortConf)
    {
        //'Passwortbestätigung unkorrekt!'; 
        $msg = $messages[0];
    }
    elseif(!$emailOk = CheckMail($rows, $email)){
        //Funktionsaufruf und Übergabe in die Variable emailOk
        //'Emailadresse bereits registriert!',
        $msg = $messages[3];
    }
    else
    {
        $eingabenOk = true;
    }     
        