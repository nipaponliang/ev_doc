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
    <title>ProfileUser</title>
</head>
<style>
    h2 {
        text-align:center;
    }
    a {
      text-align:center;
    }

    /* ตรงนี้เป็น content */
img {

    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
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
<<<<<<< HEAD
        $pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", ""); //dbname=แก้ชื่อตามมุ้ย
=======
        $pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "");
>>>>>>> 1f2f83943729c381ca709e9a45950f12761a1b87
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $stmt = $pdo->prepare("SELECT * FROM profileuser");
        $stmt->execute()
        
?>
<?php
$row=$stmt->fetch()
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
                    <li class="nav-item">
                      <a class="nav-link" href="#">เลือกคลินิก</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#">แนะนำยา</a>
                    </li>
                  </ul>
                  <div class="col-7 active"></div>
                  <button class="btn btn-outline-success float-right" type="login">ล็อคอิน/ลงทะเบียน</button></span>
                </div>
              </nav>

        </div>

        <!-- side bar  -->
        <div class="sidebar">
  <a style="font-size:1em;" href="#home"><span style="font-size:4em;" class="glyphicon glyphicon-calendar"></span></br>ตารางการนัดหมาย</a>
  <a style="font-size:1em;" href="#news"><span style="font-size:4em;" class="glyphicon glyphicon-repeat"></span></br>ประวัติการรักษา</a>
  <a style="font-size:1em;" href="#contact"><span style="font-size:4em;" class="glyphicon glyphicon-cog"></span></br>ตั้งค่าบัญชีผู้ใช้</a>
  <a style="font-size:1em;" href="#about"><span style="font-size:4em;" class="glyphicon glyphicon-log-out"></span></br>ออกจากระบบ</a>
</div>

<div class="content">

    <div class="container">
 
    <div class="row">
    <div class="col-4">
    </div>
    <div class="col-4">
    <h2>Profile User</h2>
  </br>
  <!-- class="rounded-circle" -->
  <img src="<?php echo base_url('assets/image/profile.jpg');?>" alt="" class="rounded-circle">
  <h2><?= $row["nameUser"]?></h2>
<p>เพศ : <?= $row["genderUser"]?></p>
<p>อายุ : <?= $row["ageUser"]?></p>
<p>วันเกิด : <?= $row["birthdayUser"]?></p>
<p>โรคประจำตัว : <?= $row["congenitalDiseaseUser"]?></p>
<p>อีเมล : <?= $row["emailUser"]?></p>
<p>เบอร์โทรศัพท์ : <?= $row["telUser"]?></p>
<p>ที่อยู่ : <?= $row["addressUser"]?></p>
    </div>
    <div class="col-4">
    </div>

    </div>
                                       
  
</div>



</div>
</body>
</html>