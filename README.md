eValuation
==========

eValuation is an online Evaluation of Teachers tool for University of the Philippines Cebu.

Installation
============
You can install eValuation by downloading the Github zip file or by using git.

Installing using the zip file

Download the zip file here: https://github.com/paultitus/eValuation/archive/master.zip
Extract the contents to where eValuation will reside. Make sure to rename the folder to 
"eValuation" (without quotes), as the folder will usually be named something like "eValuation-master".

Installing with git

From the command line switch to the directory where eValuation will reside and run the following commands:

```sh
git clone --recursive https://github.com/paultitus/eValuation.git
git submodule init
git submodule update
```

PHP
===
eValuation uses PHP's mbstring extension. Make sure that the extension is enabled or loaded. In XAMPP,
you can do this by going to http://localhost/xampp/phpinfo.php and searching for the mbstring entry. If 
Multibyte Support is enabled, the mbstring module has been loaded. Otherwise, in the PHP config file 
(php.ini) under the Dynamic Extensions section, uncomment or add the line:

```sh
extension=php_mbstring.dll
```

The OpenSSL extension is also used, so make sure that the extension is enabled. Under the Dynamic 
Extensions section in php.ini, uncomment or add the line:

```sh
extension:php_openssl.dll
```

Database
===
Import the evaluation_DB.sql to create a new eValuation database. The database includes 1 superadmin 
account from which you can create offices and admins, and set the current year and semester.

Permanently enable the event scheduler in the database manager. The event scheduler is used to 
automatically update the current year and semester. For MySQL, add event_scheduler=ON under the 
[mysqld] header in the config file (my.ini):

```sh
[mysqld]
...
event_scheduler=ON
```

Dependencies
===
eValuation uses wkhtmltopdf (http://wkhtmltopdf.org/) to generate PDF files. Download the installer here:
http://wkhtmltopdf.org/downloads.html

You will need to edit wkhtmltopdf_helper.php in application/helpers folder to properly setup the PDF
generation. Change the following line to where the wkhtmltopdf binary (wkhtmltopdf.exe) resides:

```sh
$snappy->setBinary('C:\wkhtmltopdf\bin\wkhtmltopdf.exe');
```

KnpLabs's Snappy (https://github.com/KnpLabs/snappy), a wkhtmltopdf PHP5 library was used to execute
wkhtmltopdf's binary.

SMTP host
=========
TODO