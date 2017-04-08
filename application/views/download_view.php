<?php $this->load->view('layout/header'); ?>
	<body>
		<img class="main-img" src="<?= base_url() . "uploads/images/" . $photo->path; ?>">
		<footer>
			<a class="download" onClick="ga('send', 'event', 'button', 'click', 'download');" href="<?= base_url() . "uploads/images/" . $photo->path; ?>" download>Download</a>
			<ul class="share-icons">
		 		<li><a onClick="ga('send', 'event', 'social-icon', 'click', 'web-link');"><i class="fa fa-link" aria-hidden="true"></i></a></li>
		 		<li><a onClick="twitter()" ><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		 		<li><a onClick="facebook()"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		 	</ul>
		</footer>
<?php $this->load->view('layout/footer'); ?>