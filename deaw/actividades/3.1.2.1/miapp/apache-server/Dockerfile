FROM httpd:2.4

# Copia el contenido estático al directorio de htdocs
COPY ./public /usr/local/apache2/htdocs/
# Copia el archivo de configuración de Apache
COPY ./apache-server/httpd.conf /usr/local/apache2/conf/httpd.conf
EXPOSE 80
