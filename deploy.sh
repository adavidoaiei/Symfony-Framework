#!/bin/bash

# Production deployment script
echo "Starting deployment process..."

# Install dependencies without dev packages
composer install --no-dev --optimize-autoloader

# Clear and warmup cache
APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear
APP_ENV=prod APP_DEBUG=0 php bin/console cache:warmup

# Run database migrations
APP_ENV=prod php bin/console doctrine:migrations:migrate --no-interaction

# Set proper permissions (adjust www-data to your web server user)
chmod -R 777 var/cache
chmod -R 777 var/log
chmod -R 777 var/data.db

echo "Deployment completed!"
