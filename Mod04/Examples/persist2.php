<?php if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') { ?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
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

<?php } ?>
<div data-role="page">
  <div role="main" class="ui-content">
    <h1>Contact Us</h1>
    <form action="#" method="post">
      <div class="ui-field-contain">
        <label for="txtName">Name:</label>
        <input type="text" name="txtName" id="txtName">
      </div>
      <div class="ui-field-contain">
        <label for="txtEmail">Email:</label>
        <input type="email" name="txtEmail" id="txtEmail">
      </div>
      <div class="ui-field-contain">
        <label for="txtMessage">Your Message:</label>
        <textarea cols="40" rows="8" name="txtMessage" id="txtMessage"></textarea>
      </div>
      <input type="submit" name="btnSend" id="btnSend" value="Send">
    </form>
  </div>

</div>

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

</div>

</body>
</html>
<?php } ?>