<?php
class Produk_model extends CI_Model{
	public $kode_produk;
	public $nama_produk;
	public $merek_produk;
	public $kategori;
	public $harga;
	//array untuk menyimpan label dari masing-masing atribut
	public $labels = [] ;
	
	//konstruktor model
	public function __construct(){
		parent::__construct();
		$this->labels = $this->attribute_labels();
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function get_table_name(){
		return 'produk';
	}
	
	public function insert(){
		$this->db->insert($this->get_table_name(), $this);
	}
	
	public function update(){
		$this->db->query("UPDATE produk SET nama_produk='$this->nama_produk', merek_produk='$this->merek_produk', kategori='$this->kategori', 
			harga='$this->harga' WHERE kode_produk='$this->kode_produk'");
	}
	
	public function deletes($kode_produk){
		$this->db->delete('produk', $kode_produk);
	}
	
	public function read(){
		$query = $this->db->query("SELECT * FROM produk Order By kode_produk");
		return $query->result();
	}
	
	//metode untuk menentukan label dari masing-masing atribut
	public function attribute_labels(){
		return[
			'kode_produk'=>'Kode Produk:',
			'nama_produk'=>'Nama Produk:',
			'merek_produk'=>'Merek Produk:',
			'kategori'=>'Kategori:',
			'harga'=>'Harga:'
		];
	}
}