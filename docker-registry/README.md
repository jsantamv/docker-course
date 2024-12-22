# Configuracion de Docker Registry

1. Si requiero salir de algun `registry` previo:

`docker logout registry.digitalocean.com`

2. Docker Login con nuestro api de acceso
   
[create api token](https://cloud.digitalocean.com/account/api/tokens?i=d43a1f)


1. hacemos login al global de digital ocean
   
`docker login registry.digitalocean.com`

colocamos el `docker login registry.digitalocean.com`
 
`Username: <registered-email>`
`Password: <paste-api-token>`

# SUBIR UNA IMAGEN O NUESTRA IMAGEN -- DOCKER --

registry.digitalocean.com

`docker buildx build --platform linux/amd64,linux/arm64 -t registry.digitalocean.com/cloud-selva-registry/teslo-shop-backend:1.2.2 --push .`