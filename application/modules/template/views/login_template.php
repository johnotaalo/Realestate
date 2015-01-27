<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/icon.png">

	<title><?php echo $title;?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>assets/admin/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" />	
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
	<script>
$(document).ready(function(){
  <?php if($error){?>
    $.jGrowl('<?php echo $error; ?>', { sticky: true, theme: 'growl-error', header: 'Error!' });
  <?php } ?>
});
</script>
</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

<?php
	$this->load->view($content_page);
?>
	
</div>

	<script type="text/javascript">
    $(function(){
      $("#cl-wrapper").css({opacity:1,'margin-left':0});
    });
  </script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url(); ?>assets/admin/js/behaviour/voice-commands.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.flot/jquery.flot.labels.js"></script>
</body>

</html>
