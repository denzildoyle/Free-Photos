<?php $this->load->view('layout/header'); ?>
	<body>
		<div class="container header">
			<div class="col-md-6 col-md-offset-3">
				<a class="logo" href="<?= base_url(). ""; ?>"><h2 class="text-center">Fresh Photos</h2></a>
				<h6 class="text-center">MADE BY <a href="http://www.freshlysqzd.com" onClick="ga('send', 'event', 'link', 'click', 'freshlysqzd.com');" >FRESHLY SQUEEZED DESIGNS</a></h6>
				<p class="text-center"><b>Free (<a href="<?= base_url() . "license" ?>" onClick="ga('send', 'event', 'link', 'click', 'license');" class="link"> do whatever you want </a>) high-resolution Caribbean photos. <a href="http://eepurl.com/cJYCBv">Subscribe</a> for update</b><br><br> For more information contact us at <a class="uppercase" href="mailto:fresh@freshlysqzd.com">fresh@freshlysqzd.com</a></p>
				<center><a href="<?= base_url(). "submit"; ?>" onClick="ga('send', 'event', 'button', 'click', 'submit');" class="btn btn-primary" role="button">Upload Photo <i class="fa fa-cloud-upload" aria-hidden="true"></i></a></center>
			</div>
		</div>
		<div class="container">
			<div class="row">
			   	<?php foreach ($photos as $photo):?>
					<div class="col-lg-6 col-md-6 col-xs-12 thumb" <?php if($photo['id'] == 4) : ?> id="photo-4" <?php endif; ?> >
						<?php if(!$photo['ad']) : ?>
							<a href="<?= base_url(). "download?img=" . $photo['id']; ?>" onClick="ga('send', 'event', 'image', 'click', '<?= "image-ID-" . $photo['id']; ?>');"><img class="lazy" data-original="<?= base_url() . "uploads/preview/" . $photo['path']; ?>" alt="<?= $photo['description']; ?>"></a>
							<p class="photo-title text-center"><b><?= $photo['title']; ?></b> by <?= $photo['fullname']; ?></p>
						<?php else: ?>
							<a href="<?= $photo['url']; ?>" onClick="ga('send', 'event', 'image-ad', 'click', '<?= $photo['url']; ?>');"><img class="lazy" data-original="<?= base_url() . "public/img/preview/" . $photo['path']; ?>" alt="<?= $photo['description']; ?>"></a>
							<p class="photo-title text-center"><?= $photo['description']; ?></p>
						<?php endif; ?>
					</div>
          		<?php endforeach;?>
			</div>
			<a class="subscribe-tag" href="http://eepurl.com/cJYCBv">Subscribe</a>
		</div>
<?php $this->load->view('layout/footer'); ?>