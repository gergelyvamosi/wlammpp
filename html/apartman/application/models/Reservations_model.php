<?php
class Reservations_model extends CI_Model {

	public function insert_reservation() {    
		$date = date('Y-m-d H:i:s');
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'message' => $this->input->post('message'),
			'checkin' => $this->input->post('checkin'),
			'checkout' => $this->input->post('checkout'),
			'apartment_id' => 1,
			'created_at' => $date,
			'updated_at' => $date,
			'locale' => $this->session->userdata('site_lang')
		);

		return $this->db->insert('reservations', $data);
	}

	public function get_reservations() {
		$this->db->select()->from('reservations')->order_by('created_at', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_reservation($id) {
		$query = $this->db->get_where('reservations', array('id' => $id));
		return $query->result();
	}

	public function approve_reservation($id) {
		$date = date('Y-m-d H:i:s');
		$this->db->set('updated_at', $date);
		$this->db->set('approved', 1);
		$this->db->where('id', $id);
		$this->db->update('reservations');
	}

}
