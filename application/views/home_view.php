<?= $this->load->view('layout/header'); ?>
	<body>
		<div class="container header">
			<div class="col-md-6 col-md-offset-3">
				<a class="logo" href="<?= base_url(). ""; ?>"><h2 class="text-center">Free Food Photography</h2></a>
				<h6 class="text-center">MADE BY <a href="http://www.freshlysqzd.com" onClick="ga('send', 'event', 'link', 'click', 'freshlysqzd.com');" >FRESHLY SQUEEZED DESIGNS</a></h6>

				<p class="text-center"><b>Free (<a href="<?= base_url() . "license" ?>" onClick="ga('send', 'event', 'link', 'click', 'license');" class="link"> do whatever you want </a>) high-resolution food photos.</b> We take a lot of food photos and never really do anything with them, so here you go.</p>
				<center><a href="<?= base_url(). "submit"; ?>" onClick="ga('send', 'event', 'button', 'click', 'submit');" class="btn btn-primary" role="button">Upload Photo <i class="icon icon-upload-cloud-1"></i></a></center>
			</div>
		</div>
		<div class="container">
			<div class="row">
			   	<?php foreach ($photos as $photo):?>
					<?php if($photo['id'] == 3) : ?>
						<div class="col-lg-6 col-md-6 col-xs-12 thumb">
							<div class="newsletter">
							    <img src="http://freshlysqzd.com/freefood/public/img/preview/FreeFoodPhotography_half-cantaloupe.jpg" alt="Juicy cantaloupe cut in half">

							    <div class="subscribe">
									<h3 class="text-center">Newsletter</h3>
									<p class="text-center">Free, hi-res food photos delivered to your inbox.</p>
									<form action="//denzildoyle.us10.list-manage.com/subscribe/post?u=e0400665d26ade2c30eb26cf7&amp;id=33b52d6fdc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										<?php if(form_error('email') != '') echo "<div class=\"form-group error\">"; else echo "<div class=\"form-group\">"; ?>
											<span class="help-inline"><?= form_error('email'); ?></span>
											<input type="text" name="EMAIL" class="form-control" value="<?= set_value('email'); ?>" placeholder="email address">
										</div>
										<input type="text" name="b_e0400665d26ade2c30eb26cf7_33b52d6fdc" tabindex="-1" value="" hidden>
										<center><input type="submit" value="Submit" class="form-control btn btn-primary" role="button"></center>
									</form>
						    	</div>
							</div>
						</div>
					<?php endif; ?>

					<div class="col-lg-6 col-md-6 col-xs-12 thumb" <?php if($photo['id'] == 4) : ?> id="photo-4" <?php endif; ?> >
						<?php if(!$photo['ad']) : ?>
							<a href="<?= base_url(). "download?img=" . $photo['id']; ?>" onClick="ga('send', 'event', 'image', 'click', '<?= "image-ID-" . $photo['id']; ?>');"><img class="lazy" data-original="<?= base_url() . "public/img/preview/" . $photo['path']; ?>" alt="<?= $photo['description']; ?>"></a>
							<p class="photo-title text-center"><b><?= $photo['title']; ?></b> by <?= $photo['fullname']; ?></p>
						<?php else: ?>
							<a href="<?= $photo['url']; ?>" onClick="ga('send', 'event', 'image-ad', 'click', '<?= $photo['url']; ?>');"><img class="lazy" data-original="<?= base_url() . "public/img/preview/" . $photo['path']; ?>" alt="<?= $photo['description']; ?>"></a>
							<p class="photo-title text-center"><?= $photo['description']; ?></p>
						<?php endif; ?>
					</div>
          		<?php endforeach;?>
			</div>
		</div>
<?= $this->load->view('layout/footer'); ?>