<?php
class M_login extends CI_Model {

    public function login($nim, $h_pass) {
        $this->db->where('nim', $nim);
        $this->db->where('pass', $h_pass);
        $query = $this->db->get('dt_admin');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}