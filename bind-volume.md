Magic of Bind Volume `-v "$(pwd)":/app`

to execute comand shell `sh -c "yarn install && yarn start:dev"`

```shell

docker container run `
  --name nest-app `
  -w /app `
  -p 3000:3000 `
  -v ${PWD}:/app `
  node:16-alpine3.16 `
  sh -c "yarn install && yarn start:dev"


```

## On Linux WSL en modo detach `-d`

To see de logs
`docker container logs -f 1fc`

```bash

docker container run \
  --name nest-app \
  -w /app \
  -dp 3000:3000 \
  -v ${PWD}:/app \
  node:16-alpine3.16 \
  sh -c "yarn install && yarn start:dev"


```