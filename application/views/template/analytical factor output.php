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
            <a href="<?php echo site_url('DiseaseRate/get4Show');?>"><button class="btn btn" type="button">วิเคราะห์</button></a>
            </form>
          </div>
        </div>

    </div>
          <br>
          <br>
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
              <h2 style="text-align: center;"> ผลการวิเคราะห์</h2>
            <img src="<?php echo base_url('img');?>/pie.png" width="250" height="auto"> <!-- ใส่กราฟวงกลม -->
            </div>
            <div class="col-md-2">
            <br>
            <br>
            <br>
            <br>
                <h3 style="text-align: center;">1 ชื่อโรค 50%</h3>
                <h3 style="text-align: center;">1 ชื่อโรค 50%</h3>
                <h3 style="text-align: center;">1 ชื่อโรค 50%</h3>
                <h3 style="text-align: center;">1 ชื่อโรค 50%</h3>
            </div>
        </div>
    </div>



    <div class="row" style="margin-left: 12%;">
        <a href="<?php echo site_url('DiseaseRate/get4');?>"><button class="btn btn-success navbar-btn" style="background-color: aliceblue; width:10%; height: 8vh; color: black;">ย้อนกลับ</button></a>
    </div>

    
</body>
</html>