<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiseaseRate extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
