<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Free Food</title>

	    <link rel="image_src" href="http://www.freshlysqzd.com/freefood/img/fb_thumb_main.png" />
	    <meta property="og:title" content="Free Food" />
	    <meta property="og:type" content="website" />
	    <meta property="og:image" content=".<?= base_url() . "public/" ?>img/fb_thumb_main.png" />
	    <meta property="og:description" content="" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= base_url() . "public/" ?>css/style.css">
	</head>
	<body>
		<div class="container header">
			<div class="col-md-6 col-md-offset-3">
				<h2 class="text-center">Free Food Photography</h2>
				<h6 class="text-center">MADE BY <a href="www.freshlysqzd.com">FRESHLY SQUEEZED DESIGNS</a></h6>
				<p class="text-center"><b>Free (<a href="<?= base_url() . "public/" ?>license" class="gray"> do whatever you want </a>) high-resolution food photos.</b> I take a lot of food photos and never really do anything with them, so here you go.</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
			   	<?php foreach ($photos as $photo):?>
					<div class="col-lg-6 col-md-6 col-xs-12 thumb">
						<a href="<?= base_url(). "download?img=" . $photo['id']; ?>"><img src="<?= base_url() . "public/img/preview/" . $photo['path'] . ".jpg"; ?>" alt="<?= $photo['description']; ?>"></a>
					</div>
	          	<?php endforeach;?>
			</div>
		</div>

		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	</body>
</html>