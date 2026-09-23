Marmolería Marceillac — PHP/MySQL website

Responsive website prepared for traditional PHP hosting. It preserves the sections of the current website and adds a visual countertop configurator with MySQL storage and WhatsApp integration.

Installation on Donweb / Ferozo

Create a MySQL database in the control panel and import database.sql using phpMyAdmin.
Make a copy of config.php.example named config.php, then enter your database details.
Upload the contents of this folder to public_html or the domain’s document root.
Make sure uploads/ is writable (755; use 775 if required by the hosting provider).
Open index.php and complete a full test of the configurator.
Requirements
PHP 8.0 or later.
PDO MySQL and Fileinfo extensions.
MySQL 5.7+ or MariaDB 10.2+.
Security features
Prepared statements with PDO.
MIME type validation and a 6 MB upload limit.
Randomized filenames for uploaded files.
Web access blocked for config.php, database.sql, and this README.
Before publishing
Replace the credentials in config.php.
Confirm both WhatsApp numbers.
Review material names and availability.
Ideally, replace the remote catalog samples with your own local image files.
