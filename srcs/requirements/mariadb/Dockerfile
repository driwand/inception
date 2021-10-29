FROM debian:buster

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y mariadb-server mariadb-client procps

COPY tools/start.sh /
COPY conf/wp.sql /

CMD sh /start.sh && mysqld_safe
