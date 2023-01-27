# Specify a base image
FROM node

#Install some dependencies
WORKDIR /home/app
RUN npm install -g nodemon
COPY ./package.json ./package.json
RUN npm install
RUN mv /home/app/node_modules /node_modules
COPY . .
EXPOSE 80

# Set up a default command
CMD ["nodemon", "server.js"]