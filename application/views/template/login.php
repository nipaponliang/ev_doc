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
    <title>Document</title>
</head>
<body>
<div class="container">
    </br>
    <h3>Complete User Registration and Login System in Codeigniter</h3>
    </br>
    <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
            <form method="post" action="<?php echo base_url();?>login/validation">
                <div class="form-group">
                    <label>Enter Email Address</label>
                    <input type="text" name="user" class="form-control" value="<?php echo set_value('email');?>"/>
                    <span><?php echo form_error('email');?></span>
                </div>
                <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password');?>"/>
                <span class="text-danger"><?php echo form_error('user_password');?></span>
                </div>
                <div class="form-group">
                <input type="submit" name="login" value="Login" class="btn btn-info"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo base_url(); ?>register">Register</a>
                </div>
                </form>
        </div>
    </div>

    <?php
    echo $message;
    ?>
    </div>
    
</body>
</html>