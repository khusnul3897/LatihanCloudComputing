<?php

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Member_model', 'm');
    }

    function index() {
        $data = array(
            'content' => 'member_list',
            'member' => $this->m->get()
        );
        $this->load->view('template/content', $data);
    }

    function form() {
        $data = array(
            'content' => 'member_form'
        );
        $this->load->view('template/content', $data);
        
    }
    function laporan(){
        $data = array(
           'content' => 'laporan_member',
            'member' =>  $this->m->get()
        );
        $this->load->view('template/content', $data);
    }

    function edit($id_member) {
        $data = array(
            'content' => 'member_form', 
             'id_lama' => $id_member,
            'data' => $this->m->find($id_member)
        );
        $this->load->view('template/content', $data);
    }

    function save() {
        unset($_POST['id_lama']);
        $this->m->insert($this->input->post());
        redirect('member');
    }

    function update() {
        $id_lama = $this->input->post('id_member');
        unset($_POST['id_lama']);
        $this->m->update($id_lama, $this->input->post());
        redirect('member');
    }

    function delet($id_member) {
        $this->m->delet($id_member);
        redirect('member');
    }
}
