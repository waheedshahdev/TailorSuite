<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Tailor Admin Panel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="<?php echo base_url(); ?>adminfiles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>adminfiles/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>adminfiles/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="<?php echo base_url(); ?>adminfiles/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>adminfiles/css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
    
    <div class="navbar navbar-fixed-top">
    
    <div class="navbar-inner">
        
        <div class="container">
            
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            
            <a class="brand" href="<?php echo base_url('admin'); ?>">
                Tailor                
            </a>          
    
        </div> <!-- /container -->
        
    </div> <!-- /navbar-inner -->
    
</div> <!-- /navbar -->



<div class="account-container">
    
    <div class="content clearfix">
                        <?php 
             if($this->session->flashdata("error_msg") != ''){?>
             <div class="alert alert-danger">
                 <button class="close" data-dismiss="alert"></button>
                 <?php echo $this->session->flashdata("error_msg");?>
             </div>
          <?php
            }
          ?>
          <?php 
             if($this->session->flashdata("success") != ''){?>
             <div class="alert alert-success">
                 <button class="close" data-dismiss="alert"></button>
                 <?php echo $this->session->flashdata("success");?>
             </div>
          <?php
            }
          ?>
        <form action="<?php echo base_url('admin/check_auth'); ?>" method="post">
        
            <h1>Member Login</h1>       
            
            <div class="login-fields">
                
                <p>Please provide your details</p>
                
                <div class="field">
                    <label for="username">Username</label>
                    <input type="email" id="username" name="email" value="" placeholder="Username" class="login username-field" />
                </div> <!-- /field -->
                
                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
                </div> <!-- /password -->
                
            </div> <!-- /login-fields -->
            
            <div class="login-actions">
                                    
                <button class="button btn btn-success btn-large" name="submit" value="Log In" type="submit">Sign In</button>
                
            </div> <!-- .actions -->
            
            
            
        </form>
        
    </div> <!-- /content -->
    
</div> <!-- /account-container -->



<div class="login-extra">
    <a href="#">Reset Password</a>
</div> <!-- /login-extra -->


<script src="<?php echo base_url(); ?>adminfiles/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url(); ?>adminfiles/js/bootstrap.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/signin.js"></script>

</body>

</html>
