<?php  

//hier werden die beiden benötigten Klassen inkludiert
include 'Classes/Database.class.php';
include 'Classes/User.class.php' ;


try{
    //Übergabe der Formualar Eingaben in Variablen
    if(isset($_POST["submit"]))
    {
        $vorname = $_POST["vorname"];
        $nachname =$_POST["nachname"];
        $email = $_POST["email"];
        $geburtsdatum = $_POST["geburtsdatum"];
        $passwort = $_POST["passwort"];
        $passwortConf = $_POST["passwortConf"];    


        //Überprüfung, ob User Eingaben gültig. Falls nicht, wird per header mit einer error Bezeichnung in der query String auf die signUp-form Seite zurück gesendet

        if(empty($vorname) or empty($nachname) or empty($email) or empty($passwort))
        {
            header("Location: signUp_form.php?error=emptyfields");
        }  

        //Check Email
        elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        {
           header("Location: signUp_form.php?error=invalidemail"); 
        }

        elseif($passwort != $passwortConf)
        {
           header("Location: signUp_form.php?error=passwordconf");    
        }
        
        //Falls alle Angaben korrekt, wird ein User Objekt angelegt. Falls die saveUser funktion False zurückgibt, wird ein error an signUp_form in der querystring geschickt
        //Falls saveUser true, wird wird ein success an signUp_form in der querystring geschickt
        else
        {
            $usr = new User($vorname, $nachname, $email, $geburtsdatum, $passwort);
            if(!$usr->saveUser())
            {
                header("Location: signUp_form.php?error=emailtaken");    
            }
            else
            {
                header("Location: signUp_form.php?signup=success");    
            }  

        }
    }   
    
}    

//falls der Datenbankzugriff, bzw die sql queries in der Database Klasse fehlerhaft sind, wird hier die PDO Exception "gefangen"  
catch (PDOException $e) 
{
    $errNo = $e->getCode();
    $errMsg = $e->getMessage();
    $errArray = $e->errorInfo;
    header("Location: signUp_form.php?error=connection");   
}  
     