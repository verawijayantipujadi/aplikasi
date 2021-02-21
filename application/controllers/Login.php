<?php 
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$model = $this->User_model;
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index(){
		$this->load->model('User_model');
		$model = $this->User_model;
		if(isset($_POST['btnSubmit'])){
			//mengisi nilai ke dalam atribut model
			$model->username = $_POST['username'];
			$model->password = $_POST['password'];
			
			if($model->authenticate() == TRUE){
				$this->session->set_userdata('users', $model->username);
				$this->load->view('homeview',['model'=>$model]);
			}else{
				redirect('http://localhost/app/index.php/login');
			}
		}else if(isset($_POST['btnRegister'])){
			
			$this->load->view('register_view', ['model'=>$model]);
			$model->username = $_POST['username'];
			$model->password = $_POST['password'];
			if($model->username!=null && $model->password!=null){
				//mendaftarkan user
				$model->insert();
			}
			
			
		}else{
			$this->load->view('login_form_view', ['model'=>$model]);
		}
	}
	
	public function logout(){
		$this->load->model('User_model');
		$model = $this->User_model;
		if($this->session->has_userdata('users')){
			$this->session->sess_destroy();
			$this->load->view('login_form_view', ['model'=>$model]);
		}
	}
}