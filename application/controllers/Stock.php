<?php 
class Stock extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Stock_model');
		$model = $this->Stock_model;
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function index(){
		$this->read();
		
	}
	
	public function read(){
		$this->load->model('Stock_model');
		$model = $this->Stock_model;
		$rows = $model->read();
		$this->load->view('show_stock_view', ['rows'=>$rows]);
	}
	
	public function create(){
		$this->load->model('Stock_model');
		$model = $this->Stock_model;
		
		if(isset($_POST['btnSubmit'])){
			$model->kode_stok = $_POST['kode_stok'];
			$model->kode_produk = $_POST['kode_produk'];
			$model->stok = $_POST['stok'];
			$model->insert();
			$rows = $model->read();
			
			$this->load->view('show_stock_view', ['rows'=>$rows]);
		}else if(isset($_POST['btnShow'])){
			$rows = $model->read();
			$this->load->view('show_stock_view', ['rows'=>$rows]);
		}else{
			$rows = $model->get_kode_product();
			//$model->kode_produk = $rows;
			$array = $model->all_kode;
			foreach($array as $key => $value){
				$model->kode_produk = print_r($value);
			}
			$this->load->view('add_stok_form_view',['model'=>$model]);
		}
	}
	
	public function update($id){
		$this->load->model('Stock_model');
		$model = $this->Stock_model;
		if(isset($_POST['btnSubmit'])){
			$model->kode_stok = $_POST['kode_stok'];
			$model->kode_produk = $_POST['kode_produk'];
			$model->stok = $_POST['stok'];
			$model->update();
			redirect('stock');
		}else if(isset($_POST['btnShow'])){
			$rows = $model->read();
			$this->load->view('show_stock_view', ['rows'=>$rows]);
		}else{
			//$respon=new stdClass();
			$query = $this->db->query("SELECT * FROM stock WHERE kode_stok='$id'");
			foreach ($query->result() as $row){
				$model->kode_stok = $row->kode_stok;
				$model->kode_produk = $row->kode_produk;
				$model->stok = $row->stok_produk;
				$this->load->view('edit_stok_form_view',['model'=>$model]);
			}
			
		}
	}
	
}
