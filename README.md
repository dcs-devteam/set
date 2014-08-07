eValuation
==========

Online Evaluation of Teachers

Installation
============
Install with git

From the command line switch to the directory where eValuation will reside and run the following commands:

```sh
git clone --recursive https://github.com/paultitus/eValuation.git
git submodule init
git submodule update
```

PHP
===
set allow_url_include=On in php.ini

make sure mbstring extension is enabled

Dependencies
===
uses wkhtmltopdf (http://wkhtmltopdf.org/) to generate pdf files

install also https://github.com/KnpLabs/snappy through composer (https://getcomposer.org/)

you will need to edit wkhtmltopdf_helper.php in application/helpers folder. change the line to where the wkhtmltopdf.exe resides

```sh
$snappy->setBinary('C:\wkhtmltopdf\bin\wkhtmltopdf.exe');
```