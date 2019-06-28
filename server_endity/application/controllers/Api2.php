<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;

class Api extends REST_Controller{
	function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}
	function index_get(){
		$id = $this->get('id');
		if($id==''){
			$seat=$this->db->get('seat')->result();
		}else{
			$this->db->where('id', $id);
			$seat=$this->db->get('seat')->result();	
		}
		$this->response($seat, 200);
	}
	function index_post() {
		$data = array(
				'id'	=> $this->post('id'),
				'title'	=> $this->post('title'),
				'status'=> $this->post('seat'));
		$insert = $this->db->insert('seat', $data);
		if ($insert) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	/*function index_put(){
		$nis = $this->put('nis');
		$data = array(
				'id'	=> $this->put('id'),
				'title'	=> $this->put('title'));
		$this->db->where('id', $id);
		$update = $this->db->update('seat', $data);
		if($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}*/
}
?>