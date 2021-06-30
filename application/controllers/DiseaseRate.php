<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiseaseRate extends CI_Controller {

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
        $this->load->view('head',$data);
        $this->load->view('navbar');
		$this->load->view('treatment_history',$data);
	}

}
