<?php $this->load->view('layout/header'); ?>
	<body>
		<img class="main-img" src="<?= base_url() . "uploads/images/" . $photo->path; ?>">
		<footer>
			<a class="download" onClick="ga('send', 'event', 'button', 'click', 'download');" href="<?= base_url() . "uploads/images/" . $photo->path; ?>" download>Download</a>
			<ul class="share-icons">
		 		<li><a class="icon-link" onClick="ga('send', 'event', 'social-icon', 'click', 'web-link');"></a></li>
		 		<li><a class="icon-twitter" onClick="twitter()" ></a></li>
		 		<li><a class="icon-facebook-1" onClick="facebook()"></a></li>
		 	</ul>
		</footer>
<?php $this->load->view('layout/footer'); ?>