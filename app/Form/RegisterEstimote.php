<?php

namespace Form;
use Minima\Form\Base;
use Model;

class RegisterEstimote extends Base {
    protected $fields = array('beacon_ref','user_id', 'content','type', 'created');
    protected $validations = array(
        'mandatory' => array('beacon_ref', 'content','type')
    );
    protected function validate()
    {
        $this->fields[] = 'user_id'; // hack
        $vals = array('beacon_ref' => $this->values['beacon_ref'], 'user_id' => $this->values['user_id'],
         'content' => $this->values['content'], 'type' => $this->values['type'], 'created' => $this->values['created']);

    }
}
