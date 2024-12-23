# Correr el servidor de Ngnix

`docker run --name some-nginx -d -p 8080:80 some-content-nginx`

# Ver la terminal interactiva

`docker exec -it 779 bash`

y nos dirigimos a la ruta

`cd /usr/share/nginx/html`

luego necesitamos revisar el archivo de config de NGINX

`/etc/nginx/` file `nginx.conf`

`/etc/nginx/conf.d`


# Comandos para levantar la aplicacion

`docker build -t heroes-app . --no-cache` no cache
`docker build -t heroes-app . ` 
`docker container run -p 80:80 heroes-app`
