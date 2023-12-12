<?php

class Home extends Sistem
{
  public function index()
  {
    $data =[
      'title' => 'AMPANG.ID',
    ];
    $this->view('home_header', $data);
    $this->view('nav_home', $data);
    $this->view('View_home');
    $this->view('home_footer');

  }
  public function about()
  {
    $data =[
      'title' => 'AMPANG.ID',
    ];
    $this->view('home_header', $data);
    $this->view('nav_home', $data);
    $this->view('View_home');
    $this->view('home_footer');
  }
  public function blog()
  {
    $data =[
      'title' => 'AMPANG.ID',
    ];
    $this->view('home_header', $data);
    $this->view('nav_home', $data);
    $this->view('View_blog');
    $this->view('home_footer');
  }
}