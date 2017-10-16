<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 10/16/17
 * Time: 3:16 PM
 */

class phpBom {


	/**
	 * @var null
	 */
	protected static $instance = null;
	private $phpBom = null;
	private $db = [
		'user'     => 'root',
		'password' => 'root',
		'db'       => 'app_phpbom',
		'url'      => 'www.wordpress.dev/app/phpbom',
		'host'     => 'localhost',
		'port'     => 3306,
	];

	private function __construct() {

	}

	/**
	 * @return null
	 */
	public static function getInstance() {

		if ( static::$instance === null ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	/**
	 *
	 */
	protected function init() {

	}

	protected function up() {

	}

	protected function down() {

	}

	protected function mysql_connect() {
		$user     = 'root';
		$password = 'root';
		$db       = 'inventory';
		$host     = 'localhost';
		$port     = 3306;

		$link    = mysqli_init();
		$success = mysqli_real_connect( $link, $host, $user, $password, $db, $port );
	}


	protected function mysql_delete() {

	}

}

$phpbom = phpBom::getInstance();
