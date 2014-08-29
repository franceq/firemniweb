<?php

namespace App\Model;


/**
 * Users management.
 */
class DibiConnection extends Nette\Object
{
	public $db;

	public function __construct(\DibiConnection $dibi){
		$this->db = $dibi;
	}
}