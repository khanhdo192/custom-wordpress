<?php
/**
 * @Author	HaiNM - VTT - BreadnTea
 * @Mail	nguyenminhhai@breadntea.vn
 */

if (!defined('ABSPATH')) {
	exit;
}

class VTT_BeModelProductPurchase {

	public static $_instance = null;

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
	
	public function getPurchases($_limit=0, $_offset=0) {
		$query = $this->query;
		$query->setName($this->table);
		$query->setSelect('id, type, name, email, phone, created_at');
		$query->setOrder('created_at DESC');
		$query->setLimit($_limit);
		$query->setOffset($_offset);
		return $query->getList();
	}
	
	public function countPurchase() {
		$query = $this->query;
		$query->setName($this->table);
		$query->setSelect('COUNT(id)');
		return $query->getCount();
	}
	
	public function detailPurchase($_id=0) {
		$query = $this->query;
		$query->setName($this->table);
		$query->setSelect('*');
		$query->setWhere('id',$_id);
		return $query->getDetail();
	}
	
	private function connection(){
		$this->query->setName($this->table);
		$this->query->hasTable();
	}
}