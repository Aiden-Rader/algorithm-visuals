<!-- Home page/Start Page of website -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Algorithm Visualization</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'common/nav_bar.php'; ?>

		<div class="main p-3">

			<!-- Page title and subtitle -->
			<div class="card mb-4 header-card">
				<div class="card-body text-center">
					<h1 class="card-title">Welcome to the Algorithm Visualization!</h1>
					<p class="card-text">This is where you can visualize different sorting algorithms.</p>
				</div>
			</div>

			<!-- First Row -->
			<div class="row">
				<div class="col-md-4">
					<a href="sorting_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<h5 class="card-title">Sorting Algorithms</h5>
							<p class="card-text">Visualize popular sorting algorithms like Quick Sort, Merge Sort, and more.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="search_alogorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<h5 class="card-title">Search Algorithms</h5>
							<p class="card-text">Explore various search algorithms like Binary Search and Linear Search, and visualize their efficiency.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="graph_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<h5 class="card-title">Graph Algorithms</h5>
							<p class="card-text">Explore algorithms like BFS, DFS, and Dijkstra's algorithm in action.</p>
						</div>
					</a>
				</div>
			</div>

			<!-- Second Row -->
			<div class="row">
				<div class="col-md-4">
					<a href="backtracking_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<h5 class="card-title">Backtracking Algorithms</h5>
							<p class="card-text">Understand and visualize backtracking algorithms through various examples.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Page Footer Section -->
	<footer class="text-center">
		<div>Created by Aiden Rader | Learn and Understand Algorithms!</div>
		<div>
			<a href="https://www.linkedin.com/in/aiden-rader/" target="_blank">
				<i class="fa-brands fa-linkedin"></i> LinkedIn
			</a> |
			<a href="https://github.com/Aiden-Rader" target="_blank">
				<i class="fa-brands fa-github"></i> GitHub
			</a>
		</div>
	</footer>

	<!-- JS for Home Page goes here -->
	<script src="scripts/index.js"></script>
</body>

</html>