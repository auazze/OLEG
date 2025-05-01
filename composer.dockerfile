FROM composer:latest

WORKDIR /var/www/html

RUN composer global require laravel/installer

ENV PATH="/root/.composer/vendor/bin:${PATH}"

ENTRYPOINT ["composer", "--ignore-platform-reqs"]
