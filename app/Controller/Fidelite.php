<?php 
namespace Controller;
use Minima\Controller\Base;
use \Model;
use \Form;

/**
* Ce controller gère la partie fidélité
* 
* 
* 
* 
*/
class Fidelite extends Base
{
 	
	//FAIRE UN LISTING DES CLIENTS QUI SONT PASSE DANS LE MAGASIN ET QUI SONT DONC FIDDELE
 	public function homeAction()
 	{
 		$val = $this->session->getUser()->getPk();

 		$fidele = $this->db->query("SELECT * FROM esti_client ES 
 		JOIN esti_stat EST
 		ON ES.id = EST.client_id
 		JOIN esti_beacon EB
 		ON EST.beacon_ref = EB.beacon_ref 
 		WHERE EB.user_id = $val 
 		GROUP BY ES.id");

 		$fidele = $fidele->fetchAll();
 		return array('fidele' => $fidele);
 	}


 	public function historiqueAchatAction()
 	{

 		$mail = $_POST["mail"];
 		$sql = 'SELECT *
   		FROM esti_historique_achat
		WHERE mail = :mail';

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(':mail', $mail);

 		$stmt->execute();
 		$all_achat = array();
 		$total = 0;
 		while ($row = $stmt->fetch()) {
    		$all_achat[] = $row;
  		}
		return array('all_achat' => $all_achat);
	}


}