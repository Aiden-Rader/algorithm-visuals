# Algorithm / Data Structure Page Template

This template defines the **layout**, **styling guidelines**, and **content expectations** for every individual topic page (e.g., Arrays, Stacks, Dijkstra).

---

## 1. Breadcrumbs

**Purpose:**  
Show the user's navigation path back to the homepage or category.

**Layout & Styling:**
- Placed at the very top.
- Bootstrap `.breadcrumb` with `aria-label="breadcrumb"`.
- Text size: small, muted color (`.text-muted` or `var(--bs-secondary-color)`).
- Each ancestor is a link; the current page is `aria-current="page"` and not a link.
- Example:
  ```html
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="/data-structures-page/data_structures.php">Data Structures</a></li>
      <li class="breadcrumb-item active" aria-current="page">Arrays</li>
    </ol>
  </nav>
  ```

---

## 2. Title + Summary Section

**Purpose:**  
Immediately present the topic name and a short description.

**Layout & Styling:**
- H1 with **typing effect** using `Typist.start(...)`.
- Below title: `.lead` paragraph summarizing the topic in 1–2 sentences.
- Under the summary: badges for difficulty & tags, plus "Try Visualizer" button if Unity is available.

**Badges:**
- Difficulty badge: `.badge.bg-primary` or `.badge.bg-success` depending on your palette.
- Tags: `.badge.bg-secondary-subtle.text-dark.border` for softer look.

**Example:**
```html
<h1 id="entryTitle" class="display-5 typing-text">Arrays</h1>
<p class="lead">Indexed, contiguous storage with O(1) random access.</p>
<div class="d-flex gap-2 flex-wrap align-items-center">
  <span class="badge bg-primary">Beginner</span>
  <span class="badge bg-secondary-subtle text-dark border">Linear</span>
  <span class="badge bg-secondary-subtle text-dark border">Indexed</span>
  <a href="#visualizer" class="btn btn-sm btn-outline-success">Try the Visualizer</a>
</div>
```

---

## 3. Hero Row (Manim Teaser + Quick Overview)

**Purpose:**  
Visual preview of the concept alongside a high-level bullet list.

**Layout & Styling:**
- **Left column:**  
  - Aspect ratio: `16 / 9`.
  - `<video>` teaser with `poster` image, muted, playsinline, `preload="none"`, and lazy-play using IntersectionObserver.
  - Rounded corners: `.rounded`.
  - Background fallback: `#111`.
- **Right column:**  
  - Card with `.card-header` = "Overview".
  - Bulleted list of 3–5 short takeaways.

---

## 4. Operations & Complexity Table

**Purpose:**  
Provide a quick reference for average/worst/best complexities.

**Layout & Styling:**
- Bootstrap `.table.table-bordered`.
- Optional `.table-sm` for compact rows.
- **Color coding:**
  - O(1) → green background (`.bg-success-subtle`).
  - O(log n) → teal.
  - O(n) → yellow.
  - O(n²) → red (`.bg-danger-subtle`).
- Add a collapsible section below for explanations (`<details>` or Bootstrap collapse).

**Example:**
```html
<table class="table table-bordered table-compact">
  <thead><tr><th>Operation</th><th>Average</th><th>Worst</th></tr></thead>
  <tbody>
    <tr><td>Access</td><td class="bg-success-subtle">O(1)</td><td class="bg-success-subtle">O(1)</td></tr>
    <tr><td>Search</td><td class="bg-warning-subtle">O(n)</td><td class="bg-warning-subtle">O(n)</td></tr>
  </tbody>
</table>
```

---

## 5. Interactive Code Runner

**Purpose:**  
Let users try the code in multiple languages.

**Layout & Styling:**
- Full-width card with `.card-header` = "Try it yourself".
- Body contains CodeRunner container: `<div id="codeRunner"></div>`.
- Tabs for each language, labeled (Python, C++, Java, JS).
- **Props for CodeRunner init:**
  - `tabs: [{language, src, label}]`
  - `readOnly: false`
  - `copyButton: true`

---

## 6. Unity Visualizer (Interactive)

**Purpose:**  
Interactive simulation of the data structure/algorithm.

**Layout & Styling:**
- Section `id="visualizer"`.
- Card with `.card-header` = "Interactive Visualizer".
- **Iframe embed:**
  - Aspect ratio: `16 / 10`.
  - `loading="lazy"`.
  - Rounded corners.

---

## 7. Quiz / Exercises

**Purpose:**  
Reinforce learning with interactive or static challenges.

**Layout & Styling:**
- Ordered list inside a `.card`.
- `.card-header` = "Exercises" or "Test Your Knowledge".
- Keep questions short; 3–5 per page.
- Support multiple-choice or short answer in the future.

---

## 8. Common Mistakes / Gotchas

**Purpose:**  
Highlight pitfalls for learners.

**Layout & Styling:**
- Card with `.list-group.list-group-flush`.
- Each mistake = `<li class="list-group-item">...</li>`.

---

## 9. Real-World Applications

**Purpose:**  
Connect theory to practice.

**Layout & Styling:**
- Bulleted list or short paragraphs.
- Optionally use icons (`<i class="fa fa-industry"></i>` etc.).

---

## 10. Related Topics

**Purpose:**  
Encourage further exploration.

**Layout & Styling:**
- Card grid (Bootstrap `.row .col-md-4`).
- Each card = title + short summary + link to the topic page.
- Use static image or icon in the header.

---

## Optional Enhancements

- **Glossary Popovers:**  
  Highlight terms with `<span data-bs-toggle="popover" title="Definition">Term</span>`.
- **Downloadable Cheat Sheet:**  
  Button linking to PDF/PNG summary.
- **Step-Through Mode:**  
  "Next →" control for animations in Unity.

---
