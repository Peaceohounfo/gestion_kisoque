<?php

if (isset($_POST)) {
    include ("../connexion.php");
    $bdd = connectgestion_kiosque();
    $operation = $_POST['operation'];
    switch ($operation) {
        case 'delete':
            $id = $_POST['id'];
            $reqSQL = 'DELETE FROM article WHERE id_article = :id';
            $deleteCommande = $bdd->prepare($reqSQL);
            $deleteCommande->execute(['id' => $id]);
            echo ("<h6>Suppression effectuée</h6>");
            break;
        case 'update':
            $id_article = $_POST['id_article'];
            $libelle = $_POST['libelle'];
            $prix_achat_HT = $_POST['prix_achat_HT'];
            $prix_vente_HT = $_POST['prix_vente_HT'];
            $nom_article = $_POST['nom_article'];
            $tva = $_POST['tva'];
            $taux_commission = $_POST['taux_commission'];
            $parution = $_POST['parution'];
            $stock = $_POST['stock'];
            $reqSQL = 'UPDATE article SET libelle = :libelle, stock = :stock, prix_achat_HT = :prix_achat_HT, prix_vente_HT = :prix_vente_HT, nom_article = :nom_article, tva = :tva, taux_commission = :taux_commission, parution = :parution WHERE id_article = :id';
            $updateCommande = $bdd->prepare($reqSQL);
            $updateCommande->execute(['id' => $id_article, 'stock' => $stock, 'libelle' => $libelle, 'prix_achat_HT' => $prix_achat_HT, 'prix_vente_HT' => $prix_vente_HT, 'nom_article' => $nom_article, 'tva' => $tva, 'taux_commission' => $taux_commission, 'parution' => $parution]);
            echo ("<h6>Modification effectuée</h6>");
            break;
        case 'insert':
            $libelle = $_POST['libelle'];
            $prix_achat_HT = $_POST['prix_achat_HT'];
            $prix_vente_HT = $_POST['prix_vente_HT'];
            $nom_article = $_POST['nom_article'];
            $tva = $_POST['tva'];
            $taux_commission = $_POST['taux_commission'];
            $parution = $_POST['parution'];
            $stock = $_POST['stock'];
            $reqSQL = 'INSERT INTO article (libelle, prix_achat_HT, prix_vente_HT, nom_article, tva, taux_commission, parution) VALUES (:libelle, :prix_achat_HT, :prix_vente_HT, :nom_article, :tva, :taux_commission, :parution)';
            $insertCommande = $bdd->prepare($reqSQL);
            $insertCommande->execute(['libelle' => $libelle, 'stock' => $stock, 'prix_achat_HT' => $prix_achat_HT, 'prix_vente_HT' => $prix_vente_HT, 'nom_article' => $nom_article, 'tva' => $tva, 'taux_commission' => $taux_commission, 'parution' => $parution]);
            echo ("<h6>Ajout effectué</h6>");
            break;
        default:
            echo ("<h6>Erreur</h6>");
            break;
    }
}