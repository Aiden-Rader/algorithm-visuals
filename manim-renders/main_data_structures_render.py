from manim import *

class MainDataStructureRender(Scene):
	def construct(self):
		# Add the title
		self.add_title("Data Structures Overview")

		# Define the main nodes
		array = Text("Array", color=BLUE).scale(0.7)
		linked_list = Text("Linked List", color=WHITE).scale(0.6)
		stack = Text("Stack", color=WHITE).scale(0.6)
		tree = Text("Tree", color=WHITE).scale(0.6)
		queue = Text("Queue", color=WHITE).scale(0.6)
		graph = Text("Graph", color=WHITE).scale(0.6)
		heap = Text("Heap", color=WHITE).scale(0.6)
		hash_map = Text("Hash Map", color=WHITE).scale(0.6)

		# Position nodes (revised layout)
		array.move_to(UP * 2)
		linked_list.move_to(array.get_center() + LEFT * 4 + DOWN * 1)
		stack.move_to(array.get_center() + RIGHT * 4 + DOWN * 1)
		tree.move_to(array.get_center() + DOWN * 3)
		queue.move_to(linked_list.get_center() + DOWN * 1.5)
		graph.move_to(stack.get_center() + DOWN * 2)
		heap.move_to(tree.get_center() + LEFT * 4 + DOWN * 1)
		hash_map.move_to(tree.get_center() + RIGHT * 4 + DOWN * 1)

		# Create arrows with manual adjustments
		arrows = [
			Arrow(array.get_edge_center(DOWN), tree.get_edge_center(UP), color=WHITE, buff=0.1, stroke_width=1.5, tip_length=0.1),
			Arrow(array.get_edge_center(LEFT), linked_list.get_edge_center(UP) + UP * 0.1, color=WHITE, buff=0.1, stroke_width=1.5, tip_length=0.1),
			Arrow(array.get_edge_center(RIGHT), stack.get_edge_center(UP) + UP * 0.1, color=WHITE, buff=0.1, stroke_width=1.5, tip_length=0.1),
			Arrow(linked_list.get_edge_center(DOWN), queue.get_edge_center(UP), color=WHITE, buff=0.1, stroke_width=1.5, tip_length=0.1),
			Arrow(stack.get_edge_center(DOWN), graph.get_edge_center(UP), color=WHITE, buff=0.1, stroke_width=1.5, tip_length=0.1),
			Arrow(tree.get_edge_center(LEFT), heap.get_edge_center(UP) + UP * 0.1, color=WHITE, buff=0.1, stroke_width=1.5, tip_length=0.1),
			Arrow(tree.get_edge_center(RIGHT), hash_map.get_edge_center(UP) + UP * 0.1, color=WHITE, buff=0.1, stroke_width=1.5, tip_length=0.1),
		]

		# Add elements to the scene
		self.play(Write(array))
		self.play(FadeIn(linked_list), FadeIn(stack))
		self.play(FadeIn(tree), FadeIn(queue), FadeIn(graph))
		self.play(FadeIn(heap), FadeIn(hash_map))

		# Animate arrows
		for arrow in arrows:
			self.play(GrowArrow(arrow), run_time=0.5)

		self.wait(2)

		# Highlight linear data structures
		self.highlight_bracket(
			nodes=[array, linked_list, stack, queue],
			label="Linear Data Structures",
			direction=LEFT
		)

		# Highlight non-linear data structures
		self.highlight_bracket(
			nodes=[tree, heap, hash_map, graph],
			label="Non-Linear Data Structures",
			direction=RIGHT
		)
		# Fade out all elements in the scene, including the title
		self.play(*[FadeOut(mobject) for mobject in self.mobjects], FadeOut(self.title_group))

		self.wait(1)
	def highlight_bracket(self, nodes, label, direction):
		"""
		Highlight a group of nodes with a bracket and show a label.
		"""
		# Determine the bounding box of the group and highlight nodes
		group = VGroup(*nodes)
		for node in nodes:
			self.play(node.animate.set_color(YELLOW), run_time=0.7)

		# Create and display the bracket
		bracket = Brace(group, direction=direction, color=WHITE)
		text_label = Text(label, color=WHITE).scale(0.6)
		text_label.to_edge(DOWN)
		self.play(Create(bracket), Write(text_label))
		self.wait(1)

		# Reset node colors and remove the bracket and label
		for node in nodes:
			self.play(node.animate.set_color(WHITE), run_time=0.5)
		self.play(FadeOut(bracket), FadeOut(text_label))
		self.wait(2)

	def add_title(self, title_text):
		"""
		Adds a styled title to the scene.
		"""
		self.title_group = VGroup(
			Text(title_text, color=WHITE, font_size=48).to_edge(UP),
			Line(start=LEFT, end=RIGHT, color=YELLOW, stroke_width=2)
		)
		self.title_group[1].set_width(self.title_group[0].width + 1)
		self.title_group[1].next_to(self.title_group[0], DOWN, buff=0.1)

		self.play(Write(self.title_group))
		self.wait(1)
