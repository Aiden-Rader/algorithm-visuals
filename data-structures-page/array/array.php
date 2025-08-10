<!-- Arrays Page of website -->
<?php require_once '../../common/config.php'; ?>
<?php
	$page = [
		'title'       => 'Arrays | ' . SITE_TITLE,
		'description' => 'Indexed, contiguous storage with O(1) random access.',
		'css'         => ['/data-structures-page/array/array.css'],
		'js'          => ['/data-structures-page/array/array.js', '/common/scripts/nav_bar.js', '/common/scripts/footer.js'],
		'coderunner'  => true,
		'use_gsap'    => true
	];

	$meta = [
		'difficulty' => ['label' => 'Easy', 'score' => 2],
		'tags' => ['Random Access', 'Indexed', 'Contiguous Storage', 'Static Size']
	];

	require_once COMMON_PATH . 'head.php';
?>
<div class="app-shell">
	<?php require_once COMMON_PATH . 'nav_bar.php'; ?>
	<div class="main p-3 container-fluid">
		<!-- Breadcrumbs -->
		<nav aria-label="breadcrumb" class="mb-2">
			<ol class="breadcrumb mb-0">
				<li class="breadcrumb-item"><a href="/index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="/data-structures-page/data_structures.php">Data Structures</a></li>
				<li class="breadcrumb-item active" aria-current="page">Arrays</li>
			</ol>
		</nav>

		<!-- Title + Summary -->
		<div class="card mb-4 header-card">
			<div class="card-body text-center">
				<h1 class="card-title display-4 typing-text" id="entryTitle">Arrays</h1>
				<p class="card-text lead">Indexed, contiguous storage with O(1) random access.</p>

				<!-- Difficulty and Tags -->
				 <span class="badge rounded-pill diff-badge diff-easy">
					Difficulty: <?= htmlspecialchars($meta['difficulty']['label']) ?> · <?= (int)$meta['difficulty']['score'] ?>/5
				</span>
				<?php foreach ($meta['tags'] as $t): ?>
					<span class="badge bg-secondary"><?= htmlspecialchars($t) ?></span>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- Hero: teaser + overview -->
		<div class="row g-4 align-items-start mb-4">
			<div class="col-lg-6">
				<div class="card-body">
					<video autoplay muted loop playsinline class="card-video rounded-top">
						<source src="../../../manim-renders/media/videos/array_render/1080p60/ArrayRender.mp4" type="video/mp4"/>
						Your browser does not support the video tag.
					</video>
				</div>
				<small class="text-muted d-block mt-2">Autoplays when visible; respects reduced motion.</small>
			</div>
			<div class="col-lg-6">
				<div class="card h-100">
					<div class="card-header">Overview</div>
					<div class="card-body">
						<ul class="mb-0">
							<li>Fixed-size contiguous block of memory.</li>
							<li>O(1) access by index; O(n) search (unsorted).</li>
							<li>Insert/delete in the middle requires shifting.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Article-->
		<div class="row g-4 mb-4">
			<article class="col-lg-4">
				<div class="card">
					<div class="card-body" id="article">
						<h2 id="concept">Concept</h2>
						<p>Arrays store elements contiguously, enabling O(1) access by index. Resizing a static array requires allocating a new block.</p>

						<h2 id="operations">Operations & Complexity</h2>
						<div class="table-responsive">
							<table class="table table-bordered table-compact">
								<thead><tr><th>Operation</th><th>Average</th><th>Worst</th><th>Notes</th></tr></thead>
								<tbody>
									<tr><td>Access (by index)</td><td>O(1)</td><td>O(1)</td><td>Direct address calc.</td></tr>
									<tr><td>Search (unsorted)</td><td>O(n)</td><td>O(n)</td><td>Linear scan.</td></tr>
									<tr><td>Insert (middle)</td><td>O(n)</td><td>O(n)</td><td>Shift elements right.</td></tr>
									<tr><td>Delete (middle)</td><td>O(n)</td><td>O(n)</td><td>Shift elements left.</td></tr>
								</tbody>
							</table>
						</div>
						<details class="mt-2">
							<summary>Why these complexities?</summary>
							<p class="mb-0 mt-2">Contiguity gives constant-time address computation, but maintaining order means shifting neighbors on insert/delete.</p>
						</details>

						<h2 id="examples">Examples</h2>
						<p>Below are minimal examples across languages in the live runner.</p>
					</div>
				</div>
			</article>

			<!-- Code Runner -->
			<aside class="col-lg-8">
				<div class="card">
					<div class="card-header">Live Code Runner</div>
					<div class="card-body">
						<div class="coderunner" id="coderunner">
							<!-- Code Runner will be initialized here -->
						</div>
					</div>
				</div>
			</aside>
		</div>

		<!-- Visualizer TODO: Create game in unity engine -->
		<section class="section d-none" id="visualizer" aria-label="Interactive visualization">
			<div class="card">
				<div class="card-header">Interactive Visualizer</div>
				<div class="card-body">
					<div class="media-box" style="aspect-ratio:16/10;">
						<iframe id="vizFrame" src="" loading="lazy" title="Arrays Visualizer" style="border:0;"></iframe>
					</div>
					<small class="text-muted d-block mt-2">Loads on demand; best on desktop.</small>
				</div>
			</div>
		</section>

		<!-- Exercises TODO: Flesh out-->
		<div class="card mb-4" id="exercises">
			<div class="card-header">Exercises</div>
			<div class="card-body">
				<ol class="mb-0">
					<li>Rotate the array <code>[1,2,3,4,5]</code> by 2 to the left.</li>
					<li>Find the index of value <code>42</code> (or return -1 if not found).</li>
				</ol>
			</div>
		</div>

		<div class="row mb-4">
			<div class="col-md-6">
				<div class="card mb-4" id="gotchas">
					<div class="card-header">Common Mistakes / Gotchas</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Confusing length with last index (off-by-one).</li>
						<li class="list-group-item">Assuming insert/delete in the middle is O(1).</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card mb-4" id="applications">
					<div class="card-header">Real-World Applications</div>
					<div class="card-body">
						<ul class="mb-0">
							<li>Image buffers (pixels), audio buffers, ring buffers (with modular indexing).</li>
							<li>Foundational container for stacks/queues/strings.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Related -->
		<div class="card mb-4" id="related">
			<div class="card-header">Related Topics</div>
			<div class="card-body">
				<div class="row g-3">
					<div class="col-md-4">
						<a class="card text-decoration-none text-dark" href="/data-structures-page/stack/stack.php">
							<div class="card-body">
								<h5 class="card-title mb-1">Stack</h5>
								<p class="card-text text-muted mb-0">LIFO; often array-backed.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a class="card text-decoration-none text-dark" href="/data-structures-page/queue/queue.php">
							<div class="card-body">
								<h5 class="card-title mb-1">Queue</h5>
								<p class="card-text text-muted mb-0">FIFO; circular array trick.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4">
						<a class="card text-decoration-none text-dark" href="/data-structures-page/linked-list/linked_lists.php">
							<div class="card-body">
								<h5 class="card-title mb-1">Linked List</h5>
								<p class="card-text text-muted mb-0">Flexible inserts/deletes.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer Section -->
<?php require_once COMMON_PATH . 'footer.php'; ?>
<?php require_once COMMON_PATH . 'foot.php'; ?>
