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
class Api extends Base
{
	//Permet de s'identifier sur l'app
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

	//Permet au client de créer un compte
	public function createAccountApiAction()
	{
		$value = array('mail' => $_GET['mail'], 'password' => $_GET['password'], 'date_created' => date("Y-m-d"));
		$user = new Model\Client($value);
		$user->save();
        
        $retour_id = array('idUser' => $user->getPk());
        exit(json_encode($retour_id));
	}

	//Api qui vérifier quel comportemment doit avoir le beacon
	public function checkEstiTypeApiAction()
	{
		$vals = array('beacon_ref' =>  $_GET['beacon_key']);
		$estimote = Model\Estimote::find($vals);
		$type = $estimote->getType();
		$return = array("state" => "");
		if ($type == "1") {
			$value = array('client_id' => $_GET['idUser'] , 'beacon_ref' => $_GET['beacon_key'], 'date_pass'  => date('Y-m-d'));
			$byStander = new Model\ByStander($value);
			$byStander->addOne();
		} else if ($type == "2") {
			$return['state'] = "timestamp";
		} else if ($type == "3") {
			$return['state'] = "http://192.168.126.4/EstiTracker/index.php/api/aff?beacon_key=" . $_GET["beacon_key"];
		}
		exit(json_encode($return));
	}


	//Méthode qui affiche le content publicaire
	public function  affWebViewApiAction()
	{
		$vals = array('beacon_ref' =>  $_GET['beacon_key']);
		$estimote = Model\Estimote::find($vals);
		$content = $estimote->getContent();
                return array('content' => $content);
	}

	//Méthode qui enregistre le temps de présences de la personne
	public function addTimeConnexionApiAction()
	{
		$vals = array('beacon_ref' => $_GET['beacon_key'], 'client_id' => $_GET['idUser'], 'time' => $_GET['time'],  'date_pass' => date('Y-m-d'));
		$userTimePass = new Model\TimePass($vals);
		$userTimePass->save();
		$return["success"] = true;
		exit(json_encode($return));
	}

	public function getInfoApiAction()
	{
		$list = Model\Estimote::findAll();
		$return = array();
		foreach ($list as $row) {
			$return[$row["beacon_ref"]] = $row["name"];
		}
		exit(json_encode($return));
	}
}

