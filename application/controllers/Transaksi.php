<?php

class Transaksi extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Transaksi_model', 'm');
        $this->load->model('Hijab_model', 'b');
    }
    function index(){ //menampilkan data yg ada di database
       /* $this->load->view('template/content',[
            'content'=>$this->load->view('transaksi_list', [
                'data' =>$this->m->get()
            ],true)
        ]);*/
            $data = array(
            'content' => 'transaksi_list',
            'data' => $this->m->get()
        );
        $this->load->view('template/content',$data);
    }
    
    function form(){ //load form dan menyimpan data baru
            $data = array(
            'content' => 'transaksi_form',
            'hijab'=>  $this->b->get()
        );
        $this->load->view('template/content', $data);
    }
    
    function edit($kode_trans){
         $data = array(
        'content' => 'transaksi_form',
         'kode_lama' => $kode_trans,
         'data' => $this->m->tampil($kode_trans)
        );
        $this->load->view('template/content', $data);
        }

    
    function save(){
        unset($_POST['kode_lama']); //untuk menghapus sebiah variabel
        $query = $this->db->query("SELECT* FROM hijab WHERE kode_hijab = '".$_POST['kode_hijab']."'");
        $row = $query->row_array();
        if(isset($row)){
        $_POST['harga'] = $row['harga'];
        $P_POST['jenis'] = $row['jenis'];
        }
        $_POST['total'] = $_POST['harga']*$_POST['jumlah'];
        $this->m->insert($this->input->post());
        redirect('transaksi');
    }
    function update(){
        $kode_lama = $this->input->post('kode_trans');
        unset($_POST['kode_lama']);
        $this->m->update($kode_lama, $this->input->post());
        redirect('transaksi');
    }
    
    function delet($kode_trans) {
        $this->m->delet($kode_trans);
        redirect('transaksi');
    }
}
