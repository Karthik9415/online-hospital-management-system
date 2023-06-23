<?php
class Outpatient extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('outpatient');
    }
    public function outp()
    {
        $naveen = array(
            'pid' => $_POST['pid'],
            'pname' => $_POST['pname'],
            'tid'=>$_POST['tid'],
            'phone' => $_POST['phone'],
            'dname' => $_POST['dname'],
            'date' => $_POST['date']
        );
//        print_r($naveen);
//        exit;
        $this->load->model('hos');
        $this->hos->outp($naveen);

    }
    public function get()
    {
        $dname=$_POST['s'];
//        print_r($dname);
//        exit;
//
        $this->load->model('hos');
        $kkk=$this->hos->get($dname);
        $rrr=$kkk['0']['tid'];
        echo $rrr+1;
//        exit();

    }
}