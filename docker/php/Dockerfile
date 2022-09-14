FROM php:7.3
RUN apt-get update -y && apt-get install -y 
ARG USER_ID
ARG GROUP_ID
RUN addgroup --gid $GROUP_ID user
RUN adduser --disabled-password --gecos '' --uid $USER_ID --gid $GROUP_ID user
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN mkdir /home/user/code
WORKDIR /home/user/code
EXPOSE 8000
USER user
