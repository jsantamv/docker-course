
# publicar en docker hub

- comando para preparar lo que vamos a subir

`docker image tag cron-ticker:latest  jsantamv/cron-ticker:dante`
`docker image tag cron-ticker:latest  jsantamv/cron-ticker:kity1.2`

- debemos de subir la image

`docker push jsantamv/cron-ticker:tagname`
`docker push jsantamv/cron-ticker:kity1.2`

- para no perder las referencias

