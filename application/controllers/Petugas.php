<?php

class Petugas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Petugas_model', 'm');
    }

    function index() {
        $data = array(
            'content' => 'petugas_list',
            'petugas' => $this->m->get()
        );
        $this->load->view('template/content', $data);
    }

    function form() {
        $data = array(
            'content' => 'petugas_form'
        );
        $this->load->view('template/content', $data);
        
    }
    

    function edit($kode_petugas) {
        $data = array(
            'content' => 'petugas_form', 
             'kode_lama' => $kode_petugas,
            'data' => $this->m->find($kode_petugas)
        );
        $this->load->view('template/content', $data);
    }

    function save() {
        unset($_POST['kode_lama']);
        $this->m->insert($this->input->post());
        redirect('petugas');
    }

    function update() {
        $kode_lama = $this->input->post('kode_petugas');
        unset($_POST['kode_lama']);
        $this->m->update($kode_lama, $this->input->post());
        redirect('petugas');
    }

    function delet($kode_petugas) {
        $this->m->delet($kode_petugas);
        redirect('petugas');
    }
}
