<!DOCTYPE html>
<html>
<head>
	<title>Form Results</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/jquery.mobile-1.4.2.min.css" />
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.mobile-1.4.2.min.js"></script>
</head>
<body>
	<div data-role="page">

		<div data-role="header">
			<h1>Form Results</h1>
		</div><!-- /header -->

		<div role="main" class="ui-content">
			<?php 
				foreach($_POST as $fldname => $val)
				{ 
 		
				echo "The form field <strong>$fldname</strong> has a value of <strong>$val</strong> <br> ";
				}
			?>
		</div><!-- /content -->
		<div data-role="footer">
			<h4>Copyright &copy;2014 HOTT, Inc.</h4>
		</div><!-- /footer -->
	</div><!-- /page -->

</body>
</html>