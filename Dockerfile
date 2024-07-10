FROM php:8.3-apache
RUN a2enmod ssl
RUN apt-get update -y && apt-get install -y openssl
# Setup Apache2 config
COPY ./apache2-config/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN openssl req -new -newkey rsa:4096 -days 3650 -nodes -x509 -subj \
    "/C=BR/ST=...../L=..../O=..../CN=test-1st-party.com" \
    -keyout ./ssl1.key -out ./ssl1.crt

RUN openssl req -new -newkey rsa:4096 -days 3650 -nodes -x509 -subj \
    "/C=BR/ST=...../L=..../O=..../CN=app.test-1st-party.com" \
    -keyout ./ssl2.key -out ./ssl2.crt

RUN openssl req -new -newkey rsa:4096 -days 3650 -nodes -x509 -subj \
    "/C=BR/ST=...../L=..../O=..../CN=test-3rd-party.com" \
    -keyout ./ssl3.key -out ./ssl3.crt

RUN mkdir -p /etc/apache2/ssl
RUN cp ./ssl1.crt /etc/apache2/ssl/ssl1.crt
RUN cp ./ssl1.key /etc/apache2/ssl/ssl1.key
RUN cp ./ssl2.crt /etc/apache2/ssl/ssl2.crt
RUN cp ./ssl2.key /etc/apache2/ssl/ssl2.key
RUN cp ./ssl2.crt /etc/apache2/ssl/ssl3.crt
RUN cp ./ssl2.key /etc/apache2/ssl/ssl3.key

CMD ["apache2-foreground"]
