FROM node:16-alpine
# Establece el directorio de trabajo
WORKDIR /miapp
# Copia los archivos de dependencias
COPY package.json package-lock.json ./
# Instala las dependencias
RUN npm install
# Expone el puerto que usa el servidor
EXPOSE 3000
# Comando para ejecutar el servidor (con nodemon en lugar de node)
CMD ["npx", "nodemon", "src/server.js"]