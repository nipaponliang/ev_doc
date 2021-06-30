
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
       <!-- side bar  -->
       <div class="sidebar">
        <a style="font-size:1em;" href="<?php echo site_url('DiseaseRate/datingShowUser');?>"><span style="font-size:4em;" class="glyphicon glyphicon-calendar"></span></br>ตารางการนัดหมาย</a>
        <a style="font-size:1em;" href="#" class="active" ><span style="font-size:4em;" class="glyphicon glyphicon-repeat" ></span></br>ประวัติการรักษา</a>
        <a style="font-size:1em;" href="<?php echo site_url('DiseaseRate/profileShowUser');?>"><span style="font-size:4em;" class="glyphicon glyphicon-cog"></span></br>ตั้งค่าบัญชีผู้ใช้</a>
        <a style="font-size:1em;" href="#about"><span style="font-size:4em;" class="glyphicon glyphicon-log-out"></span></br>ออกจากระบบ</a>
</div>

        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-10">
                <div class="table-responsive">          
                    <table class="table" >
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