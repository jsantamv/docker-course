FROM node:19.2-alpine3.16

# /work directory
# cd app
WORKDIR /app

# destino /app path relativo al WORKDIR
COPY package.json ./

# installar las dependencias
RUN npm install

COPY . .

# Realizar la prueba
RUN npm run test

# Eliminar files no necesarios en prod
RUN rm -rf test && rm -rf node_modules

# unicamente las depd de prod
RUN npm install --prod

#Ejecutar aplicacion
CMD ["node", "app.js"]
