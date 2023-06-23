<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('home');
    }
    public function login()
    {
    $name=$_POST['name'];
    $password=$_POST['password'];
    $this->load->model('hos');
   $sss=$this->hos->login($name,$password);
    if ($sss == 1)
    {

        echo '<script>alert("Login Successfully!!");window.location.replace("'.base_url().'inpatient")</script>';
    }

    else

    {
        echo '<script>alert("Login Failed");window.location.replace("'.base_url().'home")</script>';
    }
}
}