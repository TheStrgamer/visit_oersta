<?php require_once('tilkobling.php'); 

$hotellnavn = ["Hotel Brosundet", "Volda Turisthotell", "Quality Hotel Ulstein", "Sunde Fjord Hotel"];
$hotellpriser = ["1 870", "1 735", "1 690", "1 280"];
$hotellbilder = ["https://media-cdn.tripadvisor.com/media/photo-s/16/62/a2/85/hotel-brosundet.jpg", "https://media-cdn.tripadvisor.com/media/photo-s/12/e5/f7/93/volda-turisthotell.jpg", "https://media-cdn.tripadvisor.com/media/photo-s/13/5f/ea/0a/hotel-exterior.jpg", "https://media-cdn.tripadvisor.com/media/photo-s/08/35/b3/07/sunde-fjord-hotel.jpg"];

$hyttenavn = ["Troll Fjordhytter", "Fjell Hytter"];
$hyttepriser = ["2 024", "1 930"];
$hyttebilder = ["https://media-cdn.tripadvisor.com/media/photo-s/1c/ee/43/e0/troll-fjordhytter.jpg", "bilder/hytte.jpg"];

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
            include 'css/matoghus.css'; ?>
        </style>
    </head>
    <body>
         <div id=banner>
            <div class="toppboks" id="logoboks" ><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
            <a href="fjell.php"><div class="toppboks"><h1>Fjell</h1></div></a>
            <a href="overnatting.php"><div class="toppboks"><h1 id="currentPage">Overnatting</h1></div></a>
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
            <h1 style="margin-left:20px;">Hvis du vil besøke Ørsta trenger du sikkert ett sted å sove.</h1>
            <h3 style="margin-left:20px; font-size:25px">Her har du noen av de mest populære hotellene/hyttene i Ørsta</h3>
            <br>

            <h2 style="text-align: center;">Hoteller</h2>
            <div id="datainnholdsboks" style="height:700px" >
                <?php for($i=0; $i<=1; $i++) { ?>
                    <br><br>
                    <div style="width:95%; display:flex; justify-content:space-around;">
                    <?php for($a=0; $a<=1; $a++) { ?>
                        
                            <div id="databoks" style="width:110%; background-color:#44547722; margin-left:25px ">
                                <div style="width:55%"> 
                                    <img src="<?php echo $hotellbilder[$a+$i*2]; ?>" alt="test" style="border-radius:20px;"> 
                                </div>
                                <div style="width:5%"></div>
                                <div style="width:40%; overflow-y: auto;">

                                    <div style="display:flex; flex-direction: column; height:60%; justify-content:space-around;">
                                    <h2><?php echo $hotellnavn[$a+$i*2]; ?></h2>  
                                    <p>-Pris: <?php echo $hotellpriser[$a+$i*2]; ?>,-</p>
                                
                                    <p>-Gratis Wifi</p>
                                    
                                    <p>-Resturang</p>
                                    </div>
                                </div>

                            </div>
                        
                    <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <br><br><br>

            <h2 style="text-align: center;">Hytter til leie</h2>
            <div id="datainnholdsboks" >
                <?php for($i=0; $i<=0; $i++) { ?>
                    <br><br>
                    <div style="width:95%; display:flex; justify-content:space-around;">
                    <?php for($a=0; $a<=1; $a++) { ?>
                       
                            <div id="databoks" style="width:110%; background-color:#44775422; margin-left:25px">
                                <div style="width:55%"> 
                                    <img src="<?php echo $hyttebilder[$a+$i*2]; ?>" alt="test" style="border-radius:20px;"> 
                                </div>
                                <div style="width:5%"></div>
                                <div style="width:40%; overflow-y: auto;">

                                    <div style="display:flex; flex-direction: column; height:60%; justify-content:space-around;">
                                    <h2><?php echo $hyttenavn[$a+$i*2]; ?></h2>  
                                    <p>-Pris: <?php echo $hyttepriser[$a+$i*2]; ?>,-</p>
                                
                                    <p>-Gratis Wifi</p>
                                    
                                    <p>-<?php echo 4+$a ?> Soverom</p>
                                    </div>
                                </div>

                            </div>
                        
                    <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <br><br><br>

        </div>
        <br><br>




    </body>
</html>