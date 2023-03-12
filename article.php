<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <title>modif Article</title>
   </head>
   <body>
        <h1>Liste des articles</h1>
        <form action = "form.php">
        <button type="submit">Nouveau article</button>
        </form>
        <?php
        foreach ($conts as $cont) {
        ?>
                <p>
        <?php
        echo ("id : " . $cont["id_article"] . "<br/>") ;
        echo ("Nom_Article : " . $cont["nom_article"] . "<br/>") ;
        echo ("Codif : " . $cont["codif"] . "<br/>") ;
        echo ("Parution : " . $cont["parution"] . "<br/>") ;
        echo ("Code_Barre : " . $cont["code_barre"] . "<br/>") ;
        echo ("Stock: " . $cont["stock"] . "<br/>") ;
        echo ("Prix_achat_HT: " . $cont["prix_achat_HT"] . "<br/>") ;
        echo ("Prix_vente_HT: " . $cont["prix_vente_HT"] . "<br/>") ;
        echo ("Libelle: " . $cont["libelle"] . "<br/>") ;
        echo ("Taux_commission: " . $cont["taux_commission"] . "<br/>") ;
        echo ("TVA: " . $cont["tva"] . "<br/>") ;
        ?>
        <a href = "modif_article.php?id_article=
        <?php echo ($cont['id_article']) ; ?>" >modifier </a> -
        <a href = "supp_form.php?id_article=
        <?php echo ($cont['id_article']) ; ?>" >supprimer</a>
        </p>
        <?php
        }
        $query->closeCursor();
        ?>
    </body>
</html>