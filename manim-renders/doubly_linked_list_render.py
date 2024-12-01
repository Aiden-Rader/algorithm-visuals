from manim import *

class DoublyLinkedListRender(Scene):
	def construct(self):
		# Doubly linked list data
		self.doubly_linked_list_data = ['A', 'B', 'C', 'D', 'E']

		# Call the visualization function
		self.display_doubly_linked_list()

		# Highlight each node and its arrows
		self.highlight_node_and_arrows()

		# Traverse the list forward and backward
		self.traverse_forward_and_backward()

	def display_doubly_linked_list(self, box_color=BLUE, forward_arrow_color=WHITE, backward_arrow_color=GRAY, text_color=WHITE, label_color=YELLOW):
		"""
		Displays a doubly linked list with forward and backward arrows.

		Args:
			box_color (Color): The color of the nodes (boxes).
			forward_arrow_color (Color): The color of the forward arrows.
			backward_arrow_color (Color): The color of the backward arrows.
			text_color (Color): The color of the text inside the nodes.
			label_color (Color): The color of any labels on the linked list.
		"""
		self.box_color = box_color
		self.forward_arrow_color = forward_arrow_color
		self.backward_arrow_color = backward_arrow_color
		self.text_color = text_color
		self.label_color = label_color

		# Create nodes (boxes + text)
		self.nodes = []
		self.forward_arrows = []
		self.backward_arrows = []

		for value in self.doubly_linked_list_data:
			# Create a box and text for each node
			box = Square(side_length=1.2, color=box_color)
			text = Text(str(value), color=text_color).scale(0.7)
			text.move_to(box.get_center())
			node = VGroup(box, text)
			self.nodes.append(node)

		# Arrange nodes horizontally and center on screen
		self.doubly_linked_list_group = VGroup(*self.nodes).arrange(RIGHT, buff=0.8).move_to(ORIGIN)

		# Create forward and backward arrows between nodes
		for i in range(len(self.nodes) - 1):
			# Forward arrow
			forward_arrow = Arrow(
				start=self.nodes[i].get_right() + UP * 0.2,
				end=self.nodes[i + 1].get_left() + UP * 0.2,
				color=forward_arrow_color,
				buff=0.2
			)
			self.forward_arrows.append(forward_arrow)

			# Backward arrow
			backward_arrow = Arrow(
				start=self.nodes[i + 1].get_left() + DOWN * 0.2,
				end=self.nodes[i].get_right() + DOWN * 0.2,
				color=backward_arrow_color,
				buff=0.2
			)
			self.backward_arrows.append(backward_arrow)

		# Add nodes and arrows to the scene
		self.play(FadeIn(self.doubly_linked_list_group))
		for forward_arrow, backward_arrow in zip(self.forward_arrows, self.backward_arrows):
			self.play(GrowArrow(forward_arrow), GrowArrow(backward_arrow), run_time=0.5)

		# Add HEAD label pointing to the first node
		self.head_label = Text("HEAD", color=label_color).scale(0.6)
		self.head_arrow = Arrow(
			start=self.nodes[0].get_top() + UP * 1.5,
			end=self.nodes[0].get_top(),
			color=label_color,
			buff=0.2
		)
		self.head_label.next_to(self.head_arrow, UP, buff=0.1)
		self.play(Write(self.head_label), GrowArrow(self.head_arrow))

		# Add NULL to the left of the first node
		self.null_left_label = Text("NULL", color=label_color).scale(0.7)
		self.null_left_label.next_to(self.nodes[0], LEFT, buff=0.8).shift(DOWN * 0.2)
		self.null_left_arrow = Arrow(
			start=self.nodes[0].get_left() + DOWN * 0.2,
			end=self.null_left_label.get_right(),
			color=backward_arrow_color,
			buff=0.2
		)
		# Add NULL to the right of the last node
		self.null_right_label = Text("NULL", color=label_color).scale(0.7)
		self.null_right_label.next_to(self.nodes[-1], RIGHT, buff=0.8).shift(UP * 0.2)
		self.null_right_arrow = Arrow(
			start=self.nodes[-1].get_right() + UP * 0.2,
			end=self.null_right_label.get_left(),
			color=forward_arrow_color,
			buff=0.2
		)
		self.play(
			Write(self.null_right_label), GrowArrow(self.null_right_arrow),
			Write(self.null_left_label), GrowArrow(self.null_left_arrow)
		)

		self.wait(1)

	def highlight_node_and_arrows(self):
		"""
		Highlight each node and the associated forward/backward arrows during traversal.
		"""
		description = Text("Traversal Pattern of the Doubly Linked List", font_size=24).to_edge(DOWN)
		self.play(Write(description))

		for i, node in enumerate(self.nodes):
			# Highlight the current node
			self.play(node[0].animate.set_color(YELLOW), run_time=0.4)

			# Highlight forward and backward arrows connected to this node
			if i > 0:
				self.play(self.backward_arrows[i - 1].animate.set_color(RED), run_time=0.3)
			if i < len(self.nodes) - 1:
				self.play(self.forward_arrows[i].animate.set_color(YELLOW), run_time=0.3)
			self.wait(0.3)

			# Reset the colors of the arrows
			if i > 0:
				self.play(self.backward_arrows[i - 1].animate.set_color(self.backward_arrow_color), run_time=0.3)
			if i < len(self.nodes) - 1:
				self.play(self.forward_arrows[i].animate.set_color(self.forward_arrow_color), run_time=0.3)
			self.play(node[0].animate.set_color(self.box_color), run_time=0.4)

		# Remove the description at the end
		self.play(FadeOut(description))

	def traverse_forward_and_backward(self):
		"""
		Traverses the doubly linked list forward and then backward,
		highlighting each node and the arrows between them, while displaying traversal info.
		"""
		# Description text at the bottom
		description = Text("", font_size=24).to_edge(DOWN)
		self.play(Write(description))

		# Traverse forward
		index = 0
		for i, (node, value) in enumerate(zip(self.nodes, self.doubly_linked_list_data)):
			# Update description for forward traversal
			description_text = f"Forward: Visiting Node {value} at Index {index}"
			new_description = Text(description_text, font_size=24).to_edge(DOWN)
			self.play(Transform(description, new_description), run_time=0.5)

			# Highlight the current node
			self.play(node[0].animate.set_color(YELLOW), run_time=0.4)
			self.wait(0.2)

			# Highlight the forward arrow if not the last node
			if i < len(self.forward_arrows):
				self.play(self.forward_arrows[i].animate.set_color(YELLOW), run_time=0.3)
				self.wait(0.2)
				self.play(self.forward_arrows[i].animate.set_color(self.forward_arrow_color), run_time=0.3)

			# Reset the node color
			self.play(node[0].animate.set_color(self.box_color), run_time=0.4)

			index += 1

		# Pause before traversing backward
		pause_description = Text("Now Traversing Backward", font_size=24).to_edge(DOWN)
		self.play(Transform(description, pause_description))
		self.wait(1)

		# Traverse backward
		index = len(self.nodes) - 1
		for i, (node, value) in enumerate(zip(reversed(self.nodes), reversed(self.doubly_linked_list_data))):
			# Update description for backward traversal
			description_text = f"Backward: Visiting Node {value} at Index {index}"
			new_description = Text(description_text, font_size=24).to_edge(DOWN)
			self.play(Transform(description, new_description), run_time=0.5)

			# Highlight the current node
			self.play(node[0].animate.set_color(RED), run_time=0.4)
			self.wait(0.2)

			# Highlight the backward arrow if not the first node
			if i < len(self.backward_arrows):
				self.play(self.backward_arrows[-(i + 1)].animate.set_color(RED), run_time=0.3)
				self.wait(0.2)
				self.play(self.backward_arrows[-(i + 1)].animate.set_color(self.backward_arrow_color), run_time=0.3)

			# Reset the node color
			self.play(node[0].animate.set_color(self.box_color), run_time=0.4)

			index -= 1

		# Fade out the description after traversals
		self.play(FadeOut(description))