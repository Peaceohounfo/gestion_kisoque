<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Editer_ticket</title>
</head>
<body>
<h1>Ticket_Vente</h1>
<form action ="insert_ticket.php" method="POST">
<label for="id_ticket"> Identifiant</label>
<input type="number" id="id_ticket" name="id_ticket"/><br/>
<label for="date_vente"> Date_vente </label>
<input type="date" id="date_vente" name="date_vente"/><br/>
<label for="codif"> Codif </label>
<input type="text" id="codif" name="codif"/><br/>
<label for="parution">Parution </label>
<input type="date" id="parution" name="parution"/><br/>
<label for="code_barre"> Code_barre </label>
<input type="text" id="code_barre" name="code_barre"/><br/>
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