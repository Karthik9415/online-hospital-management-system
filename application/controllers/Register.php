<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('register');
    }
    public function register()
    {
        $fff=array(
            'username'=>$_POST['name'],
            'address'=>$_POST['address'],
            'phone'=>$_POST['phone'],
            'password'=>$_POST['password']
        );
        $this->load->model('hos');
        $this->hos->register($fff);
    }
}
