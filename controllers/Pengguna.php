<?php


class Pengguna extends Sistem
{
  public function __construct()
    {
        $this->validationLogin();
    }
  public function index()
  {
    $this->loadModel('UserModel');
    $tmodel = new UserModel();

    $data= [
      'title'     => 'Daftar Pengguna',
      'pengguna'  => $tmodel ->getAllUser(),
    ];
  $this->view('header', $data);
  $this->view('view_pengguna', $data);
  $this->view('footer', $data);

  }
  public function create()
  {
    $this->loadModel('LevelModel');
  //membuat object level
    $tmodel = new LevelModel();
    $data = [
      'title' => 'Tambah Pengguna',
      'level' => $tmodel ->getAll(),
    ];
  
    $this->view('header', $data);
    $this->view('view_pengguna_form', $data);
    $this->view('footer', $data);
  }
  public function create_action()
  {
    $nama = $this->post('nama');
    $email = $this->post('email');
    $password = $this->post('password');
    $id_level = $this->post('id_level');
    $id_status = $this->post('id_status');
    
    if (!$nama) {
      $_SESSION['error'] = 'Nama Tidak Boleh Kosong !!';
    } elseif (!$email) {
      $_SESSION['error'] = 'Email Tidak Boleh Kosong !!';
    }elseif (!$password) {
      $_SESSION['error'] = 'Password Tidak Boleh Kosong !!';
      App::redirect("pengguna/create");
    }

    $this->loadModel('UserModel');
    $tmodel = new UserModel;
    $sukses = $tmodel->insert($nama,  $email, $password, $id_level, $id_status);
    if ($sukses) {
      $_SESSION['sukses'] = 'Data Berhasil Diproses';
    } else {
      $_SESSION['error'] = 'Gagal menyimpan data';
    }
    App::redirect('pengguna');
  }
  
  public function update($id)
  {
    $this->loadModel('UserModel');
    $tmodel = new UserModel();
    $this->loadModel('LevelModel');
  //membuat object level
    $tlevel = new LevelModel();

    $dataPengguna = $tmodel->getByID($id);

    if (!$dataPengguna) {
      App::baseUrl('Pengguna');
    }
    $data = [
      'title' => 'Update Data Pengguna',
      'dataPengguna' => $dataPengguna[0],
      'level' => $tlevel ->getAll(),
      
    ];
  
    $this->view('header', $data);
    $this->view('view_pengguna_form_update', $data);
    $this->view('footer', $data);
  }
  public function update_action()
  {
    $id = $this->post('id');
    $nama = $this->post('nama');
    $email = $this->post('email');
    $password = $this->post('password');
    $id_level = $this->post('id_$id_level');
    $id_status = $this->post('id_status');
    if (!$nama) {
      $_SESSION['error'] = 'Nama Tidak Boleh Kosong !!';
      
    } elseif (!$email) {
      $_SESSION['error'] = 'Email Tidak Boleh Kosong !!';
      
    } elseif (!$password) {
      $_SESSION['error'] = 'password Tidak Boleh Kosong !!';
      App::redirect("pengguna/update/$id");
    }
    $this->loadModel('UserModel');
    $tmodel = new UserModel;
    $sukses = $tmodel->update($id, $nama, $email, $password, $id_level, $id_status);
    if ($sukses) {
      $_SESSION['sukses'] = 'Data Berhasil Diproses';
    } else {
      $_SESSION['error'] = 'Gagal menyimpan data';
    }
    App::redirect('pengguna');

  }
  public function delete($id)
  {
    $this->loadModel('UserModel');
    $tmodel = new UserModel();
    $tmodel ->delete($id);

    if ($error) {
      $_SESSION['error'] = 'Gagal menghapus Hapus';
      
    }else {
      $_SESSION['sukses'] = 'Data Berhasil Dihapus';
    }
    App::redirect('pengguna');

  }
}