#Priemro hay que darle todos los permmisos al propio script para poder ejecutarlo.
#Primero se actualiza la lista.
sudo apt-get update 
#Una vez actualizada la lista, lo actualiza todo.
sudo apt-get upgrade -y
#Instalo todos los paquetes de php, el curl y el mysql.
sudo apt-get install curl php7.3-xml php7.3-mbstring php7.3-pgsql postgresql -y
#Con este comando instala el composer a su version mas mejorada que es la 2.
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

#Reinicio el mysql, instalo el phpmyadmin, me introduzco en la carpeta public de laravel y creo el enlace simbolico al phpmyadmin.
sudo service postgresql restart

#Instalo el nvm que instala el npm y el nodejs.
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.37.2/install.sh | bash
export NVM_DIR="$HOME/.nvm"
nvm install --lts

#Instalo las dependencias del jetstream y livewire
composer require livewire/livewire
composer require laravel/jetstream
php artisan jetstream:install livewire --teams
npm install && npm run dev


