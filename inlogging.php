<?php
    require_once('tilkobling.php'); 


    $error ="";
    
    if(isset($_POST["loggin"])) {
        
        $sql2 = sprintf("SELECT * FROM person WHERE (telefonnummer LIKE '%%%s%%')",
        $tilkobling->real_escape_string($_POST["telefonnummer"]));

        $person = $tilkobling->query($sql2);
        $_SESSION['telefonnummer'] = $_POST['telefonnummer'];
        
        $error ="";
        while($rad = mysqli_fetch_array($person)) {
                   
            if ($_POST['passord'] == $rad['passord']  ) {
                $_SESSION['telefonnummer']=$rad['telefonnummer'];
                $_SESSION['loggetinn'] = true; 
                $error ="";
                echo "<script>location='index.php'</script>";
                
            }
            else {
                $error ="Feil telefonnummer/passord";
            }
        }
        
    }
    
        
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VisitØrsta</title>
        <style>
            <?php include 'css/stil.css';
            include 'css/leggtil.css'; 
            if ($innlogget==true) { ?>
            input, textarea {
                width:90%; 
                height:40px; 
                margin-left:10px; 
                border:none;
                background-color:#ffffff00;
                
            }
            ::placeholder {
                color:black;
            }
            input::placeholder {
                color:white;
            }
            #reisetips {
                margin-left:auto;
                margin-right:auto;
            }
            <?php } ?>
        </style>
    </head>
    <body>
        <div id=banner>
            <div class="toppboks" id="logoboks" ><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
            <a href="fjell.php"><div class="toppboks"><h1>Fjell</h1></div></a>
            <a href="overnatting.php"><div class="toppboks"><h1>Overnatting</h1></div></a>
            <a href="mat.php"><div class="toppboks"><h1>Mat</h1></div></a>
            <a href="aktiviteter.php"><div class="toppboks"><h1>Aktiviteter</h1></div></a>
            <a href="reisemuligheter.php"><div class="toppboks"><h1>Reisemuligheter</h1></div></a>
            <a href="mer.php"><div class="toppboks"><h1>Mer</h1></div></a>
            <?php if($_SESSION['loggetinn'] == true) { ?>
                <form method="post" id="logout">
                    <a href="?loggut=true"><div class="toppboks"><h3>Logg ut</h3></div></a>
                </form>
            <?php }else{ ?>
                <a href="inlogging.php"><div class="toppboks"><h3>Logg inn</h3></div></a>
                <?php } ?>
        </div>
        <div id="innholdsboks"> 
            
            <br><br>
            <div id="login">
                <form method="POST">
                    <br>
                    <label  for="telefonnummer">Telefonnummer:</label>
                    <input type="text" name="telefonnummer" id="telefonnummer">
                    <br/> <br/>
                    <label type="password" for="passord">Passord:</label>
                    <input name="passord">
                    <br><br>
                    
                    <button id="submit" name="loggin" type="loggin" style="position:relative; left:10px; bottom:0px;">Logg inn</button>
                    <p><?php echo $error ?></p>
                    <br>
                </form>
            </div>
            <br>
            <p style="font-size:20px">har du ikke bruker?</p>
            <a href="registrer.php"><button id="submit" style="position:relative; left:10px; bottom:0px; width: 130px; height: 40px;">Registrer deg</button></a><
            
            <?php
                if($_SESSION['loggetinn']==true){
            ?>
                <script>location='index.php'</script>
            <?php } ?>
            
        </div>


    </body>
</html>
