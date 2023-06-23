<?php
class Userlogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('userlogin');
    }
    public function login()
    {
        $username=$_POST['name'];
        $password=$_POST['password'];
        $this->load->model('hos');
      $sss=  $this->hos->ulogin($username,$password);
        if ($sss == 1)
        {

            echo '<script>alert("Login Successfully!!");window.location.replace("'.base_url().'search")</script>';
        }

        else

        {
            echo '<script>alert("Login Failed");window.location.replace("'.base_url().'userlogin")</script>';
        }
    }
}