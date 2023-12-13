<?php


class Register extends Sistem
{
  public function index()
    {
        // session_start();
        //clear session user
        // session_destroy();

        $data = [
            'title' => 'AMPANG.ID',
            'description' => 'Fist my simple project',
        ];

        $this->view('view_register', $data);
    }







}