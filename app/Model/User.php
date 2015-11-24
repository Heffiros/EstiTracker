<?php
namespace Model;
use PotterORM\Base;

class User extends Base
{
	static protected $table = 'esti_user';
	static protected $pk = 'id';
	static protected $fields = array('email', 'password', 'birthday', 'first_name', 'last_name');
    public function save()
    {
        if (!$this->exists())
            $this->values['password'] = encrypt($this->values['password']);
        parent::save();
    }
    public function getFullname()
    {
        return $this['first_name'] . ' ' . $this['last_name'];
    }
}