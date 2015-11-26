<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Free Food - Download <?= $photo->name; ?> </title>

	    <link rel="image_src" href="http://www.freshlysqzd.com/freefood/img/fb_thumb_main.png" />
	    <meta property="og:title" content="Free Food" />
	    <meta property="og:type" content="website" />
	    <meta property="og:image" content=".<?= base_url() . "public/" ?>img/fb_thumb_main.png" />
	    <meta property="og:description" content="" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= base_url() . "public/" ?>css/style.css">
		<link rel="stylesheet" href="<?= base_url() . "public/" ?>css/animation.css">
		<link rel="stylesheet" href="<?= base_url() . "public/" ?>css/fontello-codes.css">
		<link rel="stylesheet" href="<?= base_url() . "public/" ?>css/fontello-embedded.css">
		<link rel="stylesheet" href="<?= base_url() . "public/" ?>css/fontello.css">

		<!--[if lte IE 7]>
			<link rel="stylesheet" href="<?= base_url() . "public/" ?>css/fontello-ie7-codes.css">
			<link rel="stylesheet" href="<?= base_url() . "public/" ?>css/fontello-ie7.css">
		<![endif]-->
	</head>
	<body class="bg"
		style="
			background: url('<?= base_url() . "public/img/" . $photo->path . ".jpg"; ?>') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		">

  	 	<div class="overlay">
  	 	<footer>
  	 		<a class="download" href="<?= base_url() . "public/img/" . $photo->path . ".jpg"; ?>" download>Download</a>
	 	    <i class="demo-icon icon-upload-cloud-1"></i>
    		<i class="demo-icon icon-twitter"></i>
    		<i class="demo-icon icon-facebook-1"></i>
        	<!-- <i class="demo-icon icon-spin5 animate-spin"></i> -->
  	 	</footer>
  	 	</div>


		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	</body>
</html>