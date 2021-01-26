# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: lhayward <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/24 18:42:32 by lhayward          #+#    #+#              #
#    Updated: 2020/12/26 16:49:16 by lhayward         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt-get -y update
RUN apt-get -y install nginx wget mariadb-server php-mysql php7.3-fpm 



COPY ./srcs/banan.sh ./

WORKDIR	./var/www/html/

RUN wget https://ru.wordpress.org/latest-ru_RU.tar.gz
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN tar -xvf latest-ru_RU.tar.gz
RUN tar -xvf phpMyAdmin-5.0.4-all-languages.tar.gz
RUN mv  phpMyAdmin-5.0.4-all-languages phpmyadmin
RUN rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz
RUN rm -rf latest-ru_RU.tar.gz

WORKDIR ../../../../

COPY ./srcs/wp-config.php ./var/www/html/wordpress/
COPY ./srcs/config.inc.php ./var/www/html/phpmyadmin/
COPY ./srcs/default ./etc/nginx/sites-available/
COPY ./srcs/autoindexoff.sh ./etc/nginx/sites-available/
COPY ./srcs/autoindexon.sh ./etc/nginx/sites-available/

EXPOSE 80 443

RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes \
	-out /etc/nginx/ssl/banan.crt \
	-keyout /etc/nginx/ssl/banan.key \
	-subj "/C=ru/ST=rt/L=kazan/O=school21/OU=lhayward/CN=banan"

CMD bash banan.sh
