<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>ProfileUserDating</title>
</head>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
  });
  $(document).ready(function() {
        
        $("body").on("click",".mybutton",function(){
            $(".nameDoc").html("");
            var id =  $(this).data("id");
            $.ajax({
                type: "POST",
                url: "http://localhost/ci3/api/get_dataUser",
                data: {
                    id:id
                },
                success: function(res){
                    console.log(res);
                    var htmlx = '<label for="recipient-name" class="col-form-label">รายการนัด: <span class="nameDoc">'+res.data.nameDoc+'</span></label>'+
                    '<br><label for="recipient-name" class="col-form-label">รายละเอียดการนัด: <span class="detail">'+res.data.detail+'</span></label>'+
                    '<br><label for="recipient-name" class="col-form-label">วันนัดหมาย: <span class="dating">'+res.data.dating+'</span></label>';
                    $(".des_html").html(htmlx);

                    $(".cur_id").val(res.data.nameDocID);
                },
                dataType: "json",
                async: true,
            });
        });


        $(".save_btn").click(function(){
            var rating = $("input[name=rating_1]").val();
            var id = $(".cur_id").val();
            $.ajax({
                type: "POST",
                url: "http://localhost/ci3/DiseaseRate/datingShowUser",
                data: {
                    id:id,
                    rate:rating,
                },
                success: function(res){
                    //console.log(res);
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
<?php
    // include "connect.php";
        // $pdo = new PDO("mysql:host=localhost;dbname=datingshowuserdb;charset=utf8", "root", ""); //dbname=แก้ชื่อตามมุ้ย
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        // $stmt = $pdo->prepare("SELECT * FROM datingtable");
        // $stmt->execute()
?>

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
                  <div class="col-7"></div>
                  <button class="btn btn-outline-success float-right" type="login">ล็อคอิน/ลงทะเบียน</button></span>
                </div>
              </nav>

        </div>

       <!-- side bar  -->
        <div class="sidebar">
  <a style="font-size:1em;" class="active" href="#home"><span style="font-size:4em;" class="glyphicon glyphicon-calendar"></span></br>ตารางการนัดหมาย</a>
  <a style="font-size:1em;" href="<?php echo site_url('DiseaseRate/treatment_history');?>"><span style="font-size:4em;" class="glyphicon glyphicon-repeat" ></span></br>ประวัติการรักษา</a>
  <a style="font-size:1em;" href="#contact"><span style="font-size:4em;" class="glyphicon glyphicon-cog"></span></br>ตั้งค่าบัญชีผู้ใช้</a>
  <a style="font-size:1em;" href="#about"><span style="font-size:4em;" class="glyphicon glyphicon-log-out"></span></br>ออกจากระบบ</a>
</div>

<div class="content">

    <div class="container">
  <h2>การนัดหมาย</h2>
  </br>

                                                     
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
       
        <th>ชื่อแพทย์</th>
        <th>รายละเอียด</th>
        <th>วันนัด</th>
        <th>วันที่จอง</th>
        <th colspan='2'>สถานะ</th>
      </tr>
      </thead>
      <?php #$c = 0 ;?>
             <?php #while ($row = $stmt->fetch()){
               foreach ($rows as $k => $v) {
                ?> 
             

    <tbody>
 
      <tr>
        

      <td><?= $v->nameDoc?><br><?= $v->typeClinic?></td>
        <td><?= $v->detail?></td>
        <td><?= $v->dating?></td>
        <td><?= $v->booking?></td>

        <td><?= $v->status?><span style="margin-right:2em;"></span>
        <button type="button" class="btn btn-danger mybutton" data-toggle="modal" data-target="#exampleModal" data-id="<?= $v->nameDocID?>" data-whatever="@mdo">ยกเลิกนัด</button></td>        
      </tr>
       
    
  </tbody>
    <?php }?>  
      
<!--       
      <tbody>
    
      <tr>
        
        <td>นายแพทย์เอ นามสมมติ</br>คลินิกทันตกรรมเอ</td>
        <td>จัดฟัน</td>
        <td>23 มิถุนายน 2564</td>
        <td>20 มิถุนายน 2564</td>
        <td><span style="color:green; margin-right:2em;">ยืนยันการนัด</span><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ยกเลิกนัด</button></td>
      </tr>
      <tr>
      
        <td>นายแพทย์บี นามสมมติ</br>คลินิกทันตกรรมบี</td>
        <td>ผ่าฟันคุด</td>
        <td>23 มิถุนายน 2564</td>
        <td>19 มิถุนายน 2564</td>
        <td><span style="color:yellow; margin-right:2em;">รอการยืนยัน</span><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ยกเลิกนัด</button></td>
      </tr> -->
   
  </table>
  </div>
</div>





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ยืนยันการยกเลิกนัด</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- <form action="<?php #echo site_url('DiseaseRate/datingShowUser');?>" method="GET"> -->
        <form action="<?php echo site_url('Api/get_causeCancel');?>" method="POST">
        <input type="hidden" class="cur_id" value=""/>
          <div class="form-group des_html">
            <!-- <span class="cancelButton"></span> -->
            <label for="recipient-name" class="col-form-label" name="nameDoc" >รายการนัด: <span class="nameDoc"></span></label>
            <label for="recipient-name" class="col-form-label" name="detail">รายละเอียดการนัด: <span class="detail"></span></label>
            <label for="recipient-name" class="col-form-label" name="dating">วันนัดหมาย: <span class="dating"></span></label>
            <!-- <input type="text" class="form-control" id="recipient-name"> -->
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">สาเหตุการยกเลิก:</label>
            
            <textarea class="form-control" id="message-text" name="causeCancel"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
      <!-- <input type="submit" class="btn btn-success" data-dismiss="modal"> -->
        <button type="submit" class="btn btn-success" data-dismiss="modal">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>

</div>
    

</body>
</html>