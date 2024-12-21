#-----------< STAGE 1:  DEPS >--------------
FROM node:19.2-alpine3.16 AS deps
WORKDIR /app
COPY package.json ./
RUN npm install
#--------------------------------------------

#-----------< STAGE 2: build & test >--------------
FROM node:19.2-alpine3.16 AS builder
WORKDIR /app
#indico que quiero copiar de la imagen deps
COPY --from=deps /app/node_modules ./node_modules
#copio el resto de los archivos a mi linux fresco
COPY . .
RUN npm run test
#si todo esta bien, construyo la app
#RUN npm run build
#--------------------------------------------


#-----------< STAGE 3: PRODS DEPEDENCIES >--------------
# esto es opcional, pero es una buena practica
# para no tener archivos que no se necesitan
# y acelearar el proceso de construccion
FROM node:19.2-alpine3.16 AS prop-deps
WORKDIR /app
COPY package.json ./
RUN npm install --prod
#--------------------------------------------


#---------< STAGE 4: RUNER exec app >--------
FROM node:19.2-alpine3.16 AS runner
WORKDIR /app
#esto es una posible solucion.
COPY --from=prop-deps /app/node_modules ./node_modules
COPY app.js ./
COPY tasks ./tasks
#Ejecutar aplicacion
CMD ["node", "app.js"]
#--------------------------------------------


# COMANDOS PARA CONSTRUIR LA IMAGEN
# docker build -t jsantamv/cron-ticker:latest .

#DOCKER HUB
# docker push jsantamv/cron-ticker:latest

#DOCKER HUB BUILDX. ESTO ES PARA CONSTRUIR IMAGENES MULTIPLATAFORMA
#docker buildx create --name mi-builder --use

#DOCKER HUB BUILDX. ESTO ES PARA CONSTRUIR IMAGENES MULTIPLATAFORMA
#docker buildx build --platform linux/amd64 -t jsantamv/cron-ticker:chitara .
#docker buildx build --platform linux/arm64 -t jsantamv/cron-ticker:chitara .
#docker buildx build --platform linux/arm/v7 -t jsantamv/cron-ticker:chitara .

#DOCKER HUB PUSH BUILDX MULTIPLATAFORMA 
#docker buildx build --platform linux/amd64,linux/arm64,linux/arm/v7 -t jsantamv/cron-ticker:chitara --push .