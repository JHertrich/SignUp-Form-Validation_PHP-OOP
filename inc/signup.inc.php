<?php  

include '../Classes/User.class.php' ;




if(isset($_POST["submit"]))
{
    $vorname = $_POST["vorname"];
    $nachname =$_POST["nachname"];
    $email = $_POST["email"];
    $geburtsdatum = $_POST["geburtsdatum"];
    $passwort = $_POST["passwort"];
    $passwortConf = $_POST["passwortConf"];    
    
    
    //Überprüfung, ob User Eingaben gültig. Falls nicht, wird die entsprechende Fehlermeldung aus dem messages-Array in die msg-Variable übergeben
    
    
    if(empty($vorname) or empty($nachname) or empty($email) or empty($passwort))
    {
        header("Location: ../SignUp.php?error=emptyfields");
    }  
       
    //Check Email
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    {
       header("Location: ../SignUp.php?error=invalidemail"); 
    }

    elseif($passwort != $passwortConf)
    {
       header("Location: ../SignUp.php?error=passwordconf");    
    }
        
    else
    {
        $usr = new User($vorname, $nachname, $email, $geburtsdatum, $passwort);
        if(!$usr->saveUser())
        {
            header("Location: ../SignUp.php?error=emailtaken");    
        }
        else
        {
            header("Location: ../SignUp.php?signup=success");    
        }  

    }
}   
    
    
    
