<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Ajout Article</title>
</head>
<body>
<h1>Ajout d'un article</h1>
<form action ="insert_article.php" method="POST">
<label for="id_article"> identifiant</label>
<input type="text" id="id_article" name="id_article"/><br/>
<label for="nom_article"> Nom </label>
<input type="text" id="nom_article" name="nom_article"/><br/>
<label for="parution">Parution </label>
<input type="date" id="parution" name="parution"/><br/>
<label for="stock"> Stock</label>
<input type="number" id="stock" name="stock"/><br/>
<label for="prix_achat_HT">Prix d'achat hors taxe</label>
<input type="number" id="prix_achat_HT" name="prix_achat_HT"/><br/>
<label for="libelle"> Libelle</label>
<input type="text" id="libelle" name="libelle"/><br/>
<label for="prix_vente_HT"> Prix de vente hors taxe</label>
<input type="number" id="prix_vente_HT" name="prix_vente_HT"/><br/>
<label for="taux_commission"> Taux de commission</label>
<input type="number" id="taux_commission" name="taux_commission"/><br/>
<label for="tva"> TVA</label>
<input type="number" id="tva" name="tva"/><br/>
<button type="submit">Ajout <article></article></button>
</form>
</body>
</html>