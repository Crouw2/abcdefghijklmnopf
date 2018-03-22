<?php

    include("functions.php");
include ('login.php');

        $gekozen = '';
        if (isset($_GET['pag'])) {
            $gekozen = $_GET['pag'];
        }
        //$paggepost = $_POST[''];

    include("pagstart.php");
        switch ($gekozen){
            case "Registreren":
                include ('aanmelding.php');


                break;
            case "Forum":
                include ('Forum.php');


                break;
            case "Support":
                include ('Support.php');


                break;

            default:
                include ("Home.php");

                break;
        }

    include("pageinde.php");

?>

<?php
    session_start();

if(isset($_SESSION['user-id'])):
    ?>
    <nav>
        <ul>
            <li><a href="index.php?pag=Home">Home</a></li>
            <li><a href="index.php?pag=Forum">Forum</a></li>
            <li><a href="index.php?pag=Support">Support</a></li>
            <li><a href="index.php?pag=Logout">Logout</a></li>
        </ul>
    </nav>

<?php else:
    echo "U heeft uw inloggegevens nog niet ingevuld";

    ?>



<?php endif; ?>
