<?php
    session_start();
    // détruire une session manuellement
    session_destroy();

    // sinon les sessions se détruisent toute seule après un certain
    // temps défini par défaut dans le fichier de configuration
    // php.ini

    // rediriger vers la page d'identification
    header('Location: ../php8-sessions.php');
?>