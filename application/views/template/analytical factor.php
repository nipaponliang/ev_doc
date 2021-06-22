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
    <title>เลือกปัจจัยการวิเคราะห์</title>
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
        
    <div class="container">
        <div class="row">
            <h1 style="text-align: center;">เลือกปัจจัยการวิเคราะห์</h1>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-1 mt-2">
              <form method="get" action="เลือกปัจจัยการวิเคราะห์.html">
              <div class="form-group"> <!-- Date input -->
              <label class="control-label" for="date">วันเกิด</label>
              </div>
            </div>
            <div class="col-md-4">
              <input type="date" class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-1 mt-2">
              <form method="POST">
              <div class="form-group">
              <label class="control-label" for="data">ที่อยู่</label>
            </div>
          </div>
            <div class="form-group col-md-4 mt-2">
              <!-- <label for="inputState">State</label> -->
              <select id="inputState" class="form-select" name="province">
                <option selected >กรุณาเลือกจังหวัด</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-1 mt-2">
              <form method="post">
              <div class="form-group"> 
              <label class="control-label" for="data">อาชีพ</label>
            </div>
          </div>
            <div class="form-group col-md-4 mt-2">
              <!-- <label for="inputState">State</label> -->
              <select id="inputState" class="form-select" name="career">
                <option selected>กรุณาเลือกอาชีพ</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row" style="position: center;">
            <br>
            <div class="col text-center mt-4">
            <a href="<?php echo site_url('DiseaseRate/get4Show');?>"><button class="btn btn-success" type="button">วิเคราะห์</button></a>
            </form>
          </div>
        </div>

    </div>

    <div class="row" style="margin-left: 12%;">
        <a href="<?php echo site_url('DiseaseRate/index');?>"><button class="btn btn-success navbar-btn" style="background-color: aliceblue; width:10%; height: 8vh; color: black;">ย้อนกลับ</button></a>
    </div>
     
</body>
</html>