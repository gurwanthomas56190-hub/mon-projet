FROM php:8.4-fpm

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Installation des extensions PHP pour Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Récupérer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www/html

COPY . .

# Donner les permissions pour Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
