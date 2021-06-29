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
    
    <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    </style>
</head>
<body>
    
<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <?php
    if($this->session->flashdata('message')){
        echo '<div class="alert alert-success">
        '.$this->session->flashdata("message").'</div>';
    }
    ?>
    <form method="POST" action="<?php echo base_url();?>register/validation">
    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" value="<?php echo set_value('email')?>"/>
    <span class="text-danger"><?php echo form_error('email');?></span>
    </div>

    <div class="form-group">
    <label for="first_name">Firstname</label>
    <input type="text" name="first_name" class="form-control" value="<?php echo set_value('first_name')?>"/>
    <span class="text-danger"><?php echo form_error('first_name');?></span>
    </div>

    <div class="form-group">
    <label for="last_name">Lastname</label>
    <input type="text" name="last_name" class="form-control" value="<?php echo set_value('last_name')?>"/>
    <span class="text-danger"><?php echo form_error('last_name');?></span>
    </div>

    <div class="form-group">
    <label for="birth_day">Birthday</label>
    <input type="date" name="birth_day" class="form-control" value="<?php echo set_value('birth_day')?>"/>
    <span class="text-danger"><?php echo form_error('birth_day');?></span>
    </div>

    <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" name="gender" class="form-control" value="<?php echo set_value('gender')?>"/>
    <span class="text-danger"><?php echo form_error('gender');?></span>
    </div>

    <div class="form-group">
    <label for="user_password">Password</label>
    <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password')?>"/>
    <span class="text-danger"><?php echo form_error('user_password');?></span>
    </div>

    <div class="form-group">
    
    <input type="submit" name="register" value="Register" class="btn btn-info"/>

    </div>
    </form>

    
</div>

</body>
</html>