<?php 
    require_once('tilkobling.php');
    $sql = "SELECT * FROM person, reisetips WHERE person.telefonnummer = reisetips.telefonnummer";
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
            <?php include 'css/stil.css'; ?>

            #up { margin-top:0px; transition:200ms;}
            #up:hover {margin-top:-10px }
            #down { margin-top:0px; transition:200ms;}
            #down:hover {margin-top:10px }

        </style>
    </head>
    <body>
        <div id=banner>
            <div class="toppboks" id="logoboks"><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
            <a href="fjell.php"><div class="toppboks"><h1 id="currentPage">Fjell</h1></div></a>
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
            <h1 style="text-align:center; font-size:40px; color:#444444;">Fjell</h1>
            <br><br>
            <h2>Ørsta har mange flotte og høye fjell</h2>
            <h2>her er noen av de høyeste fjellene i Ørsta</h2>
            <br><br>
            <div style="height:450px; width:100%; display:flex; justify-content:space-around;">
                <div style="width:25%; height:500px; border-radius:20px; box-shadow:4px 4px 10px black;">
                    <h3 style="text-align:center; font-size:30px">Smørskredtinden</h3>
                    <img style="height:375px; width:100%;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Sm%C3%B8rskredtind2.jpg/220px-Sm%C3%B8rskredtind2.jpg">
                    <p style="font-size:20px;">Med en høyde på 1631 meter over havet er Smørskredtinden det høyeste fjellet i Ørsta</p>
                </div>
                <div style="width:25%; height:500px; border-radius:20px; box-shadow:4px 4px 10px black;">
                    <h3 style="text-align:center; font-size:30px">Jakta</h3>
                    <img style="height:375px; width:100%;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/JaktaFromSlogen.jpg/220px-JaktaFromSlogen.jpg">
                    <p style="font-size:20px;">Med en høyde på 1588 meter over havet er Jakta det nest høyeste fjellet i Ørsta</p>
                </div>
                <div style="width:25%; height:500px; border-radius:20px; box-shadow:4px 4px 10px black;">
                    <h3 style="text-align:center; font-size:30px">Slogen</h3>
                    <img style="height:375px; width:100%;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Slogen_fr%C3%A5_fjorden.jpg/220px-Slogen_fr%C3%A5_fjorden.jpg">
                    <p style="font-size:20px;">Med en høyde på 1548 meter over havet er Slogen ett av de høyeste fjellene i Ørsta</p>
                </div>
            </div>           
               
            <br><br><br><br><br>
        </div>

        <br>


    </body>
</html>