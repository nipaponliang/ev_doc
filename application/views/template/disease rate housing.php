<style>
    body{
        font-family: Kanit;
        
    }
    h2{
        font-size: 28px;
    }
    h3{
        font-size: 24px;
    }
</style>
    <div class="container-fluid">
        <div class="row">
            
            <h1 style="text-align: center;">อัตราการเกิดโรคกับที่อยู่อาศัย</h1>
        </div>
        <br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 ">
                <form>
                <div class="input-group input-group-lg">
                    <input class="form-control" type="search" placeholder="ค้นหาจังหวัด">
                    <div class="input-group-btn">
                    <a href="<?php echo site_url('DiseaseRate/serchProvince');?>"><button class="btn btn" type="button">ค้นหา</button></a>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>