<?php
namespace Model;
use PotterORM\Base;

class Estimote extends Base
{
	static protected $table = 'esti_client';
	static protected $pk = 'id';
	static protected $fields = array('beacon_ref','user_id', 'content','type', 'created');
    
    public function save()
    {
        parent::save();
    }
}
