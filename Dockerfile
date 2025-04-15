FROM php:8.2-apache

# Instalare dependențe
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    zip unzip git libicu-dev libzip-dev libonig-dev \
    libwebp-dev && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp && \
    docker-php-ext-install gd pdo pdo_mysql intl calendar zip mbstring && \
    a2enmod rewrite


# Instalează Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configurează Apache să asculte pe portul 8081
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && sed -i 's|Listen 80|Listen 8081|g' /etc/apache2/ports.conf \
    && sed -i 's|<VirtualHost \*:80>|<VirtualHost *:8081>|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|<Directory /var/www/html>|<Directory /var/www/html/public>|g' /etc/apache2/apache2.conf

# Setează directorul de lucru
WORKDIR /var/www/html

# Copiază fișierele în container
COPY . .

# Setează permisiunile corecte
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Configurează Git pentru siguranță
RUN git config --global --add safe.directory /var/www/html
