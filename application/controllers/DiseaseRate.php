<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiseaseRate extends CI_Controller {

	public function index()
	{
		$this->load->view('template/อัตราการเกิดโรคกับปัจจัยต่างๆ');
	}
    public function get1(){
        $this->load->view('template/อัตราการเกิดโรคกับที่อยู่อาศัย');
    }
	public function get2(){
        $this->load->view('template/อัตราการเกิดโรคกับอายุ');
    }
	public function get3(){
        $this->load->view('template/อัตราการเกิดโรคกับอาชีพ');
    }
	public function get4(){
        $this->load->view('template/เลือกปัจจัยการวิเคราะห์');
    }
    public function serchProvince(){
        $this->load->view('template/อัตราการเกิดโรคกับที่อยู่อาศัยแสดง');
    }
    public function get4Show(){
        $this->load->view('template/เลือกปัจจัยการวิเคราะห์แสดง');
    }
    public function delete(){
        echo "delete Member";
    }
}
