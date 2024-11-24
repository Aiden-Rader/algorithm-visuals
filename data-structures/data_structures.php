<!-- Data Structures Home Page of website -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Structures</title>
</head>

<body>
	<div class="wrapper">
		<?php include '../common/nav_bar.php'; ?>
		<div class="main p-3">

			<!-- Page title and subtitle -->
			<div class="card mb-4 header-card">
				<div class="card-body text-center">
					<h1 class="card-title">
						<i class="fa-solid fa-sitemap"></i> Data Structures
					</h1>
					<p class="card-text">This is where you can visualize different commonly used data structures.</p>
				</div>
			</div>

			<!-- First Row -->
			<div class="row">
				<div class="col-md-4">
					<a href="../arrays/arrays.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../images/.gif" class="card-img-top rounded-top" alt="Data Structures Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Arrays</h5>
								<p class="card-text text-muted">Explore arrays, the foundational data structure for storing and managing indexed collections of elements efficiently.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../linked-lists/linked_lists.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../images/.gif" class="card-img-top rounded-top" alt="Data Structures Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Linked Lists</h5>
								<p class="card-text text-muted">Learn about linked lists, a data structure that allows for efficient insertion and deletion of elements at any position.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../doubly-linked-list/doubly_linked_list.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../images/.gif" class="card-img-top rounded-top" alt="Data Structures Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Doubly Linked Lists</h5>
								<p class="card-text text-muted">Understand doubly linked lists, a data structure that allows for efficient insertion and deletion of elements at any position.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../queues/queues.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../images/.gif" class="card-img-top rounded-top" alt="Data Structures Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Queues</h5>
								<p class="card-text text-muted">Understand queues, a data structure that follows the FIFO (First In, First Out) principle.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../stacks/stacks.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../images/.gif" class="card-img-top rounded-top" alt="Data Structures Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Stacks</h5>
								<p class="card-text text-muted">Learn about stacks, a data structure that follows the LIFO (Last In, First Out) principle.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer Section -->
	<?php include '../common/footer.php'; ?>

	<!-- JS for Data Structures Page goes here -->
	<script src="data_structures.js"></script>
</body>