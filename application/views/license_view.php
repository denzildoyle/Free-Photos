<?= $this->load->view('layout/header'); ?>
	<body>
		<div class="container header">
			<div class="col-md-6 col-md-offset-3">
				<a class="logo" href="<?= base_url(); ?>" onClick="ga('send', 'event', 'text', 'click', 'Logo');"><h2 class="text-center">Fresh Photos</h2></a>
				<h6 class="text-center">MADE BY <a href="http://www.freshlysqzd.com" onClick="ga('send', 'event', 'link', 'click', 'freshlysqzd.com');" >FRESHLY SQUEEZED DESIGNS</a></h6>

				<p>All photos published on Fresh Photos are licensed under Creative Commons Zero which means you can copy, modify, distribute and use the photos for free, including commercial purposes, without asking permission from or providing attribution to the photographer or Unsplash. Questions? <a href="mailto:fresh@freshlysqzd.com">Get in touch with us.</a></p>
			</div>
		</div>
<?= $this->load->view('layout/footer'); ?>