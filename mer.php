<?php require_once('tilkobling.php'); 
$sql = "SELECT * FROM attraksjon";
$datasett =$tilkobling->query($sql);

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
            <a href="mer.php"><div class="toppboks"><h1 id="currentPage">Mer</h1></div></a>
            <?php if($_SESSION['loggetinn'] == true) { ?>
                <form method="post" id="logout">
                    <a href="?loggut=true"><div class="toppboks"><h3>Logg ut</h3></div></a>
                </form>
            <?php }else{ ?>
                <a href="inlogging.php"><div class="toppboks"><h3>Logg inn</h3></div></a>
                <?php } ?>
        </div>
        <div id="innholdsboks"> 
            <br><br><br>
            <div id="merboks">
                <h2>Om oss</h2>
                <br><br>
                <p><strong>Nummer: </strong>948 35 426</p>
                <br>
                <p><strong>E-Post: </strong>visitoersta@gmail.com</p>
                <br>
                <p><strong>Adresse: </strong>apelandveien 45</p>
                <br><br>
                <p>Visit Ørsta er et selskap som jobber for å bringe flere turister til den vakre byen Ørsta.</p>
                <br>
                <p>Vi sammarbeider med lokale bedrifter for å gi alle turister en god opplevelse</p>
                

            </div>
            <br><br><br>
            <div id="merboks" >
                <h2>Sponsorer:</h2>
                <br>
                <div style="width:95%; height:300px; display:flex; justify-content:space-around;">
                <a href="https://strgamer.itch.io/five-nights-at-nrk">
                        <div id="sponsor">
                            <img src="bilder/sponsor1.png">
                            <br>
                            <h2>FNAN</h2>
                            <br>
                        </div>
                    </a>
                    <a href="https://www.orsta.kommune.no/">
                        <div id="sponsor">
                            <img src="bilder/sponsor2.png" style="height:200px">
                            <br>
                            <h2>Ørsta Kommune</h2>
                            <br>
                        </div>
                    </a>
                    <a href="https://dramstad.net/">
                        <div id="sponsor">
                            <img src="https://dramstad.net/bilder/lam.jpg">
                            <br>
                            <h2>Dramstad.net</h2>
                            <br>
                        </div>
                    </a>
                </div>
                <br>
            </div>
            <br><br>
            <div id="merboks" >
                <h3 style="font-size:35px;">Kilder:</h3>
                <br>
                <h3 style="font-size:30px;">Informasjon:</h3>    
                <a href="https://no.tripadvisor.com/Attractions-g1034758-Activities-Orsta_More_og_Romsdal_Western_Norway.html">Tripadvisor</a> 
                
                </br></br>
                <h3 style="font-size:30px;">Bilder:</h3>
                </br><h3 style="font-size:25px;">Sponsorer:</h3> 
                <a href="https://pixabay.com/photos/lamb-animal-mammal-farm-292512/">Bilde av lam på sponsor</a>
                </br><a href="https://www.orsta.kommune.no/">Bilde av Ørstas våpenskjold på sponsor</a>
                <br><br>
                <h3 style="font-size:25px;">Fjell:</h3>
                <a href="https://nn.wikipedia.org/wiki/Fil:Sm%C3%B8rskredtind2.jpg">Smørskredtinden</a></br>
                <a href="https://nn.wikipedia.org/wiki/Fil:JaktaFromSlogen.jpg">Jakta</a></br>
                <a href="https://nn.wikipedia.org/wiki/Fil:Slogen_fr%C3%A5_fjorden.jpg">Slogen</a></br>
                <br><br>
                <h3 style="font-size:25px;">Overnatting:</h3>
                <a href="https://media-cdn.tripadvisor.com/media/photo-s/16/62/a2/85/hotel-brosundet.jpg">Hotel Brosundet</a></br>
                <a href="https://media-cdn.tripadvisor.com/media/photo-s/12/e5/f7/93/volda-turisthotell.jpg">Volda Turisthotell</a></br>
                <a href="https://media-cdn.tripadvisor.com/media/photo-s/13/5f/ea/0a/hotel-exterior.jpg">Quality Hotel Ulstein</a></br>
                <a href="https://media-cdn.tripadvisor.com/media/photo-s/08/35/b3/07/sunde-fjord-hotel.jpg">Sunde Fjord Hotel</a></br>
                <a href="https://media-cdn.tripadvisor.com/media/photo-s/1c/ee/43/e0/troll-fjordhytter.jpg">Troll Fjordhytter</a></br>


                <br><br>
                <h3 style="font-size:25px;">Resturanger:</h3>
                <a href="https://media-cdn.tripadvisor.com/media/photo-s/1b/2e/f2/84/great-coffee.jpg">Fugl Føniks - Mat, Drikke & Bar</a></br>
                <a href="https://media-cdn.tripadvisor.com/media/photo-s/08/1f/4a/25/hotel-union-oye-restaurant.jpg">Hotel Union Oye Resturant</a></br>
                <a href="https://media-cdn.tripadvisor.com/media/photo-p/0c/f6/64/ab/photo0jpg.jpg">Urke Kaihus</a></br>

                <br><br>
                <h3 style="font-size:25px;">Aktivitetbilder:</h3>
                <?php 
                while($rad = mysqli_fetch_array($datasett) ) {  
                    if(strpos($rad['bilde'], 'bilder/') !== false) { 
                        //a
                    } else {
                ?>
                    <a href="<?php echo $rad['bilde'] ?>"><?php echo $rad['tittel'] ?></a></br>
                <?php }} ?>
            </div>
            <br><br>

        </div>


    </body>
</html>
