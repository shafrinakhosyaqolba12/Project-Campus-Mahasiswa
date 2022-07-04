<?php 
Class mahasiswa_model extends CI_Model { 
    public function tampilData(){
        $sql=$this->db->get('mahasiswa');
        return $sql->result();
    }
}
