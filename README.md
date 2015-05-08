Addressbook sample app
=======================

Introduction
------------
This is a simple, application using the ZF2 MVC layer and module
systems. This application was created using the ZF2 skeleton application.

Installation
------------

To get a working copy of this project, clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/webroot
    git clone git://github.com/enterlight/intermedix-sample.git
    cd intermedix-sample
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)


Web Server Setup
----------------

### PHP CLI Server

The simplest way to get started if you are using PHP 5.4 or above is to start the internal PHP cli-server in the root directory:

    php -S 0.0.0.0:8080 -t public/ public/index.php

This will start the cli-server on port 8080, and bind it to all network
interfaces.

**Note: ** The built-in CLI server is *for development only*.

### Apache Setup

To setup apache, setup a virtual host to point to the public/ directory of the
project and you should be ready to go! It should look something like below:

    <VirtualHost *:80>
        ServerName zf2-tutorial.localhost
        DocumentRoot /path/to/zf2-tutorial/public
        SetEnv APPLICATION_ENV "development"
        <Directory /path/to/zf2-tutorial/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>
    
### IIS 7 Setup (Make sure you have the ReWrite Module)

A web.config is included for IIS 7.  You can type http://localhost/intermedix-sample/public/ab in your browser or 
Create a Virtual Server.  Instructions from Microsoft here: https://support.microsoft.com/en-us/kb/816576


    
