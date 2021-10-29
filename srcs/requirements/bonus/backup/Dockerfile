FROM debian:buster

RUN apt update && apt install nodejs -y

WORKDIR /

COPY conf/backup.js /

CMD [ "node", "backup.js" ]
