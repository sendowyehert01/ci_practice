<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-3">
            <?php 
                $this->load->view('users/login_view'); 
            ?>
        </div>
        <div class="col-xs-9">
            <?php 
                $this->load->view($main_view); 
            ?>
        </div>
    </div>
</body>
</html>