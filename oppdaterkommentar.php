<?php require_once('tilkobling.php');

$sql = sprintf("SELECT * FROM kommentar WHERE id = %s",
$tilkobling->real_escape_string($_GET["oppdaterID"])
);
$datasett = $tilkobling->query($sql);

    if (isset($_POST["submit"])) {
        $sql = sprintf("UPDATE  kommentar SET  tittel='%s', tekst = '%s' WHERE id = %s", 
            $tilkobling->real_escape_string($_POST["txtTittel"]),
            $tilkobling->real_escape_string($_POST["txtTekst"]),
            $tilkobling->real_escape_string($_GET["oppdaterID"])
            );
        $tilkobling->query($sql);
        echo "<script>location='index.php'</script>";


    }
    $telef = $_SESSION['telefonnummer'];
    $person = "SELECT * FROM person";
    $personinfo = $tilkobling->query($person);

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
            #tittel {
                color:white;
                font-size:25px; 
                margin-left:10px; 
                margin-bottom:2px; 
                background-color:#ffffff00;
            }
        </style>
    </head>
    <body>
        <div id=banner>
            <div class="toppboks" id="logoboks" ><a href="index.php"><img src="bilder/logo.png" id="logo" /></a></div>
            <a href="fjell.php"><div class="toppboks"><h1>Fjell</h1></div></a>
            <a href="overnatting.php"><div class="toppboks"><h1>Overnatting</h1></div></a>
            <a href="mat.php"><div class="toppboks"><h1>Mat</h1></div></a>
            <a href="aktiviteter.php"><div class="toppboks"><h1>Aktiviteter</h1></div></a>
            <a href="reisemuligheter.php"><div class="toppboks"><h1 >Reisemuligheter</h1></div></a>
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
            <?php
                if($_SESSION['loggetinn']==false){
            ?>
                <script>location='inlogging.php'</script>
            <?php } ?>
            <h1>Oppdater Reisetips</h1>
            <br/>
            <div id="reisetips">
            <?php if($rad = mysqli_fetch_array($datasett)) { ?>
                <form method="POST">
                    <br>
                    <p style="background-color:#478031b9;"><input placeholder="Tittel" type="text" name="txtTittel" id="tittel" value = "<?php echo $rad["tittel"]; ?>"></p>
                    <br>
                    <textarea placeholder="Tekst" name="txtTekst" style="width:90%; height:60px; background-color:#ffffff66"><?php echo $rad["tekst"]; ?></textarea>
                    <br/><br>
                    <?php while($rad2 = mysqli_fetch_array($personinfo)) {
                        if($rad2["telefonnummer"] == $rad["telefonnummer"]){
                    ?>
                    
                    <p><strong>Lagt inn av: <?php echo $rad2['fornavn'] ?> <?php echo $rad2["etternavn"]; ?> </strong></p>  
                    <?php }} ?>
                    <button id="submit" name="submit" type="submit" style="position:relative; margin-left:75%; bottom:15px">Oppdater</button>
                   
                </form>
                <?php } ?>
            </div>
        </div>
    </body>
</html>