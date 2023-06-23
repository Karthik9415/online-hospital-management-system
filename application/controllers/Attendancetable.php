<?php
class Attendancetable extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('hos');
        $uuu['nurs']=$this->hos->atten();
//      print_r($sss['plans']);
//      exit;
        $this->load->view('attendancetable',$uuu);
    }

}