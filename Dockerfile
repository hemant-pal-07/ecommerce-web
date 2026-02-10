FROM php:8.2-apache

# System dependencies + Node (for Vite)
RUN apt-get update && apt-get install -y \
    git zip unzip curl nodejs npm \
    libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache rewrite
RUN a2enmod rewrite

# Set Laravel public as DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Allow .htaccess
RUN printf '<Directory "/var/www/html/public">\n\
AllowOverride All\n\
Require all granted\n\
</Directory>\n' > /etc/apache2/conf-available/laravel.conf \
    && a2enconf laravel

WORKDIR /var/www/html

# Copy project files
COPY . .

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 🔥 Storage symlink (images fix)
RUN php artisan storage:link || true

# 🔥 Vite build (CSS/JS fix)
RUN npm install
RUN npm run build

EXPOSE 80
