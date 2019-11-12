<?php

//User Klasse
class User
{
    
    private $vorname;
    private $nachname;
    private $email;
    private $geburtsdatum;
    private $passwort;
     
    public function __construct($vorname, $nachname, $email, $geburtsdatum, $passwort )
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;      
        $this->email = $email;
        $this->geburtsdatum = $geburtsdatum;
        $this->passwort = $passwort;
        
        $this->saveUser();
    }    
   
    /*saveUser() - erstellt neues Database Objekt und übergibt die eingegebene Emailaddresse. in der Database Klasse wird checkMail() aufgerufen.
    Es wird geprüft, ob die Email bereits in der Datenbank vorhanden ist. Falls nicht, wird registerUser() in der Datenbank aufgerufen und die eingegebenen User Daten übergeben.
    Ein neuer User wird in der Datenbank angelegt.*/
    public function saveUser()
    {
        $db = new Database($this->email);
              
        if($db->checkMail() !== 0)
        {
            
            //exit("check Mail = 1");
            return false;
        }
        else
        {
            $db->registerUser($this->vorname, $this->nachname, $this->email, $this->geburtsdatum, $this->passwort);
            return true;
        } 
    }
}
 
        
        


    
    
    
    
    
    
    
    
    
    


    

