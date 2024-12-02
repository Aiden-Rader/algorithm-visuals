<head>
	<!-- Global Styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../styles.css" rel="stylesheet">
</head>

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
			<li class="sidebar-item">
				<a href="../../index.php" class="sidebar-link">
					<i class="fa-solid fa-house"></i>
					<span> Home </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="../data-structures-page/data_structures.php" class="sidebar-link">
					<i class="fa-solid fa-sitemap"></i>
					<span> Data Structures </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="../sorting-algorithms-page/sorting_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-sort-amount-up"></i>
					<span> Sorting Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="../search-algorithms-page/search_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-magnifying-glass"></i>
					<span> Search Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="../graph-algorithms-page/graph_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-diagram-project"></i>
					<span> Graph Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="../backtracking-algorithms-page/backtracking_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-route"></i>
					<span> Backtracking Algorithms </span>
				</a>
			</li>
		</ul>
		<div class="sidebar-footer">
			<li class="sidebar-item">
				<a class="sidebar-link" data-bs-toggle="collapse" href="#about_dropdown" role="button" aria-expanded="false" aria-controls="about_dropdown">
					<i class="fa-solid fa-circle-info"></i>
					<span> About </span>
				</a>
				<ul class="collapse" id="about_dropdown">
					<li class="sidebar-item">
						<a href="../common/sources.php" class="sidebar-link">
							<i class="fa-solid fa-quote-right"></i>
							<span> Sources </span>
						</a>
					</li>
					<li class="sidebar-item">
						<a href="../common/creator.php" class="sidebar-link">
							<i class="fa-solid fa-user"></i>
							<span> Creator </span>
						</a>
					</li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a href="../common/settings.php" class="sidebar-link">
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