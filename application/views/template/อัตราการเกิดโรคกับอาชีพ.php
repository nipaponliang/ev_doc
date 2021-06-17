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
    <link rel="stylesheet" href="style.css">
    <title>อัตราการเกิดโรคกับอาชีพ</title>
</head>
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
                    <li class="nav-item active">
                      <a class="nav-link disabled" href="#">หน้าแรก</a>
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
                  <div class="col-7"></div>
                  <button class="btn btn-outline-success float-right" type="login">ล็อคอิน/ลงทะเบียน</button></span>
                </div>
              </nav>

        </div>
        
    <div class="row">
        <h1 style="text-align: center;">อัตราการเกิดโรคกับอาชีพ</h1>
    </div>
    <br>

    <div class="row">
        <h2 style="text-align: center;">10 อันดับอาชีพที่พบแพทย์บ่อยที่สุด</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 style="text-align: center;">1 โปรแกรมมเมอร์</h3>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;margin-left:40%;">อัตราการเกิดโรคกับอายุ</button>
            </div>
            <div class="col-md-4">
                <h3 style="text-align: center;">1 ชื่อโรค 50%</h3>
                <h3 style="text-align: center;">1 ชื่อโรค 50%</h3>
                <h3 style="text-align: center;">1 ชื่อโรค 50%</h3>
                <h3 style="text-align: center;">1 ชื่อโรค 50%</h3>
            </div>

        </div>
    </div>
    <div class="row" style="margin-left: 12%;">
        <a href="<?php echo site_url('DiseaseRate/index');?>"><button class="btn btn-success navbar-btn" style="background-color: aliceblue; width:10%; height: 8vh; color: black;">ย้อนกลับ</button></a>
    </div>
   
</body>
</html>