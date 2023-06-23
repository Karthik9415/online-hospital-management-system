<?php
class Hos extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login($name,$password)
    {
        $sql="select * from admin where adminname='".$name."' and password='".$password."' ";
        $var=$this->db->query($sql);
         return $var->num_rows();

    }
    public function nurse($gowtham)
    {
        $ver = "select * from nurse where nid='" . $gowtham['nid'] . "' and date='".$gowtham['date']."'";
        $query = $this->db->query($ver);
        $gms = $query->num_rows();
        if ($gms == 0) {

            $this->db->insert('nurse', $gowtham);
            echo '<script>alert("Insert Successfully");window.location.replace("' . base_url() . 'inpatient")</script>.';
        }
        else
        {
            echo '<script>alert("already exits");window.location.replace("' . base_url() . 'nurseatten")</script>.';

        }
    }
    public function nur($date)
    {
        $sql="select * from nurse where date='".$date."' and attendance='present'";
        $var=$this->db->query($sql);
        return $var->result_array();
    }
    public function inp($pandi)
    {
        $this->db->insert('inpatient',$pandi);
        echo '<script>alert("Insert Successfully");window.location.replace("' . base_url() . 'inpatient")</script>.';


    }
    public function outp($naveen)
    {
//        print_r($naveen);
//        exit;
       $date=$naveen['date'];
       $dname=$naveen['dname'];
        $sql = "select tid from outpatient where date='".$date."' and dname='".$dname."' " ;
        $fff = $this->db->query($sql);
        $sss= $fff->result_array();
//        print_r($sss);
//        exit;
       $mmm= $sss[0]['tid'];
      if($mmm<=20) {

          $this->db->insert('outpatient', $naveen);
          echo '<script>alert("Appoinment Successfully");window.location.replace("' . base_url() . 'outpatient")</script>.';
      }
      else
      {
          echo '<script>alert("No Appoinment");window.location.replace("' . base_url() . 'outpatient")</script>.';

      }
    }
    public function blood($aravind)
    {
        $this->db->insert('bloodbank',$aravind);
        echo '<script>alert("Insert Successfully");window.location.replace("' . base_url() . 'bloodbank")</script>.';
    }
    public function inpta()
    {
        $sql="select * from inpatient";
        $var=$this->db->query($sql);
        return $var->result_array();
    }
    public function upt($id)
    {
        $sql="select * from inpatient where id='".$id."'";
        $var=$this->db->query($sql);
        return $var->result_array();
    }
    public function detail($mani)
    {
//        print_r($mani);
//        exit;
        $rrr=$mani['id'];
//        print_r($rrr);
//        exit();
        $this->db->where('id',$rrr);
        return  $this->db->update('inpatient',$mani);
    }
    public function dele($id)
    {
        $sql="delete from inpatient where id='$id'";
        return $this->db->query($sql);
    }
    public function outpta()
    {
        $sql="select * from outpatient";
        $var=$this->db->query($sql);
        return $var->result_array();
    }
    public function outupt($id)
    {
        $sql="select * from outpatient where id='".$id."'";
        $var=$this->db->query($sql);
        return $var->result_array();
    }
    public function details($ajith)
    {
        $rrr=$ajith['pid'];
        $this->db->where('id',$rrr);
        return  $this->db->update('outpatient',$ajith);
    }
    public function dele1($id)
    {
        $sql="delete from outpatient where id='$id'";
        return $this->db->query($sql);
    }
    public function atten()
    {
        $sql="select * from nurse";
        $var=$this->db->query($sql);
        return $var->result_array();
    }
    public function doner()
    {
        $sql="select * from bloodbank";
        $var=$this->db->query($sql);
        return $var->result_array();
    }
    public function register($fff)
    {
            $ver = "select * from register where phone='" . $fff['phone'] . "'";
            $query = $this->db->query($ver);
            $gms = $query->num_rows();
            if ($gms == 0)
            {

                $gm = $this->db->insert('register', $fff);
                echo '<script>alert("register successfully!!");window.location.replace("'.base_url().'userlogin")</script>';
            }

            else

            {
                echo '<script>alert("already exits");window.location.replace("'.base_url().'userlogin")</script>';
            }
    }

    public function ulogin($username,$password)

    {

            $sql="select * from register where username='".$username."' and password='".$password."' ";
            $var=$this->db->query($sql);
            return $var->num_rows();
    }
    public function operation($aaa)
    {
        $ver = "select * from operation where dname='" . $aaa['dname'] . "' and date='". $aaa['date']   ."' ";
        $query = $this->db->query($ver);
        $gms = $query->num_rows();
        if ($gms == 0)
        {

            $gm = $this->db->insert('operation', $aaa);
            echo '<script>alert("register successfully!!");window.location.replace("'.base_url().'operation")</script>';
        }

        else

        {
            echo '<script>alert("already exits");window.location.replace("'.base_url().'userlogin")</script>';
        }
    }
    public function search($gms)
    {
        $sql="select * from operation where dname='".$gms['dname'] . "' and date='".$gms['date']."'and time='".$gms['time']."' ";
        $query = $this->db->query($sql);
        $gms = $query->num_rows();
        if ($gms == 1)
        {
            echo '<script>alert("doctor is busy for schedule!!");window.location.replace("'.base_url().'search")</script>';
        }

        else

        {
            echo '<script>alert("APPOINMENT SUCCESSFULLY");window.location.replace("'.base_url().'outpatient")</script>';
        }
    }
    public function get($dname)
    {
//        print_r($dname);
//        exit;
        $sql="select tid from outpatient where dname='".$dname."'";
        $fff= $this->db->query($sql);
        return $fff->result_array();
    }

}

