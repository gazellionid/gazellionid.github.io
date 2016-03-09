<?php
$base_url = "http://localhost/gazel";
$view_url = "http://localhost/gazel/view_src/";
$url = explode("/",$_SERVER["REQUEST_URI"]);

$segmen1   = '';
$segmen2   = '';
$segmen3   = '';
$segmen4   = '';
$segmen5   = ''; 
$segmen6   = ''; 

if(isset($url[0])) {
	$segmen1   = $url[0];
}
if(isset($url[1])) {
	$segmen2   = $url[1];
}
if(isset($url[2])) {
	$segmen3   = $url[2];
}
if(isset($url[3])) {
	$segmen4   = $url[3];
}
if(isset($url[4])) {
	$segmen5   = $url[4];
}
if(isset($url[5])) {
	$segmen6   = $url[5]; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gazellion</title>

	<!-- Material Design Icons -->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
  	<!-- Bootstrap core CSS -->
  	<link href="<?php echo $view_url ?>css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Material Design Bootstrap -->
	<link href="<?php echo $view_url ?>css/mdb.css" rel="stylesheet">

	<!-- Template style -->
	<link href="<?php echo $view_url ?>css/style.css" rel="stylesheet">
   

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php


include 'code_src/route.php';

?>
	<script src="<?php echo $view_url ?>js/jquery.min.js"></script>
	<script src="<?php echo $view_url ?>js/bootstrap.min.js"></script>
 	<script src="<?php echo $view_url ?>js/jquery.mixitup.min.js"></script>
  	<script src="<?php echo $view_url ?>js/jquery.magnific-popup.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  

  <!-- Material Design Bootstrap -->
  <script src="<?php echo $view_url ?>js/mdb.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        // Mix It Up Gallery setup
        $('.container-produk').mixItUp();

        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>
</body>
</html>