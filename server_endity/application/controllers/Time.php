<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;

class Time extends REST_Controller{
	function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}
	function index_get(){
		$id = $this->get('id');
		if($id==''){
			$time=$this->db->get('time')->result();
		}else{
			$this->db->where('id', $id);
			$time=$this->db->get('time')->result();	
		}
		$this->response($time, 200);
	}
	function index_post() {
		$data = array(
				'id'	=> $this->post('id'),
				'time'	=> $this->post('time'));
		$insert = $this->db->insert('time', $data);
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
		$update = $this->db->update('time', $data);
		if($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}*/
}
?>