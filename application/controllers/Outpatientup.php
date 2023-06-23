<?php
class Outpatientup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $id = $_GET['id'];
//        print_r($id);
        $this->load->model('hos');
        $rrr['guns'] = $this->hos->outupt($id);
        $this->load->view('outpatientup', $rrr);
    }

    public function upt()
    {
        $ajith = array(
            'pid' => $_POST['pid'],
            'pname' => $_POST['pname'],
            'tid' => $_POST['tid'],
            'phone' => $_POST['phone'],
            'special' => $_POST['special'],
            'date' => $_POST['date']
        );
//     print_r($mani);
//     exit;
        $this->load->model('hos');
        $ttt = $this->hos->details($ajith);
        if($ttt==1)
        {
            echo '<script>alert("update successfully");window.location.replace("'.base_url().'outpatienttable") </script>';
        }
        else
        {
            echo '<script>alert("plese check details");window.location.replace("'.base_url().'inpatient")</script>';
        }
    }
    public function dele1()
    {
        $id=$_GET['id'];
//        print_r($id);
        $this->load->model('hos');
        $fff= $this->hos->dele1($id);
        if($fff==1)
        {
            echo '<script>alert("delete successfully");window.location.replace("'.base_url().'outpatienttable")</script>';
        }
        else{
            echo '<script>alert("delete failed");window.location.replace("'.base_url().'outpatienttable")</script>';

        }
    }
}