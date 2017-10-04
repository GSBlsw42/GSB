<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
    	$( ".datepicker" ).datepicker();
    } );
    </script>
    <style type="text/css">
    	tr {
    		display: inline;
    		margin: 15px 20px auto;
    	}
    </style>
</head>


<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=my_btsw2015;charset=utf8', 'user', 'user');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

?>

<h3>Ajouter un nouveau frais hors forfait</h3>
<form method='POST' action='index.php?uc=gererAbs&action=validerAjoutAbs'>
	<td>Motif</td>
	<table class='tabNonQuadrille'>
		<tr>
			<td>Date de début <i class="fa fa-calendar" aria-hidden="true"></i></td>
			<td>
				<input  type='text' name=dateDebut class="datepicker" size='30' maxlength='45'>
			</td>
		</tr>
		<tr>
			<td>Date de Fin <i class="fa fa-calendar" aria-hidden="true"></i></td>
			<td>
				<input  type='text' name=dateFin class="datepicker" size='30' maxlength='45'>
			</td>
		</tr>
			

		    <select class="form-control" name="code">
		       <?php $refMotif = $bdd->query('SELECT code, libelle
		          FROM Motif
		          ORDER BY libelle');

		        while ($motif = $refMotif->fetch()) {
			        $code = $motif["code"];
			        $libelle = $motif["libelle"]; ?>
			        <option value="<?=$code?>"><?=$libelle?></option>';
			        <?php 
			    }; 
		        $refMotif->closeCursor();?>
		    </select>


	</table>

	<input type='submit' value='Valider' name='valider'>
	<input type='reset' value='Annuler' name='annuler'>

</form>
