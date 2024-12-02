from manim import *

class GraphRender(Scene):
	def construct(self):
		# Define the graph structure (nodes and edges)
		self.graph_data = {
			"nodes": {
				"A": {"pos": UP * 2 + LEFT * 2},
				"B": {"pos": UP * 2 + RIGHT * 2},
				"C": {"pos": ORIGIN + LEFT * 3},
				"D": {"pos": ORIGIN + RIGHT * 1},
				"E": {"pos": DOWN * 2 + RIGHT * 2},
				"F": {"pos": DOWN * 2 + LEFT * 3}
			},
			"edges": [
				("A", "B"),
				("A", "C"),
				("A", "D"),
				("B", "E"),
				("D", "F"),
				("D", "E")
			]
		}

		# Render the graph
		self.display_graph()

		# Perform BFS walkthrough starting from Node A
		self.bfs_walkthrough("A")

	def display_graph(self):
		"""
		Display the graph using the data provided.
		"""
		self.node_objects = {}
		self.edge_objects = {}

		# Create and position nodes
		for node, data in self.graph_data["nodes"].items():
			node_circle = self.create_node(node)
			node_circle.move_to(data["pos"])
			self.node_objects[node] = node_circle
			self.play(FadeIn(node_circle))

		# Create undirected edges
		for edge in self.graph_data["edges"]:
			start_node, end_node = edge
			start_circle = self.node_objects[start_node][0]
			end_circle = self.node_objects[end_node][0]

			# Create the edge as a Line
			start_rim_point = self.get_circle_rim_point(start_circle, end_circle.get_center())
			end_rim_point = self.get_circle_rim_point(end_circle, start_circle.get_center())
			edge_line = Line(start=start_rim_point, end=end_rim_point, color=WHITE)
			self.edge_objects[(start_node, end_node)] = edge_line
			self.edge_objects[(end_node, start_node)] = edge_line
			self.play(Create(edge_line), run_time=0.5)

		self.wait(1)

	def create_node(self, value, color=BLUE):
		"""
		Create a single node with a label.
		"""
		circle = Circle(radius=0.5, color=color)
		text = Text(str(value), font_size=24).move_to(circle.get_center())
		return VGroup(circle, text)

	def get_circle_rim_point(self, circle, target_point):
		"""
		Calculates the point on the rim of a circle closest to the target point.
		"""
		circle_center = circle.get_center()
		direction = normalize(target_point - circle_center)
		return circle_center + direction * circle.radius

	def bfs_walkthrough(self, start_node):
		"""
		Visualize BFS walkthrough with queue and node/edge highlighting.
		"""
		visited = set()
		queue = [start_node]
		queue_display = self.update_queue_display(queue)

		# Display BFS start message
		description = Text(f"Starting BFS from Node: {start_node}", font_size=24).to_edge(DOWN)
		self.play(Write(description), Write(queue_display))

		# BFS Traversal
		while queue:
			# Dequeue the current node
			current_node = queue.pop(0)

			# Update queue display
			queue_group = self.update_queue_display(queue)
			self.play(Transform(queue_display, queue_group))

			# Skip already visited nodes
			if current_node in visited:
				continue

			# Update description text
			description_text = f"Visiting Node: {current_node}"
			new_description = Text(description_text, font_size=24).to_edge(DOWN)
			self.play(Transform(description, new_description))

			# Highlight current node
			self.play(self.node_objects[current_node][0].animate.set_color(YELLOW), run_time=0.5)

			# Mark as visited
			visited.add(current_node)

			# Visit neighbors
			for edge in self.graph_data["edges"]:
				start, end = edge

				# If the edge leads to an unvisited neighbor
				if start == current_node and end not in visited and end not in queue:
					queue.append(end)

					# Highlight the edge as traversed
					edge_line = self.edge_objects[(start, end)]
					self.play(edge_line.animate.set_color(YELLOW), run_time=0.5)

				# If the edge leads to an already visited node (Doesn't quite work)
				elif start == current_node and end in visited:
					# Highlight the edge as skipped
					edge_line = self.edge_objects.get((start, end))

					if edge_line and edge_line.get_color() != GRAY:
						self.play(edge_line.animate.set_color(GRAY), run_time=0.3)

					# Mark the reverse direction as skipped, if it exists
					reverse_edge_line = self.edge_objects.get((end, start))
					if reverse_edge_line and reverse_edge_line.get_color() != GRAY:
						self.play(reverse_edge_line.animate.set_color(GRAY), run_time=0.3)

			# Mark the node as fully processed
			self.play(self.node_objects[current_node][0].animate.set_color(GREEN), run_time=0.5)

		self.wait(2)

		# Update description text
		description_text = "Here are the shortest paths from the start node to each visited node"
		new_description = Text(description_text, font_size=24).to_edge(DOWN)
		self.play(Transform(description, new_description))

		# Dynamic Path Highlighting
		self.highlight_shortest_paths(visited)

		self.wait(2)

		self.play(FadeOut(description), FadeOut(queue_display))

		self.wait(1)

	def highlight_shortest_paths(self, visited):
		"""
		Highlight the shortest paths from the start node to each visited node.
		"""
		for start, end in self.edge_objects.keys():
			if start in visited and end in visited:
				edge_line = self.edge_objects[(start, end)]
				if edge_line.get_color() == YELLOW:
					self.play(edge_line.animate.set_color(ORANGE), run_time=0.5)

	def update_queue_display(self, queue):
		"""
		Update the visual representation of the BFS queue.
		"""
		queue_group = VGroup()
		queue_label = Text("Queue:", font_size=20, weight=BOLD).to_edge(UP + LEFT)
		queue_group.add(queue_label)
		queue_box = Rectangle(
			width=max(1.2 * len(queue), 1.2),
			height=0.8,
			color=WHITE
		).align_to(queue_label, DOWN).next_to(queue_label, RIGHT, buff=0.5)
		queue_group.add(queue_box)

		if queue:
			# Add nodes to the queue group inside the box
			for i, node in enumerate(queue):
				# Create a circle for each queue element
				queue_node = Circle(radius=0.3, color=BLUE).move_to(queue_box.get_left() + RIGHT * (0.5 + i) * 1.2)
				queue_text = Text(node, font_size=20, weight=BOLD).move_to(queue_node.get_center())
				queue_group.add(VGroup(queue_node, queue_text))
		else:
			empty_text = Text("Empty", font_size=20, weight=BOLD).move_to(queue_box.get_center())
			queue_group.add(empty_text)
		queue_group.move_to(UP * 3.5)
		return queue_group



