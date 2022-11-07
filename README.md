<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Chirper with Blade
Created the web application Chirper with Blade to grow my skills with PHP and learn to build web apps using Laravel. I followed the tutorial from the [Laravel Bootcamp](https://bootcamp.laravel.com/blade/installation) to build my Chirper web app.

## Installation
To run Chirper on your computer or virtual machine you'll need to install the following.
* PHP 7.4+
* Composer
* Node.js v16 and npm

The following installation steps are for a Linux machine.

If you already have the above installed, then you may jump to the Set Up section.
### PHP
To install PHP, open up your termianl and run the following commands.
```bash
sudo apt update
sudo apt install php
```
Verify PHP has been installed in your machine.
```bash
php -v
```
Install necessary PHP modules.
```bash
sudo apt install php php-bcmath php-common php-curl php-json php-mbstring php-mysql php-xml php-zip openssl php-sqlite3
```
### Composer
Follow the Command-line installation from the getcomposer website to intall the latest verison of composer in your machine.
https://getcomposer.org/download/

### Node.js
Before installing Node.js you must update the APT packet manager, since Ubuntu 18-20 have version 10 by default. Node.js v10 is no longer maintaned, thus could cause a security risk. It is best to get the latest version.
```bash
curl -sL https://deb.nodesource.com/setup_16.x | sudo -E bash -
```
Once APT has been updated, install Node.js by running the following command on your terminal.
```bash
sudo apt install nodejs
```
Verify Node.js v16 has been installed in your machine.
```bash
node -v
```
Verify npm is installed in your machine as well.
```bash
npm -v
```
## Set Up
Once you have installed or already have the necessary software, simply run the commands below.
Install necessary packages from composer.
```bash
composer install
```
Install necessary packages from npm and recompile the CSS and JS.
```bash
npm install
npm run dev
```
Finally, let's start the application.
```bash
php artisan serve
```