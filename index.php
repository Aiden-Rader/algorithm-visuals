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
			<div class="mb-4 header-card card">
				<div class="card-body text-center">
					<h1 class="card-title display-4 typing-text" id="typing-text-home"></h1>
					<p class="card-text lead">Visualize and learn fundamental concepts of Computer Science, such as Data Structures, Sorting and Searching Algorithms, Graph Algorithms, and more.</p>
				</div>
			</div>

			<div class="my-4"></div>

			<!-- Beginner Concepts Subheader -->
			<section class="row mb-4">
				<div class="col text-center">
					<h2><i class="fa fa-book"></i> Beginner Concepts </h2>
					<p>Explore foundational computer science concepts to build a strong base.</p>
				</div>
			</section>

			<div class="my-4"></div>

			<div class="row justify-content-center">
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/data_structures.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../manim-renders/gifs/MainDataStructureRender.gif" class="card-img-top rounded-top" alt="Data Structures Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Data Structures</h5>
								<p class="card-text text-muted">Linked Lists, Stacks, Queues, and Trees.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 content-card coming-soon">
					<a href="../sorting-algorithms-page/sorting_alghorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/Sorting_Algo_Card.gif" class="card-img-top rounded-top" alt="Sorting Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Sorting Algorithms</h5>
								<p class="card-text text-muted">COMING SOON: Bubble Sort, Quick Sort, Merge Sort, and more.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 content-card coming-soon">
					<a href="../search-algorithms-page/search_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/Search_Algo_Card.gif" class="card-img-top rounded-top" alt="Sorting Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Search Algorithms</h5>
								<p class="card-text text-muted">COMING SOON: Binary Search, Linear Search, and beyond.</p>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="my-4"></div>

			<!-- Intermediate Concepts Subheader -->
			<section class="row mb-4">
				<div class="col text-center">
					<h2><i class="fa fa-chart-bar"></i> Intermediate Concepts </h2>
					<p>Delve into graph traversal, backtracking, and advanced techniques.</p>
				</div>
			</section>

			<div class="my-4"></div>

			<div class="row justify-content-center">
				<div class="col-md-4 content-card coming-soon">
					<a href="algorithm-visuals/graph-algorithms/graph_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/Graph_Algo_Card.gif" class="card-img-top rounded-top" alt="Graph Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Graph Algorithms</h5>
								<p class="card-text text-muted">COMING SOON: BFS, DFS, and shortest pathfinding.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 content-card coming-soon">
					<a href="../backtracking-algorithms/backtracking_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/Backtracking_Algo_Card.gif" class="card-img-top rounded-top" alt="Backtracking Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Backtracking Algorithms</h5>
								<p class="card-text text-muted">COMING SOON: Solve constraint problems like N-Queens and Sudoku.</p>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="my-4"></div>

			<!-- Advanced Concepts Subheader -->
			<section class="row mb-4">
				<div class="col text-center">
					<h2><i class="fa fa-flask"></i> Advanced Concepts </h2>
					<p>Explore optimization techniques and advanced algorithms.</p>
				</div>
			</section>

			<div class="my-4"></div>

			<div class="row justify-content-center">
				<div class="col-md-4 content-card coming-soon">
					<a href="../dynamic-programming/dynamic_programming.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/Dynamic_Programming_Card.gif" class="card-img-top rounded-top" alt="Dynamic Programming Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Dynamic Programming</h5>
								<p class="card-text text-muted">COMING SOON: Knapsack Problem, Longest Common Subsequence, and more.</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-4 content-card coming-soon">
					<a href="../greedy-algorithms/greedy_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/Greedy_Algo_Card.gif" class="card-img-top rounded-top" alt="Greedy Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Greedy Algorithms</h5>
								<p class="card-text text-muted">COMING SOON: Optimal substructure problems like Huffman Encoding.</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-4 content-card coming-soon">
					<a href="../string-algorithms/string_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/String_Algo_Card.gif" class="card-img-top rounded-top" alt="String Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">String Algorithms</h5>
								<p class="card-text text-muted">COMING SOON: KMP Pattern Matching, Rolling Hash, and more.</p>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="my-4"></div>

			<section class="row mb-4">
				<div class="col text-center">
					<h2><i class="fa fa-rocket"></i>Cutting Edge Concepts</h2>
					<p>Discover modern algorithms shaping the future of computing.</p>
				</div>
			</section>

			<div class="my-4"></div>

			<div class="row justify-content-center">
				<div class="col-md-4 content-card coming-soon">
					<a href="../machine-learning/machine_learning.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/Machine_Learning_Card.gif" class="card-img-top rounded-top" alt="Machine Learning Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Machine Learning Algorithms</h5>
								<p class="card-text text-muted">COMING SOON: Linear Regression, Decision Trees, and Clustering.</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-4 content-card coming-soon">
					<a href="../quantum-algorithms/quantum_algorithms.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../temp/Quantum_Algo_Card.gif" class="card-img-top rounded-top" alt="Quantum Algorithms Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Quantum Algorithms</h5>
								<p class="card-text text-muted">COMING SOON: Shors Algorithm, Grovers Search.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>

<!-- Home Page Footer Section -->
<?php include 'common/footer.php'; ?>

<!-- Path to JavaScript -->
<script src="index.js"></script>
<script src="../common/scripts/common_scripts.js"></script>

<!-- Path to GSAP, used for scrolling animations -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

</html>