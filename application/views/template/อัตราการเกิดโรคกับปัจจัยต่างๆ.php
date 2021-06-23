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
    <title>อัตราการเกิดโรคกับปัจจัยต่างๆ</title>


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
                      <a class="nav-link" href="<?php echo site_url('DiseaseRate/datingShowUser');?>">เลือกคลินิก</a>
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
            <h1 style="text-align: center;">อัตราการเกิดโรคกับปัจจัยต่างๆ</h1>
        </div>
        <br>
        <div class="row mt-4">
            <div class="col-sm-6 mb-4" >
            <a href="<?php echo site_url('DiseaseRate/get2');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;margin-left:50%;">อัตราการเกิดโรคกับอายุ</button></a>
            </div>
            
            <div class="col-sm-6">
                <a href="<?php echo site_url('DiseaseRate/get3');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;">อัตราการเกิดโรคกับอาชีพ</button></a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-6 mb-4">
            <a href="<?php echo site_url('DiseaseRate/get1');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;margin-left:50%;">อัตราการเกิดโรคกับที่อยู่อาศัย</button></a>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo site_url('DiseaseRate/get4');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;">อัตราการเกิดโรคแบบเลือกเอง</button></a>
            </div>
        </div>


    </div>
</body>
</html>

