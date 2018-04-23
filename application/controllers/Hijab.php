<?php

class Hijab extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Hijab_model', 'm');
        
    }

    function index() {
        $data = array(
            'content' => 'hijab_list',
            'hijab' => $this->m->get()
        );
        $this->load->view('template/content', $data);
    }

    function form() {
        $data = array(
            'content' => 'hijab_form'
        );
        $this->load->view('template/content', $data);
        
    }
    
    function laporan(){
        $data = array(
           'content' => 'laporan_hijab',
            'hijab' =>  $this->m->get()
        );
        $this->load->view('template/content', $data);
    }

    function edit($kode_hijab) {
        $data = array(
            'content' => 'hijab_form', 
             'kode_lama' => $kode_hijab,
            'data' => $this->m->find($kode_hijab)
        );
        $this->load->view('template/content', $data);
    }

    function save() {
//        unset($_POST['kode_lama']);
        $this->m->insert($this->input->post());
        redirect('hijab');
    }

    function update() {
        $kode_lama = $this->input->post('kode_hijab');
        unset($_POST['kode_lama']);
        $this->m->update($kode_lama, $this->input->post());
        redirect('hijab');
    }

    function delet($kode_hijab) {
        $this->m->delet($kode_hijab);
        redirect('hijab');
    }
}
