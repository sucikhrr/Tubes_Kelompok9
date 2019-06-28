<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/Tubes/index.php";//"http://192.168.43.12/rest_api/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');

		$this->load->model('clients_model');
	}

	public function admin()
	{
		$this->load->view('admin/admin');
		
	}
	public function about()
	{
		$this->load->view('admin/about');
		
	}
	public function artikel()
	{
		$this->load->view('admin/artikel');
		
	}
	public function kontak()
	{
		$this->load->view('admin/kontak');
		
	}

	public function list()
	{
		$data['mahasiswa']=json_decode($this->curl->simple_get($this->API.'/api'));
		$data['time']=json_decode($this->curl->simple_get($this->API.'/time'));
		$this->load->view('admin/list',$data);
	}

	public function login()
	    {
	    	//$this->load->view('Client/login');
	    	if(isset($_POST['submit']))
	    	{
	    		//echo"proses data";
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$hasil = $this->clients_model->client_login($username,$password);

				if($hasil == 1)
				{
					$this->session->set_userdata(array('status_login'=>'oke'));
					redirect('admin/admin');
				}	

				else
				{
					redirect('admin/login');
				}
		    }

	    	else
	    	{
	    		$this->load->view('admin/login');
	    	}
	    }

	    public function logout()
	    {
	    	//session_destroy();
	    	$this->session->sess_destroy();
	    	redirect('admin/login');
	    }



}

?>