<?php $PROJECT_URL = 'http://localhost/dalt/'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/highlight/css/highlight-night-owl.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/highlight/js/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
<style>
body { font-size:12px; }
.fs12 { font-size:12px; }
.fs11 { font-size:11px; }
.mtop15p { margin-top:15px; }
.mbot15p { margin-bottom:15px; }
</style>
</head>
<body>
  
<div class="container-fluid mtop15p">
  <div class="row">
    <div class="col-sm-3">
	<!-- -->
	<div class="list-group">
	<div class="list-group-item"><b>Categories -  Subcategories</b></div><!--/.list-group-item -->
	</div><!--/.list-group -->
	<!-- -->
    </div><!--/.col-sm-3  --->
    <div class="col-sm-9">
	<!-- -->	
    <?php include_once 'templates/code.php'; ?>
    <!-- -->
</div><!--/.col-sm-9  --->
  </div><!--/.row  -->
</div><!--/.container-fluid -->

</body>
</html>
