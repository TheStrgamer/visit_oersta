<?php require_once('tilkobling.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VisitØrsta</title>
        <style>
            <?php include 'css/stil.css'; ?>
        </style>
    </head>
    <body>
        <div id=banner>
            <div class="toppboks" id="logoboks" ><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
            <a href="fjell.php"><div class="toppboks"><h1>Fjell</h1></div></a>
            <a href="overnatting.php"><div class="toppboks"><h1>Overnatting</h1></div></a>
            <a href="mat.php"><div class="toppboks"><h1>Mat</h1></div></a>
            <a href="aktiviteter.php"><div class="toppboks"><h1>Aktiviteter</h1></div></a>
            <a href="reisemuligheter.php"><div class="toppboks"><h1 id="currentPage">Reisemuligheter</h1></div></a>
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
            </br>
            </br>
            <h1 style="text-align:center; font-size:40px; color:#66aa66; ">Hvordan kan du komme deg til Ørsta?</h1>
            <br>
            <p style="font-size:25px; margin-left:25px; width:650px">Du kan nå Ørsta via vann, land eller lufta. </br>Det er mulig å kjøre til Ørsta, men hvis du ønsker å komme dit på en annen måte kan du bestille flybiletter eller reise med cruise.</p>
            <br>
            <p style="font-size:25px; margin-left:25px; width:650px">Ikke alle flyselskaper tilbyr turer til Ørsta, så her har du en liste over noen selskaper som gjør det:</p></br>
            <p style="font-size:28px; margin-left:25px;"><strong>Flyselskaper:</strong></p>
            <a style="font-size:25px; margin-left:30px; color:#333396; text-decoration:underline;" href="https://no.tripadvisor.com/Airline_Review-d10533102-Reviews-Wideroe">Wideroe</a></br></br>
            <a style="font-size:25px; margin-left:30px; color:#333396; text-decoration:underline;" href="https://no.tripadvisor.com/Airline_Review-d8729078-Reviews-Finnair">Finnair</a></br></br>
            <a style="font-size:25px; margin-left:30px; color:#333396; text-decoration:underline;" href="https://no.tripadvisor.com/Airline_Review-d8729104-Reviews-KLM-Royal-Dutch-Airlines">KLM Royal Dutch Airlines</a></br></br>
            <a style="font-size:25px; margin-left:30px; color:#333396; text-decoration:underline;" href="https://no.tripadvisor.com/Airline_Review-d8729003-Reviews-Air-France">Air France</a></br></br></br></br>

            <p style="font-size:25px; margin-left:25px; width:650px">Er ikke fly helt din greie, eller vil du heller reise over havet? Da kan du prøve ett av cruisene vi har listet nedenfor:</p></br>
            <p style="font-size:28px; margin-left:25px;"><strong>Cruise:</strong></p>
            <a style="font-size:25px; margin-left:30px; color:#333396; text-decoration:underline;" href="https://no.tripadvisor.com/Cruise_Review-d15691669-Reviews-Norwegian_Bliss">Norwegian Bliss</a></br></br>
            <a style="font-size:25px; margin-left:30px; color:#333396; text-decoration:underline;" href="https://no.tripadvisor.com/Cruise_Review-d15691595-Reviews-Marella_Explorer_2">Marella Explorer 2</a></br></br>
            <a style="font-size:25px; margin-left:30px; color:#333396; text-decoration:underline;" href="https://no.tripadvisor.com/Cruise_Review-d15691673-Reviews-Norwegian_Epic">Norwegian Epic</a></br></br>
            <a style="font-size:25px; margin-left:30px; color:#333396; text-decoration:underline;" href="https://no.tripadvisor.com/Cruise_Review-d15691674-Reviews-Norwegian_Escape">Norwegian Escape</a></br></br>
        
        </div>


    </body>
</html>
