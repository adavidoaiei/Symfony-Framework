# Symfony CRUD Blog Example

This project is a simple CRUD (Create, Read, Update, Delete) application built with the Symfony PHP framework. It demonstrates how to manage blog posts using SQLite as the database and Bootstrap for styling.

## Features
- List all blog posts
- Create a new post
- Edit an existing post
- View post details
- Delete a post
- CSRF protection for forms
- Bootstrap 5 styling

## Requirements
- PHP 8.1 or higher
- Composer
- SQLite (or another supported database, with configuration)

## Setup Instructions

1. **Install dependencies:**
   ```bash
   composer install
   ```

2. **Configure the database:**
   The default configuration uses SQLite. You can change the `DATABASE_URL` in `.env` if needed.

3. **Run migrations:**
   ```bash
   php bin/console doctrine:migrations:migrate
   ```

4. **Start the development server:**
   ```bash
   php -S localhost:8000 -t public/
   ```
   Or use Symfony CLI if installed:
   ```bash
   symfony server:start
   ```

5. **Access the app:**
   Open your browser and go to [http://localhost:8000/post](http://localhost:8000/post)

## Project Structure
- `src/Entity/Post.php` - The Post entity
- `src/Form/PostType.php` - The form for creating/editing posts
- `src/Controller/PostController.php` - The controller for CRUD operations
- `templates/post/` - Twig templates for views
- `public/` - Web root

## Styling
Bootstrap 5 is included via CDN in `templates/base.html.twig`.

## Security
- CSRF protection is enabled for all forms.

## License
This project is for demonstration and educational purposes.
