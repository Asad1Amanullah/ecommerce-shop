FROM php:8.2-apache

# Install PostgreSQL support
RUN docker-php-ext-install pdo pdo_pgsql

# Enable Apache rewrite
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

# Permissions (important for uploads)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
