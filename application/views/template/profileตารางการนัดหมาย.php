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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
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
})
</script>
<style>
    h2 {
        text-align:center;
    }
</style>
<?php
    // include "connect.php";
        $pdo = new PDO("mysql:host=localhost;dbname=datingshowuserdb;charset=utf8", "root", ""); //dbname=แก้ชื่อตามมุ้ย
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $stmt = $pdo->prepare("SELECT * FROM datingtable");
        $stmt->execute()
?>

<body>
<div class="container-fluid">
    <div class="container">
  <h2>การนัดหมาย</h2>

                                                     
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
      <?php $c = 0 ;?>
            <?php while ($row = $stmt->fetch()){?>
    <tbody>
 
      <tr>
        
        <td><?= $row["nameDoc"]?></br><?= $row["typeClinic"]?></td>
        <td><?= $row["detail"]?></td>
        <td><?= $row["dating"]?></td>
        <td><?= $row["booking"]?></td>
        
        <td><?= $row["status"]?><span style="margin-right:2em;"></span>
        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ยกเลิกนัด</button></td>
        <?php $c++;?>
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
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">รายการนัด: <?= $row["nameDoc"]?></label>
            <label for="recipient-name" class="col-form-label">รายละเอียดการนัด: <?= $row["detail"]?></label>
            <label for="recipient-name" class="col-form-label">วันนัดหมาย: <?= $row["dating"]?></label>
            <!-- <input type="text" class="form-control" id="recipient-name"> -->
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">สาเหตุการยกเลิก:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-success">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>

    

</body>
</html>