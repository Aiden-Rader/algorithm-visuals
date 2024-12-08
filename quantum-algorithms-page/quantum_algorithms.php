<!-- Quantum Algorithms Home Page of website -->

<?php require_once '../common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quantum Algorithms | <?= SITE_TITLE ?></title>
</head>

<body>
	<div class="wrapper">
		<?php require_once COMMON_PATH . 'nav_bar.php'; ?>
		<div class="main p-3">

			<!-- Page title and subtitle -->
			<div class="card mb-4 header-card">
				<div class="card-body text-center">
					<h1 class="card-title display-4 typing-text" id="typing-text-QuantumA"></h1>
					<p class="card-text lead">Quantum algorithms are super fast algorithms that run on quantum computers. They're used for tasks like factoring large numbers, searching databases, and simulating quantum systems.</p>
				</div>
			</div>

			<div class="my-4"></div>

			<!-- [SECTION NAME] Subheader (Optional) -->
			<div class="row mb-4">
				<div class="col text-center">
					<h2><i class="fa-[ICON NAME]"></i>[SECTION NAME]</h2>
					<p>[SECTION DESCRIPTION]</p>
				</div>
			</div>

			<div class="my-4"></div>

			<div class="row justify-content-center">
				<div class="col-md-4">
					<a href="../[ALGORITHM_NAME]/[ALGORITHM_NAME].php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/[ALGORITHM_NAME]_render/1080p60/[ALGORITHM_NAME]Render.mp4" type="video/mp4" aria-label="[ALGORITHM NAME] Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">[ALGORITHM NAME]</h5>
								<p class="card-text text-muted">[ALGORITHM DESCRIPTION]</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../[ALGORITHM_NAME]/[ALGORITHM_NAME].php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../manim-renders/gifs/[ALGORITHM_NAME].gif" class="card-img-top rounded-top" alt="Arrays Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">[ALGORITHM NAME]</h5>
								<p class="card-text text-muted">[ALGORITHM DESCRIPTION]</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../[ALGORITHM_NAME]/[ALGORITHM_NAME].php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../manim-renders/gifs/[ALGORITHM_NAME].gif" class="card-img-top rounded-top" alt="Arrays Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">[ALGORITHM NAME]</h5>
								<p class="card-text text-muted">[ALGORITHM DESCRIPTION]</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer Section -->
	<?php require_once COMMON_PATH . 'footer.php'; ?>

	<!-- Path to Common JavaScript -->
	<script src="../common/scripts/common_scripts.js"></script>

	<!-- Scripts for Quantum Algorithms Page goes here -->
	<script src="quantum_algorithms.js" defer></script>
</body>