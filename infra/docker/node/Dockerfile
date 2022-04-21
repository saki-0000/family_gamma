FROM node:lts-alpine
RUN mkdir -p /var/www/nuxt
ARG TZ
WORKDIR /var/www/nuxt
COPY ./nuxt/ /var/www/nuxt

RUN apk update && \
    apk upgrade && \
    apk add git && \
    npm install -g npm@latest nuxi nuxt3

EXPOSE 3000

ENTRYPOINT [ "yarn", "run", "dev" ]
