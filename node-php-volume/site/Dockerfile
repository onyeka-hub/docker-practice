# Specify a base image
FROM php

#copy index.php file to the container
WORKDIR /home/php
COPY ./index.php ./

EXPOSE 80

# Set up a default command
CMD ["php", "-S", "0.0.0.0:80"]
