<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthController extends CI_Controller {
  public function __construct(){
    parent::__construct();
  }
  public function is_logged($referer){
    $user = $this->session->userdata('user');
    if (empty($user)) {
      // not authenticated
      $this->session->set_userdata('login_url', $referer);
      redirect(base_url('index.php/AuthController/login_form'));
    }
  }
  public function login_form(){
    $data = array();

    $data['auth_errors'] = '';
    if (!empty($this->session->flashdata('auth_errors'))) {
      $data['auth_errors'] = $this->session->flashdata('auth_errors');
    }

    $this->template->set('title', 'Login');
    $this->template->load('menu_layout', 'contents', 'login', $data);
  }
  public function login(){
   $this->load->model('auth_model');

   $success = $this->auth_model->login(); 

   if ($success) {
     $this->session->set_userdata('user', $this->input->post('username'));
     redirect($this->session->userdata('login_url'));
   } else {
     // login fail
     $this->session->set_flashdata('auth_errors', 'Login failed.');
     redirect($_SERVER['HTTP_REFERER']);
   }
  }
  public function logout(){
    $this->session->set_userdata('login_url', null);
    $this->session->set_userdata('user', null);
  }
}
