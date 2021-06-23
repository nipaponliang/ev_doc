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
        $data['title'] = "อัตราการเกิดโรคกับที่อยู่อาศัย"
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/disease rate housing');
    }
	public function get2()
    {
        $data['title'] = "อัตราการเกิดโรคกับอายุ"
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/disease rate age');
    }
	public function get3()
    {
        $data['title'] = "อัตราการเกิดโรคกับอาชีพ"
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/disease rate occupation');
    }
	public function get4()
    {
        $data['title'] = "อัตราการเกิดโรคกับปัจจัยการวิเคราะห์ต่างๆ"
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/analytical factor');
    }
    public function serchProvince()
    {
        $data['title'] = "อัตราการเกิดโรคกับที่อยู่อาศัย"
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/disease rate housing output');
    }
    public function get4Show()
    {
        $data['title'] = "อัตราการเกิดโรคกับปัจจัยการวิเคราะห์ต่างๆ"
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/analytical factor output');
    }
    public function delete(){
        echo "delete Member";
    }
}
