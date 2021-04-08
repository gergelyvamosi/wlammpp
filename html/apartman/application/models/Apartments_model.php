<?php
class Apartments_model extends CI_Model {

public function get_last_ten_entries()
{
$query = $this->db->get('apartments', 10);
return $query->result();
}

}
