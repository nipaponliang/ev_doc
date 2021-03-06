<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('register_model');
    }
    function index(){
        $data['title'] = "สมัครสมาชิก";
        $this->load->view('head',$data);
		$this->load->view('navbar');
        $this->load->view('template/register');
    }
    function validation(){
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[codeigniter_register.email]');
        $this->form_validation->set_rules('first_name','Firstname','required|trim');
        $this->form_validation->set_rules('last_name','Lastname','required|trim');
        $this->form_validation->set_rules('birth_day','Birthday','required|trim');
        $this->form_validation->set_rules('gender','Gender','required|trim');
        $this->form_validation->set_rules('user_password','Password','required');
        if($this->form_validation->run()){
            $verification_key = md5(rand());
            $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
            // var_dump($encrypted_password);
            // exit();
            $data = array(
                'email'     => $this->input->post('email'),
                'firstname' => $this->input->post('first_name'),
                'lastname'  => $this->input->post('last_name'),
                'birthday'  => $this->input->post('birth_day'),
                'gender'    => $this->input->post('gender'),
                'userpassword'  => $encrypted_password,
                'verification_key'  => $verification_key 
            );
            $id=$this->register_model->insert($data);
            // var_dump($id);
            // exit();
            if($id>0){
                
                $subject = "Please verify email for login";
                $message = "
                <p>Hi ".$this->input->post('first_name')."</p>
                <p>This is email verification mail from Codeigniter Login Register system. 
                For complete registration process and login into system.
                First you want to verify you email by click this <a href='".base_url()."register/verify_email/".$verification_key."
                '>link</a>.</p>
                <p>Once you click this link your email will be verified and you can login into system.</p>
                <p>Thanks,</p>
                ";
                $config = array(
                    'protocol'      =>  'smtp',
                    'smtp_host'     =>  'smtpout.secureserver.net',
                    'smtp_port'     =>  80,
                    'smtp_user'     =>  '',
                    'smtp_pass'     =>  '',
                    'mailtype'      =>  'html',
                    'charset'       =>  'iso-8859-1',
                    'wordwrap'      =>  TRUE
                );
                $this->load->library('email',$config);
    
                $this->email->set_newline("\r\n");
                $this->email->from('nipapon.li@kkumail.com');
                //info@webslesson.info
                $this->email->to($this->input->post('email'));
                $this->email->subject($subject);
                $this->email->message($message);
                if($this->email->send()){
                    $this->session->set_flashdata('message','Check in your email for email verification mail');
                    redirect('register');
                }else{
                    echo "can't send.";
                }
            }

        }else{
            $this->index();
        }

    }
    function verify_email(){
        if($this->uri->segment(3)){
            $verification_key=$this->uri->segment(3);
            if($this->register_model->verify_email($verification_key)){
                $data['message'] = '<h1 align="center">Your Email has been successfully verified, 
                now you can login from <a href="'.base_url().'
                login">here</a></h1>';
            }else{
                $data['message']='<h1 align="center">Invalid Link</h1>';
            }
            $this->load->view('email_verification',$data);
        }
    }

}
