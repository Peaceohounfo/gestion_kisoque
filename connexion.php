<?php
function connectgestion_kiosque(){
    $host = "localhost"; // ou sql.hebergeur.com
    $user = "root"; // ou login
    $password = ""; // ou xxxxxx
    $dbname = "gestion_kiosque";
    try {
        $bdd = new PDO('mysql:host = ' . $host . ';dbname=' . $dbname .
            ';charset=utf8', $user, $password);
        return $bdd;
    }
    catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}
?>



