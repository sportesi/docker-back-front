FROM alpine:latest

RUN apk update && apk add \
    php7 php7-fpm php7-xml php7-mbstring php7-pdo php7-dom php7-gd \
	php7-pdo_pgsql php7-zip php7-openssl php7-json php7-phar php7-zlib php7-curl \
	php7-session php7-iconv vim unzip zip ca-certificates \
	curl git supervisor nginx

RUN mkdir /run/nginx/

COPY ./ /usr/share/nginx/html

COPY ./nginx.conf /etc/nginx/conf.d/default.conf

COPY ./supervisord.conf /root/supervisord.conf

CMD supervisord -n -c /root/supervisord.conf