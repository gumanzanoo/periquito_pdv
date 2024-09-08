FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite

COPY ./ /var/www/html/

COPY ./app/infrastructure/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

COPY app/infrastructure/session_helper.php /usr/local/lib/php/session_helper.php

RUN echo "auto_prepend_file=/usr/local/lib/php/session_helper.php" >> /usr/local/etc/php/conf.d/session-helper.ini

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
