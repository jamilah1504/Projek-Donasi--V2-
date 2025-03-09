# Gunakan PHP + Apache
FROM php:8.1-apache

# Install ekstensi yang dibutuhkan Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Copy project ke dalam container
COPY . /var/www/html

# Atur working directory
WORKDIR /var/www/html

# Jalankan perintah yang diperlukan
RUN composer install --no-dev --optimize-autoloader
RUN php artisan config:clear && php artisan cache:clear && php artisan route:cache

# Jalankan Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
