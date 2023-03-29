ARG PHP_EXTENSIONS="mysqli pdo_mysql"

FROM thecodingmachine/php:8.1-v4-apache-node12

RUN apt-get update && \
    apt-get install -y mysql-server && \
    rm -rf /var/lib/apt/lists/* && \
    service mysql start

WORKDIR /workspace
