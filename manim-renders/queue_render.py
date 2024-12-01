from manim import *

class QueueRender(Scene):
	def construct(self):
		# Initial queue data
		self.queue_data = ["Tim", "John", "Nick"]

		# Display the queue
		self.display_queue()

		# Perform enqueue and dequeue operations
		self.enqueue("Bob")
		self.enqueue("Dan")
		self.dequeue()
		self.dequeue()

	def display_queue(self, box_color=BLUE, text_color=WHITE, label_color=YELLOW):
		"""
		Displays the queue with labels for FRONT and REAR.

		Args:
			box_color (Color): The color of the queue elements (boxes).
			text_color (Color): The color of the text inside the boxes.
			label_color (Color): The color of the labels (FRONT, REAR).
		"""
		self.box_color = box_color
		self.text_color = text_color
		self.label_color = label_color

		# Create queue nodes
		self.nodes = []
		for value in self.queue_data:
			box = Square(side_length=1.2, color=box_color)
			text = Text(str(value), color=text_color).scale(0.7)
			text.move_to(box.get_center())
			node = VGroup(box, text)
			self.nodes.append(node)

		# Arrange nodes horizontally
		self.queue_group = VGroup(*self.nodes).arrange(RIGHT, buff=0.5).move_to(ORIGIN)

		# Add queue to the scene
		self.play(FadeIn(self.queue_group))

		# Add FRONT and REAR labels
		self.front_label = Text("FRONT", color=label_color).scale(0.6)
		self.front_label.next_to(self.nodes[0], UP, buff=0.3)
		self.rear_label = Text("REAR", color=label_color).scale(0.6)
		self.rear_label.next_to(self.nodes[-1], UP, buff=0.3)

		self.play(Write(self.front_label), Write(self.rear_label))

	def enqueue(self, value):
		"""
		Adds a new element to the rear of the queue.
		"""
		# Description for enqueue operation
		description = Text(f"Enqueueing: {value}", font_size=30).to_edge(UP)
		self.play(Write(description), run_time=1)

		# Create the new node
		new_node = VGroup(
			Square(side_length=1.2, color=self.box_color),
			Text(str(value), color=self.text_color).scale(0.7)
		)
		new_node.next_to(self.queue_group, RIGHT, buff=0.5)

		# Add the new node to the queue
		self.queue_data.append(value)
		self.nodes.append(new_node)

		# Animate the addition
		self.play(FadeIn(new_node))

		# Update the queue group
		self.queue_group = VGroup(*self.nodes).arrange(RIGHT, buff=0.5).move_to(ORIGIN)

		# Update REAR and FRONT label position correctly
		self.play(
			self.rear_label.animate.next_to(new_node, UP, buff=0.3),
			self.front_label.animate.next_to(self.nodes[0], UP, buff=0.3)
		)

		# If this is the first node, set FRONT to the same as REAR
		if len(self.nodes) == 1:
			self.play(self.front_label.animate.next_to(new_node, UP, buff=0.3))

		# Fade out the description
		self.play(FadeOut(description))
		self.wait(0.5)


	def dequeue(self):
		"""
		Removes an element from the front of the queue.
		"""
		if not self.nodes:
			description = Text("Queue is Empty!", font_size=30, color=RED).to_edge(UP)
			self.play(Write(description))
			self.wait(1)
			self.play(FadeOut(description))
			return

		# Description for dequeue operation
		description = Text(f"Dequeueing: {self.queue_data[0]}", font_size=30).to_edge(UP)
		self.play(Write(description), run_time=1)

		# Remove the front node
		front_node = self.nodes.pop(0)
		self.queue_data.pop(0)

		# Animate the removal
		self.play(FadeOut(front_node), run_time=0.8)

		# Update the queue group
		if self.nodes:
			self.queue_group = VGroup(*self.nodes).arrange(RIGHT, buff=0.5).move_to(ORIGIN)

			# Update FRONT label to point to the new front node, also Update REAR label to ensure it still points to the rear node
			self.play(
				self.front_label.animate.next_to(self.nodes[0], UP, buff=0.3),
				self.rear_label.animate.next_to(self.nodes[-1], UP, buff=0.3)
			)
		else:
			# If queue is empty, remove both FRONT and REAR labels
			self.play(FadeOut(self.front_label), FadeOut(self.rear_label))

		# Fade out the description
		self.play(FadeOut(description))
		self.wait(0.5)