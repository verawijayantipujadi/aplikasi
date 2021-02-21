<?php
class Stock_model extends CI_Model{
	public $kode_stok;
	public $kode_produk;
	public $stok;
	public $all_kode;
	//array untuk menyimpan label dari masing-masing atribut
	public $labels = [] ;
	
	//konstruktor model
	public function __construct(){
		parent::__construct();
		$this->labels = $this->attribute_labels();
		$this->load->database();
		$this->load->helper('url');
		$this->all_kode = explode(',', $this->get_kode_product());
	}
	
	public function get_table_name(){
		return 'stock';
	}
	
	public function insert(){
		$this->db->query("INSERT INTO stock VALUES('$this->kode_stok','$this->kode_produk','$this->stok')");
	}
	
	public function read(){
		$query = $this->db->query("SELECT * FROM stock Order By kode_stok");
		return $query->result();
	}
	
	public function get_kode_product(){
		$query = $this->db->query("SELECT kode_produk FROM produk");
		return $query->row()->kode_produk;
	}
	
	//metode untuk menentukan label dari masing-masing atribut
	public function attribute_labels(){
		return[
			'kode_stok'=>'Kode Stock:',
			'kode_produk'=>'Kode Produk:',
			'stok'=>'Stok Produk:'
		];
	}
	
}