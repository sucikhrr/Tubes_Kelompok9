<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Image_model extends CI_Model {
 public function insert_image($image)
 {
  // assign the data to an array
  $data = array(
   'id' => $this->input->post('id'),
   'image' => $image
  );
  //insert image to the database
  $this->db->insert('title', $data);
 }
 //get images from database
 public function get_images()
 {
  $this->db->select('*');
  $this->db->order_by('id');
  $query = $this->db->get('title');
  return $query->result();
 }
}