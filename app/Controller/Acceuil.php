<?php 
namespace Controller;
use Minima\Controller\Base;
use \Model;
use \Form;

//Ce controleur sera celui qui permetra de gérer la page d'acceuil après la connexion.
//Il contiendra la DataTable avec la liste de tous les Beacon enregistré
//Il contiendra le formulaire pour faire les nouveaux enregistrement
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

		return array('form' => $form);
	}
}
