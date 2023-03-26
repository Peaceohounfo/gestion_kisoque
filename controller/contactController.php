<?php

if (isset($_POST)) {
    include ("../connexion.php");
    $bdd = connectgestion_kiosque();
    $operation = $_POST['operation'];
    switch ($operation) {
        case 'delete':
            $id = $_POST['id'];
            $reqSQL = 'DELETE FROM fournisseur WHERE id_contact = :id';
            $deleteCommande = $bdd->prepare($reqSQL);
            $deleteCommande->execute(['id' => $id]);
            echo ("<h6>Suppression effectuée</h6>");
            break;
        case 'update':
            $id_fournisseur = $_POST['id_fournisseur'];
            $nom_fournisseur = $_POST['nom_fournisseur'];
            $num_voie = $_POST['num_voie'];
            $nom_voie = $_POST['nom_voie'];
            $code_postal = $_POST['code_postal'];
            $ville = $_POST['ville'];
            $pays_fournisseur= $_POST['pays_fournisseur'];
            $telephone = $_POST['telephone'];
            $TVA_fournisseur = $_POST['TVA_fournisseur'];
            $reqSQL = 'UPDATE fournisseur SET nom_fournisseur = :nom_fournisseur, num_voie = :num_voie, nom_voie = :nom_voie, code_postal = :code_postal, ville = :ville, pays_fournisseur = :pays_fournisseur, telephone = :telephone, TVA_fournisseur = :TVA_fournisseur WHERE id_fournisseur = :id';
            $updateCommande = $bdd->prepare($reqSQL);
            $updateCommande->execute(['id' => $id_fournisseur, 'nom_fournisseur' => $nom_fournisseur, 'num_voie' => $num_voie, 'nom_voie' => $nom_voie, 'code_postal' => $code_postal, 'ville' => $ville, 'pays_fournisseur' => $pays_fournisseur, 'telephone' => $telephone, 'TVA_fournisseur' => $TVA_fournisseur]);
            echo ("<h6>Modification effectuée</h6>");
            break;
        case 'add':
            $nom_fournisseur = $_POST['nom_fournisseur'];
            $num_voie = $_POST['num_voie'];
            $nom_voie = $_POST['nom_voie'];
            $code_postal = $_POST['code_postal'];
            $ville = $_POST['ville'];
            $pays_fournisseur= $_POST['pays_fournisseur'];
            $telephone = $_POST['telephone'];
            $TVA_fournisseur = $_POST['TVA_fournisseur'];
            $reqSQL = 'INSERT INTO fournisseur (nom_fournisseur, num_voie, nom_voie, code_postal, ville, pays_fournisseur, telephone, TVA_fournisseur) VALUES (:nom_fournisseur, :num_voie, :nom_voie, :code_postal, :ville, :pays_fournisseur, :telephone, :TVA_fournisseur)';
            $insertCommande = $bdd->prepare($reqSQL);
            $insertCommande->execute(['nom_fournisseur' => $nom_fournisseur, 'num_voie' => $num_voie, 'nom_voie' => $nom_voie, 'code_postal' => $code_postal, 'ville' => $ville, 'pays_fournisseur' => $pays_fournisseur, 'telephone' => $telephone, 'TVA_fournisseur' => $TVA_fournisseur]);
            echo ("<h6>Ajout effectué</h6>");
            break;
        default:
            echo ("<h6>Erreur</h6>");
            break;
    }
}