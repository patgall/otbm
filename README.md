# Online Test Bench Mark

A web application for distribute tests to students

## Prerequisites

A web server (Apache, Nginx or Lighttpd) and a MySQL or MariaDB server

## Installation

1. Clone or download and unzip this depo to a directory
2. Create a new user and database in MySQL server for the tables
3. Use the SQL script to create and import data into the tables
4. Change the SQL configuration in conf files :
	* fuel/app/config/db.php
	* fuel/app/config/development/db.php (if you wish modify the code)
	* fuel/app/config/production/db.php
5. Enjoy this app

## Credits

Nicolas Le Gall - Loick Pelet - Baptiste Lenouvel - Patrice Gall

## Licence

Licensed under the GPLv3: http://www.gnu.org/licenses/gpl-3.0.html