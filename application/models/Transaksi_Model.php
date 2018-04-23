<?php

class Transaksi_model extends CI_Model{
    function get(){
             $sql = $this->db->query("SELECT t.*,b.nama_hijab FROM transaksi t, hijab b WHERE t.kode_hijab=b.kode_hijab ");
             return $sql->result_array();
        }
        function insert($data){
            return $this->db->insert('transaksi', $data);
        }
        
        function delet($kode_trans){
            $this->db->where(array('kode_trans' => $kode_trans)) ->delete('transaksi');
        }
        
        function tampil($kode){
           return $this->db->where(['no_trans'])->get('transaksi') -> row_array();
    
        }
        function update($kode_trans, $data){
            $this->db
                    ->where(array('kode_trans'=> $kode_trans))
                    ->update('kode_trans',$data);
        }
    
}
