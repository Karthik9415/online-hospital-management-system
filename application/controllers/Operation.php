<?php
class Operation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('operation');
    }
    public function operation()
    {
        $aaa=array(
            'pid'=>$_POST['pid'],
            'pname'=>$_POST['pname'],
            'date'=>$_POST['date'],
            'time'=>$_POST['time'],
            'dname'=>$_POST['dname'],
            'type'=>$_POST['type']
        );
//        print_r($aaa);
//        exit;
        $this->load->model('hos');
        $this->hos->operation($aaa);
    }
}