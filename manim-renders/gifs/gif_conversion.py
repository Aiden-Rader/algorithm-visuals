from moviepy import VideoFileClip
import os

def convert_mp4_to_gif(input_path, output_path):
	"""
	Converts an MP4 video file to a GIF.

	Args:
		input_path (str): Path to the MP4 file.
		output_path (str): Path to save the GIF file.
	"""
	try:
		# Load the video file
		clip = VideoFileClip(input_path)
		clip.write_gif(output_path, fps=15)
		print(f"GIF created successfully at: {output_path}")
	except Exception as e:
		print(f"An error occurred: {e}")
	finally:
		if 'clip' in locals():
			clip.close()

# MAIN FUNCTION #

# Paths for input and output (change this!)
clip_name = "GraphRender.mp4"
output_name = "GraphRender.gif"
render_name = "graph_render"
current_dir = os.getcwd()

input_dir = f"{current_dir}/manim-renders/media/videos/{render_name}/1080p60/"

output_dir = f"{current_dir}/manim-renders/gifs/"

# Construct the full paths
input_path = os.path.join(input_dir, clip_name)
output_path = os.path.join(output_dir, output_name)

# Debug path names
# print(f"Input path: {input_path}")
# print(f"Output path: {output_path}")

# Convert MP4 to GIF
convert_mp4_to_gif(input_path, output_path)
