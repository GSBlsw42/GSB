<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=my_btsw2015;charset=utf8', 'root', 'barlito');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

?>

<h3>Ajouter un nouveau frais hors forfait</h3>
<form method='POST' action='index.php?uc=gererAbs&action=validerAjoutAbs'>
<table class='tabNonQuadrille'>
<tr>
	<td>Date de début (jj/mois/aaaa)</td>
	<td>
		<input  type='text' name=dateDebut  size='30' maxlength='45'>
	</td>
</tr>
<tr>
	<td>Date de Fin (jj/mois/aaaa)</td>
	<td>
		<input  type='text' name=dateFin  size='30' maxlength='45'>
	</td>
</tr>
	<td>Motif</td>

          		<select class="form-control" name="code">
              	<?php $refMotif = $bdd->query('SELECT code, libelle
                  FROM Motif
                  ORDER BY libelle');

                while ($motif = $refMotif->fetch()) {
                  $code = $motif["code"];
                  $libelle = $motif["libelle"]; ?>
                  <option value="<?=$code?>"><?=$libelle?></option>';
                  <?php }; $refMotif->closeCursor();?>
              	</select>


</table>

<input type='submit' value='Valider' name='valider'>
<input type='reset' value='Annuler' name='annuler'>

</form>
