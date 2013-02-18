# Flight Skeleton
This skeleton provides you a quick start for the development of an application with the [Flight](http://flightphp.com) PHP microframework.

It also contains some templates based on [HTML5 Boilerplate](http://html5boilerplate.com).

## Downloading the skeleton
First, check that you have installed and configured a web server (such as Apache) with PHP 5.3.3 or higher. Then use composer to create your project:

`$ composer create-project damel/flight-skeleton path/to/install`

You'll find this structure:

```
path/to/install
├── app
│   ├── config
│   │   ├── config.php
│   │   └── routes.php
│   ├── logs
│   └── resources
│       └── templates
│           ├── 404.php
│           ├── index.php
│           └── layout.php
├── cli
├── public
│   ├── css
│   │   ├── main.css
│   │   └── normalize.css
│   ├── img
│   ├── js
│   │   ├── modernizr-2.6.2.min.js
│   │   └── plugins.js
│   ├── .htaccess
│   ├── apple-touch-icon*.png
│   ├── crossdomain.xml
│   ├── favicon.ico
│   ├── humans.txt
│   ├── index.php
│   └── robots.txt
├── src
│   └── Acme
│       └── Demo
│           └── Controller
│               └── Demo.php
├── vendor
│   ├── composer
│   ├── mikecao
│   └── autoload.php
├── composer.json
├── composer.lock
├── LICENSE
└── README.md
```

## Creating the application
If you want to define global constants or other settings, you can use the `config.php` in `app/config/`.

### Routing
To define your routes, use the file `app/config/routes`:

```php
<?php

//Routes of the application.
\Flight::route('/', array('\Acme\Demo\Controller\Demo', 'index'));
```

### Controllers
Place your code in the `src` folder. All classes from here are autoloaded by their namespace. For an example, have a look in the demo code in `src/Acme/demo/Controller/Demo.php`. As you can see, the controller uses the namespace `Acme\Demo\Controller`.

### Templates
Templates are loaded by default from `app/resouces/templates/`. You can change this by editing the path in `app/config/config.php`.

# License
The skeleton is licensed under the [MIT](http://www.opensource.org/licenses/mit-license.php) license.
