# Volume

docker volume create postgres-db


docker container run \
-dp 5432:5432 \
--name postgres-db \
-e POSTGRES_PASSWORD=123456 \
-v postgres-db:/var/lib/postgresql/data \
postgres:15.1

docker container run \
--name pgAdmin \
-e PGADMIN_DEFAULT_PASSWORD=123456 \
-e PGADMIN_DEFAULT_EMAIL=superman@google.com \
-dp 8080:80 \
dpage/pgadmin4:6.17

docker network create postgres-net
docker network connect postgres-net 111
docker network connect postgres-net 222
docker network inspect postgres-net

# Main CMD

docker compose up
docker compose down

# pgadmin error user linux
para cuadno pase el error

`sudo chown -R 5050:5050 pgadmin`
