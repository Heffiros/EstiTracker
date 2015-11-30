<?php
namespace Model;
use PotterORM\Base;

class Estimote extends Base
{
	static protected $table = 'esti_beacon';
	static protected $pk = 'id';
	static protected $fields = array('beacon_ref', 'name' ,'user_id', 'content','type', 'created');
    
    public function save()
    {
        parent::save();
    }

    public function getType()
    {
    	return $this->values['type'];
    }

    public function getContent()
    {
    	return $this->values['content'];
    }

    public function getName()
    {
        return $this->values['beacon_ref'];
    }
}
