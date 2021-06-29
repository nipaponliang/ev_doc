<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('nav');
	// 	$this->load->view('index');
	// }
	public function get_dataUser()
	{
        $id = $this->input->post("id");
		$q = "SELECT * FROM datingtable
         WHERE nameDocID=".$id;
        
        $row = $this->db->query($q)->row();
        echo json_encode(array("flag"=>1,"data"=>$row));

	}

    function save_data(){
        echo json_encode(array("flag"=>1,"data"=>"","msg"=>"save completed")); 
    }

    public function get_causeCancel(){
        $connect = mysqli_connect('localhost','root','','datingshowuserdb');
        if (mysqli_connect_error($connect)) {
            echo 'failed to connect';
        }

        $causeCancel = $_POST['causeCancel'];
        $causeCancel = $_POST['nameDoc'];
        $causeCancel = $_POST['deatail'];
        $causeCancel = $_POST['dating'];
        mysqli_query($connect,"INSERT INTO causecancel (causeCancel,nameDoc,detail,dating)
                                VALUES ('$causeCancel','$nameDoc','$detail','$dating')");
    } 

}
