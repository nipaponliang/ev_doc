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
        $connect = mysqli_connect('localhost','root','','test');
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
	
	public function get_data()
	{
        $id = $this->input->post("id");
		$q = "SELECT * FROM meeting_detail 
        INNER JOIN doctor ON doctor.ID_doc = meeting_detail.ID_doc 
        INNER JOIN patient ON patient.ID = meeting_detail.ID 
        WHERE ID_meeting=".$id;
        $row = $this->db->query($q)->row();
        echo json_encode(array("flag"=>1,"data"=>$row));
	}

    function save_data_dc(){
        $id = $this->input->post("id");
        $rate_1 = $this->input->post("rate_1");
        $rate_2 = $this->input->post("rate_2");

		$q = "UPDATE meeting_detail SET rating_doc = $rate_1,
        rating_cli = $rate_2 
        WHERE meeting_detail.ID_meeting = $id  "; 
        $this->db->query($q);
    }
    function cause_Cancel(){
        $id = $this->input->post("id");
        $causeCancel = $this->input->post("causeCancel");

		$q = "UPDATE datingtable SET status = 'ยกเลิกการนัด'
         WHERE `datingtable`.`nameDocID` = $id;
        "; 
        $this->db->query($q);

        $q = "SELECT * FROM datingtable WHERE nameDocID=".$id;
        $row_data = $this->db->query($q)->row();

        $s="INSERT INTO `causecancel` 
        (`causeCancelID`, `causeCancel`, `nameDoc`, `detail`, `dating`) 
        VALUES (NULL, '".$causeCancel."', '".$row_data->nameDoc."', '".$row_data->detail."', '".$row_data->dating."');";
        
        $this->db->query($s);
        echo json_encode(array("flag"=>1,"msg"=>"สำเร็จ"));

    }

}
