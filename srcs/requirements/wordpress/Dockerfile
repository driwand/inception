FROM debian:buster

RUN apt-get update && apt install -y php7.3 php7.3-fpm php-mysql wget mariadb-client sendmail unzip

RUN echo "listen = 0.0.0.0:9000" >> /etc/php/7.3/fpm/pool.d/www.conf
RUN sed -i 's/user = nobody/user = root/g'  /etc/php/7.3/fpm/pool.d/www.conf
RUN sed -i 's/group = nobody/group = root/g'  /etc/php/7.3/fpm/pool.d/www.conf

RUN wget https://wordpress.org/latest.tar.gz -P ~
RUN tar -xvf ~/latest.tar.gz -C ~
RUN mkdir data/wp-data -p

RUN wget https://downloads.wordpress.org/plugin/redis-cache.2.0.21.zip -P ~
RUN unzip ~/redis-cache.2.0.21.zip -d ~

RUN mkdir /www
RUN cp -r ~/wordpress/* /www
RUN cp -r ~/redis-cache /www/wp-content/plugins
RUN cp /www/wp-content/plugins/redis-cache/includes/object-cache.php /www/wp-content

RUN service php7.3-fpm start
COPY tools/start.sh /
COPY conf/wp-config.php /

CMD sh /start.sh && php-fpm7.3 -FR
