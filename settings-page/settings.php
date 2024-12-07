<!-- Settings Page -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Settings</title>

	<!-- Settings Page Specific Styles -->
	<link href="settings.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include '../common/nav_bar.php'; ?>
		<div class="settings-container">
			<h2><i class="fa-solid fa-gear"></i>Settings</h2>

			<!-- Dark Mode -->
			<div class="form-switch">
				<input type="checkbox" id="dark-mode-toggle">
				<label for="dark-mode-toggle">Enable Dark Mode</label>
			</div>

			<!-- Sidebar State -->
			<div class="form-group">
				<label for="sidebarState">Default Sidebar State</label>
				<select id="sidebarState" class="form-control">
					<option value="expanded">Expanded</option>
					<option value="collapsed">Collapsed</option>
				</select>
			</div>

			<!-- Font Size -->
			<div class="slider-container">
				<label for="fontSize">Font Size</label>
				<input type="range" id="fontSize" min="12" max="24" value="16">
				<span id="fontSizeValue">16px</span>
			</div>

			<!-- Reset Settings -->
			<button id="resetSettings" class="reset-button">Reset to Default</button>
		</div>
	</div>

	<!-- Footer Section -->
	<?php include '../common/footer.php'; ?>

	<!-- Path to Common JavaScript -->
	<script src="/common/scripts/common_scripts.js"></script>

	<!-- Path to Dark Mode JavaScript Library -->
	<script src="https://cdn.jsdelivr.net/npm/darkmode-js"></script>

	<!-- Scripts for Settings Page -->
	<script src="settings.js"></script>
</body>