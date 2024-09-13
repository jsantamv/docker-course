
# Volume

`docker volume create world-db`

`docker volume inspect world-db`

## utilizar el volume

docker container ls

```shell

docker container run `
-d `
-p 3306:3306 `
--name world-db `
--env MARIADB_USER=jsantamv `
--env MARIADB_ROOT_PASSWORD=Chirripo3820 `
--env MARIADB_PASSWORD=ABC123xyz `
--env MARIADB_DATABASE=world-db `
--volume world-db:/var/lib/mysql `
mariadb:jammy
  
```

# PHP MyAdmin

use for test porpuse on course
`5.2.0-apache`

## Usage with arbitrary server

You can use arbitrary servers by adding the 
environment variable PMA_ARBITRARY=1 to the startup command:

```shell

docker container run `
--name phpmyadmin `
-d `
-e PMA_ARBITRARY=1 `
-p 8080:80 `
phpmyadmin:5.2.0-apache

```
## Network

`docker network ls`

we need or requiere a network if two or more containers are in the same network just to phpmyadmin container see another container db
For example 
CONTAINER ID   IMAGE                     COMMAND                  CREATED          STATUS          PORTS                    NAMES
690bd5c73ea9   phpmyadmin:5.2.0-apache   "/docker-entrypoint.…"   10 minutes ago   Up 10 minutes   0.0.0.0:8080->80/tcp     phpmyadmin
45494f8a342f   mariadb:jammy             "docker-entrypoint.s…"   24 minutes ago   Up 24 minutes   0.0.0.0:3306->3306/tcp   jsanta-mariadb


`docker network create world-app`
`docker network connect world-app 690 `
`docker network connect world-app 454 `

`docker network inspect world-app`

If network has been created just add `network` tag in our container like this:

```shell

docker container run `
-d `
-p 3306:3306 `
--name world-db `
--env MARIADB_USER=jsantamv `
--env MARIADB_ROOT_PASSWORD=Chirripo3820 `
--env MARIADB_PASSWORD=ABC123xyz `
--env MARIADB_DATABASE=world-db `
--volume world-db:/var/lib/mysql `
--network world-app `
mariadb:jammy
  
```


```shell

docker container run `
--name phpmyadmin `
-d `
-e PMA_ARBITRARY=1 `
-p 8080:80 `
--network world-app `
phpmyadmin:5.2.0-apache

```
