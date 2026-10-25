FROM php:8.3-apache

# tools needed by Composer
RUN apt-get update \
    && apt-get install -y --no-install-recommends git unzip \
    && rm -rf /var/lib/apt/lists/*
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . /var/www/html/

# install PHPMailer
RUN composer install --no-dev --optimize-autoloader --no-interaction

EXPOSE 80