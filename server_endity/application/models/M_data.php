<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
 
class M_data extends CI_Model{

	public function view(){
		return $this->db->get('title')->result();
	}

	public function view_by($id){
		$this->db->where('id',$id);
		return $this->db->get('title')->row();
	}

	public function view_b(){
		return $this->db->get('cinema')->result();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('image_name','title','required|max_length[50]');
			$this->form_validation->set_rules('input_harga','harga','required');
			$this->form_validation->set_rules('input_durasi','durasi','required');
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');	
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}

	public function save($image)
	{
		$data = array(
			'title' => $this->input->post('image_name'),
			'harga' => $this->input->post('input_harga'),
			'durasi' => $this->input->post('input_durasi'),
   			'image' => $image
		);

		$this->db->insert('title',$data);
	}

	public function edit($image,$id){
		$data = array(
			"title" =>$this->input->post('image_name'),
			"harga" =>$this->input->post('input_harga'),
			"durasi" =>$this->input->post('input_durasi'),
			"image"=>$image
		);

		$this->db->where('id',$id);
		$this->db->update('title',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('title');
	}

	public function delete_b($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('cinema');
	}
 	//get images from database
 	public function get_images()
 	{
  	$this->db->select('*');
  	$this->db->order_by('id');
  	$query = $this->db->get('title');
  	return $query->result();
 	}

 	public function view_t(){
		return $this->db->get('time')->result();
	}
}