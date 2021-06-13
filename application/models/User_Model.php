<?php

class User_Model extends CI_Model {

    public function daftarUser($data) {
        $this->db->insert('users', $data);
        return $this->db->affected_rows();
    }

    public function getUserEmail($email) {
        $query = $this->db->get_where('users', ['email' => $email])->row_array();
        return $query;
    }
    
}

?>