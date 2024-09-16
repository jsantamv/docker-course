
# Docker comands

## Maria DB

`docker container run -e MARIADB_RANDOM_ROOT_PASSWORD=yes -dp 3306:3306 mariadb`

```sh
    docker run --name jsanta-mariadb `
  --env MARIADB_ROOT_PASSWORD=Chirripo3820 `
  --env MARIADB_PASSWORD=chirripo3820 `
  --env MARIADB_USER=jsantamv `
  --env MARIADB_DATABASE=world-db `
  -dp 3306:3306 mariadb:jammy
  
```

## SQL Server

`docker run -e "ACCEPT_EULA=Y" -e "SA_PASSWORD=Chirripo3820" -p 1433:1433 --name sqlserver -d mcr.microsoft.com/mssql/server:2022-latest`

## Postgres

`docker run --name jk-postgres -e POSTGRES_PASSWORD=123 -dp 5434:5434 postgres:12-alpine3.20`

`docker run --name jk-postgres -e POSTGRES_PASSWORD=Chirripo3820 -dp 5434:5432 postgres:12-alpine3.20`





