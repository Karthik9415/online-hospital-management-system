<?php
class Inpatientup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $id=$_GET['id'];
//        print_r($id);
        $this->load->model('hos');
        $rrr['quans']= $this->hos->upt($id);
        $this->load->view('inpatientup',$rrr);
    }
 public function upt()
 {
     $mani=array(
         'id'=>$_POST['id'],
         'pname'=>$_POST['pname'],
         'address'=>$_POST['address'],
         'rno'=>$_POST['rno'],
         'nname'=>$_POST['nname'],
         'testdetails'=>$_POST['testdetails'],
         'medicinedetails'=>$_POST['medicinedetails'],
         'amount'=>$_POST['amount']
     );
//     print_r($mani);
//     exit;
     $this->load->model('hos');
     $ttt=  $this->hos->detail($mani);
//  print_r($ttt);
//  exit();
     if($ttt==1)
     {
         echo '<script>alert("update successfully");window.location.replace("'.base_url().'inpatienttable") </script>';
     }
     else
     {
         echo '<script>alert("plese check details");window.location.replace("'.base_url().'inpatient")</script>';
     }
 }
 public function dele()
 {
     $id=$_GET['id'];
//        print_r($id);
     $this->load->model('hos');
    $fff= $this->hos->dele($id);
     if($fff==1)
     {
         echo '<script>alert("delete successfully");window.location.replace("'.base_url().'inpatienttable")</script>';
     }
     else{
         echo '<script>alert("delete successfully");window.location.replace("'.base_url().'inpatienttable")</script>';

     }
 }


}
