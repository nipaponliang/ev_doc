<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chart using codeigniter and morris.js</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>
  </head>
  <body>
    <h2>อัตราการเกิดโรคกับอาชีพ</h2>
    <h3>พนักงานเอกชน</h3>
 
  <div id="graph">
    <script>
        Morris.Bar({
          element: 'graph',
          data: <?php echo $data;?>,
          xkey: 'condition',
          ykeys: ['total'],
          labels: ['total']
          
        });
        
    </script>
  </div>
  <div class="row" style="float:right; margin-right: 5%; margin-top: 3vh;">
    <a href="<?php echo site_url('Chart/index6');?>"><button class="btn btn-success navbar-btn" style="background-color: aliceblue; width:150px; height: 8vh; color: black;">ต่อไป</button></a>
  </div>

  </body>
</html>
