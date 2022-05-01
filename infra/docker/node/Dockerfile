FROM node:lts-alpine

RUN mkdir -p /var/www/frontend
ARG TZ
WORKDIR /var/www/frontend
COPY ./frontend/ /var/www/frontend/

RUN apk update && \
    apk upgrade && \
    apk add --no-cache make gcc g++ python && \
    yarn install

EXPOSE 3000
ENTRYPOINT ["yarn", "run", "dev"]
