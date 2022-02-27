# trucorp-web-2.0

# menggunakan image php:7.4-apache
FROM php:7.4-apache

# copy file dalam folder src ke folder /var/www/html untuk di serve nantinya
COPY src/* /var/www/html/

# memastikan access control list sesuai yang diminta oleh soal
# kepemilikan menjadi www-data
RUN chown -R www-data:www-data /var/www/html
# others hanya read
RUN chmod -R ug=rwx,o=r /var/www/html

# mengekspose port 80
EXPOSE 80
