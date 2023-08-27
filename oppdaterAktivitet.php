<?php 
require_once('tilkobling.php');

$error ="";
    
$telef = $_SESSION['telefonnummer'];
$person = "SELECT * FROM person WHERE telefonnummer = $telef";
$personinfo = $tilkobling->query($person);

$sql = sprintf("SELECT * FROM attraksjon WHERE id = %s",
$tilkobling->real_escape_string($_GET["oppdaterID"])
);
$datasett = $tilkobling->query($sql);


if(isset($_POST["knapp"]) || isset($_GET['submit'])) {
    

        if($_POST["leggtilbilde"] != "" && $_POST["tittel"] != "" && $_POST["informasjon"] != "" ) {
        $sql = sprintf("UPDATE attraksjon SET bilde = '%s', tittel = '%s', info = '%s' WHERE id=%s",
                        $tilkobling->real_escape_string($_POST["leggtilbilde"]),
                        $tilkobling->real_escape_string($_POST["tittel"]),
                        $tilkobling->real_escape_string($_POST["informasjon"]),
                        $tilkobling->real_escape_string($_GET["oppdaterID"])
                        );
                        echo "ape";
        $tilkobling->query($sql);
        echo "<script>location='aktiviteter.php'</script>";
    }
    else {
        $error="alle felter må fylles inn";
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
             include 'css/leggtil.css'; ?>
            p{
                font-size:20px;
            }
            #leggtilbilde{
                width:375px;
                height:20px;
                
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
            <?php
                if($_SESSION['loggetinn']==false){
            ?>
                <script>location='inlogging.php'</script>
            <?php } ?>
                <div id="aktivitetside">
                    <?php if($rad = mysqli_fetch_array($datasett)) { ?>
                        <div style="width:60%">
                        <form method="POST">
                            <br>
                            <button name="preview" type="preview"  style="border:none;background-color:#66aa66; box-shadow: -2px 2px 15px #355535; color:white; width:100px; height:35px" >Preview</button>
                                <label for="leggtilbilde" style="font-size:30px;">Bildelink:</label>
                                <input type="text" id="leggtilbilde" name="leggtilbilde" value = "<?php echo $rad["bilde"]; ?>"><br>
                                <?php if(isset($_POST["preview"]) && $_POST["leggtilbilde"] != "") { ?>
                                <img style="height:425px; box-shadow: -2px 2px 15px #355535; width:90%"  src="<?php echo $_POST["leggtilbilde"] ?>">
                                <?php }else{ ?>
                                <img style="height:425px; box-shadow: -2px 2px 15px #355535; width:90%"  src="<?php echo $rad["bilde"]; ?>">
                            <?php } ?>
                        </div>
                        <div style="width:50%">
                        
                                <input type="text" placeholder="Tittel" id="tittel"  name="tittel" style="width:300px; margin-left:75px" value = "<?php echo $rad["tittel"]; ?>">
                                
                                <br><br>
                                <h2>Informasjon:</h2>
                                <br>
                                <textarea type="text" id="informasjon" name="informasjon" style="box-shadow: -2px 2px 15px #355535;"><?php echo $rad["info"]; ?></textarea>
                                <p><?php echo $error ?></p>
                                <?php if($rad = mysqli_fetch_array($personinfo)) { ?>
                                    <span style="position:absolute; bottom:10px; width:20%; left: 55%"><p  ><strong>Lagt inn av </strong> <?php echo $rad['fornavn'] ?> <?php echo $rad["etternavn"]; ?> fra <?php echo $rad['bosted'] ?> </p></span>
                                <?php } ?>
                                <button name="knapp" type="knapp" style="border:none;background-color:#66aa66; box-shadow: -2px 2px 15px #355535; color:white; width:100px; margin-top:60px; margin-left:375px;" id="submit">Legg til</button>
                            </form>  
                        </div>
                    <?php } ?>    
                </div>
                
        </div>



    </body>
</html>
