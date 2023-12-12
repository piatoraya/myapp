<?php


class Level extends Sistem
{
  public function __construct()
    {
        $this->validationLogin();
    }

  public function index()
  {
  $this->loadModel('LevelModel');
  //membuat object level
  $tmodel = new LevelModel();

  $data = [
    'title' => 'Daftar Level Akses',
    'level' => $tmodel ->getAll(),
  ];

  $this->view('header', $data);
  $this->view('view_level', $data);
  $this->view('footer', $data);
  $this->view('view_level_script');
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Level Akses',
      
    ];
  
    $this->view('header', $data);
    $this->view('view_level_form', $data);
    $this->view('footer', $data);
  }

  public function create_action()
  {
    $nama_level = $this->post('nama_level');
    if (!$nama_level) {
      $_SESSION['error'] = 'Nama Level Tidak Boleh Kosong !!';
      App::redirect("level/create");
    }

    $this->loadModel('LevelModel');
    $tmodel = new LevelModel;
    $sukses = $tmodel->insert($nama_level);
    if ($sukses) {
      $_SESSION['sukses'] = 'Data Berhasil Diproses';
    } else {
      $_SESSION['error'] = 'Gagal menyimpan data';
    }
    App::redirect('level');

  }
    
  

  public function update($id)
  {
    $this->loadModel('LevelModel');
    $tmodel = new LevelModel();

    $dataLevel = $tmodel->getByID($id);

    if (!$dataLevel) {
      App::baseUrl('level');
    }
    $data = [
      'title' => 'Update Level Akses',
      'dataLevel' => $dataLevel[0],
    ];
  
    $this->view('header', $data);
    $this->view('view_level_form_update', $data);
    $this->view('footer', $data);
  }

  public function update_action()
  {
    $id = $this->post('id');
    $nama_level = $this->post('nama_level');
    if (!$nama_level) {
      $_SESSION['error'] = 'Nama Level Tidak Boleh Kosong !!';
      App::redirect("level/update/$id");
    }

    $this->loadModel('LevelModel');
    $tmodel = new LevelModel;
    $sukses = $tmodel->update($id, $nama_level);
    if ($sukses) {
      $_SESSION['sukses'] = 'Data Berhasil Diproses';
    } else {
      $_SESSION['error'] = 'Gagal menyimpan data';
    }
    App::redirect('level');

  }

  public function delete($id)
  {
    $this->loadModel('LevelModel');
    $tmodel = new LevelModel();
    $tmodel ->delete($id);

    if ($sukses) {
      $_SESSION['sukses'] = 'Data Berhasil Dihapus';
      
    }else {
      $_SESSION['error'] = 'Gagal menghapus Hapus';
    }
    App::redirect('level');

  }

}