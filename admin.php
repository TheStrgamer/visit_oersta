<?php
            
require_once('tilkobling.php');
if($_SESSION['loggetinn']==false || $_SESSION['telefonnummer'] != 94039995){    
    echo"<script>location='index.php'</script>";
}

$sql1 = "SELECT * FROM person ORDER BY etternavn";
$personer = $tilkobling->query($sql1);
$personer2 = $tilkobling->query($sql1);

$sql2 = "SELECT * FROM reisetips, person WHERE reisetips.telefonnummer = person.telefonnummer ORDER BY etternavn";
$reisetips = $tilkobling->query($sql2);

$sql3 = "SELECT * FROM attraksjon, person WHERE attraksjon.telefonnummer = person.telefonnummer ORDER BY etternavn";
$attraksjoner = $tilkobling->query($sql3);


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
             include 'css/admin.css'; ?>
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
            <a href="aktiviteter.php"><div class="toppboks"><h1  >Aktiviteter</h1></div></a>
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
            <div style="width:90%; margin-left:auto; margin-right:auto;">
                <table>
                <thead>
                    <tr>
                        <th colspan="5">Personer</th>
                    </tr>
                    </thead>
                    <tr>
                            <th>Etternavn</th>
                            <th>Fornavn</th>
                            <th>Passord</th>
                            <th>Telefonnummer</th>
                            <th>Land</th>

                        </tr>
                    <?php while($rad = mysqli_fetch_array($personer) ) { ?>
                        <tr>
                            <td><?php echo $rad['etternavn']; ?></td>
                            <td><?php echo $rad['fornavn']; ?></td>
                            <td><?php echo $rad['passord']; ?></td>
                            <td><?php echo $rad['telefonnummer']; ?></td>
                            <td><?php echo $rad['bosted']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br><br>
                <table>
                    <thead>
                    <tr>
                        <th colspan="7">Reisetips</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <th>Etternavn</th>
                            <th>Fornavn</th>
                            <th>ID</th>
                            <th>Tittel</th>
                            <th>Tekst</th>
                            <th>Telefonnummer</th>
                            <th>Dato</th>
                        </tr>
                    <?php while($rad = mysqli_fetch_array($reisetips) ) { ?>
                        <tr>
                            <td><?php echo $rad['etternavn']; ?></td>
                            <td><?php echo $rad['fornavn']; ?></td>
                            <td><?php echo $rad['id']; ?></td>
                            <td><?php echo $rad['tittel']; ?></td>
                            <td><?php echo $rad['tekst']; ?></td>
                            <td><?php echo $rad['telefonnummer']; ?></td>
                            <td><?php echo $rad['dato']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br><br>
                <table>
                <thead>
                    <tr>
                        <th colspan="7">Attraksjoner</th>
                    </tr>
                    </thead>
                    <tr>
                            <th>Etternavn</th>
                            <th>Fornavn</th>
                            <th>ID</th>
                            <th>BildeLink</th>
                            <th>Tittel</th>
                            <th>Informasjon</th>
                            <th>Telefonnummer</th>
                        </tr>
                    <?php while($rad = mysqli_fetch_array($attraksjoner) ) { ?>
                        <tr>
                            <td><?php echo $rad['etternavn']; ?></td>
                            <td><?php echo $rad['fornavn']; ?></td>
                            <td><?php echo $rad['id']; ?></td>
                            <td><div style="width:300px; overflow:hidden;"><a href="<?php echo $rad['bilde']; ?>"><?php echo $rad['bilde']; ?></a></div></td>
                            <td><?php echo $rad['tittel']; ?></td>
                            <td><?php echo $rad['info']; ?></td>
                            <td><?php echo $rad['telefonnummer']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div> 
        </div>



    </body>
</html>
