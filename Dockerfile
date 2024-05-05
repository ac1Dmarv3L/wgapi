# Use an official PHP runtime
FROM php:8.3-apache

# Disable interactive functions
ENV DEBIAN_FRONTEND noninteractive

# Update package lists and remove the list from the apt-get update at the end
RUN apt-get update && \
    apt-get install -yq \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean -y

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set Server Name and add it to Apache configuration file
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Restart Apache
RUN service apache2 restart

WORKDIR /var/www/html

COPY ./composer.* ./

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction

RUN composer dump-autoload --optimize

COPY . .

EXPOSE 80

# Command to run Apache and serve PHP files
CMD ["apache2-foreground"]