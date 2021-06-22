
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="#"><img src="<?php echo base_url('img');?>/logo.png" width="100" height="auto" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('Home/index');?>">หน้าแรก <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">วิเคราะห์ข้อมูล</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('DiseaseRate/index');?>">วิเคราะห์ความเสี่ยงการเกิดโรค</a>
                                <a class="dropdown-item" href="#">อัตราการเกิดโรคและปัจจัยอื่นๆ</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">เลือกคลินิก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">แนะนำยา</a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-0" action="">
                    <button class="btn my-2 my-sm-0" type="submit">เข้าสู่ระบบ / ลงทะเบียน</button>
                </form>
            </nav>
        </div>
    </div>
