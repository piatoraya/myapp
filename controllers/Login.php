<?php

class Login extends Sistem
{

    public function index()
    {
        // session_start();
        //clear session user
        session_destroy();

        $data = [
            'title' => 'AMPANG.ID',
            'description' => 'Fist my simple project',
        ];

        $this->view('view_login', $data);
    }



    public function check_user()
    {
        //menyiapkan session
        // session_start();

        //mendapatkan inputan client
        $email = $this->post('email');
        $password = $this->post('password');

        //load model user
        $this->loadModel('UserModel');

        //membuat object model user
        $tuser = new UserModel();

        //mengecek dataUser
        $user = $tuser->getUser($email, $password);

        //jika data tidak ada kembalikan kehalaman login
        if (!$user) App::redirect('login');

        //jika data ada maka isi session dan direct ke dashboard
        $_SESSION['user'] = $user;
        App::redirect('Dashboard');
    }

    public function logout()
    {
        // session_start();
        session_destroy();
        App::redirect('login');
    }
}
