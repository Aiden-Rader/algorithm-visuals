<?php
	// common/head.php
	if (!defined('ASSET_VER')) {
		define('ASSET_VER', '1.0.0');
	}

	$title = $page['title'] ?? SITE_TITLE;
	$desc = $page['description'] ?? '';
	$css = $page['css'] ?? [];
	$coderunner = $page['coderunner'] ?? false;
	$use_gsap = $page['use_gsap'] ?? true;
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?= htmlspecialchars($title) ?></title>

		<?php if ($desc): ?>
			<meta name="description" content="<?= htmlspecialchars($desc) ?>">
		<?php endif; ?>

		<!-- Base CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@<?= CDN_BOOTSTRAP_VER ?>/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/<?= CDN_FONTAWESOME_VER ?>/css/all.min.css" rel="stylesheet">
		<link href="/styles.css?v=<?= ASSET_VER ?>" rel="stylesheet">
		<link href="/common/styles/nav_bar.css?v=<?= ASSET_VER ?>" rel="stylesheet">
		<link href="/common/styles/footer.css?v=<?= ASSET_VER ?>" rel="stylesheet">

		<!-- Additional CSS -->
		 <?php if ($coderunner): ?>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/monaco-editor@0.49.0/min/vs/editor/editor.main.min.css">
		<?php endif; ?>

		<?php if ($use_gsap): ?>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
		<?php endif; ?>

		<?php foreach ($css as $href): ?>
			<link rel="stylesheet" href="<?= htmlspecialchars($href) ?>?v=<?= ASSET_VER ?>">
		<?php endforeach; ?>
	</head>
	<body>
		<div class="wrapper"> <!-- Closes in foot.php -->
