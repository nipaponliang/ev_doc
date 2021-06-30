<!-- <?php
// defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/')?>treatment_css.css">
    <title>treatment history</title>
</head> -->
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
            var rate_2 = $("input[name=rating_2]").val();
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

                        <!-- <p>ให้คะแนนหมอ  : <input type="text" name="rating_1" style="margin-left:1em" /></p>
                        <p>ให้คะแนนคลินิก :<input type="text" name="rating_2" style="margin-left:0.75em"/></p> -->
                        <input type="radio" id="html" name="rating_1" value="HTML">
<label for="html">HTML</label><br>
<input type="radio" id="css" name="rating_1" value="CSS">
<label for="css">CSS</label><br>
<input type="radio" id="javascript" name="rating_1" value="JavaScript">
<label for="javascript">JavaScript</label>

                    <br>
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