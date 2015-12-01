<?= $this->load->view('layout/header'); ?>
	<body>
		<div class="container header">
			<div class="col-md-6 col-md-offset-3">
				<a class="logo" href="<?= base_url(). ""; ?>"><h2 class="text-center">Free Food Photography</h2></a>
				<h6 class="text-center">MADE BY <a href="http://www.freshlysqzd.com">FRESHLY SQUEEZED DESIGNS</a></h6>

				<p>We'll review your photo for publishing and if <a class="link" href="">your submission is accepted</a>, your work will be distributed for free under the <a class="link" href="<?= base_url() . "license" ?>">Free Food Photography license</a>.
				<br><small>Please only upload photos <a class="link" href="">that you own the rights to.</a></small></p>

				<?php if ($this->session->flashdata('success-message')) : ?>
					<div class="alert alert-success">
						<?= $this->session->flashdata('success-message'); ?>
					</div>
				<?php endif; ?>
				<?= form_open_multipart('submit/do_upload');?>
					<div class="form-group">
					</div>

					<?php if(form_error('fullname') != '') echo "<div class=\"form-group error\">"; else echo "<div class=\"form-group\">"; ?>
						<span class="help-inline"><?= form_error('fullname'); ?></span>
						<input type="text" name="fullname" class="form-control" value="<?= set_value('fullname'); ?>" placeholder="full name">
					</div>

					<?php if(form_error('title') != '') echo "<div class=\"form-group error\">"; else echo "<div class=\"form-group\">"; ?>
						<span class="help-inline"><?= form_error('title'); ?></span>
						<input type="text" name="title" class="form-control" value="<?= set_value('title'); ?>" placeholder="photo title">
					</div>

					<?php if(form_error('description') != '') echo "<div class=\"form-group error\">"; else echo "<div class=\"form-group\">"; ?>
						<span class="help-inline"><?= form_error('description'); ?></span>
						<textarea name="description" class="form-control" placeholder="photo description"><?= set_value('description'); ?></textarea>
					</div>

					<?php if ($this->session->flashdata('error-message')) : ?>
						<div class="alert alert-success">
							<span class="help-inline"><?= form_error('error-message'); ?></span>
						</div>
					<?php endif; ?>
					<input type="file" name="photo" size="20" />
					<span><small>.jpg images only</small></span>

					<!-- <p class="text-right"><small>Please enter information in all fields.</small></p> -->

					<center><input type="submit" value="Submit" class="btn btn-primary" role="button"></center>
				</form>
			</div>
		</div>
<?= $this->load->view('layout/footer'); ?>