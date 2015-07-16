<!DOCTYPE HTML>
<html>
<head>

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>



</head>
<body>
    <div data-role="page">
    
    <div data-role="header">
    <h1>HOTT jQuery Mobile Training Locations</h1>
    </div>
    <div role="main" class="ui-content">
    
    <?php 
    $loc = $_GET['loc'];

    echo "List of dates for jQuery Mobile Programming courses in ",ucfirst($loc);
    ?>
    </div>

    <div data-role="footer">
    <h4>Copyright &copy;2014 HOTT, Inc.</h4>
    </div>
    </div>
</body>
</html>