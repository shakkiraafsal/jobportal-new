FROM composer:2.3.4
ARG GROUP_ID
RUN addgroup -g $GROUP_ID laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

WORKDIR /var/www/html