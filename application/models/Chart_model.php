<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_model extends CI_Model{
 
  //get data from database
  function get_data(){
    $this->db->select('doctor_v2.condition,COUNT(doctor_v2.hn) as total');
    $this->db->WHERE('province.pt_province=patient_info_fi.pt_province and patient_info_fi.hn = doctor_v2.hn');
    $this->db->WHERE('province.pt_province',83);
    $this->db->group_by('doctor_v2.condition');
    $this->db->order_by('total DESC');
    $this->db->limit(5);
    $query = $this->db->get('doctor_v2,province,patient_info_fi');
    return $query->result();
  }
  function get_data_occ(){
    $this->db->select('doctor_v2.condition,COUNT(doctor_v2.hn) as total');
    $this->db->WHERE('career.pt_job=patient_info_fi.pt_job and patient_info_fi.hn = doctor_v2.hn');
    $this->db->WHERE('career.pt_job',1);
    $this->db->group_by('doctor_v2.condition');
    $this->db->order_by('total DESC');
    $this->db->limit(5);
    $query = $this->db->get('doctor_v2,career,patient_info_fi');
    return $query->result();
  }
  function get_total_age1(){
    $this->db->select('การวินิจฉัย as name,COUNT(diagnosis.การวินิจฉัย) as total');
    $this->db->WHERE('patient_info_fi.hn=diagnosis.hn ');
    $this->db->where('pt_age >=', 0);
    $this->db->where('pt_age <=', 5);
    $this->db->group_by('การวินิจฉัย');
    $this->db->order_by('total DESC');
    $this->db->limit(5);
    //$this->db->limit(0,5);
    $query = $this->db->get('diagnosis,patient_info_fi');

    return $query->result();
}
function get_total_age2(){
  $this->db->select('การวินิจฉัย as name,COUNT(diagnosis.การวินิจฉัย) as total');
  $this->db->WHERE('patient_info_fi.hn=diagnosis.hn ');
  $this->db->where('pt_age >=', 6);
  $this->db->where('pt_age <=', 14);
  $this->db->group_by('การวินิจฉัย');
  $this->db->order_by('total DESC');
  $this->db->limit(5);
  $query = $this->db->get('diagnosis,patient_info_fi');

  return $query->result();
}
function get_total_age3(){
  $this->db->select('การวินิจฉัย as name,COUNT(diagnosis.การวินิจฉัย) as total');
  $this->db->WHERE('patient_info_fi.hn=diagnosis.hn ');
  $this->db->where('pt_age >=', 15);
  $this->db->where('pt_age <=', 21);
  $this->db->group_by('การวินิจฉัย');
  $this->db->order_by('total DESC');
  $this->db->limit(5);
  $query = $this->db->get('diagnosis,patient_info_fi');

  return $query->result();
}
function get_total_age4(){
  $this->db->select('การวินิจฉัย as name,COUNT(diagnosis.การวินิจฉัย) as total');
  $this->db->WHERE('patient_info_fi.hn=diagnosis.hn ');
  $this->db->where('pt_age >=', 22);
  $this->db->where('pt_age <=', 59);
  $this->db->group_by('การวินิจฉัย');
  $this->db->order_by('total DESC');
  $this->db->limit(5);
  $query = $this->db->get('diagnosis,patient_info_fi');

  return $query->result();
}
function get_total_age5(){
  $this->db->select('การวินิจฉัย as name,COUNT(diagnosis.การวินิจฉัย) as total');
  $this->db->WHERE('patient_info_fi.hn=diagnosis.hn ');
  $this->db->where('pt_age >=', 60);
  $this->db->group_by('การวินิจฉัย');
  $this->db->order_by('total DESC');
  $this->db->limit(5);
  $query = $this->db->get('diagnosis,patient_info_fi');

  return $query->result();
}
}