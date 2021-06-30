<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #676767;
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