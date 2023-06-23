<?php
class Bloodbank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('bloodbank');
    }
 public function blood()
 {
     $aravind=array(
         'name'=>$_POST['name'],
         'address'=>$_POST['address'],
         'phone'=>$_POST['phone'],
         'bloodgroup'=>$_POST['bloodgroup'],
         'unit'=>$_POST['unit'],
         'date'=>$_POST['date']
     );

     $this->load->model('hos');
     $this->hos->blood($aravind);
 }
}