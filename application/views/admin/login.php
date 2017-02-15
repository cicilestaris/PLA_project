<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500');?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/login/bootstrap/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/login/font-awesome/css/font-awesome.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('asset/login/css/form-elements.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/login/css/style.css');?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url('asset/login/ico/favicon.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('asset/login/ico/apple-touch-icon-144-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('asset/login/ico/apple-touch-icon-114-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('asset/login/ico/apple-touch-icon-72-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('asset/login/ico/apple-touch-icon-57-precomposed.png');?>">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>SINDANISTRA</h1>
                            <div class="description">
                            	<p>
	                            Sistem Inventory Data Teknis Transport
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
								<?php echo validation_errors(); ?>
								<p style="color:red;"><?php echo $this->session->flashdata('notification')?></p> 
								<?php echo form_open('Home/login')?>
								
								  <div>
									<h3>Username</h3>
									<input type="text" name="username" placeholder="username ..." class="form-username form-control" value="<?php echo set_value('username')?>" />
								  </div>
								  <div>
								  <h3>Password</h3>
								  <input type="password" name="password" placeholder="password ..." class="form-password form-control" value="<?php echo set_value('password')?>" />
								  </div>
								  <div>
									<br>
									<button class="btn" type="submit" name="masuk" > Sign in! </button>
								  </div>     
		                    </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>


		
        <!-- Javascript -->
        <script src="<?php echo base_url('asset/login/js/jquery-1.11.1.min.js');?>"></script>
        <script src="<?php echo base_url('asset/login/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('asset/login/js/jquery.backstretch.min.js');?>"></script>
        <script src="<?php echo base_url('asset/login/js/scripts.js');?>"></script>
        
        <!--[if lt IE 10]>
            <script src="<?php echo base_url('asset/login/js/placeholder.js');?>"></script>
        <![endif]-->

    </body>

</html>