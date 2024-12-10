# Usar la imagen base de Node.js
FROM node:18

# Crear un directorio de trabajo
WORKDIR /usr/src/app

# Copiar los archivos del proyecto al contenedor
COPY package*.json ./
COPY index.js ./

# Instalar dependencias
RUN npm install

# Exponer el puerto 3000
EXPOSE 3000

# Comando para ejecutar la aplicación
CMD ["node", "index.js"]