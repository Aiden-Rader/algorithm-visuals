# Algorithm Visuals

## Overview
Algorithm Visuals is an interactive web-based platform designed to help users explore and understand computer science concepts like **data structures**, **sorting algorithms**, **graph traversals**, and more. The project combines **dynamic visualizations**, **interactive modules**, and **intuitive UI/UX** to make learning CS concepts engaging and accessible.

## Features
- **Interactive Visualizations**: Explore key CS concepts through dynamic, interactive visualizations.
- **Support for Multiple Topics**:
  - Data Structures (e.g., Linked Lists, Stacks, Queues, Trees)
  - Sorting Algorithms (e.g., Bubble Sort, Merge Sort, Quick Sort)
  - Graph Traversals (e.g., BFS, DFS)
  - More coming soon!
- **Built with Modern Tools**:
  - **Manim**: Python library for high-quality visual renderings.
  - **Unity & WebGL**: For embedding interactive elements (WIP).
  - **PHP & MSSQL**: Backend for managing visual assets and data efficiently.
  - **Bootstrap, GSAP, and jQuery**: Responsive and modern front-end design.

## File Structure
### Root Directories
- **`/about-page`**: Content for the About page, including the team and project purpose.
- **`/common`**:
  - `/classes`: PHP classes for backend logic (e.g., `db_class.php` for database interaction).
  - `/scripts`: General JavaScript files shared across pages.
- **`/data-structures-page`**: Modules and visualizations for data structures like arrays, linked lists, stacks, queues, trees, and more.
- **`/graph-algorithms-page`**: Visuals and explanations for graph algorithms like BFS and DFS.
- **`/manim-renders`**:
  - `/gifs`: Pre-rendered GIFs for visualizing algorithms.
  - `/media`: High-resolution videos rendered using Manim.
- **`/search-algorithms-page`**: Focused on search techniques like binary and linear search.
- **`/sorting-algorithms-page`**: Covers various sorting algorithms with visual demonstrations.
- **`/backtracking-algorithms-page`**: Covers a handful of backtracking/back propagation algorithms.
- **`/dynamic-programming-page`**: Looks into how dynamic programming works and how we can visualize it.
- **`/greedy-algorithms-page`**: Covers a variety of greedy algorithms, their uses, and their limitations.
- **`/machine-learning-page`**: Covers the basics of machine learning, including supervised and unsupervised learning.
- **`/quantum-algorithms-page`**: Explains the basics of quantum computing and shows some quantum algorithms.
- **`/string-algorithms-page`**: Covers various algorithms for manipulating strings and text.
- **`/setings-page`**: Customization page to let users change the visual style of the site.
- **`/temp`**: Holds all the temp files (i.e. pictures, gifs, etc).
- **`/templates`**: Contains all of the basic structures of each languages program file.
- **`/utils`**: Basic utility folder, holds all the "needed" utils and tools to make this program.

### Key Files
- **`index.php`**: Main entry point for the site.
- **`config.php`**: Configuration file for global settings (e.g., database connection).
- **`fetch_renders.php`**: Backend script to fetch and serve render data dynamically.
- **`db_class.php`**: Database abstraction layer for seamless interaction with the MSSQL database.

## Technical Highlights
- **Backend**: PHP with MSSQL for database management.
- **Frontend**: Modern tools like JS libraries (Bootstrap and GSAP) for sleek animations and responsiveness.
- **Card Visual Renders**: Manim library for Python-generated video visualizations, integrated into the web platform.
- **Prototype Hosting**: Hosted on [InfinityFree](http://algorithm-visualization.42web.io/index.php) for public viewing. Will be updated with major updates as project progresses.

## Setup Instructions

### Prerequisites
- **PHP >8.0**: Ensure PHP is installed and configured on your machine.
- **MSSQL Server**: The project relies on an MSSQL database.
- **FTP Client**: Useful for deploying to hosting platforms like InfinityFree.
- **Python >3.9**: Required for generating visualizations with Manim.
- **Unity**: For creating WebGL-based interactive visualizations (WIP).

### Steps to Run Locally

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/<your-username>/algorithm-visuals.git
   cd algorithm-visuals
   ```
2. **Set Up Backend**:
- Open the `config.php` file and update the database connection settings:

	```php
	$server = "your_server_name";
	$username = "your_username";
	$password = "your_password";
	$catalog = "your_database_name";
	```

3. **Import the database schema from /docs/db-schema.sql (WIP) to create the necessary tables**:
	```bash
	sqlcmd -u your_username -p your_database_name < docs db-schema.sql
	```

3. **Run a Local Server**:
   - Use tools like XAMPP, WAMP (Windows), MAMP (Mac), or any PHP-compatible server.
   - Place the project files in the server's document root:
     - For XAMPP, move the files to the `htdocs` folder (e.g., `C:/xampp/htdocs/algorithm-visuals`).
     - For WAMP, place the files in the `www` folder (e.g., `C:/wamp64/www/algorithm-visuals`).
   - Start the local server:
     - For XAMPP, open the XAMPP Control Panel and start **Apache** and **MySQL**.
     - For WAMP, launch WAMP Server and ensure the icon is green, indicating the server is running.
   - Open a browser and navigate to:
     ```
     http://localhost/algorithm-visuals
     ```

## Contribution Guidelines

1. **Fork the Repository**:
   - Click "Fork" at the top right of the GitHub repository to create a copy/

2. **Create a Feature Branch**:
	```bash
	git checkout -b feature-name
	```

3. **Commit Changes**:
- Commit your updates with descriptive messages:
	```bash
	git commit -m "Added new algorithm visualization"
	```

4. **Push to GitHub**:
	```bash
	git push origin feature-name
	```

5. **Submit a Pull Request**:
- Create a pull request on GitHub with details about your changes and I will review them whenever!

### Future Plans

- Algorithm Expansion: Include more data structures, algorithms, and use cases.
- Interactive Features: Implement WebGL-based interactive visualizations.
- Mobile Optimization: Enhance the site for better performance on mobile devices.
- Comprehensive Guides: Add tutorials and guides for using the platform.
License

### Contact
For questions, suggestions, or collaborations:

- Email: aiden.rader@gmail.com
- LinkedIn: https://www.linkedin.com/in/aiden-rader/