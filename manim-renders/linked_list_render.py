from manim import *

class LinkedListRender(Scene):
	def construct(self):
		# Linked list data
		self.linked_list_data = ['A', 'B', 'D', 'E', 'F']

		# Call the visualization function
		self.display_linked_list()

		# Add a new node to the list (C after B)
		self.add_new_node("C", position=2)

	def display_linked_list(self, box_color=BLUE, arrow_color=WHITE, text_color=WHITE, label_color=YELLOW):
		"""
		Displays a regular linked list using arrows and boxes.

		Args:
			box_color (Color): The color of the nodes (boxes).
			arrow_color (Color): The color of the arrows connecting the nodes.
			text_color (Color): The color of the text inside the nodes.
			label_color (Color): The color of any labels on the linked list.
		"""
		self.box_color = box_color
		self.arrow_color = arrow_color
		self.text_color = text_color
		self.label_color = label_color

		# Create nodes (boxes + text)
		self.nodes = []
		self.arrows = []  # Store arrows for later reference

		for value in self.linked_list_data:
			# Box and Text for each node
			box = Square(side_length=1.2, color=box_color)
			text = Text(str(value), color=text_color).scale(0.7)
			text.move_to(box.get_center())
			node = VGroup(box, text)
			self.nodes.append(node)

		# Arrange nodes horizontally and center on screen
		self.linked_list_group = VGroup(*self.nodes).arrange(RIGHT, buff=0.7).move_to(ORIGIN)

		# Create arrows between nodes
		for i in range(len(self.nodes) - 1):
			arrow = Arrow(
				start=self.nodes[i].get_right(),
				end=self.nodes[i + 1].get_left(),
				color=arrow_color,
				buff=0.2
			)
			self.arrows.append(arrow)

		# Add nodes and arrows to the scene
		self.play(FadeIn(self.linked_list_group))
		for arrow in self.arrows:
			self.play(GrowArrow(arrow), run_time=0.5)

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

		# Add NULL at the end of the linked list
		self.null_label = Text("NULL", color=label_color).scale(0.7)
		self.null_label.next_to(self.nodes[-1], RIGHT, buff=0.8)
		self.null_arrow = Arrow(
			start=self.nodes[-1].get_right(),
			end=self.null_label.get_left(),
			color=arrow_color,
			buff=0.2
		)
		self.play(Write(self.null_label), GrowArrow(self.null_arrow))

		# Highlight animation for nodes with description
		description = Text("", font_size=24).to_edge(DOWN)
		self.play(Write(description))
		index = 0

		for node, value in zip(self.nodes, self.linked_list_data):
			# Update description text
			description_text = f"Visiting Node: {value} at Index: {index}"
			new_description = Text(description_text, font_size=24).to_edge(DOWN)
			self.play(Transform(description, new_description), run_time=0.5)
			index += 1

			# Highlight the current node
			self.play(node[0].animate.set_color(YELLOW), run_time=0.4)
			self.wait(0.2)
			self.play(node[0].animate.set_color(self.box_color), run_time=0.4)

		# Fade out the description after the loop
		self.play(FadeOut(description))

		self.wait(1)

	def add_new_node(self, node_val, position):
		"""
		Adds a new node to the linked list at the specified position.

		Args:
		node_val (str or int, etc): What you want to put into the newly added node!
		position (int): position in the linked list where you would add a new node (zero indexed)
		"""
		# Remove NULL temporarily
		self.play(FadeOut(self.null_label), FadeOut(self.null_arrow))

		# Adding a description for what is going on
		description = Text("Adding a New Node", font_size=30).to_edge(UP)
		self.play(Write(description))
		self.wait(0.7)

		# Create the new node
		new_node = VGroup(
			Square(side_length=1.2, color=self.box_color),
			Text(str(node_val), color=self.text_color).scale(0.7)
		)
		new_node.move_to(self.nodes[position - 1].get_center() + RIGHT * 1.9)
		self.play(FadeIn(new_node))

		# Highlight and display information for the new node
		new_description_text = f"New Node: {node_val} at Index: {position}"
		new_description = Text(new_description_text, font_size=24).to_edge(DOWN)
		self.play(Write(new_description), run_time=0.5)

		# Highlight the new node
		self.play(new_node[0].animate.set_color(YELLOW), run_time=0.5)
		self.wait(0.3)
		self.play(new_node[0].animate.set_color(self.box_color), run_time=0.5)
		self.play(FadeOut(new_description), run_time=0.5)

		# Shift all subsequent nodes to the right
		for i in range(position, len(self.nodes)):
			self.play(self.nodes[i].animate.shift(RIGHT * 2), run_time=0.5)

		# Add the new node to the list
		self.nodes.insert(position, new_node)

		# Remove and recreate arrows
		for arrow in self.arrows[position - 1:]:
			self.play(FadeOut(arrow), run_time=0.2)
		self.arrows = self.arrows[:position - 1]

		# Create new arrows for the updated list
		for i in range(len(self.nodes) - 1):
			arrow = Arrow(
				start=self.nodes[i].get_right(),
				end=self.nodes[i + 1].get_left(),
				color=self.arrow_color,
				buff=0.2
			)
			self.arrows.append(arrow)
			self.play(GrowArrow(arrow), run_time=0.3)

		# Add NULL back to the end of the linked list
		self.null_label.next_to(self.nodes[-1], RIGHT, buff=0.8)
		self.null_arrow = Arrow(
			start=self.nodes[-1].get_right(),
			end=self.null_label.get_left(),
			color=self.arrow_color,
			buff=0.2
		)
		self.play(Write(self.null_label), GrowArrow(self.null_arrow))
		self.play(FadeOut(description), run_time=0.5)

		# Re-center the entire linked list
		self.recenter_list()

		# Highlight animation for all nodes with description
		description = Text("", font_size=24).to_edge(DOWN)
		self.play(Write(description))
		index = 0

		for node, value in zip(self.nodes, self.linked_list_data[:position] + [node_val] + self.linked_list_data[position:]):
			# Update description text
			description_text = f"Visiting Node: {value} at Index: {index}"
			new_description = Text(description_text, font_size=24).to_edge(DOWN)
			self.play(Transform(description, new_description), run_time=0.5)
			index += 1

			# Highlight the current node
			self.play(node[0].animate.set_color(YELLOW), run_time=0.4)
			self.wait(0.2)
			self.play(node[0].animate.set_color(self.box_color), run_time=0.4)

		# Fade out the description after the loop
		self.play(FadeOut(description))

		self.wait(1)

	def recenter_list(self):
		"""
		Re-centers the entire linked list on the screen after updates.
		"""
		self.play(FadeOut(self.head_label), FadeOut(self.head_arrow))
		full_group = VGroup(*self.nodes, *self.arrows, self.null_label, self.null_arrow)
		self.play(full_group.animate.move_to(ORIGIN), run_time=0.5)
		self.update_head()

	def update_head(self):
		"""
		Updates the HEAD label and arrow to point to the first node.
		"""
		# Add new HEAD pointing to the updated first node
		self.head_label = Text("HEAD", color=self.label_color).scale(0.6)
		self.head_arrow = Arrow(
			start=self.nodes[0].get_top() + UP * 1.5,
			end=self.nodes[0].get_top(),
			color=self.label_color,
			buff=0.2
		)
		self.head_label.next_to(self.head_arrow, UP, buff=0.1)
		self.play(Write(self.head_label), GrowArrow(self.head_arrow))