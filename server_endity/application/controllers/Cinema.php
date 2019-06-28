<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;

class Cinema extends REST_Controller{
	function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}
	function index_get(){
		$id = $this->get('id');
		if($id==''){
			$cinema=$this->db->get('cinema')->result();
		}else{
			$this->db->where('id', $id);
			$cinema=$this->db->get('cinema')->result();	
		}
		$this->response($cinema, 200);
	}
	function index_post() {
		$data = array(
				'jam_id'=>$this->post('jam_id'),
				'seat_id'=>$this->post('seat_id'),
				'judul_cinema'=>$this->post('judul_cinema'));
		$insert = $this->db->insert('cinema', $data);
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
				'cinema'	=> $this->put('cinema'));
		$this->db->where('id', $id);
		$update = $this->db->update('cinema', $data);
		if($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}*/
}
?>