FROM node:16.15.0-alpine
RUN mkdir -p /var/www/frontend
# timezone
ARG TZ
WORKDIR /var/www/frontend
COPY ./frontend/ /var/www/frontend/

RUN apk update && \
    apk upgrade && \
    apk add --no-cache make gcc g++ python3 && \
    yarn install

EXPOSE 3000

ENTRYPOINT ["yarn", "run", "dev"]
