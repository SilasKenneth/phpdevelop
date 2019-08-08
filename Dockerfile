FROM php:7.3.6-apache

COPY . /var/www/html
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
WORKDIR /var/www/html
EXPOSE 80