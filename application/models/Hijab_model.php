<?php

class Hijab_model extends CI_Model{
    function get(){
            return $this->db->get('hijab') ->result_array();
        }
        function insert($data){
            return $this->db->insert('hijab', $data);
        }
        
        function delet($kode_hijab){
            $this->db->where(array('kode_hijab' => $kode_hijab)) ->delete('hijab');
        }
        
        function find($kode_hijab){
//            return $this->db
//                    ->where(array('kode_hijab'=>$kode_hijab))
//                    ->get('hijab') ->row_array();
        return $this->db->get_where('hijab', array('kode'=>$kode_hijab))->row_array();
        }
        function update($kode_hijab, $data){
            $this->db
                    ->where(array('kode_hijab' => $kode_hijab))
                    ->update('hijab', $data);
        }
    
}
