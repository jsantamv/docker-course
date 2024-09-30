FROM node:19.2-alpine3.16

# /work directory
# cd app
WORKDIR /app

#destino /app path relativo al WORKDIR
COPY package.json ./

#installar las dependencias
RUN npm install

COPY app.js ./

#Ejecutar aplicacion
CMD ["node", "app.js"]



