FROM php:7.0-cli

RUN docker-php-ext-install pdo_mysql

EXPOSE 8000:8000

#COPY ./app /usr/src/myapp

WORKDIR /usr/src/myapp

CMD [ "php", "-S","0.0.0.0:8000" ]
#CMD [ "php", "index.php" ]