![alt text](https://github.com/adavidoaiei/Flask-Python/blob/main/img.png?raw=true)
# Symfony Blog CRUD Application

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
Symphony/
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
- CreatedAt (datetime)

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

## Contributing
Feel free to fork this repository and submit pull requests. You can also open issues for bugs or feature requests.

## License
This project is open-source and available for educational purposes. Feel free to use it as a reference for learning Symfony development.

## Created
May 24, 2025
