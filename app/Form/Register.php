<?php
namespace Form;
use Minima\Form\Base;

class Register extends Base
{
	protected $fields = array('email', 'password');
	protected $validations = array(
		'mandatory' => array(
			'email', 'password',
		),
		'pattern' => array(
			'password' => '/^.{6,16}$/',
			'birthday' =>'/^\d{4}-\d{2}-\d{2}$/',
		),
        'filter' => array(
            'email' => FILTER_VALIDATE_EMAIL,
        ),
		'unique' => array(
			'email' => 'users',
		),
	);
} 