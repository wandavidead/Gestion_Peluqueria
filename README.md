
# Gestion de citas de una Peluqueria.

## Table of Contents

- [Sobre el proyecto](#sobre-el-proyecto)
- [Instalación](#instalacion)
  - [Intalacion de contenidos con Script](#install-script)
  - [Instalacion de GIT](#instalar-git)
  - [Instalacion de archivos del GITHUB](#github)
  - [Usar base de datos Postgresql](#Postgresql)
  - [Importar base de datos](#importar)
  - [Configurar fichero .env](#env)
- [Poner en funcionamiento el servidor.](#funcionamiento)
- [Maintainers](#maintainers)
- [License](#license)

<a id="sobre-el-proyecto"></a>

## Sobre el proyecto

El planteamiento del proyecto se basa en gestionar las citas de una peluqueria, el almacen de productos y a los proveedores que pertenece y  un control de los empleados y los clientes.

<a id="instalacion"></a>

<a id="install-script"></a>

## Instalación

### Intalacion de contenidos con Script 

Para empezar ejecutaremos el script con nombre install.sh el cual automaticamente y con algunas preguntas, nos descargara todo lo necesario, siendo el laravel 8, posgresql, php, node.js que se usa con los paquetes del laravel de livewire que tambien seran instalados.


<a id="instalar-git"></a>

### Instalacion de GIT

Una vez configuremos la base de datos y el fichero .env seguiremos con la instalación de Git en el equipo donde se almacenarán los proyectos (servidor) se realiza a través de apt.

`sudo apt install git`

Una vez instalado el servicio, se debe de crear un usuario llamado git el cual se utilizará para crear los proyectos desde la terminal de comandos del servidor.

`sudo adduser git`


<a id="github"></a>

### Instalacion de archivos del GITHUB.

Ya con el GIT instalado empezaremos a pasar todos los ficheros del github al proyecto para que todo se encuentre en su lugar.
``` term=
git clone https://github.com/wandavidead/Gestion_Peluqueria.git
composer install ""
``` 

<a id="Postgresql"></a>

### Usar base de datos Postgresql

Cuando se haya hecho todo no podras usar root como usuario y vas a tener que entrar en posgresql y configurar un nuevo usuario con todos los privilegios.
`psql -U postgres`
Una vez iniciado con el usuario por defecto tenemos que ejecutar los siguientes comandos para crear la base de datos y el usuario con todos los permisos

```sql=
CREATE DATABASE gestion_peluqueria;
CREATE USER usuario WITH PASSWORD 'contraseña-del-usuario';
GRANT ALL PRIVILEGES ON DATABASE gestion_peluqueria to usuario;
```

Y con el siguiente comando seria para finalizar la sesion `\q`

<a id="importar"></a>

### Importar base de datos.

Ya tenemos casi todo instalado ahora tenemos que importar la base de datos que se habra descargado junto con todos los archivos, vamos a importar la base de datos para que se genere la estructura.
```sql=
psql -U usuario -d gestion_peluqueria -h 127.0.0.1 < dump.sql
```

<a id="env"></a>

### Configurar fichero .env

Una `vez` con la base de datos creada y el ususario creado vamos ha configurar el fichero .env con el nombre de la base de datos el usuario y su contraseña.
nano env
```env=
DB_DATABASE=nombre-de-la-base-de-datos
DB_USERNAME=nombre-usuario
DB_PASSWORD=contraseña-del-usuario
```

<a id="funcionamiento"></a>

## Poner en funcionamiento el servidor.

Despues con todos los pasos previos hecho con solo ejecutar `php artisan serve` ya se pondria el servidor con la pagina operativa.

y cuando tengamos la pagina operativa si vamos ha  http://127.0.0.1:8000/adminer.php se abrira el administrador de la base de datos en el cual podremos vizualizar la base de datos y modificarlas.


<a id="mantenimiento"></a>

## Mantenimiento

Actualmente, el único encargado de mantenimiento es David (https://github.com/wandavidead).Se seguira trabajando en el proyecto y evolucionandolo lo maximo posible y todo mantenedor que quiera trabajaar en el proyecto es bienvenido.

<a id="licencia"></a>

## Licencia

El framework de Laravel es un software de código abierto con licencia MIT.

PostgreSQL se publica bajo la licencia PostgreSQL, una licencia de código abierto liberal, similar a las licencias BSD o MIT.

Casi todas las demas licencia cumple con las normativas de MIT pero las mas a remalcar son la licencia de laravel y la licencia de posgresql.
