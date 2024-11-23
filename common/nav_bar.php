<!-- This is a PHP specifically to load the side nav bar into each page, reduces redundancy overall -->

<head>
	<!-- Global Styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
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
				<a href="index.php" class="sidebar-link">
					<i class="fa-solid fa-house"></i>
					<span> Home </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="sorting_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-sort-amount-up"></i>
					<span> Sorting Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="search_alogorithms.php" class="sidebar-link">
					<i class="fa-solid fa-magnifying-glass"></i>
					<span> Search Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="graph_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-diagram-project"></i>
					<span> Graph Algorithms </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="backtracking_algorithms.php" class="sidebar-link">
					<i class="fa-solid fa-route"></i>
					<span> Backtracking Algorithms </span>
				</a>
			</li>
		</ul>
		<div class="sidebar-footer">
			<li class="sidebar-item">
				<a href="about.php" class="sidebar-link">
					<i class="fa-solid fa-circle-info"></i>
					<span> About </span>
				</a>
			</li>
			<li class="sidebar-item">
				<a href="settings.php" class="sidebar-link">
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
<script src="common/nav_bar.js"></script>