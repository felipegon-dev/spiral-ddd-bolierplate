FROM php:8.1.4

ARG YOUR_LOCAL_USER_ID=1000

#base
WORKDIR /root-app

#install
RUN apt-get update && apt install -y ca-certificates software-properties-common gpg unzip git libsodium-dev
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN docker-php-ext-install sockets && docker-php-ext-enable sockets
RUN docker-php-ext-install sodium && docker-php-ext-enable sodium
RUN mkdir /spiral
RUN cd /spiral && composer create-project spiral/app

RUN deluser spiral; exit 0;
RUN adduser --uid=$YOUR_LOCAL_USER_ID --gecos=spiral --disabled-password spiral

CMD su spiral -c "cd /root-app && composer install && /spiral/app/rr serve -w ."


