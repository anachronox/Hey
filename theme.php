<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="<?= $Wcms->getSiteLanguage() ?>">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta http-equiv="Content-Type" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta property="og:description" content="<?= $Wcms->page('description') ?>" />
		<meta property="og:image" content="<?= $this->url() ?>data/files/openmeta-thumbnail.png" />
		<meta name="twitter:card" content="summary_large_image">
		<meta property="twitter:domain" content="<?= $this->url() ?>" />
		<meta name="twitter:site" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta name="twitter:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />
		<meta name="twitter:image" content="<?= $this->url() ?>data/files/openmeta-thumbnail.png" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">		
	</head>
	
	<body>
		<!-- Settings panel and alerts -->
		<?= $Wcms->settings() ?>

		<?= $Wcms->alerts() ?>

		<header>
    		<a href="<?= $this->url() ?>" class="logo"><span><?= $Wcms->get('config', 'siteTitle') ?></span></a>
			<details class="hamnav">
			<summary><span>&#8285;</span></summary>
				<?= $Wcms->block('subside') ?>
			</details>
		</header>

		<main>
			<?= $Wcms->page('content') ?>
		</main>

		<footer>
			<nav class="hey-cat"><?= $Wcms->menu() ?></nav>
			<?= $Wcms->footer() ?>
		</footer>

		<!-- JS libraries -->
		<?= $Wcms->js() ?>
		<script src="<?= $Wcms->asset('js/theme.js') ?>" type="text/javascript"></script>

	</body>
</html>
