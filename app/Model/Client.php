<?php
namespace Model;
use PotterORM\Base;

class Client extends Base
{
	static protected $table = 'esti_client';
	static protected $pk = 'id';
	static protected $fields = array('mail', 'password', 'date_created');

	public function save()
    {
        if (!$this->exists())
            $this->values['password'] = $this->values['password'];
        parent::save();
    }
}
