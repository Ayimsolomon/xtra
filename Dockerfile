# Use official PHP image with required extensions
FROM php:8.2.12-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    curl \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip mbstring exif pcntl bcmath gd
# RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Install Composer globally
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install Node.js and npm for Tailwind
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader
RUN composer install --no-dev --optimize-autoloader

# Install JS dependencies and build assets
RUN npm install && chmod +x node_modules/.bin/vite && npm run build

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 8080
# CMD should look like this
CMD php artisan config:clear && php artisan migrate --force && php artisan session:table && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8080
