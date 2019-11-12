<?php   

if(isset($_POST["submit"]))
        {
            $vorname = $_POST["vorname"];
            $nachname =$_POST["nachname"];
            $email = $_POST["email"]);
            $geburtsdatum = $_POST["geburtsdatum"];
            $passwort = $_POST["passwort"];
            $passwortConf = $_POST["passwortConf"];     







?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    </head>
    
    <body>
        
        <div class="container.fluid">
       
        <!-- NAVIGATION -->
        
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#">Streaming Dienst</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="navbar nav ml-auto" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Registrieren <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Anmelden</a>
                  </li>
                </ul>
              </div>
            </nav>
                  
            <!--ANMELDUNG-->
            <form method="post" action="Anmeldeformular.php">
              <fieldset>
                  <div class="legende">
                    <legend>Registrierung</legend>
                  </div>
                  <div class="anmeldung">
                     <div class="form-group">
                      <label for="vorname">Vorname</label>
                      <input class="form-control" id="vorname" placeholder="Enter Vorname" type="text" name="vorname">                
                    </div>
                    <div class="form-group">
                      <label for="nachname">Nachname</label>
                      <input class="form-control" id="nachname" placeholder="Enter Nachname" type="text" name="nachname">                
                    </div>
                    <div class="form-group">
                      <label for=email">Email Addresse </label>
                      <input class="form-control" id="email" placeholder="Enter email" type="text" name="email">                
                    </div>
                    <div class="form-group">
                      <label for=geburtsdatum">Geburtsdatum (yyyy-mm-dd)</label>
                      <input class="form-control" id="geburtsdatum" placeholder="Enter Geburtsdatum" type="text" name="geburtsdatum">                
                    </div>
                    <div class="form-group">
                      <label for="passwort">Passwort</label>
                      <input class="form-control" id="passwort" placeholder=" Enter Passwort" type="password" name="passwort">
                    </div>
                    <div class="form-group">
                      <label for="passwortConf">Passwort wiederholen</label>
                      <input class="form-control" id="passwortConf" placeholder=" Confirm Passwort" type="password" name="passwortConf">
                   </div>
                </div>
                </fieldset>
                <button type="submit" class="btn btn-primary" name="submit">Registrieren</button>
                
                <!-- ALERT - enstprechende Fehlermeldung wird angezeigt--> 
                <?php 
                    if($msg!=''){
                    echo'<div class="alert alert-danger">' . '<h4>' . $msg . '</h4>' . '</div>' ;                        
                    } 
                ?> 
           
            </form>  
            
        </div>
    </body>
</html>

    </body>
</html>
