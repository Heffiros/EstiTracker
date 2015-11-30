<?php 

namespace Model;
use PotterORM\Base;

class TimePass extends Base
{
	static protected $table = 'esti_time';
	static protected $pk = 'id';
	static protected $fields = array('client_id', 'beacon_ref', 'time');


	public function save()
	{
		parent::save();
	}


}