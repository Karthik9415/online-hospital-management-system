<?php
class Outpatienttable extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('hos');
        $sss['runs']=$this->hos->outpta();
//      print_r($sss['plans']);
//      exit;
        $this->load->view('outpatienttable',$sss);
    }

}