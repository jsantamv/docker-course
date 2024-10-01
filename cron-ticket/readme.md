
# publicar en docker hub

## Paso 1: comando de construccion

`docker build --tag php-app-php:moly .`


- comando para preparar lo que vamos a subir

`docker image tag cron-ticker:latest  jsantamv/cron-ticker:dante`
`docker image tag cron-ticker:latest  jsantamv/cron-ticker:kity1.2`

- debemos de subir la image

`docker push jsantamv/cron-ticker:tagname`
`docker push jsantamv/cron-ticker:kity1.2`

- para no perder las referencias


jsantamv/php-app:tagname


para correr la imagen
`docker container run -d jsantamv/cron-ticker:lilo`

`docker exec -it cd7 /bin/sh `




