<?php
class Donertable extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('hos');
        $kkk['bloods']=$this->hos->doner();
        $this->load->view('donertable',$kkk);
    }
}