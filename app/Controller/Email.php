<?php 
namespace Controller;
use Minima\Controller\Base;
use \Model;
use \Form;

/**
* Ce controller gère l'envoie des email et le calcul de cible de celui-ci
* 
* 
* 
* 
*/
class Email extends Base
{

	//Affiche le premier formulaire de gestion de cible
	public function homeAction()
	{

	}

	//Cette méthode gérera l'envoie du mail
	public function sendAction()
	{
		$array = $this->calculateTarget($_GET['nb_gagnant']);
		foreach ($array as $value) {
			$headers  = 'MIME-Version: 1.0' . "\r\n";
		    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                    // En-têtes additionnels
			$test = mail($value['mail'], $_GET['objet'], $_GET['content'], $headers);
 		}
	}

	//Cette méthode calculera la cible
	private function calculateTarget($nb_gagnant)
	{
		$moyenneByStanders = $this->db->query("SELECT mail, COUNT(client_id) as nb  FROM esti_stat ES JOIN esti_client EC  ON ES.client_id = EC.id GROUP BY client_id ORDER BY nb DESC LIMIT $nb_gagnant");
		return $moyenneByStanders = $moyenneByStanders->fetchAll();
	}

}
