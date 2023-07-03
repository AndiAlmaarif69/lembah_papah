<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
	}
// !!================== start untuk banner frontend ============!!
	public function index()
	{
		$table_banner = 'tb_banner';
		$table_fitur = 'tb_fitur';
		$table_showcase = 'tb_showcase';
		$table_listing = 'tb_listing';
        $data = [
            'title'=> 'Halaman home',
            'rows'=> $this->Dashboard_model->get_banner($table_banner),
			'anekas'=> $this->Dashboard_model->get_fitur($table_fitur),
			'showcases'=> $this->Dashboard_model->get_showcase($table_showcase),
			'listings'=> $this->Dashboard_model->get_listing($table_listing)
        ];
        $this->load->view('travel', $data);
	}

	public function aneka($id){
		$table_fitur = 'tb_fitur';
		$table_fitur = 'tb_fitur';
        $data = [
            'title'=> 'aneka wisata',
			'row'=> $this->db->get_where($table_fitur, ['id_fitur'=>$id])->row(),
			'anekas'=> $this->Dashboard_model->get_fitur($table_fitur),
        ];
        $this->load->view('aneka', $data);
	}

	public function listing($id){
		$table_fitur = 'tb_fitur';
		$table_listing = 'tb_listing';
        $data = [
            'title'=> 'detail blog',
			'row'=> $this->db->get_where($table_listing, ['id_listing'=>$id])->row(),
			'anekas'=> $this->Dashboard_model->get_fitur($table_fitur),
        ];
        $this->load->view('blog_detail', $data);
	}

	public function blog(){
		$table_fitur = 'tb_fitur';
		$table_blog = 'tb_listing';
		$data = [
			'title' => 'halaman blog',
			'rows'=> $this->Dashboard_model->get_listing($table_blog),
			'anekas'=> $this->Dashboard_model->get_fitur($table_fitur),
		];
		$this->load->view('blog', $data);
	}

	public function profile() {
		$table_fitur = 'tb_fitur';
		$tb_pengelola = 'tb_pengelola';
		$data = [
			'title' => 'halaman profile',
			'anekas'=> $this->Dashboard_model->get_fitur($table_fitur),
			'pengelolas' => $this->Dashboard_model->get_pengelola($tb_pengelola)
		];
		$this->load->view('profile', $data);
	}

	public function contact() {
		$table_fitur = 'tb_fitur';
		$data = [
			'title' => 'halaman contact',
			'anekas'=> $this->Dashboard_model->get_fitur($table_fitur),
		];
		$this->load->view('contact', $data);
	}


}
