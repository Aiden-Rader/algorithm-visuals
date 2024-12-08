<!-- Search Algorithms Home Page of website -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Serach Algorithms</title>
</head>

<body>
	<div class="wrapper">
		<?php include '../common/nav_bar.php'; ?>
		<div class="main p-3">

			<!-- Page title and subtitle -->
			<div class="card mb-4 header-card">
				<div class="card-body text-center">
					<h1 class="card-title display-4 typing-text" id="typing-text-SearchA"></h1>
					<p class="card-text lead">This is where you can visualize search algorithms. Search algorithms are used to find specific elements in a data structure. We have examples of Linear Search, Binary Search, and more!</p>
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
			</div>
		</div>
	</div>

	<!-- Footer Section -->
	<?php include '../common/footer.php'; ?>

	<!-- Path to Common JavaScript -->
	<script src="../common/scripts/common_scripts.js"></script>

	<!-- Scripts for Search Algorithms Page goes here -->
	<script src="search_algorithms.js"></script>
</body>