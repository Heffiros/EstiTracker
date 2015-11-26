<?php
namespace Model;
use PotterORM\Base;

class User extends Base
{
	static protected $table = 'esti_client';
	static protected $pk = 'id';
	static protected $fields = array('beacon_ref','content','type');
    
    public function save()
    {
        parent::save();
    }
}
