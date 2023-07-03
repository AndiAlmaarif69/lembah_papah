<?php
ob_start();
class Dashboard extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('Dashboard_model');
    if($this->session->userdata('status') != 'login'){
        redirect('update');
    }
}
    public function index(){
        $data = [
            'title'=> 'halamaan dashboard',
            'corousal' => $this->db->get('tb_banner')->num_rows(),
            'aneka' => $this->db->get('tb_banner')->num_rows(),
            'fitur' => $this->db->get('tb_fitur')->num_rows(),
            'galery' => $this->db->get('tb_showcase')->num_rows(),
            'blog' => $this->db->get('tb_listing')->num_rows(),
            'pengelola' => $this->db->get('tb_pengelola')->num_rows(),
            'admin' => $this->db->get('tb_user')->num_rows(),
        ];
        $this->load->view('Admin/header', $data);
		$this->load->view('Admin/dashboard', $data);
		$this->load->view('Admin/footer');
    }

// !!=================== Start untuk banner ===================!!
    public function banner () {
        $table = 'tb_banner';
        $data = [
            'title' => 'Halaman Corousel',
            'rows' => $this->Dashboard_model->get_banner($table)
        ];
        $this->load->view('Admin/header', $data);
		$this->load->view('Admin/banner', $data);
    }

    public function insert_banner(){
        $bncp1 = $this->input->post('bncp-1');
        $bncp2 = $this->input->post('bncp-2');
        $bncp3 = $this->input->post('bncp-3');
        $foto = $_FILES['foto_banner'];
        if($foto != '' && $bncp1 == '' && $bncp2 == '' && $bncp3 == ''){
            $config['upload_path']      ='./img/banner/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_banner')) {
                $data = [
                    'cp_1' => 'default',
                    'cp_2' => 'default',
                    'cp_3' => 'default',
                    'foto' => 'default.png'
                ];
                $table = 'tb_banner';
                $cek = $this->Dashboard_model->simpan_banner($table ,$data);
                if($cek > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('banner'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('banner'));
                }
            } else {
                $foto = $this->upload->data('file_name');
            }
            $data = [
                'cp_1' => 'default',
                'cp_2' => 'default',
                'cp_3' => 'default',
                'foto' => $foto
            ];
            $table = 'tb_banner';
            $cek = $this->Dashboard_model->simpan_banner($table ,$data);
            if($cek > 0){
                $this->session->set_flashdata('notif',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan</strong>
                <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
            );
                redirect(site_url('banner'));
            }else {
                $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                redirect(site_url('banner'));
            }
        }
        else{
            $config['upload_path']      ='./img/banner/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_banner')) {
                $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                redirect(site_url('banner'));
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = [
            'cp_1' => $bncp1,
            'cp_2' => $bncp2,
            'cp_3' => $bncp3,
            'foto' => $foto
        ];
        $table = 'tb_banner';
        $cek = $this->Dashboard_model->simpan_banner($table ,$data);
        if($cek > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>'
        );
            redirect(site_url('banner'));
        }else {
            $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
            redirect(site_url('banner'));
        }
    }

    // edit banner
    public function edit_banner(){
        $id_banner = $this->input->post('id_banner');
        $bncp1 = $this->input->post('bncp-1');
        $bncp2 = $this->input->post('bncp-2');
        $bncp3 = $this->input->post('bncp-3');
        $foto = $_FILES['foto_banner'];
        $table = 'tb_banner';
        if($foto = ''){
            
        }else{
            $config['upload_path']      ='./img/banner/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_banner')) {
                $query = $this->db->get_where($table, ['id_banner' => $id_banner])->row();
                $data = [
                    'id_banner' => $id_banner,
                    'cp_1' => $bncp1,
                    'cp_2' => $bncp2,
                    'cp_3' => $bncp3,
                    'foto' => $query->foto
                ];
                $this->Dashboard_model->edit_ban($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('banner'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data gagal diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('banner'));
                }
            } else {
                $foto = $this->db->get_where($table, ['id_banner' => $id_banner])->row();
                if($foto != 'default.png') {
                    unlink('img/banner/' .$foto->foto);
                }
                $foto = $this->upload->data('file_name');
                $data = [
                    'id_banner' => $id_banner,
                    'cp_1' => $bncp1,
                    'cp_2' => $bncp2,
                    'cp_3' => $bncp3,
                    'foto' => $foto
                ];
                
                $this->Dashboard_model->edit_ban($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('banner'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('banner'));
                }
            }
        }
        
    }

    public function delete_ban(){   
        $id_banner = $this->input->post('id_banner');
        $foto = $_FILES['foto_banner'];
        $table = 'tb_banner';

        $foto = $this->db->get_where($table, ['id_banner' => $id_banner])->row();
        if($foto != 'default.png') {
            unlink('img/banner/' .$foto->foto);
        }
        $this->db->delete('tb_banner', ['id_banner'=> $id_banner]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('banner'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal dihapus!!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('banner'));
        }
        
    }
//  !!============================== end untuk banner ===========================!!

//  !!============================== start fitur ==========================!!
    public function fitur () {
        $table = 'tb_fitur';
        $data = [
            'title' => 'Halaman Aneka',
            'rows' => $this->Dashboard_model->get_fitur($table)
        ];
        $this->load->view('Admin/header', $data);
		$this->load->view('Admin/fitur', $data);
    }

    public function insert_fitur (){
        $rating = $this->input->post('rating');
        $title = $this->input->post('title');
        $button = $this->input->post('button');
        $foto = $_FILES['foto_fitur'];
        if($foto != '' && $rating == '' && $title == '' && $button == ''){
            $config['upload_path']      ='./img/fitur/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_fitur')) {
                $data = [
                    'rating' => 'default',
                    'title' => 'default',
                    'button' => 'default',
                    'foto' => 'default.png'
                ];
                $table = 'tb_fitur';
                $cek = $this->Dashboard_model->simpan_fitur($table ,$data);
                if($cek > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('fitur'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('fitur'));
                }
            } else {
                $foto = $this->upload->data('file_name');
            }
            $data = [
                'rating' => 'default',
                'title' => 'default',
                'button' => 'default',
                'foto' => $foto
            ];
            $table = 'tb_fitur';
            $cek = $this->Dashboard_model->simpan_fitur($table ,$data);
            if($cek > 0){
                $this->session->set_flashdata('notif',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan</strong>
                <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
            );
                redirect(site_url('fitur'));
            }else {
                $this->session->set_flashdata('notif',
                '<div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div>
                  An example alert with an icon
                </div>'
            );
                redirect(site_url('fitur'));
            }
        }
        else{
            $config['upload_path']      ='./img/fitur/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_fitur')) {
                $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                redirect(site_url('fitur'));
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = [
            'rating' => $rating,
            'title' => $title,
            'button' => $button,
            'foto' => $foto
        ];
        $table = 'tb_fitur';
        $cek = $this->Dashboard_model->simpan_banner($table ,$data);
        if($cek > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>'
        );
            redirect(site_url('fitur'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div>
              An example alert with an icon
            </div>'
        );
            redirect(site_url('fitur'));
        }
    }

    public function edit_fit (){
        $id_fitur = $this->input->post('id_fitur');
        $rating = $this->input->post('rating');
        $title = $this->input->post('title');
        $button = $this->input->post('button');
        $foto = $_FILES['foto_fitur'];
        $table = 'tb_fitur';
        if($foto = ''){
            
        }else{
            $config['upload_path']      ='./img/fitur/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_fitur')) {
                $query = $this->db->get_where($table, ['id_fitur' => $id_fitur])->row();
                $data = [
                    'id_fitur' => $id_fitur,
                    'rating' => $rating,
                    'title' => $title,
                    'button' => $button,
                    'foto' => $query->foto
                ];
                
                $this->Dashboard_model->edit_fit($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('fitur'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data gagal diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('fitur'));
                }
            } else {
                $foto = $this->db->get_where($table, ['id_fitur' => $id_fitur])->row();
                if($foto != 'default.png') {
                    unlink('img/fitur/' .$foto->foto);
                }
                $foto = $this->upload->data('file_name');
                $data = [
                    'id_fitur' => $id_fitur,
                    'rating' => $rating,
                    'title' => $title,
                    'button' => $button,
                    'foto' => $foto
                ];
                
                $this->Dashboard_model->edit_fit($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil diubah</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('fitur'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('fitur'));
                }
            }
        }
    }

    public function delete_fit(){   
        $id_fitur = $this->input->post('id_fitur');
        $foto = $_FILES['foto_fitur'];
        $table = 'tb_fitur';

        $foto = $this->db->get_where($table, ['id_fitur' => $id_fitur])->row();
        if($foto != 'default.png') {
            unlink('img/fitur/' .$foto->foto);
        }
        $this->db->delete('tb_fitur', ['id_fitur'=> $id_fitur]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('fitur'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal dihapus!!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('fitur'));
        }
    }
//  !!========================== end fitur ========================!!
//  !!========================= start showcase ======================!!
    public function showcase () {
        $table = 'tb_showcase';
        $data = [
            'title' => 'halaman Galery',
            'rows' => $this->Dashboard_model->get_showcase($table)
        ];
        $this->load->view('Admin/header', $data);
		$this->load->view('Admin/showcase', $data);
    }

    public function insert_showcase (){
        $foto_showcase = $_FILES['foto_showcase'];
        $table = 'tb_showcase';
        if($foto_showcase != ''){
            $config['upload_path']      ='./img/showcase/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_showcase')){
                $data = [
                    'foto_showcase' => 'default.png',
                ];
                $this->Dashboard_model->simpan_showcase($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('showcase'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('showcase'));
                }
            } else {
                // $this->upload->do_upload('foto_showcase');
                $foto_show = $this->upload->data('file_name');
                $data = [
                    'foto_showcase' => $foto_show,
                ];
                $this->Dashboard_model->simpan_showcase($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('showcase'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal ditambahkan</strong>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('showcase'));
                }
            } 
        }
        
    }

    public function edit_show(){
        $id_showcase = $this->input->post('id_showcase');
        $foto_showcase = $_FILES['foto_showcase'];
        $table = 'tb_showcase';
        $query = $this->db->get_where($table, ['id_showcase'=>$id_showcase])->row();
        $config['upload_path']      ='./img/showcase/';
        $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
        $config['max_size']         =2048; //2mb
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto_showcase')){
            $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Tidak ada data yang dirubah!!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('showcase'));
        }else if($foto_showcase !='') {
            $foto_showcase = $query->foto_showcase;
            if($foto_showcase != 'default.png'){
                unlink('img/showcase/'.$foto_showcase);
                $foto_showcase = $this->upload->data('file_name');
                $data = [
                    'id_showcase' => $id_showcase,
                    'foto_showcase' => $foto_showcase,
                ];
                $this->Dashboard_model->edit_show($table, $data);
            }else if($foto_showcase == 'default.png'){
                $foto_showcase = $this->upload->data('file_name');
                $data = [
                    'id_showcase' => $id_showcase,
                    'foto_showcase' => $foto_showcase,
                ];
                $this->Dashboard_model->edit_show($table, $data);
            }

        }
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil di ubah</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
            redirect(site_url('showcase'));
        }else {
            $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Tidak ada data yang dirubah!!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
            redirect(site_url('showcase'));
        }
    }

    public function delete_show(){
        $id_showcase = $this->input->post('id_showcase');
        $table = 'tb_showcase';
        $query = $this->db->get_where($table, ['id_showcase' => $id_showcase])->row();
        $foto_show = $query->foto_showcase;
        if($foto_show != 'default.png'){
            unlink('img/showcase/'.$foto_show);
            $this->db->delete($table, ['id_showcase'=>$id_showcase]);
        }else{
            $this->db->delete($table, ['id_showcase' =>$id_showcase]);
        }
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            );
            redirect(site_url('showcase'));
        }else{
            $this->session->set_flashdata('notif',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data gagal dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            );
            redirect(site_url('showcase'));
        }
        
    }
//  !!========================= start listing ======================!!
    public function listing () {
        $table = 'tb_listing';
        $data = [
            'title' => 'halaman Blog',
            'rows'=> $this->Dashboard_model->get_listing($table)
        ];
        $this->load->view('Admin/header', $data);
		$this->load->view('Admin/listing', $data);
    }

    public function insert_list (){
        $admin = $this->input->post('admin');
        $judul = $this->input->post('judul');
        $teks = $this->input->post('teks');
        $tanggal = $this->input->post('tanggal');
        $foto = $_FILES['foto_listing'];
        if($foto != '' && $judul == '' && $teks == '' && $tanggal == ''){
            $config['upload_path']      ='./img/listing/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_listing')) {
                $data = [
                    'judul' => 'default',
                    'teks' => 'default',
                    'tanggal' => 'default',
                    'admin' => $admin,
                    'foto' => 'default.png'
                ];
                $table = 'tb_listing';
                $cek = $this->Dashboard_model->simpan_listing($table ,$data);
                if($cek > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <tanggal type="tanggal" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></tanggal>
                  </div>'
                );
                    redirect(site_url('listing'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <tanggal type="tanggal" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></tanggal>
                  </div>'
                );
                    redirect(site_url('listing'));
                }
            } else {
                $foto = $this->upload->data('file_name');
            }
            $data = [
                'judul' => 'default',
                'teks' => 'default',
                'tanggal' => 'default',
                'admin' => $admin,
                'foto' => $foto
            ];
            $table = 'tb_listing';
            $this->Dashboard_model->simpan_listing($table ,$data);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('notif',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan</strong>
                <tanggal type="tanggal" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></tanggal>
              </div>'
            );
                redirect(site_url('listing'));
            }else {
                $this->session->set_flashdata('notif',
                '<div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div>
                  An example alert with an icon
                </div>'
            );
                redirect(site_url('listing'));
            }
        }
        else{
            $config['upload_path']      ='./img/listing/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_listing')) {
                $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data Gagal di tambahkan</strong>
                    <tanggal type="tanggal" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></tanggal>
                </div>'
                );
                redirect(site_url('listing'));
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = [
            'judul' => $judul,
            'teks' => $teks,
            'tanggal' => $tanggal,
            'admin' => $admin,
            'foto' => $foto
        ];
        $table = 'tb_listing';
        $cek = $this->Dashboard_model->simpan_listing($table ,$data);
        if($cek > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan</strong>
            <tanggal type="tanggal" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></tanggal>
          </div>'
        );
            redirect(site_url('listing'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div>
              An example alert with an icon
            </div>'
        );
            redirect(site_url('listing'));
        }
    }

    public function edit_list (){
        $id_listing = $this->input->post('id_listing');
        $admin = $this->input->post('admin');
        $judul = $this->input->post('judul');
        $teks = $this->input->post('teks');
        $tanggal = $this->input->post('tanggal');
        $foto = $_FILES['foto_listing'];
        $table = 'tb_listing';
        if($foto = ''){
            
        }else{
            $config['upload_path']      ='./img/listing/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_listing')) {
                $query = $this->db->get_where($table, ['id_listing' => $id_listing])->row();
                $data = [
                    'id_listing' => $id_listing,
                    'judul' => $judul,
                    'teks' => $teks,
                    'tanggal' => $tanggal,
                    'admin' => $admin,
                    'foto' => $query->foto,
                ];
                
                $this->Dashboard_model->edit_list($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('listing'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data gagal diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('listing'));
                }
            } else {
                $foto = $this->db->get_where($table, ['id_listing' => $id_listing])->row();
                if($foto != 'default.png') {
                    unlink('img/listing/' .$foto->foto);
                }
                $foto = $this->upload->data('file_name');
                $data = [
                    'id_listing' => $id_listing,
                    'judul' => $judul,
                    'teks' => $teks,
                    'tanggal' => $tanggal,
                    'admin' => $admin,
                    'foto' => $foto,
                ];
                
                $this->Dashboard_model->edit_list($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('listing'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('listing'));
                }
            }
        }
    }

    public function delete_list(){   
        $id_listing = $this->input->post('id_listing');
        $foto = $_FILES['foto_listing'];
        $table = 'tb_listing';
        $foto = $this->db->get_where($table, ['id_listing' => $id_listing])->row();
        if($foto != 'default.png') {
            unlink('img/listing/' .$foto->foto);
        }
        $this->db->delete('tb_listing', ['id_listing'=> $id_listing]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('listing'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal dihapus!!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('listing'));
        }
    }


    // =========================== start pengelola =================================

    public function pengelola (){
        $tb_pengelola = 'tb_pengelola';
        $data = [
            'title' => 'halaman pengelola',
            'rows' => $this->Dashboard_model->get_pengelola($tb_pengelola)
        ];
        $this->load->view('Admin/header', $data);
        $this->load->view('Admin/pengelola', $data);
    }

    public function insert_pengelola (){
        $nama = $this->input->post('nama');
        $posisi = $this->input->post('posisi');
        $url_fb = $this->input->post('url_fb');
        $url_ig = $this->input->post('url_ig');
        $url_twt = $this->input->post('url_twt');
        $url_wa = $this->input->post('url_wa');
        $foto = $_FILES['foto'];
        if($foto != '' && $posisi == '' && $posisi ==  ''){
            $config['upload_path']      ='./img/pengelola/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $data = [
                    'posisi' => 'default',
                    'nama' => 'default',
                    'url_fb' => 'default',
                    'url_ig' => 'default',
                    'url_twt' => 'default',
                    'url_wa' => 'default',
                    'foto' => 'default.png'
                ];
                $table = 'tb_pengelola';
                $cek = $this->Dashboard_model->simpan_pengelola($table ,$data);
                if($cek > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <tanggal type="tanggal" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></tanggal>
                  </div>'
                );
                    redirect(site_url('pengelola'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <tanggal type="tanggal" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></tanggal>
                  </div>'
                );
                    redirect(site_url('pengelola'));
                }
            } else {
                $foto = $this->upload->data('file_name');
            }
            $data = [
                'posisi' => 'default',
                'nama' => 'default',
                'url_fb' => 'default',
                'url_ig' => 'default',
                'url_twt' => 'default',
                'url_wa' => 'default',
                'foto' => $foto
            ];
            $table = 'tb_pengelola';
            $this->Dashboard_model->simpan_pengelola($table ,$data);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('notif',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan</strong>
                <tanggal type="tanggal" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></tanggal>
              </div>'
            );
                redirect(site_url('pengelola'));
            }else {
                $this->session->set_flashdata('notif',
                '<div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div>
                  An example alert with an icon
                </div>'
            );
                redirect(site_url('pengelola'));
            }
        }
        else{
            $config['upload_path']      ='./img/pengelola/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data Gagal di tambahkan</strong>
                    <tanggal type="tanggal" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></tanggal>
                </div>'
                );
                redirect(site_url('pengelola'));
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $data = [
            'posisi' => $posisi,
            'nama' => $nama,
            'url_fb' => $url_fb,
            'url_ig' => $url_ig,
            'url_twt' => $url_twt,
            'url_wa' => $url_wa,
            'foto' => $foto
        ];
        $table = 'tb_pengelola';
        $cek = $this->Dashboard_model->simpan_pengelola($table ,$data);
        if($cek > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan</strong>
            <tanggal type="tanggal" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></tanggal>
          </div>'
        );
            redirect(site_url('pengelola'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <div>
              An example alert with an icon
            </div>'
        );
            redirect(site_url('pengelola'));
        }
    }

    public function edit_pengelola (){
        $id_pengelola = $this->input->post('id_pengelola');
        $nama = $this->input->post('nama');
        $posisi = $this->input->post('posisi');
        $url_fb = $this->input->post('url_fb');
        $url_ig = $this->input->post('url_ig');
        $url_twt = $this->input->post('url_twt');
        $url_wa = $this->input->post('url_wa');
        $foto = $_FILES['foto_pengelola'];
        $table = 'tb_pengelola';
        if($foto = ''){
            
        }else{
            $config['upload_path']      ='./img/pengelola/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_pengelola')) {
                $query = $this->db->get_where($table, ['id_pengelola' => $id_pengelola])->row();
                $data = [
                    'id_pengelola' => $id_pengelola,
                    'nama' => $nama,
                    'posisi' => $posisi,
                    'url_fb' => $url_fb,
                    'url_ig' => $url_ig,
                    'url_twt' => $url_twt,
                    'url_wa' => $url_wa,
                    'foto' => $query->foto,
                ];
                
                $this->Dashboard_model->edit_pengelola($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('pengelola'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data gagal diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('pengelola'));
                }
            } else {
                $query = $this->db->get_where($table, ['id_pengelola' => $id_pengelola])->row();
                if($foto != 'default.png') {
                    unlink('img/pengelola/' .$query->foto);
                }
                $foto = $this->upload->data('file_name');
                $data = [
                    'id_pengelola' => $id_pengelola,
                    'nama' => $nama,
                    'posisi' => $posisi,
                    'url_fb' => $url_fb,
                    'url_ig' => $url_ig,
                    'url_twt' => $url_twt,
                    'url_wa' => $url_wa,
                    'foto' => $foto,
                ];
                $this->Dashboard_model->edit_pengelola($table ,$data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data berhasil ditambahkan</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('pengelola'));
                }else {
                    $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal diupdate</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                    redirect(site_url('pengelola'));
                }
            }
        }
    }

    public function delete_pengelola(){   
        $id_pengelola = $this->input->post('id_pengelola');
        $foto = $_FILES['foto'];
        $table = 'tb_pengelola';
        $foto = $this->db->get_where($table, ['id_pengelola' => $id_pengelola])->row();
        if($foto != 'default.png') {
            unlink('img/pengelola/' .$foto->foto);
        }
        $this->db->delete('tb_pengelola', ['id_pengelola'=> $id_pengelola]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('pengelola'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal dihapus!!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('pengelola'));
        }
    }



    public function offers () {
        $this->load->view('Admin/header');
		$this->load->view('Admin/dashboard');
		$this->load->view('Admin/footer');
    }

    public function admin () {
        $table = 'tb_user';
        $data = [
            'title' => 'halaman admin',
            'rows' => $this->Dashboard_model->get_admin($table)
        ];
        $this->load->view('Admin/header', $data);
		$this->load->view('Admin/admin', $data);
    }

    public function insert_admin() {
        $table = 'tb_user';
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if($table == '' || $email == '' || $password == ''){
            $this->session->set_flashdata('notif',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data gagal ditambahkan, nama atau email dan password kosong</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
                redirect(site_url('admin'));
        }
        $data = [
            'nama'=> $nama,
            'email'=> $email,
            'password' => $password
        ];
        $this->Dashboard_model->simpan_admin($table ,$data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('admin'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data gagal ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('admin'));
        }
    }

    public function edit_admin() {
        $table = 'tb_user';
        $nama = $this->input->post('nama');
        $id_admin = $this->input->post('id_admin');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = [
            'id_user'=> $id_admin,
            'nama'=> $nama,
            'email'=> $email,
            'password' => $password
        ];
        $this->Dashboard_model->edit_admin($table ,$data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diupdate</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('admin'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data gagal diupdate</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('admin'));
        }
    }

    public function delete_admin() {
        $id_user = $this->input->post('id_user');
        $table = 'tb_user';
        $this->db->delete($table, ['id_user'=> $id_user]);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('admin'));
        }else {
            $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data gagal dihapus</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect(site_url('admin'));
        }
    }


}