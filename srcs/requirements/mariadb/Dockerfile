FROM debian:buster

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y\
    mariadb-server\
    mariadb-client

COPY tools/start.sh /

ENTRYPOINT [ "sh", "/start.sh" ]