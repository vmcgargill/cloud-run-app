#!/bin/sh

php artisan migrate --force

sed -i "s,LISTEN_PORT,$PORT,g" /etc/nginx/nginx.conf

php-fpm -D

nginx