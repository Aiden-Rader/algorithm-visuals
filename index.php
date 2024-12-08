<!-- Home page/Start Page of website -->

<?php require_once 'common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= SITE_TITLE ?></title>
</head>

<body>
	<div class="wrapper">
		<?php require_once COMMON_PATH . 'nav_bar.php'; ?>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/main_data_structures_render/1080p60/MainDataStructureRender.mp4" type="video/mp4" aria-label="Data Structures Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/sorting_algorithms_render/1080p60/SortingAlgorithmsRender.mp4" type="video/mp4" aria-label="Sorting Algorithms Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/search_algorithms_render/1080p60/SearchAlgorithmsRender.mp4" type="video/mp4" aria-label="Search Algorithms Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/graph_algorithms_render/1080p60/GraphAlgorithmsRender.mp4" type="video/mp4" aria-label="Graph Algorithms Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/backtracking_algorithms_render/1080p60/BacktrackingAlgorithmsRender.mp4" type="video/mp4" aria-label="Backtracking Algorithms Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/dynamic_programming_render/1080p60/DynamicProgrammingRender.mp4" type="video/mp4" aria-label="Dynamic Programming Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/greedy_algorithms_render/1080p60/GreedyAlgorithmsRender.mp4" type="video/mp4" aria-label="Greedy Algorithms Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/string_algorithms_render/1080p60/StringAlgorithmsRender.mp4" type="video/mp4" aria-label="String Algorithms Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/machine_learning_render/1080p60/MachineLearningRender.mp4" type="video/mp4" aria-label="Machine Learning Visualization">
									Your browser does not support the video tag.
								</video>
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
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/quantum_algorithms_render/1080p60/QuantumAlgorithmsRender.mp4" type="video/mp4" aria-label="Quantum Algorithms Visualization">
									Your browser does not support the video tag.
								</video>
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
<?php require_once COMMON_PATH . 'footer.php'; ?>

<!-- Path to JavaScript -->
<script src="index.js"></script>
<script src="../common/scripts/common_scripts.js"></script>

<!-- Path to GSAP, used for scrolling animations -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

</html>