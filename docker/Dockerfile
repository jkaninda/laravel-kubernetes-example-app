FROM jkaninda/nginx-php-fpm:8.1
COPY laravel /var/www/html

# Custom cache invalidation
ARG CACHEBUST=1
RUN composer update

## RUN npm build
ARG CACHEBUST=1
RUN npm run install
RUN npm run build

RUN mkdir -p /var/www/html/storage/framework
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/storage/framework
RUN chmod 755 /var/www/html/storage
RUN chmod 777 /var/www/html/storage/framework