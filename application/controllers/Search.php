<?php
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('search');
    }
    public function search()
    {
        $gms=array(
            'dname'=>$_POST['dname'],
            'date'=>$_POST['date'],
            'time'=>$_POST['time']
        );
//        print_r($gms);
//        exit;
        $this->load->model('hos');
        $this->hos->search($gms);
    }
}