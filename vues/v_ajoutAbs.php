<?php
echo"
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

<tr>
	<td>Motif</td>
	<td>
		<input  type='text' name=motif  size='50' maxlength='100'>
	</td>
</tr>
</table>
<input type='submit' value='Valider' name='valider'>
<input type='reset' value='Annuler' name='annuler'>

</form>
";
?>