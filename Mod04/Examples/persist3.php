<?php if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') { ?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/jquery.mobile-1.4.2.min.css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script>
		$(function(){
			$("[data-role='navbar']").navbar();
			$("[data-role='header'], [data-role='footer']").toolbar();
		});
</script>
<script src="js/jquery.mobile-1.4.2.min.js"></script>
</head>
<body>
<div data-role="header" data-position="fixed" data-theme="b"> <a href="#" data-rel="back" class="ui-btn ui-btn-left ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-l">Back</a>
  <h1>Fixed external header</h1>
</div>
<!-- /header -->
<?php } ?>
<div data-role="page">
  <div role="main" class="ui-content">
    <h1>About Us</h1>
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
    </div>
  </div>
  <!-- /content --> 
</div>
<!-- /page -->
<?php if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') { ?>
<div data-role="footer" data-position="fixed" data-theme="b">
  <div data-role="navbar">
    <ul>
      <li>
	  <a href="persist1.php" data-prefetch="true" data-transition="none">Home</a></li>
      <li>
	  <a href="persist2.php" data-prefetch="true" data-transition="flip">Contact Us</a></li>
      <li>
	  <a href="persist3.php" data-prefetch="true" data-transition="turn">About Us</a></li>
    </ul>
  </div>
  <!-- /navbar --> 
</div>
<!-- /footer -->
</body>
</html>
<?php } ?>