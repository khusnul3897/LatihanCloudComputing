<?php

class Petugas_model extends CI_Model{
    function get(){
            return $this->db->get('petugas') ->result_array();
        }
        function insert($data){
            return $this->db->insert('petugas', $data);
        }
        
        function delet($kode_petugas){
            $this->db->where(array('kode_petugas' => $kode_petugas)) ->delete('petugas');
        }
        
        function find($kode_petugas){
            return $this->db
                    ->where(array('kode_petugas'))
                    ->get('petugas') ->row_array();
        }
        function update($kode_petugas, $data){
            $this->db
                    ->where(array('kode_petugas' => $kode_petugas))
                    ->update('petugas', $data);
        }
    
}
