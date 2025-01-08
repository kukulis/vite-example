# docker

## create network

    docker network create app-network

## rebuild image if needed

    docker build -t gt/app .docker/app



# development

## xdebug

Must write correct ip address in to xdebug.ini and restart docker container.

To get your container ip address you may write from outside you container:

    docker inspect app

Activization for cmd line:

    export XDEBUG_SESSION=PHPSTORM
    export PHP_IDE_CONFIG="serverName=app.dv"

"app.dv" is written in nginx config at .docker/web/nginx/conf.d/default.conf  
at line: server_name app.dv;

also "app.dv" is written in file docker-compose.yml 
at line: PHP_IDE_CONFIG: 'serverName=app.dv' 

## running

After docker is started, write your browser address field: http://localhost:8089 .

Before may need to run 
    
    chmod 777 cache


