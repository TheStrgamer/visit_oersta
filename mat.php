<?php require_once('tilkobling.php'); ?>

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
            <a href="fjell.php"><div class="toppboks"><h1 >Fjell</h1></div></a>
            <a href="overnatting.php"><div class="toppboks"><h1>Overnatting</h1></div></a>
            <a href="mat.php"><div class="toppboks"><h1 id="currentPage">Mat</h1></div></a>
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

            <br><br><br>

            <h2 style="text-align: center; font-size:35px;">Populære resturanger i Ørsta</h2><br>
            <div id="datainnholdsboks" style="height:700px;">
                    <br><br>
                    <div style="width:95%; display:flex; justify-content:space-around; margin-left:20px;">
                        <a href="http://www.fuglfoniks.no/">
                            <div id="databoks" style="width:500px; background-color:#77545522; ">
                                <div style="width:45%"> 
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/2e/f2/84/great-coffee.jpg" alt="test" style="border-radius:20px;"> 
                                </div>
                                <div style="width:5%"></div>
                                <div style="width:45%; overflow-y: auto;">

                                    <div style="display:flex; flex-direction: column; height:60%; justify-content:space-around;">
                                    </br></br></br>
                                    <h2 style="font-size:25px">Fugl Føniks - Mat, Drikke & Bar</h2>  
                                    
                                    <p>-Vikegata 11, Ørsta 6150 Norge</p>
                                    <p>-11:00-02:00</p>
                                    <p>-+47 400 16 678</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <br><br>
                        <a href="http://www.unionoye.no/en">
                            <div id="databoks" style="width:500px; background-color:#77545522; ">
                                <div style="width:45%"> 
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/1f/4a/25/hotel-union-oye-restaurant.jpg" alt="test" style="border-radius:20px;"> 
                                </div>
                                <div style="width:5%"></div>
                                <div style="width:45%; overflow-y: auto;">

                                    <div style="display:flex; flex-direction: column; height:60%; justify-content:space-around;">
                                    </br></br>
                                    <h2 style="font-size:25px">Hotel Union Oye Restaurant</h2>  
                                    
                                    <p>-Oye, Ørsta 6196 Norge</p>
                                    
                                    <p>-+47 70 06 21 00</p>
                                    </div>
                                </div>

                            </div>
                        </a>
                   
                    </div>


                    <br><br>
                    <div style="width:95%; display:flex; justify-content:space-around; margin-left:20px;">
                        
                        <div id="databoks" style="width:500px; background-color:#77545522; ">
                            <div style="width:45%"> 
                                <img src="https://media-cdn.tripadvisor.com/media/photo-p/0c/f6/64/ab/photo0jpg.jpg" alt="test" style="border-radius:20px;"> 
                            </div>
                            <div style="width:5%"></div>
                            <div style="width:45%; overflow-y: auto;">

                                <div style="display:flex; flex-direction: column; height:60%; justify-content:space-around;">
                                    </br></br>
                                    <h2 style="font-size:25px">Urke Kaihus</h2>  
                                    
                                    <p>-Ørsta 6196 Norge</p>
                                    <p>-47 480 71 910</p>
                                    <p>Ingen bestilling på nett</p>
                                </div>
                            </div>

                        </div>
                        
                        <br><br>
                        
                        <div id="databoks" style="width:500px; background-color:#77545522; ">
                            <div style="width:45%"> 
                                <img src="bilder/burger_small.jpg" alt="test" style="border-radius:20px;"> 
                            </div>
                            <div style="width:5%"></div>
                            <div style="width:45%; overflow-y: auto;">

                                <div style="display:flex; flex-direction: column; height:60%; justify-content:space-around;">
                                </br></br></br>
                                <h2 style="font-size:25px">Rekkedal Guest House</h2>  
                                    
                                <p>-Rekkedal, Ørsta 6165 Norge</p>
                                <p>-+47 952 22 679</p>
                                <p>-Ingen Bestilling på nett</p>
                                </div>
                            </div>

                        </div>
                        
                   
                    </div>
               
                
            </div>
            </br></br><br>
        </div>

        </br></br><br><p></p>



    </body>
</html>