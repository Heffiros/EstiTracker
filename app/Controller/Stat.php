<?php
namespace Controller;
use Minima\Controller\Base;
use \Model;
use \Form;


/**
* Ce controlleur gère toute la partie calcule de stat et création des google chart
*/

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

	public function averageTimeAction()
	{
		$vals = array('id' => $_GET['id']);

		$estimote = Model\Estimote::find($vals);
		$esti_ref =$estimote->getRef();
		$averageTimeSpent = $this->db->query("SELECT AVG(time) as average, date_pass FROM esti_time WHERE beacon_ref = '$esti_ref' GROUP BY date_pass");
		$averageTimeSpent = $averageTimeSpent->fetchAll();
		$return2 =  "";
		
		foreach ($averageTimeSpent as $row2) {
			$day = explode('-' , $row2["date_pass"]);
			$new_js_date = "new Date(".$day[0].",".$day[1].",".$day[2]."),";
			$return2 .= "[$new_js_date".$row2['average'].", '#0080FF'],";
		}

		return array('return2' => $return2);
	}
	public function deleteBeaconAction()
	{
		$id = $_GET['id'];
		$moyenneByStanders = $this->db->query("DELETE FROM esti_beacon WHERE id = $id");
		$this->redirect('backoffice');
	}
}