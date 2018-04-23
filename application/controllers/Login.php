<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author STMIK-V-48
 */
class Login extends CI_Controller{
    function index() {
        $this->load->view('login_form');
    }
    
    function validasi() {
        $_POST['password'] = md5($_POST['password']); //dikonversikan dulu di md5 pada database
        $r = $this->db->where($this->input->post())->get('admin')->row_array();
        if (count($r) > 0) {
            $this->session->set_userdata('username', $r['username']);
            $this->session->set_userdata('nama', $r['nama']);
            redirect('member');
        } else {
            $this->session->set_flashdata('error', 'password salah'); //untuk pesan singkat/peringatan
            redirect('login');
        }  
    }
    
    function logout() {
        $this->session->unset_userdata('username', $r['username']);
        $this->session->unset_userdata('username', $r['username']);
        redirect('login');
    }

}
