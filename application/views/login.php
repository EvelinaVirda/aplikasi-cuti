<!DOCTYPE html>
<html>
  <head>
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="login.php">Login Admin</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

<form method="post" action="<?php echo base_url('login/login_proses') ?>">
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Login Admin</h6>
			                <input class="form-control" name="username" type="text" placeholder="ID">
			                <input class="form-control" name="password" type="password" placeholder="*******">
							<input class="btn" type="submit" name="submit" value="login">
			                </div>                 
			            </div>
			        </div>			       
			    </div>
			</div>
		</div>
	</div>

	<table border="1">
		<tr>
			<th>username</th>
			<th>pass</th>
		</tr>
		<tr>
			<td>admin</td>
			<td>admin</td>
		</tr>
		<tr>
			<td>pimpinan</td>
			<td>pimpinan</td>
		</tr>
		<tr>
			<td>karyawan</td>
			<td>karyawan</td>
		</tr>
	</table>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
  </body>
</html>
