<?php
class Auth_model extends CI_Model {
 public function login(){
  $query = $this->db->get_where('users', array('name' => $this->input->post('username'), 'password' => $this->input->post('password'))); 
  $result = $query->result();
  return (empty($result)?false:(empty($result[0])?false:true));
 }
}
