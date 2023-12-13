<?php
class Dashboard extends Sistem
{
    public function __construct()
    {
        $this->validationLogin();
    }

    public function index()
    {
        $this->loadModel('UserModel');
        $tmodel = new UserModel();
        $data = [
            'title' => 'AMPANG.ID',
            'pengguna'  => $tmodel ->getAllUser(),
        ];
        $this->view('header', $data);
        $this->view('view_dashboard', $data);
        $this->view('footer');
        
    }
}
