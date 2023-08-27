<?php
require_once('tilkobling.php');
//$bilde =  array("fjell2_small.jpg", "friluftsliv_small.jpg", "utsikt_small.jpg", "ake_small.jpg",  "by_small.jpg",  "mangefjell_small.jpg", "elv_small.jpg", "hav_small.jpg",  "by2_small.jpg", "snøfjell_small.jpg",);

$sql = "SELECT * FROM person, attraksjon WHERE attraksjon.telefonnummer = person.telefonnummer";
$datasett = $tilkobling->query($sql);
if (!$datasett) {
    echo "Error: %s\n", mysqli_error($tilkobling);
    exit();
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
            #aktivitetboks {
                height:300px; 
                width:300px; 
                overflow:hidden; 
                margin-left:auto; 
                margin-right:auto; 
                flex: 0 0 31%; 
                margin-top:30px; 
                margin-left:5px;
            }
        </style>
    </head>
    <body>
        <div id=banner>
            <div class="toppboks" id="logoboks" ><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
            <a href="fjell.php"><div class="toppboks"><h1 >Fjell</h1></div></a>
            <a href="overnatting.php"><div class="toppboks"><h1>Overnatting</h1></div></a>
            <a href="mat.php"><div class="toppboks"><h1>Mat</h1></div></a>
            <a href="aktiviteter.php"><div class="toppboks"><h1 id="currentPage">Aktiviteter</h1></div></a>
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
            <h2 style="text-align: center;">Populære aktiviteter i Ørsta</h2>
                
                <div id="aktiviteterboks" >

                        <?php while($rad = mysqli_fetch_array($datasett) ) { ?>
                        
                        <div id="aktivitetboks">
                            <a href="aktivitet.php?aktivitetID=<?php echo $rad['id']; ?>"> 
                            
                                <img src="<?php echo $rad['bilde'] ?>" alt="aktivitet">
                                
                                <div id="bildetekst">
                                    <h3> <?php echo $rad['tittel'] ?></h3>
                                    <br><br>
                                    <p><?php echo $rad['info'] ?> </p>
                                </div>
                        
                        
                        
                        </a>
                        </div>
                        
                        
                    <?php } ?>
                </div>
                <br><br>
            
            <br><br>
            <div id="leggtil">
                <h3>Har du en aktivitet du vil legge til?</h3>
                <p>legg det til her</p>
                <br>
                <a href="leggtilaktivitet.php"><button>Ny Aktivitet</button></a>
            </div>
            <br><br>
        </div>
        

    </body>
</html>
