# Maa Saraswati Tribal Open Board Mandla Website

This is a Laravel-based website for Maa Saraswati Tribal Open Board Mandla, including a frontend and an admin panel for managing classes and courses.

## Requirements

- PHP >= 8.0
- Composer
- MySQL or any other supported database
- Node.js and npm (optional, for frontend asset compilation)

## Installation

1. Clone the repository:

```bash
git clone <repository-url>
cd <repository-directory>
```

2. Install PHP dependencies using Composer:

```bash
composer install
```

3. Copy the example environment file and configure your environment variables:

```bash
cp .env.example .env
```

Edit the `.env` file to set your database credentials and other settings.

4. Generate the application key:

```bash
php artisan key:generate
```

5. Run database migrations:

```bash
php artisan migrate
```

6. (Optional) Seed the database with sample data:

```bash
php artisan db:seed
```

7. Start the development server:

```bash
php artisan serve
```

The website will be accessible at `http://localhost:8000`.

## Admin Panel

- Access the admin panel at `http://localhost:8000/admin`
- You need to create admin users manually in the database or implement registration/login functionality.

## Frontend

- The frontend pages include Home, About Us, Contact Us, Courses Offered, and Gallery.
- Styling is done using Tailwind CSS, Google Fonts, and Font Awesome.

## Notes

- Make sure your PHP installation has the required extensions enabled (e.g., PDO, OpenSSL, Mbstring).
- Configure your web server (Apache/Nginx) accordingly for production deployment.

## License

This project is open source and free to use.
