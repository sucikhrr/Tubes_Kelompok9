<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Image_model');
    }
    public function index()
    {
      $this->load->view('admin');
    }
    // add image from form
    public function add_image()
    {
    // CI form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('image_name', 'Image', 'required');
    if ($this->form_validation->run() == FALSE){
    $this->load->view('image_upload');
    }
    else {
    // configurations from upload library
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
    $this->Image_model->insert_image($image);
    $this->session->set_flashdata('success','Image stored');
    redirect('Image');
    }
    }
    // view images fetched from database
    public function view_images()
    {
    $data['images'] = $this->Image_model->get_images();
    $this->load->view('image_view', $data);
    }
}