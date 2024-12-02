from manim import *

class TreeRender(Scene):
	def construct(self):
		# Define the tree data (structure and values)
		self.tree_data = {
			"root": "A",
			"left": {
				"root": "B",
				"left": {"root": "D"},
				"right": {"root": "E"}
			},
			"right": {
				"root": "C",
				"left": {"root": "F"},
				"right": {"root": "G"}
			}
		}

		# Render the tree
		root_node = self.display_tree()

		# Display the depth of the tree
		depth = self.calculate_depth(self.tree_data)
		self.display_tree_depth(depth)

		# Add a new node to make the tree uneven
		new_node = {"root": "H"}
		self.add_new_node(self.tree_data["left"]["left"], new_node, "left")

		# Re-render the tree after adding the new node
		self.play(FadeOut(Group(*self.mobjects)))
		root_node = self.display_tree()

		# Display the depth of the tree
		depth = self.calculate_depth(self.tree_data)
		self.display_tree_depth(depth)

	def display_tree(self):
		"""
		Displays the binary tree recursively and returns the root node.
		"""
		# Render the root node and recursively add child nodes
		root_node = self.create_node(self.tree_data["root"])
		root_node.move_to(UP * 3)
		self.play(FadeIn(root_node))
		self.wait(0.5)

		# Recursively display children
		self.display_subtree(self.tree_data, root_node, position=UP * 3, depth=1)

		return root_node

	def display_subtree(self, subtree, parent_node, position, depth):
		"""
		Recursively displays the subtree rooted at the given node.
		"""
		left_child_data = subtree.get("left")
		right_child_data = subtree.get("right")

		# Adjust horizontal spacing based on the depth
		horizontal_spacing = 3 / depth

		# Add left child
		if left_child_data:
			left_node = self.create_node(left_child_data["root"])
			left_node.move_to(position + LEFT * horizontal_spacing + DOWN * 2)
			self.play(GrowFromPoint(left_node, parent_node.get_bottom()))
			self.play(Create(Line(parent_node.get_bottom(), left_node.get_top())))
			self.wait(0.25)
			self.display_subtree(left_child_data, left_node, left_node.get_center(), depth + 1)

		# Add right child
		if right_child_data:
			right_node = self.create_node(right_child_data["root"])
			right_node.move_to(position + RIGHT * horizontal_spacing + DOWN * 2)
			self.play(GrowFromPoint(right_node, parent_node.get_bottom()))
			self.play(Create(Line(parent_node.get_bottom(), right_node.get_top())))
			self.wait(0.25)
			self.display_subtree(right_child_data, right_node, right_node.get_center(), depth + 1)

	def create_node(self, value, color=BLUE):
		"""
		Creates a node for the tree.
		"""
		circle = Circle(radius=0.5, color=color)
		text = Text(str(value), font_size=24).move_to(circle.get_center())
		return VGroup(circle, text)

	def calculate_depth(self, tree):
		"""
		Calculates the depth (height) of the tree recursively.
		"""
		if not tree:
			return 0
		left_depth = self.calculate_depth(tree.get("left"))
		right_depth = self.calculate_depth(tree.get("right"))
		return 1 + max(left_depth, right_depth)

	def display_tree_depth(self, depth):
		"""
		Displays the depth of the tree on the screen, draws a bracket-like side line, and adds a labeled nub.
		"""
		# Create the parts of the bracket
		top_line = Line(start=UP * 3.5 + LEFT * 6.5, end=UP * 3.5 + LEFT * 6.2, color=YELLOW, stroke_width=4)
		vertical_line = Line(start=UP * 3.5 + LEFT * 6.5, end=DOWN * 3.5 + LEFT * 6.5, color=YELLOW, stroke_width=4)
		bottom_line = Line(start=DOWN * 3.5 + LEFT * 6.5, end=DOWN * 3.5 + LEFT * 6.2, color=YELLOW, stroke_width=4)

		# Combine the lines into a single bracket
		bracket = VGroup(top_line, vertical_line, bottom_line)

		# Animate the creation of the bracket
		self.play(Create(bracket))

		# Create a little marker that displays n
		nub = Circle(radius=0.2, color=YELLOW, fill_opacity=0.9).move_to(vertical_line.get_center())
		nub_label = Text("n", font_size=20, color=BLACK).move_to(nub.get_center())
		self.play(FadeIn(nub), Write(nub_label))

		# Display the tree depth text here
		depth_text = Text(f"Tree Depth (n): {depth}", font_size=36).to_edge(DOWN)
		self.play(Write(depth_text))
		self.wait(1.5)

		# Fade out the depth text, the bracket, the nub, and the label
		self.play(FadeOut(depth_text), FadeOut(bracket), FadeOut(nub), FadeOut(nub_label))

	def add_new_node(self, parent_subtree, new_node, direction):
		"""
		Adds a new node to the tree at the specified direction ('left' or 'right').
		"""
		if direction not in ["left", "right"]:
			raise ValueError("Direction must be 'left' or 'right'.")
		parent_subtree[direction] = new_node
