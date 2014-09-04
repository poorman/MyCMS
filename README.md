#MyCMS
MyCMS is a simple weblogging application written in Phalcon (back-end) and AngularJS (front-end), that allows the admin to write posts from an admin panel/dashboard.

##How to test it
During the development, I am using the [Phalcon Vagrant](https://github.com/phalcon/vagrant) configuration. Clone/download the source code into the /vagrant/www/MyCMS folder of the Vagrant configuration and then you can test MyCMS in http://192.168.50.4/MyCMS/

Probably you will need to execute this if you use the same vagrant configuration:
```bash
sudo chmod -R 777 /var/lib/php5
```

Or, you can read through this [Sitepoint article](http://www.sitepoint.com/quick-tip-install-zephir-phalcon-2-vagrant/) to install Phalcon in a vagrant box and the source code should work.

After cloning the source code into your machine, make sure to create a database called `mycms` and then **migrate** by executing
```bash
sudo phalcon migration run
```
This will create the needed tables into that database.

##Administrator credentials:
```
username: admin
password: admin
```
