<?php

class Member_model extends CI_Model{
    function get(){
            return $this->db->get('member') ->result_array();
        }
        function insert($data){
            return $this->db->insert('member', $data);
        }
        
        function delet($id_member){
            $this->db->where(array('id_member' => $id_member)) ->delete('member');
        }
        
        function find($id_member){
            return $this->db
                    ->where(array('id_member'=>$id_member))
                    ->get('member') ->row_array();
//            return $this->db->get_where('member', array('id_member'=>$id_member))->row_array();
        }
        function update($id_member, $data){
            $this->db
                    ->where(array('id_member' => $id_member))
                    ->update('member', $data);
        }
    
}
