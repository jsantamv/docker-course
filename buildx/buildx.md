#  BUILDX

`Buildx` en Docker es una herramienta que permite construir imágenes de contenedor de forma avanzada. Es una extensión del comando `docker build`, que ofrece soporte para múltiples plataformas (como ARM y x86) y permite crear imágenes multiplataforma, realizar compilaciones en paralelo y aprovechar técnicas de caché más eficientes. Es útil para crear imágenes que funcionen en diferentes arquitecturas de hardware desde una misma fuente.

https://docs.docker.com/build/building/multi-platform/#simple-multi-platform-build-using-emulation


`docker buildx create --name mybuilderJSA --driver docker-container --bootstrap`

- Para utilizarlo:

`docker buildx use mybuilderJSA`

- Para ver las plataformas

`docker buildx inspect`

- Variable de entorno para la plataforma

FROM --platform=$BUILDPLATFORM golang:alpine AS build

para ver las plataformas soportadas
`docker buildx inspect`

```sh

docker buildx build --platform linux/amd64,linux/arm64 \
-t jsantamv/cron-ticker:latest --push .

docker buildx build --platform linux/amd64,linux/arm64,linux/riscv64,linux/arm/v6 \
-t jsantamv/cron-ticker:oso --push .

```
