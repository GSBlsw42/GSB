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
    	form{
    		margin: 30px;
    	}
    	tr {
    		display: inline;
    		margin: 15px 20px auto;
    	}
    	tr i{
    		padding-right: 0.5em;
    	}
    </style>
</head>




<h3 style="text-align: center;">Ajouter un nouveau frais hors forfait</h3>
<form method='POST' action='index.php?uc=gererAbs&action=validerAjoutAbs'>
	<table class='tabNonQuadrille'>

		<tr>
			<td><i class="fa fa-calendar" aria-hidden="true"></i></td>
			<td>
				<input  type='text' name=dateDebut placeholder="Date de début" class="datepicker" size='30' maxlength='45'>
			</td>
		</tr>
		<tr>
			<td><i class="fa fa-calendar" aria-hidden="true"></i></td>
			<td>
				<input  type='text' name=dateFin  placeholder="Date de fin" class="datepicker" size='30' maxlength='45'>
			</td>
		</tr>
			
			Motif 
		    <select class="form-control" name="code">
		       <?php 

			       $refMotif = $bdd->query('SELECT code, libelle
			          FROM Motif
			          ORDER BY libelle');

			        while ($motif = $refMotif->fetch()) {
				        $code = $motif["code"];
				        $libelle = $motif["libelle"]; ?>
				        <option value="<?=$code?>"><?=$libelle?></option>';
				        <?php 
				    }; 
			        $refMotif->closeCursor();

		        ?>
		    </select>
	</table>

	<div style="position: relative;left: 50%; width: 200px; margin-left: -100px; margin-top: 20px; text-align: center;">
		<input type='submit' value='Valider' name='valider' style="margin: 10px;">
		<input type='reset' value='Annuler' name='annuler' style="margin: 10px;">
	</div>
	

</form>
