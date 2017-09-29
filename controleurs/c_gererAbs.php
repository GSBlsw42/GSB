<?php
include("vues/v_sommaire.php");
$aaaamm = getMois(date("d/m/Y"));
$numAnnee =substr( $aaaamm,0,4);
$numMois =substr( $aaaamm,4,2);
$mois=$numMois;
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];


switch($action){
	case 'validerAjoutAbs':{
		$dateDebut = $_REQUEST['dateDebut'];
		$dateFin = $_REQUEST['dateFin'];
		$motif = $_REQUEST['code'];
		valideInfosAbs($dateDebut,$dateFin,$motif);
		if (nbErreurs() != 0 ){
			include("vues/v_erreurs.php");
		}
		else{
			$pdo->creeNouvelleAbsence($idVisiteur,$dateDebut,$dateFin,$motif);
		}
		break;
	}
}
?>
