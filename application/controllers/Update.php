<?php

class Update extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('login_Model');
    }

    public function index(){
    $param = [
      'josss' => 'halaman naga'
    ];
		$this->load->view('Admin/index', $param);
    }

    public function login(){
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $table = "tb_user";
      $where = [
        'email' => $email,
        'password' => $password
      ];
      $tes = $this->db->get_where($table, ['email'=>$email])->row();
      $cek = $this->login_Model->validasi($table, $where)->num_rows();
      if($cek > 0){
        $data_session = [
          'nama' => $tes->nama,
          'status' => "login"
        ];
        $this->session->set_userdata($data_session);
        echo 1;
      }else {
        echo 2;
      }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('update');
    }
} 