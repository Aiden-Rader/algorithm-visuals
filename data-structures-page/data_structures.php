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
					<h1 class="card-title display-4">Data Structures</h1>
					<p class="card-text lead">This is where you can visualize different commonly used data structures.</p>
				</div>
			</div>

			<hr>

			<!-- Linear Data Structures Subheader -->
			<div class="row mb-4">
				<div class="col text-center">
					<h2>Linear Data Structures</h2>
					<p>A <b><i>"Linear Data Structure"</i></b> is a type of data structure in which elements are arranged in a sequential or linear order. In this arrangement, each element has a unique predecessor and successor (except for the first and last elements), making traversal of the data straightforward</p>
				</div>
			</div>

			<hr>

			<!-- First Row -->
			<div class="row">
				<div class="col-md-4">
					<a href="../arrays/arrays.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<img src="../manim-renders/gifs/ArrayRender.gif" class="card-img-top rounded-top" alt="Arrays Visualization">
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
								<img src="../manim-renders/gifs/LinkedListRender.gif" class="card-img-top rounded-top" alt="Linked Lists Visualization">
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
								<img src="../manim-renders/gifs/DoublyLinkedListRender.gif" class="card-img-top rounded-top" alt="Doubly Linked Lists Visualization">
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
								<img src="../manim-renders/gifs/QueueRender.gif" class="card-img-top rounded-top" alt="Queues Visualization">
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
								<img src="../manim-renders/gifs/StackRender.gif" class="card-img-top rounded-top" alt="Stacks Visualization">
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Stacks</h5>
								<p class="card-text text-muted">Learn about stacks, a data structure that follows the LIFO (Last In, First Out) principle.</p>
							</div>
						</div>
					</a>
				</div>
			</div>

			<hr>

			<!-- Non-Linear Data Structures Subheader -->
			<div class="row mb-4">
				<div class="col text-center">
					<h2>Non-Linear Data Structures</h2>
					<p>A <b><i>"Non-Linear Data Structure"</i></b> is a type of data structure where elements are not arranged sequentially. Instead, they are organized in a hierarchical or interconnected manner, allowing for more complex relationships between elements. Unlike linear structures, elements in non-linear data structures may have multiple predecessors and successors.</p>
				</div>
			</div>

			<hr>

			<!-- Second Row -->
			<div class="row">
				<div class="col-md-4">
					<a href="../arrays/trees.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../manim-renders/gifs/ArrayRender.gif" class="card-img-top rounded-top" alt="Arrays Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Trees</h5>
								<p class="card-text text-muted">Explore different types of trees, including binary trees, binary search trees, and more! Trees provide a way to organize data in a hierarchical manner.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../arrays/graphs.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../manim-renders/gifs/ArrayRender.gif" class="card-img-top rounded-top" alt="Arrays Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Graphs</h5>
								<p class="card-text text-muted">Learn about graphs, a data structure that represents relationships between nodes and edges. Graphs can be used to model real-world scenarios and problems.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../arrays/heaps.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../manim-renders/gifs/ArrayRender.gif" class="card-img-top rounded-top" alt="Arrays Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Heaps</h5>
								<p class="card-text text-muted">Examine heaps, a data structure that represents a priority queue. Heaps allow for efficient insertion and deletion of elements based on their priority.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="../arrays/hash_tables.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<!-- <img src="../manim-renders/gifs/ArrayRender.gif" class="card-img-top rounded-top" alt="Arrays Visualization"> -->
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Hash Tables / Dictionaries / Maps</h5>
								<p class="card-text text-muted">Understand hash tables, a data structure that uses a hash function to map keys to values efficiently. Hash tables provide fast access to elements based on their keys.</p>
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