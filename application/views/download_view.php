<?= $this->load->view('layout/header'); ?>
	<body class="bg"
		style="
			background: url('<?= base_url() . "public/img/" . $photo->path; ?>') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		">

		<div class="overlay">
			<footer>
				<a class="download" href="<?= base_url() . "public/img/" . $photo->path; ?>" download>Download</a>
				<ul class="share-icons">
		 		<li><a class="icon-link"></a></li>
		 		<li><a class="icon-twitter"></a></li>
		 		<li><a class="icon-facebook-1"></a></li>
		 	</ul>
			<!-- <i class="demo-icon icon-spin5 animate-spin"></i> -->
		 	<!-- <li><a class="demo-icon icon-upload-cloud-1"></a></li> -->
			</footer>
		</div>
<?= $this->load->view('layout/footer'); ?>