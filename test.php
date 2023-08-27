<?php
    require_once('tilkobling.php'); 
    
    $sql = "SELECT * FROM person, reisetips, attraksjon WHERE (attraksjon.telefonnummer = person.telefonnummer) AND (reisetips.id = attraksjon.id)";
    $datasett = $tilkobling->query($sql);
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
                <?php  while($rad = mysqli_fetch_array($datasett) ) { ?>
                    <p><?php echo $rad['fornavn']; ?></p>
                    <p><?php echo $rad['tittel']; ?></p>
                    <p><?php echo $rad['tekst']; ?></p>
                    <br>
                    <?php } ?>
        </div>  
    </body>
</html>
