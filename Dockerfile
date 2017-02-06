FROM php:7.1-apache
COPY ./docker-apache2.conf /etc/apache2/apache2.conf
RUN a2enmod rewrite

