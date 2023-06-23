<?php
class Nurseatten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('nurseatten');
    }
    public function nurse()
    {
        date_default_timezone_set('asia/kolkata');
        $gowtham=array(
            'date'=>date('Y-m-d'),
            'nid'=>$_POST['nid'],
            'name'=>$_POST['name'],
            'attendance'=>$_POST['attendance']
        );
//        print_r($gowtham);
//        exit;
        $this->load->model('hos');
        $this->hos->nurse($gowtham);
    }

}