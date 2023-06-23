<?php
class Inpatient extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        date_default_timezone_set('asia/kolkata');
        $date=date('Y-m-d');
         $this->load->model('hos');
       $sss['quans']=$this->hos->nur($date);
//       print_r($sss['quans']);
//       exit;

        $this->load->view('inpatient',$sss);
    }
 public function inp()
 {
     $pandi=array(
         'pname'=>$_POST['pname'],
         'address'=>$_POST['address'],
         'rno'=>$_POST['rno'],
         'testdetails'=>$_POST['testdetails'],
         'amount'=>$_POST['amount']
     );
   $this->load->model('hos');
   $this->hos->inp($pandi);
 }
}