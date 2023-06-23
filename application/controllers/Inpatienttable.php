<?php
class Inpatienttable extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('hos');
        $sss['plans']=$this->hos->inpta();
//      print_r($sss['plans']);
//      exit;
        $this->load->view('inpatienttable',$sss);
    }

}
