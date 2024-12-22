<p align="center">
  <a href="http://nestjs.com/" target="blank"><img src="https://nestjs.com/img/logo-small.svg" width="200" alt="Nest Logo" /></a>
</p>


# Teslo API

1. Clonar proyecto
2. ```yarn install```
3. Clonar el archivo ```.env.template``` y renombrarlo a ```.env```
4. Cambiar las variables de entorno
5. Levantar la base de datos
```
docker-compose up -d
```

6. Levantar: ```yarn start:dev```

7. Ejecutar SEED 
```
http://localhost:3000/api/seed
```

## push
 EL COMANDO SIGUIENTE ES PARA HACER EL PUSH DE LA IMAGEN LOCAL PARA LUEGO SUBIRLA AL DOCKER HUB
`docker buildx build --platform linux/amd64,linux/arm64 -t jsantamv/teslo-shop-backend:1.0.1 --push .`****
****
# Production notes:


- COMANDO PARA RODAR O DOCKER-COMPOSE PRODUTION
`docker-compose -f docker-compose.prod.yml up`

- PARA EL BUILD
`docker-compose -f docker-compose.prod.yml build`

- DOCKER HUB
 Creo el builder para hacer el buildx
`docker buildx create --name my-build --use`
`docker buildx ls`


`docker buildx build --platform linux/amd64 -t jsantamv/teslo-shop-backend:1.0.1 .`
`docker buildx build --platform linux/arm64 -t jsantamv/teslo-shop-backend:1.0.1 .`

- PARA SUBIR LA IMAGEN AL DOCKER HUB
`docker login`
`docker push jsantamv/teslo-shop-backend:1.0.1`



## push
 EL COMANDO SIGUIENTE ES PARA HACER EL PARA LUEGO SUBIRLA AL DOCKER HUB
`docker buildx build --platform linux/amd64,linux/arm64 -t jsantamv/teslo-shop-backend:1.0.2 --push .`

# PUSH Docker 

## SUBIR UNA IMAGEN O NUESTRA IMAGEN

registry.digitalocean.com

`docker buildx build --platform linux/amd64,linux/arm64 -t registry.digitalocean.com/cloud-selva-registry/teslo-shop-backend:1.2.2 --push .`