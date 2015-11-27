<?php
namespace Controller;
use Minima\Controller\Base;
use \Model;
use \Form;

class Stat extends Base
{
	public function homeAction()
	{
		
	}

	public function allBystandersAction()
	{
		$moyenneByStanders = $this->db->query("SELECT COUNT(*) as nb, beacon_ref FROM esti_stat WHERE date_pass = DATE(NOW()) GROUP BY beacon_ref");
		$moyenneByStanders = $moyenneByStanders->fetchAll();
		
		$return = "";
		foreach ($moyenneByStanders as $row) {
					$return .= "['" . $row["beacon_ref"] . "','" . $row["nb"]. "'],";
		}
		//$return[strlen($return) - 1] = "";
		echo $return;
		return array('return' => $return);
	}
}