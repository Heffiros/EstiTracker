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

	public function allBystandersAction($params)
	{

		$vals = array('id' => $_GET['id']);

		$estimote = Model\Estimote::find($vals);
		$esti_ref =$estimote->getRef();
		$moyenneByStanders = $this->db->query("SELECT COUNT(*) as nb, beacon_ref, date_pass FROM esti_stat WHERE beacon_ref = '$esti_ref' GROUP BY date_pass");
		$moyenneByStanders = $moyenneByStanders->fetchAll();
		$return = "";
		foreach ($moyenneByStanders as $row) {
					$day = explode('-' , $row["date_pass"]);
					$new_js_date = "new Date(".$day[0].",".$day[1].",".$day[2]."),";
					$return .= "[$new_js_date".$row['nb']."],";
		}
		return array('return' => $return, 'esti_ref' => $esti_ref);
	}
}