<?php
 /** LES COOKIES **/
    // créer un cookie sur le navigateur
    setcookie('email', 'fab@mail.fr');
    // valeur par défaut de $expire : 0
    //  -cookie supprimé lors de la fermeture du navigageur

    setcookie('email', 'fab@mail.fr', time() + 3600);
    // expire dans une heure ($expire est exprimé en seconde)

    echo $_COOKIE['email'];

    // récupérer les données envoyées via le formulaire d'identification
    if (isset($_POST['btn_connect'])) {
        $username = filter_input(INPUT_POST, 'username');
        $pass = filter_input(INPUT_POST, 'password');

        // SELECT * FROM _user WHERE username=:username && password=:password
        // if ($statement->rowCount() == 0) : aucun compte correspond
        // if ($statement->rowCount() == 1) : ok il y a un compte qui correspond
        if ($username == "toto" && $pass == "123") {
            // le compte existe : on connecte en session
            setcookie('identifiant', $username);
            header('Location: sessions/mon-profil.php');
        }
        else {
            echo "Identifiants / mot de passe incorrect";
        }
    }
?>

<a href="cookies/accueil.php">Accueil</a>
<a href="cookies/mon-profil.php">Mon profil</a>
<a href="cookies/mon-profil-redirection.php">Mon profil avec redirection</a>

<br><br>

<?php
    if (!isset($_COOKIE['identifiant'])) {
?>
        <form method="post" action="">
            <input type="text" name="username"/>
            <input type="password" name="password"/>
            <input type="submit" name="btn_connect"/>
        </form>
<?php
    }
    else {
        echo "<a href='cookies/logout.php'>Se déconnecter</a>";
    }
?>