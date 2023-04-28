<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title><?= $this->renderSection('title') ?></title>
	<?= $this->include('includes/assets/header_assets') ?>
</head>
<body >
	<div class="page">
		<?= $this->include('includes/header') ?>
		<?= $this->include('includes/sidebar') ?>
		<div class="page-wrapper">
			<div class="container-xl">
			</div>
			<div class="page-body">
				<div class="container-xl d-flex flex-column justify-content-center">
					<?= $this->renderSection('content') ?>
				</div>
			</div>
			<?= $this->include('includes/footer') ?>    
		</div>
	</div>
	<?= $this->include('includes/assets/footer_assets') ?>
</body>
</html>