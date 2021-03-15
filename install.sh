#Priemro hay que darle todos los permmisos al propio script para poder ejecutarlo.
#Primero se actualiza la lista.
sudo apt-get update 
#Una vez actualizada la lista, lo actualiza todo.
sudo apt-get upgrade -y
#Instalo todos los paquetes de php, el curl y el mysql.
sudo apt-get install curl php7.3-xml php7.3-mbstring php7.3-mysql mysql-server -y
#Con este comando instala el composer a su version mas mejorada que es la 2.
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
#Creamos el nombre del proyecto y se ejecuta el comando que intala el laravel con el nombre introducido.
read -p"Introduzca nombre del proyecto: " nombre 
composer create-project laravel/laravel $nombre

#Reinicio el mysql, instalo el phpmyadmin, me introduzco en la carpeta public de laravel y creo el enlace simbolico al phpmyadmin.
sudo service mysql restart
sudo apt-get install phpmyadmin -y 
cd $nombre/public
ln -s /usr/share/phpmyadmin ./phpmyadmin

#Cuando se haya hecho todo no podras usar root como usuario y vas a tener que entrar en mysql y configurar un nuevo usuario con todos los privilegios.
read -p"Introduzca nombre de usuario de mysql: " name 
read -p"Introduzca contraseña de usuario de mysql: " pass 
mysql -u "root" -e "create database $nombre"
mysql -u "root" -e "CREATE USER '$name'@'localhost' IDENTIFIED BY '$pass'"
mysql -u "root" -e "GRANT ALL PRIVILEGES ON * . * TO '$name'@'localhost'"
mysql -u "root" -e "FLUSH PRIVILEGES"

#Instalo el nvm que instala el npm y el nodejs.

curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.37.2/install.sh | bash
export NVM_DIR="$HOME/.nvm"
nvm install --lts

#Configuro el fichero .env con el nombre de la base de datos el usuario y su contraseña.
cd ..
sed -i "s/DB_DATABASE=laravel/DB_DATABASE=$nombre/" .env
sed -i "s/DB_USERNAME=root/DB_USERNAME=$name/" .env
sed -i "s/DB_PASSWORD=/DB_PASSWORD=$pass/" .env

#Instalo las dependencias del jetstream y livewire
composer require livewire/livewire
composer require laravel/jetstream
php artisan jetstream:install livewire --teams
npm install && npm run dev
php artisan migrate



