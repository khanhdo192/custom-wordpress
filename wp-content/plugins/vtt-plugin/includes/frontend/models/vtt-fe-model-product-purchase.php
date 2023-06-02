<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Post types Class.
 */
class VTT_FeModelProductPurchase {

	private static $_instance = null;

	private $table = 'vtt_product_purchases';

	private $query = null;

	// Private methods cannot be called
	private function __construct() {
		$this->query = VTT_Query::instance();
		$this->connection();
	}
	
	// Private methods cannot be called
	private function __clone() {}

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function hasPurchase(string $_where = '', $value){
		$query = $this->query;
		$query->setName($this->table);
		$query->setSelect('COUNT(id)');
		$query->setWhere($_where, $value);
		return $query->getCount();
	}

	public function create(array $data = []) {
		$query = $this->query;
		$query->setName($this->table);
		return $query->theCreate($data);
	}

	private function connection(){
		$this->query->setName($this->table);
		$this->query->hasTable();
	}
}