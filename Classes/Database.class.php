<?php

//Database Klasse

class Database
{
    private $host ;
    private $user ;
    private $pass ;
    private $dbname ;
    private $dsn ;
    private $email ;

    private $pdo ;


    public function __construct($email)
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'streaming';
        $this->dsn = 'mysql:host=' .$this->host . ';dbname=' . $this->dbname; 
        $this->email = $email;

        $this->connect();
    }

    //Verbindung mit der SQL Datenbank
    
    public function connect()
    {
        
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass);
        $this->pdo->setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
    }
        
     
    //checkMail() - gibt Anzahl rows zurück, bei der die Emailaddresse mit der im HTML Formular eingegebenen Emailaddresse übereinstimmt
    public function checkMail()
    { 
        $sql = "SELECT * FROM t_user WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->email]);
        $anzahl = $stmt->rowCount();
        //exit ("anzahl = $anzahl email = $this->email");
        return $anzahl;
    }
        
        
    //registerUser() - fügt Userdaten in die Datenbank ein
    
    public function registerUser($vn, $nn, $email, $gb, $pw)
    { 
        $sql = "INSERT INTO t_user (v_name, name, email, geb_dat, pw) VALUES (:v_name, :name, :email, :geb_dat, :pw)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['v_name'=>$vn, 'name'=>$nn, 'email'=>$email, 'geb_dat'=>$gb, 'pw'=>$pw]);
        return true;
    }
    
}


        


     
     
    
             




  
     
    
       


    

         









