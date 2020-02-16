FROM php:5.5-fpm

RUN apt-get update
RUN apt-get install -y php5-mysql
RUN docker-php-ext-install pdo_mysql mysqli mysql
RUN apt-get install -y tcl8.5
RUN apt-get install -y redis-tools
RUN apt-get install -y redis-server
RUN apt-get install -y wget
WORKDIR /
RUN wget http://download.redis.io/redis-stable.tar.gz
RUN tar xvzf redis-stable.tar.gz
WORKDIR /redis-stable
RUN make
RUN make test
WORKDIR /redis-stable/utils
#RUN ./install_server.sh

#WORKDIR /var/www/aimsis/vendor/chrisboulton/php-resque
#RUN php resque.php
#RUN QUEUE=notification php resque.php

EXPOSE 9000