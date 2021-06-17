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
    <!-- <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="image/logo_ev.png" width="200" height="50" alt="logo">
        </div>

        <ul class="nav navbar-nav navbar-color">
            <li class="active font"><a href="#">หน้าแรก</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">วิเคราะห์ข้อมูล<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">วิเคราะความเสี่ยงการเกิดโรค</a></li>
                    <li><a href="#">อัตราการเกิดโรคกับปัจจัยต่างๆ</a></li>
                </ul>
            </li>
            <li class="font"><a href="#">เลือกคลินิก</a></li>
            <li class="font"><a href="#">แนะนำยา</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right mr-2">
            <li>
                <button onclick="document.location='#'" class="btn btn-success navbar-btn">เข้าสู่ระบบ/ลงทะเบียน</button>
            </li>
        </ul>
    </div>
</nav> -->
        <div class="row">
            <h1 style="text-align: center;">อัตราการเกิดโรคกับปัจจัยต่างๆ</h1>
        </div>
        <br>
        <div class="row mt-4">
            <div class="col-sm-6 mb-4" >
            <a href="<?php echo site_url('DiseaseRate/get2');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;margin-left:40%;">อัตราการเกิดโรคกับอายุ</button></a>
            </div>
            
            <div class="col-sm-6">
                <a href="<?php echo site_url('DiseaseRate/get3');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;">อัตราการเกิดโรคกับอาชีพ</button></a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-6 mb-4">
            <a href="<?php echo site_url('DiseaseRate/get1');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;margin-left:40%;">อัตราการเกิดโรคกับที่อยู่อาศัย</button></a>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo site_url('DiseaseRate/get4');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;">อัตราการเกิดโรคแบบเลือกเอง</button></a>
            </div>
        </div>


    </div>
</body>
</html>

<!-- <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="image/logo_ev.png" width="200" height="50" alt="logo">
        </div>

        <ul class="nav navbar-nav navbar-color">
            <li class="active font"><a href="#">หน้าแรก</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">วิเคราะห์ข้อมูล<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">วิเคราะความเสี่ยงการเกิดโรค</a></li>
                    <li><a href="#">อัตราการเกิดโรคกับปัจจัยต่างๆ</a></li>
                </ul>
            </li>
            <li class="font"><a href="#">เลือกคลินิก</a></li>
            <li class="font"><a href="#">แนะนำยา</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right mr-2">
            <li>
                <button onclick="document.location='#'" class="btn btn-success navbar-btn">เข้าสู่ระบบ/ลงทะเบียน</button>
            </li>
        </ul>
    </div>
</nav> -->