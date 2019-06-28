<?php 
if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Server extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_data');
	}

	/*public function  */

	public function booked1(){
		$data['book'] = $this->M_data->view_b();
		$this->load->view('booked1',$data);
	}

	public function booked(){
		$data['book'] = $this->M_data->view_b();
		$this->load->view('booked',$data);
	}

	public function login1(){
		$this->load->view('login1');
	}

	public function login2(){
		$this->load->view('login2');
	}

	public function admin(){
		$data['images'] = $this->M_data->get_images();
		$data['title'] = $this->M_data->view();
		$data['mhw'] = $this->M_data->view_t();
		$this ->load->view('admin',$data);
	}

	public function user(){
		$data['title'] = $this->M_data->view();
		$data['images'] = $this->M_data->get_images();
		$data['mhw'] = $this->M_data->view_t();
		$this ->load->view('user',$data);
	}

	public function cinema(){
		$data['title'] = $this->M_data->view();
		$data['images'] = $this->M_data->get_images();
		$data['mhw'] = $this->M_data->view_t();
		$this ->load->view('cinema',$data);
	}

	public function tambah(){
		if($this->input->post('submit')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('image_name', 'Image', 'required');
          if ($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048000'; // max size in KB
            $config['max_width'] = '20000'; //max resolution width
            $config['max_height'] = '20000';  //max resolution height
            // load CI libarary called upload
            $this->load->library('upload', $config);
            // body of if clause will be executed when image uploading is failed
            if(!$this->upload->do_upload()){
            $errors = array('error' => $this->upload->display_errors());
            // This image is uploaded by deafult if the selected image in not uploaded
            $image = 'no_image.png';    
            }
            // body of else clause will be executed when image uploading is succeeded
            else{
            $data = array('upload_data' => $this->upload->data());
            $image = $_FILES['userfile']['name'];  //name must be userfile
    
            }
            $this->M_data->save($image);
            $this->session->set_flashdata('success','Image stored');
			redirect('Server/admin');
          	}
		}

		$this->load->view('form_tambah'); 
	}

	public function ubah($id){
		if($this->input->post('submit'))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('image_name', 'Image', 'required');
          if ($this->form_validation->run() == TRUE){
            $config['upload_path'] = './assets/images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048000'; // max size in KB
            $config['max_width'] = '20000'; //max resolution width
            $config['max_height'] = '20000';  //max resolution height
            // load CI libarary called upload
            $this->load->library('upload', $config);
            // body of if clause will be executed when image uploading is failed
            if(!$this->upload->do_upload()){
            $errors = array('error' => $this->upload->display_errors());
            // This image is uploaded by deafult if the selected image in not uploaded
            $image = 'no_image.png';    
            }
            // body of else clause will be executed when image uploading is succeeded
            else{
            $data = array('upload_data' => $this->upload->data());
            $image = $_FILES['userfile']['name'];  //name must be userfile
    
            }
            $this->M_data->edit($image,$id);
            $this->session->set_flashdata('success','Image stored');
			redirect('Server/admin');
          	}
			else
			{
				$data = array (
	    			'errors' => validation_errors()
	    		);	
	    		$this->session->set_flashdata($data);
			}
		}

		$dato['title'] = $this->M_data->view_by($id);
		$this->load->view('form_ubah',$dato);
	}


	public function hapus($id){
		$this->M_data->delete($id);

		redirect('Server/admin');
	}

	public function hapus_b($id){
		$this->M_data->delete_b($id);

		redirect('Server/booked');
	}
	
}
