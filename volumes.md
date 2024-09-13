
# Volume

`docker volume create world-db`

`docker volume inspect world-db`

## utilizar el volume

```powershel
    docker run --name jsanta-mariadb `
  --env MARIADB_ROOT_PASSWORD=Chirripo3820 `
  --env MARIADB_PASSWORD=chirripo3820 `
  --env MARIADB_USER=jsantamv `
  --env MARIADB_DATABASE=world-db `
  --volume world-db:/var/lib/mysql `
  -dp 3306:3306 mariadb:jammy
  
  
```