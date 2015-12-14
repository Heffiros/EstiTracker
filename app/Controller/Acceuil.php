<?php 
namespace Controller;
use Minima\Controller\Base;
use \Model;
use \Form;

/**
* Ce controlleur gère la page après la connexion
* Le client peut voir grâce au datatable les beacon qu'il a programmé
* Il peut en enregistrer de nouveaux ou encore les supprimer.
* TODO :
* - Faire en sorte qu'il puisse modifier son beacon
*/
class Acceuil extends Base
{
	public function homeAction()
	{
		$form = new Form\RegisterEstimote($_POST, array('db' => $this->db));
		
		if ($this->method == 'POST' && $form->isValid()) {
            $estimote = new Model\Estimote($form->getValues());
            $estimote['created'] = date("Y-m-d");
            $estimote['user_id'] = $this->session->getUser()->getPk();
            $estimote->save();
            $this->redirect('backoffice');
        }

        $val = $this->session->getUser()->getPk();
		$stmt = $this->db->query("SELECT * FROM `esti_beacon` WHERE `user_id` =  $val");
		$lama = $stmt->fetchAll();
		return array('form' => $form, 'query' => $lama);
	}

	public function modifAction($params)
	{
		$estimote = Model\Estimote::find($params['id']);
		$form = new Form\ModifEstimote($_POST, array('db' => $this->db));
		if ($this->method == 'POST' && $form->isValid()) {
        	$estimote->setValues($form->getValues());
        	$estimote['user_id'] = $this->session->getUser()->getPk();
            $estimote->save();
            $this->redirect('backoffice');
        }
        return array('form' => $form, 'estimote' => $estimote);
	}

}
