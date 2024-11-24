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
		<?php include '../common/nav_bar.php'; ?>
		<div class="main p-3">

			<!-- Page title and subtitle -->
			<div class="card mb-4 header-card">
				<div class="card-body text-center">
					<h1 class="card-title">Welcome to the Algorithm Visualization!</h1>
					<p class="card-text">This is where you can visualize fundamental concepts of Computer Science.</p>
				</div>
			</div>

			<!-- Section 1 Subheader -->
			<div class="row mb-4">
				<div class="col text-center">
					<h2>Data Structures and Core Concepts</h2>
					<p>Click on any section below to look at commonly used data structures and sort/search algorithms.</p>
				</div>
			</div>

			<!-- First Row -->
			<div class="row">
				<div class="col-md-4">
					<a href="../data-structures/data_structures.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../home-page/images/Data_Struct_Card.gif" class="card-img-top rounded-top" alt="Data Structures Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Data Structures</h5>
								<p class="card-text text-muted">Visualize common data structures such as Linked Lists, Queue, and much more.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../sorting-algorithms/sorting_alghorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../home-page/images/Sorting_Algo_Card.gif" class="card-img-top rounded-top" alt="Sorting Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Sorting Algorithms</h5>
								<p class="card-text text-muted">Visualize popular sorting algorithms like Quick Sort, Merge Sort, and more.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../search-algorithms/search_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../home-page/images/Search_Algo_Card.gif" class="card-img-top rounded-top" alt="Sorting Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Search Algorithms</h5>
								<p class="card-text text-muted">Explore various search algorithms like Binary Search and Linear Search, and visualize their efficiency.</p>
							</div>
						</div>
					</a>
				</div>
			</div>

			<!-- Section 2 Subheader -->
			<div class="row mb-4">
				<div class="col text-center">
					<h2>Intermediate Concepts</h2>
					<p>Click on any section below to dive deeper into the world of algorithms.</p>
				</div>
			</div>

			<!-- Second Row -->
			<div class="row">
				<div class="col-md-4">
					<a href="../graph-algorithms/graph_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../home-page/images/Graph_Algo_Card.gif" class="card-img-top rounded-top" alt="Graph Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Graph Algorithms</h5>
								<p class="card-text text-muted">Explore algorithms like BFS, DFS, and Dijkstra's algorithm in action.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../backtracking-algorithms/backtracking_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../home-page/images/Backtracking_Algo_Card.gif" class="card-img-top rounded-top" alt="Backtracking Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Backtracking Algorithms</h5>
								<p class="card-text text-muted">Understand and visualize backtracking algorithms through various examples.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Page Footer Section -->
	<?php include '../common/footer.php'; ?>

	<!-- JS for Home Page goes here -->
	<script src="scripts/index.js"></script>
</body>

</html>