FROM httpd:2.4

ADD ./conf/vhost-application.conf /usr/local/apache2/conf/custom/vhost-application.conf

RUN echo "Include conf/custom/vhost-application.conf" >> /usr/local/apache2/conf/httpd.conf

WORKDIR /var/www
