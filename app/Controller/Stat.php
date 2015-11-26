<?php 
namespace Controller;
use Minima\Controller\Base;
use \Model;
use \Form;

//Cette page contiendra les différentes stats calculées à partir des retours de l'application
//Ceux qui existait déjà :
// - Nombre de personne par jours
// - Moyenne de temps de présence autour du beacon
//Les nouveaux :
// - Recenssement des clics sur les pages promos ou publicitaire push sur les téléphones
// - Calcule du chiffre d'affaire
class Stat extends Base
{
	
	public function connectApiAction()
	{
		$vals = array('mail' => $_GET['mail'], 'password' => $_GET['password']);
		$user = Model\Client::find($vals);
		if ($user == null){
			$retour_id = array("idUser" => 0);
		} else {
			$retour_id = array("idUser" => $user->getPk());
		}
		exit (json_encode($retour_id));

	}

	public function createAccountApiAction()
	{
		$value = array('mail' => $_GET['mail'], 'password' => $_GET['password'], 'date_created' => date("Y-m-d"));
		$user = new Model\Client($value);
		$user->save();
        
        $retour_id = array('idUser' => $user->getPk());
        exit(json_encode($retour_id));
	}


	public function checkEstiType()
	{
		$type = $_GET['beacon_key'];
		
	}

}

