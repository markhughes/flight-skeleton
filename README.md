# Flight Skeleton
This skeleton provides a quick start for the development of an application with the [Flight](http://flightphp.com) PHP microframework.

## Downloading the skeleton
First, check that you have installed and configured a web server (such as Nginx) with PHP 7 or higher. Then use git to clone this repo:

`$ git clone https://github.com/markhughes/flight-skeleton.git my-app-name`

## Creating the application
If you want to define global constants or other settings, you can use the `config.php` in `app/config/`.

### Routing
To define your routes, use the file `app/config/routes`:

```php
<?php

Flight::route("/", array("\Acme\Demo\Controller\Demo", "index"));
```

### Controllers
Place your code in the `src` folder. All classes from here are autoloaded by their namespace. For an example, have a look in the demo code in `src/Acme/demo/Controller/Demo.php`. As you can see, the controller uses the namespace `Acme\Demo\Controller`.

### Templates
Twig templates are loaded by default from `app/resouces/views/`. You can change this by editing the path in `app/config/config.php`.

# License
The skeleton is licensed under the [MIT](http://www.opensource.org/licenses/mit-license.php) license.
