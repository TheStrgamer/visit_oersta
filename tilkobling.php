<?php 
    $tilkobling = mysqli_connect("localhost","root","","visitoersta"); 
    $tilkobling->set_charset("utf8");
    
    session_start();
    if (isset($_SESSION['telefonnummer']) && isset($_SESSION['loggetinn'])  ) {
        //e
    }
    else{
        $_SESSION['telefonnummer'] = "00000000";
        $_SESSION['loggetinn'] = false;   
    }

    if(isset($_POST['logout']) || isset($_GET['loggut'])) {
        $_SESSION['telefonnummer'] = "";
        $_SESSION['loggetinn'] = false;
        echo "<script>location='index.php'</script>"; 
    }
?>


