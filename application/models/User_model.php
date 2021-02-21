<?php
class User_model extends CI_Model{
	public $username;
	public $password;
	//array untuk menyimpan label dari masing-masing atribut
	public $labels = [];
	
	//konstruktor model
	public function __construct(){
		parent::__construct();
		$this->labels = $this->attribute_labels();
		$this->load->database();
		$this->load->library('session');
		$this->load->library('encryption');
	}
	
	public function insert(){
		$username = $this->username;
		$password = md5($this->password);
		$query = $this->db->query("INSERT INTO users VALUES('','$username','$password')");
		if($query=true){
			return 'berhasil menambahkan user';
		}else{
			return null;
		}
	}
	
	//metode untuk otentikasi username
	public function authenticate(){
		if(isset($this->username) && isset($this->password)){
			$username = $this->username;
			$password = $this->password;
			$query = $this->db->query("SELECT COUNT(*) AS cnt FROM users WHERE username='$username' AND password=md5('$password')LIMIT 1");
			$row = $query->row_array();
			return $row['cnt'] == 1;
		}else{
			return $this->password;
		}
	}
	
	//metode untuk menentukan label dari masing-masing atribut
	public function attribute_labels(){
		return[
			'username'=>'Username:',
			'password'=>'Password:'
		];
	}
}