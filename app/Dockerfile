# Use the official PHP image
FROM php:8.2-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli

# Set the working directory
WORKDIR /var/www/html

# Copy the application code
COPY index.php .

# Expose port 80
EXPOSE 80