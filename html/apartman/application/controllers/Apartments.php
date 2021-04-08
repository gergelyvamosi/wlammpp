<?php
include APPPATH.'controllers/AuthController.php';
class Apartments extends AuthController {

        public function index()
        {
		//echo 'Helló, Világ!!';

                $this->load->model('apartments_model');

                $data['query'] = $this->apartments_model->get_last_ten_entries();

                //$this->load->view('apartments', $data);

		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'apartments', $data);

        }

	public function photos()
	{
		$data = array();

		$this->template->set('title', $this->lang->line('menu_photos'));
		$this->template->load('menu_layout', 'contents', 'photos', $data);
	}

	public function booking()
	{
		$data = array();
		$data['validation_errors'] = '';
		if (!empty($this->session->flashdata('validation_errors'))) {
			$data['validation_errors'] = $this->session->flashdata('validation_errors');
		}

		$this->template->set('title', $this->lang->line('menu_booking'));
		$this->template->load('menu_layout', 'contents', 'booking', $data);
	}

	public function book()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('checkin', 'Check-in', 'required');
		$this->form_validation->set_rules('checkout', 'Check-out', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('validation_errors', validation_errors());
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->load->model('reservations_model');
			$this->reservations_model->insert_reservation();

			$data = array();

			$this->template->set('title', $this->lang->line('menu_booking'));
			$this->template->load('menu_layout', 'contents', 'booking_accepted', $data);
		}
	}

	public function booking_ajax() {
		$data = array();

		$this->template->set('title', $this->lang->line('menu_booking'));
		$this->template->load('menu_layout', 'contents', 'booking_ajax', $data);

	}

	public function book_ajax() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('checkin', 'Check-in', 'required');
		$this->form_validation->set_rules('checkout', 'Check-out', 'required');

		if($this->form_validation->run() == FALSE) {
			echo validation_errors();
		} else {
			$this->load->model('reservations_model');
			$this->reservations_model->insert_reservation();
			echo "Thanks for booking!";
		}
	}

	public function admin() {

		// check if user is authenticated
		// config/config.php => $config['base_url'] = 'http://localhost/apartman/';
		$this->is_logged(base_url('index.php/apartments/admin'));
		
		$this->load->model('reservations_model');

                $data['query'] = $this->reservations_model->get_reservations();

		$this->template->set('title', 'Admin');
		$this->template->load('menu_layout', 'contents' , 'admin', $data);
	}

	public function admin_approve_ajax($id) {

		// check if user is authenticated
		$this->is_logged(base_url('index.php/apartments/admin'));

		$this->load->model('reservations_model');

                $this->reservations_model->approve_reservation($id);
                $data = $this->reservations_model->get_reservation($id)[0];

		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function contact() {
		$data = array();

		$this->template->set('title', $this->lang->line('menu_contact'));
		$this->template->load('menu_layout', 'contents', 'contact', $data);
	}

	public function send() {

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'utf-8';

		$this->email->initialize($config);

		$this->email->from($this->input->post('email'), $this->input->post('name'));
		// mail of administrator
		$this->email->to('gvamosi@localhost');
		$this->email->subject('Mail from booking site');
		$this->email->message($this->input->post('message'));

		$this->email->send();

		redirect(base_url('index.php/apartments/contact_sent'));
	}

	public function contact_sent() {
		$data = array();

		$this->template->set('title', $this->lang->line('menu_contact'));
		$this->template->load('menu_layout', 'contents', 'contact_sent', $data);
	}

}
