# Bible Verse Search and Display Application

This project is a web application designed to search, display, and interact with Bible verses. It provides a user-friendly interface for exploring different books, chapters, and individual verses of the Bible.

The application offers a seamless experience for users to navigate through biblical content, with features such as verse highlighting and a search functionality. It's built using a combination of PHP for server-side processing, and JavaScript for client-side interactivity.

The structure of the project separates concerns effectively, with distinct directories for application logic, view templates, and static assets. This organization enhances maintainability and allows for easy expansion of features.

## Repository Structure

```
.
├── app
│   ├── services
│   │   ├── api_key.php
│   │   ├── get_books.php
│   │   ├── get_versos_alet.php
│   │   └── get_versos.php
│   └── views
│       ├── capitulos.php
│       ├── haed.php
│       ├── livros.php
│       ├── nav.php
│       ├── rodape.php
│       └── versos.php
├── assets
│   ├── css
│   │   ├── global
│   │   │   ├── fonts.css
│   │   │   └── variables.css
│   │   ├── pages
│   │   │   └── versos.css
│   │   └── style.css
│   ├── html
│   │   ├── index.html
│   │   └── versos.html
│   └── js
│       ├── animations
│       │   └── versos.js
│       └── busca_versos.js
├── capitulos.php
├── index.php
└── versos.php
```

### Key Files:

- `index.php`: The main entry point of the application.
- `capitulos.php`: Handles the display of Bible chapters.
- `versos.php`: Manages the display of individual verses.
- `app/services/`: Contains PHP files for API key management and data retrieval.
- `app/views/`: Includes PHP templates for different parts of the application.
- `assets/js/animations/versos.js`: Handles verse highlighting functionality.
- `assets/js/busca_versos.js`: Manages the search functionality.

## Usage Instructions

### Installation

1. Ensure you have a web server with PHP support (version 7.0 or higher recommended).
2. Clone the repository to your web server's document root.
3. Configure your web server to serve the application from the project root.

### Getting Started

1. Navigate to the application's URL in your web browser.
2. Use the navigation menu to browse through books and chapters.
3. Click on verses to highlight them.
4. Use the search functionality to find specific verses or topics.

### Configuration

The application may require an API key for fetching Bible data. Ensure the `app/services/api_key.php` file is properly configured with your API credentials.

### Code Examples

#### Verse Highlighting

```javascript
const elements = document.querySelectorAll(".versos-paragrafo");

elements.forEach(element => {
    element.addEventListener("click", () => {
        elements.forEach(el => el.classList.remove("active"));
        element.classList.add("active");
    });
});
```

This code adds click event listeners to verse elements, allowing users to highlight individual verses by clicking on them.

#### Search Functionality

```javascript
let search = document.getElementById("search");

search.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        searchData();
    }
});

function searchData(){
    window.location.href = "produtos.php?search=" + search.value;
}
```

This code handles the search input, redirecting users to the search results page when they press Enter.

### Troubleshooting

#### Common Issues

1. **Verses not loading:**
   - Check your internet connection.
   - Verify that the API key in `app/services/api_key.php` is valid and correctly configured.
   - Examine the browser console for any JavaScript errors.

2. **Search not working:**
   - Ensure that `produtos.php` exists and is correctly handling search queries.
   - Check the browser console for any JavaScript errors related to the search functionality.

#### Debugging

To enable debug mode:

1. Open `index.php`.
2. Look for a debug configuration variable (e.g., `$debug = false;`).
3. Set it to `true` (e.g., `$debug = true;`).

This should enable more verbose error reporting, helping identify issues more easily.

## Data Flow

The application follows a straightforward data flow for retrieving and displaying Bible verses:

1. User interacts with the UI (selects a book, chapter, or uses search).
2. Client-side JavaScript captures the user action.
3. A request is sent to the appropriate PHP service file (e.g., `get_books.php`, `get_versos.php`).
4. The PHP service file processes the request, potentially querying an external API.
5. Data is returned to the client.
6. JavaScript updates the UI with the retrieved data.

```
[User Input] -> [JavaScript] -> [PHP Services] -> [External API]
                     ^                                |
                     |                                |
                     +----------------<---------------+
                     |
                 [Update UI]
```

Note: The actual implementation of API calls and data processing is not visible in the provided code snippets, so the exact details of these steps may vary.