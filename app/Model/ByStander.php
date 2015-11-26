<?php 

namespace Model;
use PotterORM\Base;

class ByStander extends Base
{
	static protected $table = 'esti_stat';
	static protected $pk = 'id';
	static protected $fields = array('client_id', 'beacon_ref', 'date_pass');


	public function addOne()
	{
		parent::save();
	}


}