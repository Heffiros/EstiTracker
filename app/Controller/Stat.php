<?php
namespace Controller;
use Minima\Controller\Base;
use \Model;
use \Form;

class Stat extends Base
{
	public function home()
	{
		
	}

	public function allBystantders()
	{
		$moyenneByStanders = $this->db->query("SELECT COUNT(*) FROM esti_stat GROUP BY date_pass");
		return array('moyenneByStanders' => $moyenneByStanders);
	}
}