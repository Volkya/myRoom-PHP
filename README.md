# SETUP ROOM

Esta aplicacion hace un listado de los objetos de cada persona, su propia room
Un perfil de diseño segun su setup.

### Create database (postgresql) with docker

`docker run --name room-db -p 5432:5432 -e POSTGRES_PASSWORD=1234 -e POSTGRES_DB=room-db -d postgres`

### Execute script SQL

Check db.sql file

### Features

- Hacer templates
- Inicializar el servidor
- Crear las rutas
- Hacer modelos
- Dibujar templates con modelos