FROM php:8.2-apache

# Install PHP extensions commonly needed for web development
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite for clean URLs
RUN a2enmod rewrite