<?php

namespace App\Model;

use Nette,
	Nette\Utils\Strings,
	Nette\Security\Passwords;


/**
 * Users management.
 */
class UserManager extends Nette\Object implements Nette\Security\IAuthenticator
{
	const
		TABLE_NAME = 'users',
		COLUMN_ID = 'id',
		COLUMN_NAME = 'username',
		COLUMN_PASSWORD_HASH = 'password',
		COLUMN_ROLE = 'role';


	/** @var Nette\Database\Context */
	private $database;


	public function __construct()
	{
		$this->database = \Nette\Environment::getService('dibi');
	}


	/**
	 * Performs an authentication.
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;

		$row = $this->database->query('SELECT * FROM %n WHERE %n = %s', self::TABLE_NAME, self::COLUMN_NAME, $username)->fetch();

		if (!$row) {
			throw new Nette\Security\AuthenticationException('Nesprávné uživatelské jméno.', self::IDENTITY_NOT_FOUND);

		} elseif (!Passwords::verify($password, $row[self::COLUMN_PASSWORD_HASH])) {
			throw new Nette\Security\AuthenticationException('Špatné heslo.', self::INVALID_CREDENTIAL);

		} elseif (Passwords::needsRehash($row[self::COLUMN_PASSWORD_HASH])) {
			$this->database->query('UPDATE %n SET %n = %s WHERE %n = %i', self::TABLE_NAME, self::COLUMN_PASSWORD_HASH, self::COLUMN_ID, Passwords::hash($password), $row->id);
		}

		$arr = $row->toArray();
		unset($arr[self::COLUMN_PASSWORD_HASH]);
		return new Nette\Security\Identity($row[self::COLUMN_ID], $row[self::COLUMN_ROLE], $arr);
	}


	/**
	 * Adds new user.
	 * @param  string
	 * @param  string
	 * @return void
	 */
	
	public function add($username, $password){
		$this->database->query('INSERT INTO %n %v', self::TABLE_NAME, array(
			self::COLUMN_NAME => $username,
			self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
		));
	}

	public function register($username, $password){
		$row = $this->database->query('SELECT * FROM %n WHERE %n = %s', self::TABLE_NAME, self::COLUMN_NAME, $username)->fetch();
		if($row){
			return 1;
		}else{
			$this->add($username, $password);
			return 0;
		}
	}

}
