<?php

class Dashboard_model extends CI_Model{
    // =============== || untuk banner || =================
    public function get_banner($table){
        return $this->db->get($table)->result();
    }

    public function edit_ban($tb, $arrayku){
        $this->db->where('id_banner', $arrayku['id_banner']);
        $this->db->update($tb, $arrayku);
    }

    public function simpan_banner($tb, $arrayku){
        return $this->db->insert($tb, $arrayku);
    }

    // ============= || untuk fitur || ===============
    public function get_fitur($table){
        return $this->db->get($table)->result();
    }

    public function edit_fit($tb, $arrayku){
        $this->db->where('id_fitur', $arrayku['id_fitur']);
        $this->db->update($tb, $arrayku);
    }

    public function simpan_fitur($tb, $arrayku){
        return $this->db->insert($tb, $arrayku);
    }

    // ================ || untuk showcase || ================
    public function get_showcase($table){
        return $this->db->get($table)->result();
    }

    public function simpan_showcase($tb, $arrayku){
        return $this->db->insert($tb, $arrayku);
    }

    public function edit_show($table, $data){
        $this->db->where('id_showcase', $data['id_showcase']);
        $this->db->update($table, $data);
    }    

// ========================= untuk listing ========================
    public function get_listing($table){
        return $this->db->get($table)->result();
    }

    public function simpan_listing($tb, $arrayku){
        return $this->db->insert($tb, $arrayku);
    }

    public function edit_list($table, $data){
        $this->db->where('id_listing', $data['id_listing']);
        $this->db->update($table, $data);
    }
// ========= untuk pengelola =============
    public function get_pengelola($table){
        return $this->db->get($table)->result();
    }

    public function simpan_pengelola($tb, $arrayku){
        return $this->db->insert($tb, $arrayku);
    }

    public function edit_pengelola($table, $data){
        $this->db->where('id_pengelola', $data['id_pengelola']);
        $this->db->update($table, $data);
    }
// ========= untuk pengelola =============
public function get_admin($table){
    return $this->db->get($table)->result();
}

public function simpan_admin($tb, $arrayku){
    return $this->db->insert($tb, $arrayku);
}

public function edit_admin($table, $data){
    $this->db->where('id_user', $data['id_user']);
    $this->db->update($table, $data);
}
}