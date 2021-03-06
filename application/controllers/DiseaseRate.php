<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiseaseRate extends CI_Controller {
    function __construct(){
        parent::__construct();
        //load chart_model from model
        $this->load->model('chart_model');
      }
   

	public function index()
	{
        $data['title'] = "อัตราการเกิดโรคกับปัจจัยต่างๆ";
        $this->load->view('head',$data);
		$this->load->view('navbar');
		$this->load->view('template/disease rate');
	}
    public function get1()
    {
        $data['title'] = "อัตราการเกิดโรคกับที่อยู่อาศัย";
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/disease rate housing');
    }
	public function get2()
    {
        $data['title'] = "อัตราการเกิดโรคกับอายุ";
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $result1 = $this->chart_model->get_total_age1();
        $x['data1']=json_encode($result1,JSON_UNESCAPED_UNICODE);
        $result2 = $this->chart_model->get_total_age1();
        $x['data2']=json_encode($result2,JSON_UNESCAPED_UNICODE);
        $result3 = $this->chart_model->get_total_age1();
        $x['data3']=json_encode($result3,JSON_UNESCAPED_UNICODE);
        $result4 = $this->chart_model->get_total_age1();
        $x['data4']=json_encode($result4,JSON_UNESCAPED_UNICODE);
        $result5 = $this->chart_model->get_total_age1();
        $x['data5']=json_encode($result5,JSON_UNESCAPED_UNICODE);
        $this->load->view('template/disease rate age');
        
    }
	public function get3()
    {
        $data['title'] = "อัตราการเกิดโรคกับอาชีพ";
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/disease rate occupation');
    }
	public function get4()
    {
        $data['title'] = "อัตราการเกิดโรคกับปัจจัยการวิเคราะห์ต่างๆ";
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/analytical factor');
    }
    public function serchProvince()
    {
        $data['title'] = "อัตราการเกิดโรคกับที่อยู่อาศัย";
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/disease rate housing output');
    }
    public function get4Show()
    {
        $data['title'] = "อัตราการเกิดโรคกับปัจจัยการวิเคราะห์ต่างๆ";
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/analytical factor output');
    }
    public function datingShowUser(){
		$q = "SELECT * FROM datingtable";
        // -- INNER JOIN doctor ON doctor.ID_doc = meeting_detail.ID_doc 
        // -- INNER JOIN patient ON patient.ID = meeting_detail.ID 
        // -- WHERE nameDocID=".$id_user;
		$data['rows'] = $this->db->query($q)->result_object();
        
        //$row = $this->db->query($q)->row();
       //echo json_encode(array("flag"=>1,"data"=>$row));
       $this->load->view('template/profileตารางการนัดหมาย',$data);
    }
	public function profileShowUser(){
		$q = "SELECT * FROM datingtable";
        // -- INNER JOIN doctor ON doctor.ID_doc = meeting_detail.ID_doc 
        // -- INNER JOIN patient ON patient.ID = meeting_detail.ID 
        // -- WHERE nameDocID=".$id_user;
		$data['rows'] = $this->db->query($q)->result_object();
        
        //$row = $this->db->query($q)->row();
      //  echo json_encode(array("flag"=>1,"data"=>$row));

        $this->load->view('template/profileUser',$data);
		
    }
	public function confirmToCancel()
	{
		$q  = "SELECT * FROM datingtable";
        $data['rows'] = $this->db->query($q)->result_object();

		$this->load->view('template/profileUser',$data);
	}

	// public function treatment_history()
	// {
	// 	$q  = "SELECT * FROM meeting_detail INNER JOIN doctor ON doctor.ID_doc = meeting_detail.ID_doc INNER JOIN patient ON patient.ID = meeting_detail.ID";
    //     $data['rows'] = $this->db->query($q)->result_object();
	// 	$this->load->view('nav');
	// 	$this->load->view('treatment_history',$data);
	// }
	
	public function treatment_history()
	{
		$q  = "SELECT * FROM meeting_detail INNER JOIN doctor ON doctor.ID_doc = meeting_detail.ID_doc INNER JOIN patient ON patient.ID = meeting_detail.ID";
        $data['rows'] = $this->db->query($q)->result_object();
        $data['title'] = "ประวัติการรักษา";
        // $this->load->view('head',$data);
        //  $this->load->view('navbar');
		$this->load->view('treatment_history',$data);
	}

}
