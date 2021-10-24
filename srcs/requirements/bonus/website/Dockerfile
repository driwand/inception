FROM debian:buster

RUN apt update && apt install nodejs -y

WORKDIR /

COPY conf/server.js /
COPY conf/index.html /

CMD [ "node", "server.js" ]