<?php
class Chart extends CI_Controller{
    function __construct(){
      parent::__construct();
      //load chart_model from model
      $this->load->model('chart_model');
    }
 
    function index(){
      $result = $this->chart_model->get_data();
      $x['data']=json_encode($result,JSON_UNESCAPED_UNICODE);
      //print_r($a);
      //$x['data'] = $a;
      //print_r($x);

      $this->load->view('chart_view',$x);
    }
    function index1(){
      $result = $this->chart_model->get_total_age1();
      $x['data']=json_encode($result,JSON_UNESCAPED_UNICODE);
      //$x['data2']=$result2;
      //print_r($x);

      $this->load->view('chart_view2',$x);
    }
    function index2(){
      $result = $this->chart_model->get_total_age2();
      $x['data']=json_encode($result,JSON_UNESCAPED_UNICODE);
      //$x['data2']=$result2;
      //print_r($x);

      $this->load->view('chart_view3',$x);
    }
    function index3(){
      $result = $this->chart_model->get_total_age3();
      $x['data']=json_encode($result,JSON_UNESCAPED_UNICODE);
      //$x['data2']=$result2;
      //print_r($x);

      $this->load->view('chart_view4',$x);
    }
    function index4(){
      $result = $this->chart_model->get_total_age4();
      $x['data']=json_encode($result,JSON_UNESCAPED_UNICODE);
      //$x['data2']=$result2;
      //print_r($x);

      $this->load->view('chart_view5',$x);
    }
    function index5(){
      $result = $this->chart_model->get_total_age5();
      $x['data']=json_encode($result,JSON_UNESCAPED_UNICODE);
      //$x['data2']=$result2;
      //print_r($x);

      $this->load->view('chart_view6',$x);
    }
    function index_occ(){
      $result = $this->chart_model->get_data_occ();
      $x['data']=json_encode($result,JSON_UNESCAPED_UNICODE);
      //$x['data2']=$result2;
      //print_r($x);

      $this->load->view('chart_view7',$x);
    }
}