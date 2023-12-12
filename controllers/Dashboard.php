<?php
class Dashboard extends Sistem
{
    public function __construct()
    {
        $this->validationLogin();
    }

    public function index()
    {
        $data = [
            'title' => 'AMPANG.ID',
        ];
        $this->view('header', $data);
        $this->view('view_dashboard');
        $this->view('footer');
        
    }
}
