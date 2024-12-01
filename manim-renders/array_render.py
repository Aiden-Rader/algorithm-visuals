from manim import *

class ArrayRender(Scene):
	def construct(self):
		# Define the array data
		self.array_data = [4, 3, 7, 1, 9, 12, 15]

		# Visualize the array
		self.display_array()

		# Calculate sum function
		self.calculate_sum()

	def display_array(self, box_color=BLUE, text_color=WHITE):
		"""
		Displays an array as a series of boxes with text inside.

		Args:
			box_color (Color): The color of the array boxes.
			text_color (Color): The color of the text inside the boxes.
		"""
		# Create array elements as VGroups of Rectangle + Text
		self.elements = []
		for i, value in enumerate(self.array_data):
			# Box and Text for each element
			box = Square(side_length=1.2, color=box_color)
			text = Text(str(value), color=text_color).scale(0.7)
			text.move_to(box.get_center())
			self.elements.append(VGroup(box, text))

		# Arrange the array elements in a row
		self.array_group = VGroup(*self.elements).arrange(RIGHT, buff=0.2)
		self.play(FadeIn(self.array_group))
		self.wait(1)

		# Add indices above the array
		indices = []
		for i in range(len(self.array_data)):
			index_text = Text(str(i), color=text_color).scale(0.5)
			index_text.next_to(self.elements[i][0], UP, buff=0.2)
			indices.append(index_text)
		indices_group = VGroup(*indices)
		for indice in indices_group:
			self.play(FadeIn(indice))

	def highlight_element(self, elements, pointer_color = YELLOW, highlight_color=YELLOW):
		"""
		Highlights an individual element in the array.

		Args:
			elements (VGroup): The array element to highlight (box + text).
			pointer_color (Color): The color to use for the arrows.
			highlight_color (Color): The color to use for highlighting.
		"""
		pointer = Arrow(start=UP, end=ORIGIN, color=pointer_color, buff=0.1).next_to(elements[0], UP, buff=0.5)
		self.play(FadeIn(pointer), run_time=0.5)

		self.play(elements[0].animate.set_color(highlight_color), run_time=0.5)
		self.wait(1)
		self.play(elements[0].animate.set_color(BLUE), run_time=0.5)

		self.play(FadeOut(pointer), run_time=0.5)

	def calculate_sum(self):
		"""
		For each highlighted cell in the array, add the value to the total sum
		and update the displayed sum text.
		"""
		total_sum = 0
		total_count = 0

		# Initialize the sum text and position it below the array visualization
		init_sum_text = Text('Sum(): 0', color=WHITE).scale(0.7).next_to(self.array_group, DOWN, buff=0.5)
		init_count_text = Text('Count(): 0', color=WHITE).scale(0.7).next_to(init_sum_text, DOWN, buff=0.5)
		self.add(init_sum_text, init_count_text)
		self.play(FadeIn(init_sum_text, init_count_text), run_time=1)

		for i, value in enumerate(self.array_data):
			total_sum += value
			total_count += 1
			self.highlight_element(self.elements[i])
			updated_sum_text = Text(f'Sum(): {total_sum}', color=WHITE).scale(0.7).next_to(self.array_group, DOWN, buff=0.5)
			updated_count_text = Text(f'Count(): {total_count}', color=WHITE).scale(0.7).next_to(updated_sum_text, DOWN, buff=0.5)
			self.play(
				Transform(init_sum_text, updated_sum_text),
				Transform(init_count_text, updated_count_text),
				run_time=0.5
			)


		self.wait(1)