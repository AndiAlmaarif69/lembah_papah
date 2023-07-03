<?php

class Login_Model extends CI_Model {
    public function validasi($table, $where){
        return $this->db->get_where($table, $where);
    }
}

