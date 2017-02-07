FROM php:7.1-apache
COPY ./docker-apache2.conf /etc/apache2/apache2.conf
RUN a2enmod rewrite

#RUN apt-get update
#RUN apt-get install -y wget
#RUN echo "deb http://apt.postgresql.org/pub/repos/apt/ jessie-pgdg main" >> /etc/apt/sources.list.d/postgresql.list
#RUN wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | apt-key add -
RUN apt-get update
RUN apt-get install -y postgresql-server-dev-9.4
RUN docker-php-ext-install pdo_pgsql

