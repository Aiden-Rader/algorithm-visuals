import os

def convert_to_gif(mp4_path, gif_path, fps=15, scale=1):
	"""
	Converts a Manim-rendered MP4 file to a GIF using FFmpeg.

	Args:
		mp4_path (str): Path to the input MP4 file.
		gif_path (str): Path to save the output GIF file.
		fps (int): Frames per second for the GIF.
		scale (float): Scaling factor for the GIF (1 = same size).
	"""
	if not os.path.exists(mp4_path):
		print(f"Error: The MP4 file at {mp4_path} does not exist.")
		return

	# FFmpeg command using the cmd line
	command = f"ffmpeg -i {mp4_path} -vf 'fps={fps},scale=iw*{scale}:-1:flags=lanczos' {gif_path}"
	os.system(command)
	print(f"GIF saved at: {gif_path}")

