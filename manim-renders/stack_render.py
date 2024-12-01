from manim import *

class StackRender(Scene):
	def construct(self):
		# Initial stack data
		self.stack_data = ["A", "B", "C"]

		# Display the initial stack
		self.display_stack()

		# Perform operations
		self.push("D")
		self.pop()

	def display_stack(self, box_color=BLUE, text_color=WHITE, label_color=YELLOW):
		"""
		Displays the initial stack with given data.
		"""
		self.box_color = box_color
		self.text_color = text_color
		self.label_color = label_color

		# Create stack nodes
		self.stack_nodes = []
		for value in self.stack_data:
			node = self.create_node(value, box_color, text_color)
			self.stack_nodes.append(node)

		# Arrange the nodes vertically
		self.stack_group = VGroup(*self.stack_nodes).arrange(UP, buff=0.5).move_to(ORIGIN + DOWN * 0.8)
		self.play(FadeIn(self.stack_group))

		# Add the TOP pointer
		self.update_top_pointer(self.stack_nodes[-1])

		# Add operation description text
		self.operation_text = Text("", font_size=24).next_to(self.stack_group, RIGHT, buff=2)
		self.play(Write(self.operation_text))

		self.wait(0.7)

	def create_node(self, value, box_color=BLUE, text_color=WHITE):
		"""
		Creates a single stack node with the given value.
		"""
		box = Square(side_length=1, color=box_color)
		text = Text(str(value), color=text_color).scale(0.5)
		text.move_to(box.get_center())
		return VGroup(box, text)

	def push(self, value):
		"""
		Pushes a new value onto the stack with smooth animation.
		"""
		self.play(FadeOut(self.top_label), FadeOut(self.top_arrow))

		 # Update the operation text
		self.play(Transform(self.operation_text, Text(f"Pushing Node: {value}", font_size=24).next_to(self.stack_group, RIGHT, buff=2)))

		new_node = self.create_node(value, self.box_color, self.text_color)
		new_node.move_to(self.stack_nodes[-1].get_top() + UP * 2)

		# Animate the new node bouncing into position
		self.play(
			new_node.animate.move_to(self.stack_nodes[-1].get_top() + UP * 0.8).set_color(YELLOW),
			run_time=0.4
		)
		self.play(
			new_node.animate.next_to(self.stack_nodes[-1], UP, buff=0.5).set_color(self.box_color),
			run_time=0.3
		)

		# Append the new node to the stack
		self.stack_nodes.append(new_node)

		# Update the TOP pointer
		self.update_top_pointer(new_node)

		self.wait(0.5)

	def pop(self):
		"""
		Pops the top value from the stack with a bounce-out animation.
		"""
		# Stack is empty, nothing to pop
		if not self.stack_nodes:
			return

		self.play(FadeOut(self.top_label), FadeOut(self.top_arrow))

		# Update the operation text
		self.play(Transform(self.operation_text, Text(f"Popping Node: {self.stack_nodes[-1][1].text}", font_size=24).next_to(self.stack_group, RIGHT, buff=2)))

		# Remove the top node
		top_node = self.stack_nodes.pop()

		# Animate the top node bouncing out
		self.play(
			top_node.animate.move_to(top_node.get_top() + UP * 0.8).set_color(RED),
			run_time=0.4
		)
		self.play(FadeOut(top_node), run_time=0.3)

		# Update the TOP pointer
		if self.stack_nodes:
			self.update_top_pointer(self.stack_nodes[-1])
		else:
			# Remove the TOP label if the stack is empty
			self.play(FadeOut(self.top_label), FadeOut(self.top_arrow))

		self.wait(0.5)

	def update_top_pointer(self, top_node):
		"""
		Updates the TOP pointer to point to the new top node.
		"""
		# Fade out the existing TOP label and arrow only if they exist and are in the scene
		if hasattr(self, "top_label") and hasattr(self, "top_arrow"):
			if self.top_label in self.mobjects:
				self.play(FadeOut(self.top_label))
			if self.top_arrow in self.mobjects:
				self.play(FadeOut(self.top_arrow))

		# Create the new TOP label and arrow
		self.top_label = Text("TOP", color=self.label_color).scale(0.6)
		self.top_arrow = Arrow(
			start=top_node.get_top() + UP * 0.5,
			end=top_node.get_top(),
			color=self.label_color
		)

		# Position the label above the arrow
		self.top_label.next_to(self.top_arrow, UP, buff=0.1)

		# Fade in the new TOP label and arrow
		self.play(Write(self.top_label), GrowArrow(self.top_arrow))
		self.wait(0.7)

