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
uses https://github.com/mikehaertl/phpwkhtmltopdf to generate pdf files
(include also h4cc/wkhtmltopdf-i386 when installing through composer (https://getcomposer.org/))
