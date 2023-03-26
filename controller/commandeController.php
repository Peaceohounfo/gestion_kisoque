<?php

if (isset($_POST)) {
    include ("../connexion.php");
    $bdd = connectgestion_kiosque();
    $operation = $_POST['operation'];
    switch ($operation) {
        case 'delete':
            $id = $_POST['id'];
            $reqSQL = 'DELETE FROM commande WHERE id_commande = :id';
            $deleteCommande = $bdd->prepare($reqSQL);
            $deleteCommande->execute(['id' => $id]);
            echo ("<h6>Suppression effectuée</h6>");
            break;
        case 'update':
            $id_commande = $_POST['id_commande'];
            $libelle_commande = $_POST['libelle_commande'];
            $date_commante = $_POST['date_commante'];
            $id_fournisseur = $_POST['id_fournisseur'];
            $reqSQL = 'UPDATE commande SET libelle_commande = :libelle_commande, date_commante = :date_commante, id_fournisseur = :id_fournisseur WHERE id_commande = :id';
            $updateCommande = $bdd->prepare($reqSQL);
            $updateCommande->execute(['id' => $id_commande, 'libelle_commande' => $libelle_commande, 'date_commante' => $date_commante, 'id_fournisseur' => $id_fournisseur]);
            echo ("<h6>Modification effectuée</h6>");
            break;
        case 'insert':
            $libelle_commande = $_POST['libelle_commande'];
            $date_commante = $_POST['date_commante'];
            $id_fournisseur = $_POST['id_fournisseur'];
            $reqSQL = 'INSERT INTO commande (libelle_commande, date_commante, id_fournisseur) VALUES (:libelle_commande, :date_commante, :id_fournisseur)';
            $insertCommande = $bdd->prepare($reqSQL);
            $insertCommande->execute(['libelle_commande' => $libelle_commande, 'date_commante' => $date_commante, 'id_fournisseur' => $id_fournisseur]);
            echo ("<h6>Ajout effectué</h6>");
            break;
        default:
            echo ("<h6>Erreur</h6>");
            break;
    }
}