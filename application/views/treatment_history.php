<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?php #echo base_url('assets/css/')?>treatment_css.css"> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>treatment history</title>
</head>
<style>
  
    h2 {
        text-align:center;
    }
    a {
      text-align:center;
    }
    img{
      display:block;
      margin-left:auto;
      margin-right:auto;
      width:70%;
    }
    /* ตั้งแต่ตรงนี้เป็น side bar */
    body {
  margin: 0;
  font-family: "Lato", sans-serif;
 
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: #E1F6F8;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: #19568A;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: white;
  color: #19568A;
}

.sidebar a:hover:not(.active) {
  background-color: white;
  color: #19568A;
}

div.content {
  margin-left: 250px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


</style>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')
        var modal = $(this)
        
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    });


    $('#exampleModal_history').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')
        var modal = $(this)
        
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    });



    $(document).ready(function() {
        
        // $("body").on("click",".mybutton",function(){
        // $(".mybutton").click(function(){
        //     $(".fm_detail_meet").html("");
        //     var id =  $(this).data("id");
        //     $.ajax({
        //         type: "POST",
        //         url: "http://127.0.0.1/ci32/index.php/Api/get_data",
        //         data: {
        //             id:id
        //         },
        //         success: function(res){
        //             console.log(res);
        //             $(".fm_detail_meet").html(res.data.detail_meet);
        //             $(".cur_id").val(res.data.ID_meeting);
        //         },
        //         dataType: "json",
        //         async: true,
        //     });
        // });


        $(".mybutton").click(function(){
            $(".fm_detail_meet").html("");
            var id =  $(this).data("id");
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Api/get_data');?>",
                data: {
                    id:id
                },
                success: function(res){
                    console.log(res);
                    var htmlx = 
                    'ชื่อหมอ : '+res.data.f_name_doc+' '+res.data.l_name_doc+
                    '<br>คลินิก : '+res.data.clinic_doc+
                    '<br>รายละเอียดการนัด : '+res.data.detail_meet;
                    // '<br>วันที่ : '+res.data.date+
                    // '<br>เวลา : '+res.data.time+' น.';
                    $(".fm_detail_meet").html(htmlx);
                    $(".cur_id").val(res.data.ID_meeting);
                },
                dataType: "json",
                async: true,
            });
        });
        $(".history").click(function(){
            $(".fm_detail_meet").html("");
            var id =  $(this).data("id");
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Api/get_data');?>",
                data: {
                    id:id
                },
                success: function(res){
                    console.log(res);
                    var htmlx = 
                    'ชื่อหมอ : '+res.data.f_name_doc+' '+res.data.l_name_doc+
                    '<br>คลินิก : '+res.data.clinic_doc+
                    '<br>รายละเอียดการนัด : '+res.data.detail_meet+
                    '<br>วันที่ : '+res.data.date+
                    '<br>เวลา : '+res.data.time+' น.'
                    'ชื่อหมอ : '+res.data.f_name_doc+' '+res.data.l_name_doc+
                    '<br>คลินิก : '+res.data.clinic_doc+
                    '<br>รายละเอียดการนัด : '+res.data.detail_meet+
                    '<br>วันที่ : '+res.data.date+
                    '<br>เวลา : '+res.data.time+' น.';
                    $(".fm_detail_meet").html(htmlx);
                    
                    $(".cur_id").val(res.data.ID_meeting);
                    $(".fm_detail_meet_date").html(res.data.date);
                    $(".fm_detail_meet_time").html(res.data.time);


                },
                dataType: "json",
                async: true,
            });
        });
        
        $(".save_btn").click(function(){
            var rate_1 = $("input[name=rating_1]:checked").val();
            var rate_2 = $("input[name=rating_2]:checked").val();
            var id = $(".cur_id").val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Api/save_data_dc');?>",
                data: {
                    id:id,
                    rate_1:rate_1,
                    rate_2:rate_2,
                },
                success: function(res){
                    console.log(res);
                    alert(res.msg);
                },
                dataType: "json",
                async: true,
            });
        });
    });

   
</script>
<body>
<div class="container-fluid">
        <div class="row">
            <!-- nav start here -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <img src="<?php echo base_url('assets/image/logo.png');?>" style="width: 5em;">
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">วิเคราะห์ข้อมูล</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link disabled" href="#">เลือกคลินิก</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">แนะนำยา</a>
                    </li>
                  </ul>
                  </div>

                  <div class="col-7"></div>
                  <button class="btn btn-outline-success float-right" type="login">ล็อคอิน/ลงทะเบียน</button></span>
                </div>
              </nav>

        </div>

       <!-- side bar  -->
        <div class="sidebar">
  <a style="font-size:1em;" href="<?php echo site_url('DiseaseRate/datingShowUser');?>"><span style="font-size:4em;" class="glyphicon glyphicon-calendar"></span></br>ตารางการนัดหมาย</a>
  <a style="font-size:1em;" href="#" class="active" ><span style="font-size:4em;" class="glyphicon glyphicon-repeat" ></span></br>ประวัติการรักษา</a>
  <a style="font-size:1em;" href="<?php echo site_url('DiseaseRate/profileShowUser');?>"><span style="font-size:4em;" class="glyphicon glyphicon-cog"></span></br>ตั้งค่าบัญชีผู้ใช้</a>
  <a style="font-size:1em;" href="#about"><span style="font-size:4em;" class="glyphicon glyphicon-log-out"></span></br>ออกจากระบบ</a>
</div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-10">
                <div class="table-responsive">          
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ชื่อหมอ</th>
                          <th>วันที่เข้ารับการรักษา</th>
                          <th colspan="2"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            foreach ($rows as $k => $v) { ?>    
                        <tr>
                          <td><?= $v->f_name_doc?> <?= $v->l_name_doc?><br><?= $v->clinic_doc?></td>
                          <td><?= $v->date?><br>เวลา <?= $v->time?> น. </td>
                          <td><button type="button" class="btn btn-info history mt-2" data-toggle="modal" data-target="#exampleModal_history" data-id="<?= $v->ID_meeting?>" data-whatever="@mdo" name="" style="width:12em">รายละเอียดการนัดหมาย</button>
                          <button type="button" class="btn btn-primary mybutton mt-2" data-toggle="modal" data-target="#exampleModal" data-id="<?= $v->ID_meeting?>" data-whatever="@mdo" name="" style="width:12em">ให้คะแนนคลินิก/หมอ</button>
                          </td>
                        </tr>                        
                        <?php }?> 
                    </table>
                    </div>
            </div>


        </div>



    </div>  
    <!-- form aleart -->

    

   

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ให้คะแนนคลินิก/หมอ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <input type="hidden" class="cur_id" value=""/>
                    <span class="fm_detail_meet"></span>
                    </div>
                    <div class="form-group" action="<?php echo site_url('Api/save_data_dc');?>" >

                        <p>ให้คะแนนหมอ  : </p>
                        <input type="radio" name="rating_1" value="1" id="star-1" class="star__radio visuhide">  <label class="star__item" for="star-1"><span class="visuhide">1</span></label>
                        <input type="radio" name="rating_1" value="2" id="star-2" class="star__radio visuhide">  <label class="star__item" for="star-2"><span class="visuhide">2</span></label>
                        <input type="radio" name="rating_1" value="3" id="star-3" class="star__radio visuhide">  <label class="star__item" for="star-3"><span class="visuhide">3</span></label>
                        <input type="radio" name="rating_1" value="4" id="star-4" class="star__radio visuhide">  <label class="star__item" for="star-4"><span class="visuhide">4</span></label>
                        <input type="radio" name="rating_1" value="5" id="star-5" class="star__radio visuhide">  <label class="star__item" for="star-5"><span class="visuhide">5</span></label>

                        <p>ให้คะแนนคลินิก :</p>
                        <input type="radio" name="rating_2" value="1" id="star-1" class="star__radio visuhide">  <label class="star__item" for="star-1"><span class="visuhide">1</span></label>
                        <input type="radio" name="rating_2" value="2" id="star-2" class="star__radio visuhide">  <label class="star__item" for="star-2"><span class="visuhide">2</span></label>
                        <input type="radio" name="rating_2" value="3" id="star-3" class="star__radio visuhide">  <label class="star__item" for="star-3"><span class="visuhide">3</span></label>
                        <input type="radio" name="rating_2" value="4" id="star-4" class="star__radio visuhide">  <label class="star__item" for="star-4"><span class="visuhide">4</span></label>
                        <input type="radio" name="rating_2" value="5" id="star-5" class="star__radio visuhide">  <label class="star__item" for="star-5"><span class="visuhide">5</span></label>



<br>

                    
               </div>

            </div>
            <div class="modal-footer">
                <div class="text-center" style="text-align: center;">
                    <button type="button" class="btn btn-success save_btn" data-dismiss="modal" aria-label="Close">ยืนยัน</button>
                </div>
            </form>
                </div>
            </div>
        </div>
        </div>
    <!--end of form aleart -->


    <!-- form aleart -->

    <div class="modal fade mt-4" id="exampleModal_history" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">รายละเอียดการนัดหมาย</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" class="cur_id" value=""/>
                    <table style="border: 0;">
                        <thead> 
                            <tr> 
                                <th style="width:3em; text-align:center;"></th> 
                                <th style="width:10em; text-align:center;">วันที่</th> 
                                <th style="width:3em; text-align:center;"></th> 
                                <th style="width:10em; text-align:center;">เวลา</th>
                            </tr>
                        </thead>
                            <tr>
                                <td></td>
                                <td style="text-align:center; height:4em; background-color: #4979A3;"><span class="fm_detail_meet_date" ></span></td>
                                <td></td>
                                <td style="text-align:center; height:4em; background-color: #4979A3;"><span class="fm_detail_meet_time"> น.</span></td>
                            </tr>
                    </table>
                    <span class="fm_detail_meet"></span>
                    </div>
                   
                    
                    </div>
            <div class="modal-footer">
                <div class="text-center" style="text-align: center;">
                    <button type="submit" class="btn btn-success" data-dismiss="modal" aria-label="Close">กลับ</button>
                </div>
            </form>
                </div>
            </div>
        </div>
        </div>
    <!--end of form aleart -->


</body>

</html>