# Use PHP 8.2 CLI for a simpler and more stable server
FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    libsqlite3-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_sqlite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Create SQLite database if it doesn't exist
RUN mkdir -p database && touch database/database.sqlite

# Set permissions
RUN chmod -R 777 storage bootstrap/cache database

# Expose the port (Railway uses $PORT environment variable)
EXPOSE 80

# Build command to prepare the app
RUN php artisan key:generate --show || true

# Start command: Migrate, Seed and Start the built-in PHP server
# Note: We use the $PORT environment variable provided by Railway
CMD php artisan migrate --force && \
    php artisan db:seed --force && \
    php -S 0.0.0.0:${PORT:-80} -t public
