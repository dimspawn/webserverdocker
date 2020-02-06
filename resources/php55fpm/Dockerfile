FROM php:5.5-fpm

RUN apt-get update
RUN apt-get install -y php5-mysql
RUN docker-php-ext-install pdo_mysql mysqli mysql

EXPOSE 9000