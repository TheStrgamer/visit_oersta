<?php
require_once('tilkobling.php');

$sql = "SELECT * FROM person, attraksjon, kommentar WHERE (person.telefonnummer = kommentar.telefonnummer) AND (attraksjon.id = kommentar.aktid)";
$kommentar = $tilkobling->query($sql);

if(isset($_GET["slettID"])) {
    $sql = sprintf("DELETE FROM attraksjon WHERE id=%s",
         $tilkobling->real_escape_string($_GET["slettID"])
         ); 
     $tilkobling->query($sql);
     echo "<script>location='aktiviteter.php'</script>";   
}
if(isset($_GET["slettKomID"])) {
    $sql = sprintf("DELETE FROM kommentar WHERE id=%s",
         $tilkobling->real_escape_string($_GET["slettKomID"])
         ); 
     $tilkobling->query($sql);
     echo "<script>location='aktiviteter.php?'</script>";   
}

$id = sprintf(($_GET["aktivitetID"])
);
if (isset($id)) {
    //ape
}
else {
    $id = 0;
}

$sql = "SELECT * FROM person, attraksjon WHERE attraksjon.telefonnummer = person.telefonnummer";
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
            p{
                font-size:20px;
            }
            #rediger, #slett {
                border:none;
                width:100px;
                height:40px;
                border-radius:10px;
                color:white;
                font-size:25px;
                text-align:center;
                
            }
            #slett{
                background-color:#a96767;
                box-shadow: -5px 5px 20px #894747;
            }
            #rediger {
                background-color:#6767a9;
                box-shadow: -5px 5px 20px #474789;
            }

        </style>
    </head>
    <body>
        <div id=banner>
            <div class="toppboks" id="logoboks" ><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
            <a href="fjell.php"><div class="toppboks"><h1>Fjell</h1></div></a>
            <a href="overnatting.php"><div class="toppboks"><h1>Overnatting</h1></div></a>
            <a href="mat.php"><div class="toppboks"><h1>Mat</h1></div></a>
            <a href="aktiviteter.php"><div class="toppboks"><h1  id="currentPage">Aktiviteter</h1></div></a>
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
            <br>
            <?php while($rad = mysqli_fetch_array($datasett) ) { if($rad['id'] == $id) { ?>
            <div id="aktivitetside">
                <div>
                    <img style="box-shadow: -2px 2px 15px #355535; width:97%" src="<?php echo $rad['bilde'] ?>" alt="bilde">
                </div>
                <div style="width:50%">
                    <h1 style="text-align:center; text-shadow: -2px 2px 15px #355535; font-size:40px; color:#44aa44"><?php echo $rad['tittel'] ?></h1>
                    <br><br>
                    <h2>Informasjon:</h2>
                    <br>
                    <div style="width:100%; height:60%; overflow-y:auto; box-shadow: -2px 2px 10px #355535;">
                    <p style="font-size:20px"><?php echo $rad['info'] ?></p>
                    </div>
                    <span style="position:absolute; top:500px;"><p><strong>Lagt inn av </strong> <?php echo $rad['fornavn'] ?> <?php echo $rad['etternavn'] ?> fra <?php echo $rad['bosted'] ?></p></span>
                
                </div>
                <?php if( $_SESSION['loggetinn'] ==true && ($rad['telefonnummer'] == $_SESSION['telefonnummer'] || $_SESSION['telefonnummer'] == 94039995)) { ?>
                    <form method="POST" style="position:absolute; top:70px; right:50px;">
                        <div style="display:flex; justify-content: space-between; width: 215px">
                            <div id="rediger" ><a id="rediger" href="oppdaterAktivitet.php?oppdaterID=<?php echo $rad["id"]; ?>" >Rediger</a></div>
                            <div id="slett" ><a id="slett"  href="?slettID=<?php echo $rad["id"]; ?>" >Slett</a></div>
                        </div>
                    </form>
                    <?php } ?>
                </div><br><br>
                <h3>Kommentarer:</h3><br>
            <?php }}  while($rad = mysqli_fetch_array($kommentar)) { if($rad['aktid'] == $id) { ?>
                <br><br>
                
                    <div id="kommentar">
                        <br>
                        <h3>
                            <strong> <em><?php echo $rad["tittel"]; ?> </em></strong>
                        </h3>
                        <?php if( $_SESSION['loggetinn'] ==true && ($rad['telefonnummer'] == $_SESSION['telefonnummer'] || $_SESSION['telefonnummer'] == 94039995)) { ?>
                        <a style="color:blue; margin-left:80%" href="oppdaterkommentar.php?oppdaterID=<?php echo $rad["id"]; ?>">Rediger</a>
                        <a style="color:red; margin-left:80%" href="?slettKomID=<?php echo $rad["id"]; ?>" >Slett</a>
                        <br>
                        <?php } ?>
                        <p style="font-size:17px;">
                            <em> "<?php echo $rad["tekst"]; ?>"</em>
                            <br/><br>
                            <strong>Lagt inn av: <?php echo $rad["fornavn"];?> <?php echo $rad["etternavn"]; ?> fra <?php echo $rad["bosted"]; ?></strong>
                            <br/>
                            <em> "<?php echo $rad["dato"]; ?>"</em> 
                            
                            <br><br>
                        </p>
                    </div>
                    <br><br>
                <?php }} ?>
                <a href="leggtilkommentar.php?AktivitetID=<?php echo $id; ?>" id="knapp" style="margin-left:90px; border-radius:10px; box-shadow:-2px 2px 10px black;">Legg til kommentar</a>
                <br><br>
        </div>


    </body>
</html>
