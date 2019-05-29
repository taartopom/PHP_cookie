<?php
    session_start();
    if (isset($_COOKIE['identifiant'])) {
?>
        Mon profil :
        Nom : Test<br>
        Prénom : Test<br>
        Date de naissance : 01/02/1991<br>

<?php
    }
    else {
        echo "Pas connecté";
    }
?>