<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->API="http://localhost/Tubes/index.php";//"http://192.168.43.12/rest_api/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');

		$this->load->model('clients_model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('client/home');
		
	}
	public function about()
	{
		$this->load->view('client/about');
	}
	public function artikel()
	{
		$this->load->view('client/artikel');
	}
	public function kontak()
	{
		$this->load->view('client/kontak');
	}
	
	public function list()
	{
		$data['mahasiswa']=json_decode($this->curl->simple_get($this->API.'/api'));
		$data['time']=json_decode($this->curl->simple_get($this->API.'/time'));
		$this->load->view('client/list',$data);
	}

	public function seat()
	{
		$data['cinema']=json_decode($this->curl->simple_get($this->API.'/api'));
		$data['time']=json_decode($this->curl->simple_get($this->API.'/time'));
		$data['seat']=json_decode($this->curl->simple_get($this->API.'/seat'));
		
		//$query=$this->API->like('time', array('date'=>date('Y-m-d')));
			
		
			$this->load->view('client/seat',$data);
	}
	public function pay()
	{
		if(isset($_POST['submit'])){
			$data=array(
				'seat_id'=>$this->input->post('seat'),
				'judul_cinema'=>$this->input->post('judul'),
				'jam_id'=>$this->input->post('jam'));
			//var_dump($data); untuk menampilkan data ke database jika masuk
			$insert=$this->curl->simple_post($this->API.'/cinema', $data, array(CURLOPT_BUFFERSIZE=>10));
			if($insert)
			{
				$this->session->set_flashdata('hasil','Insert Data Berhasil');
			}else{
				echo "gagal";
				$this->session->set_flashdata('hasil','Insert Data Gagal');
			}
			//redirect('client/list');
		}
		$this->load->view('client/pay');	
	}

}
?>



	