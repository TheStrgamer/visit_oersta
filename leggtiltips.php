<?php
    require_once('tilkobling.php'); 

    $error ="";
    
    $telef = $_SESSION['telefonnummer'];
    $person = "SELECT * FROM person WHERE telefonnummer = $telef";
    $personinfo = $tilkobling->query($person);

    if(isset($_POST["knapp"])) {
        $sql = sprintf("INSERT INTO reisetips(tittel, tekst, telefonnummer, dato) VALUES( '%s', '%s', '%s', NOW())",
                        $tilkobling->real_escape_string($_POST["tittel"]),
                        $tilkobling->real_escape_string($_POST["tekst"]),
                        $tilkobling->real_escape_string($_SESSION['telefonnummer'])
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
            include 'css/leggtil.css';  ?>
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
            <?php
                if($_SESSION['loggetinn']==false){
            ?>
                <script>location='inlogging.php'</script>
            <?php } ?>
            
            <?php
                if($_SESSION['loggetinn']==true){
            ?>
            <div id="reisetips">
                <form method="POST">
                    <br>
                    <p style="background-color:#478031b9;"><input placeholder="Tittel" type="text" name="tittel" id="tittel"></p>
                    <br>

                    <textarea placeholder="Tekst" name="tekst" style="width:90%; height:60px; background-color:#ffffff66"></textarea>
                    <br/><br>
                    <?php while($rad = mysqli_fetch_array($personinfo)) { ?>
                    <p><strong>Lagt inn av: <?php echo $rad['fornavn'] ?> <?php echo $rad["etternavn"]; ?> </strong></p>  
                    <?php } ?>
                    <button id="submit" name="knapp" type="knapp" style="position:relative; margin-left:75%; bottom:15px">Legg til</button>
                   
                </form>
            </div>
            <?php } ?>
            <br><br>


        </div>


    </body>
</html>
