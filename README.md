![alt text](https://github.com/adavidoaiei/Symfony-Framework/blob/main/img.png?raw=true)
# Symfony Framework Blog CRUD Application

A modern blog management system built with Symfony 6.3 PHP framework, featuring a complete CRUD interface for managing posts. This application demonstrates Symfony best practices, form handling, database operations with Doctrine ORM, and responsive UI with Bootstrap 5.

## Features
- Complete CRUD operations for blog posts
- Responsive Bootstrap 5 UI
- SQLite database for simplicity
- Form validation and CSRF protection
- Clean and modern UI with Bootstrap styling
- Twig templating
- Doctrine ORM for database operations

## Prerequisites
- PHP 8.1 or higher
- Composer
- SQLite3
- Required PHP extensions:
  - php-sqlite3
  - php-xml
  - php-mbstring

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/adavidoaiei/Symfony-Framework.git
   cd Symfony-Framework
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Set up the database:**
   The application uses SQLite by default. The database configuration is already set in `.env`:
   ```
   DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
   ```

4. **Create the database and run migrations:**
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

## Running the Application

1. **Start the development server:**
   ```bash
   php -S localhost:8000 -t public/
   ```

2. **Access the application:**
   Open your web browser and navigate to:
   - Home page: http://localhost:8000/post
   - Create new post: http://localhost:8000/post/new

## Project Structure

```
Symfony-Framework/
├── src/
│   ├── Controller/
│   │   └── PostController.php    # CRUD operations
│   ├── Entity/
│   │   └── Post.php             # Post entity
│   ├── Form/
│   │   └── PostType.php         # Form type for Post
│   └── Repository/
│       └── PostRepository.php    # Database queries
├── templates/
│   ├── base.html.twig           # Base template with Bootstrap
│   └── post/                    # Post-related templates
│       ├── index.html.twig      # List posts
│       ├── new.html.twig        # Create post
│       ├── edit.html.twig       # Edit post
│       └── show.html.twig       # Show post
└── var/
    └── data.db                  # SQLite database
```

## Key Features Implementation

### Post Entity
- Title (string)
- Content (text)
- Email (string, validated)
- CreatedAt (datetime)

All fields are required, and the email field includes validation to ensure a valid email format.

### Available Routes
- `GET /post` - List all posts
- `GET /post/new` - Show create form
- `POST /post/new` - Create new post
- `GET /post/{id}` - Show post details
- `GET /post/{id}/edit` - Show edit form
- `POST /post/{id}/edit` - Update post
- `POST /post/{id}` - Delete post

## Security
- CSRF protection enabled for all forms
- Form validation for required fields
- Safe SQL operations through Doctrine ORM

## Frontend
- Bootstrap 5 for responsive design
- Clean and intuitive UI
- Mobile-friendly layout
- Consistent styling across all pages

## Debugging in VS Code

This project is configured for debugging with Xdebug in Visual Studio Code.

### Prerequisites
- VS Code with PHP Debug extension
- Xdebug installed and configured
- PHP 8.1 or higher

### Debug Configuration
The project includes a `.vscode/launch.json` with three debug configurations:

1. **Launch Built-in web server**
   - Starts PHP's built-in server with Xdebug enabled
   - Opens browser automatically
   - Use for debugging the web application

2. **Listen for Xdebug**
   - For debugging with an external web server
   - Useful when using Symfony CLI or Apache/Nginx

3. **Symfony Console**
   - Debug Symfony console commands
   - Useful for debugging migrations, cache clearing, etc.

### How to Debug
1. Set breakpoints in your PHP files by clicking the line number gutter
2. Press F5 or select "Run and Debug" in VS Code
3. Choose "Launch Built-in web server"
4. Wait for your browser to open automatically
5. Navigate to http://localhost:8000/post

### Available Debug Actions
- Continue (F5)
- Step Over (F10)
- Step Into (F11)
- Step Out (Shift+F11)
- Restart (Ctrl+Shift+F5)
- Stop (Shift+F5)

### Debug Environment Variables
```env
APP_ENV=dev
APP_DEBUG=1
```

### Troubleshooting
If breakpoints are not hitting:
1. Ensure Xdebug is properly installed: `php -v` should show Xdebug
2. Check VS Code is listening on port 9003
3. Verify launch.json configuration paths match your project structure

## Contributing
Feel free to fork this repository and submit pull requests. You can also open issues for bugs or feature requests.

## License
This project is open-source and available for educational purposes. Feel free to use it as a reference for learning Symfony development.

## Created
May 24, 2025