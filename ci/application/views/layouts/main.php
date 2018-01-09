<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KQ-Errand</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <script src="<?php echo base_url(); ?>assets/js-webshim/minified/polyfiller.js"></script>

	
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">KQ-Errand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
        <?php if (!$this->session->userdata('logged_in')): ?>
          
        <li><a href="<?php echo base_url(); ?>users/register">Register<span class="sr-only">(current)</span></a></li>
        <?php else: ?>

       <li><a href="<?php echo base_url(); ?>projects">Projects<span class="sr-only">(current)</span></a></li>
     <?php endif; ?>

      </ul>



      <?php if($this->session->userdata('logged_in')): ?>

      <ul class="nav navbar-nav navbar-right">

        <li><a href="<?php echo base_url(); ?>users/logout" class="btn btn-default">Log Out</a></li>
      </ul>
      <?php endif; ?>

    </div>
  </div>
</nav>

<br><br>

	<div class="container">


		<div class="col-md-3">
			
			<?php $this->load->view('users/login_view'); ?>

		</div>

<br>
		<div class="col-md-9 well">
			<?php $this->load->view($main_view); ?>
		</div>
		



	</div>

<div class="container">
  <br><br><br><hr>
   <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">Copyright &copy; gobelinzdev.com 2016</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

</div>

</body>
</html>