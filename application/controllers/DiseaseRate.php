<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiseaseRate extends CI_Controller {

	public function index()
	{
		$this->load->view('template/disease rate');
	}
    public function get1(){
        $this->load->view('template/disease rate housing');
    }
	public function get2(){
        $this->load->view('template/disease rate age');
    }
	public function get3(){
        $this->load->view('template/disease rate occupation');
    }
	public function get4(){
        $this->load->view('template/analytical factor');
    }
    public function serchProvince(){
        $this->load->view('template/disease rate housing output');
    }
    public function get4Show(){
        $this->load->view('template/analytical factor output');
    }
    public function delete(){
        echo "delete Member";
    }
}
