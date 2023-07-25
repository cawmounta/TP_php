<?php

try {
    $user = "root";
    $pass = "";
    $dbh = new PDO('mysql:host=localhost;dbname=TPphp', $user, $pass);

    $requete = 'SELECT * from user';

    foreach($dbh->query($requete) as $row) {
        afficherLigne($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
function afficherLigne($row) {
    echo 'nom :' . $row['nom'];
    echo '<br />';
    echo 'prenom:'.  $row['prenom'] ;
    echo  '<br />';
}
?>