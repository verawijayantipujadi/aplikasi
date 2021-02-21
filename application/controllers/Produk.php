<?php 
class Produk extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Produk_model');
		$model = $this->Produk_model;
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function index(){
		$this->read();
		
	}
	
	public function read(){
		$this->load->model('Produk_model');
		$model = $this->Produk_model;
		$rows = $model->read();
		$this->load->view('headerview');
		$this->load->view('contentview', ['rows'=>$rows]);
		$this->load->view('footerview');
	}
	
	public function create(){
		$this->load->model('Produk_model');
		$model = $this->Produk_model;
		
		if(isset($_POST['btnSubmit'])){
			$pesanError = ['required' => '<span style="color:red;">wajib di isi</span>'];
			$this->form_validation->set_rules('kode_produk',$model->labels['kode_produk'], 'required', $pesanError);
			$this->form_validation->set_rules('nama_produk',$model->labels['nama_produk'], 'required', $pesanError);
			$this->form_validation->set_rules('merek_produk',$model->labels['merek_produk'], 'required', $pesanError);
			$this->form_validation->set_rules('kategori',$model->labels['kategori'], 'required', $pesanError);
			$this->form_validation->set_rules('harga',$model->labels['harga'], 'required', $pesanError);
			
			if($this->form_validation->run() == TRUE){
				$model->kode_produk = $_POST['kode_produk'];
				$model->nama_produk = $_POST['nama_produk'];
				$model->merek_produk = $_POST['merek_produk'];
				$model->kategori = $_POST['kategori'];
				$model->harga = $_POST['harga'];
				
				$model->insert();
				$rows = $model->read();
				$this->load->view('headerview');
				$this->load->view('contentview', ['rows'=>$rows]);
				$this->load->view('footerview');
			}else{
				$this->load->view('add_new_form_view',['model'=>$model]);
			}
			
			
		}else if(isset($_POST['btnShow'])){
			$rows = $model->read();
			$this->load->view('headerview');
			$this->load->view('contentview', ['rows'=>$rows]);
			$this->load->view('footerview');
		}else{
			$this->load->view('add_new_form_view',['model'=>$model]);
		}
	}
	
	public function update($id){
		$this->load->model('Produk_model');
		$model = $this->Produk_model;
		if(isset($_POST['btnSubmit'])){
			$model->kode_produk = $_POST['kode_produk'];
			$model->nama_produk = $_POST['nama_produk'];
			$model->merek_produk = $_POST['merek_produk'];
			$model->kategori = $_POST['kategori'];
			$model->harga = $_POST['harga'];
			$model->update();
			redirect('produk');
		}else{
			//$respon=new stdClass();
			$query = $this->db->query("SELECT * FROM produk WHERE kode_produk='$id'");
			foreach ($query->result() as $row){
				$model->kode_produk = $row->kode_produk;
				$model->nama_produk = $row->nama_produk;
				$model->merek_produk = $row->merek_produk;
				$model->kategori = $row->kategori;
				$model->harga = $row->harga;
				$this->load->view('edit_form_view',['model'=>$model]);
			}
			
		}
	}
	
	public function deletes($id){
		$this->load->model('Produk_model');
		$model = $this->Produk_model;
		$kode_produk = array('kode_produk'=>$id);
		$model->deletes($kode_produk);
		redirect('produk');
		
	}
	
}