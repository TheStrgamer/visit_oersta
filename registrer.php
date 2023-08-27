<?php 
    require_once('tilkobling.php');

    if(isset($_POST["submit"])){
        $sql = sprintf("INSERT INTO person(fornavn, etternavn, telefonnummer, passord, bosted) VALUES('%s', '%s', '%s', '%s', '%s')",
                        $tilkobling->real_escape_string($_POST["fornavn"]),
                        $tilkobling->real_escape_string($_POST["etternavn"]),
                        $tilkobling->real_escape_string($_POST["telefonnummer"]),
                        $tilkobling->real_escape_string($_POST["passord"]),
                        $tilkobling->real_escape_string($_POST["bosted"])
                        );
        $tilkobling->query($sql);
        echo "<script>location='suksess.php'</script>";
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
            include 'css/leggtil.css'; ?>

            #up { margin-top:0px; transition:200ms;}
            #up:hover {margin-top:-10px }
            #down { margin-top:0px; transition:200ms;}
            #down:hover {margin-top:10px }

        </style>
    </head>
    <body>
        <div id=banner>
            <div class="toppboks" id="logoboks"><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
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
                    <label  for="fornavn">Fornavn:</label>
                    <input type="text" name="fornavn" id="fornavn">
                    <br/><br/>
                    <label  for="etternavn">Etternavn:</label>
                    <input type="text" name="etternavn" id="etternavn">
                    <br/><br/>
                    <label  for="telefonnummer">Telefonnummer:</label>
                    <input type="text" name="telefonnummer" id="telefonnummer">
                    <br/> <br/>
                    <label type="password" for="passord">Passord:</label>
                    <input name="passord">
                    <br><br>
                    <label  for="bosted">Bosted:</label>
                    <input type="text" name="bosted" id="bosted">
                    <br/><br/>
                    
                    <button id="submit" name="submit" type="submit" style="position:relative; left:10px; bottom:0px;">Registrer</button>
                   
                    <br>
                </form>
            
        </div>

        <br>


    </body>
</html>