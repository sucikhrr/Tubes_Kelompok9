<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("users",$where)->num_rows();
		$level = $this->M_login->cek_level($username,$password);
		if($cek > 0){
 
			$data_session = array(
				'no'=>$id,
				'nama' => $username,
				'level' => $level,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);

			echo "sukses";
 
		redirect("Server/login1"); 
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('login/index');
	}
}

