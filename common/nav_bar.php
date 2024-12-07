<head>
	<!-- Global Styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../styles.css" rel="stylesheet">
</head>

<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php"); // Get the current page name
?>

<div class="wrapper">
	<aside id="sidebar">
		<div class="d-flex">
			<button id="btn_toggle" type="button" class="btn_toggle">
				<i class="fa-solid fa-grip-lines"></i>
			</button>
			<div class="sidebar-logo">
				<a href="#">Navigation</a>
			</div>
		</div>
		<ul class="sidebar-nav">
			<li class="sidebar-item <?= ($currentPage === 'index') ? 'active' : '' ?>">
				<a href="../../index.php" class="sidebar-link">
					<i class="fa-solid fa-house"></i>
					<span> Home </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'data_structures') ? 'active' : '' ?>">
				<a href="../data-structures-page/data_structures.php" class="sidebar-link">
					<i class="fa-solid fa-sitemap"></i>
					<span> Data Structures </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'sorting_algorithms') ? 'active' : '' ?>">
				<a href="../sorting-algorithms-page/sorting_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-sort-amount-up"></i>
					<span> Sorting Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'search_algorithms') ? 'active' : '' ?>">
				<a href="../search-algorithms-page/search_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-magnifying-glass"></i>
					<span> Search Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'graph_algorithms') ? 'active' : '' ?>">
				<a href="../graph-algorithms-page/graph_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-diagram-project"></i>
					<span> Graph Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'backtracking_algorithms') ? 'active' : '' ?>">
				<a href="../backtracking-algorithms-page/backtracking_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-route"></i>
					<span> Backtracking Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'dynamic_programming') ? 'active' : '' ?>">
				<a href="../dynamic-programming-page/dynamic_programming.php" class="sidebar-link">
					<i class="fa-solid fa-chart-line"></i>
					<span> Dynamic Programming </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'greedy_algorithms') ? 'active' : '' ?>">
				<a href="../greedy-algorithms-page/greedy_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-hand-holding-dollar"></i>
					<span> Greedy Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'string_algorithms') ? 'active' : '' ?>">
				<a href="../string-algorithms-page/string_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-font"></i>
					<span> String Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'machine_learning') ? 'active' : '' ?>">
				<a href="../machine-learning-page/machine_learning.php" class="sidebar-link">
					<i class="fa-solid fa-robot"></i>
					<span> Machine Learning </span>
				</a>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'quantum_algorithms') ? 'active' : '' ?>">
				<a href="../quantum-algorithms-page/quantum_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-atom"></i>
					<span> Quantum Algorithms </span>
				</a>
			</li>
		</ul>
		<div class="sidebar-footer">
			<li class="sidebar-item">
				<a class="sidebar-link" data-bs-toggle="collapse" href="#about_dropdown" role="button" aria-expanded="false" aria-controls="about_dropdown" aria-label="Toggle About Dropdown">
					<i class="fa-solid fa-circle-info"></i>
					<span> About </span>
				</a>
				<ul class="collapse" id="about_dropdown">
					<li class="sidebar-item <?= ($currentPage === 'soruces') ? 'active' : '' ?>">
						<a href="../about-page/sources-page/sources.php" class="sidebar-link">
							<i class="fa-solid fa-quote-right"></i>
							<span> Sources </span>
						</a>
					</li>
					<li class="sidebar-item <?= ($currentPage === 'creator') ? 'active' : '' ?>">
						<a href="../about-page/creator-page/creator.php" class="sidebar-link">
							<i class="fa-solid fa-user"></i>
							<span> Creator </span>
						</a>
					</li>
				</ul>
			</li>
			<li class="sidebar-item <?= ($currentPage === 'settings') ? 'active' : '' ?>">
				<a href="../settings-page/settings.php" class="sidebar-link">
					<i class="fa-solid fa-gear"></i>
					<span> Settings </span>
				</a>
			</li>
		</div>
	</aside>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/2f900b8023.js"></script>

<!-- Path to JavaScript -->
<script src="/common/scripts/nav_bar.js"></script>