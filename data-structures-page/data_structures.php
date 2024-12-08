<!-- Data Structures Home Page of website -->

<?php require_once '../common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Structures | <?= SITE_TITLE ?></title>
</head>

<body>
	<div class="wrapper">
		<?php require_once COMMON_PATH . 'nav_bar.php'; ?>
		<div class="main p-3">

			<!-- Page title and subtitle -->
			<div class="card mb-4 header-card">
				<div class="card-body text-center">
					<h1 class="card-title display-4 typing-text" id="typing-text-DS"></h1>
					<p class="card-text lead">Dive into the world of essential data structures and learn how they efficiently organize and manage data.</p>
				</div>
			</div>

			<div class="my-4"></div>

			<!-- Linear Data Structures Subheader -->
			<div class="row mb-4">
				<div class="col text-center">
					<h2><i class="fa fa-list-ul"></i> Linear Data Structures</h2>
					<p>A <b><i>"Linear Data Structure"</i></b> is a type of data structure in which elements are arranged in a sequential or linear order. In this arrangement, each element has a unique predecessor and successor (except for the first and last elements), making traversal of the data straightforward.</p>
				</div>
			</div>

			<div class="my-4"></div>

			<!-- First Row: Linear Data Structures -->
			<div class="row justify-content-center">
				<!-- Arrays -->
				<div class="col-md-4 content-card">
					<a href="../array/array.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/array_render/1080p60/ArrayRender.mp4" type="video/mp4" aria-label="Arrays Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Arrays</h5>
								<p class="card-text text-muted">Explore arrays, the foundational data structure for storing and managing indexed collections of elements efficiently.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Linked Lists -->
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/linked-list/linked_lists.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/linked_list_render/1080p60/LinkedListRender.mp4" type="video/mp4" aria-label="Linked Lists Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Linked Lists</h5>
								<p class="card-text text-muted">Learn about linked lists, a data structure that allows for efficient insertion and deletion of elements at any position.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Doubly Linked Lists -->
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/doubly-linked-list/doubly_linked_list.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/doubly_linked_list_render/1080p60/DoublyLinkedListRender.mp4" type="video/mp4" aria-label="Doubly Linked Lists Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Doubly Linked Lists</h5>
								<p class="card-text text-muted">Understand doubly linked lists, a data structure that allows for efficient insertion and deletion of elements at any position.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Queues -->
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/queue/queue.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/queue_render/1080p60/QueueRender.mp4" type="video/mp4" aria-label="Queues Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Queues</h5>
								<p class="card-text text-muted">Understand queues, a data structure that follows the FIFO (First In, First Out) principle.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Stacks -->
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/stack/stack.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/stack_render/1080p60/StackRender.mp4" type="video/mp4" aria-label="Stacks Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Stacks</h5>
								<p class="card-text text-muted">Learn about stacks, a data structure that follows the LIFO (Last In, First Out) principle.</p>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="my-4"></div>

			<!-- Non-Linear Data Structures Subheader -->
			<div class="row mb-4">
				<div class="col text-center">
					<h2><i class="fa fa-sitemap"></i> Non-Linear Data Structures</h2>
					<p>A <b><i>"Non-Linear Data Structure"</i></b> is a type of data structure where elements are not arranged sequentially. Instead, they are organized in a hierarchical or interconnected manner, allowing for more complex relationships between elements. Unlike linear structures, elements in non-linear data structures may have multiple predecessors and successors.</p>
				</div>
			</div>

			<div class="my-4"></div>

			<!-- First Row: Non-Linear Data Structures -->
			<div class="row justify-content-center">
				<!-- Trees -->
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/tree/tree.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/tree_render/1080p60/TreeRender.mp4" type="video/mp4" aria-label="Trees Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Trees</h5>
								<p class="card-text text-muted">Explore different types of trees, including binary trees, binary search trees, and more! Trees provide a way to organize data in a hierarchical manner.</p>
							</div>
						</div>
					</a>
				</div>
				<!-- Graphs -->
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/graph/graph.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/graph_render/1080p60/GraphRender.mp4" type="video/mp4" aria-label="Graphs Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Graphs</h5>
								<p class="card-text text-muted">Learn about graphs, a data structure that represents relationships between nodes and edges. Graphs can be used to model real-world scenarios and problems.</p>
							</div>
						</div>
					</a>
				</div>
				<!-- Heaps -->
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/heap/heap.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/heap_render/1080p60/HeapRender.mp4" type="video/mp4" aria-label="Heaps Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Heaps</h5>
								<p class="card-text text-muted">COMING SOON: Examine heaps, a data structure that represents a priority queue. Heaps allow for efficient insertion and deletion of elements based on their priority.</p>
							</div>
						</div>
					</a>
				</div>
				<!-- Hash Maps -->
				<div class="col-md-4 content-card">
					<a href="../data-structures-page/hash-map/hash_map.php" class="card mb-4 text-decoration-none text-dark">
						<div class="card-body">
							<div class="card-img-top-wrapper">
								<video autoplay muted loop playsinline class="card-video rounded-top" loading="lazy">
									<source src="../manim-renders/media/videos/hash_map_render/1080p60/HashMapRender.mp4" type="video/mp4" aria-label="Hash Maps Visualization">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title fw-bold">Hash Tables / Dictionaries / Maps</h5>
								<p class="card-text text-muted">COMING SOON: Understand hash tables, a data structure that uses a hash function to map keys to values efficiently. Hash tables provide fast access to elements based on their keys.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer Section -->
	<?php require_once COMMON_PATH . 'footer.php'; ?>

	<!-- Path to Common JavaScript -->
	<script src="/common/scripts/common_scripts.js"></script>

	<!-- Scripts for Data Structures Page goes here -->
	<script src="data_structures.js" defer></script>
</body>