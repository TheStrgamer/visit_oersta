<?php 
    require_once('tilkobling.php');
    $sql = "SELECT * FROM person, reisetips WHERE person.telefonnummer = reisetips.telefonnummer ORDER BY id DESC";
    $datasett = $tilkobling->query($sql);

    if(isset($_GET["slettID"])) {
        $sql = sprintf("DELETE FROM reisetips WHERE id=%s",
             $tilkobling->real_escape_string($_GET["slettID"])
             ); 
         $tilkobling->query($sql);
         echo "<script>location='index.php'</script>";   
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
            <?php include 'css/stil.css'; ?>
            #topp{
                position:relative; 
                color:white; 
                bottom:320px; 
                text-align:center; 
                font-size:35px;
                text-shadow: 2px 2px 5px blue;
            }
            #fadeBoks {
                width:300px;
                height:300px;
                background-color: #22222244;
                box-shadow: -3px 3px 10px black;
                border-radius: 20px;
                color: #569a56;
            }
            #AktivitetFade1, #AktivitetFade2, #AktivitetFade3, #AktivitetFade4, #OvernattingFade1, #OvernattingFade2, #OvernattingFade3, #OvernattingFade4, #ResturangFade1, #ResturangFade2, #ResturangFade3, #ResturangFade4 {
                position:absolute;
                width:250px; 
                height:250px;
                margin-left:25px;
                transition: 2000ms;
            }

        </style>
       
    </head>
    <body>
        <div id=banner>
            <div class="toppboks" id="logoboks" style="background-color:#ee222255;"><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
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
            
            
            <div id="forsidebilder">
                <img id="bakgrunnsbilde" src="bilder/banner2_small.jpg">
                <h1 id="topp" >Velkommen til Ørsta</h1>
            </div>
            
            <br><br>
            <div style="width:50%; margin-left:60px">
                <h1>Velkommen til Ørsta, Turgåerens paradis</h1><br>
                <p>Liker du å gå i fjellene, eller synes du det er nok å se på dem? da burde du besøke Ørsta. Her er det mange flotte fjell du kan beundre. Du kan også føle den vidunderlige følelsen av å komme til toppen. Føler du deg ikke trygg med de høyere fjellene, kan du ta noen mildere, og vil du prøve høye og bratte fjell, kan vi anbefale å ha med noen med erfaring.</p>
            </div>
            <br><br>
            <h2 style="text-align:center;">Finn populære resturanger, hoteller og aktiviteter i Ørsta</h2><br>
            <div style="display:flex; height:350px; width: 85%; margin-left:50px; justify-content:space-between;">
                <a href="overnatting.php"><div id="fadeBoks">
                    <h2 style="text-align:center;">Overnatting</h2>
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/16/62/a2/85/hotel-brosundet.jpg" alt="Overnatting" id="OvernattingFade1">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/12/e5/f7/93/volda-turisthotell.jpg" alt="Overnatting" id="OvernattingFade2">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/13/5f/ea/0a/hotel-exterior.jpg" alt="Overnatting" id="OvernattingFade3">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/35/b3/07/sunde-fjord-hotel.jpg" alt="Overnatting" id="OvernattingFade4">
                </div></a>

                <a  href="mat.php"><div id="fadeBoks">
                    <h2 style="text-align:center;">Resturanger</h2>
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/2e/f2/84/great-coffee.jpg" alt="Resturang" id="ResturangFade1">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/1f/4a/25/hotel-union-oye-restaurant.jpg" alt="Resturang" id="ResturangFade2">
                    <img src="bilder/burger_small.jpg" alt="Resturang" id="ResturangFade3">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-p/0c/f6/64/ab/photo0jpg.jpg" alt="Resturang" id="ResturangFade4">
                </div></a>

                <a href="aktiviteter.php"><div id="fadeBoks">
                    <h2 style="text-align:center;">Aktiviteter</h2>
                    <img src="bilder/lunsjpause_small.jpg" alt="aktivitet" id="AktivitetFade1">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/5b/44/96/caption.jpg?w=800&h=600&s=1" alt="aktivitet" id="AktivitetFade2">
                    <img src="bilder/by_small.jpg" alt="aktivitet" id="AktivitetFade3">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/79/de/76/mount-saksa.jpg?w=1400&h=-1&s=1" alt="aktivitet" id="AktivitetFade4">
                </div></a>
            </div>

            <script>
                <?php require_once('script/fade.js'); ?>
            </script>
            <br><br>

                <h2  style="margin-left:30px">Hva andre synes om Ørsta:</h2><br>
                <a href="#knapp" style="margin-left:30px; font-size:20px; color:green;">Legg til reisetips</a><br><br>
                <?php while($rad = mysqli_fetch_array($datasett)) { ?>
                    <div id="reisetips">
                        <br>
                        <h3>
                            <strong> <em><?php echo $rad["tittel"]; ?> </em></strong>
                        </h3>
                        <?php if( $_SESSION['loggetinn'] ==true && ($rad['telefonnummer'] == $_SESSION['telefonnummer'] || $_SESSION['telefonnummer'] == 94039995)) { ?>
                        <a style="color:blue; margin-left:80%" href="oppdatertips.php?oppdaterID=<?php echo $rad["id"]; ?>">Rediger</a>
                        <a style="color:red; margin-left:20px" href="?slettID=<?php echo $rad["id"]; ?>" >Slett</a>
                        <br>
                        <?php } ?>
                        <p>
                            <em> "<?php echo $rad["tekst"]; ?>"</em>
                            <br/><br>
                            <strong>Lagt inn av:<em> <?php echo $rad["fornavn"];?> <?php echo $rad["etternavn"]; ?></strong></em>
                            <br/>
                            <em> "<?php echo $rad["dato"]; ?>"</em> 
                            
                            <br><br>
                        </p>
                    </div>
                    <br><br>
                <?php } ?>
                <div id="reisetips">
                        <br>
                        <h3>
                            <strong> <em> Legg til Reisetips </em></strong>
                        </h3>
                        <br>
                        <p style="text-align:center;"><a name="knapp" href="leggtiltips.php" id="knapp">Legg til</a></p>
                        <br>
                    </div>
                    <br><a href="#topp" style="margin-left:30px; font-size:20px; color:green;">Tilbake til toppen</a>
                    <br><br><br>
               
            
        </div>
        <br>
        <script>
            <?php require_once('script/banner.js'); ?>
        </script>

    </body>
</html>