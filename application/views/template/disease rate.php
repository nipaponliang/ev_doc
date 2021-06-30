<style>
    body{
        font-family: Kanit;
        font-size: 36px;
    }
</style>
<div class="container-fluid">
        <div class="row">
            <h1 style="text-align: center;">อัตราการเกิดโรคกับปัจจัยต่างๆ</h1>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 mb-4" >
              <a href="<?php echo site_url('DiseaseRate/get2');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;margin-left:50%;">อัตราการเกิดโรคกับอายุ</button></a>
            </div>
            
            <div class="col-sm-6">
                <a href="<?php echo site_url('DiseaseRate/get3');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;">อัตราการเกิดโรคกับอาชีพ</button></a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 mb-4">
              <a href="<?php echo site_url('DiseaseRate/get1');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;margin-left:50%;">อัตราการเกิดโรคกับที่อยู่อาศัย</button></a>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo site_url('DiseaseRate/get4');?>"><button type="button" class="btn btn-outline-light" style="background-image: url('<?php echo base_url('assets/image/imagetoclick2.jpg');?>'); width:50%; height: 10vh;">อัตราการเกิดโรคแบบเลือกเอง</button></a>
            </div>
        </div>

    </div>
</div>
</body>
</html>

